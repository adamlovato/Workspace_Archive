<?php
$userId      =$_REQUEST["userId"];
$ip=$_SERVER['REMOTE_ADDR'];
$randomUserId=$_REQUEST["strangerId"];
$msg         =$_REQUEST["msg"];

include('config.inc.php');
include('database.inc.php');

mysql_query("INSERT INTO msgs(userId,randomUserId,msg,ip) VALUES($userId, $randomUserId, '$msg','$ip'); ");

mysql_close($con);
?>