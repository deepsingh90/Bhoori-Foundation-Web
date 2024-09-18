<?php

include "../apis/config.php";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL queries
$sql1 = "SELECT * FROM adopted_dog";
$sql2 = "SELECT * FROM adoptions";
$sql3 = "SELECT * FROM existing_volunteer";
$sql4 = "SELECT * FROM volunteers";

// Execute queries
$result1 = mysqli_query($conn, $sql1) or die("SQL Query Failed for adopted_dog.");
$result2 = mysqli_query($conn, $sql2) or die("SQL Query Failed for adoptions.");
$result3 = mysqli_query($conn, $sql3) or die("SQL Query Failed for existing_volunteer.");
$result4 = mysqli_query($conn, $sql4) or die("SQL Query Failed for volunteers.");

// Convert to associative arrays
$output1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
$output2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
$output3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
$output4 = mysqli_fetch_all($result4, MYSQLI_ASSOC);

// Convert to JSON
$json1 = json_encode($output1, JSON_PRETTY_PRINT);
$json2 = json_encode($output2, JSON_PRETTY_PRINT);
$json3 = json_encode($output3, JSON_PRETTY_PRINT);
$json4 = json_encode($output4, JSON_PRETTY_PRINT);


// Save to files (without curly braces)
file_put_contents("adopted_dogs.json", $json1);
file_put_contents("adoption_req.json", $json2);
file_put_contents("existing_volunteer.json", $json3);
file_put_contents("volun_req.json", $json4);

// Alert message before redirection
$alertMessage = "Backup Completed";
echo "<script type='text/javascript'>alert(" . json_encode($alertMessage) . ");</script>";

// Delay the redirection so the alert is visible
echo "<script type='text/javascript'>
    setTimeout(function() {
        window.location.href = '../index.php';
    }, 300); // Wait 3 seconds before redirecting
</script>";

?>
