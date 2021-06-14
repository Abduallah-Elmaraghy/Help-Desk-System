<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="..\style sheets\stylesheet.css">
		<script src="../js/Livesearch.js"></script>
	</head>
	<body>
		<?php 
		include "../includes/navAdmin.php";
		?>
		<form method="post" class="view_card">
			<h1>Give Warning</h1>
			<div class="table_row">
				<div class="table_col">

					<label>intended person</label>
				</div>
				<div class="table_col">

					<label>Ahmed mohamed</label>
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