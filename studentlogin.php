
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
   else  //echo "Connected";
   $result=$connection->query("SELECT password FROM accepted_student WHERE email='$user'");
   while ($row=$result->fetch_assoc()) 
      { if($pass===$row["password"]) 
        {
          session_start();
          $_SESSION['sessid']="student";
          $_SESSION['tab']='null';
          $_SESSION['email']=$user;
          echo "session_start()";
          header("Location: /portal/file4.php");

        }
	    else{
        session_start();
        $_SESSION["sessid"]="invalid";
    echo "kuch hua";
        header("Location: /portal/file3.php");
        }
      }
   // session_start();
   // $_SESSION["sessid"]="invalid";      
   // header("Location: /portal/file3.php");
        
   echo "Wrong password";
?>
</body>
</html>

