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
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/cropped-bfp-new-logo-1.png">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" href="css/mycss.css" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
    <link rel="stylesheet" href="css/loader.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>



    <script>

        $(window).load(function() {
        // Animate loader off screen
        $(".load-Nav").fadeOut("slow");;
    });

//   $(document).ready(function(){

//      } );


//  function test(status, appno){
//     var stat = status;
//     var app = appno;
//     var view = 'view_notice' + app;
//     var addNo = 'addNotice' + app;


//     if(stat  == 'for compliance'){
//         if (confirm("Do you want to ADD ISSUE NOTICE?")) {
//         $("#" + addNo).modal();
//       } else {

//       }
//   }
//   else if (stat == 'issued NTC'){

//      if (confirm("Do you want to UPDATE ISSUE NOTICE?")) {
//         $("#" + view).modal();
//       } else {

//       }
//   }
//   else if (stat == 'issued NTCV'){

//      if (confirm("Do you want to UPDATE ISSUE NOTICE?")) {
//         $("#" + view).modal();
//       } else {

//       }
//   }




//   }



</script>

</head>

<body>
    <div class="load-Nav" id="load-Nav-id"></div>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <?php require 'require/sidebar-Inspection-CRO.php'?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul id="hozironNav" class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a  class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>
                </li>
                <!-- END SIGN OUT -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Transaction</a></li>
                <li class="active"><a href="Transaction-Inspection.php">Inspection & Compliance</a></li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
            <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <div class="form-group">
                            <select class="form-control select input-sm" data-style="btn-primary" id="pyear">
                                <option selected disabled>Select Year</option>
                                <?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `application` group by year") or die(mysqli_error());

while ($fetch = $query->fetch_array()) {
    ?>
                                <option value="<?php echo $fetch['year']; ?>">
                                    <?php echo $fetch['year'] ?>
                                </option>
                                <?php
}
?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <!--Start Default Table-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <ul class="panel-controls">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#inspModal"><i
                                            class="fa fa-plus"></i>Inpection Order Form</button>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable" id="dataTables-inspection">
                                <thead>
                                    <tr>
                                        <th>Inspection Order No</th>
                                        <th>Owner Name</th>
                                        <th>Date Applied</th>
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
$query = $conn->query("select * from `inspection_order` where year = '$year'") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    $month = date("m", strtotime($fetch['month']));
    $appno_2 = $fetch['applicantsnumber'];
    $io_no = $fetch['io_no'];
    $query3 = $conn->query("SELECT * FROM `issue_notice`") or die(mysqli_error());
    $fetch3 = $query3->fetch_array();
    ?>

                                    <tr>
                                        <td>
                                            <?php echo 'IO' . '-' . $fetch['year'] . '-' . $month . '-' . $fetch['io_no'] ?>
                                        </td>
                                        <td>
                                            <?php echo $fetch['owner_name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $fetch['date_applied'] ?>
                                        </td>
                                        <td>
                                        <?php if ($fetch['status'] == 'For After Inspection Report') {
        echo "<span class='badge badge-danger'> For After Inspection Report </span>";
        $status = 'AddAIR';
    }
    if ($fetch['status'] == 'for compliance') {
        echo "<span class='badge badge-danger'> for compliance </span>";
        $status = 'AddNotice';
    }
    if ($fetch['status'] == 'issued NTC') {
        echo "<span class='badge badge-danger'> issued NTC </span>";
        $status = 'EditNotice';
    }
    if ($fetch['status'] == 'issued NTCV') {
        echo "<span class='badge badge-danger'> issued NTCV </span>";
        $status = 'EditNotice';
    }
    if ($fetch['status'] == 'for certification') {
        echo "<span class='badge badge-info'> for certification </span>";
        $status='Inspection';
    }
    ?>

                                        </td>
                                        <td>
                                            <a href="Transaction-<?php echo $status;?>.php?id=<?php echo $appno_2; ?>"><button type="button" class="btn btn-info"> <i class="fa fa-plus"></i>Proceed</button></a>
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

    </div>

    <!-- END PAGE CONTENT WRAPPER -->

    <!-- END PAGE CONTENT -->
    <!-- END PAGE CONTAINER -->



    <!-- Issue notice button script-->
    <!-- <?php require 'modals/ViewIssueNotice.php'?>
    <?php require 'modals/addIssueNotice.php'?>

    <a href="#view_notice<?php echo $ir_no; ?>" data-target="#view_notice<?php echo $ir_no; ?>" data-toggle="modal">
    </a>

    <a href="#addNotice<?php echo $ir_no; ?>" data-target="#addNotice<?php echo $ir_no; ?>" data-toggle="modal"> </a> -->

    <!-- end Issue notice button script-->
    <!--Start MODAL-->
    <div class="modal fade" id="inspModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Inspection Pending List</h3>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Application No.</th>
                                        <th>Applicant Name</th>
                                        <th>Date Applied</th>
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
$query2 = $conn->query("select * from `application` where assessment_status = 'Assessed' && application_type = 'FSIC' && year = '$year'") or die(mysqli_error());
while ($fetch2 = $query2->fetch_array()) {
    $month2 = date("m", strtotime($fetch2['month']));
    ?>
                                    <tr>
                                        <td>
                                            <?php echo $fetch2['year'] . '-' . $month2 . '-' . $fetch2['application_no'] ?>
                                        </td>
                                        <td>
                                            <?php echo $fetch2['application_name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $fetch2['date_applied'] ?>
                                        </td>
                                        <td>
                                            <a href="inspection-order.php?application_no=<?php echo $fetch2['application_no'] ?>"
                                                class="btn btn-sm btn-info">Inspect</a>
                                        </td>
                                        <?php
}
$conn->close();
?>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End MODAL-->
    <!--End MODAL-->
    <!-- MESSAGE BOX-->
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
                        <a href="index.php" class="btn btn-success btn-lg">Yes</a>
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
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>


    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        var date = new Date();
        $('#inspection_date1').datepicker({
            format: 'yyyy MM, dd',
            language: 'en',
            startDate: date,
            endDate: new Date('2100-01-01')
        });
    </script>   
    <script>
            $(document).ready(function () {
                $("#pyear").on('change', function () {
                    var year = $(this).val();
                    window.location = 'Transaction-Inspection.php?year=' + year;
                });
            });
        </script>
    <script>
        var date = new Date();
        $('#inspection_date2').datepicker({
            format: 'yyyy MM, dd',
            language: 'en',
            startDate: date,
            endDate: '+1m'
        });
    </script>
    <script>
        function myFunctionedAdd() {
            document.getElementById("addnoticec").style.display = "block";
            document.getElementById("addnoticey").style.display = "inline";
            document.getElementById("addnoticen").style.display = "inline";
        }
    </script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <script>
        function myFunctioneditNotice() {
            document.getElementById("upnoticeconfirmation").style.display = "block";
            document.getElementById("upnoticeyes").style.display = "inline";
            document.getElementById("upnoticeno").style.display = "inline";
        }
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