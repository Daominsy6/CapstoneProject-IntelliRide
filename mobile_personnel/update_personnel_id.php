<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["success" => false, "error" => "Database connection failed: " . $conn->connect_error]));
}

// Get the bus_id from POST request
$busId = isset($_POST['bus_id']) ? intval($_POST['bus_id']) : null;

if ($busId === null) {
    echo json_encode(["success" => false, "error" => "Invalid bus_id provided"]);
    exit;
}

// Update personnel_id to 0 for the given bus_id
$sql = "UPDATE bus_locations SET personnel_id = 0 WHERE bus_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $busId);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "personnel_id updated to 0 successfully"]);
} else {
    echo json_encode(["success" => false, "error" => $conn->error]);
}

$stmt->close();
$conn->close();
?>