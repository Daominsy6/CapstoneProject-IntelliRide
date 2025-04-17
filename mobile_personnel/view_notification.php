<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$sql = "SELECT bus_id, personnel_id, message, created_at FROM notifications ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Bus ID</th>
                <th>Personnel ID</th>
                <th>Message</th>
                <th>Timestamp</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['bus_id']}</td>
                <td>{$row['personnel_id']}</td>
                <td>{$row['message']}</td>
                <td>{$row['created_at']}</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No notifications found.";
}

$conn->close();
?>