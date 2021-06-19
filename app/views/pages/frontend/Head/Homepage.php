<?php
class HomePageHead extends view
{

	public function output()
	{
		$action = "";//= URLROOT . 'public/users/login';
		require APPROOT.'/views/inc/navHead.php';
		$text = '

<body>
	<h3 style="margin-left: 100px;">Escalations</h3>
	<div class="pending_cases">
    ';
		foreach( $this->model->GetEscalations() as $escalation)
		{
			$case_number = $escalation->case_number;
			$user_id = $escalation->user_id;
			$admin_id = $escalation->admin_id;
			$reason = $escalation->reason;
			$description = $escalation->description;
			$text.= '
        <form method="post" action='.URLROOT.'public/Heads/ViewEscalations?id='. $case_number.'&&admin_id='.$admin_id.'>
        	<div class="card">
            	<img src="../../recent%20cases.png">
            	<div class="card_body">
                	<h4>Case number : '.$case_number.'</h4>
                	<h4>Status : '.$status.'</h4>
                	<input type="submit" value="Open">
            	</div>
        	</div>
		</form>
    ';
		}
		$text.='
	</div>
	<form class="viewcases">
		<h2>Quick access</h2>
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Cases..">
		<table class="quick_access" id="quick_access">
			<tr>
            	<th>Case Number</th>
				<th>Sevirity</th>
            	<th>Pirority</th>
            	<th>Due date</th>
            	<th></th>
			</tr>';
		foreach( $this->model->GetCases() as $case)
		{
			$case_number = $case->case_number;
			$severity = $case->severity;
			$priority = $case->priority;
			$due_date = $case->due_date;
			$text.='
        	<tr>
            	<td>' .$case_number.'</td>
				<td>' .$severity.'</td>
				<td>' .$priority.'</td>
            	<td>' .$due_date.'</td>
				<td><a href='.URLROOT.'public/admins/CaseView?id='. $case_number.'>Open</a></td>
        	</tr>
        	';
		}
		$text.='
    	</table>
	</form>
</body>';
		echo $text;

	}
}
