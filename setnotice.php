<?php
include "connection.php";

echo '<div class="panel panel-default" style="margin-left:25px; margin-right:25px;">';
echo '<div class="panel-heading" "><center>Set a new notice</center></div>';
echo '<form method="POST" action="postnotice.php">';
echo '<textarea style="margin-left:250px;" rows=10 cols=118 name="area" ></textarea>'; 
echo'<br><br><center><button name="sbmit" type="submit">Submit</button></center>';
echo '</form>';
/*if(isset("sbmit"))

{
	echo"www";
}*/
//echo '</div>';
?>
