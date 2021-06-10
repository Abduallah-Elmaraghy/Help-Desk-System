<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../style%20sheets/stylesheet.css">
	</head>
	<body>
		<?php include '../includes/navUser.php';?>
		<form method="post" class="view_card">
			<h1>Escalation</h1><br>
			<div class="table_row">
				<div class="table_col">
					<label>Case number</label>
				</div>
				<div class="table_col">
					<label>IT450-650</label>
				</div>
				<div class="table_col">
					<label>Recepient</label>
				</div>
				<div class="table_col">
					<label>Alaa Fadel</label>
				</div>
			</div>
			<div class="table_row" style="padding-top:0;">
				<div class="table_col">
					<label>Escalation reason</label>
					<label>Description</label>
				</div>
				<div class="table_col">
					<textarea type="text"></textarea>
					<textarea type="text"></textarea>
				</div>
			</div>
			<div class="submit">
				<input type="submit">
			</div>
		</form>
	</body>
</html>