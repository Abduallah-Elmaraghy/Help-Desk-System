<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{
    public  $title = 'User Registration Page';
    protected $name;
    protected $nameErr;
    protected $confirmPassword;
    protected $confirmPasswordErr;
    protected $Mobile;
    protected $Mailerr;
    protected $profilePicture;
    protected $Position;
    protected $User_id;
    protected $Type;
    protected $Department;
    


    public function __construct()
    {
        parent::__construct();
        
        $this->$name = "";
        $this->$nameErr = "";
        $this->$confirmPassword = "";
        $this->$confirmPasswordErr = "";
        $this->$Mobile = "";
        $this->$Mailerr = "";
        $this->$profilePicture = "";
        $this->$Position = "";
        $this->$User_id = "";
        $this->$Type = "";
        $this->$Department = "";
    

        
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    } 

    public function getNameErr()
    {
        return $this->nameErr;
    }

    public function setNameErr($nameErr)
    {
        $this->nameErr = $nameErr;
    }

    
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }
    

    public function getConfirmPasswordErr()
    {
        return $this->confirmPasswordErr;
    }
    public function setConfirmPasswordErr($confirmPasswordErr)
    {
        $this->confirmPasswordErr = $confirmPasswordErr;
    }
    
  

      public function getMobile()
    {
        return $this->Mobile;
    }
    public function setMobile($Mobile)
    {
        $this->Mobile= $Mobile;
    }
    
    
    
  public function getMailerr()
    {
        return $this->Mailerr;
    }
    public function setMailerr($Mailerr)
    {
        $this->Mailerr = $Mailerr;
    }
    
    
  public function getprofilePicture()
    {
        return $this->profilePicture;
    }
    public function setprofilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
    }
    
    
  public function getPosition()
    {
        return $this->Position;
    }
    public function setPosition($Position)
    {
        $this->Position = $Position;
    }
    
  public function getType()
    {
        return $this->Type;
    }
    public function setType($Type)
    {
        $this->Type = $Type;
    }
  public function getDepartment()
    {
        return $this->Department;
    }
    public function setDepartment($Department)
    {
        $this->Department = $Department;
    }
  public function getemail()
    {
        return $this->email;
    }
    public function setemail($email)
    {
        $this->email = $email;
    }
    
    
    public function getUser_id ()
    {
        return $this->User_id ;
    }
    
    

    
    
    public function signup()
    {
        $this->dbh->query("INSERT INTO user ( `username`, `mail`, `password`, `mobile`, `department_id`, `type_id`, `position_id`, `profile_picture_path`) VALUES(:uname, :email, :pass,:mob , :pp , :p , :dep , :T)");
        $this->dbh->bind(':uname',$this->$name);
        $this->dbh->bind(':email',$this->email);
        $this->dbh->bind(':pass', $this->$password);
        $this->dbh->bind(':mob', $this->$Mobile);
        $this->dbh->bind(':pp',  $this->$profilePicture);
        $this->dbh->bind(':p', $this->$Position);
        $this->dbh->bind(':dep', $this->$Department);
        $this->dbh->bind(':T', $this->$Type);

        return $this->dbh->execute();
    }
}
