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
$query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[application_no]'") or die(mysqli_error());
$fetch = $query->fetch_array();

$month2 = date("m", strtotime($fetch['month']));

$month = date("m");
$year = date('Y');
$today = date("M-d-Y");

$query3 = $conn->query("SELECT * FROM `inspection_order` order by io_no DESC limit 1") or die(mysqli_error());
$fetch3 = $query3->fetch_array();
$ir_no = $fetch3['io_no'] + 1;

$textid = 'IO' . '-' . $year . '-' . $month . '-' . $ir_no;
?>
                    <div class="col-md-12">
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Inspection Order</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab-first">
                                    <div class="panel panel-default">
                                        <form method="post" action="actions/addInspection.php">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-12 control-label">IO
                                                                No.</label>
                                                            <div class="col-md-6">
                                                                <input type="hidden" name="application_number" value="<?php echo $fetch['application_no'] ?>" />
                                                                <input type="hidden" class="form-control" name="io_no"
                                                                    value="<?php echo 'IO' . '-' . $year . '-' . $month . '-' . $ir_no ?>"
                                                                    readonly>
                                                                <h4><strong>&nbsp;&nbsp;&nbsp;
                                                                        <?php echo 'IO' . '-' . $year . '-' . $month . '-' . $ir_no ?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                            <!--<label for="app-name" class="col-sm-12 control-label">Application
                                                                No</label>-->
                                                            <div class="col-md-5">
                                                                <input type="hidden" name="application_number" value="<?php echo $fetch['application_no'] ?>" />
                                                                <input type="hidden" name="appmonth" value="<?php echo $fetch['month'] ?>" />
                                                                <input type="hidden" name="appyear" value="<?php echo $fetch['year'] ?>" />
                                                                <input type="hidden" class="form-control" name="applicantsnumber"
                                                                    value="<?php echo $fetch['application_no'] ?>"
                                                                    readonly>

                                                            </div>
                                                        </div>

                                                        <label for="app-name" class="col-sm-12 control-label">Establishment
                                                            Address</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" name="estabaddress">
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class="col-md-7">
                                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                                data-target="#add_inspection"> <i class="fa fa-plus"></i>Add
                                                                Schedule</button>
                                                        </div>

                                                        <div class="col-md-7">
                                                            <div id="alert" class="alert alert-info" style="display:none;">
                                                                <center><span id="alerttext"></span></center>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-5 control-label">Business
                                                                Name</label>
                                                            <div class="col-md-8">
                                                                <input type="hidden" class="form-control" name="business_name"
                                                                    value="<?php echo $fetch['business_name'] ?>"
                                                                    readonly>
                                                                <h4><strong>
                                                                        <?php echo $fetch['business_name'] ?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                        </div> <br><br><br>




                                                        <input type="hidden" class="form-control" name="establishment_address"
                                                            value="<?php echo $fetch['establishment_address'] ?>"
                                                            readonly>



                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-12 control-label">Inspection-CRO</label>
                                                            <div class="col-md-8">
                                                                <input type="hidden" class="form-control" name="inspection_cro"
                                                                    value="<?php echo $officername; ?>" readonly>
                                                                <h4><strong>
                                                                        <?php echo $officername; ?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">

                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-5 control-label">Owner
                                                                Name</label>
                                                            <div class="col-md-8">
                                                                <input type="hidden" class="form-control" name="owner_name"
                                                                    value="<?php echo $fetch['owner_name'] ?>" readonly>
                                                                <h4><strong>
                                                                        <?php echo $fetch['owner_name'] ?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                        </div> <br><br><br>

                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-5 control-label">Date
                                                                Applied</label>
                                                            <div class="col-md-8">
                                                                <input type="hidden" class="form-control" id="date_applied"
                                                                    name="date_applied" value="<?php echo $today ?>"
                                                                    readonly>
                                                                <h4><strong>
                                                                        <?php echo $today ?>
                                                                        <hr></strong></h4>
                                                            </div>
                                                        </div> <br><br><br>
                                                    </div>
                                                </div>


                                                <hr>



                                                <!--Start after inspection Report-->


                                                <!--end after inspection report-->

                                                <?php 
                                                date_default_timezone_set('Asia/Manila');
                                                $datesms=date("F j, Y g:i a");
                                                ?>
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
                                                                    name="message" value="<?php echo "BFP-Bacolod City : " .($datesms). " \n\nMr/Ms " . $fetch['owner_name'] . "we received your application on INSPECTION Section with the transaction ID of ". $textid." , there will be an INSPECTION to be conducted to your establishemnt and we will message you for further notice. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023." ?>">
                                                                <input type="hidden" class="form-control" id="message2"
                                                                    name="message2" value="<?php echo " BFP-Bacolod City : " .($datesms). " \n\nMr/Ms " . $fetch['owner_name'] . "we received your application on INSPECTION Section with the transaction ID of ". $textid." , and you have passed the INSPECTION and your application is ready for certification. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023. " ?>">
                                                                <div class="col-md-5">
                                                                    <p class="text-danger"><small>*If you don't save,
                                                                            your changes will 
                                                                            lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                                </div>
                                                                <input type="hidden" name="status_of_checklist">
                                                                <div class="form-group">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <!-- <ul class="panel-controls"> -->
                                                                            <label for="confirm" style="display: none; font-size: 24px;text-align: center;"
                                                                                id="addinspection" class="col-sm-12 control-label">
                                                                                Are you sure you want to add this
                                                                                Inspection Information?
                                                                            </label>
                                                                            <div class="col-sm-3">
                                                                                &nbsp;
                                                                            </div>
                                                                            <div>
                                                                                <div class="col-sm-4">
                                                                                    <button type="submit" style="display:none;"
                                                                                        class="btn btn-info" id="addinspection1"
                                                                                        name="save_inspection"><span
                                                                                            class="fa fa-check"></span>Yes</button>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <div class="col-sm-2">
                                                                                    <button type="button" style="display:none;"
                                                                                        class="btn btn-danger" id="addinspection2"
                                                                                        data-dismiss="modal"><span
                                                                                            class="fa fa-times"></span>No</button>
                                                                                </div>
                                                                            </div>
                                                                            <!-- </ul>-->
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-4">
                                                                    <a class="btn btn-info" onclick="myFunctionaddinspection()"><span
                                                                            class="fa fa-check"></span>Save Changes</a>
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
        function myFunctionBldg() {
            document.getElementById("addnoticec").style.display = "block";
            document.getElementById("addnoticey").style.display = "inline";
            document.getElementById("addnoticen").style.display = "inline";
        }
    </script>
    <script>
        function myFunctionaddinspection() {
            document.getElementById("addinspection").style.display = "block";
            document.getElementById("addinspection1").style.display = "inline";
            document.getElementById("addinspection2").style.display = "inline";
        }
    </script>

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