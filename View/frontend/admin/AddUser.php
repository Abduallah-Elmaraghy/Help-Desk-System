<html>
	<header>
		<title>New Case</title>
		<link rel="stylesheet" href="..\style sheets\stylesheet.css">
	</header>
	<body>
		<?php include '../includes/navAdmin.php';?>
		<form method="post" class="view_card">
			<h1>Add User</h1>
			<div class="table_row">
				<div class="table_col">
					<label>First Name</label>
					<label>Last Name</label>
					<label>Email</label>
					<label>Username</label>
				</div>
				<div class="table_col">
<!--					<label>ahmed</label>-->
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
					<select>
						<option>Male</option>
						<option>Femal</option>
					</select>
					<input type="text">
					<input type="text">
				</div>
			</div>
			<div class="submit">
				<input type="submit">
			</div>
		</form> 
	</body>
</html>