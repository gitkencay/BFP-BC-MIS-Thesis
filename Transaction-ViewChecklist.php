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
    <link rel="stylesheet" type="text/css" href="css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
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
                    <a href="index.html">
                        <strong>BFP-BC MIS</strong>
                    </a>
                    <a href="#" class="x-navigation-control"></a>
                </li>

                <div class="profile">
                    <div class="profile-image">
                        <img src="img/fireman2.png" />
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">John Doe</div>
                        <div class="profile-data-title">Customer Relations Officer</div>
                    </div>
                </div>
                <ul id="navSid">
                    <li>
                        <a href="index.php">
                            <span class="fa fa-desktop"></span>
                            <span class="xn-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="xn-openable">
                        <a href="#">
                            <span class="fa fa-files-o"></span>
                            <span class="xn-text">Data Entries</span>
                        </a>
                        <ul>
                            <li>
                                <a href="DataEntry-EmpProf.php">
                                    <span class="fa fa-user"></span> Employee Profiling</a>
                            </li>
                            <li>
                                <a href="DataEntry-AppReg.php">
                                    <span class="fa fa-user"></span> Applicant Registration</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#">
                            <span class="fa fa-file-text-o"></span>
                            <span class="xn-text">Transaction</span>
                        </a>
                        <ul>
                            <li>
                                <a href="Transaction-Assessment.php"> Assessments & Payments</a>
                            </li>
                            <li>
                                <a href="Transaction-Inspection.php"> Inspection & Compliance</a>
                            </li>
                            <li class="active">
                                <a href="Transaction-BuildEval.php">Building Evaluation</a>
                            </li>
                            <li>
                                <a href="#">Status Monitoring</a>
                            </li>
                            <li>
                                <a href="Transaction-Scheduling.php">Scheduling</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#">
                            <span class="fa fa-bar-chart-o"></span>
                            <span class="xn-text">Reports</span>
                        </a>
                        <ul>
                            <li>
                                <a href="Report-Certification.php">
                                    <span class=""></span> Certification</a>
                            </li>
                            <li class="xn-openable">
                                <a href="#">
                                    <span class="fa fa-bar-chart-o"></span>
                                    <span class="xn-text">Master File Report</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="Report-Applicant.php">
                                            <span class=""></span> Applicant Report</a>
                                    </li>
                                    <li>
                                        <a href="Report-Employee.php">
                                            <span class=""></span> Employee Report</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <span class=""></span> Distress Call Report</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class=""></span> Risk & Fire Frequency</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#">
                            <span class="fa fa-warning"></span>
                            <span class="xn-text">Distress Call</span>
                        </a>
                        <ul>
                            <li>
                                <a href="Distress-FireRespondents.php">
                                    <span class="fa fa-align-justify"></span> Fire Stations Respondents</a>
                            </li>
                            <li>
                                <a href="Distress-SMSandCall.php">
                                    <span class="fa fa-th-large"></span> SMS & Call Logs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#">
                            <span class="fa fa-cogs"></span>
                            <span class="xn-text">Maintenance</span>
                        </a>
                        <ul>
                            <li>
                                <a href="Maintenance-MyAccount.php">
                                    <span class="fa fa-align-justify"></span> My Account</a>
                            </li>
                            <li>
                                <a href="Maintenance-UserManage.php">
                                    <span class="fa fa-sort-alpha-desc"></span> User Management</a>
                            </li>
                            <li>
                                <a href="Maintenance-SystemBackUp.php">
                                    <span class="fa fa-download"></span> System Back Up</a>
                            </li>
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
                    <a href="pages-login.html" class="mb-control" data-box="#mb-signout">
                        <span class="glyphicon glyphicon-off"></span>
                    </a>
                </li>
                <!-- END SIGN OUT -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Transaction</a>
                </li>
                <li>
                    <a href="Transaction-BuildEval.php">Building Evaluation</a>
                </li>
                <li class="active">
                    <a href="Transaction-EvalChecklist.php">Evaluation Checklist</a>
                </li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="AssessForm">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <form method="post" action="actions/editEvalChecklist.php" onsubmit="return confirm('Are you sure you want to edit this Evaluation Checklist?');"  >
                            <table>
                                <thead>
                                <?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `evaluation_checklist` WHERE `checklist_no` = '$_GET[checklist_no]'") or die(mysqli_error());
$fetch = $query->fetch_array();
$month = date("m", strtotime($fetch['month']));
$checklist_no = $fetch['checklist_no'];
?>

                                            <tr>
                                            <th>
                                                <label for="plan-eval" class="col-sm-5 control-label">Plan Evaluator&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                <input type="hidden" id="checklist_no" name="checklist_no"  value="<?php echo $fetch['checklist_no']?>"  />
                                                    <input type="text" class="form-control" required id="plan_evaluator" name="plan_evaluator" value="<?php echo $fetch['plan_evaluator']?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="eval-checkid" class="col-sm-5 control-label">Checklist No. &nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="checklist_no" name="checklist_no" value="<?php echo 'ECN' . '-' .$fetch['year'] . '-' .$month . '-' . $checklist_no ?>">
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="own-name" class="col-sm-5 control-label">
                                                    <br>Owner Name&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="owner_name" name="owner_name" readonly value="<?php echo $fetch['owner_name'] ?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="eval-checkid" class="col-sm-5 control-label">
                                                    <br>Business Name &nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="business_name" name="business_name" readonly value="<?php echo $fetch['business_name'] ?>">
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="proj-title" class="col-md-8 control-label">
                                                    <br>Project Title&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" required id="project_title" name="project_title" value="<?php echo $fetch['project_title']?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="loc-const" class="col-md-8 control-label">
                                                    <br>Location of Construction&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" required id="location" name="location"  value="<?php echo $fetch['location']?>">
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="occu-class" class="col-md-8 control-label">
                                                    <br>Occupancy Classification&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" required id="occupancy_classification" name="occupancy_classification"  value="<?php echo $fetch['occupancy_classification']?>">
                                                </div>
                                            </th>
                                            <th>
                                                <label for="date-rec" class="col-md-8 control-label">
                                                    <br>Date Received&nbsp;&nbsp;</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control datepicker" required id="date_received" name="date_received" value="<?php echo $fetch['date_received']?>"> 
                                                </div>
                                            </th>
                                        </tr>
                                </thead>
                            </table>
                            <br>
                            <br>
                            <br>
                            <h3>
                                <label>Building Evaluation Checklist</label>
                            </h3>
                            <br>

                            <!--Row accordion starts-->
                            <div class="row">

                                <div class="col-md-5">
                                    <!-- START ACCORDION -->
                                    <div class="panel-group accordion">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#means_egress_acddg">
                                                        Means of Egress
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body panel-body" id="means_egress_acddg">
                                            <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$means_of_egrees = $fetch['means_of_egrees'];
$check = explode(",", $means_of_egrees);
?>

                                                    <label><input type="checkbox" class="icheckbox" value="Means_Egrees_Req_1" name="means_of_egrees[]"
                                                    <?php
if (in_array("Means_Egrees_Req_1", $check)) {
    echo "checked";
}
?>
                                                    >&nbsp;Building exits must abut a public street or approved alley.</label> <br>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                        <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_2" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_2", $check)) {
    echo "checked";
}
?>                                                             >&nbsp;Provide at least two (2) means of egress for each floor, room.
                                                            </label> <br>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_3" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_3", $check)) {
    echo "checked";
}
?>                                                        >&nbsp;Provide secondary stairs/exits as far/remote from main stair, to serve ___.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_4" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_4", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Enclose all stairways and ire escapes with walls having	hours of fire resistance with access thru self-closing fire doors.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_5" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_5", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Provide two (2) doors as exit ways from all rooms.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_6" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_6", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Interconnect stairs and fire escapes with fire resistive passageways on corridors at least ____ meters wide.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_7" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_7", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Enclose walls, doors, stairs ramps, escalators and other components of exits systems.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_8" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_8", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Provide protected/enclosed horizontal exits with self-closing fire doors.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_9" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_9", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Travel distance to an exit shall not be more than ___ meters.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_10" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_10", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Exit doors shall swing in the direction of exit travel.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_11" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_11", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Revolving doors shall not be used as means of egress except_________.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_12" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_12", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Exit door/s should be openable from the inside without the use of keys, special knowledge or effort flush bolts or surface bolts are prohibited.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_13" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_13", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Exit door should have a minimum width of 71 cm and a maximum width 122 cm and shall not restrict the opening.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_14" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_14", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;A floor or landing is required not less than the width of exit door.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_15" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_15", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Door should be not project into the required corridor width when fully opened so as not to reduce the corridor width to less than 76.17 cm.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_16" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_16", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Exit doors should provide immediate access to an approved means of egress. Exiting through a bathroom, bedroom or other room subject to locking does not comply.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_17" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_17", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Corridors should have a minimum width of _________ meters.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_18" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_18", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Required corridors in   occupancies shall have.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_19" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_19", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Dead-end corridors and exit balconies is limited to 6.08 m (20 ft).
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_20" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_20", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Aisles in auditorium shall be minimum of ____ meters in width.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_21" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_21", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Walls and ceilings  of  corridors  should  be  fire  resistive  construction materials.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_22" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_22", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Interior  openings  into  corridor  should  be  protected  as  set  forth  in ____________________________.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_23" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_23", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Main stairways should have a minimum width of 112 cm. Trims and handrails should not project more than 8.90 cm (3 1/2 in) into the required width.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_24" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_24", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Landings on stairways should have a minimum dimension of 112 cm (44 in) in the direction of travel.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_25" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_25", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Risers on stairways should not exceed 19 cm and tread exclusive of nosing or projections should not be less than 25 cm.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_26" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_26", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Doors between guest’s rooms and corridors shall be self-closing and shall have a fire protection rating at least twenty (20) minutes.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_28" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_28", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Openings in corridor partitions other than door openings shall be prohibited.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_29" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_29", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Basement portion of stairways should be provided with an approved barrier where continuous to upper floor in an exit enclosure.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_30" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_30", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Vertical distance between stairway landings are limited to 3.69 m (12 ft) in assembly occupancies, distance is 2.43 m (8 ft).
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_31" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_31", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Handrails should be placed not less than 81.28 cm (32 in) above the tread. Two (2) handrails are required when stairways exceed 111.7 cm in width.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_32" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_32", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Guardrails for stairs, balconies, stair landings, ramps & aisles located along the edge of openside floors and mezzanines shall be provided.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_33" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_33", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;There shall be no enclosed usable space under the stairs in an exit enclosure nor shall the open space under such stairs be used for any purpose.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_34" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_34", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Non-combustible outside stairs are required to have 2.03 m (6 ft, 8 in) minimum headroom clearance for stairways which should be indicated on plans.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_35" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_35", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Ramp slopes should have be roughened or with nonslip surface.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_36" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_36", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Ramp slopes should not exceed 30.3 cm. (1 ft) in 3.03 m (10 ft.).
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_37" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_37", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;No openings other than the required exits are permitted and exit passageways should be one (1) hr fire resistive construction for a three (3) storey building or less and two (2) hrs for four (4) storey building or more. Any opening therein shall be protected with an approved self-closing fire doors.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_38" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_38", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Exit illumination and directional EXIT signs shall be provided.
                                                            </label>
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label>
                                                            <input type="checkbox" class="icheckbox" value="Means_Egrees_Req_39" name="means_of_egrees[]"
                                                            <?php
if (in_array("Means_Egrees_Req_39", $check)) {
    echo "checked";
}
?>
                                                            >&nbsp;Panic hardware is required on exit doors. In lieu of this, doors shall have no locks or latches.
                                                            </label>
                                                            <?php
$means_of_egrees = $fetch['means_of_egrees'];
$check = explode(",", $means_of_egrees);
?>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#compart_accdg">
                                                        Compartmentation
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body" id="compart_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$compartmentation = $fetch['compartmentation'];
$check2 = explode(",", $compartmentation);
?>
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_1" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_1", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide fire break up to the roof for ceiling areas.
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_2" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_2", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide monitored and curtained roof of sheet metal or non-combustible material of a minimum of 1.82m (6 ft) high spaced not more than 76 m (250 ft) & curtained area limited to a minimum of 4, 630 m2 (50,000 ft2).
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_3" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_3", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide smoke partition at enclosed areas of 2, 083 m2 (22, 500 ft2) or less with the length of 45.7m (150 ft) or less, with self-closing fire doors.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_4" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_4", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide  smoke  partition  of  two  (2)  hour  fire  resistance  from  floor  to underside of floor above.
                                                        </label>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_5" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_5", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide interior finish as follows; Exit; Class _________ </br> Access to Exit; Class ___________ </br> Other Spaces; Class _________
                                                        </label>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Compartmentation_Req_6" name="compartmentation[]"
                                                        <?php
if (in_array("Compartmentation_Req_6", $check2)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide fire stopping for all concealed spaces.
                                                        </label>
                                                        <?php
$compartmentation = $fetch['compartmentation'];
$check2 = explode(",", $compartmentation);
?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#walls_accdg">
                                                        Walls
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body" id="walls_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$walls = $fetch['walls'];
$check3 = explode(",", $walls);
?>
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Walls_Req_1" name="walls[]"
                                                        <?php
if (in_array("Walls_Req_1", $check3)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide standard fire wall with at least 100 cm (39.38 in) high parapets on all portion of the building on the property line.
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Walls_Req_2" name="walls[]"
                                                        <?php
if (in_array("Walls_Req_2", $check3)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Extend exterior masonry walls to form parapets or wings.
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Walls_Req_3" name="walls[]"
                                                        <?php
if (in_array("Walls_Req_3", $check3)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide protection of all exterior walls. All exterior walls facing approved alleys which are dead-ended must have a fire resistance of ______ hours.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Walls_Req_4" name="walls[]"
                                                        <?php
if (in_array("Walls_Req_4", $check3)) {
    echo "checked";
}
?> 
                                                        >&nbsp;Provide automatic fire dampers on wall openings.
                                                        </label>
                                                        <?php
$walls = $fetch['walls'];
$check3 = explode(",", $walls);
?>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END ACCORDION -->
                                </div>

                                <div class="col-md-5">

                                    <!-- START ACCORDION -->
                                    <div class="panel-group accordion accordion-dc">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#warning_accdg">
                                                        Warning Systems
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body panel-body" id="warning_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$warning_systems = $fetch['warning_systems'];
$check4 = explode(",", $warning_systems);
?>
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_1" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_1", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide approved emergency alarm bell system on each floor with adequate number of sending stations.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_2" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_2", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide approved type heat and smoke detection system.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_3" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_3", $check4)) {
    echo "checked";
}
?>
                                                    >&nbsp;Provide efficient communication system for warning occupants and calling fire department.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_4" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_4", $check4)) {
    echo "checked";
}
?>
                                                    >&nbsp;Provide/post   allowable   occupant   load   sign/s.   Such   signs   shall   be conspicuously and suitably located.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_5" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_5", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide fire protection/suppression during construction.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_7" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_7", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide fire exit plan for each floor of the building showing the routes from each room to appropriate exits, displayed prominently on the door of each room.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_8" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_8", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;No heating or lighting apparatus or equipment capable of igniting flammable materials shall be used in any storage or work area where rags, excelsior, hair or other highly flammable or combustible materials are stored or used.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_9" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_9", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide/post "NO SMOKING" sign/s where combustible materials are stored or handled. Such signs shall be conspicuously and suitable located.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_10" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_10", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;If   high   hazard   commodities   will   be   stored/handled,   automatic   fire suppression system shall be provided.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_11" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_11", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide/post "DO NOT USE ELEVATOR IN CASE OF FIRE" sign/s.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_12" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_12", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;LPG tank/s must be installed outside the building and should be provided with safety devices that automatically stop the flow of gas should a leak develop.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_13" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_13", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide fire resistive walls between stair & kitchen area.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_14" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_14", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide outside window/s for rescue and ventilation with a minimum clear opening of 55 cm and approximately one half (0.5) m2 in area; the bottom of window opening is not more than eighty two (82) cm above the floor; it can readily be opened from the inside without the use of tools; where storm windows, screens, or antiburglar devices are used, these be provided with quick mechanism so that they may be so arranged that when opened they will not drop to the ground.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_15" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_15", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Rooms used for kindergarten, first or second grade pupils shall not be located above or below the floor of exit discharge. Rooms used for second grade pupils shall not be located more than one (1) storey above the floor of exit discharge.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_16" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_16", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Provide firefighters’ elevator.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_17" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_17", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;All correction indicated on the original approved plan from this office on shall be followed.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_18" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_18", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Any changes in occupancy other than stated shall be in accordance with Rule 10.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_19" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_19", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Subject to inspection during construction.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_20" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_20", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Fire Safety Inspection Certificate must be secured before/prior to issuance of Certificate of Occupancy.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>
                                                        <input type="checkbox" class="icheckbox" value="Warning_Req_21" name="warning_systems[]"
                                                        <?php
if (in_array("Warning_Req_21", $check4)) {
    echo "checked";
}
?> 
                                                    >&nbsp;Subject to additional requirements upon recommendation of the Fire Safety Inspector during construction phase and final inspection.
                                                    </label>
                                                    <?php
$warning_systems = $fetch['warning_systems'];
$check4 = explode(",", $warning_systems);
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#FirePro_accdg">
                                                        Fire Protection
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body" id="FirePro_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$fire_protection = $fetch['fire_protection'];
$check5 = explode(",", $fire_protection);
?>
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_1" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_1", $check5)) {
    echo "checked";
}
?>
                                                    >&nbsp;Provide approved type portable fire extinguisher (dry chemical) ABC type,	_________ lbs. capacity for every 278 m2. (3000 ft2) of floor area or
                                                        22.8 m (75 ft) travel distance on every floor level. 
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_2" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_2", $check5)) {
    echo "checked";
}
?>
                                                        >Provide dry & wet standpipe system with        mm Ф riser and coupling
                                                        of fire department standards with pumps of reliable pressure & connected to an adequate water supply tank. Hose and hose cabinet shall be provided at every hose gate valve on all floors.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_3" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_3", $check5)) {
    echo "checked";
}
?>
                                                        >&nbsp;Provide Fire Service connection with a standard outlet of 64 mm Ф, and 102 mm Ф dry standpipe, and shall located on a street front.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_4" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_4", $check5)) {
    echo "checked";
}
?>
                                                        >&nbsp;Provide automatic fire extinguishing system where kitchen equipment is located (Kitchenhood).
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_5" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_5", $check5)) {
    echo "checked";
}
?>
                                                        >&nbsp;Provide automatic chemical extinguishing system on all areas where electronic/electrical equipment are located.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Fire_Protection_Req_6" name="fire_protection[]"
                                                        <?php
if (in_array("Fire_Protection_Req_6", $check5)) {
    echo "checked";
}
?>
                                                        >&nbsp;Provide   approved-type   automatic   fire   extinguishing   system   in accordance with NFPA 13.  Approval of system plan is required prior to installation.
                                                    </label>
                                                    <?php
$fire_protection = $fetch['fire_protection'];
$check5 = explode(",", $fire_protection);
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#miscell_accdg">
                                                        Miscellaneous
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-body" id="miscell_accdg">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <?php
$miscellaneous = $fetch['miscellaneous'];
$check6 = explode(",", $miscellaneous);
?>
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_1" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_1", $check6)) {
    echo "checked";
}
?>
                                                    >&nbsp;Provide outside window opening on bedrooms with a clear opening of not less than fifty six (56) cm in least dimension and forty five- hundredths (0.45) m2 in area. The bottom of the window shall be not more than one hundred twenty two (122) cm above the floor.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_2" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_2", $check6)) {
    echo "checked";
}
?>                                                  
                                                    >&nbsp;All  liquefied  petroleum  gas  equipment  including  such  equipment installed at utility gas plants shall be installed in accordance with the provisions of NFPA 59.
                                                    </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_3" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_3", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;No  grills  or  any  obstruction  shall  be  installed  on  window  openings and/or fire exits.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_4" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_4", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;Provide emergency lighting facilities with automatic transfer switch to AC/DC power source.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_5" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_5", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;Air conditioning ducts must be provided with approved fire dampers.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_6" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_6", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;Roof covering must be of non-combustible materials. Combustible roof covering must have fire retardant treatment.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_7" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_7", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;Provide fire escape ladder/s.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_8" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_8", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;Provide fire escape stair/s.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_9" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_9", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;All unit partition wall shall be extended up to upper floor slab and/or one (1) meter above the roofline.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_10" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_10", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;Provide effective means of smoke ventilation such as access panels, movable windows.
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" class="icheckbox" value="Miscellaneous_Req_11" name="miscellaneous[]"
                                                        <?php
if (in_array("Miscellaneous_Req_11", $check6)) {
    echo "checked";
}
?>                                                
                                                    >&nbsp;Project  activity  shall  not  affect  the  effectivity  of  the  existing  fire protection facilities.
                                                    </label>
                                                    <?php
$miscellaneous = $fetch['miscellaneous'];
$check6 = explode(",", $miscellaneous);
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END ACCORDION -->

                                </div>

                            </div>



                            <div class="panel-footer">
                                <!-- <div class="col-sm-6">
                                            <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                        </div>  -->
                                <button type="submit" class="btn btn-info" name="save_eval_checklist"><span class="fa fa-check"></span>Save Changes</button>
                            </div>
                            </form>
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
                        <div class="mb-title">
                            <span class="glyphicon glyphicon-off"></span> Log
                            <strong>Out</strong> ?</div>
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
            <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>

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