<?php
require __DIR__ . '/config.php';

// Return a user's profile as JSON for the account page.
header('Content-Type: application/json');

$id = $_GET['id'] ?? 0;
$conn = db();
$res = $conn->query('SELECT id, username, email, phone, ssn FROM users WHERE id = ' . intval($id));

if ($res && $row = $res->fetch_assoc()) {
    echo json_encode($row);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'not found']);
}
