<html>
<head>
    <title>Home</title>
	<?php
session_start();
if(!isset($_SESSION["sessid"]))
$_SESSION["sessid"]="newUser";


  ?>
	<style type="text/css">body{background:url(image/bck2.jpg) center fixed; margin:0; padding:0; font-family:Tahoma, Geneva, sans-serif;}
    #logo{
    	float: left;
    }
	h1{
	position:relative;
	right:170px;
	}@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
@charset "UTF-8";
/* Base Styles */
#cssmenu ul,
#cssmenu li,
#cssmenu a {
  list-style: none;
  margin: 0;
  padding: 0;
  border: 0;
  line-height: 1;
  font-family: 'Lato', sans-serif;
}
#cssmenu {
  border: 1px solid #133e40;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  width: auto;
}
#cssmenu ul {
  zoom: 1;
  background: #36b0b6;
  background: -moz-linear-gradient(top, #36b0b6 0%, #2a8a8f 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #36b0b6), color-stop(100%, #2a8a8f));
  background: -webkit-linear-gradient(top, #36b0b6 0%, #2a8a8f 100%);
  background: -o-linear-gradient(top, #36b0b6 0%, #2a8a8f 100%);
  background: -ms-linear-gradient(top, #36b0b6 0%, #2a8a8f 100%);
  background: linear-gradient(top, #36b0b6 0%, #2a8a8f 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@top-color', endColorstr='@bottom-color', GradientType=0);
  padding: 5px 10px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
}
#cssmenu ul:before {
  content: '';
  display: block;
}
#cssmenu ul:after {
  content: '';
  display: table;
  clear: both;
}
#cssmenu li {
  float: left;
  margin: 0 5px 0 0;
  border: 1px solid transparent;
}
#cssmenu li a {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  padding: 8px 15px 9px 15px;
  display: block;
  text-decoration: none;
  color: #ffffff;
  border: 1px solid transparent;
  font-size: 16px;
}
#cssmenu li:active {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #36b0b6;
}
#cssmenu li:active a {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  display: block;
  background: #1e6468;
  border: 1px solid #133e40;
  -moz-box-shadow: inset 0 5px 10px #133e40;
  -webkit-box-shadow: inset 0 5px 10px #133e40;
  box-shadow: inset 0 5px 10px #133e40;
}
#cssmenu li:hover {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #36b0b6;
}
#cssmenu li:hover a {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  display: block;
  background: #1e6468;
  border: 1px solid #133e40;
  -moz-box-shadow: inset 0 5px 10px #133e40;
  -webkit-box-shadow: inset 0 5px 10px #133e40;
  box-shadow: inset 0 5px 10px #133e40;
}


.con img{
	left: 175px;
	width:1000px;
	height: 250px;
	border:thin;
	overflow:hidden;
	position:absolute;
}


.img{
	left:100px;
	position:absolute;
	width:800px;
	height:250px;
	animation:mm 20s infinite;
	opacity: 0;
	}
	@keyframes mm{
		10%{opacity:1}
		45%{opacity:0}
		}
		img:nth-child(0){animation-delay: 0s}
		img:nth-child(1){animation-delay: 5s}
		img:nth-child(2){animation-delay: 10s}
		img:nth-child(3){animation-delay: 15s}


.icon0{
	top:465px;
	left:595px;
	position:absolute;
	
	
	
}

.icon1{
	top:465px;
	left:950px;
	position:absolute;
	
}


.icon2	{
	top:465px;
	left:240px;
	position:absolute;
	
}



    </style>
</head>
<body >
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='file1.php'><span>Home</span></a></li>
   <li><a href='file3.php'><span>Student</span></a></li>
   <li><a href='file2.php'><span>Admin</span></a></li>
    <li><a href='r.php'><span>New Student</span></a></li>
   <li class='last'><a href='index.html'><span>About</span></a></li>
</ul>
</div>
	 <p> <img src="image/logo.jpg" width=300 height="130" alt="Student Information System Logo"  id="logo"/><br><br><br><center><h1>Welcome to Web Portal !!</h1></p></center>
		
		<hr>
        
        
          <div class="con">
    <img src="image/1.jpeg" class="img" />
    <img src="image/2.jpg" class="img" />
    <img src="image/3.jpg" class="img" />
    <img src="image/4.jpg" class="img" />
  </div>
        

	<a href="file2.php">	<img src="image/Admin (1).png" class="icon0" alt"admin login" width="150" height="150" > </a>

	<a href="file3.php">	<img src="image/Student.png"  class="icon1" alt="student login" width="150" height="150"></a>
    
    
<a href="r.php">	<img src="image/user_business_person_businessman_man_flat_icon-512.png" class="icon2" alt="Registeration" width="150" height="150" ></a>	

</body>
</html>