<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $gambar = $_POST['gambar'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $sql = "UPDATE `allproduk` SET nma_produk='$nama', gambar='$gambar', hrga_produk='$harga' WHERE id='$id'";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: index.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>