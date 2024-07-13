-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 03:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai2`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_anak`
--

CREATE TABLE `data_anak` (
  `id_pegawai` int(11) NOT NULL,
  `jumlah_anak` varchar(11) NOT NULL,
  `tunjangan_anak` int(11) NOT NULL,
  `nmstatusk` char(50) NOT NULL,
  `tunjangan_suami_istri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anak`
--

INSERT INTO `data_anak` (`id_pegawai`, `jumlah_anak`, `tunjangan_anak`, `nmstatusk`, `tunjangan_suami_istri`) VALUES
(1, '0', 0, 'Duda', 0),
(18, '2', 318210, 'Menikah', 318210),
(19, '0', 0, 'Menikah', 208150),
(22, '>2', 345700, 'Menikah', 345700),
(23, '0', 0, 'Lajang', 0),
(26, '1', 134810, 'Menikah', 269620),
(27, '0', 0, 'Lajang', 0),
(30, '0', 0, 'Lajang', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_gaji`
--

CREATE TABLE `data_gaji` (
  `id_gaji` int(11) NOT NULL,
  `nama_jabatan` enum('Pegawai','Tenaga Pengajar','Guru Besar','Lektor Kepala','Asisten Ahli') NOT NULL,
  `status_pegawai` enum('Tetap','Kontrak','Magang') NOT NULL,
  `tunjangan_jabatan` int(20) NOT NULL,
  `tunjangan_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_gaji`
--

INSERT INTO `data_gaji` (`id_gaji`, `nama_jabatan`, `status_pegawai`, `tunjangan_jabatan`, `tunjangan_dosen`) VALUES
(2, 'Pegawai', 'Tetap', 1000000, 0),
(4, 'Asisten Ahli', 'Tetap', 2000000, 1500000),
(5, 'Guru Besar', 'Tetap', 3000000, 2500000),
(6, 'Lektor Kepala', 'Tetap', 4000000, 3500000),
(7, 'Pegawai', 'Magang', 0, 0),
(8, 'Pegawai', 'Kontrak', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_gaji_golongan`
--

CREATE TABLE `data_gaji_golongan` (
  `id_golongan_` int(11) NOT NULL,
  `golongan_` varchar(11) NOT NULL,
  `masa_kerja_` varchar(11) NOT NULL,
  `gaji_pokok_` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_gaji_golongan`
--

INSERT INTO `data_gaji_golongan` (`id_golongan_`, `golongan_`, `masa_kerja_`, `gaji_pokok_`) VALUES
(1, 'IA', '0-2', 1486500),
(2, 'IA', '3-4', 1533400),
(3, 'IA', '5-6', 1581700),
(15, 'IB', '3-4', 1623400),
(16, 'IB', '5-6', 1674500),
(34, 'IC', '3-4', 1692100),
(35, 'IC', '5-6', 1745400),
(38, 'ID', '3-4', 1763600),
(39, 'ID', '5-6', 1819200),
(42, 'IIA', '0-2', 1926000),
(43, 'IIA', '3-4', 2017900),
(44, 'IIA', '5-6', 2081500),
(45, 'IIB', '3-4', 2103300),
(46, 'IIB', '5-6', 2169500),
(47, 'IIC', '3-4', 2192300),
(48, 'IIC', '5-6', 2261300),
(49, 'IID', '3-4', 2285000),
(50, 'IID', '5-6', 2357000),
(51, 'IIIA', '0-2', 2456700),
(52, 'IIIA', '3-4', 2613800),
(53, 'IIIA', '5-6', 2696200),
(54, 'IIIB', '0-2', 2560600),
(55, 'IIIB', '3-4', 2724400),
(56, 'IIIB', '5-6', 2810200),
(57, 'IIIC', '0-2', 2668900),
(58, 'IIIC', '3-4', 2839700),
(59, 'IIIC', '5-6', 2929100),
(60, 'IIID', '0-2', 2781800),
(61, 'IIID', '3-4', 2959800),
(62, 'IIID', '5-6', 3053000),
(63, 'IVA', '0-2', 2899500),
(64, 'IVA', '3-4', 3085000),
(65, 'IVA', '5-6', 3182100),
(66, 'IVB', '0-2', 3022100),
(67, 'IVB', '3-4', 3215500),
(68, 'IVB', '5-6', 2216700),
(69, 'IVC', '0-2', 3149900),
(70, 'IVC', '3-4', 3351500),
(71, 'IVC', '5-6', 3457000),
(72, 'IVD', '0-2', 3283200),
(73, 'IVD', '3-4', 3493200),
(74, 'IVD', '5-6', 3603300),
(75, 'IVE', '0-2', 3422100),
(76, 'IVE', '3-4', 3641000),
(77, 'IVE', '5-6', 3755700);

-- --------------------------------------------------------

--
-- Table structure for table `data_kepanitiaan`
--

CREATE TABLE `data_kepanitiaan` (
  `id_k` int(11) NOT NULL,
  `tgl_sk` varchar(50) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `nama_kep` varchar(50) NOT NULL,
  `tunjangan_kep` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kepanitiaan`
--

INSERT INTO `data_kepanitiaan` (`id_k`, `tgl_sk`, `no_sk`, `nama_kep`, `tunjangan_kep`) VALUES
(4, '2017-12-13', '293218310', 'Penelitian Kreaktifitas Mahasiswa', 1000000),
(6, '2017-12-29', '3928371038', 'Seminar Perduli Terhadap Jam Masuk Dosen', 500000),
(9, '9999-09-09', '124', 'panitia', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `nohp` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `Agama` char(50) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `ktp` varchar(14) NOT NULL,
  `nama_jabatan` char(50) NOT NULL,
  `id_golongan` varchar(100) NOT NULL,
  `masa_kerja` varchar(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `norek` varchar(100) NOT NULL,
  `kdstatusk` int(11) NOT NULL,
  `id_anak` varchar(11) NOT NULL,
  `status_pegawai` char(50) NOT NULL,
  `kdpndidik` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nip`, `nama`, `jenis_kelamin`, `nohp`, `tempat_lahir`, `tgl_lahir`, `alamat`, `Agama`, `npwp`, `ktp`, `nama_jabatan`, `id_golongan`, `masa_kerja`, `id_bank`, `norek`, `kdstatusk`, `id_anak`, `status_pegawai`, `kdpndidik`, `tgl_masuk`, `time_update`) VALUES
(1, 12345, 'SUJAIDI S.KOM', 'L', '081354182918', 'MEDAN', '1999-09-02', 'jl. Medan-Binjai', 'Khatolik', '12.312.312.3-123.123', '23313234', 'Guru Besar', 'IVA', '5-6', 3, '3123123213', 3, '101', 'Tetap', 7, '1900-12-04', '2017-12-27 10:26:36'),
(18, 123456, 'AISYAH M.PD', 'P', '2313123123', 'SIBOLGA', '2017-12-12', 'Jl. Garuda', 'Budha', '22.222.222.2-222.222', '12213442431', 'Guru Besar', 'IVA', '3-4', 3, '4324234234', 2, '103', 'Tetap', 9, '2017-12-14', '2017-12-27 10:28:33'),
(19, 1001, 'SYAHRIL M.A ST', 'L', '08135423412', 'JAKARTA', '1977-12-12', 'Jl. Alumni', 'Islam', '21.331.243.4-123.231', '323124341', 'Asisten Ahli', 'IIA', '3-4', 2, '2312312', 2, '101', 'Tetap', 5, '2017-12-12', '2017-12-27 08:48:58'),
(22, 1002, 'DR. SYAFII S.KOM', 'L', '081374128392', 'PADANG SIDEMPUAN', '1979-12-12', 'Jl. Batang Kuis', 'Islam', '44.532.812.9-348.271', '1641454234', 'Lektor Kepala', 'IVC', '5-6', 3, '758365322', 2, '104', 'Tetap', 9, '2001-12-11', '2017-12-27 10:28:03'),
(23, 1003, 'SITI AMINAH', 'P', '081324731892', 'MADINAH', '1980-02-26', 'Komplek Tasbih', 'Islam', '13.398.324.8-173.213', '16483819218', 'Pegawai', 'IIB', '3-4', 1, '3429858342', 1, '101', 'Tetap', 7, '2011-08-03', '2017-12-27 16:05:26'),
(26, 1004, 'DR. SUTARTO ', 'L', '081243284912', 'BANDUNG', '1964-06-03', 'Jl. Sei Asahan', 'Islam', '31.959.682.8-419.284', '459281949138', 'Asisten Ahli', 'IIIA', '3-4', 1, '3232495918', 2, '102', 'Tetap', 7, '2004-07-14', '2017-12-27 14:44:26'),
(27, 1005, 'FAISAL S.KED', 'L', '0812848249', 'KABANJAHE', '1990-02-21', 'Jl. Amplas', 'Islam', '32.134.565.3-452.421', '32213958191', 'Pegawai', 'IB', '3-4', 1, '3123454355', 1, '101', 'Magang', 7, '2017-01-10', '2017-12-28 02:20:01'),
(30, 1006, 'JESSICA', 'P', '0813756638282', 'PADANG SIDEMPUAN', '1999-02-11', 'Jl stabat', 'Khatolik', '21.321.312.3-123.123', '73242642367', 'Pegawai', 'IIIA', '3-4', 2, '3123123', 1, '101', 'Tetap', 7, '2010-06-15', '2018-01-03 09:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `gaji_bersih`
--

CREATE TABLE `gaji_bersih` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(11) NOT NULL,
  `gaji_bersih_` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji_bersih`
--

INSERT INTO `gaji_bersih` (`id_pegawai`, `nip`, `gaji_bersih_`) VALUES
(19, '1001', 5726050),
(22, '1002', 11648400),
(23, '1003', 2926000),
(26, '1004', 6518230),
(27, '1005', 1623400),
(30, '1006', 3613800),
(1, '12345', 8682100),
(18, '123456', 9221420);

-- --------------------------------------------------------

--
-- Table structure for table `kepanitiaan`
--

CREATE TABLE `kepanitiaan` (
  `id` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_kep` varchar(50) NOT NULL,
  `tunjangan_kep` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepanitiaan`
--

INSERT INTO `kepanitiaan` (`id`, `nip`, `nama_kep`, `tunjangan_kep`) VALUES
(1, '123456', 'Penelitian Kreaktifitas Mahasiswa', 1000000),
(4, '12345', 'Penelitian Kreaktifitas Mahasiswa', 1000000),
(17, '1001', 'Seminar Perduli Terhadap Jam Masuk Dosen', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesan`
--

CREATE TABLE `tabel_pesan` (
  `nomor` int(10) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `sudahbaca` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pesan`
--

INSERT INTO `tabel_pesan` (`nomor`, `waktu`, `dari`, `kepada`, `pesan`, `email`, `nohp`, `sudahbaca`) VALUES
(1, '12:30 21 Des 2017', 'rafika', '1', 'Halo apakabar?', 'rafika@gmail.com', '08138491935', 'N'),
(5, '2018-01-02 09:10:10', 'siti aminah', '1', 'Gaji saya kok dikurangi!', 'sitiaminah@gmail.com', '081343839135', 'N'),
(11, '2018-01-03 09:41:48', 'novri', '1', 'Anak saya baru lahir', 'novri@gmail.com', '081448342481', 'N');

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
(2, 12345, 'Sujaidi S.Kom', '123456', '2017-12-11', 'Perempuan', 'asdadsada', 'aasdsadass', 'admin', '0', ''),
(3, 1003, 'Siti Aminah', '123456', '2017-12-22', 'Laki-laki', 'rumah@gmail.com', 'rumah@gmail.com', 'user', '080808080', '271220170910472.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id_agm` int(3) NOT NULL,
  `nmagama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`id_agm`, `nmagama`) VALUES
(1, 'Islam'),
(2, 'Khatolik'),
(3, 'Kristen Protestan'),
(4, 'Hindu'),
(5, 'Budha'),
(13, 'konghuchu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anak`
--

CREATE TABLE `tbl_anak` (
  `id_anak` int(11) NOT NULL,
  `jumlah_anak` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anak`
--

INSERT INTO `tbl_anak` (`id_anak`, `jumlah_anak`) VALUES
(101, '0'),
(102, '1'),
(103, '2'),
(104, '>2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `id_bank` int(3) NOT NULL,
  `nm_bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`id_bank`, `nm_bank`) VALUES
(1, 'BCA'),
(2, 'BRI'),
(3, 'MANDIRI'),
(4, 'CIMB'),
(5, 'BNI'),
(7, 'MEGA'),
(9, 'llll');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE `tbl_pendidikan` (
  `kdpndidik` int(3) NOT NULL,
  `nmpndidik` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`kdpndidik`, `nmpndidik`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA/SMK/MA'),
(4, 'D1'),
(5, 'D2'),
(6, 'D3'),
(7, 'S1'),
(8, 'S2'),
(9, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statusk`
--

CREATE TABLE `tbl_statusk` (
  `kdstatusk` int(3) NOT NULL,
  `nmstatusk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_statusk`
--

INSERT INTO `tbl_statusk` (`kdstatusk`, `nmstatusk`) VALUES
(1, 'Lajang'),
(2, 'Menikah'),
(3, 'Duda'),
(4, 'Janda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `level_user` int(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `status` int(5) NOT NULL,
  `w_login` datetime NOT NULL,
  `w_daftar` datetime NOT NULL,
  `kd_approve` int(3) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `level_user`, `email`, `nip`, `status`, `w_login`, `w_daftar`, `kd_approve`, `foto`) VALUES
(19, 'febria', '1bc8d82d9812b873efbd1bf5ba62a6ab', 1, 'febria@gmail.com', '2006', 1, '2018-01-16 09:13:12', '2017-12-17 22:22:19', 1, ''),
(20, 'lala', 'c0623ef644aea99fbc57b7fe968f0b28', 2, 'lala@gmail.com', '1234', 1, '2017-12-17 23:14:05', '2017-12-17 22:48:59', 1, ''),
(21, 'rafika', 'fd87651670503642cbdbfd9dc1b91fc0', 1, 'rafika@gmail.com', '2003', 1, '2018-01-03 03:31:10', '2017-12-23 20:56:50', 1, ''),
(22, 'romzi', '2c155b4c45ba56a9c648b3abb42a4c56', 1, 'romzi@gmail.com', '2005', 1, '2017-12-28 00:35:45', '2017-12-27 21:54:50', 1, ''),
(23, 'Siti Aminah', 'a304bec5c6daf83d6b6ccb3ad72d47c9', 1, 'sitiaminah@gmail.com', '1003', 2, '2017-12-31 22:43:28', '2017-12-28 00:36:14', 1, '281220170746431.jpg'),
(24, 'sujaidi', '9b69767020ca753b5ad41029a7645b55', 1, 'sujaidi@gmail.com', '12345', 2, '0000-00-00 00:00:00', '2017-12-28 01:19:16', 1, ''),
(25, 'aisyah', '7ba72f34b67850fe37bde8851930d64b', 1, 'aisyah@gmail.com', '12345', 2, '0000-00-00 00:00:00', '2017-12-28 01:20:57', 1, ''),
(26, 'syahril', 'fde5b0ece6b897ac4fec40ba7de8fd37', 1, 'syahril@gmail.com', '1001', 2, '0000-00-00 00:00:00', '2017-12-28 01:22:29', 1, ''),
(27, 'syafii', '37dd226b5fd9d5954f34584d3f319f16', 1, 'syafii@gmail.com', '1002', 2, '0000-00-00 00:00:00', '2017-12-28 01:23:06', 1, '281220170815122.jpg'),
(28, 'sutarto', '92398eefda249b396be9466c10791204', 1, 'sutarto@gmail.com', '1004', 2, '0000-00-00 00:00:00', '2017-12-28 01:23:27', 1, ''),
(29, 'rahmadhita', '17d1adb05276acb296ddbdb96fe5eee1', 1, 'rahmadhita@gmail.com', '1005', 1, '2017-12-28 13:54:58', '2017-12-28 13:54:03', 1, ''),
(31, 'pika', '', 0, 'fika@gmail.com', '34', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, ''),
(32, 'novri', '', 0, 'novri@gmail.com', '1005', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tubes`
--

CREATE TABLE `tubes` (
  `idpost` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(124) NOT NULL,
  `date` varchar(32) NOT NULL,
  `entry` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tubes`
--

INSERT INTO `tubes` (`idpost`, `title`, `link`, `date`, `entry`) VALUES
(1, 'Sri Mulyani: Gaji Tak Naik, PNS Tetap Terima THR Tahun Depan', 'http://bisnis.liputan6.com/read/3060853/sri-mulyani-gaji-tak-naik-pns-tetap-terima-thr-tahun-depan', '5 bulan lalu', 'Pemerintah telah mencairkan sekitar hampir Rp 23 triliun untuk THR dan gaji ke-13 bagi PNS aktif maupun pensiunan PNS di 2017.'),
(2, 'title', 'link', 'date', 'entry'),
(3, 'Sri Mulyani Bayar Gaji PNS, TNI dan Polri pada 2 Januari 2018', 'http://bisnis.liputan6.com/read/3203747/sri-mulyani-bayar-gaji-pns-tni-dan-polri-pada-2-januari-2018', '12 hari lalu', 'Kemenkeu menegaskan akan membayarkan gaji bulan Januari untuk para Pegawai Negeri Sipil (PNS) dan Anggota TNI/Polri pada 2 Januari 2018.'),
(4, 'Anggaran Daerah Lebih Banyak Tersedot untuk Bayar Gaji PNS', 'http://bisnis.liputan6.com/read/3186760/anggaran-daerah-lebih-banyak-tersedot-untuk-bayar-gaji-pns', '27 hari lalu', 'Menkeu Sri Mulyani mengatakan pemda belum mampu meningkatkan PAD sehingga terus bergantung dari dana transfer pusat.'),
(5, 'Pemerintah Kucurkan Rp 578 T Buat Bayar Gaji PNS dalam 10 Bulan', 'http://bisnis.liputan6.com/read/3185034/pemerintah-kucurkan-rp-578-t-buat-bayar-gaji-pns-dalam-10-bulan', '29 hari lalu', 'Gaji PNS berasal dari Anggaran Pendapatan dan Belanja Negara (APBN) serta Anggaran Pendapatan dan Belanja Daerah (APBD).'),
(6, 'Rekrut CPNS, Menteri Susi Tawarkan Gaji Rp 6 Juta per Bulan', 'http://bisnis.liputan6.com/read/3095067/rekrut-cpns-menteri-susi-tawarkan-gaji-rp-6-juta-per-bulan', '4 bulan lalu', 'Rekrutmen CPNS di KKP kali ini hanya ditawarkan untuk lima lulusan terbaik di masing-masing universitas di seluruh Indonesia.'),
(7, 'Anggaran Gaji PNS Naik Terus dalam 4 Tahun, Ini Buktinya', 'http://bisnis.liputan6.com/read/3084689/anggaran-gaji-pns-naik-terus-dalam-4-tahun-ini-buktinya', '4 bulan lalu', 'Saat ini, total jumlah PNS pusat dan daerah mencapai 4,3 juta orang.'),
(8, 'Ini Alasan Jokowi Tak Naikkan Gaji PNS Selama 2 Tahun', 'http://bisnis.liputan6.com/read/3060920/ini-alasan-jokowi-tak-naikkan-gaji-pns-selama-2-tahun', '5 bulan lalu', 'Pemerintah terakhir kali menaikkan gaji pokok PNS pada 2015.'),
(9, 'Sri Mulyani: Gaji Tak Naik, PNS Tetap Terima THR Tahun Depan', 'http://bisnis.liputan6.com/read/3060853/sri-mulyani-gaji-tak-naik-pns-tetap-terima-thr-tahun-depan', '5 bulan lalu', 'Pemerintah telah mencairkan sekitar hampir Rp 23 triliun untuk THR dan gaji ke-13 bagi PNS aktif maupun pensiunan PNS di 2017.');

-- --------------------------------------------------------

--
-- Table structure for table `t_kalendar_agenda`
--

CREATE TABLE `t_kalendar_agenda` (
  `id` int(11) NOT NULL,
  `tgl_acara` date NOT NULL,
  `tgl_kalendar` varchar(10) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kalendar_agenda`
--

INSERT INTO `t_kalendar_agenda` (`id`, `tgl_acara`, `tgl_kalendar`, `subjek`, `keterangan`) VALUES
(3, '1900-12-28', '28-12-2017', 'Presentasi Tubes IMK', 'Mempresentasikan Tubes IMK Pukul 14.00 WIB'),
(4, '2018-01-01', '1-1-2018', 'Libur Tahun Baru', 'Memikirkan resolusi untuk tahun yang lebih baik:)'),
(5, '2018-01-04', '4-1-2018', 'Tugas SDA', 'Tugas SDA memperbaiki kodingan yang di berikan'),
(10, '2018-01-09', '9-1-2018', 'UAS', 'Perisapkan mental dan ilmu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD UNIQUE KEY `nip` (`id_pegawai`);

--
-- Indexes for table `data_gaji`
--
ALTER TABLE `data_gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD UNIQUE KEY `id_pegawai` (`id_gaji`);

--
-- Indexes for table `data_gaji_golongan`
--
ALTER TABLE `data_gaji_golongan`
  ADD PRIMARY KEY (`id_golongan_`);

--
-- Indexes for table `data_kepanitiaan`
--
ALTER TABLE `data_kepanitiaan`
  ADD PRIMARY KEY (`id_k`),
  ADD UNIQUE KEY `no_sk` (`no_sk`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `gaji_bersih`
--
ALTER TABLE `gaji_bersih`
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `kepanitiaan`
--
ALTER TABLE `kepanitiaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `tableuser`
--
ALTER TABLE `tableuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id_agm`);

--
-- Indexes for table `tbl_anak`
--
ALTER TABLE `tbl_anak`
  ADD UNIQUE KEY `id_anak` (`id_anak`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  ADD PRIMARY KEY (`kdpndidik`);

--
-- Indexes for table `tbl_statusk`
--
ALTER TABLE `tbl_statusk`
  ADD PRIMARY KEY (`kdstatusk`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tubes`
--
ALTER TABLE `tubes`
  ADD PRIMARY KEY (`idpost`);

--
-- Indexes for table `t_kalendar_agenda`
--
ALTER TABLE `t_kalendar_agenda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_gaji`
--
ALTER TABLE `data_gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data_gaji_golongan`
--
ALTER TABLE `data_gaji_golongan`
  MODIFY `id_golongan_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `data_kepanitiaan`
--
ALTER TABLE `data_kepanitiaan`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `kepanitiaan`
--
ALTER TABLE `kepanitiaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  MODIFY `nomor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tableuser`
--
ALTER TABLE `tableuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id_agm` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `id_bank` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  MODIFY `kdpndidik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_statusk`
--
ALTER TABLE `tbl_statusk`
  MODIFY `kdstatusk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tubes`
--
ALTER TABLE `tubes`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_kalendar_agenda`
--
ALTER TABLE `t_kalendar_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
