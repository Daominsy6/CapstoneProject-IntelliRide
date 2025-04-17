<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: https://intelliride.sytes.net');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}

$sql = "SELECT location, post_km FROM location";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $locations = [];
    while ($row = $result->fetch_assoc()) {
        $locations[] = $row;
    }
    echo json_encode($locations);
} else {
    echo json_encode([]);
}

$conn->close();
?>