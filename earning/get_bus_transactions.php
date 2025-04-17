<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve POST data
$busId = isset($_POST['busId']) ? $conn->real_escape_string($_POST['busId']) : null;
$fromDate = isset($_POST['fromDate']) ? $conn->real_escape_string($_POST['fromDate']) : null;
$toDate = isset($_POST['toDate']) ? $conn->real_escape_string($_POST['toDate']) : null;

// Default to today's date if no date is passed
if (!$fromDate && !$toDate) {
    $fromDate = $toDate = date('Y-m-d');
}

// Build SQL query for fetching transactions
if ($busId === "all") {
    // Query for all buses within date range
    $sql = "
        SELECT personnelId, busId, pickUpPoint, destination, amount, date
        FROM transactiondata 
        WHERE DATE(date) BETWEEN '$fromDate' AND '$toDate'
        ORDER BY date DESC
    ";
} else {
    // Query for specific bus within date range
    $sql = "
        SELECT personnelId, pickUpPoint, destination, amount, date
        FROM transactiondata 
        WHERE busId = 'BUS$busId' AND DATE(date) BETWEEN '$fromDate' AND '$toDate'
        ORDER BY date DESC
    ";
}

$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}

echo "<table class='table table-bordered'>
        <thead>
            <tr>";

// If 'All Buses' is selected, include the 'Bus ID' column in the table
if ($busId === "all") {
    echo "<th>Bus ID</th>";
}

echo "      <th>Personnel ID</th>
            <th>Pick-Up Point</th>
            <th>Destination</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";

        if ($busId === "all") {
            echo "<td>{$row['busId']}</td>";
        }

        echo "  <td>PRNL{$row['personnelId']}</td>
                <td>{$row['pickUpPoint']}</td>
                <td>{$row['destination']}</td>
                <td>₱" . number_format($row['amount'], 2) . "</td>
                <td>{$row['date']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No transactions found for the selected date(s).</td></tr>";
}

echo "</tbody></table>";

$conn->close();
?>