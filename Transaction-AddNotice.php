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
                <li><a>Add Issue Notice</a></li>
            </ul>
            <div class="page-content-wrap">
                <div class="row">
                    <?php
require 'require/databaseconnection.php';
$queryz = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[id]'") or die(mysqli_error());
$fetchz = $queryz->fetch_array();
$month2 = date("m", strtotime($fetchz['month']));
$appyear = $fetchz['year'];
$appnum = $appyear.'-'.$month2.'-'.$fetchz['application_no'];

$query = $conn->query("SELECT * FROM `inspection_report` WHERE application_no = '$appnum'") or die(mysqli_error());
$fetch = $query->fetch_array();
$month = date("m", strtotime($fetch['month']));
$app = $fetch['application_no'];
$query10 = $conn->query("select * from `application` where application_no = '$app' ") or die(mysqli_error());
$fetch10 = $query10->fetch_array();
$year = date('Y');
$month = date('m');
$month2 = date("m", strtotime($fetch10['month']));
?>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        
                            <form method="post" action="actions/addIssueNotice.php">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-5 control-label">Type of Notice</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select" name="type_of_notice">
                                                        <option>Select</option>
                                                        <option value="Comply">Comply</option>
                                                        <option value="Correct Violation">Correct Violation</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-5 control-label">Amount</label>
                                                <div class="col-sm-10">
                                                    <input data-toggle="tooltip" data-placement="left" title="*Required, Amount" type="text" class="form-control" name="amount" id="amount"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" name="application_number"
                                                        id="application_number" value="<?php echo $fetch3['owner_name'] ?>">
                                                    <input type="text" class="form-control" name="owner_name" id="owner_name"
                                                        value="<?php echo $fetch['owner_name'] ?>" style="color: black" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-8 control-label">Inspector Name</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select" id="inspectors_drop" name="inspectors_drop">
                                                        <option disabled selected="selected">Select Inspector</option>
                                                        <?php
$sql = "SELECT * FROM employee group by fullname";
$resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
while ($rows = mysqli_fetch_assoc($resultset)) {
    ?>
                                                        <option value="<?php echo $rows["fullname"]; ?>">
                                                            <?php echo $rows["officer_fname"] . ' ' . $rows["officer_lname"]; ?>
                                                        </option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-8 control-label">Business Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="business_name" id="business_name"
                                                        value="<?php echo $fetch['business_name'] ?>" style="color: black" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <label for="app-name" class="col-sm-8 control-label">Deficiences</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="deficiency" id="deficiency" value="<?php echo $fetch3['deficiency'] ?>" required>
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <input type="hidden" name="applicantnumber" value="<?php echo $fetchz['application_no'];?>">
                                                <label for="app-name" class="col-sm-5 control-label">Date Issued</label>
                                                <div class="col-sm-10">
                                                    <input data-toggle="tooltip" data-placement="bottom" title="*Required, Issue Notice Date" type="text" class="form-control datepicker" id="date_issued"
                                                        name="date_issued" required />
                                                    <input type="hidden" class="form-control" id="number" name="number"
                                                        value="<?php echo $fetch10[" cpnumb"]; ?>" />
                                                    <input type="hidden" class="form-control" id="applicant_num" name="applicant_num"
                                                        value="<?php echo $app ?>" />
                                                    <input type="hidden" class="form-control" id="nameofowner" name="nameofowner"
                                                        value="<?php echo $fetch['owner_name'] ?>">
                                                    <input type="hidden" class="form-control" id="message" name="message2"
                                                        value="<?php echo " BFP-Bacolod City : " .($datesms). " \n\n Mr/Ms " . $fetch['owner_name'] . " your application did not pass the INSPECTION, we issue notice to comply and we will message you for further notice. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023. " ?>">
                                                    <input type="hidden" class="form-control" id="message" name="message"
                                                        value="<?php echo " BFP-Bacolod City : " .($datesms). " \n\n Mr/Ms " . $fetch['owner_name'] . " you have passed the INSPECTION and your application is READY FOR CERTIFICATION. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023. " ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-10 control-label">After Inspection
                                                    Report</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="IR_date_applied" id="IR_date_applied"
                                                        value="<?php echo " IO" . "-" . $fetch['year'] . '-' . $month . '-'. $fetch['ir_no'] ?>" style="color: black" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="applicantsnumber" id="applicantsnumber"
                                                        value="<?php echo $app; ?>" style="color: black" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-8 control-label">Inspection Order</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="inspection_order" id="inspection_order"
                                                        value="<?php echo $fetch['io_no'] ?>" style="color: black" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="app-name" class="col-sm-8 control-label">Business Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="business_address" id="business_address"
                                                        value="<?php echo $fetch['establishment_address'] ?>" style="color: black" required readonly>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                <label for="app-name" class="col-sm-10 control-label">Grace Period</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_from" require
                                        id="inspection_date" required>
                                </div>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_to" require
                                        id="grace_period_to" required>
                                </div>
                            </div> -->
                                            <div class="form-group">
                                                <label for="date" class="col-sm-10 control-label">Grace Period</label>
                                                <div class="col-sm-5">
                                                    <input data-toggle="tooltip" data-placement="bottom" title="*Required, Grace Period Starting" type="text" class="form-control datepicker" id="inspection_date1"
                                                        name="inspection_date1" required />
                                                </div>

                                                <div class="col-sm-5">
                                                    <input data-toggle="tooltip" data-placement="bottom" title="*Required, Grace Period Ending" type="text" class="form-control datepicker" id="inspection_date2"
                                                        name="inspection_date2" required />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
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
                                                            Are you sure you want to add this Issue Notice?
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
                            <button type="button" class="btn btn-info" onclick="myFunctionAddNotice()"><span class="fa fa-check"></span>Confirm</button>
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
        function myFunctionAddNotice() {
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