<?php
/* Include all the classes */
$myUser = "";
$file ="";
if(isset($_GET['userlog']) )
{
	$myUser = $_GET['userlog'];
}
// Connects to your Database 
				$con=mysql_connect("localhost","root","");
				mysql_select_db("waggle");
	$checked_arr = $_POST['checkbox'];
	foreach($checked_arr as $val)
{	
	$query = mysql_query("UPDATE user SET banned = '1' where id ='$val'")
				or die(mysql_error());
				$res = mysql_query($query);
				
}
echo "<script language='javascript'> window.location=\"adminmenu.php?userlog=$myUser&ad=1&reg=5&banuser\"; </script>";
?>