<?php
session_start();

if(isset($_SESSION['bitsid']))
{
$bitsid=$_SESSION['bitsid'];
$logged_status=1;


}
else
{
header("location:index.php");
}
$pdo = new PDO('mysql:host=localhost;dbname=ssms', 'ssms','ssms');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');


if($_REQUEST['photo']!="")
{
$photo=$_REQUEST['photo'];
$email=$bitsid.'@pilani.bits-pilani.ac.in';
$photo='http://graph.facebook.com/'.$photo.'/picture?type=large';
$sql2 ="update userdata SET
photo='{$photo}' where bitsid='$bitsid'";
$_SESSION['photo']=$photo;

}
else
{

$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
$signature=$_REQUEST['signature'];
$mess=$_REQUEST['mess'];
$astat=1;

$sql2 ="update userdata SET
name='{$name}',
password='{$password}',
signature='{$signature}',
activation_status='{$astat}',
mess='{$mess}' where bitsid='$bitsid'";
	   $_SESSION['name']=$name;
$_SESSION['password']=$password;
$_SESSION['signature']=$signature;
$_SESSION['mess']=$mess;
}

                    // insert the image
                   $result2=$pdo->query($sql2);
				  session_start();
			

				
			header("location:logincheck.php?username=$bitsid&password=$password");

 

					
					?>