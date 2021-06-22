<?php
class UserModel extends model
{
    protected $id;
    protected $email;
    protected $username;
    protected $password;
    protected $confirm_password;
    protected $mobile;
    protected $department;
    protected $position;
    //try
    protected $type;
	protected $emailErr;
    protected $passwordErr;
    protected $confirm_passwordErr;
    protected $pp;
    protected $mobileErr;

    public function __construct()
    {
        parent::__construct();
        $this->id = '';
        $this->email    = '';
        $this->password = '';
        $this->mobileErr = '';
        $this->username = '';        
        $this->confirm_password = '';       
        $this->mobile = '';     
        $this->department = '';       
        $this->position = '';       
        $this->type = '';
        $this->emailErr    = '';
        $this->passwordErr = '';
        $this->confirm_passwordErr = '';
    }
    public function getid()
    {
        return $this->email;
    }
    
	public function setid($id)
    {
        $this->id = $id;
    }
    public function getEmail()
    {
        return $this->email;
    }
    
	public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    
	public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getUsername()
    {
        return $this->username;
    }
    
	public function setUsername($username)
    {
        $this->username = $username;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }

    public function getDepartment()
    {
        return $this->department;
    }
    
	public function setDepartment($department)
    {
        $this->department = $department;
    }
    public function getMobile()
    {
        return $this->mobile;
    }
    
	public function setPP($pp)
    {
        $this->pp = $pp;
    }   public function getPP()
    {
        return $this->pp;
    }
    
	public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }
   
    public function getConfirmPassword()
    {
        return $this->confirm_password;
    }
    
	public function setConfirmPassword($confirm_password)
    {
        $this->confirm_password = $confirm_password;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    //try 
    
    
    //
   
    public function getEmailErr()
    {
        return $this->emailErr;
    }
    
	public function setEmailErr($emailErr)
    {
        $this->emailErr = $emailErr;
    }

    public function getPasswordErr()
    {
        return $this->passwordErr;
    }
    
	public function setPasswordErr($passwordErr)
    {
        $this->passwordErr = $passwordErr;
    }
    public function getConfirmPasswordErr()
    {
        return $this->confirm_passwordErr;
    }
    
	public function setConfirmPasswordErr($confirm_passwordErr)
    {
        $this->confirm_passwordErr = $confirm_passwordErr;
    }


    public function setMobileErr($mobileErr){
        $this->mobileErr=$mobileErr;
    }
    public function getMobileErr(){
        return $this->mobileErr;
    }
    
    public function findUserByEmail($email)
    {
        $this->dbh->query('select * from user where mail= :email');
        $this->dbh->bind(':email', $email);
        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function emailExist($email)
    {
        return $this->findUserByEmail($email) > 0;
    }
    public function findUserByUsername($username)
    {
        $this->dbh->query('select * from user where username= :username');
        $this->dbh->bind(':username', $username);
        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }
    
    public function usernameExist($username)
    {
        return $this->findUserByUsername($username) > 0;
    }

}