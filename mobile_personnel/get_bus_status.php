<?php
header('Access-Control-Allow-Origin: https://intelliride.sytes.net');
header('Content-Type: application/json');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit;
}

$bus_id = isset($_GET['bus_id']) ? intval($_GET['bus_id']) : 0;

$sql = "
    SELECT status
    FROM bus_locations
    WHERE bus_id = $bus_id
    LIMIT 1
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(["status" => $row['status']]);
} else {
    echo json_encode(["status" => "Unavailable"]);
}

$conn->close();
?>