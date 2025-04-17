<?php
include 'db.php';

header('Content-Type: application/json');

$query = "SELECT id, location, post_km FROM location ORDER BY post_km";
$result = mysqli_query($conn, $query);

$locations = [];
while ($row = mysqli_fetch_assoc($result)) {
    $locations[] = $row;
}

echo json_encode($locations);

$conn->close();
?>