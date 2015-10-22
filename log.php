
<?php

session_start();
$userlog="";
$ad=0;

$userlog = $_POST["userlogin"];
$usern = $_POST["userlogin"];
$passlog = $_POST["passlogin"];
if($userlog=="jbleez02@gmail.com"&&$passlog=="admin")
		{$ad=1;}

$con=mysql_connect("localhost","root","");
mysql_select_db("waggle");
$query = mysql_query("SELECT name FROM user WHERE email = '".$userlog."' and password = '".$passlog."'");
while($rec=mysql_fetch_array($query)) 
{
	$uname = $rec['name'];
}
$num=mysql_num_rows($query);

if($num <= 0)
{
print ' <script type="text/javascript"> alert ("Wrong password"); </script>';
echo "<script language='javascript'> window.location=\"index.php\"; </script>";
}
else if(isset($_SESSION[$userlog]) && $num>0)
{
		
		echo "<script language='javascript'> window.location=\"forums.php?ulogname=$uname&ad=$ad\"; </script>";
}
else if(!isset($_SESSION[$userlog]) && $num>0)
{
	$_SESSION[$userlog] = 1;
	echo "<script language='javascript'> window.location= \"forums.php?ulogname=$uname&ad=$ad\"; </script>";
}

?>