<?php 
class admin extends Controller
{
    
	public function NewCase()
	{
		$registerModel = $this->getModel();
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
            $casenumber=rand(10000,100000);


			$registerModel->setCaseNumber(trim($casenumber));
			$registerModel->setSubject(trim($_POST['subject']));
			$registerModel->setCaseHolderId(trim(1));
			$registerModel->setCaseType(trim($_POST['type']));
			$registerModel->setStatus(trim('New'));
			$registerModel->setPriority(trim($_POST['priority']));
			$registerModel->setSeverity(trim(2));
			$registerModel->setDescription(trim($_POST['description']));
			$registerModel->setDue_date(trim($_POST['date']));
			

			// if (empty($registerModel->getUsername()) ) {
			// 	$registerModel->setNameErr('Please enter a name');
			// }

			// if (empty($registerModel->getMobile())) {
			// 	$registerModel->setMobileErr('Please enter a mobile');
			// }
			// elseif (strlen($registerModel->getMobile()) != 11){
			// 	$registerModel->setMobileErr('Invalid Mobile number');
			// }
			// if (empty($registerModel->getEmail())) {
			// 	$registerModel->setEmailErr('Please enter an email');
			// } 
			// elseif ($registerModel->emailExist($_POST['email'])) {
			// 	$registerModel->setEmailErr('Email is already registered');
			// 	echo'<script> alert("Already registered Email")</script>';
			// }
			// if (empty($registerModel->getPassword())) {
			// 	$registerModel->setPasswordErr('Please enter a password');
			// } elseif (strlen($registerModel->getPassword()) < 4) {
			// 	$registerModel->setPasswordErr('Password must contain at least 4 characters');
			// }

			// if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
			// 	$registerModel->setConfirmPasswordErr('Passwords do not match');
			// }

			// if (

			// 	empty($registerModel->getEmailErr()) &&
			// 	empty($registerModel->getPasswordErr()) &&
			// 	empty($registerModel->getConfirmPasswordErr())
			// 	&&empty($registerModel->getMobileErr())
			// ) 
			// {

			// 	$registerModel->setPassword(password_hash($registerModel->getPassword(), PASSWORD_DEFAULT));

			// 	if ($registerModel->AddUser()) 
			// 	{

			// 		flash('register_success', 'You have registered successfully');

			// 		header("location:".URLROOT."public/admins/HomePage");    
			// 	} else
			// 	{
			// 		die('Error in sign up');
			// 	}
			// }
		}

		$viewPath = VIEWS_PATH_USER . 'NewCase.php';
		require_once $viewPath;
		$view = new NewCase($this->getModel(), $this);
		$view->output();
	}

	


}
?>