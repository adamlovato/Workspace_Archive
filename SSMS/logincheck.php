<?php include "db.php";


$username=$_REQUEST['username'];
$passwordz=$_REQUEST['password'];

$ip=$_SERVER['REMOTE_ADDR'];

$sql="Select * from userdata  where bitsid='$username' and password='$passwordz'";

$result = mysqli_query($con,$sql);
$i=0;
while ($row = mysqli_fetch_array($result))
{
$bitsid["$i"] = $row['bitsid'];
$name["$i"] = $row['name'];
$password["$i"] = $row['password'];
$signature["$i"] = $row['signature'];
$astat["$i"]=$row['activation_status'];
$mess["$i"]=$row['mess'];
$email["$i"]=$row['email'];
$last_active["$i"]=$row['last_active'];
$profile_views["$i"]=$row['profile_views'];
$bitsid_p["$i"]=$row['bitsid_p'];
$account["$i"]=$row['account'];
$account_type["$i"]=$row['account_type'];
$photo["$i"]=$row['photo'];
$fbid["$i"]=$row['fbid'];



$i++;
}

if($i>0)
{

session_start();
$_SESSION['bitsid']=$bitsid[0];
$_SESSION['name']=$name[0];

$_SESSION['password']=$password[0];

$_SESSION['signature']=$signature[0];
$_SESSION['astat']=$astat[0];
$_SESSION['mess']=$mess[0];
$_SESSION['email']=$email[0];
$_SESSION['last_active']=$last_active[0];
$_SESSION['profile_views']=$profile_views[0];
$_SESSION['bitsid_p']=$bitsid_p[0];
$_SESSION['account_type']=$account_type[0];
$_SESSION['account']=$account[0];
$_SESSION['photo']=$photo[0];
$_SESSION['fbid']=$fbid[0];
$_SESSION['ip']=$ip;
unset($_SESSION['error']);
$sql2 ="update userdata SET ip='{$ip}'
 where bitsid='$bitsid[0]'";
	  

                    // insert the image
                   $result = mysqli_query($con,$sql2);
header("location:profile.php");



 }
 else
 {
 session_start();
$_SESSION['error']="Username or Password Mismatch";
 header("location:index.php#overlay");
 }
 
 

					
					?>