

<?php
class Caseview extends view
{

  public function output()
  {
   
   require APPROOT.'/views/inc/navUser.php';
   
      $text = <<<EOT
 
  <body>
		<form method="post" class="view_card">
			<h1>Case Details</h1>
			<h2>Case information</h2>
			<div class="table_row">
				<div class="table_col">
					<label><b>Subject</b></label>
					<label><b>Case owner</b></label>
					<label><b>Case priority</b></label>
					<label><b>Severity</b></label>
					<label><b>Description</b></label>
				</div>
				<div class="table_col">
					<label>SAP application not working</label>
					<label>Abduallah Elmaraghy</label>
					<label>IT450-630</label>
					<label>High</label>
					<label>Medium</label>
					<label></label>
				</div>
				<div class="table_col">
					<label><b>Category</b></label>
					<label><b>Parent case</b></label>
					<label><b>Status</b></label>
					<label><b>Due date</b></label>
				</div>
				<div class="table_col">
					<label>Desktop application</label>
					<label>None</label>
					<label>Opened</label>
					<label>20/5/2021</label>
				</div>
			</div>
			<h2>User information</h2>
			<div class="table_row">
				<div class="table_col">
					<label><b>Contact name</b></label>
					<label><b>Contact phone</b></label>
				</div>
				<div class="table_col">
					<label>Abduallah Elmaraghy</label>
					<label>01231234349</label>
				</div>
				<div class="table_col">
					<label><b>Contact mail</b></label>
				</div>
				<div class="table_col">
					<label >Abdu2020@gmail.com</label>
				</div>
			</div>
			<h2>Case comments</h2>
			<div class="table_row">
				<div class="table_col">
					<label><b>Created by</b></label>
				</div>
				<div class="table_col">
					<label>Abduallah Elmaraghy</label>
				</div>
				<div class="table_col">
					<label><b>Recepient</b></label>
				</div>
				<div class="table_col">
					<label>Alaa Fadel</label>
				</div>
			</div>
			<div class="table_row" style="margin-top:-50px;">
				<div class="table_col">
					<label><b>Comment</b></label>
				</div>
				<div class="table_col">
					<label>The application cannont connect to the network</label>
				</div>
			</div>
			<div class="table_row">
				<div class="table_col">
					<label>New comment</label>
					<div class="addAttachment">
						<input type="file" id="file" accept="image/*">
						<label for="file" class="attachment_label">
							Add attachment
						</label>
					</div>
				</div>
				<div class="table_col">
					<textarea></textarea>
				</div>
			</div>
			<div class="submit">
				<input type="submit" value="Add Comment">
			</div>
			<h3>Case history</h3>
			<div class="table_row">
				<div class="table_col">
					<label><b>Date & Time</b></label>
					<label>14/5/2021</label>
				</div>
				<div class="table_col">
					<label><b>User</b></label>
					<label>Abduallah Elmaraghy</label>
				</div>
				<div class="table_col">
					<label><b>Action</b></label>
					<label>Changed status from pending to opened</label>
				</div>
			</div>
		</form> 
	</body>
EOT;
    echo $text;
 
  }
}
