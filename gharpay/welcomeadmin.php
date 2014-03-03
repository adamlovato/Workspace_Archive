

<!DOCTYPE html> 
<html> 
<head> 
<title>Page Title</title> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="min.css" >
<link rel="stylesheet" href="style.css" />
<script src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0-rc.1/jquery.mobile-1.2.0-rc.1.min.js"></script>
</head> 
<body> 


<div data-role="page" class="type-interior">

<div data-role="header" data-theme="b">
<h1>
<div style="position:absolute; left:10%; top:5px"><font size=1>
<?php //printing name of user
include 'DBLib.php';
$userid=0;
$user_data=array();
$user_data=get_user_data($userid);
//var_dump($user_data);
echo "welcome $user_data[name]";
?>
</font></div>
<div style="position:absolute; left:19%; top:5px"><font size=4 >
<?php //printing total amount
$amount_left=$user_data['credit_card_amount']+$user_data['bank_amount']+$user_data['cash_amount'];
echo 'Account: Rs.'.$amount_left;
?>
</div>
<div  data-type="horizontal" style="position:absolute; left:0%;top:-5px;" >
<a href="index.html" data-role="button" data-inline="true" data-icon="alert"  ><font color=red size=2><b>3</font></a>
<a href="index.html" data-role="button" data-inline="true" data-icon="info"><font color=red size=2> <b>5</font></a>

</div></h1>
</div><!-- /header -->
<div>
<table>
<tr > <td style="width:20%;height:20%;"><div><a href="#addexpense"><image src="addexpense.png" width="44px" height="44px"  ></a></img><br><font size=1>Add Expense |</div></td><td><div><image src="viewexpenses.png" width="44px" height="44px"  ></img><br><font size=1>View Expense |</div></td><td><div><image src="budget.png" width="44px" height="44px" ></img><br><font size=1>Create a Budget |</div></td><td><div><image src="editprofile.png" width="44px" height="44px"  ></img><br><font size=1>Edit Profile |</div></td><td><div><image src="logout.png" width="44px" height="44px"  ></img><br><font size=1>Logout</font></div></td></tr></table></div>


<div data-role="collapsible-set" data-content-theme="a">
<div data-role="collapsible" data-theme="b" data-content-theme="b">
<h3>Lila, am I spending right?</h3>
<p><div> <h3>You are doing great on Budget.Its green from our side for today's spending!</h3>
<?php
$categories=array('Shopping','Food','Travel','Bills','Clothes','Groceries');
$budget=array();
get_budget($userid,-1,-1,-1,&$budget);//FUNCTION TO GET BUDGET;
//var_dump($budget);
foreach($budget as $budget_element)
{
$percent=($budget_element['amount_spent']/$budget_element['amount'])*100;
if($percent<=85 && $percent>=70)
$colour="orange";
else if($percent>=85)
$colour="red";
else
$colour=" ";
echo '
<br><font color="darkslategray">'.$budget_element['category'].' : '.$budget_element['amount_spent'].'</font><div class="meter animate '.$colour.'">
<span style="width: '.$percent.'%"><span></span></span>
</div>
';
}
?>
</div>
</p>
</div>

<!-- Here bills display begins--> 
<div data-role="collapsible" data-theme="a" data-content-theme="a">
<h3>Bills Bitch!</h3>
<p><ul data-role="listview" data-theme="d" data-divider-theme="d">
<li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>
<li>
<h3>Avery Walker</h3>
<p><strong>Re: Dinner Tonight</strong></p>
<p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
<p class="ui-li-aside" style="font-size:36px;"><strong><span class="WebRupee">Rs</span> 36</strong></p>
</li>
<li>
<h3>Avery Walker</h3>
<p><strong>Re: Dinner Tonight</strong></p>
<p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
<p class="ui-li-aside" style="font-size:36px;"><strong><span class="WebRupee">Rs</span> 36</strong></p>
</li>
<li data-role="list-divider">Thursday, October 7, 2010 <span class="ui-li-count">1</span></li>
<li>
<h3>Avery Walker</h3>
<p><strong>Re: Dinner Tonight</strong></p>
<p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
<p class="ui-li-aside" style="font-size:36px;"><strong><span class="WebRupee">Rs</span> 36</strong></p>
</li>
<li data-role="list-divider">Wednesday, October 6, 2010 <span class="ui-li-count">3</span></li>
<li>
<h3>Avery Walker</h3>
<p><strong>Re: Dinner Tonight</strong></p>
<p>Sure, let's plan on meeting at Highland Kitchen at 8:00 tonight. Can't wait! </p>
<p class="ui-li-aside" style="font-size:36px;"><strong><span class="WebRupee">Rs</span> 36</strong></p>
</li>
</ul></p>
</div>

<!-- Here form begins-->
<div data-role="collapsible" data-theme="a" data-content-theme="d">
<h3>Lemme maintain my records!</h3>
<p><div id="wrapper" >
<table><tr><td> <div id="form-div">
<a name="#addexpense">
<form class="form1" id="form1" action="expensesave.php"  method="post">
<p>

<table><tr><td> <div id="form-div">



<div data-role="fieldcontain">
<fieldset data-role="controlgroup" data-type="horizontal" >
<legend><label for="name">Amount Spent </label></legend>
<input type="radio" name="radio-choice-b" id="radio-choice-c" value="on" checked="checked"  />
<label for="radio-choice-c">Cash</label>
<input type="radio" name="radio-choice-b" id="radio-choice-d" value="off" />
<label for="radio-choice-d">Credit Card</label>
<input type="radio" name="radio-choice-b" id="radio-choice-e" value="other" />
<label for="radio-choice-e">Net Banking</label>
</fieldset>
</div>	



</div></td><td>
</div></td></tr></table>
</p>
<p>
<?php $categ=$_REQUEST['category']; ?>
<a name="formstart">
<input name="categoryc" type="hidden"   id="name"  value="<?php echo $categ; ?>" required="required" />
<input name="useridc" type="hidden"   id="name"  value="<?php echo $id; ?>" required="required" />
<label for="name">Amount Spent </label>
</p>
<p>
<input type="range" name="slider-1c" id="slider-1" value="60" min="0" max="1000" />


</p> 
<p>
<label for="name">Mode of payment </label>
</p>
<p>
<select name="mode" type="text"   id="name"  required="required">
<option value="Credit card" selected="selected">Credit card</option>
<option value="Cash">Cash</option>
<option value="Net Banking">Net Banking</option>
</select>
</p> 
<p>
<label for="name">Paid To </label>
</p>
<p>
<input name="paidtoc" type="text"   id="name"  required="required"/>

</p> 
<p>
<label for="name">Comments </label>
</p>
<p>
<textarea name="commentsc"  id="name">Add comments</textarea>
</p>




<p class="submit">
<button type="submit" data-theme="b" name="submit" value="submit-value">Submit</button>


</p>

</form>

</div></table></p>
</div>
</div>
<!-- Here expense history display begins -->
<div data-role="collapsible" data-theme="a" data-content-theme="b">
<h3>expense History</h3>
<p>	
	<div class="ui-bar ui-bar-b" >
					<h1 style="margin-left:50%;">My Expense History</h1><br/>
					<h6 ><a href="#" data-role="button" data-inline="true" data-mini="true" data-rel="back" data-theme="c">Back</a>
					<a href="http://www.google.com" data-role="button" data-inline="true" data-mini="true" data-icon="grid" >Last 7 days</a>
					<a href="#" data-role="button" data-inline="true" data-mini="true" data-icon="grid">Last week</a>
					<a href="#" data-role="button" data-inline="true" data-mini="true" data-icon="grid">Last 30 days</a>
					<a href="#" data-role="button" data-inline="true" data-mini="true" data-icon="grid">Last month</a>
					</h6>
					<a href="#" data-role="button" data-inline="true" data-mini="true" data-icon="gear">Advanced Search</a>
	</div>

	<?php
	
	$category_array=array('Shopping','Food','Travel','Bills','Clothes','Groceries');//here we need the mode array from seesion
	$hour=0;
	$min=0;
	
	foreach($category_array as $category)
	{
	
	echo ' <div data-role=collapsible>
					<h2>'.$category.'</h2>
					<ul data-role="listview" data-theme=c data-divider-theme=d>
	';	
	$today_midnight=mktime($hour, $min);
	$todate=time();
	
	if(!(empty($_GET['days'])))
	{
	$days=$_GET['days'];
	
	}
	else
	$days=1;
	while($days--)
	{
	$expense=array();	
	get_expense($userid,$category,-1,$today_midnight,$todate,-1,-1,&$expense);
	echo '<li data-role="list-divider">Friday, October 8, 2010 <span class="ui-li-count">2</span></li>';
	foreach($expense as $expense_data)
	{
	echo 
	'<li>
	<h3>'.$expense_data['paidto'].'</h3>
	<p><strong>'.$expense_data['mode'].'</strong></p>
	<p>'.$expense_data['comments'].' </p>
	<p class="ui-li-aside" style="font-size:36px;"><span><strong class="WebRupee">Rs</span>'.$expense_data['amount'].' <a href=delete.php?userid='.$userid.'&type=expenses&id=1 >Delete</a> </strong></p>
	</li>
	';
	}
	$todate=$today_midnight;
	$$today_midnight=$today_midnight-86400;
	}
	echo '</ul>
	</div>';
	
	}
	?>
</p></div>
<!-- Here footer begins -->

<div data-role="footer">
<div  data-type="horizontal" style="position:absolute; left:90%;top:-5px;" >
<a href="index.html" data-role="button" data-inline="true" data-icon="info"  ><font color=red size=2><b>Logout</font></a></div>
</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>
