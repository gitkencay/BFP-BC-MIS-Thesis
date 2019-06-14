
<?php require 'querychart/employee.php'?>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        CanvasJS.addColorSet("customColorSet", [ 
            "#f6e58d",
            "#ffbe76", 
            "#ff7979", 
            "#eb4d4b", 
            "#7ed6df",
            "#22a6b3",
            "#6ab04c",
        ]);

        var chart1 = new CanvasJS.Chart("chartContainer1",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Officer Type", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Bureau of Fire Protection Bacolod City - MIS",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Officer Category"
                }
            ],
            axisX: {	
                interval: 1,
                labelFontColor: "black",
            },
            axisY: { 
                title: "Officer Type", 
                includeZero: false,
                labelFontColor: "black",
            },
            data: [ 
                { 
                    // mga chart type - pie, doughnut, line, bar, column, spline, area, splineArea
                    type: "doughnut", 
                    indexLabel: "{y}", 
                    showInLegend: true,
                    legendText: "{label}",
                    name: "{label}",
                    dataPoints: <?php echo json_encode($data_points5); ?>
                }
                    ] 
                });


                chart1.render();
                });

</script>