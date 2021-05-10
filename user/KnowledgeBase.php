<!DOCTYPE html>
<html>

	<head>
		<title>
			Knowledge-Base
		</title>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
			* {
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
				top: 50%;
				left: 20%;
				transform: translate(-50%, -50%);
				width: 1000px;
				background: gray;
				border-radius: 10px;
				width: 400px;
				height: 500px;
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

			label {
				position: relative;
				color: rgb(46, 46, 46);
				color: white;
			}

			input {
				margin: 5px;
				position: relative;
				width: 30%;
				border-radius: 30px;
				border: none;
				height: 30px;
				background-color: #adadad;
			}

			input[type="submit"] {
				width: 30%;
				height: 50px;
				border: 1px solid;
				background: #000000;
				border-radius: 25px;
				font-size: 18px;
				color: #e9f4fb;
				font-weight: 700;
				cursor: pointer;
				outline: none;
			}

			select {
				margin: 5px;
				position: relative;
				width: 30%;
				border-radius: 30px;
				border: none;
				height: 30px;
				background-color: #adadad;
			}

			option {
				border-radius: 30px;
				text-align: center;
			}

			input[type="submit"]:hover {
				border-color: #FFFFFF;
				background: #adadad;
				color: #000000;
				border-width: -20px;
				transition: .7s;
			}

			textarea {
				border-radius: 30px;
				border: none;
				background-color: #adadad;
			}

			#navbar {
				background-color: #333;
				top: 0;
				width: 100%;
			}

			#navbar a {
				float: left;
				display: block;
				color: #f2f2f2;
				text-align: center;
				padding: 15px;
				text-decoration: none;
				font-size: 17px;
			}

			#navbar a:hover {
				background-color: #ddd;
				color: black;
			}

			.center_1 {
				position: absolute;
				top: 25%;
				left: 55%;
				transform: translate(-50%, -50%);
				width: 1000px;
				background: rgb(199, 199, 199);
				border-radius: 10px;
				width: 700px;
				height: 200px;
			}

			.center_1 h1 {
				text-align: center;
				padding: 5px 0 10px 0;
				border-bottom: 1px solid silver;
			}

			.center_1 form {
				padding: 0px 25px 100px;
				box-sizing: border-box;
			}

			.center_2 {
				position: absolute;
				top: 35%;
				left: 15%;
				transform: translate(-50%, -50%);
				width: 1000px;
				background: gray;
				border-radius: 10px;
				width: 300px;
				height: 130px;
			}

			.center_2 h1 {
				text-align: center;
				padding: 5px 0 10px 0;
				border-bottom: 1px solid silver;
			}

			.center_2 form {
				padding: 0px 25px 100px;
				box-sizing: border-box;
			}

			.button {
				border: groove;
				color: white;
				padding: 9px 32px;
				text-align: right;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
				border-radius: 16px;
				background: gray;
				color: white;
				padding: 5px;
				font-size: 16px;
				fill:red;
			}

			.dropbtn {
				background-color: gray;
				color: white;
				padding: 16px;
				font-size: 16px;
				border: none;
				cursor: pointer;
			}

			.dropbtn:hover,
			.dropbtn:focus {
				background-color: black;
			}

			.dropdown {
				position: relative;
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f1f1f1;
				min-width: 160px;
				overflow: auto;
				box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
				z-index: 1;
			}

			.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
			}

			.dropdown a:hover {
				background-color: #ddd;
			}

			.show {
				display: block;
			}
		</style>
	</head>
	<body>
		<?php include '../includes/nav.php';?>

		<div class="center_1">
			<form >
				<div class="dropdown">
					<button onclick="myFunction1()" class="dropbtn">Type-of-problem</button>
					<div id="myDropdown1" class="dropdown-content">
						<a href="#">desktop</a>
						<a href="#">network</a>
						<a href="#">printing</a>
						<a href="#">Applications</a>
					</div>
				</div>
				<div class="dropdown">
					<button onclick="myFunction2()" class="dropbtn">Case-status</button>
					<div id="myDropdown2" class="dropdown-content">
						<a href="#">pending</a>
						<a href="#">opened</a>
						<a href="#">closd</a>
					</div>
				</div>
				<div class="dropdown">
					<button onclick="myFunction3()" class="dropbtn">Date-modified</button>
					<div id="myDropdown3" class="dropdown-content">
						<a href="#">last-day</a>
						<a href="#">last-week</a>
						<a href="#">last-month</a>
					</div>
				</div>
			</form>
		</div>

		<div class="center_2">
			<form method="post">
				<h4>Subject </h4>
				<br>
				<h5>type of problm </h5>
				<br>
				<a href="/images/myw3schoolsimage.jpg" download="w3logo">
					<img src="ss.png" alt="PDF" width="104" height="142">
				</a>
			</form>
		</div>
	</body>
	<script>
		/* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
		function myFunction1() {
			document.getElementById("myDropdown1").classList.toggle("show");
		}

		function myFunction2() {
			document.getElementById("myDropdown2").classList.toggle("show");
		}

		function myFunction3() {
			document.getElementById("myDropdown3").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		}
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
	</script>

</html>