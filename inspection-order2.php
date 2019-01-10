
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BHTC-PMIS</title>
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
                    $today = date("y-d-m");

                    $query3 = $conn->query("SELECT * FROM `inspection_report` order by ir_no DESC limit 1") or die(mysqli_error());
                    $fetch3 = $query->fetch_array();
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
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">IO No.</label>
                                                            <div class="col-sm-10">
                                                            <input type="hidden" name="application_number" value="<?php echo $fetch['application_no']?>"/>
                                                                <input type="text" class="form-control" name="io_no" value="<?php echo 'IO' . '-' . $year . '-' . $month . '-' . $ir_no ?>">
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                                            <div class="col-sm-10">
                                                            <input type="hidden" name="application_number" value="<?php echo $fetch['application_no']?>"/>
                                                                <input type="text" class="form-control" name="application_no" value="<?php echo $fetch['year'] . '-' . $month2 . '-' . $fetch['application_no'] ?>" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="owner_name" value="<?php echo $fetch['owner_name'] ?>" >
                                                            </div>
                                                        </div> <br><br><br>                                                      
                                                        </div>
                                                        
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Business Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="business_name" value="<?php echo $fetch['business_name'] ?>" >
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Establishment Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="establishment_address" value="<?php echo $fetch['establishment_address'] ?>" >
                                                            </div>
                                                        </div> <br><br><br> 

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Date Applied</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="date_applied" name="date_applied" value="<?php echo $today ?>" >
                                                            </div>
                                                        </div> <br><br><br>  
                                                        </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_inspection"> <i class="fa fa-plus"></i>Add Schedule</button>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Inspection Report No</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="ir_no" value="<?php echo 'IR' . '-' . $year . '-' . $month . '-' . $ir_no ?>">
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="application_no" value="<?php echo $fetch['year'] . '-' . $month2 . '-' . $fetch['application_no'] ?>" >
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" value="<?php echo $fetch['owner_name'] ?>" readonly>
                                                            </div>
                                                        </div> <br><br><br>     

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Owner Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="owner_address" id="owner_address" require>
                                                            </div>
                                                        </div> <br><br><br>     
                                                        </div>
                                                        <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Building Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" value="<?php echo $fetch['business_name'] ?>" require readonly>
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Building Address</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="building_address"  value="<?php echo $fetch['establishment_address'] ?>" readonly require >
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Height of Building</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="bldg_height" id="bldg_height" require >
                                                            </div>
                                                        </div> <br><br><br>  

                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Lot Size</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="lot_size" id="lot_size" value="<?php echo $fetch['lot_size'] ?>" readonly>
                                                            </div>
                                                        </div> <br><br><br>                                                        
                                                        </div>
                                                        <div class="col-md-2">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Number of Floors</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="number_of_floors" id="number_of_floors" value="<?php echo $fetch['number_of_floors'] ?>" readonly>
                                                            </div>
                                                        </div> <br><br><br>  
                                                        </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Bldg_Const"> <i class="fa fa-plus"></i>Add Building Construction</button>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#IssueNotice"> <i class="fa fa-plus"></i>Issue Notice</button>
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
                                                        </div>
                                                        <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Checklist</label>
                                                            <div class="col-sm-10">
                                                            <select class="form-control" name="ir_checklist"  id"ir_checklist">
                                                            <option value="Select">Select</option>
                                                            <option value="Classification">Classification</option>
                                                            <option value="Exit Details">Exit Details</option>
                                                            <option value="Lightings and Signs">Lightings and Signs</option>
                                                            <option value="Features of Fire Protection">Features of Fire Protection</option>
                                                            <option value="Building Service Equipment">Building Service Equipment</option>
                                                            <option value="Hazardous Areas">Hazardous Areas</option>
                                                            <option value="Operating Features">Operating Features</option>
                                                            </select>
                                                            </div> 
                                                            </div><br><br><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                        <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Specify Deficiency</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="deficiency" require>
                                                            </div>
                                                        </div> <br><br><br> 
                                                        
                                                        </div>
                                                    
                                                        </div>
                                                        <hr>
                                                        <button type="submit" class="btn btn-info" name="save_inspection"><span class="fa fa-check"></span>Save</button>
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






