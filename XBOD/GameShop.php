<html> 
<head><title>Online Game Shop</title>
<body>
<h1> Sign In</h1>

	<?php
	$con = mysql_connect("mysql-server-1",sm861,abcsm861354);
	mysql_select_db("sm861",$con);
	if (!$con)
{
die('Could not connect: ' . mysql_error());
} 
	?>

<form action="http://www2.macs.hw.ac.uk/~sm861/GamePage.php">
    <input type="submit" value="Buy a game ">
</form>
<form action="http://www2.macs.hw.ac.uk/~sm861/registration.php">
    <input type="submit" value="Register">
</form>
</body>
</head>
</html>
