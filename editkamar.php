<?php
require_once "koneksi.php";

if(!isset($_GET['id'])){
    die("ID Berita Tidak Ditemukan");
}

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM kamar WHERE id='$id'");
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
        <h2>Edit kamar</h2>
        <form action="prosesedittamu.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            
            <table>
                <tr>
                    <td>nomor kamar:</td>
                    <td><input type="text" name="nama" value="<?php echo $data['nomor_kamar']; ?>" required></td>
                </tr>
                <tr>
                    <td valign="top">tipe kamar:</td>
                <select name="tipe_kamar">
                            <option value="Single" <?php if($data['tipe_kamar'] == '1') echo 'selected'; ?>>Single</option>
                            <option value="Double" <?php if($data['tipe_kamar'] == '2') echo 'selected'; ?>>Double</option>
                            <option value="Suite" <?php if($data['tipe_kamar'] == '2') echo 'selected'; ?>>Suite</option>
                        </select>    
                </tr>
               <tr>
                    <td valign="top">harga per malam:</td>
                    <td><textarea name="no_hp" rows="1" required><?php echo $data['harga_per_malam']; ?></textarea></td>
                </tr>
                <tr>
                    <td valign="top">status:</td>
                    <td><textarea name="alamat" rows="1" required><?php echo $data['status']; ?></textarea></td>
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