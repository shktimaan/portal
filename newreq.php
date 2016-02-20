<?php
include "connection.php";

echo '<div class="panel panel-default" style="margin-left:25px; margin-right:25px;">';
echo '<div class="panel-heading" style="padding-left:600px;">New Requests</div>'; 
echo '<table class="table">';
echo '<th>Name</th>';
echo '<th>Roll NO</th>';
echo '<th> Email</th>';
echo "<th >regno</th>";
echo "<th >contact</th>";
echo "<th >Semester</th>";
echo '<th> Action </th>';
$name=$conn->query("SELECT * FROM student");
while($rr=$name->fetch_assoc())
{
echo '<tr><td>'.$rr["name"]."</td>";
echo '<td>'.$rr["roll_no"]."</td>";
echo '<td>'.$rr["email"]."</td>";
echo '<td>'.$rr["regno"]."</td>";
echo '<td>'.$rr["contact"]."</td>";
echo '<td>'.$rr["semester"]."</td>";
echo '<td>';echo'<a href="insertRecord.php?id='.$rr["id"].'"><button type="button" class="btn btn-default btn-lg" name="okButton">';
 echo '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Accept';
echo'</button></a>' 	;
echo "          ";
echo'<a href="delete.php?id='.$rr["id"].'"><button type="button" class="btn btn-default btn-lg">';
 echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Reject';
echo'</button></a></td></tr>';

}
echo ' </table>';
echo "</div>";
?>

<?php
if(isset($_POST["okButton"])){
	echo"<br>kamyabi<br>";
}

?>