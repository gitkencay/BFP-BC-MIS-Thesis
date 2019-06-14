<?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `application`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    // convert ang month nga name format to number format;
    $month = date("m", strtotime($fetch['month']));
    // plus 1 siya kay tungod ang pinaka latest na application no gna add 1 pra sa next na ma apply sa registration
    $application_no = $fetch['application_no'] + 1;
    // gina merge ang month, year kag ang application no;
?>
<div class="modal fade" id="updatefsec<?php echo $fetch['application_no'];?>" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Application No: <?php echo $fetch['year']. '-' .$month. '-' .$fetch['application_no']?></h3>
            </div>
            <form method="post" action="actions/editfsic.php" onsubmit="return confirm('Are you sure you want to edit this FSEC application?');"  >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                        <input type="hidden" class="form-control" id="app-no" name="application_no" value="<?php echo $fetch['application_no']?>" readonly>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-5 control-label">Applicant Name&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="app-nme" name="application_name" value="<?php echo $fetch['application_name']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="busi-name" class="col-sm-5 control-label">Business Name&nbsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="busi-nme" name="business_name" value="<?php echo $fetch['business_name']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="estab-add" class="col-sm-7 control-label">Establishment Address&emsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="estab-add" name="establishment_address" value="<?php echo $fetch['establishment_address']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bldg-code" class="col-sm-5 control-label">Building Type&emsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="bldg-code" name="building_type">
                                        <option value="<?php echo $fetch['building_type']?>"><?php echo $fetch['building_type']?></option>
                                        <option value="0">Assembly</option>
                                        <option value="1">Business-Office</option>
                                        <option value="1">Educational</option>
                                        <option value="1">Mercantile</option>
                                        <option value="1">Small-Business</option>
                                        <option value="1">Storage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="brgy-no" class="col-sm-3 control-label">&nbsp;Barangay</label>
                                <div class="col-sm-10">
                                <select class="form-control select" data-live-search="true" id="brgy-no" name="barangay_name">
                                <option value="<?php echo $fetch['barangay_name']?>"><?php echo $fetch['barangay_name']?></option>
                                <?php
                                 $query2 = $conn->query("SELECT * FROM `barangay`") or die(mysqli_error());
                                 while($fetch2 = $query2->fetch_array()){
                                                 ?>
                                                 <option value="<?php echo $fetch2['barangay_name'];?>"><?php echo $fetch2['barangay_name']?></option>
                                                 <?php
                                 }
                                 ?>
                            </select>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="user-id" class="col-sm-12 control-label">&nbsp; Phone Number </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cpnumb" name="cpnumb" value="<?php echo $fetch['cpnumb']?>"required>
                                    </div>                                                                                            
                            </div>
                            <div class="form-group">
                                    <label for="user-id" class="col-sm-12 control-label">&nbsp; Name of CRO </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="croname" name="croname" value="<?php echo $fetch['croname']?>"readonly>
                                    </div>                                                                                            
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--
<div class="form-group">
<label for="date" class="col-sm-4 control-label">Date Applied</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="date" name="date">
</div>
</div>
-->
                           

                            <!-- <div class="form-group">
                                <label for="user-id" class="col-sm-3 control-label">&nbsp;Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user-id" name="username" value="<?php echo $fetch['username']?>">
                                </div>                                                                                            
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">&nbsp;Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user-id" name="password" value="<?php echo $fetch['password']?>">
                                </div>                                                                                            
                            </div> -->
                            <div class="form-group">
                                <label for="owner-name" class="col-sm-5 control-label">Owner Name&emsp;&nbsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="owner-name" name="owner_name" value="<?php echo $fetch['owner_name']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="floor-number" class="col-sm-5 control-label">Number of Floors</label>
                                <label for="lot-size" class="col-sm-7 control-label">Lot Size</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="floor-number" name="number_of_floors" value="<?php echo $fetch['number_of_floors']?>">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lot-size" name="lot_size" value="<?php echo $fetch['lot_size'] . " sq.m"?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="status" class="col-sm-12 control-label"><br>Initial Requirements</label>
                                <div class="col-sm-12">
                                    <?php
$initial_requirements = $fetch['initial_requirements'];
$check = explode(",", $initial_requirements);
?>
                                    <label>
                                        <input type="checkbox" class="icheckbox" value="IniReq1" name="initial_requirements[]"
                                    <?php
if (in_array("IniReq1", $check)) {
    echo "checked";
}
?>
                                    >Endorsement from Building Official (BO) / Business Permit Licensing Office (BPLO)
                                    </label> 
                                    <br>


                                    <label><input type="checkbox" class="icheckbox" value="IniReq2" name="initial_requirements[]" <?php
if (in_array("IniReq2", $check)) {
    echo "checked";
}
?>
                                    >&nbsp;Three (3) Sets of Building Plans and Specifications</label> <br>
                                    <label><input type="checkbox" class="icheckbox" value="IniReq3" name="initial_requirements[]"
                                    <?php
if (in_array("IniReq3", $check)) {
    echo "checked";
}
?>
                                    >&nbsp;One (1) Set of Bills of Materials and Cost Estimate</label> <br>
                                    <label><input type="checkbox" class="icheckbox" value="IniReq4" name="initial_requirements[]"
                                    <?php
if (in_array("IniReq4", $check)) {
    echo "checked";
}
?>
                                    >&nbsp;Three (3) Sets  of Detailes Fire Safety Plans and Specifications or &emsp;&emsp; (FALAR-1) for Occupancy of at least 50 persons</label>

                                    <?php
$initial_requirements = $fetch['initial_requirements'];
$check = explode(",", $initial_requirements);
?>
                                    
                                  
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">&nbsp;Status</label>
                                <div class="col-sm-4">
                                    <select class="form-control select" id="status" name="status" >
                                        <option value="<?php echo $fetch['status']?>"><?php echo $fetch['status']?></option>
                                        <option value="Pending">Pending</option>
                                        <option value="Incomplete">Incomplete</option>
                                        <option value="Complete">Complete</option>
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
                    <button type="submit" class="btn btn-info" name="editfsic"><span class="fa fa-check"></span>Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>
            </form>
            <SCRIPT LANGUAGE="JavaScript">
                function enableTextBox()
                {
                    if (document.getElementById("chkAssociation").checked == true)
                        document.getElementById("owner-name").disabled = false;
                    else
                        document.getElementById("owner-name").disabled = true;

                }
                </script>

        </div>                                                              
    </div>                                                            
</div> 
<?php
}
$conn->close();
?> 