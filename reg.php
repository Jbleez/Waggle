
<?php
require("PHPMailer_v5.1\class.phpmailer.php");
require("PHPMailer_v5.1\class.smtp.php");

$reg=0;
session_start();

$usern   = $_POST['username'];
$email   = $_POST['email'];
$pass  = $_POST['password'];
$real = $_POST['userreal'];



$con=mysql_connect("localhost","root","");
  mysql_select_db("waggle");
  
$query = mysql_query("SELECT username FROM user WHERE username = '".$usern."'");

if(mysql_num_rows($query) > 0)
{
 
  $reg= 0;
}
else
{

$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "smtp1.spsu.edu"; // SMTP server

$mail->From     = "lnyabeye@spsu.edu";
$mail->AddAddress("lnyabeye@spsu.edu");

$mail->Subject  = "Waggle registration";
$mail->Body     = "Please click on this link to complete the registration: http://localhost/Waggle%20project/registration.php?username=$usern&email=$email&password=$pass&userreal=$real";
$mail->WordWrap = 50;

if(!$mail->Send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
  $reg= 1;
	   echo "<script language='javascript'> window.location=\"index.php?reg=$reg\"; </script>";
}

?>