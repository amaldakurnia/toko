-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 03:12 PM
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
  `id` int(11) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `warna` varchar(20) NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartku`
--

INSERT INTO `cartku` (`id`, `id_customer`, `produk`, `deskripsi`, `warna`, `bahan`, `harga`, `jumlah_barang`, `total`) VALUES
(5, '', 'a1.jpg', 'Jam Tangan', 'Emas', 'Emas', 475000, 4, 1900000),
(6, '', 'g1.jpg', 'Cincin S112', 'Emas', 'Emas', 800000, 2, 1600000);

-- --------------------------------------------------------

--
-- Table structure for table `checkoutku`
--

CREATE TABLE `checkoutku` (
  `id_checkout` varchar(20) NOT NULL,
  `id_order` varchar(20) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkoutku`
--

INSERT INTO `checkoutku` (`id_checkout`, `id_order`, `id_customer`, `id_produk`, `negara`, `provinsi`, `kabupaten`, `kode_pos`, `alamat_lengkap`) VALUES
('1', '1', '1', '1', 'Indonesia', 'Yogyakarta', 'Bantul', '55714', 'Sragan Trirenggo Bantul');

-- --------------------------------------------------------

--
-- Table structure for table `customerku`
--

CREATE TABLE `customerku` (
  `id_customer` varchar(20) NOT NULL,
  `nama_dpn` varchar(15) NOT NULL,
  `nama_blkng` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerku`
--

INSERT INTO `customerku` (`id_customer`, `nama_dpn`, `nama_blkng`, `email`, `password`, `tgl_lahir`) VALUES
('1', 'Nur', 'Amalia', 'nuramalia123@gmail.com', 'amalia12', '2018-07-31'),
('2', 'Mahrez', 'Adipashaa', 'mahrezadipasha124@gmail.com', 'Mahrez_20', '2018-07-20'),
('3', 'Amalda', 'Nia', 'amalda@gmail.com', 'Amalda_02', '2018-07-17'),
('4', 'Latif', 'Hendrawan', 'atep974@gmail.com', 'atep123', '1992-05-21'),
('5', 'a', 'b', 'cerrez124@gmail.com', 'cc', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriku`
--

CREATE TABLE `kategoriku` (
  `id_kategori` varchar(20) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoriku`
--

INSERT INTO `kategoriku` (`id_kategori`, `nm_kategori`) VALUES
('1', 'Fashion'),
('2', 'Watches'),
('3', 'Fine Jewelry'),
('4', 'Fashion Jewelry'),
('5', 'Engagement & Wedding'),
('6', 'Loose Diamond');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasiku`
--

CREATE TABLE `konfirmasiku` (
  `id_order` varchar(20) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_order` varchar(50) NOT NULL,
  `nominal` bigint(30) NOT NULL,
  `tgl_byr` date NOT NULL,
  `bayar_via` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `merkku`
--

CREATE TABLE `merkku` (
  `id_merk` varchar(20) NOT NULL,
  `nm_merk` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merkku`
--

INSERT INTO `merkku` (`id_merk`, `nm_merk`, `gambar`) VALUES
('1', 'Casio', '1.PNG'),
('2', 'Vida', '2.PNG'),
('3', 'Sport', '3.PNG'),
('4', 'Rolex', '4.PNG'),
('5', 'Rado', '5.PNG'),
('6', 'Seiko', '6.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `orderku`
--

CREATE TABLE `orderku` (
  `id_order` varchar(20) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `tgl_byr` date NOT NULL,
  `total_byr` bigint(30) NOT NULL,
  `bayar_via` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderku`
--

INSERT INTO `orderku` (`id_order`, `id_customer`, `id_produk`, `tgl_byr`, `total_byr`, `bayar_via`, `ket`) VALUES
('1', '1', '1', '2018-07-23', 700000, 'Indomaret', 'Belum Bayar'),
('2', '2', '2', '2018-07-20', 475000, 'ATM', 'Sudah Bayar'),
('3', '3', '3', '2018-07-26', 500000, 'Alfamart', 'Sudah Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `produkku`
--

CREATE TABLE `produkku` (
  `id_produk` varchar(20) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `bahan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `id_merk` varchar(11) NOT NULL,
  `harga` bigint(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkku`
--

INSERT INTO `produkku` (`id_produk`, `nm_produk`, `warna`, `bahan`, `deskripsi`, `gambar`, `id_kategori`, `id_merk`, `harga`, `stok`) VALUES
('2', 'Jam Tangan', 'Emas', 'Emas', 'Kualitas Bagus', 'a1.jpg', '2', '2', 475000, 6),
('3', 'Cincin C79', 'Silver', 'Perak dan Berlian', 'Kualitas Bagus', 'bootstrap-ring.png', '3', '3', 1000000, 5),
('4', 'Gelang', 'Emas', 'Emas', 'Bentuknya unik', 'b.jpg', '4', '1', 950000, 4),
('5', 'Cincin S112', 'Emas', 'Emas', 'Kualitas Bagus', 'g1.jpg', '5', '5', 800000, 3),
('6', 'Gelang C17', 'Biru, Oranye,Pink da', 'Perak dan Emas', 'Kualitas Bagus', 'c1.jpg', '6', '1', 300000, 3),
('7', 'Kalung Berlian', 'Emas', 'Emas & Berlian', 'Kualitas & Model', 'f.jpg', '6', '3', 750000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `userku`
--

CREATE TABLE `userku` (
  `id_user` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userku`
--

INSERT INTO `userku` (`id_user`, `username`, `password`) VALUES
('2', 'devaa', 'dev47'),
('3', 'mita', 'mt32'),
('4', 'devy', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartku`
--
ALTER TABLE `cartku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkoutku`
--
ALTER TABLE `checkoutku`
  ADD PRIMARY KEY (`negara`);

--
-- Indexes for table `customerku`
--
ALTER TABLE `customerku`
  ADD PRIMARY KEY (`id_customer`);

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
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `id_produk` (`id_produk`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
