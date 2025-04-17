<?php
include 'db.php'; // Adjust to your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if employee IDs are received
    if (isset($_POST['ids']) && is_array($_POST['ids'])) {
        $ids = $_POST['ids'];

        // Sanitize the employee IDs and prepare for deletion
        $ids = array_map('intval', $ids); // Ensure they are integers
        $idsToDelete = implode(',', $ids); // Create a comma-separated list of IDs

        // Prepare the SQL delete statement
        $query = "DELETE FROM personneldata WHERE id IN ($idsToDelete)"; // Ensure this matches your actual table name
        if ($conn->query($query) === TRUE) {
            echo "Successfully deleted selected employee(s).";
        } else {
            echo "Error deleting employees: " . $conn->error;
        }
    } else {
        echo "No employee IDs provided.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
