<div class="building reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Building Type</th>
                <th>Number of Applicants</th>
                <th class="buttonhide">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$res8 = $conn->query("SELECT * FROM `application` where `year` = '$year' GROUP BY building_type") or die(mysqli_error());
$data_points8 = array();
while ($result8 = $res8->fetch_array()) {
    $R8 = $result8['building_type'];
    $q8 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `building_type` = '$R8' && `year` = '$year' group by building_type") or die(mysqli_error());
    $f8 = $q8->fetch_array();
    ?>
            <tr>
                <td>
                    <?php echo $f8['building_type'] ?>
                </td>
                <td>
                    <?php echo $f8['total'] ?>
                </td>
                <td class="buttonhide">
                    <a href="filterreports/BuildingTypeReport.php?building=<?php echo $f8['building_type'] ?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a>
                </td>
            </tr>
            <?php
}
?>
        </tbody>
    </table>


    <br>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Building Type</th>
                <th>Applicant Name</th>
                <th>Business Name</th>
                <th>Type of Permit</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
require 'require/databaseconnection.php';
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$query = $conn->query("SELECT * FROM `application` where `year` = '$year' order by building_type ASC") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    ?>
            <tr>
                <td>
                    <?php echo $fetch['building_type'] ?>
                </td>
                <td>
                    <?php echo $fetch['application_name'] ?>
                </td>
                <td>
                    <?php echo $fetch['business_name'] ?>
                </td>
                <td>
                    <?php echo $fetch['type_of_permit'] ?>
                </td>
                <td>
                    <?php echo $fetch['assessment_status'] ?>
                </td>
            </tr>
            <?php
}
?>
        </tbody>
    </table>

</div>