<?php 
class Person 
{
	private $name;
	private $e_mail;
	private $password;
	private $phone;
	private $department_id;
	private $type_id; //rank
	private $role_id; //possetion 
	private $person_id;	

	private function __construct($name, $mail, $password, $phone, $department_id, $type_id, $role_id, $person_id) 
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
}
?>