<?php
class KnowledgeBaseModel extends model
{
	public  $title = 'knowledge_base';

	public function GetStatements()
	{
		$sql = 'SELECT * FROM knowledge_base';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}

	public function ViewStatement()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$sql='SELECT * from knowledge_base WHERE statement_id  = '.$id.'';
			$fetch =  $this->dbh->query($sql);
			$record = $this->dbh->single(); 
			return $record;
		}
	}
	
	public function UploadStatement()
	{
		if(isset($_POST['submit']))
		{
			$sql="INSERT INTO `knowledge_base`(`admin_id ` ,`subject` , Type_id ` ,`description` ,`problem_definition` ,`data` ,`filename` ,`filetype` ,`filesize`) VALUES ('$_SESSION[user_id]','$_POST[subject]','$_POST[TypeOfProblemId]','$_POST[description]','$_POST[problemDefinition]','$_POST[department]','1','1','s')";
			$fetch =  $this->dbh->query($sql); 
			$fetch =  $this->dbh->execute(); 
		}
	}
}