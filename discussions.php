<?php
$myUser ="";
$topic="";
$ad = 0;

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

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		
	
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
		<link rel="stylesheet" type="text/css" href="css/globalstyle.css" />
		<link rel="stylesheet" href="css/accordion.css">
		<link rel="stylesheet" href="css/discussions.css">

	</head>
	<body>
		
			<div class="containerDiscussion">
			<div id="header">

			<nav id="discnav">
		<ul class="menu">
		
	<li style="color: #444; padding-bottom:-5px; width:80px; margin-left:-80px; margin-right: 620px;"><?php echo  "<a href=\"forums.php?userfname=$myUser&ad=$ad\"> <img src=\"unnamed.png\" alt=\"logo\"/> </a>";?></li>
			
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
					
					<li><a href="#">Private area</a></li>
					 <?php if ($ad==1)
					 {
						print "<li> <a href=\"adminmenu.php?userfname=$myUser&ad=$ad\">Admin menu</a></li>";
						}
					 ?>
				</ul>
			</ul>
		<div class="clearfix"></div> 
	</nav>
		<div id="recall">
		<?php print "<p><a href=\"forums.php?userfname=$myUser\">Forums</a><a href=\"#\" class=\"current\">$topic</a></p>";?>
		</div>
					
			<div class="separate3"></div>
			
			<?php $id=""; $id1="";$tt="";$user="";
					$con=mysql_connect("localhost","root","");
					mysql_select_db("waggle");
					$query = mysql_query("SELECT ID FROM topic WHERE title = '$topic'")
					or die(mysql_error());
					while($rec=mysql_fetch_array($query)) 
					{ 
						$id=$rec['ID']; 	
					}
					
					$query1 = mysql_query("SELECT forumID from topic WHERE ID = '$id'")
					or die(mysql_error());
					while($rec1=mysql_fetch_array($query1)) 
					{ 
						$id1=$rec1['forumID']; 	
					}		
					$query6 = mysql_query("SELECT text from topic WHERE ID = '$id'")
					or die(mysql_error());
					while($rec6=mysql_fetch_array($query6)) 
					{ 
						$text=$rec6['text']; 	
					}		
					
					$query2 = mysql_query("SELECT title from forum WHERE ID = '$id1'")
					or die(mysql_error());
					while($rec2=mysql_fetch_array($query2)) 
					{ 
						$tt=$rec2['title']; 	
					}	

					$query4 = mysql_query("SELECT userID from topic WHERE ID = '$id'")
					or die(mysql_error());
					while($rec4=mysql_fetch_array($query4)) 
					{ 
						$query5 = mysql_query("SELECT name from user WHERE ID = '".$rec4['userID']."'")
							or die(mysql_error());	
							while($rec5=mysql_fetch_array($query5)) 
					{ 
								$user=$rec5['name']; 	
					}	

					}
					
					$query3 = mysql_query("SELECT created from topic WHERE ID = '$id'")
					or die(mysql_error());

				while($rec3=mysql_fetch_array($query3)) 
					{ 
						
						Print "<div id=\"forumDesc\" style=\"text-decoration:underline;\">$tt</div> "; 	
						print "	<div class=\"separate3\"></div>
							<table>
								<tr> <th>
									<blockquote>$text";
						print "<cite id=\"theuser\">$user, ".$rec3['created']."</cite>";
				}
			?> 
			
				
			</blockquote></th>
			</tr>
			</table>
			
		<div class="com"> Your comments</div>	
			
		<p ><hr class="hrline"/></p>
		<div class="comments">
		<table>
			<form enctype="multipart/form-data" method="post" action="comment.php?ad=$ad">
		<tr class="comments" >
		<td>
			<div class="button">
			
				<input type="submit" value="Add a comment"/> 
				
				</div>
				
				<div class="custom-file-upload">

					<!--<label for="file">File: </label>--> 
					<input type="file" id="file" name="thefiles[]" multiple />
				
					<?php print "
								<input type=\"text\" id=\"usern\" name=\"usern\" value = \"$myUser\" style=\"display:none\" />
								<input type=\"text\" id=\"toptt\" name=\"toptt\" value = \"$topic\" style=\"display:none\"  />";
					?>
				
				</div>
				
		</td>
		
			<?php 
				print "<input type=\"text\" id=\"usern\" name=\"usern\" value = \"$myUser\" style=\"display:none\" />
				<input type=\"text\" id=\"toptt\" name=\"toptt\" value = \"$topic\" style=\"display:none\"  />";
			?>
			
		<td>	
			<textarea id="comdesc" name="comdesc" class="commentdesc" placeholder="Enter a comment here..."></textarea>
		</td>
			
		</tr>
		</form>
		</table>
		</div>
		
		<p ><hr class="hrline"/></p>
		
		 <?php $id="";
				// Connects to your Database 
				$con=mysql_connect("localhost","root","");
				mysql_select_db("waggle");
				$query = mysql_query("SELECT ID FROM topic WHERE title='$topic'")
				or die(mysql_error()); 

				while($rec=mysql_fetch_array($query)) 
					{ 
						$id = $rec['ID'];
					}
			$query2 = mysql_query("SELECT ID FROM comment WHERE topicID='$id'")
				or die(mysql_error()); 

				while($rec2=mysql_fetch_array($query2)) 
				{ 	
					$query3 = mysql_query("SELECT userID, date, text, deleted, replytoID FROM comment WHERE ID ='".$rec2['ID']."'")
					or die(mysql_error()); 
					
					while($rec3=mysql_fetch_array($query3)) 
					{ $us="";
						$query4 = mysql_query("SELECT name FROM user WHERE ID ='".$rec3['userID']."'")
					or die(mysql_error()); 
					while($rec4=mysql_fetch_array($query4)) 
						{ $us = $rec4['name'];}
					
					if($rec3['replytoID']=="-1")
					{	$idh = $rec2['ID'];
						print '<div class="thecom" > <table > <tr> <td align="top">
						<div class="pic">
						<p><img id="userImg" src="images/bronte.jpg"/>';
						
						print "$us<br/>";
						print "".$rec3['date']." <br/>";
						if($rec3['deleted']==0)
						{
						if((strcmp("$us","$myUser")==0 || $ad==1) )
								{
									print "<form  action=\"deletecomment.php?ad=$ad\" method=\"post\" >
										<button class=\"deletereplybutton\" type=\"submit\" value=\"Delete\">Delete</button>
								   <input type=\"text\" id=\"idcomdel\" name=\"idcomdel\" value = \"$idh\" style=\"display:none\" />
								   <input type=\"text\" id=\"usern\" name=\"usern\" value = \"$myUser\" style=\"display:none\" />
								<input type=\"text\" id=\"toptt\" name=\"toptt\" value = \"$id\" style=\"display:none\"  /> </form>";
			
						}
						}
						print "</p></div> </td>";
						
						
						print ' <td class="comments" >';
						if($rec3['deleted']!=0)
						{print "<span style=\"color:red\">Deleted</span><p></p>";
						}
						
						print "".$rec3['text']."";
						
							
						if($rec3['deleted']==0)
						{	
						print "<form  action=\"reply.php?ad=$ad\" method=\"post\" >
						<p ><hr class=\"hrline2\"/></p>
						<div class=\"replyBox\">
						
								<textarea id =\"replybox\" name=\"replybox\" class=\"replydesc\" placeholder=\"Reply here...\"></textarea>
								<div><input class=\"deletebutton\"  type=\"submit\" value=\"reply\"></input> </div>
								
								<input type=\"text\" id=\"usern\" name=\"usern\" value = \"$myUser\" style=\"display:none\" />
								<input type=\"text\" id=\"toptt\" name=\"toptt\" value = \"$id\" style=\"display:none\"  />
								<input type=\"text\" id=\"idcom\" name=\"idcom\" value = \"$idh\" style=\"display:none\" />
			
						</div>
						</form>";
						}
						$query9 = mysql_query("SELECT filename FROM files WHERE topicID ='$id'")
					or die(mysql_error()); 
					$num = mysql_fetch_row($query9);
					if($num !=0)
					{
						print "<div> My files: ";
						while($rec9=mysql_fetch_array($query9)) 
						{$tmp = $rec9['filename'];
							$path ="S:\\uploads\\$tmp";
							print"$path";
							print "<p><a href=\"download($path)\" target=\"_blank\">$tmp</a></p>";
						}
						print"</div>";
					}
							
					print"	</div>
							</td>
							</tr>
							</table>
						</div>
							";
							
						print"<table class=\"replies\" cellspacing= \"50px\">";
						$query7 = mysql_query("SELECT userID, date, text, ID, deleted FROM comment WHERE replytoID ='$idh'")
					      or die(mysql_error()); 
					
					while($rec7=mysql_fetch_array($query7)) 
					{ $us1="";
						$query8 = mysql_query("SELECT name FROM user WHERE ID ='".$rec7['userID']."'")
					or die(mysql_error()); 
					while($rec8=mysql_fetch_array($query8)) 
						{ $us1 = $rec8['name'];}
						print'<tr>
								<td> <div class="pic1">
						<p><img id="userImg1" src="images/brontesmall.jpg"/>';
						
						print "</br>$us1<br/><span style=\"font-size: 10px;\">";
						print "".$rec7['date']." </span>";
						if($rec7['deleted']==0)
						{
						if(strcmp("$us1" , "$myUser")==0 || $ad==1)
								{
									print "<div><form  action=\"deletereply.php?ad=$ad\" method=\"post\" >
										<button class=\"deletereplybutton\" type=\"submit\" value=\"delete\">Delete</button>
								   <input type=\"text\" id=\"datereply\" name=\"datereply\" value = \"".$rec7['date']."\" style=\"display:none\" />
								   <input type=\"text\" id=\"idcom\" name=\"idcom\" value = \"$idh\" style=\"display:none\" />
								   <input type=\"text\" id=\"usern\" name=\"usern\" value = \"$myUser\" style=\"display:none\" />
								<input type=\"text\" id=\"toptt\" name=\"toptt\" value = \"$id\" style=\"display:none\"  /> </form></div>";
									
								}
							}
						print "</p>  </div> <p ><hr class=\"hrline4\"/></p></td>";
						print ' <td class="reply">';
						if($rec7['deleted']!=0)
						{print "<span style=\"color:red\">Deleted</span> <p></p>";
						}
						print "".$rec7['text']."";
							
						
						print"</td>
						
						</tr> ";
						}
						print"
					</table>
						
								<p ><hr class=\"hrline\"/></p>";
					}
					}
					}
				?>
	
		</div>
	
	</body>
</html>