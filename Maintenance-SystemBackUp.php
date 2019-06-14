<?php
require_once 'require/logincheck.php';
require 'loader.php';

$message = '';

if(isset($_POST['import']))
{
	if($_FILES['database']['name'] != '')
	{
		$array = explode(".", $_FILES['database']['name']);
		$extension = end($array);
		if($extension == 'sql'){
			$connect = mysqli_connect("localhost", "root", "", "bfp-bcmis");
			$output = '';
			$count = 0;
			$file_data = file($_FILES['database']['tmp_name']);
			foreach($file_data as $row){
				$start_character = substr(trim($row), 0, 2);
				if($start_character != '--' || $start_character != '/*'
				   || $start_character != '//' || $row != ''){
					$output = $output . $row;
					$end_character = substr(trim($row), -1, 1);
					if($end_character == ';'){
						if(!mysqli_query($connect, $output)){
							$count++;
						}
						$output = '';
					}
				}
			}
			if($count > 0) {
				$message = 'Error occurred';
			}
			else {
				$message = 'Successful';
				date_default_timezone_set('Asia/Manila');
				$date=date("F j, Y, g:i a");

				$id=$_SESSION['id'];

                require 'require/databaseconnection.php';
				$conn->query("INSERT INTO `backup` VALUES('', '$id','Successfully imported database', '$date')") or die(mysqli_error());
				$conn->close();
				echo "<script>alert('Successfully imported database!')</script>";
				echo "<script>document.location='Maintenance-SystemBackUp.php'</script>";  
			}
		}
		else {
			echo "<script type='text/javascript'>alert('You must upload SQL file only!');</script>";
			echo "<script>document.location='download_database.php'</script>";
		}
	}
	else {
		$message = 'Select SQL File.';
	}


}
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>BFP BACOLOD MIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/cropped-bfp-new-logo-1.png">
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->      
        <link rel="stylesheet" type="text/css" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->      

                                   
    </head>
    <script type="text/javascript">
          function hideLoad(){$('.loader-wrapper').hide();}
</script>
    <body onload="hideLoad()">
        
    <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <!-- START PAGE SIDEBAR -->
            <?php require 'require/sidebar-CRO.php'?>
                            <!-- END X-NAVIGATION -->
                <!-- END PAGE SIDEBAR -->
        <div class="page-content">
        <!-- START X-NAVIGATION VERTICAL -->
            <?php require 'require/header.php'?>
            <!-- END X-NAVIGATION VERTICAL -->                     
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Maintenance</a></li>                    
                <li class="active"><a href="Maintenance-SystemBackUp.php">System Back Up</a></li>
            </ul>
            <!-- END BREADCRUMB --> 

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
				    <div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
                                <h3 class="panel-title"><strong>History Log - Export and Import Database</strong></h3>
							        <div class="btn-group pull-right">
								        <div class="pull-right">
											<a class="btn btn-info mb-control" data-box="#message-box-info">Export Database</a>
											<button class="btn btn-warning btn-md" data-toggle="modal" data-target="#modal_basic">Import Database</button>
									    </div>
								    </div>
							    </div>
                            </div>

                        <div class="message-box message-box-info animated fadeIn" data-sound="fail" id="message-box-info">
                            <div class="mb-container">
                                <div class="mb-middle">
                                    <div class="mb-title"><span class="fa fa-cloud-download"></span> Export Database</div>
                                        <div class="mb-content">
                                            <p>You are about to download the database of BFP-BC MIS.</p>
                                        </div>
                                    <div class="mb-footer">
                                        <div class="pull-right">
                                            <a href="database/export.php" class="btn btn-danger btn-lg pull-right">Export Anyway</a>
                                            <button class="btn btn-default btn-lg mb-control-close">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="defModalHead"><strong>Upload SQL File</strong></h4>
                                    </div>
                                    <form method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <h5>Select from files</h5>
                                        <input type="file" name="database">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info" name="import">Upload</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div>


                                                    <!-- START DEFAULT DATATABLE -->
                                <div class="panel panel-default">
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Admin Name</th>
                                                <th>Remarks</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
require 'require/databaseconnection.php';
$query = $conn->query("select * from `backup` ") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    $id = $fetch['user_id'];

    $query4 = $conn->query("select * from `users` where id = '$id' ") or die(mysqli_error());
    $fetch4 = $query4->fetch_array()

    ?>
                                            <tr>
                                                <td><?php echo $fetch4['name']?></td>
                                                <td>
                                                <?php if ($fetch['remarks'] == 'Successfully exported database') {
        echo "<span class='badge badge-success'>Successfully exported database</span>";
    }

    if ($fetch['remarks'] == 'Successfully imported database') {
        echo "<span class='badge badge-info'>Successfully imported database</span>";
    }
    ?>
    </td>
                                                <td><?php echo $fetch["date"]?></td>
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
                      $('#dataTables-example-emp').dataTable();
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