<?php
require_once 'UserModel.php';
class AddUserModel extends UserModel
{
	public  $title = 'Add user Page';

	public function AddUser()
	{
		$this->dbh->query("INSERT INTO `user`( `username`, `mail`, `password`, `mobile`, `department_id`, `type_id`, `position_id`,
         `profile_picture_path`) VALUES (:uname, :email, :pass,:mobile,:department,:type,:position,:pp)");
		$this->dbh->bind(':uname', $this->username);
		$this->dbh->bind(':email', $this->email);
		$this->dbh->bind(':pass', $this->password);
		$this->dbh->bind(':mobile', $this->mobile);
		$this->dbh->bind(':department', $this->department);
		$this->dbh->bind(':type', $this->type);
		$this->dbh->bind(':position', $this->position);
		$this->dbh->bind(':pp', $this->pp);

		return $this->dbh->execute();
	}
}
