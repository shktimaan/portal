<?php
include "connection.php";


echo '<div class="panel panel-default" style="margin-left:25px; margin-right:25px;">';
echo '<div class="panel-heading "style="padding-left:600px;">Registered Students</div>'; 
echo '<table class="table">';
echo '<th>Name</th>';
echo '<th>Roll NO</th>';
echo '<th> Email</th>';
echo "<th >regno</th>";
echo "<th >contact</th>";
echo "<th >Semester</th>";;
$name=$conn->query("SELECT * FROM accepted_student");
while($rr=$name->fetch_assoc())
{
echo '<tr><td>'.$rr["name"]."</td>";
echo '<td>'.$rr["roll_no"]."</td>";
echo '<td>'.$rr["email"]."</td>";
echo '<td>'.$rr["regno"]."</td>";
echo '<td>'.$rr["contact"]."</td>";
echo '<td>'.$rr["semester"]."</td>";
echo '</tr>';
echo '';
}
echo ' </table>';
echo "</div>";
?>