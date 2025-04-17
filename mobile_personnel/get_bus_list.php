<?php
header('Access-Control-Allow-Origin: https://intelliride.sytes.net');
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all buses and include only busid and plateNumber
$sql = "SELECT id AS id, plateNumber FROM busdata"; // Use alias to output 'busid'
$result = $conn->query($sql);

$busList = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $busList[] = $row; // Collect all rows into the list
    }
}

// Set the response header to JSON
header('Content-Type: application/json');
echo json_encode($busList);

// Close the database connection
$conn->close();
?>