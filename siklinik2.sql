-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 06:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siklinik2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`idAdmin`, `username`, `password`) VALUES
(0, 'superadminbudewi', 'superadminpermatabunda'),
(1, 'resepsionis', 'resepsionispermatabunda'),
(2, 'apoteker', 'apotekerpermatabunda');

-- --------------------------------------------------------

--
-- Table structure for table `antrians`
--

CREATE TABLE `antrians` (
  `idAntrian` int(11) NOT NULL,
  `idPasien` int(11) NOT NULL,
  `noAntrian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `idPoli` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokters`
--

INSERT INTO `dokters` (`idPoli`, `username`, `password`) VALUES
(0, 'dokterumum', 'dokterumumpermatabunda'),
(1, 'doktergigi', 'doktergigipermatabunda'),
(2, 'dokterkia', 'dokterkiapermatabunda');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2017_11_30_164808_create_roles_table', 1),
(4, '2017_11_30_164837_create_user_roles_table', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2017_12_10_100104_create_role_user_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `obatkeluars`
--

CREATE TABLE `obatkeluars` (
  `idObat` int(11) NOT NULL,
  `namaObat` varchar(100) NOT NULL,
  `tanggalKeluar` date NOT NULL,
  `jumlahKeluar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obatmasuks`
--

CREATE TABLE `obatmasuks` (
  `idObat` int(11) NOT NULL,
  `namaObat` varchar(255) NOT NULL,
  `tanggalMasuk` date NOT NULL,
  `jumlahMasuk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obats`
--

CREATE TABLE `obats` (
  `id` int(11) NOT NULL,
  `namaObat` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obats`
--

INSERT INTO `obats` (`id`, `namaObat`, `harga`, `stock`, `updated_at`, `created_at`) VALUES
(6, 'omedom syr', 15000, 25, '2017-12-13 22:21:49', '2017-12-06 12:32:04'),
(7, 'Triocid syr', 10000, 30, '2017-12-13 20:44:12', '2017-12-06 12:32:25'),
(8, 'Gastrucid Forte', 15000, 20, '2017-12-06 12:32:52', '2017-12-06 12:32:52'),
(9, 'Kurkumex syr', 15000, 20, '2017-12-06 12:33:27', '2017-12-06 12:33:27'),
(10, 'Lyscavit', 10000, 20, '2017-12-06 12:34:01', '2017-12-06 12:34:01'),
(11, 'Dextral syr', 15000, 20, '2017-12-06 12:34:41', '2017-12-06 12:34:41'),
(12, 'Cetrizine syr', 10000, 20, '2017-12-06 12:35:28', '2017-12-06 12:35:28'),
(13, 'Salbutemol syr', 10000, 20, '2017-12-06 12:35:57', '2017-12-06 12:35:57'),
(14, 'Metro syr', 10000, 20, '2017-12-06 12:36:24', '2017-12-06 12:36:24'),
(15, 'Gitri syr', 10000, 20, '2017-12-06 12:36:51', '2017-12-06 12:36:51'),
(16, 'Molexflu syr', 10000, 20, '2017-12-06 12:37:12', '2017-12-06 12:37:12'),
(17, 'Sanmol syr', 15000, 20, '2017-12-06 12:37:39', '2017-12-06 12:37:39'),
(18, 'Alco', 70000, 20, '2017-12-06 12:38:28', '2017-12-06 12:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` int(11) NOT NULL,
  `namaPasien` varchar(100) DEFAULT NULL,
  `jeniskelamin` varchar(100) DEFAULT NULL,
  `alamatPasien` varchar(100) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `poli` int(100) DEFAULT NULL,
  `alergiobat` varchar(100) DEFAULT NULL,
  `keluhan` varchar(100) DEFAULT NULL,
  `diagnosa` varchar(255) DEFAULT NULL,
  `kesadaran` varchar(100) DEFAULT NULL,
  `tinggibadan` int(255) DEFAULT NULL,
  `beratbadan` int(255) DEFAULT NULL,
  `sistole` int(255) DEFAULT NULL,
  `diastole` int(255) DEFAULT NULL,
  `resprate` int(255) DEFAULT NULL,
  `heartrate` int(255) DEFAULT NULL,
  `anamnesa` varchar(255) DEFAULT NULL,
  `pengobatan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `noAntrian` int(255) NOT NULL,
  `cekobat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id`, `namaPasien`, `jeniskelamin`, `alamatPasien`, `tempatlahir`, `tanggallahir`, `phone`, `status`, `poli`, `alergiobat`, `keluhan`, `diagnosa`, `kesadaran`, `tinggibadan`, `beratbadan`, `sistole`, `diastole`, `resprate`, `heartrate`, `anamnesa`, `pengobatan`, `created_at`, `updated_at`, `noAntrian`, `cekobat`) VALUES
(10, 'Prames', 'Laki-laki', 'Bogor, Dramaga', 'Sunda', '2017-12-13', '085793845647', 0, 2, NULL, 'Sakit pusing banget dok', 'Sakit kepala migrain.. harus di kasih obat kepala', 'Anu', 170, 60, 180, 90, 100, 90, 'Pusing, Pusing kepala belakang,', 'Obat sakit kepala paramex', '2017-12-13 15:04:58', '2017-12-13 08:01:50', 1, 0),
(11, 'Jav', 'Laki-laki', 'Dramaga, Bogor, Jawa Barat', 'Padang', '2017-12-13', '08564563253', 1, 1, NULL, 'Sakit Gigi Gusi', 'Harus di kasih obat gigi', 'Compos menthis', 172, 70, 210, 80, 100, 110, 'Gigi berlubang, infeksi gigi..', 'obat sakit gigi', '2017-12-14 05:21:53', '2017-12-13 22:21:53', 2, 1),
(12, 'Caca', 'Perempuan', 'Bogor', 'Bogor', '2017-12-13', '05647983184294', 1, 1, NULL, 'Sakit aja kayanya ga tau sakit apa', 'Kasih obat apa', 'Anuu', 165, 55, 188, 91, 100, 89, 'Sakit apa ya', 'obat apa aja kali ya', '2017-12-14 05:21:00', '2017-12-13 22:21:00', 3, 1),
(13, 'Siapa aja', 'Laki-laki', 'dawdaw', 'Sukabumi', '2017-12-14', '08648585', 1, 0, NULL, 'hehe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-13 22:09:55', '2017-12-13 22:09:55', 12, 0),
(14, 'Siapa aja', 'Laki-laki', 'dawdaw', 'Sukabumi', '2017-12-14', '08648585', 1, 0, NULL, 'hehe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-13 22:09:56', '2017-12-13 22:09:56', 12, 0);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Top Management', '2017-12-13 01:20:49', '2017-12-13 01:20:49'),
(2, 'resepsionis', 'Meja Registrasi', '2017-12-13 01:20:49', '2017-12-13 01:20:49'),
(3, 'dokter', 'Periksa oleh dokter', '2017-12-13 01:20:49', '2017-12-13 01:20:49'),
(4, 'apoteker', 'Pengelolaan Obat', '2017-12-13 01:20:49', '2017-12-13 01:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `idPasien` int(11) NOT NULL,
  `anamnesa` varchar(255) NOT NULL,
  `tanggalPemeriksaan` date NOT NULL,
  `pemeriksaanfisik` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `namaobat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@bunda.com', '$2y$10$5BTT0BYZVSlvONQMcK9DcOgawN8gnEAX/5qAfdQLpi/5MDK4nPs5e', 'XSq4Y9q7Tnoms0kap4qicukvyqpoGzJtDN0BoR2UNql91XPQEyOguXmkV0zm', '2017-12-13 01:20:49', '2017-12-13 01:20:49'),
(2, 'resepsionis', 'resepsionis@bunda.com', '$2y$10$tl1EAb4RnuXC13TcooGAZ.bSH2uHdLPgNo59RRS.PKY9Je/TOiBXK', 'ulFWuJAf94VnARw9Cd7VRbckI319Ge6jSYOLUBOIWbG8dlgxJUBiMJhhCeoU', '2017-12-13 01:20:49', '2017-12-13 01:20:49'),
(3, 'dokter', 'dokter@bunda.com', '$2y$10$uFeWC8eQCbfJtC.JBe306u3qyeHG4LJMqPcm6VwqAN0qo4XCNSkKq', 'aNnSStawrLeQKfVdpLGdjE7OV6kPERwl8tNZdUNs7IMDRQcC9G4DMzVlO9eH', '2017-12-13 01:20:50', '2017-12-13 01:20:50'),
(4, 'apoteker', 'apoteker@bunda.com', '$2y$10$W.8q.F1jZQt48.6iS8pcC.Kj.StsK0fLOCwZILhMS5CJInQEyBnx.', 'ipRMX6gDdFZJi8EYxWTMBGJsLGGVwzfXL6VzFx2nexVHv4upJBHWfvLqO7bn', '2017-12-13 01:20:50', '2017-12-13 01:20:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `antrians`
--
ALTER TABLE `antrians`
  ADD PRIMARY KEY (`idAntrian`),
  ADD KEY `idPasien` (`idPasien`);

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`idPoli`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obatkeluars`
--
ALTER TABLE `obatkeluars`
  ADD KEY `idObat` (`idObat`);

--
-- Indexes for table `obatmasuks`
--
ALTER TABLE `obatmasuks`
  ADD KEY `idObat` (`idObat`);

--
-- Indexes for table `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poli` (`poli`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD KEY `idPasien` (`idPasien`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrians`
--
ALTER TABLE `antrians`
  MODIFY `idAntrian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `obats`
--
ALTER TABLE `obats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrians`
--
ALTER TABLE `antrians`
  ADD CONSTRAINT `antrians_ibfk_1` FOREIGN KEY (`idPasien`) REFERENCES `pasiens` (`id`);

--
-- Constraints for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD CONSTRAINT `pasiens_ibfk_1` FOREIGN KEY (`poli`) REFERENCES `dokters` (`idPoli`);

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`idPasien`) REFERENCES `pasiens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
