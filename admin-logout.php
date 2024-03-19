<?php
// Start the session
session_start();

// Unset session variables
unset($_SESSION['admin_id']);
unset($_SESSION['admin_username']);
unset($_SESSION['admin_email']);

// Redirect to logout page or any other page after unsetting session variables
header("Location: admin-login.php");
exit(); // Ensure that script execution stops after redirecting
?>
