<!DOCTYPE html>
<html>
<head>
	<title>BFP BACOLOD MIS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<!-- CSS INCLUDE -->
<link rel="stylesheet" type="text/css" href="css/mycss.css"/>
<link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>

<!-- styles -->
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
		.line-1{
				text-align: right;
				position: relative;
				right: 111px;
				bottom: 5px;
			}
		.line-2{
			text-align:left;
			position:relative;
			left:111px;
			bottom:5px;
		}
		.date{
			text-align:right;
			position: relative;
			right:195px;
			bottom: 20px;
		}
		.center-1{
			text-align: center;
			position: relative;
			top: 20px;
		}
		.today{
				text-align: right;
				position: relative;
				right: 165px;
				bottom: -28px;
			}
		.text-justify{
				text-align: justify;
				position: relative;
				font-size: 18px;
				margin: 0px 95px 0px 95px;
				text-indent: 50px;
			}
			.greet{
				text-align: justify;
				position: relative;
				font-size: 18px;
				margin: 0px 95px 0px 95px;
			}
		.lamesa{
        width:500pt;
        font-family: times;
        font-size: 14;
        left: 195px;
		}
		.line3{
			text-align:right;
			position:relative;
			right:200px;
			bottom:5px;
		}
		.line4{
			text-align:right;
			position:relative;
			right:111px;
			bottom:5px;
		}
		.officer{
			text-align:right;
			position: relative;
			right:100px;
			bottom: 20px;
		}
		.lamesa2{
			text-align:left;
			position:relative;
			left:95px;
			bottom:30px;
			border: collapse;
			border: 1px solid #000;
		}
</style>
</head>
<body>
<div class="pull-left">
									<button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
									<a href="../Report-Applicant.php" class="btn btn-default btn-sm">Back</a>
								</div>

<div id="print">
<?php
require '../require/databaseconnection.php';
$query0 = $conn->query("SELECT * FROM `inspection_order` WHERE io_no = '$_GET[id]'") or die(mysqli_error());
$fetch0 = $query0->fetch_array();
$month2 = date("m", strtotime($fetch0['month']));
$io = 'IO'.'-'.$fetch0['year'].'-'.$month2.'-'.$fetch0['io_no'];
$dated = date("M-d-Y", strtotime($fetch0['date_created']));

$query5 = $conn->query("SELECT * FROM `inspection_report` WHERE io_no = '$io'") or die(mysqli_error());
$fetch5 = $query5->fetch_array();
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
$month = date("m", strtotime($fetch5['month']));

$queryz = $conn->query("SELECT * FROM `issue_notice` WHERE inspection_order = '$io'") or die(mysqli_error());
$fetchz = $queryz->fetch_array();
$amount = number_format($fetchz['amount'],2,",",".");

$querys = $conn->query("SELECT * FROM `inspection_schedule` WHERE io_no = '$io'") or die(mysqli_error());
$fetchs = $querys->fetch_array();
?>

								<center class="center-1">
								<h4>Republic of the Philippines</h4>
								<h3 class="BFP-title">BUREAU OF FIRE PROTECTION</h3>
								</center>

								<h3 class="today"><?php echo $today ?></h3>


<p class="line-1">___________________________</p>

<h3 class="date">Date</h3>
<p class="line-2">___________________________<br>___________________________<br>___________________________<br>___________________________</p>
<br>
<br>
<br>
<center class="center-2">NOTICE TO COMPLY</center>

<p class="greet">Sir/Madam</p><br><br><p class="text-justify">This has reference to the Fire Safety Inspection conducted by <strong> <?php echo $fetchz['inspector_name']?></strong> on <strong><?php echo $fetchs['inspection_date'];?></strong> within your premises located at the above address wherein inspector's report revealed the existence of the following deficiencies, in violation of the Fire Code of the Philippines of 2008 (R.A. 9514).</p>
<br>
<br>
<br>
<table class="lamesa" border="1" cellspacing="0" align="center">
	<tr>
		<th>Defects/Deficiencies</th>
		<th>Grace Period</th>
	</tr>
	<tr>
		<th align ="left">&nbsp; &nbsp; &nbsp; Checklist Classification : <?php echo $fetch5['checklist_classification']?><br></th>
		<th><br></th>
	</tr>
	<tr>
		<th align ="left">&nbsp; &nbsp; &nbsp; Checklist Exit : <?php echo $fetch5['checklist_exit']?><br></th>
		<th><br></th>
	</tr>
	<tr>
		<th align ="left">&nbsp; &nbsp; &nbsp; Checklist Lightings : <?php echo $fetch5['checklist_lightings']?><br></th>
		<th><br></th>
	</tr>
	<tr>
		<th align ="left">&nbsp; &nbsp; &nbsp; Checklist Protection : <?php echo $fetch5['checklist_protection']?><br></th>
		<th><br></th>
	</tr>
	<tr>
		<th align ="left">&nbsp; &nbsp; &nbsp; Checklist Equipments : <?php echo $fetch5['checklist_equipments']?><br></th>
		<th><br></th>
	</tr>
	<tr>
		<th align ="left">&nbsp; &nbsp; &nbsp; Checklist Hazardous : <?php echo $fetch5['checklist_hazardous']?><br></th>
		<th><br></th>
	</tr>
	<tr>
		<th align ="left">&nbsp; &nbsp; &nbsp; Checklist Operating : <?php echo $fetch5['checklist_operating']?><br></th>
		<th><br></th>
	</tr>
	
</table>
<br>
<br>

<p class="text-justify">In this regard you are hereby advised to comply/correct the above mentioned deficiencies the above cited grace period otherwise appropriate Notice to Correct Violation with corresponding order to pay administrative fine shall be issued by this office.</p>
<br>
<br>
<p class="line3">Very truly yours,</p>
<p class="line4">___________________________</p>

<h3 class="officer">City/Municipal Fire Marshal</h3>

<table class="lamesa2" cellspacing="0" align="left">
	<tr>
		<th><font color = "red">Original</font>(Applicant's/Owner's copy)</th>
		
		
	</tr>
	<tr>
		<th><font color = "red">Original</font>(BO or BPLO, as the case maybe)</th>
	</tr>
	<tr>
		<th><font color = "red">Original</font>(BFP copy)</th>
	</tr>
</table>

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

</body>
</html>
