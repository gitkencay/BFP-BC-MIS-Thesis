
        <!--Start Modal Building Construction-->
        <div id="view_bldgConst<?php echo $fetch3['ir_no'];?>" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Building Construction</h4>
                </div>
                <form method="post" action="actions/addBldgConst.php" onsubmit="return confirm('Are you sure you want to add this Building Construction?');"  >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="hidden" name="application_number" value="<?php echo $fetch3['ir_no']?>"/>
                            <input type="hidden" class="form-control" id="ir_no" name="ir_no" readonly value="<?php echo $io_schedule?>"/>
                                <input type="hidden" class="form-control" id="ir_no" name="ir_no" readonly value="<?php echo 'IR' . '-' . $year . '-' . $month . '-' .$ir_no ?>"/>
                                 <label for="beams" class="col-md-5 control-label">Beams</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="beams" name="beams"  readonly  value="<?php echo $fetch3['beams'] ?>" require>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="columns" class="col-md-5 control-label">Columns</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="columns" name="columns" readonly  value="<?php echo $fetch3['columns'] ?>" require>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="flooring" class="col-md-5 control-label">Flooring</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="floor" name="floor" readonly  value="<?php echo $fetch3['floor'] ?>"  require>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="ex_walls" class="col-md-5 control-label">Exterior Walls</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="exterior" name="exterior" readonly  value="<?php echo $fetch3['exterior'] ?>" require>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="cor_walls" class="col-md-5 control-label">Corridor Walls</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="corridor" name="corridor" readonly  value="<?php echo $fetch3['corridor'] ?>" require>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="room_part" class="col-md-5 control-label">Room Partitions</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="partition_no" name="partition_no"  readonly  value="<?php echo $fetch3['partition_no'] ?>" require>
                                </div>
                            </div>
                            <br> <br>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="main_stair" class="col-md-5 control-label">Main Stair</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="stair" name="stair" readonly  value="<?php echo $fetch3['stair'] ?>" require>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="windows" class="col-md-5 control-label">Windows</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="windows" name="windows" readonly  value="<?php echo $fetch3['windows'] ?>" require >
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="ceiling" class="col-md-5 control-label">Ceiling</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="ceiling" name="ceiling" readonly  value="<?php echo $fetch3['ceiling'] ?>" require >
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="main_door" class="col-md-5 control-label">Main Door</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="door" name="door" readonly  value="<?php echo $fetch3['door'] ?>" require >
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="trusses" class="col-md-5 control-label">Trusses</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="trusses" name="trusses" readonly  value="<?php echo $fetch3['trusses'] ?>" require >
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label for="roof" class="col-md-5 control-label">Roof</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="roof" name="roof" readonly  value="<?php echo $fetch3['roof'] ?>" require >
                                </div>
                            </div>
                            <br> <br>
                        </div>
                    </div>
                
                <div class="modal-footer">
                    <div class="col-md-6">
                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                    </div>
                   
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>
                </form>
                </div>
                </div>
        </div>
    </div>
    <!--End Modal Building Construction-->
