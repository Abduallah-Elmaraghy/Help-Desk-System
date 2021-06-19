<?php
class ViewStatementModel extends model
{
	public  $title = 'knowledge_base';

    public function StatementView()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];

			$sql='SELECT * from knowledge_base WHERE statement_id = '.$id.'';
			$fetch =  $this->dbh->query($sql);
			$record = $this->dbh->single(); 
			return $record;
		}
	}
	public function GetType($id){
        $sql='SELECT * from case_types where case_type_id ='.$id.' ';
        $fetch =  $this->dbh->query($sql);
        $record= $this->dbh->single();
        return $record;
    }
}