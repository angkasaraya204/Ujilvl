<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
    $gambar = $_POST['gambar'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];

    $sql = "UPDATE `keranjang` SET quantity='$qty' WHERE nma_produk='$nama'";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: keranjang.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>