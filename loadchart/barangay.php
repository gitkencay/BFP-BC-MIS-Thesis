
<?php require 'querychart/applicationgraphs.php'?>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        CanvasJS.addColorSet("customColorSet", [ 
            "#ff7979",         
        ]);

                var chart1 = new CanvasJS.Chart("chartContainer1",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Application Count - BFP", 
                exportEnabled: true,
                toolTip: {
                shared: true  
                },
                title: { 
                text: "Bureau of Fire Protection Bacolod City - MIS",
                fontSize: 11
                },
                subtitles:[
                {
                text: "Barangay Application Count <?php echo $year?>"
                }
            ],
            legend: {
                cursor: "pointer",
                itemclick: function (e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    e.chart.render();
                },
                itemmouseover: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness * 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize + 2;
                    e.chart.render();
                },
                itemmouseout: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness / 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize - 2;
                    e.chart.render();
                }
            },
            axisY: { 
                title: "Total Population", 
                includeZero: false,
            },
            axisX: {		
                interval: 1,
            },
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label} <br/> {y}", 
                    dataPoints: <?php echo json_encode($data_points5); ?>
                }
                    ] 
                });


                chart1.render();
                });

</script>