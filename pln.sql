-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 11:06 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) unsigned NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'yudha', 'yudha', '123456', 'admin', NULL, '2017-07-08 00:46:57', '2017-07-08 00:46:57'),
(3, 'aisymr', 'aisymr', '123456', 'transaksi energi', NULL, '2017-07-08 01:11:32', '2017-07-08 01:11:32'),
(4, 'ifa', 'ifa', '123456', 'pelayanan pelanggan', NULL, '2017-07-08 01:18:55', '2017-07-08 01:18:55'),
(8, 'Admin1', 'admin1', '123456', 'cs', NULL, '2017-07-27 18:10:34', '2017-07-27 18:10:34'),
(9, 'Admin2', 'admin2', '123456', 'pelayanan pelanggan', NULL, '2017-07-27 18:10:35', '2017-07-27 18:10:35'),
(10, 'Admin3', 'admin3', '123456', 'transaksi energi', NULL, '2017-07-27 18:10:35', '2017-07-27 18:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE IF NOT EXISTS `antrian` (
`id` int(10) unsigned NOT NULL,
  `nomor_antrian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_antrian` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `nomor_antrian`, `tgl_antrian`, `created_at`, `updated_at`) VALUES
(1, '1', '2017-07-16', '2017-07-16 01:21:48', '2017-07-16 01:21:48'),
(2, '10', '2017-07-16', '2017-07-16 01:21:57', '2017-07-16 01:21:57'),
(3, '1', '2017-07-24', '2017-07-24 09:17:48', '2017-07-24 09:17:48'),
(4, '2', '2017-07-24', '2017-07-24 09:18:34', '2017-07-24 09:18:34'),
(5, '3', '2017-07-24', '2017-07-24 09:19:02', '2017-07-24 09:19:02'),
(6, '4', '2017-07-24', '2017-07-24 09:33:22', '2017-07-24 09:33:22'),
(7, '1', '2017-08-09', '2017-08-09 08:44:52', '2017-08-09 08:44:52'),
(8, '2', '2017-08-09', '2017-08-09 08:51:33', '2017-08-09 08:51:33'),
(9, '3', '2017-08-09', '2017-08-09 08:53:06', '2017-08-09 08:53:06'),
(10, '4', '2017-08-09', '2017-08-09 08:53:38', '2017-08-09 08:53:38'),
(11, '1', '2017-08-31', '2017-08-30 23:18:59', '2017-08-30 23:18:59'),
(12, '1', '2017-09-01', '2017-09-01 09:10:49', '2017-09-01 09:10:49'),
(13, '2', '2017-09-01', '2017-09-01 09:17:09', '2017-09-01 09:17:09'),
(14, '1', '2017-09-04', '2017-09-04 01:35:02', '2017-09-04 01:35:02'),
(15, '1', '2017-09-08', '2017-09-08 07:28:33', '2017-09-08 07:28:33'),
(16, '2', '2017-09-08', '2017-09-08 07:31:39', '2017-09-08 07:31:39'),
(17, '1', '2017-09-10', '2017-09-10 02:09:01', '2017-09-10 02:09:01'),
(18, '2', '2017-09-10', '2017-09-10 04:26:06', '2017-09-10 04:26:06'),
(19, '3', '2017-09-10', '2017-09-10 08:51:33', '2017-09-10 08:51:33'),
(20, '4', '2017-09-10', '2017-09-10 13:10:23', '2017-09-10 13:10:23'),
(21, '5', '2017-09-10', '2017-09-10 13:10:51', '2017-09-10 13:10:51'),
(22, '6', '2017-09-10', '2017-09-10 13:10:52', '2017-09-10 13:10:52'),
(23, '7', '2017-09-10', '2017-09-10 13:11:18', '2017-09-10 13:11:18'),
(24, '1', '2017-09-11', '2017-09-11 08:40:21', '2017-09-11 08:40:21'),
(25, '1', '2017-09-15', '2017-09-15 10:10:22', '2017-09-15 10:10:22'),
(26, '2', '2017-09-15', '2017-09-15 11:44:06', '2017-09-15 11:44:06'),
(27, '1', '2017-09-16', '2017-09-16 01:08:35', '2017-09-16 01:08:35'),
(28, '2', '2017-09-16', '2017-09-16 01:08:55', '2017-09-16 01:08:55'),
(29, '3', '2017-09-16', '2017-09-16 02:17:47', '2017-09-16 02:17:47'),
(30, '4', '2017-09-16', '2017-09-16 02:24:12', '2017-09-16 02:24:12'),
(31, '5', '2017-09-16', '2017-09-16 03:05:50', '2017-09-16 03:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(10) unsigned NOT NULL,
  `judul` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gambar` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `gambar`, `isi`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Begini Persiapan SMK PGRI ', 'kabel-pln.jpg', 'Empat SMK di Indonesia didapuk untuk memenuhi tenaga kerja kelistrikan untuk proyek PLN. Meliputi dua SMK di Jakarta, satu SMK di Bogor dan di Jawa Timur hanya satu SMK yaitu SMK PGRI 3 Kota Malang.\r\n"Kami mengapresiasi sekali karena mendapat kepercayaan itu," kata Lukman Hakim, Kepala SMK PGRI 3 Kota Malang kepada SURYAMALANG.COM, Minggu (2/4/2017).\r\nUntuk itu, telah dilakukan nota kesepahaman peningkatan kompetensi bidang kelistrikan pada siswa SMK di kantor PT PLN (Persero) Distribusi Jawa Timur beberapa hari lalu.\r\nPenandatanganan ini untuk mendukung program penyediaan listrik 35.000 MW. Hal itu memerlukan dukungan tenaga kerja. Ini merupakan tindak lanjut dari kerjasama Ditjen Ketenagalistrikan Kementrian ESDM dan Ditjen Dikdasmen Kemendikbud.', NULL, '0000-00-00 00:00:00', '2017-08-05 19:03:24'),
(16, 'IFA', '686931.jpg', 'IFA', NULL, '2017-08-05 23:35:33', '2017-08-05 23:35:33'),
(17, 'IFA', '686931.jpg', 'IFA', NULL, '2017-08-05 23:36:42', '2017-08-05 23:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_layanan`
--

CREATE TABLE IF NOT EXISTS `kategori_layanan` (
`id` int(10) unsigned NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, '1.1 Pasang Baru', '2017-06-04 07:49:51', '2017-06-04 07:49:51'),
(2, '1.2 Penambahan Daya', '2017-06-04 07:49:51', '2017-06-04 07:49:51'),
(3, '1.3 Tunggakan', '2017-06-04 07:49:52', '2017-06-04 07:49:52'),
(4, '1.4 Baca Meter', '2017-06-04 07:49:52', '2017-06-04 07:49:52'),
(5, '1.5 P2TL (Penerbitan Pemakaian Tunggakan Listrik)', '2017-06-04 07:49:52', '2017-06-04 07:49:52'),
(6, '1.6 LPB (Listrik Pulsa Prabayar) ', '2017-06-04 07:49:51', '2017-06-04 07:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id` int(10) unsigned NOT NULL,
  `berita_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_12_19_104005_create_pengaduan_table', 1),
('2016_12_19_104017_create_komentar_table', 1),
('2016_12_19_105704_create_Admin_table', 1),
('2017_01_20_083654_rollback', 1),
('2017_01_20_084238_create_kategoriPermasalahan_table', 1),
('2017_01_25_121359_create_berita_table', 1),
('2017_01_27_124221_create_pengajuan_daya_table', 1),
('2017_01_27_124238_create_ubah_daya_table', 1),
('2017_05_23_042247_create_kategorilayanan_table', 1),
('2017_06_20_141418_create_table_antrian', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
`id` int(10) unsigned NOT NULL,
  `kategori_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_lengkap` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8_unicode_ci NOT NULL,
  `verifikasi` text COLLATE utf8_unicode_ci,
  `tindak_lanjut` text COLLATE utf8_unicode_ci,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `kategori_id`, `nama_lengkap`, `user_id`, `alamat`, `keluhan`, `verifikasi`, `tindak_lanjut`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Aisy Muhammad', '123', 'sadeasdasd', '', NULL, NULL, '', '2017-07-24 09:17:48', '2017-07-24 09:17:48'),
(3, '3', 'Yudha', '123', 'sadeasdasd', '', NULL, NULL, '', '2017-05-24 09:19:02', '2017-07-24 09:19:02'),
(7, '', 'Faisol', '123', 'Tuban', '', NULL, NULL, '', '2017-08-09 08:53:06', '2017-08-09 08:53:06'),
(8, '6', 'Aisy', NULL, 'Jalan mawar', 'keterlambatan bulan pembayaran', '', '', '', '2017-08-30 23:18:59', '2017-09-06 09:11:20'),
(9, '1', 'Aisy', '', 'Malang', 'penghuni kosong', 'sudah kok', NULL, 'sudah di verifikasi', '2017-09-01 09:10:49', '2017-09-04 01:38:06'),
(10, '1', 'Daka', NULL, 'aaslkdaslkd', 'permintaan paska bayar', NULL, 'sudah', 'sudah di tindak lanjut', '2017-09-01 09:17:09', '2017-09-03 10:37:41'),
(11, '3', 'Aisy', '123', 'asdsad', 'tidak bisa membayar rekening', NULL, '', '', '2017-09-08 07:28:33', '2017-09-08 07:29:00'),
(12, '3', 'hafid', '123', 'Malang', 'tidak bisa membayar rekening', 'Sudah di verifikasi', NULL, 'sudah di verifikasi', '2017-09-08 07:31:39', '2017-09-09 14:07:45'),
(13, '6', 'DIka', '123', '1234', '', NULL, NULL, '', '2017-09-10 02:09:01', '2017-09-10 02:09:01'),
(14, '3', 'aufar', '123', 'asdasd', 'keterlambatan bulan pembayaran', 'satu dua dan 3', NULL, 'sudah di verifikasi', '2017-09-10 04:26:06', '2017-09-10 08:51:33'),
(15, '6', 'yudha', '123', 'asdsafdgdfg', 'tidak bisa entry keypad', NULL, NULL, '', '2017-09-10 13:10:23', '2017-09-10 13:10:23'),
(16, '3', 'Ais', '123', 'Awe', 'keterlambatan bulan pembayaran', NULL, NULL, '', '2017-09-10 13:10:51', '2017-09-10 13:10:51'),
(17, '3', 'Ais', '123', 'Awe', 'keterlambatan bulan pembayaran', NULL, NULL, '', '2017-09-10 13:10:52', '2017-09-10 13:10:52'),
(18, '3', 'Windy', '123', 'asdasdasdasd', 'tidak bisa membayar rekening', NULL, NULL, '', '2017-09-10 13:11:18', '2017-09-10 13:11:18'),
(19, '3', '', '', '', 'keterlambatan bulan pembayaran', NULL, NULL, '', '2017-09-11 08:40:21', '2017-09-11 08:40:21'),
(20, '1', 'Ais', NULL, 'dfasdfsds', 'sudah bayar namun belum nyala', NULL, NULL, '', '2017-09-15 10:10:22', '2017-09-15 10:10:22'),
(21, '1', 'Andrian', NULL, 'asdsadsad', 'penghuni kosong', NULL, NULL, '', '2017-09-15 11:44:06', '2017-09-15 11:44:06'),
(22, '1', 'Ifa', NULL, 'asdasd', 'sudah bayar namun belum nyala', NULL, NULL, '', '2017-09-16 01:08:35', '2017-09-16 01:08:35'),
(23, '1', 'Siti', NULL, 'asdasdasd', 'perluasan jaringan(izin penanaman tiang)', NULL, NULL, '', '2017-09-16 01:08:55', '2017-09-16 01:08:55'),
(24, '1', 'mula', NULL, 'sdhjhjkh', 'perluasan jaringan(izin penanaman tiang)', NULL, NULL, '', '2017-09-16 02:17:47', '2017-09-16 02:17:47'),
(25, '1', 'devi', NULL, 'asdasd', 'penghuni kosong', NULL, NULL, '', '2017-09-16 02:24:12', '2017-09-16 02:24:12'),
(26, '1', 'dicky', NULL, 'ipoipoipoi', 'permintaan paska bayar', NULL, NULL, '', '2017-09-16 03:05:50', '2017-09-16 03:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan_detail`
--

CREATE TABLE IF NOT EXISTS `pengaduan_detail` (
`id` int(11) NOT NULL,
  `pengaduan_id` int(11) NOT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `status_kwh` varchar(30) NOT NULL,
  `status_app` varchar(30) NOT NULL,
  `status_mutasi` varchar(50) DEFAULT NULL,
  `pilihan_mutasi` varchar(50) DEFAULT NULL,
  `status_bayar` varchar(50) DEFAULT NULL,
  `pilihan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan_detail`
--

INSERT INTO `pengaduan_detail` (`id`, `pengaduan_id`, `bulan`, `status_kwh`, `status_app`, `status_mutasi`, `pilihan_mutasi`, `status_bayar`, `pilihan`, `created_at`, `updated_at`) VALUES
(1, 6, '4', '', '', '', '', '', '', '2017-08-30 23:18:59', '2017-08-30 23:18:59'),
(2, 0, '2', '', '', NULL, '', 'sudah di verifikasi', '', '2017-09-10 08:51:33', '2017-09-10 08:51:33'),
(3, 0, '3', '', '', NULL, NULL, NULL, NULL, '2017-09-11 08:40:21', '2017-09-11 08:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan_detail`
--
ALTER TABLE `pengaduan_detail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pengaduan_detail`
--
ALTER TABLE `pengaduan_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
