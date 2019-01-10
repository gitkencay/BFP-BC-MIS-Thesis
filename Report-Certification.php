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
            <?php require 'require/sidebar.php'?>
                <!-- END PAGE SIDEBAR -->
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
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Reports</a></li>                    
                <li class="active"><a href="Report-Certification.html">Certification</a></li>
            </ul>
            <!-- END BREADCRUMB --> 

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                    
                                         <div class="row">
                                            <div class="col-md-12">
                                                <form class="form-horizontal">
                                                    <div class="panel panel-default tabs">                            
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">FSEC</a></li>
                                                            <li><a href="#tab-second" role="tab" data-toggle="tab">FSIC</a></li>
                                                        </ul>
                                                        <div class="panel-body tab-content">
                                                            <div class="tab-pane active" id="tab-first">
                    
                                                               <!--Start Default Table-->
                                                                 <div class="panel panel-default">
                                                                    <div class="panel-body">
                                                                        <table class="table datatable" id="CertificationDatTable">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Applicant No</th>
                                                                                    <th>Owner Name</th>
                                                                                    <th>Business Name</th>
                                                                                    <th>Date Applied</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                <?php
require 'require/databaseconnection.php';
$query3 = $conn->query("select * from `application` where assessment_status = 'Evaluated' && application_type = 'FSEC' ") or die(mysqli_error());
while ($fetch3 = $query3->fetch_array()) {
    $month = date("m", strtotime($fetch3['month']));
    $date = date("F j, Y", strtotime($fetch3['date_applied']));
    ?>
                                <tr>
                                    <td><?php echo $fetch3['year'] . '-' . $month . '-' . $fetch3['application_no'] ?></td>
                                    <td><?php echo $fetch3['owner_name'] ?></td>
                                    <td><?php echo $fetch3['business_name'] ?></td>
                                    <td><?php echo $date?></td>
                                    <td>
                                        <a href="Reports/FSEC-Certificate.php?id=<?php echo $fetch3['application_no']?>&owner_name=<?php echo $fetch3['owner_name']?>"class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="Print Preview">  <i class="fa fa-eye"></i>  Preview</a>
                                    </td>
                                </tr>
                                <?php
}
$conn->close();
?>
                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <!-- END DEFAULT DATATABLE -->
                    
                                                            </div>
                                                            <div class="tab-pane" id="tab-second">
                                                                 <!--Start Default Table-->
                                                                <div class="panel panel-default">
                                                                    <div class="panel-body">
                                                                        <table class="table datatable" id="dataTables-example">
                                                                        <thead>
                                                                                <tr>
                                                                                    <th>Applicant No</th>
                                                                                    <th>Owner Name</th>
                                                                                    <th>Business Name</th>
                                                                                    <th>Type of Permit</th>
                                                                                    <th>Date Applied</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                <?php
require 'require/databaseconnection.php';
$query2 = $conn->query("select * from `application` where assessment_status = 'Inspected' && application_type = 'FSIC' ") or die(mysqli_error());
while ($fetch2 = $query2->fetch_array()) {
    $month = date("m", strtotime($fetch2['month']));
    $date = date("F j, Y", strtotime($fetch2['date_applied']));
    ?>
                                <tr>
                                    <td><?php echo $fetch2['year'] . '-' . $month . '-' . $fetch2['application_no'] ?></td>
                                    <td><?php echo $fetch2['owner_name'] ?></td>
                                    <td><?php echo $fetch2['business_name'] ?></td>
                                    <td><?php echo $fetch2['type_of_permit'] ?></td>
                                    <td><?php echo $date?></td>
                                    <td>
                                    <?php 
    if ($fetch2['type_of_permit'] == 'Building') {
                                    $permit = 'BP';
    }
    if ($fetch2['type_of_permit'] == 'Occupancy') {
        $permit = 'OP';
    }
                                    
?>
                                        <a href="Reports/FSIC-Certificate-<?php echo $permit?>.php?id=<?php echo $fetch2['application_no']?>&owner_name=<?php echo $fetch2['owner_name']?>"class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="Print Preview">  <i class="fa fa-eye"></i>  Preview</a>
                                    </td>
                                </tr>
                                <?php
}
$conn->close();
?>
                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <!-- END DEFAULT DATATABLE -->
                    
                                                            </div>                                        
                                                            
                                                        </div>
                                                        </div>                                
                    
                                                </form>
                    
                                            </div>
                                        </div>       
                    
                                    </div>

                                    <script>
			function printContent(el){
				var restorepage = document.body.innerHTML;
				var printcontent = document.getElementById(el).innerHTML;
				document.body.innerHTML = printcontent;
				window.print();
				document.body.innerHTML = restorepage;
			}
		</script>
                                    <!-- END PAGE CONTENT WRAPPER -->

        </div>
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
                      $('#CertificationDatTable').dataTable();
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