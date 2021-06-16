<!DOCTYPE html>
<html>
	<head>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
			*
			{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			body
			{
				line-height: 1.5;
				font-family: 'Poppins', sans-serif;
				background-color: #EEEBDD;
			}

			nav
			{
				display: flex;
				position: fixed;
				top: 0;
				width: 100%;
				justify-content: space-around;
				align-items: center;
				min-height: 8vh;
				background-color: #630000;
			}

			.logo
			{
				color: #ffffff;
				text-transform: uppercase;
				letter-spacing: 5px;
				font-size: 20px;
				display: flex;
			}

			.logo img
			{
				padding: 5px;
				margin-right: 5px;
			}

			.logo h1
			{
				font-weight: 700;
			}

			ul.nav_menu
			{
				width: 70%;
				display: flex;
				justify-content: space-around;
			}

			ul.nav_menu li
			{
				list-style:none;
			}

			ul.nav_menu li a
			{
				color: #ffffff;
				text-decoration: none;
				letter-spacing: 3px;
				font-weight: bold;
				font-size: 14px;
				padding: 14px;
				border-radius: 7px;
			}

			ul.nav_menu li a:hover
			{
				background-color: #ffffff;
				color: #630000;
			}
		</style>
	</head>
	<body>
		<nav>			
			<div class="logo">
				<img src="..\..\images\logo.png" style="width:50px; hieght:40px;">
				<h1>Rashpetco</h1>
			</div>
			<ul class="nav_menu" id="sidenav">
				<li>
					<a href="../head/Homepage.php">Home</a>
				</li>
				<li>
					<a href="../head/ViewCases.php">View Cases</a>
				</li>
				<li>
					<a href="../head/Escalations.php">Escalations</a>	
				</li>
				<li>
					<a href="../head/Statistics.php">Statistics</a>	
				</li>
			</ul>
		</nav>	
	</body>
</html>