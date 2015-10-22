
<?php
session_start();

$usern   = $_POST['username'];
$email   = $_POST['email'];
$pass  = $_POST['password'];
//$name   = $_POST['name'];
//$phone   = $_POST['phone'];


$con=mysql_connect("swe.gamerapoc.org","root","couchsql");
  mysql_select_db("forager");
  
$query = mysql_query("SELECT username FROM user WHERE username = '".$usern."'");
if(mysql_num_rows($query)> 0)
{
  print "<script type=\"text/javascript\"> alert (\"userid is already there\") </script>";

}
else
{
 $sql = "INSERT INTO user (password, username, email)
         VALUES ('".$pass."','".$usern."','".$email."')";
$res = mysql_query($sql) or die('Error:'.mysql_error());


				if (!isSet($_SESSION[$usern]) || $_SESSION[$usern] == 0)
				{
						$_SESSION[$usern]= 0;
						
				}

 print ' <script type="text/javascript"> alert ("well created") </script>';

echo "<script language='javascript'> window.location=\"index.html\"; </script>";
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		
	
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
		<link rel="stylesheet" type="text/css" href="css/globalstyle.css" />
	
		<link rel="stylesheet" href="css/regForm.css">
		
		<script type="text/javascript" src="js/jquery.js"></script>
	
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		 <script type="text/javascript" src="js/ajaxquery.js"></script>

	<!-- // Load Javascipt -->
  
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/modernizr-1.7.min.js"></script>

		
		<script type="text/javascript" src="js/registration.form.js"></script>
		
	</head>
	<body>
	
			<div class="containerRegister">
			
			
		
<table>
<tr>

<td> <div id="content">
      <div class="notify successbox">
        <h1>Success!</h1>
        <span class="alerticon"><img src="images/check.png" alt="checkmark" /></span>
        <p> Your added a new Forum</p>
      </div>
      
      <div class="notify errorbox">
        <h1>Warning!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p> Fill the form properly please</p>
      </div>  
      <div class="clearfix">
      </div>
  </div>
  <script type="text/javascript">
$(function(){
  $('#content').on('click', '.notify', function(){
    $(this).fadeOut(350, function(){
      $(this).remove(); // after fadeout remove from DOM
    });
  });
  
  // handle the additional windows
  $('.submit').on('click', function(e){
    e.preventDefault();
    var samplehtml = $('<div class="notify successbox" style="display: block;"> <h1>Success!</h1> <span class="alerticon"><img src="images/check.png" alt="checkmark" /></span> <p>You did not set the proper return e-mail address. Please fill out the fields and then submit the form.</p> </div>').prependTo('#content');
  });
  $('#newAlertBox').on('click', function(e){
    e.preventDefault();
    var samplehtml = $('<div class="notify errorbox" style="display: block;"> <h1>Warning!</h1> <span class="alerticon"><img src="images/error.png" alt="error" /></span> <p>You did not set the proper return e-mail address. Please fill out the fields and then submit the form.</p> </div>').prependTo('#content');
  });
});
</script></td>
<td>
<div id="main">
				
				

                <form id="registerform" method="post" action="register.php"  >
						
			
                    <fieldset class="reg">
					<h1 class="reg"> REGISTER </h1>
					
                   <label class="reg" for="username">Your real name<span style="color:red">*</span><span class="ico"><img src="images/user.png" alt="Username Icon" border="0" /></span></label>
				   <span id="userw" style="color:red; font-size:10px; display:none;">Enter&nbspa&nbspvalid&nbspname </span>
							

		               		<input class="reg" type="text" name="username" id="username" required autofocus>
							
						 <label class="reg" for="email"> Email<span style="color:red">*</span><span class="ico"><img src="images/user.png" alt="Username Icon" border="0" /></span></label>
						 <span id="mailw" style="color:red; font-size:10px; display:none;">Enter&nbspa&nbspvalid&nbspspsu&nbspemail</span>

		               		<input class="reg" type="text" name="email" id="email" required autofocus>
							

                       <label class="reg" for="password">Password<span style="color:red">*</span><span class="ico"><img src="images/pass.png" alt="Password Icon" border="0" /></span></label>
					   <span id="passw" style="color:red; font-size:10px; display:none;">passwords&nbspdo&nbspnot&nbspcorrespond </span>

	        	            <input class="reg" type="password" name="password" id="password" required>
						
						<label class="reg" for="confpassword">Confirm Password<span style="color:red">*</span><span class="ico"><img src="images/pass.png" alt="Password Icon" border="0" /></span></label>

	        	            <input class="reg" type="password" name="confpassword" id="confpassword" required>

            		</fieldset>

                    <fieldset class="forgot">
                    	
                        <span class="reg"><a href="index.html">Already a member?</a></span>

                    	<button class="reg" type=submit id="registerIt">>>&nbsp;&nbsp;&nbsp;GO</button>

                    </fieldset>
          		</form>

    <a class="close" href="#close"></a>

  </div> <!--! end of main -->
		</td>
 
</tr>
</table>
          
		</div>
		
		
		<!-- end of modal views-->				
				
</div>
	
	</body>
</html>