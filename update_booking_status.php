<?php
session_start();

// Redirect users who are not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit(); // Stop further execution
}

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentaly";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $bookingId = filter_var($_POST['booking_id'], FILTER_VALIDATE_INT);
    $newStatus = filter_var($_POST['new_status'], FILTER_SANITIZE_STRING);

    // Check if input data is valid
    if ($bookingId === false || $bookingId === null || $newStatus === false || $newStatus === null) {
        echo 'error';
        exit(); // Stop further execution
    }

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("UPDATE bookings SET status = ? WHERE booking_id = ?");
    $stmt->bind_param("si", $newStatus, $bookingId);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }

    // Close statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
