<?php 
session_start();

if(isset($_SESSION['bitsid']))
{
$bitsid=$_SESSION['bitsid'];
$logged_status=1;


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
<body><div id="overlay">
            
            <div id="popup">
            <!-- ANY CONTENTS -->
                <a href=""><img class="close_button" src="close.png"/></a>
                
                <form class="login" action="logincheck.php">

                      <label>Username</label>
            
                      <input type="text" tabindex="1" class="input" name="username" placeholder="F2011###" required><br><br>
            
                      <label>Password</label>
            
                      <input type="password" name="password" class="input" tabindex="2" required><br><br>
					  </input>

                     <?php echo'<font size=3 color=red>'.$_SESSION['error'].'</font><br>'; ?>
             
            
                      <input type="submit" id="submitbtn" value="Login" tabindex="4"><h2 class="current"> <a href="signup.php">Sign Up!</a></h2>
            
    
                </form>

            </div>
            
            
        </div>
      
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
					  ">My SSMS!</a></li><div style="position:absolute;left:90%;"><img src="menu.png"  alt=""></div>
					 
					 
					 
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
                    <p>The Society for Student Mess Services (SSMS) is an official body, registered under the Rajasthan Societies Act (1958),  which is empowered to manage the day-to-day affairs of the BITS Student Messes.  It employs nearly 200 mess-workers and caters to the needs of over 3500 students in BITS-Pilani, Pilani Campus. ... <a href="#" class="button top-4">Read More</a></p>
                </div>
            </div>  
            <div class="grid_6 box-1">
				<img src="images/page1-img2.png" alt="">
                <div class="extra-wrap">
                	<h2>Notices & Documents</h2>
                    <p>Important Notices and Documents.</p>
					<p class="text-5"><a href="menu.xlsx">SSMS Menu </a></p><p class="text-5"><a href="timing.docx">Mess Timings </a></p><p class="text-5"><a href="grubnotice.docx">Grub Notice </a></p>
					
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
					5.Setup your password for the account.<br>
					6.If the activation key matches with the database , you will be sent to a login page.Login with your bitsid and password.
					<br>
                </div>
              
            </div>
            <div class="grid_4">
            	<h2 class="top-1">Latest Events</h2>
                <div class="box-4 top-2">
                    <div class="date"><strong>10</strong><span>March, 2012</span></div>
                    <p><a href="#" class="link">Mess Worker end their strike.</p>
                </div>
                
                
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