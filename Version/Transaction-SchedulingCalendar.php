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
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!-- START CONTENT FRAME -->
                    <div class="content-frame">            
                        <!-- START CONTENT FRAME TOP -->
                        <div class="content-frame-top">                        
                            <div class="page-title">                    
                                <h2><span class="fa fa-calendar"></span> Calendar</h2>
                            </div>  
                            <div class="pull-right">
                                <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                            </div>                                                                                
                        </div>
                        <!-- END CONTENT FRAME TOP -->

                        <!-- START CONTENT FRAME LEFT -->
                        <div class="content-frame-left">
                            <h4>New Schedule</h4>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="new-event-text" placeholder="Enter Inspector"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" id="new-event">Add</button>
                                    </div>
                                </div>
                            </div>

                            <h4>Inspectors Scheduled Today</h4>
                            <div class="list-group border-bottom" id="external-events">                                    
                                <a class="list-group-item external-event">Insp. Clark CAnlog</a>
                                <a class="list-group-item external-event">Insp. Justin Puatu</a>
                                <a class="list-group-item external-event">Insp. Carl Arcillas</a>
                                <a class="list-group-item external-event">Isnp. Lebron James</a>
                                <a class="list-group-item external-event">Insp. Kobe Bryant</a>                                    
                                <a class="list-group-item external-event">Insp. Michael Jordan</a>
                            </div>                            

                            <!--<div class="push-up-10">
<label class="check">
<input type="checkbox" class="icheckbox" id="drop-remove"/> Remove after drop
</label>
</div>  -->   

                            <!--<div class="panel panel-default push-up-10">
<div class="panel-body padding-top-0">
<h4>Fullcalendar</h4>
<p>FullCalendar is a jQuery plugin that provides a full-sized, drag & drop event calendar like the one below. It uses AJAX to fetch events on-the-fly and is easily configured to use your own feed format. It is visually customizable with a rich API.</p>
</div>
</div>-->
                        </div>
                        <!-- END CONTENT FRAME LEFT -->

                        <!-- START CONTENT FRAME BODY -->
                        <div class="content-frame-body padding-bottom-0">

                            <div class="row">
                                <div class="col-md-12">
                                    <div id="alert_holder"></div>
                                    <div class="calendar">                                
                                        <div id="calendar"></div>                            
                                    </div>
                                </div>
                            </div>

                        </div>                    
                        <!-- END CONTENT FRAME BODY -->

                    </div>               
                    <!-- END CONTENT FRAME -->
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

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
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->         
    </body>
</html>






