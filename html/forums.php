
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
			

			<nav>
		<ul class="menu">
			<li style="color: #444; width: 750px; margin-left: -80px;"><img src="unnamed.png" alt="logo"/></li>

			<li class="lis"><a href="#">your real name</a>
				<ul>
					<li><a href="#">My profile</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</li>
						<li><a href="#">My Waggle</a>
				<ul>
					<li><a href="#">Create a new forum</a></li>
					<li><a href="#">Start a discussion </a></li>
					<li><a href="#">Private area</a></li>
				</ul>
			</li>
			
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
				$con=mysql_connect("localhost","root","root");
				mysql_select_db("waggle");
				$query = mysql_query("SELECT * FROM phpcrawler_links")
				or die(mysql_error()); 
				
				while($rec=mysql_fetch_array($query)) 
					{ $thekey= $rec['id'];
						Print "<tr>"; 
						Print "<td><input type=\"radio\" name=\"thekeys\" value=\".$thekey.\" id=\".$thekey.\"/>" .$rec['id']. "</td> "; 
						Print "<td>".$rec['url']."</td> "; 
						Print "<td>".$rec['url']."</td> ";
						Print "<td>".$rec['url']."</td> ";
						Print "<td>".$rec['url']."</td> ";
						Print "<td>".$rec['url']."</td> ";
						Print "<td>".$rec['url']."</td> ";
						Print "<td>".$rec['rCode']. " </td></tr>"; 
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