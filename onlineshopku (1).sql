-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 11:05 AM
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
-- Table structure for table `adminku`
--

CREATE TABLE `adminku` (
  `id_admin` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminku`
--

INSERT INTO `adminku` (`id_admin`, `email`, `password`) VALUES
('2', 'mahrez@gmail.com', 'Ceriloo_15'),
('3', 'atep974@gmail.com', 'atep123'),
('4', 'andra31@gmail.com', 'hafidz22');

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
('2', 'Mahrez', 'Adipashaa', 'mahrezadipasha124@gmail.com', 'Mahrez_20', '2018-07-20'),
('203', 'Andra', 'Saputra', 'Andra123@gmail.com', 'Andraa_15', '2018-07-25'),
('3', 'Amalda', 'Nia', 'amalda@gmail.com', 'Amalda_02', '2018-07-17'),
('4', 'Latif', 'Hendrawan', 'atep974@gmail.com', 'atep123', '1992-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsiproduk`
--

CREATE TABLE `deskripsiproduk` (
  `id_produk` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailbayarku`
--

CREATE TABLE `detailbayarku` (
  `id_detbyr` varchar(20) NOT NULL,
  `id_bayar` varchar(20) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('1', 'elektronikk'),
('2', 'fashion'),
('3', 'aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `merkku`
--

CREATE TABLE `merkku` (
  `id_merk` varchar(20) NOT NULL,
  `nm_merk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merkku`
--

INSERT INTO `merkku` (`id_merk`, `nm_merk`) VALUES
('11', 'vivo'),
('12', 'oppo');

-- --------------------------------------------------------

--
-- Table structure for table `orderku`
--

CREATE TABLE `orderku` (
  `id_order` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `tgl_byr` date NOT NULL,
  `ket` text NOT NULL,
  `bayar_via` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaranku`
--

CREATE TABLE `pembayaranku` (
  `id_bayar` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `jml_produk` bigint(10) NOT NULL,
  `total_byr` bigint(30) NOT NULL,
  `bayar_via` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produkku`
--

CREATE TABLE `produkku` (
  `id_produk` varchar(20) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `gambar` blob NOT NULL,
  `bahan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkku`
--

INSERT INTO `produkku` (`id_produk`, `nm_produk`, `warna`, `kategori`, `merk`, `gambar`, `bahan`) VALUES
('10', 'dress', 'cream', 'busana', 'azzahra fashion', '', 'syfon'),
('11', 'jilbab', 'Hitam', 'busana', 'saudi', '', 'satin');

-- --------------------------------------------------------

--
-- Table structure for table `profilku`
--

CREATE TABLE `profilku` (
  `id_user` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `hp` int(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminku`
--
ALTER TABLE `adminku`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customerku`
--
ALTER TABLE `customerku`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `deskripsiproduk`
--
ALTER TABLE `deskripsiproduk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `detailbayarku`
--
ALTER TABLE `detailbayarku`
  ADD PRIMARY KEY (`id_detbyr`),
  ADD UNIQUE KEY `id_bayar` (`id_bayar`);

--
-- Indexes for table `kategoriku`
--
ALTER TABLE `kategoriku`
  ADD PRIMARY KEY (`id_kategori`);

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
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_produk` (`id_produk`);

--
-- Indexes for table `pembayaranku`
--
ALTER TABLE `pembayaranku`
  ADD PRIMARY KEY (`id_bayar`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_produk` (`id_produk`),
  ADD UNIQUE KEY `bayar_via` (`bayar_via`);

--
-- Indexes for table `produkku`
--
ALTER TABLE `produkku`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `profilku`
--
ALTER TABLE `profilku`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profilku`
--
ALTER TABLE `profilku`
  ADD CONSTRAINT `profilku_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `customerku` (`id_customer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
