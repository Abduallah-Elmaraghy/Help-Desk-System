<?php
class KnowledgeBase extends view
{

	public function output()
	{

		$action = "";//= URLROOT . 'public/users/login';
		require APPROOT.'/views/inc/navUser.php';
		//		<div class="triangle-left"></div>
		//<div class="triangle-right"></div>
		//$case= $this->model->CaseView();
		$text = '
		<!DOCTYPE html>
		<html>
			<head>
				<link rel="stylesheet" href="..\..\style sheets\stylesheet.css">
			</head>
			<body>
				<?php include "../../includes/navUser.php";?>
				<h2 style="margin-left: 100px;">Filters</h2>
				<div class="Filters">
    				<select class="filter">
        				<option>Type of problem</option>
						<option>Desktop Application</option>
						<option>Network</option>
						<option>Other</option>
					</select>
					<input type="date" class="filter" value="date modified">
				</div>
				<div class="row">
    	';
		foreach($this->model->GetStatements() as $knowledge)
		{
			$knowledge_type= $this->model->GetType($knowledge->Type_id);   
			$text.='
				<form method="post" action='.URLROOT.'public/pages/ViewStatement?id='. $knowledge->statement_id.'>
					<div class="column">
						<div class="card">
							<div class="card_body">
								<h2>Type of problem :</h2>
								<h4>'.$knowledge_type->case_type.'</h4>
								<h2>Subject :</h2>
								<h4>'.$knowledge->subject.'</h4>
								<h2>Date & Time :</h2>
								<h4> 2021/2/20</h4>
								<input type="submit" value="View">
            				</div>
						</div>
					</div>
    	';
		}
		$text.='
				</div>
			</body>
		</html>
';
		echo $text;
	}
}