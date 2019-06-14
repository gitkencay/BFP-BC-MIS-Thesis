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
        <?php require 'require/sidebar-CRO.php'?>
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <?php require 'require/header.php'?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Distress Call</a></li>
                <li class="active"><a href="Distress-SMSandCall.php">SMS Logs</a></li>
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
                        <!--Start Default Table-->
                        <div class="panel-body">
                            <table class="table datatable" id="dataTables-example-emp">
                                <thead>
                                    <tr>
                                        <th>Application No.</th>
                                        <th>Owner Name</th>
                                        <th>Transaction Status</th>
                                        <th>Date and Time</th>
                                        <th>Message Details</th>
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

                                            $query = $conn->query("SELECT * from `messages` where `date` LIKE '%$year%'") or die(mysqli_error());
                                                while ($fetch = $query->fetch_array()) {
                                                    $month = date("m", strtotime($fetch['date']));
                                                    $year2 = date("Y", strtotime($fetch['date']));
                                            ?>
                                    <tr>
                                        <td>
                                            <?php echo $year2 . "-" . $month . "-" . $fetch['application_no']?>
                                        </td>
                                        <td>
                                            <?php echo $fetch["owner_name"]?>
                                        </td>
                                        <td>
                                            <?php echo $fetch["transaction"]?>
                                        </td>
                                        <td>
                                            <?php echo $fetch["date"]?>
                                        </td>
                                        <td>
                                        <a href="#Message_Alert<?php echo $fetch["application_no"];?>"><button href="#Message_Alert<?php echo $fetch["application_no"];?>"
                                                data-target="#Message_Alert
                                                <?php echo $fetch["application_no"];?>" type="button" class="btn
                                                btn-info" data-toggle="modal" >
                                                <i class="fa fa-eye"> </i> View </button> </a>
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

    <?php require 'modals/message_detail.php'?>

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

    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>


    <!--<script src="assets/js/dataTables/jquery.dataTables.js"></script>
         <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>-->
    <script>
        $(document).ready(function () {
            $('#dataTables-example-emp').dataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#pyear").on('change', function () {
                var year = $(this).val();
                window.location = 'Distress-SMSandCall.php?year=' + year;
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