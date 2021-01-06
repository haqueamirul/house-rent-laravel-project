-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 06:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basavara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amirul haque', 'admin@gmail.com', NULL, '$2y$10$cO9jLrIQ81C7yhLClwIB0eGXkMSL2qJN/BiB5kDbeOIxIrrz43H5G', '01778539887', NULL, NULL, NULL),
(2, 'Amirul', 'superadmin@gmail.com', NULL, 'e68c7f4bb71d0eb22e61e26682822d7c', '', NULL, NULL, NULL),
(3, 'amirul haque', 'basaadmin@gmail.com', NULL, '$2y$10$1vc0l/VemA83uX/U.Vxty.2i891Mby7RcSPsw64N4lJTYorvOvyFW', '01778539887', NULL, NULL, NULL),
(4, 'Basabhara Admin-One', 'adminone@basabhara.com', NULL, '$2y$10$1c3vMj6KwYamwm8bZ7vONOVJ3bMsnsd01NmW8LSFx3ZFw7FD6jFJG', '01778539887', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_bn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_en`, `category_bn`, `created_at`, `updated_at`) VALUES
(1, 'House Rent', 'বাসাভাড়া', NULL, NULL),
(2, 'Sublet', 'সাবলেট ভাড়া', NULL, NULL),
(3, 'Office Rent', 'অফিস ভাড়া', NULL, NULL),
(4, 'Flat Rent', 'ফ্লাট ভাড়া', NULL, NULL),
(6, 'House Sell', 'বাসা বিক্রয়', NULL, NULL),
(7, 'Flat Sell', 'ফ্লাট বিক্রয়', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_bn`, `country_en`, `soft_delete`, `created_at`, `updated_at`) VALUES
(1, 'বাংলাদেশ', 'Bangladesh', '0', NULL, NULL),
(3, 'পাকিস্তান', 'Pakistan', '0', NULL, NULL),
(4, 'barot', 'India', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_en`, `district_bn`, `created_at`, `updated_at`) VALUES
(1, 'Sylhet', 'সিলেট', NULL, NULL),
(3, 'Sunamgonj', 'সুনামগঞ্জ', NULL, NULL),
(4, 'Hobigonj', 'হবিগঞ্জ', NULL, NULL),
(5, 'Moulvibazar', 'মৌলভীবাজার', NULL, NULL),
(6, 'Dhaka', 'ঢাকা', NULL, NULL),
(7, 'Faridpur', 'ফরিদপুর', NULL, NULL),
(8, 'Gazipur', 'গাজীপুর', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `country_id`, `division_bn`, `division_en`, `created_at`, `updated_at`) VALUES
(1, '1', 'সিলেট', 'Sylhet', NULL, NULL),
(2, '1', 'ঢাকা', 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_09_10_192928_create_admins_table', 2),
(5, '2020_09_11_102232_create_countries_table', 3),
(6, '2020_09_11_102725_create_divisions_table', 3),
(7, '2020_09_12_064344_create_districts_table', 4),
(8, '2020_09_12_064441_create_subdistricts_table', 4),
(9, '2020_09_12_083045_create_propertyposts_table', 5),
(10, '2020_09_12_091432_create_categories_table', 6);

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
-- Table structure for table `propertyposts`
--

CREATE TABLE `propertyposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `dist_id` int(11) NOT NULL,
  `subdist_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bath_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bath_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `belconi_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `belconi_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garage_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garage_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_fixed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fulladdress_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fulladdress_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(955) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertyposts`
--

INSERT INTO `propertyposts` (`id`, `cat_id`, `country_id`, `division_id`, `dist_id`, `subdist_id`, `user_id`, `title_en`, `title_bn`, `desc_en`, `desc_bn`, `bed_en`, `bed_bn`, `bath_en`, `bath_bn`, `belconi_en`, `belconi_bn`, `garage_en`, `garage_bn`, `price_en`, `price_bn`, `price_fixed`, `gas`, `area_en`, `area_bn`, `fulladdress_en`, `fulladdress_bn`, `phone_en`, `phone_bn`, `email`, `image`, `post_date`, `post_month`, `status`, `created_at`, `updated_at`) VALUES
(33, 1, 1, 1, 3, 1, 4, '3 bed basabhara', '৩ বেড বাসাভাড়া', NULL, NULL, '3', NULL, '2', NULL, '1', NULL, '1', NULL, '15000', NULL, '1', '1', 'chhatak', NULL, 'ronomongal', NULL, '0124585552', NULL, 'admin@gmail.com', 'public/postimages/5f7d641494a15.jpg', '07-10-2020', 'Oct', '1', NULL, NULL),
(34, 1, 1, 1, 3, 1, 4, '1 bed basabhara', '৩ বেড বাসাভাড়া fg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15000', NULL, '1', '2', 'chhatak', NULL, 'ronomongal', NULL, '0124585552', NULL, NULL, 'public/postimages/5f7d6518ad706.jpg', '07-10-2020', 'Oct', '1', NULL, NULL),
(35, 3, 1, 1, 3, 1, NULL, '1 bed basabhara', '2 বেড বাসাভাড়া', NULL, NULL, '6', NULL, '4', NULL, '3', NULL, '1', NULL, '15000', NULL, '1', '2', 'chhatak', NULL, 'ronomongal', NULL, '0124585552', NULL, NULL, 'public/postimages/5f7d6733751dd.jpg', '07-10-2020', 'Oct', '0', NULL, NULL),
(36, 3, 1, 1, 3, 1, NULL, '0211 bed basabhara', '250 বেড বাসাভাড়া', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15000', NULL, '1', '1', 'chhatak', NULL, 'ronomongal', NULL, '0124585552', NULL, NULL, 'public/postimages/5f7d68ab1692b.jpg', '07-10-2020', 'Oct', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subdistricts`
--

CREATE TABLE `subdistricts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subdistricts`
--

INSERT INTO `subdistricts` (`id`, `district_id`, `subdistrict_en`, `subdistrict_bn`, `created_at`, `updated_at`) VALUES
(1, '3', 'Chhatak', 'ছাতক', NULL, NULL),
(4, '1', 'Sylhet Sodor', 'সিলেট সদর', NULL, NULL),
(5, '1', 'Jalalabad', 'জালালাবাদ', NULL, NULL);

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amirul', 'useremail@gmail.com', NULL, '$2y$10$8/Yl91TS2gquo.YB/ZjMzurzLHJ7sAevwsYm4Wspf/kMSDMm9KFpO', NULL, '2020-09-10 13:31:19', '2020-09-10 13:31:19'),
(2, 'Amirul haque', 'usertwo@gmail.com', NULL, '$2y$10$1c3vMj6KwYamwm8bZ7vONOVJ3bMsnsd01NmW8LSFx3ZFw7FD6jFJG', NULL, '2020-10-03 00:44:31', '2020-10-03 00:44:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `propertyposts`
--
ALTER TABLE `propertyposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdistricts`
--
ALTER TABLE `subdistricts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `propertyposts`
--
ALTER TABLE `propertyposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subdistricts`
--
ALTER TABLE `subdistricts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
