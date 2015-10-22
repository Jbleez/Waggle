<?php
	$reg =-1;
	$ad=0;
if(isset($_GET['userfname']))
{
	$myUserdisc = $_GET['userfname'];
}
if(isset($_GET['reg']))
{
	$reg = $_GET['reg'];
}
if(isset($_GET['ad']))
{
	$ad = $_GET['ad'];
}
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/startDisc.css" rel="stylesheet" type="text/css"/>
 	<link rel="stylesheet" type="text/css" href="css/globalstyle.css" />
 	<link rel="stylesheet" type="text/css" href="css/creatediscussion.css" />
	<link rel="stylesheet" href="css/box.css">
		<script src="js/modernizr.custom.80028.js"></script>
	<link rel="stylesheet" href="css/box.css">
		<script src="js/modernizr.custom.80028.js"></script>
		<style>
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

	</style>

	
</head>
<body>
	<?php
	if ($reg == 0){
print "<div id=\"note\" class=\"alert-box error\">
<span>error: </span> An error occured while creating your discussion. Please start over.<a id=\"close\">[close]</a>

</div>";
}

else if ($reg == 1){
print "<div id=\"note\" class=\"alert-box success\">
<span>success: </span> You successfully added a discussion. <a id=\"close\">[close]</a>

</div>";
}
?>


<form class="discussionform" action="cd.php" method="post">
<div class="glass">
<table border="0px">
<tr>
<td>

</td>
<td>
<ul id="discussioncreation">
  <li>
         <h2>Create a New discussion</h2>
    </li>
	<input type="text" name="usern" id="usern" value="<?php print "$myUserdisc"?> " style="display:none;"/>
	 <li>
        <label for="name">Forum title:</label>
        <select name="forum" id="forum" maxlength="250">
				<option value="default">Select </option>    
					
					 <?php 
				// Connects to your Database 
				$con=mysql_connect("localhost","root","");
				mysql_select_db("waggle");
				$query = mysql_query("SELECT ID, title FROM forum WHERE deleted = '0'")
				or die(mysql_error()); 

				while($rec=mysql_fetch_array($query)) 
					{ 

						Print "<option value=".$rec['ID'].">" .$rec['title']. "</option> "; 	
					}
			?> 
			 <input type="hidden" name="ad" id="ad" value="<?php echo "$ad"?>"/>
		</select>
    </li>
    <li>
        <label for="name">Title <span class="required_notification">*</span> :</label>
        <input type="text" name="title" id="title" placeholder="Type a title here" maxlength="250"/>
    </li>

<li>
    <label for="description">description <span class="required_notification">*</span> :</label>
    <textarea name="desc" id="desc" cols="40" rows="6" ></textarea>
</li>
<li>
    <input class="submit" id= "submitdisc" type="submit" VALUE="Submit form"></button>
	<?php if(isset($_GET['userfname'])){echo "<a id=\"back\" class=\"back\" href=\"forums.php?userfname=$myUserdisc&ad=$ad\"> back </a>";}?>
</li>



</ul></td></tr>
</table>

 </div>

</body>
</html>