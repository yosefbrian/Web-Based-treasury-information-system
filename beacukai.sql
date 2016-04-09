-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2016 at 05:45 AM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `on_post` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `from_user` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_01_15_105324_create_roles_table', 1),
('2015_01_15_114412_create_role_user_table', 1),
('2015_01_26_115212_create_permissions_table', 1),
('2015_01_26_115523_create_permission_role_table', 1),
('2015_02_09_132439_create_permission_user_table', 1),
('2016_04_08_140509_posts', 2),
('2016_04_08_140527_comments', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `body`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'wdoiwjdoids', '<p>dwpdakpakfs[sdka[dsk[dsa[kdsa [d[ass[pakd[psdk[pdsak[dk[dsa&nbsp; asdk[sadkd[sakdsakpodsajopdsa</p>', 'wdoiwjdoids', 1, '2016-04-08 09:17:54', '2016-04-08 09:17:54'),
(2, 1, 'Jon Banana', '<p><strong>Duck eat banana in the park with fish</strong></p>', 'jon-banana', 1, '2016-04-08 09:32:32', '2016-04-08 09:32:32'),
(4, 1, 'Duckers', '<p>Duck eat banana in the park ndaodnoidnaoisndoandsondsaodnsaoidnsodnsondaoidsnodsanoadnsodsnaodsanodsa</p>', 'duckers', 1, '2016-04-08 09:34:07', '2016-04-08 09:34:07'),
(5, 1, 'Duckers Indo', '<p>Duck eat banana in the park ndaodnoidnaoisndoandsondsaodnsaoidnsodnsondaoidsnodsanoadnsodsnaodsanodsa</p>', 'duckers-indo', 1, '2016-04-08 09:36:56', '2016-04-08 09:36:56'),
(6, 1, 'Bokong Besi', '<p>oakpkpasdkdk[dks[ak[ka[dsa[adks[dks[dska[dak[ak[aksdk[pdsads</p>', 'bokong-besi', 1, '2016-04-08 09:37:31', '2016-04-08 09:37:31'),
(7, 1, 'WC Terbang', '<p>ja[ojad[dj[sjd[ak[adpk[pdskp[dsk[psdaasd</p>', 'wc-terbang', 1, '2016-04-08 09:38:49', '2016-04-08 09:38:49'),
(8, 1, 'WC Terbang2', '<p>ja[ojad[dj[sjd[ak[adpk[pdskp[dsk[psdaasd</p>', 'wc-terbang2', 1, '2016-04-08 09:39:47', '2016-04-08 09:39:47'),
(9, 1, 'Jon Banana2', '<p>WEWWQAWDaaASSS GVGEGERGRRGRGRGERGGRREGGRGGERRGGRGGREG</p>', 'jon-banana2', 1, '2016-04-08 10:09:09', '2016-04-08 10:09:09'),
(10, 1, 'Jon Banana234', '<p>WEWWQAWDaaASSS GVGEGERGRRGRGRGERGGRREGGRGGERRGGRGGREG</p>', 'jon-banana234', 1, '2016-04-08 10:09:38', '2016-04-08 10:09:38'),
(12, 1, 'Jon Banana23445646556546', '<p>WEWWQAWDaaASSS GVGEGERGRRGRGRGERGGRREGGRGGERRGGRGGREG</p>', 'jon-banana23445646556546', 1, '2016-04-08 10:10:05', '2016-04-08 10:10:05'),
(13, 1, 'what the duck ', '<p>dqwplwdq[ldw[ld[]ldw dlsadsa</p>', 'what-the-duck', 1, '2016-04-08 10:17:52', '2016-04-08 10:17:52'),
(14, 1, 'what the duck 543', '<p>dqwplwdq[ldw[ld[]ldw dlsadsa</p>', 'what-the-duck-543', 1, '2016-04-08 10:20:53', '2016-04-08 10:20:53'),
(22, 1, 'ddwawsdsa', '<p>dsadsaasd</p>', 'ddwawsdsa', 1, '2016-04-08 10:46:05', '2016-04-08 10:46:05'),
(23, 1, 'ddwawsdsaddsds', '<p>dsadsaasddasdsaads</p>', 'ddwawsdsaddsds', 1, '2016-04-08 10:50:36', '2016-04-08 10:50:36'),
(24, 1, 'ddwawsdsaddsdsa', '<p>dsadsaasddasdsaads</p>', 'ddwawsdsaddsdsa', 1, '2016-04-08 11:02:46', '2016-04-08 11:02:46'),
(25, 1, 'kodok jaran', '<p>daadadwawawddwaadwdwaaddaw</p>', 'kodok-jaran', 1, '2016-04-08 11:04:48', '2016-04-08 11:04:48'),
(27, 1, 'kodok jaran2', '<p>daadadwawawddwaadwdwaaddaw</p>', 'kodok-jaran2', 1, '2016-04-08 11:05:17', '2016-04-08 11:05:17'),
(28, 1, 'kodok jaran23', '<p>daadadwawawddwaadwdwaaddaw</p>', 'kodok-jaran23', 1, '2016-04-08 11:05:58', '2016-04-08 11:05:58'),
(30, 1, 'kodok jaran234', '<p>daadadwawawddwaadwdwaaddaw</p>', 'kodok-jaran234', 1, '2016-04-08 11:07:22', '2016-04-08 11:07:22'),
(31, 1, 'kodok jaran2345', '<p>daadadwawawddwaadwdwaaddaw</p>', 'kodok-jaran2345', 1, '2016-04-08 11:08:47', '2016-04-08 11:08:47'),
(32, 1, 'kodok jaran23456', '<p>daadadwawawddwaadwdwaaddaw</p>', 'kodok-jaran23456', 1, '2016-04-08 11:09:13', '2016-04-08 11:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, 1, NULL, NULL),
(2, 'BP', 'BP', NULL, 2, NULL, NULL),
(3, 'SPD', 'SPD', NULL, 3, NULL, NULL),
(4, 'klien', 'Klien', NULL, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$VAtWghvhOMucH8Lwf/BvZuOPvZiTwDndt1QQj7/qn.bLHNs4bMSj2', 'KTni7K7ZMna7AnAzZKUrA8WDHWSJixMhj7DVybXTjV2iLTtJkwYifdbfNthN', '2016-04-06 23:33:25', '2016-04-08 08:49:44'),
(2, 'bp', 'bp@gmail.com', '$2y$10$h1nxBXe/5bcvqIF2J9u58OU20IXeN5hh7vMnvGQjVvwNNfAxsasZO', '3fb2BMqdZAuoeHwNl0h9cu7MHrev8CuY7NGv395AynLEd5ReQsNuEW27AEUL', '2016-04-06 23:33:55', '2016-04-07 00:02:43'),
(3, 'spd', 'spd@gmail.com', '$2y$10$oD1EGflePWlDPNrZmL8ak.LftWnoL6OmjltQ1/Q9Wo/3Jl.Or/Lmm', 'WAak4mv9L2dpwRrwwj1ao4LKjlYOZM4S8yK9FfAgLbWCFHDBJyvcvKgt7Otb', '2016-04-06 23:34:25', '2016-04-06 23:34:28'),
(4, 'klien', 'klien@gmail.com', '$2y$10$rHWeZvEf2Pwt5TA9V9OA1.TZik4PdlM6Fov8MEN6XC.CdvQA/a2Lq', 'gPRGvc6eggUNs3mjHWTUcubCvG5s95ZSqPyWPU3aMkVpr5rqXuNWuhwJKbC2', '2016-04-06 23:34:45', '2016-04-06 23:35:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_on_post_foreign` (`on_post`),
  ADD KEY `comments_from_user_foreign` (`from_user`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_from_user_foreign` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_on_post_foreign` FOREIGN KEY (`on_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
