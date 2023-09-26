-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 10:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_april_sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Anis Rohmadi', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `olahraga`
--

CREATE TABLE `olahraga` (
  `id_olahraga` int(11) NOT NULL,
  `id_ketegori` int(11) NOT NULL,
  `series` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `merk` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olahraga`
--

INSERT INTO `olahraga` (`id_olahraga`, `id_ketegori`, `series`, `gambar`, `merk`, `warna`, `ukuran`, `harga`, `stok`) VALUES
(11, 11, ' raketa', '20170217164334.jpg', '  yonex', 'hitam', ' 100', ' 1000000', '70'),
(22, 22, ' raketb', '20170217164334.jpg', '  yonex', 'biru', ' 100', ' 1000000', '70'),
(33, 33, ' raketc', '20170217164334.jpg', '  yonex', 'hitam', ' 100', ' 1000000', '70'),
(44, 44, ' raketd', '20170217164334.jpg', '  yonex', 'merah', ' 100', ' 1000000', '70'),
(55, 55, ' rakete', '20170217164334.jpg', '  yonex', 'hitam', ' 100', ' 1000000', '70'),
(66, 22, ' raketf', '20170217164334.jpg', '  yonex', 'kuning', ' 100', ' 1000000', '70'),
(77, 33, ' raketg', '20170217164334.jpg', '  yonex', 'hitam', ' 100', ' 1000000', '70'),
(88, 22, ' raketh', '20170217164334.jpg', '  yonex', 'hijau', ' 100', ' 1000000', '70'),
(89, 56, ' raketi', '20170217164334.jpg', '  yonex', 'hitam', ' 100', ' 1000000', '70');

-- --------------------------------------------------------

--
-- Table structure for table `chekout`
--

CREATE TABLE `chekout` (
  `id_chekout` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_tlp` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status_terima` enum('belum di terima','sudah diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_pembeli`, `nama`, `username`, `password`) VALUES
(11, 'Pembeli1', 'Pembeli1', 'Pembeli1'),
(22, 'Pembeli2', 'Pembeli2', 'Pembeli2'),
(30, 'Aprilia Putri', 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_ketegori` int(11) NOT NULL,
  `kategori` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_ketegori`, `kategori`) VALUES
(11, 'Olahraga Raket'),
(22, 'Olahraga Air'),
(33, 'Olahraga Sepeda'),
(44, 'Olahraa Gym dan Fitness'),
(56, 'Olahraga Outdoor'),
(57, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_olahraga` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_pembeli`, `id_olahraga`, `qty`, `harga`, `total_harga`, `total_bayar`) VALUES
(16, 30, 11, '3', ' 1000000', '3000000', ''),
(17, 30, 22, '4', '2000000', '8000000', ''),
(38, 11, 33, '44', '500000', '22000000', ''),
(42, 22, 44, '5', '5000000', '25000000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `olahraga`
--
ALTER TABLE `olahraga`
  ADD PRIMARY KEY (`id_olahraga`);

--
-- Indexes for table `chekout`
--
ALTER TABLE `chekout`
  ADD PRIMARY KEY (`id_chekout`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_ketegori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `olahraga`
--
ALTER TABLE `olahraga`
  MODIFY `id_olahraga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `chekout`
--
ALTER TABLE `chekout`
  MODIFY `id_chekout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_ketegori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
