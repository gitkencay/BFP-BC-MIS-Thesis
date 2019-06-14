
<?php require 'querychart/applicationgraphs.php'?>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        CanvasJS.addColorSet("customColorSet", [ 
            "#eb4d4b", 
        ]);
        var chart1 = new CanvasJS.Chart("chartContainer1",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Application - BFP", 
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
                    text: "Application Monthly Count - Year <?php echo $year?>"
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
            axisX: {	
                interval: 1,
                labelFontColor: "black",
            },
            axisY: { 
                title: "Total Count", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Number of Application",
                    name: "Number of Application",
                    //    markerType: "cross",
                    // color: "#0173c4",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $fjan['total']?> },
                         { label: "February", y: <?php echo $ffeb['total']?> },
                        { label: "March", y: <?php echo $fmar['total']?> },
                         { label: "April", y: <?php echo $fapr['total']?> },
                        { label: "May", y: <?php echo $fmay['total']?> },
                         { label: "June", y: <?php echo $fjun['total']?> },
                        { label: "July", y: <?php echo $fjul['total']?> },
                         { label: "August", y: <?php echo $faug['total']?> },
                        { label: "September", y: <?php echo $fsep['total']?> },
                         { label: "October", y: <?php echo $foct['total']?> },
                        { label: "November", y: <?php echo $fnov['total']?> },
                         { label: "December", y: <?php echo $fdec['total']?> }
                    ] 
                }
            ] 
        });

        var chart2 = new CanvasJS.Chart("chartContainer2",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Quarterly Application Count - BFP", 
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
                    text: "Quarterly Application Count - Year <?php echo $year?>"
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
            axisX: {	
                interval: 1,
                labelFontColor: "black",
            },
            axisY: { 
                title: "Total Application", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Number of Application",
                    name: "Number of Application",
                    dataPoints: [ 
                        { label: "Quarter 1", y: <?php echo $q1['total']?> },
                         { label: "Quarter 2", y: <?php echo $q2['total']?> },
                        { label: "Quarter 3", y: <?php echo $q3['total']?> },
                         { label: "Quarter 4", y: <?php echo $q4['total']?> }
                    ] 
                }
            ] 
        });

        var chart3 = new CanvasJS.Chart("chartContainer3",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            colorSet: "customColorSet",
            exportFileName: "Yearly Application Count - BFP", 
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
                    text: "Yearly Application Count <?php echo $year?>"
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
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label} <br/> {y}", 
                    dataPoints: <?php echo json_encode($data_points); ?>
                }
                    ] 
                });


                var chart4 = new CanvasJS.Chart("chartContainer4",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Yearly Application Count - BFP", 
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
                var chart5 = new CanvasJS.Chart("chartContainer5",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Applicant Status Count - BFP", 
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
                text: "Applicant Status Count <?php echo $year?>"
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
                title: "Total Count", 
                includeZero: false,
            },
            axisX: {		
                interval: 1,
            },
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label} <br/> {y}", 
                    dataPoints: <?php echo json_encode($data_points6); ?>
                }
                    ] 
                });

                var chart6 = new CanvasJS.Chart("chartContainer6",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Type of Permit Count - BFP", 
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
                text: "Type of Permit Count <?php echo $year?>"
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
                title: "Total Count", 
                includeZero: false,
            },
            axisX: {		
                interval: 1,
            },
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label} <br/> {y}", 
                    dataPoints: <?php echo json_encode($data_points7); ?>
                }
                    ] 
                });
                var chart7 = new CanvasJS.Chart("chartContainer7",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Type of Permit Count - BFP", 
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
                text: "Type of Building Count <?php echo $year?>"
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
                title: "Total Count", 
                includeZero: false,
            },
            axisX: {		
                interval: 1,
            },
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label} <br/> {y}", 
                    dataPoints: <?php echo json_encode($data_points8); ?>
                }
                    ] 
                });

                var chart8 = new CanvasJS.Chart("chartContainer8",{
                theme: "light2",
                zoomEnabled: true,
                zoomType: "x",
                panEnabled: true,
                animationEnabled: true,
                animationDuration: 1000,
                colorSet: "customColorSet",
                exportFileName: "Type of Permit Count - BFP", 
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
                text: "Type of Application Count <?php echo $year?>"
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
                title: "Total Count", 
                includeZero: false,
            },
            axisX: {		
                interval: 1,
            },
            data: [ 
                { 
                    type: "pie", 
                    toolTipContent: "{label} <br/> {y}", 
                    dataPoints: <?php echo json_encode($data_points9); ?>
                }
                    ] 
                });


                chart1.render();
                chart2.render();
                chart3.render();
                chart4.render();
                chart5.render();
                chart6.render();
                chart7.render();
                chart8.render();
                });

</script>