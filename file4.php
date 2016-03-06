
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Portal</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css"  />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
session_start();
include 'connection.php';
//if($_SESSION["sessid"]!="student")	header("Location: /portal/file3.php");
$user=$_SESSION["email"];
$record=$conn->query("SELECT * from accepted_student where email='$user' ");
$rr=$record->fetch_assoc();
$note=$conn->query("SELECT * from notices");

?>
</head>
<body>

  <div id="sb" style="margin: 50px;">
  <img src="image/logo.jpg" style="width: 20%;" ><hr>
    <!-- Nav tabs -->
  <div style="background-color: black; border-radius:10px;">
  <ul class="nav nav-tabs" role="tablist" >
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#LnR" aria-controls="LnR" role="tab" data-toggle="tab">Links and References</a></li>
    <li role="presentation"><a href="logout.php" >Log Out</a></li>
  </ul>
</div>
<br>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <?php 

      include 'connection.php';

echo '<div class="panel panel-default" style="margin-left:25px; margin-right:25px;">';
echo '<div class="panel-heading "style="padding-left:600px;">NOTICE BOARD</div>'; 
echo '<div id="kb" style="padding-left:199px;">';
while($notice=$note->fetch_assoc()){
  echo $notice['body']."<br><br><br>";

}
echo'</div>';
echo'</div>';


    ?> 
     </div>
<div role="tabpanel" class="tab-pane" id="LnR">
    <?php
   // echo $rr["name"];

echo '<div class="panel panel-default" style="margin-left:25px; margin-right:25px;">';
echo '<div class="panel-heading "style="padding-left:540px;">Links and References</div>';
echo '<h4><ul>=><a href="#">HTML Reference</a>  </ul><br>';
echo '<ul>=><a href="#">CSS Reference</a>  </ul><br>';
echo '<ul>=><a href="#">PHP Reference</a>  </ul><br>';
echo '<ul>=><a href="#">JAVASCRIPT Reference</a>  </ul><br>';
echo '<ul>=><a href="#">BOOTSTRAP Reference</a>  </ul><br>';
echo '<ul>=><a href="#">AJAX Reference</a>  </ul><br>';
echo "</h4></div>"; 
    ?>
   </div>
      <div role="tabpanel" class="tab-pane" id="profile">
    <?php
   // echo $rr["name"];

echo '<div class="panel panel-default" style="margin-left:25px; margin-right:25px;">';
echo '<div class="panel-heading "style="padding-left:540px;">Your Details</div>';
echo '<div id="inside" style="padding-left:199px;">';
echo '<img src="photos/'.$rr["photoname"].'" style="float:right;margin-right:400px;;width:200px;height:200px">';
echo '<b>Name:</b> '.$rr["name"].'<br>';
echo '<b>Roll No.:</b> '.$rr["roll_no"].'<br>';
echo '<b>Email ID:</b> '.$rr["email"].'<br>';
echo '<b>CGPA:</b> '.$rr["cgpa"].'<br>';
echo '<b>Date Of Birth:</b> '.$rr["dob"].'<br>';
echo '<b>Gender:</b> '.$rr["gender"].'<br>';
echo '<b>Hobby:</b> '.$rr["hobby"].'<br>';
echo '<b>Address:</b> '.$rr["address"].'<br>';
echo '<b>Contact:</b> '.$rr["contact"].'<br>';
echo '<b>10th marks:</b> '.$rr["10thmarks"].'<br>';
echo '<b>12th marks:</b> '.$rr["12thmarks"].'<br>';
echo '<b>Registration Number:</b> '.$rr["regno"].'<br>';
echo '<b>Department:</b> '.$rr["dept"].'<br>';
echo '<b>Current Semester:</b> '.$rr["semester"].'<br>';
echo "</div>"; 
echo "</div>"; 
    ?>
   </div>

    </div>
  </div>

</div>
</div>
<link rel="stylesheet" href="css/bootstrap.min.css"> 
</body>
  <script src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>