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
        <?php require 'require/sidebar-CRO.php'?>
        <div class="page-content">
            <?php require 'require/header.php'?>
            <ul class="breadcrumb">
                <li><a href="home-CRO.php">Home</a></li>
                <li>Data Entry</li>
                <li class="active"><strong><mark>FSEC Application (Update Record) </mark></strong></li>
            </ul>
            <div class="page-content-wrap">
                <div class="row">
                    <?php
    require 'require/databaseconnection.php';
            $query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[application_no]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $month= date("m", strtotime($fetch['month']));
            
                        ?>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title"> Application No: </h3>
                                <h3 class="modal-title">&nbsp;<?php echo $fetch['year']. '-' .$month. '-' .$fetch['application_no']?></h3>
                            </div>
                            <form method="post" action="actions/editfsec.php">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="app-name" class="col-sm-10 control-label">Applicant
                                                Name&nbsp;&nbsp;</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="app-nme" name="application_name"
                                                    value="<?php echo $fetch['application_name']?>" readonly style="color: black;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="busi-name" class="col-sm-10 control-label">Business
                                                Name&nbsp;&nbsp;&nbsp;</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="busi-nme" name="business_name"
                                                    value="<?php echo $fetch['business_name']?>" readonly style="color: black;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="busi-name" class="col-sm-10 control-label">Establishment
                                                Address&nbsp;&nbsp;&nbsp;</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="busi-nme" name="bussaddress"
                                                    value="<?php echo $fetch['establishment_address']?>" readonly style="color: black;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="brgy-no" class="col-sm-10 control-label">&nbsp;Barangay</label>
                                            <div class="col-sm-7">
                                                <select class="form-control select" data-live-search="true" id="brgy-no"
                                                    name="barangay_name">
                                                    <option value="<?php echo $fetch['barangay_name']?>">
                                                        <?php echo $fetch['barangay_name']?>
                                                    </option>
                                                    <?php
                                                            $query2 = $conn->query("SELECT * FROM `barangay`") or die(mysqli_error());
                                                            while($fetch2 = $query2->fetch_array()){
                                                                            ?>
                                                    <option value="<?php echo $fetch2['barangay_name'];?>">
                                                        <?php echo $fetch2['barangay_name']?>
                                                    </option>
                                                    <?php
                                                            }
                                                            ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            
                                            <div class="col-sm-7">
                                                <input type="hidden" class="form-control" id="estab-add" name="establishment_address"
                                                    value="<?php echo $fetch['establishment_address']?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="floor-number" class="col-sm-10 control-label">Number of
                                                Floors</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="floor-number" name="number_of_floors"
                                                    value="<?php echo $fetch['number_of_floors']?>" readonly style="color: black;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bldg-code" class="col-sm-10 control-label">Building
                                                Type&emsp;&nbsp;&nbsp;</label>
                                            <div class="col-sm-7">
                                                <select class="form-control" id="bldg-code" name="building_type">
                                                    <option value="<?php echo $fetch['building_type']?>">
                                                        <?php echo $fetch['building_type']?>
                                                    </option>
                                                    <option value="0">Assembly</option>
                                                    <option value="1">Business-Office</option>
                                                    <option value="1">Educational</option>
                                                    <option value="1">Mercantile</option>
                                                    <option value="1">Small-Business</option>
                                                    <option value="1">Storage</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="user-id" class="col-sm-10 control-label">&nbsp; Phone Number
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="cpnumb" name="cpnumb" value="<?php echo $fetch['cpnumb']?>"
                                                    required readonly style="color: black;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="user-id" class="col-sm-10 control-label">&nbsp; Name of CRO
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text"  style="color: black;" class="form-control" id="croname" name="croname"
                                                    value="<?php echo $fetch['croname']?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="owner-name" class="col-sm-10 control-label">Owner
                                                Name&emsp;&nbsp;&nbsp;&nbsp;</label>
                                            <div class="col-sm-7">
                                                <input type="text"  class="form-control" id="owner-name" name="owner_name"
                                                    value="<?php echo $fetch['owner_name']?>" readonly style="color: black;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lot-size" class="col-sm-10 control-label">Lot Size</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="lot-size" name="lot_size"
                                                        value="<?php echo $fetch['lot_size'] . " sq.m"?>" readonly style="color: black;">
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status" class="col-sm-10 control-label" style="font-size: 20px"><br>Initial
                                                Requirements</label>
                                            <div class="col-sm-12">
                                                <?php
$initial_requirements = $fetch['initial_requirements'];
$check = explode(",", $initial_requirements);
?>
                                                <label>
                                                    <input type="checkbox" class="icheckbox" value="IniReq1" name="initial_requirements[]"
                                                        <?php if (in_array("IniReq1", $check)) { echo "checked" ; } ?>
                                                    >Endorsement from Building Official (BO) / Business Permit
                                                    Licensing Office (BPLO)
                                                </label>
                                                <br>
                                                <label><input type="checkbox" class="icheckbox" value="IniReq2" name="initial_requirements[]"
                                                        <?php if (in_array("IniReq2", $check)) { echo "checked" ; } ?>
                                                    >&nbsp;Three (3) Sets of Building Plans and Specifications</label>
                                                <br>
                                                <label><input type="checkbox" class="icheckbox" value="IniReq3" name="initial_requirements[]"
                                                        <?php if (in_array("IniReq3", $check)) { echo "checked" ; } ?>
                                                    >&nbsp;One (1) Set of Bills of Materials and Cost Estimate</label>
                                                <br>
                                                <label><input type="checkbox" class="icheckbox" value="IniReq4" name="initial_requirements[]"
                                                        <?php if (in_array("IniReq4", $check)) { echo "checked" ; } ?>
                                                    >&nbsp;Three (3) Sets of Detailes Fire Safety Plans and
                                                    Specifications or (FALAR-1) for Occupancy of at least
                                                    50 persons</label>

                                                <?php
$initial_requirements = $fetch['initial_requirements'];
$check = explode(",", $initial_requirements);
?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <!-- <ul class="panel-controls"> -->
                                                        <label for="confirm" style="display: none; font-size: 24px;text-align: center;" id="confirmationfsecup"  class="col-sm-12 control-label">
                                                        Are you sure you want to edit this FSEC Application?
                                                        </label>
                                                        <div class="col-sm-4">
                                                                &nbsp;
                                                        </div>
                                                        <div id="confirmedyes2">
                                                            <div class="col-sm-2">
                                                                <button type="submit" style="display:none;" class="btn btn-info" id="fsecyesup" name="editfsec"><span class="fa fa-check"></span>Yes</button>
                                                            </div>
                                                        </div>
                                                        <div id="confirmedno2">
                                                            <div class="col-sm-2">
                                                                <button type="button" style="display:none;" class="btn btn-danger" id="fsecnoup" ><span class="fa fa-times"></span>No</button>
                                                            </div>
                                                        </div>    
                                                    <!-- </ul>-->
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" id="status" name="status">
                            <input type="hidden" class="form-control" id="app-no" name="application_no" value="<?php echo $fetch['application_no']?>" readonly>
                            <div class="panel-footer">
                                <div class="col-sm-10">
                                    <p class="text-danger"><small>*If you don't save, your changes will be
                                            lost.&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                </div>
                                <a class="btn btn-info" onclick="myFunctionFSECUp()"><span class="fa fa-check"></span>Confirm</a>
                                <a href="DataEntry-AppReg.php"> <button type="button" class="btn btn-danger" ><span class="fa fa-times"></span>Exit</button> </a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'modals/addBuildingConst.php'?>
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
    <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>

    <script>
        var date = new Date();
        $('#inspection_date').datepicker({
            format: 'MM dd, yyyy',
            language: 'en',
            startDate: date,
            endDate: new Date('2100-01-01')
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#officer_fname").change(function () {

                var officer_fname = $(this).val();

                $.ajax({
                    url: "actions/getSchedule.php",
                    method: "POST",
                    data: {
                        officer_fname: officer_fname
                    },
                    success: function (data) {
                        $('tbody').html(data);
                        var table = $('#employee').DataTable();
                    }
                });
            });
        });
    </script>
    <script>
                function myFunctionFSECUp() {
                document.getElementById("confirmationfsecup").style.display = "block";
                document.getElementById("fsecyesup").style.display = "inline";
                document.getElementById("fsecnoup").style.display = "inline";
            }
    </script>
    <!-- <script>
                function close(){
                document.getElementById("confirmationfsecup").style.display = "none !important";
                document.getElementById("fsecyesup").style.display = "none";
                document.getElementById("fsecnoup").style.display = "none";
            }
    </script> -->
</body>

</html>