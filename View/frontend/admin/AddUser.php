<html>
	<header>
		<title>New Case</title>
		<link rel="stylesheet" href="..\..\style sheets\stylesheet.css">
	</header>
	<body>
		<?php
		include "../../includes/navAdmin.php";
		?>
		<form method="post" class="view_card">
			<h1>Add User</h1>
			<div class="table_row">
				<div class="table_col">
					<label>First Name</label>
					<label>Last Name</label>
					<label>Email</label>
					<label>Gender</label>
				</div>
				<div class="table_col">
					<input type="text">
					<input type="text">
					<input type="text">
					<select>
						<option>Male</option>
						<option>Femal</option>
					</select>
				</div>
				<div class="table_col">
					<label>Password</label>
					<label>Confirm Password</label>
					<label>Role</label>
					<label>Department</label>
				</div>
				<div class="table_col">
					<input type="text">
					<input type="text">
					<select>
						<option>General Manager</option>
						<option>CEO</option>
					</select>
					<select>
						<option>IT</option>
						<option>Media</option>
						<option>HR</option>
						<option>Accounting</option>
					</select>
				</div>
			</div>
			<div class="submit">
				<input type="submit">
			</div>
		</form> 
	</body>
</html>