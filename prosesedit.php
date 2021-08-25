<?php 
    include 'koneksi.php';
?>

<?php

// function ubahbuku($koneksi){
    $query="UPDATE tb_produk 
    SET nama_buku='$_POST[nama_buku]', kategori_buku='$_POST[kategori_buku]', harga='$_POST[harga]' WHERE id_buku='$_POST[id]'";
    $hasil=mysqli_query($koneksi,$query);
    echo $query;
// }
    // ubahbuku($koneksi);

?>
