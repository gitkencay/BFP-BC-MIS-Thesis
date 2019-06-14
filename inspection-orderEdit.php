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
                        $query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[appnum]'") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                        $month2 = date("m", strtotime($fetch['month']));

                        $today = date("M-d-Y");

                        $query3 = $conn->query("SELECT * FROM `inspection_order` order by io_no DESC limit 1") or die(mysqli_error());
                        $fetch3 = $query3->fetch_array();
                        $ir_no = $fetch3['io_no'];
                        
                        $month = date("m", strtotime($fetch3['month']));
                        $year = $fetch3['year'];
                        $io_no = 'IO' . '-' . $year . '-' . $month . '-' . $ir_no;

                        $query4 = $conn->query("SELECT * FROM `inspection_schedule` WHERE io_no = '$io_no' ") or die(mysqli_error());
                        $fetch4 = $query4->fetch_array();
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
                                                <!--Start Inspection Order-->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="app-name" class="col-sm-12 control-label">IO
                                                                No.</label>
                                                            <div class="col-md-6">
                                                                <input type="hidden" name="application_number" value="<?php echo $fetch['application_no'] ?>" />
                                                                <input type="hidden" class="form-control" name="io_no"
                                                                    value="<?php echo $io_no ?>"
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
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="" class="col-sm-12 control-label">Establishment Address</label>
                                                                <h4><strong>&nbsp;&nbsp;&nbsp;<?php echo $fetch3['estab_address']?><hr></strong></h4>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="" class="col-sm-12 control-label">Inspection Schedule:</label>
                                                                <h4><strong>&nbsp;&nbsp;&nbsp;<?php echo $fetch4['inspection_date']?><hr></strong></h4>
                                                            </div>
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
                                                <!--End Inspection Order-->

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
                                                                    name="message" value="<?php echo " We are the
                                                                    Bureau of Fire Protection - Bacolod City and we
                                                                    would like to inform you Mr/Ms
                                                                    " . $fetch['owner_name'] . " that your application
                                                                    did not pass the inspection, we issue notice to
                                                                    comply and we will message you for further notice.
                                                                    In case of Emergency please contact 117 or 434-5022
                                                                    or 434-5023. " ?>">
                                                                <input type="hidden" class="form-control" id="message2"
                                                                    name="message2" value="<?php echo " We are the
                                                                    Bureau of Fire Protection - Bacolod City and we
                                                                    would like to inform you
                                                                    " . $fetch['owner_name'] . " you have passed the
                                                                    inspection and your application is ready for
                                                                    clearance. In case of Emergency please contact 117
                                                                    or 434-5022 or 434-5023. " ?>">
                                                                <div class="col-md-5">
                                                                <a href="Reports/inspection-form.php?id=<?php echo $ir_no;?>"> 
                                                                <button type="button" class="btn btn-info" name="save_inspection"><span
                                                                            class="fa fa-file-text"></span>Print Inspection Order</button> </a>
                                                                </div>
                                                                    <input type="hidden" name="status_of_checklist">
                                                                <div class="col-md-4">
                                                                    
                                                                <a href="Transaction-Inspection.php"> <button type="submit" class="btn btn-info" name="save_inspection"><span
                                                                            class="fa fa-sign-in"></span>Proceed To After Inspection Report</button> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Panel Footer-->
                                               
                                                <?php require 'require/logout.php'?>
                                            </div>
                                    </div>
                                </div>
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
        function myFunctionBldg() {
            document.getElementById("addnoticec").style.display = "block";
            document.getElementById("addnoticey").style.display = "inline";
            document.getElementById("addnoticen").style.display = "inline";
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

                
     