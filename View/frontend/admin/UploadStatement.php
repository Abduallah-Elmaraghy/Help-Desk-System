<html>
	<header>
		<title>Updload statement</title>
		<link rel="stylesheet" href="../style sheets/stylesheet.css">
		<style>
			.files_info_view
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
		</style>
	</header>
	<body>
		<?php include '../includes/navAdmin.php';?>
		<form method="post" class="view_card">
			<h1>New Statement</h1>
			<div class="table_row">
				<div class="table_col">
					<label>Subject</label>
					<label>Problem definition</label>
					<label>Type of problem</label>
				</div>
				<div class="table_col">
					<input type="text">
					<select>
						<option>Network</option>
						<option>System fail</option>
						<option>Database</option>
					</select>
					<input type="text">
				</div>
				<div class="files_info_view">
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
	</body>
</html>