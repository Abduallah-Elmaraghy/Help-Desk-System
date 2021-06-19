<?php
require_once 'CaseModel.php';
class ViewCasesModel extends CaseModel
{
	public  $title = 'Cases';
	public function GetCases()
	{
		
        $sql = 'SELECT *from company_cases';
        $fetch =  $this->dbh->query($sql);
        $record= $this->dbh->resultSet();
        //var_dump ( $record);
        return $record;
	}
}
?>