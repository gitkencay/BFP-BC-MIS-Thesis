<?php
require_once 'require/logincheck.php';
$id = $_SESSION['id'];
require 'require/databaseconnection.php';
$query2 = $conn->query("SELECT * from `users` WHERE `id` = '$id'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();

$officername = $fetch2['fname'] . ' '. $fetch2['lname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BFP-BCMIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/cropped-bfp-new-logo-1.png">
</head>

<body>

    <div class="page-container">
        <?php require 'require/sidebar-Inspection-CRO.php'?>
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
$query = $conn->query("SELECT * FROM `inspection_report` WHERE `ir_no` = '$_GET[ir_no]'") or die(mysqli_error());
$fetch = $query->fetch_array();

$query2 = $conn->query("select * from `inspection_schedule` ") or die(mysqli_error());
$fetch2 = $query2->fetch_array();

$query3 = $conn->query("select * from `bldg_construct` ") or die(mysqli_error());
$fetch3 = $query3->fetch_array();

$month = date("m", strtotime($fetch['month']));
$ir_no = $fetch['ir_no'];

?>
                    <div class="col-md-12">
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Inspection Order</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="panel panel-default">

                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">IO No.</label>
                                                        <div class="col-sm-6">
                                                            <input type="hidden" name="application_number" value="<?php echo $fetch['application_no'] ?>" />
                                                            <input type="text" class="form-control" name="io_no" value="<?php echo $fetch['io_no'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br><br>

                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Date
                                                            Applied</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="date_applied"
                                                                name="date_applied" value="<?php echo $fetch['date_applied'] ?>" readonly style="color:black;">
                                                        </div>
                                                        
                                                            <input type="hidden" name="application_number" value="<?php echo $fetch['application_no'] ?>" />
                                                            <input type="hidden" class="form-control" name="application_no"
                                                                value="<?php echo $fetch['application_no'] ?>" readonly>
                                                        
                                                    </div> <br><br><br>

                                                    

                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Business
                                                            Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="business_name"
                                                                value="<?php echo $fetch['business_name'] ?>" readonly style="color:black;">
                                                        </div>
                                                    </div> <br><br><br>

                                                    <div class="form-group">
                                                       <label for="app-name" class="col-sm-12 control-label">Inspection-CRO</label>
                                                            <div class="col-md-8">
                                                            <input type="text" class="form-control" name="inspection_cro"
                                                                value="<?php echo $officername;?>" readonly style="color:black;">
                                                        </div>
                                                    </div> <br><br><br>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="owner_name"
                                                                value="<?php echo $fetch['owner_name'] ?>" readonly style="color:black;">
                                                        </div>
                                                    </div> <br><br><br>

                                                    <div class="form-group">
                                                       
                                                    </div> <br><br><br>

                                                </div>

                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="#edit_inspection<?php echo $fetch2['io_no']; ?>"
                                                        data-target="#edit_inspection<?php echo $fetch2['io_no']; ?>"
                                                        data-toggle="modal" class="btn btn-info"> <i class="fa fa-eye"></i>
                                                        View Schedule</a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#view_bldgConst<?php echo $fetch3['ir_no']; ?>"
                                                        data-target="#view_bldgConst<?php echo $fetch3['ir_no']; ?>"
                                                        data-toggle="modal" class="btn btn-info"> <i class="fa fa-eye"></i>
                                                        View Building Construction</a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Inspection
                                                            Report No</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="ir_no" value="<?php echo 'IR' . '-' . $fetch['year'] . '-' . $month . '-' . $ir_no ?>" readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br><br>

                                                    <div class="form-group">
                                                         <label for="app-name" class="col-sm-12 control-label">Owner
                                                            Name</label>
                                                        <div class="col-sm-6">
                                                            <input type="hidden" class="form-control" name="application_no"
                                                                value="<?php echo $fetch['application_no'] ?>">

                                                                <input type="text" class="form-control" value="<?php echo $fetch['owner_name'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br><br>



                                                </div>
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Owner
                                                            Address</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="owner_address"
                                                                id="owner_address" value="<?php echo $fetch['owner_address'] ?>"
                                                                require readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br><br>

                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-5 control-label">Building
                                                            Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" value="<?php echo $fetch['business_name'] ?>"
                                                                require readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br><br>

                                                

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Building
                                                            Height</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="bldg_height"
                                                                id="bldg_height" require value="<?php echo $fetch['bldg_height'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br><br>

                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Lot Size</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="lot_size" id="lot_size"
                                                                value="<?php echo $fetch['lot_size'] ?>" readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br><br>

                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Number of
                                                            Floors</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="number_of_floors"
                                                                id="number_of_floors" value="<?php echo $fetch['number_of_floors'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br><br>


                                                </div>
                                            </div>
                                            <hr>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="recommend" class="col-md-12 control-label">Recommendation:
                                                        </label>
                                                        <br>
                                                        <div class="col-md-12">
                                                            <p class="text-justify">
                                                                <?php echo $fetch['recommendation'] ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Checklist</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="classific"
                                                                value="Classification" readonly="" style="color: black;">
                                                        </div>
                                                    </div><br><br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="exitDet"
                                                                value="Exit Details" readonly="" style="color: black;">
                                                        </div>
                                                    </div><br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="LigSign"
                                                                value="Lightings and Signs" readonly="" style="color: black;">
                                                        </div>
                                                    </div><br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="featFire"
                                                                value="Features of Fire Protection" readonly="" style="color: black;">
                                                        </div>
                                                    </div><br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="builSer"
                                                                value="Building Service Equipment" readonly="" style="color: black;">
                                                        </div>
                                                    </div><br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="hazard" value="Hazardous Areas"
                                                                readonly="" style="color: black;">
                                                        </div>
                                                    </div><br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="opsFeat"
                                                                value="Operating Features" readonly="" style="color: black;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="app-name" class="col-sm-12 control-label">Specify
                                                            Deficiency</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="checklist_classification"
                                                                id="checklist_classification" value="<?php echo $fetch['checklist_classification'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br> <br>

                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="checklist_exit"
                                                                id="checklist_exit" value="<?php echo $fetch['checklist_exit'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="checklist_lightings"
                                                                id="checklist_lightings" value="<?php echo $fetch['checklist_lightings'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="checklist_protection"
                                                                id="checklist_protection" value="<?php echo $fetch['checklist_protection'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="checklist_equipments"
                                                                id="checklist_equipments" value="<?php echo $fetch['checklist_equipments'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="checklist_hazardous"
                                                                id="checklist_hazardous" value="<?php echo $fetch['checklist_hazardous'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br>

                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="checklist_operating"
                                                                id="checklist_operating" value="<?php echo $fetch['checklist_operating'] ?>"
                                                                readonly style="color: black;">
                                                        </div>
                                                    </div> <br><br>

                                                </div>

                                            </div>
                                            <hr>
                                            <a href="Transaction-Inspection.php"><button type="submit" class="btn btn-danger"
                                                    name="save_inspection"><span class="fa fa-close"></span>Exit</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'modals/ViewBuildingConst.php'?>
        <?php require 'modals/ViewInspectionSchedule.php'?>
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