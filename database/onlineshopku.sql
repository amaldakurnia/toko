-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Agu 2018 pada 05.47
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshopku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cartku`
--

CREATE TABLE `cartku` (
  `id_cart` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `warna` varchar(20) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cartku`
--

INSERT INTO `cartku` (`id_cart`, `id_customer`, `id_produk`, `produk`, `deskripsi`, `warna`, `harga`, `jumlah_barang`, `total`) VALUES
(54, 1, 2, 'a1.jpg', 'Jam Tangan', 'Emas', 475000, 1, 475000),
(55, 1, 6, 'c1.jpg', 'Gelang C17', 'Biru, Oranye,Pink da', 300000, 1, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkoutku`
--

CREATE TABLE `checkoutku` (
  `id_checkout` int(11) NOT NULL,
  `kode_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `nm_produk` varchar(20) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total` bigint(10) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `bayar_via` varchar(20) NOT NULL,
  `no_rek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `checkoutku`
--

INSERT INTO `checkoutku` (`id_checkout`, `kode_order`, `id_customer`, `nm_produk`, `jumlah_barang`, `total`, `negara`, `provinsi`, `kabupaten`, `kode_pos`, `alamat_lengkap`, `bayar_via`, `no_rek`) VALUES
(4, 35, 1, 'Jam Tangan', 1, 0, 'Indonesia', 'Sedney', 'Tangerang', '15370', 'Kp.Megu Cisoka Tangerang Banten', 'Indomaret', ''),
(5, 35, 1, 'Gelang C17', 1, 0, 'Indonesia', 'Sedney', 'Tangerang', '15370', 'Kp.Megu Cisoka Tangerang Banten', 'Indomaret', ''),
(8, 42, 1, 'Jam Tangan', 1, 0, '', '', '', '', '', '-', ''),
(9, 42, 1, 'Gelang C17', 1, 0, '', '', '', '', '', '-', ''),
(10, 43, 1, 'Jam Tangan', 1, 0, '', '', '', '', '', '-', ''),
(11, 43, 1, 'Gelang C17', 1, 0, '', '', '', '', '', '-', ''),
(12, 44, 1, 'Jam Tangan', 1, 0, '', '', '', '', '', '-', ''),
(13, 44, 1, 'Gelang C17', 1, 0, '', '', '', '', '', '-', ''),
(14, 45, 1, 'Jam Tangan', 1, 0, '', '', '', '', '', '-', ''),
(15, 45, 1, 'Gelang C17', 1, 0, '', '', '', '', '', '-', ''),
(16, 46, 1, 'Jam Tangan', 1, 0, '', '', '', '', '', '-', ''),
(17, 46, 1, 'Gelang C17', 1, 0, '', '', '', '', '', '-', ''),
(18, 47, 1, 'Jam Tangan', 1, 0, '', '', '', '', '', 'Indomaret', ''),
(19, 47, 1, 'Gelang C17', 1, 0, '', '', '', '', '', 'Indomaret', ''),
(20, 48, 1, 'Jam Tangan', 1, 0, '', '', '', '', '', '-', ''),
(21, 48, 1, 'Gelang C17', 1, 0, '', '', '', '', '', '-', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customerku`
--

CREATE TABLE `customerku` (
  `id_customer` int(11) NOT NULL,
  `nama_dpn` varchar(15) NOT NULL,
  `nama_blkng` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `rek` varchar(10) NOT NULL,
  `no_rek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customerku`
--

INSERT INTO `customerku` (`id_customer`, `nama_dpn`, `nama_blkng`, `email`, `password`, `tgl_lahir`, `rek`, `no_rek`) VALUES
(1, 'Nur', 'Amalia', 'nuramalia123@gmail.com', 'amalia12', '2018-07-31', 'BCA', '0508765321'),
(4, 'Latif', 'Hendrawan', 'atep974@gmail.com', 'atep123', '1992-05-21', 'CIMB NIAGA', '0700213476'),
(6, 'Yaskun', 'Amalda', 'amaldakurnia@gmail.com', 'yaskun02', '2018-08-07', 'BNi', '5062745712');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halamanku`
--

CREATE TABLE `halamanku` (
  `id_halaman` int(5) NOT NULL,
  `id_menu` int(5) NOT NULL,
  `judul_halaman` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `halamanku`
--

INSERT INTO `halamanku` (`id_halaman`, `id_menu`, `judul_halaman`, `deskripsi`) VALUES
(1, 1, 'About Us', 'I''m a paragraph. Click here to add your own text and edit me.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriku`
--

CREATE TABLE `kategoriku` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategoriku`
--

INSERT INTO `kategoriku` (`id_kategori`, `nm_kategori`) VALUES
(1, 'Fashion'),
(2, 'Watches'),
(3, 'Fine Jewelry'),
(4, 'Fashion Jewelry'),
(5, 'Engagement & Wedding'),
(6, 'Men''s Jewelry'),
(7, 'Vintage & Antique'),
(8, 'Loose Diamonds'),
(9, 'Loose Beads');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigwebku`
--

CREATE TABLE `konfigwebku` (
  `id_konfig` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` int(30) NOT NULL,
  `share1` varchar(50) NOT NULL,
  `share2` varchar(50) NOT NULL,
  `share3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasiku`
--

CREATE TABLE `konfirmasiku` (
  `kode_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nominal` bigint(30) NOT NULL,
  `tgl_byr` date NOT NULL,
  `bayar_via` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasiku`
--

INSERT INTO `konfirmasiku` (`kode_order`, `id_customer`, `id_produk`, `nama`, `nominal`, `tgl_byr`, `bayar_via`, `ket`) VALUES
(1, 1, 2, 'andra', 479000, '2018-08-06', 'BCA', 'Lunas\r\n'),
(4, 1, 9, '', 479000, '2018-08-10', 'ATM BNI', 'Belum bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merkku`
--

CREATE TABLE `merkku` (
  `id_merk` int(11) NOT NULL,
  `nm_merk` varchar(50) NOT NULL,
  `gambarr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merkku`
--

INSERT INTO `merkku` (`id_merk`, `nm_merk`, `gambarr`) VALUES
(1, 'Casio', '1.png'),
(2, 'Vida', '2.png'),
(3, 'Sport', '3.png'),
(4, 'Rolex', '4.png'),
(5, 'Rado', '5.png'),
(6, 'Seiko', '6.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderku`
--

CREATE TABLE `orderku` (
  `kode_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `total` bigint(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderku`
--

INSERT INTO `orderku` (`kode_order`, `id_customer`, `tgl_order`, `total`, `ket`) VALUES
(1, 1, '2018-07-23', 700000, 'Belum Bayar'),
(35, 1, '2018-08-09', 0, 'Belum bayar'),
(42, 1, '2018-08-10', 0, 'Belum bayar'),
(43, 1, '2018-08-10', 0, 'Belum bayar'),
(44, 1, '2018-08-10', 0, 'Belum bayar'),
(45, 1, '2018-08-10', 0, 'Belum bayar'),
(46, 1, '2018-08-10', 0, 'Belum bayar'),
(47, 1, '2018-08-10', 0, 'Belum bayar'),
(48, 1, '2018-08-10', 0, 'Belum bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produkku`
--

CREATE TABLE `produkku` (
  `id_produk` int(11) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `bahan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `harga` bigint(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produkku`
--

INSERT INTO `produkku` (`id_produk`, `nm_produk`, `warna`, `bahan`, `deskripsi`, `gambar`, `id_kategori`, `id_merk`, `harga`, `stok`) VALUES
(2, 'Jam Tangan', 'Emas', 'Emas', 'Kualitas Bagus', 'a1.jpg', 2, 1, 475000, 6),
(3, 'Cincin C79', 'Silver', 'Perak dan Berlian', 'Kualitas Bagus', 'bootstrap-ring.png', 3, 2, 1000000, 5),
(4, 'Gelang', 'Emas', 'Emas', 'Bentuknya unik', 'b.jpg', 4, 3, 950000, 4),
(5, 'Cincin S112', 'Emas', 'Emas', 'Kualitas Bagus', 'g1.jpg', 5, 4, 800000, 3),
(6, 'Gelang C17', 'Biru, Oranye,Pink da', 'Perak dan Emas', 'Kualitas Bagus', 'c1.jpg', 6, 5, 300000, 3),
(7, 'Kalung Berlian', 'Emas', 'Emas & Berlian', 'Kualitas & Model', 'f.jpg', 6, 6, 750000, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `userku`
--

CREATE TABLE `userku` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `userku`
--

INSERT INTO `userku` (`id_user`, `username`, `password`) VALUES
(2, 'devaa', 'dev47'),
(3, 'mita', 'mt32'),
(4, 'devy', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartku`
--
ALTER TABLE `cartku`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `checkoutku`
--
ALTER TABLE `checkoutku`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `customerku`
--
ALTER TABLE `customerku`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `halamanku`
--
ALTER TABLE `halamanku`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `kategoriku`
--
ALTER TABLE `kategoriku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfirmasiku`
--
ALTER TABLE `konfirmasiku`
  ADD PRIMARY KEY (`kode_order`),
  ADD UNIQUE KEY `id_produk` (`id_produk`),
  ADD UNIQUE KEY `bayar_via` (`bayar_via`);

--
-- Indexes for table `merkku`
--
ALTER TABLE `merkku`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `orderku`
--
ALTER TABLE `orderku`
  ADD PRIMARY KEY (`kode_order`);

--
-- Indexes for table `produkku`
--
ALTER TABLE `produkku`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `userku`
--
ALTER TABLE `userku`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartku`
--
ALTER TABLE `cartku`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `checkoutku`
--
ALTER TABLE `checkoutku`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `customerku`
--
ALTER TABLE `customerku`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `halamanku`
--
ALTER TABLE `halamanku`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategoriku`
--
ALTER TABLE `kategoriku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `merkku`
--
ALTER TABLE `merkku`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderku`
--
ALTER TABLE `orderku`
  MODIFY `kode_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `produkku`
--
ALTER TABLE `produkku`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `userku`
--
ALTER TABLE `userku`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
