<?php
require_once('../config.php');
header('Content-Type: application/json');

$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 6;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

$offset = ($page - 1) * $limit;

// Base SQL (only approved teachers)
$sql = "SELECT * FROM teacher_applications WHERE approved = 1";
$count_sql = "SELECT COUNT(*) AS total FROM teacher_applications WHERE approved = 1";

if (!empty($search)) {
    $search = "%$search%";
    $search_condition = " AND (full_name LIKE ? OR address LIKE ? OR course LIKE ? OR language LIKE ? OR email LIKE ? OR description LIKE ?)";
    $sql .= $search_condition;
    $count_sql .= $search_condition;
}

// Prepare main query
$sql .= " ORDER BY id DESC LIMIT ? OFFSET ?";
$stmt = $conn->prepare($sql);

if (!empty($search)) {
    $stmt->bind_param("ssssssii", $search, $search, $search, $search, $search, $search, $limit, $offset);
} else {
    $stmt->bind_param("ii", $limit, $offset);
}

$stmt->execute();
$result = $stmt->get_result();
$teachers = $result->fetch_all(MYSQLI_ASSOC);

// Count query
if (!empty($search)) {
    $count_stmt = $conn->prepare($count_sql);
    $count_stmt->bind_param("ssssss", $search, $search, $search, $search, $search, $search);
} else {
    $count_stmt = $conn->prepare($count_sql);
}

$count_stmt->execute();
$count_result = $count_stmt->get_result()->fetch_assoc();
$total = $count_result['total'];

echo json_encode([
    "status" => "success",
    "data" => $teachers,
    "total" => $total,
    "total_pages" => ceil($total / $limit),
    "current_page" => $page
]);

$conn->close();
?>
