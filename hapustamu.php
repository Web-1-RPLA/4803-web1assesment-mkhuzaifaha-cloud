<?php
require_once "koneksi.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tamu WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berita berhasil dihapus!'); window.location='tamu.php';</script>";
    } else {
        echo "<p>Gagal menghapus data: " . mysqli_error($conn) . "</p>";
    }
}
?>