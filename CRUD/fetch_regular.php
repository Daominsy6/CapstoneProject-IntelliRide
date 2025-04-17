<?php
// CRUD/fetch_discount.php
include 'db.php';

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = "SELECT regular FROM fare LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && $row = mysqli_fetch_assoc($result)) {
    if (isset($row['regular'])) {
        echo json_encode(["status" => "success", "regular" => $row['regular']]);
    } else {
        echo json_encode(["status" => "error", "message" => "Field 'regular' is missing or null"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Unable to fetch regular fare"]);
}

$conn->close();
?>