-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 08:06 AM
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
-- Table structure for table `m_cacat`
--

CREATE TABLE `m_cacat` (
  `id` int(10) UNSIGNED NOT NULL,
  `cacat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_cacat`
--

INSERT INTO `m_cacat` (`id`, `cacat`) VALUES
(1, 'Tuna Rungu'),
(2, 'Tuna Wicara'),
(3, 'Tuna Netra'),
(4, 'Tuna Daksa'),
(5, 'Lumpuh'),
(6, 'Sumbing'),
(7, 'Cacat Kulit'),
(8, 'Idiot'),
(9, 'Gila'),
(10, 'Stress'),
(11, 'Autis');

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
(4, 'Buruh Tani'),
(5, 'Buruh Migran'),
(6, 'Pegawai Negeri Sipil'),
(7, 'Pengrajin Industri'),
(8, 'Pedagang Keliling'),
(9, 'Peternak'),
(10, 'Nelayan'),
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
(25, 'Pengusaha Besar'),
(26, 'Arsitektur'),
(27, 'Seniman/Artis'),
(28, 'Karyawan Perusahaan Swasta'),
(29, 'Karyawan Perusahaan Pemerintah'),
(30, 'Jasa'),
(31, 'Honorer'),
(32, 'Pelajar'),
(33, 'Belum Bekerja');

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
(1, 'Usia 3-6 tahun yang belum masuk TK'),
(2, 'Usia 3-6 tahun yang sedang TK/Play Group'),
(3, 'Usia 7-18 tahun yang tidak pernah sekolah'),
(4, 'Usia 7-18 tahun yang sedang sekolah'),
(5, 'Usia 18-56 tahun yang tidak pernah sekolah'),
(6, 'Usia 18-56 tahun yang pernah SD tapi tidak pernah tamat'),
(7, 'Tamat SD'),
(8, 'Belum tamat SD/sederajat'),
(9, 'Usia 12-56 tahun tidak tamat SLTP'),
(10, 'Usia 18-56 tahun tidak tamat SLTA'),
(11, 'Tamat SMP/sederajat'),
(12, 'Tamat SMA/sederajat'),
(13, 'Tamat D-1/sederajat'),
(14, 'Tamat D-2/sederajat'),
(15, 'Tamat D-3/sederajat'),
(16, 'Tamat S-1/sederajat'),
(17, 'Tamat S-2/sederajat'),
(18, 'Tamat S-3/sederajat'),
(19, 'Tamat SLB A'),
(20, 'Tamat SLB B'),
(21, 'Tamat SLB C');

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
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_mutasi`
--

INSERT INTO `t_mutasi` (`id`, `id_penduduk`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, '2019-05-01 16:00:00', '2019-05-02 02:58:10'),
(2, 2, 1, NULL, '2020-11-26 16:00:00', '2020-11-27 02:18:13'),
(3, 5, 3, NULL, '2020-11-02 16:00:00', '2020-11-27 06:39:44');

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
  `butahuruf` tinyint(1) NOT NULL,
  `id_agama` tinyint(3) UNSIGNED NOT NULL,
  `id_pend` tinyint(3) UNSIGNED NOT NULL,
  `id_pekerjaan` tinyint(3) UNSIGNED NOT NULL,
  `id_cacat` tinyint(3) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_penduduk`
--

INSERT INTO `t_penduduk` (`id`, `nik`, `no_kk`, `nama`, `jk`, `status`, `warganegara`, `kedudukan`, `tempat_lahir`, `alamat`, `tgl_lahir`, `butahuruf`, `id_agama`, `id_pend`, `id_pekerjaan`, `id_cacat`, `deleted_at`) VALUES
(1, '7102091201710001', '7571022004100010', 'Royanto Masaudi', 1, 1, 1, 1, 'Gorontalo', 'Jl. Jamaludin Malik', '1971-01-12', 0, 1, 11, 1, 0, '2019-05-02 02:58:10'),
(2, '7102095512670002', '7571022004100010', 'Ramla Tilamuhu', 2, 1, 1, 2, 'Gorontalo', 'Jl. Jamaludin Malik', '1987-12-15', 0, 1, 11, 1, 0, NULL),
(3, '7102094308990004', '7571022004100010', 'Raodah Masaudi', 2, 2, 1, 3, 'Gorontalo', 'Jl. Jamaludin Malik', '1999-08-03', 0, 1, 12, 32, 0, NULL),
(4, '7102091806020004', '7571022004100010', 'Baharudin Masaudi', 1, 2, 1, 3, 'Gorontalo', 'Jl. Jamaludin Malik', '2002-08-12', 0, 1, 8, 32, 0, NULL),
(5, '7571020109720001', '7571021402080002', 'Romy M Dengo', 1, 1, 1, 1, 'Gorontalo', 'Jl. P.Diponegoro', '1972-09-01', 0, 1, 12, 28, 0, '2020-11-27 06:39:44'),
(6, '7571024406770001', '7571021402080002', 'Wisna A Mauna', 2, 1, 1, 2, 'Gorontalo', 'Jl. P.Diponegoro', '1977-06-04', 0, 1, 11, 2, 0, NULL),
(7, '7571022601990001', '7571021402080002', 'Moh Fadel Dengo', 1, 2, 1, 3, 'Gorontalo', 'Jl. P.Diponegoro', '1999-01-26', 0, 1, 12, 32, 0, NULL),
(8, '7571022106060001', '7571021402080002', 'Moh Fahmi Dengo', 1, 2, 1, 3, 'Gorontalo', 'Jl. P.Diponegoro', '2006-06-21', 0, 1, 8, 32, 0, NULL),
(9, '7571030811600001', '7571032702080024', 'Frans Y Mawikere', 1, 1, 1, 1, 'Tomohon', 'Jl. Rusli Datau', '1960-11-08', 0, 1, 12, 1, 0, NULL),
(10, '7571035906690001', '7571032702080024', 'Yusnita Kadir', 2, 1, 1, 2, 'Gorontalo', 'Jl. Rusli Datau', '1969-06-19', 0, 1, 11, 2, 0, NULL),
(11, '7501134512940001', '7571032702080024', 'Kharfina FY Mawikere', 2, 2, 1, 3, 'Gorontalo', 'Jl. Rusli Datau', '1994-12-05', 0, 1, 12, 28, 0, NULL),
(12, '7571030403070001', '7571032702080024', 'Kharfandi FY Mawikere', 1, 1, 1, 3, 'Gorontalo', 'Jl. Rusli Datau', '1997-03-04', 0, 1, 12, 1, 0, NULL),
(13, '7501132802000002', '7571032702080024', 'Febrizki FY Mawikere', 1, 2, 1, 3, 'Gorontalo', 'Jl. Rusli Datau', '2000-02-28', 0, 1, 12, 32, 0, NULL),
(14, '7571031108060002', '7571032702080024', 'Agustinus Mawikere', 1, 2, 1, 3, 'Gorontalo', 'Jl. Rusli Datau', '2006-08-11', 0, 1, 7, 32, 0, NULL),
(15, '757102015996001', '750413478123001', 'David Ansari Lubis', 1, 2, 1, 3, 'Donggala', 'Jl. Bengsol', '1999-05-19', 0, 1, 12, 32, 0, NULL),
(16, '75710244067700', '750413478123001', 'Kakamas Ansari Lubis', 1, 1, 1, 1, 'Donggala', 'Jl. Bengsol', '1992-01-25', 0, 1, 12, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `email`, `tipe`, `password`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'adminsikdes@gmail.com', 2, '$2y$10$7Rz9.CgaZdVVKEwi4Ntv6.RzBPWRRLhob6SBShvuWlrL1vxbt1h/W', '2020-11-26 06:39:35', 'OBrOPVYctRrRTKoo78GKP7apv6ZDAaFUNGnweS8l1igxuhudbD4NdDJD5HCD', NULL, '2020-11-26 06:39:35'),
(4, 'febrizki', 'mawikere@gmail.com', 1, '$2y$10$cyl3bXLxMcFBRCv3CeVYF.fKR8RXHXWCtoBsOEjwa/9PuiI4rMD02', '2020-11-27 01:28:34', 'ef8OGVu5fWZPaKji1hJECJe3W9fp3WKW7vJF4vbREHmYZtRXqNWNBGvxz3iI', '2020-11-26 06:40:14', '2020-11-27 01:28:34');

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
-- Indexes for table `m_cacat`
--
ALTER TABLE `m_cacat`
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
  ADD KEY `t_penduduk_id_pekerjaan_index` (`id_pekerjaan`),
  ADD KEY `t_penduduk_id_cacat_index` (`id_cacat`);

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
-- AUTO_INCREMENT for table `m_cacat`
--
ALTER TABLE `m_cacat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_pekerjaan`
--
ALTER TABLE `m_pekerjaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `m_pendidikan`
--
ALTER TABLE `m_pendidikan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_mutasi`
--
ALTER TABLE `t_mutasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_penduduk`
--
ALTER TABLE `t_penduduk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
