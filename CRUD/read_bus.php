<?php
// read_bus.php
include 'db.php'; // Include your database connection file

// Prepare the SQL query to select bus data
$sql = "SELECT * FROM busdata"; // Ensure this matches your actual table name
$result = $conn->query($sql);

// Check for errors in the query
if (!$result) {
    die("Error: " . $conn->error);
}

// Start outputting the table
echo "<table class='table table-bordered' id='busTable'>
        <thead>
            <tr>
                <th>Select</th> <!-- Changed to 'Select' for the checkbox column -->
                <th>Bus Id</th>
                <th>Bus Plate Number</th>
                <th>Bus Serial Number</th>
                <th>Bus Information</th>
            </tr>
        </thead>
        <tbody>";

// Check if there are results
if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        // Escape output to prevent XSS
        $busId = htmlspecialchars($row["id"]); // Assuming there is an 'id' column in your table
        $plateNumber = htmlspecialchars($row["plateNumber"]);
        $serialNumber = htmlspecialchars($row["serialCode"]); // Assuming this is the correct column name
        $info = htmlspecialchars($row["info"]); // Assuming this is the correct column name

        echo "<tr>
                <td><input type='checkbox' data-bus-id='$busId'></td> <!-- Checkbox added -->
                <td>BUS$busId</td>
                <td>$plateNumber</td>
                <td>$serialNumber</td>
                <td>$info</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No bus data found</td></tr>";
}

echo "  </tbody>
      </table>";

// Close the database connection
$conn->close();
?>