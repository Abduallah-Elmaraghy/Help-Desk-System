<?php
class Login extends view
{

	public function output()
	{
		//$title = $this->model->title;
		// $data = $this->model->data;
		$action= URLROOT . 'public/users/login';
		//$css= APPROOT . 'public/style sheets/Loginpagestyle.css';
		require APPROOT.'/views/inc/header.php';

		$text = <<<EOT

   <div class = "center" >
            <h1>Login</h1>
            <form method="post" action="$action">
                <div class="txt_field">
                    <input type="text" name="mail" required>
                    <span> </span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="pass" required>
                    <span> </span>
                    <label>Password</label>
                </div>
                <div class="pass" >
                    Forgot Password ?
                </div>
                <input type="submit" name = "Login" value = "Login">
            </form>
        </div>
EOT;
		echo $text;

	}
}
