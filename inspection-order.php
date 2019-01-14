
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BFP-BCMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    </head>
    <body>

        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Data Entry</li>
                    <li class="active"><strong><mark>Inspection Order and Compliance</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <?php
    require 'require/databaseconnection.php';
            $query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[application_no]'") or die(mysqli_error());
            $fetch = $query->fetch_array();

            $month2 = date("m", strtotime($fetch['month']));

            $month = date("m");
            $year = date('Y');
            $today = date("M-d-Y");

            $query3 = $conn->query("SELECT * FROM `inspection_report` order by ir_no DESC limit 1") or die(mysqli_error());
            $fetch3 = $query3->fetch_array();
            $ir_no = $fetch3['ir_no'] + 1;
                        ?>
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Inspection Order</a></li></ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="panel panel-default">
                                            <form method="post" action="actions/addInspection.php" onsubmit="return confirm('Are you sure you want to add this Inspection Information?');"  >
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-12 control-label">IO No.</label>
                                                                <div class="col-md-5">
                                                                    <input type="hidden" name="application_number" value="<?php echo $fetch['application_no']?>"/>
                                                                    <input type="text" class="form-control" name="io_no" value="<?php echo 'IO' . '-' . $year . '-' . $month . '-' . $ir_no ?>">
                                                                </div>
                                                            </div> <br><br><br>

                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-12 control-label">Application No</label>
                                                                <div class="col-md-5">
                                                                    <input type="hidden" name="application_number" value="<?php echo $fetch['application_no']?>"/>
                                                                    <input type="text" class="form-control" name="application_no" value="<?php echo $fetch['year'] . '-' . $month2 . '-' . $fetch['application_no'] ?>" >
                                                                </div>
                                                            </div> <br><br><br>


                                                             <div class="col-md-5">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_inspection"> <i class="fa fa-plus"></i>Add Schedule</button>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div id="alert" class="alert alert-info" style="display:none;">
                                                                <center><span id="alerttext"></span></center>
                                                            </div>
                                                        </div>

                                                                                                                 
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-5 control-label">Business Name</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" name="business_name" value="<?php echo $fetch['business_name'] ?>" >
                                                                </div>
                                                            </div> <br><br><br>  

                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-9 control-label">Establishment Address</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" name="establishment_address" value="<?php echo $fetch['establishment_address'] ?>" >
                                                                </div>
                                                            </div> <br><br><br> 

                                                              
                                                        </div>

                                                        <div class="col-md-4">

                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" name="owner_name" value="<?php echo $fetch['owner_name'] ?>" >
                                                                </div>
                                                            </div> <br><br><br> 

                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-5 control-label">Date Applied</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" id="date_applied" name="date_applied" value="<?php echo $today ?>" >
                                                                </div>
                                                            </div> <br><br><br>

                                                        </div>
                                                    </div>
                                                    
                                                
                                                    <hr>
                                                    <h3><label><span>After Inspection Report</span></label></h3>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-8 control-label">Inspection Report No</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" name="ir_no" value="<?php echo 'IR' . '-' . $year . '-' . $month . '-' . $ir_no ?>" readonly>
                                                                </div>
                                                            </div> <br><br><br>  

                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-8 control-label">Application No</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" name="application_no" value="<?php echo $fetch['year'] . '-' . $month2 . '-' . $fetch['application_no'] ?>" readonly>
                                                                </div>
                                                            </div> <br><br><br>
  
    
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-8 control-label">Building Name</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" value="<?php echo $fetch['business_name'] ?>" require readonly>
                                                                </div>
                                                            </div> <br><br><br>  

                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-8 control-label">Building Address</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" name="building_address"  value="<?php echo $fetch['establishment_address'] ?>" readonly require >
                                                                </div>
                                                            </div> <br><br><br> 
                                                    
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" value="<?php echo $fetch['owner_name'] ?>" readonly>
                                                                </div>
                                                            </div> <br><br><br>   

                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-8 control-label">Owner Address</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" name="owner_address" id="owner_address" required>
                                                                </div>
                                                            </div> <br><br><br> <br>

                                                            <div class="col-md-4">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Bldg_Const"> <i class="fa fa-plus"></i>Add Building Construction</button>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-12 control-label">Number of Floors</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="number_of_floors" id="number_of_floors" value="<?php echo $fetch['number_of_floors'] ?>" readonly>
                                                                </div>
                                                            </div> <br><br><br>

                                                             <div class="form-group">
                                                                <label for="app-name" class="col-sm-12 control-label">Lot Size</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="lot_size" id="lot_size" value="<?php echo $fetch['lot_size'] ?>" readonly>
                                                                </div>
                                                            </div> <br><br><br>  

                                                             <div class="form-group">
                                                                <label for="app-name" class="col-sm-12 control-label">Building Height</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="bldg_height" id="bldg_height" required >
                                                                </div>
                                                            </div> <br><br><br>  

                                                           
                                                        </div>
                                                    </div>
                                                 
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="recommend" class="col-md-12 control-label">Recommendation: </label>
                                                                <br>
                                                                <div class="col-md-10">
                                                                    <textarea rows="3" cols="60" placeholder="Recommend for Deficiences" name="recommendation"  id="recommendation" require></textarea>
                                                                </div>
                                                            </div>
                                                            <br><br><br><br><br>
                                                             <div class="col-md-3">
                                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#IssueNotice"> <i class="fa fa-plus"></i>Issue Notice</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-12 control-label">Checklist</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="classific" value="Classification" readonly="">
                                                                </div> 
                                                            </div><br><br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="exitDet" value="Exit Details" readonly="">
                                                                </div> 
                                                            </div><br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="LigSign" value="Lightings and Signs" readonly="">
                                                                </div> 
                                                            </div><br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="featFire" value="Features of Fire Protection" readonly="">
                                                                </div> 
                                                            </div><br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="builSer" value="Building Service Equipment" readonly="">
                                                                </div> 
                                                            </div><br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="hazard" value="Hazardous Areas" readonly="">
                                                                </div> 
                                                            </div><br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="opsFeat" value="Operating Features" readonly="">
                                                                </div> 
                                                            </div>


                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="app-name" class="col-sm-12 control-label">Specify Deficiency</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="checklist_classification" id="checklist_classification">
                                                                </div>
                                                            </div> <br><br><br> 

                                                             <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="checklist_exit" id="checklist_exit">
                                                                </div>
                                                            </div> <br><br> 

                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="checklist_lightings" id="checklist_lightings">
                                                                </div>
                                                            </div> <br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="checklist_protection" id="checklist_protection">
                                                                </div>
                                                            </div> <br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="checklist_equipments" id="checklist_equipments">
                                                                </div>
                                                            </div> <br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="checklist_hazardous" id="checklist_hazardous" >
                                                                </div>
                                                            </div> <br><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="checklist_operating" id="checklist_operating">
                                                                </div>
                                                            </div> <br><br>

                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="panel-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="col-md-5">
                                                                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label for="app-name" class="col-sm-1 control-label">Status</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <select class="form-control select" id="status_of_checklist" name="status_of_checklist">
                                                                            <option value="">Select</option>
                                                                            <option value="NA">NA</option>
                                                                            <option value="Comply">Comply</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <button type="submit" class="btn btn-info" name="save_inspection"><span class="fa fa-check"></span>Save Changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'modals/addBuildingConst.php'?>
            <?php require 'modals/addIssueNotice.php'?>
            <?php require 'modals/addInspectionSchedule.php'?>
            <?php require 'require/logout.php'?>
        </div>

        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="ajax/getschedule.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <script type="text/javascript" src="js/settings.js"></script>

    </body>
</html>






