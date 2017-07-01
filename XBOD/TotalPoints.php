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
<h1> Answers</h1>

<?php

$points = mysql_query("SELECT TotalPoints FROM Customer WHERE AccountNumber = '$_POST[AccountNumber]'");
$points=mysql_fetch_array($points);
echo "<p1>Your have " . $points[0] . " points in total </p1>";

?>

</body>
</head>
</html>
