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
                <li><a href="#">Home</a></li>
                <li><a href="#">Transaction</a></li>
                <li><a href="Transaction-Inspection.php">Inspection & Compliance</a></li>
                <li><a>Issue Notice (Updating) </a></li>
            </ul>
            <div class="page-content-wrap">
                <div class="row">
                    <?php
require 'require/databaseconnection.php';

$queryz = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[id]'") or die(mysqli_error());
$fetchz = $queryz->fetch_array();
$month3 = date("m", strtotime($fetchz['month']));
$appyear = $fetchz['year'];
$appnum = $appyear.'-'.$month3.'-'.$fetchz['application_no'];


$query = $conn->query("SELECT * FROM `inspection_report` WHERE `application_no` = '$appnum'") or die(mysqli_error());
$fetch = $query->fetch_array();
$month = date("m", strtotime($fetch['month']));
$app = $fetch['application_no'];
$ir_no2 = $fetch['ir_no'];
$io_no = $fetch['io_no'];
$query10 = $conn->query("select * from `issue_notice` where inspection_order = '$io_no' ") or die(mysqli_error());
$fetch10 = $query10->fetch_array();
$app = $fetch['application_no'];
$year = date('Y');
$month = date('m');

$query12 = $conn->query("select * from `application` where application_no = '$app' ") or die(mysqli_error());
$fetch12 = $query12->fetch_array();
$month2 = date("m", strtotime($fetch10['month']));
?>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title"> Inspection Order No: </h3>
                                <h3 class="modal-title">&nbsp;
                                    <?php echo 'IO' . '-' . $fetch['year'] . '-' . $month . '-' . $fetch['ir_no'] ?>
                                </h3>
                            </div> -->
                            <form method="post" action="actions/editIssueNotice.php">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-5 control-label">Type of Notice</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select" name="type_of_notice">
                                                        <option value="<?php echo $fetch10['type_of_notice']?>">
                                                            <?php echo $fetch10['type_of_notice']?>
                                                        </option>
                                                        <option value="Comply">Comply</option>
                                                        <option value="Correct Violation">Correct Violation</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-5 control-label">Amount</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="amount" id="amount"
                                                        value="<?php echo $fetch10['amount'];?>" style="color: black" readonly required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" name="application_number"
                                                        id="application_number" value="<?php echo $fetch3['owner_name'] ?>">
                                                    <input type="text" class="form-control" name="owner_name" id="owner_name"
                                                        value="<?php echo $fetch10['owner_name'] ?>">
                                                    <input type="hidden" class="form-control" name="issuenum" id="issuenum"
                                                        value="<?php echo $fetch10['issue_notice_no'] ?>" style="color: black" readonly >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-8 control-label">Inspector Name</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select" id="inspectors_drop" name="inspectors_drops">
                                                        <option disabled selected="selected">Select Inspector</option>
                                                        <?php
    $sql = "SELECT * FROM employee group by fullname";
                                   $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                   while( $rows = mysqli_fetch_assoc($resultset) ) {
                                        ?>
                                                        <option value="<?php echo $rows['fullname'];?>">
                                                            <?php echo $rows["officer_fname"]. ' ' .$rows["officer_lname"]; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-8 control-label">Business Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="business_name" id="business_name"
                                                        value="<?php echo $fetch10['business_name'] ?>" style="color: black" readonly>
                                                </div>
                                            </div>
                                            <input type="hidden" name="applicantsnumbers" id="applicantsnumbers" value="<?php echo $fetchz['application_no'];?>">
                                            <div class="form-group">
                                                <!-- <label for="app-name" class="col-sm-8 control-label">Deficiences</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="deficiency" id="deficiency" value="<?php echo $fetch10['deficiency'] ?>" required>
                                </div> -->
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                </div>
                                            </div>
                                        </div>
                                        <?php
date_default_timezone_set('Asia/Manila');
$datesms=date("F j, Y g:i a");
?>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-5 control-label">Date Issued</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="date_issued"
                                                        name="date_issued" value="<?php echo $fetch10['date_issued']?>"
                                                        style="color: black" readonly required />
                                                    <input type="hidden" class="form-control" id="number"
                                                        name="number" value="<?php echo $fetch10["cpnumb"];?>" />
                                                    <input type="hidden" class="form-control" id="applicant_num"
                                                        name="applicant_num" value="<?php echo $app?>" />
                                                    <input type="hidden" class="form-control" id="nameofowner" name="nameofowner"
                                                        value="<?php echo $fetch['owner_name'] ?>">
                                                    <input type="hidden" class="form-control" id="message" name="message2"
                                                        value="<?php echo " BFP-Bacolod City : " .($datesms). " \n\n Mr/Ms " . $fetch['owner_name'] . " your application did not pass the INSPECTION, we issue notice to correct violation and we will message you for further notice. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023. " ?>">
                                                    <input type="hidden" class="form-control" id="message" name="message"
                                                        value="<?php echo " BFP-Bacolod City : " .($datesms). " \n\n Mr/Ms " . $fetch['owner_name'] . " you have passed the INSPECTION and your application is READY FOR CERTIFICATION. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023.  " ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-10 control-label">After Inspection
                                                    Report</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="IR_date_applied" id="IR_date_applied"
                                                        value="<?php echo $fetch10['IR_date_applied']?>" style="color: black" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="applicantsnumber" id="applicantsnumber"
                                                        value="<?php echo $appnum; ?>" style="color: black" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-8 control-label">Inspection Order</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="inspection_order" id="inspection_order"
                                                        value="<?php echo $fetch10['inspection_order']?>" style="color: black" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-8 control-label">Business Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="business_address" id="business_address"
                                                        value="<?php echo $fetch10['business_address'] ?>" required style="color: black" readonly>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                            <label for="app-name" class="col-sm-10 control-label">Grace Period</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_from" require id="grace_period_from" value="<?php echo $fetch10['grace_period_from'] ?>" required>                                    
                                </div>
                               
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_to" require id="grace_period_to" value="<?php echo $fetch10['grace_period_to'] ?>" required>
                                </div>
                        </div> -->
                                            <div class="form-group">
                                                <label for="date" class="col-sm-10 control-label">Grace Period</label>
                                                <div class="col-sm-5">
                                                    <input data-toggle="tooltip" data-placement="bottom" title="*Required, Grace Period Starting" type="text" class="form-control datepicker" id="inspection_date1"
                                                        name="inspection_date1" value="<?php echo $fetch10['grace_period_from'] ?>"
                                                        required />
                                                </div>

                                                <div class="col-sm-5">
                                                    <input data-toggle="tooltip" data-placement="bottom" title="*Required, Grace Period Ending" type="text" class="form-control datepicker" id="inspection_date2"
                                                        name="inspection_date2" value="<?php echo $fetch10['grace_period_to'] ?>"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php
$deficiency_checklist = $fetch10['deficiency_checklist'];
$check = explode(",", $deficiency_checklist);
?>

                                                <div class="col-sm-12">
                                                    <label for="app-name" class="col-sm-12 control-label">
                                                        Classification </label>
                                                    <div class="col-sm-2">
                                                        <input type="checkbox" class="icheckbox" value="checklist1"
                                                            name="deficiency_checklist[]" <?php if
                                                            (in_array("checklist1", $check)) { echo "checked" ; } ?>
                                                        >
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="checklist_classification"
                                                            require id="checklist_classification" value="<?php echo $fetch['checklist_classification']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="app-name" class="col-sm-12 control-label"> Exit Details
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input type="checkbox" class="icheckbox" value="checklist2"
                                                            name="deficiency_checklist[]" <?php if
                                                            (in_array("checklist2", $check)) { echo "checked" ; } ?>
                                                        >
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="checklist_exit"
                                                            require id="checklist_exit" value="<?php echo $fetch['checklist_exit']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="app-name" class="col-sm-12 control-label"> Lightnings
                                                        and Signs </label>
                                                    <div class="col-sm-2">
                                                        <input type="checkbox" class="icheckbox" value="checklist3"
                                                            name="deficiency_checklist[]" <?php if
                                                            (in_array("checklist3", $check)) { echo "checked" ; } ?>
                                                        >
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="checklist_lightings"
                                                            id="checklist_lightings" value="<?php echo $fetch['checklist_lightings']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="app-name" class="col-sm-12 control-label"> Features of
                                                        Fire Protection </label>
                                                    <div class="col-sm-2">
                                                        <input type="checkbox" class="icheckbox" value="checklist4"
                                                            name="deficiency_checklist[]" <?php if
                                                            (in_array("checklist4", $check)) { echo "checked" ; } ?>
                                                        >

                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="checklist_protection"
                                                            require id="checklist_protection" value="<?php echo $fetch['checklist_protection']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="app-name" class="col-sm-12 control-label"> Building
                                                        Service Equipment </label>
                                                    <div class="col-sm-2">
                                                        <input type="checkbox" class="icheckbox" value="checklist15"
                                                            name="deficiency_checklist[]" <?php if
                                                            (in_array("checklist15", $check)) { echo "checked" ; } ?>
                                                        >
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="checklist_equipments"
                                                            require id="checklist_equipments" value="<?php echo $fetch['checklist_equipments']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="app-name" class="col-sm-12 control-label"> Hazardous
                                                        Areas </label>
                                                    <div class="col-sm-2">
                                                        <input type="checkbox" class="icheckbox" value="checklist6"
                                                            name="deficiency_checklist[]" <?php if
                                                            (in_array("checklist6", $check)) { echo "checked" ; } ?>
                                                        >
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="checklist_hazardous"
                                                            require id="checklist_hazardous" value="<?php echo $fetch['checklist_hazardous']; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="app-name" class="col-sm-12 control-label"> Operating
                                                        Features </label>
                                                    <div class="col-sm-2">
                                                        <input type="checkbox" class="icheckbox" value="checklist7"
                                                            name="deficiency_checklist[]" <?php if
                                                            (in_array("checklist7", $check)) { echo "checked" ; } ?>
                                                        >
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="checklist_operating"
                                                            require id="checklist_operating" value="<?php echo $fetch['checklist_operating']; ?>"
                                                            required>

                                                        <?php
$deficiency_checklist = $fetch10['deficiency_checklist'];
$check = explode(",", $deficiency_checklist);
?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <!-- <ul class="panel-controls"> -->
                                                        <label for="confirm" style="display: none; font-size: 24px;text-align: center;"
                                                            id="confirmationfsecup" class="col-sm-12 control-label">
                                                            Are you sure you want to edit this Issue Notice?
                                                        </label>
                                                        <div class="col-sm-4">
                                                            &nbsp;
                                                        </div>
                                                        <div id="confirmedyes2">
                                                            <div class="col-sm-2">
                                                                <button type="submit" style="display:none;" class="btn btn-info"
                                                                    id="fsecyesup" name="save_issue_notice"><span class="fa fa-check"></span>Yes</button>
                                                            </div>
                                                        </div>
                                                        <div id="confirmedno2">
                                                            <div class="col-sm-2">
                                                                <button type="button" style="display:none;" class="btn btn-danger"
                                                                    id="fsecnoup"><span class="fa fa-times"></span>No</button>
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
                        <input type="hidden" class="form-control" id="app-no" name="application_no" value="<?php echo $fetch['application_no'] ?>"
                            readonly>
                        <div class="panel-footer">
                            <div class="col-sm-10">
                                <p class="text-danger"><small>*If you don't save, your changes will be
                                        lost.&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                            </div>
                            <button type="button" class="btn btn-info" onclick="myFunctionEditNotice()"><span class="fa fa-check"></span>Confirm</button>
                            <a href="Transaction-Inspection.php"> <button type="button" class="btn btn-danger"><span
                                        class="fa fa-times"></span>Exit</button> </a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
        var date = new Date();
        $('#inspection_date1').datepicker({
            format: 'yyyy MM, dd',
            language: 'en',
            startDate: date,
            endDate: new Date('2100-01-01')
        });
    </script>
    <script>
        var date = new Date();
        $('#inspection_date2').datepicker({
            format: 'yyyy MM, dd',
            language: 'en',
            startDate: date,
            endDate: '+1m'
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
        function myFunctionEditNotice() {
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