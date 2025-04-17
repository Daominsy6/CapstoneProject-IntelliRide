<?php
include 'db.php';

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error); // Log error in server logs
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON data from the request
$data = json_decode(file_get_contents("php://input"), true);

// Log input data for debugging
error_log("Received data: " . json_encode($data));

// Check if 'admin' and 'password' are set in the request data
if (isset($data['admin']) && isset($data['password'])) {
    $admin = $data['admin'];
    $password = $data['password'];

    // Log to check if values are correct
    error_log("Admin: " . $admin . " Password: " . $password);

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM webaccount WHERE admin = ? AND password = ?");

    // Check if the prepare statement failed (SQL syntax issue or database connection problem)
    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error); // Log SQL errors
        die("Prepare failed: " . $conn->error);       // Stop execution if there is an SQL error
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("ss", $admin, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    $response = [];

    if ($result->num_rows > 0) {
        // Admin found, login successful
        $response['success'] = true;
    } else {
        // Admin not found or password incorrect
        $response['success'] = false;
        $response['message'] = 'Invalid username or password.';
    }

    // Close the statement
    $stmt->close();
} else {
    // Missing admin or password in the request
    $response['success'] = false;
    $response['message'] = 'Missing username or password.';
}

// Close the database connection
$conn->close();

// Log the response
error_log("Response: " . json_encode($response));

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>