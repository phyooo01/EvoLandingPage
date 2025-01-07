<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username DB Anda
$password = ""; // Ganti dengan password DB Anda
$dbname = "evo";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
