<?php
require_once 'CaseModel.php';
class ViewCasesModel extends CaseModel
{
	public  $title = 'Cases';
	public function AddUser()
	{
		if(isset($_POST['submit']))
		{
			$sql="INSERT INTO `user`(`username`, `mail`, `password`, `mobile`, `department_id`, `type_id`, `position_id`,profile_picture_path) VALUES 
        ('$_POST[username]','$_POST[email]','$_POST[password]','$_POST[phone]','$_POST[department]','1','1','s')";
			$fetch =  $this->dbh->query($sql); 
			$fetch =  $this->dbh->execute(); 
		}
	}
}
?>