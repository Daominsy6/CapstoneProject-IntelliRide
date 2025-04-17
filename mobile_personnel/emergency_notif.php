<?php
header("Content-Type: application/json");

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => "Database connection failed."]);
    exit;
}

// Retrieve POST parameters
$busId = isset($_POST['busId']) ? $_POST['busId'] : null;
$personnelId = isset($_POST['personnelId']) ? $_POST['personnelId'] : null;
$message = isset($_POST['message']) ? $_POST['message'] : "Emergency alert triggered.";

// Validate inputs
if (!$busId || !$personnelId) {
    echo json_encode(["error" => "Missing required parameters."]);
    exit;
}

// Insert the notification into the database
$sql = "INSERT INTO notifications (bus_id, personnel_id, message, created_at) VALUES ('$busId', '$personnelId', '$message', NOW())";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => "Notification sent successfully."]);
} else {
    echo json_encode(["error" => "Failed to send notification."]);
}

$conn->close();
?>