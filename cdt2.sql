-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 08:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `no_pel` int(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `kelompok` varchar(10) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tidakhadir` varchar(20) DEFAULT NULL,
  `kehadiran` varchar(50) DEFAULT NULL,
  `perilaku1` varchar(50) DEFAULT NULL,
  `perilaku2` varchar(50) DEFAULT NULL,
  `atribut1` varchar(50) DEFAULT NULL,
  `atribut2` varchar(50) DEFAULT NULL,
  `Total` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`no_pel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `no_pel` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
