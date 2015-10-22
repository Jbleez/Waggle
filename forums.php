<?php
$myUser ="";

$ad = 0;

if(isset($_GET['ulogname']) )
{
	$myUser = $_GET['ulogname'];
}
else if(isset($_GET['userfname']) )
{
	$myUser = $_GET['userfname'];
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
		<link rel="stylesheet" href="css/styleSort.css" />
		
	</head>
	<body>
		
			<div class="containerForum">
			

			<nav style="margin-top: 5px;" >
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
			
			<div class="separate4"></div>
			
		<table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
		<thead>
			<tr>
				<th><h3>Title</h3></th>
				<th><h3>Status</h3></th>
				<th><h3>Owner</h3></th>
				<th><h3>Start Date </h3></th>
				<th class="nosort"><h3>Discussions</h3></th>
				<th><h3>Views</h3></th>
				<th><h3>Total number of replies</h3></th>
				<th><h3>Latest post</h3></th>
				
				
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
					{ 
						Print "<tr>"; 
						if ($rec['deleted'] == 0){
						Print "<td>" .$rec['title']. "</td> "; }
						else
						{
						Print "<td> <span style=\"color:red\">Closed</span>" .$rec['title']. "</td> ";
						}
						if($rec['private']==0)
						{Print "<td>Public</td> ";}
						else
						{Print "<td>Private</td> ";}
					$query1 = mysql_query("SELECT name FROM user WHERE ID = '".$rec['creatorID']."'");
					while($rec1=mysql_fetch_array($query1)) 
					{ Print "<td>".$rec1['name']."</td> "; }
						
					 Print "<td>".$rec['created']."</td> ";
					
					 Print "<td><table>";
					 
					 $query3 = mysql_query("SELECT ID FROM topic WHERE forumID = '".$rec['ID']."'");
					 
					while($rec3=mysql_fetch_array($query3)) 
					
					{	
						$query4 = mysql_query("SELECT title, ID, deleted FROM topic WHERE ID = '".$rec3['ID']."'");
						while($rec4=mysql_fetch_array($query4))
						{
						$ke =$rec4['title'];
						Print " <tr><td>";
						if ($rec4['deleted'] == 1)
						{
							echo "<span style=\"color:red\">Closed</span> $ke "; 
						}
						else
						{
							echo "<a href=\"discussions.php?topiC=$ke&userfname=$myUser&ad=$ad\">$ke </a> ";
						}
						 
						print "</td></tr>";
						} 
					}
					
					Print "</table></td>";
					$v="";
				$query6 = mysql_query("SELECT views FROM forum WHERE ID = '".$rec['ID']."'");
					while($rec6=mysql_fetch_array($query6)) 
					
					{	
						$v =$rec6['views'];
						
					}
						
						Print "<td>$v</td> ";
					
					$query5 = mysql_query("SELECT DISTINCT a.ID FROM comment as a INNER JOIN topic as b ON a.topicID = b.ID WHERE b.forumID = '".$rec['ID']."'");
					$num = mysql_num_rows($query5);

					Print "<td>$num</td> ";
					
					$query6 = mysql_query("SELECT DISTINCT a.date, a.userID, a.text FROM comment as a INNER JOIN topic as b ON a.topicID = b.ID WHERE b.forumID = '".$rec['ID']."'");
					$i="b";
					$t="b";
					$d="b";
					$usr="b";
					while($rec6=mysql_fetch_array($query6)) 
					
					{	
						$i = $rec6['userID'];	
						$t=$rec6['text'];
						$d=$rec6['date'];
					}
					if($i=="b")
					{
						Print "<td>No comment</td> ";
					}
					else
					{
						
					
					$query7 = mysql_query("SELECT name FROM user WHERE id = $i");
					while($rec7=mysql_fetch_array($query7)) 
					
					{	
						$usr = $rec7['name'];	
					}
					Print "<td>By $usr on $d :\" $t \"</td> ";
					}
					}
			?> 
		</tbody>
  </table>
	<div id="controls">
		<div id="perpage">
			<select onchange="sorter.size(this.value)">
			<option value="5">5</option>
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100" selected="selected">100</option>
			</select>
			<span>Entries Per Page</span>
		</div>
		<div id="navigation">
			<img src="images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
			<img src="images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
			<img src="images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
			<img src="images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
		</div>
		<div class="text">Displaying Page <span id="currentpage"></span> of <span id="pagelimit"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo '<a style=\"font-size:14px\" href="login.php?userAbout='.urlencode($myUser).'"> Go home </a>';?></div>
		
	</div>
	
	
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
  var sorter = new TINY.table.sorter("sorter");
	sorter.head = "head";
	sorter.asc = "asc";
	sorter.desc = "desc";
	sorter.even = "evenrow";
	sorter.odd = "oddrow";
	sorter.evensel = "evenselected";
	sorter.oddsel = "oddselected";
	sorter.paginate = true;
	sorter.currentid = "currentpage";
	sorter.limitid = "pagelimit";
	sorter.init("table",1);
  </script>

				
			</div>
	
	</body>
</html>