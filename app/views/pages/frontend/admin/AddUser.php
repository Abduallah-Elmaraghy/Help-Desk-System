<?php
class AddUser extends view
{

  public function output()
  {

$action = URLROOT . 'public/users/AddUser';
   
require APPROOT.'/views/inc/navAdmin.php';

$text = <<<EOT
 
<html>
<header>
	<title>New Case</title>
	<link rel="stylesheet" href="..\..\style sheets\stylesheet.css">
</header>
<body>
	<?php
	include "../../includes/navAdmin.php";
	?>
	<form method="post" class="view_card"action='$action'>
		<h1>Add Employee</h1>
		<div class="table_row">
			<div class="table_col">
				<label>Username</label>
				<label>Email</label>
				<label>Phone</label>
				<label>Gender</label>
			</div>
			<div class="table_col">
				<input type="text" name="username" required>
				<input type="email" name="email" required>
				<input type="text" name="phone" required>
				<select name="gender">
					<option>Male</option>
					<option>Femal</option>
				</select>
			</div>
			<div class="table_col">
				<label>Password</label>
				<label>Confirm Password</label>
				<label>Role</label>
				<label>Department</label>
			</div>
			<div class="table_col">
				<input type="password"name="password"required>
				<input type="password"name="confirm_password"required>
				<select name="Role">
					<option value='1'>General Manager</option>
					<option value='2'>CEO</option>
				</select>
				<select name="department">
					<option value="1">IT</option>
					<option value ="2">Media</option>
					<option value ="3">HR</option>
					<option value ="4">Accounting</option>
				</select>
			</div>
		</div>
		<div class="submit">
			<input type="submit" name="submit">
		</div>
	</form> 
</body>
</html>
EOT;
    echo $text;
  }

}
