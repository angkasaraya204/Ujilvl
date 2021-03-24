<?php
include 'koneksi.php';
$id = $_GET["id"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $sql = "DELETE FROM `starmart` WHERE id='$id'";
    $query = mysqli_query($connect, $sql);

    //periksa query, apakah ada kesalahan
    if(!$query) {
      die ("Gagal menghapus data: ".mysqli_errno($connect).
       " - ".mysqli_error($connect));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }