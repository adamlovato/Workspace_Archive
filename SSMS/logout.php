<?php
session_start();

if(isset($_SESSION['bitsid']))
{
$bitsid=$_SESSION['bitsid'];
$logged_status=1;

session_destroy();

header("location:index.php");

}
else
{
header("location:index.php");
}
?>