<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="..\style sheets\stylesheet.css">
	</head>
	<body>
		<?php 
		include "../includes/navHead.php";
		?>
		<h3 style="margin-left: 100px;">Escalations</h3>
		<div class="pending_cases">
			<div class="triangle-left"></div>
			<div class="pending">
			</div>
			<div class="pending">
			</div>
			<div class="pending">
			</div>
			<div class="triangle-right"></div>
		</div>
		<div class="body">
			<div class="recent_cases">
				<div class="table_col">
					<h3>Recent cases :</h3>
					<ol>
						<li><a>case number: </a></li>
						<li><a>case number: </a></li>
						<li><a>case number: </a></li>
						<li><a>case number: </a></li>
						<li><a>case number: </a></li>
						<li><a>case number: </a></li>
						<li><a>case number: </a></li>
						<li><a>case number: </a></li>
					</ol>
				</div>
			</div>
			<div class="last_Accessed">
				<div class="table_col">
					<h3>Last accessed case:</h3>
					<div class="table_row">
						<div class="table_col">
							<label>Case number</label>
							<label>Subject</label>
							<label>Status</label>
						</div>
						<div class="table_col">
							<label>It350_350</label>
							<label>Subject</label>
							<label>Opened</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>