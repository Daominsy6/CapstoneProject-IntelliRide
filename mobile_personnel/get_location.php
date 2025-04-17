<?php
header('Access-Control-Allow-Origin: https://intelliride.sytes.net');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Content-Type: application/json');



// Database connection details
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password is empty for XAMPP
$dbname = "intelliride"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(["error" => "Database connection failed: " . $conn->connect_error]);
    exit;
}

// Query to fetch bus locations, plate numbers, personnel names, contacts, and statuses
$sql = "
    SELECT 
        bus_locations.bus_id AS bus_id,
        bus_locations.latitude AS latitude,
        bus_locations.longitude AS longitude,
        bus_locations.status AS status,
        bus_locations.personnel_id AS personnel_id,
        busdata.plateNumber AS plate_number,
        CONCAT(personneldata.firstName, ' ', personneldata.lastName) AS personnel_name,
        personneldata.number AS contact
    FROM bus_locations
    LEFT JOIN busdata ON bus_locations.bus_id = busdata.id
    LEFT JOIN personneldata ON bus_locations.personnel_id = personneldata.id
    WHERE bus_locations.personnel_id != 0
";

$result = $conn->query($sql);

if ($result === false) {
    echo json_encode(["error" => "SQL query failed: " . $conn->error]);
    exit;
}

if ($result->num_rows > 0) {
    $locations = [];
    while ($row = $result->fetch_assoc()) {
        $locations[] = [
            "bus_id" => intval($row["bus_id"]),
            "latitude" => floatval($row["latitude"]),
            "longitude" => floatval($row["longitude"]),
            "status" => $row["status"],
            "personnel_id" => intval($row["personnel_id"]),
            "plate_number" => $row["plate_number"] ?? "Unknown",
            "personnel_name" => $row["personnel_name"] ?? "Unknown",
            "contact" => $row["contact"] ?? "Unknown"
        ];
    }
    echo json_encode($locations);
} else {
    echo json_encode([]); // Return an empty array if no data is found
}

$conn->close();

?>