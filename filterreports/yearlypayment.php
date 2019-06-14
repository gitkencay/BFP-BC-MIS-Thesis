<div class="yearlypayment reporttype">
    <hr>

    <h4>Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(total_amount) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/PaymentYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Construction Tax | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(construction_tax) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/ConstructiontaxYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Reality Tax | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(reality_tax) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/RealityYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Premium Tax | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(premium_tax) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/PremiumYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Sales Tax | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(sales_tax) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/SalesYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Proceeds Tax | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(proceeds_tax) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/ProceedsYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Inspection Fee | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(inspection_fee) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/InspectionYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Storage Clearance | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(storage_clearance) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/StorageYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Conveyance Clearance | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(conveyance_clearance) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/ConveyanceYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Installation Clearance | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(installation_clearance) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/InstallationYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h4>Other Clearance | Yearly Payment</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Year</th>
                <td  style="text-align: center;">Total Amount Due</th>
                <th class="buttonhide">Action</th>
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
            $query = $conn->query("SELECT *, sum(other_clearance) as total FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $total_amount = number_format($fetch['total'],2,".",",");
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td  style="text-align: right;"><?php echo $total_amount?></td>
                <td class="buttonhide"><a href="filterreports/OtherYearly.php?year=<?php echo $fetch['year'];?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>
