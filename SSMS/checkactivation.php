<?php 
session_start();

if(isset($_SESSION['email']))
{
$email=$_SESSION['email'];



}
else
{
header("location:index.php");
}

?>
<?php include "db.php";

$activationkey=$_REQUEST['activation'];
$email=$_SESSION['email'];
$passwordbyuser=$_REQUEST['password'];
$sql="Select * from userdata  where email='$email' ";
$result = mysqli_query($con,$sql);
$i=0;
while ($row = mysqli_fetch_array($result))
{
$activation_key["$i"] = $row['activation_key'];
$act_index["$i"]=$row['activation_index'];
$bitsid["$i"]=$row['bitsid'];

$i++;
}
if($act_index[0]>=2)
{
header("location:activation.php?errorcode=$act_index[0]");
}
$sids=$_SESSION['s_id'];
if( ($activation_key[0]==$activationkey) )
 {
 session_start();
 $_SESSION['activating']=1;
 
 $sqls="Select * from ssmsuserdata where S_ID='$sids' ";
 
 
$result2 = mysqli_query($con,$sqls);
$i=0;
while ($row2 = mysqli_fetch_array($result2))
{
$s_id["$i"] = $row2['S_ID'];
$name["$i"]=$row2['NAME'];
$bhavan["$i"]=$row2['BHAWAN'];


$i++;}
//echo $bhavan[0]; 
if($bhavan[0]==='AK ' || $bhavan[0]==='RP ')
{
$mess='RPA';
}
if($bhavan[0]=='SK ' || $bhavan[0]=='VY ')
{
$mess='SV';
}
if($bhavan[0]=='BD ' || $bhavan[0]=='RM ')
{
$mess='RB';
}
if($bhavan[0]=='GN ' || $bhavan[0]=='KR ')
{
$mess='KG';
}if($bhavan[0]==='VK ' || $bhavan[0]==='BG ')
{

$mess='VKB';
}
if($bhavan[0]=='MR ' )
{
$mess='MR';
}
if($bhavan[0]=='ML ' )
{
$mess='ML';
}
if($bhavan[0]=='PS ' )
{
$mess='NA';
}
$sql3 ="update userdata SET
name='{$name[0]}',
password='{$passwordbyuser}',
mess='{$mess}',bitsid_p='{$s_id[0]}' where bitsid='$bitsid[0]'";
	 $result3 = mysqli_query($con,$sql3);

 session_start();
 $_SESSION['bitsid']=$bitsid[0];
 $_SESSION['name_act']=$name[0];
 $_SESSION['mess_act']=$mess;
         $_SESSION['error']="Account Succesfully created.Please login using your credentials.";
 header("location:index.php#overlay");
 
 
 }

else
{
$act_index[0]=$act_index[0]+1;
$sql2 ="update userdata SET
activation_index='{$act_index[0]}' where email='$email'";
$result2 = mysqli_query($con,$sql2);
if($act_index[0]<3)

					//mail function comes here
					header("location:activation.php?errorcode=$act_index[0]");

 }
 

					
					?>
