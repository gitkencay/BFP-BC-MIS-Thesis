
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BHTC-PMIS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/mycss.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" href="assets2/vendor/font-awesome/css/font-awesome.min.css" />
    </head>
    <body>

        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <?php require 'require/header.php'?>
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Data Entry</li>
                    <li class="active"><strong><mark>Applicant Registration</mark></strong></li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">FSEC</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">FSIC</a></li>
                                </ul>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <ul class="panel-controls">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#FSEC-Reg"><i class="fa fa-plus"></i>Add FSEC</button>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                                        <div class="panel-body">
                                                            <table class="table datatable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Applicant No</th>
                                                                        <th>Owner Name</th>
                                                                        <th>Business Name</th>
                                                                        <th>Status</th>
                                                                        <th>Date Applied</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
require 'require/databaseconnection.php';
$query = $conn->query("select * from `application` where application_type = 'FSEC'") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    $month = date("m", strtotime($fetch['month']));
    ?>
                                                                    <tr>
                                                                        <td><?php echo $fetch['year'] . '-' . $month . '-' . $fetch['application_no'] ?></td>
                                                                        <td><?php echo $fetch['owner_name'] ?></td>
                                                                        <td><?php echo $fetch['business_name'] ?></td>
                                                                        <td><?php if ($fetch['status'] == 'Complete') {
        echo "<span class='badge badge-success'>Complete</span>";
    }

    if ($fetch['status'] == 'Pending') {
        echo "<span class='badge badge-danger'>" . $fetch['status'] . "</span>";
    }

    if ($fetch['status'] == 'Incomplete') {
        echo "<span class='badge badge-danger'>" . $fetch['status'] . "</span>";
    }

    if ($fetch['status'] == 'Assessed') {
        echo "<span class='badge badge-info'>" . $fetch['status'] . "</span>";
    }

    ?></td>
                                                                        <td><?php echo $fetch['date_applied'] ?></td>
                                                                        <td>
                                                                            <a href="#updatefsec<?php echo $fetch['application_no']; ?>" data-target="#updatefsec<?php echo $fetch['application_no']; ?>" data-toggle="modal" class="btn btn-info btn-sm">Edit</a>
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

                                    <div class="tab-pane" id="tab-second">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <ul class="panel-controls">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#FSIC-Reg"><i class="fa fa-plus"></i>Add FSIC</button>

                                                        </ul>
                                                    </div>
                                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 430px;">
                                                        <div class="panel-body">
                                                            <table class="table datatable" id="dataTables-example">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Applicant No</th>
                                                                        <th>Owner Name</th>
                                                                        <th>Business Name</th>
                                                                        <th>Status</th>
                                                                        <th>Date Applied</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
require 'require/databaseconnection.php';
$query = $conn->query("select * from `application` where application_type = 'FSIC'") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    $month = date("m", strtotime($fetch['month']));
    ?>
                                                                    <tr>
                                                                        <td><?php echo $fetch['year'] . '-' . $month . '-' . $fetch['application_no'] ?></td>
                                                                        <td><?php echo $fetch['owner_name'] ?></td>
                                                                        <td><?php echo $fetch['business_name'] ?></td>
                                                                        <td><?php if ($fetch['status'] == 'Complete') {
        echo "<span class='badge badge-success'>Complete</span>";
    }

    if ($fetch['status'] != 'Complete') {
        echo "<span class='badge badge-danger'>" . $fetch['status'] . "</span>";
    }

    ?></td>
                                                                        <td><?php echo $fetch['date_applied'] ?></td>
                                                                        <td>
                                                                            <a href="#Edit_Apply<?php echo $fetch['id']; ?>" data-target="#Edit_Apply<?php echo $fetch['id']; ?>" data-toggle="modal" class="btn btn-info btn-sm">Edit</a>
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
            </div>
        <?php require 'modals/addfsec.php'?>
        <?php require 'modals/editfsec.php'?>
        <?php require 'modals/addfsic.php'?>
        <?php require 'modals/editfsic.php'?>
        <?php require 'require/logout.php'?>
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

    </body>
</html>






