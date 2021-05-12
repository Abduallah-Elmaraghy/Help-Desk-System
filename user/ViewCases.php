<!DOCTYPE html>
<html>
	<head> 
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-family: 'Poppins', sans-serif;
			}
			body
			{
				margin-top: 70px;
				background-size: cover;
				line-height: 1.5;
				background-color: #E5E5DC;
			}


			.center {
				padding:10px;
				margin-left:780px;
				margin-top:120px;
				transform: translate(-50%, -50%);
				width: 500px;
				height:250px;
				background: gray;
				border-radius: 10px;
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
				color: rgb(46, 46, 46);
				color: white;
			}

			input {
				margin: 5px;
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

				margin:50px 150px ;
				width: 10%;
				border-radius: 30px;
				border: none;
				height: 30px;
				background-color: #adadad;
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
		</style>
	</head>
	<body>
		<?php include '../includes/navUser.php';?>

		<select>
			<option selected disabled>Type of problem</option>
		</select>

		<select>
			<option selected disabled>Case Status</option>
		</select>
		<select>
			<option selected disabled>Case Status</option>
		</select>
		<!-- <div class="center">  </div>-->
		<div class="center"></div>
		<div class="center"></div>
		<div class="center"></div>
		<div class="center"> </div>
	</body>
</html>