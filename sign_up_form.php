<?php
include('configure.php');
if(isset($_POST["sign_up"]))
{
	 $firstname=$_POST['FirstName'];
	 $lastname=$_POST['LastName'];
	 $gender=$_POST['gender'];
	 $blood_group=$_POST['option'];
	 $phone=$_POST['PhoneNumber'];
	 $email=$_POST['Email'];
	 $zip=$_POST['Zipcode'];
	 $username=$_POST['Username'];
	 $pass=$_POST['Password'];
	 $confirm_password=$_POST['ConfirmPassword'];
	if(isset($_POST['anonymChk']))
	{
      $anonymous="yes";
	}
	else
	  $anonymous="No";
  
    $sql="insert into user values('$firstname','$lastname','$gender','$blood_group','$phone','$email','$zip','$username','$pass','$anonymous','user')";
	$qur = mysqli_query($con,$sql);
	if($qur)
	{
	echo "<script>document.getElementById('User_body').innerHTML='';</script>";

	echo "<script>document.getElementById('User_body').innerHTML='<span>Congratulations, your <a href=\"login.php\">account</a> has been created successfully.</span>';</script>";
	
    }
}
?> 