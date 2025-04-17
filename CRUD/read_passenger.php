<?php
// read_passenger.php
include 'db.php';

// Prepare the SQL query to select passenger data
$sql = "SELECT * FROM passengerdata";
$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}

// Start outputting the table
echo "<table class='table table-bordered' id='passengerTable'>
        <thead>
            <tr>
                <th>Select</th>
                <th>Passenger ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Creation Date</th>
            
            </tr>
        </thead>
        <tbody>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $passengerId = htmlspecialchars($row["id"]);
        $firstName = htmlspecialchars($row["firstName"]);
        $lastName = htmlspecialchars($row["lastName"]);
        $contact = htmlspecialchars($row["contact"]);
        $email = htmlspecialchars($row["email"]);
        $creationDate = htmlspecialchars($row["creationDate"]);

        echo "<tr>
                <td><input type='checkbox' data-passenger-id='$passengerId'></td>
                <td>PSSR$passengerId</td>
                <td>$firstName</td>
                <td>$lastName</td>
                <td>$contact</td>
                <td>$email</td>
                <td>$creationDate</td>
                
              </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No passenger data found</td></tr>";
}

echo "  </tbody>
      </table>";

$conn->close();
?>