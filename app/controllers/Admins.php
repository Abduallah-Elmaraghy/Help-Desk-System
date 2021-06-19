<?php
class Admins extends Controller
{
  
    public function HomePage()
    {
        $viewPath = VIEWS_PATH_ADMIN . 'HomePage.php';
        require_once $viewPath;
        $indexView = new HomePage($this->getModel(), $this);
        $indexView->output();
    }
    
    public function CaseView()
	{
        $viewPath = VIEWS_PATH_ADMIN . 'CaseView.php';
        require_once $viewPath;
        $indexView = new CaseView($this->getModel(), $this);
        $indexView->output();
    }
    public function KnowledgeBase(){
        $viewPath = VIEWS_PATH_ADMIN . 'KnowledgeBase.php';
        require_once $viewPath;
        $indexView = new KnowledgeBase($this->getModel(), $this);
        $indexView->output();
    }
    public function AddUser(){
        $viewPath = VIEWS_PATH_ADMIN . 'AddUser.php';
        require_once $viewPath;
        $indexView = new AddUser($this->getModel(), $this);
        $indexView->output();
    }
    public function ViewCases(){
        $viewPath = VIEWS_PATH_ADMIN . 'ViewCases.php';
        require_once $viewPath;
        $indexView = new ViewCases($this->getModel(), $this);
        $indexView->output();
    }    
    public function UploadStatement(){
        $viewPath = VIEWS_PATH_ADMIN . 'UploadStatement.php';
        require_once $viewPath;
        $indexView = new UploadStatement($this->getModel(), $this);
        $indexView->output();
    }
    public function ViewStatement(){
        $viewPath = VIEWS_PATH_ADMIN . 'ViewStatement.php';
        require_once $viewPath;
        $indexView = new ViewStatement($this->getModel(), $this);
        $indexView->output();
    }
}