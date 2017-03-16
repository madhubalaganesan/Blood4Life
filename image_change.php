
<?php
include('configure.php');
$sql="select * from bloodbarometer";
$result=mysqli_query($con,$sql);


while($row=mysqli_fetch_array($result))
{
	$blood_group[]=$row["bloodType"];
	$status[]=$row["status"];
}
$count=mysqli_num_rows($result);
for($i=0;$i<$count;$i++)
{
	//echo $blood_group[$i]." ".$amount[$i]." ".$status[$i]."<br />";
	show_image($blood_group[$i],$status[$i]);
}

/*if($a=="medium")
{
	echo "<script>$('#mun').attr('src','images/medium.jpg');</script>";
}*/
?>
<?php

function show_image($blood,$status)
{
	//O+
	
	if($blood=="O+" && $status=="High")
	{
		echo "<script>$('#opos').attr('src','images/high.jpg');</script>";
	}
	else if($blood=="O+" && $status=="medium")
	{
		echo "<script>$('#opos').attr('src','images/medium.jpg');</script>";
	}
	else if($blood=="O+" && $status=="low")
	{
		echo "<script>$('#opos').attr('src','images/low.jpg');</script>";
	}
	
	//O-
	
	else if($blood=="O-" && $status=="High")
	{
		echo "<script>$('#oneg').attr('src','images/high.jpg');</script>";
	}
	else if($blood=="O-" && $status=="medium")
	{
		echo "<script>$('#oneg').attr('src','images/medium.jpg');</script>";
	}
	else if($blood=="O-" && $status=="low")
	{
		echo "<script>$('#oneg').attr('src','images/low.jpg');</script>";
	}
	
	//A+
	
	else if($blood=="A+" && $status=="High")
	{
		echo "<script>$('#apos').attr('src','images/high.jpg');</script>";
	}
	else if($blood=="A+" && $status=="medium")
	{
		echo "<script>$('#apos').attr('src','images/medium.jpg');</script>";
	}
	else if($blood=="A+" && $status=="low")
	{
		echo "<script>$('#apos').attr('src','images/low.jpg');</script>";
	}
	
	//A-
	
	else if($blood=="A-" && $status=="High")
	{
		echo "<script>$('#aneg').attr('src','images/high.jpg');</script>";
	}
	else if($blood=="A-" && $status=="medium")
	{
		echo "<script>$('#aneg').attr('src','images/medium.jpg');</script>";
	}
	else if($blood=="A-" && $status=="low")
	{
		echo "<script>$('#aneg').attr('src','images/low.jpg');</script>";
	}
	
	//B+
	
	else if($blood=="B+" && $status=="High")
	{
		echo "<script>$('#bpos').attr('src','images/high.jpg');</script>";
	}
	else if($blood=="B+" && $status=="medium")
	{
		echo "<script>$('#bpos').attr('src','images/medium.jpg');</script>";
	}
	else if($blood=="B+" && $status=="low")
	{
		echo "<script>$('#bpos').attr('src','images/low.jpg');</script>";
	}
	//B-
	
	else if($blood=="B-" && $status=="High")
	{
		echo "<script>$('#bneg').attr('src','images/high.jpg');</script>";
	}
	else if($blood=="B-" && $status=="medium")
	{
		echo "<script>$('#bneg').attr('src','images/medium.jpg');</script>";
	}
	else if($blood=="B-" && $status=="low")
	{
		echo "<script>$('#bneg').attr('src','images/low.jpg');</script>";
	}
	//AB+
	
	else if($blood=="AB+" && $status=="High")
	{
		echo "<script>$('#abpos').attr('src','images/high.jpg');</script>";
	}
	else if($blood=="AB+" && $status=="medium")
	{
		echo "<script>$('#abpos').attr('src','images/medium.jpg');</script>";
	}
	else if($blood=="AB+" && $status=="low")
	{
		echo "<script>$('#abpos').attr('src','images/low.jpg');</script>";
	}
	//AB-
	
	else if($blood=="AB-" && $status=="High")
	{
		echo "<script>$('#abneg').attr('src','images/high.jpg');</script>";
	}
	else if($blood=="AB-" && $status=="medium")
	{
		echo "<script>$('#abneg').attr('src','images/medium.jpg');</script>";
	}
	else if($blood=="AB-" && $status=="low")
	{
		echo "<script>$('#abneg').attr('src','images/low.jpg');</script>";
	}
}

?>