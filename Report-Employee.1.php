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
        <style>
            @media print{
                @page{
                    size: letter;
                    margin: 0px 0px 0px 0px;
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
                    <div class="page-content-wrap">

                        <div class="row">
                            <div class="col-md-12">
                                <!--Start Default Table-->

                                <!--Start of Graphical Table -->
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="panel panel-default tabs">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="active"><a href="#graphicaltab" data-toggle="tab">Graphical</a></li>
                                                <li><a href="#summarytab" data-toggle="tab">Summary</a></li>
                                                <li><a href="#detailedtab" data-toggle="tab">Detailed</a></li>
                                            </ul>
                                            <div class="panel-body tab-content">
                                                <div class="tab-pane active" id="graphicaltab">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dolor sem, quis pharetra dui ultricies vel. Cras non pulvinar tellus, vel bibendum magna. Morbi tellus nulla, cursus non nisi sed, porttitor dignissim erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis commodo lectus. Vivamus vel tincidunt enim, non vulputate ipsum. Ut pellentesque consectetur arcu sit amet scelerisque. Fusce commodo leo eros, ut eleifend massa congue at.</p>
                                                </div>
                                <!-- End of Graphical Table -->

                                            <!-- Start of Summary Tab -->
                                                <div class="tab-pane" id="summarytab">
                                                <button class="btn btn-success btn-md" onclick="printContent('print')"><span class="fa fa-print"></span> Print</button>
                                                <div id="print">
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
                                                        <br>
                                                        <br>
                                                    </label>

                                                            <table class="table datatable">
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
$query = $conn->query("SELECT * from `employee`") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    ?>
                                                                    <tr>
                                                                        <td><?php echo $fetch['officer_type'] ?></td>
                                                                        <td><?php echo $fetch['rank'] ?></td>
                                                                        <td><?php echo $fetch['officer_fname'].' '.$fetch['officer_mname'].' '.$fetch['officer_lname'] ?></td>
                                                                        <td><?php echo $fetch['date_applied'] ?></td>
                                                                    </tr>
                                                                    <?php
}
$conn->close();
?>
                                                                </tbody>
                                                            </table>
                                                    </div>
                                                </div>


                                            <!-- End of Summary Tab -->


                                            <!-- Start of Detailed Tab -->


                                                <div class="tab-pane" id="detailedtab">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Officer Type</th>
                                                                <th><center>Number of Employee per Category</center></th>
                                                                <th>View Employee</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>CRO</td>
                                                                <td>
                                                                <?php
        $year = date('Y');
        require 'require/databaseconnection.php';
        $query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'CRO'") or die(mysqli_error());
        $fetch = $query->fetch_array();?>
                                                                <center><span class="label label-info label-form"><?php echo $fetch['total']?></span></center> 
                                                                </td>
                                                                <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_cro" ><i class="glyphicon glyphicon-eye-open"></i>View Record</button>
                                                            </tr>

                                                            <tr>
                                                                <td>Assessor</td>
                                                                <td>
                                                                <?php
        $year = date('Y');
        require 'require/databaseconnection.php';
        $query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'Assessor'") or die(mysqli_error());
        $fetch = $query->fetch_array();?>
                                                                <center><span class="label label-info label-form"><?php echo $fetch['total']?></span></center> 
                                                                </td>
                                                                <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_assessor" ><i class="glyphicon glyphicon-eye-open"></i>View Record</button>

                                                            <tr>
                                                                <td>Inspection-CRO</td>
                                                                <td>
                                                                <?php
        $year = date('Y');
        require 'require/databaseconnection.php';
        $query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'Inspection-CRO'") or die(mysqli_error());
        $fetch = $query->fetch_array();?>
                                                                <center><span class="label label-info label-form"><?php echo $fetch['total']?></span></center> 
                                                                </td>
                                                                <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_inspectioncro" ><i class="glyphicon glyphicon-eye-open"></i>View Record</button>
                                                            </tr>

                                                            
                                                            <tr>
                                                                <td>Inspector</td>
                                                                <td>
                                                                <?php
        $year = date('Y');
        require 'require/databaseconnection.php';
        $query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'Inspector'") or die(mysqli_error());
        $fetch = $query->fetch_array();?>
                                                                <center><span class="label label-info label-form"><?php echo $fetch['total']?></span></center> 
                                                                </td>
                                                                <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_inspector"><i class="glyphicon glyphicon-eye-open"></i>View Record</button>
                                                            </tr>


                                                            <tr>
                                                                <td>Evaluator</td>
                                                                <td>
                                                                <?php
        $year = date('Y');
        require 'require/databaseconnection.php';
        $query = $conn->query("SELECT count(*) as total FROM `employee` where `officer_type` = 'Evaluator'") or die(mysqli_error());
        $fetch = $query->fetch_array();?>
                                                                <center><span class="label label-info label-form"><?php echo $fetch['total']?></span></center> 
                                                                </td>
                                                                <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_evaluator" ><i class="glyphicon glyphicon-eye-open"></i>View Record</button>
                                                            </tr>

                                                            <tr>
                                                                <td> <h3> Grand Total </h3> </td>
                                                                <td>
                                                                <?php
        $year = date('Y');
        require 'require/databaseconnection.php';
        $query = $conn->query("SELECT count(*) as total FROM `employee`") or die(mysqli_error());
        $fetch = $query->fetch_array();?>
                                                                <center><span class="label label-danger label-form"><?php echo $fetch['total']?></span></center> 
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






