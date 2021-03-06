<?php
class CaseView extends view
{

  public function output()
  {

$action = "";//= URLROOT . 'public/users/login';
require APPROOT.'/views/inc/navUser.php';
//		<div class="triangle-left"></div>
//<div class="triangle-right"></div>
$case= $this->model->CaseView();
$owner= $this->model->GetOwner();
$type= $this->model->GetType();
//$type= $this->model->GetForigns('case_types','case_type_id');

$text = '
<html>
<header>
	<title>Case View</title>
	<link rel="stylesheet" href="../style sheets/stylesheet.css">
</header>
<body>
	
	<form method="post" class="view_card">
		<h1>Case Details</h1>
		<h2>Case information</h2>
		<div class="table_row">
			<div class="table_col">
				<label><b>subject</b></label>
				<label><b>Case owner</b></label>
				<label><b>Case priority</b></label>
				<label><b>Severity</b></label>
				<label><b>Description</b></label>
			</div>
			<div class="table_col">
				<label>'.$case->subject.'</label>
				<label>'.$owner->username.'</label>
				<label>'.$case->priority.'</label>
				<label>'.$case->severity.'</label>
				<label>'.$case->description	.'</label>
<br>
				</div>
			<div class="table_col">
				<label><b>Category</b></label>
				<label><b>Parent case</b></label>
				<label><b>Status</b></label>
				<label><b>Due date</b></label>
			</div>
			<div class="table_col">
				<label>'.$type->case_type	.'</label>
				<label>None</label>
				<label>'.$case->status.'</label>
				<label>'.$case->due_date.'</label>
			</div>
		</div>
		<h2>User information</h2>
		<div class="table_row">
			<div class="table_col">
				<label><b>Contact name</b></label>
				<label><b>Contact phone</b></label>
			</div>
			<div class="table_col">
				<label>'.$owner->username.'</label>
				<label>'.$owner->mobile.'</label>
			</div>
			<div class="table_col">
				<label><b>Contact mail</b></label>
			</div>
			<div class="table_col">
				<label >'.$owner->mail.'</label>
			</div>
		</div>
		<h2>Case comments</h2>
		<div class="table_row">
			<div class="table_col">
				<label><b>Created by</b></label>
			</div>
			<div class="table_col">
				<label>Abduallah Elmaraghy</label>
			</div>
			<div class="table_col">
				<label><b>Recepient</b></label>
			</div>
			<div class="table_col">
				<label>Alaa Fadel</label>
			</div>
		</div>
		<div class="table_row" style="margin-top:-50px;">
			<div class="table_col">
				<label><b>Comment</b></label>
			</div>
			<div class="table_col">
				<label>The application cannont connect to the network</label>
			</div>
		</div>
		<div class="table_row">
			<div class="table_col">
				<label>New comment</label>
				<div class="addAttachment">
					<input type="file" id="file" accept="image/*">
					<label for="file" class="attachment_label">
						Add attachment
					</label>
				</div>
			</div>
			<div class="table_col">
				<textarea></textarea>
			</div>
		</div>
		<div class="submit">
			<input type="submit" value="Add Comment">
		</div>
		<h3>Case history</h3>
		<div class="table_row">
			<div class="table_col">
				<label><b>Date & Time</b></label>
				<label>'.$case->creation_date.'</label>
			</div>
			<div class="table_col">
				<label><b>User</b></label>
				<label>'.$owner->username.'</label>
			</div>
			<div class="table_col">
				<label><b>Action</b></label>
				<label>Changed status from pending to opened</label>
			</div>
		</div>
		<!--
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
-->
	</form> 
</body>
</html>
  ';
echo $text;
}

}