<html>

 <head>

  <title>Test</title>

<?php
$con = mysql_connect('mysql-server-1',sm861, abcsm861354);
mysql_select_db('sm861',$con);
if(!$con)
{
die('Could not connect...'.mysql_error());
}
?>


 </head>
 <body>
<?php $result = mysql_query('SELECT Name, URL, Description FROM RSS');

while($row = mysql_fetch_array($result)) {
	echo$row['Name'];
	echo$row['URL'];
	echo$row['Description']
}

mysql_close($con);
?>

<p>Hello World</p>


 </body>

</html>
