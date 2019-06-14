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
        <?php require 'require/sidebar-Inspection-CRO.php'?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul id="hozironNav" class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="pages-login.html" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
                </li>
                <!-- END SIGN OUT -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Transaction</a></li>
                <li class="active"><a href="Transaction-Scheduling.php">Scheduling</a></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">

                        <!--Start Default Table-->
                        <div class="panel-body">
                            <table class="table datatable" id="dataTables-inspection">
                                <thead>
                                    <tr>
                                        <th>Inspection Order No.</th>
                                        <th>Inspector Name</th>
                                        <th>Time</th>
                                        <th>Inspection Date</th>
                                        <th>Days Left</th>
                                        <th>Status</th>
                                        <th>Date Updated</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                                        require 'require/databaseconnection.php';
                                                        $current = new dateTime();
                                                        $query = $conn->query("SELECT * FROM `inspection_schedule` ORDER BY `inspection_schedule`.`io_schedule` DESC") or die(mysqli_error());
                                                            while ($fetch = $query->fetch_array()) {
                                                               $dateapplied = date(" D - F j Y", strtotime($fetch['inspection_date']));
                                                               $datetime1 = new DateTime($fetch['inspection_date']);
                                                               $interval = date_diff($current, $datetime1);
                                                               $interval2 = $interval->format('%R%a days')
                                                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $fetch['io_no'] ?>
                                        </td>
                                        <td>
                                            <?php echo $fetch['inspectors'] ?>
                                        </td>
                                        <td>
                                            <?php echo $fetch['inspection_time'] ?>
                                        </td>
                                        <td>
                                            <?php echo $dateapplied?>
                                        </td>
                                        <td>
                                            <?php 
                                                                 if ($interval2 >= 0 ){
                                                                    echo "<span class='badge badge-danger'>". $interval->format('%R%a days') . "</span>" ;
                                                                }
                                                                 if ($interval2 < 0){
                                                                    echo "<span class='badge badge-danger'>". $interval->format('%R%a days') . "</span>" ;
                                                                }
                                                                ?>
                                        </td>
                                        <td>
                                            <?php if ($fetch['status'] == 'Complete') {
        echo "<span class='badge badge-success'>Complete</span>";
    }

    if ($fetch['status'] == 'Pending') {
        echo "<span class='badge badge-danger'>" . $fetch['status'] . "</span>";
    }
    ?>
                                            <button href="#edit_status<?php echo $fetch['io_schedule']; ?>" data-target="#edit_status<?php echo $fetch['io_schedule']; ?>"
                                                data-toggle="modal"> <i class="fa fa-edit"></i></button>
                                        </td>
                                        <td>
                                            <?php if ($fetch['date_updated'] == 'Pending') {
        echo "<span class='badge badge-danger'>Pending</span>";
    }else{
        echo "<span class='badge badge-success'>".$fetch['date_updated']."</span>";
    }
    
    ?>
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



    <!-- END PAGE CONTENT -->
    <!-- END PAGE CONTAINER -->

    <!--Start MODAL-->
    <?php require 'modals/editStatus.php'?>
    <!--End MODAL-->
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
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>


    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>-->
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
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