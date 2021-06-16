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
    
    public function CaseView(){
        $viewPath = VIEWS_PATH_ADMIN . 'CaseView.php';
        require_once $viewPath;
        $indexView = new CaseView($this->getModel(), $this);
        $indexView->output();
    }
    
}