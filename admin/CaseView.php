<?php include '../includes/nav.php';?>
<html>
	<header>
		<link rel = "stylesheet" href = "../style sheets/stylesheet.css">
		<title>Case View</title>
		<style>
		
			.case_view
			{
				margin-top: 10%;
				margin-left: 5%;
				width: 1000px;
				background-color: black;
				opacity: 50%;
				border-radius: 10px;
			}

			.case_view h1
			{
				text-align: center;
				padding: 5px 0 10px 0;
				border-bottom: 1px solid silver;
			}

			.case_view form
			{
				padding: 0px 25px 100px;
				box-sizing: border-box;
			}
			
			label
			{
				position:relative;
				color:rgb(46, 46, 46);
			}
			
			input
			{
				margin:5px;
				position:relative;
				width:30%;
				border-radius: 30px;
				border: none;
				height:30px;
				background-color:#adadad;	
			}
			
			input[type = "submit"]
			{
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
			
			select
			{
				margin:5px;
				position:relative;
				width:30%;
				border-radius: 30px;
				border: none;
				height:30px;
				background-color:#adadad;
			}
			
			option
			{
				border-radius:30px ;
				text-align: center;
			}
			
			input[type = "submit"]:hover
			{
				border-color: #FFFFFF;
				background: #adadad;
				color:#000000;
				border-width: -20px;
				transition: .7s;
			}
			
			textarea
			{
				border-radius: 30px;
				border: none;
				background-color:#adadad;
			}
		</style>
	</header>
	<body>
		<div class = "case_view" >
			<h1 style="color:black;">CASE DETAIL</h1>
			<form method="post">
				<h2>Case Information</h2>
				<label>Subject  </label> <input type="text"style="left:50px;">
				<label style="left:150px;">Category  </label> <input type="text"style="left: 180px;"><br><br>
				<label>Case owner  </label> <input type="text"style="left:15px;">
				<label style="left:115px;">Parent case  </label> <input type="text"style="left:125px;"><br><br>
				<label>Case   </label> <input type="text"style="left:68px;">
				<label style="left: 170px;">Status  </label> <input type="text"style="left:223px;"><br><br>
				<label >Case Pirority  </label> <input type="text"style="left:9px;">
				<label style="left:112px;">Due date  </label> <input type="text"style="left:142px;"><br><br>
				<label>Sevirity  </label> <input type="text"style="left:50px;"><br><br>
				<label>Description </label> <textarea type="text"style="position:relative;left:23px;width:60%;"> </textarea>
				<input type="submit" style="position:relative;top:50px;left:350px;">
			</form> 
		</div>
	</body>
</html>