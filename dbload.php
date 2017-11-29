<?

include ("connect.php");

$result = mysql_query("select * from user;",$connect);

while($row = mysql_fetch_array($result, MYSQL_BOTH)) {
	echo "$row[password]";
	
	echo "<br />";
}

mysql_close($connect);

?>