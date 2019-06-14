<?php
require_once 'require/logincheck.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>BFP BACOLOD MIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/cropped-bfp-new-logo-1.png">
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->

        <link rel="stylesheet" href="css/loader.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>



    </head>
    <script type="text/javascript">
//paste this code under the head tag or in a separate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".load-Nav").fadeOut("slow");;
    });
</script>

    <body>
        <div class="load-Nav" id="load-Nav-id"></div>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <?php require 'require/sidebar-Assessor.php'?>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul id="hozironNav" class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Transaction</a></li>
                    <li class="active"><a href="Transaction-Assessment.php">Assessment & Payment</a></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <div class="form-group">
                            <select class="form-control select input-sm" data-style="btn-primary" id="pyear">
                                <option selected disabled>Select Year</option>
                                <?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `application` group by year") or die(mysqli_error());

while ($fetch = $query->fetch_array()) {
    ?>
                                <option value="<?php echo $fetch['year']; ?>">
                                    <?php echo $fetch['year'] ?>
                                </option>
                                <?php
}
?>
                            </select>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">FSEC</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">FSIC</a></li>
                                </ul>
                                    <div class="panel-body tab-content">

                                        <!--Start FSEC TAB-->
                                        <div class="tab-pane active" id="tab-first">

                                            <!--Start Default Table-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <ul class="panel-controls">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#View-FSEC-Reg"><i class="fa fa-plus"></i>Create Assessment</button>
                                                        <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#View-FSEC-Reg">Create Assessment<i class="fa fa-plus"></i>-->
                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>OPS No</th>
                                                        <th>Applicant No</th>
                                                        <th>Owner Name</th>
                                                        <th>Business Name</th>
                                                        <th>Status</th>
                                                        <th>Date Applied</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
require 'require/databaseconnection.php';
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("select * from `assessment` where type_of_certificate = 'FSEC' && year = '$year'") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    $month = date("m", strtotime($fetch['month']));
    ?>
                                                    <tr>
                                                        <td><?php echo "OPS-" . $fetch['year'] . '-' . $month . '-' . $fetch['ops_no'] ?></td>
                                                        <td><?php echo $fetch['application_no'] ?></td>
                                                        <td><?php echo $fetch['application_name'] ?></td>
                                                        <td><?php echo $fetch['business_name'] ?></td>
                                                        <td><?php if ($fetch['status'] == 'Complete') {
        echo "<span class='badge badge-success'>Complete</span>";
        $ViewStat = 'Transaction-ViewAssessment';
    }

    if ($fetch['status'] == 'Pending') {
        echo "<span class='badge badge-danger'>" . $fetch['status'] . "</span>";
        $ViewStat = 'Transaction-ViewPendingAssessment';
    }

    if ($fetch['status'] == 'Incomplete') {
        echo "<span class='badge badge-danger'>" . $fetch['status'] . "</span>";
    }

    if ($fetch['status'] == 'Assessed') {
        echo "<span class='badge badge-info'>" . $fetch['status'] . "</span>";
    }

    ?></td>
                                                        <td><?php echo $fetch['date_applied'] ?></td>
                                                        <td>
                                                            <a href="<?php echo $ViewStat ?>.php?ops_no=<?php echo $fetch['ops_no'] ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> View</a>
                                                            <a href="Reports/receipt.php?id=<?php echo $fetch['ops_no']?>"class="btn btn-sm btn-info"> <i class="fa fa-print"></i> Receipt </a>    
                                                        </td>
                                                    </tr>
                                                    <?php
}
$conn->close();
?>
                                                </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- END DEFAULT DATATABLE -->
                                        </div>

                                        <!--Start FSIC TAB-->
                                        <div class="tab-pane" id="tab-second">

                                            <!--Start Default Table-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <ul class="panel-controls">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#View-FSIC-Reg"><i class="fa fa-plus"></i>Create Assessment</button>
                                                        <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#View-FSEC-Reg">Create Assessment<i class="fa fa-plus"></i>-->
                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>OPS No</th>
                                                        <th>Applicant No</th>
                                                        <th>Applicant Name</th>
                                                        <th>Business Name</th>
                                                        <th>Status</th>
                                                        <th>Date Applied</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
require 'require/databaseconnection.php';
$query = $conn->query("select * from `assessment` where type_of_certificate = 'FSIC' && year = '$year'") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    $month = date("m", strtotime($fetch['month']));
    ?>
                                                    <tr>
                                                        <td><?php echo "OPS-" . $fetch['year'] . '-' . $month . '-' . $fetch['ops_no'] ?></td>
                                                        <td><?php echo $fetch['application_no'] ?></td>
                                                        <td><?php echo $fetch['application_name'] ?></td>
                                                        <td><?php echo $fetch['business_name'] ?></td>
                                                        <td><?php if ($fetch['status'] == 'Complete') {
        echo "<span class='badge badge-success'>Complete</span>";
    }

    if ($fetch['status'] == 'Pending') {
        echo "<span class='badge badge-danger'>" . $fetch['status'] . "</span>";
    }

    if ($fetch['status'] == 'Incomplete') {
        echo "<span class='badge badge-danger'>" . $fetch['status'] . "</span>";
    }

    if ($fetch['status'] == 'Assessed') {
        echo "<span class='badge badge-info'>" . $fetch['status'] . "</span>";
    }

    ?></td>
                                                        <td><?php echo $fetch['date_applied'] ?></td>
                                                        <td>
                                                            <a href="Transaction-ViewAssessment.php?ops_no=<?php echo $fetch['ops_no'] ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> View</a>
                                                            <a href="Reports/receipt.php?id=<?php echo $fetch['ops_no']?>"  class="btn btn-sm btn-info"> <i class="fa fa-print"></i> Receipt </a>
                                                        </td>
                                                    </tr>
                                                    <?php
}
$conn->close();
?>
                                                </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- END DEFAULT DATATABLE -->

                                        </div>
                                    </div>
                                   
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <?php require 'modals/viewPendingFSEC.php'?>
        <?php require 'modals/viewPendingFSIC.php'?>
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="index.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Start Modal View FSEC-REG-->
        <!--End Modal View FSEC REG-->
        <script>
            $(document).ready(function () {
                $("#pyear").on('change', function () {
                    var year = $(this).val();
                    window.location = 'Transaction-Assessment.php?year=' + year;
                });
            });
        </script>
                <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
                <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
                <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
                <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
                <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
                <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
                <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
                <script type="text/javascript" src="js/plugins.js"></script>
                <script type="text/javascript" src="js/actions.js"></script>
                <script type="text/javascript" src="js/settings.js"></script>
                </body>
            </html>






