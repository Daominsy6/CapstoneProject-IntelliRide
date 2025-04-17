<?php
include 'db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']); // Get the bus ID
    $plateNumber = $_POST['busPlate']; // Get the new bus plate number
    $serialNumber = $_POST['busSerial']; // Get the new bus serial number
    $info = $_POST['busInfo']; // Get the new bus info

    // Prepare the SQL update statement
    $sql = "UPDATE busdata SET plateNumber='$plateNumber', serialCode='$serialNumber', info='$info' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>