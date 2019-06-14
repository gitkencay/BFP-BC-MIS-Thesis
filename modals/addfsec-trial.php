<div class="modal fade" id="FSEC-Reg" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">New FSEC Applicant</h3>
                    </div>
                    <form id="fsec" method="post" action="actions/addfsec.php" onsubmit="return confirm('Are you sure you want to add this FSEC application?');"  >
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
                                        <label for="app-no" class="col-sm-5 control-label">Application No.</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control text-primary" id="app-no" name="application_no" value="<?php echo $year. '-' .$month. '-' .$application_no?>">
                                        </div>
                                     </div>
                                    <div class="form-group">
                                        <label for="app-name" class="col-sm-5 control-label">Applicant Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="app-nme" name="application_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="busi-name" class="col-sm-5 control-label">Business Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="busi-nme" name="business_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="estab-add" class="col-sm-7 control-label">Establishment Address&emsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="estab-add" name="establishment_address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bldg-code" class="col-sm-5 control-label">Building Type&emsp;</label>
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
                                    </div>
                                    <div class="form-group">
                                <label for="brgy-no" class="col-sm-3 control-label">Barangay</label>
                                <div class="col-sm-10">
                                <select class="form-control select" data-live-search="true" name="barangay_name">
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
                                <div class="form-group">
                                    <label for="user-id" class="col-sm-12 control-label">&nbsp; Phone Number </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="cpnumb" name="cpnumb" required>
                                    </div>                                                                                            
                                </div>
                                <div class="form-group">
                                    <label for="user-id" class="col-sm-12 control-label">&nbsp; Name of CRO </label>
                                    <div class="col-sm-10">
                                    <select class="form-control select" data-live-search="true" name="croname">
                                        <option selected disabled>Select</option>
                                            <?php
                                                require 'require/databaseconnection.php';
                                                $sql = "SELECT * FROM employee where officer_type = 'CRO' ";
                                                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                                while( $rows = mysqli_fetch_assoc($resultset) ) {
                                                    ?>
                                                    <option value="<?php echo $rows["officer_fname"]. ' ' .$rows["officer_lname"]; ?>"> <?php echo $rows["officer_fname"]. ' ' .$rows["officer_lname"]; ?></option>
                                                    <?php } ?>
                                    </select>
                                    </div>                                                                                            
                                </div>
                                <div class="form-group">
                                    <label for="date" class="col-sm-4 control-label">&nbsp;Date Applied</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control datepicker"  name="date_applied" required/>
                                        </div>
                                </div>
                                </div>

                                
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-id" class="col-sm-3 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="username" name="username">
                                            <div id="uname_response"></div>
                                        </div>                                                                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="password" name="password">
                                           
                                        </div>                                                                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="owner-name" class="col-sm-5 control-label">Owner Name&emsp;</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="owner-name" name="owner_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="checkbox" id="chkAssociation" onclick="enableTextBox();" >
                                    </div>
                                    <div class="form-group">
                                        <label for="floor-number" class="col-sm-6 control-label">Number of Floors&emsp;</label>
                                        <label for="lot-size" class="col-sm-3 control-label">Lot Size</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="floor-number" name="number_of_floors">
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="lot-size" name="lot_size">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-12">
                                            <select class="form-control select" id="status" name="status">
                                                <option value="0">Select</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Complete">Complete</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                <label for="iniReq" class="col-sm-12 control-label"><br>Initial Requirements</label>
                                <div class="col-sm-12">
                                   <label><input type="checkbox" class="icheckbox" value="IniReq1" name="initial_requirements[]">&nbsp;Endorsement from Building Official (BO)</label> <br>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq2" name="initial_requirements[]">&nbsp;Three (3) Sets of Building Plans and Specifications</label> <br>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq3" name="initial_requirements[]">&nbsp;One (1) Set of Bills of Materials and Cost Estimate</label> <br>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq4" name="initial_requirements[]">&nbsp; Three (3) Sets  of Detailes Fire Safety Plans and Specifications or &emsp;&emsp; (FALAR-1) for Occupancy of at least 50 persons</label>
                                </div>
                            </div>
                                </div>
                            </div> 
                        <div class="modal-footer">
                            <div class="col-sm-6">
                                <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;</small></p>
                            </div> 
                            <button type="submit" id="save" class="btn btn-info" name="submit"><span class="fa fa-check"></span>Save</button>
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
    </div>