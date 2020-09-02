-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 09:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-restaurant-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', 'breakfast', '2020-08-25 02:13:09', '2020-08-26 06:36:49'),
(2, 'Lunch', 'lunch', '2020-08-25 02:13:09', '2020-08-26 06:37:06'),
(3, 'FastFood', 'fastfood', '2020-08-25 02:13:09', '2020-08-26 06:37:21'),
(4, 'Dinner', 'dinner', '2020-08-25 02:13:09', '2020-08-26 06:37:33'),
(5, 'Dissert', 'dissert', '2020-08-25 02:13:09', '2020-08-26 06:37:49'),
(6, 'Drinks', 'drinks', '2020-08-25 02:13:09', '2020-08-26 06:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'MR Mizan', 'admin@test.com', 'test subject', 'test message', '2020-08-29 09:31:34', '2020-08-29 09:31:34');

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'adipisci', '<p>Provident et corporis.</p>', 759, 'adipisci-2020-08-26-5f46551699bd0.jpg', '2020-08-25 02:13:10', '2020-08-26 06:27:02'),
(2, 2, 'quaerat', '<p>Libero libero sunt.</p>', 660, 'quaerat-2020-08-26-5f4658686a6be.png', '2020-08-25 02:13:10', '2020-08-26 06:41:12'),
(3, 2, 'eos', '<p>Et odio.</p>', 155, 'eos-2020-08-26-5f46587fa23de.jpg', '2020-08-25 02:13:10', '2020-08-26 06:41:38'),
(4, 3, 'aperiam', '<p>Sint harum.</p>', 256, 'aperiam-2020-08-26-5f465899e7293.jpg', '2020-08-25 02:13:10', '2020-08-26 06:42:02'),
(5, 3, 'ad', 'Voluptatem qui voluptatem.', 439, 'https://lorempixel.com/640/480/?53282', '2020-08-25 02:13:10', '2020-08-25 02:13:10'),
(7, 4, 'totam', '<p>Dolore quisquam debitis.</p>', 777, 'totam-2020-08-26-5f4658dc74ec9.jpg', '2020-08-25 02:13:10', '2020-08-26 06:43:08'),
(8, 4, 'qui', 'Voluptatem ut dolorum.', 737, 'https://lorempixel.com/640/480/?57318', '2020-08-25 02:13:10', '2020-08-25 02:13:10'),
(11, 5, 'magnam', 'Expedita minima dicta.', 141, 'https://lorempixel.com/640/480/?77684', '2020-08-25 02:13:10', '2020-08-25 02:13:10'),
(12, 5, 'ipsam', 'Dolores voluptatem.', 568, 'https://lorempixel.com/640/480/?24274', '2020-08-25 02:13:10', '2020-08-25 02:13:10'),
(13, 6, 'id', '<p>Expedita qui.</p>', 196, 'id-2020-08-26-5f465908ec280.png', '2020-08-25 02:13:10', '2020-08-26 06:43:53'),
(14, 6, 'voluptatem', '<p>Dolore quis culpa.</p>', 707, 'voluptatem-2020-08-26-5f4658152d3e5.png', '2020-08-25 02:13:11', '2020-08-26 06:39:49'),
(15, 6, 'ut', '<p>Atque non non.</p>', 292, 'ut-2020-08-26-5f46583198823.jpg', '2020-08-25 02:13:11', '2020-08-26 06:40:17'),
(16, 1, 'porota with eggs', '<p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum&nbsp;</p>', 84, 'porota-with-eggs-2020-08-26-5f4659742820b.png', '2020-08-26 06:45:40', '2020-08-26 06:45:40');

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
(83, '2014_10_12_000000_create_users_table', 1),
(84, '2014_10_12_100000_create_password_resets_table', 1),
(85, '2019_08_19_000000_create_failed_jobs_table', 1),
(86, '2020_07_18_070350_create_sliders_table', 1),
(87, '2020_08_22_153316_create_categories_table', 1),
(88, '2020_08_23_072948_create_items_table', 1),
(89, '2020_08_26_160302_create_reservations_table', 2),
(90, '2020_08_28_180659_create_contacks_table', 3),
(91, '2020_08_29_152634_create_contacts_table', 4),
(92, '2020_08_30_135714_create_restaurant_infos_table', 5);

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_and_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phone`, `email`, `date_and_time`, `message`, `status`, `created_at`, `updated_at`) VALUES
(2, 'test name', '01699338822', 'admin@gmail.com', '31 July 2020 - 09:11 AM', 'Reservation 2', 1, '2020-08-27 12:16:28', '2020-09-01 08:44:06'),
(3, 'MR Mizan', '01699338822', 'test@gmail.com', '31 August 2020 - 09:11 PM', 'Test reservation', 1, '2020-08-27 12:34:19', '2020-08-28 11:46:29'),
(4, 'MR Mizan', '01699338822', 'admin@gmail.com', '01 September 2020 - 08:11 PM', 'test', 1, '2020-09-01 08:50:00', '2020-09-01 08:50:30'),
(5, 'test item', '01699338822', 'mrmizanbd93@gmail.com', '01 September 2020 - 08:11 PM', 'testing', 1, '2020-09-01 08:54:22', '2020-09-01 09:01:21'),
(6, 'MR Mizan', '01699338822', 'admin@test.com', '01 September 2020 - 10:11 PM', 'test', 0, '2020-09-01 10:05:57', '2020-09-01 10:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_infos`
--

CREATE TABLE `restaurant_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gplus_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ln_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant_infos`
--

INSERT INTO `restaurant_infos` (`id`, `address`, `phone`, `email`, `fb_link`, `tw_link`, `gplus_link`, `ln_link`, `created_at`, `updated_at`) VALUES
(3, '12, Level-6, Shyamoli square, Mirpur road, Dhaka.', '017xxxxxxxx', 'adjkjd@gamil.com', 'www.facebook.com', 'tw.com', 'gplus.com', 'ln.com', '2020-08-31 07:06:31', '2020-09-02 01:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'create your title-2', 'create your subtitle-2', 'omnis-qui-voluptatem-est-sit-iusto-sunt-sit-2020-08-26-5f46398cd8406.jpg', '2020-08-25 02:13:09', '2020-08-27 12:11:55'),
(4, 'create your title', 'create your subtitle', 'eos-sequi-aut-nihil-itaque-et-facilis-2020-08-26-5f46397407080.jpg', '2020-08-25 02:13:09', '2020-08-26 04:32:56'),
(6, 'create your title-3', 'create your subtitle-3', 'create-your-title-3-2020-08-27-5f47fc38059f3.jpg', '2020-08-27 12:08:03', '2020-08-27 12:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'Admin', 'admin@test.com', NULL, '$2y$10$JIQ8SCgBM3TCVP9T5hZSmuXRm0h3p4eeK0k7VDNJdi860quN6Wu3O', NULL, '2020-08-25 02:13:08', '2020-08-25 02:13:08'),
(2, 'User', 'user@test.com', NULL, '$2y$10$tdeyqaD005bJM2VDxvYavODba.6yrzVbZkQSiNJNoiIFc1hnWEWpi', NULL, '2020-08-25 02:13:09', '2020-08-25 02:13:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_infos`
--
ALTER TABLE `restaurant_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restaurant_infos`
--
ALTER TABLE `restaurant_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
