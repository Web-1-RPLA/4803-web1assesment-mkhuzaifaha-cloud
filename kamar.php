<!DOCTYPE html>
<html>
<head>

<title>4903 6070625300003 Moh Khuzaifah A</title>
<style>
    .write-diary-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px auto;
            background-color: #131313;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 18px;
            border: 2px solid #901a1a;
            text-align: center;
            max-width: 200px
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #353535;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Data Kamar</h1>
    <a href="index.php" class="write-diary-button">Home</a>
    <a href="tambahkamar.php" class="write-diary-button">Tambah kamar</a>
    <?php
    require_once "koneksi.php";

    $sql = "SELECT * FROM kamar ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
    die("Error: " . mysqli_error($conn));
    }

    
    if (mysqli_num_rows($result) > 0) {
        ?>
        <table>
            <tr>
                <th>ID.</th>
                <th>Nomor kamar</th>
                <th>Tipe Kamar</th>
                <th>Harga per malam</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php
            $nomor = 0;
            while ($row = mysqli_fetch_array($result)) {
                $nomor++;
            ?>
            <tr> 
                <td><?php echo $nomor; ?> </td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                
                <td><a href="editkamar.php?id=<?php echo $row['id']; ?>">Edit</a> 
                </br/><a href="hapuskamar.php?id=<?php echo $row['id']; ?>">Hapus</a></td>
            </tr>
            <?php
            }
            ?>
        <table>
            <?php
    } else {
        echo '<div class = "empty message"> Data kamar kosong</div>';
    }
        ?>
       
</body>
</html>