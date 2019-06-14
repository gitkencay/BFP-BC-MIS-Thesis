<div class="payment reporttype">
    <hr>
    <h4> Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount Paid</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$ress1 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result0 = $ress1->fetch_array()){
    $RR1 = $result0['month'];
    $qq1 = $conn->query("SELECT sum(total_amount) as totalPayment, count(*) as NumberofApplicants FROM `assessment` WHERE month = '$RR1' && `year` = '$year' group by month") or die(mysqli_error());
    $ff1 = $qq1->fetch_array(); 
    $totalamouts = number_format($ff1['totalPayment'], 2, ".",",");
?>
            <tr>
                <td>
                    <?php echo $RR1;?>
                </td>
                <td>
                    <?php echo $ff1['NumberofApplicants'];?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamouts;?>
                </td>
                <td class="buttonhide"><a href="filterreports/PaymentMonthly.php?month=<?php echo $RR1;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview </a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h4> Construction Tax | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(construction_tax) as totalPayments, count(*) as NumberofApplicants2 FROM `assessment` WHERE month = '$R2' && construction_tax != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount1 = number_format($f2['totalPayments'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants2'];?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount1;?>
                </td>
                <td class="buttonhide"><a href="filterreports/ConstructionTaxMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h4> Reality Tax | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(reality_tax) as totalPayments1, count(*) as NumberofApplicants3 FROM `assessment` WHERE month = '$R2' && reality_tax != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount = number_format($f2['totalPayments1'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants3']?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount;?>
                </td>
                <td class="buttonhide"><a href="filterreports/RealityTaxMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h4> Premium Tax | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(premium_tax) as totalPayments2, count(*) as NumberofApplicants4 FROM `assessment` WHERE month = '$R2' && premium_tax != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount = number_format($f2['totalPayments2'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants4']?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount;?>
                </td>
                <td class="buttonhide"><a href="filterreports/PremiumTaxMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h4> Sales Tax | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(sales_tax) as totalPayments3, count(*) as NumberofApplicants5 FROM `assessment` WHERE month = '$R2' && sales_tax != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount = number_format($f2['totalPayments3'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants5']?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount;?>
                </td>
                <td class="buttonhide"><a href="filterreports/SalesTaxMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h4> Proceeds Tax | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(proceeds_tax) as totalPayments4, count(*) as NumberofApplicants6 FROM `assessment` WHERE month = '$R2' && proceeds_tax != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount = number_format($f2['totalPayments4'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants6']?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount;?>
                </td>
                <td class="buttonhide"><a href="filterreports/ProceedsTaxMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    
    <h4> Inspection Fee | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(inspection_fee) as totalPayments6, count(*) as NumberofApplicants8 FROM `assessment` WHERE month = '$R2' && inspection_fee != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount = number_format($f2['totalPayments6'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants8']?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount;?>
                </td>
                <td class="buttonhide"><a href="filterreports/InspectionFeeMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h4> Storage Clearance | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(storage_clearance) as totalPayments7, count(*) as NumberofApplicants9 FROM `assessment` WHERE month = '$R2' && storage_clearance != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount = number_format($f2['totalPayments7'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants9']?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount;?>
                </td>
                <td class="buttonhide"><a href="filterreports/StorageClearanceMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h4> Conveyance Clearance | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(conveyance_clearance) as totalPayments8, count(*) as NumberofApplicants10 FROM `assessment` WHERE month = '$R2' && conveyance_clearance != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount = number_format($f2['totalPayments8'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants10']?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount;?>
                </td>
                <td class="buttonhide"><a href="filterreports/ConveyanceClearanceMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h4> Installation Clearance | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(installation_clearance) as totalPayments9, count(*) as NumberofApplicants11 FROM `assessment` WHERE month = '$R2' && installation_clearance != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount = number_format($f2['totalPayments9'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants11']?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount;?>
                </td>
                <td class="buttonhide"><a href="filterreports/InstallationClearanceMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h4> Other Clearance | Monthly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Month</th>
                <th>Number of Applicants</th>
                <th style="text-align: center;">Total Amount</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
while($result2 = $res2->fetch_array()){
    $R2 = $result2['month'];
    $q2 = $conn->query("SELECT sum(other_clearance) as totalPayments10, count(*) as NumberofApplicants12 FROM `assessment` WHERE month = '$R2' && other_clearance != 0 && `year` = '$year' group by month") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $totalamount = number_format($f2['totalPayments10'], 2, ".",",");
    ?>
            <tr>
                <td>
                    <?php echo $R2;?>
                </td>
                <td>
                    <?php echo $f2['NumberofApplicants12'];?>
                </td>
                <td style="text-align: center;">
                    <?php echo $totalamount;?>
                </td>
                <td class="buttonhide"><a href="filterreports/OtherClearanceMonthly.php?month=<?php echo $R2;?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- <br>
    <h4>Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info"> 
                <th>Month</th>
                <th>Applicant Name</th>
                <th>Business Name</th>
                <th>Type of Certificate</th>
                <th>Total Amount Paid</th>
                <th>Date Applied</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'require/databaseconnection.php';
            $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            $query = $conn->query("SELECT * FROM `assessment` where `year` = '$year'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $totaldue = number_format($fetch['total_amount'],2,".",",");
            ?>
            <tr
            >    
                <td>
                    <?php echo $fetch['month']?>
                </td>
                <td>
                    <?php echo $fetch['application_name']?>
                </td>
                <td>
                    <?php echo $fetch['business_name']?>
                </td>
                <td>
                    <?php echo $fetch['type_of_certificate']?>
                </td>
                <td  style="text-align: right;">
                    <?php echo $totaldue?>
                </td>
                <td>
                    <?php echo $fetch['date_applied']?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table> -->
</div>