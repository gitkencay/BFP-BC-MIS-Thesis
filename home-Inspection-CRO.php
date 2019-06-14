<?php
require_once 'require/logincheck.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BFP-BC MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/cropped-bfp-new-logo-1.png">
    <link rel="stylesheet" type="text/css" href="css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
    <?php require 'loadchart/barangay.php'?>
    <?php require 'loadchart/firefrequency.php'?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdesR37nt3_QOaZ6JrWvsf_LfjQM5QdH4&callback=initMap"></script>
    <script>
        var locations = [
            ['San Juan Fire Station, Bacolod, 6100 Negros Occidental', 10.675754, 122.948049],
            ['Lopez Jaena Sub - Fire Station, Bacolod, 6100 Negros Occidental', 10.669204, 122.959153],
            ['Brgy. Pahanokoy Sub - Fire Station, Bacolod, 6100 Negros Occidental', 10.612416, 122.932378],
            // ['Sum-ag', 10.6730082, 122.957805],
            // ['Granada', 10.674845, 122.9592894],
            // ['Dona Juliana', 10.674845, 122.9592894],
            ['Rodriguez Sub - Fire Station, Bacolod City 6100', 10.6655223, 122.9361916]
        ];

        function initMap() {
            var myLatLng = {
                lat: 10.6675065,
                lng: 122.9451055
            };

            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 14,
                streetViewControl: false,
                gestureHandling: 'greedy',
                mapTypeId: google.maps.MapTypeId.STREETMAP,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                    position: google.maps.ControlPosition.TOP_RIGHT
                },
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_TOP
                }
            });

            var count = 0;


            for (count = 0; count < locations.length; count++) {

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[count][1], locations[count][2]),
                    map: map
                });

                marker.info = new google.maps.InfoWindow({
                    content: locations[count][0]
                });


                google.maps.event.addListener(marker, 'click', function () {
                    var marker_map = this.getMap();
                    this.info.open(marker_map, this);
                });
            }
        }
    </script>
    <style>
        #map {
                height: 365px;
                width: 100%;
            }
        </style>
</head>

<body>
    <div class="page-container">
    <?php require 'require/sidebar-Inspection-CRO.php'?>
        <div class="page-content">
            <ul id="hozironNav" class="x-navigation x-navigation-horizontal x-navigation-panel">
                <li class="xn-icon-button pull-right">
                    <a href="index.php" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
                </li>
            </ul>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Dashboard</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <div class="form-group">
                            <select class="form-control select input-sm" data-style="btn-primary" id="pyear">
                                <option selected disabled>Select Year</option>
                                <?php
    require 'require/databaseconnection.php';
    $query = $conn->query("SELECT * FROM `application` group by year") or die(mysqli_error());

    while ($fetch = $query->fetch_array()) {
        ?>
                                <option value="<?php echo $fetch['year']; ?>">
                                    <?php echo $fetch['year'] ?>
                                </option>
                                <?php
    }
    ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget widget-default widget-carousel">
                            <div class="owl-carousel" id="owl-example">
                                <div>
                                    <?php

require 'require/databaseconnection.php';
$month = date('M');
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT sum(total_amount) as total FROM `assessment` WHERE `month` = '$month' && `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
$total = number_format($fetch['total'], 2, '.', ',');
?>

                                    <div class="widget-title">
                                        <?php echo $month ?> Total Collection</div>
                                    <div class="widget-int">
                                        <?php echo '₱' . ' ' . $total; ?>
                                    </div>
                                    <div class="widget-subtitle">
                                        <?php echo $year ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="widget-data">
                                <?php
require 'require/databaseconnection.php';
$month = date('M');
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `application` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();?>
                                <div class="widget-int num-count">
                                    <?php echo $fetch['total'] ?>
                                </div>
                                <div class="widget-title">TOTAL APPLICANTS</div>
                                <div class="widget-subtitle">
                                    <?php echo $year ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">

                        <?php
$month = date('M');
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `employee` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">
                                    <?php echo $fetch['total'] ?>
                                </div>
                                <div class="widget-title">OFFICERS</div>
                                <div class="widget-subtitle">
                                    <?php echo $year ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget-info widget-padding-sm">
                            <div class="widget-big-int plugin-clock">00:00</div>
                            <div class="widget-subtitle plugin-date">Loading...</div>
                            <div class="widget-buttons widget-c3">
                                <div class="col">
                                    <a href="#"><span class="fa fa-clock-o"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-bell"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-calendar"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Start graph -->
                    <!-- end graph -->

                    <div class="col-md-4">

                        <!-- START PROJECTS BLOCK -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title-box">
                                    <h3>Transaction</h3>
                                    <span>Transaction activity</span>
                                </div>
                                <ul class="panel-controls" style="margin-top: 2px;">
                                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span>
                                                    Collapse</a></li>
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span>
                                                    Remove</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body panel-body-table">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="40%">Transaction</th>
                                                <th width="20%">Status</th>
                                                <th width="30%">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!--Application-->
                                            <tr>
                                                <td rowspan="2"><strong>Application</strong></td>
                                                <td><span class="label label-danger">Pending</span></td>

                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `application` where `status` = 'Pending' && `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">Completed</span></td>
                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `application` where `status` = 'Complete' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>
                                            </tr>

                                            <!--Assessment-->

                                            <tr>
                                                <td rowspan="2"><strong>Assessment & Payment</strong></td>
                                                <td><span class="label label-danger">Pending</span></td>

                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `assessment` where `status` = 'Pending' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">Completed</span></td>
                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `assessment` where `status` = 'Complete' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>
                                            </tr>

                                            <!--Inspection-->

                                            <tr>
                                                <td rowspan="4"><strong>Inspection & Compliance</strong></td>
                                                <td><span class="label label-danger">Notice to Comply</span></td>

                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `inspection_order` where `status` = 'for compliance' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="label label-danger">Notice to Correct</span></td>
                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `inspection_order` where `status` != 'for compliance' && `status` != 'for certification' && `status` != 'For After Inspection Report' && `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><span class="label label-warning">After Inspection Report</span></td>
                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `inspection_order` where `status` = 'For After Inspection Report' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td><span class="label label-warning">Completed</span></td>
                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `inspection_order` where `status` = 'for certification' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>
                                            </tr>

                                            <!--Evaluation-->

                                            <tr>
                                                <td rowspan="2"><strong>Building Evaluation</strong></td>
                                                <td><span class="label label-danger">Pending</span></td>

                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `evaluation_checklist` where `status` = 'On Progress' && year = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">Completed</span></td>
                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `evaluation_checklist` where `status` = 'Ready for Certification' && year = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td rowspan="2"><strong>Certification</strong></td>
                                                <td><span class="label label-success">FSEC</span></td>

                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `application` where `assessment_status` = 'Evaluated' && year='$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><span class="label label-warning">FSIC</span></td>
                                                <td>
                                                    <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `application` where `assessment_status` = 'Inspected' && year='$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
                                                    <?php echo $fetch['total'] ?>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- END PROJECTS BLOCK -->

                    </div>

                    <div class="col-md-8">
                        <div id="chartContainer1" style="width: 100%; height: 460px"></div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary">
                            <?php $year = date("Y");?>
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Top 10 Barangays with most Number of Applications Year
                                        <?php echo $year; ?></strong></h3>
                            </div>
                            <div class="col-md-8">
                                <div class="panel-body">
                                    <?php
require 'require/databaseconnection.php';
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT *, count(barangay_name) as total FROM `application` where `year` = '$year' GROUP BY barangay_name order by total DESC limit 10") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    echo "
												<div class='messages'>
											<div class='item'>
												<div class='text'>
													<div class='heading'>
														<a href='#'>" . $fetch['barangay_name'] . "</a>
														</div>
														Applicants: " . $fetch['total'] . "
														</div>
														</div>
														</div>
														";
}
?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="chartContainer" style="width: 100%; height: 460px"></div>
                    </div>
                    <br>
                    <div class="col-md-8">
                        <div class="panel-title-box">
                            <span>
                                <h3>Bureau of Fire Protection - Bacolod Stations</h3>
                            </span>
                        </div>
                        <div id="map"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php require 'require/logout.php'?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script>
        $(document).ready(function () {
            $("#pyear").on('change', function () {
                var year = $(this).val();
                window.location = 'home-CRO.php?year=' + year;
            });
        });
    </script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <script type="text/javascript" src="js/demo_dashboard.js"></script>

    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
</body>

</html>