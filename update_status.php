<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit(); // Stop further execution
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentaly";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookingId = $_POST["booking_id"];
    $newStatus = $_POST["new_status"];

    // Assuming you have a table named 'bookings' in your database
    $sqlUpdateStatus = "UPDATE bookings SET status = '$newStatus' WHERE booking_id = $bookingId";

    if ($conn->query($sqlUpdateStatus) === TRUE) {
        echo "Status updated successfully";
        
    } else {
        echo "Error updating status: " . $conn->error;
    }
}

$conn->close();
?>
