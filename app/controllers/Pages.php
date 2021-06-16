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
     public function HomePage_Admin()
    {
        $viewPath = VIEWS_PATH_ADMIN . 'HomePage_Admin.php';
        require_once $viewPath;
        $indexView = new Homepageadmin($this->getModel(), $this);
        $indexView->output();  
    }
    public function HomePage_User()
    {
        $viewPath = VIEWS_PATH_USER . 'HomePage_User.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
   /* public function ViewProfile()
    {
        $viewPath = VIEWS_PATH . 'ViewProfile.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }

    public function AddUser()
    {
        $viewPath = VIEWS_PATH_ADMIN . 'AddUser.php';
        require_once $viewPath;
        $contactView = new Conta
            .ct($this->getModel(), $this);
        $contactView->output();
    }
    
     public function CaseView_Admin()
    {
        $viewPath = VIEWS_PATH_ADMIN . 'CaseView.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
    
     public function KnowledgeBase_Admin()
    {
        $viewPath = VIEWS_PATH_ADMIN . 'KnowledgeBase.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function UploadStatment()
    {
        $viewPath = VIEWS_PATH_ADMIN . 'UploadStatment.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function ViewCases_Admin()
    {
        $viewPath = VIEWS_PATH_ADMIN . 'ViewCases.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function ViewStatistics()
    {
        $viewPath = VIEWS_PATH_ADMIN . 'ViewStatistics.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function CaseView_User()
    {
        $viewPath = VIEWS_PATH_USER . 'CaseView.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function EscalateCase()
    {
        $viewPath = VIEWS_PATH_USER . 'EscalateCase.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
    
     public function KnowledgeBase_User()
    {
        $viewPath = VIEWS_PATH_USER . 'KnowledgeBase.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function NewCase()
    {
        $viewPath = VIEWS_PATH_USER . 'NewCase.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
     }
     public function ViewCases_User()
    {
        $viewPath = VIEWS_PATH_USER . 'ViewCases.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function CaseView_Head()
    {
        $viewPath = VIEWS_PATH_HEAD . 'CaseView.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function Esclations_details()
    {
        $viewPath = VIEWS_PATH_HEAD . 'Esclations_details.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function Esclations()
    {
        $viewPath = VIEWS_PATH_HEAD . 'Esclations.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function Give_warning()
    {
        $viewPath = VIEWS_PATH_HEAD . 'Give_warning.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function Homepage_Head()
    {
        $viewPath = VIEWS_PATH_HEAD . 'Homepage.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function Statistics()
    {
        $viewPath = VIEWS_PATH_HEAD . 'Statistics.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function ViewAdmins()
    {
        $viewPath = VIEWS_PATH_HEAD . 'ViewAdmins.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
     public function ViewCases_Head()
    {
        $viewPath = VIEWS_PATH_HEAD . 'ViewCases.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
    */
}
