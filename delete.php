<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentaly";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user_id is set in the POST request
if (isset($_POST['user_id'])) {
    // Prepare a delete statement
    $sql = "DELETE FROM users WHERE user_id = ?";

    // Bind the parameter
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $_POST['user_id']);

    // Execute the statement
    if ($stmt->execute()) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
