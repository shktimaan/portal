
<html><body>
<?php
   $user=$_POST["id"];
   $pass=$_POST["password"];/*
   include ("connection.php");*/
      $servername = "localhost";
      $username = "root";
      $password = "";
      $connection=new mysqli("localhost","root","","portal");
      if ($connection->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
   else  //echo "Connected";
   $result=$connection->query("SELECT password FROM admin WHERE username='$user'");
   while ($row=$result->fetch_assoc()) 
      { if($pass===$row["password"]) 
         {
          session_start();
          $_SESSION['sessid']="adminbabu";
          $_SESSION['tab']='null';
          echo "session_start()";
          header("Location: /portal/admin.php");
         }
	
      }
   echo "Wrong password";
//header("Location: /portal/file1.html");
?>
</body>
</html>

