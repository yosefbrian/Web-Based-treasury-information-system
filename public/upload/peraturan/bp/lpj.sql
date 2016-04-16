-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2016 at 03:07 PM
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
-- Table structure for table `lpj`
--

CREATE TABLE `lpj` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lpj`
--

INSERT INTO `lpj` (`id`, `judul`, `deskripsi`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'LPJ 1 Testing', 'ini LPJ tentang pembelian telek ', 'Test_Data_LPJ.docx', NULL, NULL),
(2, 'Kodok', 'Sapi', '', '2016-04-09 05:23:33', '2016-04-09 05:23:33'),
(3, 'telek', 'fefeffwefwf', '', '2016-04-09 05:33:02', '2016-04-09 05:33:02'),
(4, 'effewwfeefw', 'ewfewfewef', '', '2016-04-09 05:33:08', '2016-04-09 05:33:08'),
(5, 'ewffewfewefw', 'ewefewefwefwe', '', '2016-04-09 05:33:13', '2016-04-09 05:33:13'),
(6, 'ewfwfefewf', 'wefwfefwe', '', '2016-04-09 05:33:17', '2016-04-09 05:33:17'),
(7, 'ewffweweffew', 'efwefwefweffwe', '', '2016-04-09 05:33:22', '2016-04-09 05:33:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lpj`
--
ALTER TABLE `lpj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lpj`
--
ALTER TABLE `lpj`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
