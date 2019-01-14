<?php
require_once 'require/logincheck.php';
?>
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
                <?php require 'require/header.php'?>
            <!-- END X-NAVIGATION VERTICAL -->                     
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Maintenance</a></li>                    
                <li class="active"><a href="Maintenance-MyAccount.php">My Account</a></li>
            </ul>
            <!-- END BREADCRUMB --> 

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="page-content-wrap">
					<div class="row">
						<div class="col-md-6">
                        <?php
	        require 'require/databaseconnection.php';
			$id = $_SESSION['id'];
			$query = $conn->query("SELECT * FROM `user` where `id` = '$id'") or die(mysqli_error());
			$fetch = $query->fetch_array();
							?>
                            <form id="user" class="form-horizontal" action="actions/update_profile.php" method="post" onsubmit="return confirm('Are you sure you want to update your profile?');">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><strong> Update My Account</strong></h3>
									</div>
									<div class="panel-body">
										<h5 class="push-up-1">First Name</h5>
										<div class="form-group ">
											<div class="col-md-12 col-xs-12">
                                            <input type="hidden" class="form-control" name="id" value="<?php echo $fetch['id']?>"/>
        										<input title="Name" type="text" class="form-control" name="firstname" value="<?php echo $fetch['fname']?>"/>
											</div>
										</div>
										<h5 class="push-up-1">Last Name</h5>
										<div class="form-group ">
											<div class="col-md-12 col-xs-12">
												<input title="Name" type="text" class="form-control" name="lastname" value="<?php echo $fetch['lname']?>"/>
											</div>
										</div>
										<h5 class="push-up-1">Username</h5>
										<div class="form-group ">
											<div class="col-md-12 col-xs-12">
												<input title="Username" type="text" class="form-control" name="username" value="<?php echo $fetch['name']?>"/>
											</div>
										</div>
										<h5 class="push-up-1">New Password</h5>
										<div class="form-group ">
											<div class="col-md-12 col-xs-12">
												<input type="password" class="form-control" id="password" name="password" />
											</div>
										</div>
										<h5 class="push-up-1">Confirm Password</h5>
										<div class="form-group ">
											<div class="col-md-12 col-xs-12">
												<input type="password" class="form-control" id="confirm_password" name="confirm_password"/>
											</div>
                                            <div class="col-md-6 col-xs-6" >
                                                <strong> <span id="divCheckPasswordMatch" style="display: none;"> </span> </strong>
                                            </div>
										</div>

										<h5 class="push-up-1">Old Password</h5>
										<div class="form-group ">
											<div class="col-md-12 col-xs-12">
												<input type="text" class="form-control" name="passwordold" id="passwordold" required/>
                                                <div id ="old_response" ></div>
											</div>
										</div>
									</div>
									<div class="panel-footer">
										<button type="submit" id="save" name="save" class="btn btn-info pull-right">Update Profile</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->

     
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

        

        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="ajax/checkoldpass.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script>
                 $(document).ready(function () {
                      $('#dataTables-example-emp').dataTable();
                  });
        </script>
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
<script>
            $("#user").validate({
                ignore: [],
                rules: {
                    password: {
                        minlength: 6,
                        maxlength: 10
                    },
                    'confirm_password': {
                        minlength: 6,
                        maxlength: 10,
                        equalTo: "#password"
                    }
                }
            });
        </script>

                  
        <!-- END SCRIPTS -->        
    </body>
</html>