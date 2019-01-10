
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

			.IDno{
				text-align: left;
				position: relative;
				left: 95px;
				bottom: 25px;
			}

			.IOtitle{
				text-align: left;
				position: relative;
				left: 94px;
				bottom: 25px;
			}

			.leftinfo{
				text-align: left;
				position: relative;
				left: 130px;
				bottom: 25px;
			}

			.leftcol{
				text-align: left;
				position: relative;
				left: 380px;
				bottom: 213px;
			}

			.leftdata{
				text-align: left;
				position: relative;
				left: 450px;
				bottom: 384px;
			}

			.autho-1{
				text-align: left;
				position: relative;
				bottom: 335px;
				left: 95px;
			}

			.autho-2{
				text-align: left;
				position: relative;
				bottom: 335px;
				left: 95px;
			}

			.autho-3{
				text-align: right;
				position: relative;
				bottom: 330px;
				right: 261px;
			}

			.autho-4{
				text-align: right;
				position: relative;
				right: 110px;
				bottom: 300px;
			}

			.line-2{
				text-align: left;
				position: relative;
				left: 95px;
				bottom: 455px;
			}

			.line-3{
				text-align: right;
				position: relative;
				right: 105px;
				bottom: 387px;
			}
			
			.line-4{
				text-align: center;
				position: relative;
				bottom: 360px;
			}

			.line-5{
				text-align: left;
				position: relative;
				left: 95px;
				bottom: 320px;
			}

			.autho-5{
				text-align: left;
				position: relative;
				bottom: 335px;
				left: 95px;
			}

			.line-6{
				text-align: right;
				position: relative;
				right: 95px;
				bottom: 388px;
			}

			.autho-6{
				text-align: right;
				position: relative;
				bottom: 403px;
				right: 95px;
			}

			.ackn{
				text-align: center;
				position: relative;
				bottom: 360px;
			}
			
			.text-justify{
				text-align: justify;
				position: relative;
				bottom: 360px;
				text-indent: 60px;
				margin: 0px 95px 0px 95px;
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
$query = $conn->query("SELECT * FROM `inspection_report` WHERE `application_no` = '$_GET[id]'") or die(mysqli_error());
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

								<h3 class="IDno">NUMBER : <?php echo $fetch['io_no'] ?> </h3>
								
								<h1 class="IOtitle"> INSPECTION ORDER </h1>
								
								<div class = "leftinfo">
									<p> TO </p>
									<p> PROCEED </p>
									<p> PURPOSE </p>
									<p> DURATION </p>
									<p> REMARKS OR </br> ADDITIONAL INSTRUCTION </p>
								</div>

								<div class = "leftcol">
									<p> : </p>
									<p> : </p>
									<p> : </p>
									<p> : </p>
									<p> : </p>
								</div>

								<div class = "leftdata">
									<strong> <p> <?php echo $fetch['owner_name']?> </p> </strong>
									<strong> <p> unknown</p> </strong>
									<strong> <p> unknown</p> </strong>
									<strong> <p> unknown</p> </strong>
									<strong> <p> <?php echo  $fetch['recommendation']?> </p> </strong>
								</div>
                            
								<p class="autho-1">
								<strong> RECOMMEND APPROVAL: </strong> </br>
								</p>
								</br>
								
								<p class="autho-2">
								CHIEF, FIRE SAFETY ENFORCEMENT SECTION </br>
								</p>
								
								<p class="autho-3">
								<strong> APPROVED: </strong> </br>	
								</p>

								<p class="autho-4">
								CITY/MUNICIPAL FIRE MARSHAL</br> 
								</p>

								<p class="line-2">_____________________________________________</p>
								<p class="line-3">________________________________</p>
								
								<strong> <p class="line-4"> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p> </strong>

								<h3 class="ackn"> ACKNOWLEDGEMENT</h3>
								<p class="text-justify">
									This is to acknowledge that permission was granted to the above-named Fire Safety Inspector/s accompanied by authorized representative to conduct Fire Safety Inspection within the premises in accordance to law. 
								</p>

								<p class="line-5">_______________________________________________</p>

								<p class="autho-5">
								Signature over Printed Name / Authorized Representative </br>
								</p>

								<p class="line-6">___________</p>

								<p class="autho-6">
								Date / Time </br>
								</p>

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