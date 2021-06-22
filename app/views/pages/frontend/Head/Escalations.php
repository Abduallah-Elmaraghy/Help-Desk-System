<?php
class Escalations extends view
{

	public function output()
	{

		$action = "";//= URLROOT . 'public/users/login';

		require APPROOT.'/views/inc/navHead.php';

		$text = '

  <body>
		<h2 style="margin-left: 100px;">Filters</h2>
		<div class="Filters">
			<select class="filter">
				<option>Type of problem</option>
				<option>Desktop Application</option>
				<option>Network</option>
				<option>Other</option>
			</select>
			<select class="filter">
				<option>Severity</option>
				<option>High</option>
				<option>Medium</option>
				<option>Low</option>
			</select>
			<input type="date" class="filter" value="date modified">
		</div>
		<div class="row">
		';
		foreach( $this->model->GetEscalations() as $escalation)
		{
			$case_number = $escalation->case_number;
			$user_id = $escalation->user_id;
			$admin_id = $escalation->admin_id;
			$reason = $escalation->reason;
			$description = $escalation->description;
			$severity = $this->model->GetEscalatedCase($case_number)->severity;
			$text .='
			<form method="post"action='.URLROOT.'public/Heads/EscalationDetails?id='. $case_number.'&&admin_id='.$admin_id.'>
				<div class="column">
					<div class="card">
						<div class="card_body">
							<h4>Case Number :'.$case_number.'</h4>
							<h4>Severity :'.$severity.'</h4>
							<input type="submit" value="View">
						</div>
					</div>
				</div>
			</form>	';
		}
		$text .='
		</div>
	</body>';
		echo $text;

	}
}
