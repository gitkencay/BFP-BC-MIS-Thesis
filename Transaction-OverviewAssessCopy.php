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
    <!-- META SECTION -->
    <title>BFP BACOLOD MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/cropped-bfp-new-logo-1.png">
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" href="css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">
        <?php require 'require/sidebar-Assessor.php'?>
        <div class="page-content">
            <?php require 'require/header.php'?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Data Entry</a></li>
                <li class="active"><a href="Transaction-AssessForm.php">Assessment Form</a></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="AssessForm">
                    <div class="panel panel-default">
                        <form method="post" action="actions/addAssessment.php">
                            <div class="panel-body">
                                <table>


                                    <?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[application_no]'") or die(mysqli_error());
$fetch = $query->fetch_array();
$month2 = date("m", strtotime($fetch['month']));
$query2 = $conn->query("SELECT * FROM `assessment` order by ops_no DESC limit 1") or die(mysqli_error());
$fetch2 = $query2->fetch_array();
// convert ang month nga name format to number format;
$month = date("m");
$year = date('Y');
// plus 1 siya kay tungod ang pinaka latest na application no gna add 1 pra sa next na ma apply sa registration
$ops_no = $fetch2['ops_no'] + 1;
// gina merge ang month, year kag ang application no;

date_default_timezone_set('Asia/Manila');
$datesms=date("F j, Y g:i a");

$textid = 'OPS' . '-' . $year . '-' . $month . '-' . $ops_no;
?>
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="col-md-8 control-label">OPS No:</label>
                                                <div class="col-sm-8">
                                                    <h4><strong>&nbsp;&nbsp;&nbsp;
                                                            <?php echo 'OPS' . '-' . $year . '-' . $month . '-' . $ops_no ?>
                                                            <hr></strong></h4>
                                                    <input type="hidden" id="ops_no" name="ops_no" value="<?php echo 'OPS' . '-' . $year . '-' . $month . '-' . $ops_no ?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="cert" class="col-md-12 control-label">Certificate Applying
                                                    For:</label>
                                                <div class="col-sm-5">
                                                    <h4><strong>&nbsp;&nbsp;&nbsp;
                                                            <?php echo $fetch['application_type']?>
                                                            <hr></strong></h4>
                                                    <input type="hidden" id="application_type" name="application_type"
                                                        value="<?php echo $fetch['application_type'] ?>">
                                                </div>
                                            </th>



                                        </tr>
                                        <tr>
                                            <th>

                                                <label class="col-md-8 control-label">Assessor Name: </label>
                                                <div class="col-sm-10">
                                                    <h4><strong>&nbsp;&nbsp;&nbsp;
                                                            <?php echo $officername; ?>
                                                            <hr></strong></h4>
                                                    <input type="hidden" name="assessors" id="assessor" value="<?php echo $officername; ?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="bus-name" class="col-sm-12 control-label">Business Name</label>
                                                <div class="col-sm-10">
                                                    <h4><strong>&nbsp;&nbsp;&nbsp;
                                                            <?php echo $fetch['business_name'] ?>
                                                            <hr></strong></h4>
                                                    <input type="hidden" id="business_name" name="business_name" value="<?php echo $fetch['business_name'] ?>">
                                                </div>
                                                <input type="hidden" id="location" name="location" value="<?php echo $fetch['establishment_address'] ?>">

                                            </th>

                                        </tr>
                                        <tr>
                                            <th>
                                                <input type="hidden" class="form-control" id="application_no" name="application_no"
                                                    value="<?php echo $fetch['year'].'-'.$month2.'-'.$fetch['application_no'] ?>">
                                                <input type="hidden" class="form-control" id="number" name="number"
                                                    value="<?php echo $fetch['cpnumb'] ?>">
                                                <input type="hidden" class="form-control" id="nameofowner" name="nameofowner"
                                                    value="<?php echo $fetch['owner_name'] ?>">
                                                <input type="hidden" class="form-control" id="appnum" name="appnum"
                                                    value="<?php echo $fetch['application_no'] ?>">
                                                <input type="hidden" class="form-control" id="message" name="message"
                                                    value="<?php echo "BFP-Bacolod City : " .($datesms). " Mr/Ms " . $fetch['owner_name'] . " your ASSESSMENT with the transaction ID of". $textid ." was successfully verified. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023." ?>">
                                                <input type="hidden" class="form-control" id="message2" name="message2"
                                                    value="<?php echo "BFP-Bacolod City : " .($datesms). " Mr/Ms " . $fetch['owner_name'] . " your ASSESSMENT with the transaction ID of". $textid ." was put on hold because you have not fully paid the required amount for your application. \n\nDo not reply on this number. \n\nIn case of Emergency please contact 117 or 434-5022 or 434-5023." ?>">
                                                <label for="app-name" class="col-sm-12 control-label">Owner Name:</label>
                                                <div class="col-sm-10">
                                                    <h4><strong>&nbsp;&nbsp;&nbsp;
                                                            <?php echo $fetch['owner_name'] ?>
                                                            <hr></strong></h4>
                                                    <input type="hidden" id="applicant_name" name="application_name"
                                                        value="<?php echo $fetch['owner_name'] ?>">
                                                </div>
                                            </th>

                                        </tr>
                                    </thead>
                                    <script type="text/javascript" src="js/jquery.min.js"></script>
                                </table>

                                <input type="hidden" name="status" id="status">

                                <div class="feeBody">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>
                                                <h4 class="text-danger"> *If there's no defined value for the fees, put 0 instead of null. </h4>
                                                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Applicable Fees</h5>
                                                </th>
                                                <th>
                                                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grand
                                                        Total</h5>
                                                </th>
                                                <th>
                                                    <h5>&nbsp;&nbsp;&nbsp;Amount to be Paid</h5>
                                                </th>
                                            </tr>
                                            <tr>

                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fire Code Construction Tax</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_FC_Constr"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="construction_tax"
                                                            name="construction_tax" placeholder="Discounted Amount"
                                                            readonly>
                                                    </div>
                                                </td>
                                                <script>
                                                    $(document).on("change keyup blur", "#Ini_FC_Constr", function() {
                                                var main = $('#Ini_FC_Constr').val();
                                                var disc = 0.001;
                                                var mult = main*disc; // gives the value for subtract from main value
                                                $('#construction_tax').val(mult.toFixed(3));
                                                });
                                            </script>
                                            </tr>
                                            <tr>
                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fire Code Reality Tax</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_FC_RT"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="reality_tax" name="reality_tax"
                                                            placeholder="Discounted Amount" readonly>
                                                    </div>
                                                </td>
                                                <script>
                                                    $(document).on("change keyup blur", "#Ini_FC_RT", function() {
                                                var main = $('#Ini_FC_RT').val();
                                                var disc = 0.0001;
                                                var mult = main*disc; // gives the value for subtract from main value
                                                $('#reality_tax').val(mult.toFixed(3));
                                                });
                                            </script>
                                            </tr>
                                            <tr>
                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fire Code Premium Tax</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_FC_PreT"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="premium_tax" name="premium_tax"
                                                            placeholder="Discounted Amount" readonly>
                                                    </div>
                                                </td>
                                                <script>
                                                    $(document).on("change keyup blur", "#Ini_FC_PreT", function() {
                                                var main = $('#Ini_FC_PreT').val();
                                                var disc = 0.02;
                                                var mult = main*disc; // gives the value for subtract from main value
                                                $('#premium_tax').val(mult.toFixed(3));
                                                });
                                            </script>
                                            </tr>
                                            <tr>
                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fire Code Sales Tax</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_FC_ST"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="sales_tax" name="sales_tax"
                                                            placeholder="Discounted Amount" readonly>
                                                    </div>
                                                </td>
                                                <script>
                                                    $(document).on("change keyup blur", "#Ini_FC_ST", function() {
                                                var main = $('#Ini_FC_ST').val();
                                                var disc = 0.02;
                                                var mult = main*disc; // gives the value for subtract from main value
                                                $('#sales_tax').val(mult.toFixed(3));
                                                });
                                            </script>
                                            </tr>
                                            <tr>
                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fire Code Proceeds Tax</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_FC_ProT"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td><br> <br>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="proceeds_tax"
                                                            name="proceeds_tax" placeholder="Discounted Amount"
                                                            readonly>
                                                    </div>
                                                </td>
                                                <script>
                                                    $(document).on("change keyup blur", "#Ini_FC_ProT", function() {
                                                var main = $('#Ini_FC_ProT').val();
                                                var disc = 0.02;
                                                var mult = main*disc; // gives the value for subtract from main value
                                                $('#proceeds_tax').val(mult.toFixed(3));
                                                });
                                            </script>
                                            </tr>

                                            <tr>
                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fire Safety Inspection Fee</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_FS_InspFee"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="inspection_fee"
                                                            name="inspection_fee" placeholder="Discounted Amount"
                                                            readonly>
                                                    </div>
                                                </td>
                                                <script>
                                                    $(document).on("change keyup blur", "#Ini_FS_InspFee", function() {
                                                var main = $('#Ini_FS_InspFee').val();
                                                var disc = 0.2;
                                                var mult = main*disc; // gives the value for subtract from main value
                                                $('#inspection_fee').val(mult.toFixed(3));
                                                });
                                            </script>
                                            </tr>
                                            <tr>
                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Storage Clearance</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_StorClear"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="storage_clearance"
                                                            name="storage_clearance" placeholder="Discounted Amount"
                                                            readonly>
                                                    </div>
                                                </td>
                                                <script>
                                                    $(document).on("change keyup blur", "#Ini_StorClear", function() {
                                                var main = $('#Ini_StorClear').val();
                                                $('#storage_clearance').val(main);
                                                });
                                            </script>
                                            </tr>
                                            <tr>
                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conveyance Clearance</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_ConvClear"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="conveyance_clearance"
                                                            name="conveyance_clearance" placeholder="Discounted Amount"
                                                            readonly>
                                                    </div>
                                                </td>
                                            </tr>
                                            <script>
                                                $(document).on("change keyup blur", "#Ini_ConvClear", function() {
                                                var main = $('#Ini_ConvClear').val();
                                                $('#conveyance_clearance').val(main);
                                                });
                                        </script>
                                            <tr>
                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Installation Clearance</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_InstClear"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="installation_clearance"
                                                            name="installation_clearance" placeholder="Discounted Amount"
                                                            readonly>
                                                    </div>
                                                </td>
                                                <script>
                                                    $(document).on("change keyup blur", "#Ini_InstClear", function() {
                                                    var main = $('#Ini_InstClear').val();
                                                    $('#installation_clearance').val(main);
                                                    });
                                            </script>
                                            </tr>
                                            <tr>
                                                <td><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other Clearance Fee</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="Ini_OtherClear"
                                                            placeholder="Enter Amount">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="other_clearance"
                                                            name="other_clearance" placeholder="Discounted Amount"
                                                            readonly>
                                                    </div>
                                                </td>
                                                <script>
                                                    $(document).on("change keyup blur", "#Ini_OtherClear", function() {
                                                var main = $('#Ini_OtherClear').val();
                                                $('#other_clearance').val(main);
                                                });
                                            </script>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info"
                                                        onclick="compTotal()">Total Amount of Fire Code Fees</button></td>
                                                <td></td>
                                                <td>

                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="total_amount"
                                                            name="total_amount" required readonly="">
                                                    </div>
                                                </td>

                                            </tr>
                                            <br>
                                            <tr>
                                                <td><label id="payLbl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment</label></td>
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input data-toggle="tooltip" data-placement="right" title="*Required, Applicant Full Payment" type="number" class="form-control" id="payment" name="payment">
                                                    </div>
                                                </td>
                                                <td> </td>

                                            </tr>
                                            <br>
                                            <tr>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info"
                                                        onclick="compChange()" id="changebtn">Change</button></td>
                                                <td></td>
                                                <td>
                                                    <div class="col-sm-14">
                                                        <input type="number" class="form-control" id="changed" name="changed"
                                                            readonly>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <!-- <ul class="panel-controls"> -->
                                            <label for="confirm" style="display: none; font-size: 24px;text-align: center;"
                                                id="addassessment" class="col-sm-12 control-label">
                                                Are you sure you want to add this Assessment?
                                            </label>
                                            <div class="col-sm-3">
                                                &nbsp;
                                            </div>
                                            <div>
                                                <div class="col-sm-4">
                                                    <button type="submit" style="display:none;" class="btn btn-info" id="addassessment1"
                                                        name="submit"><span class="fa fa-check"></span>Yes</button>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-sm-2">
                                                    <button type="button" style="display:none;" class="btn btn-danger"
                                                        id="addassessment2" data-dismiss="modal"><span class="fa fa-times"></span>No</button>
                                                </div>
                                            </div>
                                            <!-- </ul>-->
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <div class="col-sm-6">
                                        <p class="text-danger"><small>*If you don't save, your changes will be
                                                lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                    </div>
                                    <a class="btn btn-info" onclick="myFunctionassessed()"><span class="fa fa-check"></span>Save
                                        Changes</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                function compTotal() {
                    var main = $('#Ini_FC_Constr').val();
                    var disc = 0.001;

                    var mult = main * disc; // gives the value for subtract from main value


                    var main1 = $('#Ini_FC_RT').val();
                    var disc1 = 0.0001;
                    var mult1 = main1 * disc1; // gives the value for subtract from main value


                    var main2 = $('#Ini_FC_PreT').val();
                    var disc2 = 0.02;
                    var mult2 = main2 * disc2; // gives the value for subtract from main value


                    var main3 = $('#Ini_FC_ST').val();
                    var disc3 = 0.02;
                    var mult3 = main3 * disc3; // gives the value for subtract from main value


                    var main4 = $('#Ini_FC_ProT').val();
                    var disc4 = 0.02;
                    var mult4 = main4 * disc4; // gives the value for subtract from main value


                    var main5 = $('#Ini_FS_InspFee').val();
                    var disc5 = 0.2;
                    var mult5 = main5 * disc5; // gives the value for subtract from main value


                    var main6 = $('#Ini_StorClear').val();


                    var main7 = $('#Ini_ConvClear').val();


                    var main8 = $('#Ini_InstClear').val();


                    var main9 = $('#Ini_OtherClear').val();


                    var output1 = parseFloat(mult);
                    var output2 = parseFloat(mult1);
                    var output3 = parseFloat(mult2);
                    var output4 = parseFloat(mult3);
                    var output5 = parseFloat(mult4);
                    var output6 = parseFloat(mult5);
                    var output7 = parseFloat(main6);
                    var output8 = parseFloat(main7);
                    var output9 = parseFloat(main8);
                    var output10 = parseFloat(main9);

                    var total = parseFloat(output1 + output2 + output3 + output4 + output5 + output6 + output7 +
                        output8 + output9 + output10);
                    $('#total_amount').val(total.toFixed(2)); //show total

                };

                function compChange() {
                    var total = $('#total_amount').val();
                    var main10 = $('#payment').val();
                    var output11 = parseFloat(main10);
                    var change = parseFloat(output11 - total); //compute for change

                    $('#changed').val(change.toFixed(2));
                }
            </script>
            <script>
                function myFunctionassessed() {
                    document.getElementById("addassessment").style.display = "block";
                    document.getElementById("addassessment1").style.display = "inline";
                    document.getElementById("addassessment2").style.display = "inline";
                }
            </script>
            <!-- END PAGE CONTAINER -->

            <!--Start MODAL-->

            <!--End MODAL-->
            <!-- MESSAGE BOX-->
            <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
                <div class="mb-container">
                    <div class="mb-middle">
                        <div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
                        <div class="mb-content">
                            <p>Are you sure you want to log out?</p>
                            <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                        </div>
                        <div class="mb-footer">
                            <div class="pull-right">
                                <a href="index.php" class="btn btn-success btn-lg">Yes</a>
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
            <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
            <!-- END PLUGINS -->

            <!-- START THIS PAGE PLUGINS-->
            <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
            <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
            <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>


            <!--<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>-->
            <script>
                $(document).ready(function () {
                    $('#dataTables-example').dataTable();
                });
            </script>
            <!-- END THIS PAGE PLUGINS-->

            <!-- START TEMPLATE -->
            <script type="text/javascript" src="js/settings.js"></script>

            <script type="text/javascript" src="js/plugins.js"></script>
            <script type="text/javascript" src="js/actions.js"></script>

            <script type="text/javascript" src="js/demo_dashboard.js"></script>
            <!-- END TEMPLATE -->
            <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
            <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>

            <!-- END SCRIPTS -->



</body>

</html>