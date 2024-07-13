-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 02:22 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesimk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tableuser`
--

CREATE TABLE `tableuser` (
  `id` int(11) NOT NULL,
  `NIP` int(9) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(6) NOT NULL,
  `ttl` date NOT NULL,
  `jkelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `ntlpn` varchar(13) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableuser`
--

INSERT INTO `tableuser` (`id`, `NIP`, `nama`, `password`, `ttl`, `jkelamin`, `alamat`, `email`, `level`, `ntlpn`, `foto`) VALUES
(1, 123456789, 'Romzi humam', '123456', '1998-07-09', 'Laki-laki', 'Jln. Sei Putih baru', 'romzih9@gmail.com', 'user', '089526098459', '271220170901531.jpg'),
(2, 888888888, '', '123456', '2017-12-11', 'Perempuan', 'asdadsada', 'aasdsadass', 'admin', '0', ''),
(3, 111111111, 'sukidran', '123456', '2017-12-22', 'Laki-laki', 'rumah@gmail.com', 'rumah@gmail.com', 'user', '080808080', '271220170910472.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tableuser`
--
ALTER TABLE `tableuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tableuser`
--
ALTER TABLE `tableuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
