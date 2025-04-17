<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password is empty for XAMPP
$dbname = "intelliride"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture login data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get JSON input
    $input = json_decode(file_get_contents("php://input"), true);
    if (isset($input['username'], $input['password'], $input['bus_id'])) {
        $email = $input['username'];
        $password = $input['password'];
        $bus_id = $input['bus_id'];

        // Call the logIn function
        $response = logIn($conn, $email, $password, $bus_id);
        echo json_encode($response);
    } else {
        echo json_encode(["message" => "All fields (username, password, bus_id) are required"]);
    }
} else {
    echo json_encode(["message" => "Invalid request method"]);
}

// Function for login
function logIn($conn, $email, $password, $bus_id)
{
    // Prepare the SQL statement to select the personnel ID and password based on the email
    $stmt = $conn->prepare("SELECT id, password FROM personneldata WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with that email exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Check if 'password' key exists before accessing it
        if (isset($row['password'])) {
            $stored_password = $row['password']; // Get the stored password
            $personnel_id = $row['id']; // Get the personnel ID

            // Compare the entered password with the stored password
            if ($password === $stored_password) {
                // Update the bus_locations table
                $updateStmt = $conn->prepare("UPDATE bus_locations SET personnel_id = ? WHERE bus_id = ?");
                $updateStmt->bind_param("ii", $personnel_id, $bus_id);
                if ($updateStmt->execute()) {
                    return [
                        "message" => "Login successful! Personnel ID assigned to Bus ID: $bus_id",
                        "personnel_id" => $personnel_id
                    ];
                } else {
                    return [
                        "message" => "Login successful, but failed to update bus personnel: " . $updateStmt->error,
                        "personnel_id" => $personnel_id
                    ];
                }
            } else {
                return ["message" => "Incorrect password."];
            }
        } else {
            return ["message" => "Unexpected error: Password key is missing."];
        }
    } else {
        return ["message" => "No user found with that email."];
    }
}

// Close the connection
$conn->close();
?>