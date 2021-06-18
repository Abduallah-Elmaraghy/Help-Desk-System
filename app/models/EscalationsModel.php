<?php
class EscalationsModel extends model
{
//	public  $title = 'Admin Home Page';

	public function GetEscalations()
	{
		$sql = 'SELECT * FROM escalations';
		$fetch =  $this->dbh->query($sql);
		$record= $this->dbh->resultSet();
		//var_dump ( $record);
		return $record;
	}
	
	public function EscalationView()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];

			$sql='SELECT * from escalations WHERE case_number = '.$id.'';
			$fetch =  $this->dbh->query($sql);
			$record = $this->dbh->single(); 
			return $record;
		}
	}
	
//	public function GetOwner()
//	{
//		if(isset($_GET['id']))
//		{
//			$id=$_GET['id'];
//
//			$check='SELECT * from company_cases WHERE case_number = '.$id.'';
//			$fetch =  $this->dbh->query($check);
//			$record = $this->dbh->single();
//
//			$sql="SELECT * from user WHERE user_id = '$record->case_holder_id'";
//			$fetch =  $this->dbh->query($sql);
//			$record = $this->dbh->single(); 
//			return $record;
//		}
//	}
//	public function GetType()
//	{
//		if(isset($_GET['id']))
//		{
//			$id=$_GET['id'];
//
//			$check='SELECT * from company_cases WHERE case_number = '.$id.'';
//			$fetch =  $this->dbh->query($check);
//			$record = $this->dbh->single();
//
//			$sql="SELECT * from case_types WHERE case_type_id = '$record->type_id'";
//			$fetch =  $this->dbh->query($sql);
//			$record = $this->dbh->single(); 
//			return $record;
//		}
//	}

}
?>