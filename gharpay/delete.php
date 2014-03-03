<?php
include('DBLib.php');

$userid=$_SESSION['userid'];
$type=$_GET['type'];
$id=$_GET['id'];
delete_entry($userid,$id,$type);
header( 'Location: welcomeadmin.php' ) ;


?>