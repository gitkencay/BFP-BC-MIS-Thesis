
<?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `fire_incident`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $barangay = $fetch['barangay'];
?>

<div class="modal fade" id="barangay<?php echo $fetch['id'];?>" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <?php
                                      $year = date('Y');
                ?>
                <h4 class="modal-title" id="largeModalHead">
                    <?php echo $fetch['barangay'];?> <strong> YEAR
                    <?php echo $year ?> </strong> </h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <button class="btn btn-success btn-md" onclick="printContent('prints')"><span class="fa fa-print"></span>
                        Print </button>
                    <hr>
                    <div id="prints">
                        <div class="croheading" style="display: none">
                            <?php
                    date_default_timezone_set('Asia/Manila');
                                      $today = date("M-d-Y");
                            ?>
                            <br>
                            <h4>Republic of the Philippines</h4>
                            <h3>BUREAU OF FIRE PROTECTION</h3>
                            <h4>Bacolod City</h4>
                            <br>
                            <h4>
                                <?php echo $today?>
                            </h4>
                            <br>
                            <br>
                            <h3> Fire Incident Report for the Year 2019 </h3>
                            <br>
                            <br>
                        </div>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Incident Time</th>
                                    <th>Incident Date</th>
                                    <th>No. of Structures Affected</th>
                                    <th>Type of Area</th>
                                    <th>Total Casualties</th>
                                    <th>No. of Civilian Injured</th>
                                    <th>Location</th>
                                    <th>Barangay</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require 'require/databaseconnection.php';
                                      $query2 = $conn->query("SELECT * from `fire_incident` where barangay = '$barangay' ") or die(mysqli_error());
                                      while ($fetchb = $query2->fetch_array()) {
                                ?>

                                <tr>
                                    <td><?php echo $fetchb['time'];?></td>
                                    <td><?php echo $fetchb['dateofincident'];?></td>
                                    <td><?php echo $fetchb['structures'];?></td>
                                    <td><?php echo $fetchb['areatype'];?></td>
                                    <td><?php echo $fetchb['casualties'];?></td>
                                    <td><?php echo $fetchb['civilianinjured'];?></td>
                                    <td><?php echo $fetchb['location'];?></td>
                                    <td><?php echo $fetchb['barangay'];?></td>
                                </tr>
                                <?php
                                      }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
            </div>
        </div>
    </div>
</div>
<?php
                                     }
$conn->close();
?> 