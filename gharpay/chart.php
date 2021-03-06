<!DOCTYPE html> 
<html> 
<head> 
<title>Expense Manager</title> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="min.css" />
<link rel="stylesheet" href="style.css" />
<script src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
<script src="flotr2.min.js"></script>
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
echo 'Welcome '.$user_data['name'];
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


<!-- Here graph display begins -->

<div id="container"></div>
    <!--[if IE]>
    <script type="text/javascript" src="/static/lib/FlashCanvas/bin/flashcanvas.js"></script>
    <![endif]-->
    <script type="text/javascript" src="flotr2.min.js"></script>
	
	<script type="text/javascript">
	
	
	<?php
	
	echo "(function mouse_drag(container) {
	var
    
	";
	
	
	$category_array=array('Shopping','Food','Travel','Bills','Clothes','Groceries');//here we need the mode array from seesion
	$hour=0;
	$min=0;
	$counter=1;
	foreach($category_array as $category)
	{
	echo "d".$counter."=[";
	
	
	$today_midnight=mktime($hour, $min);
	$todate=time();
	if(!(empty($_GET['days'])))
	{
	$days=$_GET['days'];
	}
	else
	$days=30;
	$todate=$today_midnight-86400*30;
	$expense=array();
	
	
	get_expense($userid,$category,-1,$today_midnight,$todate,-1,-1,&$expense);
	foreach($expense as $expense_element)
	{
	///////
	
	echo $expense_element['amount'].",";
	
	///////////////
	}
	
	echo "],";
	}
	?>

    options,
    graph,
    start,
    i;
	  
  options = {
    xaxis: {min: 0, max: 20},
      title : 'Mouse Drag'
  };

  // Draw graph with default options, overwriting with passed options
  function drawGraph (opts) {

    // Clone the options, so the 'options' variable always keeps intact.
    var o = Flotr._.extend(Flotr._.clone(options), opts || {});

    // Return a new graph.
    return Flotr.draw(
      container,
      [ d1, d2, d3,d4,d5 ],
      o
    );
  }

  graph = drawGraph();      

  function initializeDrag (e) {
    start = graph.getEventPosition(e);
    Flotr.EventAdapter.observe(document, 'mousemove', move);
    Flotr.EventAdapter.observe(document, 'mouseup', stopDrag);
  }

  function move (e) {
    var
      end     = graph.getEventPosition(e),
      xaxis   = graph.axes.x,
      offset  = start.x - end.x;

    graph = drawGraph({
      xaxis : {
        min : xaxis.min + offset,
        max : xaxis.max + offset
      }
    });
    // @todo: refector initEvents in order not to remove other observed events
    Flotr.EventAdapter.observe(graph.overlay, 'mousedown', initializeDrag);
  }

  function stopDrag () {
    Flotr.EventAdapter.stopObserving(document, 'mousemove', move);
  }

  Flotr.EventAdapter.observe(graph.overlay, 'mousedown', initializeDrag);

})(document.getElementById("editor-render-0"));






</script>




<!-- Here footer begins -->

<div data-role="footer">
<div  data-type="horizontal" style="position:absolute; left:90%;top:-5px;" >
<a href="index.html" data-role="button" data-inline="true" data-icon="info"  ><font color=red size=2><b>Logout</font></a></div>
</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>