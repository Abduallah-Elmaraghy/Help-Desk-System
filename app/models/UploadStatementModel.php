<?php
require_once 'CaseModel.php';
class UploadStatementModel extends CaseModel
{
    public  $title = 'Knowledge-Base';
    public function UploadStatement()
	{
		if(isset($_POST['submit']))
		{
			$sql="INSERT INTO `knowledge_base`(`admin_id ` ,`subject` , Type_id ` ,`description` ,`problem_definition`
			 ,`data` ,`filename` ,`filetype` ,`filesize`) VALUES ('1','$_POST[subject]','$_POST[TypeOfProblemId]','$_POST[description]','$_POST[problemDefinition]','$_POST[department]','1','1','s')";
			$fetch =  $this->dbh->query($sql); 
			$fetch =  $this->dbh->execute(); 
		}
	}
}