<?php
require_once "koneksi.php";

if (empty($_POST['nomor_kamar'])) {
    echo "<p>Nomor Kamar tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['tipe_kamar'])) {
    echo "<p>Tipe kamar tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['harga_per_malam'])) {
    echo "<p>Harga kamar tidak boleh kosong.</p>";
    exit();
}


$sql = "INSERT INTO kamar (nomor_kamar, tipe_kamar, harga_per_malam) VALUES ('$_POST[nomor_kamar]', '$_POST[tipe_kamar]', '$_POST[harga_per_malam]',)";
if (mysqli_query($conn, $sql)) {
    header ("refresh:3;url=kamar.php");
    echo "<p>Data berhasil disimpan.</p>";
}
else {
    echo "<p>Ups, data gagal disimpan :(</p>";
}
?>