<?php
class UploadStatement extends view
{

	public function output()
	{

		$action = "";//= URLROOT . 'public/users/login';
		require APPROOT.'/views/inc/navAdmin.php';
		//		<div class="triangle-left"></div>
		//<div class="triangle-right"></div>
		$text = '
<html>
	<header>
		<title>Updload statement</title>
		<link rel="stylesheet" href="../../style sheets/stylesheet.css">
	</header>
	<body>
		<?php
		include "../../includes/navAdmin.php";
?>
		<form method="post" class="view_card" enctype="multipart/form-data">
			<h1>New Statement</h1>
			<div class="table_row">
				<div class="table_col">
					<label>Subject</label>
					<label>Type of problem</label>
					<label>Problem definition</label>
				</div>
				<div class="table_col">
					<input type="text" name="subject">
					<select name="TypeOfProblemId">
						<option>Network</option>
						<option>System fail</option>
						<option>Database</option>
					</select>
					<input type="text" name="problemDefinition">
				</div>
				<div class="files_info_view">
					<div class="table_row">
						<label>File</label>
						<label>Size</label>
						<label>Type</label>
					</div>
					<div class="table_row">
						<label>img</label>
						<label>30KB</label>
						<label>PMG</label>
					</div>
					<div class="table_row">
						<label>Steps</label>
						<label>20MB</label>
						<label>docx</label>
					</div>
					<div class="table_row">
						<div class="addAttachment">
							<input type="file" name="myfile" id="file" >
							<label for="file" class="attachment_label">
								Add attachment
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="table_row">
				<div class="table_col">
					<label>
						Description
					</label>				
				</div>
				<div class="table_col">
					<textarea type="text" name="description"> 
					</textarea>				
				</div>
			</div>
			<div class="submit">
				<input type="submit">
			</div>
		</form> 
	</body>
</html>
  ';
		echo $text;
	}

}