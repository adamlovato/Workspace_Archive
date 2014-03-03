<?php

try
{
$pdo = new PDO('mysql:host=localhost;dbname=gharpay', 'gharpay','gharpay');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
echo $e->getMessage();
$error = 'Unable to connect to the database server.Either username wrong or server temporarily down!';
echo "$error";
exit();
}
$timw=time();
try
{
$pass=$_REQUEST['password'];
$admin=$_REQUEST['username'];

$sql="Select * from useraccounts  where password='$pass' and username='$admin'";
$result=$pdo->query($sql);
$i=0;
while ($row = $result->fetch())
{
$name["$i"] = $row['name'];
$username["$i"] = $row['username'];
$userid["$i"] = $row['userid'];
$contact["$i"] = $row['contact'];
$password["$i"] = $row['password'];
$i++;
}

/*$sql2="Select * from updatepost where adminidposted='$adminid[0]'";
$result=$pdo->query($sql2);
$k=0;
while ($row = $result->fetch())
{
$postname["$k"] = $row['postname'];
$adminidposted["$k"] = $row['adminidposted'];
$dateadded["$k"] = $row['dateadded'];
$lastview["$k"] = $row['lastview'];
$views["$k"] = $row['views'];
$postid["$k"]=$row['postid'];


$k++;
}
*/
if($i==1)
{
if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
	$sql2="update useraccounts set lastip='{$ip}',lastlogin='{$time}' where userid=$userid[0]";
$result=$pdo->query($sql2);
header("location:welcomeadmin.php?userid=$userid[0]");

 }
 else{

 include "login.html";

 }
 }
 catch (PDOException $e)
{
include "login.html";
 echo $e->getMessage();
exit();
}

?>
