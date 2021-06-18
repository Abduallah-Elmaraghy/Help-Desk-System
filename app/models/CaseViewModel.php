<?php
require_once 'CaseModel.php';
class CaseViewModel extends CaseModel
{

	public function GetCases()
	{
		$sql = 'SELECT *from company_cases';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}
	public function CaseView()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];

			$sql='SELECT * from company_cases WHERE case_number = '.$id.'';
			$fetch =  $this->dbh->query($sql);
			$record = $this->dbh->single(); 
			return $record;
		}
	}
	public function GetOwner()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];

			$check='SELECT * from company_cases WHERE case_number = '.$id.'';
			$fetch =  $this->dbh->query($check);
			$record = $this->dbh->single();

			$sql="SELECT * from user WHERE user_id = '$record->case_holder_id'";
			$fetch =  $this->dbh->query($sql);
			$record = $this->dbh->single(); 
			return $record;
		}
	}
	public function GetType()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];

			$check='SELECT * from company_cases WHERE case_number = '.$id.'';
			$fetch =  $this->dbh->query($check);
			$record = $this->dbh->single();

			$sql="SELECT * from case_types WHERE case_type_id = '$record->type_id'";
			$fetch =  $this->dbh->query($sql);
			$record = $this->dbh->single(); 
			return $record;
		}
	}

}