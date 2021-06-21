<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
	public  $title = 'User Login Page';

	public function login()
	{
		$sql='SELECT * from user WHERE mail = :mail and password = :pass ';
		$fetch =  $this->dbh->query($sql);
		$this->dbh->bind(':mail', $this->email);  
		$this->dbh->bind(':pass', $this->password);

		$record = $this->dbh->single(); 


		if ($this->password == $_POST['pass']) {
			return $record;
		} else {
           
			echo "incorreect";
		}

	}

}
