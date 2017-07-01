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
<h1> Purchases</h1>
	<?php
	if($_GET['Game'] == "Purchase Spiderman for the DSI"){
  $Game = "DSI Spiderman";
}
	elseif($_GET['Game'] == "Purchase Mario for the DSI"){
  $Game = "DSI Mario";
}
	elseif($_GET['Game'] == "Purchase Cooking for the DSI"){
  $Game = "DSI Cooking";
}
	elseif($_GET['Game'] == "Purchase Nintendogs for the DSI"){
  $Game = "DSI Nintendogs";
}
	elseif($_GET['Game'] == "Purchase FIFA 12 for the wii"){
  $Game = "wii FIFA 12";
}
	elseif($_GET['Game'] == "Purchase WII FIT for the wii"){
  $Game = "wii WII FIT";
}
	elseif($_GET['Game'] == "Purchase Mario for the Wii"){
  $Game = "wii Mario";
}
	?>
<?php
if($Game == "wii Mario"){
	print 'Are you sure you want to buy Mario for the wii';
}
elseif($Game == "DSI Mario"){
	print 'Are you sure you want to buy Mario for the DSI';
}
elseif($Game == "wii FIFA 12"){
	print 'Are you sure you want to buy FIFA for the wii';
}
elseif($Game == "DSI Cooking"){
	print 'Are you sure you want to buy cooking for the DSI';
}
elseif($Game == "wii WII FIT"){
	print 'Are you sure you want to buy wii fit for the wii';
}
elseif($Game == "DSI Nintendogs"){
	print 'Are you sure you want to buy nintendogs for the DSI';
}
elseif($Game == "DSI Spiderman"){
	print 'Are you sure you want to buy spiderman for the DSI';
}
else{
	print "you have nothing to purchase";
}

?>
<br></br>
<form action="http://www2.macs.hw.ac.uk/~sm861/details.php">
    <input type="submit" value="Yes">
</form>
<form action="http://www2.macs.hw.ac.uk/~sm861/GamePage.php">
    <input type="submit" value="No">
</form>

</body>
</head>
</html>
