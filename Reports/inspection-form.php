
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
				bottom: 229px;
				left: 95px;
			}

			.autho-2{
				text-align: left;
				position: relative;
				bottom: 218px;
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
				bottom: 353px;
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
			
			#head{
				width: 60%;
			}

			div.lamesa{
				text-align: left;
				position: relative;
				left: 94px;
				bottom: 25px;
			}

			#one{
				width: 530pt;
				font-size:14;
				left: 195px;
			}

			.purpose{
				text-align: justify;
				position: relative;
				right: -22px;
			}

			.businessname{
				text-align: left;
				position: relative;
				left: 23px;
				bottom: 20px;
			}

			.address{
				text-align: left;
				position: relative;
				left: 320px;
				bottom: 1135px;
			}
			.idcolor{
				color: red;
				text-align: left;
				position: relative;
				left: 135px;
				bottom: 41px;
			}

</style><!-- EOF CSS INCLUDE -->
</head>
	<body>
		<!-- START PAGE CONTAINER -->
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					<!-- START TEXT ELEMENTS -->
					<?php
require '../require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `inspection_order` WHERE `io_no` = '$_GET[id]'") or die(mysqli_error());
$fetch = $query->fetch_array();
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
$month = date("m", strtotime($fetch['month']));

$ir_no = $fetch['io_no'];
                        
$month2 = date("m", strtotime($fetch['month']));
$year = $fetch['year'];

$io = $fetch['io_no'];
$io_no = 'IO' . '-' . $year . '-' . $month2 . '-' . $ir_no;

$query4 = $conn->query("SELECT * FROM `inspection_schedule` WHERE io_no = '$io_no'") or die(mysqli_error());
$fetch4 = $query4->fetch_array();
?>

					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="btn-group pull-right">
								<div class="pull-left">
									<button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
									<a href="../inspection-orderEdit.php?appnum=<?php echo $fetch['applicantsnumber'];?>" class="btn btn-default btn-sm">Back</a>
								</div>
							</div>
						</div>
						<div id="print">
							<div class="panel-body">
								<center class="center-1">
								<h4>Republic of the Philippines</h4>
								<h3 class="BFP-title">BUREAU OF FIRE PROTECTION</h3>
								</center>

								<h3 class="today"><?php echo $today ?></h3>
								<p class="line-1">________________</p>
								<h3 class="date">Date</h3>

								<h3 class="IDno">NUMBER : &nbsp; &nbsp; &nbsp; <p class="idcolor"> <?php echo $io_no; ?> </p>  </h3>
								
								<h1 class="IOtitle"> INSPECTION ORDER </h1>
								<br> <br>
								<div class="lamesa">
								<table id="one" border="1" cellspacing="0">
									<tr>
										<th width="27%">TO </th>
										<th> : </th>
										<th><strong> <p> &nbsp; &nbsp; &nbsp; Inspector <?php echo $fetch4['inspectors']?> &nbsp; &nbsp; &nbsp; </p> </strong></th>
									</tr>
									<tr>
										<th width="27%">PROCEED</th>
										<th> : </th>
										<th>
										<strong> 
											<p> 
												&nbsp; &nbsp; &nbsp; <p> <h1 class="businessname"> <?php echo $fetch['business_name'];?> </h1> </p> &nbsp; &nbsp; &nbsp; 
											</p> 
										</strong>
										</th>
									</tr>
									<tr>
										<th width="27%">PURPOSE</th>
										<th> : </th>
										<th><strong> <p class="purpose"> Fire Safety Inspection to determine compliance with the existing &emsp;provisions of the
										Fire Code of the Philippines of 2008 (R.A 9514), &emsp;&nbsp; &emsp; directions and other partinent ordinance, laws, and regulations. &nbsp; &nbsp; &nbsp; </p> </strong></th>
									</tr>
									<tr>
										<th width="27%">DURATION</th>
										<th> : </th>
										<th><strong> <p> &nbsp; &nbsp; &nbsp; Three (3) working days &nbsp; &nbsp; &nbsp; </p> </strong></th>
									</tr>
									<tr>
										<th width="27%">REMARKS OR <br>ADDITIONAL INSTRUCTIONS &nbsp; &nbsp; &nbsp;</th>
										<th> : </th>
										<th><strong> <p> &nbsp; &nbsp; &nbsp; Submit Report not later than the day after inspection. &nbsp; &nbsp; &nbsp; </p> </strong></th>
									</tr>

								</table>
								</div>
								<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                            
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
								
								<strong> <p class="line-4"> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p> </strong>

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

								<h2> <p class="address"> <?php echo $fetch['estab_address'];?> </p> </h2>

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