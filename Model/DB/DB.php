<?php
class DB {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "help_disk_system";
	public $conn;

	function __construct() {
		$this->conn = $this->connectDB();
	}

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
}
?>