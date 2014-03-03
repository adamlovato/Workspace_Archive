<?php 
session_start();

if(isset($_SESSION['bitsid']))
{
$bitsid=$_SESSION['bitsid'];
$logged_status=1;


}
include "db.php";

$cid=$_REQUEST['cid'];
$reply=$_REQUEST['reply'];
$author_photo=$_SESSION['photo'];
$author_name=$_SESSION['name'];
$reply_to_bitsid=$_REQUEST['reply_to_bitsid'];
echo "here";
echo "cid is $cid"; echo "<br>";
echo "reply is $reply";echo "<br>";
echo "reply to bitsid is $reply_to_bitsid";

$sql="Insert into replies set
reply='{$reply}',reply_post_id='{$cid}',reply_author_bitsid='{$bitsid}',reply_to_bitsid='{$reply_to_bitsid}',reply_author_name='{$author_name}',reply_author_photo='{$author_photo}' ";
$result3 = mysqli_query($con,$sql);
$sql2 ="update complaints SET
status=1 where complaint_id=$cid";
$result= mysqli_query($con,$sql2);
	   

//header("location:profile.php")

?>
