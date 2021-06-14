<?php 
require_once("../Model/DB/DB.php");
class Person 
{
	protected $name;
	protected $e_mail;
	protected $password;
	protected $phone;
	protected $department_id;
	protected $type_id; //rank
	protected $role_id; //possetion 
	protected $person_id;	

	function __construct( $mail, $password) 
	{
		//	$this->name = $name;
		$this->e_mail = $mail;
		$this->password = $password;
		// 	$this->phone = $phone;
		// 	$this->department_id = $department_id;
		// 	$this->type_id = $type_id;
		// 	$this->role_id = $role_id;
		// 	$this->person_id = $person_id;

	}

	function login($e_mail,$password)
	{
		$db_handle=new DB();
		$sql = "Select * FROM user where mail = '$e_mail' AND password ='$password'";
		$result = mysqli_query($db_handle->connectDB(),$sql);

		if($row = mysqli_fetch_array($result))

		{
			echo'hi';
		}

		else
		{
			echo "invalid username or password";
		}
	}

}
?>