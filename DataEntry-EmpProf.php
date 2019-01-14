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
    </head>
    <body>

        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Data Entry</li>
                    <li class="active"><strong><mark>Add New Employee</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                                <ul class="panel-controls">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Employee-Reg"><i class="fa fa-plus"></i>Add Employee</button>
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
    </body>
</html>






