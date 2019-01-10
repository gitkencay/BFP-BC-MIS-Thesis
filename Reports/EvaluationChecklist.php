
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
<style>
			@media print{
				body, page[size="letter"] {
                    margin: 0;
					box-shadow: 0;
                    border:3px solid #000;
                  }

			}
			#print{
				width:80%;
				height:100%;
				margin:auto;
				border:3px solid #000;
				overflow: hidden;
			}

            .DILG{
				text-align: center;
				position: relative;
				top: 0px;
			}

            .RofP{
                text-align: center;
				position: relative;
				top: 20px;
            }

			.BFP-title{
				color:darkblue;
				text-align: center;
				position: relative;
				top: -22px;
			}

            .FSC{
                text-align: center;
				position: relative;
				top: -20px;
            }

            .subtitle{
                text-align: center;
				position: relative;
				top: -45px;
            }

            .planeval{
                text-align: left;
				position: relative;
                left: 140px;
            }

            .checklistno{
                text-align: right;
				position: relative;
                right: 395px;
                top: -34px;
            }

            .nameofowner{
                text-align: left;
				position: relative;
                left: 140px;
                top: -29px;
            }

            .construction{
                text-align: left;
				position: relative;
                left: 634px;
                top: -64px;
            }

            .Ptitle{
                text-align: left;
				position: relative;
                left: 140px;
                top: -61px;
            }

            .dateR{
                text-align: left;
				position: relative;
                left: 634px;
                top: -95px;
            }

            .occupancy{
                text-align: left;
				position: relative;
                left: 140px;
                top: -95px;
            }

            .nooffloors{
                text-align: left;
				position: relative;
                left: 634px;
                top: -129px;
            }

            .planeval-1{
                text-align: left;
				position: relative;
                left: 376px;
                top: -272px;
            }

            .ecn{
                text-align: left;
				position: relative;
                left: 819px;
                top: -306px;
            }

            .owner{
                text-align: left;
				position: relative;
                left: 375px;
                top: -301px;
            }

            .location{
                text-align: left;
				position: relative;
                left: 820px;
                top: -336px;
            }

            .occupancy-1{
                text-align: left;
				position: relative;
                left: 375px;
                top: -333px;
            }

            .project{
                text-align: left;
				position: relative;
                left: 375px;
                top: -333px;
            }



</style>
<!-- EOF CSS INCLUDE -->
</head>
	<body>
		<!-- START PAGE CONTAINER -->
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<!-- START TEXT ELEMENTS -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="btn-group pull-right">
								<div class="pull-left">
									<button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
									<a href="../Report-Applicant.php" class="btn btn-default btn-sm">Back</a>
								</div>
							</div>
						</div>
						<div id="print">
							<div class="panel-body">
                            <?php
require '../require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `evaluation_checklist` WHERE `application_no` = '$_GET[id]'") or die(mysqli_error());
$fetch = $query->fetch_array();

$query2 = $conn->query("SELECT * FROM `application` WHERE 'application_no' = TRIM(LEADING '2018-12-' FROM '$_GET[id]')") or die(mysqli_error());
$fetch2 = $query2->fetch_array();

date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
$month = date("m", strtotime($fetch['month']));
$ecn = 'ECN'.  '-' .  $fetch['year'] . '-' . $month . '-' . $fetch['checklist_no'];
$app = $fetch2['year'] . '-' . $month . '-' . $fetch2['application_no'];

?>

								<h3 class="RofP">Republic of the Philippines</h3>
                                <h3 class="DILG">Department of the Interior and Local Government</h3>
								<h2 class="BFP-title">BUREAU OF FIRE PROTECTION</h2>

                                <h2 class="FSC"> FIRE SAFETY CHECKLIST </h3>
                                <h3 class="subtitle"> ON BUILDING PLANS </h3>
                                
                                <p class="planeval"> Plan Evaluator: </p> 
                                <p class="checklistno"> Checklist # : </p>
                                <p class="nameofowner"> Name of Owner / Establishment: </p>
                                <p class="construction"> Location of Construction: </p>
                                <p class="Ptitle"> Project Title: </p>
                                <p class="dateR"> Lot Size: </p>
                                <p class="occupancy"> Occupancy Classification: </p>    
                                <p class="nooffloors"> No. of Floors: </p>

                                    <p class="planeval-1"> <b> <?php echo $fetch['plan_evaluator']?> </b> </p>
                                    <p class="ecn"> <b> <?php echo $ecn?> </b> </p>
                                    <p class="owner"> <b> <?php echo $fetch['owner_name']?> </b> </p>
                                    <p class="location"> <b> <?php echo $fetch['location']?> </b> </p>
                                    <p class="project"> <b> <?php echo $fetch['project_title']?> </b> </p>
                                    <p class="lot_size"> <b>  </b> </p>
                                    <p class="occupancy-1"> <b> <?php echo $fetch['occupancy_classification']?> </b> </p>
                                    <p class="project"> <b>  </b> </p>

							</div>
						</div>
					</div>
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
		<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
		<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	</body>
</html>