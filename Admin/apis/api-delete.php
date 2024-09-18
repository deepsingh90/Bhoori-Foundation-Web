<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include "config.php";

// Get the raw POST data
$data = json_decode(file_get_contents("php://input"), true);

// Check if the required data is provided
if (!isset($data['table']) || !isset($data['id'])) {
    die(json_encode(array('message' => 'Invalid input', 'status' => false)));
}

// Sanitize table name to prevent SQL injection
$search_table = preg_replace('/[^a-zA-Z0-9_]/', '', $data['table']);

// Validate the student ID is a positive integer
$student_id = intval($data['id']);
if ($student_id <= 0) {
    die(json_encode(array('message' => 'Invalid ID', 'status' => false)));
}

// Prepare the SQL statement to prevent SQL injection
$sql = "DELETE FROM `$search_table` WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_id);

// Execute the query
if ($stmt->execute()) {
    echo json_encode(array('message' => 'Record Deleted.', 'status' => true));
} else {
    echo json_encode(array('message' => 'Record not Deleted.', 'status' => false));
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
