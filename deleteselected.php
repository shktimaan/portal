<script type="text/javascript">
function del () {
	// body...
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              //  document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            alert("hutiyo ka raja haar gya");
            }
        };
        xmlhttp.open("GET", "deleteselected.php", true);
        xmlhttp.send();
}
</script>

<?php
include "connection.php";

echo '<div class="panel panel-default" style="margin-left:25px; margin-right:25px;">';
echo '<div class="panel-heading" style="padding-left:500px;">Delete Selected Students from the database</div>'; 
echo '<table class="table">';
echo '<th>Name</th>';
echo '<th>Roll NO</th>';
echo '<th> Email</th>';
echo "<th >regno</th>";
echo "<th >contact</th>";
echo "<th >Semester</th>";
echo '<th> Action </th>';
$name=$conn->query("SELECT * FROM accepted_student");
while($rr=$name->fetch_assoc())
{
echo '<tr><td>'.$rr["name"]."</td>";
echo '<td>'.$rr["roll_no"]."</td>";
echo '<td>'.$rr["email"]."</td>";
echo '<td>'.$rr["regno"]."</td>";
echo '<td>'.$rr["contact"]."</td>";
echo '<td>'.$rr["semester"]."</td>";
echo '<td>';
echo'<a href="#" onClick="return del();"><button type="button" class="btn btn-default btn-lg">';
 echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete';
echo'</button></a></td></tr>';

}
echo ' </table>';
echo "</div>";


?>
