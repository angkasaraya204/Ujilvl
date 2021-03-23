-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2021 pada 13.27
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujilvl3`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_Allproduk` ()  BEGIN
SELECT *  FROM  allproduk;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `hapus_Allproduk` (IN `Idpro` INT)  BEGIN
DELETE FROM  allproduk WHERE id=Idpro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tambah_Allproduk` (IN `Nma_produk` VARCHAR(250), IN `Gambar` VARCHAR(250), IN `Hrga_produk` VARCHAR(250))  BEGIN
INSERT INTO allproduk (nma_produk, gambar, hrga_produk)
VALUES ( Nma_produk, Gambar, Hrga_produk);
END$$

--
-- Fungsi
--
CREATE DEFINER=`root`@`localhost` FUNCTION `CekTransaksiHapus` (`produk` VARCHAR(250)) RETURNS VARCHAR(250) CHARSET utf8mb4 BEGIN
DECLARE Nma_produk varchar(250);
SELECT transaksi.nma_produk INTO Nma_produk FROM transaksi
WHERE transaksi.idtrans = produk;
IF (Nma_produk) THEN
RETURN CONCAT ('produk', Nma_produk, 'Berhasil dihapus');
ELSE RETURN 'Produk ini belum dihapus';
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `allproduk`
--

CREATE TABLE `allproduk` (
  `id` int(11) NOT NULL,
  `nma_produk` varchar(250) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `hrga_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `allproduk`
--

INSERT INTO `allproduk` (`id`, `nma_produk`, `gambar`, `hrga_produk`) VALUES
(1, 'VIEWSONIC Curved Monitor 32 Inch VX3216', 'https://i.top4top.io/p_189305erf1.jpg', 4566000),
(2, 'Motherboard Mainboard Gigabyte B460M', 'https://j.top4top.io/p_1893e6wyh2.jpg', 1950000),
(3, 'SYNOLOGY Router RT2600ac', 'https://l.top4top.io/p_1893mo7gw4.jpg', 4150000),
(4, 'SAMSUNG Galaxy M21', 'https://c.top4top.io/p_1893nom3z7.jpg', 3200000),
(5, 'SAMSUNG Galaxy Watch Active 2 44mm', 'https://d.top4top.io/p_1893jnduq8.jpg', 5000000),
(6, 'SYNOLOGY DiskStation DS620slim', 'https://b.top4top.io/p_1893lj5ic6.jpg', 8975000),
(7, 'Eaton 5v 650VA', 'https://static.bmdstatic.com/pk/product/thumbnail/600fe828e1f74.jpg', 605000),
(8, 'Abbot panbio covid-19', 'https://static.bmdstatic.com/pk/product/thumbnail/5ff687fd8cc2c.jpg', 3662000),
(9, 'Multipro Vaccum', 'https://static.bmdstatic.com/pk/product/thumbnail/5e008349199d9.jpg', 4150000),
(10, 'Xiaomi MI 10', 'https://static.bmdstatic.com/pk/product/thumbnail/5ee6de5eb94d4.jpg', 9300000),
(11, 'philips Hue Go', 'https://static.bmdstatic.com/pk/product/thumbnail/5cde34c560efb.jpg', 1000000),
(12, 'Dell vostro 3400', 'https://static.bmdstatic.com/pk/product/thumbnail/5fe19e300c7b4.jpg', 9600000),
(13, 'Fibbit Sense', 'https://static.bmdstatic.com/pk/product/thumbnail/5f59da3f28c6a.jpg', 5800000),
(14, 'Sandisk Ultra MicroSDHC', 'https://static.bmdstatic.com/pk/product/thumbnail/5fdad9750a767.jpg', 71500),
(15, 'Steelseries Flux Headset', 'https://static.bmdstatic.com/pk/product/thumbnail/STEELSERIES-Flux-Headset-White-3317822533-201761911417.jpg', 1780000),
(16, 'Icare Thermo Checker', 'https://static.bmdstatic.com/pk/product/thumbnail/ICARE-Thermo-Checker-DT-PEN-White-Grey-SKU06016121-2016721143159.jpg', 1000000),
(17, 'Beureur Tapping Massager', 'https://static.bmdstatic.com/pk/product/thumbnail/5e098333a332d.jpg', 2300000),
(18, 'Sella Kursi Roda Standard', 'https://static.bmdstatic.com/pk/product/thumbnail/5d5230f976058.jpg', 1300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `orderid` int(11) NOT NULL,
  `nma_produk` varchar(250) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `hrga_produk` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`orderid`, `nma_produk`, `gambar`, `hrga_produk`, `quantity`) VALUES
(45, 'VIEWSONIC Curved Monitor 32 Inch VX3216', 'https://i.top4top.io/p_189305erf1.jpg', 4566000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `logstrans`
--

CREATE TABLE `logstrans` (
  `idlogs` int(11) NOT NULL,
  `nma_produk` varchar(250) DEFAULT NULL,
  `hrga_produk` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `pesan` varchar(250) DEFAULT NULL,
  `datemodif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modif` enum('INSERT','UPDATE','DELETE') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logstrans`
--

INSERT INTO `logstrans` (`idlogs`, `nma_produk`, `hrga_produk`, `quantity`, `pesan`, `datemodif`, `modif`) VALUES
(21, 'VIEWSONIC Curved Monitor 32 Inch VX3216', 4566000, 1, 'Data Berhasil Ditambah', '2021-03-15 05:52:17', 'INSERT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idtrans` int(11) NOT NULL,
  `nma_produk` varchar(250) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `hrga_produk` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`idtrans`, `nma_produk`, `gambar`, `hrga_produk`, `quantity`) VALUES
(96, 'VIEWSONIC Curved Monitor 32 Inch VX3216', 'https://i.top4top.io/p_189305erf1.jpg', 4566000, 1);

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `after_delete_transaksi` AFTER DELETE ON `transaksi` FOR EACH ROW BEGIN
DELETE FROM logstrans WHERE nma_produk=old.nma_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_transaksi` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
INSERT INTO logstrans (nma_produk, hrga_produk, quantity, pesan, modif)
VALUES (new.nma_produk, new.hrga_produk, new.quantity, CONCAT('Data Berhasil Ditambah'), "INSERT");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_transaksi` AFTER UPDATE ON `transaksi` FOR EACH ROW BEGIN
UPDATE logstrans SET hrga_produk=new.hrga_produk, quantity=new.quantity, pesan=CONCAT('Data Berhasil Diganti'), modiF="UPDATE"
WHERE nma_produk=new.nma_produk;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `allproduk`
--
ALTER TABLE `allproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`orderid`);

--
-- Indeks untuk tabel `logstrans`
--
ALTER TABLE `logstrans`
  ADD PRIMARY KEY (`idlogs`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtrans`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `allproduk`
--
ALTER TABLE `allproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `logstrans`
--
ALTER TABLE `logstrans`
  MODIFY `idlogs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtrans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
