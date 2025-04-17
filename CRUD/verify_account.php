<?php
include 'db.php'; // Your database connection

$data = json_decode(file_get_contents("php://input"), true);

$admin = $data['admin'];
$password = $data['password'];

$stmt = $conn->prepare("SELECT * FROM webaccount WHERE admin = ? AND password = ?");
$stmt->bind_param("ss", $admin, $password);
$stmt->execute();
$result = $stmt->get_result();

$response = [];

if ($result->num_rows > 0) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
