<?php
require_once 'require/logincheck.php';
$id = $_SESSION['id'];
?>
        <!--Start MODAL-->
          <!--Start modal add employee-->
          <div id="FireFreqInc" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Fire Incident</h4>
            </div>
            <form method="post" action="actions/fireincident.php" onsubmit="return confirm('Are you sure you want to add this Fire Incident?');"  >
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                            
                        require 'require/databaseconnection.php';

                        $query2 = $conn->query("SELECT * from `users` WHERE `id` = '$id'") or die(mysqli_error());
                        $fetch2 = $query2->fetch_array();
                        
                        $cro = $fetch2['fname'] . ' '. $fetch2['lname'];
                        ?>
                         <div class="form-group">
                                <label for="dateInc" class="col-sm-12 control-label">Date of Incident</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control datepicker" id="dateofincident" name="dateofincident" required/>
                                    <input type="hidden" class="form-control" id="dateofincident" value="<?php echo $cro;?>" required/>
                                </div>
                         </div>
                         <br> <br> <br>
                         <div class="form-group">
                            <label for="numIncident" class="col-sm-12 control-label">No. of Structures Affected</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="structures" name="structures" required>
                            </div>
                        </div>

                         <br><br><br>
                        <div class="form-group">
                            <label for="typeOfArea" class="col-sm-12 control-label">Type of Area</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="areatype" name="areatype" required>
                            </div>
                        </div>


                        <br><br><br>
                        <div class="form-group">
                            <label for="IncLoc" class="col-sm-12 control-label">Location</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="date" class="col-sm-12 control-label">Time of Incident</label>
                                <div class="col-sm-8">
                                    <input type="time" id="time" name="time" required/>
                                </div>
                        </div>

                         <br> <br> <br>
                         <div class="form-group">
                            <label for="perInj" class="col-sm-12 control-label">No. of Civilian Injured</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="civilianinjured" name="civilianinjured" required>
                            </div>
                        </div>

                         <br> <br> <br>
                        <div class="form-group">
                            <label for="totCas" class="col-sm-12 control-label">Total Casualties</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="casualties" name="casualties" required>
                            </div>
                        </div>  

                         <br> <br> <br>
                        <div class="form-group">
                            <label for="totCas" class="col-sm-12 control-label">Barangay</label>
                            <div class="col-sm-8">
                                <select class="form-control select" data-live-search="true" name="barangay">
                                    <option selected disabled>Select</option>
                                        <?php
                                            require 'require/databaseconnection.php';
                                            $query = $conn->query("SELECT * FROM `barangay`") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                                    ?>
                                                    <option value="<?php echo $fetch['barangay_name'];?>"><?php echo $fetch['barangay_name']?></option>
                                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="modal-footer">
                <div class="col-sm-6">
                    <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                </div>
                <button type="submit" class="btn btn-info" id="savefireincident" name="savefireincident"><span class="fa fa-check"></span>Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End modal Add employee-->
        <!--End MODAL-->