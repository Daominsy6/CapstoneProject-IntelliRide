<?php
header('Access-Control-Allow-Origin: https://intelliride.sytes.net');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(["error" => "Database connection failed: " . $conn->connect_error]);
    exit;
}

// Query to fetch active buses with relevant details
$sql = "
    SELECT 
        bus_locations.bus_id AS bus_id,
        busdata.plateNumber AS plate_number,
        bus_locations.status AS status
    FROM bus_locations
    LEFT JOIN busdata ON bus_locations.bus_id = busdata.id
    WHERE bus_locations.status = 'Available'
";

$result = $conn->query($sql);

if ($result === false) {
    echo json_encode(["error" => "SQL query failed: " . $conn->error]);
    exit;
}

if ($result->num_rows > 0) {
    $buses = [];
    while ($row = $result->fetch_assoc()) {
        $buses[] = [
            "bus_id" => intval($row["bus_id"]),
            "plate_number" => $row["plate_number"] ?? "Unknown",
            "status" => $row["status"]
        ];
    }
    echo json_encode($buses);
} else {
    echo json_encode([]); // Return an empty array if no buses are found
}

$conn->close();
?>