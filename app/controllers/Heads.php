<?php
class Heads extends Controller
{

	public function HomePage()
	{

		$viewPath = VIEWS_PATH_HEAD . 'HomePage.php';
		require_once $viewPath;
		$indexView = new HomePageHead($this->getModel(), $this);
		$indexView->output(); 
	}

	public function CaseView()
	{
		$viewPath = VIEWS_PATH_HEAD . 'CaseView.php';
		require_once $viewPath;
		$indexView = new CaseViewHead($this->getModel(), $this);
		$indexView->output();
	}

	public function GiveWarning()
	{
		$InsertModel = $this->getModel();

		if (isset($_POST['submit']))
		{
			$message = $_POST['description'];
			$InsertModel->setAdmin_id(trim($user_id));
			$InsertModel->setWarning_message(trim($message));

			if (empty($InsertModel->getAdmin_id()) ) 
			{
				$InsertModel->setAdmin_id('Please enter a name');
			}

			if (empty($InsertModel->getWarning_message()) ) 
			{
				$InsertModel->setWarning_message('Please enter a name');
			}

			if ($InsertModel->GiveWarning()) 
			{

				flash('register_success', 'You have registered successfully');

				header("location:".URLROOT."public/admins/HomePage");    
			}
			else
			{
				die('Error in sign up');
			}
		}
		
		$viewPath = VIEWS_PATH_HEAD . 'Give_warning.php';
		require_once $viewPath;
		$indexView = new GiveWarningHead($this->getModel(), $this);
		$indexView->output();
	}

	public function Escalations()
	{
		$viewPath = VIEWS_PATH_HEAD . 'Escalations.php';
		require_once $viewPath;
		$indexView = new Escalations($this->getModel(), $this);
		$indexView->output();
	}

	public function EscalationDetails()
	{
		$viewPath = VIEWS_PATH_HEAD . 'Escalation_details.php';
		require_once $viewPath;
		$indexView = new EscalationDetails($this->getModel(), $this);
		$indexView->output();
	}

	public function ViewCases()
	{
		$viewPath = VIEWS_PATH_HEAD . 'ViewCases.php';
		require_once $viewPath;
		$indexView = new ViewCasesHead($this->getModel(), $this);
		$indexView->output();
	}
	public function ViewAdmins_Head()
	{
		$viewPath = VIEWS_PATH_HEAD . 'ViewAdmins.php';
		require_once $viewPath;
		$indexView = new CaseView($this->getModel(), $this);
		$indexView->output();
	}

}