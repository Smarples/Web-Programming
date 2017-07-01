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
<h1> Queries</h1>

<form method="post" action="http://www2.macs.hw.ac.uk/~sm861/PreviousPurchases.php">
    <label>To query your account enter your Account Number </label>   <input type="text" maxlength = "5" name="AccountNumber"> 
    <br></br>
    <input type="submit" name = "query" value="Your previous purchases">
</form>

<form method="post" action="http://www2.macs.hw.ac.uk/~sm861/TotalPoints.php">
    <label>To query your account enter your Account Number </label>   <input type="text" maxlength = "5" name="AccountNumber"> 
    <br></br>
    <input type="submit" name = "query" value="Your Total Points">
</form>
    
    <form method="post" action="http://www2.macs.hw.ac.uk/~sm861/TotalInPounds.php">
  <label>To query your account enter your Account Number </label>   <input type="text" maxlength = "5" name="AccountNumber"> 
    <br></br>
    <input type="submit" name = "query" value="Amount in pounds that your points are worth">
</form>
    
<form method="post" action="http://www2.macs.hw.ac.uk/~sm861/AccountNumber.php">
    <label>To query your account enter your First Name </label>   <input type="text" name="fname"> 
and your Last Name </label>   <input type="text" name="lname"> 
    <br></br>
    <input type="submit" name = "query" value="Get account number">
</form>
    
<form method="post" action="http://www2.macs.hw.ac.uk/~sm861/totalPurchases.php">
  <label>To query your account enter your Account Number </label>   <input type="text" maxlength = "5" name="AccountNumber"> 
    <br></br>
    <input type="submit" name = "query" value="Amount of purchases made">
</form>
    
    
    <br><br/>
    <br><br/>
<form action="http://www2.macs.hw.ac.uk/~sm861/GameShop.php"><input type="submit" name = "Games" value="Return to home page"></form>



</body>
</head>
</html>
