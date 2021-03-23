<?php
include 'koneksi.php';
    if (isset($_GET['id'])) {
        header('Location: index.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM `allproduk` WHERE `id`='$id'";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: index.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>