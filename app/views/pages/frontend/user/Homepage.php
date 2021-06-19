
<?php
class HomePageUser extends view
{

  public function output()
  {
   
  require APPROOT.'/views/inc/navUser.php';
   
      $text = '
 
 <body>
		<?php
		include "../../includes/navUser.php";;
		?>
		<h2 style="margin-left: 100px;">Opened Cases</h2>
		<form method="post" action='.URLROOT.'public/pages/CaseView>
		<div class="pending_cases">
			<div class="triangle-left"></div>
			<div class="card">
				<img src="../../public/images/recent%20cases.png">
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
				<img src="../../public/images/recent%20cases.png">
				<div class="card_body">
					<h4>Case number :</h4>
					<h4>Status :</h4>
					<input type="submit" value="Open">
				</div>
			</div>
			<div class="triangle-right"></div>
		</div>
		</form>
		<div class="viewcases">
			<h2>Cases  Quick  Access</h2>
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Cases..">
			<table id="quick_access">
				<tr>
					<th>Case-Number</th>
					<th>Sevirity</th>
					<th>Pirority</th>
					<th>Due date</th>
					<th></th>
				</tr>
				<tr>
					<td>EO31</td>
					<td>Medium</td>
					<td>5</td>
					<td>20/10/2021</td>
					<td><a href='.URLROOT.'public/pages/CaseView>Open</a></td>
				</tr>
				<tr>
					<td>EO32</td>
					<td>High</td>
					<td>8</td>
					<td>3/8/2021</td>
					<td><a href="'.URLROOT.'public/pages/CaseView">Open</a></td>
				</tr>
				<tr>
					<td>EO33</td>
					<td>Low</td>
					<td>6</td>
					<td>5/6/2021</td>
					<td><a href="'.URLROOT.'public/pages/CaseView">Open</a></td>
				</tr>
				<tr>
					<td>EO34</td>
					<td>High</td>
					<td>8</td>
					<td>8/8/2021</td>
					<td><a href="'.URLROOT.'public/pages/CaseView">Open</a></td>
				</tr>
				
			</table>
		</div>
	</body>
';
    echo $text;
 
  }
}
