<?php

$reg=0;
$num=0;
session_start();

$tt   = $_POST['title'];
$desc   = $_POST['desc'];
$ad = $POST['ad'];

if (isset($_POST['stat']) && $_POST['stat'] == 'private')
{$num = 1;}
else
{$num = 0;}

$user = $_POST['usern'];

$con=mysql_connect("localhost","root","");
  mysql_select_db("waggle");
  
$query = mysql_query("SELECT id FROM user WHERE name = '".$user."'");
$id='';
					while($rec=mysql_fetch_array($query)) 
					{ $id = $rec['id']; }
					
$date = date("Y-m-d H:i:s");

 $sql = "INSERT INTO forum (title, created, description, creatorID, private)
         VALUES ('".$tt."','".$date."','".$desc."','".$id."','".$num."')";
$res = mysql_query($sql) or die('Error:'.mysql_error());

   $reg= 1;
   echo "<script language='javascript'> window.location=\"createForum.php?reg=$reg&userfname=$user&ad=$ad\"; </script>";

?>