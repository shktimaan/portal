<?php
$id=$_GET["id"];
session_start();
?>

<?php
	echo $id;
	$connection=new mysqli("localhost","root","","portal");
 if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else echo "Connected";
$result=$connection->query("SELECT * FROM student WHERE id='$id'");
$row=$result->fetch_assoc();$name=$row["name"];
$photoname=$row["photoname"];
$date=$row["dob"];
$gender=$row["gender"];
$address=$row["address"];
$contact=$row["contact"];
$tenth=$row["10thmarks"];
$twelfth=$row["12thmarks"];
$regno=$row["regno"];
$dept=$row["dept"];
$sem=$row["semester"];
$roll=$row["roll_no"];
$cgpa=$row["cgpa"];
$email=$row["email"];
$password=$row["password"];
$_SESSION["tab"]="newReq";
$sql = "INSERT INTO accepted_student (name,photoname,dob,gender,hobby,address,contact,10thmarks,12thmarks,regno,dept,semester,roll_no,cgpa,email,password)
VALUES ('$name','$photoname', '$date','$gender','NULL','$address','$contact','$tenth','$twelfth','$regno','$dept','$sem','$roll','$cgpa','$email','$password')";
if ($connection->query($sql) === TRUE) {
echo "string";
$del="DELETE FROM student WHERE id = $id";
	if($connection->query($del)===TRUE){

//$connection->close();

header("Location: /portal/admin.php");
}
}
 else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}echo $gender;


	
?>