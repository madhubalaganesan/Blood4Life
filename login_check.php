<?php
include('configure.php');
if(isset($_POST["signup"]))
{
	 $username=$_POST['Username'];
	 $pass=$_POST['Password'];
	 $query="select count(*) as total from user where userName='$username' and password='$pass'";
	 $count=mysqli_query($con,$query);
	 $result=mysqli_fetch_assoc($count);
	 echo $counter=$result['total'];
	 
	 if($counter==1)
	 {
	 $_SESSION['member']=$username;
	 if($username=="admin")
	 {
	 header('location:adminHome.php');
	 }
	 else
	 {
	 header('location:userHome.php'); 
	 }
	 }
	 else
	 {
		 echo "<script> alert('Wrong Username or password'); </script>";
	 }
	 
}
?>