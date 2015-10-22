<?php
$usern   = $_POST['username'];
$email   = $_POST['email'];
$pass  = $_POST['password'];
$real = $_POST['userreal'];

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

   $reg=6;
   }
   echo "<script language='javascript'> window.location= \"adminmenu.php?userlog=$myUser&ad=1&reg=$reg&userad=$real\"; </script>";


?>