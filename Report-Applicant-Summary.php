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
        <link rel="stylesheet" type="text/css" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
        <?php require 'loadchart/applicationgraphs.php'?>
        <style>
            @media print{

                @page {
                    margin: -155px 10px 100px -200px;
                    size: letter;
                }
                .listheading{
                    display: inline !important;
                }

                #print * {
                    visibility: visible;
                }
                .print{
                    display: none !important;
                }
                .ts-button {
                    display: none !important;
                }

                #navSid{
                    display: none !important;
                }

                .buttonhide{
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
        <div class="page-container">
            <?php require 'require/sidebar-CRO.php'?>
            <div class="page-content">
                <ul id="hozironNav" class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button pull-right">
                        <a class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
                    </li> 
                </ul>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="#">Reports</li>
                    <li class="#">Master File Report</li>
                    <li> <a href="Report-Applicant-Summary.php">Applicant Case Report </a></li>
                </ul>   
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="btn-group pull-left">
                                        <div class="form-group">
                                            <select class="form-control select input-sm" data-style="btn-primary" id="pyear">
                                                <option selected disabled>Select Year</option>
                                                <?php
    require 'require/databaseconnection.php';
        $query = $conn->query("SELECT * FROM `application` group by year") or die(mysqli_error());

        while($fetch = $query->fetch_array()){
                                                ?>
                                                <option value="<?php echo $fetch['year'];?>"><?php echo $fetch['year']?></option>
                                                <?php
        }
                                                ?> 
                                            </select>
                                        </div>
                                    </div>

                                    <div class="btn-group pull-left">
                                        <div class="form-group">
                                            <select class="form-control select input-sm" data-style="btn-info" id="select-report" name="filterbutton">
                                                <option selected="selected" disabled="disabled" value=""default>Filter Report</option>
                                                <option value="monthly">Monthly</option>
                                                <option value="quarterly">Quarterly</option>
                                                <option value="yearly">Yearly</option>
                                                <option value="barangay">Per Barangay</option>
                                                <option value="assessment">Per Status</option>
                                                <option value="permit">Per Type of Permit</option>
                                                <option value="building">Per Type of Building</option>
                                                <option value="application">Per Type of Application</option>
                                            </select>

                                        </div>
                                    </div>                                   
                                    <h3 class="panel-title">Applicant Case Report</h3>
                                    <div class="pull-right">
                                            <span class="label label-primary"><i class="fa fa-print"></i> Press <strong> P </strong> to Print!</span>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="print">
                                        <div class="listheading" style="display: none;">
                                            <?php
                                            date_default_timezone_set('Asia/Manila');
                                            $today = date("M-d-Y");
                                            ?>
                                            <br>
                                            <h4>Republic of the Philippines</h4>
                                            <h3>BUREAU OF FIRE PROTECTION</h3>
                                            <h4>Bacolod City</h4>
                                            <br>
                                            <h4>
                                                <?php echo $today?>
                                            </h4>
                                            <br>
                                        </div>
                                        <div class="default"></div>
                                        <div id="chartContainer">
                                        <div id="chartContainer1" class="monthly reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer2" class="quarterly reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer3" class="yearly reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer4" class="barangay reporttype" style="width: 100%; height: 300px"></div> 
                                        <div id="chartContainer5" class="assessment reporttype" style="width: 100%; height: 300px"></div>
                                        <div id="chartContainer6" class="permit reporttype" style="width: 100%; height: 300px"></div> 
                                        <div id="chartContainer7" class="building reporttype" style="width: 100%; height: 300px"></div> 
                                        <div id="chartContainer8" class="application reporttype" style="width: 100%; height: 300px"></div> 
                                        <?php require 'filterreports/monthlyapplication.php'?>
                                        <?php require 'filterreports/quarterlyapplication.php'?>
                                        <?php require 'filterreports/yearlyapplication.php'?>
                                        <?php require 'filterreports/barangayapplication.php'?>
                                        <?php require 'filterreports/statusapplication.php'?>
                                        <?php require 'filterreports/permitapplication.php'?>
                                        <?php require 'filterreports/buildingapplication.php'?>
                                        <?php require 'filterreports/typeapplication.php'?>
                                        </div>
                                        <hr>
                                        <h4 class="listheading" style="display:none">Approved By: </h4> <br> <br> <br>
                                        <h3 class="listheading" style="display:none"><?php echo $officername?></h3>
                                    </div>
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>
        </div>            

        <?php require 'require/logout.php'?>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>  
        <script type="text/javascript" src="js/actions.js"></script> 

        <script type="text/javascript">
            $(document).ready(function(){
                $("select").change(function(){
                    $(this).find("option:selected").each(function(){
                        var optionValue = $(this).attr("value");
                        if(optionValue){
                            $(".reporttype").not("." + optionValue).hide();
                            $("." + optionValue).show();
                        } else{
                            $(".reporttype").hide();
                        }
                    });
                }).change();
            });
        </script>
        <script>
            document.body.addEventListener("keydown", function (event) {
                if (event.keyCode === 80) {
                    javascript:window.print();
                }
            });
        </script>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'report-applicant-summary.php?year='+year;
                });
            });
        </script>
    </body>
</html>






