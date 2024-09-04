<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "Bhoori_foundation"; // Change this to your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collecting form data
    $age = $_POST['age'];
    $education = $_POST['education'];
    $motivation = $conn->real_escape_string($_POST['motivation']);
    $commit = $_POST['commit'];
    $days = implode(", ", $_POST['days']);
    $duration = $_POST['duration'];
    $volunteer_experience = $conn->real_escape_string($_POST['volunteer_experience']);
    $skills = implode(", ", $_POST['skills']);
    $training = $_POST['training'];
    $goal = $conn->real_escape_string($_POST['goal']);
    $skills_gain = $conn->real_escape_string($_POST['skills_gain']);
    $email = $conn->real_escape_string($_POST['email']);
    $name = $conn->real_escape_string($_POST['name']);
    $city = $conn->real_escape_string($_POST['city']);

    // Insert data into database
    $sql = "INSERT INTO volunteers (age, education, motivation, commit, days, duration, volunteer_experience, skills, training, goal, skills_gain, email, name, city)
            VALUES ('$age', '$education', '$motivation', '$commit', '$days', '$duration', '$volunteer_experience', '$skills', '$training', '$goal', '$skills_gain', '$email', '$name', '$city')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
