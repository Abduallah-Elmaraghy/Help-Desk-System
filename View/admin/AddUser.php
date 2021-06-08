<html>
	<header>
		<title>New Case</title>
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
				height: 700px;
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
		<?php include '../includes/navAdmin.php';?>
		<div class="New_Case_container">
			<div class = "New_case" >
				<h1>Add User</h1>
				<form method="post">
					<div class="table_row">
						<div class="table_col">
							<label>First Name</label>
							<label>Last Name</label>
							<label>Email</label>
							<label>Username</label>
						</div>
						<div class="table_col">
							<input type="text">
							<input type="text">
							<input type="text">
							<input type="text">
						</div>
						<div class="table_col">
							<label>Password</label>
							<label>Confirm Password</label>
							<label>Gender</label>
							<label>Role</label>
							<label>Department</label>
						</div>
						<div class="table_col">
				            <input type="text">
							<input type="text">
							<input type="text">
							<input type="text">
							<input type="text">
						</div>
					</div>
				
					<div class="submit">
						<input type="submit">
					</div>
				</form> 
			</div>
		</div>
	</body>
</html>