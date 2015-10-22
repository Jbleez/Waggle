
<?php
$reg=0;
if(isset($_GET['reg']))
{
	$reg =$_GET['reg'];
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

<td> 
<div id="content">
<?php

	if ($reg == 1)
	{
		echo "<div class=\"notify successbox\">
        <h1>Success!</h1>
        <span class=\"alerticon\"><img src=\"images/check.png\" alt=\"checkmark\" /></span>
        <p> Your added a new Forum</p>
      </div>
      
     <!-- <div class=\"notify errorbox\">
        <h1>Warning!</h1>
        <span class=\"alerticon\"><img src=\"images/error.png\" alt=\"error\" /></span>
        <p> Welcome !!</p>
      </div> --> 
      <div class=\"clearfix\">
      </div>
	  <script type=\"text/javascript\"> \$(function(){ \$('#content').on('click', '.notify', function(){ \$(this).fadeOut(350, function(){\$(this).remove(); // after fadeout remove from DOM }); });
  
    var samplehtml = $('<div class=\"notify successbox\" style=\"display: block;\"> <h1>Success!</h1> <span class=\"alerticon\"><img src=\"images/check.png\" alt=\"checkmark\" /></span> <p>Please check you email for confirmation</p> </div>').prependTo('#content');
  });
});
</script>";
	}
	
?>
     
  </div>
 
 

</td>
<td>
<div id="main">
				
				

                <form id="registerform" method="post" action="reg.php">
						
			
                    <fieldset class="reg">
					<h1 class="reg"> REGISTER </h1>
					
                   <label class="reg" for="username">Username<span style="color:red">*</span><span class="ico"><img src="images/user.png" alt="Username Icon" border="0" /></span></label>
				   <span id="userw" style="color:red; font-size:10px; display:none;">Enter&nbspa&nbspvalid&nbspname </span>
							

		               		<input class="reg" type="text" name="username" id="username" required autofocus>
							
							   <label class="reg" for="userreal">Your real name<span style="color:red">*</span><span class="ico"><img src="images/user.png" alt="Username Icon" border="0" /></span></label>
				   <span id="userwr" style="color:red; font-size:10px; display:none;">Enter&nbspa&nbspvalid&nbspname </span>
							

		               		<input class="reg" type="text" name="userreal" id="userreal" required autofocus>
							
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
                    	
                        <span class="reg"><a href="index.php">Already a member?</a></span>

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