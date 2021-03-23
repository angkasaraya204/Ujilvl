<?php
include 'koneksi.php';
    if (isset($_GET['orderid'])) {
        header('Location: orderlist.php');

    $orderid = $_GET['orderid'];
    $sql = "DELETE FROM `keranjang` WHERE `orderid`='$orderid'";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: keranjang.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>