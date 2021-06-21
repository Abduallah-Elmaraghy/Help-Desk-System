<?php
class NewCase extends view
{

  public function output()
  {
   
  require APPROOT.'/views/inc/navUser.php';
   
      $text = '
 
 <body>
		<form method="post" class="view_card" action="'.URLROOT . 'public/admin/NewCase'.'">
			<h1>New Case</h1>
			<div class="table_row">
				<div class="table_col">
					<label>Subject</label>
					<label>Case number</label>
					<label>Case Priority</label>
					<label>Severity</label>
				</div>
				<div class="table_col">
					<input type="text"name="subject">
					<label>IT450-650</label>
					<select name="priority">
						<option>High</option>
						<option>Extreme</option>
						<option>Low</option>
					</select>
					<select name="severity">
						<option>High</option>
						<option>Extreme</option>
						<option>Low</option>
					</select>
				</div>
				<div class="table_col">
					<label>Category</label>
					<label>Parent case</label>
					<label>Due date</label>
				</div>
				<div class="table_col">
					<select name="type">
						<option value="1">Network</option>
						<option value="2">System fail</option>
						<option value="3">Database</option>
					</select>
					<label>IT450-650</label>
					<input type="date"name="date" min="">
				</div>
			</div>
			<div class="table_row">
				<div class="table_col">
					<label>
						Description
					</label>
				</div>
				<div class="table_col">
					<textarea type="text"name="description"></textarea>
				</div>
			</div>
			<div class="table_row">
				<div class="addAttachment">
					<input type="file" id="file" accept="image/*">
					<label for="file" class="attachment_label">
						Add attachment
					</label>
				</div>			
			</div>
			<div class="submit">
				<input type="submit" name="submit">
			</div>
		</form> 
	</body>
';
    echo $text;
 
  }
}
