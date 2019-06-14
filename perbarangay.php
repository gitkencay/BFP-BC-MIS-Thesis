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
        <link rel="stylesheet" type="text/css" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->     

        <link rel="stylesheet" href="css/loader.css">
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
            <?php require 'require/sidebar-CRO.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Data Entry</li>
                    <li class="active"><strong><mark>Employee</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <?php
    require 'require/databaseconnection.php';
    $year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
            $query = $conn->query("SELECT * FROM `fire_incident` where id = '$_GET[barangay_id]' && year = '$_GET[year]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $barangay = $fetch['barangay'];
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <ul class="panel-controls">
                                    <button class="btn btn-info btn-md" onclick="printContent('print')"><span class="fa fa-print"></span>
                                        Print </button>
                                        <a href="Report-FireFrequency.php"<button class="btn btn-primary btn-md" ><span class="fa fa-mail-reply"></span>
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
                                    <h3> Fire Incident Report for the Year 2019 </h3>
                                    <br>
                                    <br>
                                </div>
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Incident Time</th>
                                            <th>Incident Date</th>
                                            <th>No. of Structures Affected</th>
                                            <th>Type of Area</th>
                                            <th>Total Casualties</th>
                                            <th>No. of Civilian Injured</th>
                                            <th>Location</th>
                                            <th>Barangay</th>
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
                                        $query2 = $conn->query("SELECT * from `fire_incident` where barangay = '$barangay' && year = '$year' ") or die(mysqli_error());
                                        while ($fetchb = $query2->fetch_array()) {
                                        ?>

                                        <tr>
                                            <td><?php echo $fetchb['time'];?></td>
                                            <td><?php echo $fetchb['dateofincident'];?></td>
                                            <td><?php echo $fetchb['structures'];?></td>
                                            <td><?php echo $fetchb['areatype'];?></td>
                                            <td><?php echo $fetchb['casualties'];?></td>
                                            <td><?php echo $fetchb['civilianinjured'];?></td>
                                            <td><?php echo $fetchb['location'];?></td>
                                            <td><?php echo $fetchb['barangay'];?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <hr>
                                <h4 class="listheading" style="display:none">Approved By: </h4> <br> <br <br>
                                <h3 class="listheading" style="display:none"><?php echo $officername?></h3>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>
        <!--Start MODAL-->
        <?php require 'modals/addemployee.php'; ?>
        <?php require 'modals/updateEmployee.php'; ?>
        <?php require 'require/logout.php'?>

        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="ajax/checkusername.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>  
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>

        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <script>
            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>
    </body>
</html>






