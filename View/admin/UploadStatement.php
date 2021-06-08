<html>
	<header>
		<title>Updload statement</title>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

			.New_statement_container
			{
				display: flex;
				flex-direction: row;
				margin-top: 100px;
			}

			.New_statement
			{
				display: flex;
				flex-direction: column;
				width: 80%; 
				margin: 10%;	
				padding: 50px;
				margin-top: 75px;
				border-radius: 15px;
				background-color: #1B1717;
				color: #EEEBDD;	
			}

			.New_statement form
			{
				padding: 15px;
				box-sizing: border-box;
			}

			.New_statement h1
			{
				width: 50%;
				margin-left: 25%;
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

			.table_row label
			{
				float: left;
				width: 100%;
				padding: 20px;
				margin-right: 20px;
			}

			.table_row input
			{
				margin: 20px;
				margin-top: 15px;
				width:150px	;
				border-radius: 30px;
				border: none;
				height:30px;
				background-color:#EEEBDD;	
			}

			.files_view
			{
				width: 100%;
				margin-left: 10%;
				padding: 0px 10px;
				background-color: #1B1717;
				border: 2px solid #EEEBDD;
				color: #EEEBDD;
				border-radius: 20px;
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
				border: 2px solid #EEEBDD;
				color:#EEEBDD;
				align-content: center;
				font-size: 18px;
				font-weight: 700;
				border-radius: 25px;
				cursor: pointer;
				outline: none;
			}

			input[type = "submit"]:hover
			{
				background: #EEEBDD;
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
				background-color:#EEEBDD;
				outline: none;
			}

			option
			{
				border-radius:30px ;
				text-align: center;
			}

			textarea
			{
				border-radius: 15px;
				border: none;
				background-color:#EEEBDD;
			}

			.choose
			{
				/*				margin-left: 15px;*/
				margin-bottom: 20px;
				display: flex;
				flex-direction: column;
			}

			.choose input[type="file"]
			{
				display: none;
				padding: 25px;
				background-color:#EEEBDD;
				cursor: pointer;
			}

			.choose .attachment_label
			{
				padding: 4px 15px;
				color: #EEEBDD;
				background-color: black;
				border: 1px solid #EEEBDD;
				border-radius: 25px;
				cursor: pointer;
			}

			.choose .attachment_label:hover
			{
				background: #EEEBDD;
				color: #000000;
				transition: .7s;
			}

		</style>
	</header>

	<body>
		<?php include '../includes/navAdmin.php';?>
		<div class="New_statement_container">
			<div class = "New_statement" >
				<h1>New Statement</h1>
				<form method="post">
					<div class="table_row">
						<div class="table_col">
							<div class="table_row">
								<label>Subject</label>
								<input type="text">
							</div>
							<div class="table_row">
								<label>Problem definition</label>
								<input type="text">
							</div>
							<div class="table_row">
								<label>Type of problem</label>
								<select>
									<option>Network</option>
									<option>System fail</option>
									<option>Database</option>
								</select>
							</div>
						</div>
						<div class="files_view">
							<div class="table_row">
								<label>File</label>
								<label>Size</label>
								<label>Type</label>
							</div>
							<div class="table_row" style="padding-bottom:5px; margin-bottom:5px;">
								<div class="choose">
									<input type="file" id="file" accept="image/*">
									<label for="file" class="attachment_label">
										Add attachment
									</label>
								</div>
							</div>
						</div>
					</div>
					<label style="margin: 0 15px 0 15px;margin-left: 30px;padding:20px;">Description</label>
					<textarea type="text"style="width:60%;"> 
					</textarea><br>
					<div class="submit">
						<input type="submit">
					</div>
				</form> 
			</div>
		</div>
	</body>
</html>