<?php
echo"wow";
include "connection.php";
//echo $_POST["area"];
$note=$_POST["area"];
$set=$conn->query("INSERT into notices (body) Values ('$note')");
if($set===TRUE){
	echo "hohoho";
	header("Location: /portal/admin.php");
}
?>