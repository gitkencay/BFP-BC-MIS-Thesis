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

    
                 
    </head>
    <script type="text/javascript">
//paste this code under the head tag or in a separate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".load-Nav").fadeOut("slow");;
    });
</script>

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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <ul class="panel-controls">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Employee-Reg"><i class="fa fa-plus"></i>Add Employee</button>
                                </ul>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table datatable" id="dataTables-example-emp">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Officer Category</th>
                                            <th>Rank</th>
                                            <th>Fire Station</th>
                                            <th>Action</th>
                                        </tr>

                                    <tbody>
                                        <?php
    require 'require/databaseconnection.php';
            $query = $conn->query("select * from `employee`") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                        ?>

                                        <tr>
                                            <td><?php echo $fetch['officer_fname']?></td>
                                            <td><?php echo $fetch['officer_lname']?></td>
                                            <td><?php echo $fetch['officer_type']?></td>
                                            <td><?php echo $fetch['rank']?></td>
                                            <td><?php echo $fetch['firestation']?></td>
                                            <td>
                                                <a href="#updateEmployee<?php echo $fetch['id'];?>" data-target="#updateEmployee<?php echo $fetch['id'];?>" data-toggle="modal" class="btn btn-info btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                        <?php
            }
            $conn->close();
                                        ?>
                                    </tbody>
                                    </thead>
                                </table>
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
            $("#employee").validate({
                ignore: [],
                rules: {
                    password: {
                        minlength: 8,
                        maxlength: 16
                    },
                    'confirm_password': {
                        minlength: 8,
                        maxlength: 16,
                        equalTo: "#password"
                    }
                }
            });
        </script>
        <script>
            function myFunction() {
                document.getElementById("confirmation").style.display = "block";
                document.getElementById("confirmyes").style.display = "inline";
                document.getElementById("confirmno").style.display = "inline";
            }
        </script>
    </body>
</html>






