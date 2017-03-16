<?php
session_start();
$user=$_SESSION['member'];
include('configure.php');
$sql="select * from appointments where username='$user'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$date=$row['date'];
	$time=$row['time'];
	$location=$row['location'];
}
if($result)
{
	echo "Your have an appointment at ".$time." on ".$date." in ".$location.".";
}
else
{
	echo "Your Appointment : Display existing appointment details here";
}
?>