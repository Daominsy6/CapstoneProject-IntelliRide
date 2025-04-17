<?php
// read_employee.php
include 'db.php';

// Prepare the SQL query to select employee data
$sql = "SELECT * FROM personneldata";
$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}

echo "<table class='table table-bordered' id='employeeTable'>
        <thead>
            <tr>
                <th>Select</th>
                <th>Personnel ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Number</th>
                <th>Email</th>
                <th>Starting Date</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $employeeId = htmlspecialchars($row["id"]);
        $firstName = htmlspecialchars($row["firstName"]);
        $lastName = htmlspecialchars($row["lastName"]);
        $position = htmlspecialchars($row["position"]);
        $number = htmlspecialchars($row["number"]);
        $email = htmlspecialchars($row["email"]);
        $startingDate = htmlspecialchars($row["startingDate"]);
        $password = htmlspecialchars($row["password"]);

        echo "<tr>
                <td><input type='checkbox' data-employee-id='$employeeId'></td>
                <td>PRNL$employeeId</td>
                <td>$firstName</td>
                <td>$lastName</td>
                <td>$position</td>
                <td>$number</td>
                <td>$email</td>
                <td>$startingDate</td>
                <td>
                    <input type='password' id='password-$employeeId' value='$password' class='password-field' readonly>
                    <button type='button' onclick='togglePassword($employeeId)'>
                        <i class='fa fa-eye' id='toggleIcon-$employeeId'></i>
                    </button>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No personnel data found</td></tr>";
}

echo "  </tbody>
      </table>";

$conn->close();
?>