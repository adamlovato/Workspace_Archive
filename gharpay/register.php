<?php

  {
    include "file_constants.php";
      // database connection
                    mysql_connect($host, $user, $pass) OR DIE (mysql_error());
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

                    // select the db
      mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());
 $username=$_REQUEST['username'];
  $name=$_REQUEST['name'];
   $password=$_REQUEST['password'];
    $email=$_REQUEST['contact'];
$sql3 ="INSERT INTO useraccounts SET
username='{$username}',
lastlogin=NOW(),
email='{$email} ',
password=' {$password}',
name='{$name}',lastip='{$ip}'";

                    // insert the image
                    mysql_query($sql3) or die("Error in Query: " . mysql_error());
                    $msg=mysql_insert_id();				

   $tableid=$msg.'_expenses'; 
   
      $sql1="CREATE TABLE  `gharpay`.`$tableid` (
`transactionid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
 `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
 `amount` INT( 11 ) NOT NULL ,
 `paidto` TEXT NOT NULL ,
 `comments` TEXT NOT NULL ,
 `category` TEXT NOT NULL ,
 `mode` TEXT NOT NULL ,
 `in/out` TINYINT( 1 ) NOT NULL DEFAULT  '1',
PRIMARY KEY (  `transactionid` )
) ENGINE = INNODB DEFAULT CHARSET = latin1;";
              
	 mysql_query($sql1) or die("Error in Query: " . mysql_error());



					header("location:welcomeadmin.php");
					
				
                 			
                
                
   }
   ?>