<?Php
	$con = mysql_connect("mysql-server-1",sm861,abcsm861354);
		mysql_select_db("sm861",$con);
	if (!$con)
{
die('Could not connect: ' . mysql_error());
} 
?>

<html> 
<head><title>Online Game Shop</title>
<body>
<h1> Details</h1>
<p1>
Please enter your details to process your order
<br></br>
If you do not have an account with us you must register before making this purchase
<br></br>
<form action="http://www2.macs.hw.ac.uk/~sm861/registration.php">
    <input type="submit" value="Register">
</form>
<form action="http://www2.macs.hw.ac.uk/~sm861/GamePage.php">
    <input type="submit" value="Return to games">
</form>
<form method="post" action="http://www2.macs.hw.ac.uk/~sm861/pCompleted.php">
    <label>Please enter your Account Number: </label>   <input type="text" maxlength = "5" name="ANumber"> 
    <p></p>
    <label>Please enter the List Number of the Game: </label>   <input type="text" maxlength = "1" name="LNumber"> 
    <p></p>
    <label>Please enter the Loyalty Points awarded from the Game: </label>   <input type="text" maxlength = "2" name="LPoints"> 
    <p></p>
    <input type="submit" value="Purchase Game">
</form>
<table border=0>

<tr><th>Games</th> <th>List No</th><th> Loyalty Points</th></tr>

<tr><td>
    <label>Mario WII</label>  
	</td>
	<td>
	<label>1</label>  
	</td>	
	<td>
    <label>5</label> 
	</td>
	</tr>
	

<tr><td>

    <label>FIFA 12 WII</label>  
	</td>
	<td>
	<label>2</label>  
	</td>	
	<td>
    <label>7</label> 
	</td>
<tr><td>
    <label>WII FIT WII</label>  
	</td>
	<td>
	<label>3</label>  
	</td>	
	<td>
    <label>10</label> 
	</td>
    </tr>

<tr><td> 
   <label>Mario DSI</label>  
	</td>
	<td>
	<label>4</label>  
	</td>	
	<td>
    <label>7</label> 
	</td>
	</tr>
	<tr><td> 
   <label>Cooking DSI</label>  
	</td>
	<td>
	<label>5</label>  
	</td>	
	<td>
    <label>8</label> 
	</td>
	</tr>
	<tr><td> 
   <label>Nintendogs DSI</label>  
	</td>
	<td>
	<label>6</label>  
	</td>	
	<td>
    <label>8</label> 
	</td>
	</tr>
	<tr><td> 
   <label>Spiderman DSI</label>  
	</td>
	<td>
	<label>7</label>  
	</td>	
	<td>
    <label>9</label> 
	</td>
	</tr>
</table>

<?php

?>


</p1>
</body>
</head>
</html>
