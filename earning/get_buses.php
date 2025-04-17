<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT id, plateNumber FROM busdata WHERE id != 0");
$buses = [];
while ($row = $result->fetch_assoc()) {
    $buses[] = $row;
}
echo json_encode($buses);
$conn->close();
?>