<?php
// Include database connection
include 'db.php';

// Get POST parameters
$busId = $_POST['busId'];  // busId should match the JavaScript parameter
$date = isset($_POST['date']) ? $_POST['date'] : null;
$fromDate = isset($_POST['fromDate']) ? $_POST['fromDate'] : null;
$toDate = isset($_POST['toDate']) ? $_POST['toDate'] : null;

// Initialize base SQL query
$sql = "SELECT * FROM transactions WHERE bus_id = ?";

// Prepare SQL query based on the parameters
if ($date) {
    // Single date selection
    $sql .= " AND transaction_date = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $busId, $date);  // "is" for integer and string
} elseif ($fromDate && $toDate) {
    // Date range selection
    $sql .= " AND transaction_date BETWEEN ? AND ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $busId, $fromDate, $toDate);  // "iss" for integer and two strings
} else {
    // If no date or range is provided, return an error
    echo "Invalid date selection.";
    exit;
}

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Check if data is found and return it
if ($result->num_rows > 0) {
    // Output each row as a table row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['transaction_date']) . "</td>";
        echo "<td>" . htmlspecialchars($row['amount']) . "</td>";
        echo "</tr>";
    }
} else {
    // If no results are found, output a message
    echo "<p>No transactions found for the selected date(s).</p>";
}
?>