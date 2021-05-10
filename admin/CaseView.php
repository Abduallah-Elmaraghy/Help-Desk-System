<?php include '../includes/nav.php';?>
<html>
	<header>
		<!--		<css">-->
		<title>Case View</title>

		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

			*
			{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-family: 'Poppins', sans-serif;
			}

			body
			{
				background: rgb(199, 199, 199);
				height: 100vh;
				overflow: hidden;
				color:white;
			}

			.center
			{
				position: absolute;
				top:50%;
				left: 50%;
				transform: translate(-50%,-50%);
				width: 1000px;
				background: gray;
				border-radius: 10px;
			}

			.center h1
			{
				text-align: center;
				padding: 5px 0 10px 0;
				border-bottom: 1px solid silver;
			}

			.center form
			{
				padding: 0px 25px 100px;
				box-sizing: border-box;
			}
			
			label
			{
				position:relative;
				color:rgb(46, 46, 46);
				color:white;
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
			textarea{

				border-radius: 30px;
				border: none;
				background-color:#adadad;
			}
		</style>
	</header>

	<body>

		<div class = "center" >
			<h1 style="color:black;">CASE DETAIL</h1>
			<table>
				<tr>
					<th></th>
					<td>
						
					</td>
				</tr>
			</table>
			<form method="post">
				<h2>Case Information</h2>
				<label>Subject  </label> 			
				<label style="left:150px;">Category  </label> 
				<label>Case owner  </label>
				<label style="left:115px;">Parent case  </label> <br>
				<label>Case   </label> 
				<label style="left: 170px;">Status  </label> <br>
				<label >Case Pirority  </label>
				<label style="left:112px;">Due date  </label><br>
				<label>Sevirity  </label> <br>
				<label>Description </label> 
			</form> 
		</div>
	</body>
</html>