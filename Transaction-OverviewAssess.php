

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
                        <form method="post" action="actions/addAssessment.php" onsubmit="return confirm('Are you sure you want to add this Assessment?');"  >
                            <div class="panel-body">
                                <table>
                                    <thead>
                                        <tr>
                                        
                                            <?php
                                                require 'require/databaseconnection.php';
                                                $query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[application_no]'") or die(mysqli_error());
                                                $fetch = $query->fetch_array();

                                                $query2 = $conn->query("SELECT * FROM `assessment` order by ops_no DESC limit 1") or die(mysqli_error());
                                                $fetch2 = $query->fetch_array();
                                                // convert ang month nga name format to number format;
                                                $month = date("m");
                                                $year = date('Y');
                                                // plus 1 siya kay tungod ang pinaka latest na application no gna add 1 pra sa next na ma apply sa registration
                                                $ops_no = $fetch2['ops_no'] + 1;
                                                // gina merge ang month, year kag ang application no;
                                            ?>
                                            <th>
                                                <label for="location" class="col-md-8 control-label"><br>OPS No. &nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="ops_no"  value="<?php echo 'OPS'. '-' .$year. '-' .$month. '-' .$ops_no?>" readonly>  
                                                </div>
                                            </th>
                                            <th>
                                                <label for="cert" class="col-md-8 control-label"><br>Status&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select" id="status" name="status">
                                                    <option value="Select">Select</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Complete">Complete</option>
                                                    </select>   
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                 <label for="app-name" class="col-sm-5 control-label">Applicant Name&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="applicant_name" name="applicant_name" value="<?php echo $fetch['application_name']?>" disabled="">  
                                                </div>
                                            </th>
                                            <th>
                                                <label for="bus-name" class="col-sm-5 control-label">Business Name&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="business_name" name="business_name" value="<?php echo $fetch['business_name']?>" readonly>  
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="location" class="col-md-8 control-label"><br>Location&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="location" name="location" value="<?php echo $fetch['establishment_address']?>" readonly>  
                                                </div>
                                            </th>
                                            <th>
                                                <label for="cert" class="col-md-8 control-label"><br>Certificate Applying For&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="application_type" name="application_type" value="<?php echo $fetch['application_type']?>" readonly>  
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><h5><br>Applicable Fees</h5></th>
                                            <th><h5><br>Grand Total</h5></th>
                                            <th><h5><br>Amount to be Paid</h5></th>
                                        </tr>
                                        <tr>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                            <td><label>Fire Code Construction Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_FC_Constr" placeholder="Enter Amount" >  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="construction_tax" name="construction_tax" placeholder="Discounted Amount" readonly>  
                                                </div>
                                            </td>
                                            <script>
                                                $(document).on("change keyup blur", "#Ini_FC_Constr", function() {
                                                var main = $('#Ini_FC_Constr').val();
                                                var disc = 10;
                                                var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
                                                var mult = main*dec; // gives the value for subtract from main value
                                                $('#construction_tax').val(mult);
                                                });
                                            </script>
                                        </tr>
                                        <tr>
                                            <td><label>Fire Code Reality Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="Ini_FC_RT" placeholder="Enter Amount">  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="reality_tax" name="reality_tax" placeholder="Discounted Amount" readonly>  
                                                </div>
                                            </td>
                                            <script>
                                                $(document).on("change keyup blur", "#Ini_FC_RT", function() {
                                                var main = $('#Ini_FC_RT').val();
                                                var disc = 1;
                                                var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
                                                var mult = main*dec; // gives the value for subtract from main value
                                                $('#reality_tax').val(mult);
                                                });
                                            </script>
                                        </tr>
                                        <tr>
                                            <td><label>Fire Code Premium Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="Ini_FC_PreT" placeholder="Enter Amount">  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="premium_tax" name="premium_tax" placeholder="Discounted Amount" readonly>  
                                                </div>
                                            </td>
                                            <script>
                                                $(document).on("change keyup blur", "#Ini_FC_PreT", function() {
                                                var main = $('#Ini_FC_PreT').val();
                                                var disc = 2;
                                                var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
                                                var mult = main*dec; // gives the value for subtract from main value
                                               
                                                $('#premium_tax').val(mult);
                                                });
                                            </script>
                                        </tr>
                                        <tr>
                                            <td><label>Fire Code Sales Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_FC_ST" placeholder="Enter Amount">  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="sales_tax" name="sales_tax" placeholder="Discounted Amount" readonly>  
                                                </div>
                                            </td>
                                            <script>
                                                $(document).on("change keyup blur", "#Ini_FC_ST", function() {
                                                var main = $('#Ini_FC_ST').val();
                                                var disc = 2;
                                                var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
                                                var mult = main*dec; // gives the value for subtract from main value
                                                var discount = main-mult;
                                                $('#sales_tax').val(mult);
                                                });
                                            </script>
                                        </tr>
                                        <tr>
                                            <td><label>Fire Code Proceeds Tax</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_FC_ProT" placeholder="Enter Amount">  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="proceeds_tax" name="proceeds_tax" placeholder="Discounted Amount" readonly>  
                                                </div>
                                            </td>
                                            <script>
                                                $(document).on("change keyup blur", "#Ini_FC_ProT", function() {
                                                var main = $('#Ini_FC_ProT').val();
                                                var disc = 2;
                                                var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
                                                var mult = main*dec; // gives the value for subtract from main value
                                                var discount = main-mult;
                                                $('#proceeds_tax').val(mult);
                                                });
                                            </script>
                                        </tr>
                                        <tr>
                                            <td><label>Fire Safety Inspection Fee</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_FS_InspFee" placeholder="Enter Amount">  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="number" class="form-control-qty" id="inspection_fee" name="inspection_fee" placeholder="Discounted Amount" readonly>  
                                                </div>
                                            </td>
                                            <script>
                                                $(document).on("change keyup blur", "#Ini_FS_InspFee", function() {
                                                var main = $('#Ini_FS_InspFee').val();
                                                var disc = 10;
                                                var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
                                                var mult = main*dec; // gives the value for subtract from main value
                                                var discount = main-mult;
                                                $('#inspection_fee').val(mult);
                                                });
                                            </script>
                                        </tr>
                                        <tr>
                                            <td><label>Storage Clearance</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_StorClear" placeholder="Enter Amount">  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="storage_clearance" name="storage_clearance" placeholder="Discounted Amount" readonly>  
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
                                            <td><label>Conveyance Clearance</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_ConvClear" placeholder="Enter Amount">  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="conveyance_clearance" name="conveyance_clearance" placeholder="Discounted Amount" readonly>  
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
                                            <td><label>Installation Clearance</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_InstClear" placeholder="Enter Amount">  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="installation_clearance" name="installation_clearance" placeholder="Discounted Amount" readonly>  
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
                                            <td><label>Other Clearance Fee</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="Ini_OtherClear" placeholder="Enter Amount">  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-14">
                                                    <input type="text" class="form-control-qty" id="other_clearance" name="other_clearance" placeholder="Discounted Amount" readonly>  
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
                                            <td><label>Total Amount of Fire Code Fees</label></td>
                                            <td><label>Total Amount of Fire Code Fees</label></td>
                                            <td>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="total_amount" name="total_amount">  
                                                </div>
                                            </td>
                                            <script>                            
                                            $(".form-control-qty").on("value", function () {
                                            var total = 0;
                                            $(".form-control-qty").each(function () {
                                                total += parseInt(this.value) || 0;
                                            });
                                            var get = total;
                                            $('#total_amount').val(get);
                                            });    
                                            </script>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="panel-footer">  
                                    <div class="col-sm-6">
                                    <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                    </div> 
                                    <button type="submit" class="btn btn-info" name="submit"><span class="fa fa-check"></span>Save Changes</button>
                                </div>
                            </div>
                            </form>
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

