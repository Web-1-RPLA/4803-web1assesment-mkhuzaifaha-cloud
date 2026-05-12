<?php
require_once "koneksi.php";

if(!isset($_GET['id'])){
    die("ID Berita Tidak Ditemukan");
}

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tamu WHERE id='$id'");
$data = mysqli_fetch_array($query);

if(!$data) {
    die("Error: Data tidak ditemukan di database.");
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Berita</title></head>
<body>
    <div class="container">
        <h2>Edit Tamu</h2>
        <form action="prosesedittamu.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            
            <table>
                <tr>
                    <td>Nama:</td>
                    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" required></td>
                </tr>
                <tr>
                    <td valign="top">Nomor KTP:</td>
                    <td><textarea name="no_ktp" rows="1" required><?php echo $data['no_ktp']; ?></textarea></td>
                </tr>
               <tr>
                    <td valign="top">Nomor HP:</td>
                    <td><textarea name="no_hp" rows="1" required><?php echo $data['no_hp']; ?></textarea></td>
                </tr>
                <tr>
                    <td valign="top">Alamat:</td>
                    <td><textarea name="alamat" rows="1" required><?php echo $data['alamat']; ?></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr> 
            </table>
            <a href="tamu.php">batal</a>
        </form>
    </div>
    <br>
    
</body>
</html>