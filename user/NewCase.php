<html>
	<header>
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
				color:white;
			}

			form
			{
				padding: 0px 25px 100px;
				box-sizing: border-box;
			}

			div.New_Case_container
			{
				display: flex;
				flex-direction: row;
				margin-top: 100px;
			}

			div.New_case 
			{
				display: flex;
				flex-direction: column;
				width: 1000px;
				margin-left: 13%;
				padding: 50px;
				background-color: black;
				opacity: 50%;
				color: white;
				border-radius: 25px;
			}


			.New_case h1
			{
				margin-left: 150px;
				width: 600px;
				text-align: center;
				padding-bottom: 20px;
				margin-bottom: 40px;
				border-bottom: 1px solid silver;
			}

			.table_row
			{
				display: flex;
				flex-direction: row;
				padding: 20px;
			}

			.table_col
			{
				display: flex;
				flex-direction: column;
				margin: 0 10px 0 10px;
			}

			.table_col label
			{
				padding: 20px;
			}

			.table_col input
			{
				margin: 20px;
				margin-top: 15px;
				width:150px	;
				border-radius: 30px;
				border: none;
				height:30px;
				background-color:#adadad;	
			}

			.submit
			{
				margin-top: 50px;
				text-align: center;
			}

			input[type = "submit"]
			{
				margin: 0 100px 0 120px;
				width: 150px;
				padding: 10px;
				background: #000000;
				border: 2px solid #E5E5DC;
				color:#E5E5DC;
				align-content: center;
				font-size: 18px;
				font-weight: 700;
				border-radius: 25px;
				cursor: pointer;
				outline: none;
			}

			input[type = "submit"]:hover
			{
				background: #E5E5DC;
				color: #000000;
				transition: .7s;
			}

			select
			{
				margin: 20px;
				margin-top: 15px;
				width:150px	;
				border-radius: 30px;
				border: none;
				height:30px;
				background-color:#adadad;
				outline: none;
			}

			option
			{
				border-radius:30px ;
				text-align: center;
			}

			textarea
			{
				border-radius: 30px;
				border: none;
				background-color:#adadad;
			}

			.table_col .choose
			{
				margin-top: 15px;
				padding-left: 5px;
				display: flex;
				flex-direction: column;
			}

			.table_col .choose input[type="file"]
			{
				display: none;
				padding: 25px;
				background-color:white;
				border-radius: 25px;
				cursor: pointer;
				color: rgb(145, 113, 97);
				text-transform: uppercase;
			}
			.choose .image_label
			{
				width: 133px;
				padding: 7px;
				font-size: 13px;
				background-color:white;
				border-radius: 5px;
				cursor: pointer;
				color: rgb(145, 113, 97);
				text-transform: uppercase;
			}

			.choose .image_label:hover
			{
				color: rgb(145, 113, 97);
				background-color: black;
				border: none;
			}

		</style>
	</header>

	<body>
		<?php include '../includes/nav.php';?>
		<div class="New_Case_container">
			<div class = "New_case" >
				<h1>New Case</h1>
				<form method="post">
					<div class="table_row">
						<div class="table_col">
							<label>Subject</label>
							<label>Case number</label>
							<label>Case Priority</label>
							<label>Severity</label>
						</div>
						<div class="table_col">
							<input type="text">
							<label style="text-align:center;"> IT450-650</label>
							<select style="left:50px;">
								<option>High</option>
								<option>Extreme</option>
								<option>Low</option>
							</select>
							<select style="left:50px;">
								<option>High</option>
								<option>Extreme</option>
								<option>Low</option>
							</select>
						</div>
						<div class="table_col">
							<label>Category</label>
							<label>Parent case</label>
							<label>Due date</label>
							<label>Contact name</label>
							<div class="choose">
								<input type="file" id="file" accept="image/*">
								<label for="file" class="image_label">
									choose an image
								</label>
							</div>
						</div>
						<div class="table_col">
							<select>
								<option>Network</option>
								<option>System fail</option>
								<option>Database</option>
							</select>
							<label style="text-align:center;"> IT450-650</label>
							<input type="date" min=""style="left:142px;">
							<input type="text">
						</div>
					</div>
					<label style="margin: 0 10px 0 10px;margin-left: 30px;padding:20px;">Description</label>
					<textarea type="text"style="position:relative;left:23px;width:60%;"> 
					</textarea><br>
					<div class="submit">
						<input type="submit">
					</div>
				</form> 
			</div>
		</div>
	</body>
</html>