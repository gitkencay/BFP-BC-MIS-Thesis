<?php
require_once '../require/logincheck.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>BFP-BC MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/cropped-bfp-new-logo-1.png">
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" href="../css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->

    <link rel="stylesheet" href="../css/loader-3.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <style>
        @media print{
                @page {
                    margin: 10px 10px 10px 50px;
                    size: letter;
                }
                .listheading{
                    display: inline !important;
                }
                .view {
                    display: none !important;
                }
            }

            #print{
                height:100%;
                margin: 0px 0px 0px 0px;
            }
        </style>
</head>

<body>
    <div class="load-Nav" id="load-Nav-id"></div>
    <div class="page-container">
        <?php require '../require/sidebar-CRO.php'?>
        <div class="page-content">
            <?php require '../require/header.php'?>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>Reports</li>
                <li>Transaction Report</li>
                <li class="active"><strong><mark>Monthly Payment Report</mark></strong></li>
            </ul>
            <div class="page-content-wrap">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <?php 
                        require '../require/databaseconnection.php';
                        $year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
                        $query = $conn->query("SELECT * FROM `assessment` where year = '$_GET[year]'") or die(mysqli_error());
                        $fetch = $query->fetch_array();
                        $month = $fetch['month'];
                        $year = $fetch['year'];
                        ?>
                        <h3> Inspection Fee Tax </h3>
                        <h3> &nbsp; List of Applicants that paid on the Year <?php echo $year?> </h3>
                            <ul class="panel-controls">
                                <button class="btn btn-info btn-md" onclick="printContent('print')"><span class="fa fa-print"></span>
                                    Print </button>
                                <a href="../Report-Transaction.php"> <button class="btn btn-primary btn-md"><span
                                            class="fa fa-mail-reply"></span>
                                        Back </button> </a>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="print">
                            <div class="listheading" style="display: none">
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
                                    <?php echo $today?>
                                </h4>
                                <br>
                                <br>
                                <h3> Proceeds Tax </h3>
                                <h3> List of Applicants that paid on the Year <?php echo $year?> </h3>
                                <br>
                                <br>
                            </div>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                    <th>Applicant Name</th>
                                    <th>Business Name</th>
                                    <th>Type of Certificate</th>
                                    <th style="text-align: center;">Total Amount Paid</th>
                                    <th>Date Applied</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    require '../require/databaseconnection.php';
    $year = date('Y');
    if(isset($_GET['year']))
    {
        $year=$_GET['year'];
    }
                                        $query2 = $conn->query("SELECT * from `assessment` where proceeds_tax != '0' && year = '$year' order by proceeds_tax DESC") or die(mysqli_error());
                                        while ($fetchb = $query2->fetch_array()) {
                                            $totaldue = number_format($fetchb['proceeds_tax'],2,".",",");
                                        ?>

                                    <tr>
                <td>
                    <?php echo $fetchb['application_name']?>
                </td>
                <td>
                    <?php echo $fetchb['business_name']?>
                </td>
                <td>
                    <?php echo $fetchb['type_of_certificate']?>
                </td>
                <td  style="text-align: right;">
                    <?php echo $totaldue?>
                </td>
                <td>
                    <?php echo $fetchb['date_applied']?>
                </td>
                                    </tr>
                                    <?php
                                        }
                                        ?>
                                </tbody>
                            </table>
                            <hr>
                            <h4 class="listheading" style="display:none">Approved By: </h4> <br> <br> <br>
                            <h3 class="listheading" style="display:none">
                                <?php echo $officername?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start MODAL-->
    
    <?php require '../require/logout.php'?>
    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../ajax/checkusername.js"></script>
    <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
    <script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
    <script type='text/javascript' src='../js/plugins/jquery-validation/jquery.validate.js'></script>
    <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/settings.js"></script>

    <script type="text/javascript" src="../js/plugins.js"></script>
    <script type="text/javascript" src="../js/actions.js"></script>

    <script type="text/javascript" src="../js/demo_dashboard.js"></script>
    
</body>

</html>