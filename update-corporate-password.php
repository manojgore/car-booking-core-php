<?php
// Assuming you have a database connection
session_start();
if (!isset($_SESSION['corporate_id'])) {
    header("Location: corporate-login.php");
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

// Check if the corporate is logged in
if(isset($_SESSION['corporate_id'])) {
    $corporateId = $_SESSION['corporate_id'];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $currentPassword = $_POST['current-password'];
        $newPassword = $_POST['new-password'];
        $newPasswordAgain = $_POST['new-password-again'];

        // Check if the current password is correct (you need to implement this logic)
        $checkPasswordQuery = "SELECT * FROM corporate WHERE corporate_id = '$corporateId' AND password = '$currentPassword'";
        $result = $conn->query($checkPasswordQuery);

        if ($result->num_rows > 0) {
            // Check if the new passwords match
            if ($newPassword == $newPasswordAgain) {
                // Update the corporate password
                $updatePasswordQuery = "UPDATE corporate SET password = '$newPassword' WHERE corporate_id = '$corporateId'";
                if ($conn->query($updatePasswordQuery) === TRUE) {
                    echo '<script>alert("Changes are saved");</script>';
                    echo '<script>
                    setTimeout(function() {
                        window.location.href = "corporate-dashboard-settings.php";
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
