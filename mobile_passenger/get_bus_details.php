<?php
header("Content-Type: application/json");

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed"]));
}

// Fetch and validate the bus_id from the query parameters
$bus_id = isset($_GET['busid']) ? (int) $_GET['busid'] : 0;

if ($bus_id <= 0) {
    echo json_encode(["error" => "Invalid bus ID"]);
    exit();
}

// SQL query to fetch bus details
$sql = "SELECT 
            b.id AS bus_id, 
            b.plateNumber AS plate_number, 
            b.info AS bus_info, 
            CONCAT(p.firstName, ' ', p.lastName) AS personnel_name, 
            p.number AS personnel_contact
        FROM busdata b
        LEFT JOIN personneldata p ON b.serialCode = p.id
        WHERE b.id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    echo json_encode(["error" => "Failed to prepare SQL statement"]);
    exit();
}

// Bind the bus_id to the query
$stmt->bind_param("i", $bus_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the bus details are found
if ($result->num_rows > 0) {
    $busDetails = $result->fetch_assoc();
    echo json_encode($busDetails);
} else {
    echo json_encode(["error" => "Bus not found"]);
}

$stmt->close();
$conn->close();
?>