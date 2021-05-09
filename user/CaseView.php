<?php include '../includes/nav.php';?>
<html>
    <header>
        <link rel = "stylesheet" href = "../style sheets/stylesheet.css">
        <title>Case View</title>
    </header>
    
    <body>
    
    <div class = "center" >
        <h1 style="color:black;">CASE DETAIL</h1>
			<form method="post">
<h2>Case Information</h2>
            <label>Subject  </label> <input type="text"style="left:50px;">

            <label style="left:150px;">Category  </label> <input type="text"style="left: 180px;"><br><br>
			
            <label>Case owner  </label> <input type="text"style="left:15px;">
            
            <label style="left:115px;">Parent case  </label> <input type="text"style="left:125px;"><br><br>
			<label>Case   </label> <input type="text"style="left:68px;">
            <label style="left: 170px;">Status  </label> <input type="text"style="left:223px;"><br><br>
			<label >Case Pirority  </label> <input type="text"style="left:9px;">
            <label style="left:112px;">Due date  </label> <input type="text"style="left:142px;"><br><br>
            <label>Sevirity  </label> <input type="text"style="left:50px;"><br><br>
            <label>Description </label> <textarea type="text"style="position:relative;left:23px;width:60%;"> </textarea>
         
			</form> 
		</div>
	
		
    
    </body>
</html>