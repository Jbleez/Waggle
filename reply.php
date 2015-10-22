
<?php


$userlog="";

$comID = $_POST['idcom'];
$text = $_POST['replybox'];
$topicid = $_POST['toptt'];
$us = $_POST['usern'];
$ad = $_GET['ad'];
$tt="";
$con=mysql_connect("localhost","root","");
mysql_select_db("waggle");

$query = mysql_query("SELECT id FROM user WHERE name = '$us'");
$id='';
					while($rec=mysql_fetch_array($query)) 
					{ $id = $rec['id']; }
$date = date("Y-m-d H:i:s");
 $sql = "INSERT INTO comment(userID, date, text, topicID, replytoID )
         VALUES ('".$id."','".$date."','".$text."','".$topicid."','".$comID."')";
		 
$res = mysql_query($sql) or die('Error:'.mysql_error());
		 
		 $query = mysql_query("SELECT title FROM topic WHERE ID ='$topicid'")
				or die(mysql_error()); 

				while($rec=mysql_fetch_array($query)) 
					{ 
						$tt = $rec['title'];
					}
					

	echo "<script language='javascript'> window.location=\"discussions.php?topiC=$tt&userfname=$us&ad=$ad\"; </script>";


?>