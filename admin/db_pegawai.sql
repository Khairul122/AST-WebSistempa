-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Apr 2015 pada 12.06
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `andetcom_dbpegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
`id_absensi` int(10) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `tanggal_absen` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `status_masuk` enum('Y','N') NOT NULL DEFAULT 'N',
  `status_keluar` enum('Y','N') NOT NULL DEFAULT 'N',
  `ket` char(2) NOT NULL DEFAULT 'NA',
  `terlambat` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `nip`, `tanggal_absen`, `jam_masuk`, `jam_keluar`, `status_masuk`, `status_keluar`, `ket`, `terlambat`) VALUES
(39, '1234', '2013-01-15', '03:28:26', '00:00:00', 'N', 'N', 'I', 'N'),
(37, '1234', '2013-01-16', '03:22:16', '03:22:26', 'Y', 'Y', 'M', 'Y'),
(40, '1234', '2013-01-14', '03:31:50', '00:00:00', 'N', 'N', 'S', 'N'),
(41, '1234', '2013-01-13', '03:32:39', '03:32:55', 'Y', 'Y', 'M', 'N'),
(42, '1234', '2013-01-12', '03:39:01', '03:39:15', 'Y', 'Y', 'M', 'N'),
(43, '1234', '2013-01-11', '03:53:54', '03:54:23', 'Y', 'Y', 'M', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE IF NOT EXISTS `bagian` (
`id_bag` int(4) NOT NULL,
  `kd_bag` varchar(4) NOT NULL,
  `n_bag` varchar(25) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`id_bag`, `kd_bag`, `n_bag`) VALUES
(4, 'B001', 'BIRO'),
(2, 'B002', 'DIREKTUR UTAMA'),
(3, 'B003', 'HRD'),
(5, 'B004', 'STAF PENGAJAR'),
(6, 'B005', 'STAF TATA USAHA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_gaji`
--

CREATE TABLE IF NOT EXISTS `daftar_gaji` (
`id_gaji` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `nip` varchar(15) NOT NULL,
  `id_jabatan` varchar(6) NOT NULL,
  `id_departemen` varchar(6) NOT NULL,
  `uang_lembur` int(11) NOT NULL,
  `uang_makan` int(11) NOT NULL,
  `uang_transport` int(11) NOT NULL,
  `tunj_istri` int(11) NOT NULL,
  `tunj_anak` int(11) NOT NULL,
  `tunj_hari_tua` int(11) NOT NULL,
  `tunj_kecelakaan` int(11) NOT NULL,
  `tunj_kesehatan` int(11) NOT NULL,
  `tunj_kematian` int(11) NOT NULL,
  `tunj_hari_raya` int(11) NOT NULL,
  `jumlah_produksi` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga_per_unit` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `gaji_kotor` int(11) NOT NULL,
  `total_upah` int(11) NOT NULL,
  `status_pgw` enum('Tetap','Kontrak','Buruh') NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `daftar_gaji`
--

INSERT INTO `daftar_gaji` (`id_gaji`, `tanggal`, `nip`, `id_jabatan`, `id_departemen`, `uang_lembur`, `uang_makan`, `uang_transport`, `tunj_istri`, `tunj_anak`, `tunj_hari_tua`, `tunj_kecelakaan`, `tunj_kesehatan`, `tunj_kematian`, `tunj_hari_raya`, `jumlah_produksi`, `jenis`, `harga_per_unit`, `bonus`, `potongan`, `gaji_kotor`, `total_upah`, `status_pgw`) VALUES
(1, '2011-09-25', '1083038', '1', '2', 80000, 90000, 80000, 50000000, 5000, 1850, 445, 190, 3350, 5000, 0, '', 0, 5000, 5000, 50325835, 0, 'Tetap'),
(2, '2011-09-25', '1083039', '1', '2', 50000, 50000, 50000, 50000, 50000, 1850, 445, 190, 3350, 50000, 0, '', 0, 50000, 50000, 355835, 0, 'Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_jabatan`
--

CREATE TABLE IF NOT EXISTS `h_jabatan` (
`idh` int(11) NOT NULL,
  `idkjb` varchar(4) NOT NULL,
  `jab_old` varchar(20) NOT NULL,
  `tgl_ajb` date NOT NULL,
  `jabatan_baru` varchar(20) NOT NULL,
  `tgl_kjb` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `h_jabatan`
--

INSERT INTO `h_jabatan` (`idh`, `idkjb`, `jab_old`, `tgl_ajb`, `jabatan_baru`, `tgl_kjb`) VALUES
(10, 'KJ01', 'Rekom', '2009-01-16', 'Kepala Rekom', '2013-01-16'),
(11, 'KJ01', 'Kepala Rekom', '2009-01-16', 'Mgr.Rekom', '2013-01-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
`id_jab` int(4) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `n_jab` varchar(20) NOT NULL,
  `gapok` varchar(25) NOT NULL,
  `tunj_jab` varchar(25) NOT NULL,
  `m_kerja` varchar(25) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `kode`, `n_jab`, `gapok`, `tunj_jab`, `m_kerja`) VALUES
(1, 'J001', 'Rekom', '5000000', '50000', '50000'),
(2, 'J002', 'Kepala Rekom', '3000000', '300000', '50000'),
(3, 'J003', 'Mgr.Rekom', '1500000', '150000', '0'),
(4, 'J004', 'Kepala IT', '1200000', '500000', '1450'),
(10, 'J005', 'IT', '5000000', '300000', '35'),
(11, 'J005', 'IT 1', '3520000', '220000', '53232'),
(12, 'J006', 'asdad', '236565', '26565', '26565'),
(13, 'J007', 'ASDASDA', '256565', '265656', '2656565'),
(14, 'J008', 'ASDASD', '35656565', '53556565', '35365'),
(15, 'J0009', 'ASDASD', '658689', '6356532', '565650'),
(17, '0009', 'tesss', '23232', '23232', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_jabatan`
--

CREATE TABLE IF NOT EXISTS `k_jabatan` (
  `idkjb` varchar(4) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `masa_kerja` int(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `k_jabatan`
--

INSERT INTO `k_jabatan` (`idkjb`, `nip`, `masa_kerja`, `keterangan`) VALUES
('KJ01', '1234', 4, 'dsda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master`
--

CREATE TABLE IF NOT EXISTS `master` (
`id` int(3) NOT NULL,
  `nm_pt` varchar(30) NOT NULL,
  `alamat_pt` text NOT NULL,
  `Profile` text NOT NULL,
  `npwp` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `master`
--

INSERT INTO `master` (`id`, `nm_pt`, `alamat_pt`, `Profile`, `npwp`) VALUES
(1, 'PT CAHAYA TERANG ABADI', 'Jl. Raya Penggilingan no.99 Cakung Jakarta Timur', '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `m_kerja`
--
CREATE TABLE IF NOT EXISTS `m_kerja` (
`nip` varchar(10)
,`nama` varchar(40)
,`tgl_masuk` date
,`t_mk` int(5)
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`id` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tmpt_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_bag` varchar(4) NOT NULL,
  `id_jab` varchar(4) NOT NULL,
  `level_user` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tlpn` text NOT NULL,
  `nohp` text NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `id_agm` int(3) NOT NULL,
  `kdpndidik` int(3) NOT NULL,
  `noktp` varchar(25) NOT NULL,
  `nojamsos` varchar(25) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `id_bank` int(15) NOT NULL,
  `kdstatusk` int(3) NOT NULL,
  `kdstatusp` int(3) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `tgl_masuk`, `id_bag`, `id_jab`, `level_user`, `foto`, `tlpn`, `nohp`, `npwp`, `id_agm`, `kdpndidik`, `noktp`, `nojamsos`, `norek`, `id_bank`, `kdstatusk`, `kdstatusp`, `time_update`) VALUES
(1, '1235', 'ANDEZ MAULANA', 'SUKABUMI', '1989-11-20', 'L', 'Jl.raya bekasi', '2013-11-02', 'B002', 'J002', 1, '', '(025) 565-6565', '058989898', '05.656.565.6-565.656', 1, 2, '32323562335', '', '223232323', 1, 1, 1, '2015-02-14 04:06:47'),
(2, '1236', 'WAHYU', 'JAKARTA', '1989-11-22', 'L', 'Jl. Raya Bekasi', '2013-11-22', 'B001', 'J004', 2, '', '(025) 555-5555', '08598989898', '23.232.323.2-323.232', 1, 3, '35365656565', '', '245454', 1, 1, 1, '2015-02-05 03:54:44'),
(3, '1237', 'PORTGASTEA', 'JAKARTA', '1989-11-13', 'L', 'Jl. Raya Penggilingan Cakung No.99 Cakung Jakarta Timur', '2011-11-11', 'B002', 'J005', 4, '', '(262) 626-2262', '02585', '33.232.323.2-323.232', 1, 1, '00202121asda', '', '356232', 1, 1, 1, '2014-12-16 03:47:34'),
(14, '2007', 'RIDWAN ARIF', 'JAKARTA', '1985-02-05', 'L', 'Jl. Raya Penggilingan ', '2015-02-05', 'B005', 'J008', 5, 'assets/avatars/avatar5.png', '(021) 335-6032', '085656565656', '31.313.131.3-131.313', 1, 3, '356562323232323232323', '0', '32323232323', 1, 1, 2, '2015-02-05 06:09:47'),
(5, '1234', 'AGUNG WARDHANA', 'JAKARTA', '1999-07-24', 'L', 'jl. raya pedaengan', '2014-12-15', 'B003', 'J005', 5, '3787531.jpg', '(021) 363-5656', '0858888888', '32.323.232.3-232.323', 1, 3, '35656565656565', '', '3536262626', 1, 1, 1, '2015-03-12 06:46:17'),
(6, '2001', 'MUHAMAD PRADESA', 'SUKABUMI', '2014-12-15', 'L', 'Jl. pasirhuni rt.04/01 ', '2014-12-15', 'B003', 'J001', 5, 'assets/avatars/avatar5.png', '(021) 333-3333', '085715512005', '56.565.656.5-656.565', 1, 7, '3285125125202', '0', '23232355', 1, 1, 0, '2014-12-16 03:11:21'),
(7, '1237', 'DINA MAULIDINA', 'JAKARTA', '1999-06-19', 'P', 'jl. raya pedaengan', '2014-12-15', 'B003', 'J001', 5, 'assets/avatars/avatar5.png', '(021) 000-0000', '0858888888', '32.323.232.3-232.323', 1, 7, '35656565656565', '0', '3536262626', 1, 1, 0, '2015-02-14 03:30:17'),
(8, '2003', 'SINTHA ', 'JAKARTA', '1999-07-19', 'P', 'jl. raya pedaengan', '2014-12-15', 'B003', 'J001', 5, 'assets/avatars/avatar5.png', '(021) 000-0000', '0858888888', '32.323.232.3-232.323', 0, 0, '35656565656565', '0', '3536262626', 0, 0, 0, '2014-12-16 03:11:50'),
(11, '2005', 'FITRINURJAMIL', 'JAKARTA', '2014-12-16', 'L', 'asdsadadasd', '2014-12-16', 'B001', 'J005', 5, 'assets/avatars/avatar5.png', '(025) 656-5656', '00558989898', '53.253.565.3-535.353', 1, 1, '3565656565656', '0', '242121544', 1, 1, 1, '2014-12-16 03:12:17'),
(12, '2006', 'RAHMAT NURFIANTO', 'JAKARTA', '2014-12-16', 'L', 'asdsadadasd', '2014-12-16', 'B001', 'J005', 5, 'assets/avatars/avatar5.png', '(025) 656-5656', '00558989898', '53.253.565.3-535.353', 1, 5, '3565656565656', '0', '242121544', 1, 1, 1, '2014-12-16 02:59:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE IF NOT EXISTS `pelatihan` (
`id_pelatihan` int(4) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `tgl_pelatihan` date NOT NULL,
  `topik_pelatihan` varchar(100) NOT NULL,
  `penyelenggara` text NOT NULL,
  `hasil_pelatihan` int(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
`idp` int(4) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `t_pdk` varchar(20) NOT NULL,
  `d_pdk` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`idp`, `nip`, `t_pdk`, `d_pdk`) VALUES
(1, '1234', '2000 - 2006', 'SD Negeri 2 Palembang'),
(2, '1234', '2006 - 2007', 'SMP Negeri 3 Palembang'),
(3, '1234', '2007 - 2010', 'SMA 1 Negeri Palembang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman_kerja`
--

CREATE TABLE IF NOT EXISTS `pengalaman_kerja` (
`id_peker` int(4) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nm_pekerjaan` varchar(50) NOT NULL,
  `d_pekerjaan` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id_peker`, `nip`, `nm_pekerjaan`, `d_pekerjaan`) VALUES
(1, '1234', 'Freelance Networking ', 'Rancang bangun jaringan untuk warnet.'),
(2, '1234', 'Freelance Web Programmer', '- Merancang Aplikasi Berbasis Web untuk keperluan TA/Skripsi mahasiswa.\r\n- Merancang dan membangun website toko online, Personal, Akademik dan Company profile.\r\n'),
(5, 'admin', 'gvfdg', 'gdfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id` int(10) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `status` text NOT NULL,
  `tipe` int(2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `nip`, `status`, `tipe`, `time`) VALUES
(1, '1235', 'JIKA INI YANG TERBAIK ', 1, '2015-03-18 22:06:08'),
(2, '1236', 'Kok bisa seperti ini ya??? ', 1, '2015-03-18 21:14:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_app`
--

CREATE TABLE IF NOT EXISTS `status_app` (
`kd_approve` int(11) NOT NULL,
  `approve` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `status_app`
--

INSERT INTO `status_app` (`kd_approve`, `approve`) VALUES
(0, 'Pending'),
(1, 'Approved'),
(2, 'Bloked');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pesan`
--

CREATE TABLE IF NOT EXISTS `tabel_pesan` (
`nomor` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `dari` varchar(50) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `sudahbaca` varchar(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tabel_pesan`
--

INSERT INTO `tabel_pesan` (`nomor`, `waktu`, `dari`, `kepada`, `pesan`, `sudahbaca`) VALUES
(1, '2014-12-01 06:55:00', 'wahyu', '1', 'ketika setan berteman', 'N'),
(2, '2014-12-01 06:56:00', 'wahyu', '1', 'Hai Kapan Kembali', 'N'),
(3, '2014-12-01 06:43:00', 'wahyu', '1', 'Admin nih ada yg eror', 'N'),
(4, '2014-12-01 06:56:00', 'siska', '2', 'Hai Kapan Kembali', 'N'),
(5, '2014-12-01 06:43:00', 'admin', '2', 'Andez nih link nya', 'N'),
(6, '2014-12-01 06:43:00', 'portgastea', '1', 'Ni Bagaimana Admin kok eror', 'N'),
(7, '2014-12-01 06:43:00', 'rohmah', '1', 'ni bagaimana ya eror mulu', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absen`
--

CREATE TABLE IF NOT EXISTS `tbl_absen` (
`id_abs` int(11) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `transport` varchar(15) NOT NULL,
  `uang_shift` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tbl_absen`
--

INSERT INTO `tbl_absen` (`id_abs`, `shift`, `jam_masuk`, `jam_pulang`, `transport`, `uang_shift`) VALUES
(1, 'shift 1', '07:00:00', '17:00:00', '12000', '5000'),
(2, 'shift 2', '17:00:00', '22:00:00', '15000', '7000'),
(3, 'shift 3', '22:00:00', '05:00:00', '20000', '10000'),
(7, 'normal', '03:21:30', '18:54:01', '7000', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agama`
--

CREATE TABLE IF NOT EXISTS `tbl_agama` (
`id_agm` int(3) NOT NULL,
  `nmagama` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `tbl_agama`
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
-- Struktur dari tabel `tbl_bank`
--

CREATE TABLE IF NOT EXISTS `tbl_bank` (
`id_bank` int(3) NOT NULL,
  `nm_bank` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbl_bank`
--

INSERT INTO `tbl_bank` (`id_bank`, `nm_bank`) VALUES
(1, 'BCA'),
(2, 'BRI'),
(3, 'MANDIRI'),
(4, 'CIMB'),
(5, 'BNI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendidikan`
--

CREATE TABLE IF NOT EXISTS `tbl_pendidikan` (
`kdpndidik` int(3) NOT NULL,
  `nmpndidik` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`kdpndidik`, `nmpndidik`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA/SMK/MA'),
(4, 'D3'),
(5, 'S1'),
(6, 'S2'),
(7, 'D1'),
(8, 'D2'),
(9, 'S2'),
(10, 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peng`
--

CREATE TABLE IF NOT EXISTS `tbl_peng` (
`id_pes` int(2) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_peng`
--

INSERT INTO `tbl_peng` (`id_pes`, `pesan`, `tgl_pesan`) VALUES
(2, 'Bagi Para Staff IT di mohon kehadirannya dirapat besok. Terima kasih.\r\n\r\nSTAFF HRD', '2014-11-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosialmedia`
--

CREATE TABLE IF NOT EXISTS `tbl_sosialmedia` (
  `id_sm` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `facebook` varchar(25) NOT NULL,
  `twitter` varchar(25) NOT NULL,
  `google+` varchar(25) NOT NULL,
  `patch` varchar(25) NOT NULL,
  `pinbb` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_statusk`
--

CREATE TABLE IF NOT EXISTS `tbl_statusk` (
`kdstatusk` int(3) NOT NULL,
  `nmstatusk` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_statusk`
--

INSERT INTO `tbl_statusk` (`kdstatusk`, `nmstatusk`) VALUES
(1, 'Lajang'),
(2, 'Menikah'),
(3, 'Duda'),
(4, 'Janda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_statusp`
--

CREATE TABLE IF NOT EXISTS `tbl_statusp` (
  `kdstatusp` int(3) NOT NULL DEFAULT '0',
  `nmstatusp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_statusp`
--

INSERT INTO `tbl_statusp` (`kdstatusp`, `nmstatusp`) VALUES
(1, 'Tetap'),
(2, 'Kontrak'),
(3, 'Magang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `level_user` int(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nip` varchar(5) NOT NULL,
  `status` int(5) NOT NULL,
  `w_login` datetime NOT NULL,
  `w_daftar` datetime NOT NULL,
  `photo` varchar(100) NOT NULL,
  `kd_approve` int(3) NOT NULL,
  `aboutme` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `level_user`, `email`, `nip`, `status`, `w_login`, `w_daftar`, `photo`, `kd_approve`, `aboutme`) VALUES
(2, 'andez', '79803a0eaab30ae84b7b807bb46419f5', 1, 'andezmaulana@gmail.c', '1235', 1, '2015-04-06 17:00:14', '0000-00-00 00:00:00', '/aska2/examples/share2.jpg', 1, 'Hidup Adalah Perjuangan'),
(3, 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 2, 'wahyu@gmail.com', '1236', 1, '2015-02-05 11:03:15', '0000-00-00 00:00:00', '/aska2/examples/share2.jpg', 1, ''),
(4, 'portgastea', '4af04d83a9ae3581511b8d7e7f7ec237', 4, 'portgastea@gmail.com', '1237', 1, '2014-12-04 11:00:50', '0000-00-00 00:00:00', '/aska2/examples/share2.jpg', 1, ''),
(10, 'siska', 'afa0b885505255964c06188e2b4e8f59', 5, 'siska@aska.com', '1234', 1, '2014-12-15 09:38:14', '0000-00-00 00:00:00', '/aska2/examples/share2.jpg', 1, ''),
(11, 'rohmah', '7364e8572d4b517c30a7685e6955aab0', 5, 'rohmah@gmail.com', '2556', 1, '2015-03-30 09:58:17', '0000-00-00 00:00:00', '/aska2/examples/share2.jpg', 1, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `umur_p`
--
CREATE TABLE IF NOT EXISTS `umur_p` (
`nip` varchar(10)
,`nama` varchar(40)
,`tgl_lahir` date
,`t_lahir` int(5)
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`no_lv` int(50) NOT NULL,
  `n_lv` varchar(50) NOT NULL,
  `level_user` int(2) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1235 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no_lv`, `n_lv`, `level_user`) VALUES
(1, 'Admin', 1),
(2, 'Admin Pegawai', 2),
(3, 'Admin Absen', 3),
(4, 'Admin Payrol', 4),
(5, 'User', 5);

-- --------------------------------------------------------

--
-- Struktur untuk view `m_kerja`
--
DROP TABLE IF EXISTS `m_kerja`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `m_kerja` AS select `pegawai`.`nip` AS `nip`,`pegawai`.`nama` AS `nama`,`pegawai`.`tgl_masuk` AS `tgl_masuk`,(year(curdate()) - year(`pegawai`.`tgl_masuk`)) AS `t_mk` from `pegawai` order by (year(curdate()) - year(`pegawai`.`tgl_masuk`)) desc;

-- --------------------------------------------------------

--
-- Struktur untuk view `umur_p`
--
DROP TABLE IF EXISTS `umur_p`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `umur_p` AS select `pegawai`.`nip` AS `nip`,`pegawai`.`nama` AS `nama`,`pegawai`.`tgl_lahir` AS `tgl_lahir`,(year(curdate()) - year(`pegawai`.`tgl_lahir`)) AS `t_lahir` from `pegawai` order by (year(curdate()) - year(`pegawai`.`tgl_lahir`)) desc;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
 ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
 ADD PRIMARY KEY (`id_bag`);

--
-- Indexes for table `daftar_gaji`
--
ALTER TABLE `daftar_gaji`
 ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `h_jabatan`
--
ALTER TABLE `h_jabatan`
 ADD PRIMARY KEY (`idh`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
 ADD PRIMARY KEY (`id_jab`);

--
-- Indexes for table `k_jabatan`
--
ALTER TABLE `k_jabatan`
 ADD PRIMARY KEY (`idkjb`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
 ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
 ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
 ADD PRIMARY KEY (`id_peker`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_app`
--
ALTER TABLE `status_app`
 ADD PRIMARY KEY (`kd_approve`);

--
-- Indexes for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
 ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
 ADD PRIMARY KEY (`id_abs`);

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
 ADD PRIMARY KEY (`id_agm`);

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
-- Indexes for table `tbl_peng`
--
ALTER TABLE `tbl_peng`
 ADD PRIMARY KEY (`id_pes`);

--
-- Indexes for table `tbl_statusk`
--
ALTER TABLE `tbl_statusk`
 ADD PRIMARY KEY (`kdstatusk`);

--
-- Indexes for table `tbl_statusp`
--
ALTER TABLE `tbl_statusp`
 ADD PRIMARY KEY (`kdstatusp`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`no_lv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
MODIFY `id_absensi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
MODIFY `id_bag` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `daftar_gaji`
--
ALTER TABLE `daftar_gaji`
MODIFY `id_gaji` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `h_jabatan`
--
ALTER TABLE `h_jabatan`
MODIFY `idh` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
MODIFY `id_jab` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
MODIFY `id_pelatihan` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
MODIFY `idp` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
MODIFY `id_peker` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status_app`
--
ALTER TABLE `status_app`
MODIFY `kd_approve` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
MODIFY `nomor` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
MODIFY `id_abs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
MODIFY `id_agm` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
MODIFY `id_bank` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
MODIFY `kdpndidik` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_peng`
--
ALTER TABLE `tbl_peng`
MODIFY `id_pes` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_statusk`
--
ALTER TABLE `tbl_statusk`
MODIFY `kdstatusk` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `no_lv` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1235;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
