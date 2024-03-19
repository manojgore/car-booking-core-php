<?php
// Start the session
session_start();

// Unset session variables
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['email']);

// Redirect to logout page or any other page after unsetting session variables
header("Location: user-login.php");
exit(); // Ensure that script execution stops after redirecting
?>
