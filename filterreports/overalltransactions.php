<div class="overall reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Transaction</th>
                <th>Status</th>
                <th>Number of Applicants</th>
                <th class="buttonhide">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <h4> Inspection and Compliance </h4>
                </td>
                <td>
                    <span class="label label-danger label-form">Pending</span>
                </td>
                <td>
                    <h4>
                        <?php echo $fetchapp6['total'] ?>
                    </h4>
                </td>
                <td class="buttonhide">
                    <a href="filterreports/InspectionPendingList.php?year=<?php echo $year;?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview </a>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <span class="label label-info label-form">Completed</span>
                </td>
                <td>
                    <h4>
                        <?php echo $fetchapp5['total'] ?>
                    </h4>
                </td>
                <td class="buttonhide">
                <a href="filterreports/InspectionCompletedList.php?year=<?php echo $year;?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview </a>
                </td>
            </tr>
            <tr>
                <td>
                    <h4> Assessment </h4>
                </td>
                <td>
                    <span class="label label-danger label-form">Pending</span>
                </td>
                <td>
                    <h4>
                        <?php echo $fetchapp3['total'] ?>
                    </h4>
                </td>
                <td class="buttonhide">
                <a href="filterreports/AssessmentPendingList.php?year=<?php echo $year;?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview </a>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <span class="label label-info label-form">Completed</span>
                </td>
                <td>
                    <h4>
                        <?php echo $fetchapp4['total'] ?>
                    </h4>
                </td>
                <td class="buttonhide">
                <a href="filterreports/AssessmentCompletedList.php?year=<?php echo $year;?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview </a>
                </td>
            </tr>
            <tr>
                <td>
                    <h4> Evaluation </h4>
                </td>
                <td>
                    <span class="label label-danger label-form">Pending</span>
                </td>
                <td>
                    <h4>
                        <?php echo $fetchapp9y['total'] ?>
                    </h4>
                </td>
                <td class="buttonhide">
                <a href="filterreports/EvaluationPendingList.php?year=<?php echo $year;?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview </a>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <span class="label label-info label-form">Completed</span>
                </td>
                <td>
                    <h4>
                        <?php echo $fetchapp9z['total'] ?>
                    </h4>
                </td>
                <td class="buttonhide">
                <a href="filterreports/EvaluationCompletedList.php?year=<?php echo $year;?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview </a>
                </td>
            </tr>
            <tr>
                <td>
                    <h4> Application </h4>
                </td>
                <td>
                    <span class="label label-danger label-form">Pending</span>
                </td>
                <td>
                    <h4>
                        <?php echo $fetchapp['total'] ?>
                    </h4>
                </td>
                <td class="buttonhide">
                <a href="filterreports/ApplicationPendingList.php?year=<?php echo $year;?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview </a>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <span class="label label-info label-form">Completed</span>
                </td>
                <td>
                    <h4>
                        <?php echo $fetchapp2['total'] ?>
                    </h4>
                </td>
                <td class="buttonhide">
                <a href="filterreports/ApplicationCompletedList.php?year=<?php echo $year;?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview </a>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
</div>