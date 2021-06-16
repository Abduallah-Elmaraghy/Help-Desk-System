<?php
class CaseModel extends model
{
    protected $CaseNumber;
    protected $Severity;

    protected $Priority;

    
    
    
        
    
    public function __construct()
    {
        parent::__construct();
        $this->CaseNumber    = '';
        $this->Severity = '';
        $this->Pirority = '';
      
    }

    public function getCaseNumber()
    {
        return $this->CaseNumber;
    }
    public function setCaseNumber($CaseNumber)
    {
        $this->CaseNumber = $CaseNumber;
    }

    public function getSeverity()
    {
        return $this->Severity;
    }
    public function setSeverity($Severity)
    {
        $this->Severity = $Severity;
    }

    public function getPriority()
    {
        return $this->Priority;
    }
    public function setPriority($Priority)
    {
        $this->Priority = $Priority;
    }
    
    // //try
    // public function getType()
    // {
    //     return $this->type;
    // }
    
    
    // //
  

    

    // public function getEmailErr()
    // {
    //     return $this->emailErr;
    // }
    // public function setEmailErr($emailErr)
    // {
    //     $this->emailErr = $emailErr;
    // }

    // public function getPasswordErr()
    // {
    //     return $this->passwordErr;
    // }
    // public function setPasswordErr($passwordErr)
    // {
    //     $this->passwordErr = $passwordErr;
    // }

    // public function findUserByEmail($email)
    // {
    //     $this->dbh->query('select * from user where mail= :email');
    //     $this->dbh->bind(':email', $email);

    //     $userRecord = $this->dbh->single();
    //     return $this->dbh->rowCount();
    // }

    // public function emailExist($email)
    // {
    //     return $this->findUserByEmail($email) > 0;
    // }
}