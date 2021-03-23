<?php
include 'koneksi.php';
    if (isset($_POST['simpan3'])) {
    $nama = $_POST['nama'];
    $gambar = $_POST['gambar'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO `allproduk` (`nma_produk`, `gambar`, `hrga_produk`) VALUES ('$nama', '$gambar', '$harga')";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: index.php');
    } else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>