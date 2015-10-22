<?php
$myUser ="";
$topic="";
$ad = 0;
$userad="";

if(isset($_GET['userlog']) )
{
	$myUser = $_GET['userlog'];
}

if(isset($_GET['userfname']) )
{
	$myUser = $_GET['userfname'];
}
if(isset($_GET['topiC']))
{
	$topic = $_GET['topiC'];
}
if(isset($_GET['ad']))
{
	$ad = $_GET['ad'];
}
if(isset($_GET['userad']))
{
	$userad = $_GET['userad'];
}

?>
<?php
	$reg = -1;
if(isset($_GET['userfname']))
{
	$myUserdisc = $_GET['userfname'];
}
if(isset($_GET['reg']))
{
	$reg = $_GET['reg'];
}

?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>

 	<link rel="stylesheet" type="text/css" href="css/globalstyle.css" />
		<link rel="stylesheet" href="css/accordion.css">	

	<link rel="stylesheet" type="text/css" href="css/global.css" />

		<style>
		
		body {

	font-weight: normal;
	margin: 10px;
	color: #999;
	background-color: #eee;
}

form {
	margin: 40px 0;
}

div {
	clear: both;
	margin: 0 50px;
}

label {
  width: 300px;
  border-radius: 3px;
  border: 1px solid #ffffff;
  background-color:white;
  color:#777;
  font-size: 18px;
  
}

/* hide input */
input.radio:empty {
	margin-left: -999px;
}

/* style label */
input.radio:empty ~ label {
	position: relative;
	float: left;
	line-height: 2.5em;
	text-indent: 3.25em;
	margin-top: 2em;
	cursor: pointer;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

input.radio:empty ~ label:before {
	position: absolute;
	display: block;
	top: 0;
	bottom: 0;
	left: 0;
	content: '';
	width: 2.5em;
	background: #000;
	border-radius: 3px 0 0 3px;
}

/* toggle hover */
input.radio:hover:not(:checked) ~ label:before {
	content:'\2714';
	text-indent: .9em;
	color: #C2C2C2;
}

input.radio:hover:not(:checked) ~ label {
	color: #888;
}

/* toggle on */
input.radio:checked ~ label:before {
	content:'\2714';
	text-indent: .9em;
	color: #fff8c4;
	background-color: #4DCB6D;
}

input.radio:checked ~ label {
	color: #000000;
	font-weight:bolder;
}

/* radio focus */
input.radio:focus ~ label:before {
	box-shadow: 0 0 0 3px #999;
}
    #note {
        position: absolute;
        z-index: 6001;
        top: 0;
        left: 0;
        right: 0;
   
        text-align: center;
        line-height: 2.5;
        overflow: hidden; 
        -webkit-box-shadow: 0 0 5px black;
        -moz-box-shadow:    0 0 5px black;
        box-shadow:         0 0 5px black;
    }
    .cssanimations.csstransforms #note {
        -webkit-transform: translateY(-50px);
        -webkit-animation: slideDown 2.5s 2s 1 ease forwards;
        -moz-transform:    translateY(-50px);
        -moz-animation:    slideDown 2.5s 2s 1 ease forwards;
    }

    #close {
      position: absolute;
      right: 10px;
      top: 9px;
      text-indent: -9999px;
      background: url(images/close.png);
      height: 16px;
      width: 16px;
      cursor: pointer;
    }
    .cssanimations.csstransforms #close {
      display: none;
    }
    
    @-webkit-keyframes slideDown {
        0%, 100% { -webkit-transform: translateY(-50px); }
        10%, 90% { -webkit-transform: translateY(0px); }
    }
    @-moz-keyframes slideDown {
        0%, 100% { -moz-transform: translateY(-50px); }
        10%, 90% { -moz-transform: translateY(0px); }
    }
	.alert-box span {
	font-weight:bold;
	text-transform:uppercase;
}
.error {
	background:#ffecec url('images/errors.png') no-repeat 10px 50%;
	border:1px solid #f5aca6;
}
.success {
	background:#e9ffd9 url('images/success.png') no-repeat 10px 50%;
	border:1px solid #a6ca8a;
}
.warning {
	background:#fff8c4 url('images/warning.png') no-repeat 10px 50%;
	border:1px solid #f2c779;
}
.notice {
	background:#e3f7fc url('images/notice.png') no-repeat 10px 50%;
	border:1px solid #8ed9f6;
}



.containertab  {
  text-align: center;
  overflow: hidden;
  width: 800px;
  margin: 0 auto;
  color: black;
}

.containertab table {
  width: 100%;
    color: #000000;
	background-color:white;
}

.containertab table td, .containertab table th {
  padding: 20px;
    color:#000000;
	text-align:center;
}

.containertab td:first-child, .containertab th:first-child {
  padding-left: 20px;
}

.containertab td:last-child, .containertab th:last-child {
  padding-right: 20px;
}

.containertab th {
  border-bottom: 2px solid #ddd;
  position: relative;
}
.containertab td {
  border-bottom: 1px solid #ddd;
 
}

	</style>
<script src="js/jquery-latest.js"></script>
     
</head>
<body>
<div class="containeradmin">
					<nav>
		<ul class="menu">
			<li style="color: #444; padding-bottom:-5px; width:80px; margin-left:-80px; margin-right: 620px;"><?php echo "<a href=\"forums.php?userfname=$myUser&ad=$ad\"> <img src=\"unnamed.png\" alt=\"logo\"/> </a>";?></li>
	
			<li class="lis"><a href="#">  <?php if ($ad==1){ echo '$myUser (admin)';}else{echo '$myUser';}?></a>
				<ul>
					<li><a href="profile.php?userfname=$myUser&ad=$ad">My profile</a></li>
					<li><?php echo '<a href="logout.php?userlogout='.urlencode($myUser).'">Logout</a>';?></li>
					
				</ul>
			</li>
					<li><a href="#">My Waggle</a>
				<ul>
					<li><?php echo "<a href=\"createForum.php?userfname=$myUser\">Create a forum</a>";?></li>
					<li><?php echo '<a href="createDiscussion.php?userfname='.urlencode($myUser).'">Create a discussion</a>';?></li>
					
					<li><a href="#">Private room</a></li>
					 <?php if ($ad==1)
						{
						  print "<li> <a href=\"adminMenu.php?userfname=$myUser\">Admin menu</a></li>";
						}
					 ?>
				</ul>
			</li>
			
		</ul>
		<div class="clearfix"></div>
	</nav>
			
	<?php
	if ($reg == 0){
print "<div id=\"note\" class=\"alert-box error\">
<span>Error: </span> The user already exist.<a id=\"close\">[close]</a>

</div>";
}else if ($reg == 3){
print "<div id=\"note\" class=\"alert-box success\">
<span>Success: </span> The forum(s) selected has(have) been closed. <a id=\"close\">[close]</a>
</div>";
}
else if ($reg == 4){
print "<div id=\"note\" class=\"alert-box success\">
<span>Success: </span> The topic(s) selected has(have) been closed. <a id=\"close\">[close]</a>
</div>";
}
else if ($reg == 5){
print "<div id=\"note\" class=\"alert-box success\">
<span>Success: </span> The user(s) you selected has (have) been banned. <a id=\"close\">[close]</a>
</div>";
}
else if ($reg == 6){
print "<div id=\"note\" class=\"alert-box success\">
<span>Success: </span> The user $userad has been registered in the datbase. <a id=\"close\">[close]</a>
</div>";
}
?>

	<div id="content" class="clearfix">
		<section id="left">
			<div id="userStats" class="clearfix">
				<table><tr><td><div class="pic">
					<a href="#"><img src="images/grey.jpg" width="150" height="150" /></a>
				</div></td><td>
				
				<div class="data">
					<h1>Johnny Appleseed</h1>
					<p> </p>
					<h3>User name</h3>
					<p> </p>
					<h4><a href="#">Email</a></h4>
					<p> </p>
					<ul class="numbers clearfix">
						<li>Forums<strong>1</strong></li>
						<li>Topics<strong>4</strong></li>
						<li class="nobrdr">Replies<strong>7</strong></li>
					</ul>
				</div>
				</td>
				</tr>
				</table>
			</div>
			
			</section>
		
		<section id="right">
			<div class="gcontent">
				<div class="head"><h1> What to do ?</h1></div>
				<div class="boxy">
				
				<div class="badgeCount">
						<p><a href="#"> Modify your profile ?</a></p>
						<p><a href="#"> Banned a user from a private forum ?</a></p>
						<p><a href="#"> Add a user in a private forum ?</a></p>
					</div>

				</div>
			</div>
			
		</section>
	</div>

</div>
</body>
</html>