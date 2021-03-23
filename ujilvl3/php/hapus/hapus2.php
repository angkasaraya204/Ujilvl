<?php
include 'koneksi.php';
    if (isset($_GET['idtrans'])) {
        header('Location: transaksi.php');

    $idtrans = $_GET['idtrans'];
    $sql = "DELETE FROM `transaksi` WHERE `idtrans`='$idtrans'";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: transaksi.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>