<?php       
// class Case extends Controller
// {
//     public function AddStatement()
//     {
//         $AddStatementModel = $this->getModel();
//         if ($_SERVER['REQUEST_METHOD'] == 'POST')
//         {
          
//             $AddStatementModel->setUsername(trim($_POST['username']));
//             $AddStatementModel->setEmail(trim($_POST['email']));
//             $AddStatementModel->setPassword(trim($_POST['password']));
//             $AddStatementModel->setConfirmPassword(trim($_POST['confirm_password']));
//             $AddStatementModel->setMobile(trim($_POST['phone']));
//             $AddStatementModel->setDepartment(trim(1));
//             $AddStatementModel->setType(trim(1));
//             $AddStatementModel->setPosition(trim(1));
//             $AddStatementModel->setPP(trim('s'));

            
//             if (empty($registerModel->getUsername()) ) {
//                 $registerModel->setNameErr('Please enter a name');
//             }
//             if (empty($registerModel->getEmail())) {
//                 $registerModel->setEmailErr('Please enter an email');
//             } 
//             elseif ($registerModel->emailExist($_POST['email'])) {
//                 $registerModel->setEmailErr('Email is already registered');
//             }
//             if (empty($registerModel->getPassword())) {
//                 $registerModel->setPasswordErr('Please enter a password');
//             } elseif (strlen($registerModel->getPassword()) < 4) {
//                 $registerModel->setPasswordErr('Password must contain at least 4 characters');
//             }

//             if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
//                 $registerModel->setConfirmPasswordErr('Passwords do not match');
//             }

//             if (
              
//                 empty($registerModel->getEmailErr()) &&
//                 empty($registerModel->getPasswordErr()) &&
//                 empty($registerModel->getConfirmPasswordErr())
//             ) 
//             {
                
//                 $registerModel->setPassword(password_hash($registerModel->getPassword(), PASSWORD_DEFAULT));

//                 if ($registerModel->AddUser()) 
//                 {
                    
//                     flash('register_success', 'You have registered successfully');
                  
//                     header("location:".URLROOT."public/admins/HomePage");    
//                 } else
//                 {
//                     die('Error in sign up');
//                 }
//             }
//         }
       
//         $viewPath = VIEWS_PATH_ADMIN . 'AddUser.php';
//         require_once $viewPath;
//         $view = new AddUser($this->getModel(), $this);
//         $view->output();
//     }
  
// }