<html>
<head><title>Admin</title><link rel="stylesheet" href="css/bootstrap.min.css"> 
 <?php
 include "adminLoginCheck.php";
 ?>
<style>
body{background:url(image/bck2.jpg) center fixed; margin:0; padding:0; font-family:Tahoma, Geneva, sans-serif;}
@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
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
h1{
position:relative;
right:170px;
}
fieldset{
/*    alignment-adjust:middle;
  */  border-radius: 25px;

    margin-left: 150px;
    margin-right: 150px;


}
legend{
    font-size: 150%;
}

img{
    float:left;
}
#fp{
position:relative;
left:80px;
}
</style>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body bgcolor=#32cd32>

<div id='cssmenu'>
<ul>
   <li class='active'><a href='file1.html'><span>Home</span></a></li>
   <li><a href='file3.html'><span>Student</span></a></li>
   <li><a href='file2.html'><span>Admin</span></a></li>
    <li><a href='r.html'><span>New Student</span></a></li>
    <li><a href='#'><span>About</span></a></li>
  <div style="margin-left:91500px;"> <li class='last'><a href='logout.php'><span>Log Out</span></a></li></div>
</ul>
</div>
<br>
 <p> <img src="image/logo.jpg" width=300 height="130" alt="Student Information System Logo"  id="logo"/><center><br><br><br><h1>Welcome Administrator</h1></p></center>
<hr>


<div class="btn-group btn-group-justified" role="group" aria-label="..." style="padding-left:50px; padding-right:50px; " >
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Registered Students</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">New Requests</button>
  </div>
   <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Modify
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">Insert</a></li>
      <li><a href="#">Delete    </a></li>
    </ul>
  </div>
</div>
<br>
<?php
include "connection.php";

echo '<div class="panel panel-default" style="margin-left:25px; margin-right:25px;">';
echo '<div class="panel-heading">New Requests</div>'; 
echo '<table class="table">';
echo '<th>Name</th>';
echo '<th>Roll NO</th>';
echo '<th> Email</th>';
echo "<th >regno</th>";
echo "<th >contact</th>";
echo "<th >Semester</th>";
echo '<th> Action </th>';
$name=$conn->query("SELECT * FROM student");
while($rr=$name->fetch_assoc())
{
echo '<tr><td>'.$rr["name"]."</td>";
echo '<td>'.$rr["roll_no"]."</td>";
echo '<td>'.$rr["email"]."</td>";
echo '<td>'.$rr["regno"]."</td>";
echo '<td>'.$rr["contact"]."</td>";
echo '<td>'.$rr["semester"]."</td>";
echo '<td>';echo'<button type="button" class="btn btn-default btn-lg">';
 echo '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Accept';
echo'</button>';
echo "          ";
echo'<button type="button" class="btn btn-default btn-lg">';
 echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Reject';
echo'</button></td></tr>';

}
echo ' </table>';
echo "</div>";
?>
</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>
