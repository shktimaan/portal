<html>
<body>
<?php
echo"betu <br>";
$servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "portal";
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 
$fname=$_POST["txtFirstName"];
$mname=$_POST["txtMiddleName"];
$lname=$_POST["txtLastName"];
$name=$fname." ".$mname." ".$lname;
$date=$_POST["dob"];
$gender=$_POST["male"];
//$hobby=$_POST["finalHobby"];
$address=$_POST["a1"]." ".$_POST["a2"]." ".$_POST["a3"].",".$_POST["state"].","."PIN:".$_POST["a6"]." ";
$uploaddir = 'photos/';
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
   // echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

$photoname=basename($_FILES["photo"]["name"]);

//echo 'Here is some more debugging info:';
//print_r($_FILES);

$contact=$_POST["contact"];
$tenth=$_POST["a"];
$twelfth=$_POST["b"];
$regno=$_POST["regno"];
$dept=$_POST["dept"];
$sem=$_POST["sem"];
$roll=$_POST["yr"]."/".$_POST["branch"]."/".$_POST["roll"];
$cgpa=$_POST["d"];
$email=$_POST["email"];
$password=$_POST["pwd"];
//echo $hobby;
//echo "localeconv()";
$sql = "INSERT INTO student (name,photoname,dob,gender,hobby,address,contact,10thmarks,12thmarks,regno,dept,semester,roll_no,cgpa,email,password)
VALUES ('$name','$photoname', '$date','$gender','NULL','$address','$contact','$tenth','$twelfth','$regno','$dept','$sem','$roll','$cgpa','$email','$password')";
if ($conn->query($sql) === TRUE) {
 ///   echo "New record created successfully";
echo "string";
$conn->close();
echo $hobby;
header("Location: /portal/file1.php");
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}echo $gender;
?>
</body>
</html>