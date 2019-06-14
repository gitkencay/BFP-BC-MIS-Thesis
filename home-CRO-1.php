<?php
require_once 'require/logincheck.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>BFP-BC MIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->      
        <link rel="stylesheet" type="text/css" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
        <?php require 'loadchart/barangay.php'?>  
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
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">

                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">On-Going</div>
                                        <div class="widget-int">342</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Completed</div>
                                        <div class="widget-int">438</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Expired</div>
                                        <div class="widget-subtitle">FSIC</div>
                                        <div class="widget-int">257</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Renewed</div>
                                        <div class="widget-subtitle"></div>
                                        <div class="widget-int">254</div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->

                        </div>
                        <div class="col-md-3">

                            <!-- START WIDGET Total Applicants -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <?php
    $year = date('Y');
        require 'require/databaseconnection.php';
        $query = $conn->query("SELECT count(*) as total FROM `application` where `year` = '$year'") or die(mysqli_error());
        $fetch = $query->fetch_array();?>
                                    <div class="widget-int num-count"><?php echo $fetch['total']?></div>
                                    <div class="widget-title">TOTAL APPLICANTS</div>
                                    <div class="widget-subtitle">2018</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>    
                            <!-- END WIDGET Total Applicants -->

                        </div>
                        <div class="col-md-3">

                            <?php

    $query = $conn->query("SELECT count(*) as total FROM `officer`") or die(mysqli_error());
                                        $fetch = $query->fetch_array();
                            ?>
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php echo $fetch['total']?></div>
                                    <div class="widget-title">OFFICERS</div>
                                    <div class="widget-subtitle">2018</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->

                        </div>
                        <div class="col-md-3">

                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->

                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    <div class="row">
                        <!--Start graph -->
                        <div class="col-md-8">
                            <div id="chartContainer1" style="width: 100%; height: 430px"></div>
                        </div>
                        <!-- end graph -->

                        <div class="col-md-4">

                            <!-- START PROJECTS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Transaction</h3>
                                        <span>Transaction activity</span>
                                    </div>                                    
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="40%">Transaction</th>
                                                    <th width="20%">Status</th>
                                                    <th width="30%">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <!--Application-->
                                                <tr>
                                                    <td rowspan="2"><strong>Application</strong></td>
                                                    <td><span class="label label-danger">Pending</span></td>

                                                    <td>10</td>

                                                </tr>
                                                <tr>
                                                    <td><span class="label label-warning">Completed</span></td>
                                                    <td>10</td>
                                                </tr>   

                                                <!--Assessment-->

                                                <tr>
                                                    <td rowspan="2"><strong>Assessment & Payment</strong></td>
                                                    <td><span class="label label-danger">Pending</span></td>

                                                    <td>10</td>

                                                </tr>
                                                <tr>
                                                    <td><span class="label label-warning">Completed</span></td>
                                                    <td>10</td>
                                                </tr>  

                                                <!--Inspection-->

                                                <tr>
                                                    <td rowspan="2"><strong>Inspection & Compliance</strong></td>
                                                    <td><span class="label label-danger">Pending</span></td>

                                                    <td>10</td>

                                                </tr>
                                                <tr>
                                                    <td><span class="label label-warning">Completed</span></td>
                                                    <td>10</td>
                                                </tr>  

                                                <!--Evaluation-->

                                                <tr>
                                                    <td rowspan="2"><strong>Building Evaluation</strong></td>
                                                    <td><span class="label label-danger">Pending</span></td>

                                                    <td>10</td>

                                                </tr>
                                                <tr>
                                                    <td><span class="label label-warning">Completed</span></td>
                                                    <td>10</td>
                                                </tr>   


                                                <tr>
                                                    <td rowspan="2"><strong>Certification</strong></td>
                                                    <td><span class="label label-success">FSEC</span></td>

                                                    <td>10</td>

                                                </tr>
                                                <tr>
                                                    <td><span class="label label-warning">FSIC</span></td>
                                                    <td>10</td>
                                                </tr>                                                 

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!-- END PROJECTS BLOCK -->

                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Top 10 Barangays with most Number of Applications</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <?php
    require 'require/databaseconnection.php';
                                        $query = $conn->query("SELECT *, count(barangay_name) as total FROM `application` where `year` = '$year' GROUP BY barangay_name order by total DESC limit 10") or die(mysqli_error());
                                        while ($fetch = $query->fetch_array()) {
                                            echo "
												<div class='messages'>
											<div class='item'>
												<div class='text'>
													<div class='heading'>
														<a href='#'>".$fetch['barangay_name']."</a>
													<span class='date'> Year ".$fetch['year']."</span>
														</div>
														Total Application: ".$fetch['total']."
														</div>
														</div>
														</div>
														";
                                        }   
                                    ?>        
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <!-- START MAP -->

                            <div class="panel-title-box">
                                <span><h3>BFP BACOLOD Main Station</h3></span>
                            </div>   
                            <div id="map" style="width:700px;height:350px;"></div>

                            <script>
                                function myMap() {
                                    var mapOptions = {
                                        center: new google.maps.LatLng(10.675812950000001, 122.94807372901302),
                                        zoom: 18,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    }
                                    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                                }
                            </script>

                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

                            <!-- END MAP -->

                        </div>
                    </div>



                    <!-- END DASHBOARD CHART -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <?php require 'require/logout.php'?>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->

        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>

        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>  
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>               

        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
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






