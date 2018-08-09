-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 06:25 AM
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

--
-- Dumping data for table `cartku`
--

INSERT INTO `cartku` (`id_cart`, `id_customer`, `id_produk`, `produk`, `deskripsi`, `warna`, `harga`, `jumlah_barang`, `total`) VALUES
(28, 2, 2, 'c1.jpg', 'Gelang C17', 'Biru, Oranye,Pink da', 300000, 5, 1500000),
(44, 3, 3, 'bootstrap-ring.png', 'Cincin C79', 'Silver', 1000000, 4, 4000000),
(47, 0, 0, 'b.jpg', 'Gelang', 'Emas', 950000, 1, 950000);

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
  `bayar_via` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkoutku`
--

INSERT INTO `checkoutku` (`id_checkout`, `kode_order`, `id_customer`, `nm_produk`, `jumlah_barang`, `total`, `negara`, `provinsi`, `kabupaten`, `kode_pos`, `alamat_lengkap`, `bayar_via`) VALUES
(2, 0, 0, '', 0, 0, 'Indonesia', 'Banten', 'Tangerang', '15370', 'Kp.Megu Cisoka Tangerang Banten', ''),
(3, 0, 0, '', 0, 0, 'Singapura', 'Sedney', 'Tangerang', '15370', 'Sragan Trirenggo Bantul', '');

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
(1, 'Nur', 'Amalia', 'nuramalia123@gmail.com', 'amalia12', '2018-07-31', 'BCA', '0508765321'),
(2, 'Mahrez', 'Adipashaa', 'mahrezadipasha124@gmail.com', 'Mahrez_20', '2018-07-20', 'CIMB NIAGA', '0708651245'),
(3, 'Amalda', 'Nia', 'amalda@gmail.com', 'Amalda_02', '2018-07-17', 'BNI', '0506427066'),
(4, 'Latif', 'Hendrawan', 'atep974@gmail.com', 'atep123', '1992-05-21', 'CIMB NIAGA', '0700213476'),
(5, 'Cerilo', 'Diprasta', 'cerrez124@gmail.com', 'cerilo_15', '2018-07-19', 'BNI', '0705411725'),
(6, 'Yaskun', 'Amalda', 'amaldakurnia@gmail.com', '023321', '2018-08-07', 'BNi', '506274571');

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
(1, 1, 'About Us', 'I''m a paragraph. Click here to add your own text and edit me.'),
(4, 4, 'Features Products', 'Kualitas Bagus');

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
  `deskripsi` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` int(30) NOT NULL,
  `share1` varchar(50) NOT NULL,
  `share2` varchar(50) NOT NULL,
  `share3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasiku`
--

CREATE TABLE `konfirmasiku` (
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_order` int(11) NOT NULL,
  `nominal` bigint(30) NOT NULL,
  `tgl_byr` date NOT NULL,
  `bayar_via` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasiku`
--

INSERT INTO `konfirmasiku` (`id_order`, `id_produk`, `nama`, `kode_order`, `nominal`, `tgl_byr`, `bayar_via`, `ket`) VALUES
(1, 1, 'gelang', 2, 479000, '2018-08-14', 'BCA', 'bn\r\n');

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
(1, 1, '2018-07-23', 700000, 'Belum Bayar'),
(13, 4, '2018-08-09', 0, 'Belum bayar'),
(14, 4, '2018-08-09', 0, 'Belum bayar'),
(16, 4, '2018-08-09', 0, 'Belum bayar');

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
-- Indexes for table `konfirmasiku`
--
ALTER TABLE `konfirmasiku`
  ADD PRIMARY KEY (`id_order`),
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
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `checkoutku`
--
ALTER TABLE `checkoutku`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
