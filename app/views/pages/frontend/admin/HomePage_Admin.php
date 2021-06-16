

<?php
class Homepageadmin extends view
{

  public function output()
  {

$action = "";//= URLROOT . 'public/users/login';
   
require APPROOT.'/views/inc/navAdmin.php';

$text = <<<EOT
 
  <body>
		<?php
		?>

		<h2 style="margin-left: 100px;">Pending Cases</h2>
		<div class="pending_cases">
			<div class="triangle-left"></div>
			<div class="card">
				<img src="../../recent%20cases.png">
				<div class="card_body">
					<h4>Case number :</h4>
					<h4>Status :</h4>
					<input type="submit" value="Open">
				</div>
			</div>
			<div class="card">
				<img src="../../public/images/recent%20cases.png">
				<div class="card_body">
					<h4>Case number :</h4>
					<h4>Status :</h4>
					<input type="submit" value="Open">
				</div>
			</div>
			<div class="card">
				<img src="../../recent%20cases.png">
				<div class="card_body">
					<h4>Case number :</h4>
					<h4>Status :</h4>
					<input type="submit" value="Open">
				</div>
			</div>
			<div class="triangle-right"></div>
		</div>
		<form class="viewcases">
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
		</form>
	</body>
EOT;
    echo $text;
 
  }
}
