<?php
include 'db.php';

if (isset($_POST['transactionIds']) && is_array($_POST['transactionIds'])) {
    $transactionIds = $_POST['transactionIds'];
    $idPlaceholders = implode(',', array_fill(0, count($transactionIds), '?'));

    $stmt = $conn->prepare("DELETE FROM transactiondata WHERE Id IN ($idPlaceholders)");
    $stmt->bind_param(str_repeat('i', count($transactionIds)), ...$transactionIds);

    if ($stmt->execute()) {
        echo "Selected transactions deleted successfully.";
    } else {
        echo "Error deleting records: " . $conn->error;
    }
    $stmt->close();
} else {
    echo "No valid transaction IDs provided.";
}
$conn->close();
?>
