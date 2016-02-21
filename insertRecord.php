<?php
$id=$_GET["id"];
?>

<?php
	echo $id;
	$connection=new mysqli("localhost","root","","portal");
 if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else echo "Connected";
$result=$connection->query("SELECT * FROM student WHERE id='$id'");
while ($row=$result->fetch_assoc()){
$jadoo="INSERT INTO `accepted_student` (`id`, `name`, `photoname`, `dob`, `gender`, `hobby`, `address`, `contact`, `10thmarks`, `12thmarks`, `regno`, `dept`, `semester`, `roll_no`, `cgpa`, `email`, `password`) VALUES
(11, 'prassd ss xx', 'img174.jpg', '2016-02-09', 'male', 'NULL', 'room 111 hall 03 NIT Durgapur Durgapur,West Bengal,PIN:713209 ', 9563206054, '10', '94.6', 20150607, 'BT', '3', '15/BT/11', '0.00', 'shik1harsrv3@gmail.com', '11'),
(12, '  ', '', '0000-00-00', 'male', 'NULL', '  ,,PIN: ', 0, '', '', 0, 'IT', 'none', '13/IT/', '0.00', '', ''),
(13, 'Rajni Kant SuperStar', 'Screenshot (2).', '2016-02-06', 'male', 'NULL', 'Earth Solar System Milky Way,Tamil Nadu,PIN:786007 ', 9999999999, '101', '201', 20130007, 'IT', '1', '13/IT/786', '22.00', 'google@rajnikant.com', 'hohahoha');
";
if($connection->query($jadoo)===TRUE){
	echo'ho gya<br>';
}
else  echo "Error: " . $jadoo . "<br>" . $connection->error;
echo "wow";
echo" ". $jadoo."hilao<br>";
echo $row["id"].$row["name"].$row["photoname"].$row["dob"].$row["gender"];
}
	
?>