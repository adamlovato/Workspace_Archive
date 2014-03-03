<?php
include("DBLib.php");
function amount_left($userid,$entry_number )
{
global $db;
	open_db_connection();
	$tablename=$userid."_expenses";
	$query= sprintf("SELECT sum( amount )FROM `%s`WHERE 1 ",$tablename);	
	$spent = $db->query($query);
	
	$tablename=$userid."_budget";
	$query2= sprintf("SELECT sum( amount )FROM `%s`WHERE entry_no >'%s'",$tablename,$entry_number);
	$budget= $db->query($query2);
	
	return $budget-$spent;	
	clean_db_connection();
}

function append_account_asper_mode($userid,$mode,$amount)
{
	$data = array();
	$data= get_user_data($userid);
	$mode .= "_amount";
	$data[$mode] -= $amount;
	//now update in db
	append_account($data);
	
}


function get_latest_budget($userid,$entry_number,&$result)
{
	global $db;
	open_db_connection();
	$tablename=$userid."_budget";
	$query= sprintf("SELECT * from '%s' WHERE entry_no > '%s'",$tablename,$entry_number);	
	if ($result = $db->query($query))
	{
		clean_db_connection();
		return 1;
	}
	else
	{
	echo"lookup failed!";
	}
	clean_db_connection();
}

function add_to_wallet($userid,$amount,$paidTo, $comment, $category,$mode)
{

$res= add_expense($userid,$amount,$paidTo, $comment, $category,$mode);

if($res)	
	return true;
else 
	return false;
}

//gets all records for given userid
function view_wallet($userid)
{
$expense_array= array();

//get_expense($userid,$category,$mode,$fromdate,$todate,$flooramount,$ceilamount,&$expense_array)

if(!get_expense($userid,-1,-1,-1,-1,-1,-1,$expense_array))
	echo "error in get_expense\n";
//echo $expense_array[0]['category'];
return $expense_array;
}

function get_expense_between_amount($userid,$flooramount, $ceilamount)
{
$res= array();
if(!get_expense($userid,-1,-1,-1,-1,$flooramount,$ceilamount,$res))
	echo"error in get_between_amount\n";
return $res;
}

function get_expense_between_dates($userid,$fromdate,$todate)
{
$res= array();
if(!get_expense($userid,-1,-1,$fromdate,$todate,-1,-1,$res))
	echo"error in get_expense_between_dates\n";
return $res;
}

function get_expense_category($userid, $category)
{
$res= array();
if(!get_expense($userid,$category,-1,-1,-1,-1,-1,$res))
	echo"error in get_expense_category\n";
return $res;
}

function get_expense_mode($userid, $mode)
{
$res= array();
if(!get_expense($userid,-1,$mode,-1,-1,-1,-1,$res))
	echo"error in get_expense_mode\n";
return $res;
}

function get_user_details($userid)
{
$res= get_user_data($userid);
if(res == false)
	echo"error in get_user_details\n";
return $res;
}


?>
