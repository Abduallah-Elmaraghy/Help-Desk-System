<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" href="..\style sheets\stylesheet.css">
		<meta charset="UTF-8">
		<meta name="veiwport" content="width=device-width, initial-scale=1.0">
		<title>Statistics</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
			  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<style>
			.chart 
			{
				margin: 200px;
				margin-top: 5%;
				color: #000000;
				text-align: right;
			}

			.combo {
				margin: 0px;
				margin-top: 250px;
				margin-left: 260px;

			}

			.combo select option {
				margin-left: 10px;

			}

			.my-row {

				background-color: gray;
				height: 200px;
				margin-top: 80px;
				border-radius: 25px;
				padding: 20px;
			}

			.my-row1 {
				background-color:gray;
				border-radius: 25px;
				padding: 20px;
			}
			.my-row2{
				background-color:gray;
				border-radius: 25px;
				padding: 20px;
			}
			.my-row3{
				background-color:gray;
				border-radius: 25px;
				padding: 20px;
			}

			body 
			{
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			}

			/* Bar Graph Horizontal */
			.bar-graph .year 
			{
				-webkit-animation: fade-in-text 2.2s 0.1s forwards;
				-moz-animation: fade-in-text 2.2s 0.1s forwards;
				animation: fade-in-text 2.2s 0.1s forwards;
				opacity: 0;
			}

			.bar-graph-horizontal 
			{
				max-width: 380px;
			}

			.bar-graph-horizontal>div 
			{
				float: left;
				margin-bottom: 8px;
				width: 100%;
			}

			.bar-graph-horizontal .year 
			{
				float: left;
				margin-top: 18px;
				width: 50px;
			}

			.bar-graph-horizontal .bar 
			{
				border-radius: 3px;
				height: 55px;
				float: left;
				overflow: hidden;
				position: relative;
				width: 0;
			}

			.bar-graph-one .bar::after {
				-webkit-animation: fade-in-text 2.2s 0.1s forwards;
				-moz-animation: fade-in-text 2.2s 0.1s forwards;
				animation: fade-in-text 2.2s 0.1s forwards;
				color: #fff;
				content: attr(data-percentage);
				font-weight: 700;
				position: absolute;
				right: 16px;
				top: 17px;
			}

			.bar-graph-one .bar-one .bar {
				background-color: #64b2d1;
				-webkit-animation: show-bar-one 1.2s 0.1s forwards;
				-moz-animation: show-bar-one 1.2s 0.1s forwards;
				animation: show-bar-one 1.2s 0.1s forwards;
			}

			.bar-graph-one .bar-two .bar {
				background-color: #5292ac;
				-webkit-animation: show-bar-two 1.2s 0.2s forwards;
				-moz-animation: show-bar-two 1.2s 0.2s forwards;
				animation: show-bar-two 1.2s 0.2s forwards;
			}

			.bar-graph-one .bar-three .bar {
				background-color: #407286;
				-webkit-animation: show-bar-three 1.2s 0.3s forwards;
				-moz-animation: show-bar-three 1.2s 0.3s forwards;
				animation: show-bar-three 1.2s 0.3s forwards;
			}

			.bar-graph-one .bar-four .bar {
				background-color: #2e515f;
				-webkit-animation: show-bar-four 1.2s 0.4s forwards;
				-moz-animation: show-bar-four 1.2s 0.4s forwards;
				animation: show-bar-four 1.2s 0.4s forwards;
			}

			/* Bar Graph Horizontal Animations */
			@-webkit-keyframes show-bar-one {
				0% {
					width: 0;
				}

				100% {
					width: 69.6%;
				}
			}

			@-webkit-keyframes show-bar-two {
				0% {
					width: 0;
				}

				100% {
					width: 71%;
				}
			}

			@-webkit-keyframes show-bar-three {
				0% {
					width: 0;
				}

				100% {
					width: 74.7%;
				}
			}

			@-webkit-keyframes show-bar-four {
				0% {
					width: 0;
				}

				100% {
					width: 76.8%;
				}
			}

			@-webkit-keyframes fade-in-text {
				0% {
					opacity: 0;
				}

				100% {
					opacity: 1;
				}
			}
		</style>
	</head>
	<body>
		<?php 
		include "../includes/navHead.php";
		?>
		<div class="container">
			<div class="row my-row justify-content-center align-items-center">
				<div class="col-lg-4 text-center">
					<label>Cases </label>
					<select>
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option>D</option>
						<option>E</option>
					</select>


				</div>
				<div class="col-lg-4 text-center">
					<label>Cases </label>
					<select>
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option>D</option>
						<option>E</option>
					</select>
				</div>
				<div class="col-lg-4 text-center">
					<label>Cases </label>
					<select>
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option>D</option>
						<option>E</option>
					</select>

				</div>
				<div class="col-lg-4 text-center">
					<label>Cases </label>
					<select>
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option>D</option>
						<option>E</option>
					</select>

				</div>
				<div class="col-lg-4 text-center">
					<label>Cases </label>
					<select>
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option>D</option>
						<option>E</option>
					</select>

				</div>
			</div>

			<br>


		</div>
		<div class="container">
			<div class="row my-row1">
				<div class="col-lg-4">
					right here you can see the chart of .......
				</div>
				<div class="col-lg- text-center">
					<div id="columnchart_values" class="chart"></div>
				</div>
			</div>
		</div>

		<hr>

		<div class="container">
			<div class="row my-row2">
				<div class="col-lg-8">
					<div id="piechart"></div>
				</div>
				<div class="col">
					right here you can see the chart of .......
				</div>
			</div>

		</div>

		<br>
		<br>

		<hr>
		<br>
		<br>
		<div class="container">
			<div class="row my-row3"><h3>each worker with performance and % of total tasks:</h3>
				<section class="bar-graph bar-graph-horizontal bar-graph-one">
					<span class="year">person1</span>
					<div class="bar-one">

						<div class="bar" data-percentage="69.6%"></div>
					</div>
					<span class="year">person2</span>
					<div class="bar-two">

						<div class="bar" data-percentage="71%"></div>
					</div>
					<span class="year">person3</span>
					<div class="bar-three">

						<div class="bar" data-percentage="74.7%"></div>
					</div>
					<div class="row"><span class="year">person4</span></div>
					<div class="bar-four">

						<div class="bar" data-percentage="76.8%"></div>
					</div>

				</section>
			</div>
		</div>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load("current", {
				packages: ['corechart']
			});
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
					['Year', 'Number of Cases :', {
						role: 'style'
					}],
					['A', 5, 'color: gray'],
					['B', 14, 'color: gray'],
					['C', 7, 'color: gray'],
					['D', 22, 'color: gray'],
					['E', 50, 'color: gray']
				]);

				var view = new google.visualization.DataView(data);
				view.setColumns([0, 1,
								 {
									 calc: "stringify",
									 sourceColumn: 1,
									 type: "string",
									 role: "annotation"
								 },
								 2
								]);

				var options = {
					title: "Statistics of all cases NOW",
					width: 850,
					height: 400,
					bar: {
						groupWidth: "70%"
					},
					legend: {
						position: "none"
					},
				};
				var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
				chart.draw(view, options);

				function getValueAt(column, dataTable, row) {
					return dataTable.getFormattedValue(row, column);
				}
			}
		</script>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

		<script type="text/javascript">
			// Load google charts
			google.charts.load('current', {
				'packages': ['corechart']
			});
			google.charts.setOnLoadCallback(drawChart);

			// Draw the chart and set the chart values
			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['Task', 'Hours per Day'],
					['HR', 8],
					['Marketing', 2],
					['Finance ', 4],
					['Sales', 2],
					['Operations', 8]
				]);

				// Optional; add a title and set the width and height of the chart
				var options = {
					'title': 'Departments each with number of tickets',
					'width': 700,
					'height': 400
				};

				// Display the chart inside the <div> element with id="piechart"
				var chart = new google.visualization.PieChart(document.getElementById('piechart'));
				chart.draw(data, options);
			}
		</script>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
				integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
				integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
		</script>

	</body>
</html>