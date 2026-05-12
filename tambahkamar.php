<title>4903 6070625300003 Moh Khuzaifah A</title>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Tambah Tamu Baru</h1>

    <form action="proseskamar.php" method="POST">
        Nomor kamar <br><input type="text" name="nomor_kamar" ><br>
        <select name="id_kategori">
            <option value="single">Single</option>
            <option value="double">Double</option>
            <option value="suite">Suite</option>
        </select>
        <br>
        Harga per malam <br><input type="text" name="harga_per_malam" ><br>
        <input type="submit" value="simpan">
        <a href="kamar.php">batal<a>
    </form>
</body>
</html>