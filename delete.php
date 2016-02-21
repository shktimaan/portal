<?php
$id=$_GET['id'];
include "connection.php";
include 'adminLoginCheck.php';
?>
<?php
$_SESSION["tab"]="newReq";
	$del="DELETE FROM student WHERE id = $id";
	if($conn->query($del)===TRUE){
		$_SESSION["tab"]="newReq";
	header("Location: /portal/admin.php");
	}
	else
	echo"hutiya";
echo "<br> ".$id."hola";
?>
