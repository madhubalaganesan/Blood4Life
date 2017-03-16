<?php
session_start();
//echo $_SESSION['member'];
?>

<!DOCTYPE html>
<html>
<title>User Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("images/flowers.jpg");
    min-height: 100%;
}

</style>
<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</head>
<body class="w3-light-grey">

<!-- Header -->
<header class="bgimg-1 w3-display-container">
     <div class="w3-display-left w3-padding w3-row w3-twothird l6 m8" style="margin-left:50px;">
    <span class="w3-xxxlarge w3-hide-small w3-text-white">Blood4Life</span>
    <div class="w3-container w3-red">
      <h3><span><i class="fa fa-user w3-margin-right"></i>Welcome!</span><span style="float:right;"><i class="fa fa-sign-out w3-margin-right"></i><a href="signout.php" style='text-decoration:none'>Sign out</a></span></h3>
	  

    </div>
    <div class="w3-container w3-white w3-padding-16">
     
      <div class="w3-row">
        <div class="w3-half circle"></div>
      <div class="w3-half" style="text-align: center"> <img src="images/userIcon.png" alt="user"/></div>
      <div id='user_profile'class="w3-half w3-panel w3-pale-green w3-round-xlarge" style="text-align: center; padding-top: 10px; padding-bottom: 10px; height: 170px;">display User profile details here</div>
    </div>
     
      <div id='user_appointment' class="w3-row w3-panel w3-pale-red w3-round-xlarge" style="text-align: center; padding-top: 15px; padding-bottom: 15px;">Your Appointment : Display existing appointment details here
      </div>
       <div class="w3-row w3-center">
         <button class="w3-button w3-green w3-round-xlarge" id='make-appointment' style="margin-right: 20px;" onclick='appointment()'><i class="fa fa-hospital-o w3-margin-right"></i>Make an appointment</button>
         <button class="w3-button w3-red w3-round-xlarge" id="cancel-appointment" style="margin-right: 20px;" onclick='cancel_appointment()'><i class="fa fa-times w3-margin-right" ></i>Cancel Appointment</button>
         <button class="w3-button w3-blue w3-round-xlarge" type="submit" onclick='reschedule()'><i class="fa fa-refresh w3-margin-right" ></i>Reschedule Appointment</button>
          <p><a href="bloodJourney.php" title="Blood Barometer" target="_blank" class="w3-hover-text-green">Your Blood Journey</a></p>
         </div>
      
       </div>
    </div>
</div>
</header>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-4">
    <p><a href="https://www.bloodservice.fi/" title="Red Cross" target="_blank" class="w3-hover-text-green">Finnish Red Cross Service</a></p>
</footer>


</body>
</html>

<?php
echo "<script>$('#user_profile').load('user_details.php');</script>";
echo "<script>$('#user_appointment').load('show_user_appointment.php');</script>";
?>
