<html>
<body>
<?php
session_start();
$_SESSION["sessid"]="newUser";
header("Location: /portal/file1.php");
?>
</body>
</html>