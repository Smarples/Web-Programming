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
<h1> Completed Registration</h1>

<?php
$insert = "INSERT INTO Customer (AccountNumber, FirstName, LastName, TotalPoints, PoundPoints)
VALUES
('$_POST[ANumber]','$_POST[fname]','$_POST[lname]', 0, 0)";
$insResult = mysql_query($insert);

if ($insResult){
echo "<p1>Congratulations </p1>";
echo $_POST["fname"] . " " . $_POST["lname"] ." ";
echo "<p1>you have made an account with the Online Game Shop </p1>";
echo "<br><br>Your Account Number is " . $_POST["ANumber"] . " </br></br>";
}
else{
//vital to know why it failed
print "The Account Number is already taken or is not valid";
}
?>

<form action="http://www2.macs.hw.ac.uk/~sm861/GamePage.php">
    <input type="submit" value="Go buy some games!!">
</form>

</body>
</head>
</html>

