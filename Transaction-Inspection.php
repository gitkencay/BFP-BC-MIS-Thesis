<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>BFP BACOLOD MIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <?php require 'require/sidebar.php'?>
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
                    <li class="active"><a href="Transaction-Inspection.php">Inspection & Compliance</a></li>
                </ul>
            <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                     <div class="row">
                        <div class="col-md-12">

                                           <!--Start Default Table-->
                                             <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <ul class="panel-controls">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#inspModal"><i class="fa fa-plus"></i>Inpection Order Form</button>
                                                    </ul>
                                                 </div>
                                             </div>
                                                <div class="panel-body">
                                                    <table class="table datatable" id="dataTables-inspection">
                                                        <thead>
                                                            <tr>
                                                            <th>Inspection Order No</th>
                                                            <th>Inspection Report No</th>
                                                            <th>Application No</th>
                                                            <th>Owner Name</th>
                                                            <th>Action</th>
                                                            <th>Type of Notice</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
require 'require/databaseconnection.php';
$query = $conn->query("select * from `inspection_report`") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    $month = date("m", strtotime($fetch['month']));
    $appno_2 = $fetch['application_no'];
    $query3= $conn->query("SELECT * FROM `issue_notice`") or die(mysqli_error());
    $fetch3 = $query3->fetch_array();
    ?>
                                                            <tr>
                                                                <td><?php echo 'IO'.'-'.$fetch['year'] . '-' . $month . '-' . $fetch['ir_no'] ?></td>
                                                                <td><?php echo 'IR'.'-'.$fetch['year'] . '-' . $month . '-' . $fetch['ir_no'] ?></td>
                                                                <td><?php echo $fetch['application_no'] ?></td>
                                                                <td><?php echo $fetch['owner_name'] ?> </td>

                                                                <td>
                                                                    <a href="inspection-orderView.php?ir_no=<?php echo $fetch['ir_no'] ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> View</a>
                                                                </td>
                                                                <td>
                                                                    <a href="#view_notice<?php echo $appno_2; ?>" data-target="#view_notice<?php echo $appno_2; ?>" data-toggle="modal" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> Issue Notice</a>
                                                                    
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

                <!-- END PAGE CONTENT WRAPPER -->

            <!-- END PAGE CONTENT -->
        <!-- END PAGE CONTAINER -->
        <?php require 'modals/ViewIssueNotice.php'?>
        <!--Start MODAL-->
        <div class="modal fade" id="inspModal" role="dialog">
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
                                                                        <th>Applicant Name</th>
                                                                        <th>Date Applied</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                <?php
require 'require/databaseconnection.php';
$query2 = $conn->query("select * from `application` where assessment_status = 'Assessed' && application_type = 'FSIC' ") or die(mysqli_error());
while ($fetch2 = $query2->fetch_array()) {
    $month2 = date("m", strtotime($fetch2['month']));
    ?>
                                                                <tr>
                                                                    <td><?php echo $fetch2['year'] . '-' . $month2 . '-' . $fetch2['application_no'] ?></td>
                                                                    <td><?php echo $fetch2['application_name'] ?></td>
                                                                    <td><?php echo $fetch2['date_applied'] ?></td>
                                                                    <td>
                                                                    <a href="inspection-order.php?application_no=<?php echo $fetch2['application_no'] ?>" class="btn btn-sm btn-info">Inspect</a>
                                                                    </td>
                                    <?php
}
$conn->close();
?>
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
                                                </div>
        </div>

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
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
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
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
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






