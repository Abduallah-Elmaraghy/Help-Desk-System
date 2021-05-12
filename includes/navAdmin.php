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
				background-color: #24262b;
			}

			.logo
			{
				color: #ffffff;
				text-transform: uppercase;
				letter-spacing: 5px;
				font-size: 20px;
				display: flex;
			}
			.logo h1
			{
				font-weight: 700;
			}

			ul.nav_menu
			{
				width: 40%;
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
				background-color: #CECFCD;
				color: #24262b;
			}

			.drop_down_Icon
			{
				display: none;
				cursor: pointer;
				padding: 14px;
				border-radius: 7px;
			}

			.drop_down_Icon div
			{
				width: 30px;
				height: 4px;
				background-color: #ffffff;
				margin: 5px;
			}

			@media screen and (max-width:767px)
			{	
				body
				{
					overflow-x: hidden;
				}

				.footer_col
				{
					width: 50%;
					margin-bottom: 30px;
				}

				ul.nav_menu
				{
					position: absolute;
					right: 0px;
					height: 92vh;
					top: 8vh;
					background-color: #24262b;
					display: flex;
					flex-direction: column;
					align-items: center;
					width: 25%;
					transform: translateX(100%);
					transition: transform 0.5s ease-in;
				}

				ul.nav_menu li
				{
					opacity: 0;
				}

				.logo
				{
					padding-right: 15px;
				}

				.drop_down_Icon 
				{
					display: block;
				}

				.drop_down_Icon:hover
				{
					background-color: #CECFCD;
					color: #24262b;
				}
			}
			.active_nav_menu
			{
				transform: translateX(0%);
			}
		</style>
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	</head>
	<body>
		<nav>			
			<div class="logo">
				<img src="..\logo.png" style="width:50px; hieght:40px;">
				<h1>Rashpetco</h1>
			</div>
			<ul class="nav_menu" id="sidenav">
				<li>
					<a href="../admin/Homepage.php">Home</a>
				</li>
				<li>
					<a href="../admin/UploadStatement.php">Knowledge base</a>
				</li>
				<li>
					<a href="../admin/ViewCases.php">View Cases</a>
				</li>
				<li>
					<a href="../admin/ViewStatistics.php">Statistics</a>	
				</li>
			</ul>
			<div class="drop_down_Icon" >
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
		</nav>	
	</body>
</html>