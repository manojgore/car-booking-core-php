<?php
// Assuming you have a database connection
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit(); // Stop further execution
}

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentaly";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the admin is logged in
if(isset($_SESSION['admin_id'])) {
    $adminId = $_SESSION['admin_id'];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $currentPassword = $_POST['current-password'];
        $newPassword = $_POST['new-password'];
        $newPasswordAgain = $_POST['new-password-again'];

        // Check if the current password is correct (you need to implement this logic)
        $checkPasswordQuery = "SELECT * FROM admin WHERE admin_id = '$adminId' AND password = '$currentPassword'";
        $result = $conn->query($checkPasswordQuery);

        if ($result->num_rows > 0) {
            // Check if the new passwords match
            if ($newPassword == $newPasswordAgain) {
                // Update the admin password
                $updatePasswordQuery = "UPDATE admin SET password = '$newPassword' WHERE admin_id = '$adminId'";
                if ($conn->query($updatePasswordQuery) === TRUE) {
                    echo '<script>alert("Changes are saved");</script>';
                    echo '<script>
                    setTimeout(function() {
                        window.location.href = "admin-dashboard-settings.php";
                    }, 100); // Delay in milliseconds
                 </script>';
                } else {
                    echo "Error updating password: " . $conn->error;
                }
            } else {
                echo "New passwords do not match";
            }
        } else {
            echo "Current password is incorrect";
        }
    }
}

// Close the database connection
$conn->close();
?>
