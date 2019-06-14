
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
                  }

			}
			#print{
				width:80%;
				height:100%;
				margin:auto;
				border:3px solid #000;
				overflow: hidden;
			}

			.today{
				text-align: right;
				position: relative;
				right: 125px;
				bottom: -28px;
			}

			.date{
				text-align: right;
				position: relative;
				right: 155px;
				bottom: 22px;
			}

			.line-1{
				text-align: right;
				position: relative;
				right: 111px;
				bottom: 5px;
			}

			.center-1{
				text-align: center;
				position: relative;
				top: 20px;
			}

			.BFP-title{
				color:darkblue;
				text-align: center;
				position: relative;
				top: -17px;
			}

			.title-line-1{
				text-align: left;
				position: relative;
				left: 111px;
				bottom: 5px;
			}

			.title-line-2{
				text-align: left;
				position: relative;
				left: 111px;
				bottom: 15px;
			}

			.title-line-3{
				text-align: left;
				position: relative;
				left: 111px;
				bottom: 23px;
			}

			.title-line-4{
				text-align: left;
				position: relative;
				left: 111px;
				bottom: 30px;
			}
			
			.ntcTitle{
				text-align: center;
				position: relative;
				top: 10px;
			}

			.gret{
				text-align: left;
				position: relative;
				left: 111px;
				bottom: -15px;
			}

			.text-justify{
				text-align: justify;
				position: relative;
				bottom: -35px;
				text-indent: 60px;
				margin: 0px 95px 0px 111px;
			}

			.defects{
				text-align: left;
				position: relative;
				left: 305px;
				bottom: -15px;
			}

			.grace{
				text-align: right;
				position: relative;
				right: 305px;
				bottom: 25px;
			}

			.defects-1{
				text-align: left;
				position: relative;
				left: 305px;
				bottom: 35px;
			}

			.grace-1{
				text-align: right;
				position: relative;
				right: 305px;
				bottom: 75px;
			}

			.defects-2{
				text-align: left;
				position: relative;
				left: 305px;
				bottom: 85px;
			}

			.grace-2{
				text-align: right;
				position: relative;
				right: 305px;
				bottom: 125px;
			}

			.text-justify-2{
				text-align: justify;
				position: relative;
				bottom: 100px;
				text-indent: 60px;
				margin: 0px 95px 0px 111px;
			}

			.autho-3{
				text-align: right;
				position: relative;
				bottom: 80px;
				right: 236px;
			}

			.autho-4{
				text-align: right;
				position: relative;
				right: 87px;
				bottom: 55px;
			}

			.line-3{
				text-align: right;
				position: relative;
				right: 97px;
				bottom: 110px;
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
$query = $conn->query("SELECT * FROM `issue_notice` WHERE `issue_notice_no` = '$_GET[id]'") or die(mysqli_error());
$fetch = $query->fetch_array();
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
$month = date("m", strtotime($fetch['month']));
?>

								<center class="center-1">
								<h4>Republic of the Philippines</h4>
								<h3 class="BFP-title">BUREAU OF FIRE PROTECTION</h3>
								</center>

								<h3 class="today"><?php echo $today ?></h3>
								<p class="line-1">________________</p>
								<h3 class="date">Date</h3>

								<p class="title-line-1">____________________</p>
								<p class="title-line-2">____________________</p>
								<p class="title-line-3">____________________</p>
								<p class="title-line-4">____________________</p>

								<h1 class="ntcTitle"> NOTICE TO COMPLY </h1>
								
								<h3 class="gret">Sir/Madam: </h3>

								<p class="text-justify">
								This has reference to the Fire Safety Inspection conducted by __ and ___ on __ within your premises located at 
								the above address wherein inspector's report revelead the existence of the following defects/deficiences,
								in violation of the Fire Code of the Philippines of 2008 (R.A 9514).
								</p> 

								</br> </br> 

								<h3 class="defects">Defects/Deficiencies</h3>
								<h3 class="grace">Grace Period </h3>

								<h3 class="defects-1">result</h3>
								<h3 class="grace-1">results</h3>

								<h3 class="defects-2">result</h3>
								<h3 class="grace-2">results</h3>

								<p class="text-justify-2">
								In this regard you are hereby advised to comply/correct the above mentioned deficiencies within the above cited grace 
								period otherwise appropriate Notice to Correct Violation with corresponding order to pay administrative fine 
								shall be issued by this office.
								</p>

								
								</br>
								<p class="autho-3">
								 Very Truly Yours, </br>	
								</p>

								<p class="autho-4">
								<strong> CITY/MUNICIPAL FIRE MARSHAL </strong> </br>  
								</p>
								
								<p class="line-3">________________________________</p>
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