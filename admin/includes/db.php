<?php
// db.php

$host = 'localhost';
$dbname = 'w_porto'; // Ganti dengan nama database Anda
$username = 'root';        // Ganti dengan username database Anda
$password = 'root';            // Ganti dengan password database Anda

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>