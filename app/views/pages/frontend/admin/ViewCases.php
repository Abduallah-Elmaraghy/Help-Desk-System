<?php
class ViewCases extends view
{

	public function output()
	{

		$action = "";//= URLROOT . 'public/users/login';
		require APPROOT.'/views/inc/navAdmin.php';
		//		<div class="triangle-left"></div>
		//<div class="triangle-right"></div>
		$text = '
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../../style sheets/stylesheet.css">
	</head>
	<body>
		<?php include "../../includes/navAdmin.php";?>
<h2 style="margin-left: 100px;">Filters</h2>
<div class="Filters">
    <select class="filter">
        <option>Type of problem</option>
        <option>Desktop Application</option>
        <option>Network</option>
        <option>Other</option>
    </select>
    <select class="filter">
        <option>Case Status</option>
        <option>Pending</option>
        <option>Opened</option>
        <option>Resolved</option>
        <option>Closed</option>
    </select>
    <input type="date" class="filter" value="date modified">
</div>
<div class="row">';
		foreach( $this->model->GetCases() as $case){
			$case_number = $case->case_number;
			$severity = $case->severity;
			$priority = $case->priority;
			$due_date = $case->due_date;
			$status = $case->status;

			$text.='
    <form method="post"action='.URLROOT.'public/admins/CaseView?id='. $case_number.'>
    <div class="column">
        <div class="card">
            <img src="../images/recent%20cases.png">
            <div class="card_body">
                <h4>Case number :'.$case_number.'</h4>
                <h4>Status : '.$status.'</h4>
                <input type="submit" value="View">
            </div>
        </div>
    </div>
</form>
';
		}
		$text.='</div>
</body>

</html>';
		echo $text;
	}

}