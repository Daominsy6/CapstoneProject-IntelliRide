<?php
// CRUD/update_discount.php
include 'db.php';

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_discount = $_POST['discount'];
    $sql = "UPDATE fare SET discount='$new_discount' LIMIT 1";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "discount" => $new_discount]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error updating record: " . $conn->error]);
    }
}

$conn->close();
?>