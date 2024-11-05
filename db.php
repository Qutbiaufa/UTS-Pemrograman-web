<?php
$host = 'localhost';      // Sesuaikan dengan host MySQL (default: localhost)
$username = 'root';       // Sesuaikan dengan username MySQL Anda (default: root)
$password = '';           // Sesuaikan dengan password MySQL Anda
$database = 'pemweb_uts'; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
