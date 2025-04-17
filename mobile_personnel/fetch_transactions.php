<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve POST parameters
$busId = isset($_POST['busId']) ? $conn->real_escape_string($_POST['busId']) : null;
$date = isset($_POST['date']) ? $conn->real_escape_string($_POST['date']) : date('Y-m-d');

if (!$busId) {
    echo json_encode([]);
    exit;
}

$sql = "
    SELECT personnelId, pickUpPoint, destination, amount, date 
    FROM transactiondata 
    WHERE busId = 'BUS$busId' AND DATE(date) = '$date'
";

$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}

$transactions = [];

while ($row = $result->fetch_assoc()) {
    $transactions[] = $row;
}

echo json_encode($transactions);

$conn->close();
?>