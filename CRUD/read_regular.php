<?php
// CRUD/read_discount.php
include 'CRUD/db.php';
$query = "SELECT fare FROM regular LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$regular = $row['regular'];
?>