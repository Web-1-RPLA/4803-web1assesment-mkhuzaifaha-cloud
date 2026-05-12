<?php
require_once "koneksi.php";

if (empty($_POST['id_tamu'])) {
    echo "<p>id tamu tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['id_kamar'])) {
    echo "<p>id kamar tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['tanggal_checkin'])) {
    echo "<p>tgl checkin kamar tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['tanggal_checkout'])) {
    echo "<p>tgl checkout kamar tidak boleh kosong.</p>";
    exit();
}

$sql = "SELECT INTO reservasi (id_tamu, id_kamar) values ('$_GET[id_tamu]', '$_GET[id_kamar]')";
$sql = "INSERT INTO reservasi (nomor_kamar, tipe_kamar, harga_per_malam) VALUES ('$_POST[nomor_kamar]', '$_POST[tipe_kamar]', '$_POST[harga_per_malam]', '$_POST[status]')";
if (mysqli_query($conn, $sql)) {
    header ("refresh:3;url=kamar.php");
    echo "<p>Data berhasil disimpan.</p>";
}
else {
    echo "<p>Ups, data gagal disimpan :(</p>";
}
?>