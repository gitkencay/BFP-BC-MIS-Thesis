<!--Start modal add employee-->
<div id="Employee-Reg" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Employee Form</h4>
            </div>
            <form id="employee" method="post" action="actions/addemployee.php" >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="officer-type" class="col-sm-6 control-label">Officer Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="officer_type" name = "officer_type">
                                        <option value="CRO">CRO</option>
                                        <option value="Assessor">Assessor</option>
                                        <option value="Inspector">Inspector</option>
                                        <option value="Evaluator">Evaluator</option>
                                        <option value="Inspection-CRO">Inspection-CRO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rank-code" class="col-sm-6 control-label">Rank Code</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="Rank" name="rank">
                                        <option value="F01">F01</option>
                                        <option value="F02">F02</option>
                                        <option value="F03">F03</option>
                                        <option value="F04">F04</option>
                                        <option value="SF01">SF01</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="officer" class="col-sm-6 control-label">First Name</label>
                                <div class="col-sm-8">
                                    <input data-toggle="tooltip" data-placement="right" title="*Required, Employee First Name" type="text" class="form-control" id="officer_fname" name="officer_fname" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="officer" class="col-sm-6 control-label">Middle Name</label>
                                <div class="col-sm-8">
                                    <input data-toggle="tooltip" data-placement="right" title="*Required, Employee Middle Name" type="text" class="form-control" id="officer_mname" name="officer_mname" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="officer" class="col-sm-6 control-label">Last Name</label>
                                <div class="col-sm-8">
                                    <input data-toggle="tooltip" data-placement="right" title="*Required, Employee Last Name" type="text" class="form-control" id="officer_lname" name="officer_lname" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-6 control-label">Username</label>
                                <div class="col-sm-8">
                                    <input data-toggle="tooltip" data-placement="right" title="*Required, Employee User Name" type="text" class="form-control" id="username" name="username" required>
                                    <div id ="uname_response"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-sm-6 control-label">Password</label>
                                <div class="col-sm-8">
                                    <input data-toggle="tooltip" data-placement="right" title="*Required, Employee Password" type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{,}" title="Must contain at least one number and one uppercase and lowercase letter." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-6 control-label">Confirm Password</label>
                                <div class="col-sm-8">
                                    <input data-toggle="tooltip" data-placement="right" title="*Required, Confirm Password" type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-6 control-label">Contact Number</label>
                                <div class="col-sm-8">
                                    <input data-toggle="tooltip" data-placement="right" title="*Required, Employee Contact Number" type="text" class="form-control" id="contact_num" name="contact_num" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firestation" class="col-sm-6 control-label">Fire Station</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="firestation" name="firestation">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>
                            </div>
                            <br> <br>   
                            <div class="form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <!-- <ul class="panel-controls"> -->
                                            <label for="confirm" style="display: none; font-size: 24px;text-align: center;" id="confirmation"  class="col-sm-12 control-label">
                                            Are you sure you want to add this Employee Record?
                                            </label>
                                            <div class="col-sm-2">
                                                    &nbsp;
                                            </div>
                                            <div id="confirmedyes">
                                                <div class="col-sm-5">
                                                    <button type="submit" style="display:none;" class="btn btn-info" id="confirmyes" name="add_new_employ"><span class="fa fa-check"></span>Yes</button>
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
                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                    </div>
                    <button type="button" class="btn btn-info" onclick="myFunction()"><span class="fa fa-check"></span>Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End modal Add employee-->