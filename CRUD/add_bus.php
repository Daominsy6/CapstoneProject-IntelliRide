<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $plateNumber = $_POST['busPlate'];
    $serialCode = $_POST['busCode'];
    $info = $_POST['busInfo'];

    // Prepare and bind the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO busdata (plateNumber, serialCode, info) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $plateNumber, $serialCode, $info); // "sss" means all three parameters are strings

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close(); // Close the statement
}
?>