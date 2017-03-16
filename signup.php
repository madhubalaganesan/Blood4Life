<!DOCTYPE html>
<html>
<title>Sign Up</title>
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
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 1s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
#User_body
{
	height:100%;
	width:100%;
	background-color:#ffffff;
	color:#000000;
	font-size:20px;
	padding-left:2%;
}
</style>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.7.1"></script>
<script type="text/javascript">
function check()
{
	password=document.getElementById('Password').value;
	confirm=document.getElementById('ConfirmPassword').value;
	if(password==confirm)
	{
		return true;
	}
	else
	{
		alert("Password Mismatched");
		return false;
	}
}
</script>
<body class="w3-light-grey">

<!-- Header -->
<header class="bgimg-1 w3-display-container">
        
  <div class="w3-display-left w3-padding w3-col l6 m8" style="margin-left:50px;">
    <span class="w3-xxxlarge w3-hide-small w3-text-white">Blood4Life</span>
    <div class="w3-container w3-red">
      <h3><i class="fa fa-user-plus w3-margin-right"></i>Sign Up!</h3>
    </div>
	<div id='User_body'>
	
    <div class="w3-container w3-white w3-padding-16">
      <form action="signup.php" method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label>First Name *</label>
            <input class="w3-input w3-border w3-round-xlarge" type="text" placeholder="e.g. Chandler" name="FirstName" required>
          </div>
          <div class="w3-half">
            <label>Last Name *</label>
            <input class="w3-input w3-border w3-round-xlarge" type="text" placeholder="e.g. Bing" name="LastName" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label>Gender *</label><br>
            <input class="w3-radio" type="radio" name="gender" value="male" checked required>
            <label class="w3-validate">Male</label>

            <input class="w3-radio" type="radio" name="gender" value="female">
            <label class="w3-validate">Female</label>

            <input class="w3-radio" type="radio" name="gender" value="unspecified">
            <label class="w3-validate">Unspecified</label>
          </div>
          <div class="w3-half">
           <label>Blood Group *</label>
            <select class="w3-select w3-border w3-round-xlarge" name="option" required>
            <option value="" disabled selected>Select your blood group</option>
            <option value="oPosSel">O+</option>
            <option value="oNegSel">O-</option>
            <option value="aPosSel">A+</option>
            <option value="aNegSel">A-</option>
            <option value="bPosSel">B+</option>
            <option value="bNegSel">B-</option>
            <option value="abPosSel">AB+</option>
            <option value="abNegSel">AB-</option>
            <option value="notknown">Unspecified / Not Known</option>
            </select>
          </div>
         </div>
           <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label>Phone Number *</label>
            <input class="w3-input w3-border w3-round-xlarge" type="text" placeholder="Mobile Number" name="PhoneNumber" required>
          </div>
          <div class="w3-half">
            <label>Email *</label>
            <input class="w3-input w3-border w3-round-xlarge" type="text" placeholder="Email id" name="Email" required>
          </div>
        </div>
           <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label>Zip Code *</label>
            <input class="w3-input w3-border w3-round-xlarge" type="text" placeholder="Zipcode" name="Zipcode" required>
          </div>
          <div class="w3-half">
            <label>Username *</label>
            <input class="w3-input w3-border w3-round-xlarge" type="text" placeholder="Username" name="Username" required>
          </div>
        </div>
           <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label>Password *</label>
            <input class="w3-input w3-border w3-round-xlarge" type="password" placeholder="Password" name="Password" id="Password" required>
          </div>
          <div class="w3-half">
            <label>Confirm Password *</label>
            <input class="w3-input w3-border w3-round-xlarge" type="password" placeholder="Confirm Password" name="ConfirmPassword" id="ConfirmPassword" onblur="check()" required>
          </div>
        </div>
        <div class="w3-row">
         <div class="w3-col" style="width:100%; text-align: center; padding-top:3px;">
                <input class="w3-check" type="checkbox" id="anonymChk" name='anonymChk' value='checked'>
                <div class="tooltip"><label class="w3-validate">I want to be Anonymous</label><span class="tooltiptext">Your Personal information expect for email id will not be disclosed to the blood banks</span></div>
                <p><a href="terms.html" title="Terms and Conditions" target="_blank" class="w3-hover-text-green">Terms and Conditions / Privacy Policy</a></p>
                <label>* marked fields are mandatory</label>
         </div>
         <div class="w3-row">
         <div class="w3-col" style="width:100%; text-align: center; padding-top:3px;">
                <i class="fa fa-plus-square w3-margin-right"></i><input class="w3-button w3-red w3-round-xlarge" type="submit" name="sign_up" value='Sign Up'/>
         </div>

      </form>
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
include('sign_up_form.php');
?>