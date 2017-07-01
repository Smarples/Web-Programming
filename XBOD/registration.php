<?php
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
<h1> Registration page</h1>
<form method="post" action="http://www2.macs.hw.ac.uk/~sm861/completed.php">
     <label> Please enter your first name</label>  <input type="text" name="fname">
    <p>
    </p>
    <label>Please enter your last name </label>  <input type="text" name="lname"> 
    <p></p>
    <label>Please create a 5 digit Account Number </label>   <input type="text" maxlength = "5" name="ANumber"> 
    <p></p>
    <input type="submit" value="Register">
</form>

</body>
</head>
</html>
