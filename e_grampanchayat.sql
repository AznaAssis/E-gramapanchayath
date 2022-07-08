-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 05:36 AM
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
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'birth certificate', 'All Indian Citizens need to obtain a Birth Certificate from the Government to avail various facilities provided by the Government. The birth certificate is an essential document that would be required for admission to the school, college, or any other institution. Also, a birth certificate is required for obtaining identities like passport, voter id, driving license, and marriage certificate. Finally, a birth certificate would also be helpful while applying for visas and Green Card.', 2, NULL, NULL),
(2, 'death certificate', 'As per the Registration of Birth & Deaths Act, 1969 every death has to be registered with the concerned State Government. Death Certificate is an important document issued by the Government to the nearest relatives of the deceased. In Kerala, the death certificate is issued by the Civil Registration Department stating the date, fact and cause of death. In this article, we look at the procedure for obtaining a death certificate in Kerala.', 2, NULL, NULL),
(3, 'marriage(common)', 'Marriages that are solemnized in the State of Kerala are governed by The Kerala Registration of Marriages (Common) Rules, 2008. In Kerala, marriage registration can be done online or through the Registrar offices. In this article, we review the process for marriage registration in Kerala, terms of Marriage, documents to be submitted along with Form 1 and related mandatory documents as well as conditions.', 2, NULL, NULL),
(4, 'marriage(Hindu)', 'Marriages that are solemnized in the State of Kerala are governed by The Kerala Registration of Marriages (Common) Rules, 2008. In Kerala, marriage registration can be done online or through the Registrar offices. In this article, we review the process for marriage registration in Kerala, terms of Marriage, documents to be submitted along with Form 1 and related mandatory documents as well as conditions.', 2, NULL, NULL),
(5, 'others', 'Possession Certificate in Kerala\r\nPossession certificate is a document which a property seller gives to a buyer stating the possession date of the property. Possession certificate is issued by concerned Tahsildar in Rural areas and RDO in urban areas. Possession is mandatory to include the property in the revenue records. Further, possession certificate is required to secure a loan. In this article, we look at Kerala Possession certificate application procedure in detail.', 2, NULL, NULL);

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
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Sreemoolangaram', 'srmgp@gmail.com', 896547123, 'smnagar', '123', 'Kerala', 'Ernakulam', 'Parakadav', 'aluva', '16', 25789, 8, 2, 'smnagar.png', NULL, '2022-06-28 22:53:21'),
(4, 'Kanjoor', 'kanjoorgp@gmail.com', 1235879, 'kanjoor', '123', 'Kerala', 'Ernakulam', 'Parakadav', 'aluva', '6', 3657, 8, 4, 'kanjoor.png', NULL, NULL),
(5, 'alapad', 'alapad@gm.in', 7894652798, 'alapad', 'alapad', 'Kerala', 'Kollam', 'alapad', 'alapad', '9', 4587, 5, 10, 'alapad.jpg', NULL, NULL);

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
(24, '2022_06_29_110344_create_categories_table', 6),
(25, '2022_07_01_101809_create_schemes_table', 6),
(26, '2022_07_05_081853_create_feedabcks_table', 6),
(27, '2022_07_06_082906_create_birthcertificates_table', 6),
(28, '2022_07_06_103111_create_deathcertificates_table', 6),
(31, '2022_07_07_072354_create_schemeapplications_table', 7);

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
(1, 1, 1, '2022-07-08', 'application completed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `panchayath_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 2, 'House Scheme', 'The Pradhan Mantri Awas Yojana (PMAY) is an initiative of the Government of India which aims at providing affordable housing to the urban poor by the year 2022. The scheme was first launched on 1 June 2015. The interest rate for the PMAY scheme starts at 6.50% p.a. and can be availed for a tenure of up to 20 years.', '250000', '2022-06-12', '2022-07-12', 'available', NULL, NULL),
(2, 4, 'House Scheme', 'Pradhan Mantri Awas Yojana – Urban (PMAY-U), a flagship Mission of Government of India being implemented by Ministry of Housing and Urban Affairs (MoHUA), was launched on 25th June 2015. The Mission addresses urban housing shortage among the EWS/LIG and MIG categories including the slum dwellers by ensuring a pucca house to all eligible urban households by the year 2022, when Nation completes 75 years of its Independence.', '25000', '2022-07-15', '2022-08-07', 'available', NULL, NULL);

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
(4, 'abhirami', 'Kanjoor', 4856469, 'abhirami@gma.in', 'abhirami', 'abhirami', NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deathcertificates`
--
ALTER TABLE `deathcertificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
