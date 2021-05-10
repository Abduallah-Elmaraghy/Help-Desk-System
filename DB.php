<?php 
class Database 
{
	private $servername;
	private $username;
	private $password;
	private $dbname;

	protected function ConnectDB() 
	{
		$this-> servername = "localhost";
		$this-> username = "root";
		$this-> password = "";
		$this-> dbname = "help_desk_system";
		$conn = new mysqli($this-> servername,$this-> username,$this-> password,$this-> dbname);
		
		return $conn;
	}
}
?>