<?php
include
// Start or resume a session
session_start();

// Echo session values
echo "Pick Location: " . $_SESSION['pick_location'] . "<br>";
echo "Pick Date: " . $_SESSION['pick_date'] . "<br>";
echo "Pick Time: " . $_SESSION['pick_time'] . "<br>";

echo "Drop Location: " . $_SESSION['drop_location'] . "<br>";


echo 'First Name: ' . $_SESSION['firstname'] . '<br>';
echo 'Last Name: ' . $_SESSION['lastname'] . '<br>';
echo 'Email: ' . $_SESSION['email'] . '<br>';
echo 'Phone Number: ' . $_SESSION['phoneno'] . '<br>';
echo 'Country: ' . $_SESSION['country'] . '<br>';
echo 'userid: ' . $_SESSION['user_id'] . '<br>';
echo 'adminid: ' . $_SESSION['admin_id'] . '<br>';

echo "Selected car type: " . $_SESSION['carType'] . "<br>";
echo "Selected car name: " . $_SESSION['carName'] . "<br>";
echo "Passenger capacity: " . $_SESSION['passengerCapacity'] . "<br>";
echo "Luggage capacity: " . $_SESSION['luggageCapacity'] . "<br>";
echo "Price: " . $_SESSION['price'] . "<br>";
echo "Distance: " . $_SESSION['distance'] . "<br>";

echo "Employee ID: " . $_SESSION['employee_id'] . "<br>";
echo "Employee Username: " . $_SESSION['employee_username'] . "<br>";
echo "Employee Email: " . $_SESSION['employee_email'] . "<br>";




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentaly";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
