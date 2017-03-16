<?php
include('configure.php');
if(isset($_POST["submit"]))
{
	$date=$_POST['selectedDate'];
	$time=$_POST['selectedTime'];
	$location=$_POST['option'];
	$user=$_SESSION['member'];

	
	$sql="insert into appointments values('$date','$time','$location','$user','Available')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>alert('Record updated Successfully'); window.location.assign('userHome.php')</script>";
	}
	else
		echo "<script>alert('Record didn't update Successfully');</script>";
}
?>