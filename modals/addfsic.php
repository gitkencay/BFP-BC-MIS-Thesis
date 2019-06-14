<div class="modal fade" id="FSIC-Reg" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">New FSIC Applicant</h3>
            </div>
            <form method="post" action="actions/addfsic.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php
require 'require/databaseconnection.php';
$query = $conn->query("select * from `application` order by application_no DESC limit 1") or die(mysqli_error());
$fetch = $query->fetch_array();
// convert ang month nga name format to number format;
$month = date("m", strtotime($fetch['month']));
$year = date('Y');
// plus 1 siya kay tungod ang pinaka latest na application no gna add 1 pra sa next na ma apply sa registration
$application_no = $fetch['application_no'] + 1;
// gina merge ang month, year kag ang application no;
?>
                                <label for="app-no" class="col-sm-5 control-label">Application No.&nbsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">

                                    <input readonly type="text" class="form-control text-primary" id="app-no" name="application_no"
                                        value="<?php echo $year. '-' .$month. '-' .$application_no?>">
                                </div>
                                <!--
<div class="col-sm-1">
<input type="checkbox" id="chkAssociation" onclick="enableTextBox();" >
</div>
-->
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-5 control-label">Applicant Name&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input data-toggle="tooltip" data-placement="left" title="*Required, Applicant Full Name" type="text" class="form-control" id="app-nme" name="application_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="busi-name" class="col-sm-5 control-label">Business Name&nbsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input data-toggle="tooltip" data-placement="left" title="*Required, Business Name" type="text" class="form-control" id="busi-nme" name="business_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-5 control-label">Establishment Address</label>
                                <div class="col-sm-10">
                                    <input data-toggle="tooltip" data-placement="left" title="*Required, Establishment Address" type="text" class="form-control" id="app-nme" name="bussaddress">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="brgy-no" class="col-sm-3 control-label">&nbsp;Barangay</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select" data-live-search="true" name="barangay_name">
                                            <option selected disabled>Select</option>
                                            <?php
                               require 'require/databaseconnection.php';
                                $query = $conn->query("SELECT * FROM `barangay`") or die(mysqli_error());
                                while($fetch = $query->fetch_array()){
                                                ?>
                                            <option value="<?php echo $fetch['barangay_name'];?>">
                                                <?php echo $fetch['barangay_name']?>
                                            </option>
                                            <?php
                                }
                                ?>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="estab-add" name="establishment_address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bldg-code" class="col-sm-5 control-label">Building Type&emsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" id="bldg-code" name="building_type">
                                        <option value="0">Select</option>
                                        <option value="Assembly">Assembly</option>
                                        <option value="Business-Office">Business-Office</option>
                                        <option value="Educational">Educational</option>
                                        <option value="Mercantile">Mercantile</option>
                                        <option value="Small-Business">Small-Business</option>
                                        <option value="Storage">Storage</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="brgy-no" class="col-sm-12 control-label">&nbsp;Type of Permit</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select" id="type_of_permit" name="type_of_permits">
                                            <option value="0">Select</option>
                                            <option value="Business">Business</option>
                                            <option value="Occupancy">Occupancy</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user-id" class="col-sm-12 control-label">&nbsp; Phone Number </label>
                                <div class="col-sm-10">
                                    <input data-toggle="tooltip" data-placement="left" title="*Required, Phone Number" type="text" class="form-control" id="cpnumb" name="cpnumb" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label">&nbsp; Name of CRO </label>
                                <div class="col-sm-10">
                                    <input style="color: black" type="text" class="form-control" id="croname" name="croname" value="<?php echo $officername?>" readonly style="color: black;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-4 control-label">&nbsp;Date Applied</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control datepicker" name="date_applied" required />
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <!-- <div class="form-group">
                            <label for="date" class="col-sm-4 control-label">Date Applied</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control datepicker"  name="date_applied" required/>
                                </div>
                        </div> -->
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="form-group">
                                <label for="user-id" class="col-sm-12 control-label">&nbsp; Name of CRO </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="croname" name="croname" required>
                                </div>                                                                                            
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="user-id" class="col-sm-3 control-label">&nbsp;Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fsicusername" name="username">
                                    <div id="fsicname_response"></div>
                                </div>                                                                                            
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">&nbsp;Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="user-id" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{,}" title="Must contain at least one number and one uppercase and lowercase letter." required>
                                </div>                                                                                            
                            </div> -->
                            <div class="form-group">
                                <label for="owner-name2" class="col-sm-5 control-label">Owner Name&emsp;</label>
                                <div class="col-sm-10">
                                    <input data-toggle="tooltip" data-placement="right" title="*Required, Owner Full Name" type="text" class="form-control" id="owner-name2" name="owner_name">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="floor-number" class="col-sm-5 control-label">Number of
                                    Floors&emsp;&nbsp;&nbsp;&nbsp;</label>
                                <label for="lot-size" class="col-sm-7 control-label">Lot Size&nbsp;&nbsp;</label>
                                <div class="col-sm-4">
                                    <input data-toggle="tooltip" data-placement="left" title="*Required, Number of Floors" type="text" class="form-control" id="floor-number" name="number_of_floors">
                                </div>
                                <div class="col-sm-4">
                                    <input data-toggle="tooltip" data-placement="right" title="*Required, Lot Size" type="text" class="form-control" id="lot-size" name="lot_size">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-sm-12 control-label"><br>Initial Requirements</label>
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" id="status" name="status">
                                    <label><input type="checkbox" class="icheckbox" value="IniReq5" name="initial_requirements[]">Endorsement
                                        from Building Official (BO) / Business Permit Licensing Office (BPLO)</label>
                                    <br>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq6" name="initial_requirements[]">&nbsp;Photocopy
                                        of Building Permit and Assessment of Occupancy Permit Fee / Asssessment of
                                        Business Permit Fee / BPLO Assessment / Tax Bill for Business Permit as the
                                        case maybe</label> <br>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq7" name="initial_requirements[]">&nbsp;Copy
                                        of Fire Insurance Policy (If Any)</label> <br>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq8" name="initial_requirements[]">&nbsp;Copy
                                        of Latest Fire Safety Inspection Certificate Immediately Preceding this
                                        Application (If Any)</label>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq9" name="initial_requirements[]">&nbsp;Three
                                        (3) sets of Fire and Life Safety Assessment Report-2 (FALAR-2) for Occupancy
                                        Permit or FALAR 3 for Business Permit (For Occupancy of at least 50 Persons)</label>
                                    <br>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <!-- <ul class="panel-controls"> -->
                                            <label for="confirm" style="display: none; font-size: 24px;text-align: center;" id="confirmation"  class="col-sm-12 control-label">
                                            Are you sure you want to add this FSIC Application?
                                            </label>
                                            <div class="col-sm-2">
                                                    &nbsp;
                                            </div>
                                            <div id="confirmedyes">
                                                <div class="col-sm-5">
                                                    <button type="submit" style="display:none;" class="btn btn-info" id="confirmyes" name="submit"><span class="fa fa-check"></span>Yes</button>
                                                </div>
                                            </div>
                                            <div id="confirmedno">
                                                <div class="col-sm-5">
                                                    <button type="button" style="display:none;" class="btn btn-danger" id="confirmno" data-dismiss="modal"><span class="fa fa-times"></span>No</button>
                                                </div>
                                            </div>    
                                        <!-- </ul>-->
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-6">
                        <p class="text-danger"><small>*If you don't save, your changes will be
                                lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                    </div>
                    <button type="button" class="btn btn-info" onclick="myFunction()"><span class="fa fa-check"></span>Confirm</button>
                </div>
            </form>
            <SCRIPT LANGUAGE="JavaScript">
                function enableTextBox() {
                    if (document.getElementById("chkAssociation2").checked == true)
                        document.getElementById("owner-name2").disabled = false;
                    else
                        document.getElementById("owner-name2").disabled = true;
                }
            </script>
        </div>
    </div>
</div>