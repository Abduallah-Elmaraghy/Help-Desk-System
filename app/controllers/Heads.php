<?php
class Heads extends Controller
{

	public function HomePage()
	{
		$viewPath = VIEWS_PATH_HEAD . 'HomepageHead.php';
		require_once $viewPath;
		$indexView = new HomepageHead($this->getModel(), $this);
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
		$indexView = new CaseViewHead($this->getModel(), $this);
		$indexView->output();
	}

	public function ViewEscalations()
	{
		$viewPath = VIEWS_PATH_HEAD . 'Escalations.php';
		require_once $viewPath;
		$indexView = new CaseViewHead($this->getModel(), $this);
		$indexView->output();
	}
	
	public function ViewAdmins()
	{
		$viewPath = VIEWS_PATH_HEAD . 'ViewAdmins.php';
		require_once $viewPath;
		$indexView = new CaseViewHead($this->getModel(), $this);
		$indexView->output();
	}
	
	public function ViewCases()
	{
		$viewPath = VIEWS_PATH_HEAD . 'ViewCases.php';
		require_once $viewPath;
		$indexView = new CaseViewHead($this->getModel(), $this);
		$indexView->output();
	}
}