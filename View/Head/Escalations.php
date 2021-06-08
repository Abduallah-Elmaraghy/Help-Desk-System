<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="..\style sheets\stylesheet.css">
    <meta charset="UTF-8">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <title>Escalation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="..\style sheets\stylesheet.css">
		<link rel="stylesheet" href="..\style sheets\test.css">


</head>

<body>
        <?php 
		include "../includes/navAdmin.php";
		?>

    <style>

    </style>

    <div class="container">
    <div class="viewcases">
			<h2>Escalated tickets table </h2>
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Cases..">
			<table id="customers">
				<tr>
					<th>Case-Number</th>
					<th>Sevirity</th>
					<th>Pirority</th>
					<th>Due date</th>
					<th></th>
				</tr>
				<tr>
					<td>Alfreds Futterkiste</td>
					<td>Maria Anders</td>
					<td>Germany</td>
					<td>Germany</td>
					<td><a href="">Open</a></td>
				</tr>
				<tr>
					<td>Berglunds snabbköp</td>
					<td>Christina Berglund</td>
					<td>Sweden</td>
					<td>Sweden</td>
					<td><a href="#">Open</a></td>

				</tr>
				<tr>
					<td>Centro comercial Moctezuma</td>
					<td>Francisco Chang</td>
					<td>Mexico</td>
					<td>Mexico</td>
					<td><a href="#">Open</a></td>

				</tr>
				<tr>
					<td>Ernst Handel</td>
					<td>Roland Mendel</td>
					<td>Austria</td>
					<td>Austria</td>
					<td><a href="#">Open</a></td>

				</tr>
				<tr>
					<td>Island Trading</td>
					<td>Helen Bennett</td>
					<td>UK</td>
					<td>UK</td>
					<td><a href="#">Open</a></td>

				</tr>
				<tr>
					<td>Königlich Essen</td>
					<td>Philip Cramer</td>
					<td>Germany</td>
					<td>Germany</td>
					<td><a href="#">Open</a></td>
				</tr>
				<tr>
					<td>Paris spécialités</td>
					<td>Marie Bertrand</td>
					<td>France</td>
					<td>France</td>
					<td><a href="#">Open</a></td>
				</tr>
			</table>
		</div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

</body>

</html>