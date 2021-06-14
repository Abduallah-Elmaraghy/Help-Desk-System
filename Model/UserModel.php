<?php 
include "person.php";
include "../Model/DB/DBconnect.php";
class User extends Person
{
	public function addCase($User_id,$Case_number,$Subject,$Priority,$Severity,$Category,$Parent_case
							,$Duedate,$Description)
	{
		$db_handle = new DB();
		$sql = "INSERT INTO company_cases (owner_id, casenumber, subject, priority, severity, type_id , due_date, description) VALUES ('$User_id', '$Case_number', '$Subject', '$Priority', '$Severity', '$Category', '$Duedate', '$Description');";
		//		mysqli_query($db_handle->connectDB(),$sql);
	}
}
?>