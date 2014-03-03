<?php
$db="";
$isDBOpened = 0;

function open_db_connection() {
    global $db; 
	global $isDBOpened;   
if ($isDBOpened) {
        return;
    }
  
     $db = new mysqli("localhost", "gharpay", "gharpay", "gharpay", 3306);
         if($db->connect_error) { echo "Cannot connect to DB";
        //$log->error("Mysql Connect Error No: " . $db->connect_errno . " ; Error: $db->connect_error");
        die('Mysql DB Connect Error (' . $db -> connect_errno . ') ' . $db -> connect_error);
	   }
	   else
	  $isDBOpened = 1;
}



function clean_db_connection() {
    global $db;
   	 global $isDBOpened;
   if( $db->close())
  $isDBOpened = 0;
}

function add_expense($userid,$amount,$paidTo, $comment, $category,$mode)
{
global $db; 
open_db_connection();
$timestamp=time();
$userid = $db->real_escape_string($userid);
$category = $db->real_escape_string($category);
$mode = $db->real_escape_string($mode);
$comment= $db->real_escape_string($comment);
$tablename=$userid."_expenses";

$query = sprintf("INSERT INTO %s (time,amount,paidto,comments,category,mode) VALUES ('%s','%s','%s','%s','%s','%s') ",$tablename,$timestamp,$amount,$paidTo, $comment, $category,$mode );
 
 if ($db->query($query)) {
	      return true;
    }
    else {
    return false;
    }
    clean_db_connection() ;


}


function get_expense($userid,$category,$mode,$fromdate,$todate,$flooramount,$ceilamount,&$expense_array)
{    global $db;
    open_db_connection();
    $tablename=$userid."_expenses";
    $userid = $db->real_escape_string($userid);
    $category = $db->real_escape_string($category);
    $mode = $db->real_escape_string($mode);
    $fromdate = $db->real_escape_string($fromdate);
    $todate = $db->real_escape_string($todate);  
    $query = sprintf("SELECT * FROM %s WHERE time>'%s' AND time<'%s' AND mode='%s' AND category='%s' AND amount>'%s' AND amount<'%s' ",$tablename,$fromdate,$todate,$mode,$category,$flooramount,$ceilamount);

//echo "  \n  DATA   ".$userid.$category.$mode.$fromdate.$todate.$flooramount.$ceilamount."    ";

if($fromdate<0)
$fromdate=0;
if($todate<0)
$todate=time();
if($flooramount<0)
$flooramount=0;
if($ceilamount<0)
$ceilamount=1000000000;

if($category<0)
$query = sprintf("SELECT * FROM %s WHERE time>'%s' AND time<'%s' AND mode='%s' AND amount>'%s' AND amount<'%s' ",$tablename,$fromdate,$todate,$mode,$flooramount,$ceilamount);
if($mode<0)
$query = sprintf("SELECT * FROM %s WHERE time>'%s' AND time<'%s' AND category='%s' AND amount>'%s' AND amount<'%s' ",$tablename,$fromdate,$todate,$category,$flooramount,$ceilamount);

if($mode<0 && $category<0)
$query = sprintf("SELECT * FROM %s WHERE time>'%s' AND time<'%s' AND amount>'%s' AND amount<'%s' ",$tablename,$fromdate,$todate,$flooramount,$ceilamount);
	$counter=0;




	 if ($result = $db->query($query)) {
	 
        while($row = $result->fetch_array()) {
             $expense_array[$counter++]= $row;
		
        }
        $result->close();
        return true;
    }
    else {
   		//echo $query;
        return false;
    }
    clean_db_connection() ;
}



function get_user_data($userid)
{
 global $db;
 open_db_connection();
$query = sprintf("SELECT * FROM useraccounts WHERE userid='%s'",$userid);

 if ($result = $db->query($query)) {
 
        while($row = $result->fetch_array()) {
        	
        	return $row;
        }
        $result->close();
        var_dump ($row);
        
    }
    else {
        return false;
    }
}
function create_budget_table($userid)
{
	//creates table <$userid>_<$tabletype> eg. 1_expenses, 1_budget
	global $db;
	open_db_connection();
	$tablename=$userid."_budget";

	$query = sprintf("CREATE TABLE %s 
	( entry_no int NOT NULL AUTO_INCREMENT,
	  category varchar(255) NOT NULL,
	  timestamp bigint NULL,
	  due_date bigint NULL,
	  amount int,
	  amount_spent int,
	  alert_amount int,
	  happy_amount int,
	  PRIMARY KEY (entry_no)
) ",$tablename);


	if ($result = $db->query($query))
	{
		return 1;
		//echo "success! table created...\n";
	}

	clean_db_connection();
}
function add_budget($userid,$category, $timestamp, $due_date, $amount, $alert_amount, $happy_amount )
{
global $db; 
open_db_connection();
$timestamp=time();
$tablename=$userid."_budget";
$userid = $db->real_escape_string($userid);
$category = $db->real_escape_string($category);
$fromdate = $db->real_escape_string($fromdate);
$todate = $db->real_escape_string($todate);  
$amount = $db->real_escape_string($amount);  
$alert_amount = $db->real_escape_string($alert_amount);  
$happy_amount = $db->real_escape_string($happy_amount);  


$query = sprintf("INSERT INTO %s (category,timestamp,due_date,amount,alert_amount,happy_amount) VALUES ('%s','%s','%s','%s','%s','%s') ",$tablename, $category, $timestamp, $due_date, $amount, $alert_amount, $happy_amount );

 if ($db->query($query)) {
        // echo "success!\n";
	     return true;
    }
    else {
	echo $query;
    return false;
    }
 clean_db_connection() ;
}

function get_budget($userid,$category,$fromdate,$todate,&$budget_array)
{    
global $db;
open_db_connection();
$userid = $db->real_escape_string($userid);
$category = $db->real_escape_string($category);
$fromdate = $db->real_escape_string($fromdate);
$todate = $db->real_escape_string($todate);  
$tablename=$userid."_budget";

$query = sprintf("SELECT * FROM %s WHERE due_date>'%s' AND due_date<'%s' AND category='%s' ",$tablename,$fromdate,$todate,$category);

//echo "  \n  DATA   ".$userid.$category.$mode.$fromdate.$todate.$flooramount.$ceilamount."    ";

if($fromdate<0)
$fromdate=0;
if($todate<0)
$todate=time();
if($category<0)
 $query = sprintf("SELECT * FROM %s WHERE due_date>'%s' AND due_date<'%s' ",$tablename,$fromdate,$todate);

$counter=0;
	 if ($result = $db->query($query)) {
		
        while($row = $result->fetch_array()) {
             $budget_array[$counter++]= $row;
		
        }
        $result->close();
        return true;
    }
    else {
   		//echo $query;
   		//echo "query failed!";
        return false;
    }
    clean_db_connection() ;
}
function append_account($data)
{
//updates the useraccounts table with data given in $data
global $db;
open_db_connection();

$query= sprintf("UPDATE useraccounts SET credit_card_amount= '%s',
	cash_amount= '%s', bank_amount= '%s' WHERE 1",$data['credit_card_amount'],$data['cash_amount'],$data['bank_amount']);
	if($result= $db->query($query))
	{
	//success
	clean_db_connection();
	return 1;	
	}
	else 
	clean_db_connection();
	return 0;
}

function update_create_user($username,$name,$password,$email,$lastip)
{
global $db;
open_db_connection();

$username = $db->real_escape_string($username);
$name = $db->real_escape_string($name);
$password = $db->real_escape_string($password);
$email = $db->real_escape_string($email);
$lastip = $db->real_escape_string($lastip);
 
$lastlogin=TIME();
$tablename= "useraccounts";
$query = sprintf("INSERT INTO %s (username,lastlogin,email,password,name,lastip) VALUES ('%s','%s','%s','%s','%s','%s')",$tablename,$username,$lastlogin,$email,$password,$name,$lastip);

try
{
	if ($result = $db->query($query))
	{
		clean_db_connection();
		return 2;
	}
}
catch( Exception $e)
{
	echo $e->getMessage();
}
	$userid=mysql_insert_id();				
   $tableid=$userid.'_expenses'; 
   
      $query=sprintf("CREATE TABLE  `gharpay`.`%s` (
`transactionid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
 `time` bigint NULL ,
 `amount` INT( 11 ) NOT NULL ,
 `paidto` varchar(255) NOT NULL ,
 `comments` varchar(255) NOT NULL ,
 `category` varchar(255) NOT NULL ,
 `mode` varchar(255) NOT NULL ,
 `in/out` TINYINT( 1 ) NOT NULL DEFAULT  '1',
PRIMARY KEY (  `transactionid` )
) ENGINE = INNODB DEFAULT CHARSET = latin1;",$tableid);
              
if ($result = $db->query($query))
	{
		clean_db_connection();
		return 1;
	}
//then also create budget and expenses table
clean_db_connection();
if(create_budget_table($userid) && create_bills_table($userid))
	return $userid; //returns userid on success else 0
else 
	return 0;
}

function create_bills_table($userid)
{
	//creates table <$userid>_<$tabletype> eg. 1_expenses, 1_budget
	global $db;
	open_db_connection();
	$tablename=$userid."_bills";

	$query = sprintf("CREATE TABLE %s 
	( billid int NOT NULL AUTO_INCREMENT,
	  bill_due_to varchar(255) NOT NULL,
	  timestamp bigint NULL,
	  bill_due_date bigint NOT NULL,
	  comments varchar(255),
	  bill_pay_mode varchar(255) NOT NULL,
	  bill_amount int NOT NULL,
	  paid_status tinyint(1),
	  PRIMARY KEY (billid)
) ",$tablename);


	if ($result = $db->query($query))
	{
		clean_db_connection();
		echo $query;
		return 1;
	}
	else
	{
		clean_db_connection();
		return -1;
	}	
}
function add_bill($userid, $bill_due_to, $bill_due_date, $comments, $bill_pay_mode, $bill_amount)
{
global $db;
open_db_connection();
$userid = $db->real_escape_string($userid);
$bill_due_date = $db->real_escape_string($bill_due_date);
$comments = $db->real_escape_string($comments);
$bill_pay_mode = $db->real_escape_string($bill_pay_mode);
$bill_amount = $db->real_escape_string($bill_amount);
$paid_status = "0";
$timestamp = time();
$tablename = $userid."_bills";

//`billid`, `bill_due_to`, `bill_due_date`, `comments`, `bill_pay_mode`, `bill_amount`, `paid_status'
$query= sprintf(" INSERT INTO %s (bill_due_to,timestamp, bill_due_date, comments, bill_pay_mode, bill_amount, paid_status) VALUES ('%s','%s','%s','%s','%s','%s','%s')",$tablename, $bill_due_to, $timestamp,$bill_due_date, $comments, $bill_pay_mode, $bill_amount,$paid_status );

if($res= $db->query($query))
{
	//echo 'success!'
	clean_db_connection();
	return 1;
}
else
{
	echo $query;
	clean_db_connection();
	return -1;	
}


}

function pay_bill($userid,$bill_id)
{
global $db;
open_db_connection();
$tablename = $userid."_bills";
$row= array();
$query= sprintf("SELECT * FROM %s WHERE billid= '%s'",$tablename,$bill_id);
if(!($row = $db->query($query)))
{
	//error fetching data
	return -2;
}
$row= $row->fetch_array();

if($row['paid_status'] == 0)
{
$query = sprintf( "UPDATE %s SET paid_status= 1 where billid= '%s'",$tablename,$bill_id);
	if($result = $db->query($query) != 1)
	{
	return -1;
	}

}
else
{
	//echo"bill already paid!";
	clean_db_connection();
	return -4;
}
//category?
if (add_expense($userid,$row['bill_amount'],$row['bill_due_to'],"AutoGenerated Entry after Bill Payment","cash",$row['bill_pay_mode']))
	{
	clean_db_connection();
	return 1;
	}
	
else
	//echo "failed to add expense after bill payment";
	clean_db_connection();
	return -3;
}


?>

?>
