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
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html"><strong>BFP-BC MIS</strong></a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    
                        <div class="profile">
                            <div class="profile-image">
                                <img src="img/fireman2.png"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Customer Relations Officer</div>
                            </div>
                        </div>
                    <ul id="navSid">                                                                            
                    <li>
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Master File</span></a>
                        <ul>
                            <li class="active"><a href="DataEntry-EmpProf.html"><span class="fa fa-user"></span> Employee Profiling</a></li>
                            <li><a href="DataEntry-AppReg.html"><span class="fa fa-user"></span> Applicant Registration</a></li>                          
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Transaction</span></a>
                        <ul>
                            <li><a href="Transaction-Assessment.html"> Assessments & Payments</a></li>
                            <li><a href="Transaction-Inspection.html"> Inspection & Compliance</a></li>
                            <li><a href="Transaction-BuildEval.html">Building Evaluation</a></li>
                            <li><a href="#">Issuance Of Certificates</a></li>
                            <li><a href="#">Status Monitoring</a></li>
                            <li><a href="#">Scheduling</a></li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Reports</span></a>                        
                        <ul>
                            <li><a href=""><span class=""></span> Detailed Report</a></li>                            
                            <li><a href=""><span class=""></span> Summary Report</a></li>
                            <li><a href=""><span class=""></span> Exceptional Report</a></li>                            
                            <li><a href=""><span class=""></span> Risk & Fire Frequency</a></li>
                        </ul>
                    </li>                    
                    <li class="active">
                        <a href="#"><span class="fa fa-warning"></span> <span class="xn-text">Distress Call</span></a>
                        <ul>
                            <li><a href="Distress-FireRespondents.html"><span class="fa fa-align-justify"></span> Fire Stations Respondents</a></li>
                            <li class="active"><a href="Distress-SMSandCall.html"><span class="fa fa-th-large"></span> SMS & Call Logs</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Maintenance</span></a>
                        <ul>                            
                            <li><a href="Maintenance-MyAccount.html"><span class="fa fa-align-justify"></span> My Account</a></li>
                            <li><a href="Maintenance-UserManage.html"><span class="fa fa-sort-alpha-desc"></span> User Management</a></li>
                            <li><a href="Maintenance-SystemBackUp.html"><span class="fa fa-download"></span> System Back Up</a></li>                            
                        </ul>
                    </li>                                      
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
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
                    <li><a href="#">Distress Call</a></li>                    
                    <li class="active"><a href="Distress-FireRespondents.html">Fire Stations Respondents</a></li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                     <div class="row">
                         <div class="col-md-12">

                             <!--Start Default Table-->
                                 <div class="panel-body">
                                     <table class="table datatable" id="dataTables-example-emp">
                                         <thead>
                                             <tr>
                                                 <th>Sender</th>
                                                 <th>Location</th>
                                                 <th>Date</th>
                                                 <th>Time</th>
                                                 <th>Fire Station</th>
                                                 <th>Message Details</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td>Kenny</td>
                                                 <td>Lopez Jaena St. </td>
                                                 <td>September 1, 2018 </td>
                                                 <td>07:45 AM </td>
                                                 <td>Fire Station 1 </td>
                                                 <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Message-Alert"><i class="fa fa-eye"></i> View</button></td>
                                             </tr>
                                             <tr>
                                                 <td>Kenny</td>
                                                 <td>Lopez Jaena St. </td>
                                                 <td>September 1, 2018 </td>
                                                 <td>07:45 AM </td>
                                                 <td>Fire Station 2 </td>
                                                 <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Message-Alert"><i class="fa fa-eye"></i> View</button></td>
                                             </tr>
                                             <tr>
                                                 <td>Kenny</td>
                                                 <td>Lopez Jaena St. </td>
                                                 <td>September 1, 2018 </td>
                                                 <td>07:45 AM </td>
                                                 <td>Fire Station 3 </td>
                                                 <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Message-Alert"><i class="fa fa-eye"></i> View</button></td>
                                             </tr>
                                             <tr>
                                                 <td>Kenny</td>
                                                 <td>Lopez Jaena St. </td>
                                                 <td>September 1, 2018 </td>
                                                 <td>07:45 AM </td>
                                                 <td>Fire Station 4 </td>
                                                 <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Message-Alert"><i class="fa fa-eye"></i> View</button></td>
                                             </tr>
                                             <tr>
                                                 <td>Kenny</td>
                                                 <td>Lopez Jaena St. </td>
                                                 <td>September 1, 2018 </td>
                                                 <td>07:45 AM </td>
                                                 <td>Fire Station 5 </td>
                                                 <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Message-Alert"><i class="fa fa-eye"></i> View</button></td>
                                             </tr>
                                             <tr>
                                                 <td>Kenny</td>
                                                 <td>Lopez Jaena St. </td>
                                                 <td>September 1, 2018 </td>
                                                 <td>07:45 AM </td>
                                                 <td>Fire Station 6 </td>
                                                 <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Message-Alert"><i class="fa fa-eye"></i> View</button></td>
                                             </tr>
                                             <tr>
                                                 <td>Kenny</td>
                                                 <td>Lopez Jaena St. </td>
                                                 <td>September 1, 2018 </td>
                                                 <td>07:45 AM </td>
                                                 <td>Fire Station 7 </td>
                                                 <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#Message-Alert"><i class="fa fa-eye"></i> View</button></td>
                                             </tr>
                                        </tbody>
                                     </table>
                                     <!--Start modal view sms alert-->
           <div id="Message-Alert" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">SMS and Call Information</h4>
                        </div>

                        <div class="modal-body">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                           <label for="officer-type" class="col-sm-6 control-label">Location</label>
                                           <div class="col-sm-8">
                                               <input type="text" class="form-control" id="officer" disabled="" value="China Town Square Primier, 888 Gatuslao St, Barangay 9">
                                           </div>
                                   </div>
                                   <div class="form-group">
                                           <label for="rank-code" class="col-sm-6 control-label">Business Name</label>
                                           <div class="col-sm-8">
                                               <input type="text" class="form-control" id="officer" disabled="" value="888 CHINA TOWN SQUARE COMPLEX">
                                           </div>
                                   </div>
                                   <div class="form-group">
                                           <label for="rank-code" class="col-sm-6 control-label">Designated Fire Station</label>
                                           <div class="col-sm-8">
                                               <input type="text" class="form-control" id="officer" disabled="" value="Fire Station 1">
                                           </div>
                                   </div>
                                   <div class="form-group">
                                           <label for="rank-code" class="col-sm-8 control-label"><br>Message Details</label>
                                           <div class="col-sm-8">
                                               <textarea class="form-control" rows="7" cols="100" id="comment" disabled="">
                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Sender: Kenny
                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Number: 09231332131
                                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Message  : HELP!
                                               </textarea>
                                           </div>
                                   </div>
                           </div>
                        </div>
                       </div>
                        <div class="modal-footer">
                               <div class="col-sm-6">
                                       <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                               </div>
                           <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                               </div>
                       </div>
                    </div>
                </div>
                <!--End modal view sms alert-->
                                 </div>
                             </div>
                             <!-- END DEFAULT DATATABLE -->

                         </div>
                                       

                                        </div>                                        
                                        
                                    </div>
                                    <div class="panel-footer">                                                                        
                                        <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
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
        <!--Start modal view sms alert-->
           <div id="Message-Alert" class="modal fade">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                         <h4 class="modal-title">SMS Alert Information</h4>
                                                     </div>

                                                     <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <label for="officer-type" class="col-sm-6 control-label">Location</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="officer" disabled="" value="China Town Square Primier, 888 Gatuslao St, Barangay 9">
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="rank-code" class="col-sm-6 control-label">Business Name</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="officer" disabled="" value="888 CHINA TOWN SQUARE COMPLEX">
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="rank-code" class="col-sm-6 control-label">Designated Fire Station</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="officer" disabled="" value="Fire Station 3">
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="rank-code" class="col-sm-8 control-label"><br>Message Details</label>
                                                                        <div class="col-sm-8">
                                                                            <textarea font size="6" class="form-control" rows="7" cols="100" id="comment">
                                                                                    &emsp;Sender: Kenny &emsp;
                                                                                    &emsp;Number: 09231332131 &emsp;
                                                                                    &emsp;&emsp;&emsp;Message  : HELP! &emsp;  
                                                                            </textarea>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                     </div>
                                                    </div>
                                                     <div class="modal-footer">
                                                            <div class="col-sm-6">
                                                                    <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                            </div>
                                                        <button type="submit" class="btn btn-danger" name="add_new_ipt"><span class="fa fa-truck"></span>Respond</button>
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="fa fa-plus-square"></span>Request Back Up</button>
                                                            </div>
                                                    </div>
                                                 </div>
                                             </div>
                                             <!--End modal view sms alert-->

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






