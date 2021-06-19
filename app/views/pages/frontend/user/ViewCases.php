

<?php
class ViewCases extends view
{

  public function output()
  {
   
  require APPROOT.'/views/inc/navUser.php';
   
      $text = '
 
	<body>
		<?php include "../../includes/navUSer.php";?>
		<h2 style="margin-left: 100px;">Filters</h2>
		<form method="post" action='.URLROOT.'public/pages/CaseView>
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
		<div class="row">
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="../images/recent%20cases.png">
					<div class="card_body">
						<h4>Case number :</h4>
						<h4>Status :</h4>
						<input type="submit" value="View">
					</div>
				</div>
			</div>
		</div>
	</body>
';
    echo $text;
 
  }
}
