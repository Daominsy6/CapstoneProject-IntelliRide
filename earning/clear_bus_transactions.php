<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

$conn = new mysqli($servername, $username, $password, $dbname);

$busId = $_POST['busId'];
$conn->query("DELETE FROM transactiondata WHERE bus_id = $busId");
echo json_encode(["message" => "All transactions for Bus $busId cleared."]);
$conn->close();
?>