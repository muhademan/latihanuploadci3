-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 02:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_news`
--
CREATE DATABASE IF NOT EXISTS `ci_news` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ci_news`;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `IdBerita` int(5) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Isi` text NOT NULL,
  `Gambar` varchar(25) NOT NULL,
  `file` text NOT NULL,
  `thumail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`IdBerita`, `Judul`, `Isi`, `Gambar`, `file`, `thumail`) VALUES
(1, 'Acara Hari ini', 'Sungguh menyenangkan sekali acara hari ini saya sagngat suka. Sungguh menyenangkan sekali acara hari ini saya sagngat suka', '', '', ''),
(2, 'Berita Hari ini', 'ddhjshdjshdhshdh Sungguh menyenangkan sekali acara hari ini saya sagngat suka. Sungguh menyenangkan sekali acara hari ini saya sagngat suka', '', '', ''),
(3, 'Top News', 'hjdjhdjdhahdahdd Sungguh menyenangkan sekali acara hari ini saya sagngat suka. Sungguh menyenangkan sekali acara hari ini saya sagngat sukasjjsjsjsjsjsjaiuiu ucucudyyls', '', '', ''),
(4, 'Populer Sekali', 'hgdhgdhdgsghhhhhaaahhhcc Sungguh menyenangkan sekali acara hari ini saya sagngat suka. Sungguh menyenangkan sekali acara hari ini saya sagngat sukaSungguh menyenangkan sekali acara hari ini saya sagngat suka. Sungguh menyenangkan sekali acara hari ini saya sagngat suka', '', '', ''),
(8, 'test', '', 'da0d9b4508deb898ab196e2a2', '', 'a1c94357ad06ccd89f8651e927f1509d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `IdBerkas` int(5) NOT NULL,
  `NamaBerkas` varchar(25) NOT NULL,
  `FileBerkas` text NOT NULL,
  `size` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`IdBerkas`, `NamaBerkas`, `FileBerkas`, `size`) VALUES
(1, 'keterangan', '9c2f7a4444c0b9f6396a7b4cb10a67ba.jpg', '48841'),
(2, 'keterangan', '89d0208f2fceca449989a3a0dabb766a.jpg', '48841'),
(3, 'keterangan', '18a53fb0cfa8394c078cffad290fe2da.jpg', '33683'),
(4, 'keterangan', 'fb6b76209f6ef767f0b08e2711dc8b2c.jpg', '92555'),
(5, 'keterangan', '981bcdfbae7fd680f45744fb651f8f9a.jpg', '12049'),
(6, 'keterangan', '41b94319c90b2fc63ae38d7acfe7f1c7.jpg', '7634'),
(7, 'keterangan', '60eca8c372f88a0c0ea9b9ea9e485000.jpg', '84458'),
(8, 'keterangan', '5f2dc3fa38e1cf229885e6496c8db9df.jpg', '484388'),
(9, 'keterangan', 'ea785d046ab1191755c3926b9f4c90d0.jpg', '272933'),
(10, 'keterangan', '73a1beeaffc0379c323c5ff3f7d57878.jpg', '114154'),
(11, 'keterangan', 'a6f803bd3e6ea0af6ef70d620a14169e.jpg', '108260');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`IdBerita`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`IdBerkas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `IdBerita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `IdBerkas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
