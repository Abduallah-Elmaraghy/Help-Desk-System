 <?php
require_once 'CaseModel.php';
class HomePageModel extends CaseModel
{
    public  $title = 'Admin Home Page';

    public function GetCases(){
        $sql = 'SELECT *from company_cases';
        $fetch =  $this->dbh->query($sql);
        $record= $this->dbh->resultSet();
        //var_dump ( $record);
        return $record;
    }
        
    }

