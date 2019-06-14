<?php
require_once 'require/logincheck.php';
$id = $_SESSION['id'];
require 'require/databaseconnection.php';
$query2 = $conn->query("SELECT * from `users` WHERE `id` = '$id'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();

$officername = $fetch2['fname'] . ' ' . $fetch2['lname'];
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
                        $query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[id]'") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $app = $fetch['application_no'];
                        $month2 = date("m", strtotime($fetch['month']));

                        $month = date("m");
                        $year = date('Y');
                        $today = date("M-d-Y");

                        $query2 = $conn->query("SELECT * FROM `inspection_order` where applicantsnumber = '$app'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                        $estab = $fetch2['estab_address'];
                        $io = $fetch2['io_no'];
                        
                        $month = date("m", strtotime($fetch2['month']));
                        $year = $fetch2['year'];
                        $io_no = 'IO' . '-' . $year . '-' . $month . '-' . $io;

                        $query3 = $conn->query("SELECT * FROM `inspection_report` order by ir_no DESC limit 1") or die(mysqli_error());
                        $fetch3 = $query3->fetch_array();
                        $ir_no = $fetch3['ir_no'] + 1;

                        $textid = 'IR' . '-' . $year . '-' . $month . '-' . $ir_no;
                    ?>
                    <div class="col-md-12">
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">After Inspection Report</a></li>
                            </ul>
                            <div class="panel-body tab-content">

                                <div class="tab-pane active" id="tab-first">

                                    <div class="panel panel-default">
                                        <form method="post" action="actions/addAfterInspection.php">
                                            <div class="panel-body">
                                                <!--Start After Inspection Report-->

                                               
                                                <div class="row">
                                                
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-8 control-label">Inspection
                                                                Report No</label>
                                                            <div class="col-md-8">
                                                                <input type="hidden" class="form-control" name="ir_no"
                                                                    value="<?php echo 'IR' . '-' . $year . '-' . $month . '-' . $ir_no ?>"
                                                                    readonly>
                                                                    <input type="hidden" class="form-control" name="io_no"
                                                                    value="<?php  echo $io_no; ?>"
                                                                    readonly>
                                                                <h4><strong>
                                                                        <?php echo 'IR' . '-' . $year . '-' . $month . '-' . $ir_no ?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                             <label for="app-name" class="col-sm-5 control-label">Owner
                                                                Name</label>
                                                            <div class="col-md-8">
                                                                <input type="hidden" name="owner_name" class="form-control" value="<?php echo $fetch['owner_name'] ?>"
                                                                    readonly>
                                                                <h4><strong>
                                                                        <?php echo $fetch['owner_name'] ?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                            
                                                                <input type="hidden" name="application_no" class="form-control" value="<?php echo $fetch['year'] . '-' . $month2 . '-' . $fetch['application_no'] ?>"
                                                                    readonly>
                                                                
                                                        </div> <br><br><br>


                                                    </div>


                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-8 control-label">Building
                                                                Name</label>
                                                            <div class="col-md-8">
                                                                <input type="hidden" class="form-control" name="business_name" value="<?php echo $fetch['business_name'] ?>"
                                                                    require readonly>
                                                                <h4><strong>
                                                                        <?php echo $fetch['business_name'] ?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-8 control-label">Building
                                                                Address</label>
                                                            <div class="col-md-8">
                                                                <input type="hidden" class="form-control" name="establishment_address" value="<?php echo $fetch2['estab_address'];?>"
                                                                    require readonly>
                                                                <h4><strong>
                                                                        <?php echo $estab;?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                        </div> <br><br><br>

                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                           <label for="app-name" class="col-sm-12 control-label">Lot
                                                                Size</label>
                                                            <div class="col-sm-5">
                                                                <input type="hidden" class="form-control" name="lot_size"
                                                                    id="lot_size" value="<?php echo $fetch['lot_size'] ?>"
                                                                    readonly>
                                                                <h4><strong>
                                                                        <?php echo $fetch['lot_size'] ?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-8 control-label">Bldg Height</label>
                                                            <div class="col-md-8">
                                                                <input data-toggle="tooltip" data-placement="bottom" title="*Required, Estimated Building Height" type="text" class="form-control" name="bldg_height"
                                                                    id="bldg_height" required>
                                                            </div>
                                                        </div> 

                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-12 control-label">Number
                                                                of Floors</label>
                                                            <div class="col-sm-5">
                                                                <input type="hidden" class="form-control" name="number_of_floors"
                                                                    id="number_of_floors" value="<?php echo $fetch['number_of_floors'] ?>"
                                                                    readonly>
                                                                <h4><strong>
                                                                        <?php echo $fetch['number_of_floors'] ?>
                                                                        </strong></h4>
                                                            </div>
                                                        </div> <br><br><br>

                                                        
                                                        <div class="col-md-4">
                                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                                data-target="#Bldg_Const"> <i class="fa fa-plus"></i>Add
                                                                Building Construction</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->


                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="recommend" class="col-md-12 control-label">Recommendation:
                                                            </label>
                                                            <br>
                                                            <div class="col-md-10">
                                                                <textarea rows="3" cols="60" placeholder="Recommend for Deficiences"
                                                                    name="recommendation" id="recommendation" require></textarea>
                                                            </div>
                                                        </div>
                                                        <br><br><br><br><br>
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
                                                                    value="Features of Fire Protection" readonly=""
                                                                    style="color: black;">
                                                            </div>
                                                        </div><br><br>

                                                        <div class="form-group">
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="builSer"
                                                                    value="Building Service Equipment" readonly=""
                                                                    style="color: black;">
                                                            </div>
                                                        </div><br><br>

                                                        <div class="form-group">
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="hazard"
                                                                    value="Hazardous Areas" readonly="" style="color: black;">
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
                                                                <input data-toggle="tooltip" data-placement="left" title="Specify Classification Deficiency" type="text" class="form-control" name="checklist_classification"
                                                                    id="checklist_classification">
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <input data-toggle="tooltip" data-placement="left" title="Specify Exit Details Deficiency" type="text" class="form-control" name="checklist_exit"
                                                                    id="checklist_exit">
                                                            </div>
                                                        </div> <br><br>

                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <input data-toggle="tooltip" data-placement="left" title="Specify Lightnings and Signs Deficiency" type="text" class="form-control" name="checklist_lightings"
                                                                    id="checklist_lightings">
                                                            </div>
                                                        </div> <br><br>

                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <input data-toggle="tooltip" data-placement="left" title="Specify Fire Protection Deficiency" type="text" class="form-control" name="checklist_protection"
                                                                    id="checklist_protection">
                                                            </div>
                                                        </div> <br><br>

                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <input data-toggle="tooltip" data-placement="left" title="Specify Building Equipment Deficiency" type="text" class="form-control" name="checklist_equipments"
                                                                    id="checklist_equipments">
                                                            </div>
                                                        </div> <br><br>

                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <input data-toggle="tooltip" data-placement="left" title="Specify Hazardous Areas Deficiency" type="text" class="form-control" name="checklist_hazardous"
                                                                    id="checklist_hazardous">
                                                            </div>
                                                        </div> <br><br>

                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <input data-toggle="tooltip" data-placement="left" title="Specify Operating Features" type="text" class="form-control" name="checklist_operating"
                                                                    id="checklist_operating">
                                                            </div>
                                                        </div> <br><br>

                                                    </div>

                                                </div>
                                                <hr>

                                                <!--End After Inspection Report-->
<?php
date_default_timezone_set('Asia/Manila');
$datesms=date("F j, Y g:i a");
?>
                                                <!--Start Panel Footer-->
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control" id="number"
                                                                    name="number" value="<?php echo $fetch['cpnumb'] ?>">
                                                                <input type="hidden" class="form-control" id="nameofowner"
                                                                    name="nameofowner" value="<?php echo $fetch['owner_name'] ?>">
                                                                <input type="hidden" class="form-control" id="appnum"
                                                                    name="appnum" value="<?php echo $fetch['application_no'] ?>">
                                                                <input type="hidden" class="form-control" id="message"
                                                                    name="message" value="<?php echo " BFP-Bacolod City : " .($datesms). " \n\n Mr/Ms " . $fetch['owner_name'] . " your application did not pass the INSPECTION with the transaction ID of ". $textid ." , we issue notice to comply and we will message you for further notice. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023. " ?>">
                                                                <input type="hidden" class="form-control" id="message2"
                                                                    name="message2" value="<?php echo "  BFP-Bacolod City : " .($datesms). " \n\n Mr/Ms " . $fetch['owner_name'] . " you have passed the INSPECTION with the transaction ID of ". $textid ." and your application is READY FOR CERTIFICATION. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023. " ?>">
                                                                <div class="col-md-4">
                                                                   
                                                                </div>
                                                                <div class="col-md-4">
                                                                   
                                                                </div>
                                                                    <input type="hidden" name="status_of_checklist">
                                                                    <input type="hidden" class="form-control" name="officername"
                                                                    value="<?php echo $officername; ?>" readonly>
                                                                <div class="col-md-12">
                                                                <div class="form-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <!-- <ul class="panel-controls"> -->
                                        <label for="confirm" style="display: none; font-size: 24px;text-align: center;" id="addair"  class="col-sm-12 control-label">
                                        Are you sure you want to add this After Inspection Report?
                                        </label>
                                        <div class="col-sm-3">
                                                &nbsp;
                                        </div>
                                        <div>
                                            <div class="col-sm-4">
                                                <button type="submit" style="display:none;" class="btn btn-info" id="addair1" name="saveafterinspection"><span class="fa fa-check"></span>Yes</button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-sm-2">
                                                <button type="button" style="display:none;" class="btn btn-danger" id="addair2" data-dismiss="modal"><span class="fa fa-times"></span>No</button>
                                            </div>
                                        </div>    
                                    <!-- </ul>-->
                                </div>    
                            </div>
                        </div>

                                                                    <a class="btn btn-info" onclick="myFunctionaddair()"><span
                                                                            class="fa fa-sign-in"></span>Proceed</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Panel Footer-->
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php require 'modals/addBuildingConst.php'?>
                                                <?php require 'require/logout.php'?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                function myFunctionaddair() {
                document.getElementById("addair").style.display = "block";
                document.getElementById("addair1").style.display = "inline";
                document.getElementById("addair2").style.display = "inline";
            }
    </script>
    <script>
        $(document).ready(function () {
            $("#inspector_name").change(function () {

                var inspector_name = $(this).val();

                $.ajax({
                    url: "actions/getSchedule.php",
                    method: "POST",
                    data: {
                        inspector_name: inspector_name
                    },
                    success: function (data) {
                        $('tbody').html(data);
                        var table = $('#employee').DataTable();
                    }
                });
            });
        });
    </script>

</body>
</html>

                
     