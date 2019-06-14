<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>BFP-BC MIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->      
        <link rel="stylesheet" type="text/css" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
        <style>
            @media print{
                @page{
                    size: letter;
                    margin: 0px 0px 0px 0px;
                }
                .col-md-3{
                    display: none;
                }

                .hidden-header{
                    display: inline !important;
                }
            }
            #print{
                height:100%;
                margin:auto;
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
                        <a href="pages-login.html" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
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
                <div id="print">
                    <div class="page-content-wrap">

                        <div class="row">
                            <div class="col-md-12">
                                <!--Start Default Table-->
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-md-3">
                                            <select class="form-control select" id="officer_type" name="officer_type" data-live-search="true">
                                                <option selected disabled> Filter Officer Type </option>
                                                <?php
    require 'require/databaseconnection.php';
            $sql = "SELECT * FROM employee group by officer_type";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
            while( $rows = mysqli_fetch_assoc($resultset) ) {
                                                ?>
                                                <option value="<?php echo $rows["officer_type"]?>"> <?php echo $rows["officer_type"]?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <center>

                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button class="btn btn-success btn-md" onclick="printContent('print')"><span class="fa fa-print"></span> Print</button>
                                            </center>
                                        </div>
                                        <label class="hidden-header" style="display: none">
                                            <?php
                                            date_default_timezone_set('Asia/Manila');
                                            $today = date("M-d-Y");
                                            ?>
                                            <br>
                                            <h4>Republic of the Philippines</h4>
                                            <h3>BUREAU OF FIRE PROTECTION</h3>
                                            <h4>Bacolod City</h4>
                                            <br>
                                            <h4><?php echo $today?></h4>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="panel-body">
                                    <table id="employee" class="table table-condensed" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Officer Type</th>
                                                <th>Rank</th>
                                                <th>Officer Name</th>
                                                <th>Firestation</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
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


<?php require 'require/logout.php'?>

<script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>

<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>

<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script>
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
</script>

<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>  
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/settings.js"></script>

<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>

<script type="text/javascript" src="js/demo_dashboard.js"></script>
</body>
</html>






