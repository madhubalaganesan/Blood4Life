<?php
session_start();
include('configure.php');
$sql="select * from appointments";
$result=mysqli_query($con,$sql);
echo "<table border='0' cellpadding='0' style='overflow:scroll;text-align:center' width='100%'>";
echo "<tr>";
echo "<th>UserName</th><th>Date</th><th>Time</th><th>Location</th><th>Status</th>";
echo "<tr />";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".$row['time']."</td>";
	echo "<td>".$row['location']."</td>";
	echo "<td>".$row['status']."</td>";
	echo "</tr>";
}
echo "</table>";
?>