<!DOCTYPE html>
<html>

	<head>
		<title>
			View-cases
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">



		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

			*
			{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-family: 'Poppins', sans-serif;
			}

			body {
				background: rgb(199, 199, 199);
				height: 100vh;
				overflow: hidden;
				color: white;
			}

			.center {
				position: absolute;
				top: 55%;
				left: 50%;
				transform: translate(-50%, -50%);
				width: 1000px;
				background: gray;
				border-radius: 10px;
				width: 1000px;
				height: 650px;
			}

			.center h1 {
				text-align: center;
				padding: 5px 0 10px 0;
				border-bottom: 1px solid silver;
			}

			.center form {
				padding: 0px 25px 100px;
				box-sizing: border-box;
			}

			.button {
				border: none;
				color: white;
				padding: 5px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
				border-radius: 16px;
				background: gray;


			}
			.label{
				color= red;
				margin: 4px 2px;
			}
		</style>


	</head>
	<?php include ('C:\xamppp\htdocs\Help-Desk-System\includes\nav.php');?>


	<body>
		<div class="center">

			<div>
				<form method="post">
					<h1 style="text-align: center;  color: black;">CASE DETAIL</h1>
					<br>

					<h2 text-align: center;>Case information :</h2>
					<br>
					<br>
					<label  style="left:150px;">Subject </label> <input type="text" style="right:50px;">
					<br>
					<br>
					<label style="left:150px;">Case owner</label> <input type="text" style="left:50px;">
					<br>
					<br>
					<label style="left:150px;">Case number</label> <input type="text" style="left:50px;">
					<br>
					<br>
					<label style="left:150px;">Case priority</label> <input type="text" style="left:50px;">
					<br>
					<br>
					<label style="left:150px;">Severity</label> <input type="text" style="left:50px;">
					<br>
					<br>
					<label style="left:150px;">Category</label> <input type="text" style="left:50px;">
					<br>
					<br>
					<label style="left:150px;">Parent case</label> <input type="text" style="left:50px;">
					<br>
					<br>
					<label style="left:150px;">Status</label> <input type="text" style="left:50px;">
					<br>
					<br>
					<label style="left:150px;">due date</label> <input type="text" style="left:50px;">



					</div>

				</form>

		</div>

	</body>

</html>