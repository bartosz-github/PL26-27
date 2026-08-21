<?php
$servername  = "***";
$username  = "***";
$password  = "***";
$dbname  = "***";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize form data
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Insert data into database
$sql = "INSERT INTO college (first_name, last_name, gender, address, email) 
        VALUES ('$first_name', '$last_name', '$gender', '$address', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>