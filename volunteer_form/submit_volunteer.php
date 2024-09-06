<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "Bhoori_foundation"; // Change this to your database name

    $conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);

    // Check connection
    

    // Collecting form data
    $age = $_POST['age'];
    $education = $_POST['education'];
    $motivation = $conn->real_escape_string($_POST['motivation']);
    $duration = $_POST['duration'];
    $volunteer_experience = $conn->real_escape_string($_POST['volunteer_experience']);
    $skills = implode(", ", $_POST['skills']);
    $email = $conn->real_escape_string($_POST['email']);
    $name = $conn->real_escape_string($_POST['name']);
    $city = $conn->real_escape_string($_POST['city']);

    // Insert data into database
    $sql = "INSERT INTO volunteers (age, education, motivation, duration, volunteer_experience, skills, email, name, city)
            VALUES ('$age', '$education', '$motivation', '$duration', '$volunteer_experience', '$skills', '$email', '$name', '$city')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../thankyou/thankyou.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
