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

<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
<!-- START X-NAVIGATION -->
<ul class="x-navigation">
<li class="xn-logo">
<a href="index.html"><strong>BFP-BC MIS</strong></a>
<a href="#" class="x-navigation-control"></a>
</li>

<div class="profile">
<div class="profile-image">
<img src="img/fireman2.png"/>
</div>
<div class="profile-data">
<div class="profile-data-name">John Doe</div>
<div class="profile-data-title">Customer Relations Officer</div>
</div>
</div>
<ul id="navSid">
<li>
<a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
</li>
<li class="xn-openable">
<a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Master File</span></a>
<ul>
<li><a href="DataEntry-EmpProf.html"><span class="fa fa-user"></span> Employee Profiling</a></li>
<li><a href="DataEntry-AppReg.html"><span class="fa fa-user"></span> Applicant Registration</a></li>
</ul>
</li>
<li class="active">
<a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Transaction</span></a>
<ul>
<li><a href="Transaction-Assessment.html"> Assessments & Payments</a></li>
<li class="active"><a href="Transaction-Inspection.php"> Inspection & Compliance</a></li>
<li><a href="Transaction-BuildEval.html">Building Evaluation</a></li>
<li><a href="#">Status Monitoring</a></li>
<li><a href="Transaction-Scheduling.html">Scheduling</a></li>
</ul>
</li>
<li class="xn-openable">
<a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Reports</span></a>
<ul>
<li><a href="Report-Certification.html"><span class=""></span> Certification</a></li>
<li class="xn-openable">
<a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Master File Report</span></a>
<ul>
<li><a href="Report-Applicant.html"><span class=""></span> Applicant Report</a></li>
<li><a href="Report-Employee.html"><span class=""></span> Employee Report</a></li>
</ul>
</li>
<li><a href=""><span class=""></span> Distress Call Report</a></li>
<li><a href=""><span class=""></span> Risk & Fire Frequency</a></li>
</ul>
</li>
<li class="xn-openable">
<a href="#"><span class="fa fa-warning"></span> <span class="xn-text">Distress Call</span></a>
<ul>
<li><a href="Distress-FireRespondents.html"><span class="fa fa-align-justify"></span> Fire Stations Respondents</a></li>
<li><a href="Distress-SMSandCall.html"><span class="fa fa-th-large"></span> SMS & Call Logs</a></li>
</ul>
</li>
<li class="xn-openable">
<a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Maintenance</span></a>
<ul>
<li><a href="#"><span class="fa fa-align-justify"></span> My Account</a></li>
<li><a href="#"><span class="fa fa-sort-alpha-desc"></span> User Management</a></li>
<li><a href="#"><span class="fa fa-download"></span> System Back Up</a></li>
</ul>
</li>
</ul>
<!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->

<!-- PAGE CONTENT -->
<div class="page-content">

<!-- START X-NAVIGATION VERTICAL -->
<ul id="hozironNav" class="x-navigation x-navigation-horizontal x-navigation-panel">
<!-- SIGN OUT -->
<li class="xn-icon-button pull-right">
<a href="pages-login.html" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
</li>
<!-- END SIGN OUT -->
</ul>
<!-- END X-NAVIGATION VERTICAL -->

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="#">Transaction</a></li>
<li class="active"><a href="Transaction-Inspection.php">Inspection Order and Compliance</a></li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

<div class="row">
<div class="col-md-12">
<form class="form-horizontal">
<div class="panel panel-default tabs">
<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#io-tab" role="tab" data-toggle="tab">Inspection Order</a></li>
    <li><a href="#ntc-tab" role="tab" data-toggle="tab">Issue Notice</a></li>
</ul>
<div class="panel-body tab-content">

<!-- Start Inspection Order Tab-->
<div class="tab-pane active" id="io-tab">
<form method="post" action="actions/addInspection.php" onsubmit="return confirm('Are you sure you want to add this Inspection Information?');"  >
        <!--Start Default Table-->

<div class="panel-body" id="io-panel">
<?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[application_no]'") or die(mysqli_error());
$fetch = $query->fetch_array();
$month2 = date("m", strtotime($fetch['month']));

$query2 = $conn->query("SELECT * FROM `inspection` order by io_no DESC limit 1") or die(mysqli_error());
$fetch2 = $query->fetch_array();

$month = date("m");
$year = date('Y');
$io_no = $fetch2['io_no'] + 1;

$today = date("y-d-m");

$query3 = $conn->query("SELECT * FROM `inspection_report` order by ir_no DESC limit 1") or die(mysqli_error());
$fetch3 = $query->fetch_array();
$ir_no = $fetch3['ir_no'] + 1;
?>
<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">IO No.</label>
            <div class="col-md-5">
                <div class="input-group">

                    <input type="text" class="form-control" id="io_no" name="io_no" readonly value="<?php echo 'IO' . '-' . $year . '-' . $month . '-' . $io_no ?>"/>
                </div>

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">App No.</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">

                    <input type="text" class="form-control" id="application_no" name="application_no" value="<?php echo $fetch['year'] . '-' . $month2 . '-' . $fetch['application_no'] ?>"  readonly />
                </div>

            </div>
        </div>
            <div class="form-group">
            <label class="col-md-3 control-label">Inspectors</label>
                            <div class="col-md-4 col-xs-12">
                                <select class="form-control"  id="inspector_name" name="inspector_name">
                                    <option value="Select">Select</option>
                                    <option value="Inspector Dalisay0">Inspector Dalisay</option>
                                    <option value="Inspector Dionisio">Inspector Dionisio</option>
                                    <option value="Inspector Henry">Inspector Henry</option>
                                </select>
                        </div>
                        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Owner Name:</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">

                    <input type="text" class="form-control" readonly id="owner_name" name="owner_name" value="<?php echo $fetch['owner_name'] ?>" />
                </div>

            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-md-3 control-label">Business Name:</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">

                    <input type="text" class="form-control" readonly id="business_name" name="business_name" value="<?php echo $fetch['business_name'] ?>"  />
                </div>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Est. Address:</label>
            <div class="col-md-9 col-xs-12">
                <div class="input-group">
                <input type="text" class="form-control" readonly id="establishment_address" name="establishment_address" value="<?php echo $fetch['establishment_address'] ?>" />
                </div>

            </div>
        </div>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_inspection"> <i class="fa fa-plus"></i>Add Schedule</button>

    </div>
    <div class="col-md-6">

        <div class="form-group">
            <label class="col-md-3 control-label">Date Applied: </label>
            <div class="col-md-9">
                <div class="input-group">
                    <input type="text" class="form-control" id="date" name="date" value="<?php echo $today ?>" readonly  />
                </div>
            </div>
        </div>
    </div>

</div>

</div>


<div class="panel-body">

<div class="row">

    <div class="col-md-6">

        <div class="form-group">
            <label class="col-md-4 control-label">Inspection Report No. :</label>
            <div class="col-md-6 col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" id="ir_no" name="ir_no" readonly value="<?php echo 'IR' . '-' . $year . '-' . $month . '-' . $ir_no ?>"/>
                </div>

        </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Application No. :</label>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" id="application_no" name="application_no" value="<?php echo $fetch['year'] . '-' . $month2 . '-' . $fetch['application_no'] ?>"  readonly/>
                </div>

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Owner Name :</label>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" readonly id="owner_name" name="owner_name" value="<?php echo $fetch['owner_name'] ?>" />
                </div>
            </div>
        </div>
            <div class="form-group">
            <label class="col-md-4 control-label">Address :</label>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" required id="owner_address" name="owner_address" />
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="col-md-6">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Bldg_Const"><i class="fa fa-plus"></i> Add Building Construction</button>
            </div>
            <div class="col-md-6">
                    <select class="form-control" id="ir_checklist" name="ir_checklist">
                            <option value="Select">Select</option>
                            <option value="Classification">Classification</option>
                            <option value="Exit Details">Exit Details</option>
                            <option value="Lightings and Signs">Lightings and Signs</option>
                            <option value="Features of Fire Protection">Features of Fire Protection</option>
                            <option value="Building Service Equipment">Building Service Equipment</option>
                            <option value="Hazardous Areas">Hazardous Areas</option>
                            <option value="Operating Features">Operating Features</option>
                    </select>
            </div>
        </div>
        <div class="form-group">
                <label for="recommend" class="col-md-3 control-label">Recommendation: </label>
                <br>
                <div class="col-md-10">
                    <textarea rows="3" cols="80" placeholder="Recommend for Deficiences" id="recommendation" name="recommendation"></textarea>
                </div>
        </div>


</div>


    <!--second row-->
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-4 control-label">Building Name :</label>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" id="building_name" name="building_name" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Address :</label>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control"  id="building_address" name="building_address" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Height of Bldg :</label>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" id="bldg_height" name="bldg_height" required>
                </div>
            </div>
        </div>

            <div class="form-group">
            <label class="col-md-4 control-label">Lot Size :</label>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" id="lot_size" name="lot_size" />
                </div>
            </div>
        </div>

            <div class="form-group">
            <label class="col-md-4 control-label">Number of Floors :</label>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" id="number_of_floors" name="number_of_floors"/>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="col-md-6">
                <input id="specify_id"type="text" class="form-control" placeholder="Specify Deficiency" id="deficiency" name="deficiency" />
            </div>
            <button type="button" class="btn btn-info" data-target="#New_Defects"><i class="fa fa-plus"></i></button>
        </div>
    </div>

</div>

</div>

<div class="panel-footer">
<div class="col-sm-6">
    <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
</div>
<div class="form-group">
        <div class="col-sm-13">
            <select class="btn btn-info pull-right"class="form-control" id="type_of_notice" name="type_of_notice">
                <option value="Select">Select</option>
                <option value="Comply">Comply</option>
                <option value="Correct Violation">Correct Violation</option>
            </select>
            <br>
            <button type="submit" class="btn btn-info" name="save_inspection"><span class="fa fa-check"></span>Save</button>
        </div>

    </div>
</div>
</form>
</div>




<!--second tab Start of Issue Notice Tab -->


<div class="tab-pane" id="ntc-tab">
        <div class="panel-body">
            <div class="row">
                <div class="form-group">
                    <label for="type-notice" class="col-md-2 control-label">Type of Notice: &nbsp;</label>
                    <div class="col-md-2"><select class="form-control" id="type-notice" disabled="">
                        <option value="1">Comply</option>
                        <option value="2">Correct Violation</option>
                    </select>
                    </div>
                    <label for="date-issue" class="col-md-2 control-label">Date Issued: </label>
                    <div class="col-md-2">
                        <input type="date" class="form-control" id="date-issue">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label for="amt-def" class="col-md-2 control-label">Amount: &nbsp;</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" disabled="" id="amt-def" value="0.00">
                    </div>
                    <label for="air-date" class="col-md-2 control-label">AIR Date </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="air-date" disabled="" placeholder="12-12-2018">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                        <label for="own-name" class="col-md-2 control-label">Owner Name: &nbsp;</label>
                        <div class="col-md-2">
                        <input type="text" class="form-control" id="own-name" disabled="" placeholder="Puatu Pep">
                        </div>
                        <label for="app-no" class="col-md-2 control-label">Application No. : </label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="app-no" disabled="" placeholder="00000000000">
                        </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label for="ins-name" class="col-md-2 control-label">Inspector Name: &nbsp;</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="ins-name" disabled="" placeholder="Inspector poppy">
                    </div>
                    <label for="ins-no" class="col-md-2 control-label">Inspection Order: </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="ins-no" disabled="" placeholder="00000000000">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label for="bus-name" class="col-md-2 control-label">Business Name: &nbsp;</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="bus-name" disabled="" placeholder="PP Company">
                    </div>
                    <label for="bus-add" class="col-md-2 control-label">Business Address: </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="bus-add" disabled="" placeholder="DP Street, City">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label for="spec-def" class="col-md-2 control-label">Deficiencies: &nbsp;</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="spec-def" disabled="" placeholder="Horizontal Exit">
                    </div>
                    <label for="grace-per" class="col-md-2 control-label">Grace Period: </label>
                    <div class="col-md-2">
                        <input type="date" class="form-control" id="grace-per">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="spec-def" disabled="" placeholder="Vertical Exit">
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <input type="date" class="form-control" id="grace-per">
                </div>
                </div>
            </div>
        </div>

        <div class="panel-footer">
            <div class="col-sm-6">
                <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
            </div>
            <div class="form-group">
                <button class="btn btn-success pull-right">Save <span class="fa fa-floppy-o fa-right"></span></button>
            </div>
        </div>
</div>

</div>
</div>
</form>
<?php require 'modals/addBuildingConst.php'?>
<?php require 'modals/addInspectionSchedule.php'?>
</div>
</div>




<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
<div class="mb-container">
<div class="mb-middle">
<div class="mb-title"><span class="glyphicon glyphicon-off"></span> Log <strong>Out</strong> ?</div>
<div class="mb-content">
<p>Are you sure you want to log out?</p>
<p>Press No if youwant to continue work. Press Yes to logout current user.</p>
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

<!-- END SCRIPTS -->
</body>
</html>
