<?php 
class DB 
{
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "help_desk_system";
	public $conn;

	function __construct() 
	{
		$this->conn = $this->connectDB();
	}

	function connectDB() 
	{
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
    
     function insertrecords($dep)
    {
        $con =  $this->connectDB();
        mysqli_query($con,"insert into user_departments (department_name) values ('$dep')"  ) or die (mysqli_error($con));
        echo "done department.";
    }
}
?>