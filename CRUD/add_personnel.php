<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $position = $_POST['position'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Get today's date in the format YYYY-MM-DD
    $startingDate = date("Y-m-d");

    // Prepare and bind the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO personneldata (firstName, lastName, position, number, email, startingDate, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $firstName, $lastName, $position, $number, $email, $startingDate, $password); // "ssssss" means all six parameters are strings

    if ($stmt->execute()) {
        echo "New employee record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close(); // Close the statement
}
?>