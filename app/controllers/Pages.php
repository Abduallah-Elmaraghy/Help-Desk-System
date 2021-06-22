<?php
class Pages extends Controller
{

    public function Login()
    {
        $viewPath = VIEWS_PATH . 'Login.php';
        require_once $viewPath;
        $Loginview = new Login($this->getModel(), $this);
        $Loginview->output();
    }	
    //user
	public function HomePage()
	{
		$viewPath = VIEWS_PATH_USER . 'Homepage.php';
		require_once $viewPath;
		$indexView = new HomePageUser($this->getModel(), $this);
		$indexView->output();
	}
    public function CaseView()
	{
		$viewPath = VIEWS_PATH_USER . 'caseview.php';
		require_once $viewPath;
		$indexView = new Caseview($this->getModel(), $this);
		$indexView->output();
	}
    public function KnowledgeBase()
	{
		$viewPath = VIEWS_PATH_USER . 'KnowledgeBase.php';
		require_once $viewPath;
		$indexView = new KnowledgeBase($this->getModel(), $this);
		$indexView->output();
	}
    public function ViewCases()
	{
		$viewPath = VIEWS_PATH_USER . 'ViewCases.php';
		require_once $viewPath;
		$indexView = new ViewCases($this->getModel(), $this);
		$indexView->output();
	}
    public function NewCase()
	{
		$viewPath = VIEWS_PATH_USER . 'NewCase.php';
		require_once $viewPath;
		$indexView = new NewCase($this->getModel(), $this);
		$indexView->output();
	}
    public function EscalateCase()
	{
		$viewPath = VIEWS_PATH_USER . 'EscalateCase.php';
		require_once $viewPath;
		$indexView = new EscalateCase($this->getModel(), $this);
		$indexView->output();
	}
    public function ViewStatement()
	{
		 $viewPath = VIEWS_PATH_USER . 'ViewStatement.php';
		 require_once $viewPath;
		 $indexView = new ViewStatement($this->getModel(), $this);
		 $indexView->output();
	}
}
