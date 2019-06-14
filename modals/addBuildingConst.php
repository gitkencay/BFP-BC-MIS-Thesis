<?php
require 'require/databaseconnection.php';
$query2 = $conn->query("SELECT * FROM `bldg_construct`") or die(mysqli_error());
$fetch2 = $query->fetch_array();

$month = date("m");
$year = date('Y');

$io_schedule = $fetch2['io_schedule'] + 1;

$query3 = $conn->query("SELECT * FROM `inspection_report` order by ir_no DESC limit 1") or die(mysqli_error());
$fetch3 = $query3->fetch_array();
$io_no = $fetch3['ir_no'] + 1;
?>
        <!--Start Modal Building Construction-->
        <div id="Bldg_Const" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Building Construction</h4>
                </div>
                <form method="post" action="actions/addBldgConst.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="hidden" name="application_number" value="<?php echo $fetch['application_no']?>"/>
                                <input type="hidden" class="form-control" id="ir_no" name="ir_no" readonly value="<?php echo 'IR' . '-' . $year . '-' . $month . '-' .$io_no ?>"/>
                                 <label for="beams" class="col-md-5 control-label">Beams</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="beams" name="beams">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="columns" class="col-md-5 control-label">Columns</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="columns" name="columns">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="flooring" class="col-md-5 control-label">Flooring</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="floor" name="floor">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ex_walls" class="col-md-5 control-label">Exterior Walls</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="exterior" name="exterior">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cor_walls" class="col-md-5 control-label">Corridor Walls</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="corridor" name="corridor">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                                <input type="hidden" name="app" value="<?php echo $app?>">
                            </div>
                            <div class="form-group">
                                <label for="room_part" class="col-md-5 control-label">Room Partitions</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="partition_no" name="partition_no">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="main_stair" class="col-md-5 control-label">Main Stair</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="stair" name="stair">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="windows" class="col-md-5 control-label">Windows</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="windows" name="windows">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ceiling" class="col-md-5 control-label">Ceiling</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="ceiling" name="ceiling">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="main_door" class="col-md-5 control-label">Main Door</label>
                                <div class="col-md-7">
                                     <select class="form-control select" id="door" name="door">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="trusses" class="col-md-5 control-label">Trusses</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="trusses" name="trusses">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="roof" class="col-md-5 control-label">Roof</label>
                                <div class="col-md-7">
                                    <select class="form-control select" id="roof" name="roof">
                                        <option value="">Select</option>
                                        <option value="concrete">concrete</option>
                                        <option value="steel">steel</option>
                                        <option value="wood">wood</option>
                                        <option value="plastic">plastic</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <!-- <ul class="panel-controls"> -->
                                        <label for="confirm" style="display: none; font-size: 24px;text-align: center;" id="addnoticec"  class="col-sm-12 control-label">
                                        Are you sure you want to add this Building Construction?
                                        </label>
                                        <div class="col-sm-3">
                                                &nbsp;
                                        </div>
                                        <div>
                                            <div class="col-sm-4">
                                                <button type="submit" style="display:none;" class="btn btn-info" id="addnoticey" name="save_bldgconstruction"><span class="fa fa-check"></span>Yes</button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-sm-2">
                                                <button type="button" style="display:none;" class="btn btn-danger" id="addnoticen" data-dismiss="modal"><span class="fa fa-times"></span>No</button>
                                            </div>
                                        </div>    
                                    <!-- </ul>-->
                                </div>    
                            </div>
                        </div>
                <div class="modal-footer">
                    <div class="col-md-6">
                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                    </div>
                    <button type="button" class="btn btn-info" onclick="myFunctionBldg()"><span class="fa fa-check"></span>Confirm</button>
                </div>
                </form>
                </div>
                </div>
        </div>
    </div>
    <script>
        function myFunctionBldg() {
            document.getElementById("addnoticec").style.display = "block";
            document.getElementById("addnoticey").style.display = "inline";
            document.getElementById("addnoticen").style.display = "inline";
        }
    </script>
    
    <!--End Modal Building Construction-->
