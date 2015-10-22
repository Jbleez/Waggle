
<?php


$userlog="";

$comID = $_POST['idcomdel'];
$topicid = $_POST['toptt'];
$us = $_POST['usern'];
$ad = $_GET['ad'];
$tt="";
$con=mysql_connect("localhost","root","");
mysql_select_db("waggle");

 $sql = "UPDATE comment SET deleted ='1' where ID='$comID' and replytoID='$comID'";
		 
$res = mysql_query($sql) or die('Error:'.mysql_error());
		 
		 $query = mysql_query("SELECT title FROM topic WHERE ID ='$topicid'")
				or die(mysql_error()); 

				while($rec=mysql_fetch_array($query)) 
					{ 
						$tt = $rec['title'];
					}
					

	echo "<script language='javascript'> window.location=\"discussions.php?topiC=$tt&userfname=$us&ad=$ad\"; </script>";


?>