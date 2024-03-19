<?php
session_start();

if (isset($_POST['select'])) {
    // Get the car details from the form
    $carType = $_POST['carType'];
    $carName = $_POST['carName'];
    $passengerCapacity = $_POST['passengerCapacity'];
    $luggageCapacity = $_POST['luggageCapacity'];
    $price = $_POST['price'];
    $distance = $_POST['distance'];

    // Store the car details in session variables
    $_SESSION['carType'] = $carType;
    $_SESSION['carName'] = $carName;
    $_SESSION['passengerCapacity'] = $passengerCapacity;
    $_SESSION['luggageCapacity'] = $luggageCapacity;
    $_SESSION['price'] = $price;
    $_SESSION['distance'] = $distance;
    header('Location: car-booking.php');
    exit();
}
?>
