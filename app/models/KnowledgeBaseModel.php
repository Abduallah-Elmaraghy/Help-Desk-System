<?php
class KnowledgeBaseModel extends model
{
	public  $title = 'knowledge_base';
	public function GetStatements()
	{
		$sql = 'SELECT * FROM knowledge_base';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
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
	public function GetType($id)
	{
		
		

			$check='SELECT * from company_cases WHERE case_number = '.$id.'';
			$fetch =  $this->dbh->query($check);
			$record = $this->dbh->single();

			$sql="SELECT * from case_types WHERE case_type_id = '$record->type_id'";
			$fetch =  $this->dbh->query($sql);
			$record = $this->dbh->single(); 
			return $record;
		
	}
	public function UploadStatement()
	{
		if(isset($_POST['submit']))
		{
			$fname = $_FILES['myfile']['name'];
			$fsize = $_FILES['myfile']['size'];
			$ftype = $_FILES['myfile']['type'];
			$data = file_get_contents($_FILES['myfile']['tmp_name']);
			$sql="INSERT INTO `knowledge_base`(`admin_id ` ,`subject` , Type_id ` ,`description` ,`problem_definition` ,`data` ,`filename` ,`filetype` ,`filesize`) VALUES ('$_SESSION[user_id]','$_POST[subject]','$_POST[TypeOfProblemId]','$_POST[description]','$_POST[problemDefinition]','$data','$fname','$ftype','$fsize')";
			$fetch =  $this->dbh->query($sql); 
			$fetch =  $this->dbh->execute(); 
		}
	}
}
?>