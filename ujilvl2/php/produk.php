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
            width: 700px;
        }
    </style>
</head>
<body>
<div class="container">
<?php
    include 'koneksi.php'; //memanggil file koneksi
    //ambil data dari form karyawan.html
    function input($row) {
      $row = trim($row);
      $row = stripslashes($row);
      $row = htmlspecialchars($row);
      return $row;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = input($_POST['kode']);
    $nama = input($_POST['nama']);
    $harga = input($_POST['harga']);
    $satuan = input($_POST['satuan']);
    $kategori = input($_POST['kategori']);
    $gambar = input($_POST['gambar']);
    $stok = input($_POST['stok']);

    //query mysql untuk menyimpan kedatabase
    $sql = "INSERT INTO starmart (kode_produk, nama_produk, harga_produk, satuan_produk, kategori_produk, gambar, stok_produk) VALUES ('$kode', '$nama', '$harga', '$satuan', '$kategori', '$gambar', '$stok')";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: index.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
    ?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="card">
        <h4 class="card-header bg-dark text-white text-center">FORM MASTER dan STOCK DATA BARANG</h4>
            <div class="card-body">
            <div class="form-group row justify-content-center">
            <label for="kode" class="col-sm-3 col-form-label">Kode Produk :</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="kode" placeholder="001" />
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="nama" class="col-sm-3 col-form-label">Nama Produk :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nama" placeholder="Jus Jambu">
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="harga" class="col-sm-3 col-form-label">Harga Produk :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="harga" placeholder="15.000">
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="satuan" class="col-sm-3 col-form-label">Satuan :</label>
            <div class="col-sm-6">
                <select class="form-control" name="satuan">
                    <option value="Gelas">Gelas</option>
                    <option value="Botol">Botol</option>
                    <option value="Plastik">Plastik</option>
                    <option value="Sachet">Sachet</option>
                </select>
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="kategori" class="col-sm-3 col-form-label">Kategori :</label>
            <div class="col-sm-6">
                <select class="form-control" name="kategori">
                    <option value="Rasa Manis">Rasa Manis</option>
                    <option value="Rasa Pahit">Rasa Pahit</option>
                    <option value="Minuman Dingin">Minuman Dingin</option>
                    <option value="Minuman Hangat">Minuman Hangat</option>
                </select>
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="gambar" class="col-sm-3 col-form-label">Url Gambar :</label>
            <div class="col-sm-6">
                <input type="url" class="form-control" name="gambar">
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="stok" class="col-sm-3 col-form-label">Stok Awal :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="stok" placeholder="50">
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <div class="col-sm-9">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-warning float-right" role="button">Kembali</a>
            </div>
            </div>
        </div>
        </div>
    </from>
    </div>
    </div>