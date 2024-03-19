<?php
// Start the session
session_start();

// Unset session variables
unset($_SESSION['corporate_id']);
unset($_SESSION['corporate_username']);
unset($_SESSION['corporate_email']);

// Redirect to logout page or any other page after unsetting session variables
header("Location: crp-login.php");
exit(); // Ensure that script execution stops after redirecting
?>
