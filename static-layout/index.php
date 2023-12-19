<?php
$matrix = array(
    array(1, 60, 50, 80),
    array(2, 60, 50, 70),
    array(3, 60, 50, 70),
    array(4, 60, 50, 70),
    array(5, 60, 50, 70),
    array(6, 60, 50, 70),
    array(7, 60, 50, 70),
    array(8, 60, 50, 70)
);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>teste</title>
</head>
<body>

<div class="container">
    <div class="left-section">
        <div class="rectangle" id="camera">
            <h1>Camera</h1>
        </div>
        <div class="rectangle">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Work',     11],
                        ['Eat',      2],
                        ['Commute',  2],
                        ['Watch TV', 2],
                        ['Sleep',    7]
                    ]);

                    var options = {
                        title: 'My Daily Activities'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
            </script>
            <div id="piechart" style="width: auto; height: 200px;"></div>
        </div>
        <div class="square" id="square">
            <div class="small-square-red">NH3</div>
            <div class="small-square">CH4</div>
            <div class="small-square">H2S</div>
            <div class="small-square">CO2</div>
        </div>
    </div>
    <div class="right-section">
        <div class="rectangle" id="line-chart-rectangle">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Year', 'Sales', 'Expenses'],
                        ['2004', 1000, 400],
                        ['2005', 1170, 460],
                        ['2006', 660, 1120],
                        ['2007', 1030, 540]
                    ]);

                    var options = {
                        title: 'Company Performance',
                        curveType: 'function',
                        legend: {position: 'bottom'}
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                    chart.draw(data, options);
                }
            </script>
            <div id="curve_chart"></div>
        </div>
        <div class="rectangle" id="table-square">
            <?php generateTable($matrix); ?>
        </div>
    </div>
</div>

</body>
</html>

<?php
function generateTable($matrix): void
{
    echo '<table class="data-sheet">';
    echo '<thead class="data-sheet-header">';
    echo '<tr>';
    echo '<th>Leira</th>';
    echo '<th>Temp1</th>';
    echo '<th>Temp2</th>';
    echo '<th>Umi(%)</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($matrix as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
?>