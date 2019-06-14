<html>

    <head>
    <title>Simple invoice in PHP</title>
        <style type="text/css">
			@media print{
				body, page[size="A5"] {
                  }
			}

			#print{
				width: 80%;
				margin: auto;
            }
            
            div.invoice {
            border:1px solid #ccc;
            padding:10px;
            height:445pt;
            width:435pt;
            font-family: times;
            font-size: 14;
            }

            .left-1{
                position: relative;
                top: 72px;
                left: 200px;
            }

            div.company-address {
                float:left;
                width:200pt;
            }

            div.invoice-details {
                float:right;
                width:150pt;
            }


            div.clear-fix {
                clear:both;
                float:none;
            }

            table {
                width:60%;
            }

            th {
                text-align: left;
            }

            td {
            }

            .text-left {
                text-align:left;
            }

            .text-center {
                text-align: right;
            }

            .text-right {
                text-align:right;
            }

        </style>
    </head>

    <body>
    <div class="pull-left">
									<button class="btn btn-default btn-sm" onclick="printContent('print')">Print</button>
									<a href="../Transaction-Assessment.php" class="btn btn-default btn-sm">Back</a>
								</div>
    <?php
require '../require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `assessment` WHERE ops_no = '$_GET[id]'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<div id="print">
    <div class="invoice">
        <div class="company-address">
            Accountable Form No. 51-C
            <br />
            Revised January, 1992
            <!-- <?php echo $fetch['ops_no'];?> -->
        </div>

        <div class="invoice-details">
            (ORIGINAL)
            <br />
        </div>


        <div class="clear-fix"></div>
        <table id="two" border ='1' cellspacing='0'>
            <tr>
                <th>Official Receipt<br> of the<br> Philippines</th>
                <img class="left-1" style="height:50px;width:60px;" src="../assets/images/coat_of_arms.png"> <br> <br>
            </tr>
        <tr>
        <th>Agency : BFP- Bacolod City</th>
        <th>Fund</th>
        </tr>
        <tr>
        <th>Payor : <?php echo $fetch['application_name'];?></th>
        
        </tr>
        </table>
            <table id="one" border='1' cellspacing='0'>
                <tr>
                    <th width=100>Nature of Collection</th>
                    <th width=100>Amount</th>
                </tr>


            <?php
$construction = $fetch['construction_tax'];
$reality = $fetch['reality_tax'];
$premium = $fetch['premium_tax'];
$sales = $fetch['sales_tax'];
$proceeds = $fetch['proceeds_tax'];
$inspection = $fetch['inspection_fee'];
$storage = $fetch['storage_clearance'];
$conveyance = $fetch['conveyance_clearance'];
$installation = $fetch['installation_clearance'];
$other = $fetch['other_clearance'];
$number = $fetch['total_amount'];
$totalamount = number_format($number, 2);

$total = 0;
$vat = 21;

$articles = array(
    array("Construction Tax", "Reality Tax", "Premium Tax", "Sales Tax", "Proceeds Tax", "Inspection fee", "Storage Clearance", "Conveyance Clearance", "Installation Clearance", "Other Clearance"),
    array($construction, $reality, $premium, $sales, $proceeds, $inspection, $storage, $conveyance, $installation, $other),
);

for ($a = 0; $a < 10; $a++) {
    $description = $articles[0][$a];
    $amount = $articles[1][$a];
    $formattedtotal = number_format($amount, 2); 
    echo ("<tr>");
    echo ("<td>$description</td>");
    echo ("<td class='text-center'>$formattedtotal</td>");
    echo ("</tr>");
}

echo ("<tr>");
echo ("<td colspan='1' class='text-right'><b>TOTAL</b></td>");
echo ("<td class='text-right'><b>₱ ". $totalamount . " </b></td>");
echo ("</tr>");
?>
                <table id="two" border ='1' cellspacing='0'>
                    <tr><th><br></th></tr>

                </table>
            </table>
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

    </body>

</html>