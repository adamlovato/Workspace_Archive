<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
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
                      <li class="current"><a href="index.php">Home</a></li>
                      <li><a href="aboutus.php">About</a></li>
                      <li><a href="/forum">Forum</a></li>
                      <li><a href="contact.php">Contact Us </a></li>
                      <li><a href="<?php 
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
	
  
    <section id="content"><div class="ic"></div>
    	<div class="container_12">
        	<div class="grid_6 box-1">
				<img src="images/page1-img1.png" alt="">
                <div class="extra-wrap">
                	<h2>SSMS In Brief</h2>
                    <p>SSMS : Students society for mess services was formed by dissolving smc.SSMS comprises of different teams at different levels and its representatives are ... <a href="#" class="button top-4">Read More</a></p>
                </div>
            </div>  
            <div class="grid_6 box-1 signup">
				<img src="images/page1-img2.png" alt="">
                <div class="extra-wrap">
                	<h2>Sign Up Form</h2>
					<h2 class="current">Step 1</h2>
            	<form id="form" method="post" action="emailsender.php" >
                    <fieldset>
                      <label>1.Enter Bits ID (e.g.f2011###)</label><input name="bitsid" type="text" value="F2011###" onBlur="if(this.value=='') this.value='F2011###" onFocus="if(this.value =='F2011###' ) this.value=''">
                      </input>
					 
                    
                    </fieldset>  
                  </form> 
				  <?php if($_REQUEST['error']==1){echo"<font size=3 color=red>Please enter a valid id</font>";} ?>
                </div>
				
            </div>  
            <div class="grid_12 box-2">
            	<div>
                    <p class="text-3">Welcome to <span>SSMS Online</span>!</p>
                    
                </div>
            </div>
            <div class="grid_8">
            	<h2 class="top-1">Important ! Login | Sign Up Process</h2>
                <div class="box-3">
                	To login you must have your Google BitsMail Account Activated.<br>
					Steps to Register:<br>
					1.Goto MySSMS link.Click on signup.<br>
					2.Enter your BitsMail ID.<br>
					3.The site will send a temporary activation key to your BitsMail.<br>
					4.Enter the temporary activation key in the field asking for it.<br>
					5.You have completed the registration process.<br>
                </div>
                <a href="#" class="button top-4">Read More</a>
            </div>
            <div class="grid_4">
            	<h2 class="top-1">Latest Events</h2>
                <div class="box-4 top-2">
                    <div class="date"><strong>18</strong><span>Oct, 2012</span></div>
                    <p><a href="#" class="link">ANC Opens after 2 months.</p>
                </div>
                
                <a href="#" class="button top-4">Read More</a>
            </div>    
            <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
  <footer>
      <p>©SSMS | BITS Pilani 2012-13.The site is best viewed on Chrome</p>
      <div class="soc-icons"><span>Follow Us:</span><a href="#"><img src="images/icon-1.jpg" alt=""></a><a href="#"><img src="images/icon-2.jpg" alt=""></a><a href="#"><img src="images/icon-3.jpg" alt=""></a></div>
  </footer>	
</body>
</html>