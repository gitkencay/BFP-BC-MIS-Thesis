<div class="barangay reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Barangay</th>
                <th>Number of Applicants</th>
                <th class="buttonhide">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
require 'require/databaseconnection.php';
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
$res5 = $conn->query("SELECT * FROM `application` GROUP BY barangay_name") or die(mysqli_error());
$data_points5 = array();
while ($result5 = $res5->fetch_array()) {
    $R5 = $result5['barangay_name'];
    $q5 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `barangay_name` = '$R5' && `year` = '$year' group by barangay_name") or die(mysqli_error());
    $f5 = $q5->fetch_array();
    $FR5s = $f5['total'];

    $querytotal = $conn->query("SELECT count('$R5') as grandtotal from `application` where year = '$year'") or die(mysqli_error());
    $fetchtotal = $querytotal->fetch_array();
    $formattedtotal = number_format($fetchtotal['grandtotal']);
    ?>
            <tr>
                <td>
                    <?php echo $f5['barangay_name'] ?>
                </td>
                <td>
                    <?php echo $f5['total'] ?>
                </td>
                <td class="buttonhide"><a href="filterreports/ApplicantListBarangay.php?barangay=<?php echo $f5['barangay_name']?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <?php
}
?>
            <tr>
                <td>
                    <h2> Grand Total <h2>
                </td>
                <td>
                    <span class="label label-danger label-form">
                        <?php echo $formattedtotal;?> </span>
                </td>
                <td>
                </td>
            <tr>
        </tbody>
    </table>

</div>