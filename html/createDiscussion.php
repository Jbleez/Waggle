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
 <script type="text/javascript" src="js/ajaxquery2.js"></script>
	
</head>
<body>
<form class="discussionform" action="" method="post" name="discussionform" novalidate>
<div class="glass">
<table border="0px">
<tr>
<td>

    <div id="content">
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
</script>
  
</td>
<td>
<ul id="discussioncreation">
    <li>
         <h2>Create a New discussion</h2>
    </li>
	
	 <li>
        <label for="name">Forum title:</label>
        <input type="text" name="name" value="here is the title of the forum you choose" maxlength="250" onclick="blur()" />
    </li>
    <li>
        <label for="name">Title <span class="required_notification">*</span> :</label>
        <input type="text" name="name" placeholder="Type a title here" maxlength="250"/>
    </li>

<li>
    <label for="description">description <span class="required_notification">*</span> :</label>
    <textarea name="description" cols="40" rows="6" ></textarea>
</li>
<li>
    <button class="submit" type="submit">Submit Form</button>
	<a href="forums.html" id="back" class="back">back</a>
</li>


</ul></td></tr>
</table>
</form>
 </div>
</body>
</html>