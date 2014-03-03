<?php
include("Utils.php");

/*
$userid=4;
$category="abcd";
$timestamp=time();
$due_date= time() + (3600*24*30);
$amount = 1000;
$alert_amount= 900;
$happy_amount= 500;

$budget_array= array();
$bud=get_budget($userid,$category, time() - (3600*24*30),$due_date= time() + (3600*24*30*2),&$budget_array);
*/
/*
$row= array();
$p='password';
$row= get_user_data(4);
echo $row[$p];
*/

//UPDATE 1_bills SET paid_status = '0' WHERE billid= '1'

//echo pay_bill("1","1");
//create_bills_table("100");

$userid= "100";
$bill_due_date= time() + 3600*24*4;
$bill_due_to="House Rent";
$comments= "abcdefg";
$bill_pay_mode= "3";
$bill_amount= "1000";

add_bill($userid,$bill_due_to, $bill_due_date, $comments, $bill_pay_mode, $bill_amount);

/*
$username= "kallu mama";
$name= "ali baba";
$password= 'chalis chor';
$email= "khulja@simsim.com";
$lastip='1.1.1.1';

echo update_create_user($username,$name,$password,$email,$lastip);
*/





/*

function random_string($l){
	$s="as";
    $c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxwz";
    for(;$l > 0;$l--) $s .= $c{rand(0,strlen($c))};
    return str_shuffle($s);
}

for($i = 0; $i<100; $i++)
{
$userid = "4" ;
$amount = rand(0,1000);
$paidTo = NULL;
$comment =random_string(10);
$category = rand(1,3);
$mode = "cash";

//$mode = random_string(4);

add_to_wallet($userid,$amount,$paidTo, $comment, $category,$mode);
}
*/

/*
echo "get data\n";
$res= view_wallet($userid);
echo "wallet\n";
var_dump($res);

$res=get_expense_between_amount($userid,0, 10000);
echo "betwn amount \n";
var_dump($res);

$res=get_expense_between_dates($userid,0,10000);
echo "betwn dates \n";
var_dump($res);

$res=get_expense_category($userid, "amateur");
echo "amateur \n";
var_dump($res);

*/
