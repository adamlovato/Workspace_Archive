

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
<font align=center><div id="fonter">Enter  Credentials to Login! </div> </font>
<div id="wrapper">
  <div id="form-div">
    <form class="form1" id="form1" action="loginchecker.php" method="post">
	

		  
		  <p>
	  <label for="name">Username </label>
	  </p>
	  <p>
        <input name="username" type="text"   id="username" value="Username"  onfocus="if(this.value=='Username') this.value='';" 
                             onblur="if(this.value=='') this.value='Username';" required="required" />
        
      </p>
      
      <p class="password">
	 <label for="password">Password</label>
	 </p>
	 <p>
        <input type="password" name="password" id="password" value="password" onfocus="if(this.value=='password') this.value='';" 
                             onblur="if(this.value=='') this.value='password';" required="required" required="required"/>
       
      </p>

      <p class="submit">
        <input type="submit" value="Submit"/>
      
	 
	  </p>
	  
    </form>

  </div>
</div>
</body>
</html>