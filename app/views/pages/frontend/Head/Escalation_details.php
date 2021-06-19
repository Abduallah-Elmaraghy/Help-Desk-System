<?php
class EscalationDetails extends view
{

	public function output()
	{

		$action = "";//= URLROOT . 'public/users/login';

		require APPROOT.'/views/inc/navHead.php';

		$text = <<<EOT

  <body>
		<form method="post" class="view_card" action="Give_warning.php">
			<h1>View Escalation</h1><br>
			<div class="table_row">
				<div class="table_col">
					<label>Case number</label>
				</div>
				<div class="table_col">
					<label>IT450-650</label>
				</div>
				<div class="table_col">
					<label>Recepient</label>
				</div>
				<div class="table_col">
					<label>Alaa Fadel</label>
				</div>
			</div>
			<div class="table_row" style="padding-top:0;">
				<div class="table_col">
					<label>Escalation reason</label>
					<label>Description</label>
				</div>
				<div class="table_col">
					<label>asjkdbkasdjcjbnsdkjabkdjsfv</label>
					<label>cfedwajibsvbqaegbvruybuvs</label>
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
