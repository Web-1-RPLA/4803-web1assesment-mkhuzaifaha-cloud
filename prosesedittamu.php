<?php
require_once "koneksi.php";

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_ktp = $_POST['no_ktp'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE tamu SET nama='$nama', no_ktp='$no_ktp', no_hp='$no_hp', alamat='$alamat' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berita berhasil diupdate!'); window.location='tamu.php';</script>";
    } else {
        echo "<p>Gagal mengupdate data: " . mysqli_error($conn) . "</p>";
    }
}
?>