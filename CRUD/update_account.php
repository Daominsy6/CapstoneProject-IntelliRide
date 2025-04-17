<?php
include 'db.php'; // Your database connection

$data = json_decode(file_get_contents("php://input"), true);

$newAdmin = $data['admin'];
$newPassword = $data['password'];

$stmt = $conn->prepare("UPDATE webaccount SET admin = ?, password = ?"); // Assuming you're updating the first admin
$stmt->bind_param("ss", $newAdmin, $newPassword);
$success = $stmt->execute();

$response = [];

if ($success) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
