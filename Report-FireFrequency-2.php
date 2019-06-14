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
        <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
        <?php require 'loadchart/firefrequency.php'?>
        <!-- EOF CSS INCLUDE -->   
        <style>
        @media print{
                @page{
                    size: letter;
                }
                .croheading{
                    display: inline !important;
                }
                .listheading{
                    display: inline !important;
                }
            }

        @media prints{
                @page{
                    size: letter;
                }

            }

            #print{
                height:100%;
                margin: 0px 0px 0px 0px;
            }
            #prints{
                height:100%;
                margin: 0px 0px 0px 0px;
            }
        </style>                                 
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Reports</a></li>                    
                    <li class="active"><a href="Report-FireFrequency.php">Fire Frequency</a></li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#graphicaltab" data-toggle="tab">Graphical</a></li>
                                    <li><a href="#fireincident" data-toggle="tab">Fire Incident</a></li>
                                    <li><a href="#barangayreport" data-toggle="tab">Barangay Report</a></li>                                    
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="graphicaltab">
                                        <div id="chartContainer" style="width: 100%; height: 300px"></div>
                                    </div>

                                    <div class="tab-pane" id="fireincident">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <ul class="panel-controls">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#FireFreqInc"><i class="fa fa-plus"></i>Add Incident</button>
                                                </ul>                             
                                            </div>
                                        </div>
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>Incident Date</th>
                                                    <th>Incident Time</th>
                                                    <th>No. of Structures Affected</th>
                                                    <th>Type of Area</th>
                                                    <th>No. of Civilian Injured</th>
                                                    <th>Total Casualties</th>
                                                    <th>Location</th>
                                                    <th>Barangay</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    require 'require/databaseconnection.php';
            $query = $conn->query("SELECT * from `fire_incident`") or die(mysqli_error());
            while ($fetch = $query->fetch_array()) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $fetch['dateofincident'];?> </td>
                                                    <td><?php echo $fetch['time'];?> </td>
                                                    <td><?php echo $fetch['structures'];?> </td>
                                                    <td><?php echo $fetch['areatype'];?> </td>
                                                    <td><?php echo $fetch['civilianinjured'];?> </td>
                                                    <td><?php echo $fetch['casualties'];?> </td>
                                                    <td><?php echo $fetch['location'];?> </td>
                                                    <td><?php echo $fetch['barangay'];?> </td>
                                                </tr>
                                                <?php
            }
            $conn->close();
                                                ?>
                                            </tbody>

                                        </table>
                                        <!--Start Default Table-->
                                    </div>

                                    <div class="tab-pane" id="barangayreport">
                                    <button class="btn btn-success btn-md" onclick="printContent('print')"><span class="fa fa-print"></span> Print </button>
                                    <div id="print">
                                        <div class="listheading" style="display: none">
                                                <?php
                                        date_default_timezone_set('Asia/Manila');
                                                        $today = date("M-d-Y");
                                                ?>
                                                <br>
                                                <h4>Republic of the Philippines</h4>
                                                <h3>BUREAU OF FIRE PROTECTION</h3>
                                                <h4>Bacolod City</h4>
                                                <br>
                                                <h4>
                                                    <?php echo $today?>
                                                </h4>
                                                <br>
                                                <br>
                                                <h3> Number of Incidents and Total Casualties for the Year 2019 </h3>
                                                <br>
                                                <br>
                                            </div>
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>Barangay Name</th>
                                                    <th><center>Number of Incidents</center></th>
                                                    <th><center>Total Casualties</center></th>
                                                    <th>Record List</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                                        
                                                <?php
                                                require 'require/databaseconnection.php';
                                                $query = $conn->query("SELECT *, count(*) as total from `fire_incident` GROUP BY barangay") or die(mysqli_error());
                                                while ($fetch = $query->fetch_array()) {
                                                    $query2 = $conn->query("SELECT count(*) as grandtotal from `fire_incident`") or die(mysqli_error());
                                                    $fetch2 = $query2->fetch_array();
                                                    $formattedNum = number_format($fetch2['grandtotal']);
                                                    $R5 = $fetch['barangay'];
                                                    $q5 = $conn->query("SELECT sum(casualties) as total FROM `fire_incident` WHERE `barangay` = '$R5' && `year` = '$year' group by barangay") or die(mysqli_error());
                                                    $f5 = $q5->fetch_array();
                                                    $FR5 = $f5['total'];
                                                    $querytotal = $conn->query("SELECT sum('$FR5') as grandtotal from `fire_incident`") or die(mysqli_error());
                                                    $fetchtotal = $querytotal->fetch_array();
                                                    $formattedtotal = number_format($fetchtotal['grandtotal']); 
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $fetch['barangay'];?>
                                                    </td>

                                                    <td>
                                                        <center> <span class="label label-success label-form">  <?php echo $fetch['total']?> </span> </center>
                                                    </td>
                                                    <td>
                                                        <center> <span class="label label-success label-form">  <?php echo $FR5;?> </span> </center>
                                                    </td>
                                                    <td>
                                                        <a href="#barangay<?php echo $fetch['id']; ?>" data-target="#barangay<?php echo $fetch['id']; ?>" data-toggle="modal" class="btn btn-info btn-sm">View Record</a>
                                                    </td>

                                                </tr>
                                                <?php
                                                }
                                                $conn->close();
                                                ?>
                                            </tbody>
                                        </table>
                                        </div>
                                        <hr>
                                        <br><br>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label"><h3> Grand Total 
                                                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<span class="label label-danger label-form"><?php echo $formattedNum;?> </span>  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  <span class="label label-danger label-form"><?php echo $formattedtotal; ?>  </span><h3></label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END DEFAULT DATATABLE -->
                                </div>
                            </div>                                                         
                        </div>
                        <!-- END PAGE CONTENT WRAPPER -->                                
                    </div>            
                    <!-- END PAGE CONTENT -->
                </div>
                <!-- END PAGE CONTAINER -->
                <?php require 'modals/Fireincident.php'?>
                <?php require 'modals/barangayreport.php'?>
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
                <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>

                <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>


                <script src="assets/js/dataTables/jquery.dataTables.js"></script>
                <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
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






