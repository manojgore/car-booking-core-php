<?php
// Assuming you have a database connection
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin-login.php");
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
        $userName = $_POST['user_name'];
        $email = $_POST['email'];

        // Update the admin table
        $sql = "UPDATE admin SET username='$userName', email='$email' WHERE admin_id='$adminId'";

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
    }
}

// Close the database connection
$conn->close();
?>
