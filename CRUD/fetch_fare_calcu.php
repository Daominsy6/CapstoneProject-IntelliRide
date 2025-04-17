<?php
include 'db.php';

header('Content-Type: application/json');

$query = "SELECT regular, discount, increase FROM fare LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && $row = mysqli_fetch_assoc($result)) {
    echo json_encode($row);
} else {
    echo json_encode(["error" => "Unable to fetch fare settings"]);
}

$conn->close();
?>