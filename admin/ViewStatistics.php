<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="..\style sheets\stylesheet.css">

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            /*function drawChart() {
     var data = google.visualization.arrayToDataTable([
        ["Element", "Number of Cases :  ", { role: "style" } ],
        ["A", 5, " #000000"],
        ["B", 10, " #000000"],
        ["C", 7, " #000000"],
        ["D", 12, " #000000"],
        ["E", 20, " #000000"]
      ]);*/
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Number of Cases :', { role: 'style' } ],
                    ['A', 5, 'color: gray'],
                    ['B', 14, 'color: gray'],
                    ['C', 7, 'color: gray'],
                    ['D', 22, 'color: gray'],
                    ['E', 50, 'color: gray']
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                  sourceColumn: 1,
                                  type: "string",
                                  role: "annotation" },
                                 2]);

                var options = {
                    title: "Statistics of all cases",
                    width: 850,
                    height: 400,
                    bar: {groupWidth: "50%"},
                    legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                chart.draw(view, options);
                function getValueAt(column, dataTable, row) {
                    return dataTable.getFormattedValue(row, column);
                }
            }
        </script>
    </head>
    <style>

        .chart
        {
            margin: 200px;
            margin-left: 50%;
            margin-top: 5%;
            color: #000000;



        }
        .combo
        {
            margin: 0px;
            margin-top: 250px;
            margin-left: 260px;
            
            
            
            
        }
        .combo select option
        {
            margin-left: 10px;
            
        }




    </style>
    <body>
        <?php 
        include "../includes/navAdmin.php";
        ?>

        <div class = combo>

            <label>Cases  </label> 
            <select>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
            </select>
             <label>Cases  </label> 
            <select>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
            </select>
             <label>Cases  </label> 
            <select>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
            </select>
             <label>Cases  </label> 
            <select>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
            </select>
        </div>
        <div id="columnchart_values" class = "chart"></div>

    </body>
</html>



