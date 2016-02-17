<html><body>
<?php
$user=$_POST["id"];
$pass=$_POST["password"];/*
include ("connection.php");*/
   $servername = "localhost";
   $username = "root";
   $password = "";
 $connection=mysql_connect("localhost","root","");
 if(!$connection)
echo "kat gya chutiya";
 $dbname=mysql_select_db("portal",$connection);
 if(!$dbname) echo "<br>kismat jhand";

 $sql=mysql_query("SELECT password FROM admin WHERE username='$user' ",$connection);
 if(!$sql){
   die("Database query failed ".mysql_error());
 }
while ($row= mysql_fetch_array($sql)) {
   if($pass===$row["password"]) {
      session_start();
      $_SESSION['sessid']="adminbabu";
      echo "session_start()";
      header("Location: /portal/admin.php");
   }
}

?></body>
</html>
