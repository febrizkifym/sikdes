-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 04:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kependudukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_17_054743_tabel_master', 1),
(4, '2019_02_17_060155_tabel_transaksi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_agama`
--

CREATE TABLE `m_agama` (
  `id` int(10) UNSIGNED NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_agama`
--

INSERT INTO `m_agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Khonghucu'),
(7, 'Kepercayaan Kepada Tuhan YME'),
(8, 'Aliran Kepercayaan Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `m_pekerjaan`
--

CREATE TABLE `m_pekerjaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_pekerjaan`
--

INSERT INTO `m_pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Wiraswasta'),
(2, 'Ibu Rumah Tangga'),
(3, 'Petani'),
(4, 'Buruh'),
(5, 'Buruh Migran'),
(6, 'Pegawai Negeri Sipil'),
(7, 'Pengrajin Industri'),
(8, 'Pedagang '),
(9, 'Peternak'),
(10, 'Guru'),
(11, 'Montir'),
(12, 'Dokter Swasta'),
(13, 'Bidan Swasta'),
(14, 'Perawat Swasta'),
(15, 'Pembantu Rumah Tangga'),
(16, 'TNI'),
(17, 'POLRI'),
(18, 'Pensiunan PNS/TNI/POLRI'),
(19, 'Pengusaha Kecil dan Menengah'),
(20, 'Pengacara'),
(21, 'Notaris'),
(22, 'Dukun Kampung Terlatih'),
(23, 'Jasa Pengobatan Alternatif'),
(24, 'Dosen Swasta'),
(25, 'Karyawan Perusahaan Pemerintah'),
(26, 'Tukang Kayu'),
(27, 'Transportasi'),
(28, 'Karyawan Perusahaan Swasta'),
(29, 'Perangkat Desa'),
(30, 'Jasa'),
(31, 'Honorer'),
(32, 'Pelajar'),
(33, 'Belum/Tidak Bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `m_pendidikan`
--

CREATE TABLE `m_pendidikan` (
  `id` int(10) UNSIGNED NOT NULL,
  `tingkat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_pendidikan`
--

INSERT INTO `m_pendidikan` (`id`, `tingkat`) VALUES
(1, 'Paud'),
(2, 'TK'),
(3, 'Belum Tamat SD/Sederajat'),
(4, 'Tidak Tamat SD/Sederajat'),
(5, 'Tamat SD/Sederajat'),
(6, 'Belum tamat SLTP/Sederajat'),
(7, 'Tidak Tamat SLTP/Sederajat'),
(8, 'Tamat SLTP/Sederajat'),
(9, 'Belum Tamat SLTA/Sederajat'),
(10, 'Tidak Tamat SLTA/Sederajat'),
(11, 'Tamat SLTA/Sederajat'),
(12, 'Belum Tamat D1/Sederajat'),
(13, 'Tamat D1/Sederajat'),
(14, 'Belum Tamat D2/Sederajat'),
(15, 'Tamat D2/Sederajat'),
(16, 'Belum Tamat D3/Sederajat'),
(17, 'Tamat D3/Sederajat'),
(18, 'Belum Tamat S1/Sederajat'),
(19, 'Tamat S1/Sederajat'),
(20, 'Belum Tamat S2/Sederajat'),
(21, 'Tamat S2/Sederajat'),
(22, 'Belum Tamat S3/Sederajat'),
(23, 'Tamat S3/Sederajat'),
(24, 'Tidak/Belum Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_mutasi`
--

CREATE TABLE `t_mutasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_penduduk` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `dusun` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_mutasi`
--

INSERT INTO `t_mutasi` (`id`, `id_penduduk`, `status`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `alasan`, `tanggal_surat`, `keterangan`, `created_at`, `updated_at`) VALUES
(21, 2, 3, 'Hulawalu', 'Bukit Aren', 'Pulubala', 'Gorontalo', 'Sakit', '2021-01-21', NULL, '2021-01-19 16:00:00', '2021-01-13 04:58:16'),
(22, 17, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-20 16:00:00', '2021-01-21 10:19:19'),
(23, 427, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-20 16:00:00', '2021-01-21 15:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `t_penduduk`
--

CREATE TABLE `t_penduduk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `warganegara` tinyint(4) NOT NULL,
  `kedudukan` tinyint(4) NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_agama` tinyint(3) UNSIGNED NOT NULL,
  `id_pend` tinyint(3) UNSIGNED NOT NULL,
  `id_pekerjaan` tinyint(3) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penduduk`
--

INSERT INTO `t_penduduk` (`id`, `nik`, `no_kk`, `nama`, `jk`, `status`, `warganegara`, `kedudukan`, `tempat_lahir`, `alamat`, `tgl_lahir`, `foto`, `id_agama`, `id_pend`, `id_pekerjaan`, `deleted_at`) VALUES
(2, '7501160802700001', '7501162402070701', 'Tahir Isima', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1970-02-08', NULL, 1, 5, 3, '2021-01-13 04:58:16'),
(17, '7501165001710001', '234', 'Sriko Hamrudin', 2, 1, 1, 2, 'Limboto', 'HULAWALU', '1971-01-10', '7501165001710001.jpg', 1, 8, 2, NULL),
(18, '7501165701950001', '7501162402070701', 'Ulviana Adelina T Isima', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2001-08-10', NULL, 1, 19, 33, NULL),
(19, '7501161008010001', '7501162402070701', 'Erwin Saputra T Isima', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '2001-08-10', NULL, 1, 11, 32, NULL),
(20, '7501162605410001', '7501162402070697', 'Dani Halamani', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1941-05-26', NULL, 1, 4, 3, NULL),
(21, '7501164506580001', '7501162402070697', 'Hasana A Usman', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1958-06-05', NULL, 1, 4, 2, NULL),
(22, '7501167006100002', '7501162402070697', 'Anisa Halamani', 2, 2, 1, 3, 'GORONTALO', 'HULAWALU', '2010-05-30', NULL, 1, 3, 32, NULL),
(23, '7501244103130001', '7501162402070697', 'Alifa Halamani', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2013-03-01', NULL, 1, 3, 32, NULL),
(24, '7501164702380001', '750116181218000', 'Hana Halamani', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1938-02-07', NULL, 1, 4, 2, NULL),
(25, '7501165002580002', '7501160301190004', 'Hadjirah Lausu', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1958-02-10', NULL, 1, 4, 2, NULL),
(26, '7501161003800001', '7501160301190004', 'Tahir Makune', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1980-03-10', NULL, 1, 5, 3, NULL),
(27, '7501161001850002', '7501160309190003', 'Rahman Makune', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1985-01-10', NULL, 1, 5, 3, NULL),
(28, '7501166112950002', '7501160309190003', 'Olin Patilima', 2, 1, 1, 2, 'Molamahu', 'HULAWALU', '1995-12-21', NULL, 1, 11, 2, NULL),
(29, '7501164702670001', '7501161907180001', 'Irawati Pakaya', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1967-02-07', NULL, 1, 5, 2, NULL),
(30, '7501161109880001', '7501161907180001', 'Kasim Yusuf', 1, 2, 1, 3, 'Tibawa', 'HULAWALU', '1990-09-11', NULL, 1, 5, 33, NULL),
(31, '7501160212960001', '7501161907180001', 'Abdul Aziz Yusuf', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1997-07-17', NULL, 1, 11, 32, NULL),
(32, '7501163009980001', '7501161907180001', 'Udin Yusuf', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1998-09-30', NULL, 1, 4, 33, NULL),
(33, '7501164112150002', '7501161907180001', 'Nur Intan Nusi', 2, 2, 1, 4, 'Gorontalo', 'HULAWALU', '2015-12-01', NULL, 1, 24, 33, NULL),
(34, '7501163101960001', '7501161103150001', 'Husain D Halamani', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1996-01-31', NULL, 1, 5, 3, NULL),
(35, '7501165101000001', '7501161103150001', 'Nurnining Yusuf', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '2000-01-11', NULL, 1, 5, 2, NULL),
(36, '7501161311180001', '7501161103150001', 'Mohamad Alif Halamani', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2018-11-13', NULL, 1, 24, 33, NULL),
(37, '7501160511690001', '7501162402070709', 'Tahir Djafar', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1969-11-05', NULL, 1, 5, 3, NULL),
(38, '7501165011720001', '7501162402070709', 'Raina I Urusia', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1972-11-10', NULL, 1, 5, 2, NULL),
(39, '7501163412960001', '7501162402070709', 'Sarlin T Djafar', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1996-12-14', NULL, 1, 10, 33, NULL),
(40, '7501161009530001', '7501162402070710', 'Ibrahim Makune', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1953-09-10', NULL, 1, 4, 3, NULL),
(41, '7501164701630002', '7501162402070710', 'Samrin Tadu', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1963-01-07', NULL, 1, 4, 2, NULL),
(42, '7501161501850001', '7501162910100004', 'Ishak Makune', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1985-01-15', NULL, 1, 4, 3, NULL),
(43, '750116571089001', '7501162910100004', 'Merlin Usman', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1989-10-17', NULL, 1, 8, 2, NULL),
(44, '7501165712100001', '7501162910100004', 'Salmawati I Makune', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-12-17', NULL, 1, 3, 32, NULL),
(45, '7501161004650001', '7501162402070696', 'Ishak Igirisa', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1965-04-10', NULL, 1, 5, 3, NULL),
(46, '7501164204710001', '7501162402070696', 'Martam Djafar', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1971-04-02', NULL, 1, 5, 2, NULL),
(47, '7501166201080001', '7501162402070696', 'Siti Rahmawati I Igirisa', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2008-02-07', NULL, 1, 3, 32, NULL),
(48, '7501164702580001', '7501162402070696', 'Hadija Tadu', 2, 1, 1, 4, 'Gorontalo', 'HULAWALU', '1958-02-07', NULL, 1, 4, 3, NULL),
(49, '7501162309160005', '7501162309160005', 'Yahya Igirisa', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1992-12-28', NULL, 1, 5, 3, NULL),
(50, '7501164107910044', '7501162309160005', 'Martina Abdullah', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1992-08-21', NULL, 1, 4, 2, NULL),
(51, '7501164903170001', '7501162309160005', 'Sum Yati Igirisa', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2017-03-09', NULL, 1, 2, 32, NULL),
(52, '7501160205670001', '7501162402070695', 'Suleman Igirisa', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1967-05-02', NULL, 1, 5, 3, NULL),
(53, '7501165001770001', '7501162402070695', 'Hadjarah Makune', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1977-01-10', NULL, 1, 5, 2, NULL),
(54, '7501161004960001', '7501162402070695', 'Idrak S Igirisa', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1996-04-10', NULL, 1, 11, 9, NULL),
(55, '7501161701080001', '7501162402070695', 'abdul Rahman S Igirisa', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2008-01-17', NULL, 1, 3, 32, NULL),
(56, '7501160502830001', '7501162510070008', 'Yunus Makune', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1983-02-05', NULL, 1, 5, 3, NULL),
(57, '7501164902870001', '7501162510070008', 'Kartin D Amir', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1987-02-09', NULL, 1, 7, 2, NULL),
(58, '7501164501070001', '7501162510070008', 'Marsyalia Putri Y Makune', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2007-01-05', NULL, 1, 6, 32, NULL),
(59, '7501010609750001', '7501012402079373', 'Mustapa Hamrudin', 1, 1, 1, 1, 'Limboto', 'HULAWALU', '1975-09-06', NULL, 1, 4, 3, NULL),
(60, '7501014810680004', '7501012402079373', 'Asia Bumba', 2, 1, 1, 2, 'Limboto', 'HULAWALU', '1968-10-08', NULL, 1, 4, 2, NULL),
(61, '7501011509970005', '7501012402079373', 'Refliyanto M Hamrudin', 1, 2, 1, 3, 'Limboto', 'HULAWALU', '1997-09-15', NULL, 1, 10, 33, NULL),
(62, '7501011210030004', '7501012402079373', 'Rizal Hamrudin', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2003-10-12', NULL, 1, 9, 32, NULL),
(63, '7501165202550001', '7501161007140001', 'Hapsa Makune', 2, 2, 1, 1, 'Gorontalo', 'HULAWALU', '1955-02-12', NULL, 1, 4, 2, NULL),
(64, '7501160112910001', '7501161211180002', 'Yunus Urusia', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1991-12-01', NULL, 1, 4, 3, NULL),
(65, '7501165101930001', '7501161211180002', 'Fatma Yasin', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1993-01-11', NULL, 1, 5, 2, NULL),
(66, '7501161902190001', '7501161211180002', 'Hamzah Urusia', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2019-02-19', NULL, 1, 24, 33, NULL),
(67, '7501164204560001', '7501160402200002', 'Sari Igirisa', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1956-04-02', NULL, 1, 4, 2, NULL),
(68, '7501160606990001', '7501160402200002', 'Tio Taulani', 1, 2, 1, 4, 'Gorontalo', 'HULAWALU', '1999-06-06', NULL, 1, 11, 33, NULL),
(69, '7501160308800001', '7501162402070718', 'Abdjul S Langganggo', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1980-08-03', NULL, 1, 7, 3, NULL),
(70, '7501164801800001', '7501162402070718', 'Hadijah A Seu', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1980-01-08', NULL, 1, 7, 2, NULL),
(71, '7501160907010001', '7501162402070718', 'Ahmad Abdjul', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2001-07-09', NULL, 1, 6, 32, NULL),
(72, '7501163011020001', '7501162402070718', 'Ali Abdjul', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2002-11-30', NULL, 1, 6, 32, NULL),
(73, '7501161002750001', '7501162402070703', 'Ayuba Oyo', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1975-02-10', NULL, 1, 4, 3, NULL),
(74, '7501165712760001', '7501162402070703', 'Rabia Saman', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1976-12-17', NULL, 1, 5, 2, NULL),
(75, '7501162110950002', '7501162402070703', 'Yunus Ayuba', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1995-10-21', NULL, 1, 11, 33, NULL),
(76, '7501166407070001', '7501162402070703', 'Andini A Oyo', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2007-07-24', NULL, 1, 6, 32, NULL),
(77, '7501161506750001', '7501162402070689', 'Mahmud Ibrahim', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1975-06-15', NULL, 1, 5, 3, NULL),
(78, '7501166010740001', '7501162402070689', 'Ramin Abdjul', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1974-10-20', NULL, 1, 5, 2, NULL),
(79, '7501166006990003', '7501162402070689', 'Yusrin Ibrahim', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1999-06-20', NULL, 1, 10, 33, NULL),
(80, '7505040101910001', '7501162602180003', 'Marten Abdulah', 1, 1, 1, 1, 'Molamahu', 'HULAWALU', '1991-01-01', NULL, 1, 10, 3, NULL),
(81, '7501166009160001', '7501162602180003', 'Ritin Ibrahim', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1995-09-20', NULL, 1, 11, 2, NULL),
(82, '7501166009160001', '7501162602180003', 'Nur Zuhria Abdullah', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2016-09-20', NULL, 1, 24, 33, NULL),
(83, '7501161010770005', '7501162610070023', 'Harson Abdullah', 1, 1, 1, 1, 'Tolotio', 'HULAWALU', '1977-10-10', NULL, 1, 5, 3, NULL),
(84, '7501165008870001', '7501162610070023', 'Merlan Nikson', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1987-08-10', NULL, 1, 4, 2, NULL),
(85, '7501162110110003', '7501162610070023', 'Giansyah Abdullah', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2011-10-21', NULL, 1, 3, 32, NULL),
(86, '7501166412120001', '7501162610070023', 'Tiansi Abdullah', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2012-12-24', NULL, 1, 3, 32, NULL),
(87, '7501164302380001', '7501162402070618', 'Ano Hiyola', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1938-02-03', NULL, 1, 4, 3, NULL),
(88, '7501161805840001', '7501162402070713', 'Iwan Hantula', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1984-05-18', NULL, 1, 5, 3, NULL),
(89, '7501164309830001', '7501162402070713', 'Hapisa Makune', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1983-09-03', NULL, 1, 7, 2, NULL),
(90, '7501162108030002', '7501162402070713', 'Yunus I Hantula', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2003-08-21', NULL, 1, 6, 32, NULL),
(91, '7501161810840001', '7501242611120001', 'Aten Mangopa', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1984-10-18', NULL, 1, 5, 3, NULL),
(92, '7501245907940001', '7501242611120001', 'Yulan A Mangopa', 2, 1, 1, 2, 'Dungaliyo', 'HULAWALU', '1994-07-19', NULL, 1, 5, 2, NULL),
(93, '7501240504120001', '7501242611120001', 'Adam A Mangopa', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2012-04-04', NULL, 1, 3, 32, NULL),
(94, '7501162407190001', '7501242611120001', 'Hasan Mangopa', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2019-07-24', NULL, 1, 24, 33, NULL),
(95, '7501165003480001', '7501162402070687', 'Maryam Nango', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1948-03-10', NULL, 1, 4, 3, NULL),
(96, '7501160702530002', '7501162402070687', 'Harun Nango', 1, 2, 1, 4, 'Gorontalo', 'HULAWALU', '1953-02-07', NULL, 1, 5, 3, NULL),
(97, '7501160303680002', '7501162611130005', 'Abdullah Nango', 1, 1, 1, 1, 'Pulubala', 'HULAWALU', '1968-03-03', NULL, 1, 5, 3, NULL),
(98, '7501157012000001', '7501162611130005', 'Nurfitria Nango', 2, 2, 1, 3, 'Rumbia', 'HULAWALU', '2000-12-30', NULL, 1, 18, 32, NULL),
(99, '7501164103490001', '7501162912170005', 'Uri Kadir', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1949-03-01', NULL, 1, 4, 3, NULL),
(100, '7501160604790001', '7501162402070584', 'Alun Mangopa', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1979-04-06', NULL, 1, 5, 3, NULL),
(101, '7501224501880001', '7501162402070584', 'Erlin Husain', 2, 1, 1, 2, 'Paguyaman', 'HULAWALU', '1979-04-06', NULL, 1, 5, 2, NULL),
(102, '7501162407030001', '7501162402070584', 'Sukriyanto A Mangopa', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2003-07-24', NULL, 1, 7, 33, NULL),
(103, '7501165204100001', '7501162402070584', 'Elisa A Mangopa', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-04-12', NULL, 1, 3, 32, NULL),
(104, '7501165105170001', '7501162402070584', 'Karina Putri Mangopa', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2017-05-11', NULL, 1, 1, 32, NULL),
(105, '7501160502830001', '7501162510070013', 'Rinto Mangopa', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1982-02-05', NULL, 1, 5, 3, NULL),
(106, '7501165203840002', '7501162510070013', 'Iyam Husain', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1984-03-12', NULL, 1, 5, 2, NULL),
(107, '7501165511060001', '7501162510070013', 'Martian R Mangopa', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2006-11-15', NULL, 1, 6, 32, NULL),
(108, '7501161504120001', '7501162510070013', 'Harisma R Mangopa', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2012-04-15', NULL, 1, 3, 32, NULL),
(109, '7501161501730001', '7501162402070712', 'Yasin Djafar', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1973-01-15', NULL, 1, 5, 3, NULL),
(110, '7501165001780001', '7501162402070712', 'Fatma K Daud', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1978-01-10', NULL, 1, 5, 2, NULL),
(111, '7501165610030001', '7501162402070712', 'Sri Yulinda Djafar', 2, 1, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2003-10-16', NULL, 1, 9, 32, NULL),
(112, '7501161001830003', '7501160810130008', 'Yakob Yasin', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1983-01-10', NULL, 1, 5, 3, NULL),
(113, '7501164302810001', '7501160810130008', 'Yurita Hamsa', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1981-02-03', NULL, 1, 4, 2, NULL),
(114, '7501166712010001', '7501160810130008', 'Irma Yasin', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2001-12-27', NULL, 1, 11, 33, NULL),
(115, '7501221701080001', '7501160810130008', 'Mohamad Rehan Y Yasin', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2006-01-27', NULL, 1, 6, 32, NULL),
(116, '7501161504770001', '7501162402070690', 'Tahir Abdjul', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1977-04-15', NULL, 1, 5, 3, NULL),
(117, '7501166909820001', '7501162402070690', 'Fatma Igirisa', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1982-09-29', NULL, 1, 5, 2, NULL),
(118, '7501165207990002', '7501162402070690', 'Selvi Abdjul', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1999-07-12', NULL, 1, 18, 32, NULL),
(119, '7501160503710001', '7501162510070011', 'Ismail A Abdjul', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1971-03-05', NULL, 1, 5, 3, NULL),
(120, '7501164107730086', '7501162510070011', 'Saira Urusia', 2, 0, 1, 2, 'Gorontalo', 'HULAWALU', '1973-01-07', NULL, 1, 5, 2, NULL),
(121, '7501161010950003', '7501162510070011', 'Abdul Wahid Abdjul', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1995-10-13', NULL, 1, 11, 17, NULL),
(122, '7501160805010001', '7501162510070011', 'Mohammad Abjul', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2001-05-08', NULL, 1, 11, 33, NULL),
(123, '7501161005850002', '7501162811070038', 'Yahya Ishak', 1, 1, 1, 1, 'Kab.Gorontalo', 'HULAWALU', '1985-05-10', NULL, 1, 5, 3, NULL),
(124, '7501165103920001', '7501162811070038', 'Yustina Yusuf', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1992-03-11', NULL, 1, 4, 2, NULL),
(125, '7501166802070001', '7501162811070038', 'Panti Y Ishak', 2, 1, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2007-02-28', NULL, 1, 6, 32, NULL),
(126, '7501161809190001', '7501162811070038', 'Pitan Yahya Ishak', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2019-09-18', NULL, 1, 24, 33, NULL),
(127, '7501164303560001', '7501162002150002', 'Fatma Lajati', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1956-03-03', NULL, 1, 4, 2, NULL),
(128, '7501160208510001', '7501162002150002', 'Yusuf Madi', 1, 1, 1, 4, 'Gorontalo', 'HULAWALU', '1951-08-02', NULL, 1, 4, 3, NULL),
(129, '7501161002490001', '7501162402070721', 'Abdullah Igirisa', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1949-02-10', NULL, 1, 4, 3, NULL),
(130, '7501165007550001', '7501162402070721', 'Rabia S Amir', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1955-07-10', NULL, 1, 4, 2, NULL),
(131, '7501160701720001', '7501162510070009', 'Hasan Nonto Kai', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1971-01-07', NULL, 1, 4, 3, NULL),
(132, '7501167108910002', '7501162510070009', 'Marlina Igirisa', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1991-08-31', NULL, 1, 5, 2, NULL),
(133, '7501166211100001', '7501162510070009', 'Siti Nurhalizah Nonto', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-11-22', NULL, 1, 3, 32, NULL),
(134, '7501160608660001', '7501162402070725', 'Sudin Nonto', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1966-08-06', NULL, 1, 4, 3, NULL),
(135, '7501164909850001', '7501162402070725', 'Yusni H Humonggio', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1985-09-09', NULL, 1, 4, 2, NULL),
(136, '7501160504020001', '7501162402070725', 'Rizal S Nonto', 1, 2, 1, 3, 'Paguyaman', 'HULAWALU', '2002-04-05', NULL, 1, 11, 33, NULL),
(137, '7501152508100001', '7501162402070725', 'Alif S Nonto', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-08-25', NULL, 1, 3, 32, NULL),
(138, '7501165001310001', '7501162402070725', 'Mariyani Urusia', 2, 1, 1, 4, 'Gorontalo', 'HULAWALU', '1931-01-10', NULL, 1, 4, 33, NULL),
(139, '7501160311700001', '7501162402070725', 'Yahya Nonto', 1, 2, 1, 4, 'Gorontalo', 'HULAWALU', '1970-11-03', NULL, 1, 4, 3, NULL),
(140, '750116100570001', '75011160302200005', 'Ismail Urusia', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1978-05-10', NULL, 1, 4, 3, NULL),
(141, '7501015304790001', '75011160302200005', 'Salma Ibrahim', 2, 1, 1, 4, 'Limboto', 'HULAWALU', '1979-04-13', NULL, 1, 5, 2, NULL),
(142, '7501016106110002', '75011160302200005', 'Sadita Ibrahim', 2, 2, 1, 4, 'Gorontalo', 'HULAWALU', '2011-06-21', NULL, 1, 3, 32, NULL),
(143, '7501165003560001', '7501162402070726', 'Diu Tahir', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1956-03-10', NULL, 1, 5, 3, NULL),
(144, '7501160703490001', '7501162402070581', 'Rahman Kai', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1949-03-07', NULL, 1, 4, 3, NULL),
(145, '7501164804450001', '7501162402070581', 'Hadjirah Moridu', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1945-04-08', NULL, 1, 4, 2, NULL),
(146, '7501161808840001', '7501162402070581', 'Ali Rahman', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1984-08-18', NULL, 1, 5, 3, NULL),
(147, '7501162601860001', '7501162402070581', 'Mohamad Rahman', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1986-01-26', NULL, 1, 5, 3, NULL),
(148, '7501161108890001', '7501162402070581', 'Yunus Rahman', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1989-08-11', NULL, 1, 4, 3, NULL),
(149, '7501160702670002', '7501162402070705', 'Karim Mohi', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '2967-02-07', NULL, 1, 4, 3, NULL),
(150, '7501165003580003', '7501162402070705', 'Hasni Saha', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1958-03-10', NULL, 1, 4, 2, NULL),
(151, '7501160708870001', '7501162402070705', 'Mohamad S Utina', 1, 2, 1, 4, 'Gorontalo', 'HULAWALU', '1967-08-07', NULL, 1, 4, 3, NULL),
(152, '7501160404790001', '7501162404070580', 'Umar Urusia', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1979-04-04', NULL, 1, 4, 3, NULL),
(153, '7501165003820003', '7501162404070580', 'Zenab A Manjo', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1982-03-10', NULL, 1, 5, 2, NULL),
(154, '7501166403000001', '7501162404070580', 'Riska Ibrahim', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2000-03-24', NULL, 1, 11, 33, NULL),
(155, '7501162407110002', '7501162404070580', 'Riski Ibrahim', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2011-07-24', NULL, 1, 3, 32, NULL),
(156, '7501162102720001', '7501162402070582', 'Arson Rahman', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1972-02-21', NULL, 1, 5, 3, NULL),
(157, '7501164302790001', '7501162402070582', 'Sumira Ishak', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1979-02-03', NULL, 1, 4, 2, NULL),
(158, '7501160104000001', '7501162402070582', 'Ali A Rahman', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '2000-04-01', NULL, 1, 5, 33, NULL),
(159, '7501164203010001', '7501162402070582', 'Rapia A Rahman', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2001-01-02', NULL, 1, 11, 33, NULL),
(160, '7501162708830001', '7501162510070021', 'Arten Yusuf', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1983-08-27', NULL, 1, 5, 3, NULL),
(161, '7501167005870001', '7501162510070021', 'Hadija Alihi', 2, 1, 1, 3, 'Pongongaila', 'HULAWALU', '1987-05-30', NULL, 1, 6, 32, NULL),
(162, '7501160309970001', '7501162803130003', 'Julius D Amir', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1997-09-03', NULL, 1, 4, 3, NULL),
(163, '7501094110900002', '7501162803130003', 'Fatma Masri', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1990-10-01', NULL, 1, 5, 2, NULL),
(164, '7501094601130001', '7501162803130003', 'Jihan D Amir', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2013-01-06', NULL, 1, 3, 32, NULL),
(165, '7501161211650002', '7501162510070014', 'Deni S Amir', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1965-11-12', NULL, 1, 5, 3, NULL),
(166, '7501164605660001', '7501162510070014', 'Maimuna Tuluki', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1966-05-06', NULL, 1, 5, 2, NULL),
(167, '7501160304980002', '7501162510070014', 'Zefri D Amir', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1998-04-03', NULL, 1, 5, 33, NULL),
(168, '7501160112650001', '7501162402070586', 'Ibrahim Daduke', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1965-12-01', NULL, 1, 4, 3, NULL),
(169, '7501164508720001', '7501162402070586', 'Agustin Tuluki', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1972-08-05', NULL, 1, 5, 2, NULL),
(170, '7501166506050001', '7501162402070586', 'Sri Nurain Daduke', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2005-07-05', NULL, 1, 6, 32, NULL),
(171, '7501160707770008', '75011622402070635', 'Ridwan U Djamilu', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1977-07-07', NULL, 1, 5, 3, NULL),
(172, '7501165007790003', '75011622402070635', 'Risna A Nusi', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1979-07-10', NULL, 1, 5, 2, NULL),
(173, '7501164312990001', '75011622402070635', 'Hasni R Umar', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1999-12-03', NULL, 1, 11, 33, NULL),
(174, '7501166109020001', '75011622402070635', 'Sinti R Umar', 2, 2, 1, 3, 'Pongongaila', 'HULAWALU', '2002-09-21', NULL, 1, 9, 32, NULL),
(175, '7501162407060001', '75011622402070635', 'Asrap R Umar', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2006-07-24', NULL, 1, 6, 32, NULL),
(176, '7501160212820001', '7501160105130002', 'Ali Arsad', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1982-12-02', NULL, 1, 5, 3, NULL),
(177, '7505026110930001', '7501160105130002', 'Siska Haliji', 2, 1, 1, 2, 'Kwandang', 'HULAWALU', '1993-10-21', NULL, 1, 4, 2, NULL),
(178, '7501161609120003', '7501160105130002', 'Rifandi A Arsad', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2012-09-16', NULL, 1, 3, 32, NULL),
(179, '7501160810190002', '7501160105130002', 'Rehandi Arsad', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2019-10-08', NULL, 1, 24, 33, NULL),
(180, '7501161403620001', '7501162402070587', 'Agus Moo', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1962-03-14', NULL, 1, 4, 3, NULL),
(181, '7501165007620001', '7501162402070587', 'Astin H Kasim', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1962-07-10', NULL, 1, 5, 2, NULL),
(182, '7501161105860001', '7501162402070587', 'Rusdin A Mootalu', 1, 2, 1, 4, 'Pongongaila', 'HULAWALU', '1986-05-11', NULL, 1, 5, 27, NULL),
(183, '7501160202690002', '7501162402070263', 'Ishak Mootalu', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1969-02-02', NULL, 1, 5, 3, NULL),
(184, '7501164107740003', '7501162402070263', 'Zenab Arsad', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1974-07-01', NULL, 1, 5, 2, NULL),
(185, '7501164308990002', '7501162402070263', 'Maiyun Mootalu', 2, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1999-08-03', NULL, 1, 11, 28, NULL),
(186, '7501164611100001', '7501162402070263', 'Silva I Mootalu', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-11-06', NULL, 1, 3, 32, NULL),
(187, '7501162704810001', '7501162810100009', 'Tahir I Rahman', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1981-04-27', NULL, 1, 5, 3, NULL),
(188, '7501166209920001', '7501162810100009', 'Nining Djafar', 2, 1, 1, 2, 'Telaga', 'HULAWALU', '1992-09-22', NULL, 1, 5, 2, NULL),
(189, '7501162505110001', '7501162810100009', 'Alyudin T Rahman', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2011-05-25', NULL, 1, 3, 32, NULL),
(190, '7501164505130003', '7501162810100009', 'Amelia T Rahman', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2013-05-05', NULL, 1, 3, 32, NULL),
(191, '7501160207550001', '7501162402070588', 'Idrak Rahman', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1955-07-02', NULL, 1, 5, 3, NULL),
(192, '7501164706560001', '7501162402070588', 'Asna daduke', 2, 0, 1, 2, 'Gorontalo', 'HULAWALU', '1956-06-07', NULL, 1, 4, 2, NULL),
(193, '7501161102630002', '7501161204110004', 'Rahman H Kasim', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1963-02-11', NULL, 1, 5, 3, NULL),
(194, '7501161002920001', '7501161204110004', 'Tahir R Kasim', 1, 2, 1, 3, 'Pulubala', 'HULAWALU', '1992-02-10', NULL, 1, 11, 33, NULL),
(195, '7501164302010001', '7501161204110004', 'Maryam Kasim', 2, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2001-02-03', NULL, 1, 11, 33, NULL),
(196, '7501161407840001', '7501161204110007', 'Rahman I Seu', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1984-07-14', NULL, 1, 5, 3, NULL),
(197, '7501165609550003', '7501161204110007', 'Sherly Rumondor', 1, 0, 1, 2, 'Poopo', 'HULAWALU', '1985-09-16', NULL, 1, 5, 2, NULL),
(198, '7501164908060002', '7501161204110007', 'Natasya A Mani', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2006-08-09', NULL, 1, 6, 32, NULL),
(199, '7501161906110001', '7501161204110007', 'Rival A Mani', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2011-06-19', NULL, 1, 3, 32, NULL),
(200, '7501164412640001', '7501162709130011', 'Rostin Seu', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1964-12-04', NULL, 1, 7, 2, NULL),
(201, '7501161403980001', '7501162709130011', 'Fikran Suleman', 1, 2, 1, 3, 'Pulubala', 'HULAWALU', '1998-03-14', NULL, 1, 5, 33, NULL),
(202, '7501162707000001', '7501162709130011', 'Randi K Suleman', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2000-07-27', NULL, 1, 5, 33, NULL),
(203, '7501162104780001', '7501162510070016', 'Tahir Kisman', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1973-04-21', NULL, 1, 11, 28, NULL),
(204, '7501166406860001', '7501162510070016', 'Lilan A Saleh', 2, 1, 1, 2, 'Kwandang', 'HULAWALU', '1983-06-24', NULL, 1, 11, 29, NULL),
(205, '7501165406070001', '7501162510070016', 'Silvana T K Soe', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2007-06-14', NULL, 1, 6, 32, NULL),
(206, '7501160208540001', '7501162402070660', 'Kisman Soe', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1954-08-02', NULL, 1, 5, 3, NULL),
(207, '7501164407540001', '7501162402070660', 'Sartin Seu', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1954-07-04', NULL, 1, 5, 2, NULL),
(208, '7501161311960001', '7501162402070660', 'Yusuf K Soe', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1996-11-13', NULL, 1, 11, 33, NULL),
(209, '7501166407390001', '7501162402070660', 'Arina Pilo', 2, 1, 1, 4, 'Pongongaila', 'HULAWALU', '1939-07-24', NULL, 1, 5, 33, NULL),
(210, '7501162507750004', '7501162402070660', 'Arifin Seu', 1, 2, 1, 4, 'Gorontalo', 'HULAWALU', '1975-07-25', NULL, 1, 4, 3, NULL),
(211, '7501160908740001', '7501162402070661', 'Iwan K Soe', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1972-08-09', NULL, 1, 5, 3, NULL),
(212, '7501164702830002', '7501162402070661', 'Umira Saleh', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1983-02-07', NULL, 1, 5, 2, NULL),
(213, '7501160601030001', '7501162402070661', 'Ismail I Soe', 1, 0, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2003-01-08', NULL, 1, 9, 32, NULL),
(214, '7501160111120001', '7501162402070661', 'Jefri I Soe', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2012-11-01', NULL, 1, 3, 32, NULL),
(215, '7501161006570001', '7501162402070674', 'Saleh Ladjuma', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1957-06-10', NULL, 1, 3, 3, NULL),
(216, '7501161003560001', '7501162402070671', 'Latif Ladjuma', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1956-03-10', NULL, 1, 4, 3, NULL),
(217, '7501165012730001', '7501162402070671', 'Suriyati Seu', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1973-12-10', NULL, 1, 5, 2, NULL),
(218, '7501160705990002', '7501162402070671', 'Mohamad L Ladjuma', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1999-05-07', NULL, 1, 11, 33, NULL),
(219, '7501161003670001', '7501162402070716', 'Hasan Seu', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1967-03-10', NULL, 1, 4, 3, NULL),
(220, '7501164704720002', '7501162402070716', 'Warni Suleman', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1972-04-07', NULL, 1, 5, 2, NULL),
(221, '7501161610920001', '7501162402070716', 'Mohammad H Seu', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1992-10-16', NULL, 1, 5, 33, NULL),
(222, '7501161703980002', '7501162402070716', 'Abdul Hais H Seu', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1998-03-17', NULL, 1, 11, 33, NULL),
(223, '7501160510710001', '7501162402070659', 'Yusuf S Mani', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1971-10-05', NULL, 1, 5, 3, NULL),
(224, '7501166712770001', '7501162402070659', 'Norma S Nuna', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1977-12-27', NULL, 1, 5, 2, NULL),
(225, '7501166206070001', '7501162402070659', 'Fitya Yusuf Mani', 2, 2, 1, 3, 'Pongongaila', 'HULAWALU', '2007-06-22', NULL, 1, 6, 32, NULL),
(226, '7501164505110001', '7501162402070659', 'Aulia Putri Yusuf Mani', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2011-05-05', NULL, 1, 3, 32, NULL),
(227, '7501160605840002', '7501162402070659', 'Ramang S Nuna', 1, 2, 1, 4, 'Kab.Gorontalo', 'HULAWALU', '1984-05-06', NULL, 1, 5, 4, NULL),
(228, '7501161010960002', '7501161211180001', 'David M Hasan', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1996-10-10', NULL, 1, 11, 29, NULL),
(229, '7501167001980001', '7501161211180001', 'Fitri Y S Mani', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1998-01-30', NULL, 1, 11, 2, NULL),
(230, '7501161804190002', '7501161211180001', 'Abdul Fajar Hasan', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2019-04-18', NULL, 1, 24, 33, NULL),
(231, '7571011112860002', '7501160711160001', 'Suleman A Mooduto', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1986-12-11', NULL, 1, 5, 3, NULL),
(232, '7571017004870001', '7501160711160001', 'Sri Sartika Rahim', 2, 0, 1, 2, 'Gorontalo', 'HULAWALU', '1987-04-30', NULL, 1, 19, 31, NULL),
(233, '7571010901100001', '7501160711160001', 'Abdul Nizar Mooduto', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2010-01-09', NULL, 1, 3, 32, NULL),
(234, '7501162512180001', '7501160711160001', 'Ayib Hamzah Mooduto', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2018-12-25', NULL, 1, 24, 33, NULL),
(235, '7501161206490001', '7501162402070658', 'Asni Mooduto', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1949-06-12', NULL, 1, 5, 3, NULL),
(236, '7501165003580002', '7501162402070658', 'Hadija Isima', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1958-03-10', NULL, 1, 5, 2, NULL),
(237, '7501164911930001', '7501162402070658', 'Rostin A Mooduto', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1993-11-09', NULL, 1, 8, 33, NULL),
(238, '7501164911960001', '7501162402070658', 'Firda A Mooduto', 2, 1, 1, 3, 'Pongongaila', 'HULAWALU', '1996-11-09', NULL, 1, 5, 33, NULL),
(239, '7501162410840001', '7501162919199992', 'Hasan Ladjuma', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1984-10-24', NULL, 1, 5, 3, NULL),
(240, '7501165003910003', '7501162919199992', 'Titin A Mooduto', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1991-03-10', NULL, 1, 5, 2, NULL),
(241, '7501166104100001', '7501162919199992', 'Silvana Hasana H Ladjuma', 2, 0, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-04-21', NULL, 1, 3, 32, NULL),
(242, '7501162503830002', '7501163103160003', 'Rahman I Seu', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1983-03-25', NULL, 1, 5, 3, NULL),
(243, '7501164510900001', '7501163103160003', 'Rahmawaty L Ladjuma', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1990-10-05', NULL, 1, 5, 2, NULL),
(244, '7501162312160001', '7501163103160003', 'Yunus Rahman I Seu', 1, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2016-12-23', NULL, 1, 2, 32, NULL),
(245, '7501160702780002', '7501162203120006', 'Amir Suleman', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1978-02-07', NULL, 1, 5, 3, NULL),
(246, '7501166709830004', '7501162203120006', 'Ratna Dako', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1983-09-27', NULL, 1, 5, 2, NULL),
(247, '7501162205050002', '7501162203120006', 'Ahmad Suleman', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '2005-05-22', NULL, 1, 3, 32, NULL),
(248, '7501160105750003', '7501162610070014', 'Idrus Taulani', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1975-05-01', NULL, 1, 5, 3, NULL),
(249, '7501165001780004', '7501162610070014', 'Wini D Upa', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1978-01-10', NULL, 1, 5, 2, NULL),
(250, '7501161703030003', '7501162610070014', 'Rizkianus D H Taulani', 1, 1, 1, 3, 'Pongongaila', 'HULAWALU', '2003-03-17', NULL, 1, 9, 32, NULL),
(251, '7501161706120001', '7501162610070014', 'Israk D H Taulani', 1, 0, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2012-06-17', NULL, 1, 3, 32, NULL),
(252, '7501161208840001', '7501162003120008', 'Anton A Mooduto', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1984-08-12', NULL, 1, 5, 3, NULL),
(253, '7501166803900001', '7501162003120008', 'Welfin Karim', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1984-03-28', NULL, 1, 8, 2, NULL),
(254, '7501166802150001', '7501162003120008', 'Djahira A Mooduto', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2014-02-28', NULL, 1, 3, 32, NULL),
(255, '75011646088190001', '7501162003120008', 'Jahura Mooduto', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2019-08-06', NULL, 1, 24, 33, NULL),
(256, '7501160107750076', '7501162510070017', 'Ibrahim Razak', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1975-07-01', NULL, 1, 5, 3, NULL),
(257, '7501164107760066', '7501162510070017', 'Yanti K Suleman', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1976-07-01', NULL, 1, 5, 2, NULL),
(258, '7501162101990003', '7501162510070017', 'Rianto Razak', 2, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1999-01-21', NULL, 1, 11, 33, NULL),
(259, '7501164108030002', '7501162510070017', 'Uyan Razak', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2003-08-01', NULL, 1, 9, 32, NULL),
(260, '7501112507950001', '7501160502180002', 'Dedi N Yunus', 1, 1, 1, 1, 'Molopatodu', 'HULAWALU', '1995-07-25', NULL, 1, 11, 31, NULL),
(261, '7501164206000001', '7501160502180002', 'Nur Ain Razak', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '2000-06-02', NULL, 1, 11, 29, NULL),
(262, '7501164802180001', '7501160502180002', 'Aira Putri Yunus', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2018-02-08', NULL, 1, 24, 33, NULL),
(263, '7501160709890001', '7501161603160003', 'Iman Suleman', 1, 1, 1, 1, 'Pulubala', 'HULAWALU', '1989-09-07', NULL, 1, 5, 4, NULL),
(264, '7501164203940001', '7501161603160003', 'Fatma R Hiko', 2, 1, 1, 2, 'Molamahu', 'HULAWALU', '1994-01-17', NULL, 1, 11, 2, NULL),
(265, '7501164507180001', '7501161603160003', 'Nurhalima Suleman', 2, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2018-07-05', NULL, 1, 24, 33, NULL),
(266, '7501164809520001', '7501162402070657', 'Mardia Yusuf', 2, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1952-09-08', NULL, 1, 3, 3, NULL),
(267, '7501162408650001', '7501162310080002', 'Arwin J Ntau', 1, 1, 1, 1, 'Kab.Gorontalo', 'HULAWALU', '1965-08-24', NULL, 1, 11, 1, NULL),
(268, '7501165112930001', '7501162310080002', 'Nurain Kadir Sumaila', 2, 1, 1, 2, 'Uabanga', 'HULAWALU', '1968-10-08', NULL, 1, 15, 6, NULL),
(269, '7501165112930001', '7501162310080002', 'Sri Wahyuni Ntau S.p', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1993-12-11', NULL, 1, 19, 28, NULL),
(270, '7501162008010001', '7501162310080002', 'Bayu Rizki Irawan Ntau', 1, 2, 1, 3, 'Jakarta', 'HULAWALU', '2001-08-20', NULL, 1, 18, 32, NULL),
(271, '7501161003760003', '7501162402070650', 'Ibrahim Abdullah', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1976-03-10', NULL, 1, 5, 3, NULL),
(272, '7501164708760001', '7501162402070650', 'Raplin Ismail', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1976-08-07', NULL, 1, 5, 2, NULL),
(273, '7501164606960001', '7501162402070650', 'Siskawati Abdullah', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1996-06-06', NULL, 1, 18, 32, NULL),
(274, '7501160702530001', '7501162402070656', 'Ismail Abdjul', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1953-02-07', NULL, 1, 5, 3, NULL),
(275, '7501164501540001', '7501162402070656', 'Saurin Isima', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1954-01-05', NULL, 1, 5, 2, NULL),
(276, '7501160805810001', '7501162402070656', 'Ramli Abdjul', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1981-05-08', NULL, 1, 11, 33, NULL),
(277, '7501160901880001', '7501162910100009', 'Sofyan Rahman', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1988-01-09', NULL, 1, 8, 3, NULL),
(278, '7501165204880002', '7501162910100009', 'Wisna Abdjul', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1988-04-12', NULL, 1, 5, 2, NULL),
(279, '7501166510090002', '7501162910100009', 'Tiara S Rahman', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2009-10-25', NULL, 1, 3, 32, NULL),
(280, '7501160503790002', '7501161101080001', 'Ardin Abdjul', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1979-03-05', NULL, 1, 5, 27, NULL),
(281, '7501166904800001', '7501161101080001', 'Felmi Daulima', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1980-04-29', NULL, 1, 19, 6, NULL),
(282, '7501161302050001', '7501161101080001', 'Mohamad Hairullah A Abjul', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2005-02-13', NULL, 1, 6, 32, NULL),
(283, '7501165004110001', '7501161101080001', 'Zaira Aprilia Abdjul', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2011-04-10', NULL, 1, 3, 32, NULL),
(284, '7501160910700001', '7501162402070596', 'Mohamad K Hiyola', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1970-10-09', NULL, 1, 5, 3, NULL),
(285, '7501164203750001', '7501162402070596', 'Saira Moo', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1975-03-02', NULL, 1, 5, 2, NULL),
(286, '7501162008920001', '7501162402070596', 'Febrianto Hiola', 1, 2, 1, 3, 'Pulubala', 'HULAWALU', '1992-08-20', NULL, 1, 11, 33, NULL),
(287, '7501165207110001', '7501162402070596', 'Fauziah Ramadani Hiyola', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2011-07-12', NULL, 1, 3, 32, NULL),
(288, '7501160708690001', '7501162402070648', 'Ishak K Hiola', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1969-08-07', NULL, 1, 5, 3, NULL),
(289, '7501165404730001', '7501162402070648', 'Maryam I Ahmad', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1973-04-14', NULL, 1, 4, 2, NULL),
(290, '7501165305990001', '7501162402070648', 'Perlin N Hiola', 2, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1999-05-13', NULL, 1, 18, 32, NULL),
(291, '7501160502770003', '7501162910100006', 'Hamid Hiola', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1977-02-05', NULL, 1, 5, 3, NULL),
(292, '7501165411860001', '7501162910100006', 'Marlina I Seu', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1986-11-14', NULL, 1, 5, 2, NULL),
(293, '7501160101030009', '7501162910100006', 'Ibrahim H Hiola', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '2003-01-01', NULL, 1, 9, 32, NULL),
(294, '7501161708090001', '7501162910100006', 'Indra H Hiola', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2009-08-17', NULL, 1, 3, 32, NULL),
(295, '7501160807910001', '7501162910100006', 'Ishak Seu', 1, 2, 1, 4, 'Pongongaila', 'HULAWALU', '1991-07-08', NULL, 1, 5, 33, NULL),
(296, '7501162306750001', '7501162402070655', 'Suwardi Kaluku', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1975-06-23', NULL, 1, 8, 29, NULL),
(297, '7501164405830001', '7501162402070655', 'Besti Adam', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1983-05-04', NULL, 1, 8, 2, NULL),
(298, '7501161807010001', '7501162402070655', 'Dimas Prayinto Kaluku', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2001-07-18', NULL, 1, 11, 17, NULL),
(299, '7501160102610001', '7501162402070654', 'Adam Isima', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1961-02-01', NULL, 1, 4, 3, NULL),
(300, '7501164612620001', '7501162402070654', 'Harianti S Unti', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1962-12-06', NULL, 1, 5, 2, NULL),
(301, '7501166408030002', '7501162402070654', 'Rohalya Adam', 2, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2003-08-24', NULL, 1, 9, 32, NULL),
(302, '7501161010750002', '7501160304120005', 'Adam Suleman', 1, 1, 1, 1, 'Telaga', 'HULAWALU', '1975-10-10', NULL, 1, 11, 26, NULL),
(303, '7501166812890001', '7501160304120005', 'Yusna Adam', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1989-12-28', NULL, 1, 5, 2, NULL),
(304, '7501164810100001', '7501160304120005', 'Safiitra Putri Suleman', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-10-08', NULL, 1, 3, 32, NULL),
(305, '7501160502790001', '7501162402070598', 'Ismail N Abdjul', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1979-02-05', NULL, 1, 5, 3, NULL),
(306, '7501165306780001', '7501162402070598', 'Yanti K Hiola', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1978-06-13', NULL, 1, 5, 2, NULL),
(307, '7501161311030002', '7501162402070598', 'Salim I Abdjul', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2003-11-13', NULL, 1, 9, 32, NULL),
(308, '7501162609980001', '7501160309190002', 'Andrian Hasan', 1, 1, 1, 1, 'Kab.Gorontalo', 'HULAWALU', '1998-09-26', NULL, 1, 11, 28, NULL),
(309, '7501164106990002', '7501160309190002', 'Anisa I Abjul', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1999-06-01', NULL, 1, 11, 2, NULL),
(310, '7501161207750001', '7501162402070602', 'Arman K Taulani', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1975-07-12', NULL, 1, 5, 3, NULL),
(311, '7501166208870001', '7501162402070602', 'Mimin Talib', 2, 1, 1, 2, 'Bakti', 'HULAWALU', '1987-08-22', NULL, 1, 8, 2, NULL),
(312, '7501162401100001', '7501162402070602', 'Alief Taulani', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-01-24', NULL, 1, 3, 32, NULL),
(313, '7501166707180002', '7501162402070602', 'Adel Taulani', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2018-07-27', NULL, 1, 24, 33, NULL),
(314, '7501160508700001', '7501160404190006', 'Irwan K Taulani', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1970-08-05', NULL, 1, 5, 3, NULL),
(315, '7501164108700001', '7501160404190006', 'Hamida K Abua', 2, 1, 1, 2, 'Limboto', 'HULAWALU', '1970-08-01', NULL, 1, 11, 6, NULL),
(316, '7501162105930001', '7501160404190006', 'Rizkyanus I Taulani', 1, 1, 1, 3, 'Gorontalo', 'HULAWALU', '1993-05-21', NULL, 1, 8, 33, NULL),
(317, '7501162701030001', '7501160404190006', 'Achmad Chandra I Taulani', 1, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2003-01-27', NULL, 1, 9, 32, NULL),
(318, '7501131708870007', '7501132008150001', 'Sofyan Soe', 1, 1, 1, 1, 'Tibawa', 'HULAWALU', '1987-08-17', NULL, 1, 19, 29, NULL),
(319, '7571015111910002', '7501132008150001', 'Fitriyanti Lakoro', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1991-11-11', NULL, 1, 19, 31, NULL),
(320, '7501161411150002', '7501132008150001', 'Alifudin', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2015-11-14', NULL, 1, 2, 32, NULL),
(321, '7501161002530002', '7501162402070651', 'Adi Ali', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1953-02-10', NULL, 1, 4, 3, NULL),
(322, '7501164206600001', '7501162402070651', 'dariyana Hiyadi', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1960-06-02', NULL, 1, 4, 2, NULL),
(323, '7501160107840072', '7501161407170003', 'Neni Panju', 1, 2, 1, 1, 'Gorontalo', 'HULAWALU', '1984-07-01', NULL, 1, 4, 4, NULL),
(324, '750502021960001', '7501161807160002', 'Abdul Rahman Malawu', 1, 1, 1, 1, 'Kwandang', 'HULAWALU', '1992-11-02', NULL, 1, 5, 8, NULL),
(325, '7501164107780003', '7501161807160002', 'Elvin Panju', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1983-04-23', NULL, 1, 5, 2, NULL),
(326, '7501162408160001', '7501161807160002', 'Adita Malawu', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2016-08-24', NULL, 1, 2, 32, NULL),
(327, '7501162804760001', '7501162402070600', 'Yamin K Hiola', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1976-04-28', NULL, 1, 5, 3, NULL),
(328, '7501166808760001', '7501162402070600', 'Maryam Taulani', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1976-08-28', NULL, 1, 5, 2, NULL),
(329, '7501161609980001', '7501162402070600', 'Alfinas Y Hiola', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1998-09-16', NULL, 1, 11, 33, NULL),
(330, '7501164502010002', '7501162402070600', 'Ulfa Y Hiola', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2001-02-05', NULL, 1, 18, 32, NULL),
(331, '7501161711790002', '7501162402070603', 'Yusuf Panga', 1, 1, 1, 1, 'Bakti', 'HULAWALU', '1979-11-17', NULL, 1, 11, 8, NULL),
(332, '7501164402820001', '7501162402070603', 'Lilis Taulani', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1982-02-04', NULL, 1, 8, 29, NULL),
(333, '7501162311000001', '7501162402070603', 'Indrawan Y Panga', 1, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2000-11-23', NULL, 1, 11, 33, NULL),
(334, '7501166203060001', '7501162402070603', 'Nezza Y Pangga', 2, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2006-03-22', NULL, 1, 6, 32, NULL),
(335, '7501173001920001', '7501161512150007', 'Zulkipli B Palilati', 1, 1, 1, 1, 'Daenaa', 'HULAWALU', '1992-01-30', NULL, 1, 11, 4, NULL),
(336, '7501166503960002', '7501161512150007', 'Mastuti Y Kaluku', 2, 1, 1, 2, '7501164108150002', 'HULAWALU', '1996-03-25', NULL, 1, 11, 28, NULL),
(337, '7501164108150002', '7501161512150007', 'Fauziah Z Palilati', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2015-08-01', NULL, 1, 2, 32, NULL),
(338, '7501161003770002', '7501162402070649', 'Yasin Kaluku', 1, 1, 1, 1, 'Molamahu', 'HULAWALU', '1977-03-10', NULL, 1, 5, 3, NULL),
(339, '7501166903760001', '7501162402070649', 'Hawa Moo', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1976-03-29', NULL, 1, 5, 2, NULL),
(340, '7501166903760001', '7501162402070649', 'Abit Y Kaluku', 1, 0, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2008-05-07', NULL, 1, 3, 32, NULL),
(341, '7501162710730001', '7501162910100005', 'Abdul Haris Ote', 1, 1, 1, 1, 'Makasar', 'HULAWALU', '1973-10-27', NULL, 1, 5, 1, NULL),
(342, '7501166203790001', '7501162910100005', 'Hadija I Moo', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1979-03-22', NULL, 1, 5, 2, NULL),
(343, '7501161403100001', '7501162910100005', 'Sigit Purnomo Ote', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-03-14', NULL, 1, 3, 32, NULL),
(344, '7501164803520001', '7501162910100005', 'Kasumi Hiyadi', 2, 1, 1, 4, 'Gorontalo', 'HULAWALU', '1952-03-08', NULL, 1, 4, 2, NULL),
(345, '7501162305900001', '7501162702170004', 'Odin Abdullah', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1990-05-23', NULL, 1, 4, 3, NULL),
(346, '7501164808910001', '7501162702170004', 'Tanti Tahirun', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1991-08-08', NULL, 1, 5, 2, NULL),
(347, '7501162406170002', '7501162702170004', 'Ramdan Abdullah', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2017-06-24', NULL, 1, 2, 32, NULL),
(348, '7501160508720001', '7501162402070647', 'Wahab Adam', 1, 1, 1, 1, 'Limboto', 'HULAWALU', '1971-08-05', NULL, 1, 5, 3, NULL),
(349, '7501164812720001', '7501162402070647', 'Mariko Ahmad', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1972-12-08', NULL, 1, 5, 2, NULL),
(350, '7501165707090001', '7501162402070647', 'Salsa Wahab', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2009-07-17', NULL, 1, 3, 32, NULL),
(351, '7501160406330001', '7501161209190001', 'Miksal Wahab', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1993-06-04', NULL, 1, 11, 3, NULL),
(352, '7501166001990002', '7501161209190001', 'Gita Hasnita Mohamad', 2, 1, 1, 2, 'Kab.Gorontalo', 'HULAWALU', '1999-01-20', NULL, 1, 11, 2, NULL),
(353, '7501161003630002', '7501152402070684', 'Hasan Teno', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1963-03-10', NULL, 1, 4, 3, NULL),
(354, '7501164201750001', '7501152402070684', 'Hartati K Mohi', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1975-01-02', NULL, 1, 4, 2, NULL),
(355, '7501160703990001', '7501152402070684', 'Sarton Hasan', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1999-03-07', NULL, 1, 4, 33, NULL),
(356, '7500060108020002', '7501152402070684', 'Agus Hasan', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2002-08-01', NULL, 1, 4, 33, NULL),
(357, '7501164107040011', '7501152402070684', 'Jefri Hasan', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2004-07-01', NULL, 1, 4, 33, NULL),
(358, '7501165502090002', '7501152402070684', 'Saira Hasan', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2009-02-15', NULL, 1, 3, 32, NULL),
(359, '7501164107420023', '7501160212140027', 'Ade Hiola', 2, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1942-07-01', NULL, 1, 4, 2, NULL),
(360, '7501161003760002', '7501162402070645', 'Saiful Hasan', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1976-03-10', NULL, 1, 4, 3, NULL),
(361, '7501166105710001', '7501162402070645', 'Anino H Kasim', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1971-05-21', NULL, 1, 5, 2, NULL),
(362, '7501162409040001', '7501162402070645', 'Mohamad Arif S Hasan', 1, 2, 1, 3, 'Pulubala', 'HULAWALU', '2004-09-24', NULL, 1, 6, 32, NULL),
(363, '7501160709770003', '7501162810100006', 'Ibrahim Rahman', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1977-09-07', NULL, 1, 5, 3, NULL),
(364, '7501106106850002', '7501162810100006', 'Fitriyanti Daulima', 2, 1, 1, 2, 'Telaga', 'HULAWALU', '1985-06-21', NULL, 1, 11, 10, NULL),
(365, '7501162103000001', '7501162810100006', 'Logis Sugianto Rahman', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1998-11-14', NULL, 1, 11, 33, NULL),
(366, '7501165905020001', '7501162810100006', 'Putri Sagita Rahman', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2002-05-19', NULL, 1, 9, 32, NULL),
(367, '7501162907090002', '7501162810100006', 'Rehandri Setiawan Rahman', 1, 0, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2009-07-29', NULL, 1, 3, 32, NULL),
(368, '7501161003480002', '7501162402070604', 'Rahman K Datu', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1948-03-10', NULL, 1, 4, 3, NULL),
(369, '7501164712500001', '7501162402070604', 'Hasia Hamzah', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1950-12-07', NULL, 1, 5, 2, NULL),
(370, '7501161711700001', '7501162402070604', 'Suleman R Kasim', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1978-11-17', NULL, 1, 4, 33, NULL),
(371, '7501161001830002', '7501160504120004', 'Rahman S Dude', 1, 1, 2, 1, 'Pongongaila', 'HULAWALU', '1983-01-10', NULL, 1, 4, 3, NULL),
(372, '7501167008940001', '7501160504120004', 'Umira I Mootalu', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1994-08-30', NULL, 1, 5, 2, NULL),
(373, '7501162309120001', '7501160504120004', 'Mutalif R Dude', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2012-09-23', NULL, 1, 3, 32, NULL),
(374, '7501166001200001', '7501160504120004', 'Alfiya Rahman Dude', 2, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2020-01-20', NULL, 1, 24, 33, NULL),
(375, '7501160810810001', '7501160212140024', 'Irwan Beu', 1, 1, 1, 1, 'Kab.Gorontalo', 'HULAWALU', '1981-10-08', NULL, 1, 5, 3, NULL),
(376, '7501164208840001', '7501160212140024', 'Sulastrina Ali', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1984-08-02', NULL, 1, 4, 2, NULL),
(377, '7501164305020001', '7501160212140024', 'Sintiani Irwan', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2002-05-03', NULL, 1, 9, 32, NULL),
(378, '7501165106100001', '7501160212140024', 'Zesika H Irwan', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-06-11', NULL, 1, 3, 32, NULL),
(379, '7501163001160001', '7501160212140024', 'Abdul Irwan Beu', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2016-01-30', NULL, 1, 2, 32, NULL),
(380, '7501160711660001', '7501161204110006', 'Ismail Ali', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1966-11-07', NULL, 1, 4, 3, NULL),
(381, '7501161206850002', '7501162203120008', 'Mudin S Rahman', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1985-06-12', NULL, 2, 5, 3, NULL);
INSERT INTO `t_penduduk` (`id`, `nik`, `no_kk`, `nama`, `jk`, `status`, `warganegara`, `kedudukan`, `tempat_lahir`, `alamat`, `tgl_lahir`, `foto`, `id_agama`, `id_pend`, `id_pekerjaan`, `deleted_at`) VALUES
(382, '7501165001910002', '7501162203120008', 'Yulan Adam', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1991-01-10', NULL, 1, 5, 2, NULL),
(383, '7501160406090002', '7501162203120008', 'Taufik M Rahman', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2009-06-04', NULL, 1, 3, 32, NULL),
(384, '7501166102160001', '7501162203120008', 'Sri Delvian Mudin Rahman', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2016-02-21', NULL, 1, 2, 32, NULL),
(385, '7501161002660001', '7501162402070681', 'Noho A Nusi', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1966-02-10', NULL, 1, 3, 3, NULL),
(386, '750116500666001', '7501162402070681', 'Sari Kaida', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1966-06-10', NULL, 1, 5, 2, NULL),
(387, '7501161002820001', '7501162402070605', 'Sukrin Mohamad', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1982-02-10', NULL, 1, 5, 3, NULL),
(388, '7501166201830001', '7501162402070605', 'Asna Harun', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1983-01-22', NULL, 1, 5, 2, NULL),
(389, '7501164802030001', '7501162402070605', 'Maryam S Mohamad', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2003-02-08', NULL, 1, 9, 32, NULL),
(390, '7501166808080002', '7501162402070605', 'Hapsa Pratiwi S Mohamad', 2, 1, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2008-08-28', NULL, 1, 6, 32, NULL),
(391, '7501161806810001', '7501162402070642', 'Anis Napu', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1981-06-18', NULL, 1, 4, 27, NULL),
(392, '7501164607720001', '7501162402070642', 'Rapim Mahmud', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '0972-07-06', NULL, 1, 5, 2, NULL),
(393, '7501165111910001', '7501162402070642', 'Engkliyanto Y Panju', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1991-11-11', NULL, 1, 5, 33, NULL),
(394, '7501162307970001', '7501162402070642', 'Zukliyanto Panju', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1997-07-23', NULL, 1, 11, 33, NULL),
(395, '7501165010000002', '7501162402070642', 'Olpin Panju', 2, 2, 1, 3, 'Pongongaila', 'HULAWALU', '2000-10-10', NULL, 1, 11, 33, NULL),
(396, '7501162605900001', '7501161111130008', 'Fikliyanto Y Panju', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1990-05-26', NULL, 1, 4, 3, NULL),
(397, '7501164605920001', '7501161111130008', 'Hadija Madiko', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1992-05-06', NULL, 1, 4, 2, NULL),
(398, '7501166503150001', '7501161111130008', 'Regina Aulia F Panju', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2015-03-25', NULL, 1, 2, 32, NULL),
(399, '7501165003190001', '7501161111130008', 'Rahmawati Panju', 2, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2019-03-10', NULL, 1, 24, 32, NULL),
(400, '7501161211750001', '7501162402070607', 'Rahman Hamid', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1975-11-12', NULL, 1, 5, 3, NULL),
(401, '7501164803790001', '7501162402070607', 'Rasuna Rais', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1979-03-08', NULL, 1, 5, 2, NULL),
(402, '75011624204990001', '7501162402070607', 'Arifin R Hamid', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1999-04-02', NULL, 1, 11, 33, NULL),
(403, '7501160904030001', '7501162402070607', 'Fafat R Hamid', 1, 0, 1, 3, 'Gorontalo', 'HULAWALU', '2003-04-09', NULL, 1, 9, 32, NULL),
(404, '7501166412100001', '7501162402070607', 'Celsi R Hamid', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-12-24', NULL, 1, 3, 32, NULL),
(405, '7501160107530009', '75011624020700608', 'Toke Hamid', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1953-07-01', NULL, 1, 4, 3, NULL),
(406, '75011646035000001', '75011624020700608', 'Zenab K Datu', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1950-03-06', NULL, 1, 4, 2, NULL),
(407, '7501161802030001', '75011624020700608', 'Feldiyanto Kasim', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '2003-02-18', NULL, 1, 9, 33, NULL),
(408, '7501160506740001', '7501162402070609', 'Sukri Hulopi', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1974-06-05', NULL, 1, 11, 11, NULL),
(409, '750116510780001', '7501162402070609', 'Norma Hamid', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1978-10-16', NULL, 1, 5, 2, NULL),
(410, '7501164711990001', '7501162402070609', 'Nurfin S Hulopi', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1999-11-07', NULL, 1, 18, 32, NULL),
(411, '7501165601100001', '7501162402070609', 'Nursafrin S Hulopi', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2010-01-16', NULL, 1, 3, 32, NULL),
(412, '7501162304710001', '7501162402070643', 'Kuslan Hamid', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1971-04-23', NULL, 1, 4, 3, NULL),
(413, '7501164206740001', '7501162402070643', 'Rakiba M Taulani', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1974-06-02', NULL, 1, 5, 2, NULL),
(414, '7501161207990001', '7501162402070643', 'Felki Hamid', 1, 2, 1, 3, 'Pongongaila', 'HULAWALU', '1999-07-12', NULL, 1, 11, 33, NULL),
(415, '7501161107910002', '7501160109160002', 'Irfan Usman', 1, 1, 1, 1, 'Bakti', 'HULAWALU', '1991-07-11', NULL, 1, 11, 28, NULL),
(416, '7501166410940001', '7501160109160002', 'Fera Siska Hamid', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1994-09-14', NULL, 1, 11, 2, NULL),
(417, '7501166410160001', '7501160109160002', 'Zahra Fitriany Usman', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2016-10-24', NULL, 1, 2, 32, NULL),
(418, '7501160107740049', '7501162402070612', 'Djafar Nur', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1974-07-01', NULL, 1, 5, 3, NULL),
(419, '7501165505740001', '7501162402070612', 'Nursia Abdullah', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1974-05-15', NULL, 1, 5, 2, NULL),
(420, '7501161503970001', '7501162402070612', 'Ariyanto Bakari', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1997-03-15', NULL, 1, 4, 33, NULL),
(421, '7501161503040003', '7501162402070612', 'Yusuf Nur', 1, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2004-03-15', NULL, 1, 9, 32, NULL),
(422, '750116150390001', '7501162210190001', 'Ariyanto Bakari', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1997-03-15', NULL, 1, 4, 3, NULL),
(423, '7501166810970001', '7501162210190001', 'Marni Nur', 2, 1, 1, 2, 'Kab.Gorontalo', 'HULAWALU', '1997-10-28', NULL, 1, 5, 2, NULL),
(424, '7501160706830001', '7501162810100012', 'Yunus Usman', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1983-06-07', NULL, 1, 5, 3, NULL),
(425, '7501165707920001', '7501162810100012', 'Siska Abdullah', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1992-07-17', NULL, 1, 5, 2, NULL),
(426, '7501165505090001', '7501162810100012', 'Mariyana Y Usman', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2009-05-15', NULL, 1, 3, 32, NULL),
(427, '7501165205180001', '7501162810100012', 'Jenab Usman', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2018-05-12', NULL, 1, 24, 33, NULL),
(428, '7501160607550001', '7501162402070610', 'Mahmud Usman', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1955-07-06', NULL, 1, 5, 1, NULL),
(429, '7501164506550001', '7501162402070610', 'Hapsa Abdullah', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1955-06-05', NULL, 1, 3, 2, NULL),
(430, '7501161006940001', '7501162402070610', 'Yasin M Usman', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1994-06-10', NULL, 1, 4, 33, NULL),
(431, '7501164504310001', '7501162402070610', 'Saripa Tonge', 2, 1, 1, 4, 'Gorontalo', 'HULAWALU', '1931-04-05', NULL, 1, 4, 2, NULL),
(432, '7501160107820067', '7501162510070020', 'Abubakar Usman', 1, 1, 1, 1, 'Pongongaila', 'HULAWALU', '1982-07-01', NULL, 1, 5, 3, NULL),
(433, '7501166603800001', '7501162510070020', 'Marni Yusuf', 2, 1, 1, 2, 'Pongongaila', 'HULAWALU', '1980-03-26', NULL, 1, 5, 2, NULL),
(434, '7501162208020001', '7501162510070020', 'Yuyun A Usman', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2002-08-22', NULL, 1, 11, 33, NULL),
(435, '7501161103690001', '7501162402070611', 'Yani Abdullah', 1, 0, 1, 1, 'Gorontalo', 'HULAWALU', '1969-03-11', NULL, 1, 4, 3, NULL),
(436, '7501166110730001', '7501162402070611', 'Djani G Puasa', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1969-10-21', NULL, 1, 5, 2, NULL),
(437, '7501163005960001', '7501162402070611', 'Yusuf Y Abdullah', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1996-05-30', NULL, 1, 5, 33, NULL),
(438, '7501164806110003', '7501162402070611', 'Sariah Abdullah', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2011-06-08', NULL, 1, 6, 32, NULL),
(439, '7501160503680002', '7501162402070639', 'Hamzah Gani', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1968-03-05', NULL, 1, 5, 3, NULL),
(440, '7501164305740001', '7501162402070639', 'Rostin H Poloalo', 2, 1, 1, 2, 'Gorontalo', 'HULAWALU', '1974-05-03', NULL, 1, 5, 2, NULL),
(441, '7501164306010001', '7501162402070639', 'Nurlela H Gani', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2001-06-03', NULL, 1, 11, 33, NULL),
(442, '75011166407050002', '7501162402070639', 'Nurayin H Gani', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2005-07-24', NULL, 1, 3, 32, NULL),
(443, '7501160509820001', '7501162402070483', 'Hasim Yusup', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1982-09-05', NULL, 1, 5, 3, NULL),
(444, '7501164403820001', '7501162402070483', 'Erti Abjul', 2, 0, 1, 2, 'Gorontalo', 'HULAWALU', '1982-03-04', NULL, 1, 8, 2, NULL),
(445, '7501160112030001', '7501162402070483', 'Yahyan Yusup', 1, 0, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2003-12-01', NULL, 1, 6, 32, NULL),
(446, '7501164808070003', '7501162402070483', 'Neisa Yusup', 2, 2, 1, 3, 'Kab.Gorontalo', 'HULAWALU', '2007-08-08', NULL, 1, 9, 32, NULL),
(448, '757113190219887002', '69420', 'Febrizki Mawikere', 1, 1, 1, 1, 'Gorontalo', 'HULAWALU', '1998-02-28', NULL, 1, 19, 31, NULL),
(449, '7571132802000002', '7501135001710002', 'Febrizki Mawikere', 1, 2, 1, 3, 'Gorontalo', 'HULAWALU', '1998-02-28', NULL, 1, 20, 33, NULL),
(450, '7501162402070123', '750116240207690', 'coba', 2, 2, 1, 3, 'Gorontalo', 'HULAWALU', '2016-03-09', NULL, 1, 1, 32, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` timestamp NULL DEFAULT current_timestamp(),
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `nip`, `username`, `email`, `tipe`, `password`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'admin', 'adminsikdes@gmail.com', 2, '$2y$10$7Rz9.CgaZdVVKEwi4Ntv6.RzBPWRRLhob6SBShvuWlrL1vxbt1h/W', '2021-01-08 02:37:17', 'Bt8n3PxSbWpyUGwByJ1kNtDq41dgeFaG597rUnF3hsralNaOv2jkzT1W5KP4', NULL, '2021-01-08 02:37:17'),
(4, NULL, NULL, 'febrizki', 'mawikere@gmail.com', 1, '$2y$10$cyl3bXLxMcFBRCv3CeVYF.fKR8RXHXWCtoBsOEjwa/9PuiI4rMD02', '2021-01-22 13:58:08', 'bN0g9REep9PTsYfdr17Bal7KLcsUNXmyaI7MtGEywgnzS9duL8SdT5nmdzvb', '2020-11-26 06:40:14', '2021-01-22 13:58:08'),
(6, 'Febrizki Mawikere', '7501132802000002', 'kepaladesa', 'kades@gmail.com', 3, '$2y$10$IJi5ACykw5uiVWxycDFgvuQOpFNLqQ424RTJxNL.2dq2.lvmOkleS', '2021-01-09 03:56:24', 'PczSajpsbS6wkxVmAM98YTk1sIaTXQ9m6mNl2rM9bdzonGfb3QbkM68C9x5p', '2020-11-26 06:40:14', '2021-01-09 03:56:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_agama`
--
ALTER TABLE `m_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_pekerjaan`
--
ALTER TABLE `m_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_pendidikan`
--
ALTER TABLE `m_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `t_mutasi`
--
ALTER TABLE `t_mutasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_mutasi_id_penduduk_index` (`id_penduduk`);

--
-- Indexes for table `t_penduduk`
--
ALTER TABLE `t_penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_penduduk_id_agama_index` (`id_agama`),
  ADD KEY `t_penduduk_id_pend_index` (`id_pend`),
  ADD KEY `t_penduduk_id_pekerjaan_index` (`id_pekerjaan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_agama`
--
ALTER TABLE `m_agama`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_pekerjaan`
--
ALTER TABLE `m_pekerjaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `m_pendidikan`
--
ALTER TABLE `m_pendidikan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `t_mutasi`
--
ALTER TABLE `t_mutasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `t_penduduk`
--
ALTER TABLE `t_penduduk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
