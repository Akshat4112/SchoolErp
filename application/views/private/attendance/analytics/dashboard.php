<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 10/2/2017
 * Time: 2:34 PM
 */?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="" style="font-size: 18px;">Analytics Dashboard</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label" style="margin-top: 5px;">Date</label>
                <div class="col-lg-10">
                    <input type="date" class="form-control" name="date">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label" style="margin-top: 5px;">Class</label>
                <div class="col-lg-8">
                    <select class="form-control">
                        <option>1</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <input type="submit" class="btn-primary btn-sm" value="Show">
        </div>
    </div>
</div>

<html>
<head>
    <!--Load the AJAX API-->
    <script src="<?= base_url() ?>public//assets/js/google_charts.js" type="text/javascript"></script>
    <!--    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Mushrooms', 3],
                ['Onions', 1],
                ['Olives', 1],
                ['Zucchini', 1],
                ['Pepperoni', 2]
            ]);

            // Set chart options
            var options = {'title':'How Much Pizza I Ate Last Night',
                'width':400,
                'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
<!--Div that will hold the pie chart-->

<div id="chart_div"></div>
</body>
</html>