<?php
class EscalationDetails extends view
{

	public function output()
	{

		$action = "";//= URLROOT . 'public/users/login';

		require APPROOT.'/views/inc/navHead.php';
		
		$escalation = $this->model->EscalationView();
		$admin = $this->model->GetRecepient();
		$user = $this->model->GetOwner();
		$id=$_GET['admin_id'];
		$text = <<<EOT

  <body>
		<form method="post" class="view_card" action="GiveWarning?admin_id='$id'">
			<h1>View Escalation</h1><br>
			<div class="table_row">
				<div class="table_col">
					<label>Case number</label>
				</div>
				<div class="table_col">
					<label>$escalation->case_number</label>
				</div>
				<div class="table_col">
					<label>Recepient</label>
				</div>
				<div class="table_col">
					<label>$admin->username</label>
				</div>
			</div>
			<div class="table_row" style="padding-top:0;">
				<div class="table_col">
					<label>Escalation reason</label>
					<label>Description</label>
				</div>
				<div class="table_col">
					<label>$escalation->reason</label>
					<label>$escalation->description	</label>
				</div>
			</div>
			<div class="submit">
				<input type="submit" value="Give warning">
			</div>
		</form>
	</body>
EOT;
		echo $text;

	}
}
