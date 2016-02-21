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
$row=$result->fetch_assoc();/*
$jadoo="INSERT INTO `accepted_student` (`id`, `name`, `photoname`, `dob`, `gender`, `hobby`, `address`, `contact`, `10thmarks`, `12thmarks`, `regno`, `dept`, `semester`, `roll_no`, `cgpa`, `email`, `password`) VALUES
(11, 'prassd ss xx', 'img174.jpg', '2016-02-09', 'male', 'NULL', 'room 111 hall 03 NIT Durgapur Durgapur,West Bengal,PIN:713209 ', 9563206054, '10', '94.6', 20150607, 'BT', '3', '15/BT/11', '0.00', 'shik1harsrv3@gmail.com', '11'),
($row['id'],$row['name'],$row['photoname'],$row['dob'],$row['gender'],$row['hobby'],$row['address'],$row['contact'],$row['10thmarks'],$row['12thmarks'],$row['regno'],$row['dept'],$row['semester'],$row['roll_no'],$row['cgpa'],$row['email'],$row['password'] )";
if($connection->query($jadoo)===TRUE){
	echo'ho gya<br>';
}
else  echo "Error: " . $jadoo . "<br>" . $connection->error;
echo "wow";
echo" ". $jadoo."hilao<br>";
echo $row["id"].$row["name"].$row["photoname"].$row["dob"].$row["gender"];*/
$name=$row["name"];
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