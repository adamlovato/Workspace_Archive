<?php
$userId=$_REQUEST["userId"];

$msg   ="";
$randomUserId;

include ('config.inc.php');
include ('database.inc.php');
$result=mysql_query("SELECT * FROM chats WHERE userId = $userId ");

if (mysql_num_rows($result) > 0)
    {
    $result=mysql_query("SELECT * FROM msgs WHERE randomUserId = $userId ORDER BY sentdate limit 1");

    $id    =0;

    while ($row=mysql_fetch_array($result))
        {
        $id          = $row["id"];
        $msg         =$row["msg"];
        $randomUserId=$row["userId"];
		$ip=$row["ip"];
        }

    if ($id != 0)
        {
		
        mysql_query ("DELETE FROM msgs WHERE id = $id ");
        mysql_query ("INSERT INTO oldMsgs(userId,randomUserId,msg,ip) VALUES( $randomUserId,$userId,'$msg','$ip'); ");
        }
    }
else
    {
    echo "||--noResult--||";
    }

mysql_close ($con);

echo $msg;
?>