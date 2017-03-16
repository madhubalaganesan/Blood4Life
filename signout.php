
<?php
session_start();
session_unset();
session_destroy();
$_SESSION['member']="signout";
header('location:login.php'); 
?>
