<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
    $idtrans = $_POST['idtrans'];
    $gambar = $_POST['gambar'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];

    $sql = "UPDATE `transaksi` SET nma_produk='$nama', gambar='$gambar', hrga_produk='$harga', quantity='$qty' WHERE idtrans='$idtrans'";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: transaksi.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>