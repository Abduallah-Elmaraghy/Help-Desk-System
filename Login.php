<html lang="eng" dir = "ltr"> 

    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
        <link rel = "stylesheet" href = "style sheets/Loginpagestyle.css">
    </head>

    <body>
        <div class = "center" >
            <h1>Login</h1>
            <form method="post" action="user/Homepage.php">
                <div class="txt_field">
                    <input type="text" name="mail" required>
                    <span> </span>
                    <label>Username</label>
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

$conn = mysqli_connect("localhost","root","","help_desk_system");
if(!$conn)
{
    die("Connetion failed".mysqli_connect_error());
}
if(isset($_POST['Login']))
{
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $sql = "Select * FROM user where mail = '$mail' AND password ='$pass'";

    $result = mysqli_query($conn,$sql);

    if($row = mysqli_fetch_array($result))

    {

        header("Location:admin/Homepage.php");

    }

    else

    {

        echo "invalid username or password";

        

    }
}
?>