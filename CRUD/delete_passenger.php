<?php
include 'db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passengerIds = $_POST['passengerIds']; // Expecting an array of IDs

    if (!empty($passengerIds)) {
        $ids = implode(',', array_map('intval', $passengerIds)); // Sanitize IDs
        $sql = "DELETE FROM passengerdata WHERE id IN ($ids)";
        
        if ($conn->query($sql) === TRUE) {
            echo "Passengers deleted successfully.";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "No passengers selected for deletion.";
    }

    $conn->close();
}
?>
