<?php
    // memanggil file koneksi.php untuk membuat koneksi
    include 'koneksi.php';

    // mengecek apakah di url ada nilai GET id
    if (isset($_GET['id'])) {
        $id = ($_GET["id"]);

        // menampilkan data dari database yang mempunyai id=$id
        $sql = "SELECT * FROM starmart WHERE id='$id'";
        $query = mysqli_query($connect, $sql);
        $data = mysqli_fetch_assoc($query);
        // apabila data tidak ada pada database maka akan dijalankan perintah ini
    }
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
            height: 620px;
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

<?php
    if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM starmart WHERE id='$id'";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($query);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $id = $_POST['id'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $satuan = $_POST['satuan'];
        $kategori = $_POST['kategori'];
        $gambar = $_POST['gambar'];
        $stok = $_POST['stok'];
    
        $sql = "UPDATE starmart SET kode_produk='$kode', nama_produk='$nama', harga_produk='$harga', satuan_produk='$satuan', kategori_produk='$kategori', gambar='$gambar', stok_produk='$stok'";
        $query .= "WHERE id = '$id'";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            header("Location: index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

        }
    }
    ?>
    <div class="container">
        <div class="card">
        <form method="POST" action="edit.php" enctype="multipart/form-data" >
                <h4 class="card-header bg-dark text-white text-center">FORM MASTER dan STOCK DATA BARANG</h4>
            <div class="card-body">
            <section class="base">
            <div class="form-group row justify-content-center">
            <div class="col-sm-6">
                <input name="id" value="<?php echo $row['id']; ?>" hidden/>
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <div class="col-sm-6">
                <input type="text" class="form-control" name="kode" value="<?php echo $row['kode_produk']; ?>" hidden/>
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="nama" class="col-sm-3 col-form-label">Nama Produk :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama_produk']; ?>"/>
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="harga" class="col-sm-3 col-form-label">Harga Produk :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="harga" value="<?php echo $row['harga_produk']; ?>"/>
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="satuan" class="col-sm-3 col-form-label">Satuan :</label>
            <div class="col-sm-6">
                <select class="form-control" name="satuan" value="<?php echo $row['satuan_produk']; ?>">
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
                <select class="form-control" name="kategori" value="<?php echo $row['kategori_produk']; ?>">
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
                <img src="<?php echo $row['gambar']; ?>" style="width: 150px; height: 95px; float: left; margin-bottom: 5px;">
                <input type="url" class="form-control" name="gambar" value="<?php echo $row['gambar']; ?>">
            </div>
            </div>
            <div class="form-group row justify-content-center">
            <label for="stok" class="col-sm-3 col-form-label">Stok Awal :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="stok" value="<?php echo $row['stok_produk']; ?>"/>
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
    </section>
    </from>
    </div>
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