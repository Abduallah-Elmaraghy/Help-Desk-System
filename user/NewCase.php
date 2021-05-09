<?php include '../includes/nav.php';?>
<html>
    <header>
        <link rel = "stylesheet" href = "../style sheets/stylesheet.css">
        <title>Case View</title>
    </header>
    
    <body>
    
    <div class = "center" >
        <h1 style="color:black;">CASE DETAILS</h1>
        <br>
			<form method="post">

            <label>Subject  </label> <input type="text"style="left:50px;">

            <label style="left:150px;">Category  </label> 
            <select style="left: 180px;">
        <option>Network</option>
        <option>System fail</option>
        <option>Database</option>
        </select><br><br>
			
            <label>Case owner  </label> <input type="text"style="left:15px;">
            
            <label style="left:115px;">Parent case  </label> <input type="text"style="left:125px;"><br><br>
			<label>Case   </label> <input type="text"style="left:68px;">
            <label style="left: 170px;">Status  </label> <input type="text"style="left:223px;"><br><br>
			<label >Case Pirority  </label>  <select style="left: 9px;">
        <option>Extreme</option>
        <option>High</option>
        <option>Low</option>
        </select>
            <label style="left:112px;">Due date  </label> <input type="date"style="left:142px;"><br><br>
            <label>Sevirity  </label> <select style="left:50px;">
                <option>High</option>
            <option>Extreme</option>
            <option>Low</option>
        </select><br><br>
            <label>Description </label> <textarea type="text"style="position:relative;left:23px;width:60%;"> </textarea>
            <input type="submit" style="position:relative;top:50px;left:350px;">
			</form> 
		</div>
	
		
    
    </body>
</html>