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
print $_POST[AccountNumber];
if($_GET['query'] == "Your Total Points"){
$points = mysql_query("SELECT TotalPoints FROM Customer WHERE AccountNumber = '$_POST[AccountNumber]'");
$points=mysql_fetch_array($points);
echo "<p1>Your have " . $points[0] . " points in total </p1>";
}


?>
<table border=1>
<?php
if($_GET['query'] == "Your previous purchases"){
echo "<p1>Your previous purchases:</p1>";
$games = mysql_query("SELECT console,game FROM Customer, Console, PurchaseHistory WHERE listNo = listNumber AND AccountNumber = AccountNo AND AccountNumber = '$_POST[AccountNumber]'");
while ($row=mysql_fetch_row($games))	{
	echo "<tr>";

    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";

    echo "</tr>\n";
}
}
?>
</table>

<br></br>
<br></br>
<form action="http://www2.macs.hw.ac.uk/~sm861/Queries.php"><input type="submit" name = "Games" value="Return to Queries"></form>

</body>
</head>
</html>
