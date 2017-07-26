-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 09:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_bitender`
--

-- --------------------------------------------------------

--
-- Table structure for table `bit_admins`
--

CREATE TABLE `bit_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_admins`
--

INSERT INTO `bit_admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$zyy1JMQdAXOrLllIWvv/KOWSZxl/F0D0JSVroNEdWdvsq/CTejl8K', 'J1Kc0nDnvRVy94VV7gR52hQztBBXmc8CrJMNJskNkhU7EgAB1Gv0MUbzWf5P', '2017-07-05 18:30:00', '2017-07-05 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `bit_attributes`
--

CREATE TABLE `bit_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_attributes`
--

INSERT INTO `bit_attributes` (`id`, `attribute_name`, `created_at`, `updated_at`) VALUES
(2, 'Color', '2017-07-21 06:06:26', '2017-07-21 06:06:26'),
(3, 'Size', '2017-07-21 06:06:35', '2017-07-21 06:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `bit_attribute_values`
--

CREATE TABLE `bit_attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `attribute_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_attribute_values`
--

INSERT INTO `bit_attribute_values` (`id`, `attribute_id`, `attribute_value`, `created_at`, `updated_at`) VALUES
(1, 2, 'Red', '2017-07-21 07:09:53', '2017-07-21 07:09:53'),
(2, 2, 'Blue', '2017-07-24 06:03:19', '2017-07-24 06:03:19'),
(3, 3, 'XS', '2017-07-24 06:03:31', '2017-07-24 06:03:31'),
(4, 3, 'S', '2017-07-24 06:03:37', '2017-07-24 06:03:37'),
(5, 3, 'M', '2017-07-24 06:03:46', '2017-07-24 06:03:46'),
(6, 3, 'L', '2017-07-24 06:03:52', '2017-07-24 06:03:52'),
(7, 3, 'XL', '2017-07-24 06:04:02', '2017-07-24 06:04:02'),
(8, 2, 'Green', '2017-07-24 06:04:14', '2017-07-24 06:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `bit_banners`
--

CREATE TABLE `bit_banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_banners`
--

INSERT INTO `bit_banners` (`id`, `name`, `banner_text`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'First Banner', 'This is dummy text', '3879_1499944945.jpg', 'Inactive', '2017-07-13 05:52:01', '2017-07-13 05:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `bit_categories`
--

CREATE TABLE `bit_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_categories`
--

INSERT INTO `bit_categories` (`id`, `parent_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Test', '', 'Active', '2017-07-07 08:24:32', '2017-07-07 08:24:32'),
(2, 1, 'Test 1', 'test-1', 'Active', '2017-07-07 08:28:24', '2017-07-13 06:43:24'),
(3, 2, 'Test2', '', 'Active', '2017-07-07 08:59:08', '2017-07-10 01:36:31'),
(4, NULL, 'Test 3', 'test-3', 'Inactive', '2017-07-10 00:59:47', '2017-07-13 06:43:39'),
(5, NULL, 'Test 4', 'test-4', 'Active', '2017-07-10 01:00:10', '2017-07-13 06:44:41'),
(6, NULL, 'Test 5', '', 'Active', '2017-07-10 01:59:42', '2017-07-10 01:59:42'),
(7, 2, 'Test 6', 'test-6', 'Active', '2017-07-10 01:59:56', '2017-07-13 06:31:53'),
(8, 2, 'Test 7', '', 'Active', '2017-07-10 02:00:11', '2017-07-10 02:00:11'),
(9, 1, 'Test 8', '', 'Active', '2017-07-10 02:00:23', '2017-07-10 02:00:23'),
(10, NULL, 'Test 10', '', 'Active', '2017-07-10 02:14:52', '2017-07-10 02:14:52'),
(11, 3, 'Test 11', '', 'Active', '2017-07-10 02:15:07', '2017-07-10 02:15:07'),
(12, 2, 'test 12', '', 'Active', '2017-07-10 02:15:20', '2017-07-10 02:15:20'),
(13, 2, 'test 13', '', 'Active', '2017-07-10 02:15:36', '2017-07-10 02:15:36'),
(14, 2, 'test 14', '', 'Active', '2017-07-10 02:16:32', '2017-07-10 02:16:32'),
(15, 2, 'test 15', '', 'Active', '2017-07-10 02:17:00', '2017-07-10 02:17:00'),
(16, NULL, 'test 16', '', 'Active', '2017-07-10 02:17:22', '2017-07-10 02:17:22'),
(17, 1, 'test 17', '', 'Active', '2017-07-10 02:19:44', '2017-07-10 02:19:44'),
(18, NULL, 'test 18', '', 'Inactive', '2017-07-10 02:20:21', '2017-07-10 02:20:21'),
(19, NULL, 'test 19', '', 'Active', '2017-07-10 02:20:30', '2017-07-10 02:20:30'),
(20, 2, 'test 20', '', 'Active', '2017-07-10 02:20:43', '2017-07-10 02:20:43'),
(21, 2, 'Category', '-1', 'Active', '2017-07-13 06:23:59', '2017-07-13 06:23:59'),
(22, 5, 'Category One', '-2', 'Active', '2017-07-13 06:29:17', '2017-07-13 06:29:17'),
(23, 5, 'Category Two', 'category-two', 'Active', '2017-07-13 06:30:20', '2017-07-13 06:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `bit_cms`
--

CREATE TABLE `bit_cms` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_cms`
--

INSERT INTO `bit_cms` (`id`, `page_name`, `title`, `slug`, `short_desc`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'About Us', '', 'About Us About Us', 'About Us About Us About Us', 'Active', '2017-07-14 04:06:05', '2017-07-14 04:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `bit_contact_uses`
--

CREATE TABLE `bit_contact_uses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` bigint(20) DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_contact_uses`
--

INSERT INTO `bit_contact_uses` (`id`, `name`, `email`, `phone_no`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ashes Pal', 'asheskumar.pal@met-technologies.com', 8754215478, 'This is test contactus message', NULL, NULL),
(2, 'Robert', 'response799@gmail.com', 4587965412, 'This is another test contact us message', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bit_countries`
--

CREATE TABLE `bit_countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_countries`
--

INSERT INTO `bit_countries` (`id`, `country_name`, `country_code`, `status`, `created_at`, `updated_at`) VALUES
(2, 'India', 'IND', 'Active', '2017-07-07 04:50:03', '2017-07-07 04:50:03'),
(3, 'Austrilia', 'AUS', 'Active', '2017-07-07 05:13:02', '2017-07-07 05:13:02'),
(4, 'Pakistan', 'PAK', 'Active', '2017-07-07 05:13:22', '2017-07-07 05:13:22'),
(6, 'Nepal', 'NEP', 'Active', '2017-07-07 05:14:45', '2017-07-07 05:14:45'),
(7, 'Canada', 'CAN', 'Active', '2017-07-07 05:15:01', '2017-07-07 05:15:01'),
(8, 'Denmark', 'DEN', 'Active', '2017-07-07 05:15:26', '2017-07-07 05:15:26'),
(9, 'Germany', 'GER', 'Active', '2017-07-07 05:15:46', '2017-07-07 05:15:46'),
(10, 'Japan', 'JAP', 'Active', '2017-07-07 05:16:06', '2017-07-07 05:16:06'),
(11, 'Portugal', 'POR', 'Active', '2017-07-07 05:16:37', '2017-07-07 05:16:37'),
(12, 'Russia', 'RUS', 'Active', '2017-07-07 05:17:13', '2017-07-07 05:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `bit_email_templates`
--

CREATE TABLE `bit_email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `template_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_email_templates`
--

INSERT INTO `bit_email_templates` (`id`, `template_name`, `subject`, `from_address`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Template 2', 'Template subject 2', 'Template 2', '<p>This is template body <strong>2</strong></p>', '2017-07-19 09:07:40', '2017-07-19 09:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `bit_migrations`
--

CREATE TABLE `bit_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_migrations`
--

INSERT INTO `bit_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_06_143051_create_admins_table', 1),
(4, '2017_07_07_082523_create_countries_table', 2),
(5, '2017_07_07_095812_create_states_table', 3),
(6, '2017_07_07_113222_create_categories_table', 4),
(7, '2017_07_10_103229_create_products_table', 5),
(8, '2017_07_13_101934_create_banners_table', 6),
(9, '2017_07_13_125833_create_sitesettings_table', 7),
(10, '2017_07_14_072215_create_cms_table', 8),
(11, '2017_07_14_142539_create_email_templates_table', 9),
(12, '2017_07_20_082701_create_subscribers_table', 10),
(13, '2017_07_20_142349_create_contact_uses_table', 11),
(14, '2017_07_21_111847_create_attributes_table', 12),
(15, '2017_07_21_113837_create_attribute_values_table', 13),
(16, '2017_07_24_124123_create_product_attributes_table', 14),
(17, '2017_07_24_124147_create_product_attribute_values_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `bit_password_resets`
--

CREATE TABLE `bit_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bit_products`
--

CREATE TABLE `bit_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcat_id` int(10) UNSIGNED DEFAULT NULL,
  `childcat_id` int(10) UNSIGNED DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(12,2) DEFAULT NULL,
  `sale_price` double(12,2) DEFAULT NULL,
  `is_feature` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `is_special` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `is_hot` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_products`
--

INSERT INTO `bit_products` (`id`, `category_id`, `subcat_id`, `childcat_id`, `product_name`, `slug`, `short_desc`, `description`, `image`, `price`, `sale_price`, `is_feature`, `is_special`, `is_hot`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 22, NULL, 'Abc', 'abc', '<p>Short Description</p>', '<p>Long Description</p>', '6124_1499850077.jpg', 25.55, 22.00, 'Yes', 'No', 'No', 'Active', '2017-07-10 08:26:45', '2017-07-24 02:10:34'),
(2, 1, 2, 3, 'Aaa', NULL, '<p>Test 1</p>', '<p>Test 2</p>', '7586_1499850120.jpg', 60.00, 50.00, 'No', 'No', 'No', 'Active', '2017-07-11 00:37:29', '2017-07-12 03:32:00'),
(3, 5, 22, NULL, 'Abb', NULL, NULL, NULL, '4130_1500026898.jpg', 50.00, 45.00, 'Yes', 'No', 'No', 'Active', '2017-07-14 04:38:18', '2017-07-14 04:38:18'),
(4, 5, 23, NULL, 'Bcd', NULL, NULL, NULL, '', 500.00, 400.00, 'No', 'No', 'No', 'Active', '2017-07-14 06:20:00', '2017-07-14 06:20:00'),
(5, 5, 22, NULL, 'Slug Test', 'slug-test', NULL, NULL, '', 70.00, 60.00, 'No', 'No', 'No', 'Active', '2017-07-24 02:11:11', '2017-07-24 02:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `bit_product_attributes`
--

CREATE TABLE `bit_product_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float(12,2) NOT NULL,
  `sale_price` float(12,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_product_attributes`
--

INSERT INTO `bit_product_attributes` (`id`, `product_id`, `sku`, `price`, `sale_price`, `image`, `created_at`, `updated_at`) VALUES
(11, 2, 'A323', 60.00, 45.00, '7091_1500906953.jpg', '2017-07-24 09:05:53', '2017-07-24 09:05:53'),
(16, 2, 'A321', 500.00, 45.00, '1725_1500995292.jpg', '2017-07-25 09:38:12', '2017-07-25 09:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `bit_product_attribute_values`
--

CREATE TABLE `bit_product_attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_attribute_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `attribute_value_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_product_attribute_values`
--

INSERT INTO `bit_product_attribute_values` (`id`, `product_attribute_id`, `attribute_id`, `attribute_value_id`, `created_at`, `updated_at`) VALUES
(12, 11, 2, 8, '2017-07-24 09:05:53', '2017-07-24 09:05:53'),
(13, 11, 3, 5, '2017-07-24 09:05:53', '2017-07-24 09:05:53'),
(26, 16, 3, 5, '2017-07-25 09:38:12', '2017-07-25 09:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `bit_sitesettings`
--

CREATE TABLE `bit_sitesettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_sitesettings`
--

INSERT INTO `bit_sitesettings` (`id`, `name`, `label`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Info Email', '', 'admin@admin.com', '2017-07-13 09:04:47', '2017-07-13 09:05:23'),
(2, 'Facebook Link', '-1', 'https://www.facebook.com/', '2017-07-14 01:44:44', '2017-07-14 01:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `bit_states`
--

CREATE TABLE `bit_states` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_states`
--

INSERT INTO `bit_states` (`id`, `country_id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'West Bengals', 'WB', 'Active', '2017-07-07 04:50:54', '2017-07-07 04:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `bit_subscribers`
--

CREATE TABLE `bit_subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bit_subscribers`
--

INSERT INTO `bit_subscribers` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asheskumar.pal@met-technologies.com', 'Inactive', '2017-07-19 21:39:12', '2017-07-21 04:45:20'),
(2, 'response799@gmail.com', 'Active', '2017-07-19 18:30:00', '2017-07-21 04:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `bit_users`
--

CREATE TABLE `bit_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bit_admins`
--
ALTER TABLE `bit_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bit_attributes`
--
ALTER TABLE `bit_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_attribute_values`
--
ALTER TABLE `bit_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Indexes for table `bit_banners`
--
ALTER TABLE `bit_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_categories`
--
ALTER TABLE `bit_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_cms`
--
ALTER TABLE `bit_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_contact_uses`
--
ALTER TABLE `bit_contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_countries`
--
ALTER TABLE `bit_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_email_templates`
--
ALTER TABLE `bit_email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_migrations`
--
ALTER TABLE `bit_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_password_resets`
--
ALTER TABLE `bit_password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `bit_products`
--
ALTER TABLE `bit_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcat_id_foreign` (`subcat_id`),
  ADD KEY `products_childcat_id_foreign` (`childcat_id`);

--
-- Indexes for table `bit_product_attributes`
--
ALTER TABLE `bit_product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `bit_product_attribute_values`
--
ALTER TABLE `bit_product_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attribute_id` (`product_attribute_id`),
  ADD KEY `attribute_id` (`attribute_id`),
  ADD KEY `attribute_value_id` (`attribute_value_id`);

--
-- Indexes for table `bit_sitesettings`
--
ALTER TABLE `bit_sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_states`
--
ALTER TABLE `bit_states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `bit_subscribers`
--
ALTER TABLE `bit_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bit_users`
--
ALTER TABLE `bit_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bit_admins`
--
ALTER TABLE `bit_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bit_attributes`
--
ALTER TABLE `bit_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bit_attribute_values`
--
ALTER TABLE `bit_attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bit_banners`
--
ALTER TABLE `bit_banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bit_categories`
--
ALTER TABLE `bit_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `bit_cms`
--
ALTER TABLE `bit_cms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bit_contact_uses`
--
ALTER TABLE `bit_contact_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bit_countries`
--
ALTER TABLE `bit_countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `bit_email_templates`
--
ALTER TABLE `bit_email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bit_migrations`
--
ALTER TABLE `bit_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `bit_products`
--
ALTER TABLE `bit_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bit_product_attributes`
--
ALTER TABLE `bit_product_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `bit_product_attribute_values`
--
ALTER TABLE `bit_product_attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `bit_sitesettings`
--
ALTER TABLE `bit_sitesettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bit_states`
--
ALTER TABLE `bit_states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bit_subscribers`
--
ALTER TABLE `bit_subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bit_users`
--
ALTER TABLE `bit_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bit_attribute_values`
--
ALTER TABLE `bit_attribute_values`
  ADD CONSTRAINT `bit_attribute_values_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `bit_attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bit_products`
--
ALTER TABLE `bit_products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `bit_categories` (`id`),
  ADD CONSTRAINT `products_childcat_id_foreign` FOREIGN KEY (`childcat_id`) REFERENCES `bit_categories` (`id`),
  ADD CONSTRAINT `products_subcat_id_foreign` FOREIGN KEY (`subcat_id`) REFERENCES `bit_categories` (`id`);

--
-- Constraints for table `bit_product_attributes`
--
ALTER TABLE `bit_product_attributes`
  ADD CONSTRAINT `bit_product_attributes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `bit_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bit_product_attribute_values`
--
ALTER TABLE `bit_product_attribute_values`
  ADD CONSTRAINT `bit_product_attribute_values_ibfk_1` FOREIGN KEY (`product_attribute_id`) REFERENCES `bit_product_attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bit_product_attribute_values_ibfk_2` FOREIGN KEY (`attribute_id`) REFERENCES `bit_attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bit_product_attribute_values_ibfk_3` FOREIGN KEY (`attribute_value_id`) REFERENCES `bit_attribute_values` (`id`);

--
-- Constraints for table `bit_states`
--
ALTER TABLE `bit_states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `bit_countries` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
