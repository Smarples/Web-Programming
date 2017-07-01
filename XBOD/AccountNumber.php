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
$ANumber = mysql_query("SELECT AccountNumber FROM Customer WHERE FirstName = '$_POST[fname]'");
$ANumber = mysql_fetch_array($ANumber);
echo "<p1>Your Account Number is " . $ANumber[0] . "</p1>";

?>



</body>
</head>
</html>
