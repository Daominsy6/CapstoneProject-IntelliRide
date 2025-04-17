<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: https://intelliride.sytes.net');// Allow cross-origin requests

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['bus_id']) || !isset($data['status'])) {
    die(json_encode(["error" => "Invalid input"]));
}

$bus_id = $data['bus_id'];
$status = $data['status'];

// Update status in the database
$sql = "UPDATE bus_locations SET status = ? WHERE bus_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $bus_id);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Bus status updated successfully"]);
} else {
    echo json_encode(["success" => false, "message" => "Failed to update status: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>