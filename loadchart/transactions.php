
<?php require 'querychart/transactions.php'?>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        var chart2 = new CanvasJS.Chart("chartContainer2",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Transactions - BFP", 
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
                    text: "Overall Transactions Details <?php echo $year?>"
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
                    type: "stackedBar", 
                    showInLegend: true, 
                    legendText: "Pending",
                    name: "Pending",
                    color: "#e05850",
                    dataPoints: [ 
                        { label: "Application", y: <?php echo $fetchapp['total']?> },
                         { label: "Assessment", y: <?php echo $fetchapp3['total']?> },
                         { label: "Evaluation", y: <?php echo $fetchapp9y['total']?> },
                        { label: "Inspection and Compliance", y: <?php echo $fetchapp6['total']?> }
                         ] 
                        },
                        { 
                            type: "stackedBar", 
                            showInLegend: true, 
                            legendText: "Completed",
                            name: "Completed",
                            dataPoints: [ 
                                { label: "Application", y: <?php echo $fetchapp2['total']?> },
                                 { label: "Assessment", y: <?php echo $fetchapp4['total']?> },
                                 { label: "Evaluation", y: <?php echo $fetchapp9z['total']?> },
                                { label: "Inspection and Compliance", y: <?php echo $fetchapp5['total']?> }
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
                        exportFileName: "Transactions - BFP", 
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
                        text: "Building Evaluation <?php echo $year?>"
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
                            indexLabel: "{label} - {y}", 
                            showInLegend: false,
                            dataPoints: <?php echo json_encode($data_points); ?> 
                        }
                            ] 
                        });

                        var chart4 = new CanvasJS.Chart("chartContainer4",{
                        theme: "light1",
                        zoomEnabled: true,
                        zoomType: "x",
                        panEnabled: true,
                        animationEnabled: true,
                        animationDuration: 1000,
                        exportFileName: "Transactions - BFP", 
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
                        text: "Certification <?php echo $year?>"
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
                            indexLabel: "{label} - {y}", 
                            showInLegend: false,
                            legendText: "{label}",
                            dataPoints: [ 
                                { label: "Evaluated", y: <?php echo $fetchapp9['total']?> },
                                 { label: "Inspected", y: <?php echo $fetchapp10['total']?> }
                            ] 
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
                exportFileName: "Payment per Month - BFP", 
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
                text: "Total Payment per Month - Year <?php echo $year?>"
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
                title: "Total Payment", 
                includeZero: false,
            },
            axisX: {		
                interval: 0,
            },
            data: [ 
                { 
                    type: "column", 
                    indexLabel: "{label} - {y}", 
                    showInLegend: false,
                    legendText: "{label}",
                    name: "Total Payment",
                    dataPoints: <?php echo json_encode($data_points1); ?> 
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
                exportFileName: "Payment per Month - BFP", 
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
                text: "Total Payment per Year"
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
                title: "Total Payment", 
                includeZero: false,
                interval: 1
            },
            axisX: {		
                interval: 3,
            },
            data: [ 
                { 
                    type: "column", 
                    indexLabel: "{label} - {y}", 
                    showInLegend: true,
                    legendText: "{label}",
                    name: "Total Payment",
                    dataPoints: <?php echo json_encode($data_points2); ?> 
                }
                    ] 
                });


                chart2.render();
                chart3.render();
                chart4.render();
                chart5.render();
                chart6.render();
                });

</script>