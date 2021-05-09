<?php include '../includes/nav.php';?>
<html>
    <header>
        <link rel = "stylesheet" href = "../style sheets/stylesheet.css">
        <title>Case View</title>
    </header>
    
    <body>
    
    <div class = "center" >
        <h1 style="color:black;">Escalate Case</h1>
			<form method="post">

            <label>Case Number  </label> <input type="text"style="left:50px;">

            <label style="left:150px;">Recipent  </label> <input type="text"style="left: 180px;"><br><br>
			

   
            <label>Escalation reason</label> <input type="text"style="left:20px;width:60%;"><br><br>
            <label>Description </label> <textarea type="text"style="position:relative;left:75px;width:60%;"> </textarea>
            <input type="submit"value="Escalate" style="position:relative;top:50px;left:350px;">
			</form> 
		</div>
	
		
    
    </body>
</html>