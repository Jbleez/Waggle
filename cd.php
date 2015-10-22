
<?php
$reg=0;
$ad = $POST['ad'];
session_start();
$con=mysql_connect("localhost","root","");
  mysql_select_db("waggle");
$tt   = $_POST['title'];
$text  = $_POST['desc'];
$forum = $_POST['forum'];

$user = $_POST['usern'];
$id1 = "";
$tt1="";

$con=mysql_connect("localhost","root","");
  mysql_select_db("waggle");
  
$query = mysql_query("SELECT id FROM user WHERE name = '".$user."'");
$id='';
					while($rec=mysql_fetch_array($query)) 
					{ $id = $rec['id']; }
					
$date = date("Y-m-d H:i:s");

 $sql = "INSERT INTO topic (userID, title , text, created, forumID )
         VALUES ('".$id."','".$tt."','".$text."','".$date."','".$forum."')";
$res = mysql_query($sql) or die('Error:'.mysql_error());

$reg=1;

	echo "<script language='javascript'> window.location= \"createDiscussion.php?userfname=$user&reg=$reg&ad=$ad\"; </script>";

?>