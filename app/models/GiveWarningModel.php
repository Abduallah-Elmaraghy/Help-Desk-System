<?php
require_once 'WarningModel.php';
class GiveWarningModel extends WarningModel
{
	public function GetAdmin()
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

	public function GiveWarning()
	{
		$this->dbh->query("INSERT INTO user_warnings (`admin_id`,`warning_message`) VALUES (:id, :message)");
		$this->dbh->bind(':id', $this->getAdmin_id());
		$this->dbh->bind(':message', $this->getWarning_message());
		echo $this->dbh->execute();
	}
}
?>