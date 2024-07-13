-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2014 at 04:12 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kalendar_agenda`
--

CREATE TABLE IF NOT EXISTS `t_kalendar_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_acara` date NOT NULL,
  `tgl_kalendar` varchar(10) NOT NULL,
  `subjek` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_kalendar_agenda`
--

INSERT INTO `t_kalendar_agenda` (`id`, `tgl_acara`, `tgl_kalendar`, `subjek`, `keterangan`) VALUES
(1, '2014-12-05', '5-12-2014', 'Resepsi Pernikahan Dirut', 'Resepsi Pernikahan Dirut PT. BUM\r\n\r\nBalai Samudera \r\nKelapa Gading'),
(2, '2014-12-08', '8-12-2014', 'Operasi Plastik', 'Agus operasi plastik biar muka mirip Nicholas Saputra');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
