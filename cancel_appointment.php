<?php
session_start();
$user=$_SESSION['member'];
include('configure.php');
$sql="delete from appointments where username='$user'";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "Your Appointment : Display existing appointment details here";
}
?>