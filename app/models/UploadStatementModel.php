<?php
require_once 'CaseModel.php';
class UploadStatementModel extends CaseModel
{
    public  $title = 'Knowledge-Base';
    public function UploadStatement()
	{
		if(isset($_POST['submit']))
		{
			// $fname = $_FILES['myfile']['name'];
			// $fsize = $_FILES['myfile']['size'];
			// $ftype = $_FILES['myfile']['type'];
			// $data = file_get_contents($_FILES['myfile']['tmp_name']);
			$id=$_SESSION['user_id'];
			$sql="INSERT INTO `knowledge_base`(admin_id ,subject , Type_id  ,description,problem_definition ) VALUES 
			('$id','$_POST[subject]','$_POST[TypeOfProblemId]','$_POST[description]','$_POST[problemDefinition]')";
			$fetch =  $this->dbh->query($sql); 
			$exc =  $this->dbh->execute(); 
		}
	}
}