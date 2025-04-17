<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $employeeId = intval($_POST['id']); // Get the ID of the employee being updated
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $position = $_POST['position'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password']; // New password field from form

    // Check if the starting date is provided; if not, retrieve the existing date from the database
    if (isset($_POST['startingDate']) && !empty($_POST['startingDate'])) {
        $startingDate = $_POST['startingDate']; // New starting date from form
    } else {
        // Fetch the existing date from the database
        $result = $conn->query("SELECT startingDate FROM personneldata WHERE id = $employeeId");
        $row = $result->fetch_assoc();
        $startingDate = $row['startingDate']; // Keep existing date if not updated
    }

    // Prepare the SQL statement for updating the employee record
    $stmt = $conn->prepare("UPDATE personneldata SET firstName=?, lastName=?, position=?, number=?, email=?, startingDate=?, password=? WHERE id=?");
    $stmt->bind_param("sssssssi", $firstName, $lastName, $position, $number, $email, $startingDate, $password, $employeeId);

    // Execute the statement and handle the result
    if ($stmt->execute()) {
        echo "Employee record updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close(); // Close the statement
}
?>