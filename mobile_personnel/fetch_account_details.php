<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}

// Retrieve POST parameters
$busId = isset($_POST['busId']) ? $conn->real_escape_string($_POST['busId']) : null;
$personnelId = isset($_POST['personnelId']) ? $conn->real_escape_string($_POST['personnelId']) : null;

// Debugging: Log received parameters
error_log("Received busId: $busId, personnelId: $personnelId");

// Validate input
if (empty($busId) || empty($personnelId)) {
    error_log("Invalid parameters received. busId: $busId, personnelId: $personnelId");
    echo json_encode(["error" => "Invalid parameters. Both busId and personnelId are required."]);
    exit;
}

// Query bus data
$busQuery = "
    SELECT 
        id AS busId, 
        plateNumber AS busPlate, 
        info AS busInfo 
    FROM busdata 
    WHERE id = '$busId'
";

error_log("Executing bus query: $busQuery");
$busResult = $conn->query($busQuery);

// Query personnel data
$personnelQuery = "
    SELECT 
        id AS personnelId, 
        CONCAT(firstName, ' ', lastName) AS name, 
        number AS contact, 
        email 
    FROM personneldata 
    WHERE id = '$personnelId'
";

error_log("Executing personnel query: $personnelQuery");
$personnelResult = $conn->query($personnelQuery);

// Combine results
if ($busResult && $personnelResult && $busResult->num_rows > 0 && $personnelResult->num_rows > 0) {
    $busData = $busResult->fetch_assoc();
    $personnelData = $personnelResult->fetch_assoc();

    $responseData = [
        "busId" => $busData['busId'] ?: "N/A",
        "busPlate" => $busData['busPlate'] ?: "N/A",
        "busInfo" => $busData['busInfo'] ?: "N/A",
        "personnelId" => $personnelData['personnelId'] ?: "N/A",
        "name" => $personnelData['name'] ?: "N/A",
        "contact" => $personnelData['contact'] ?: "N/A",
        "email" => $personnelData['email'] ?: "N/A"
    ];

    echo json_encode($responseData);
} else {
    error_log("No data found for busId: $busId or personnelId: $personnelId");
    echo json_encode(["error" => "No data found for the provided busId and personnelId."]);
}

// Close connection
$conn->close();
?>