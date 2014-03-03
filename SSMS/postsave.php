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
$complaint=$_REQUEST['complaint'];
$author_mess=$_SESSION['mess'];
$author_photo=$_SESSION['photo'];
$author_name=$_SESSION['name'];
//$complaint = mysql_real_escape_string($complaint);
 
$sql="Insert into complaints set
complaint='{$complaint}',
author_bitsid='{$bitsid}',
author_mess='{$author_mess}' , author_name='{$author_name}' , author_photo='{$author_photo}' ";
$result = mysqli_query($con,$sql);
header("location:profile.php")

?>
