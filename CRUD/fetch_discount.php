<?php
// CRUD/fetch_discount.php
include 'db.php';

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = "SELECT discount FROM fare LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && $row = mysqli_fetch_assoc($result)) {
    echo json_encode(["status" => "success", "discount" => $row['discount']]);
} else {
    echo json_encode(["status" => "error", "message" => "Unable to fetch discount"]);
}

$conn->close();
?>