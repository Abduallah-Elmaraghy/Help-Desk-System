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
			$registerModel->setDepartment(trim($_POST['department']));
			$registerModel->setType(trim(2));
			$registerModel->setPosition(trim($_POST['Role']));

			if (empty($registerModel->getUsername()) ) {
				$registerModel->setNameErr('Please enter a name');
				echo'<script> alert("Please Enter A valid password")</script>';
				
			}

			if (empty($registerModel->getMobile())) {
				$registerModel->setMobileErr('Please enter a mobile');
				echo'<script> alert("Please Enter a phone number")</script>';
				
			}
			elseif (strlen($registerModel->getMobile()) != 11){
				$registerModel->setMobileErr('Invalid Mobile number');
				echo'<script> alert("Please Enter A valid phone number")</script>';

			}
			if (empty($registerModel->getEmail())) {
				$registerModel->setEmailErr('Please enter an email');
			} 
			elseif ($registerModel->emailExist($_POST['email'])) {
				$registerModel->setEmailErr('Email is already registered');
				echo'<script> alert("Already registered Email")</script>';
			}
			if (empty($registerModel->getPassword())) {
				$registerModel->setPasswordErr('Please enter a password');
				echo'<script> alert("Please Enter A valid password")</script>';
				
			} elseif (strlen($registerModel->getPassword()) < 4) {
				$registerModel->setPasswordErr('Password must contain at least 4 characters');
				echo'<script> alert("Please Enter A valid password at least 4 numbers")</script>';

			}

			if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
				$registerModel->setConfirmPasswordErr('Passwords do not match');
				echo'<script> alert("Passwords do not match")</script>';
				
					}

			if (

				empty($registerModel->getEmailErr()) &&
				empty($registerModel->getPasswordErr()) &&
				empty($registerModel->getConfirmPasswordErr())
				&&empty($registerModel->getMobileErr())
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


			if(
				empty($userModel->getEmailErr()) &&
				empty($userModel->getPasswordErr())
			){

				$loggedUser = $userModel->login();
                
				if ($loggedUser != false) 
				{
					if($userModel->login()->type_id==1)
					{
						header("location:".URLROOT."public/admins/HomePage");    
					}
					else if($userModel->login()->type_id==2)
					{
						$this->createUserSession($loggedUser);
                        header("location:".URLROOT."public/pages/HomePage");    

					}
					else if($userModel->login()->type_id==3)
					{
						  
                       header("location:".URLROOT."public/Heads/HomePage");    
					}                 
					
                    
<<<<<<< Updated upstream
                
				}
                else
				{
					header("location:".URLROOT."public");    
				}    
=======
                  
                }
				else
				{
					header("location:".URLROOT."public/Pages/Login" );
				}
              
                    
>>>>>>> Stashed changes
               
                }
                
            
		}


	}

	public function createUserSession($user)
	{
        
	
		$_SESSION['user_id'] = $user->user_id;
        $_SESSION['user_name'] = $user->username;

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