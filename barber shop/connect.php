<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];


// Database connection settings
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'barber_shop';

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql = "INSERT INTO barber_shop (firstName, lastName, gender, email, password, number) VALUES ('$firstName', '$lastName', '$'gender', '$email', '$password' '$number')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
