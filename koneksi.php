<?php
// <title>4903 6070625300003 Moh Khuzaifah A</title>
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "mydb"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
