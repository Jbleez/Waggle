<?php
$usern   = $_GET['username'];
$email   = $_GET['email'];
$pass  = $_GET['password'];
$real = $_GET['userreal'];

$date = date("Y-m-d H:i:s");


$con=mysql_connect("localhost","root","");
  mysql_select_db("waggle");

 
$query = mysql_query("SELECT username FROM user WHERE username = '".$usern."'");

if(mysql_num_rows($query) > 0)
{
 
  $reg= 0;
}
else
{
 $sql = "INSERT INTO user (password, name, username, email,created)
         VALUES ('".$pass."','".$real."','".$usern."','".$email."','".$date."')";
$res = mysql_query($sql) or die('Error:'.mysql_error());


				if (!isSet($_SESSION[$usern]) || $_SESSION[$usern] == 0)
				{
						$_SESSION[$usern]= 0;	
				}

   $reg= 2;
   }
   echo "<script language='javascript'> window.location=\"index.php?reg=$reg\"; </script>";


?>