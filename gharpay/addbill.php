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
</div>

<div id="center-container">
    <div id="infovis"></div>    
</div>

<div id="right-container">

<div id="inner-details"></div>

</div>

<div id="wrapper" >
 <table><tr><td> <div id="form-div">
    <form class="form1" id="form1" action="expensesave.php"  method="post">
	<p>
  
	  <table><tr><td> <div id="form-div">
    
	
 
	  <div data-role="fieldcontain">
			    <fieldset data-role="controlgroup" data-type="horizontal" >
			     	<legend><label for="name">Prefered Mode of Payment </label></legend>
			         	<input type="radio" name="radio-choice-b" id="radio-choice-c" value="cash" checked="checked"  />
			         	<label for="radio-choice-c">Cash</label>
			         	<input type="radio" name="radio-choice-b" id="radio-choice-d" value="credit_card" />
			         	<label for="radio-choice-d">Credit Card</label>
			         	<input type="radio" name="radio-choice-b" id="radio-choice-e" value="bank" />
			         	<label for="radio-choice-e">Net Banking</label>
			    </fieldset>
			</div>	
	


  </div></td><td>
  </div></td></tr></table>
	  </p>
  <p>
  <?php $categ=$_REQUEST['category']; ?>
  <a name="formstart">
   <input name="category" type="hidden"   id="name"  value="<?php echo $categ; ?>" required="required" />
    <input name="userid" type="hidden"   id="name"  value="<?php echo $id; ?>" required="required" />
	  <label for="name">Bill Amount </label>
	  </p>
	  <p>
        <input type="range" name="slider-1" id="slider-1" value="60" min="0" max="1000" />

        
      </p> 
	   <p>
	 
		  <p>
	  <label for="name">Bill Due To </label>
	  </p>
	  <p>
        <input name="paidto" type="text"   id="name"  required="required"/>
        
      </p> 
	  <p>
	  <label for="name">Bill Due Date </label>
	  </p>
	  <p>
        <input type="text">
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
