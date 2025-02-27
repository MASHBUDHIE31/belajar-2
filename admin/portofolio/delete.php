<?php
// delete.php

include '../includes/db.php';

$id = $_GET['id'];

// Hapus data berdasarkan ID
$query = "DELETE FROM portofolio WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
} else {
    echo "Error deleting record.";
}
?>