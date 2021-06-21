<?php
require_once 'CaseModel.php';
class ViewCasesModel extends CaseModel
{
	public  $title = 'Cases';
	public function GetCases()
	{

		$sql = 'SELECT *from company_cases';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}
	public function GetCasesuser($id)
	{
		$sql = 'SELECT *from company_cases where case_holder_id  ="'.$id.'" ';
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

	public function GetOpenedCases()
	{
		$sql = 'SELECT *from company_cases WHERE status = "Opened" ';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}

	public function GetClosedCases()
	{
		$sql = 'SELECT *from company_cases WHERE status = "Closed" ';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}
	public function GetResolvedCases()
	{
		$sql = 'SELECT *from company_cases WHERE status = "Resolved" ';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}

}
?>