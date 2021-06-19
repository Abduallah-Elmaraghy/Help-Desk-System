<?php
class CaseViewHead extends view
{

	public function output()
	{

		$action = "";//= URLROOT . 'public/users/login';

		require APPROOT.'/views/inc/navHead.php';
		$case= $this->model->CaseView();
		$owner= $this->model->GetOwner();
		$type= $this->model->GetType();
		$text = <<<EOT

  <body>
		<form method="post" class="view_card">
			<h1>Case Details</h1>
			<h2>Case information</h2>
			<div class="table_row">
				<div class="table_col">
					<label><b>Subject</b></label>
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
				</div>
				<div class="table_col">
					<label><b>Category</b></label>
					<label><b>Parent case</b></label>
					<label><b>Status</b></label>
					<label><b>Due date</b></label>
				</div>
				<div class="table_col">
					<label>'.$type->case_type.'</label>
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
		</form> 
	</body>
EOT;
		echo $text;

	}
}