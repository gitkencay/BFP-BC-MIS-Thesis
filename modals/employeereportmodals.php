<!-- START OF MODAL -->
<div class="modal" id="modal_cro" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
?>
                <h4 class="modal-title" id="largeModalHead">Employee Type - CRO | <strong> YEAR
                        <?php echo $year ?> </strong> </h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <div class="panel-heading">
                        <ul class="panel-controls">
                            <button class="btn btn-info btn-md" onclick="printContent('printcro')"><span class="fa fa-print"></span>
                                Print </button>
                        </ul>
                    </div>
                    <hr>
                    <div id="printcro">
                        <div class="croheading" style="display: none">
                            <?php
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
?>
                            <br>
                            <h4 style="text-align:center;">Republic of the Philippines</h4>
                            <h3 style="text-align:center;">BUREAU OF FIRE PROTECTION</h3>
                            <h4 style="text-align:center;">Bacolod City</h4>
                            <br>
                            <h4>
                                <?php echo $today ?>
                            </h4>
                            <br>
                            <br>
                            <h3>List of Customer Relation Officer Year 2019 </h3>
                            <br>
                            <br>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Officer Rank</th>
                                    <th>Officer Name</th>
                                    <th>Firestation Assigned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query2 = $conn->query("SELECT * from `employee` where `officer_type` = 'CRO' && year='$year'") or die(mysqli_error());
while ($fetch2 = $query2->fetch_array()) {
    ?>
                                <tr>
                                    <td>
                                        <?php echo $fetch2['rank'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch2['officer_fname'] . ' ' . $fetch2['officer_mname'] . ' ' . $fetch2['officer_lname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch2['firestation'] ?>
                                    </td>
                                </tr>
                                <?php
}
$conn->close();
?>
                            </tbody>
                        </table>
                        <hr>
                        <h4 class="listheading" style="display:none">Approved By: </h4> <br> <br <br>
                        <h3 class="listheading" style="display:none">
                            <?php echo $officername ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="modal_assessor" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
?>
                <h4 class="modal-title" id="largeModalHead">Employee Type - Assessor | <strong> YEAR
                        <?php echo $year ?> </strong> </h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <div class="panel-heading">
                        <ul class="panel-controls">
                            <button class="btn btn-info btn-md" onclick="printContent('printassessor')"><span class="fa fa-print"></span>
                                Print </button>
                        </ul>
                    </div>
                    <hr>
                    <div id="printassessor">
                        <div class="assessorheading" style="display: none">
                            <?php
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
?>
                            <br>
                            <h4 style="text-align:center;">Republic of the Philippines</h4>
                            <h3 style="text-align:center;">BUREAU OF FIRE PROTECTION</h3>
                            <h4 style="text-align:center;">Bacolod City</h4>
                            <br>
                            <h4>
                                <?php echo $today ?>
                            </h4>
                            <br>
                            <br>
                            <h3>List of Fire Code Assessor Year 2019 </h3>
                            <br>
                            <br>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Officer Rank</th>
                                    <th>Officer Name</th>
                                    <th>Firestation Assigned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query3 = $conn->query("SELECT * from `employee` where `officer_type` = 'Assessor' && year='$year'") or die(mysqli_error());
while ($fetch3 = $query3->fetch_array()) {
    ?>
                                <tr>
                                    <td>
                                        <?php echo $fetch3['rank'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch3['officer_fname'] . ' ' . $fetch3['officer_mname'] . ' ' . $fetch3['officer_lname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch3['firestation'] ?>
                                    </td>
                                </tr>
                                <?php
}
$conn->close();
?>
                            </tbody>
                        </table>
                        <hr>
                        <h4 class="listheading" style="display:none">Approved By: </h4> <br> <br <br>
                        <h3 class="listheading" style="display:none">
                            <?php echo $officername ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal_inspectioncro" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
?>
                <h4 class="modal-title" id="largeModalHead">Employee Type - Inspection CRO | <strong> YEAR
                        <?php echo $year ?> </strong> </h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <div class="panel-heading">
                        <ul class="panel-controls">
                            <button class="btn btn-info btn-md" onclick="printContent('printinspection')"><span class="fa fa-print"></span>
                                Print </button>
                        </ul>
                    </div>
                    <hr>
                    <div id="printinspection">
                        <div class="inspectionheading" style="display: none">
                            <?php
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
?>
                            <br>
                            <h4 style="text-align:center;">Republic of the Philippines</h4>
                            <h3 style="text-align:center;">BUREAU OF FIRE PROTECTION</h3>
                            <h4 style="text-align:center;">Bacolod City</h4>
                            <br>
                            <h4>
                                <?php echo $today ?>
                            </h4>
                            <br>
                            <br>
                            <h3>List of Inspection - CRO Year 2019 </h3>
                            <br>
                            <br>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Officer Rank</th>
                                    <th>Officer Name</th>
                                    <th>Firestation Assigned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query3 = $conn->query("SELECT * from `employee` where `officer_type` = 'Inspection-CRO' && year = '$year'") or die(mysqli_error());
while ($fetch3 = $query3->fetch_array()) {
    ?>
                                <tr>
                                    <td>
                                        <?php echo $fetch3['rank'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch3['officer_fname'] . ' ' . $fetch3['officer_mname'] . ' ' . $fetch3['officer_lname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch3['firestation'] ?>
                                    </td>
                                </tr>
                                <?php
}
$conn->close();
?>
                            </tbody>
                        </table>
                        <hr>
                        <h4 class="listheading" style="display:none">Approved By: </h4> <br> <br <br>
                        <h3 class="listheading" style="display:none">
                            <?php echo $officername ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal_inspector" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
?>
                <h4 class="modal-title" id="largeModalHead">Employee Type - Inspector | <strong> YEAR
                        <?php echo $year ?> </strong> </h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <div class="panel-heading">
                        <ul class="panel-controls">
                            <button class="btn btn-info btn-md" onclick="printContent('printinspector')"><span class="fa fa-print"></span>
                                Print </button>
                        </ul>
                    </div>
                    <hr>
                    <div id="printinspector">
                        <div class="inspectorheading" style="display: none">
                            <?php
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
?>
                            <br>
                            <h4 style="text-align:center;">Republic of the Philippines</h4>
                            <h3 style="text-align:center;">BUREAU OF FIRE PROTECTION</h3>
                            <h4 style="text-align:center;">Bacolod City</h4>
                            <br>
                            <h4>
                                <?php echo $today ?>
                            </h4>
                            <br>
                            <br>
                            <h3>List of Inspector Year 2019 </h3>
                            <br>
                            <br>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Officer Rank</th>
                                    <th>Officer Name</th>
                                    <th>Firestation Assigned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query3 = $conn->query("SELECT * from `employee` where `officer_type` = 'Inspector' && year = '$year'") or die(mysqli_error());
while ($fetch3 = $query3->fetch_array()) {
    ?>
                                <tr>
                                    <td>
                                        <?php echo $fetch3['rank'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch3['officer_fname'] . ' ' . $fetch3['officer_mname'] . ' ' . $fetch3['officer_lname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch3['firestation'] ?>
                                    </td>
                                </tr>
                                <?php
}
$conn->close();
?>
                            </tbody>
                        </table>
                        <hr>
                        <h4 class="listheading" style="display:none">Approved By: </h4> <br> <br <br>
                        <h3 class="listheading" style="display:none">
                            <?php echo $officername ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal_evaluator" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
?>
                <h4 class="modal-title" id="largeModalHead">Employee Type - Evaluator | <strong> YEAR
                        <?php echo $year ?> </strong> </h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <div class="panel-heading">
                        <ul class="panel-controls">
                            <button class="btn btn-info btn-md" onclick="printContent('printevaluator')"><span class="fa fa-print"></span>
                                Print </button>
                        </ul>
                    </div>
                    <hr>
                    <div id="printevaluator">
                        <div class="evaluatorheading" style="display: none">
                            <?php
date_default_timezone_set('Asia/Manila');
$today = date("M-d-Y");
?>
                            <br>
                            <h4 style="text-align:center;">Republic of the Philippines</h4>
                            <h3 style="text-align:center;">BUREAU OF FIRE PROTECTION</h3>
                            <h4 style="text-align:center;">Bacolod City</h4>
                            <br>
                            <h4>
                                <?php echo $today ?>
                            </h4>
                            <br>
                            <br>
                            <h3>List of Evaluator Year 2019 </h3>
                            <br>
                            <br>
                        </div>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Officer Rank</th>
                                    <th>Officer Name</th>
                                    <th>Firestation Assigned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
require 'require/databaseconnection.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query3 = $conn->query("SELECT * from `employee` where `officer_type` = 'Evaluator' && year = '$year'") or die(mysqli_error());
while ($fetch3 = $query3->fetch_array()) {
    ?>
                                <tr>
                                    <td>
                                        <?php echo $fetch3['rank'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch3['officer_fname'] . ' ' . $fetch3['officer_mname'] . ' ' . $fetch3['officer_lname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch3['firestation'] ?>
                                    </td>
                                </tr>
                                <?php
}
$conn->close();
?>
                            </tbody>
                        </table>
                        <hr>
                        <h4 class="listheading" style="display:none">Approved By: </h4> <br> <br <br>
                        <h3 class="listheading" style="display:none">
                            <?php echo $officername ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
            </div>
        </div>
    </div>
</div>


<!-- END OF MODAL -->