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
<h1> Voucher Code</h1>
<?php
$points = mysql_query("SELECT PoundPoints FROM Customer WHERE AccountNumber = '$_POST[ANumber]'");
$points=mysql_fetch_array($points);
$points2 = "SELECT TotalPoints FROM Customer WHERE AccountNumber = '$_POST[ANumber]'";
$insResult = mysql_query($points2);
$clear = "update Customer Set TotalPoints = 0 where AccountNumber = '$_POST[ANumber]'";
$insClear = mysql_query($clear);
$clear2 = "update Customer Set PoundPoints = 0 where AccountNumber = '$_POST[ANumber]'";
$insClear2 = mysql_query($clear2);


if ($insResult && $insClear && $insClear2){
echo "<p1>You have now used up all of your Points and your voucher code is BC56-JDK9-23HD-KL90 for " . $points[0] . " pounds in total </p1>";

}
else{
//vital to know why it failed
Print "There was a problem with your account, please look over details and try again";
echo '<br></br>';
exit ( $query. " " . mysql_error()); 
}
?>


</body>
</head>
</html>
