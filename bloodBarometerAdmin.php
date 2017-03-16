<?php
session_start();
?>
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
<body class="w3-light-grey">

<!-- Header -->
<header class="bgimg-1 w3-display-container">
        
  <div class="w3-display-left w3-padding-xxlarge w3-row w3-twothird">
    <span class="w3-xxlarge w3-hide-small w3-text-white">Blood4Life</span><br>
    <span class="w3-large w3-text-white">Please update the blood stock.</span>
    <br><br>
    <div class="w3-container w3-red">
      <h4><i class="fa fa-heart w3-margin-right"></i>Blood Barometer - Admin <label id="date"></label></h4>
    </div>
    <div class="w3-container w3-white">
      <form action="bloodBarometerAdmin.php" method="post">
    <div class="w3-row w3-container w3-padding-16">
      <div class="w3-half">
        <div class="w3-quarter s1 w3-center">
        <img id="oposimg" src="images/high.jpg" class="w3-round" alt="O+">
        <p class="w3-large w3-text-red" style="font-weight: bold;">O+</p>
        <input class="w3-input w3-border w3-round-large" type="text" placeholder="O+" name="opos" required/>
      </div>
    <div class="w3-quarter s1 w3-center">
         <img id="onegimg" src="images/medium.jpg" class="w3-round" alt="O-">
        <p class="w3-large w3-text-red" style="font-weight: bold;">O-</p>
        <input class="w3-input w3-border w3-round-large" type="text" placeholder="O-" name="oneg" required/>
      </div>
      <div class="w3-quarter s1 w3-center">
         <img id="aposimg" src="images/low.jpg" class="w3-round" alt="A+">
        <p class="w3-large w3-text-red" style="font-weight: bold;">A+</p>
         <input class="w3-input w3-border w3-round-large" type="text" placeholder="A+" name="apos" required/>
      </div>
      <div class="w3-quarter s1 w3-center">
         <img id="anegimg" src="images/medium.jpg" class="w3-round" alt="A-">
        <p class="w3-large w3-text-red" style="font-weight: bold;">A-</p>
        <input class="w3-input w3-border w3-round-large" type="text" placeholder="A-" name="aneg" required/>
      </div>
      </div>
      <div class="w3-half">
         <div class="w3-quarter s1 w3-center">
        <img id="bposimg" src="images/high.jpg" class="w3-round" alt="B+">
        <p class="w3-large w3-text-red" style="font-weight: bold;">B+</p>
        <input class="w3-input w3-border w3-round-large" type="text" placeholder="B+" name="bpos" required/>
      </div>
    <div class="w3-quarter s1 w3-center">
         <img id="bnegimg" src="images/low.jpg" class="w3-round" alt="B-">
        <p class="w3-large w3-text-red" style="font-weight: bold;">B-</p>
        <input class="w3-input w3-border w3-round-large" type="text" placeholder="B-" name="bneg" required/>
      </div>
      <div class="w3-quarter s1 w3-center">
         <img id="abposimg" src="images/low.jpg" class="w3-round" alt="AB+">
        <p class="w3-large w3-text-red" style="font-weight: bold;">AB+</p>
        <input class="w3-input w3-border w3-round-large" type="text" placeholder="AB+" name="abpos" required/>
      </div>
      <div class="w3-quarter s1 w3-center">
         <img id="abnegimg" src="images/medium.jpg" class="w3-round" alt="AB-">
        <p class="w3-large w3-text-red" style="font-weight: bold;">AB-</p>
        <input class="w3-input w3-border w3-round-large" type="text" placeholder="AB-" name="abneg" required/>
      </div>
      </div>
     <div class="w3-row">
         <div class="w3-col" style="width:100%; text-align: center; padding-top:10px;">
            <i class="fa fa-pencil-square-o w3-margin-right"></i><input class="w3-button w3-red w3-round-xlarge" type="submit" name='update' value='Update'>
         </div>
</div>
   </div>
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
include('blood_update.php');
?>
