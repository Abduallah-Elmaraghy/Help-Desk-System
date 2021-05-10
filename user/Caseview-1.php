<?php include '../includes/nav.php';?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: rgb(199, 199, 199);
    height: 100vh;
    overflow: hidden;
    color: white;
}

.center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1000px;
    background: gray;
    border-radius: 10px;
}

.center h1 {
    text-align: center;
    padding: 5px 0 10px 0;
    border-bottom: 1px solid silver;
}

.center form {
    padding: 0px 25px 100px;
    box-sizing: border-box;
}

label {
    position: relative;
    color: rgb(46, 46, 46);
    color: white;
}

input {
    margin: 5px;
    position: relative;
    width: 30%;
    border-radius: 30px;
    border: none;
    height: 30px;
    background-color: #adadad;
}

input[type="submit"] {
    width: 30%;
    height: 50px;
    border: 1px solid;
    background: #000000;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}

select {
    margin: 5px;
    position: relative;
    width: 30%;
    border-radius: 30px;
    border: none;
    height: 30px;
    background-color: #adadad;
}

option {
    border-radius: 30px;
    text-align: center;
}

input[type="submit"]:hover {
    border-color: #FFFFFF;
    background: #adadad;
    color: #000000;
    border-width: -20px;
    transition: .7s;
}

textarea {

    border-radius: 30px;
    border: none;
    background-color: #adadad;
}
</style>
<html>

<body>

    <div class="center">

        <form method="post">
            <h2>User Information</h2>
            <br>
            <label>Contact Name </label> <label style="margin-left:20px;    ">Abdullah El Maraghy</label>

            <label style="left:150px;">Contact Email </label> <label
                style="margin-left:200px;">Mohamed@gmail.com</label>
            <br><br>
            <label>Contact phone </label> <label style="margin-left:20px;    ">01235682603</label>
            <br><br>


            <h2>System Information</h2>
            <br>
            <label>Created by </label> <label style="margin-left:20px;    ">Abdullah El Maraghy</label>

            <label style="left:150px;">Date and time </label> <label style="margin-left:200px;">14/3/2021 14:05</label>
            <br><br>
            <label>Last modified by </label> <label style="margin-left:20px;    ">Abdullah alaa 6/5/2021</label>
            <label style="left:85px;">Final closed date </label> <label style="margin-left:140px;">14/3/2021
                14:05</label>

        </form>
    </div>



</body>

</html>