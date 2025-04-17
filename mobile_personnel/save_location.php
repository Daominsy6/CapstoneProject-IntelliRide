<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

// Establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Database connection failed: " . $conn->connect_error]));
}

// Read the raw POST input
$inputJSON = file_get_contents('php://input');
file_put_contents("php_debug.log", "RAW INPUT: " . $inputJSON . PHP_EOL, FILE_APPEND); // Log raw JSON input for debugging

// Decode the JSON input
$input = json_decode($inputJSON, true);

// Validate JSON decoding
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(["status" => "error", "message" => "Invalid JSON format", "raw" => $inputJSON]);
    exit();
}

// Extract and validate POST data
$busId = isset($input['bus_id']) ? intval($input['bus_id']) : null;
$latitude = isset($input['latitude']) ? floatval($input['latitude']) : null;
$longitude = isset($input['longitude']) ? floatval($input['longitude']) : null;

// Validate input ranges
if (!is_null($latitude) && ($latitude < -90 || $latitude > 90)) {
    echo json_encode(["status" => "error", "message" => "Invalid latitude value"]);
    exit();
}

if (!is_null($longitude) && ($longitude < -180 || $longitude > 180)) {
    echo json_encode(["status" => "error", "message" => "Invalid longitude value"]);
    exit();
}

// Ensure all required data is provided
if (!is_null($busId) && !is_null($latitude) && !is_null($longitude)) {
    // Check if a row already exists for this bus_id
    $stmt = $conn->prepare("SELECT COUNT(*) FROM bus_locations WHERE bus_id = ?");
    if (!$stmt) {
        echo json_encode(["status" => "error", "message" => "SQL prepare failed: " . $conn->error]);
        exit();
    }

    $stmt->bind_param("i", $busId);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        // Update the existing row
        $stmt = $conn->prepare("UPDATE bus_locations SET latitude = ?, longitude = ?, timestamp = NOW() WHERE bus_id = ?");
        if (!$stmt) {
            echo json_encode(["status" => "error", "message" => "SQL prepare failed: " . $conn->error]);
            exit();
        }

        $stmt->bind_param("ddi", $latitude, $longitude, $busId);
        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Location updated successfully"]);
        } else {
            echo json_encode(["status" => "error", "message" => "SQL execution failed: " . $stmt->error]);
        }

        $stmt->close();
    } else {
        // Insert a new row if none exists for this bus_id
        $stmt = $conn->prepare("INSERT INTO bus_locations (bus_id, latitude, longitude, timestamp) VALUES (?, ?, ?, NOW())");
        if (!$stmt) {
            echo json_encode(["status" => "error", "message" => "SQL prepare failed: " . $conn->error]);
            exit();
        }

        $stmt->bind_param("idd", $busId, $latitude, $longitude);
        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Location inserted successfully"]);
        } else {
            echo json_encode(["status" => "error", "message" => "SQL execution failed: " . $stmt->error]);
        }

        $stmt->close();
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid input. Missing or invalid 'bus_id', 'latitude', or 'longitude'.",
        "received" => ["bus_id" => $busId, "latitude" => $latitude, "longitude" => $longitude],
        "raw" => $inputJSON
    ]);
}

$conn->close();
?>