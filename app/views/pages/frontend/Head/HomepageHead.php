<?php
class HomepageHead extends view
{

	public function output()
	{
		$action = "";//= URLROOT . 'public/users/login';
		require APPROOT.'/views/inc/navHead.php';
		$text = <<<EOT
  <body>
		<h3 style="margin-left: 100px;">Escalations</h3>
		<div class="pending_cases">
			<div class="triangle-left"></div>
			<div class="card">
				<img src="../../images/recent%20cases.png">
				<div class="card_body">
					<h4>Case number</h4>
					<h4>Escalation reason</h4>
					<input type="submit" value="View">
				</div>
			</div>
			<div class="card">
				<img src="../../images/recent%20cases.png">
				<div class="card_body">
					<h4>Case number</h4>
					<h4>Escalation reason</h4>
					<input type="submit" value="View">
				</div>
			</div>
			<div class="card">
				<img src="../../images/recent%20cases.png">
				<div class="card_body">
					<h4>Case number</h4>
					<h4>Escalation reason</h4>
					<input type="submit" value="View">
				</div>
			</div>
			<div class="triangle-right"></div>
		</div>
		<div class="viewcases">
			<h2>Quick access</h2>
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Cases..">

			<table class="quick_access" id="quick_access">
				<tr>
					<th>Case-Number</th>
					<th>Sevirity</th>
					<th>Pirority</th>
					<th>Due date</th>
					<th></th>
				</tr>
				<tr>
					<td>Alfreds Futterkiste</td>
					<td>Maria Anders</td>
					<td>Germany</td>
					<td>Germany</td>
					<td><a href="">Open</a></td>
				</tr>
				<tr>
					<td>Berglunds snabbköp</td>
					<td>Christina Berglund</td>
					<td>Sweden</td>
					<td>Sweden</td>
					<td><a href="#">Open</a></td>
				</tr>
				<tr>
					<td>Ernst Handel</td>
					<td>Roland Mendel</td>
					<td>Austria</td>
					<td>Austria</td>
					<td><a href="#">Open</a></td>
				</tr>
				<tr>
					<td>Island Trading</td>
					<td>Helen Bennett</td>
					<td>UK</td>
					<td>UK</td>
					<td><a href="#">Open</a></td>
				</tr>
				<tr>
					<td>Königlich Essen</td>
					<td>Philip Cramer</td>
					<td>Germany</td>
					<td>Germany</td>
					<td><a href="#">Open</a></td>
				</tr>
				<tr>
					<td>Paris spécialités</td>
					<td>Marie Bertrand</td>
					<td>France</td>
					<td>France</td>
					<td><a href="#">Open</a></td>
				</tr>
			</table>
		</div>
	</body>
EOT;
		echo $text;

	}
}
