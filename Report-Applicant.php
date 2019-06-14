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
    <link rel="stylesheet" type="text/css" href="css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <?php require 'require/sidebar-CRO.php'?>
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
                <li><a href="#">Reports</a></li>
                <li class="active"><a href="Report-Applicant-Summary.php">Applicant Status Monitoring </a></li>
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
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">FSEC</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">FSIC</a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">

                                        <!--Start Default Table-->
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <table class="table datatable" id="CertificationDatTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Applicant No</th>
                                                            <th>Owner Name</th>
                                                            <th>Business Name</th>
                                                            <th>Location</th>
                                                            <th>Date Applied</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query3 = $conn->query("select * from `application` where application_type = 'FSEC' && year = '$year'") or die(mysqli_error());
while ($fetch3 = $query3->fetch_array()) {
    $month = date("m", strtotime($fetch3['month']));
    $date = date("F j, Y", strtotime($fetch3['date_applied']));
    $app = $fetch3['year'] . '-' . $month . '-' . $fetch3['application_no'];
    $app2 = $fetch3['application_no'];
    ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $fetch3['year'] . '-' . $month . '-' . $fetch3['application_no'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch3['owner_name'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch3['business_name'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch3['establishment_address'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $date?>
                                                            </td>
                                                            <td>
                                                                <a href="Report-AppRecView.php?id=<?php echo $fetch3['application_no']?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                                                                    <i class="fa fa-eye"></i> Preview</a> </br>
                                                                <!-- <a href="Reports/EvaluationChecklist.php?id=<?php echo $app;?>"> <i class="fa fa-eye"></i>  Evaluation Checklist</a> -->
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
                                    <div class="tab-pane" id="tab-second">
                                        <!--Start Default Table-->
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <table class="table datatable" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Applicant No</th>
                                                            <th>Owner Name</th>
                                                            <th>Business Name</th>
                                                            <th>Location</th>
                                                            <th>Date Applied</th>
                                                            <th>Type of Notice</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query2 = $conn->query("select * from `application` where application_type = 'FSIC' && year = '$year'") or die(mysqli_error());
while ($fetch2 = $query2->fetch_array()) {
    $month = date("m", strtotime($fetch2['month']));
    $date = date("F j, Y", strtotime($fetch2['date_applied']));
    $appno = $fetch2['application_no'];
    $app =  $fetch2['year'] . '-' . $month . '-' . $fetch2['application_no'];
    $app2 = $fetch2['application_no'];
?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $app ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch2['owner_name'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch2['business_name'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch2['establishment_address'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $date?>
                                                            </td>
                                                            <?php 
    $query3 = $conn->query("select * from `inspection_order` where applicantsnumber = '$appno' ") or die(mysqli_error());
    $fetch3 = $query3->fetch_array();
    if ($fetch3['status'] == 'for compliance') {
        $type = 'comply';
    }
    else if ($fetch3['status'] == 'issued NTCV') {
        $type = 'cv';
    }
    else if ($fetch3['status'] == 'issued NTC') {
        $type = 'cv';
    }
    ?>

                                                            <td>
                                                                <?php echo $fetch3['status'] ;?>
                                                            </td>
                                                            <td>
                                                                <a href="Report-AppRecView.php?id=<?php echo $appno?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                                                                    <i class="fa fa-eye"></i> Preview</a> </br>
                                                                </br>
                                                                <a href="Reports/issue-notice-<?php echo $type?>.php?id=<?php echo $fetch3['io_no']?>" class="btn btn-default btn-sm">
                                                                    <i class="fa fa-eye"></i> Issue Notice</a>
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
    <!-- END PAGE CONTAINER -->

    <!--Start MODAL-->
    <div class="modal fade" id="buildModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Pending List(Evaluation Checklist)</h3>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class=col-md-4>
                                    <input type="text" class="form-control" id="assessSearch" placeholder="Search">
                                </div>
                            </div>
                            <br>
                            <br>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Application No.</th>
                                        <th>Date Applied</th>
                                        <th>Time-In</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2018-1-1</td>
                                        <td>1-2-2018</td>
                                        <td>1-3-18/11:30am</td>
                                        <td><a href="inspection-order.html"><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></a></td>
                                    </tr>
                                    <tr>
                                        <td>2018-1-1</td>
                                        <td>1-2-2018</td>
                                        <td>1-3-18/11:30am</td>
                                        <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>2018-1-1</td>
                                        <td>1-2-2018</td>
                                        <td>1-3-18/11:30am</td>
                                        <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>2018-1-1</td>
                                        <td>1-2-2018</td>
                                        <td>1-3-18/11:30am</td>
                                        <td><button class="btn btn-info"><i class="glyphicon glyphicon-user"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End MODAL-->
            <!-- MESSAGE BOX-->
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
            <!-- END MESSAGE BOX-->

            <!-- START PRELOADS -->
            <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
            <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
            <!-- END PRELOADS -->

            <!-- START SCRIPTS -->
            <!-- START PLUGINS -->
            <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
            <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>

            <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
            <!-- END PLUGINS -->

            <!-- START THIS PAGE PLUGINS-->
            <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
            <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
            <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>


            <script src="assets/js/dataTables/jquery.dataTables.js"></script>
            <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>-->
            <script>
                $(document).ready(function () {
                    $('#dataTables-example').dataTable();
                });
            </script>
            <script>
                $(document).ready(function () {
                    $("#pyear").on('change', function () {
                        var year = $(this).val();
                        window.location = 'Report-Applicant.php?year=' + year;
                    });
                });
            </script>

            <!-- END THIS PAGE PLUGINS-->

            <!-- START TEMPLATE -->
            <script type="text/javascript" src="js/settings.js"></script>

            <script type="text/javascript" src="js/plugins.js"></script>
            <script type="text/javascript" src="js/actions.js"></script>

            <script type="text/javascript" src="js/demo_dashboard.js"></script>
            <!-- END TEMPLATE -->

            <!-- END SCRIPTS -->
</body>

</html>