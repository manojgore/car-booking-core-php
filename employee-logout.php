<?php
// Start the session
session_start();

// Unset session variables
unset($_SESSION['employee_id']);
unset($_SESSION['employee_username']);
unset($_SESSION['employee_email']);

// Redirect to logout page or any other page after unsetting session variables
header("Location: employee-login.php");
exit(); // Ensure that script execution stops after redirecting
?>
