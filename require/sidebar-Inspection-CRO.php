<?php
require_once 'logincheck.php';
require 'databaseconnection.php';
$id = $_SESSION['id'];

$query2 = $conn->query("SELECT * from `users` WHERE `id` = '$id'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();

$officername = $fetch2['fname'] . ' '. $fetch2['lname'];
?>

<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="home-Inspection-CRO.php"><strong>BFP-BC MIS</strong></a>
            <a href="#" class="x-navigation-control"></a>
        </li>

        <div class="profile">
            <div class="profile-image">
                <img src="img/fireman2.png"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name"> <?php echo $officername?></div>
                <div class="profile-data-title">Inspection-CRO</div>
            </div>
        </div>
        <ul id="navSid">                                                                            
            <li>
                <a href="home-Inspection-CRO.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
            </li>                    
            <li class="xn-openable">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Transaction</span></a>
                    <ul>
                        <li><a href="Transaction-Inspection.php"> Inspection & Compliance</a></li>
                        <li><a href="Transaction-Scheduling.php">Scheduling</a></li>    
                    </ul>
            </li>                                                        
        </ul>
        <!-- END X-NAVIGATION -->
        </div>