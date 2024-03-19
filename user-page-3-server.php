<?php
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phoneno'] = $_POST['phoneno'];
    $_SESSION['country'] = $_POST['country'];
}
// Check if all session variables are set
if (
    isset($_SESSION['pick_location']) &&
    isset($_SESSION['pick_date']) &&
    isset($_SESSION['pick_time']) &&
    isset($_SESSION['drop_location']) &&
    isset($_SESSION['firstName']) &&
    isset($_SESSION['lastName']) &&
    isset($_SESSION['email']) &&
    isset($_SESSION['phoneno']) &&
    isset($_SESSION['country']) &&
    isset($_SESSION['carType']) &&
    isset($_SESSION['carName']) &&
    isset($_SESSION['passengerCapacity']) &&
    isset($_SESSION['luggageCapacity']) &&
    isset($_SESSION['price']) &&
    isset($_SESSION['distance'])||1==1
) {
    // Retrieve session data containing booking information
$pickLocation = $_SESSION['pick_location'];
$pickDate = $_SESSION['pick_date'];
$pickTime = $_SESSION['pick_time'];
$dropLocation = $_SESSION['drop_location'];
$firstName = $_SESSION['firstname']; // Changed variable name here
$lastName = $_SESSION['lastname']; // Changed variable name here
$email = $_SESSION['email'];
$phoneNumber = $_SESSION['phoneno']; // Changed variable name here
$country = $_SESSION['country'];
$selectedCarType = $_SESSION['carType']; // Changed variable name here
$selectedCarName = $_SESSION['carName']; // Changed variable name here
$passengerCapacity = $_SESSION['passengerCapacity'];
$luggageCapacity = $_SESSION['luggageCapacity'];
$price = $_SESSION['price'];
$distance = $_SESSION['distance'];

    // Database connection parameters
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

    // Prepare SQL statement
    $sql = "INSERT INTO bookings (pick_location, pick_date, pick_time, drop_location, first_name, last_name, email, phone_number, country, selected_car_type, selected_car_name, passenger_capacity, luggage_capacity, price, distance, type) 
            VALUES ('$pickLocation', '$pickDate', '$pickTime', '$dropLocation', '$firstName', '$lastName', '$email', '$phoneNumber', '$country', '$selectedCarType', '$selectedCarName', '$passengerCapacity', '$luggageCapacity', '$price', '$distance', 'Normal User')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        header('Location: user-login.php');
    } else {
        header('Location: index.php');
    }

    // Close connection
    $conn->close();
} else {
    echo "Error: Some session variables are not set.";
}
// Redirect back to the form page or any other page as per your requirement

exit;
?>