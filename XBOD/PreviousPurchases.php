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
echo "<p1>Your previous purchases:</p1>";

?>
<table border=0>
<?php
$games = mysql_query("SELECT console,game FROM Customer, Console, PurchaseHistory WHERE listNo = listNumber AND AccountNumber = AccountNo AND AccountNumber = '$_POST[AccountNumber]'");
while ($row=mysql_fetch_row($games))	{
	echo "<tr>";

    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";

    echo "</tr>\n";
}
?>
</table>


</body>
</head>
</html>
