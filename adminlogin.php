
<html><body>
<?php
   $user=$_POST["id"];
   $pass=$_POST["password"];/*
   include ("connection.php");*/
   //echo $user;
      $servername = "localhost";
      $username = "root";
      $password = "";
      $connection=new mysqli("localhost","root","","portalgr8");
      if ($connection->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
   else  echo "Connected";
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
	   else{
        session_start();
        $_SESSION["sessid"]="invalid";
      header("Location: /portal/file2.php");
        }
      }
    header("Location: /portal/file2.php");
     
?>
</body>
</html>

