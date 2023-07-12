<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];


// Database connection settings
$conn = new mysqli('localhost','root','','test');

// Check if the connection was successful
if ($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else
    $stmt = $conn->prepare("insert into rgistration(firstName, lastName, gender, email, password,nuber)
        values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss1",$firstName,$lastName, $gender, $email, $password, $number);
    $stmt->execute();
    echo "registrationn successful...";
    $stmt->close();
    $conn->close();
?>
