<?php       
class Users extends Controller
{
    public function AddUser()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
          
            $registerModel->setUsername(trim($_POST['username']));
            $registerModel->setEmail(trim($_POST['email']));
            $registerModel->setPassword(trim($_POST['password']));
            $registerModel->setConfirmPassword(trim($_POST['confirm_password']));
            $registerModel->setMobile(trim($_POST['phone']));
         $registerModel->setDepartment(trim(1));
            $registerModel->setType(trim(1));
            $registerModel->setPosition(trim(1));
            $registerModel->setPP(trim('s'));

            
            if (empty($registerModel->getUsername()) ) {
                $registerModel->setNameErr('Please enter a name');
            }
            if (empty($registerModel->getEmail())) {
                $registerModel->setEmailErr('Please enter an email');
            } 
            elseif ($registerModel->emailExist($_POST['email'])) {
                $registerModel->setEmailErr('Email is already registered');
            }
            if (empty($registerModel->getPassword())) {
                $registerModel->setPasswordErr('Please enter a password');
            } elseif (strlen($registerModel->getPassword()) < 4) {
                $registerModel->setPasswordErr('Password must contain at least 4 characters');
            }

            if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
                $registerModel->setConfirmPasswordErr('Passwords do not match');
            }

            if (
              
                empty($registerModel->getEmailErr()) &&
                empty($registerModel->getPasswordErr()) &&
                empty($registerModel->getConfirmPasswordErr())
            ) 
            {
                
                $registerModel->setPassword(password_hash($registerModel->getPassword(), PASSWORD_DEFAULT));

                if ($registerModel->AddUser()) 
                {
                    
                    flash('register_success', 'You have registered successfully');
                  
                    header("location:".URLROOT."public/admins/HomePage");    
                } else
                {
                    die('Error in sign up');
                }
            }
        }
       
        $viewPath = VIEWS_PATH_ADMIN . 'AddUser.php';
        require_once $viewPath;
        $view = new AddUser($this->getModel(), $this);
        $view->output();
    }
    public function login()
    {
        $userModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        { 
            
            $userModel->setEmail(trim($_POST['mail']));
            $userModel->setPassword(trim($_POST['pass']));
   
            
            if (empty($userModel->getEmail())) {
                $userModel->setEmailErr('Please enter an email');
            } elseif (!($userModel->emailExist($_POST['mail']))) {
                $userModel->setEmailErr('No user found');
            }

            if (empty($userModel->getPassword())) {
                $userModel->setPasswordErr('Please enter a password');
            } elseif (strlen($userModel->getPassword()) < 4) {
                $userModel->setPasswordErr('Password must contain at least 4 characters');
           
            }

          
            if (
                empty($userModel->getEmailErr()) &&
                empty($userModel->getPasswordErr())
            ) {
                
                $loggedUser = $userModel->login();
                if ($loggedUser) 
                {
                    if($userModel->login()->type_id==1){
                        
                    header("location:".URLROOT."public/admins/HomePage");    
                    }
                     else if($userModel->login()->type_id==2){
                        $viewPath = VIEWS_PATH_USER . 'HomePage_User.php';
                        require_once $viewPath;
                        $indexView = new Homepageadmin($this->getModel(), $this);
                        $indexView->output();
                        }
             if($userModel->login()->type_id==3){
                $viewPath = VIEWS_PATH_HEAD . 'HomepageHead.php';
                require_once $viewPath;
                $indexView = new HomepageHead($this->getModel(), $this);
                $indexView->output();   }                 

            $_SESSION['name']="mohamed";
            }
            
            else {
                    die('EROORRR');
                }
            }
        }
       
      
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;
      
        redirect('pages');
    }

    public function logout()
    {
        echo 'logout called';
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('Login');
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }
  
}