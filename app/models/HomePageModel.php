<?php
require_once 'CaseModel.php';
class HomePageModel extends CaseModel
{
	public  $title = 'Admin Home Page';

	public function GetCases()
	{
		$sql = 'SELECT *from company_cases';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}
	public function GetPendingCases()
	{
		$sql = 'SELECT *from company_cases WHERE status = "Pending" ';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}
	public function GetCasesAdmin()
	{
		$id=$_GET['id'];
		$check='SELECT case_number from case_recipient WHERE case_recipient_id = '.$id.'';
		$fetch = $this->dbh->query($check);
		$Cases = $this->dbh->resultSet();
		foreach( $this->model->GetPendingCases() as $case)
		{
			$case_number = $case->case_number;
			$severity = $case->severity;
			$priority = $case->priority;
			$due_date = $case->due_date;
			$status = $case->status;
		}
		$sql="SELECT * from user WHERE user_id = '$record->case_holder_id'";
		$fetch =  $this->dbh->query($sql);
		$record = $this->dbh->single(); 
		return $record;
	}

	public function GetEscalations()
	{
		$sql = 'SELECT * FROM escalations';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}
}