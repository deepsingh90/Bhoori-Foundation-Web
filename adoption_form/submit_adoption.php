<?php
// Database connection details
$servername = "localhost"; // Database server
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "Bhoori_foundation";   // Database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dogid = $_POST['dogid'];
$pet_type = $_POST['pet_type'];
$experience = $_POST['experience'];
$reason = $_POST['reason'];


// Sanitize input to prevent SQL injection
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);
$address = mysqli_real_escape_string($conn, $address);
$dogid = mysqli_real_escape_string($conn, $dogid);
$pet_type = mysqli_real_escape_string($conn, $pet_type);
$experience = mysqli_real_escape_string($conn, $experience);
$reason = mysqli_real_escape_string($conn, $reason);

// Prepare the SQL query
$sql = "INSERT INTO adoptions (name, email, phone, address, dogid, pet_type, experience, reason)
        VALUES ('$name', '$email', '$phone', '$address', '$dogid', '$pet_type', '$experience', '$reason')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    header("Location: ../thankyou/thankyou.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

