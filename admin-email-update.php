<?php
// Start session
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit(); // Stop further execution
}

// Your database connection parameters
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "rentaly";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are set and not empty
    if (isset($_POST['current-email'], $_POST['new-email'], $_POST['new-email-again']) && !empty($_POST['current-email']) && !empty($_POST['new-email']) && !empty($_POST['new-email-again'])) {
        // Sanitize user input to prevent SQL injection
        $currentEmail = $_POST['current-email'];
        $newEmail = $_POST['new-email'];
        $newEmailAgain = $_POST['new-email-again'];

        // Validate if new email and new email again match
        if ($newEmail === $newEmailAgain) {
            // Create connection
            $conn = new mysqli($servername, $username_db, $password_db, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
             $un=$_SESSION['admin_id'];
            // Update the user's email in the database
            $sql = "UPDATE admin SET email = '$newEmail' WHERE email = '$currentEmail' AND admin_id='$un';";

            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Changes are saved");</script>';
                
                // Redirect after a short delay
                echo '<script>
                        setTimeout(function() {
                            window.location.href = "admin-dashboard-settings.php";
                        }, 100); // Delay in milliseconds
                     </script>';
                exit();
            } else {
                echo "Error updating record: " . $conn->error;
            }

            // Close the connection
            $conn->close();
        } else {
            echo "New email and new email again do not match.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>

