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
		$viewPath = VIEWS_PATH_HEAD . 'Give_warning.php';
		require_once $viewPath;
		$indexView = new GiveWarningHead($this->getModel(), $this);
		$indexView->output();
	}

	public function Escalations()
	{
		$viewPath = VIEWS_PATH_HEAD . 'Escalations.php';
		require_once $viewPath;
		$indexView = new EscalationsHead($this->getModel(), $this);
		$indexView->output();
	}
	
	public function ViewEscalations()
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