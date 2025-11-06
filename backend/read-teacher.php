<?php
require_once('../config.php');
header('Content-Type: application/json');

// Fetch data from DB
$query = "SELECT id, full_name, address, course, email, language, description, image
          FROM teacher_applications 
          ORDER BY id DESC";

$result = $conn->query($query);

if (!$result) {
    echo json_encode([
        "status" => "error",
        "message" => "Database query failed: " . $conn->error
    ]);
    exit;
}

$teachers = [];
while ($row = $result->fetch_assoc()) {
    $teachers[] = $row;
}

echo json_encode([
    "status" => "success",
    "data" => $teachers
]);

$conn->close();