<?php
    include 'koneksi.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TOKO BUKU</title>
</head>
<body>
    <!-- AWAL HEADING -->
    <h1>Toko Buku</h1>
    <!-- AKHIR HEADING -->
    <!-- AWAL TABEL -->
    <table border="1">
        <thead>
            <th>NAMA BUKU</th>
            <th>KATEGORI BUKU</th>
            <th>Harga</th>
            <th>Aksi</th>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM tb_produk";
            $hasil = mysqli_query($koneksi, $query);

            while ($data = mysqli_fetch_assoc($hasil)) { ?>
            <tr>
                <td><?= $data['nama_buku'] ?></td>
                <td><?= $data['kategori_buku'] ?></td>
                <td><?= $data['harga'] ?></td>
                <td> <a href="edit.php?id=<?= $data['id_buku'] ?>">edit</a> | 
                     <a href="hapus.php?id=<?= $data['id_buku'] ?>">hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- AKHIR TABEL -->
</body>
</html>
