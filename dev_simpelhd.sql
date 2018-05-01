-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 11:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_simpelhd`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` bigint(20) NOT NULL,
  `nama_berkas` text,
  `jenis_berkas` text,
  `path_berkas` text,
  `tautan_berkas` text,
  `dibuat_pada` timestamp NULL DEFAULT NULL,
  `dibuat_oleh` varchar(175) DEFAULT NULL,
  `dibuat_oleh_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'sekertaris', ''),
(2, 'seksi', ''),
(3, 'kepala_seksi', ''),
(11, 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `kartukeluarga`
--

CREATE TABLE `kartukeluarga` (
  `id_kartukeluarga` int(20) UNSIGNED NOT NULL,
  `id_keluarga` int(20) UNSIGNED NOT NULL,
  `id_person` int(20) UNSIGNED NOT NULL,
  `hub_keluarga` enum('1','2','3','4','5','6','7','8','9','10','11') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` int(20) UNSIGNED NOT NULL,
  `no_kk` varchar(100) DEFAULT NULL,
  `nik_kepkel` varchar(100) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kode_pos` int(20) DEFAULT NULL,
  `no_rt` varchar(15) DEFAULT NULL,
  `no_rw` varchar(15) DEFAULT NULL,
  `jumlah_anggota_keluarga` int(5) DEFAULT NULL,
  `telepon` varchar(75) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kabupaten_kota` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `desa_kelurahan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(20) UNSIGNED NOT NULL,
  `nama_kelurahan` varchar(100) DEFAULT NULL,
  `kode_provinsi` int(20) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kode_kabupaten_kota` int(20) DEFAULT NULL,
  `kabupaten_kota` varchar(100) DEFAULT NULL,
  `kode_kecamatan` int(20) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kode_desa_kelurahan` int(20) DEFAULT NULL,
  `desa_kelurahan` varchar(100) DEFAULT NULL,
  `nama_camat` varchar(100) DEFAULT NULL,
  `nip_camat` varchar(100) DEFAULT NULL,
  `nama_lurah` varchar(100) DEFAULT NULL,
  `nip_lurah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `key` text,
  `level` int(2) DEFAULT NULL,
  `ignore_limits` tinyint(1) DEFAULT NULL,
  `is_private_key` tinyint(1) DEFAULT NULL,
  `ip_addresses` text,
  `date_created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `id_user`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'W1th0utLo993d1n', 11, NULL, 1, '127.0.0.1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(8);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(20) UNSIGNED NOT NULL,
  `id_person` int(20) UNSIGNED NOT NULL,
  `jenis_pengajuan` varchar(100) DEFAULT NULL,
  `nik` varchar(100) NOT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `tgl_jadi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id_person` int(20) UNSIGNED NOT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `gelar` enum('0','1','2','3') DEFAULT NULL,
  `alamat_sebelumnya` text,
  `no_paspor` varchar(100) DEFAULT NULL,
  `tgl_berakhir_paspor` date DEFAULT NULL,
  `jenis_kelamin` enum('1','2') DEFAULT NULL,
  `lahir_tempat` text,
  `lahir_tanggal` date DEFAULT NULL,
  `akta_lahir` enum('1','2') DEFAULT NULL,
  `no_akta_lahir` varchar(100) DEFAULT NULL,
  `goldar` enum('1','2','3','4','5','6','7','8','9','10','11','12','13') DEFAULT NULL,
  `agama` enum('1','2','3','4','5','6','7') DEFAULT NULL,
  `kepercayaan_tuhan_YME` varchar(100) DEFAULT NULL,
  `status_perkawinan` enum('1','2','3','4') DEFAULT NULL,
  `kelainan_fisik_mental` enum('1','2') DEFAULT NULL,
  `penyandang_cacat` enum('1','2','3','4','5','6') DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `nik_ibu` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nik_ayah` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `kewarganegaraan` enum('1','2') DEFAULT NULL,
  `keturunan` enum('1','2','3','4','5') DEFAULT NULL,
  `kebangsaan` varchar(50) DEFAULT NULL,
  `rt` varchar(12) DEFAULT NULL,
  `rw` varchar(12) DEFAULT NULL,
  `desa_kelurahan` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `akta_perkawinan` enum('1','2') DEFAULT NULL,
  `no_akta_perkawinan` int(100) DEFAULT NULL,
  `tgl_perkawinan` date DEFAULT NULL,
  `akta_cerai` enum('1','2') DEFAULT NULL,
  `no_akta_cerai` int(100) DEFAULT NULL,
  `tgl_perceraian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `real_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `real_name`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1525166605, 1525166605, 1, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kartukeluarga`
--
ALTER TABLE `kartukeluarga`
  ADD PRIMARY KEY (`id_kartukeluarga`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kartukeluarga`
--
ALTER TABLE `kartukeluarga`
  MODIFY `id_kartukeluarga` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
