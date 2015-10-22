
<?php
$reg=0;
session_start();

$usern   = $_POST['username'];
$email   = $_POST['email'];
$pass  = $_POST['password'];



$con=mysql_connect("localhost","root","root");
  mysql_select_db("waggle");
  
$query = mysql_query("SELECT username FROM user WHERE username = '".$usern."'");

if(mysql_num_rows($query) > 0)
{
  print "<script type=\"text/javascript\"> alert (\"userid is already there\") </script>";
  $reg= -1;
}
else
{
$date = date("m-d-Y h:i:s");

 $sql = "INSERT INTO user (password, name, email,created)
         VALUES ('".$pass."','".$usern."','".$email."','".$date."')";
$res = mysql_query($sql) or die('Error:'.mysql_error());


				if (!isSet($_SESSION[$usern]) || $_SESSION[$usern] == 0)
				{
						$_SESSION[$usern]= 0;	
				}

   $reg= 1;
   
   
    $email_to = "jbleez02@gmail.com";
 
    $email_subject = "Waggle confirmation email";
	$email_message .= " You have been well created in Waggle please click on the following link to login http://localhost/waggle/index.php";
   $headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  

  
	   echo "<script language='javascript'> window.location=\"register.php?reg=$reg\"; </script>";
}

?>