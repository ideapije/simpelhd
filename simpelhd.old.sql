-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 08:58 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpelhd`
--

-- --------------------------------------------------------

--
-- Table structure for table `daemons`
--

CREATE TABLE IF NOT EXISTS `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pengajuan`
--

CREATE TABLE IF NOT EXISTS `daftar_pengajuan` (
  `id` bigint(20) NOT NULL,
  `petugas_id` bigint(20) NOT NULL,
  `person_id` bigint(20) DEFAULT NULL,
  `pengajuan_id` enum('KK','KTP','SKCK','SKTM_PEND','SKTM_KES') DEFAULT NULL,
  `pengajuan_tgl` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `rt_nomer` int(5) DEFAULT NULL,
  `rt_ketua` varchar(125) DEFAULT NULL,
  `rw_nomer` int(5) DEFAULT NULL,
  `rw_ketua` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

CREATE TABLE IF NOT EXISTS `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(11);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info_kelurahan`
--

CREATE TABLE IF NOT EXISTS `info_kelurahan` (
  `id` bigint(20) NOT NULL,
  `lurah_nip` varchar(50) NOT NULL,
  `lurah_nama` varchar(125) NOT NULL,
  `prov_kode` varchar(10) NOT NULL,
  `prov_nama` varchar(125) NOT NULL,
  `kab_kode` varchar(10) NOT NULL,
  `kab_nama` varchar(125) NOT NULL,
  `kec_kode` varchar(10) NOT NULL,
  `kec_nama` varchar(125) NOT NULL,
  `kel_kode` varchar(10) NOT NULL,
  `kel_nama` varchar(125) NOT NULL,
  `desa_nama` varchar(125) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_kelurahan`
--

INSERT INTO `info_kelurahan` (`id`, `lurah_nip`, `lurah_nama`, `prov_kode`, `prov_nama`, `kab_kode`, `kab_nama`, `kec_kode`, `kec_nama`, `kel_kode`, `kel_nama`, `desa_nama`) VALUES
(1, '29102910909', 'iwan firmawan', '33', 'Jawa Tengah', '29', 'Brebes', '09', 'Brebes', '001', 'Limbangan Kulon', 'Limbangan kulon');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan_config`
--

CREATE TABLE IF NOT EXISTS `kelurahan_config` (
  `id` bigint(20) NOT NULL,
  `kunci` varchar(125) NOT NULL,
  `isi` varchar(125) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan_config`
--

INSERT INTO `kelurahan_config` (`id`, `kunci`, `isi`) VALUES
(1, 'prov_kode', '33'),
(2, 'prov_nama', 'Jawa Tengah'),
(3, 'kab_kode', '29'),
(4, 'kab_nama', 'Brebes'),
(5, 'kec_kode', '09'),
(6, 'kec_nama', 'Brebes'),
(7, 'kel_kode', '01'),
(8, 'kel_nama', 'Limbangan Kulon'),
(9, 'desa_nama', 'Jln. Mangun Sarkoro Kel. Limbangan Kulon Kec. Brebes Kota Brebes Jawa Tengah'),
(10, 'lurah_nip', '14102065'),
(11, 'lurah_nama', 'iwan firmawan');

-- --------------------------------------------------------

--
-- Table structure for table `kepalakeluarga`
--

CREATE TABLE IF NOT EXISTS `kepalakeluarga` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(125) DEFAULT NULL,
  `alamat` text,
  `kodepos` varchar(50) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `rt` int(5) DEFAULT NULL,
  `rt_nama_ketua` varchar(125) NOT NULL,
  `rw` int(5) DEFAULT NULL,
  `rw_nama_ketua` varchar(125) NOT NULL,
  `jml_anggota` int(5) DEFAULT NULL,
  `nomer_kk` varchar(175) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepalakeluarga`
--

INSERT INTO `kepalakeluarga` (`id`, `nama`, `alamat`, `kodepos`, `telp`, `rt`, `rt_nama_ketua`, `rw`, `rw_nama_ketua`, `jml_anggota`, `nomer_kk`) VALUES
(3, 'iwan', 'JL. panjaitan no. 128', '4', '09303909029', 9390, '', 3, '', 3, ''),
(4, 'taka setiawan', 'JL. panjaitan no. 101', '3', '0239203209', 203920, '', 3, '', 2, ''),
(5, 'abraham', 'dsaodi diasodiasoidoi', '4', '20932909', 57182, '', 3, '', 4, ''),
(6, 'Martin', 'djsdkjasdkjasd sajkjk', '23329', '09302392090', 3, 'dimas', 2, 'djajaj', 2, ''),
(7, 'asaJ', 'DSNDNN jfk', '939', '232323', 2, 'dsjjj', 3, 'jnjjq', 3, ''),
(8, 'Ammar', 'Jl jati negoro no. 128', '2839289', '0192092190', 2, 'paiko', 3, 'abdul', 3, ''),
(9, 'Didi Supriyadi', 'Limbangan Kulon', '52219', '085743622236', 2, 'DImas', 3, 'Rohman', 5, ''),
(10, 'dd', 'dsdsjfkdsj', '9090', '3', 29302, '232909', 2320, '90djfdj', 3, ''),
(11, 'Abdul Rokhman', 'Jl. Mangunsarkoro', '52219', '081226769373', 1, 'Satori', 2, 'Sutono', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` bigint(20) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `user_role` enum('admin','petugas') DEFAULT NULL,
  `user_active` enum('1','0') DEFAULT NULL,
  `NIP` varchar(125) NOT NULL,
  `nama_asli` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `user_role`, `user_active`, `NIP`, `nama_asli`, `email`, `nohp`) VALUES
(2, 'iwanf', 'b31ce9b75dafe719e0399e25adddadde', 'admin', NULL, '', 'iwan', '14102065@st3telkom.ac.id', '085726270879'),
(3, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', NULL, '', 'somali', 'somalilimkul@gmail.com', '085200432310'),
(4, 'pakdidi', 'f41e16ade141ea79cf8340bbe88c49c3', NULL, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE IF NOT EXISTS `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pbk`
--

CREATE TABLE IF NOT EXISTS `pbk` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pbk_groups`
--

CREATE TABLE IF NOT EXISTS `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_ktp`
--

CREATE TABLE IF NOT EXISTS `pengajuan_ktp` (
  `id` bigint(20) NOT NULL,
  `ktp_person_id` bigint(20) NOT NULL,
  `ktp_permohonan` enum('baru','pengganti','perpanjang') NOT NULL,
  `ktp_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ktp_ttd` varchar(225) NOT NULL,
  `ktp_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` bigint(20) NOT NULL,
  `kk_id` bigint(20) NOT NULL,
  `NIK` varchar(225) DEFAULT NULL,
  `status_keluarga` varchar(25) NOT NULL,
  `status_perkawinan` varchar(25) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(5) DEFAULT NULL,
  `lahir_tempat` text,
  `lahir_tanggal` date DEFAULT NULL,
  `lahir_no_akte` varchar(125) DEFAULT NULL,
  `goldar` varchar(5) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `agama` varchar(5) DEFAULT NULL,
  `pekerjaan` varchar(125) DEFAULT NULL,
  `kelainan_fisik` varchar(5) DEFAULT NULL,
  `penyandang_cacat` varchar(5) DEFAULT NULL,
  `pendidikan_terakhir` varchar(5) DEFAULT NULL,
  `passport_nomer` varchar(125) DEFAULT NULL,
  `passport_tgl_terakhir` date DEFAULT NULL,
  `perkawinan_akte_buku` varchar(25) DEFAULT NULL,
  `perkawinan_akte_no` varchar(25) DEFAULT NULL,
  `perkawinan_tgl` date DEFAULT NULL,
  `cerai_akte` varchar(25) DEFAULT NULL,
  `cerai_akte_no` varchar(25) DEFAULT NULL,
  `cerai_tgl` date DEFAULT NULL,
  `ibu_nik` varchar(125) DEFAULT NULL,
  `ibu_nama` varchar(125) DEFAULT NULL,
  `ayah_nik` varchar(125) DEFAULT NULL,
  `ayah_nama` varchar(125) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `kk_id`, `NIK`, `status_keluarga`, `status_perkawinan`, `nama_lengkap`, `jenis_kelamin`, `lahir_tempat`, `lahir_tanggal`, `lahir_no_akte`, `goldar`, `alamat`, `agama`, `pekerjaan`, `kelainan_fisik`, `penyandang_cacat`, `pendidikan_terakhir`, `passport_nomer`, `passport_tgl_terakhir`, `perkawinan_akte_buku`, `perkawinan_akte_no`, `perkawinan_tgl`, `cerai_akte`, `cerai_akte_no`, `cerai_tgl`, `ibu_nik`, `ibu_nama`, `ayah_nik`, `ayah_nama`) VALUES
(6, 3, '12123232221', '1', '2', 'iwan', '1', NULL, NULL, NULL, NULL, 'JL. panjaitan no. 128', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', ''),
(13, 3, '20320300', '', NULL, 'lasmini', NULL, NULL, NULL, NULL, NULL, 'JL. panjaitan no. 128', NULL, NULL, NULL, NULL, NULL, '232389839', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', ''),
(14, 3, '2323920320', '', NULL, 'rio', NULL, NULL, NULL, NULL, NULL, 'JL. panjaitan no. 128', NULL, NULL, NULL, NULL, NULL, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', ''),
(15, 4, '20920930', '1', '2', 'taka setiawan', '1', 'brebres', '1996-12-01', NULL, '7', 'JL. panjaitan no. 101', NULL, 'A-47', NULL, NULL, NULL, '9232929232', '2016-06-16', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', ''),
(16, 4, '02909309039', '', NULL, 'indri', NULL, 'tegal', '1998-01-22', NULL, NULL, 'JL. panjaitan no. 101', NULL, 'A-2', NULL, NULL, NULL, '02930290', '2016-11-02', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', ''),
(17, 5, '20303023902', '2', '2', 'abraham', '1', 'brebes', '1995-12-12', '102910900', NULL, 'dsaodi diasodiasoidoi', '1', 'A-47', '1', NULL, '9', '1092109200', '1995-12-12', '', '23129301301', '2016-12-12', '', '', '0000-00-00', '23812381989', 'hayati', '9232131', 'sutaryo'),
(18, 5, '223020', '3', '2', 'lina', NULL, 'djakarta', '1995-02-12', '323232', '2', 'dsaodi diasodiasoidoi', '1', 'A-33', '1', NULL, '5', '', '0000-00-00', '', '3213021302301', '2016-12-12', '', '', '0000-00-00', '20930120321', 'reni', '23120392302', 'sunarto'),
(20, 5, '02102012090', '4', '1', 'gustian', NULL, 'brebes', '1997-05-18', '123123', NULL, 'dsaodi diasodiasoidoi', '1', 'A-36', '1', NULL, '6', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '320310', 'lina', '2323203', 'abraham'),
(21, 5, '293029302', '4', '1', 'weni', NULL, NULL, '1994-03-12', '213000', NULL, 'dsaodi diasodiasoidoi', '1', 'A-7', '1', NULL, '5', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '323123', 'lina', '', 'abraham'),
(22, 6, '30404930349', '1', '2', 'Martin', '1', 'Jogja', '1998-12-12', '29382989', '3', 'djsdkjasdkjasd sajkjk', '1', 'A-36', NULL, NULL, '6', '', NULL, NULL, '3232032030', '2015-12-12', NULL, NULL, NULL, '20392302', 'Omama', '2032039', 'opapa'),
(23, 6, '23829382989', '3', '2', 'mia', '2', 'Jogja', '1996-11-01', '93829382', '2', 'djsdkjasdkjasd sajkjk', '1', 'B-6', NULL, NULL, '7', '', NULL, NULL, '3232032030', '2015-12-12', NULL, NULL, NULL, '23923020', 'wati', '2039230', 'yadi'),
(24, 7, NULL, '1', '2', 'asaJ', '1', NULL, NULL, NULL, NULL, 'DSNDNN jfk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 8, '2938239829', '1', '2', 'Ammar', '1', 'tegal', '1985-12-01', '92382938298', '2', 'Jl jati negoro no. 128', '1', 'B-6', '1', NULL, '8', NULL, NULL, NULL, '2320320930209', '2015-12-11', NULL, NULL, NULL, '1212120', 'alma', '29382989', 'rido'),
(26, 8, '2382938293', '3', '2', 'indri', '2', 'Brebes', '1987-01-01', '2323203920', '3', 'Jl jati negoro no. 128', '1', 'A-54', '1', NULL, '8', '', NULL, NULL, '2320320930209', '2015-12-11', NULL, NULL, NULL, '928293829', 'ani', '23293823989', NULL),
(27, 8, '283299', '4', '1', 'almira', '2', 'Tegal', '1998-12-11', '9392093209', '2', 'Jl jati negoro no. 128', '1', 'A-3', '1', NULL, '5', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2382938293', 'indri', '2938239829', 'Ammar'),
(28, 9, '3329091803840007', '1', '2', 'Didi Supriyadi', '1', 'Brebes', '1984-03-18', NULL, '1', 'Limbangan Kulon', '1', 'B-1', NULL, NULL, '9', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Romlah', '', 'Darkum'),
(29, 9, '3329095510870001', '3', '2', 'Eska Okta', '2', 'Brebes', '1987-10-15', '', '1', 'Limbangan Kulon', '1', 'A-43', NULL, NULL, '8', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jumroh', '', 'Dulali'),
(30, 9, '282839239', '4', '1', 'Khanza faranabila', '2', 'Brebes', '2012-01-01', '', '1', 'Limbangan Kulon', '1', 'A-1', NULL, NULL, '1', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3329095510870001', 'Eska Okta', '3329091803840007', 'Didi Supriyadi'),
(31, 9, '23329293829839', '4', '1', 'Mufti', '1', 'Brebes', '2014-01-01', '', '13', 'Limbangan Kulon', '1', 'A-1', '1', NULL, '1', '2392832989', '2017-12-31', NULL, NULL, NULL, NULL, NULL, NULL, '3329095510870001', 'Eska Okta', '3329091803840007', 'Didi Supriyadi'),
(32, 3, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 9, '230290', '4', NULL, 'muskar', NULL, NULL, NULL, NULL, NULL, 'Limbangan Kulon', '1', 'A-36', NULL, NULL, '4', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3329095510870001', 'Eska Okta', '3329091803840007', 'Didi Supriyadi'),
(34, 10, NULL, '1', '2', 'dd', '1', NULL, NULL, NULL, NULL, 'dsdsjfkdsj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 11, NULL, '1', '2', 'Abdul Rokhman', '1', NULL, '1985-02-18', NULL, '1', 'Jl. Mangunsarkoro', '1', 'A-5', '1', NULL, '8', NULL, '1985-02-18', NULL, NULL, '2012-12-12', NULL, NULL, NULL, NULL, NULL, NULL, 'Warsito'),
(36, 11, '3329095509870001', '3', '2', 'Sulastri', '2', NULL, '1987-10-15', NULL, '2', 'Jl. Mangunsarkoro', '1', 'A-2', '1', NULL, '5', '', '1987-09-10', NULL, NULL, '2012-12-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `person_parent`
--

CREATE TABLE IF NOT EXISTS `person_parent` (
  `id` bigint(20) NOT NULL,
  `person_id` bigint(20) DEFAULT NULL,
  `ayah_id` bigint(20) DEFAULT NULL,
  `ibu_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '0',
  `Signal` int(11) NOT NULL DEFAULT '0',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('simpelhd', '2016-10-20 02:35:36', '2016-10-20 02:35:18', '2016-10-20 02:35:46', 'yes', 'yes', '864712020487554', 'Gammu 1.28.90, Windows Server 2007, GCC 4.4, MinGW 3.13', 0, 66, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE IF NOT EXISTS `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`) VALUES
('2016-10-20 02:31:15', '0000-00-00 00:00:00', '2016-10-20 02:31:15', NULL, '00680065006C006C006F002000660072006F006D00200074006800650020006F007400680065007200200073006900640065', '08112802651', 'Default_No_Compression', '', '+6281100000', -1, 'hello from the other side', 1, 'simpelhd', 1, 'SendingError', -1, -1, 255, 'Gammu 1.28.90'),
('2016-10-20 02:31:24', '0000-00-00 00:00:00', '2016-10-20 02:31:24', NULL, '00680065006C006F', '08112802651', 'Default_No_Compression', '', '+6281100000', -1, 'helo', 2, 'simpelhd', 1, 'SendingOKNoReport', -1, 6, 255, 'Gammu 1.28.90'),
('2016-10-20 02:35:21', '0000-00-00 00:00:00', '2016-10-20 02:35:21', NULL, '006200690073006D0069006C006C0061006800690072006F0068006D0061006E00690072006F00680069006D002E0020002E0020002E0020002E00200062006900730061', '08112802651', 'Default_No_Compression', '', '+6281100000', -1, 'bismillahirohmanirohim. . . . bisa', 5, 'simpelhd', 1, 'SendingOKNoReport', -1, 7, 255, 'Gammu 1.28.90'),
('2016-10-20 02:35:24', '0000-00-00 00:00:00', '2016-10-20 02:35:24', NULL, '007700650077', '08112802651', 'Default_No_Compression', '', '+6281100000', -1, 'wew', 3, 'simpelhd', 1, 'SendingOKNoReport', -1, 8, 255, 'Gammu 1.28.90'),
('2016-10-20 02:35:27', '0000-00-00 00:00:00', '2016-10-20 02:35:27', NULL, '', '', 'Default_No_Compression', '', '+6281100000', -1, '', 4, 'simpelhd', 1, 'SendingError', -1, -1, 255, 'Gammu 1.28.90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pengajuan`
--
ALTER TABLE `daftar_pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `petugas_id` (`petugas_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `info_kelurahan`
--
ALTER TABLE `info_kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan_config`
--
ALTER TABLE `kelurahan_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepalakeluarga`
--
ALTER TABLE `kepalakeluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  ADD KEY `outbox_sender` (`SenderID`);

--
-- Indexes for table `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `pbk`
--
ALTER TABLE `pbk`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pengajuan_ktp`
--
ALTER TABLE `pengajuan_ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasangan_id` (`kk_id`);

--
-- Indexes for table `person_parent`
--
ALTER TABLE `person_parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_id` (`person_id`),
  ADD KEY `ayah_id` (`ayah_id`),
  ADD KEY `ibu_id` (`ibu_id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indexes for table `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`),
  ADD KEY `sentitems_date` (`DeliveryDateTime`),
  ADD KEY `sentitems_tpmr` (`TPMR`),
  ADD KEY `sentitems_dest` (`DestinationNumber`),
  ADD KEY `sentitems_sender` (`SenderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pengajuan`
--
ALTER TABLE `daftar_pengajuan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info_kelurahan`
--
ALTER TABLE `info_kelurahan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kelurahan_config`
--
ALTER TABLE `kelurahan_config`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kepalakeluarga`
--
ALTER TABLE `kepalakeluarga`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pbk`
--
ALTER TABLE `pbk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengajuan_ktp`
--
ALTER TABLE `pengajuan_ktp`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `person_parent`
--
ALTER TABLE `person_parent`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_pengajuan`
--
ALTER TABLE `daftar_pengajuan`
  ADD CONSTRAINT `daftar_pengajuan_ibfk_1` FOREIGN KEY (`petugas_id`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_pengajuan_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`kk_id`) REFERENCES `kepalakeluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `person_parent`
--
ALTER TABLE `person_parent`
  ADD CONSTRAINT `person_parent_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `person_parent_ibfk_2` FOREIGN KEY (`ayah_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `person_parent_ibfk_3` FOREIGN KEY (`ibu_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
