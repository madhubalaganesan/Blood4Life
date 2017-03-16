<?php
session_start();

//$user=$_SESSION['member'];

?>
<!DOCTYPE html>
<html>
<title>Blood4Life</title>
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
    min-height:100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>
<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-left w3-padding-xxlarge w3-text-white">
    <span class="w3-xxlarge w3-hide-small">Blood4Life</span><br>
    <span class="w3-xlarge w3-hide-large w3-hide-medium">Blood4Life</span><br>
    <span class="w3-large">Admin Home Page</span><span style="padding:0px 0px 0px 170px"><a href="signout.php" style='text-decoration:none'>Sign out</a></span>
     <p><a href="bloodBarometerAdmin.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" style="margin-right:30px;">Blood Barometer</a> 
    <a href="adminAppointments.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"  style="margin-right:30px;">Appointments</a>
    </p>
  </div> 
 </header>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-4">
    <p><a href="https://www.bloodservice.fi/" title="Red Cross" target="_blank" class="w3-hover-text-green">Finnish Red Cross Service</a></p>
</footer>

</body>
</html>
