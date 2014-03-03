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
include "db.php";



$photo=$_REQUEST['photo'];

$email=$bitsid.'@pilani.bits-pilani.ac.in';
$photos='http://graph.facebook.com/'.$photo.'/picture?width=200&height=200';
if($photo=='')
{
$photos='default.jpg';
}



{

$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
$signature=$_REQUEST['signature'];
$mess=$_REQUEST['mess'];
$astat=1;

$sql2 ="update userdata SET password='{$password}', signature='{$signature}' , photo='{$photos}' , fbid='{$photo}'where bitsid='$bitsid'";
	   $_SESSION['name']=$name;
$_SESSION['password']=$password;
$_SESSION['signature']=$signature;
$_SESSION['mess']=$mess;
}

                    // insert the image
                   $result = mysqli_query($con,$sql2);
				  session_start();
			

				
			header("location:logincheck.php?username=$bitsid&password=$password");

 

					
					?>