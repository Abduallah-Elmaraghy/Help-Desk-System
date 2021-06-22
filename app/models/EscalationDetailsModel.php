<?php
require_once 'EscalationsModel.php';
class EscalationDetailsModel extends EscalationsModel
{
	public function EscalationView()
	{
		if(isset($_GET['id'])&&isset($_GET['admin_id']))
		{
			$id=$_GET['id'];
			$sql='SELECT * from escalations WHERE case_number = '.$id.'';
			$fetch =  $this->dbh->query($sql);
			$record = $this->dbh->single(); 
			return $record;
		}
	}
	public function GetRecepient()
	{
		if(isset($_GET['admin_id']))
		{
			$id=$_GET['admin_id'];

			$check='SELECT * from user WHERE user_id  = '.$id.'';
			$fetch =  $this->dbh->query($check);
			$record = $this->dbh->single();
			
			return $record;
		}
	}

	public function GetOwner()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];

			$check='SELECT * from escalations WHERE case_number = '.$id.'';
			$fetch =  $this->dbh->query($check);
			$record = $this->dbh->single();

			$sql="SELECT * from user WHERE user_id = '$record->user_id'";
			$fetch =  $this->dbh->query($sql);
			$record = $this->dbh->single(); 
			return $record;
		}
	}


}
?>