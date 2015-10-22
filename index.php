
<?php
$reg=-1;
if(isset($_GET['reg']) )
{
	$reg = $_GET['reg'];
}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		
	
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
		<link rel="stylesheet" type="text/css" href="css/globalstyle.css" />
	
		<link rel="stylesheet" href="css/logform.css">
		<link rel="stylesheet" href="css/box.css">
		<script src="js/modernizr.custom.80028.js"></script>
	
		<script type="text/javascript" src="js/jquery1.js"></script>
	
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
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

	<!-- // Load Javascipt -->
  
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/modernizr-1.7.min.js"></script>
<script type="text/javascript" src="js/login.form.js"></script>

	</head>
	<body>
	<?php
	if ($reg == 0){
print "<div id=\"note\" class=\"alert-box error\">
<span>error: </span> The user already exists. <a id=\"close\">[close]</a>

</div>";
}
else if ($reg == 1)
{print "<div id=\"note\" class=\"alert-box notice\">
<span>notice: </span> Check your email to complete the registration. <a id=\"close\">[close]</a>

</div>";
}
else if ($reg == 2){
print "<div id=\"note\" class=\"alert-box success\">
<span>success: </span> You have been well register. You can now sign in. <a id=\"close\">[close]</a>

</div>";
}


?>
			<div class="container">
		
			<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">
			<h2>Login</h2>
		<form id="loginForm" name="loginForm" action="log.php" method="post">
		<input type="hidden" id="hiddenvar" value=""/>
			<div id="username_input">
			<div> <span id="userlw" style="color:red; font-size:10px; display:none; padding-top: -5px;">* Enter a valid email</span></div>
				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
				
					<input type="text" name="userlogin" id="userlogin" class="url" value="" />
					<img id="url_user" src="images/image_login/mailicon.png" alt="">
					
				
				</div>
				<div id="username_inputright"></div>
			

			</div>

			<div id="password_input">
	<div><span id="passlw" style="color:red; font-size:10px; display:none; padding-top: -5px;">* Enter a valid password</span></div>
				<div id="password_inputleft"></div>
			
				<div id="password_inputmiddle">
				
				
					<input type="password" name="passlogin" id="passlogin" class="url" value=""/>
					<img id="url_password" src="images/image_login/passicon.png" alt="">
					
				</div>
				
				<div id="password_inputright"> </div>
				
			</div>
			
			<div id="sub">
				<button type="submit" id="submit2" value=""></button>
			</div>


			<div id="links_left">

			<a href="forgetpwd_1.html">Forgot your Password?</a>

			</div>

			<div id="links_right"><a href="register.php">Not a Member Yet?</a></div>

		</div>

		<div id="wrapperbottom"></div>
		
	</div>
	</div>
	
		</form><!-- form -->
		
 

          
		</div>
		
		
		<!-- end of modal views-->				
				
</div>
	
	</body>
</html>