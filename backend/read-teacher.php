<?php
require_once('../config.php');
header('Content-Type: application/json');

$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// Base SQL
$sql = "SELECT * FROM teacher_applications WHERE approved = 1";

// If search is provided, append the conditions
if (!empty($search)) {
    $search_param = "%$search%";
    $sql .= " AND (full_name LIKE ? OR address LIKE ? OR course LIKE ? OR language LIKE ? OR email LIKE ? OR description LIKE ?)";
}

// Add the order clause (the space before ORDER is critical)
$sql .= " ORDER BY FIELD(listing_type, 'paid', 'free'), id ASC";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo json_encode(["status" => "error", "message" => $conn->error]);
    exit;
}

if (!empty($search)) {
    $stmt->bind_param("ssssss", $search_param, $search_param, $search_param, $search_param, $search_param, $search_param);
}

$stmt->execute();
$result = $stmt->get_result();
$teachers = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode([
    "status" => "success",
    "data" => $teachers
]);

$conn->close();
?>