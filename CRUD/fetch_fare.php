<?php
include 'db.php';

// Fetch fare settings from the `fare` table
$fareSettingsQuery = "SELECT regular, discount, increase FROM fare LIMIT 1";
$fareSettingsResult = mysqli_query($conn, $fareSettingsQuery);
$fareSettings = mysqli_fetch_assoc($fareSettingsResult);

$regularFare = floatval($fareSettings['regular']);
$discountPercent = floatval($fareSettings['discount']);
$increasePerKm = floatval($fareSettings['increase']);

// Fetch all data from the `location` table
$locationsQuery = "SELECT id, location, post_km FROM location ORDER BY post_km";
$locationsResult = mysqli_query($conn, $locationsQuery);



// Display fare table
echo '<div class="table-responsive">';
echo '<table class="table table-bordered">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Location</th>';
echo '<th>Post KM</th>';
echo '<th>Regular Fare</th>';
echo '<th>Discounted Fare</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = mysqli_fetch_assoc($locationsResult)) {
    $postKm = intval($row['post_km']);
    $calculatedFare = $regularFare;

    // Add increase for each KM after 4
    if ($postKm > 4) {
        $calculatedFare += ($postKm - 4) * $increasePerKm;
    }

    // Calculate discounted fare
    $discountedFare = $calculatedFare - ($calculatedFare * ($discountPercent / 100));

    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['location'] . '</td>';
    echo '<td>' . $postKm . '</td>';
    echo '<td>₱' . number_format($calculatedFare, 2) . '</td>';
    echo '<td>₱' . number_format($discountedFare, 2) . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';

$conn->close();
?>