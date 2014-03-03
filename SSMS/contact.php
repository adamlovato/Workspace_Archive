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
    <title>Contact Us</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/Bilbo_400.font.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
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
                      <li class="current"><a href="contact.php">Contact Us </a></li>
                      <li><a href="<?php 
					  if($logged_status==1) {echo "profile.php";}
					  else {
					  echo "index.php#overlay";
					  }
					  ?>
					  ">My SSMS!</a></li>
					 
					 <li><a><img src="images/icon-2.jpg" height="50px" width="50px" alt=""></a></li>
					 
                  </ul></div>
				   <div class="soc-icons" ></div></nav>
              <div class="clear"></div>
          </div>
      </div>
    </header>   
  <!--==============================content================================-->
    <section id="content"><div class="ic"></div>
    	<div class="container_12 top">
            <div class="grid_8">
            	<h2>SSMS</h2>
                <div class="box-5 right-1">
                    
                    <p class="p2">The Society for Student Mess Services (SSMS) is an official body, registered under the Rajasthan Societies Act (1958),  which is empowered to manage the day-to-day affairs of the BITS Student Messes.  It employs nearly 200 mess-workers and caters to the needs of over 3500 students in BITS-Pilani, Pilani Campus.</p>
                    <p class="p2">The Society directly handles all financial transactions and operational management of all the seven messes on campus and one All-Night Canteen. The Society has presently tied up with Sodexo, the international Food Service company, who have been hired as consultants to monitor, review and suggest changes in the system. <p> This is an attempt to streamline the entire Food Service Chain on campus, and ensure the students can look forward to good food being supplied to them regularly at affordable rates, by a professionally run body.</p>
                    <p>Although all students registered in BITS Pilani are de facto members of this Society, the day-to-day operational aspects and all other major decisions are overseen by the Governing Council (SSMS). 
The Governing Council comprises elected representatives from each of the messes, four nominated members in the form of the AMC (Advisory and Monitoring Committee), two nominees from BITS Pilani, and four others. 
The main post-holders in the Council include the President, Vice President, Secretary, Joint Secretary and the Treasurer of the Society. 
Every student on campus is encouraged to voice his/her opinions and suggestions towards the improvement of the mess-system.  To indulge in cliches, the Society is after all an initiative of the students, by the students, for the students of BITS Pilani.
.</p>
                </div>
                
            </div>
            <div class="grid_4">
            	<h2>SSMS Council</h2>
                <div class="box-6 top-5">
                    <img src="images/page2-img4.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                    <p><a href="#" class="link">Anshul Sharma </a><br> President | SSMS.<br>Contact:++91-7891173453</p>
                </div>
				<div class="box-6 top-6">
                    <img src="images/page2-img2.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                    <p><a href="#" class="link">Chandeesh Gurajala </a><br>Member | AMC. <br>Contact:+91-8058437487</p>
                </div>
                <div class="box-6 top-6">
                    <img src="images/page2-img3.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                    <p><a href="#" class="link">Sanjeed Schamnad</a><br> Member | AMC. <br>Contact:+91-</p>
                </div>
				<hr>
				<h2>For problems related to website</h2>
				<div class="box-6 top-5">
                    <img src="webmaster.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                    <p><a href="#" class="link">Prashant Kiran</a><br> Web Coordinator  | SSMS.<br>Contact:+91-7742558868   ssmsbitspilani@gmail.com</p>
                </div>
               
            </div>  
            
            
<!--==============================footer=================================-->
 <footer>
      <p>©SSMS | BITS Pilani 2012-13.The site is best viewed on Chrome</p>
      <div class="soc-icons"><span>Follow Us:</span><a href="#"><img src="images/icon-1.jpg" alt=""></a><a href="#"><img src="images/icon-2.jpg" alt=""></a><a href="#"><img src="images/icon-3.jpg" alt=""></a></div>
  </footer>	
</body>
</html>