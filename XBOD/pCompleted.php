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
<h1> Completed Purchase</h1>

<?php
$insert = "INSERT INTO PurchaseHistory (AccountNo, ListNo)VALUES('$_POST[ANumber]','$_POST[LNumber]')";
$insResult = mysql_query($insert);
$update2 = "update Customer Set TotalPoints = TotalPoints + '$_POST[LPoints]' where AccountNumber = '$_POST[ANumber]'";
$insupdate2 = mysql_query($update2);
$update = "update Customer Set PoundPoints = (TotalPoints*2 /100) where AccountNumber = '$_POST[ANumber]'";
$insupdate = mysql_query($update);
$points = mysql_query("SELECT TotalPoints FROM Customer WHERE AccountNumber = '$_POST[ANumber]'");
$points=mysql_fetch_array($points);



if ($insResult && $insupdate && $insupdate2){
echo "<p1>Congratulations </p1>";
echo "<p1>you have made a purchase with the Online Game Shop </p1>";
echo "<br></br>";
echo "<p1>Your have " . $points[0] . " points in total </p1>";

}

else{
//vital to know why it failed
Print "There was a problem with your account, please look over details and try again";
echo '<br></br>';
exit ( $query. " " . mysql_error()); 


$points = "SELECT TotalPoints FROM Customer WHERE AccountNumber = '$_POST[ANumber]'";
$insResult = mysql_query($points);
Print "The amount of points you have are" . $insResult;
}
?>

<form action="http://www2.macs.hw.ac.uk/~sm861/GamePage.php">
    <input type="submit" value="Go buy some more games!!">
</form>
<form action="http://www2.macs.hw.ac.uk/~sm861/Queries.php">
    <input type="submit" value="Query your account">
</form>

</body>
</head>
</html>
