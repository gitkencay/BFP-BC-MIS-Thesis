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
                    <li><a href="#">Reports</a></li>                    
                    <li class="active"><a href="Report-Employee.php">Employee Record Reports</a></li>
                </ul>
                <!-- END BREADCRUMB -->                       

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <!--Start Default Table-->
                            <div class="panel panel-default">
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable" id="dataTables-example-emp">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Officer Category</th>
                                                <th>Fire Station</th>
                                                <th>Action</th>
                                            </tr>

                                            <tbody>
                                                            <?php
                                                                require 'modals/updateEmployee.php';
                                                                require 'require/databaseconnection.php';
                                                                $query = $conn->query("select * from `employee`") or die(mysqli_error());
                                                                while($fetch = $query->fetch_array()){
                                                            ?>

                                                            <tr>
                                                                <td><?php echo $fetch['officer_fname']?></td>
                                                                <td><?php echo $fetch['officer_lname']?></td>
                                                                <td><?php echo $fetch['officer_type']?></td>
                                                                <td><?php echo $fetch['firestation']?></td>
                                                                <td>
                                                                <a href="Reports/EmployeeReports.php?id=<?php echo $fetch['id']?>"> <i class="fa fa-eye"></i>  Preview</a> </br>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            $conn->close();
                                                            ?>
                                                        </tbody>
                                        </thead>
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

<!--Start MODAL-->
<?php require 'modals/addemployee.php'; ?>

<!--Start Modal view employee-->

<div id="View-Employee-Reg" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Employee Form</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="officer-type" class="col-sm-6 control-label">Officer Type</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="officer-type">
                                    <option value="0">CRO</option>
                                    <option value="0">Assessor</option>
                                    <option value="1">Inspector</option>
                                    <option value="1">Evaluator</option>
                                    <option value="1">Inspection-CRO</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rank-code" class="col-sm-6 control-label">Rank Code</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="Rank">
                                    <option value="0">F01</option>
                                    <option value="0">F02</option>
                                    <option value="1">F03</option>
                                    <option value="1">F04</option>
                                    <option value="1">SF01</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="officer" class="col-sm-6 control-label">Officer Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="officer" placeholder="Kenneth Cayetano" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-6 control-label">Password</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firestation" class="col-sm-6 control-label">Fire Station</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="firestation">
                                    <option value="0">1</option>
                                    <option value="0">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="1">5</option>
                                    <option value="1">6</option>
                                    <option value="1">7</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Modal view employee-->


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
<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>  
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/settings.js"></script>

<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>

<script type="text/javascript" src="js/demo_dashboard.js"></script>
</body>
</html>






