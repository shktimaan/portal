
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Portal</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css"  />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
session_start();
if($_SESSION["sessid"]!="student")	header("Location: /portal/file3.php");
?>
</head>

<body class="body">
	
	<header class="mainHeader">
		<img src="image/logo.jpg">
		<nav><ul>
			<li class="active"><a href="#">Profile</a></li>
			<li><a href="#">Assignments</a></li>
			<li><a href="#">Project</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul></nav>
	</header>
		
	<div class="mainContent">
		<div class="content">	
				<article class="topcontent">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Second article</a></h2>
					</header>
					
					<footer>
						<p class="post-info"></p>
					</footer>
					
					<content>
						<p>STUDENT DETAILS WILL BE DISPLAYED HERE </p>
						<p>.</p>
					</content>
					
				</article>

				
		</div>
			
				<aside class="top-sidebar">
					<article>
					<h2>Top Sidebar</h2>
					<p>Can be used as a notice board for students</p>
				    </article>
				</aside>
				
				<aside class="middle-sidebar">
					<article>
					<h2>Middle Sidebar</h2>
					<p>Other Link REFERENCES.</p>
				    </article>
				</aside>				

				
	</div>
	
</body>
</html>