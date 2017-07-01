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
$ANumber = mysql_query("SELECT COUNT(AccountNo) FROM PurchaseHistory WHERE AccountNo = '$_POST[AccountNumber]'");
$ANumber = mysql_fetch_array($ANumber);
echo "<p1>You have made  " . $ANumber[0] . " purchases in total</p1>";

?>



</body>
</head>
</html>
