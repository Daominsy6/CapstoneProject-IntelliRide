<?php
include 'db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Get today's date in the format YYYY-MM-DD
    $creationDate = date("Y-m-d");

    // Prepare the SQL statement
    $sql = "INSERT INTO passengerdata (firstName, lastName, contact, email, creationDate, password) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare and bind the statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $firstName, $lastName, $contact, $email, $creationDate, $password);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        echo "Passenger added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close(); // Close the statement
    $conn->close(); // Close the database connection
}
?>