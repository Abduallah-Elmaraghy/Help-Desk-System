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
			
		}

		$viewPath = VIEWS_PATH_USER . 'NewCase.php';
		require_once $viewPath;
		$view = new NewCase($this->getModel(), $this);
		$view->output();
	}

	


}
?>