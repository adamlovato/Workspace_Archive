<html><head></head><body>
<?php
$sql3="Select * from complaints  where author_mess='$mess' and status=0";
$result3=$pdo->query($sql3);
$i=0;
while ($row = $result3->fetch())
{
$complaint_id["$i"]=$row['complaint_id'];
$complaint["$i"]=$row['complaint'];
$author_bitsid["$i"]=$row['complaint'];
$author_photo["$i"]=$row['author_photo'];
$time["$i"]= $row['time'];



$i++;
}


?>
 <div class="grid_12 box-2">
            	<div><h2 class="current">Complaints in <?php echo $_SESSION['mess'];?> Mess</h2>
				<?php for($a=0;$a<$i;$a++)
				{
				echo"<img src=$author_photo[$a] width=70px height=72px>$complaint[$a]<br>";echo"<form id=form method=post action=reply.php >                                                             
                    <fieldset><img src=<?php echo $photo;?> width=70px height=72px style=position:absolute;left:0px;>  
					 <textarea style=position:absolute;left:70px; name=complaint >Have Complaints?Post them here and we will see that they get resolved soon.</textarea>
                      <br><br><br><div class=btns><a href=# class=button>Clear</a><a href=# class=button onClick=document.getElementById('form').submit()>Post</a></div>
                    </fieldset>  
                  </form> ";
				}
                    ?>
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
	

