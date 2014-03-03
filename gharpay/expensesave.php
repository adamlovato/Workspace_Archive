<?php

  {
    include "file_constants.php";
      // database connection
                    mysql_connect($host, $user, $pass) OR DIE (mysql_error());

$id=$_REQUEST['userid'];
 $tableid=$id.'_expenses';

                    // select the db
      mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());
 $category=$_REQUEST['category'];
  $paidto=$_REQUEST['paidto'];
   $amount=$_REQUEST['amount'];
    $mode=$_REQUEST['mode'];
	$comments=$_REQUEST['comments'];
	$time=time();
$sql3 ="INSERT INTO $tableid SET
category='{$category}',
time='{$time}',
amount='{$amount} ',
mode=' {$mode}',
paidto='{$paidto}',comments='{$comments}'";

                    // insert the image0,,,,,,
                    mysql_query($sql3) or die("Error in Query: " . mysql_error());
                    $msg=mysql_insert_id();				

   $tableid=$msg.'_expenses'; 
   
     



					header("location:welcomeadmin.php?userid=$id");
					
				
                 			
                
                
   }
   ?>