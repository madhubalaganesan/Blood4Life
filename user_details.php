
<?php
session_start();
include('configure.php');
$user=$_SESSION['member'];
$sql="select * from user where userName='$user'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	 $firstname=$row['firstName'];
	 $lastname=$row['lastName'];
	 $gender=$row['gender'];
	 $blood_group=$row['bloodGroup'];
	 $phone=$row['phoneNumber'];
	 $email=$row['email'];
	 $zip=$row['zipCode'];
}
echo "Name: ".$firstname." ".$lastname."<br />";
echo "Sex: ".$gender."<br />";
echo "Blood Group: ".$blood_group."<br />";
echo "Email: ".$email."<br />";
echo "Phone: ".$phone."<br />";
echo "Postal Code: ".$zip."<br />";

?>