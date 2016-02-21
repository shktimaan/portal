<?php
$id=$_GET['id'];
include "connection.php";
include 'adminLoginCheck.php';
?>
<?php

	$del="DELETE FROM accepted_student WHERE id = $id";
	if($conn->query($del)===TRUE){
		$_SESSION["tab"]="del";
	header("Location: /portal/admin.php");
	}
	else
	echo"hutiya";
echo "<br> ".$id."hola";
?>
