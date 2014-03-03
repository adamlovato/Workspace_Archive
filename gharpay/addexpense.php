<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <meta http-equiv="content-script-type" content="text/javascript" />
	 <title>GharPay App</title>
	 <link href="style.css" rel="stylesheet" type="text/css" />
	 <!--[if IE 7]><link rel="stylesheet" href="http://theme-planet.com/BITSACM/css/ie7.css" type="text/css" media="screen, projection" /><![endif]-->
	 <!--[if IE 6]><link rel="stylesheet" href="http://theme-planet.com/BITSACM/css/ie6.css" type="text/css" media="screen, projection" /><![endif]-->
<meta charset="UTF-8"></head>
<body>
<?php $id=$_REQUEST['userid']; ?>
<div id="wrapper">
 <table><tr><td> <div id="form-div">
    <form class="form1" id="form1" action="expensesave.php" method="post">
	<p>
  
	  <table><tr><td> <div id="form-div">
    
	
 
	  <label for="name"><a href=addexpense.php?category=food&userid=<?php echo $id; ?>>Food</a></label>
	 
	 
		 </td><td></div><div id="form-div">
	  <label for="name"><a href="addexpense.php?category=clothing">Clothing</a></label>
	  
	  </div></td><td><div id="form-div">
		<a href="addexpense.php?category=hospital">Hospital</a>
      
    </div>
	 

  </div></td><td>
  </div></td></tr></table>
	  </p>
  <p>
  <?php $categ=$_REQUEST['category']; ?>
  <a name="formstart">
   <input name="category" type="hidden"   id="name"  value="<?php echo $categ; ?>" required="required" />
    <input name="userid" type="hidden"   id="name"  value="<?php echo $id; ?>" required="required" />
	  <label for="name">Amount Spent </label>
	  </p>
	  <p>
        <input name="amount" type="text"   id="name"  required="required"/>
        
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
        <input name="paidto" type="text"   id="name"  required="required"/>
        
      </p> 
		  <p>
	  <label for="name">Comments </label>
	  </p>
	  <p>
        <textarea name="comments"  id="name">Add comments</textarea>
</p>
      
     
	   

      <p class="submit">
        <input type="submit" value="Submit"/>
      
	 
	  </p>
	  
    </form>

  </div>
  </body>
  </html>