<?php require 'querychart/firefrequency.php'?>
<script type="text/javascript"> 
window.onload = function () {
    CanvasJS.addColorSet("customColorSet", [ 
            "#7ed6df",
        ]);
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Dispatchment - BFP", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
    title:{
		text: "Bureau of Fire Protection Bacolod City - MIS",
        fontSize: 20
    },
    subtitles:[
                {
                    text: "Top 20 Brgy. with the most Number of Casualties Year <?php echo $year?>"
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
        interval: 1
    },
	axisY: {
		title: "Total Casualties "
	},
	data: [{        
        type: "column",
        name: "Total Casualties",
        dataPoints: <?php echo json_encode($data_points5); ?>
	}]
});
chart.render();

}
</script>