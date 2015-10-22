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


<!--
 Created with Visual Form Builder by 23rd and Walnut
 www.visualformbuilder.com
 www.23andwalnut.com
 -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/startDisc.css" rel="stylesheet" type="text/css"/>
 	<link rel="stylesheet" type="text/css" href="css/globalstyle.css" />
 	<link rel="stylesheet" type="text/css" href="css/creatediscussion.css" />
 	<link rel="stylesheet" type="text/css" href="css/logform.css" />
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
<span>error: </span> An error occured while creating your forum. Please start over.<a id=\"close\">[close]</a>

</div>";
}

else if ($reg == 1){
print "<div id=\"note\" class=\"alert-box success\">
<span>success: </span> You successfully added a forum. <a id=\"close\">[close]</a>

</div>";
}
?>

<form class="forumform" action="cf.php" method="post" name="forumform" novalidate>
<div class="glass">
<table border="0px">
<tr>
<td>
  
</td>
<td>
  <form  action="cf.php" method="post" >
<ul id="forumcreation">
	 <input type="hidden" name="ad" id="ad" value="<?php echo "$ad"?>"/>
	<li>
         <h2>Create a New Forum</h2>
    </li>
	
<input type="text" name="usern" id="usern" value="<?php print "$myUserdisc"?> " style="display:none;"/>

	 <li>

    <li>
        <label for="name">Title <span class="required_notification">*</span> :</label>
        <input type="text" id="title" name="title" placeholder="type a title here"  maxlength="250" />
    </li>

<li>
    <label for="description">description <span class="required_notification">*</span> :</label>
    <textarea name="desc" id="desc" cols="40" rows="6" ></textarea>
</li>
<li>
    <label for="status">Status <span class="required_notification">*</span>:</label>
	<input type="radio" name="stat" id="private" value="private" /> <span> Private</span>
	<input type="radio" name="stat"  id="public" value="public" /> <span> Public</span>
</li>
<li>
    <button class="submit" id= "submitforum" type="submit">Submit Form</button>
		<?php if(isset($_GET['userfname'])){echo "<a id=\"back\" class=\"back\" href=\"forums.php?userfname=$myUserdisc&ad=$ad\"> back </a>";}?>
</li>

</ul>
</form>
</td></tr>
</table>

 </div>
</body>
</html>