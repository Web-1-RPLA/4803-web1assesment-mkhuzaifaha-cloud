<?php
require_once "koneksi.php";

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $nomor_kamar = $_POST['nomor_kamar'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $harga_per_malam = $_POST['harga_per_malam'];
    $status = $_POST['status'];

    $sql = "UPDATE kamar SET nomor_kamar='$nomor_kamar', tipe_kamar='$tipe_kamar', harga_per_malam='$harga_per_kamar', WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berita berhasil diupdate!'); window.location='tamu.php';</script>";
    } else {
        echo "<p>Gagal mengupdate data: " . mysqli_error($conn) . "</p>";
    }
}
?>