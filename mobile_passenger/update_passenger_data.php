<?php
header('Content-Type: application/json');

//Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $newEmail = $_POST['newEmail'] ?? '';
    $newPassword = $_POST['newPassword'] ?? '';

    // Validate email and password
    $stmt = $conn->prepare("SELECT * FROM passengerdata WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update the passenger data
        $updateStmt = $conn->prepare("UPDATE passengerdata SET firstName = ?, lastName = ?, contact = ?, email = ?, password = ? WHERE email = ?");
        $updateStmt->bind_param("ssssss", $firstName, $lastName, $contact, $newEmail, $newPassword, $email);

        if ($updateStmt->execute()) {
            $response['success'] = true;
            $response['message'] = "Profile updated successfully.";
        } else {
            $response['success'] = false;
            $response['message'] = "Failed to update profile.";
        }

        $updateStmt->close();
    } else {
        $response['success'] = false;
        $response['message'] = "Invalid email or password.";
    }

    $stmt->close();
} else {
    $response['success'] = false;
    $response['message'] = "Invalid request method.";
}

$conn->close();
echo json_encode($response);
?>