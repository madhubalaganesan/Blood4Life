<?php
session_start();

//echo $user=$_SESSION['member'];

?>
<!DOCTYPE html>
<html>
<title>Appointments</title>
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
        
  <div class="w3-display-left w3-padding w3-row w3-third l6 m8" style="margin-left:50px;">
    <span class="w3-xxxlarge w3-hide-small w3-text-white">Blood4Life</span>
    <div class="w3-container w3-red">
      <h3><i class="fa fa-list-alt w3-margin-right"></i>Appointments</h3>
    </div>
    <div id='show_appointments' class="w3-container w3-white w3-padding-16" style='overflow:scroll'>
     
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-margin-bottom">
            <label>Select date</label>
            <input class="w3-input w3-border w3-round-xlarge" type="date" placeholder="Select a date" name="appointDate" required>
          </div>
          <div>
      </div>
        <div class="w3-row">
         <div class="w3-col" style="width:100%; text-align: center; padding-top:10px;">
                <button class="w3-button w3-red w3-round-xlarge" id='show' name='show' onclick='show_appointments()' >Show</button>
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


