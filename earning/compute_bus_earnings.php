<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

// Retrieve POST parameters
$busId = isset($_POST['busId']) ? $conn->real_escape_string($_POST['busId']) : null;
$date = isset($_POST['date']) ? $conn->real_escape_string($_POST['date']) : date('Y-m-d');

// Handle "All Buses" case
if ($busId === "all") {
    $sql = "
        SELECT SUM(amount) as total
        FROM transactiondata
        WHERE DATE(date) = '$date'
    ";
} else {
    $sql = "
        SELECT SUM(amount) as total
        FROM transactiondata
        WHERE busId = 'BUS$busId' AND DATE(date) = '$date'
    ";
}

$result = $conn->query($sql);

if (!$result) {
    die(json_encode(["success" => false, "message" => "Error: " . $conn->error]));
}

$row = $result->fetch_assoc();
$total = $row['total'] ?? 0; // Default to 0 if no results

echo json_encode(["success" => true, "total" => $total]);

$conn->close();
?>