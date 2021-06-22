<?php
class ViewCasesHead extends view
{
	public function output()
	{
		$action = "";//= URLROOT . 'public/users/login';
		require APPROOT.'/views/inc/navHead.php';
		$text = '
  <body>
		<h2 style="margin-left: 100px;">Filters</h2>
		<div class="Filters">
			<select class="filter" name="type" id="type" onchange="showCases(this.value)">
				<option>Type of problem</option>
				<option>Desktop Application</option>
				<option>Network</option>
				<option>Other</option>
			</select>
			<select class="filter" name="status" id="status" onchange="showCases(this.value)">
				<option>Case Status</option>
				<option>Pending</option>
				<option>Opened</option>
				<option>Resolved</option>
				<option>Closed</option>
			</select>
			<input type="date" class="filter" value="date modified" name="date" id="date" onchange="showCases(this.value)">
		</div>
		<div class="row" id="cases">';
		foreach( $this->model->GetCases() as $case)
		{
			$case_number = $case->case_number;
			$severity = $case->severity;
			$priority = $case->priority;
			$due_date = $case->due_date;
			$status = $case->status;
			$text.='
			<form method="post"action='.URLROOT.'public/Heads/CaseView?id='. $case_number.'>
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
			</form>';
		}
		$text.='	
		</div>
	</body>
	<script>
	function showCases(str)
	{
		if (str=="")
		{
			return;
		}
		
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange=function()
		{
			if (this.readyState==4 && this.status==200)
			{
				document.getElementById("cases").innerHTML=this.responseText;
			}
		}
		xmlhttp.open("GET","getcustomer.asp?q="+str,true);
		xmlhttp.send();
	}
	</script>
';


		echo $text;
	}
}