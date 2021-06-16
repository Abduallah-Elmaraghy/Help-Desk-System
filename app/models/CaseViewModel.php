<?php
require_once 'CaseModel.php';
class CaseViewModel extends CaseModel
{
    public  $title = 'Admin Home Page';

    public function GetCases(){
        $sql = 'SELECT *from company_cases';
        $fetch =  $this->dbh->query($sql);
        $record= $this->dbh->resultSet();
        //var_dump ( $record);
        return $record;
    }
    public function CaseView(){
        if(isset($_GET['id'])){
    $id=$_GET['id'];

    //   $fetch =  $this->dbh->query('select from company_cases where case_number ='$id'');
    //   $record= $this->dbh->single();
    //   var_dump( $record);
    //   return $record;
echo $id;
      $sql='SELECT * from company_cases WHERE case_number = '.$id.'';
       $fetch =  $this->dbh->query($sql);
      //  $this->dbh->bind(':mail', $this->email);  
        //$this->dbh->bind(':pass', $this->password);
        
        $record = $this->dbh->single(); 
    
        return $record;
        }
    }
    }