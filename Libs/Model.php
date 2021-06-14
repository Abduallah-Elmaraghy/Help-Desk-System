<?php
session_start();
require_once("Database.php");

abstract class Model
{
    protected $db;
    public function connect()
	{
        if(null === $this->db)
		{
            $this->db = new Dbh();
        }
        return $this->db;
    }
}
?>