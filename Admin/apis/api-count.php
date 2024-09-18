<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

// Get the table name from query string
$search_table = isset($_GET['table']) ? $_GET['table'] : die();

// Prepare SQL to count the number of records
$sql = "SELECT COUNT(*) AS total_count FROM $search_table";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if($result) {
    $row = mysqli_fetch_assoc($result); // Fetch the associative array

    // Ensure we're fetching the correct column
    $count = isset($row['total_count']) ? $row['total_count'] : 0; // Check if total_count exists

    // Return the count in JSON format
    echo json_encode(array("count" => $count));
} else {
    echo json_encode(array("error" => 'SQL Query Failed'));
}

?>
