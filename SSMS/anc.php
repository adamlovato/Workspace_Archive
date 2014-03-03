<?php 
session_start();

if(isset($_SESSION['bitsid']))
{
$bitsid=$_SESSION['bitsid'];
$logged_status=1;


}
else
{
header("location:index.php");
}

session_start();

include "db.php";

{
$sids=$_SESSION['bitsid_p'];

$sql="Select * from bills where S_ID='$sids'";

$result = mysqli_query($con,$sql);
$pi=0;
while ($row = mysqli_fetch_array($result))
{
$itemid["$pi"] = $row['ITEM_ID'];
$dor["$pi"] = $row['DOR'];
$price["$pi"]=$row['SP'];
$quantity["$pi"]=$row['QTY'];
$amount["$pi"]=$row['Bill_Amount'];
$nameof["$pi"]=$row['Item_Name'];

$pi++;
}

}
 {$Name[0]=$_SESSION['name'];
$Password=$_SESSION['password'];
$Signature[0]=$_SESSION['signature'];
$mess[0]=$_SESSION['mess'];}
$photog=$_SESSION['photo'];
$fbid=$_SESSION['fbid'];

 
					
					?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>
<!-- Table goes in the document BODY -->


    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="popup/popup.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/Bilbo_400.font.js"></script>
    <script src="js/tms-0.4.1.js"></script>
   
	
</head>
<body>
   <header> 
       <div> 
          <div>                 	
              <ul class="menu"><li><p>SSMS | BITS Pilani</p></li></ul> 
              <nav>  <div style="position:absolute; left:-600px; top:10px;">
               <ul class="menu">
                      <li ><a href="index.php">Home</a></li>
                      <li><a href="aboutus.php">About</a></li>
                      <li><a href="/forum">Forum</a></li>
                      <li><a href="contact.php">Contact Us </a></li>
                      <li class="current"><a href="<?php 
					  if($logged_status==1) {echo "profile.php";}
					  else {
					  echo "index.php#overlay";
					  }
					  ?>
					  ">My SSMS!</a></li>
					 
					 <li><a><img src="images/icon-2.jpg" height="50px" width="50px" alt=""></a></li>
					 
                  </ul></div>
				   <div class="soc-icons" ></div>
              </nav>
              <div class="clear"></div>
          </div>
      </div>
    </header>  
	
  <div id="overlay">
            
            <div id="popup">
            <!-- ANY CONTENTS -->
                
                
                <form class="login" action="profilesave.php">
<table><tr><td>
                       <label class="current">Name:</td><td><input  tabindex="1" class="input" type="text" name="name" readonly value="<?php echo $Name[0];  ?>"  <?php if($_SESSION['astat']==1) {echo "readonly"; } ?>></label></td></tr><tr>
                     <?php echo '<td><label class=current>Mess:</td><td><input tabindex="1" class="input" name=mess value='.$mess[0].' readonly></td></input></label>';?>
                      </tr><tr><td> <label class="current">Password:</td><td><input  tabindex="1" class="input"type="password"  name="password"  value="<?php echo $Password; ?>" onBlur="if(this.value=='') this.value='<?php echo $Password[0]; ?>'" onFocus="if(this.value =='<?php echo $Password[0]; ?>' ) this.value=''"></td></label>
                      </tr><tr><td><label class="current">Signature:</td><td><input tabindex="1" class="input" type="text"  name="signature"  value="<?php echo $Signature[0]; ?>"; onBlur="if(this.value==''){this.value='<?php echo $Signature[0]; ?>''}" onFocus="if(this.value=='<?php echo $Signature[0]; ?>''){this.value=''}"></input></label>
             
            </td></tr> 
			<tr><td><label class="current">Facebook Id:</td><td><input tabindex="1" class="input" type="text"  name="photo"  value="<?php echo $fbid; ?>"; onBlur="if(this.value==''){this.value='<?php echo $photog; ?>''}" onFocus="if(this.value=='<?php echo $photog; ?>''){this.value=''}"></input></label>
             
            </td></tr></table>
                      <input type="submit" id="submitbtn" value="Save" tabindex="4">
					  <div id="reply">
            
        </div>
            <?php if($_SESSION['astat']==1){echo "<font size=2 color=red><br>Name and Mess can only be edited by admin now</font>";} ?>
    
                </form>

            </div>
            
            
        </div>
		<div id="upload">
            
            <div id="popup">
            <!-- ANY CONTENTS -->
                <a href=""><img class="close_button" src="close.png"/></a>
                
                <form  id="form1" class="login" action="profilesave.php">
<table><tr><td><img src=<?php $photo =$_SESSION['photo']; echo "$photo";?> height="200px" width="200px" class="img-indent img-border"></td><td>
                   <p class="submit">
<h2 class="current">iProfile</h2>
<font size="4" color="gray"><ol style="margin-left:-10px;">
<li style="margin-left:0px;">
1.Goto your online facebook profile.</li><li style="margin-left:0px;">
eg www.facebook.com/abcd</li></ul>
</font>
Enter Profile Id:<input name="photo" style="height:30px; width:200px;" type="text" value="abcd"   /> 

            </td></tr></table>
                      <input type="submit" id="submitbtn" value="Save" tabindex="4">
            
    
                </form>

            </div>
            
            
        </div>
		
    <section id="content"><div class="ic"></div>
    	<div class="container_12">
        	<div class="grid_6 box-p" style="width:216px; height:216px; background:profile.png">

				<a href ="#"> <img src=<?php echo $photo?> height="200px" width="200px" style="border:#fff 8px solid;" ></a>
            </div>  
            <div class="grid_6 box-1">
                     <?php
					/* if($astat[0]==0)
					 {
					 echo "
				<form id='form' action='profilesave.php' method=post >
                    <fieldset>
                      <label class=current>:Name<input type=text name=name value=$Name[0] onBlur=if(this.value=='') this.value= $Name[0]  onFocus=if(this.value == $Name[0]  ) this.value= required=required><font size=2 color=red>*</font></label>
                       
					 
					  <select name=mess>
					  <option value=RB>RB Mess</option><font size=2 color=red>*</font>
					   <option value=SV>SV Mess</option>
					    <option value=VKB>VKB Mess</option>
						 <option value=RPA>RPA Mess</option>
						  <option value=MAL>MAL Mess</option>
						   <option value=MB>MB Mess</option>
						    <option value=KG>KG Mess</option>
					  </select></label>  
                      <label class=current>:Password<input type=text  name=password  value=$Password[0] onBlur=if(this.value==) this.value=$Password[0] onFocus=if(this.value ==$Password[0]  ) this.value=></label>
                      <label class=current>:Signature<input type=text  name=signature  value=$Signature[0] onBlur=if(this.value==){this.value=$signature[0]} onFocus=if(this.value==$Signature[0]){this.value=}></input></label>
                     
                    </fieldset>  
                  </form><font size=2 color=red>*Can not be edited later</font> ";} */

 { echo"<h2 class=current>Welcome <span>$Name[0]!</span><h2 style=font-size:20px;>Mess:$mess[0]<h2 style=font-size:20px;>Signature:$Signature[0]<br><h2 style=font-size:20px; class=current><a href=profile.php#overlay>Edit Profile</a></h4>
";
      }				  ?>
				  

            </div>  <div class="grid_6 box-1" style="width:200px;">
				<h2 class="current">iSSMS</h2>
				<h3><a href="anc.php"><img src="images/date.png">My Extras</a></h3><br>
				<h3><img src="images/date.png">My Mess Bill</h3><br>
				<h3><img src="close.png"><a href="logout.php">Logout!</a></h3><br>
            </div> 
			 
				
               
            <div >
		   	<table class="gridtable">
<tr>
	<th>Date</th><th>Item Name</th><th>Item Price</th><th>Item Quantity</th><th>Bill Amount</th>
</tr>
            <?php $billd=0; $k=0; for($k=0;$k<$pi;$k++)
			{ $billd=$billd+$amount[$k];
	echo"<tr><td>$dor[$k]</td><td>$nameof[$k]</td><td>$price[$k]</td><td>$quantity[$k]</td><td>$amount[$k]</td></tr>";
}
?>
<tr><td>Total ANC Bill till above date </td><td>Rs.<?php echo $billd ; ?> </td></tr>
</table> 
			
			</div>
<!--==============================footer=================================-->
  <footer>
      <p>©SSMS | BITS Pilani 2012-13.The site is best viewed on Chrome</p>
      <div class="soc-icons"><span>Follow Us:</span><a href="#"><img src="images/icon-1.jpg" alt=""></a><a href="#"><img src="images/icon-2.jpg" alt=""></a><a href="#"><img src="images/icon-3.jpg" alt=""></a></div>
  </footer>	
</body>
</html>