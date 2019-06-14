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
                    <li><a href="#">Data Entry</a></li>                    
                    <li class="active"><a href="DataEntry-EmpProf.html">Employee Profiling</a></li>
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
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Employee-Reg"><i class="fa fa-plus"></i>Add Employee</button>
                                        </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable" id="dataTables-example-emp">
                                        <thead>
                                            <tr>
                                                <th>Office ID</th>
                                                <th>Officer Name</th>
                                                <th>Officer Category</th>
                                                <th>Rank</th>
                                                <th>Fire Station</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
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
<!--Start modal add employee-->
<div id="Employee-Reg" class="modal fade">
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
                                <input type="text" class="form-control" id="officer">
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
            <div class="modal-footer">
                <div class="col-sm-6">
                    <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                </div>
                <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
            </div>
        </div>
    </div>
</div>
<!--End modal Add employee-->

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
                                    <option value="1">Assessor</option>
                                    <option value="2">Inspector</option>
                                    <option value="3">Evaluator</option>
                                    <option value="4">Inspection-CRO</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rank-code" class="col-sm-6 control-label">Rank Code</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="Rank">
                                    <option value="0">F01</option>
                                    <option value="1">F02</option>
                                    <option value="2">F03</option>
                                    <option value="3">F04</option>
                                    <option value="4">SF01</option>
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
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                    <option value="6">7</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-sm-6">
                    <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                </div>
                <button type="submit" class="btn btn-info" name="add_new_ipt"><span class="fa fa-check"></span>Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal view employee-->


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






