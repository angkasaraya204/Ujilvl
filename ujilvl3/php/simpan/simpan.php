<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $gambar = $_POST['gambar'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];

    $sql = "INSERT INTO `keranjang` (`nma_produk`, `gambar`, `hrga_produk`, `quantity`) VALUES ('$nama', '$gambar', '$harga', '$qty')";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: keranjang.php');
    } else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>