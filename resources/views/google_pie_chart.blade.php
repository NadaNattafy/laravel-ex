<!DOCTYPE html>
<html>
<head>
    <title>Make Google Pie Chart In Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gststic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <style>
        .box{
            width:800px;
            margin: 0 auto;
        }
    </style>
    <script type="text/javascript">
        var analytics = <?php echo $gender; ?>
        google.charts.load('current', {'packeges':['corechart']});
        google.charts.setOnLoadCallback(drawchart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title : 'Percentage Of Male And Female Employee'
            };0
        }
    </script>
</head>
<body>
<br />
<div class="container">
    <h3 align="center">Make Google Pie Chart In Laravel</h3>
    <br />

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Percentage of Male and Female Employee</h3>
        </div>
        <div class="panel-body">
           <div id="pie_chart" style="width:750px; height:450px;"></div>
        </div>
    </div>
</div>
</body>
</html>
