<!DOCTYPE html>
<html>
	<head>
		<title>New Case</title>
		<link rel="stylesheet" href="../style sheets/stylesheet.css">
	</head>
	<body>
		<?php include '../includes/navUser.php';?>
		<form method="post" class="view_card">
			<h1>New Case</h1>
			<div class="table_row">
				<div class="table_col">
					<label>Subject</label>
					<label>Case number</label>
					<label>Case Priority</label>
					<label>Severity</label>
				</div>
				<div class="table_col">
					<input type="text">
					<label>IT450-650</label>
					<select>
						<option>High</option>
						<option>Extreme</option>
						<option>Low</option>
					</select>
					<select>
						<option>High</option>
						<option>Extreme</option>
						<option>Low</option>
					</select>
				</div>
				<div class="table_col">
					<label>Category</label>
					<label>Parent case</label>
					<label>Due date</label>
				</div>
				<div class="table_col">
					<select>
						<option>Network</option>
						<option>System fail</option>
						<option>Database</option>
					</select>
					<label>IT450-650</label>
					<input type="date" min="">
				</div>
			</div>
			<div class="table_row" style="padding-top:0px;">
				<div class="table_col">
					<label>
						Description
					</label>
				</div>
				<div class="table_col">
					<textarea type="text"></textarea>
				</div>
			</div>
			<div class="addAttachment">
				<input type="file" id="file" accept="image/*">
				<label for="file" class="attachment_label">
					Add attachment
				</label>
			</div>
			<div class="submit">
				<input type="submit">
			</div>
		</form> 
	</body>
</html>