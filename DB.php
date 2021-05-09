<?php 
class Database 
{
	private static $instance = null;
	private $conn;

	private function __construct() 
	{
		$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
		$this->conn = new PDO($dsn, DB_USER, DB_PASS);
	}
	
	private function __clone() 
	{
		return false;
	}
	
	private function __wakeup() 
	{
		return false;
	}
	
	public static function getInstance() 
	{
		if(!self::$instance) 
		{
			self::$instance = new Database();
		}
		return self::$instance;
	}
	
	public function getConnection() 
	{
		return $this->conn;
	}
}
?>