<?php
include('configure.php');
if(isset($_POST["update"]))
{
	$opos=$_POST["opos"];
	$oneg=$_POST["oneg"];
	$apos=$_POST["apos"];
	$aneg=$_POST["aneg"];
	$bpos=$_POST["bpos"];
	$bneg=$_POST["bneg"];
	$abpos=$_POST["abpos"];
	$abneg=$_POST["abneg"];
	
	function severity_test($blood_group)
	{
		if($blood_group<30)
		{
			$status="low";
			return $status;
		}
		else if($blood_group>=30 && $blood_group<70)
		{
			$status="medium";
			return $status;
		}
		else if($blood_group>=70)
		{
			$status="High";
			return $status;
		}
	}
	
	$opos_status=severity_test($opos);
	$oneg_status=severity_test($oneg);
	$apos_status=severity_test($apos);
	$aneg_status=severity_test($aneg);
	$bpos_status=severity_test($bpos);
	$bneg_status=severity_test($bneg);
	$abpos_status=severity_test($abpos);
	$abneg_status=severity_test($abneg);
	
	$sql="delete from bloodbarometer";
	mysqli_query($con,$sql);
	$update="insert into bloodbarometer (bloodType,amount,status) values('O+','$opos','$opos_status'),('O-','$oneg','$oneg_status'),('A+','$apos','$apos_status'),
	('A-','$aneg','$aneg_status'),('B+','$bpos','$bpos_status'),('B-','$bneg','$bneg_status'),('AB+','$abpos','$abpos_status'),('AB-','$abneg','$abneg_status')";
	$result=mysqli_query($con,$update);
	if($result)
	{
		echo "<script>alert('Record updated Successfully'); window.location.assign('adminHome.php')</script>";
	}
	else
		echo "<script>alert('Record didn't update Successfully');</script>";
	
}
?>