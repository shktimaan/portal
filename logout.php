<html>
<body>
<?php
session_start();
session_unset();
session_destroy();
header("Location: /portal/file1.php");
?>
</body>
</html>