-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 05:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tskripsi`
--

CREATE TABLE `tskripsi` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pemb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tskripsi`
--

INSERT INTO `tskripsi` (`nim`, `nama`, `judul`, `pemb`) VALUES
('3217001', 'Nama Lengkap', 'Judul Skripsi', 'Nama Pembimbing'),
('3217035', 'Hengky Sufriadi', 'Perancangan Model Integrasi Sistem', 'Mina Ismu Rahayu, M.T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tskripsi`
--
ALTER TABLE `tskripsi`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
