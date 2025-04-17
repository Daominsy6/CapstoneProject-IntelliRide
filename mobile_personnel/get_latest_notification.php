<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed."]));
}

// Fetch the latest notification
$sql = "
    SELECT n.id, n.bus_id, b.plateNumber AS bus_plate, n.personnel_id, 
           CONCAT(p.firstName, ' ', p.lastName) AS personnel_name, 
           n.message, n.created_at
    FROM notifications n
    JOIN busdata b ON n.bus_id = b.id
    JOIN personneldata p ON n.personnel_id = p.id
    ORDER BY n.created_at DESC
    LIMIT 1
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["error" => "No notifications found."]);
}

$conn->close();
?>