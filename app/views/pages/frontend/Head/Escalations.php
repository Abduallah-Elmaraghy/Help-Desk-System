<?php
class Escalations extends view
{

	public function output()
	{

		$action = "";//= URLROOT . 'public/users/login';

		require APPROOT.'/views/inc/navHead.php';

		$text = <<<EOT

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
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<div class="card_body">
						<h4>Type of problem :</h4>
						<h4>Severity :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
		</div>
	</body>
EOT;
		echo $text;

	}
}