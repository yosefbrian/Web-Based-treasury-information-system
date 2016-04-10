-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2016 at 09:19 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beacukai`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemberitahuan`
--

CREATE TABLE `pemberitahuan` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pemberitahuan`
--

INSERT INTO `pemberitahuan` (`id`, `judul`, `deskripsi`, `filename`, `created_at`, `updated_at`) VALUES
(8, 'adda', 'dwadaad', 'Biodata Yudha new.docx', '2016-04-10 00:02:40', '2016-04-10 00:02:40'),
(9, 'daadad', 'adadwd', 'Akuntabilitas dan pengandalian.pptx', '2016-04-10 00:02:51', '2016-04-10 00:02:51'),
(11, 'adawda', 'awdawawd', 'DataPegawai.xls', '2016-04-10 00:16:19', '2016-04-10 00:16:19'),
(12, 'ahasy', 'addawda', 'kodok.xls', '2016-04-10 00:16:47', '2016-04-10 00:16:47'),
(13, 'addwdaw', 'adwadwadw', 'invoice.PNG', '2016-04-10 00:17:05', '2016-04-10 00:17:05'),
(14, 'assss', 'aaaaaaaaaaa', 'Lambang_Kota_Yogyakarta.svg.png', '2016-04-10 00:17:22', '2016-04-10 00:17:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
