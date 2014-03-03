<?php
include('config.inc.php');

include('database.inc.php');
$ip=$_SERVER['REMOTE_ADDR'];
mysql_query("INSERT INTO users (inchat , ip) values('N','$ip');");

echo mysql_insert_id();

mysql_close($con);
?>