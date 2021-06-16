<!DOCTYPE html>
<html lang="eng" dir = "ltr"> 
	<head>
		<meta charset="utf-8">
		<title>Login Page</title>
		<link rel = "stylesheet" href = "../style sheets/Loginpagestyle.css">
	</head>
	<body>
		<div class = "center" >
			<h1>Login</h1>
			<form method="post" action="">
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
	</body>
</html>
<?php 
//require_once("../Model/classes/person.php");
if(isset($_POST['Login'])){
	$p=new Person($_POST['mail'],$_POST['pass']);
	$p->login($_POST['mail'],$_POST['pass']);
	/* require_once "../Model/DB/DBconnect.php";
    $dep = "HEAD";
    $obj = new DB();
    $obj->insertrecords($dep);
    echo "done";*/
}
?>