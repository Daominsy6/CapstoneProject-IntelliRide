<?php
header('Access-Control-Allow-Origin: https://intelliride.sytes.net');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: text/html; charset=utf-8');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data, excluding rows where personnel_id = 0
$query = "
    SELECT 
        busdata.plateNumber AS plate_number,
        CONCAT(personneldata.firstName, ' ', personneldata.lastName) AS personnel_name,
        personneldata.number AS contact,
        bus_locations.status AS status,
        bus_locations.latitude AS latitude,
        bus_locations.longitude AS longitude,
        busdata.id AS bus_id,
        bus_locations.personnel_id AS personnel_id
    FROM bus_locations
    LEFT JOIN busdata ON bus_locations.bus_id = busdata.id
    LEFT JOIN personneldata ON bus_locations.personnel_id = personneldata.id
    WHERE bus_locations.personnel_id != 0
";

$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}

// Generate the HTML table
echo "<table id='busTable' class='table table-bordered'>";
echo "<thead>
        <tr>
            <th>#</th>
            <th>Bus ID</th>
            <th>Plate Number</th>
            <th>Personnel Name</th>
            <th>Contact</th>
            <th>Status</th>
            <th>Locate</th>
        </tr>
      </thead>";
echo "<tbody>";

$count = 1;

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$count}</td>
            <td>BUS{$row['bus_id']}</td>
            <td>{$row['plate_number']}</td>
            <td>{$row['personnel_name']}</td>
            <td>{$row['contact']}</td>
            <td>{$row['status']}</td>
            <td>
                <button class='btn btn-primary locate-btn' 
                        data-bus-id='{$row['bus_id']}' 
                        data-lat='{$row['latitude']}' 
                        data-lng='{$row['longitude']}'>Locate</button>
            </td>
          </tr>";
    $count++;
}
echo "</tbody>";
echo "</table>";

$conn->close();
?>