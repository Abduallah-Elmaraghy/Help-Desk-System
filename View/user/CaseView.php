<html>
	<header>
		<title>Case View</title>
		<link rel="stylesheet" href="../style sheets/stylesheet.css">
	</header>
	<body>
		<?php include '../includes/navUser.php';?>
		<form method="post" class="view_card">
			<h1>Case Details</h1>
			<h2>Case information</h2>
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
			<h2>User information</h2>
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
			<h2>Case comments</h2>
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
					<label>New comment</label>
				</div>
				<div class="table_col">
					<textarea></textarea>
				</div>
			</div>
			<div class="addAttachment">
				<input type="file" id="file" accept="image/*">
				<label for="file" class="attachment_label">
					Add attachment
				</label>
			</div>
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
			<h2>Attachments</h2>
			<div class="table_row">
				<div class="table_col">
					<label>Action</label>
					<label>Edit | View | Delete</label>
				</div>
				<div class="table_col">
					<label>File name</label>
					<label>Capture01.PNG</label>
				</div>
				<div class="table_col">
					<label>Last modified</label>
					<label>12/5/2021</label>
				</div>
				<div class="table_col">
					<label>Size</label>
					<label>30KB</label>
				</div>
				<div class="table_col">
					<label>Created by</label>
					<label>Alaa Fadel</label>
				</div>
			</div>
		</form> 
	</body>
</html>