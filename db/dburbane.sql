-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 08:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dburbane`
--

-- --------------------------------------------------------

--
-- Table structure for table `jual1`
--

CREATE TABLE `jual1` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jual1`
--

INSERT INTO `jual1` (`id`, `nama`, `jumlah`, `harga`, `total`) VALUES
(2, 'nike', 1000, 200000, 200000000),
(3, 'adidas', 6, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `penjualanbarang`
--

CREATE TABLE `penjualanbarang` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualanbarang`
--

INSERT INTO `penjualanbarang` (`id`, `nama`, `jumlah`, `harga`, `total`) VALUES
(0, 0, 4, 8, 32);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'yoga', '$2y$10$WgUPYaKbgJNdrb7hrmBwjOFz9Nt5EGXkMBGvF.i2X.OTXo4ZoK1V.'),
(2, 'admin', '$2y$10$USQ1zG8ptD.eKj7CYr1SGOJ5KW/RwigRkKsj2r/X7bh1TEdKAJFPy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jual1`
--
ALTER TABLE `jual1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualanbarang`
--
ALTER TABLE `penjualanbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jual1`
--
ALTER TABLE `jual1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
