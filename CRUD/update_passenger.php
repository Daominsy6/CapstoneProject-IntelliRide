<?php
include 'db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passengerId = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE passengerdata SET 
            firstName='$firstName', 
            lastName='$lastName', 
            contact='$contact', 
            email='$email',
            password='$password'
            WHERE id=$passengerId";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Record updated successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error updating record: " . $conn->error]);
    }

    $conn->close();
}
?>
