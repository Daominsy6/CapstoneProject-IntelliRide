<?php
// read_transaction.php
include 'db.php';

// Check if a search request has been made
$column = isset($_POST['column']) ? $conn->real_escape_string($_POST['column']) : 'Id'; // Default column
$value = isset($_POST['value']) ? $conn->real_escape_string($_POST['value']) : '';

// Prepare the SQL query to select transaction data
$sql = "SELECT * FROM transactiondata";

// If a search value is provided, filter the results
if (!empty($value)) {
    $sql .= " WHERE $column LIKE '%$value%'"; // Use LIKE for partial matches
}

// Order the results by date in descending order to show the newest data on top
$sql .= " ORDER BY date DESC";

$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}

echo "<table class='table table-bordered' id='transactionTable'>
        <thead>
            <tr>
                <th>Select</th>
                <th>Transaction ID</th>
                <th>Personnel ID</th>
                <th>Bus ID</th>
                <th>Pick-up Point</th>
                <th>Destination</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $transactionId = htmlspecialchars($row["Id"]);
        $personnelId = htmlspecialchars($row["personnelId"]);
        $busId = htmlspecialchars($row["busId"]);
        $pickupPoint = htmlspecialchars($row["pickUpPoint"]); // Updated column name
        $destination = htmlspecialchars($row["destination"]);
        $amount = htmlspecialchars($row["amount"]);
        $date = htmlspecialchars($row["date"]);

        echo "<tr>
                <td><input type='checkbox' data-transaction-id='$transactionId'></td>
                <td>TRX$transactionId</td>
                <td>PRNL$personnelId</td>
                <td>$busId</td>
                <td data-column='pickUpPoint'>$pickupPoint</td> <!-- Updated column name -->
                <td data-column='destination'>$destination</td>
                <td>₱$amount</td>
                <td>$date</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No transaction data found</td></tr>";
}

echo "  </tbody>
      </table>";

$conn->close();
?>