<?php
// CRUD/read_discount.php
include 'CRUD/db.php';
$query = "SELECT fare FROM increase LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$increase = $row['increase'];
?>