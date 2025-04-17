<?php
// CRUD/update_discount.php
include 'db.php';

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_regular = $_POST['regular'] ?? null;

    if ($new_regular !== null && is_numeric($new_regular)) {
        $sql = "UPDATE fare SET regular='$new_regular' LIMIT 1";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["status" => "success", "regular" => $new_regular]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error updating record: " . $conn->error]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid input"]);
    }
}

$conn->close();
?>