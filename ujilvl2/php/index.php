<?php
// panggil koneksinya
require_once 'koneksi.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" href="./favicon.ico">

    <title>Projek 2</title>
    <style>
        body {
            background-image: url(https://j.top4top.io/p_1794dr5wk1.jpg);
            background-size: cover;
        }
        .card {
            width: 650px;
            height: 530px;
            margin-top: 30px;
        }
        .card-header {
            width: 650px;
        }
        .container {
            width: 75%;
        }
        .scrolls {
            height: 300px; 
            width: 100%;
            margin-top: 30px;
            background-color: white;
            border: 2px solid #cccccc; 
            overflow: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="scrolls">
    <table class="table-bordered text-center bg-light" width="100%">
        <tr class="bg-dark text-white">
            <th scope="col">No</th>
            <th scope="col">Kode Produk</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Satuan</th>
            <th scope="col">Kategori</th>
            <th scope="col">Gambar</th>
            <th scope="col">Stok</th>
            <th scope="col">Modify</th>
        </tr>
    <tbody>

    <?php
    include "koneksi.php";

    $sql = "SELECT * FROM starmart ORDER BY id ASC";
    $no = 1;
    $query = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($query)){
    ?>

    <tr>
        <td><?php echo $no; ?></td>
        <td>MD-<?php echo $row['kode_produk'];?></td>
        <td><?php echo $row['nama_produk']; ?></td>
        <td>Rp <?php echo number_format($row['harga_produk'],0,',','.'); ?></td>
        <td><?php echo $row['satuan_produk']; ?></td>
        <td><?php echo $row['kategori_produk']; ?></td>
        <td style="text-align: center;"><img src="<?php echo $row['gambar']; ?>" style="width: 150px; height: 95px"></td>
        <td><?php echo $row['stok_produk']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a> 
            <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
        </td>
    </tr>

    <?php
        $no++; //untuk nomor urut terus bertambah 1
    }
    ?>
    </tbody>
    </table>
    </div>
    <a href="produk.php" class="btn btn-dark mt-3">Tambah Data</a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>