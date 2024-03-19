<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['image']) && isset($_POST['type']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['passengers']) && isset($_POST['city'])) {
        // Retrieve form data
        $image = $_POST['image'];
        $type = $_POST['type'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $passengers = $_POST['passengers'];
        $city = $_POST['city'];

        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "rentaly";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO car (image, type, name, price_per_day, passengers, city) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $image, $type, $name, $price, $passengers, $city);

        // Execute SQL statement
        if ($stmt->execute() === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close database connection
        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required";
    }
} else {
    echo "Form not submitted";
}
?>
