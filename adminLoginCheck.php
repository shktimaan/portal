 <?php
 session_start();
 if($_SESSION["sessid"]!="adminbabu"){
session_unset();
session_destroy();
header("Location: /portal/file1.php");
 }
 ?>