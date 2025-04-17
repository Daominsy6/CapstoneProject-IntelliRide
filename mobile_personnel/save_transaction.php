<?php
header("Content-Type: application/json");
header('Access-Control-Allow-Origin: https://intelliride.sytes.net');
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Decode JSON input
$input = json_decode(file_get_contents("php://input"), true);

if (isset($input['personnelId'], $input['busId'], $input['pickUpPoint'], $input['destination'], $input['amount'], $input['date'])) {
    $personnelId = $input['personnelId'];
    $busId = $input['busId'];
    $pickupPoint = $input['pickUpPoint']; // Updated column name
    $destination = $input['destination'];
    $amount = $input['amount'];
    $date = $input['date']; // Includes both date and time

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "intelliride";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo json_encode(["success" => false, "message" => "Database connection failed: " . $conn->connect_error]);
        exit;
    }

    // Update column name in the SQL query
    $stmt = $conn->prepare("INSERT INTO transactiondata (personnelId, busId, pickUpPoint, destination, amount, date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssds", $personnelId, $busId, $pickupPoint, $destination, $amount, $date);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Transaction saved successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error saving transaction: " . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid input"]);
}
?>