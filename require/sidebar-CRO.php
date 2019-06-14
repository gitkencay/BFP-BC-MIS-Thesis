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
            <a href="home-CRO.php"><strong>BFP-BC MIS</strong></a>
            <a href="#" class="x-navigation-control"></a>
        </li>

        <div class="profile">
            <div class="profile-image">
                <img src="img/fireman2.png"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name"> <?php echo $officername?></div>
                <div class="profile-data-title"> Customer Relation Officer </div>
            </div>
        </div>
        <ul id="navSid">                                                                            
            <li>
                <a href="home-CRO.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
            </li>                    
            <li class="xn-openable">
                <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Master File</span></a>
                <ul>
                    <li><a href="DataEntry-EmpProf.php"><span class="fa fa-user"></span> Employee Profiling</a></li>
                    <li><a href="DataEntry-AppReg.php"><span class="fa fa-user"></span> Applicant Registration</a></li>        
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Reports</span></a>                        
                <ul>
                    <li><a href="Report-Certification.php"><span class=""></span> Certification</a></li>
                    <li><a href="Report-Applicant.php"><span class=""></span>  Applicant Status Monitoring </a></li>     
                    <li><a href="Report-Employee.php"><span class=""></span> Employee Report</a></li>
                    <li><a href="Report-Applicant-Summary.php"><span class=""></span> Applicant Case Report </a></li>
                    <li><a href="Report-Transaction.php"><span class=""></span>Transaction Status Report</a></li>
                    <li><a href="Report-FireFrequency.php"><span class=""></span> Fire & Frequency</a></li> 
                    <li><a href="Distress-SMSandCall.php"><span class=""></span> SMS Logs </a></li>
                </ul>
            </li>  
            <!--                  
            <li class="xn-openable">
                <a href="#"><span class="fa fa-warning"></span> <span class="xn-text">Distress Call</span></a>
                <ul>
                    <li><a href="Distress-FireRespondents.php"><span class="fa fa-align-justify"></span> Fire Stations Respondents</a></li>
                    <li><a href="Distress-SMSandCall.php"><span class="fa fa-th-large"></span> SMS Logs</a></li>
                </ul>
            </li>
            -->
            <li class="xn-openable">
                <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Maintenance</span></a>
                <ul>                            
                    <li><a href="Maintenance-MyAccount.php"><span class="fa fa-align-justify"></span> My Account</a></li>
                    <li><a href="Maintenance-UserManage.php"><span class="fa fa-sort-alpha-desc"></span> User Management</a></li>
                    <li><a href="Maintenance-SystemBackUp.php"><span class="fa fa-download"></span> System Back Up</a></li>                            
                </ul>
            </li>                                      
        </ul>
        <!-- END X-NAVIGATION -->
        </div>