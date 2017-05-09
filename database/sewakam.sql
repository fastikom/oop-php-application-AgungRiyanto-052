-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 10:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewakam`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `id` int(3) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamera`
--

INSERT INTO `kamera` (`id`, `merk`, `tipe`, `harga`) VALUES
(101, 'Canon', 'D3000', 120000),
(102, 'Canon', 'D5500', 150000),
(103, 'Nikon', 'N3500', 135000),
(104, 'Nikon', 'N5300', 155000),
(105, 'Sony', 'S505N', 128000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
