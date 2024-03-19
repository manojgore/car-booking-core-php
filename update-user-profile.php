<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit(); // Stop further execution
}
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "rentaly";


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and email are set and not empty
    if (isset($_POST['username']) && isset($_POST['email']) && !empty($_POST['username']) && !empty($_POST['email'])) {
        // Sanitize user input to prevent SQL injection
        $username = $_POST['username'];
        $email = $_POST['email'];

        // Create connection
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $user_id = $_SESSION['user_id'];

        // Update username and email in the database
        $sql = "UPDATE users SET username='$username', email='$email' WHERE user_id=$user_id";

        // Execute the statement
        if ($conn->query($sql) === TRUE) {
            header("location: user-dashboard-settings.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    } else {
        echo "Both username and email are required.";
    }
}

?>