<?php
require_once 'require/logincheck.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>BFP-BC MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/cropped-bfp-new-logo-1.png">

    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" href="css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
    <?php require 'loadchart/employee.php'?>
    <!-- EOF CSS INCLUDE -->
    <style>
        @media printcro{
                @page{
                    size: letter;
                }
            }

            @media printassessor{
                @page{
                    size: letter;
                }
            }

            @media printinspection{
                @page{
                    size: letter;
                }
            }

            @media printinspector{
                @page{
                    size: letter;
                }
            }

            @media printevaluator{
                @page{
                    size: letter;
                }
            }



            @media print{
                @page{
                    size: letter;
                }
                .col-md-3{
                    display: none;
                }
                .listheading{
                    display: inline !important;
                }
                .hidden-header{
                    display: inline !important;
                }

                .croheading{
                    display: inline !important;
                }

                .assessorheading{
                    display: inline !important;
                }

                .inspectionheading{
                    display: inline !important;
                }

                .evaluatorheading{
                    display: inline !important;
                }

                .inspectorheading{
                    display: inline !important;
                }


                .ids{
                    display: hidden;
                }
            }



            #printcro{
                height:100%;
                margin: 0px 0px 0px 0px;
            }

            #printassessor{
                height:100%;
                margin: 0px 0px 0px 0px;
            }

            #printinspection{
                height:100%;
                margin: 0px 0px 0px 0px;
            }

            #printevaluator{
                height:100%;
                margin: 0px 0px 0px 0px;
            }

            #printinspector{
                height:100%;
                margin: 0px 0px 0px 0px;
            }

            #print{
                height:100%;
                margin: 0px 0px 0px 0px;
            }

        </style>
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <?php require 'require/sidebar-CRO.php'?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul id="hozironNav" class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
                </li>
                <!-- END SIGN OUT -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Reports</a></li>
                <li class="active"><a href="Report-Employee.php">Employee Record Reports</a></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
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
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <!--Start Default Table-->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel panel-default tabs">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active"><a href="#graphicaltab" data-toggle="tab">Graphical</a></li>
                                        <li><a href="#summarytab" data-toggle="tab">Summary</a></li>
                                        <li><a href="#detailedtab" data-toggle="tab">Detailed</a></li>
                                    </ul>
                                    <!--Start of Graphical Table -->
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="graphicaltab">
                                            <div id="chartContainer1" style="width: 100%; height: 300px"></div>
                                        </div>
                                        <!--End of Graphical Table -->

                                        <!-- Start of Summary Tab -->
                                        <div class="tab-pane" id="summarytab">
                                            <div class="panel-heading">
                                                <ul class="panel-controls">
                                                    <button class="btn btn-info btn-md" onclick="printContent('print')"><span
                                                            class="fa fa-print"></span> Print</button>
                                                </ul>
                                            </div>
                                            <div id="print">
                                                <hr>
                                                <label class="hidden-header" style="display: none">
                                                    <?php
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
?>
                                                    <br>
                                                    <h4 style="text-align:center;">Republic of the Philippines</h4>
                                                    <h3 style="text-align:center;">BUREAU OF FIRE PROTECTION</h3>
                                                    <h4 style="text-align:center;">Bacolod City</h4>
                                                    <br>
                                                    <h4>
                                                        <?php echo $today ?>
                                                    </h4>
                                                    <br>
                                                    <br>
                                                </label>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Officer Type</th>
                                                            <th>Officer Rank</th>
                                                            <th>Officer Name</th>
                                                            <th>Date Applied</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT * from `employee` where `year` = '$year'") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $fetch['officer_type'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['rank'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['officer_fname'] . ' ' . $fetch['officer_mname'] . ' ' . $fetch['officer_lname'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['date_applied'] ?>
                                                            </td>
                                                        </tr>
                                                        <?php
}
$conn->close();
?>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <h4 class="listheading" style="display:none">Approved By: </h4> <br>
                                                <br <br>
                                                <h3 class="listheading" style="display:none">
                                                    <?php echo $officername?>
                                            </div>
                                        </div>


                                        <!-- End of Summary Tab -->


                                        <!-- Start of Detailed Tab -->


                                        <div class="tab-pane" id="detailedtab">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Officer Type</th>
                                                        <th>
                                                            <center>Number of Employee per Category</center>
                                                        </th>
                                                        <th>View Employee</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>CRO</td>
                                                        <td>
                                                            <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'CRO' && `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();?>
                                                            <center><span class="label label-info label-form">
                                                                    <?php echo $fetch['total'] ?></span></center>
                                                        </td>
                                                        <td><button type="button" class="btn btn-default" data-toggle="modal"
                                                                data-target="#modal_cro"><i class="glyphicon glyphicon-eye-open"></i>View
                                                                Record</button>
                                                    </tr>

                                                    <tr>
                                                        <td>Assessor</td>
                                                        <td>
                                                            <?php

require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'Assessor' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();?>
                                                            <center><span class="label label-info label-form">
                                                                    <?php echo $fetch['total'] ?></span></center>
                                                        </td>
                                                        <td><button type="button" class="btn btn-default" data-toggle="modal"
                                                                data-target="#modal_assessor"><i class="glyphicon glyphicon-eye-open"></i>View
                                                                Record</button>

                                                    <tr>
                                                        <td>Inspection-CRO</td>
                                                        <td>
                                                            <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'Inspection-CRO' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();?>
                                                            <center><span class="label label-info label-form">
                                                                    <?php echo $fetch['total'] ?></span></center>
                                                        </td>
                                                        <td><button type="button" class="btn btn-default" data-toggle="modal"
                                                                data-target="#modal_inspectioncro"><i class="glyphicon glyphicon-eye-open"></i>View
                                                                Record</button>
                                                    </tr>


                                                    <tr>
                                                        <td>Inspector</td>
                                                        <td>
                                                            <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'Inspector' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();?>
                                                            <center><span class="label label-info label-form">
                                                                    <?php echo $fetch['total'] ?></span></center>
                                                        </td>
                                                        <td><button type="button" class="btn btn-default" data-toggle="modal"
                                                                data-target="#modal_inspector"><i class="glyphicon glyphicon-eye-open"></i>View
                                                                Record</button>
                                                    </tr>


                                                    <tr>
                                                        <td>Evaluator</td>
                                                        <td>
                                                            <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'Evaluator' && `year` = '$year' ") or die(mysqli_error());
$fetch = $query->fetch_array();?>
                                                            <center><span class="label label-info label-form">
                                                                    <?php echo $fetch['total'] ?></span></center>
                                                        </td>
                                                        <td><button type="button" class="btn btn-default" data-toggle="modal"
                                                                data-target="#modal_evaluator"><i class="glyphicon glyphicon-eye-open"></i>View
                                                                Record</button>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h3> Grand Total </h3>
                                                        </td>
                                                        <td>
                                                            <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT count(*) as total FROM `employee` where year = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();?>
                                                            <center><span class="label label-danger label-form">
                                                                    <?php echo $fetch['total'] ?></span></center>
                                                        </td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- End of Detailed Tab -->

                                    </div>
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
    <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->


    <?php require 'modals/employeereportmodals.php'?>
    <?php require 'require/logout.php'?>
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
                        <a href="index.php" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>

    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>

    <script>
        $(document).ready(function () {
            $("#pyear").on('change', function () {
                var year = $(this).val();
                window.location = 'Report-Employee.php?year=' + year;
            });
        });
    </script>


    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>

    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <!-- <script>
$(document).ready(function(){
$("#officer_type").change(function(){

var officer_type = $(this).val();

$.ajax({
url: "actions/getEmployee.php",
method: "POST",
data : {officer_type:officer_type},
success:function(data){
$('tbody').html(data);
var table = $('#employee').DataTable();
}
});
});
});
</script> -->

    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>

    <!-- <script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>-->
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script> -->


    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>

    <script type="text/javascript" src="js/demo_dashboard.js"></script>
</body>

</html>