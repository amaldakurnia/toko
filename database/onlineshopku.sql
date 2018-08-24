-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 04:15 AM
-- Server version: 10.1.9-MariaDB
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
-- Table structure for table `cartku`
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

-- --------------------------------------------------------

--
-- Table structure for table `checkoutku`
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
-- Dumping data for table `checkoutku`
--

INSERT INTO `checkoutku` (`id_checkout`, `kode_order`, `id_customer`, `nm_produk`, `jumlah_barang`, `total`, `negara`, `provinsi`, `kabupaten`, `kode_pos`, `alamat_lengkap`, `bayar_via`, `no_rek`) VALUES
(14, 15, 4, 'Cincin C79', 2, 2000000, '', '', '', '', '', 'ATM', '0773456721'),
(15, 15, 4, 'Jam Tangan', 2, 950000, '', '', '', '', '', 'ATM', '0773456721'),
(16, 16, 6, 'Cincin C79', 2, 2000000, 'Malaysia', 'Banten', 'Sleman', '55720', 'Kp.Megu Cisoka Tangerang Banten', 'ATM', '0773456721');

-- --------------------------------------------------------

--
-- Table structure for table `customerku`
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
-- Dumping data for table `customerku`
--

INSERT INTO `customerku` (`id_customer`, `nama_dpn`, `nama_blkng`, `email`, `password`, `tgl_lahir`, `rek`, `no_rek`) VALUES
(4, 'Latif', 'Hendrawan', 'atep974@gmail.com', 'atep123', '1992-05-21', 'CIMB NIAGA', '0700213476'),
(5, 'Amalia', 'Rahma', 'nuramalia123@gmail.com', 'amalia12', '2018-07-31', 'BNi', '0506427066'),
(6, 'Yaskun', 'Amalda', 'amaldakurnia@gmail.com', 'yaskun02', '2018-08-07', 'BNi', '5062745712');

-- --------------------------------------------------------

--
-- Table structure for table `halamanku`
--

CREATE TABLE `halamanku` (
  `id_halaman` int(5) NOT NULL,
  `id_menu` int(5) NOT NULL,
  `judul_halaman` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halamanku`
--

INSERT INTO `halamanku` (`id_halaman`, `id_menu`, `judul_halaman`, `deskripsi`) VALUES
(1, 1, 'About Us', 'I''m a paragraph. Click here to add your own text and edit me.');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriku`
--

CREATE TABLE `kategoriku` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoriku`
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
-- Table structure for table `konfigwebku`
--

CREATE TABLE `konfigwebku` (
  `id_konfig` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL,
  `share1` varchar(50) NOT NULL,
  `share2` varchar(50) NOT NULL,
  `share3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigwebku`
--

INSERT INTO `konfigwebku` (`id_konfig`, `nama`, `deskripsi`, `email`, `tlp`, `share1`, `share2`, `share3`) VALUES
(1, 'www.onlineshopcerrezdistroo.com', ' CerrezStore adalah toko online yang menyediakan berbagai produk.', 'cerrezstoree31@gmail.com', '0800 1234 678', 'https://facebook.com', 'https://www.instagram.com', 'https://www.twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasiku`
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
-- Dumping data for table `konfirmasiku`
--

INSERT INTO `konfirmasiku` (`kode_order`, `id_customer`, `id_produk`, `nama`, `nominal`, `tgl_byr`, `bayar_via`, `ket`) VALUES
(1, 1, 2, 'andra', 479000, '2018-08-06', 'BCA', 'Lunas\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kontakku`
--

CREATE TABLE `kontakku` (
  `id` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `info` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL,
  `fax` varchar(40) NOT NULL,
  `web` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontakku`
--

INSERT INTO `kontakku` (`id`, `alamat`, `info`, `tlp`, `fax`, `web`) VALUES
(1, '2601 Mission St.<br/> 			Bantul, Yogyakarta 55714', 'info@cerilodiprasta.com', 'Tel 123-456-6780', 'Fax 123-456-5679', 'web:www.cerilodiprasta.com');

-- --------------------------------------------------------

--
-- Table structure for table `menuku`
--

CREATE TABLE `menuku` (
  `id_menu` int(11) NOT NULL,
  `nm_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuku`
--

INSERT INTO `menuku` (`id_menu`, `nm_menu`) VALUES
(1, 'Home'),
(2, 'List View'),
(3, 'Grid View'),
(4, 'Three Column'),
(5, 'Four Column'),
(6, 'Rekonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `merkku`
--

CREATE TABLE `merkku` (
  `id_merk` int(11) NOT NULL,
  `nm_merk` varchar(50) NOT NULL,
  `gambarr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merkku`
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
-- Table structure for table `orderku`
--

CREATE TABLE `orderku` (
  `kode_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `total` bigint(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderku`
--

INSERT INTO `orderku` (`kode_order`, `id_customer`, `tgl_order`, `total`, `ket`) VALUES
(14, 4, '2018-08-18', 2950000, 'Belum bayar'),
(15, 4, '2018-08-18', 2950000, 'Belum bayar'),
(16, 6, '2018-08-18', 2000000, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `produkku`
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
-- Dumping data for table `produkku`
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
-- Table structure for table `userku`
--

CREATE TABLE `userku` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userku`
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
-- Indexes for table `konfigwebku`
--
ALTER TABLE `konfigwebku`
  ADD PRIMARY KEY (`id_konfig`);

--
-- Indexes for table `konfirmasiku`
--
ALTER TABLE `konfirmasiku`
  ADD PRIMARY KEY (`kode_order`),
  ADD UNIQUE KEY `id_produk` (`id_produk`),
  ADD UNIQUE KEY `bayar_via` (`bayar_via`);

--
-- Indexes for table `kontakku`
--
ALTER TABLE `kontakku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuku`
--
ALTER TABLE `menuku`
  ADD PRIMARY KEY (`id_menu`);

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
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `checkoutku`
--
ALTER TABLE `checkoutku`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `customerku`
--
ALTER TABLE `customerku`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `halamanku`
--
ALTER TABLE `halamanku`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategoriku`
--
ALTER TABLE `kategoriku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kontakku`
--
ALTER TABLE `kontakku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menuku`
--
ALTER TABLE `menuku`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `merkku`
--
ALTER TABLE `merkku`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderku`
--
ALTER TABLE `orderku`
  MODIFY `kode_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
