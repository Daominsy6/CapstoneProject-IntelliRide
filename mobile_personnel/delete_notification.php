<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);
$notificationId = isset($input['id']) ? $conn->real_escape_string($input['id']) : null;

if (!$notificationId) {
    echo json_encode(["error" => "Invalid request. Notification ID is required."]);
    exit;
}

// Delete notification
$sql = "DELETE FROM notifications WHERE id = '$notificationId'";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => "Failed to delete notification: " . $conn->error]);
}

$conn->close();
?>