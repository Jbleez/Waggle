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
 	<link rel="stylesheet" type="text/css" href="css/logform.css" />

 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/box.css">
		<script src="js/modernizr.custom.80028.js"></script>
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
             <script type="text/javascript">
                 $(document).ready(function () {
                    $('#radio1').click(function (){
                       $('#radio2_tab').hide('fast');
                       $('#radio3_tab').hide('fast');
                       $('#radio4_tab').hide('fast');
                       $('#radio1_tab').show('fast');
					   $('#filt').show('fast');
               
                });
				 $('#radio2').click(function (){
                       $('#radio2_tab').show('fast');
                       $('#radio3_tab').hide('fast');
                       $('#radio4_tab').hide('fast');
                       $('#radio1_tab').hide('fast');
					   $('#filt').show('fast');
               
                });
				 $('#radio3').click(function (){
                       $('#radio2_tab').hide('fast');
                       $('#radio3_tab').show('fast');
                       $('#radio4_tab').hide('fast');
                       $('#radio1_tab').hide('fast');
					   $('#filt').show('fast');
               
                });
				 $('#radio4').click(function (){
                       $('#radio2_tab').hide('fast');
                       $('#radio3_tab').hide('fast');
                       $('#radio4_tab').show('fast');
                       $('#radio1_tab').hide('fast');
                       $('#filt').hide('fast');
					   
               
                });
               
               });
</script>
	
</head>
<body>
<div class="containeradmin">
					<nav>
		<ul class="menu">
			<li style="color: #444; padding-bottom:-5px; width:80px; margin-left:-80px; margin-right: 620px;"><?php echo "<a href=\"forums.php?userfname=$myUser&ad=$ad\"> <img src=\"unnamed.png\" alt=\"logo\"/> </a>";?></li>
	
			<li class="lis"><a href="#">  <?php if ($ad==1){ echo "$myUser (admin)";}else{echo "$myUser";}?></a>
				<ul>
					<li><a href="profile.php?userfname=$myUser&ad=$ad">My profile</a></li>
					<li><?php echo '<a href="logout.php?userlogout='.urlencode($myUser).'">Logout</a>';?></li>
					
				</ul>
			</li>
					<li><a href="#">My Waggle</a>
				<ul>
					<li><?php echo "<a href=\"createForum.php?userfname=$myUser&ad=$ad\">Create a forum</a>";?></li>
					<li><?php echo '<a href="createDiscussion.php?userfname='.urlencode($myUser).'&ad='.urlencode($ad).'">Create a discussion</a>';?></li>
					
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

<table border="0">
<tr>
<td>
 
<div>
<input type="radio" name="radio" id="radio1" class="radio" checked/>
<label for="radio1">Close a forum</label>
</div>

<div>
<input type="radio" name="radio" id="radio2" class="radio" />
<label for="radio2">close a topic</label>
</div>
<div>	
<input type="radio" name="radio" id="radio3" class="radio"/>
<label for="radio3">Ban a user</label>
</div>
<div>	
<input type="radio" name="radio" id="radio4" class="radio"/>
<label for="radio4">Add a user</label>
</div>

</td>
<td>   <section class="containertab">

	<input id="filt" type="search" class="light-table-filter" data-table="order-table" placeholder="Filter">
<p><br/></p>

	<table id="radio1_tab" class="order-table table">
	<?php print " <form method=\"post\" action=\"closeforums.php?userlog=$myUser&ad=$ad\">"?>
		<thead>
			<tr>
				<th> Forum title </th>
				<th> Description </th>
				<th> Initiator  </th>
				<th> Creation date  </th>
				<th> Forum access </th>
				<th> Number of topics</th>
				<th> Select to close </th>
			</tr>
		</thead>
		<tbody>
			 <?php 
				// Connects to your Database 
				$con=mysql_connect("localhost","root","");
				mysql_select_db("waggle");
				$query = mysql_query("SELECT * FROM forum")
				or die(mysql_error()); 
				
				
				$query2 = mysql_query("SELECT username FROM user WHERE name = '".$myUser."'");
				
				while($rec=mysql_fetch_array($query)) 
					{ if($rec['deleted']!=1){
						Print "<tr>"; 
						Print "<td>" .$rec['title']. "</td> "; 
						
						Print "<td>" .$rec['description']. "</td> "; 
						
						$query1 = mysql_query("SELECT name FROM user WHERE ID = '".$rec['creatorID']."'");
					while($rec1=mysql_fetch_array($query1)) 
					{ Print "<td>".$rec1['name']."</td> "; }
					
					Print "<td>".$rec['created']."</td> ";
					
						if($rec['private']==0)
						{Print "<td>Public</td> "; }
						else
						{Print "<td>Private</td> ";}

					 $query3 = mysql_query("SELECT ID FROM topic WHERE forumID = '".$rec['ID']."'");
					 $num = mysql_num_rows($query3);
						Print "<td>$num</td> ";
					Print "<td><input type=\"checkbox\" style=\"width: 20px\" value=".$rec['ID']." name=\"checkbox[]\"></input></td> </tr>";
					}
					}
			?> 
			<tr ><td colspan="4"> <?php print "<input style=\" margin-left:60%; margin-top: 1%;\" type=\"submit\" value=\"Submit\" ></input>"?></td></tr>
		</tbody></form>
	</table>
	
	<table id="radio2_tab" style="display:none" class="order-table table">
	<?php print " <form method=\"post\" action=\"closetopics.php?userlog=$myUser&ad=$ad\">"?>
		<thead>
			<tr>
				<th> Topic title </th>
				<th> Description </th>
				<th> Initiator  </th>
				<th> Creation date  </th>
				<th> From forum </th>
				<th> Number of comments</th>
				<th> Select to close </th>
			</tr>
		</thead>
		<tbody>
			 <?php 
				// Connects to your Database 
				$con=mysql_connect("localhost","root","");
				mysql_select_db("waggle");
				$query = mysql_query("SELECT * FROM topic")
				or die(mysql_error()); 
				
				while($rec=mysql_fetch_array($query)) 
					{ if($rec['deleted']!=1)
						{Print "<tr>"; 
						Print "<td>" .$rec['title']. "</td> "; 
						
						Print "<td>" .$rec['text']. "</td> "; 
						
						$query1 = mysql_query("SELECT name FROM user WHERE ID = '".$rec['userID']."'");
						
					while($rec1=mysql_fetch_array($query1)) 
					{ Print "<td>".$rec1['name']."</td> "; }
					
					Print "<td>".$rec['created']."</td> ";
					
						$query2 = mysql_query("SELECT title FROM forum WHERE ID = '".$rec['forumID']."'");
						
					while($rec2=mysql_fetch_array($query2)) 
					{ Print "<td>".$rec2['title']."</td> "; }

					 $query3 = mysql_query("SELECT ID FROM comment WHERE topicID = '".$rec['ID']."'");
					 $num = mysql_num_rows($query3);
						Print "<td>$num</td> ";
					Print "<td><input type=\"checkbox\" style=\"width: 20px\" value=".$rec['ID']." name=\"checkbox[]\"></input></td> </tr>";
					}
					}
			?> 
			<tr ><td colspan="4"> <?php print "<input style=\" margin-left:60%; margin-top: 1%;\" type=\"submit\" value=\"Submit\" ></input>"?></td></tr>
		
		</tbody></form>
	</table>
	<table id="radio3_tab" style="display:none" class="order-table table">
	<?php print " <form method=\"post\" action=\"banuser.php?userlog=$myUser&ad=$ad\">"?>
		<thead>
			<tr>
				<th>  </th>
				<th> Full name </th>
				<th> Username </th>
				<th> Email  </th>
				<th> Inscription date  </th>
				<th> Number of comments </th>
				<th> Number of topic created</th>
				<th> Select to close </th>
			</tr>
		</thead>
		<tbody>
			 <?php 
				// Connects to your Database 
				$con=mysql_connect("localhost","root","");
				mysql_select_db("waggle");
				$query = mysql_query("SELECT * FROM user")
				or die(mysql_error()); 
				
				
				
				
				while($rec=mysql_fetch_array($query)) 
					{ 
					if($rec['username']!="Root User" && $rec['password']!="admin" && $rec['banned']!=1){
						Print "<tr>"; 
						Print "<td> picture</td> "; 
						Print "<td>" .$rec['name']. "</td> "; 
						
						Print "<td>" .$rec['username']. "</td> "; 
						Print "<td>" .$rec['email']. "</td> "; 
						Print "<td>" .$rec['created']. "</td> "; 
						
						$query1 = mysql_query("SELECT ID FROM comment WHERE userID = '".$rec['id']."'");
						 $num = mysql_num_rows($query1);
						 Print "<td>$num</td> ";
						 
						 $query2 = mysql_query("SELECT ID FROM topic WHERE userID = '".$rec['id']."'");
						 $num = mysql_num_rows($query2);
						 Print "<td>$num</td> ";
					
					Print "<td><input type=\"checkbox\" style=\"width: 20px\" value=".$rec['id']." name=\"checkbox[]\"></input></td> </tr>";
					}
					}
			?> 
			<tr ><td colspan="5"> <?php print "<input style=\" margin-left:60%; margin-top: 1%;\" type=\"submit\" value=\"Submit\" ></input>"?></td></tr>
		
		</tbody></form>
	</table>
	
	<table id="radio4_tab" style="display:none" class="order-table table">
	<?php print " <form method=\"post\" action=\"registerbyadmin.php?userlog=$myUser&ad=$ad\">"?>
		
		<tbody>
		<tr>
		<td> <label class="reg" for="username">Username<span style="color:red">*</span><span class="ico"><img src="images/user.png" alt="Username Icon" border="0" /></span></label>
				   <span id="userw" style="color:red; font-size:10px; display:none;">Enter&nbspa&nbspvalid&nbspname </span>
							

		               		<input class="reg" type="text" name="username" id="username" required autofocus> </td>
							
							<td>   <label class="reg" for="userreal">Full name<span style="color:red">*</span><span class="ico"><img src="images/user.png" alt="Username Icon" border="0" /></span></label>
				   <span id="userwr" style="color:red; font-size:10px; display:none;">Enter&nbspa&nbspvalid&nbspname </span>
							

		               		<input class="reg" type="text" name="userreal" id="userreal" required autofocus></td>
							
						<td> <label class="reg" for="email"> Email<span style="color:red">*</span><span class="ico"><img src="images/user.png" alt="Username Icon" border="0" /></span></label>
						 <span id="mailw" style="color:red; font-size:10px; display:none;">Enter&nbspa&nbspvalid&nbspspsu&nbspemail</span>

		               		<input class="reg" type="text" name="email" id="email" required autofocus></td>
							

                     <td>  <label class="reg" for="password">Password<span style="color:red">*</span><span class="ico"><img src="images/pass.png" alt="Password Icon" border="0" /></span></label>
					   <span id="passw" style="color:red; font-size:10px; display:none;">passwords&nbspdo&nbspnot&nbspcorrespond </span>

	        	            <input class="reg" type="password" name="password" id="password" required></td>
						
						
</tr>
<tr ><td colspan="3"> <?php print "<input style=\" margin-left:60%; margin-top: 1%;\" type=\"submit\" value=\"Submit\" ></input>"?></td></tr>
		
		</tbody>
		</form>
	</table>
	

</section>
<script text="javascript">
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script> 
</td>
</tr>
</table>

</div>
</body>
</html>