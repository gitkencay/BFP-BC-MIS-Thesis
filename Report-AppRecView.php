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
        <style>
            @media print{
                @page{
                    size: letter;
                    margin: 0px 0px 0px -100px;
                }

                .hidden-header{
                    display: inline !important;
                }
            }
            #print{
                height:100%;
                margin:auto;
            }
        </style>
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
                        <a href="pages-login.html" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
                    </li> 
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <?php
    require 'require/databaseconnection.php';
    $year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
            $query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[id]' && year = '$_GET[year]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
            date_default_timezone_set('Asia/Manila');
            $month = date("m", strtotime($fetch['month']));
            $date = date("F j, Y", strtotime($fetch['date_applied']));
            $today = date("M-d-Y");
                ?>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="Report-Applicant.php">Applicant Record Report</a></li>                    
                    <li class="active"> <label><?php echo $fetch['owner_name']?> </label> </a></li>
            </ul>
        <!-- END BREADCRUMB -->                       

        <!-- PAGE CONTENT WRAPPER -->

        <div class="panel panel-default">
                            <div class="panel-heading">
                                <ul class="panel-controls">
                                    <button class="btn btn-info btn-md" onclick="printContent('print')"><span class="fa fa-print"></span>
                                        Print </button>
                                        <a href="Report-Applicant.php"<button class="btn btn-primary btn-md" ><span class="fa fa-mail-reply"></span>
                                        Back </button> </a>
                                </ul>
                            </div>
                        </div>
        <div class="page-content-wrap">
            <div class="AppRecOverView">
                <h3 id="appRec">Applicant No: <?php echo $fetch['year'] . '-' . $month . '-' .$fetch['application_no']?></h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                            <thead>
                                <tr>
                                    <th><h3><label>Overview</label></h3></th>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="app-name" class="col-sm-5 control-label">Owner Name&nbsp;&nbsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="app-nme" value="<?php echo $fetch['owner_name']?>"readonly>   
                                        </div>
                                    </th>
                                    <th>
                                        <label for="bus-name" class="col-sm-5 control-label">Business Name&nbsp;&nbsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="bus-name"  value="<?php echo $fetch['business_name']?>"readonly>  
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="location" class="col-md-8 control-label"><br>Establishment Address&nbsp;&nbsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="location"  value="<?php echo $fetch['establishment_address']?>"readonly>  
                                        </div>
                                    </th>
                                    <th>
                                        <label for="cert" class="col-md-8 control-label"><br>Certificate Applying For&nbsp;&nbsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cert"  value="<?php echo $fetch['application_type']?>"readonly>  
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="cert" class="col-md-8 control-label"><br>Barangay&nbsp;&nbsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cert"  value="<?php echo $fetch['barangay_name']?>"readonly>  
                                        </div> 
                                    </td>
                                    <td>
                                        <label for="cert" class="col-md-8 control-label"><br>Date Applied&nbsp;&nbsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cert"  value="<?php echo $date?>"readonly>  
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="cert" class="col-md-8 control-label"><br>Purpose&nbsp;&nbsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cert" placeholder="Business Permit" disabled=""> 
                                        </div>
                                    </td>
                                    <td>
                                        <label for="cert" class="col-md-8 control-label"><br>Building Type&nbsp;&nbsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cert" value="<?php echo $fetch['building_type']?>"readonly> 
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="print">
                <div class="appRecTransac">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                            <label class="hidden-header" style="display: none">
                                                                <?php
                                                                date_default_timezone_set('Asia/Manila');
                                                                $today = date("M-d-Y");
                                                                ?>
                                                <br>
                                                <h4 style="text-align:center;">Republic of the Philippines</h4>
                                                <h3 style="text-align:center;">BUREAU OF FIRE PROTECTION</h3>
                                                <h4 style="text-align:center;">Bacolod City</h4>
                                                <br>
                                                <h4><?php echo $today?></h4>
                                                <br>

                                                <h4><strong><?php echo $fetch['owner_name']?></strong></h4>
                                                <h4><strong><?php echo $fetch['business_name']?></strong></h4>
                                                <br>
                                            </label>
                            <label class="title"><h3>Transactions Status</h3></label>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>File Location</th>
                                        <th>Officer Type</th>
                                        <th>Officer Incharge</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    require 'require/databaseconnection.php';
                        $query = $conn->query("select * from `application` WHERE `application_no` = '$_GET[id]' ") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $month = date("m", strtotime($fetch['month']));
                        $date = date("F j, Y", strtotime($fetch['date_applied']));
                        $time = date("g:i a", strtotime($fetch['date_applied']));
                        $application = $fetch['application_no'];
                        $application2 = $fetch['year'].'-'. $month.'-'.$fetch['application_no'];
                        $query2 = $conn->query("select * from `assessment` WHERE `application_no` = '$application' ") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                        $date2 = date("F j, Y", strtotime($fetch2['date_applied']));
                        $time2 = date("g:i a", strtotime($fetch2['date_applied']));
                        $query3 = $conn->query("select * from `inspection_report` WHERE `application_no` = '$application2' ") or die(mysqli_error());
                        $fetch3 = $query3->fetch_array();
                        $icro = $fetch3['inspection_cro'];
                        $date4 = date("F j, Y", strtotime($fetch3['date_created']));
                        $time4 = date("g:i a", strtotime($fetch3['date_created']));

                        $query4 = $conn->query("SELECT * from `evaluation_checklist` WHERE application_no LIKE '%$application'") or die(mysqli_error());
                        $fetch4 = $query4->fetch_array();
                        $evalcro = $fetch4['plan_evaluator'];
                        $date5 = date("F j, Y", strtotime($fetch4['date_received']));
                        $time5 = date("g:i a", strtotime($fetch4['date_received']));

                                    ?>
                                    <tr>
                                        <td>Applicant Registration</td>
                                        <td>Customer Relations Officer</td>
                                        <td><?php echo $fetch['croname']?></td>
                                        <td><?php echo $date?></td>
                                        <td><?php echo $time?></td>
                                    </tr>
                                    <tr>
                                        <td>Assessment & Payment</td>
                                        <td>Fire Code Assessor</td>
                                        <td><?php echo $fetch2['assessor_name']?></td>
                                        <td><?php echo $date2?></td>
                                        <td><?php echo $time2?></td>
                                    </tr>
                                    
                        <?php
                        if($fetch['application_type'] == 'FSEC'){
                            echo "
                            <tr>
                                <td>Building Evaluation</td>
                                <td>Evaluator</td>
                                <td>$evalcro</td>
                                <td> $date5 </td>
                                <td> $time5 </td>
                            </tr>
                             ";
                        }elseif($fetch['application_type'] == 'FSIC'){
                            echo "
                                <tr>
                                    <td>Inspection Order Form</td>
                                    <td>Inspection-CRO</td>
                                    <td> $icro </td>
                                    <td> $date4 </td>
                                    <td> $time4 </td>
                                </tr>
                                 ";
                                 echo "
                                <tr>    
                                    <td>After Inspection Report</td>
                                    <td>Inspector</td>
                                    <td> $icro </td>
                                    <td> $date4 </td>
                                    <td> $time4 </td>
                                </tr>
                                ";
                        }
                        
                        
                        ?>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER -->

        <!--Start MODAL-->

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

        <script>
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
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


        <!--<script src="assets/js/dataTables/jquery.dataTables.js"></script>
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

