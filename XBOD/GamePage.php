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
<h1> Choose a game to purchase</h1>

<table border=0>

<tr><th>Wii Games</th> <th></th><th>DSI Games</th><th></th></tr>

<tr><td>
	<img src="http://cdn02.nintendo-europe.com/media/images/05_packshots/games_13/wii_6/PS_Wii_MarioPowerTennis_NS_enGB.png" height ="100" width = "60"/>
    <label>Mario</label>  
	</td>

	<td><form action="http://www2.macs.hw.ac.uk/~sm861/purchases.php"><input type="submit" name = "Game" value="Purchase Mario for the Wii"></form></td>
	
	<td>
	<img src="http://s1.hubimg.com/u/1203210_f260.jpg" height ="80" width = "100"/>
    <label>Mario</label> 
	</td>

	<td><form action="http://www2.macs.hw.ac.uk/~sm861/purchases.php"> <input type="submit" name = "Game" value="Purchase Mario for the DSI"></form></td>
	</tr>
	

<tr><td>
	<img src="http://www.soccergaming.com/wp-content/uploads/2011/10/fifa-12-wii.jpg" height ="100" width = "60"/>
    <label>FIFA 12</label>
    </td>

    <td><form action="http://www2.macs.hw.ac.uk/~sm861/purchases.php">	<input type="submit" name = "Game" value="Purchase FIFA 12 for the wii"></form></td>
    
    <td>
	<img src="http://4.bp.blogspot.com/-VMVXGfR1BOw/TlgiFnzaMsI/AAAAAAAAACU/_TBWZMy88Ak/s1600/cooking-mama-for-nintendo-3ds-dsi-dslx-dslite-3829a.jpg" height ="80" width = "100"/>
    <label>Cooking</label>
    </td>

    <td><form action="http://www2.macs.hw.ac.uk/~sm861/purchases.php">	<input type="submit" name = "Game" value="Purchase Cooking for the DSI"></form></td>
    </tr>

<tr><td>
	<img src="https://wiki.dolphin-emu.org/images/0/0e/Wii_Fit.jpg" height ="100" width = "60"/>
    <label>WII FIT</label>
    </td>

    <td><form action="http://www2.macs.hw.ac.uk/~sm861/purchases.php"><input type="submit" name = "Game" value="Purchase WII FIT for the wii"></form></td>
    
    <td>
	<img src="http://i01.i.aliimg.com/wsphoto/v0/538229605/10pcs-Hot-Selling-games-for-font-b-DS-b-font-DSI-NDSIXL-DSLITE-3DS-console-Nintendogs.jpg" height ="80" width = "100"/>
    <label>Nintendogs</label>
    </td>

    <td><form action="http://www2.macs.hw.ac.uk/~sm861/purchases.php"><input type="submit" name = "Game" value="Purchase Nintendogs for the DSI"></form></td>
    </tr>

<tr><td></td><td></td><td>
	<img src="http://cdn2.spong.com/pack/s/p/spidermanf257472l/_-Spider-Man-Friend-or-Foe-DS-DSi-_.jpg" height ="80" width = "100"/>
    <label>Spiderman</label>
    </td>

    <td><form action="http://www2.macs.hw.ac.uk/~sm861/purchases.php"><input type="submit" name = "Game" value="Purchase Spiderman for the DSI"></form></td></tr>
</table>
<p>
		Do you have any queries?
<form action="http://www2.macs.hw.ac.uk/~sm861/Queries.php"><input type="submit" value="Queries"></form></td>
</p>

<form method="post" action="http://www2.macs.hw.ac.uk/~sm861/voucher.php">
    <label>To get a voucher please enter your Account Number </label>   <input type="text" maxlength = "5" name="ANumber"> 
    <p></p>
    <input type="submit" value="Redeem">
</form>

</body>
</head>
</html>
