<?php include '../includes/nav.php';?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}

body
{
	background: rgb(199, 199, 199);
	height: 100vh;
	overflow: hidden;
	color:white;
}

.center
{
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 800px;
	background: gray;
	border-radius: 10px;
}

.center h1
{
	text-align: center;
	padding: 5px 0 10px 0;
	border-bottom: 1px solid silver;
}

.center form
{
	padding: 0px 25px 100px;
	box-sizing: border-box;
}
label{
	position:relative;
	color:rgb(46, 46, 46);
    color:white;
}
input{
	margin:5px;
	position:relative;
	width:30%;
	border-radius: 30px;
	border: none;
	height:30px;
	background-color:#adadad;	
}
input[type = "submit"]
{
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
select{
	margin:5px;
	position:relative;
	width:30%;
	border-radius: 30px;
	border: none;
	height:30px;
	background-color:#adadad;
}
option{
	border-radius:30px ;
	text-align: center;
}
input[type = "submit"]:hover
{
	border-color: #FFFFFF;
	background: #adadad;
	color:#000000;
	border-width: -20px;
	transition: .7s;
}
textarea{
	
	border-radius: 30px;
	border: none;
	background-color:#adadad;
}
</style>
<html>
<body>
    
    <div class = "center" >
       
			<form method="post">
<h2>Case History</h2> 
<br>
            <label>Date&Time </label> <label style="margin-left:200px;    ">User</label> <label style="margin-left:200px;    ">Action</label>

                <br><br>
                <label>14/3/2020 14:20pm </label> <label style="margin-left:140px;    ">Mohamed</label> <label style="margin-left:155px;    ">Edit</label>
			
<br><br>
		<h2>Case History</h2> 
<br>
            <label>Action</label> <label style="margin-left:120px;    ">Filename</label> <label style="margin-left:50px;    ">Last Modified</label>
            <label style="margin-left:50px;    ">Size</label> <label style="margin-left:50px;    ">Created by</label>
                <br><br>
                <label>Edit|Delete|View</label> <label style="margin-left:50px;    ">file.jpg</label> <label style="margin-left:50px;    ">Last 10/2/2021</label>
            <label style="margin-left:50px;    ">20KB</label> <label style="margin-left:50px;    ">Ahmed Gamil</label>
<br><br>	



			</form> 
		</div>
	
		
    
    </body>
</html> 