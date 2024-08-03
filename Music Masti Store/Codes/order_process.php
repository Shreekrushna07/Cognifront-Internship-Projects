<?php
// Establish database connection (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pro1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$instrument_name = $_POST['instrument_name'];
$quantity = $_POST['quantity'];
$shipping_address = $_POST['shipping_address'];

// Insert data into the database
$sql = "INSERT INTO orders (customer_name, email, instrument_name, quantity, shipping_address)
        VALUES ('$customer_name', '$email', '$instrument_name', '$quantity', '$shipping_address')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed in few days!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
