<?php
header("Content-Type: application/json");

//Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Database connection failed: " . $conn->connect_error]));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $conn->real_escape_string($_POST["password"]);

    if (empty($email) || empty($password)) {
        echo json_encode(["success" => false, "message" => "Email and Password are required"]);
        exit();
    }

    // Check if the email already exists
    $checkQuery = "SELECT * FROM passengerdata WHERE email='$email'";
    $result = $conn->query($checkQuery);
    if ($result->num_rows > 0) {
        echo json_encode(["success" => false, "message" => "Email already registered"]);
        exit();
    }

    // Insert the data into the database with the current date and time
    $query = "INSERT INTO passengerdata (email, password, creationDate) VALUES ('$email', '$password', NOW())";
    if ($conn->query($query) === TRUE) {
        echo json_encode(["success" => true, "message" => "Sign-up successful"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $conn->error]);
    }

} else {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}

$conn->close();
?>