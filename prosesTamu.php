<?php
require_once "koneksi.php";

if (empty($_POST['nama'])) {
    echo "<p>Nama tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['no_ktp'])) {
    echo "<p>KTP tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['no_hp'])) {
    echo "<p>HP tidak boleh kosong.</p>";
    exit();
}

if (empty($_POST['alamat'])) {
    echo "<p>alamat tidak boleh kosong.</p>";
    exit();
}

$sql = "INSERT INTO tamu (nama, no_ktp, no_hp, alamat) VALUES ('$_POST[nama]', '$_POST[no_ktp]', '$_POST[no_hp]', '$_POST[alamat]')";
if (mysqli_query($conn, $sql)) {
    header ("refresh:3;url=tamu.php");
    echo "<p>Data berhasil disimpan.</p>";
}
else {
    echo "<p>Ups, data gagal disimpan :(</p>";
}
?>