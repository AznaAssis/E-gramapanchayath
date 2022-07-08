-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 01:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_grampanchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `birthcertificates`
--

CREATE TABLE `birthcertificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gpid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `childnname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathernname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permenantaddress` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentaddress` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicationdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending verification',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birthcertificates`
--

INSERT INTO `birthcertificates` (`id`, `gpid`, `userid`, `childnname`, `fathernname`, `mothername`, `dob`, `permenantaddress`, `currentaddress`, `gender`, `birthplace`, `applicationdate`, `bill`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'akhila', 'Thankachan', 'zxcvbn', '10/05/2022', 'edjlksadrywerwere', 'gertertwet', 'female', 'Ernakulam', '2022-07-22', '02.jpg', 'approve', NULL, '2022-07-08 06:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `discription`, `gpid`, `created_at`, `updated_at`) VALUES
(1, 'birth certificate', 'All Indian Citizens need to obtain a Birth Certificate from the Government to avail various facilities provided by the Government. The birth certificate is an essential document that would be required for admission to the school, college, or any other institution. Also, a birth certificate is required for obtaining identities like passport, voter id, driving license, and marriage certificate. Finally, a birth certificate would also be helpful while applying for visas and Green Card.', 1, NULL, NULL),
(2, 'death certificate', 'All Indian Citizens need to obtain a Birth Certificate from the Government to avail various facilities provided by the Government. The birth certificate is an essential document that would be required for admission to the school, college, or any other institution. Also, a birth certificate is required for obtaining identities like passport, voter id, driving license, and marriage certificate. Finally, a birth certificate would also be helpful while applying for visas and Green Card.', 1, NULL, NULL),
(3, 'marriage(common)', 'All Indian Citizens need to obtain a Birth Certificate from the Government to avail various facilities provided by the Government. The birth certificate is an essential document that would be required for admission to the school, college, or any other institution. Also, a birth certificate is required for obtaining identities like passport, voter id, driving license, and marriage certificate. Finally, a birth certificate would also be helpful while applying for visas and Green Card.', 1, NULL, NULL),
(4, 'marriage(Hindu)', 'All Indian Citizens need to obtain a Birth Certificate from the Government to avail various facilities provided by the Government. The birth certificate is an essential document that would be required for admission to the school, college, or any other institution. Also, a birth certificate is required for obtaining identities like passport, voter id, driving license, and marriage certificate. Finally, a birth certificate would also be helpful while applying for visas and Green Card.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deathcertificates`
--

CREATE TABLE `deathcertificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gpid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathernname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rcard` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicationdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending verification',
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deathcertificates`
--

INSERT INTO `deathcertificates` (`id`, `gpid`, `userid`, `name`, `fathernname`, `mothername`, `dod`, `rcard`, `certificate`, `gender`, `applicationdate`, `bill`, `status`, `updated_at`) VALUES
(1, '1', '1', 'sjdhawdas', 'asdfg', 'zxcvbn', '10/05/2022', '1.jpg', '01.jpg', 'female', '2022-07-09', 'banner-bg.jpg', 'approve', '2022-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedabcks`
--

CREATE TABLE `feedabcks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE `gps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` bigint(20) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taluk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wards` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `population` int(11) NOT NULL,
  `schools` int(11) NOT NULL,
  `hospitals` int(11) NOT NULL,
  `gpimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gps`
--

INSERT INTO `gps` (`id`, `name`, `email`, `phno`, `username`, `password`, `state`, `district`, `bp`, `taluk`, `wards`, `population`, `schools`, `hospitals`, `gpimage`, `created_at`, `updated_at`) VALUES
(1, 'Sreemoolangaram', 'srmgp@gmail.com', 896547123, 'smnagar', '123', 'Kerala', 'Ernakulam', 'Parakadav', 'aluva', '16', 25789, 8, 2, 'smnagar.png', NULL, '2022-06-28 22:53:21'),
(6, 'alapad', 'alapad@gm.in', 54158746, 'alapad', '123', 'Kerala', 'Alappuzha', 'alapad', 'alapad', '12', 52469, 5894, 12, 'alapad.jpg', NULL, NULL),
(7, 'Kanjoor', 'kanjoorgp@gmail.com', 1235748, 'kanjoor', '12365', 'Kerala', 'Ernakulam', 'Parakadav', 'aluva', '16', 569874, 5, 12, 'gp.png', NULL, NULL),
(8, 'kalady', 'kalady@gmin', 98545, 'kalady', '123', 'Kerala', 'Ernakulam', 'kalady', 'kalady', '15', 56987, 12, 15, 'gp.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marriagecertificates`
--

CREATE TABLE `marriagecertificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mtype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hphoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wphoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hrelegion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wrelegion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hcast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wcast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoccupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `woccupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidproof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `widproof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending verification',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marriagecertificates`
--

INSERT INTO `marriagecertificates` (`id`, `mtype`, `userid`, `gpid`, `hphoto`, `wphoto`, `hname`, `wname`, `hrelegion`, `wrelegion`, `hcast`, `wcast`, `hage`, `wage`, `hoccupation`, `woccupation`, `hidproof`, `widproof`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hindu', '1', '1', 'banner-bg.jpg', 'banner-bg.jpg', 'sasd', 'erewr', 'Hindu', 'Hindu', 'Ezhava', 'Ezhava', '21', '21', 'sgbdhsadf', 'safdasdsa', 'banner-bg.jpg', 'banner-bg.jpg', 'approve', NULL, '2022-07-08 06:17:20');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_28_102245_create_gps_table', 2),
(8, '2022_06_29_044119_create_secretaries_table', 3),
(9, '2022_06_29_052842_create_admins_table', 4),
(11, '2022_06_29_053808_create_usertables_table', 5),
(38, '2022_06_29_110344_create_categories_table', 6),
(39, '2022_07_01_101809_create_schemes_table', 6),
(40, '2022_07_05_081853_create_feedabcks_table', 6),
(41, '2022_07_06_082906_create_birthcertificates_table', 6),
(42, '2022_07_06_103111_create_deathcertificates_table', 6),
(43, '2022_07_07_072354_create_schemeapplications_table', 6),
(44, '2022_07_08_064053_create_marriagecertificates_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schemeapplications`
--

CREATE TABLE `schemeapplications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schemeid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'application completed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schemeapplications`
--

INSERT INTO `schemeapplications` (`id`, `schemeid`, `userid`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-07-10', 'verified', NULL, '2022-07-08 05:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `panchayath_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`id`, `panchayath_id`, `name`, `about`, `amount`, `adate`, `enddate`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'House Scheme', 'saedweiwqe\r\nwqweqweqw\r\nweeqeqweqwehwqrwqe\r\ndfsdfuqwieoq', '250000', '2022-07-08', '2022-08-07', 'available', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `secretaries`
--

CREATE TABLE `secretaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchayth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `secretaries`
--

INSERT INTO `secretaries` (`id`, `name`, `panchayth`, `phno`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(4, 'abhirami', 'Sreemoolangaram', 4856469, 'abhirami@gma.in', 'abhirami', 'abhirami', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usertables`
--

CREATE TABLE `usertables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` bigint(20) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `yob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchayth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `housename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `streetaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pfname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `wards` int(11) NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usertables`
--

INSERT INTO `usertables` (`id`, `name`, `email`, `phno`, `username`, `password`, `gender`, `nationality`, `age`, `yob`, `state`, `district`, `panchayth`, `housename`, `streetaddress`, `pfname`, `pincode`, `wards`, `job`, `marital_status`, `created_at`, `updated_at`) VALUES
(1, 'azna', 'azna@gmil.in', 9539337640, 'azna', '123', 'female', 'indian', 22, '2000', 'Kerala', 'Ernakulam', 'Sreemoolangaram', '321C', 'Sreemoolanagaram', 'Sreemoolanagaram', 683580, 10, 'Student', 'Married', NULL, '2022-07-07 00:00:34'),
(2, 'akhila thankachan', 'akhila@gm.in', 8965712334, 'akhila', '123', 'female', 'indian', 21, '2001', 'Kerala', 'Ernakulam', 'Kanjoor', '123B', 'Thattanpady', 'Kanjoor', 683575, 3, 'Student', 'Single', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthcertificates`
--
ALTER TABLE `birthcertificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deathcertificates`
--
ALTER TABLE `deathcertificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedabcks`
--
ALTER TABLE `feedabcks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gps`
--
ALTER TABLE `gps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marriagecertificates`
--
ALTER TABLE `marriagecertificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schemeapplications`
--
ALTER TABLE `schemeapplications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretaries`
--
ALTER TABLE `secretaries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `secretaries_panchayth_unique` (`panchayth`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usertables`
--
ALTER TABLE `usertables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `birthcertificates`
--
ALTER TABLE `birthcertificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deathcertificates`
--
ALTER TABLE `deathcertificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedabcks`
--
ALTER TABLE `feedabcks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gps`
--
ALTER TABLE `gps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `marriagecertificates`
--
ALTER TABLE `marriagecertificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schemeapplications`
--
ALTER TABLE `schemeapplications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `secretaries`
--
ALTER TABLE `secretaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertables`
--
ALTER TABLE `usertables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
