<html>
	<header>
		<title>Escalation-details</title>
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


			.New_Case_container
			{
				display: flex;
				flex-direction: row;
				margin-top: 100px;
			}

			.New_case 
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

			.New_case form
			{
				padding: 0px 25px 100px;
				box-sizing: border-box;
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
				margin: 0 5px 0 5px;
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
				width: 170px;
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

			.choose
			{
				margin-left: 45px;
				margin-bottom: 20px;
				display: flex;
				flex-direction: column;
			}
			.choose input[type="file"]
			{
				display: none;
				padding: 25px;
				background-color:white;
				cursor: pointer;
			}
			.choose .attachment_label
			{
				width: 160px;
				padding: 7px;
				color: #000000;
				background-color:#adadad;
				border-radius: 25px;
				cursor: pointer;
			}

			.choose .attachment_label:hover
			{
				color: #adadad;
				background-color: black;
				border: none;
			}

		</style>
	</header>

	<body>
		<?php include '../includes/navHead.php';?>
		<div class="New_Case_container">
			<div class = "New_case" >
				<h1>Case Details</h1>
				<form method="post">
					<h3>Case information</h3>
					<div class="table_row">
						<div class="table_col">
							<label>Subject</label>
							<label>Case owner</label>
							<label>Case number</label>
							<label>Case priority</label>
							<label>Severity</label>
							<label>Description</label>
						</div>
						<div class="table_col">
							<label>SAP application not working</label>
							<label>Abduallah Elmaraghy</label>
							<label>IT450-630</label>
							<label>High</label>
							<label>Medium</label>
							<label></label>
						</div>
						<div class="table_col">
							<label>Category</label>
							<label>Parent case</label>
							<label>Status</label>
							<label>Due date</label>
						</div>
						<div class="table_col">
							<label>Desktop application</label>
							<label>None</label>
							<label>Opened</label>
							<label>20/5/2021</label>
						</div>
					</div>
					<h3>User information</h3>
					<div class="table_row">
						<div class="table_col">
							<label>Contact name</label>
							<label>Contact phone</label>

						</div>
						<div class="table_col">
							<label >Abduallah Elmaraghy</label>
							<label >01231234349</label>
						</div>
						<div class="table_col">
							<label>Contact mail</label>
						</div>
						<div class="table_col">
							<label >Abdu2020@gmail.com</label>
						</div>
					</div>
					<h3>Case comments</h3>
					<div class="table_row">
						<div class="table_col">
							<label>Created by</label>
						</div>
						<div class="table_col">
							<label>Abduallah Elmaraghy</label>

						</div>
						<div class="table_col">
							<label>Recepient</label>
						</div>
						<div class="table_col">
							<label>Alaa Fadel</label>
						</div>
					</div>
					<div class="table_row" style="margin-top:-50px;">
						<div class="table_col">
							<label>Comment</label>
						</div>
						<div class="table_col">
							<label>The application cannont connect to the network</label>
						</div>
					</div>
					<div class="table_row">
						<div class="table_col">
							<textarea></textarea>
						</div>
					</div>
					<input type="file">
					<div class="submit">
						<input type="submit" value="Add Comment">
					</div>
					<h3>Case history</h3>
					<div class="table_row">
						<div class="table_col">
							<label>Date & Time</label>
							<label>14/5/2021</label>
						</div>
						<div class="table_col">
							<label >User</label>
							<label>Abduallah Elmaraghy</label>
						</div>
						<div class="table_col">
							<label>Action</label>
							<label>Changed status from pending to opened</label>
						</div>
					</div>
					<h3>Attachments</h3>
					<div class="table_row">
						<div class="table_col">
							<label style="text-align:center;">Action</label>
							<label>Edit | View | Delete</label>
						</div>
						<div class="table_col">
							<label style="text-align:center;">File name</label>
							<label style="text-align:center;">Capture01.PNG</label>
						</div>
						<div class="table_col">
							<label style="text-align:center;">Last modified</label>
							<label>12/5/2021</label>
						</div>
						<div class="table_col">
							<label style="text-align:center;">Size</label>
							<label>30KB</label>
						</div>
						<div class="table_col">
							<label style="text-align:center;">Created by</label>
							<label>Alaa Fadel</label>
						</div>
					</div>
				</form> 
			</div>
		</div>
	</body>
</html>