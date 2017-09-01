-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Sep 2017 pada 08.42
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

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
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'yudha', 'yudha', '123456', 'admin', NULL, '2017-07-08 00:46:57', '2017-07-08 00:46:57'),
(3, 'aisymr', 'aisymr', '123456', 'transaksi energi', NULL, '2017-07-08 01:11:32', '2017-07-08 01:11:32'),
(4, 'ifa', 'ifa', '123456', 'pelayanan pelanggan', NULL, '2017-07-08 01:18:55', '2017-07-08 01:18:55'),
(7, 'Admin1', 'admin1', '123456', 'admin', NULL, '2017-07-27 18:09:26', '2017-07-27 18:09:26'),
(8, 'Admin1', 'admin1', '123456', 'admin', NULL, '2017-07-27 18:10:34', '2017-07-27 18:10:34'),
(9, 'Admin2', 'admin2', '123456', 'pelayanan pelanggan', NULL, '2017-07-27 18:10:35', '2017-07-27 18:10:35'),
(10, 'Admin3', 'admin3', '123456', 'transaksi energi', NULL, '2017-07-27 18:10:35', '2017-07-27 18:10:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE IF NOT EXISTS `antrian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor_antrian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_antrian` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `nomor_antrian`, `tgl_antrian`, `created_at`, `updated_at`) VALUES
(1, '1', '2017-07-16', '2017-07-16 01:21:48', '2017-07-16 01:21:48'),
(2, '2', '2017-07-16', '2017-07-16 01:21:57', '2017-07-16 01:21:57'),
(3, '1', '2017-07-24', '2017-07-24 09:17:48', '2017-07-24 09:17:48'),
(4, '2', '2017-07-24', '2017-07-24 09:18:34', '2017-07-24 09:18:34'),
(5, '3', '2017-07-24', '2017-07-24 09:19:02', '2017-07-24 09:19:02'),
(6, '4', '2017-07-24', '2017-07-24 09:33:22', '2017-07-24 09:33:22'),
(7, '1', '2017-08-09', '2017-08-09 08:44:52', '2017-08-09 08:44:52'),
(8, '2', '2017-08-09', '2017-08-09 08:51:33', '2017-08-09 08:51:33'),
(9, '3', '2017-08-09', '2017-08-09 08:53:06', '2017-08-09 08:53:06'),
(10, '4', '2017-08-09', '2017-08-09 08:53:38', '2017-08-09 08:53:38'),
(11, '1', '2017-08-31', '2017-08-30 23:18:59', '2017-08-30 23:18:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gambar` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `gambar`, `isi`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Begini Persiapan SMK PGRI ', 'kabel-pln.jpg', 'Empat SMK di Indonesia didapuk untuk memenuhi tenaga kerja kelistrikan untuk proyek PLN. Meliputi dua SMK di Jakarta, satu SMK di Bogor dan di Jawa Timur hanya satu SMK yaitu SMK PGRI 3 Kota Malang.\r\n"Kami mengapresiasi sekali karena mendapat kepercayaan itu," kata Lukman Hakim, Kepala SMK PGRI 3 Kota Malang kepada SURYAMALANG.COM, Minggu (2/4/2017).\r\nUntuk itu, telah dilakukan nota kesepahaman peningkatan kompetensi bidang kelistrikan pada siswa SMK di kantor PT PLN (Persero) Distribusi Jawa Timur beberapa hari lalu.\r\nPenandatanganan ini untuk mendukung program penyediaan listrik 35.000 MW. Hal itu memerlukan dukungan tenaga kerja. Ini merupakan tindak lanjut dari kerjasama Ditjen Ketenagalistrikan Kementrian ESDM dan Ditjen Dikdasmen Kemendikbud.', NULL, '0000-00-00 00:00:00', '2017-08-05 19:03:24'),
(16, 'IFA', '686931.jpg', 'IFA', NULL, '2017-08-05 23:35:33', '2017-08-05 23:35:33'),
(17, 'IFA', '686931.jpg', 'IFA', NULL, '2017-08-05 23:36:42', '2017-08-05 23:36:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_layanan`
--

CREATE TABLE IF NOT EXISTS `kategori_layanan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, '1.1 Pasang Baru', '2017-06-04 07:49:51', '2017-06-04 07:49:51'),
(2, '1.2 Penambahan Daya', '2017-06-04 07:49:51', '2017-06-04 07:49:51'),
(3, '1.3 LPB (Listrik Pulsa Prabayar) ', '2017-06-04 07:49:51', '2017-06-04 07:49:51'),
(4, '1.4 Baca Meter', '2017-06-04 07:49:52', '2017-06-04 07:49:52'),
(5, '1.5 P2TL (Penerbitan Pemakaian Tunggakan Listrik)', '2017-06-04 07:49:52', '2017-06-04 07:49:52'),
(6, '1.6 Tunggakan', '2017-06-04 07:49:52', '2017-06-04 07:49:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `berita_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_lengkap` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8_unicode_ci NOT NULL,
  `verifikasi` text COLLATE utf8_unicode_ci,
  `tindak_lanjut` text COLLATE utf8_unicode_ci,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `kategori_id`, `nama_lengkap`, `user_id`, `alamat`, `keluhan`, `verifikasi`, `tindak_lanjut`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Aisy Muhammad', '123', 'sadeasdasd', '', NULL, NULL, '', '2017-07-24 09:17:48', '2017-07-24 09:17:48'),
(3, '3', 'Yudha', '123', 'sadeasdasd', '', NULL, NULL, '', '2017-05-24 09:19:02', '2017-07-24 09:19:02'),
(7, '', 'Faisol', '123', 'Tuban', '', NULL, NULL, '', '2017-08-09 08:53:06', '2017-08-09 08:53:06'),
(8, '6', 'Aisy', NULL, 'Jalan mawar', 'keterlambatan bulan pembayaran', 'asdasdsad', 'oiopipoipoi', '', '2017-08-30 23:18:59', '2017-08-31 00:05:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan_detail`
--

CREATE TABLE IF NOT EXISTS `pengaduan_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengaduan_id` int(11) NOT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `status_mutasi` varchar(50) DEFAULT NULL,
  `pilihan_mutasi` varchar(50) DEFAULT NULL,
  `status_bayar` varchar(50) DEFAULT NULL,
  `pilihan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pengaduan_detail`
--

INSERT INTO `pengaduan_detail` (`id`, `pengaduan_id`, `bulan`, `status_mutasi`, `pilihan_mutasi`, `status_bayar`, `pilihan`, `created_at`, `updated_at`) VALUES
(1, 6, '4', '', '', '', '', '2017-08-30 23:18:59', '2017-08-30 23:18:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
