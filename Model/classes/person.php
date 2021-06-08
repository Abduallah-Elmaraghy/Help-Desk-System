<?php 
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

	function __construct($name, $mail, $password, $phone, $department_id, $type_id, $role_id, $person_id) 
	{
		$this->name = $name;
		$this->e_mail = $mail;
		$this->password = $password;
		$this->phone = $phone;
		$this->department_id = $department_id;
		$this->type_id = $type_id;
		$this->role_id = $role_id;
		$this->person_id = $person_id;
	}

	function login($username,$password){
		
	}
}
?>