
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
					margin-bottom:100px;
					padding: 0;
                  }
			}

			#print{
				width: 80%;
				margin: auto;
				border: 10px double #000;

			}

            .left-1{
                position: relative;
                float:left;
                top: 50px;
                left: 110px;
            }

            .right-1{
                position: relative;
                float:right;
                top: 15px;
                right: 110px;
            }

			.center-1{
				text-align: center;
				position: relative;
				top: -55px;
			}

			.center-2-1{
				text-align: center;
				position: relative;
				top: -60px;
			}

			.center-2-2{
				text-align: center;
				position: relative;
				top: -75px;
			}

			.center-2-3{
				text-align: center;
				position: relative;
				top: -87px;
			}

			.center-2-4{
				text-align: center;
				position: relative;
				top: -100px;
			}
			.IDno{
				color: red;
				text-align: left;
				position: relative;
				top: -120px;
				left: 140px;
			}

			.BFP-title{
				color:darkblue;

			}

			.FSECtitle{
				color: darkblue;
				text-align: center;
				position: relative;
				left: 20px;
				bottom: 110px;
            }
            
            .typeofpermit{
				color: darkblue;
				text-align: center;
				position: relative;
				left: 20px;
				bottom: 64px;
            }

			.today{
				text-align: right;
				position: relative;
				right: 140px;
				bottom: 110px;
			}

			.date{
				text-align: right;
				position: relative;
				right: 165px;
				bottom: 165px;
			}

			.line-1{
				text-align: right;
				position: relative;
				right: 120px;
				bottom: 145px;
			}

			.twimyc{
				text-align: left;
				position: relative;
				left: 140px;
				bottom: 155px;
			}

			.text-justify{
				text-align: justify;
				position: relative;
				bottom: 170px;
				text-indent: 80px;
				margin: 0px 113px 0px 140px;
			}

			.text-justify-2{
				text-align: justify;
				position: relative;
				bottom: 170px;
				text-indent: 80px;
				margin: 0px 113px 0px 140px;
			}

			.text-justify-3{
				text-align: justify;
				position: relative;
				bottom: 170px;
				text-indent: 80px;
				margin: 0px 113px 0px 140px;
			}

			.fcfees{
				text-align: justify;
				position: relative;
				bottom: 170px;
				left: 140px;
			}
			
			.autho-1{
				text-align: right;
				position: relative;
				bottom: 250px;
				right: 160px;
			}

			.autho-2{
				text-align: right;
				position: relative;
				bottom: 270px;
				right: 180px;
			}

			.autho-3{
				text-align: right;
				position: relative;
				bottom: 260px;
				right: 273px;
			}

			.autho-4{
				text-align: right;
				position: relative;
				bottom: 245px;
				right: 111px;
			}

			.line-2{
				text-align: right;
				position: relative;
				right: 117px;
				bottom: 392px;
			}

			.line-3{
				text-align: right;
				position: relative;
				right: 117px;
				bottom: 333px;
			}

			.businesspermit{
				text-align: right;
				position: relative;
				right: 345px;
				bottom: 604px;
			}

			#businessn{
				font-size: 26px;
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
								<div class="pull-right">
									<ul class="panel-controls">
										<button class="btn btn-default btn-sm" onclick="printContent('print')"><span class="fa fa-print"></span>Print</button>
										<a href="../Report-Certification.php" class="btn btn-default btn-sm"><span class="fa fa-mail-reply"></span>Back</a>
									</ul>
								</div>
							</div>
						</div>
						<div id="print">
						<div class="panel-body">
                            <?php
require '../require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `application` WHERE `application_no` = '$_GET[id]'") or die(mysqli_error());
$fetch = $query->fetch_array();
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
$month = date("m", strtotime($fetch['month']));

$query2 = $conn->query("SELECT * FROM `assessment` WHERE `application_no` = '$_GET[id]'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();
$month2 = date("m", strtotime($fetch2['month']));
$total = number_format($fetch2['total_amount'], 2, '.', ',');
$orno = $fetch2['ops_no'];
?>
                                <div class = "clearfix">
                                    <img class="left-1" style="height:120px;width:120px;" src="../assets/images/DILG.png"> <br> <br>
									<img class="right-1" style="height:120px;width:120px;" src="../assets/images/download.png"> <br> <br>
								</div>
								<center class="center-1">
								<h4>Republic of the Philippines</h4>
								<h4> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Department of the Inferior and Local Government</h4>
								<h3 class="BFP-title">BUREAU OF FIRE PROTECTION</h3>
								</center>

								<p  class="center-2-1">_______________________________</p>
								<p class="center-2-2">___________________________________</p>
								<p class="center-2-3">_______________________________________</p>
								<p class="center-2-4">___________________________________________</p>

								</br>
								<h3 class="IDno">FSEC NO. R : <?php echo $fetch['year'] . '-' . $month . '-' . $fetch['application_no'] ?> </h3>

								<center class="FSECtitle">
								<h1> FIRE SAFETY EVALUATION CLEARANCE </h1>
								</center>

								<h3 class="today"><?php echo $today ?></h3>
								<p class="line-1">________________</p>
								<h3 class="date">Date</h3>

								<h3 class="twimyc"> TO WHOM IT MAY CONCERN: </h3>

								</br>
								<center>
								<p class="text-justify">
									By virtue of the provisions of RA 9514 otherwise known as the Fire Code of the Philippines of 2008 the application for <strong id="businessn"> FIRE SAFETY EVALUATION CLEARANCE </strong> of
									<strong id="businessn"> <?php echo $fetch['business_name'] ?> </strong id="businessn"> to be constructed / renovated / altered / modified / change of occupancy located at <strong id="businessn"> <?php echo $fetch['establishment_address'] ?> </strong> owned by <strong id="businessn"> <?php echo $fetch['owner_name'] ?> </strong>
									is hereby <strong>GRANTED</strong> after the building plans and other documents conform to the fire safety and life safety requirements of the Fire Code of the Philippines of 2008
									and its IRR and that the recommendations in the Fire Safety Checklist (FSC) will be adopted.
								</p>
								</center>

								</br>
								<center>
								<p class="text-justify-2">
									This clearance is being issued for ______________________________________.
								</p>
								</center>

								</br>
								<center>
								<p class="text-justify-3">
									Violation of Fire Code Provision shall ipso facto cause this certificate null and void, and shall hold the owner of the building liable to the penalties provided by the said Fire Code.
								</p>
								</center>

								</br>							
								<p class="fcfees">
								<strong> Fire Code Fees: </strong> </br>
								Amount Paid: <strong> ₱  <?php echo $total?> </strong> </br>
								O.R Number: <strong> <?php echo 'OPS'. '-' .$fetch2['year']. '-'. $month2.'-'.$orno?></br> </strong>
								Date: <strong> <?php echo $today?> </strong> </br> 
								</p>

								<p class="autho-1">
								<strong> RECOMMEND APPROVAL: </strong> </br>
								</p>
								</br>
								
								<p class="autho-2">
								CHIEF, FSES </br>
								</p>
								
								<p class="autho-3">
								<strong> APPROVED: </strong> </br>	
								</p>

								<p class="autho-4">
								CITY/MUNICIPAL FIRE MARSHAL</br> 
								</p>

								<p class="line-2">______________________________</p>
								<p class="line-3">______________________________</p>

								<p class="businesspermit">
									<strong> EVALUATION CLEARANCE </strong> 
								</p>
							<div>
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
		<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>

	</body>
</html>