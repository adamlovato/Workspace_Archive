<?php $pdo = new PDO('mysql:host=localhost;dbname=ipak', 'ipak','ipak');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');



$sql="Select * from patient_data order by patient_id desc";
$result=$pdo->query($sql);
$i=0;
while ($row = $result->fetch())
{
$pateint_id["$i"] = $row['pateint_id'];
$left_leg_angle["$i"] = $row['left_leg_angle'];
$right_leg_angle["$i"] = $row['right_leg_angle'];
$spine_head_angle["$i"]=$row['spine_head_angle'];
$spine_hip_angle["$i"]=$row['hip_spine_angle'];
$i++;
}
$s_left_leg_angle=0;
$s_right_leg_angle=0;
$s_spine_head_angle=0;
$s_spine_hip_angle=0;
for($h=0;$h<$i;$h++)
{
$s_left_leg_angle=$left_leg_angle["$h"]+$s_left_leg_angle;
$s_right_leg_angle=$right_leg_angle["$h"]+$s_right_leg_angle;
$s_spine_head_angle=$spine_head_angle["$h"]+$s_left_leg_angle;
$s_spine_hip_angle=$spine_hip_angle["$h"]+$s_spine_hip_angle;

}
$s_left_leg_angle=$s_left_leg_angle/$i;
$s_right_leg_angle=$s_right_leg_angle/$i;
$s_spine_head_angle=$s_spine_head_angle/$i;
$s_spine_hip_angle=$s_spine_hip_angle/$i;
$knocknees=0;
if($s_left_leg_angle < 164 || $s_right_leg_angle < 164 )
{$knocknees=1;}
else
{$knocknees=0;}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>iPAK</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body>
<div id="main_container">
  <div class="header">
    <div id="logo"><font size =8 color="black">iPak</font></div>
    <div class="right_header">
      <div class="top_menu"> <a href="#" class="login">login</a> <a href="#" class="sign_up">signup</a> </div>
      <div id="menu">
        <ul>
          <li><a class="current" href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="middle_box">
    <div class="middle_box_content"><img src="images/banner_content.jpg" alt="" /></div>
  </div>
  <div class="pattern_bg">
    <div class="pattern_box">
      <div class="pattern_box_icon"><img src="images/icon1.png" alt="" width="70" height="112" /></div>
      <div class="pattern_content">
        <h1>Patient Details <span class="blue"></span></h1>
        <p class="pat">Patient Id :<?php echo 1?><br>Left Leg Angle :<?php echo $s_left_leg_angle?><br>Right Leg Angle :<?php echo $s_right_leg_angle?><br>Spine Head Angle :<?php echo $s_spine_head_angle?><br>Hip Spine Angle :<?php echo $s_spine_hip_angle?>
		</p>
      </div>
    </div>
    <div class="pattern_box">
      <div class="pattern_box_icon"><img src="images/icon2.png" alt="" width="70" height="112" /></div>
      <div class="pattern_content">
        <h1>Patient  <span class="blue"> Diagnosis </span></h1>
        <p class="pat"><?php if($knocknees==1)  echo"The analysis shows that you have some postural defect.Based on our database most probably a case of knocknees.<br><a href=preventivemeasures.html>Preventive Measures</a>"; else { echo "Based on the data gathered we conclude that you do not have any structural defects.";}?> </p>
		
      </div>
    </div>
  </div>
  
  <div id="footer">
  
  </div>
</div>
</body>
</html>
