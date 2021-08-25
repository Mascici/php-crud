<?php
    include 'koneksi.php';
?>

<?php
            // CARA MENAMPILKAN TABEL PRODUK DENGAN SELEKSI id_buku
            $query = "SELECT * FROM tb_produk WHERE id_buku=$_GET[id]";
            $hasil = mysqli_query($koneksi, $query);
            // MELAKUKAN PERULANGAN
            while ($data = mysqli_fetch_assoc($hasil)) { ?>
            <!-- MENGIRIM DATA ID KE PROSESEDIT.PHP -->
            <form action="prosesedit.php" method="POST">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <table>
            <tr>
                <td> 
                    <!-- MENGUBAH NAMA BUKU -->
                <textarea name="nama_buku" id="nama_buku" cols="30" rows="10"><?= $data['nama_buku'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td> 
                    <!-- MENGUBAH KATEGORI BUKU -->
                <input type="text" name="kategori_buku" id="kategori_buku" value="<?= $data['kategori_buku'] ?>"> 
                </td>
            </tr>
            <tr>
                <td> 
                    <!-- MENGUBAH HARGA BUKU -->
                <input type="text" name="harga" id="harga" value="<?= $data['harga'] ?>"> 
                </td>
            </tr>
            <tr>
                <td>
                     <!--TOMBOL EDIT DAN HAPUS  -->
                    <input type="submit" name="kirim" value="edit data">
                </td>
            </tr>
            </table>
            </form>
            <?php } ?>
