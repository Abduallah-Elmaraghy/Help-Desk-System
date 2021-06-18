<?php
class Heads extends Controller
{

	public function HomePage_Head()
	{
		$viewPath = VIEWS_PATH_HEAD . 'HomePage.php';
		require_once $viewPath;
		$indexView = new HomePage($this->getModel(), $this);
		$indexView->output(); 
	}

	public function CaseView_Head()
	{
		$viewPath = VIEWS_PATH_HEAD . 'CaseView.php';
		require_once $viewPath;
		$indexView = new CaseView($this->getModel(), $this);
		$indexView->output();
	}

	public function GiveWarning_Head()
	{
		$viewPath = VIEWS_PATH_HEAD . 'Give_warning.php';
		require_once $viewPath;
		$indexView = new GiveWarning($this->getModel(), $this);
		$indexView->output();
	}

	public function ViewEscalations_Head()
	{
		$viewPath = VIEWS_PATH_HEAD . 'Escalations.php';
		require_once $viewPath;
		$indexView = new Escalations($this->getModel(), $this);
		$indexView->output();
	}
	
	public function ViewCases_Head()
	{
		$viewPath = VIEWS_PATH_HEAD . 'ViewCases.php';
		require_once $viewPath;
		$indexView = new ViewCases($this->getModel(), $this);
		$indexView->output();
	}
//	public function ViewAdmins_Head()
//	{
//		$viewPath = VIEWS_PATH_HEAD . 'ViewAdmins.php';
//		require_once $viewPath;
//		$indexView = new CaseView($this->getModel(), $this);
//		$indexView->output();
//	}

}