

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
            <?php require 'require/sidebar.php'?>
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
                        
                            <div class="panel-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `assessment` WHERE `ops_no` = '$_GET[ops_no]'") or die(mysqli_error());
$fetch = $query->fetch_array();
$month2 = date("m", strtotime($fetch['month']));

$ops_no = $fetch['ops_no'];

?>
                                         <th>
                                                <label for="location" class="col-md-8 control-label"><br>OPS No. &nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="ops_no"  value="<?php echo 'OPS' . '-' . $fetch['year'] . '-' . $month2 . '-' . $ops_no ?>" readonly>
                                                </div>
                                            </th>
                                            <th>
                                                <label for="cert" class="col-md-8 control-label"><br>Status&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select" id="status" name="status">
                                                    <option value="<?php echo $fetch['status']?>"><?php echo $fetch['status']?></option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Complete">Complete</option>
                                                    </select>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                        <th>
                                        <input type="hidden" class="form-control" id="application_no" name="application_no"  value="<?php echo $fetch['application_no'] ?>">
                                        <label for="app-name" class="col-sm-5 control-label">Applicant Name&nbsp;&nbsp;</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="applicant_name" name="application_name" value="<?php echo $fetch['application_name'] ?>" readonly>
                                            </div>
                                        </th>
                                            <th>
                                                <label for="bus-name" class="col-sm-5 control-label">Business Name&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="business_name" name="business_name" value="<?php echo $fetch['business_name'] ?>" readonly>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="location" class="col-md-8 control-label"><br>Location&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="location" name="location" value="<?php echo $fetch['location'] ?>" readonly>
                                                </div>
                                            </th>
                                            <th>
                                                <label for="cert" class="col-md-8 control-label"><br>Certificate Applying For&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="application_type" name="application_type" value="<?php echo $fetch['type_of_certificate'] ?>" readonly>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <script type="text/javascript" src="js/jquery.min.js"></script>
                                    <tbody>
                                        <tr>
                                            <th><h5><br>Applicable Fees</h5></th>
                                            <th><h5><br>Grand Total</h5></th>
                                            <th><h5><br>Amount to be Paid</h5></th>
                                        </tr>
                                        <tr>

                                            <td><label>Fire Code Construction Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_FC_Constr"  readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="construction_tax" name="construction_tax" readonly value="<?php echo $fetch['construction_tax']?>">
                                                </div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            <td><label>Fire Code Reality Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="Ini_FC_RT"  readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="reality_tax" name="reality_tax" readonly value="<?php echo $fetch['reality_tax']?>">
                                                </div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            <td><label>Fire Code Premium Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="Ini_FC_PreT"  readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="premium_tax" name="premium_tax" readonly value="<?php echo $fetch['premium_tax']?>">
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><label>Fire Code Sales Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_FC_ST"  readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="sales_tax" name="sales_tax" readonly value="<?php echo $fetch['sales_tax']?>">
                                                </div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            <td><label>Fire Code Proceeds Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_FC_ProT"  readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="proceeds_tax" name="proceeds_tax" readonly value="<?php echo $fetch['proceeds_tax']?>">
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><label>Fire Safety Inspection Fee</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_FS_InspFee" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="number" class="form-control-qty" id="inspection_fee" name="inspection_fee" readonly value="<?php echo $fetch['inspection_fee']?>">
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><label>Storage Clearance</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_StorClear"  readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="storage_clearance" name="storage_clearance" readonly value="<?php echo $fetch['storage_clearance']?>">
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><label>Conveyance Clearance</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_ConvClear" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="conveyance_clearance" name="conveyance_clearance" readonly value="<?php echo $fetch['conveyance_clearance']?>">
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><label>Installation Clearance</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_InstClear" readonly >
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="installation_clearance" name="installation_clearance" readonly value="<?php echo $fetch['installation_clearance']?>">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Other Clearance Fee</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_OtherClear" readonly >
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="other_clearance" name="other_clearance" readonly value="<?php echo $fetch['other_clearance']?>">
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><label>Total Amount of Fire Code Fees</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control-qty" id="total_amount" name="total_amount" readonly value="<?php echo $fetch['total_amount']?>">
                                                </div>
                                            </td>
                                        </tr>
                                        <br>
                                        <tr>
                                            <td><label>Payment</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control-qty" id="payment" name="payment" readonly value="<?php echo $fetch['payment']?>" >
                                                </div>
                                            </td>
                                        </tr>
                                        <br>
                                        <tr>
                                            <td><label>Change</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control-qty" id="changed" name="changed" readonly value="<?php echo $fetch['changed']?>">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="panel-footer">
                                <a href="Transaction-Assessment.php"><button type="submit" class="btn btn-danger" name="save_inspection"><span class="fa fa-close"></span>Exit</button></a>        
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

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

