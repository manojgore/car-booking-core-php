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
        $userName = $_POST['user_name'];
        $email = $_POST['email'];

        // Update the corporate table
        $sql = "UPDATE corporate SET username='$userName', email='$email' WHERE corporate_id='$corporateId'";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Changes are saved");</script>';
            
            // Redirect after a short delay
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "corporate-dashboard-settings.php";
                    }, 100); // Delay in milliseconds
                 </script>';
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
