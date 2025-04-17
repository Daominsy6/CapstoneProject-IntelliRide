<?php
include 'db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if bus IDs are received
    if (isset($_POST['busIds']) && is_array($_POST['busIds'])) {
        $busIds = $_POST['busIds'];

        // Sanitize the bus IDs and prepare for deletion
        $busIds = array_map('intval', $busIds); // Ensure they are integers
        $idsToDelete = implode(',', $busIds); // Create a comma-separated list of IDs

        // Prepare the SQL delete statement
        $sql = "DELETE FROM busdata WHERE id IN ($idsToDelete)"; // Ensure this matches your actual table name
        if ($conn->query($sql) === TRUE) {
            echo "Successfully deleted selected buses.";
        } else {
            echo "Error deleting buses: " . $conn->error;
        }
    } else {
        echo "No bus IDs provided.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>