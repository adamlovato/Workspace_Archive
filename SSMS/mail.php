<?php require 'phpmailer/class.phpmailer.php';
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Port = 465;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'ssl';

$mail->SMTPAuth = true;
$mail->Username = "ssmsbitspilani@gmail.com";
$mail->Password = "ssmsbits1";

$mail->SingleTo = true; // if you want to send mail to the users individually so that no recipients can see that who has got the same email.

$mail->From = "ssmsbitspilani@gmail.com";
$mail->FromName = "iSSMS ";
$email=$_REQUEST['email'];
$mail->addAddress("$email","User 1");


$mail->Subject = "Activation Key";
$length = 10;

$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

echo $randomString;
$mail->Body = "Your activation key is $randomString";


	header("location:activation.php");
	?>