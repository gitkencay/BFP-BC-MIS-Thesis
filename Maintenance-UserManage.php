<?php
    require_once 'require/logincheck.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BHTC-PMIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/cropped-bfp-new-logo-1.png">
</head>

<body>

    <div class="page-container">
        <?php require 'require/sidebar-CRO.php'?>
        <div class="page-content">
            <?php require 'require/header.php'?>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Maintenance</a></li>
                <li class="active"><a href="Maintenance-UserManage.php">User Management</a></li>
            </ul>
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body tab-content">
                            <div class="tab-pane active" id="tab-employ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <strong> Employee Account Management </strong></h3>
                                                   
                                    <div class="btn-group pull-right">
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
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                                <div class="panel-body">
                                                    <table class="table datatable" id="dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Officer Type</th>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Username</th>
                                                                <th>Last Login</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
            require 'require/databaseconnection.php';
            $year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
            $query4 = $conn->query("SELECT * from `users` where `login` like '%$year%' ") or die(mysqli_error());
            while($fetch4 = $query4->fetch_array()){
                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $fetch4['id']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch4['type']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch4['fname']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch4['lname']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch4['name']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch4['login']?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($fetch4['status'] == 'Active') {
        echo "<span class='badge badge-success'>Active</span>";
    }

    if ($fetch4['status'] == 'Inactive') {
        echo "<span class='badge badge-danger'>Inactive</span>";
    }
    ?>
                                                                </td>
                                                                <td>
                                                                    <a href="#Edit_Employee<?php echo $fetch4['id'];?>"
                                                                        data-target="#Edit_Employee<?php echo $fetch4['id'];?>"
                                                                        data-toggle="modal" class="btn btn-info btn-sm">Edit</a>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'modals/user_employee.php'?>
    </div>

    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="ajax/checkfsec.js"></script>
    <script type="text/javascript" src="ajax/checkfsic.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>
    <script>
        $("#fsec").validate({
            ignore: [],
            rules: {
                password: {
                    minlength: 6,
                    maxlength: 10
                }
            }
        });
    </script>
            <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'Maintenance-UserManage.php?year='+year;
                });
            });
        </script>

</body>

</html>