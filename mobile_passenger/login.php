<?php
header("Content-Type: application/json");

// Database connection
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

    // Query to check email and password
    $query = "SELECT * FROM passengerdata WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo json_encode([
            "success" => true,
            "message" => "Login successful",
            "data" => $user
        ]);
    } else {
        echo json_encode(["success" => false, "message" => "Invalid email or password"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}

$conn->close();
?>