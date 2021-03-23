<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="style.css?version=<?php echo filemtime('style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Allerta&family=Imbue:wght@200&family=Overlock:wght@700&family=Saira+Condensed:wght@300&family=Sen&family=Staatliches&family=Kaushan+Script&family=Teko&family=Pathway+Gothic+One&display=swap"
        rel="stylesheet">

    <title>Uji Lavel 3</title>

    <style>
        .dark-mode {
            background-color: black;
            color: black;
        }
    </style>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse text-center navbar-collapse" id="navbarNavAltMarkup">
                    <a class="navbar-brand ms-4" href="#">Angkasa Raya</a>
                    <div class="navbar-nav">
                        <a class="nav-link active" href="./index.php">Home</a>
                        <div class="dropdown">
                            <button class="btn btn-success nav-link dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            Tambah
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a class="dropdown-item" role="button" href="./tambah.php" type="submit">Tambah Produk</a></li>
                                <li><a class="dropdown-item" role="button" href="./tambahcart.php" type="submit">Tambah Cart</a></li>
                            </ul>
                            </div>
                        </div>
                        <a class="nav-link active" href="./logstrans.php">Log History</a>
                    <div class="form-check form-switch">
                        <input class="form-check-input" onclick="darkmode()" type="checkbox"
                            id="flexSwitchCheckDefault">
                    </div>
                    <form class="d-flex ms-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="ms-3">
                        <a type="submit" href="./keranjang.php" class="btn btn-outline-light" role="button">Cart <i
                                class="fas fa-shopping-basket"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/32fb02-MB (3).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/bc398a-mb-.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/d8b6af-MB-A-.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="label">
        <div class="container">
            <div class="row">
                <div class="col-sm mt-3">
                    <div class="card bg-light text-black">
                        <img src="./img/label1.png" class="card-img ms-auto" alt="...">
                        <div class="card-img-overlay mt-2">
                            <h5 class="card-title">Harga 1 jtan Saja</h5>
                            <p class="card-text">Produktivitas Maksimum <br> Harga Terjangkau</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm mt-3">
                    <div class="card bg-light text-black">
                        <img src="../ujilvl3/img/label2.png" class="card-img ms-auto" alt="...">
                        <div class="card-img-overlay mt-2">
                            <h5 class="card-title">Laptop Bisnis</h5>
                            <p class="card-text">Ada Berbagai Laptop <br> Untuk Berbisnis</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm mt-3">
                    <div class="card bg-light text-black">
                        <img src="../ujilvl3/img/label3.png" class="card-img ms-auto" alt="...">
                        <div class="card-img-overlay mt-2">
                            <h5 class="card-title">Harga 50rban Saja</h5>
                            <p class="card-text">Mouse & <br> Keyboard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="produk">
        <div class="container mt-5">
            <div class="overflow-auto">
                <div class="row ms-5">
                    <h3 class="text-center mt-5" style="text-decoration: underline;">All Produk</h3>
                    <?php
                include 'koneksi.php';
                    $sql = "SELECT * FROM `allproduk`";
                    $query = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
                    <div class="col-sm">
                        <form action="simpan.php" method="POST">
                            <div class="card mt-4" style="width: 18rem;">
                                <img src="<?php echo $row["gambar"];?>" class="card-img-top">

                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php echo $row["nma_produk"];?></h5>
                                    <p class="card-text">Harga: Rp.
                                        <?php echo number_format($row["hrga_produk"], 0,',','.');?></p>
                                    <input class="form-control" type="number" name="qty"
                                        value="1" placeholder="Masukan Quantity"
                                        aria-label="default input example">

                                    <input class="form-control card-title" type="hidden" name="nama"
                                        value="<?php echo $row["nma_produk"];?>" aria-label="default input example">
                                    <input class="form-control card-title" type="hidden" name="gambar"
                                        value="<?php echo $row["gambar"];?>" aria-label="default input example">
                                    <input class="form-control card-text" type="hidden" name="harga"
                                        value="<?php echo $row["hrga_produk"];?>" aria-label="default input example">
                                        <a href="formedit3.php?id=<?php echo $row['id']; ?>"
                                            type="submit">
                                            <span style="color: green;"><i class="fas fa-edit"></i></span>
                                        </a>
                                    <input name="simpan" role="button" class="btn btn-warning mt-3" value="Add to Cart" type="submit">
                                    <a href="hapus3.php?id=<?php echo $row['id']; ?>"
                                            type="submit">
                                            <span style="color: red;"><i class="fas fa-trash"></i></span>
                                        </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <script>
        function darkmode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>

    <section id="footer">
        <div class="container-fluid mt-5">
            <div class="row text-light">
                <div class="col-md-5 mt-2">
                    <img src="img/logo.png" alt="">
                    <h5 class="text-center mt-3">Angkasa Raya <br> Uji Level </h5>
                    <div class="footer-text text-center mt-3">
                        <p><i class="fas fa-envelope-open"></i> Kirim E-mail</p>
                        <p><i class="fab fa-facebook-square"></i> Facebook Page</p>
                        <p><i class="fab fa-whatsapp-square"></i> Chat Whatsapp</p>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <h3>TENTANG KAMI</h3>
                    <div class="footer-text ms-1 mt-3">
                        <p>Ketentuan Layanan</p>
                        <p>Kebijakan Privasi</p>
                        <p>Konfirmasi Pembayaran</p>
                        <p>Testimoni</p>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <h3>HUBUNGI KAMI</h3>
                    <div class="footer-text ms-1 mt-3" id="kontak">
                        <p><i class="fas fa-phone-square-alt"></i> Telepon: +62 857 1879 6820</p>
                        <p><i class="far fa-comments"></i> SMS: +62 857 1879 6820</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hakcipta">
            Copyright &copy; 2021 - Angkasa Raya
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>