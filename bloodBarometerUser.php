<!DOCTYPE html>
<html>
<title>Blood Barometer</title>
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
img {
    max-width: 100%;
    height: auto;
}
</style>
<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</head>
<body class="w3-light-grey">

<!-- Header -->
<header class="bgimg-1 w3-display-container">
        
  <div class="w3-display-left w3-padding-xxlarge w3-row w3-twothird">
    <span class="w3-xxlarge w3-hide-small w3-text-white">Blood4Life</span><br>
    <span class="w3-medium w3-text-white">Your help is needed. Please follow the need for your blood group!</span>
    <br>
    <div class="w3-container w3-red">
      <h4><i class="fa fa-heart w3-margin-right"></i>Blood Barometer  <label id="date"></label></h4>
    </div>
    <div class="w3-container w3-white">
      <form action="/index.php" target="_blank">
    <div class="w3-row w3-container w3-padding-16">
      <div class="w3-half">
        <div class="w3-quarter s1 w3-center">
        <img id="opos" src="images/high.jpg" class="w3-round" alt="O+">
        <p class="w3-large w3-text-red" style="font-weight: bold;">O+</p>
      </div>
    <div class="w3-quarter s1 w3-center">
         <img id="oneg" src="images/medium.jpg" class="w3-round" alt="O-">
        <p class="w3-large w3-text-red" style="font-weight: bold;">O-</p>
      </div>
      <div class="w3-quarter s1 w3-center">
         <img id="apos" src="images/low.jpg" class="w3-round" alt="A+">
        <p class="w3-large w3-text-red" style="font-weight: bold;">A+</p>
      </div>
      <div class="w3-quarter s1 w3-center">
         <img id="aneg" src="images/medium.jpg" class="w3-round" alt="A-">
        <p class="w3-large w3-text-red" style="font-weight: bold;">A-</p>
      </div>
      </div>
      <div class="w3-half">
         <div class="w3-quarter s1 w3-center">
        <img id="bpos" src="images/high.jpg" class="w3-round" alt="B+">
        <p class="w3-large w3-text-red" style="font-weight: bold;">B+</p>
      </div>
    <div class="w3-quarter s1 w3-center">
         <img id="bneg" src="images/low.jpg" class="w3-round" alt="B-">
        <p class="w3-large w3-text-red" style="font-weight: bold;">B-</p>
      </div>
      <div class="w3-quarter s1 w3-center">
         <img id="abpos" src="images/low.jpg" class="w3-round" alt="AB+">
        <p class="w3-large w3-text-red" style="font-weight: bold;">AB+</p>
      </div>
      <div class="w3-quarter s1 w3-center">
         <img id="abneg" src="images/medium.jpg" class="w3-round" alt="AB-">
        <p class="w3-large w3-text-red" style="font-weight: bold;">AB-</p>
      </div>
      </div>
     </div>
</div>
<div>
  <span class="w3-large w3-hide-small w3-text-white">What drops tell you?</span><br>
  <span class="w3-medium w3-text-white">800 blood donors are needed every weekday in Finland. Please come, when your blood group is needed.</span><br>
  <span class="w3-medium w3-text-white"><img src="images/low.jpg" class="w3-round" alt="lo+">  Please come today! We urgently need donors from your blood group.</span><br>
  <span class="w3-medium w3-text-white"><img src="images/medium.jpg" class="w3-round" alt="lo+">  Please come today or in a few days.</span><br>
  <span class="w3-medium w3-text-white"><img src="images/high.jpg" class="w3-round" alt="lo+">​  We have a fairly good stock in your blood group at the moment.</span>


</div>
  </div>
  </form>
    </div>
  </div>
</header>
 <script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
if(dd<10) { dd='0'+dd; } 
if(mm<10) { mm='0'+mm; } 
today = dd+'-'+mm+'-'+yyyy;
console.log(today);
document.getElementById("date").innerHTML = today;
</script>
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-4">
    <p><a href="https://www.bloodservice.fi/" title="Red Cross" target="_blank" class="w3-hover-text-green">Finnish Red Cross Service</a></p>
</footer>


</body>
</html>

<?php
include 'image_change.php';
?>
