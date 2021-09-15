-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2021 at 05:31 AM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nirmantools_laradb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `our_core_values` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_vision` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_mission` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_video_link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `years_of_experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `happy_members` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `successful_project` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fund_collected` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `our_core_values`, `our_vision`, `our_mission`, `youtube_video_link`, `years_of_experience`, `happy_members`, `successful_project`, `fund_collected`, `about_us_description`, `first_description`, `second_description`, `cover_image`, `first_featured_image`, `banner_image`, `second_featured_image`, `third_featured_image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'care@ultrabyteit.com', '2020-10-09 04:37:02', '$2y$10$VRjHZECp1raFQHnm.VXT2.nZN.xDoRcAbaVkYG3hXyWzrJcetTGBq', 'PJifJxHS5yiruWmo1gY5tviREQAQJJUICYjF5taq4j8ERPHHHgLLjRxoPwhx', NULL, NULL),
(2, 'admin', 'admin@nirmantools.com', '2020-10-09 04:37:02', '$2y$10$D3aYf7EgAQ440qMijuNjluAolM9g3dtFngN5GuA3OAtas6KkMmS9G', 'tHFpJcggYJqK6UKvsdE80IdjRxkGuswst9OtpN6fadmTtpu08GneeLnKU2tV', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `title`, `image`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, 1, 1, '2021-01-01 10:33:27', '2021-01-01 10:46:14'),
(2, 'test', '1600426087-ban2.jpg', 1, 2, '2021-01-01 10:34:02', '2021-01-03 06:10:10'),
(3, 'tewstr', NULL, 1, 3, '2021-01-01 10:39:03', '2021-01-01 10:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `carosels`
--

CREATE TABLE `carosels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_cruds`
--

CREATE TABLE `contact_cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `list` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `features_about_us`
--

CREATE TABLE `features_about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `features_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepage_images`
--

CREATE TABLE `homepage_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layouts`
--

CREATE TABLE `layouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layouts`
--

INSERT INTO `layouts` (`id`, `name`, `layout_id`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Trending Products', NULL, 1, 2, '2020-09-17 00:25:41', '2020-09-21 02:10:57'),
(2, 'Best Products', NULL, 1, 1, '2020-09-17 00:25:54', '2020-09-21 02:11:02'),
(7, 'Discount Offers', 2, 1, 2, '2020-09-17 00:40:24', '2020-09-22 04:48:29'),
(8, 'Shop By Brand', 1, 1, 1, '2020-09-17 00:40:43', '2020-09-21 02:11:54'),
(9, 'Industrial Product', 1, 1, 2, '2020-09-17 00:41:05', '2020-10-07 05:37:09'),
(10, 'DIY Power Tool', 1, 1, 3, '2020-09-17 00:41:24', '2020-09-21 02:12:05'),
(21, 'Hot Deals', 2, 1, 1, '2020-09-17 01:49:44', '2020-09-21 02:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `layout_product`
--

CREATE TABLE `layout_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layout_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layout_product`
--

INSERT INTO `layout_product` (`id`, `layout_id`, `product_id`, `created_at`, `updated_at`) VALUES
(6, 8, 11, NULL, NULL),
(7, 10, 11, NULL, NULL),
(8, 7, 11, NULL, NULL),
(9, 21, 11, NULL, NULL),
(11, 9, 16, NULL, NULL),
(13, 9, 18, NULL, NULL),
(14, 7, 18, NULL, NULL),
(15, 21, 18, NULL, NULL),
(17, 21, 16, NULL, NULL),
(18, 21, 1, NULL, NULL),
(19, 9, 2, NULL, NULL),
(20, 10, 2, NULL, NULL),
(21, 7, 2, NULL, NULL),
(22, 21, 2, NULL, NULL),
(23, 8, 7, NULL, NULL),
(24, 7, 7, NULL, NULL),
(25, 9, 8, NULL, NULL),
(26, 10, 8, NULL, NULL),
(27, 7, 8, NULL, NULL),
(28, 21, 8, NULL, NULL),
(29, 9, 9, NULL, NULL),
(30, 10, 9, NULL, NULL),
(31, 7, 9, NULL, NULL),
(32, 21, 9, NULL, NULL),
(33, 9, 12, NULL, NULL),
(34, 10, 12, NULL, NULL),
(35, 7, 12, NULL, NULL),
(36, 21, 12, NULL, NULL),
(37, 9, 19, NULL, NULL),
(38, 10, 19, NULL, NULL),
(39, 7, 19, NULL, NULL),
(40, 21, 19, NULL, NULL),
(41, 9, 20, NULL, NULL),
(42, 10, 20, NULL, NULL),
(43, 7, 20, NULL, NULL),
(44, 21, 20, NULL, NULL),
(45, 9, 21, NULL, NULL),
(46, 10, 21, NULL, NULL),
(47, 7, 21, NULL, NULL),
(48, 21, 21, NULL, NULL),
(49, 9, 22, NULL, NULL),
(50, 10, 22, NULL, NULL),
(51, 7, 22, NULL, NULL),
(52, 21, 22, NULL, NULL),
(57, 7, 16, NULL, NULL),
(58, 8, 368, NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_20_100744_create_contact_cruds_table', 1),
(6, '2020_06_18_163025_create_features_about_us_table', 1),
(7, '2020_06_19_025755_create_carosels_table', 1),
(8, '2020_06_19_033758_create_testimonals_table', 1),
(9, '2020_06_19_040602_create_partners_table', 1),
(10, '2020_06_24_111333_create_enquiries_table', 1),
(11, '2020_07_06_071802_create_pages_table', 1),
(12, '2020_07_12_092111_create_settings_table', 1),
(13, '2020_07_22_040013_create_about_us_table', 1),
(14, '2020_07_23_114003_create_homepage_image_table', 1),
(15, '2020_09_15_121231_create_product_categories_table', 2),
(17, '2020_09_16_115632_create_layouts_table', 3),
(18, '2020_09_17_091026_create_product_tags_table', 4),
(19, '2020_09_18_110003_create_products_table', 5),
(20, '2020_09_18_112333_product_product_category', 6),
(22, '2020_09_18_113303_product_product_tag', 7),
(25, '2020_09_18_114206_create_product_producttag_table', 8),
(26, '2020_09_18_114247_create_layout_product_table', 8),
(27, '2020_10_08_115410_create_admin_users_table', 9),
(29, '2017_06_26_000000_create_shopping_cart_table', 10),
(30, '2020_10_18_063358_add_phone_to_user_table', 10),
(33, '2020_10_19_044038_create_orders_table', 11),
(34, '2020_10_19_110448_create_wishlists_table', 12),
(37, '2020_11_12_080437_create_shipments_table', 13),
(38, '2020_11_12_115443_create_invoices_table', 13),
(39, '2021_01_01_113405_create_advertisements_table', 14),
(40, '2021_01_05_152515_create_review_migration', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` float DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `street_address`, `city`, `phone`, `email`, `total_price`, `status`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(101265, 'Elmore West', '77351 Lamont Knolls Apt. 010\nSouth Trisha, AK 53113', 'North Rodrickbury', '741-559-0365 x0487', 'luciano94@example.net', 24980, 'cancelled', 'Ad quos quia deleniti voluptatem harum. Molestiae et vel ut numquam facere dolorem et est. Quis ut sit exercitationem eaque fuga. Explicabo natus in eos illum id.', 1, '2020-12-19 18:15:00', '2020-12-31 11:25:11'),
(101266, 'Mr. Kory Stamm MD', '58741 Duncan Keys\nHughside, WY 97286-8092', 'Mertzside', '626.879.3582 x809', 'shuel@example.net', 48423, 'cancelled', 'Est sed autem praesentium qui illum. Quas sed optio architecto repellendus ratione totam fuga. Ex asperiores voluptatem rerum sint. Eos sunt ducimus sed quia et qui dolores.', 1, '2020-12-11 18:15:00', '2020-12-31 11:25:11'),
(101267, 'Prof. Chris Strosin', '4657 Ziemann Plains Apt. 996\nAureliashire, NE 32158', 'Dibbertside', '1-606-889-9006', 'reyes29@example.com', 18652, 'processing', 'Voluptas nesciunt quo sint et et dolores ducimus. Provident inventore id repellat et ipsam eius animi. Voluptatem nulla magni ut magni pariatur non cum.', 3, '2020-12-26 18:15:00', '2020-12-31 11:25:11'),
(101268, 'Dr. Nick Abbott IV', '6252 Granville Fords\nNorth Carmellaburgh, NV 91034-9780', 'South Elmo', '531.869.8395 x5043', 'champlin.enrico@example.com', 25672, 'cancelled', 'Sit saepe rerum autem quidem. Dolorum mollitia qui rerum neque. Ex facilis delectus doloremque saepe labore numquam. Voluptatem sint non harum occaecati sed.', 3, '2020-12-30 18:15:00', '2020-12-31 11:25:11'),
(101269, 'Miss Corene Miller DDS', '1219 Heller Locks Suite 823\nNew Caterina, HI 10205', 'Port Caleighchester', '+1-412-563-3705', 'franecki.kirk@example.net', 40548, 'shipping', 'Similique reiciendis omnis cum voluptatem corrupti qui voluptate. Qui et quia et quibusdam. Omnis et eos illum optio hic dolor.', 3, '2020-12-26 18:15:00', '2020-12-31 11:25:11'),
(101270, 'Savanna Rosenbaum', '115 Fiona Pines\nLake Pattie, KS 19889-4555', 'Adityachester', '(715) 696-5365 x767', 'atillman@example.org', 28643, 'completed', 'Debitis fuga modi omnis et. Non quia tenetur modi perspiciatis rerum nihil molestiae. Et ipsa corrupti culpa sunt. Iure et in beatae aperiam.', 4, '2020-12-25 18:15:00', '2020-12-31 11:25:11'),
(101271, 'Ms. Marjory Harris PhD', '698 Lea Spur\nTraceystad, IL 18545', 'Claudieton', '(824) 707-7785 x16249', 'leffler.lesly@example.org', 35586, 'processing', 'Voluptatem consequatur blanditiis nihil eos eius possimus repellendus. Officiis vel iusto dolorem delectus. Ad dolor nemo consequuntur consequatur. Sed excepturi est est sunt quas sunt.', 1, '2020-12-28 18:15:00', '2020-12-31 11:25:11'),
(101272, 'Al Goodwin', '5640 Isabelle Views Apt. 036\nNew Verlie, MD 87209', 'South Holden', '756-415-8448 x0273', 'abelardo.hickle@example.net', 42768, 'processing', 'Aut laborum quis velit vel provident. Dicta ipsam aut voluptas vitae nam quaerat vero. Beatae animi voluptatem eaque qui optio.', 3, '2020-12-18 18:15:00', '2020-12-31 11:25:12'),
(101273, 'Ansley Effertz', '36882 Price Cliff\nRachaelmouth, RI 62798', 'Colliermouth', '719.292.7233 x0224', 'chelsey17@example.com', 21838, 'completed', 'Officia officiis sunt fuga excepturi. Repellendus molestias veritatis voluptatem quidem.', 3, '2020-12-17 18:15:00', '2020-12-31 11:25:12'),
(101274, 'Albin Pouros II', '574 Leonardo Points Suite 622\nArielmouth, MD 06519', 'Quigleyton', '+1.289.396.9118', 'batz.lizzie@example.com', 12039, 'on hold', 'Cupiditate eius id sapiente earum incidunt rerum doloremque beatae. Rerum est sunt laboriosam. Necessitatibus ipsa consequatur dolor vel quam laborum. Est vero doloremque aliquam.', 4, '2020-12-11 18:15:00', '2020-12-31 11:25:12'),
(101275, 'Myrtice Legros', '427 Kutch Hills Apt. 793\nSouth Hilbert, RI 08582', 'New Corrineburgh', '+1-312-204-5797', 'ellen54@example.net', 45004, 'on hold', 'Enim quia sunt consequatur quisquam adipisci eos. Facere et iure culpa porro cumque qui voluptatum praesentium. Et mollitia corporis modi tempora.', 3, '2020-12-11 18:15:00', '2020-12-31 11:25:12'),
(101276, 'Landen Glover', '6022 Lea Turnpike Apt. 592\nRubiehaven, AR 01885', 'Cassinbury', '(435) 812-6057', 'norene23@example.com', 34932, 'processing', 'Provident quibusdam aut non nemo maiores nam ut. Quas et unde odit quos voluptatem. Impedit optio beatae voluptatum ea. Ut qui dolorem officiis maxime qui error ea vitae.', 4, '2020-12-21 18:15:00', '2020-12-31 11:25:12'),
(101277, 'Gabriel Marvin II', '578 Meredith Circle Apt. 417\nHarberbury, IL 98342', 'Bernhardchester', '764.649.5175 x68975', 'gerardo.shanahan@example.net', 29979, 'cancelled', 'Voluptatem quibusdam id nobis eum unde. Quia fuga sed ullam tenetur accusantium. Et et quibusdam consequuntur autem dolor tempore non.', 4, '2020-12-26 18:15:00', '2020-12-31 11:25:12'),
(101278, 'Douglas O\'Reilly', '7480 Ciara Lights\nWaelchimouth, MO 06895-0755', 'West Preciouschester', '(247) 642-0928', 'rvonrueden@example.net', 13189, 'processing', 'Et necessitatibus quis ea in vero doloribus. Molestiae maxime corrupti similique nihil eius. Vel ullam et id.', 3, '2020-12-28 18:15:00', '2020-12-31 11:25:12'),
(101279, 'Mrs. Dandre O\'Reilly V', '56158 Hillary Port\nWunschberg, KY 14722', 'New Summerland', '+1-479-687-1879', 'florence30@example.net', 28637, 'on hold', 'Illo aut numquam fugiat adipisci atque cupiditate unde. Sed est voluptatem unde sunt autem iste. Vero et dolores maxime est at illum autem.', 4, '2020-12-26 18:15:00', '2020-12-31 11:25:12'),
(101280, 'Prof. Letitia Nitzsche Sr.', '259 Nolan Lane Apt. 507\nNew Clovisfurt, WV 99621-4329', 'Simmouth', '431-652-8241 x53192', 'cristobal.ankunding@example.org', 30561, 'on hold', 'Natus odio quas quia eum magni. Assumenda dolores enim nemo voluptatem sed. Aliquam in aut autem eos. Ullam autem laboriosam officiis nihil doloremque similique.', 3, '2020-12-13 18:15:00', '2020-12-31 11:25:12'),
(101281, 'Antonio Fritsch', '8674 Runolfsson Fort\nEast Amelia, MN 07431', 'Morarside', '1-794-547-0338 x8171', 'cnicolas@example.org', 37290, 'cancelled', 'Debitis eum rerum nesciunt molestiae eaque corrupti. Rerum ex nostrum enim reprehenderit eos. Sequi aut numquam culpa blanditiis aspernatur placeat.', 3, '2020-12-29 18:15:00', '2020-12-31 11:25:12'),
(101282, 'Ms. Corene Armstrong II', '578 Timmothy Oval\nHyattland, MS 51293-2368', 'South Hazelfurt', '1-337-494-2391', 'mcdermott.jess@example.net', 38331, 'completed', 'Quia aliquid dolores quia maxime. Sed vel est non rerum consequatur reprehenderit. Adipisci consequatur est voluptatem facere. Consectetur sapiente ut cum aliquid. Cum commodi quia id minus odio.', 1, '2020-12-26 18:15:00', '2020-12-31 11:25:12'),
(101283, 'Delpha Keeling', '215 Corkery Rapids\nWest Alexandrea, NH 38999-5614', 'South Clementine', '(791) 918-2667 x34061', 'haag.roman@example.com', 26625, 'on hold', 'Excepturi quis accusantium minima eaque harum repellat harum. Quas impedit nihil quis. Et at eum recusandae quis. Consequuntur debitis est perferendis aut cum doloribus dolorem.', 4, '2020-12-12 18:15:00', '2020-12-31 11:25:12'),
(101284, 'Jaclyn Fisher', '972 O\'Reilly Centers\nAdamshaven, HI 23198', 'Jennieport', '+1.860.830.8577', 'alexandrine.crooks@example.org', 22911, 'on hold', 'Occaecati mollitia voluptatem non ut illum et minima. Architecto aut et nemo ea explicabo atque blanditiis. Explicabo vitae beatae et quaerat necessitatibus mollitia.', 3, '2020-12-22 18:15:00', '2020-12-31 11:25:12'),
(101285, 'Edison Jenkins', '5143 Rocky Stream Apt. 319\nLake Katrine, KS 36156', 'Cassinchester', '1-687-388-7384', 'fbarrows@example.com', 40845, 'processing', 'Quaerat similique vitae praesentium omnis. Illum enim necessitatibus voluptatem fugit tenetur inventore voluptatem. Ducimus sed mollitia omnis nihil velit. Sunt amet aut et ea.', 3, '2020-12-21 18:15:00', '2020-12-31 11:25:12'),
(101286, 'Adelle Deckow', '966 Waelchi Light Suite 714\nLake Kiel, SD 17370-5657', 'North Orvilletown', '598.286.1425', 'karina.purdy@example.org', 12724, 'shipping', 'Mollitia ut suscipit delectus. Itaque aut dolores voluptates iure. Ut aliquam libero ut. Eaque enim et dolorum earum.', 4, '2020-12-20 18:15:00', '2020-12-31 11:25:12'),
(101287, 'Isaias Marquardt', '65818 Cecil Parks Suite 174\nNew Evelyn, ND 34913-2016', 'North Shawn', '(630) 405-9800 x2606', 'alejandrin.labadie@example.net', 20576, 'processing', 'Et voluptatem suscipit occaecati corrupti. Aut doloribus neque aut magni reiciendis cupiditate autem et. Et eius sit perspiciatis pariatur. Sunt occaecati corrupti voluptatum asperiores.', 1, '2020-12-25 18:15:00', '2020-12-31 11:25:12'),
(101288, 'Mrs. Jaquelin Weber II', '5384 Satterfield Motorway Suite 764\nAllenport, UT 39210-6792', 'Prosaccomouth', '(375) 853-3370 x493', 'bradly48@example.org', 28584, 'shipping', 'Error placeat sed et ipsum. Fugiat labore voluptatibus autem iure. Molestiae corrupti odio qui. Dolorum non et dignissimos.', 4, '2020-12-22 18:15:00', '2020-12-31 11:25:12'),
(101289, 'Citlalli Hermann', '41735 Hegmann Trafficway\nWelchport, NC 64678', 'Weissnatmouth', '+12086828389', 'dusty.parker@example.net', 42075, 'on hold', 'Omnis facilis repudiandae error optio debitis id. Nulla ipsam est voluptates. Accusantium voluptatem occaecati non minima ducimus qui.', 1, '2020-12-10 18:15:00', '2020-12-31 11:25:12'),
(101290, 'Dr. Fredrick Koch', '1413 Breitenberg Way\nPort Mauricio, NM 17341', 'Faustobury', '1-365-264-3838', 'vernie94@example.com', 46049, 'shipping', 'Ex cum animi atque tempore doloribus qui. Exercitationem sed dicta et aut mollitia quasi. Est recusandae beatae est exercitationem incidunt sint sapiente sed. Minus maxime ducimus porro nobis.', 1, '2020-12-16 18:15:00', '2020-12-31 11:25:12'),
(101291, 'Sherwood Hackett Jr.', '388 Nicolas Parkway Apt. 956\nMarksmouth, ME 59229-9135', 'West Verlaville', '1-350-839-3074 x2764', 'andrew07@example.org', 29058, 'processing', 'Voluptatem amet facilis rerum harum aspernatur vel sed. Doloremque quia recusandae vitae. Corrupti et quidem aspernatur sunt. Esse voluptatem voluptas aut est et eveniet.', 4, '2020-12-15 18:15:00', '2020-12-31 11:25:12'),
(101292, 'Imelda Gutkowski', '81908 Orpha Pine Apt. 461\nWilliamsonstad, NJ 10437-8104', 'Kristoferburgh', '330.964.4693 x870', 'mcdermott.alysson@example.net', 17305, 'completed', 'Veritatis neque repudiandae inventore autem laborum sit. Et sit enim dolorum voluptate qui rerum doloribus similique. Quasi similique quia sed perspiciatis minima quo.', 1, '2020-12-13 18:15:00', '2020-12-31 11:25:12'),
(101293, 'Dennis Fadel', '12656 Pfannerstill Rapids\nSouth Wilberfort, KY 27664-6394', 'North Cristal', '1-345-882-0556', 'mozell.willms@example.org', 29793, 'processing', 'Facilis corrupti et consequatur consequatur molestiae commodi unde. Consequatur inventore mollitia exercitationem et qui. Optio eligendi molestiae delectus iure aut culpa autem.', 3, '2020-12-14 18:15:00', '2020-12-31 11:25:12'),
(101294, 'Dr. Dawson Larson', '384 Metz Turnpike Suite 619\nKlingchester, ND 16552-2620', 'Fisherbury', '982.880.6379 x243', 'fbergnaum@example.net', 31051, 'on hold', 'Exercitationem quia in sequi. Alias et corrupti corrupti exercitationem distinctio minima. In eveniet id alias assumenda.', 4, '2020-12-12 18:15:00', '2020-12-31 11:25:13'),
(101295, 'Alia Greenfelder', '40368 Heidenreich Fort Apt. 263\nPort Rheastad, NJ 79897', 'Lake Otiliamouth', '413.227.5959', 'vhoppe@example.net', 44140, 'shipping', 'Dolorem quidem eum quia. Quisquam et rerum aspernatur. Asperiores maxime voluptates qui rem eum.', 3, '2020-12-28 18:15:00', '2020-12-31 11:25:13'),
(101296, 'Krystal Wolff', '9772 Bogan Drive Suite 849\nWest Carlee, NV 61346-9139', 'Kellitown', '+1 (424) 394-3493', 'michele.jacobi@example.org', 13549, 'shipping', 'Aliquid dolorum aut dolore omnis sint. Eveniet eius voluptate voluptates quaerat vel numquam quo. Qui quod autem ea nulla.', 4, '2020-12-17 18:15:00', '2020-12-31 11:25:13'),
(101297, 'Elisa Koss', '934 Gutkowski Isle Suite 962\nWest Angie, CT 33589', 'Arnohaven', '249-778-4242 x0007', 'legros.desiree@example.net', 21882, 'processing', 'Molestiae architecto voluptas laudantium quis quo. Dolor eum molestias a aut est voluptatum iusto. Harum blanditiis eius numquam possimus.', 3, '2020-12-16 18:15:00', '2020-12-31 11:25:13'),
(101298, 'Bradley Denesik', '38849 Marquardt Club\nSouth Scottyview, KS 41329', 'Abernathyhaven', '(682) 644-7500 x683', 'orn.vernie@example.org', 47111, 'cancelled', 'Praesentium ut non id sed velit quia. Ipsa aperiam enim ea quos in. Alias hic rerum voluptas quis consequatur adipisci consequatur. Iusto odit iste velit.', 3, '2020-12-21 18:15:00', '2020-12-31 11:25:13'),
(101299, 'Jakayla Terry Sr.', '820 Jacobs Port Apt. 914\nAbernathytown, CT 07599', 'Borerhaven', '1-759-270-7128 x55226', 'gerda59@example.com', 40000, 'on hold', 'Fugiat cum praesentium quam incidunt repellat est expedita. Blanditiis placeat cupiditate qui aperiam ullam.', 4, '2020-12-26 18:15:00', '2020-12-31 11:25:13'),
(101300, 'Ms. Selena Sipes Jr.', '80853 Ratke Loaf Suite 106\nMullertown, RI 59539-0585', 'North Donnamouth', '419.446.0149 x55699', 'dawson10@example.com', 37900, 'cancelled', 'Et quisquam accusamus officia et. Suscipit inventore et nihil est veritatis numquam. Qui at tempore id sunt qui.', 1, '2020-12-11 18:15:00', '2020-12-31 11:25:13'),
(101301, 'Dr. Gayle Ratke', '76814 Hilton Port\nLake Gardner, WV 09550-8278', 'West Annabelle', '(910) 642-2137 x625', 'klein.anjali@example.org', 20541, 'shipping', 'Illo voluptas cum reprehenderit. Asperiores dolore consequatur sunt vel fuga molestiae. Corrupti pariatur doloremque excepturi non quod fuga.', 3, '2020-12-25 18:15:00', '2020-12-31 11:25:13'),
(101302, 'Dr. Vito Bauch', '859 Roob Shoals Suite 091\nWolffort, OR 23371-1229', 'Josefinashire', '343.334.9194', 'lueilwitz.alessandra@example.org', 21243, 'completed', 'Dolorum nobis asperiores atque ipsa. Repudiandae debitis placeat magnam et molestiae quibusdam atque. Optio sint cum dolorem sunt sit sunt est quia.', 4, '2020-12-18 18:15:00', '2020-12-31 11:25:13'),
(101303, 'Prof. Sonya Ankunding', '67038 Ritchie Summit\nEast Destany, NE 43744-3521', 'South Reina', '461.569.2473 x1062', 'bjenkins@example.com', 27035, 'on hold', 'Quidem at necessitatibus odit quis omnis. Unde ullam quas eius libero enim. Voluptatem tempore vel iusto iure asperiores et laborum.', 1, '2020-12-14 18:15:00', '2020-12-31 11:25:13'),
(101304, 'Prof. Felicity Marks DDS', '8750 Rhianna Walk Suite 969\nEast Janatown, CT 07217', 'South Kade', '1-259-604-7208', 'goyette.myriam@example.net', 49387, 'processing', 'Rerum aliquam ipsam quia dolorem ipsam exercitationem. Possimus sequi et hic ipsum est tempore. Consequatur dolor sunt velit tenetur. Nesciunt ullam et ea voluptatem rem enim.', 4, '2020-12-22 18:15:00', '2020-12-31 11:25:13'),
(101305, 'Dr. Theresia Lakin DDS', '674 Susie Harbors\nWest Chaddmouth, AR 07060-9334', 'West Brionna', '+1-268-871-6408', 'arden70@example.org', 27651, 'on hold', 'Doloremque quis quia aliquid est aut est nam. Excepturi in explicabo id aut magnam quae optio. Eum quas exercitationem ut.', 3, '2020-12-10 18:15:00', '2020-12-31 11:25:13'),
(101306, 'Cayla Connelly', '62710 Elias Divide Apt. 554\nLoganburgh, NC 65139-0150', 'Lake Jermain', '624-791-5873 x0220', 'kasandra57@example.com', 35807, 'cancelled', 'Voluptatum repudiandae iure pariatur consequatur debitis. Est dolorem facere repudiandae deserunt. Et voluptatem qui amet cum.', 4, '2020-12-19 18:15:00', '2020-12-31 11:25:13'),
(101307, 'Dr. Corrine Kertzmann MD', '220 Legros Mountains Apt. 552\nNew Christellestad, SD 56166-2992', 'Fannieberg', '+1 (905) 636-0802', 'dwilliamson@example.com', 37688, 'cancelled', 'Repellendus enim itaque itaque. Iste at illum et magnam.', 1, '2020-12-29 18:15:00', '2020-12-31 11:25:13'),
(101308, 'Mr. Kale Bins', '544 Ziemann Glen Suite 711\nSouth Sonya, HI 08401', 'South Leopoldoport', '956-528-5096', 'bins.cathy@example.net', 30301, 'on hold', 'Doloribus nisi praesentium facere quis eum fugit et. Ea consequatur aut et hic provident quis.', 4, '2020-12-30 18:15:00', '2020-12-31 11:25:13'),
(101309, 'Prof. Cristobal Tromp PhD', '83290 Gerhold Parkway\nEast Winifred, NV 08597', 'West Dawson', '298-216-3465 x00867', 'vonrueden.kelli@example.org', 27296, 'on hold', 'Exercitationem et provident et praesentium. Ea quis quo dolores ut iste dolores sed. Amet quos ipsa velit magnam.', 1, '2020-12-26 18:15:00', '2020-12-31 11:25:13'),
(101310, 'Roman Heathcote', '49040 Wyman Knolls\nDixiebury, ID 72644', 'South Cordellshire', '+1-459-445-2064', 'ariane.muller@example.net', 23410, 'processing', 'Ea suscipit et et iure alias voluptatibus. Voluptates soluta nihil fugiat eius ex itaque. Maxime possimus beatae numquam ut et eligendi. Error alias quia voluptas rerum dolore qui.', 3, '2020-12-12 18:15:00', '2020-12-31 11:25:13'),
(101311, 'Name Wiegand', '73337 Shaun Crescent Suite 573\nWest Geoville, OR 43766-3120', 'Demetristown', '750-423-4253 x2848', 'twila76@example.org', 13932, 'on hold', 'Ducimus sapiente officia illum harum facilis. Distinctio numquam id vitae officiis doloremque quia. Adipisci delectus aliquid quas veniam exercitationem libero sed.', 1, '2020-12-10 18:15:00', '2020-12-31 11:25:13'),
(101312, 'Prudence Windler', '7885 Runolfsdottir Creek Suite 933\nNorth Margaritamouth, HI 91803-5991', 'North Junior', '+15787654790', 'okeefe.miracle@example.com', 11071, 'completed', 'Quidem et provident consequuntur facere. Vitae quidem tenetur quisquam omnis id blanditiis molestiae. Ea cumque et vero libero quod.', 1, '2020-12-29 18:15:00', '2020-12-31 11:25:13'),
(101313, 'Franco Wiza', '92996 McClure Hollow\nLoratown, CA 48203', 'Port Vesta', '1-561-361-6289', 'lee45@example.net', 11161, 'cancelled', 'Doloremque fugit quis sit possimus dicta laboriosam. Totam praesentium rerum voluptas velit quis quas maxime omnis.', 3, '2020-12-12 18:15:00', '2020-12-31 11:25:13'),
(101314, 'Dr. Nora Roob Sr.', '750 Amiya Islands\nNorth Javier, UT 94463', 'Clarehaven', '459.530.7244 x0087', 'hollie.west@example.com', 15054, 'completed', 'Et ea enim soluta voluptas necessitatibus ut quia. Repudiandae ducimus est modi. Quia itaque culpa officiis libero. Sed molestias illo aut necessitatibus officiis aut laborum rerum.', 1, '2020-12-17 18:15:00', '2020-12-31 11:25:13'),
(101315, 'Enola Cormier', '71042 Erling Walk Suite 630\nWilfridton, WA 50307', 'Lake Karl', '1-469-200-9704', 'estella.ryan@example.net', 39694, 'shipping', 'Aut debitis sint aspernatur. Non ipsum cupiditate voluptatem vero id aut natus iure. Architecto nesciunt et autem tempora.', 4, '2020-12-10 18:15:00', '2020-12-31 11:25:13'),
(101316, 'Julian Bayer', '34493 Heidenreich Squares Suite 737\nFarrellborough, NM 44838', 'Gislasonbury', '997.766.1554 x433', 'wbreitenberg@example.com', 44430, 'on hold', 'Eos quasi voluptates aut nihil. At a eum ipsam quis. Eligendi magnam voluptatem ut adipisci consequatur. Non iusto quis voluptatem porro quia et. Iste inventore qui consequatur sint.', 3, '2020-12-15 18:15:00', '2020-12-31 11:25:13'),
(101317, 'Prof. Johan Fritsch V', '8823 Bauch Route\nSouth Annamae, PA 86897-1267', 'Langworthburgh', '(801) 334-1323', 'gdavis@example.org', 19524, 'completed', 'Deserunt ut ea et iusto velit. Corporis quas ipsam doloribus et labore rerum. Et dolor ut eligendi incidunt sequi.', 3, '2020-12-30 18:15:00', '2020-12-31 11:25:13'),
(101318, 'Johnson Sanford', '5760 Bruen Locks\nSouth Glenland, ND 23826-8817', 'South Chaimton', '1-998-565-5340 x367', 'nicolas.maude@example.net', 16335, 'shipping', 'Vel ut quo dolores et. At ea id quisquam sapiente deleniti. Adipisci odit ut aut earum deleniti consequatur exercitationem ea. Sit molestias eius iste illum voluptate fugit qui.', 4, '2020-12-21 18:15:00', '2020-12-31 11:25:13'),
(101319, 'Dr. Anahi Nikolaus', '7633 Mario Plaza Apt. 710\nJordynside, GA 62590', 'Ivybury', '1-459-266-2372 x17587', 'christop.graham@example.org', 39922, 'cancelled', 'Aliquid tempora ex esse error earum. Sapiente delectus consequuntur voluptatem repellendus et. Et harum officiis totam.', 1, '2020-12-10 18:15:00', '2020-12-31 11:25:13'),
(101320, 'Sigurd Maggio DVM', '89880 Ziemann Station Suite 734\nBinsshire, DE 57900-3785', 'Joshuahborough', '1-940-336-4564', 'nitzsche.pink@example.com', 24408, 'shipping', 'Blanditiis vel ipsam dolor explicabo. Sit earum reiciendis placeat illum qui.', 3, '2020-12-21 18:15:00', '2020-12-31 11:25:14'),
(101321, 'Libbie Sipes', '70376 Raynor Fork Apt. 452\nEast Taryn, MO 02729-3111', 'Laynefort', '(708) 601-4945', 'jedidiah.greenfelder@example.net', 44788, 'processing', 'Commodi similique numquam at nisi provident ea. Deleniti delectus hic minus quia impedit alias. Nihil est ratione aut nostrum.', 4, '2020-12-12 18:15:00', '2020-12-31 11:25:14'),
(101322, 'Mr. Gunnar Strosin', '43954 Vaughn Ranch Apt. 049\nEast Maribelside, NJ 16307', 'Gideonport', '+1.843.923.6035', 'alize.adams@example.org', 44390, 'shipping', 'Cumque voluptatum in nam fugit. Omnis ullam ducimus consectetur ex et vel aut magnam. In voluptates sint ab.', 4, '2020-12-28 18:15:00', '2020-12-31 11:25:14'),
(101323, 'Vallie Abbott', '255 Kunze Cove\nNew Adah, KS 45921-2070', 'East Jordon', '1-460-545-5025', 'emmerich.lulu@example.com', 49139, 'on hold', 'Quaerat ea earum est. Et sed voluptatum expedita et.', 3, '2020-12-15 18:15:00', '2020-12-31 11:25:14'),
(101324, 'Stephon Bruen III', '36548 Mann Run Apt. 131\nGradyport, MN 98400-4930', 'Lake Lonnietown', '647-257-5089', 'mable22@example.com', 38402, 'shipping', 'Sed impedit tenetur aliquid magnam excepturi. Veniam labore rerum animi repellendus. Est rem consequatur praesentium eos ab itaque.', 1, '2020-12-27 18:15:00', '2020-12-31 11:25:14'),
(101325, 'Hester Hagenes', '963 Helen Brook Apt. 114\nNorth Marianne, TN 86963-7750', 'West Connieside', '329-878-3558 x365', 'cheathcote@example.net', 19131, 'completed', 'Magni aut est in quia rerum. Odio in magni est. Repellendus provident in qui est. Quo nihil enim accusamus necessitatibus est et dolor.', 1, '2020-12-11 18:15:00', '2020-12-31 11:25:14'),
(101326, 'Liana Goodwin II', '567 Heaven Mountain Suite 571\nWest Dixieview, GA 72017-9622', 'East Jake', '+12795707010', 'cronin.keshaun@example.net', 41366, 'shipping', 'Consequatur inventore atque ipsum et. Debitis adipisci unde eaque itaque explicabo id illo. Et aliquam aut eaque error.', 3, '2020-12-21 18:15:00', '2020-12-31 11:25:14'),
(101327, 'Libby Oberbrunner MD', '67288 Mariano Forges\nLake Sylvestermouth, ID 49675', 'Marjoriestad', '973-312-5006 x0021', 'april.hyatt@example.net', 17758, 'processing', 'Eius error adipisci repellendus omnis. Et et et quod ea ut. Voluptatem corrupti rerum asperiores ut sit. Blanditiis voluptatem nulla dolor doloremque voluptatem ducimus nemo.', 3, '2020-12-19 18:15:00', '2020-12-31 11:25:14'),
(101328, 'Wilfrid Schmitt', '638 Runolfsson Streets Suite 368\nSkilestown, MD 25724', 'East Mckaylafort', '928-372-1272 x3230', 'amurray@example.com', 44846, 'completed', 'Expedita qui ad voluptate in animi quia fuga. Ab occaecati distinctio eos laboriosam ullam. Blanditiis ab optio perferendis et. Velit cum ea voluptas vel adipisci.', 4, '2020-12-27 18:15:00', '2020-12-31 11:25:14'),
(101329, 'Briana Pfeffer', '847 Konopelski Villages\nLake Gwendolynview, ME 42830-5949', 'Serenitymouth', '(570) 950-7536 x37835', 'huels.ellen@example.com', 13012, 'on hold', 'Omnis est laudantium aperiam et quis sit. Animi possimus aut consequatur debitis adipisci. Odit similique dicta quia et odio iure.', 4, '2020-12-13 18:15:00', '2020-12-31 11:25:14'),
(101330, 'Mr. Roberto Rodriguez PhD', '5569 Casper Stream\nPort Morriston, KS 13140', 'North Emeraldberg', '+1 (283) 286-5493', 'mallie07@example.com', 11493, 'on hold', 'Aut beatae vitae est qui error autem. Ducimus quaerat illo soluta dolorem. Repellendus voluptatem iusto magni amet.', 3, '2020-12-11 18:15:00', '2020-12-31 11:25:14'),
(101331, 'Mrs. Shanon Watsica DVM', '5046 Gerard Wall Suite 934\nNorth Percivalland, MT 63785', 'Boscochester', '897-614-3614', 'kertzmann.damon@example.net', 49525, 'shipping', 'Distinctio fuga ut nihil minima repudiandae et. Qui aut suscipit voluptatibus fuga aperiam numquam excepturi. Rerum necessitatibus saepe sit doloribus excepturi. Ut ipsa quasi et aut sint.', 1, '2020-12-17 18:15:00', '2020-12-31 11:25:14'),
(101332, 'Alycia Rowe I', '91883 Brock Isle Apt. 416\nEast Yazminfort, NY 67333', 'South Freemanborough', '(775) 438-1269 x901', 'gerlach.hillary@example.com', 32741, 'completed', 'Consequatur ratione omnis dicta dolorem adipisci deserunt. Quia sit et fugiat adipisci fugit consequatur quis. Iste autem est ut corporis. Similique suscipit eaque consequatur dolore sed magni aut.', 3, '2020-12-29 18:15:00', '2020-12-31 11:25:14'),
(101333, 'Miss Mariela Jones', '3328 Roxane Motorway Apt. 224\nKaylaborough, NC 46028', 'Hodkiewiczburgh', '510.817.2838 x478', 'destini61@example.org', 43448, 'on hold', 'Est voluptatem perferendis atque fugit et. Est facilis error qui nobis. Corporis non facilis aliquid corrupti nihil.', 3, '2020-12-29 18:15:00', '2020-12-31 11:25:14'),
(101334, 'Dorothy Toy', '485 Collins Parkways Apt. 155\nSouth Prudenceland, MN 78815-3072', 'North Kaleigh', '+13853554973', 'grady.carlos@example.org', 20198, 'processing', 'Dicta nihil tenetur ab voluptatem. Sit totam provident tempore magni. Sint voluptate facilis aut doloribus reiciendis.', 4, '2020-12-27 18:15:00', '2020-12-31 11:25:14'),
(101335, 'Dr. Hyman Jacobson', '56292 Spinka Forge Apt. 512\nCronaburgh, IA 79715-5779', 'North Cindyton', '1-812-519-5733 x6670', 'dkrajcik@example.org', 15018, 'completed', 'Non iusto consequatur ab rerum. Sequi unde repudiandae perferendis provident autem. Optio quia voluptatem porro aliquam sint quidem maiores.', 4, '2020-12-21 18:15:00', '2020-12-31 11:25:14'),
(101336, 'Mrs. Jaclyn Botsford PhD', '42144 Amanda Ford Suite 067\nNorth Emory, WI 88077-1723', 'Stanfurt', '(548) 768-9766 x287', 'ulices.prohaska@example.net', 10821, 'processing', 'Praesentium expedita vel doloremque quam eum deserunt. Voluptates ipsa non in. Molestiae ut veniam molestias cum a sint.', 1, '2020-12-12 18:15:00', '2020-12-31 11:25:14'),
(101337, 'Dr. Anjali Douglas Sr.', '19533 Schultz Field\nSouth Vernamouth, NC 21797-2729', 'Port Flaviehaven', '249-889-5014', 'jeanne40@example.com', 24208, 'shipping', 'Aspernatur repudiandae nobis repellendus aut repudiandae. Culpa distinctio odit molestiae placeat. Tenetur molestias nihil cumque sequi.', 4, '2020-12-15 18:15:00', '2020-12-31 11:25:14'),
(101338, 'Darius Conn', '51598 Brekke Place\nPort Lomamouth, NV 29200-7985', 'New Aydenmouth', '1-356-572-4750 x511', 'ugoodwin@example.org', 15115, 'shipping', 'Officia expedita quos nihil alias odio. Molestias pariatur incidunt nam. Voluptates ipsa sunt minus laborum ut iste.', 1, '2020-12-14 18:15:00', '2020-12-31 11:25:14'),
(101339, 'Daphne Zulauf', '13842 Mariah Plaza\nWest Eula, ME 60900', 'Ahmedshire', '+1-948-852-1074', 'walter.yost@example.com', 40108, 'on hold', 'Facilis non neque eveniet repellat optio id totam blanditiis. Ipsum sed aliquam dicta quos facere. Sint autem quisquam doloribus. Animi eum nulla repudiandae deserunt.', 1, '2020-12-21 18:15:00', '2020-12-31 11:25:14'),
(101340, 'Prof. Kavon Hermann', '4609 Lynch Plaza Suite 196\nAndrewview, GA 42678', 'East Efrenborough', '646-465-0753 x8199', 'ken.labadie@example.net', 42949, 'processing', 'Sunt aut harum provident numquam dolorem ea. Voluptatem est nostrum sit aut natus officiis fuga est. Quia veniam et nihil. Fuga quia est ab et voluptate qui eaque.', 4, '2020-12-25 18:15:00', '2020-12-31 11:25:15'),
(101341, 'Prof. Darius Willms', '3358 Koepp Lane Suite 839\nWest Therese, IN 40118', 'Vincenthaven', '+1-870-234-0865', 'afton68@example.com', 39270, 'cancelled', 'Eaque ratione enim minima aut similique consequatur molestiae. Sit nesciunt maxime qui non quasi aperiam vel. Iure dolor sint architecto ea quisquam. Culpa ut facere molestiae.', 4, '2020-12-12 18:15:00', '2020-12-31 11:25:15'),
(101342, 'Demarcus Mante', '359 O\'Hara Park Suite 330\nRohanland, NH 21978-0086', 'Desireefurt', '384.466.8580 x19555', 'shanahan.reynold@example.com', 45292, 'shipping', 'Nulla libero cum nemo. Enim quia et ducimus recusandae. Sequi et sit quia vel ut ipsam. Dicta et natus sunt voluptatem beatae dignissimos repellat.', 3, '2020-12-28 18:15:00', '2020-12-31 11:25:15'),
(101343, 'Guido Gorczany', '24409 Lang Cliffs\nLetitiaside, AK 34733', 'Mannfort', '+1-612-963-9863', 'wrussel@example.org', 11274, 'shipping', 'Doloremque quisquam quis excepturi aut hic nihil. Iusto fugiat necessitatibus inventore et est omnis aperiam. At minima libero ut vero debitis ut dolores.', 3, '2020-12-30 18:15:00', '2020-12-31 11:25:15'),
(101344, 'Meagan Fritsch', '34168 Considine Parks\nNorth Milton, ND 07574-8253', 'South Benny', '1-923-416-9212 x574', 'lon.botsford@example.net', 14993, 'processing', 'Quia alias culpa mollitia doloribus. Ipsa excepturi ea enim accusantium. Voluptas ut eaque quis autem nesciunt incidunt. Aspernatur sunt facilis ipsa ut id impedit.', 3, '2020-12-21 18:15:00', '2020-12-31 11:25:15'),
(101345, 'Pierce Kerluke', '3226 Nelson Ways Suite 640\nSiennashire, KY 56383-4101', 'Ornfurt', '956-256-7008 x3101', 'tremaine.altenwerth@example.net', 14783, 'completed', 'Sint aliquid eos iste iste consequuntur aspernatur commodi aut. Ut debitis facilis enim consectetur assumenda. Dignissimos quibusdam quia eaque asperiores qui et.', 1, '2020-12-16 18:15:00', '2020-12-31 11:25:15'),
(101346, 'Ethel Olson', '1166 Blanche Tunnel Suite 288\nCorkeryport, OK 34381-9055', 'East Eulaliaburgh', '428.838.2371 x1645', 'roman67@example.net', 18548, 'cancelled', 'Accusamus esse nihil consequatur omnis iure. Quo facilis soluta eos ducimus aut.', 4, '2020-12-13 18:15:00', '2020-12-31 11:25:15'),
(101347, 'Hunter Kirlin', '9840 Kylee Centers\nBartelltown, AZ 05255', 'North Erwinbury', '718-768-7687 x62691', 'jayde23@example.net', 12001, 'cancelled', 'Qui ipsa enim maiores cum ut ullam. Ullam aut id sed quia asperiores sequi qui fuga. Libero quo doloribus et est veniam.', 3, '2020-12-10 18:15:00', '2020-12-31 11:25:15'),
(101348, 'Rebeka Wiza II', '10736 Swift Mission\nWildermantown, MT 07110', 'Hillview', '254-695-4249 x160', 'camille39@example.com', 34795, 'cancelled', 'Quasi tempora animi aut unde ipsa est quisquam. Sed et soluta ea laudantium ad. Explicabo dicta voluptatum et eos optio est.', 4, '2020-12-21 18:15:00', '2020-12-31 11:25:15'),
(101349, 'Dr. Doris Jaskolski PhD', '819 Chelsie Hills Suite 419\nNew Emerson, PA 54237-7218', 'South Kennithshire', '659-818-4506 x26250', 'christophe88@example.net', 41054, 'on hold', 'Dignissimos voluptatem culpa fuga corrupti eius incidunt voluptas nesciunt. Reiciendis vitae ipsam et mollitia ipsum placeat quia. Repellat delectus non recusandae porro nisi sequi rerum dolorem.', 3, '2020-12-24 18:15:00', '2020-12-31 11:25:15'),
(101350, 'Ms. Christy Thiel', '1254 Kareem Mill Apt. 272\nNorth Torranceside, MT 58532-8547', 'Jodiechester', '1-698-226-1461 x79678', 'weldon.vonrueden@example.com', 34651, 'on hold', 'Autem placeat sequi vel omnis consequatur. Reiciendis explicabo doloremque ex omnis rerum omnis labore. Et perferendis aut quaerat consectetur ex.', 3, '2020-12-18 18:15:00', '2020-12-31 11:25:15'),
(101351, 'Frida Friesen DVM', '119 Walker Spring\nWest Monserrate, WA 15987', 'Bodefurt', '(963) 276-7576', 'brakus.ola@example.com', 47876, 'on hold', 'Odit quod ut debitis odit velit. Iusto illum maiores qui corporis architecto. Consequuntur dicta voluptatibus voluptatem.', 3, '2020-12-28 18:15:00', '2020-12-31 11:25:15'),
(101352, 'Ms. Eden Toy', '781 Bartoletti Pine Apt. 989\nWest Friedaburgh, MT 19520', 'West Ressie', '+1-337-368-2635', 'brady82@example.org', 11824, 'processing', 'Vel autem perferendis eveniet soluta dolores minus. Vel veniam sequi temporibus architecto eligendi. Quasi magnam eum quibusdam aut nulla dicta. Magnam aut fugit deleniti natus ea.', 1, '2020-12-28 18:15:00', '2020-12-31 11:25:15'),
(101353, 'Shanny Corwin III', '2705 Welch Lights\nPort Keonview, VA 45188', 'Lake Janeberg', '226-679-5212', 'wade50@example.net', 42075, 'completed', 'Ut ut dolorem non et. Error provident est laudantium ut ea. Beatae repellendus earum similique aut suscipit. Ad occaecati sit necessitatibus molestias est doloremque aperiam rem.', 3, '2020-12-11 18:15:00', '2020-12-31 11:25:15'),
(101354, 'Jazmyne Metz', '439 Ford Plains Suite 640\nAdellaport, VA 73213', 'East Raven', '1-871-662-1593 x49020', 'paula87@example.org', 19221, 'processing', 'Et mollitia quibusdam ullam asperiores voluptatem cumque odit. Reiciendis impedit numquam consequuntur qui velit.', 1, '2020-12-12 18:15:00', '2020-12-31 11:25:15'),
(101355, 'Agustina Kiehn', '9272 Al Lake Suite 029\nEast Weldonhaven, MA 66596', 'Mayertside', '+1-656-737-3492', 'xwisozk@example.net', 38207, 'processing', 'Cum voluptatem necessitatibus corrupti voluptatem velit. At facere sed voluptas necessitatibus praesentium est dolor officia. Accusamus optio omnis pariatur pariatur sed autem.', 3, '2020-12-30 18:15:00', '2020-12-31 11:25:15'),
(101356, 'Mrs. Nora Okuneva', '32387 Simonis Mill\nLynchbury, WA 74368', 'Lake Gabrielstad', '458-306-0882 x4452', 'barrows.anais@example.org', 11599, 'shipping', 'In quo optio ut possimus impedit. Culpa rerum aut occaecati aspernatur eveniet. Quas maxime voluptatibus nostrum quod quibusdam. Est reiciendis ab delectus omnis.', 4, '2020-12-30 18:15:00', '2020-12-31 11:25:15'),
(101357, 'Mr. Andres Bogan', '94518 Ignacio Falls Suite 047\nLake Stuart, NH 40998-5513', 'Port Godfreyton', '+18077656989', 'ejakubowski@example.org', 45492, 'processing', 'Eius voluptatibus et est. Dicta accusantium beatae aut soluta recusandae non quos omnis. Rerum quam voluptatem iste delectus atque dolorum et. Voluptates inventore delectus cumque in.', 4, '2020-12-26 18:15:00', '2020-12-31 11:25:15'),
(101358, 'Dr. Fernando Streich', '620 Juana Flat Suite 007\nLake Tomas, FL 27988', 'New Jose', '341-418-3273 x31555', 'mertz.quentin@example.com', 13873, 'processing', 'Quibusdam commodi et eos rem suscipit exercitationem placeat dolore. Saepe aperiam suscipit nulla delectus sint. At laboriosam itaque non autem dolorem autem possimus.', 1, '2020-12-24 18:15:00', '2020-12-31 11:25:15'),
(101359, 'Valerie Larson', '64433 Tamara Dam Apt. 407\nLake Omari, AZ 79496-2499', 'West Tyson', '+17825283777', 'jeff63@example.org', 25035, 'on hold', 'Velit quia maiores quia mollitia voluptatem voluptas. Ipsam porro id voluptates qui nemo tempore optio. Ea aliquid quo dolore enim necessitatibus ratione.', 3, '2020-12-17 18:15:00', '2020-12-31 11:25:16'),
(101360, 'Bernita Will', '84917 Tracy Burgs Apt. 568\nWardside, MI 55778', 'Schadenland', '910-749-9771 x78564', 'candace.donnelly@example.net', 16259, 'shipping', 'Veniam porro assumenda tempore et itaque. Qui id similique tempora unde hic. Accusamus et consequatur et eos est corrupti. Veniam quisquam libero ut. Praesentium dolores tempora vel neque non.', 3, '2020-12-30 18:15:00', '2020-12-31 11:25:16'),
(101361, 'Noemy Cruickshank', '668 Ritchie Glens Apt. 479\nDagmarbury, AZ 13133', 'New Fannie', '665.641.2779 x0132', 'walter.rebeca@example.com', 29367, 'on hold', 'Possimus facilis dolores aut nihil sed. Sequi quisquam totam maiores consequatur ut distinctio in. Est repudiandae qui deserunt consequatur inventore.', 1, '2020-12-24 18:15:00', '2020-12-31 11:25:16'),
(101362, 'Prof. Misael Yost Sr.', '12700 Trantow Squares Suite 321\nClaireville, ME 31025', 'Hudsonfort', '+12639495390', 'alec52@example.net', 21402, 'completed', 'Veritatis accusantium odio quos molestiae dolorem sed vero. Et accusamus facilis non recusandae necessitatibus.', 3, '2020-12-19 18:15:00', '2020-12-31 11:25:16'),
(101363, 'Cole Mante', '395 Farrell Trail\nKipchester, SD 61217-1504', 'Lake Demetrisfurt', '1-381-993-5131 x6009', 'zachariah.zieme@example.net', 39354, 'processing', 'Non quo est ea perferendis unde. Est qui fugit velit nemo iste ea autem. Voluptatem rem vitae similique.', 1, '2020-12-26 18:15:00', '2020-12-31 11:25:16'),
(101364, 'Prof. Owen Waters', '892 Conn Station\nWest Louie, MT 33337-2723', 'West Alishachester', '359.293.0173', 'jwhite@example.com', 31509, 'completed', 'Quas autem consectetur assumenda consequatur. Id distinctio eligendi quia laborum sunt rem adipisci. Est et sed rem commodi modi error. Necessitatibus error quam sit.', 3, '2020-12-11 18:15:00', '2020-12-31 11:25:16'),
(101365, 'Dr. Nestor Conroy II', '343 Lue Square Apt. 104\nPort Hettie, AZ 20206', 'New Alyshaside', '672-803-8155 x379', 'dena.oconnell@example.net', 24427, 'on hold', 'Numquam possimus at vitae deleniti accusantium maiores in. Odit animi et quidem nihil reiciendis. Et dolor sit ducimus eos eum. Et eum officia laboriosam autem aliquid quidem et.', 1, '2020-12-11 18:15:00', '2020-12-31 11:25:16'),
(101366, 'Nina Orn', '5045 Domenica Locks\nSouth Lorenz, MT 43747', 'Arnulfofurt', '931.466.7952 x3452', 'gbashirian@example.com', 47099, 'completed', 'Repellendus sunt dolor numquam ipsa vero atque quia. Molestias accusamus eius recusandae vitae totam aliquid sed.', 3, '2020-12-24 18:15:00', '2020-12-31 11:25:16'),
(101367, 'Ashleigh Greenfelder', '62374 Haag Plaza Apt. 687\nNorth Spencerhaven, MS 60491-7540', 'Hellerside', '1-259-664-0637 x29582', 'daphnee.hirthe@example.net', 35264, 'shipping', 'Voluptas debitis repellendus facilis minima numquam veniam commodi labore. Tempora necessitatibus rerum voluptas quia provident facilis iure.', 4, '2020-12-27 18:15:00', '2020-12-31 11:25:16'),
(101368, 'Yvonne Hahn', '14078 Kody Vista\nSouth Demarcoside, VT 03139-9742', 'Icieville', '+1.819.803.2213', 'kendra70@example.net', 48351, 'cancelled', 'Dolore explicabo occaecati fugiat. Velit sit cum explicabo iusto. Soluta necessitatibus quae dolore non quam eum quisquam.', 4, '2020-12-13 18:15:00', '2020-12-31 11:25:16'),
(101369, 'Issac Krajcik PhD', '25571 Kuphal Tunnel\nGeovanniland, AR 38922-1670', 'North Frank', '321.764.4856 x616', 'crona.stefanie@example.com', 31662, 'shipping', 'Dignissimos sed ducimus est necessitatibus. Impedit illum ut aut non ipsum. Sit qui quibusdam asperiores aut laudantium sit architecto. Cum error quia perferendis sit et est.', 4, '2020-12-15 18:15:00', '2020-12-31 11:25:16'),
(101370, 'Antoinette Mosciski', '921 Grady Mountain\nBirdietown, WA 44100-4989', 'West Griffinstad', '841.492.5268', 'qleannon@example.net', 15103, 'on hold', 'Minima in placeat nihil sunt. Eum quae est sunt natus quam sed facilis rerum. Ratione voluptatem unde aliquid libero vel qui. Sed fugiat aut quidem rerum.', 4, '2020-12-12 18:15:00', '2020-12-31 11:25:16'),
(101371, 'Jade Bayer', '884 Modesto Crest\nDaijaberg, SC 80504', 'Jasminland', '(840) 710-9873', 'orpha13@example.org', 22776, 'cancelled', 'Aliquam tenetur provident sequi. Minima beatae dolorum ipsum vitae aperiam debitis. Consequatur molestiae delectus est debitis ea excepturi. Sit harum enim veniam quis tempore facilis dolore.', 4, '2020-12-14 18:15:00', '2020-12-31 11:25:16'),
(101372, 'Rachel Stark PhD', '1094 Kemmer Loop\nLake Aubreeview, CT 52169', 'East Winfield', '608.310.0775 x78504', 'nryan@example.org', 31732, 'shipping', 'Sunt et dolores dolore voluptatum maxime. Voluptatem repellendus nesciunt saepe fugiat inventore. Doloribus ipsum accusamus et consequatur velit similique blanditiis qui.', 1, '2020-12-19 18:15:00', '2020-12-31 11:25:16'),
(101373, 'Jennifer Pouros Sr.', '28843 Raul Prairie Suite 508\nEast Erling, ND 37246', 'West Era', '624-249-9312 x5381', 'tate29@example.com', 16801, 'cancelled', 'Eum qui et nesciunt dolores aliquam adipisci. Exercitationem quo qui molestias et perferendis reiciendis saepe.', 4, '2020-12-28 18:15:00', '2020-12-31 11:25:16'),
(101374, 'Dr. Nathen Dickinson V', '28603 Alva Flat\nLake Maiya, ND 55623-5964', 'Lake Virgiefort', '+1 (292) 737-0861', 'mlubowitz@example.net', 32580, 'processing', 'Ut qui provident non perferendis. Consequuntur voluptatem ut vel ex. Aperiam sunt architecto suscipit inventore mollitia sequi. Nam odit harum nostrum suscipit distinctio commodi reiciendis ipsa.', 1, '2020-12-18 18:15:00', '2020-12-31 11:25:16'),
(101375, 'Miss Rebecca Schiller PhD', '9705 Stehr Summit Suite 939\nKenyaborough, IL 89729-5630', 'Lake Deliaborough', '+16278217115', 'braun.lisa@example.net', 29078, 'completed', 'Et nulla et autem aliquam. Similique quod neque eos et. Quia repellat voluptatem commodi nesciunt facilis. Iure illo qui et sit.', 3, '2020-12-23 18:15:00', '2020-12-31 11:25:16'),
(101376, 'Wilburn Block', '573 Kiehn Burg Suite 180\nNorth Tyrelberg, MS 55276-7833', 'Hegmannchester', '369-761-1514', 'joy.tromp@example.org', 28274, 'shipping', 'Aut sit qui fugit id similique. Minus animi illo omnis voluptatum esse. A et porro doloremque dolores facilis. Soluta eius id libero est nihil adipisci reprehenderit.', 3, '2020-12-18 18:15:00', '2020-12-31 11:25:16'),
(101377, 'Mrs. Lydia Nicolas', '2896 Huels Path\nNew Janellehaven, NJ 90779-3386', 'South Roscoe', '829-621-5945 x438', 'harmon.ritchie@example.net', 43068, 'processing', 'Quaerat sit aut quibusdam praesentium eligendi ut. Eos laborum rerum sit rerum officia voluptatem dolorem temporibus. Quidem aliquid magni rerum sit consequuntur.', 3, '2020-12-12 18:15:00', '2020-12-31 11:25:16'),
(101378, 'Davion Pfannerstill', '2682 Roberts Dale\nCronaside, SD 14220', 'Lake Nash', '347-629-1626', 'lester34@example.net', 16420, 'on hold', 'Et cupiditate doloremque soluta aliquam. Distinctio sed rerum aspernatur veniam necessitatibus optio. Consequuntur voluptates enim voluptatum similique non alias nobis.', 3, '2020-12-27 18:15:00', '2020-12-31 11:25:16'),
(101379, 'Miss Tina Brekke II', '9427 Haylee Harbor Apt. 638\nEast Hardy, PA 71921-0246', 'New Elizabethland', '+1-328-723-7917', 'delaney30@example.org', 20343, 'cancelled', 'Doloremque ab beatae ut pariatur tempora quas cum. Maiores tempora nihil reprehenderit ut modi aut. Quas aut expedita minima repellendus vel est quo.', 3, '2020-12-14 18:15:00', '2020-12-31 11:25:16'),
(101380, 'Mrs. Rozella Murray', '78876 Howell Trail Apt. 374\nGerholdtown, OH 06566-8468', 'Pattieland', '(598) 893-7061', 'beahan.liliana@example.org', 43204, 'completed', 'Ad saepe earum iste. Cum rerum dolor et repudiandae praesentium. Et odio aut vel eos dolores doloremque officiis. Veniam eaque illo enim ipsum. Consequatur dolorum ea quo ut est ea quas.', 3, '2020-12-14 18:15:00', '2020-12-31 11:25:16'),
(101381, 'Kim Mills', '56242 Syble Corner Apt. 399\nEast Courtneyton, NV 32846', 'South Antone', '916.822.6778 x42837', 'deanna.reynolds@example.net', 32838, 'on hold', 'Quod ut earum necessitatibus odio aut natus vel doloremque. Repellat et maxime totam quasi neque. Quia vel et iste sit ex aut totam consequuntur.', 3, '2020-12-18 18:15:00', '2020-12-31 11:25:17'),
(101382, 'Tara McKenzie III', '3594 Destini Square Suite 326\nPort Antonette, SD 48432', 'Haagstad', '(704) 637-4728 x20379', 'marquardt.finn@example.org', 13812, 'cancelled', 'Assumenda cum quae aut omnis. Aliquid quis vel tenetur architecto in corrupti eveniet. Voluptas recusandae occaecati rerum deserunt consectetur.', 4, '2020-12-24 18:15:00', '2020-12-31 11:25:17'),
(101383, 'Julianne Veum', '1523 Ana Squares Suite 951\nKreigerberg, AK 23904', 'Elwynton', '(675) 580-5835 x4213', 'mosciski.andreanne@example.net', 15242, 'shipping', 'Non aut incidunt temporibus accusamus id dolores repellat. Omnis nulla quia natus eum ea et culpa. Voluptatum voluptatibus repellat placeat illo. Dolor repellat nemo velit maxime in rerum.', 1, '2020-12-21 18:15:00', '2020-12-31 11:25:17'),
(101384, 'Edmund Nader', '27412 Loma Mount Apt. 955\nBatzhaven, OR 93559', 'Rowenastad', '(884) 273-6887 x759', 'pat80@example.org', 26525, 'shipping', 'Est eligendi magnam autem dolorem. Excepturi praesentium qui quisquam fuga qui sint vero. Cupiditate dolorum necessitatibus odio sit. Doloribus corporis voluptates sit asperiores est.', 3, '2020-12-30 18:15:00', '2020-12-31 11:25:17'),
(101385, 'Shea Stoltenberg', '4771 Goodwin Prairie\nWest Vivianbury, CA 60837', 'Lake Cara', '546.961.1560', 'ftrantow@example.org', 37372, 'cancelled', 'Omnis architecto eos aut occaecati magnam sapiente rerum. Sint necessitatibus sequi quasi porro.', 4, '2020-12-13 18:15:00', '2020-12-31 11:25:17'),
(101386, 'Talia Kunde', '838 Davon Lakes\nRickieburgh, NC 82501', 'East Ransom', '(694) 891-3125', 'dillan.bins@example.com', 12935, 'cancelled', 'Dolorem voluptatem rerum suscipit ea iusto assumenda. Dicta est aut culpa. Ea est libero amet est nobis et incidunt. Ratione quaerat possimus ipsum porro nulla qui.', 1, '2020-12-27 18:15:00', '2020-12-31 11:25:17'),
(101387, 'Joana Rohan', '546 Merl Junction\nNorth Jordyn, CO 75139-9851', 'Hayleyberg', '739-303-6226 x3170', 'anne.abshire@example.org', 46226, 'cancelled', 'Aut animi ut at ipsam quibusdam impedit aut eos. Nisi non quis omnis aspernatur necessitatibus provident aliquid. Ut beatae aut perferendis sit magni.', 4, '2020-12-20 18:15:00', '2020-12-31 11:25:17'),
(101388, 'Rodger Greenholt', '9594 Doyle Coves Apt. 329\nLorenzabury, DC 37391', 'West Kayfurt', '1-863-380-6655', 'ofelia47@example.org', 29208, 'shipping', 'Cumque occaecati qui beatae eos eius. Sint accusantium debitis aut ut quibusdam. Cupiditate sed ab et et modi. Dolor qui dignissimos voluptas expedita.', 1, '2020-12-20 18:15:00', '2020-12-31 11:25:17'),
(101389, 'Stephon Hartmann', '24840 Brooklyn Prairie\nNorth Madison, CO 85320-9934', 'North Mckenzie', '304.224.0948', 'hoppe.dominique@example.org', 19741, 'shipping', 'Qui cumque itaque quasi. Reprehenderit alias nobis qui. Minus qui quasi velit aut. Aliquid nihil aspernatur est. Enim ut qui accusantium nam. Minus consequatur tempora et voluptas.', 4, '2020-12-10 18:15:00', '2020-12-31 11:25:17'),
(101390, 'Roslyn Schinner', '656 Hickle Spurs\nZachariahborough, WV 35859-2796', 'South Isabellastad', '651-281-7773 x6979', 'hintz.frances@example.net', 10803, 'completed', 'Non voluptas aut excepturi earum enim nam amet quam. Neque quos facilis sint voluptatem. Ullam omnis autem soluta asperiores eius eos. Tempora autem et tenetur non sunt illum ea.', 4, '2020-12-11 18:15:00', '2020-12-31 11:25:17'),
(101391, 'Mr. Alfred DuBuque', '61023 Rodriguez Camp Suite 818\nLake Merlburgh, ME 50934-2651', 'North Kian', '223-331-9561 x8059', 'torrance.wiza@example.com', 48418, 'cancelled', 'Rerum qui dolorem est enim. Consequuntur earum natus quasi dolores totam atque. Eum dolorum velit saepe consequatur alias quia. Omnis nisi qui nesciunt voluptas incidunt voluptatem et.', 1, '2020-12-27 18:15:00', '2020-12-31 11:25:17'),
(101392, 'Vergie Kuhic', '490 Vilma Union Suite 131\nSerenaville, SC 40282-1571', 'Littelborough', '1-560-208-8008', 'dayna65@example.net', 43765, 'shipping', 'Rem quo accusantium qui tempora. Fugit porro qui id maxime dolor alias. Aliquam soluta ipsa expedita excepturi quia maiores. Unde numquam vitae nihil aperiam sit.', 4, '2020-12-28 18:15:00', '2020-12-31 11:25:17'),
(101393, 'Mario Parisian Sr.', '1730 Romaguera Fork Apt. 859\nSengershire, TX 36547-7817', 'Mariettachester', '(760) 296-1432', 'thiel.elbert@example.com', 49149, 'shipping', 'Ea repudiandae laboriosam est veritatis. Est error recusandae numquam laudantium quia. Quia placeat dolor optio quas soluta.', 1, '2020-12-19 18:15:00', '2020-12-31 11:25:17'),
(101394, 'Dr. Myles Turcotte', '11014 Jason Prairie\nSaraiside, IL 51659', 'New Walter', '+14396698884', 'ferne74@example.com', 27784, 'cancelled', 'Magni tempore voluptatum itaque unde. Possimus accusamus et deserunt a nesciunt. Sit illo possimus sapiente vel cum. Modi fugit tempore illo.', 4, '2020-12-13 18:15:00', '2020-12-31 11:25:17'),
(101395, 'Clara Kutch', '23803 Brooklyn Mountain\nProsaccotown, MO 24917-1064', 'Bayerport', '297-587-2662', 'celestine.lehner@example.org', 18687, 'processing', 'Iusto quibusdam iure dicta officia eos veritatis iusto sed. Eos velit voluptatem aut eligendi debitis sunt et. Repellendus aut quae voluptates distinctio molestias.', 3, '2020-12-12 18:15:00', '2020-12-31 11:25:17'),
(101396, 'Callie Gibson', '61722 Strosin Shore\nBerneiceport, DC 66495-9769', 'Altenwerthchester', '+1-467-241-1081', 'yeichmann@example.com', 49814, 'on hold', 'Non id qui minus. Et dignissimos perspiciatis nemo nihil quod.', 1, '2020-12-28 18:15:00', '2020-12-31 11:25:17'),
(101397, 'Mr. Ruben Roob PhD', '150 Hansen Cliffs\nLake Janessaberg, RI 74678-7042', 'New Samirview', '1-378-552-5997 x630', 'klein.janelle@example.com', 22151, 'completed', 'Modi quis perferendis quaerat molestiae impedit et assumenda. Itaque et error blanditiis id harum perspiciatis. Voluptas iste consequatur sunt delectus. Laboriosam eius qui culpa sint.', 4, '2020-12-24 18:15:00', '2020-12-31 11:25:17'),
(101398, 'Athena Schuster Jr.', '361 Ayana Road\nWest Carley, WV 99964-5599', 'Krajcikstad', '989.839.8920 x15453', 'bertha45@example.org', 20767, 'processing', 'Nostrum facilis dolorem corporis et consequuntur. Quia asperiores qui ea nisi. Nisi aliquid quas quidem ut unde commodi illum. Corrupti omnis consequatur et illum voluptate rerum.', 1, '2020-12-20 18:15:00', '2020-12-31 11:25:17'),
(101399, 'Freeda Hyatt', '5250 Kolby Crossing\nHerminiafort, AR 85234-3995', 'Schneiderside', '932.349.6126', 'heath55@example.net', 29551, 'cancelled', 'Nesciunt ea cum culpa voluptatem reprehenderit vero. Autem tenetur libero sunt.', 3, '2020-12-18 18:15:00', '2020-12-31 11:25:17'),
(101400, 'Glenna Treutel', '3293 Dixie Lodge Suite 142\nLake Jerel, OH 54598', 'Ullrichbury', '(223) 595-4572 x2710', 'lind.liliane@example.org', 38806, 'processing', 'Nemo occaecati numquam est vero illo omnis pariatur. Esse sunt fugit quidem consequatur et accusantium ea.', 3, '2020-12-29 18:15:00', '2020-12-31 11:25:17'),
(101401, 'Dr. Luis Hermann', '3797 Moen Glens Apt. 079\nSouth Bayleefurt, WV 62776-8174', 'Thaliaton', '+1-937-714-2107', 'fnolan@example.com', 24263, 'on hold', 'Voluptas necessitatibus vel aut exercitationem. Animi voluptas autem deserunt quas fuga labore.', 1, '2020-12-15 18:15:00', '2020-12-31 11:25:17');
INSERT INTO `orders` (`id`, `name`, `street_address`, `city`, `phone`, `email`, `total_price`, `status`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(101402, 'Quinton Huel', '5670 Corkery Estates Apt. 087\nNorth Lessie, TX 07404', 'North Normafort', '1-939-597-6198', 'tromp.adella@example.org', 47081, 'completed', 'Iure sed sit omnis dicta sapiente molestias. Deleniti perspiciatis quidem occaecati quia architecto. Suscipit quod accusantium omnis consequatur. Quidem temporibus veritatis sunt totam.', 3, '2020-12-16 18:15:00', '2020-12-31 11:25:18'),
(101403, 'Marjorie Crona', '60171 Golden Square Suite 660\nSouth Emilyton, NH 79137', 'East Jayne', '1-739-703-4284', 'rosella.osinski@example.net', 39302, 'cancelled', 'Voluptate velit accusamus eligendi sit rerum provident. Odio impedit earum adipisci tempora.', 3, '2020-12-30 18:15:00', '2020-12-31 11:25:18'),
(101404, 'Jeanette Wilkinson', '381 Purdy Greens\nGreenfort, MA 15626', 'North Kellie', '626.518.2045', 'cleta63@example.org', 41016, 'processing', 'Minima voluptas est et nihil. Neque consequatur ut voluptates. Dolorem quo culpa ducimus aut delectus aperiam quia. Adipisci sunt voluptates non culpa voluptas qui.', 3, '2020-12-15 18:15:00', '2020-12-31 11:25:18'),
(101405, 'Miss Janis Bogisich', '7843 Hahn Expressway Apt. 606\nLake Trinity, NJ 59650-4334', 'West Cassidymouth', '+1-252-376-1963', 'blanda.baylee@example.org', 28201, 'cancelled', 'Magni aliquid perspiciatis nostrum qui vitae autem quasi. Qui soluta deserunt iure quia. Perferendis ut tempora necessitatibus officiis rem adipisci.', 4, '2020-12-11 18:15:00', '2020-12-31 11:25:18'),
(101406, 'Mr. Reagan Farrell', '674 Elyse Cove Apt. 756\nNorth Royburgh, CO 81746', 'Port Deronmouth', '340.710.5514', 'ratke.vergie@example.org', 30096, 'shipping', 'Esse veritatis nam deleniti vero. Facere et non earum qui veritatis veniam. Quod quia non ad architecto consequatur sunt.', 3, '2020-12-22 18:15:00', '2020-12-31 11:25:18'),
(101407, 'Lola Powlowski', '8934 Raven Hills\nNew Rickiefurt, VT 58549', 'Marvinfort', '1-329-396-5879', 'moriah.mccullough@example.org', 46256, 'cancelled', 'Provident itaque qui ratione eius. Non consequatur id perferendis repellendus maxime explicabo. Commodi alias est incidunt eius dignissimos non aut.', 4, '2020-12-11 18:15:00', '2020-12-31 11:25:18'),
(101408, 'Dr. Clementine Bechtelar MD', '150 Travon Ridge Apt. 846\nDarehaven, AK 44383', 'North Celineburgh', '1-431-687-0900 x192', 'ikoss@example.org', 47555, 'on hold', 'Facere doloribus ipsum eligendi. Aspernatur aperiam et ut. Ut et sed tempore fugiat maxime repudiandae.', 3, '2020-12-26 18:15:00', '2020-12-31 11:25:18'),
(101409, 'Colton Dietrich', '37172 Earnestine Villages Suite 235\nHagenesfort, VT 62947-1895', 'South Ilene', '681.570.4967', 'rafael43@example.com', 41197, 'processing', 'Quisquam quae laborum explicabo ut magnam veritatis laudantium. Molestias vel numquam doloribus dolor voluptas. Est blanditiis culpa ea aut harum. Voluptatem atque unde eius est.', 3, '2020-12-14 18:15:00', '2020-12-31 11:25:18'),
(101410, 'Dr. Roslyn Goyette V', '468 Harber Fields Apt. 688\nWest Breanne, UT 65512', 'Port Furman', '667-842-2055 x596', 'oliver21@example.net', 38276, 'cancelled', 'Aliquid qui id cum laboriosam recusandae aliquam tempore. Eum beatae neque neque rerum. Necessitatibus suscipit veritatis voluptatem.', 4, '2020-12-30 18:15:00', '2020-12-31 11:25:18'),
(101411, 'Vivien Rau', '82855 Adalberto Cape\nAlfredoville, VA 71510', 'Millerburgh', '+1-889-832-5842', 'eflatley@example.org', 12429, 'on hold', 'Cupiditate quisquam placeat minus aut distinctio veritatis in. Numquam ea ipsum reprehenderit. Ut placeat at omnis. Suscipit voluptas necessitatibus aut laborum.', 3, '2020-12-23 18:15:00', '2020-12-31 11:25:18'),
(101412, 'Lucio Shields Sr.', '56560 Antwan Land Suite 254\nGreysonberg, NV 84467-6193', 'Abbyburgh', '204-425-3713', 'clair95@example.net', 39588, 'shipping', 'Natus culpa sapiente dolor perspiciatis sit aut dolores aspernatur. Similique hic labore soluta atque dicta distinctio nam.', 1, '2020-12-24 18:15:00', '2020-12-31 11:25:18'),
(101413, 'Ms. Malika Johns V', '9937 Greg Hills\nNorth Jaceychester, HI 91716-8105', 'New Boydfort', '1-384-618-4771 x7742', 'koepp.daija@example.org', 16205, 'processing', 'Adipisci sint aut atque repellat. Ut sed aliquid nostrum mollitia quas quia ipsa. Dolorem excepturi id et consectetur quia sed sit beatae.', 4, '2020-12-23 18:15:00', '2020-12-31 11:25:18'),
(101414, 'Dr. Elizabeth Schroeder III', '36074 Rice Trafficway\nSouth Levi, AR 97726', 'Peggieborough', '1-641-351-0704 x79982', 'bailey.hank@example.org', 12144, 'completed', 'Consequuntur deserunt a vel dolorum hic sit. Et reiciendis eum enim reiciendis dolor laborum. Consequatur itaque et rerum reiciendis similique dolor.', 4, '2020-12-23 18:15:00', '2020-12-31 11:25:18'),
(101415, 'Tressa Glover', '2594 Wilmer Expressway Suite 050\nPort Naomie, MS 24593-7683', 'East Florine', '(805) 373-7054 x457', 'murphy.drew@example.org', 16299, 'completed', 'Nisi quis dignissimos facilis assumenda. Aut sunt esse quia corporis voluptatem. Aperiam sit et nobis voluptas quae.', 4, '2020-12-18 18:15:00', '2020-12-31 11:25:18'),
(101416, 'Claudie Collins', '58390 Jamaal Hills Suite 046\nAustenfort, ID 72152-5277', 'Kaydenfort', '(591) 613-9579 x36358', 'lucio71@example.net', 39753, 'processing', 'Architecto deserunt eveniet corporis aperiam iusto nihil. Voluptates expedita molestiae aliquam et. Reprehenderit nostrum doloribus et illum dolorem corrupti.', 1, '2020-12-12 18:15:00', '2020-12-31 11:25:18'),
(101417, 'Dr. Florencio Beier', '227 Yadira Manor Suite 450\nEast Guyport, IA 01463-8847', 'Jacobsonside', '(837) 528-6356 x502', 'brad.greenfelder@example.org', 38614, 'on hold', 'Ut aspernatur qui saepe quia praesentium. Reprehenderit pariatur harum ratione eum suscipit. Aliquid animi enim ea error rerum harum omnis.', 4, '2020-12-16 18:15:00', '2020-12-31 11:25:18'),
(101418, 'Zelda Waelchi', '64631 Veum Gardens\nVenaland, CO 46776-4114', 'West Cristinaborough', '1-690-500-0798 x764', 'vivianne.beatty@example.org', 24651, 'on hold', 'Qui nesciunt quaerat voluptas magnam occaecati. Velit et reiciendis et nihil consequatur id laudantium. Molestias est molestias ipsam.', 3, '2020-12-28 18:15:00', '2020-12-31 11:25:18'),
(101419, 'Elias Schowalter', '6294 Graciela Pine\nWest Andersonbury, NE 44356-2608', 'West Saraistad', '1-835-440-3030 x724', 'treutel.hattie@example.com', 11768, 'cancelled', 'Autem nemo qui voluptatibus amet dolores cumque voluptatem accusamus. Non hic provident dolores illum. Iusto itaque debitis omnis et.', 3, '2020-12-25 18:15:00', '2020-12-31 11:25:18'),
(101420, 'Cydney O\'Keefe', '96206 Kohler Ville\nMarvinmouth, CA 68141', 'Lake Jordane', '(882) 521-3094 x18071', 'kallie99@example.net', 33853, 'processing', 'Error numquam accusamus doloribus perspiciatis autem. Fuga rerum illo dolor vel. Non sed est occaecati et eos doloribus eum. Sunt eaque molestiae velit qui nam fugiat unde odio.', 4, '2020-12-28 18:15:00', '2020-12-31 11:25:19'),
(101421, 'Mathew Bruen', '669 Katelyn Lakes Apt. 547\nHeidenreichmouth, AL 84236', 'New Genoveva', '786.980.5780', 'dejah13@example.net', 46875, 'on hold', 'Nisi et qui pariatur qui ut. Id dignissimos id accusantium. Aut dolor iste perferendis autem ipsa est. Sit officia vel qui distinctio quaerat blanditiis expedita similique.', 4, '2020-12-30 18:15:00', '2020-12-31 11:25:19'),
(101422, 'Marlon Toy', '7114 Darryl Greens\nRebeccafurt, CO 62666', 'Jerdestad', '802-940-4604', 'goodwin.savanah@example.org', 39257, 'shipping', 'Qui et quae provident voluptas ab et. Ratione nobis reprehenderit alias id omnis repellendus modi molestiae. Minima nostrum earum impedit a quos atque labore.', 4, '2020-12-12 18:15:00', '2020-12-31 11:25:19'),
(101423, 'Fred Williamson', '70572 Romaguera Cliffs\nNew Sammiebury, CA 15328', 'West Jerel', '829-531-5690', 'jolie.yost@example.org', 32101, 'on hold', 'Debitis qui ipsam sapiente enim qui. Et consequatur illum sapiente officia illum sed ad alias. Ea voluptatem eius placeat quae dolor voluptatem cupiditate.', 4, '2020-12-23 18:15:00', '2020-12-31 11:25:19'),
(101424, 'Payton Ratke DDS', '8074 Crooks Village Suite 677\nPort Dereckhaven, NV 92246-7569', 'Cadeside', '+1-226-297-7370', 'lueilwitz.abner@example.org', 47647, 'processing', 'Quod deserunt illum repudiandae ut. Doloribus incidunt id dolorem expedita. Et molestiae quod magnam itaque sit dolorem. Sed voluptatum quis aut incidunt ut veritatis occaecati.', 3, '2020-12-16 18:15:00', '2020-12-31 11:25:19'),
(101425, 'Mr. Lamont Nolan', '57844 Labadie Harbor\nHazleshire, NJ 57586', 'Stefanburgh', '+1-263-999-1564', 'elinore.roberts@example.net', 11664, 'shipping', 'Odit consequatur autem sit tenetur tempora natus blanditiis. Illo ea est eos quo aut consectetur cum. Qui non rem quam ipsam laudantium rerum minima. Exercitationem a qui est.', 4, '2020-12-29 18:15:00', '2020-12-31 11:25:19'),
(101426, 'Newton Bradtke', '864 Obie Station Apt. 383\nNew Fiona, SD 42709-5194', 'West Florida', '223-489-4007 x173', 'fmurazik@example.net', 18151, 'processing', 'Est veritatis rerum et adipisci aut ad. Velit asperiores laborum illo sed. Labore eos recusandae quidem totam.', 1, '2020-12-21 18:15:00', '2020-12-31 11:25:19'),
(101427, 'Mrs. Shawna Robel I', '7322 Margaret Forges\nSavanahport, IN 79080', 'Uptonville', '(481) 829-0849 x4438', 'eturner@example.com', 28760, 'cancelled', 'Totam suscipit sint itaque et. Consequuntur numquam doloribus modi est quaerat iste. Sint voluptates harum dolorum error incidunt quam nulla. In quod perspiciatis voluptates neque sunt quasi aliquam.', 3, '2020-12-13 18:15:00', '2020-12-31 11:25:19'),
(101428, 'Ms. Rubie Gottlieb Jr.', '727 Dominic Ranch Apt. 192\nNew Freedachester, NJ 52920', 'Savannahbury', '(989) 215-1011', 'ischulist@example.org', 34438, 'processing', 'Aliquam ipsa tenetur nihil et blanditiis et doloribus. Aut omnis aut et corporis. Et assumenda sit sint ea architecto consequatur.', 3, '2020-12-27 18:15:00', '2020-12-31 11:25:19'),
(101429, 'Garry Donnelly', '68740 Keeley Isle\nNew Krystinamouth, CA 42489-0503', 'Port Deonte', '1-476-442-0626 x10898', 'gboehm@example.org', 20139, 'processing', 'Quas et accusantium voluptatem minus. Doloribus minima ea eum quia quia et rerum ea. Commodi quaerat amet ad veniam natus. Blanditiis aut error repellendus accusantium sint consequatur officia.', 3, '2020-12-27 18:15:00', '2020-12-31 11:25:19'),
(101430, 'Mr. Marco Murphy II', '31960 Anissa Forges Apt. 084\nSouth Rebekahport, KS 39319-0193', 'East Jedton', '+1-663-953-0845', 'weber.hermann@example.org', 32052, 'processing', 'Ut unde nostrum consequatur aut nemo. Dolor vero pariatur quis fugiat qui. Nihil est excepturi et sit autem quos illum. Sit eveniet amet neque ut. Dolor quod nulla repellat rerum quis unde.', 3, '2020-12-12 18:15:00', '2020-12-31 11:25:19'),
(101431, 'Prof. Javonte Treutel', '104 Hammes Camp Suite 820\nHeaneytown, LA 53335', 'North Valentin', '(570) 730-0164', 'dicki.ida@example.com', 37931, 'cancelled', 'Quam molestiae autem placeat aut. Id nostrum voluptas reiciendis modi accusamus et facere. Nihil culpa quis et est repudiandae ut.', 4, '2020-12-15 18:15:00', '2020-12-31 11:25:19'),
(101432, 'Zita O\'Kon', '33052 Anibal Lane Suite 572\nO\'Keefeville, MN 60441-1778', 'South Reyburgh', '557.202.7537', 'karianne18@example.org', 23280, 'cancelled', 'Enim velit est eveniet veniam natus sint nisi non. Cum sunt sint ullam esse nulla. Qui esse placeat sequi itaque adipisci eligendi suscipit. Ullam nesciunt voluptatem possimus eveniet.', 1, '2020-12-20 18:15:00', '2020-12-31 11:25:19'),
(101433, 'Prof. Dannie Vandervort Sr.', '9212 Smith Brook Suite 250\nHallefort, FL 95483-2874', 'South Danyka', '1-261-422-6657', 'hsawayn@example.org', 49663, 'on hold', 'Maxime dolorem occaecati quia dolore unde vel vitae ut. Eum dolorem reiciendis doloremque non dolore culpa. Non eius sapiente vel sequi. Unde enim aut rerum non.', 3, '2020-12-22 18:15:00', '2020-12-31 11:25:19'),
(101434, 'Loma Auer', '278 Sim Pass Apt. 467\nJessikastad, VT 71796', 'Faheyburgh', '683.517.9789', 'sauer.linwood@example.net', 24632, 'cancelled', 'Voluptas qui eum iusto aperiam voluptatem. Sunt nihil placeat sit vitae porro commodi animi. Aut minus voluptas ipsum alias et quis nisi. Voluptatibus soluta saepe voluptas est.', 1, '2020-12-26 18:15:00', '2020-12-31 11:25:19'),
(101435, 'Andres O\'Hara', '4521 Harber Plains Apt. 285\nWest Octavia, SC 80952', 'East Keshaunchester', '1-441-403-6301 x148', 'benedict.lindgren@example.com', 25134, 'on hold', 'Accusamus voluptate ex aut molestiae est. Cum inventore inventore corporis veritatis et ratione ad. Sunt enim quibusdam cumque qui facere maiores perferendis. Et soluta id necessitatibus qui quo.', 3, '2020-12-22 18:15:00', '2020-12-31 11:25:19'),
(101436, 'Prof. Elliot Smith DDS', '969 Borer Park Apt. 696\nYundtshire, NV 82592-6860', 'Treutelberg', '562.551.2568 x42217', 'flo.hoeger@example.com', 47264, 'cancelled', 'Dolorem cumque eos aut molestiae et. Animi dolorem ipsam eum sit ducimus necessitatibus iusto. Ut est ea ipsum et. Fugit a aut est maxime enim quisquam quidem non.', 3, '2020-12-20 18:15:00', '2020-12-31 11:25:19'),
(101437, 'Prof. Ewell Goldner DVM', '48984 Osinski View\nLake Xander, SC 15277', 'East Brenda', '797-620-0826 x30911', 'dratke@example.org', 29935, 'on hold', 'Ea impedit voluptas quis id. Ipsum quas quos natus numquam. Pariatur expedita rerum qui ut.', 3, '2020-12-13 18:15:00', '2020-12-31 11:25:19'),
(101438, 'Miss Suzanne Monahan', '8049 Jasmin Center Apt. 136\nNorth Oliver, OR 62364', 'Kunzemouth', '726-349-9736', 'qgerlach@example.org', 27042, 'completed', 'Quia sunt in voluptas non aut. Doloremque aut qui pariatur consectetur blanditiis. Voluptatum voluptatem est nihil dignissimos veritatis eos.', 1, '2020-12-13 18:15:00', '2020-12-31 11:25:19'),
(101439, 'Mr. Nickolas Larkin PhD', '5836 Cronin Point Apt. 176\nWaltonmouth, NC 92009-5478', 'Littletown', '1-471-212-3850', 'weimann.dayana@example.com', 39839, 'cancelled', 'Autem illum molestiae libero facere quia reiciendis. Aut aliquid dicta omnis temporibus consequuntur qui. Laudantium libero maiores consequatur vitae dolores adipisci quos alias.', 3, '2020-12-21 18:15:00', '2020-12-31 11:25:19'),
(101440, 'Kian Hyatt', '389 Angelita Island\nMuellermouth, NH 26000', 'West Tarynview', '413.962.4074', 'adelle14@example.com', 20023, 'cancelled', 'Quia animi debitis repellat reiciendis. Quis porro sed odit. Vel enim sunt aspernatur enim. Impedit et magnam sint consequatur reiciendis enim libero.', 4, '2020-12-21 18:15:00', '2020-12-31 11:25:19'),
(101441, 'Ethan Abernathy', '99694 Ulises Terrace Apt. 204\nLake Cordeliachester, CA 17038', 'Kihnstad', '831-380-6018', 'eldora11@example.net', 21530, 'shipping', 'Fugit fugit nobis vel iste reiciendis consequatur magni. Dicta voluptas laborum debitis ut animi. Et voluptas quo cumque ad vitae. Autem molestiae consequatur ab vel hic nobis eaque.', 3, '2020-12-23 18:15:00', '2020-12-31 11:25:19'),
(101442, 'Lowell Schowalter', '77527 Hirthe Shoal\nGregstad, AR 82659-4936', 'Kunzechester', '1-385-573-7486', 'aurore62@example.net', 24831, 'shipping', 'Magni blanditiis facere est praesentium perspiciatis qui. Nihil placeat tenetur voluptas atque aut quibusdam mollitia.', 1, '2020-12-27 18:15:00', '2020-12-31 11:25:19'),
(101443, 'Estell Prosacco', '91981 Mayert Extension Suite 095\nSouth Celineside, CO 98010-2528', 'New Maynardborough', '1-465-910-3719', 'brando.hammes@example.com', 25648, 'on hold', 'In nihil sint quas nostrum necessitatibus et corporis. Sed est maxime blanditiis maxime vero voluptas reprehenderit. Ducimus quasi ex dolor aut quam alias soluta et.', 1, '2020-12-21 18:15:00', '2020-12-31 11:25:19'),
(101444, 'Prof. Friedrich Leuschke Sr.', '481 Godfrey Mountains\nHomenickfurt, ND 21719', 'South Itzel', '+18123856804', 'uhagenes@example.net', 15034, 'cancelled', 'Exercitationem saepe minus voluptas optio ut aut expedita quae. Ipsum quidem et iure repellendus nisi animi. Dolorum hic neque et laborum occaecati quas odit. In repudiandae distinctio voluptatem.', 4, '2020-12-10 18:15:00', '2020-12-31 11:25:19'),
(101445, 'Ole Kozey', '12415 Ophelia Ports\nLake Mattietown, NC 07973', 'Monahanberg', '1-475-274-4099', 'rahul.dicki@example.net', 14361, 'cancelled', 'Culpa et dicta est illo eos. Consequatur earum et enim fuga. Explicabo consequatur natus excepturi beatae aliquid.', 4, '2020-12-21 18:15:00', '2020-12-31 11:25:19'),
(101446, 'Asa Jakubowski DDS', '84418 Glover Wall Suite 067\nLempihaven, MI 58425', 'Steuberfurt', '652-582-1950 x3155', 'altenwerth.cory@example.net', 14154, 'completed', 'Porro doloremque similique adipisci veniam. Nobis totam enim aspernatur temporibus velit. Tempore eos impedit laboriosam possimus ad cum rem labore.', 4, '2020-12-29 18:15:00', '2020-12-31 11:25:19'),
(101447, 'Gennaro Collier PhD', '929 Neil Stream\nWest Columbuston, IN 92323', 'West Abelardoton', '+1 (405) 854-8891', 'oblick@example.net', 36376, 'on hold', 'Aut nobis expedita reiciendis harum unde totam quaerat fugit. Voluptas et officiis nulla consequatur. Dolor accusamus earum quidem et.', 4, '2020-12-14 18:15:00', '2020-12-31 11:25:19'),
(101448, 'Calista Hegmann III', '2842 Justyn Spring\nFritschborough, IA 37582-6466', 'North Brendonbury', '849-850-6412 x746', 'camren41@example.org', 24368, 'cancelled', 'Explicabo ullam accusamus iste est facilis tempora. Ducimus accusantium modi nihil quis.', 3, '2020-12-12 18:15:00', '2020-12-31 11:25:20'),
(101449, 'Tyree Thiel', '4656 Schaefer Wells Apt. 465\nSofiahaven, MS 71315', 'East Marjorie', '(952) 527-8605', 'haskell.king@example.org', 27390, 'processing', 'Sit ea accusantium doloribus voluptatem dicta quod. Praesentium perspiciatis ad nesciunt nulla alias. Voluptas quasi totam amet id. Sit quas nihil at quos voluptatum.', 3, '2020-12-17 18:15:00', '2020-12-31 11:25:20'),
(101450, 'Ciara Hessel', '857 Ian Meadow\nMaddisonmouth, IA 36156-2029', 'South Anjali', '+1-462-834-7799', 'dylan90@example.com', 19519, 'processing', 'Illum est inventore iste quidem qui at magnam fuga. Dolor aut ut provident fuga. Nisi eaque voluptatem dolorem pariatur.', 1, '2020-12-20 18:15:00', '2020-12-31 11:25:20'),
(101451, 'Isaac Koelpin Jr.', '651 Emerson Crossroad Suite 661\nEast Vance, MS 45235', 'Aylinhaven', '224-675-7571', 'nwillms@example.org', 37668, 'shipping', 'Et asperiores atque et vitae. Mollitia ad quia inventore quis fugit vel. Distinctio exercitationem blanditiis libero non.', 3, '2020-12-22 18:15:00', '2020-12-31 11:25:20'),
(101452, 'Dr. Felicita Larson III', '91921 Beaulah Grove\nLake Amanifurt, IN 11874-1881', 'Kulaschester', '(240) 338-4113 x03715', 'towne.ulices@example.com', 45514, 'cancelled', 'Alias velit laudantium qui ipsum non. Est aut ea doloremque hic quis aut. Maiores qui dolores exercitationem sapiente dolore. Eum tempora qui aspernatur alias.', 4, '2020-12-14 18:15:00', '2020-12-31 11:25:20'),
(101453, 'Prof. Maye Howell II', '86131 Howell Fall\nAlejandraburgh, WA 33915-0238', 'East Royal', '485.442.4792', 'imelda51@example.com', 20845, 'completed', 'Qui voluptate non beatae accusantium autem eligendi illum. Iure pariatur laboriosam sint. Totam qui aliquid odio aspernatur harum quia.', 3, '2020-12-13 18:15:00', '2020-12-31 11:25:20'),
(101454, 'Prof. Giovanny Hettinger DDS', '285 Johnnie Pass Suite 724\nBuckridgehaven, OK 91730-9770', 'Lake Tyresebury', '1-572-633-5023', 'lehner.cyril@example.org', 43158, 'cancelled', 'Earum perspiciatis neque optio quis harum. Voluptatem illum ut nihil a totam. Mollitia quaerat unde culpa error blanditiis illum. Adipisci ipsam voluptatem et assumenda et placeat molestiae.', 3, '2020-12-12 18:15:00', '2020-12-31 11:25:20'),
(101455, 'Corine Donnelly', '715 Cathy Streets\nLake Estevanfort, OH 40177', 'West Reinhold', '368-813-9637 x1818', 'stephanie.rolfson@example.com', 24113, 'cancelled', 'Et molestias dolorum provident ut. Fugiat voluptas alias unde quis et officiis. At ex porro quam minus aliquid aut. Repellat exercitationem qui aspernatur quae eum qui.', 1, '2020-12-15 18:15:00', '2020-12-31 11:25:20'),
(101456, 'Marguerite Purdy', '773 Runolfsson Vista Suite 246\nNorth Vicky, VA 94090-5079', 'West Breana', '(309) 287-5941', 'mdaniel@example.net', 30084, 'processing', 'Et sapiente perspiciatis maiores nihil excepturi voluptas aut. Qui expedita quis debitis magni perspiciatis officiis. Cumque est ab quia quis. Nisi sit qui qui maxime.', 3, '2020-12-20 18:15:00', '2020-12-31 11:25:20'),
(101457, 'Courtney Kling MD', '5139 Jones Parks\nNorth Gavinside, MT 49656-2159', 'South Ashley', '1-663-755-9341 x717', 'runolfsson.geraldine@example.net', 35369, 'processing', 'Excepturi earum delectus et. Voluptas ab odit voluptatem sint magni. Sunt numquam voluptas odio et optio. Corrupti nam cum repellendus accusamus.', 3, '2020-12-15 18:15:00', '2020-12-31 11:25:20'),
(101458, 'Dr. Oswald Dickens MD', '906 Harvey Crest\nChamplinberg, NV 54495', 'South Janland', '937-561-7236', 'juanita98@example.org', 25951, 'processing', 'Non vitae et sunt quia ad accusamus. Quo sed alias illum ipsa qui dolor suscipit.', 3, '2020-12-14 18:15:00', '2020-12-31 11:25:20'),
(101459, 'Keyon Lynch II', '2336 Miller Expressway\nNorth Pauline, SC 22008', 'Lake Muhammad', '+19806444452', 'xhammes@example.net', 41022, 'on hold', 'Repellat rem a corrupti. Magnam necessitatibus autem consectetur reiciendis commodi dolore praesentium. Non doloremque vero iste magnam ut molestiae qui. Eaque quae ipsa qui voluptatem.', 4, '2020-12-21 18:15:00', '2020-12-31 11:25:20'),
(101460, 'Roscoe Casper', '19079 Lynch Locks Apt. 328\nWatsicaburgh, MD 87705-2917', 'Gastonborough', '+1-938-700-5450', 'jerome.pollich@example.com', 31563, 'completed', 'Et voluptas dolores dolorem voluptatem est. Facere et quasi facilis sunt. Magni saepe excepturi eos. Aut dolorem sed inventore commodi. Culpa nulla eligendi numquam rem odio.', 1, '2020-12-26 18:15:00', '2020-12-31 11:25:20'),
(101461, 'Prof. Aaron Christiansen DVM', '127 Muller Garden\nEdythside, RI 61578', 'West Candelarioburgh', '+1-908-407-2962', 'sconnelly@example.com', 34778, 'shipping', 'Aut est eligendi rem dolorem enim eaque et. Sed mollitia fugiat accusamus enim aliquam voluptatem sed. Possimus alias maiores molestias dolorum vero ut. Est aspernatur temporibus nulla rerum.', 1, '2020-12-12 18:15:00', '2020-12-31 11:25:20'),
(101462, 'Miller Corkery', '3802 Rod Villages Suite 187\nEast Maximilianberg, VA 74497', 'Charityfurt', '1-860-696-9914 x3296', 'molly.mitchell@example.org', 11816, 'completed', 'Aut expedita aut facilis minus voluptas itaque. Ipsam praesentium id dolor deserunt soluta. Officia harum molestiae repudiandae id dolor.', 1, '2020-12-20 18:15:00', '2020-12-31 11:25:20'),
(101463, 'Christiana Robel', '515 Anderson Dale Apt. 269\nFurmanside, TX 73306', 'New Eleonore', '+1-965-635-3409', 'pmarks@example.net', 27161, 'shipping', 'Neque non harum nobis repellat. Aut omnis ea sequi. Odio culpa quasi et nesciunt dolores numquam est.', 3, '2020-12-11 18:15:00', '2020-12-31 11:25:20'),
(101464, 'Trevion Huel', '69248 Auer Lane\nKadetown, AK 25918', 'Toychester', '(251) 891-7004', 'robbie.heidenreich@example.net', 38379, 'cancelled', 'Voluptas sunt quam dicta minus. Suscipit quo fugiat nam. Sit maxime voluptas labore ipsam.', 3, '2020-12-27 18:15:00', '2020-12-31 11:25:20'),
(101465, 'Prof. Brielle Murray Jr.', '4307 Pfannerstill Mountain Apt. 816\nNew Kendrick, MA 08492', 'Irvingville', '612-487-7262', 'parker44@example.net', 41127, 'processing', 'Qui non quis ullam quidem. Possimus totam sunt tempora et. Omnis qui et et officiis occaecati.', 3, '2020-12-12 18:15:00', '2020-12-31 11:25:20'),
(101466, 'Joan Boyer', '9997 Tyrel Station Apt. 934\nHuelview, OR 98655-8195', 'New Ashlynnport', '909-688-1091 x81004', 'deion.bauch@example.org', 38342, 'shipping', 'A rerum optio consequatur vel non laborum hic. Eius earum officiis ut itaque iusto. Quasi debitis sint sit laudantium. Molestias ea voluptatem id et sed itaque quos.', 3, '2020-12-28 18:15:00', '2020-12-31 11:25:20'),
(101467, 'Mavis Waters', '43467 Brandy Landing\nWest Zola, RI 17954-9386', 'Kemmerbury', '+1-456-607-1125', 'mack.streich@example.org', 22911, 'processing', 'Et dolor optio consequatur nihil ipsa possimus. Molestiae dolorem laboriosam dolorem. Et omnis vel eius.', 3, '2020-12-14 18:15:00', '2020-12-31 11:25:20'),
(101468, 'Jayme Bins', '3887 Greenfelder Glen\nNorth Cloyd, DE 72264', 'Port Dinahaven', '336.713.6403', 'mziemann@example.org', 37597, 'completed', 'Iure fugit ad est voluptate. Voluptas minima totam voluptates excepturi dolores reprehenderit. Perspiciatis ea laborum consequuntur consequatur necessitatibus. Vel est ea incidunt.', 3, '2020-12-29 18:15:00', '2020-12-31 11:25:20'),
(101469, 'Mrs. Clarabelle Murphy PhD', '18734 Batz Pike\nThaliafort, CA 08484-8596', 'Guadalupehaven', '(671) 439-8471 x79211', 'marcelino.kutch@example.org', 19118, 'processing', 'Deleniti aut saepe est at. Ea ut qui quis. Labore quaerat sunt iusto consequatur.', 3, '2020-12-25 18:15:00', '2020-12-31 11:25:20'),
(101470, 'Prof. Gino Krajcik', '49531 Bradtke Fort\nEast Madalyn, WV 97134', 'Port Zellabury', '1-504-550-0437 x075', 'frutherford@example.org', 11121, 'processing', 'Reiciendis dolor libero tempora a. Placeat ducimus sed eveniet ea. Vitae totam incidunt sed corporis nihil adipisci.', 4, '2020-12-29 18:15:00', '2020-12-31 11:25:20'),
(101471, 'Cesar Brown', '5141 Koepp Neck Apt. 815\nLake Odie, TX 21574', 'North Cooper', '828-567-5970', 'audreanne.heller@example.net', 32667, 'completed', 'Autem a nisi veniam provident nobis. Cumque ut et a nihil eveniet asperiores. Necessitatibus ut et ratione alias itaque reiciendis.', 3, '2020-12-13 18:15:00', '2020-12-31 11:25:20'),
(101472, 'Phoebe Bergnaum', '3612 Walter Rue\nWest Marianne, CT 22353-1453', 'Port Alaynastad', '867-845-6744 x04562', 'beverly.bogan@example.com', 11734, 'completed', 'Qui asperiores porro recusandae. Consequatur perspiciatis rerum est qui illum necessitatibus eveniet. Et autem hic soluta quaerat vel. Perferendis dolor commodi numquam possimus qui.', 4, '2020-12-27 18:15:00', '2020-12-31 11:25:20'),
(101473, 'Kaleigh Ziemann', '474 Monahan Walks\nHilpertborough, MA 37168', 'Port Providenci', '(813) 292-9886', 'keagan.walker@example.com', 20171, 'processing', 'Cumque reprehenderit et et nisi aut ad. Qui soluta et est debitis officia voluptates quia. Non placeat quia quaerat repellat aut.', 3, '2020-12-26 18:15:00', '2020-12-31 11:25:21'),
(101474, 'Kyra Johnston', '96822 Fleta Groves\nEast Willis, SC 14599', 'Port Trenton', '987-693-2139 x3514', 'ostoltenberg@example.org', 13122, 'processing', 'Voluptate autem autem consequatur deserunt ut est pariatur. Quam aut qui hic. Dolorem consequatur similique vel ex assumenda ducimus ratione vel. Ut a minima vel aut est quaerat.', 1, '2020-12-28 18:15:00', '2020-12-31 11:25:21'),
(101475, 'Tessie Pfeffer DDS', '5345 Judge Place\nPort Chloeburgh, MS 77120-9200', 'Hoegermouth', '+1-245-900-8266', 'newton.douglas@example.com', 13277, 'shipping', 'Perspiciatis ad dolorem id sit labore veniam blanditiis. Qui fugiat odit iure asperiores optio molestiae.', 1, '2020-12-16 18:15:00', '2020-12-31 11:25:21'),
(101476, 'Bennie Kertzmann', '643 Mitchell Oval Suite 846\nEast Florinemouth, MO 14454-6153', 'East Okeyshire', '558-531-0351', 'medhurst.joshua@example.net', 48749, 'completed', 'Quidem unde asperiores impedit consequatur porro omnis sed. Nihil aliquam in soluta et sapiente et nisi consequatur. Laborum magni sunt suscipit velit qui. Mollitia quia dolore sed ut qui.', 3, '2020-12-17 18:15:00', '2020-12-31 11:25:21'),
(101477, 'Dr. Francisca West', '591 Karlie Center\nKyletown, NM 42844', 'East Keshawnville', '498-909-4596 x32710', 'emerald.satterfield@example.net', 26569, 'on hold', 'Earum enim quae consequatur at dolor quo. Dolorum perspiciatis deserunt et quia occaecati sed eaque. Excepturi porro inventore doloribus modi soluta.', 3, '2020-12-19 18:15:00', '2020-12-31 11:25:21'),
(101478, 'Jerrell Kihn', '89561 Farrell Rest Suite 044\nBridgetmouth, OR 12342', 'West Pierceville', '984.715.8465', 'armando.zemlak@example.com', 29723, 'completed', 'Rerum necessitatibus alias ut vero deserunt. Distinctio voluptas dolor fugit hic. Ad ab est delectus est cumque sed. Modi reprehenderit numquam facilis sunt. Nihil esse placeat quasi ullam.', 1, '2020-12-28 18:15:00', '2020-12-31 11:25:21'),
(101479, 'Mr. Kobe Mayert I', '266 Karson Grove\nNorth Eldridge, ND 94009', 'North Rosetta', '708.303.5759', 'jakubowski.kameron@example.org', 46457, 'shipping', 'Ipsam sint odit modi repellat placeat sint ea aut. Quae nisi dolor ullam et autem impedit quis. Magni quibusdam enim sint earum blanditiis rerum occaecati.', 4, '2020-12-17 18:15:00', '2020-12-31 11:25:21'),
(101480, 'Eulalia Bogan', '411 Morissette Haven Suite 442\nSouth Josue, OH 92008', 'South Jaclynborough', '1-334-313-1362 x047', 'alvera13@example.org', 36033, 'completed', 'Consectetur qui earum aut nisi illo. Unde et voluptate cupiditate iusto facilis rerum eos. Eos dicta similique animi repudiandae odit.', 3, '2020-12-10 18:15:00', '2020-12-31 11:25:21'),
(101481, 'Clay Beer', '43398 Bradtke Run\nMcCulloughbury, IL 96026-8812', 'Lake Marjolainefort', '694.823.1577 x8067', 'whitney43@example.net', 19439, 'cancelled', 'Corrupti amet et magni ipsum in. Est dolores commodi laboriosam voluptatem. Minus assumenda vitae quo harum consequatur optio.', 4, '2020-12-26 18:15:00', '2020-12-31 11:25:21'),
(101482, 'Elias O\'Reilly', '93528 Stefanie Route Suite 025\nBeahanburgh, NY 22858-3717', 'Desireehaven', '+16409600650', 'anna.krajcik@example.net', 14543, 'on hold', 'Modi esse facilis consequuntur. Error dignissimos aut possimus aliquam eligendi. Rerum aut in perferendis. Sint autem saepe eligendi.', 3, '2020-12-17 18:15:00', '2020-12-31 11:25:21'),
(101483, 'Jacklyn Willms', '7951 Wunsch Vista\nEast Abnermouth, IA 33003', 'Kassandraview', '368-954-3742 x59436', 'madilyn25@example.org', 16404, 'processing', 'Modi hic omnis molestiae et dolorem. Rem accusantium rerum delectus quia blanditiis quia possimus. Natus quia laboriosam debitis fugit labore. Autem sed voluptatibus et rerum blanditiis autem.', 4, '2020-12-13 18:15:00', '2020-12-31 11:25:21'),
(101484, 'Dr. Andreanne Stokes Jr.', '477 Labadie Orchard\nLake Lauryntown, WY 87304-2992', 'Lake Wilbert', '1-352-246-9293', 'gbins@example.com', 27079, 'on hold', 'Reiciendis quam ut beatae beatae iste eaque quis. Voluptas et odit est molestias voluptatem minus. Maxime voluptate consequatur itaque recusandae corporis.', 4, '2020-12-27 18:15:00', '2020-12-31 11:25:21'),
(101485, 'Tanya Bergstrom', '4186 Rhoda Bridge Suite 926\nNorth Orphafort, NC 57597-2897', 'Goldnerstad', '658-570-1847 x9964', 'rice.kelsi@example.org', 34230, 'cancelled', 'Voluptatem non nam rerum consectetur. Aspernatur at placeat quasi ad ut voluptatem. Iure beatae odit corrupti cupiditate ut sequi beatae. Veniam temporibus maiores quis corporis.', 4, '2020-12-12 18:15:00', '2020-12-31 11:25:21'),
(101486, 'Bruce Dietrich', '9125 Sabryna Mall\nSouth Jacinthefurt, NC 28384-9707', 'Lake Daytonville', '268.947.7535 x014', 'glover.giovanni@example.org', 31416, 'cancelled', 'Ut eos quisquam odio nostrum sed deserunt. Quia incidunt repudiandae voluptas illum beatae. Vel quis delectus quasi in et reprehenderit aut. Et deserunt ratione unde nisi.', 1, '2020-12-13 18:15:00', '2020-12-31 11:25:21'),
(101487, 'Kian Boyer DDS', '41614 Satterfield Islands Apt. 050\nDaphnetown, VT 47227-0741', 'New Akeemborough', '473.979.7607 x4565', 'ellsworth.mraz@example.org', 14108, 'processing', 'Modi aut autem eius quisquam. Natus ut debitis possimus tenetur. Iste ut reprehenderit ut. Molestias nam dolorem totam quo eum optio et.', 4, '2020-12-28 18:15:00', '2020-12-31 11:25:22'),
(101488, 'Prof. Hans Watsica', '9886 Bella Streets\nNorth Isombury, TN 29756-4188', 'Port Nadia', '232-313-5833 x2674', 'ukuhn@example.org', 27164, 'processing', 'Iste vero aliquid voluptatem suscipit. Animi et quia et nihil. Fuga explicabo neque illum recusandae culpa nemo sit.', 1, '2020-12-25 18:15:00', '2020-12-31 11:25:22'),
(101489, 'Mr. Orland Watsica Jr.', '29931 Davonte Pines\nWest Maddisonside, MA 62773-1416', 'Shayleeview', '(260) 339-7783 x932', 'yhayes@example.net', 44326, 'cancelled', 'Neque et ducimus quaerat provident totam. Minima quidem ea asperiores sequi modi. Ullam vel minima omnis omnis exercitationem cum ab. Dolor natus nihil iure soluta libero.', 3, '2020-12-15 18:15:00', '2020-12-31 11:25:22'),
(101490, 'Anais Bruen', '789 Cronin Fields Suite 434\nSteuberstad, HI 92724-8793', 'Terryshire', '1-376-512-9126', 'michaela.berge@example.org', 45849, 'cancelled', 'Repudiandae a reiciendis tenetur labore. Nobis aut eveniet atque maiores sunt dolor. Ex omnis sit qui debitis dolorem recusandae consectetur aut.', 4, '2020-12-12 18:15:00', '2020-12-31 11:25:22'),
(101491, 'Stacey Johnson', '423 Powlowski Crossing\nJanellemouth, MD 70375', 'Hubertberg', '1-251-570-4170', 'billy.wolf@example.net', 46254, 'on hold', 'Commodi sit sit odit nesciunt quis voluptas. Tempora ut corrupti laboriosam a id fugiat unde eum. Qui dolorum nesciunt maiores eligendi necessitatibus. Nihil quia sunt est ea provident.', 4, '2020-12-27 18:15:00', '2020-12-31 11:25:22'),
(101492, 'Halle King', '5243 Alta Mountain Suite 583\nKayleebury, MN 87428', 'Monserrathaven', '+1.752.869.3600', 'delpha.farrell@example.com', 16983, 'completed', 'Omnis sit repellendus eaque possimus quo sit est minus. Aut est ea adipisci est. Omnis quae ut sit sint possimus sed sed. Possimus quo laborum ut inventore autem animi.', 1, '2020-12-16 18:15:00', '2020-12-31 11:25:22'),
(101493, 'Prof. Beau Bartoletti', '3361 Kristoffer Manor\nPort Carolyne, AZ 42941-2097', 'South Jesushaven', '973.255.2586 x527', 'irving03@example.org', 40868, 'shipping', 'Autem dolores sed consequatur itaque doloribus. Non maiores et saepe veniam. Incidunt omnis suscipit atque et officia sed.', 1, '2020-12-13 18:15:00', '2020-12-31 11:25:22'),
(101494, 'Sincere McLaughlin', '57701 Susan Trail Apt. 187\nIsmaelburgh, UT 37323-8661', 'Brentshire', '896.729.8849', 'loraine.boyer@example.net', 21013, 'processing', 'Totam rerum corrupti aspernatur optio quae. Eius rem molestias eos officia. Sed eveniet consequuntur cupiditate velit architecto. Et sit dolorum amet quo enim odit et fugiat.', 4, '2020-12-15 18:15:00', '2020-12-31 11:25:22'),
(101495, 'Dax Feest MD', '4082 Carlotta Haven Apt. 905\nLake Ladariusside, CO 79255', 'New Loyland', '447-968-0087 x5567', 'blanche.mann@example.net', 22047, 'on hold', 'Cupiditate rem rerum quis non quo. Omnis assumenda illum magnam consequatur consequatur autem.', 3, '2020-12-21 18:15:00', '2020-12-31 11:25:22'),
(101496, 'Corrine Hessel', '1199 Deckow Stravenue Suite 738\nGriffinberg, IL 79177', 'Johnsfurt', '1-957-245-8859 x73816', 'laurie93@example.com', 38052, 'shipping', 'Ducimus odit voluptas sunt incidunt. Tenetur aspernatur tenetur ut a sit possimus.', 3, '2020-12-27 18:15:00', '2020-12-31 11:25:22'),
(101497, 'Danial Nicolas', '346 Anderson Parkways Suite 118\nSouth Bradford, MN 82368-6346', 'New Norene', '1-632-444-0322 x17998', 'bennie63@example.com', 47637, 'cancelled', 'Voluptates odio hic excepturi est velit. Aliquid sunt et vel distinctio eos. Alias quia magnam laboriosam illum sit. Illum dolores sed omnis et quo et. Voluptates odio minima at eos facilis sit.', 1, '2020-12-15 18:15:00', '2020-12-31 11:25:22'),
(101498, 'Antonina Leffler', '1146 Sofia Inlet Suite 448\nNorth Shaunhaven, KS 81206', 'Port Omari', '(395) 447-3104 x3818', 'sonny42@example.net', 45142, 'shipping', 'Ut eum velit et nisi. Quia ut minus veniam. Officiis laudantium quidem sed omnis. Voluptas sunt non eos quo rerum.', 1, '2020-12-21 18:15:00', '2020-12-31 11:25:22'),
(101499, 'Dr. Ivah Kertzmann IV', '94923 Rohan Mission Suite 293\nClarkborough, SC 76305-7896', 'Keelington', '858-914-5415 x80161', 'bonita.purdy@example.com', 20462, 'processing', 'Voluptatem et magni neque laborum. Delectus placeat accusamus excepturi est modi itaque. Eveniet sint totam totam consectetur distinctio optio.', 1, '2020-12-18 18:15:00', '2020-12-31 11:25:22'),
(101500, 'Gay Fisher', '523 Coleman Junctions Suite 861\nKlockoton, OH 51490-0000', 'Port Annetta', '520-969-2768 x2480', 'gus17@example.net', 24584, 'cancelled', 'Voluptatibus illo quia ex qui nobis. A iusto aperiam iste minima. Deleniti nulla et sint provident sit accusantium. Aut nihil eum culpa eos quia error eum.', 3, '2020-12-28 18:15:00', '2020-12-31 11:25:22'),
(101501, 'Annabelle Sawayn III', '164 Wilbert Lodge Suite 937\nMaritzastad, OK 45506-3260', 'Caleighmouth', '(248) 534-9166', 'mclaughlin.terry@example.net', 42357, 'processing', 'Facere fuga saepe rerum quo debitis dolores in. Aut alias eius occaecati sint ipsa a. Tempore at minus consectetur in iste deserunt corporis. Iste amet repellat quas.', 4, '2020-12-28 18:15:00', '2020-12-31 11:25:22'),
(101502, 'Kristopher Wintheiser', '3879 Arnoldo Stream Suite 988\nEmardhaven, NM 39486', 'Kuhntown', '823.941.2652 x615', 'akeem32@example.net', 43009, 'on hold', 'Earum vero exercitationem excepturi illo vel voluptatum non. Suscipit numquam aliquid voluptatem aliquam. Natus blanditiis deleniti sed et minus non.', 1, '2020-12-13 18:15:00', '2020-12-31 11:25:22'),
(101503, 'Linda Harber', '85467 Allan Mills Apt. 936\nLuechester, IN 75197', 'Ornview', '(615) 403-9047 x37723', 'dovie.mcclure@example.com', 19622, 'on hold', 'Repudiandae voluptatem rerum maiores minima temporibus adipisci. Qui aut est exercitationem molestiae. Rerum quia amet deserunt. Rerum dolorem inventore et ipsa quis alias voluptatum.', 4, '2020-12-25 18:15:00', '2020-12-31 11:25:22'),
(101504, 'Dr. Ricky Kris', '3059 Hal Islands Suite 613\nFunkfort, NM 53585-9237', 'Lake Meagantown', '201.538.2396 x9446', 'jayme.langworth@example.org', 14858, 'processing', 'Voluptatibus odio accusamus repellat repellat vel. Iusto harum ad aperiam in possimus numquam similique. Eligendi non nostrum recusandae culpa ut sequi. Aut dolores dolorem aut doloremque distinctio.', 3, '2020-12-20 18:15:00', '2020-12-31 11:25:22'),
(101505, 'Lucinda Daugherty', '35944 Alexandre Ville\nWest Jaylin, VA 09785', 'Mantemouth', '657-215-6167 x769', 'jlemke@example.net', 46216, 'cancelled', 'Laudantium aut nam est asperiores autem veritatis. Minima omnis est perferendis qui ut. Officia natus sit pariatur non. Omnis voluptates sit aut consequatur eligendi veniam.', 3, '2020-12-13 18:15:00', '2020-12-31 11:25:22'),
(101506, 'Mr. Hipolito Oberbrunner II', '355 Christiansen Brooks Apt. 443\nBradlyburgh, ME 69502', 'Vadastad', '+1-446-853-9473', 'auer.elissa@example.org', 48194, 'cancelled', 'Eveniet at consequatur esse sed culpa autem ipsum. Qui ut cumque dolores ratione.', 4, '2020-12-20 18:15:00', '2020-12-31 11:25:22'),
(101507, 'Lois Howe III', '26861 Smith Rue Apt. 824\nVidafurt, SD 51252', 'Kohlerville', '+1.665.956.5507', 'mustafa.oreilly@example.com', 24771, 'shipping', 'Sunt ut aperiam fugiat hic eius in. Deleniti accusantium inventore hic nobis quo assumenda. Expedita ut molestiae facere quo.', 1, '2020-12-20 18:15:00', '2020-12-31 11:25:23'),
(101508, 'Erich Ondricka', '489 Emilie Stream Apt. 838\nLorachester, NV 68868', 'South Karellefurt', '1-203-679-1303', 'fleta23@example.org', 44884, 'processing', 'Quia magni aperiam facilis molestiae autem et. Rerum rerum rerum dolores. Quia laudantium velit qui sunt optio. Dolores delectus eius distinctio sequi sed saepe.', 1, '2020-12-20 18:15:00', '2020-12-31 11:25:23'),
(101509, 'Delmer Blick', '375 Collins Garden\nLake Misael, WI 05809', 'Lucyland', '(596) 551-9540 x63896', 'rrunte@example.net', 22956, 'cancelled', 'Ab reiciendis in dolorem qui ex esse est. Fugiat possimus recusandae mollitia. Provident nihil officiis cum ut eveniet.', 4, '2020-12-29 18:15:00', '2020-12-31 11:25:23'),
(101510, 'Aaron Nicolas', '75548 Osborne Fords\nEast Darionview, NC 92517', 'South Savanna', '1-208-631-5921 x87681', 'eichmann.nona@example.net', 22099, 'cancelled', 'Eveniet et sequi nemo maiores blanditiis. Expedita eaque dicta et aliquid. Nihil eos non enim et.', 1, '2020-12-20 18:15:00', '2020-12-31 11:25:23'),
(101511, 'Karlee Gerlach', '95046 Roman Fork Suite 872\nParkerside, CO 41183', 'Port Kassandra', '510-761-7518 x501', 'alexis.sipes@example.org', 30721, 'completed', 'Autem est placeat officia et qui rerum. Sed ut cum distinctio corrupti debitis sunt repellat recusandae. Provident aut necessitatibus sed architecto architecto omnis.', 1, '2020-12-25 18:15:00', '2020-12-31 11:25:23'),
(101512, 'Mrs. Carlie Rogahn PhD', '6012 Cristopher View\nBrownview, AR 29740', 'Port Alycia', '779.813.2194', 'thiel.tomasa@example.net', 12198, 'processing', 'Soluta et ex voluptates voluptate cumque. Inventore iusto sed eum impedit aut veritatis reiciendis.', 1, '2020-12-10 18:15:00', '2020-12-31 11:25:23'),
(101513, 'Kirk Rodriguez', '2626 Fisher Via Apt. 895\nNorth Marge, AL 17375', 'North Tillman', '509-568-1303', 'vincent46@example.net', 43325, 'shipping', 'Explicabo aut vel dolor sed laborum et ut. Voluptatum illo minima libero et consequatur. Occaecati vero voluptatem velit non vitae.', 3, '2020-12-24 18:15:00', '2020-12-31 11:25:23'),
(101514, 'Antonette Kovacek', '208 Sanford Throughway Suite 166\nNorth Ford, MN 91411-2693', 'East Eladio', '+1 (775) 452-0663', 'frederick28@example.net', 42161, 'completed', 'Voluptatum debitis quae et omnis. Libero accusamus unde maiores quasi expedita porro itaque. Iusto voluptatum cupiditate qui architecto vero neque. Laudantium quae accusantium earum quaerat sed iure.', 1, '2020-12-14 18:15:00', '2020-12-31 11:25:23'),
(101515, 'mukesh rai', 'opposite site of funhouse', 'Sanothimi, Bhaktapur', '98078129839', 'mukeshrai541@gmail.com', 34, 'cancelled', '[{\"id\":\"17\",\"slug\":\"chinese-water-pump-1\",\"sku\":\"12\",\"product\":\"chinese water pump\",\"price\":0,\"quantity\":1},{\"id\":\"366\",\"slug\":\"quam\",\"sku\":\"1473\",\"product\":\"electric pump\",\"price\":5034,\"quantity\":1},{\"id\":\"332\",\"slug\":\"aperiam\",\"sku\":\"1539\",\"product\":\"electric pump\",\"price\":23153,\"quantity\":1}]', 3, '2021-01-22 19:03:37', '2021-09-05 21:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` int(11) DEFAULT NULL,
  `sale_price` int(11) DEFAULT 0,
  `features` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `product_categories_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `title`, `slug`, `regular_price`, `sale_price`, `features`, `description`, `stock`, `featured_image`, `product_image`, `order`, `status`, `product_categories_id`, `created_at`, `updated_at`) VALUES
(1, 'wp12', 'Water pump', 'water-pump-1', 8000, 7800, '<p>Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Aliquam erat volutpat. Sed libero. Nam adipiscing.</p>\r\n\r\n<p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Praesent blandit laoreet nibh. Etiam vitae tortor. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Vestibulum ullamcorper mauris at ligula.</p>\r\n\r\n<p>Fusce convallis metus id felis luctus adipiscing. Duis lobortis massa imperdiet quam. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Cras dapibus. Quisque rutrum.</p>', '<p>Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Aliquam erat volutpat. Sed libero. Nam adipiscing.</p>\r\n\r\n<p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Praesent blandit laoreet nibh. Etiam vitae tortor. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Vestibulum ullamcorper mauris at ligula.</p>\r\n\r\n<p>Fusce convallis metus id felis luctus adipiscing. Duis lobortis massa imperdiet quam. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Cras dapibus. Quisque rutrum.</p>', 0, '1600670887-pro6.png', '[\"1600668895-cat2.jpeg\",\"1600668895-cat2.jpg\",\"1600668895-pro13.png\"]', 2, 1, 13, '2020-09-20 01:54:09', '2020-11-10 00:21:11'),
(2, NULL, 'Nirman Tools', 'nirman-tools-1', 10000, 9000, '<p>Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Aliquam erat volutpat. Sed libero. Nam adipiscing.</p>\r\n\r\n<p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Praesent blandit laoreet nibh. Etiam vitae tortor. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Vestibulum ullamcorper mauris at ligula.</p>\r\n\r\n<p>Fusce convallis metus id felis luctus adipiscing. Duis lobortis massa imperdiet quam. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Cras dapibus. Quisque rutrum.</p>', '<p>Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Aliquam erat volutpat. Sed libero. Nam adipiscing.</p>\r\n\r\n<p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Praesent blandit laoreet nibh. Etiam vitae tortor. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Vestibulum ullamcorper mauris at ligula.</p>\r\n\r\n<p>Fusce convallis metus id felis luctus adipiscing. Duis lobortis massa imperdiet quam. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Cras dapibus. Quisque rutrum.</p>', 5, '1600670994-pro15.png', '[\"1600670994-pro15.png\",\"1600670994-pro16.png\"]', 3, 1, 15, '2020-09-20 01:54:26', '2020-09-21 01:35:03'),
(7, NULL, '5mm power drill', '5mm-power-drill', 15000, 14000, '<p>Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Aliquam erat volutpat. Sed libero. Nam adipiscing.</p>\r\n\r\n<p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Praesent blandit laoreet nibh. Etiam vitae tortor. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Vestibulum ullamcorper mauris at ligula.</p>\r\n\r\n<p>Fusce convallis metus id felis luctus adipiscing. Duis lobortis massa imperdiet quam. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Cras dapibus. Quisque rutrum.</p>', '<p>Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Aliquam erat volutpat. Sed libero. Nam adipiscing.</p>\r\n\r\n<p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Praesent blandit laoreet nibh. Etiam vitae tortor. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Vestibulum ullamcorper mauris at ligula.</p>\r\n\r\n<p>Fusce convallis metus id felis luctus adipiscing. Duis lobortis massa imperdiet quam. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Cras dapibus. Quisque rutrum.</p>', 4, '1600671161-pro4.png', '[\"1600671161-pro3.png\",\"1600671161-pro4.png\"]', 4, 1, 15, '2020-09-20 02:06:42', '2020-11-10 05:25:10'),
(8, NULL, 'Saw', 'saw-1', 4000, 3900, '<p>Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Donec sodales sagittis magna. Mauris sollicitudin fermentum libero. Vestibulum eu odio. Phasellus gravida semper nisi.</p>\r\n\r\n<ul>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n</ul>', '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>\r\n\r\n<ul>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leoProin pretium leoProin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n</ul>', 4, '1600671288-pro25.png', '[\"1600671288-pro25.png\",\"1600671288-pro26.png\",\"1600671288-pro27.png\",\"1600671288-pro28.png\"]', 8, 1, 15, '2020-09-20 02:07:56', '2020-09-21 01:34:17'),
(9, NULL, 'Grass cutting Machine', 'grass-cutting-machine', 1050, 1000, '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>\r\n\r\n<ul>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n</ul>', '<p>Proin pretium leoProin pretium leoProin pretium leo</p>\r\n\r\n<ul>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n</ul>', 3, '1600671379-pro8.png', '[\"1600671379-pro17.png\",\"1600671379-pro18.png\"]', 9, 1, 18, '2020-09-20 02:09:20', '2020-09-21 01:11:19'),
(11, NULL, 'Loha Cutter', 'loha-cutter-1', 18000, 17000, '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>\r\n\r\n<ul>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n</ul>', '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>', 0, '1600671430-pro8.png', '[\"1600671430-pro10.png\",\"1600671430-pro8.png\",\"1600671430-pro9.png\"]', 11, 1, 18, '2020-09-20 04:05:11', '2020-11-13 02:56:11'),
(12, NULL, 'Cleaner', 'cleaner', 8000, 7500, '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>\r\n\r\n<ul>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n</ul>', '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>', 12, '1600671494-pro21.png', '[\"1600671494-pro21.png\",\"1600671494-pro22.png\",\"1600598612-ban2.jpg\",\"1600598612-banner3.jpg\",\"1600598612-carosel 1.jpg\"]', 12, 1, 17, '2020-09-20 04:58:32', '2020-09-21 01:13:14'),
(16, 'cd33', 'Cordless Drill332222', 'cordless-drill332222', 8000, NULL, '<p>The Draper Storm Force cordless screwdriver kit has a compact, lightweight and ergonomic design with a soft grip handle for added comfort.</p>\r\n\r\n<ul>\r\n	<li>3.6V</li>\r\n	<li>Max torque: 3.5Nm</li>\r\n	<li>230V AC adaptor charger (3-5 hours)</li>\r\n	<li>Spindle recess: 1/4&#39;&#39; hexagon</li>\r\n</ul>', '<p>The Draper Storm Force cordless screwdriver kit has a compact, lightweight and ergonomic design with a soft grip handle for added comfort.</p>\r\n\r\n<ul>\r\n	<li>3.6V</li>\r\n	<li>Max torque: 3.5Nm</li>\r\n	<li>230V AC adaptor charger (3-5 hours)</li>\r\n	<li>Spindle recess: 1/4&#39;&#39; hexagon</li>\r\n</ul>', 2, '1600669770-pro3.png', '[\"1600663291-pro1.png\",\"1600663291-pro3.png\",\"1600663291-pro4.png\"]', 1, 1, 14, '2020-09-20 22:56:31', '2020-12-22 01:40:17'),
(17, '12', 'chinese water pump', 'chinese-water-pump-1', 15000, 0, NULL, NULL, 1, '1609667364-cat2.jpeg', '[\"1609667364-cat2.jpg\",\"1609667364-pro13.png\",\"1609667364-pro14.png\"]', 16, 1, 13, '2020-09-21 00:21:48', '2021-01-22 19:03:37'),
(18, NULL, 'Indian Water Pump', 'indian-water-pump', 8000, 7850, '<p>Nunc nec neque. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Duis vel nibh at velit scelerisque suscipit. Etiam sit amet orci eget eros faucibus tincidunt.</p>\r\n\r\n<p>Nulla porta dolor. Curabitur suscipit suscipit tellus. In ac felis quis tortor malesuada pretium. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>', '<p>Nunc nec neque. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Duis vel nibh at velit scelerisque suscipit. Etiam sit amet orci eget eros faucibus tincidunt.</p>\r\n\r\n<p>Nulla porta dolor. Curabitur suscipit suscipit tellus. In ac felis quis tortor malesuada pretium. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>', 10, '1600668895-cat2.jpg', '[\"1600668895-cat2.jpeg\",\"1600668895-cat2.jpg\",\"1600668895-pro13.png\"]', 17, 1, 13, '2020-09-21 00:29:55', '2020-11-13 02:56:11'),
(19, NULL, 'Hammer', 'hammer', 1200, 1100, '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>\r\n\r\n<ul>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n</ul>', '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>', 24, '1600671596-pro23.png', '[\"1600671596-ab (1).png\",\"1600671596-bangra2.png\",\"1600671596-pro24.png\"]', 18, 1, 17, '2020-09-21 01:14:56', '2020-12-20 02:15:04'),
(20, NULL, 'Water Pressure', 'water-pressure', 15000, 12000, '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>\r\n\r\n<ul>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leoProin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n	<li>Proin pretium leo</li>\r\n</ul>', '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>\r\n\r\n<p>&nbsp;</p>', 0, '1600671666-pro11.png', '[\"1600671666-pro12.png\",\"1600671666-pro21.png\"]', 19, 1, 16, '2020-09-21 01:16:06', '2020-11-02 06:19:14'),
(21, NULL, 'Kits', 'kits-1', 8000, 7500, '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>\r\n\r\n<ul>\r\n	<li>Proin pretium leoProin pretium leoProin pretium leoProin pretium leo</li>\r\n	<li>Proin pretium leoProin pretium leoProin pretium leoProin pretium leo</li>\r\n	<li>vProin pretium leoProin pretium leoProin pretium leoProin pretium leo</li>\r\n</ul>', '<p>Proin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leoProin pretium leo</p>', 0, '1600671720-pro19.png', '[\"1600671720-pro20.png\"]', 20, 1, 17, '2020-09-21 01:17:00', '2020-11-02 06:18:29'),
(22, NULL, 'tool set', 'tool-set', 7000, 6999, '<p>Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Phasellus a est. Quisque id odio. In auctor lobortis lacus. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit.</p>\r\n\r\n<p>Pellentesque auctor neque nec urna. Nullam vel sem. Vestibulum volutpat pretium libero. Fusce pharetra convallis urna. Suspendisse non nisl sit amet velit hendrerit rutrum.</p>', '<p>Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Phasellus a est. Quisque id odio. In auctor lobortis lacus. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit.</p>\r\n\r\n<p>Pellentesque auctor neque nec urna. Nullam vel sem. Vestibulum volutpat pretium libero. Fusce pharetra convallis urna. Suspendisse non nisl sit amet velit hendrerit rutrum.</p>', 0, '1600673793-bangra1.webp', '[\"1600671666-pro12.png\",\"1600671720-pro19.png\",\"1600671720-pro20.png\"]', 21, 1, 17, '2020-09-21 01:49:53', '2020-11-02 06:17:44'),
(318, '1562', 'normal pump', 'nobis', 2655, 42823, 'Ea tempore excepturi quia deleniti corporis. Sunt in eaque quos maxime omnis. Repellendus ex suscipit est placeat ad suscipit quod.', 'Ipsa aut eaque minima culpa. Doloribus voluptatem ut et sapiente ea sit pariatur. Voluptatibus illum cum commodi vel ea assumenda nemo. Odio cumque quia quos.', 46, '1600668895-cat2.jpg', NULL, 54, 1, 15, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(319, '1719', 'pump', 'suscipit', 136444, 103715, 'Et molestiae expedita omnis debitis non aperiam enim rerum. Est molestiae placeat nihil consequuntur nam doloremque. Nihil voluptatibus rerum omnis iure accusantium dolore corporis.', 'Quasi ad ducimus sed. Iusto eos rerum ducimus fugit sed dolorem nesciunt. Dolor molestiae sit magnam perferendis sed sit eius modi. Iure et molestiae numquam quae consequuntur quis.', 49, '1600668895-cat2.jpg', NULL, 19, 1, 13, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(320, '1953', 'normal pump', 'non', 91776, 50017, 'Aperiam aut qui quas explicabo. Doloribus sit qui omnis explicabo. Molestiae qui minima fugit tenetur.', 'Eum nisi commodi totam sed earum nemo. Voluptatibus alias et qui reprehenderit. Fugit et ut asperiores sunt nesciunt corrupti. Vitae voluptatem quam omnis illum neque sed expedita.', 26, '1600668895-cat2.jpg', NULL, 44, 1, 18, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(321, '1497', 'pump', 'voluptatem', 64352, 138554, 'Odit ut illum error suscipit omnis animi non debitis. Veniam repellendus qui illum et veniam quidem ea. Accusantium enim at laboriosam quia tenetur. Dolor sunt repellendus sit cum animi.', 'Eum non sed fuga neque non eligendi enim. Sit praesentium atque facere nostrum. Ducimus ipsum autem est sit et.', 21, '1600668895-pro13.png', NULL, 61, 1, 17, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(322, '1454', 'electric pump', 'ipsa', 59345, 139180, 'Esse et aspernatur modi ut ut et. Iure et maxime ratione velit consequatur quae. Nam harum porro aut aut.', 'Ipsam velit illo cum rerum. Consequuntur aut fuga asperiores in rem ea fugit exercitationem. Voluptate adipisci porro est fuga ex earum. Sit suscipit ipsam commodi eaque non.', 31, '1600668895-cat2.jpeg', NULL, 23, 1, 16, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(323, '1816', 'water pump', 'ut', 41693, 44848, 'Vel placeat culpa id porro occaecati. Voluptatem aliquid asperiores assumenda accusantium ducimus est magnam.', 'Iusto aperiam rerum iure nihil dolore beatae ut voluptas. Excepturi assumenda et deleniti. Facere iste quidem voluptatem aut. Vel iusto eius mollitia.', 41, '1600668895-pro13.png', NULL, 54, 1, 15, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(324, '1992', 'electric pump', 'harum', 111023, 128595, 'Consectetur quia expedita sapiente delectus. Veritatis voluptatum placeat et error occaecati et. Odio illum eum vel dicta nihil.', 'Laudantium sequi quidem alias sit vitae. Dolorem amet est est sed et. Necessitatibus dicta iste et molestias reprehenderit suscipit et. Quia iure non temporibus voluptas.', 41, '1600668895-pro13.png', NULL, 47, 1, 14, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(325, '1470', 'water pump', 'vel', 103344, 27691, 'Doloribus sequi similique praesentium autem minima vitae aliquid. Dolor et consequuntur corporis eum non pariatur officia. Cum tempora eos non temporibus nihil.', 'Quia officiis reprehenderit incidunt distinctio repellendus consectetur dolores. Blanditiis rerum totam quidem aut iure. Reiciendis sint omnis sequi dolorem in voluptatem.', 23, '1600668895-pro13.png', NULL, 35, 1, 16, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(326, '1434', 'normal pump', 'eligendi', 39266, 96105, 'Et unde commodi rerum eum. Vitae dolores necessitatibus est in corporis quia optio. A ut molestiae et aut autem voluptatem quaerat. Sunt voluptas optio harum sapiente laudantium.', 'Nulla eius ut qui atque. Mollitia inventore eum quia est. Quisquam aut ut delectus quas quia molestias.', 45, '1600668895-cat2.jpeg', NULL, 44, 1, 16, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(327, '1910', 'pump', 'numquam', 24936, 10843, 'Nulla recusandae officia doloremque est corrupti sit est. Qui molestiae tempora sunt possimus saepe. Perspiciatis quam libero dolorem qui et optio odit. Animi ullam consequatur assumenda molestias.', 'Eaque laudantium sed ut molestiae. Quis ut autem similique quia possimus soluta.', 20, '1600668895-cat2.jpg', NULL, 70, 1, 15, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(328, '1794', 'pump', 'aspernatur', 21396, 59019, 'Exercitationem aut voluptatem minus vero est. Exercitationem exercitationem sint non corporis odio rerum sequi. Rem voluptatem fugiat iusto optio et eius. Est laboriosam enim dolore occaecati et.', 'Atque veniam non maiores vel voluptatem accusantium. Et explicabo aut maxime minima deleniti. Optio a qui qui provident veritatis recusandae maiores.', 33, '1600668895-pro13.png', NULL, 83, 1, 18, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(329, '1441', 'normal pump', 'quis', 86603, 41984, 'Ad soluta aut dolorum est quis beatae aut. Ut dolores modi beatae aut sint voluptatem. Sequi eligendi ratione aut aut ut.', 'Est hic aut harum est. Nemo animi magni quisquam voluptates. Consequatur sed consectetur est dolores facilis aperiam. Qui error aut sint voluptate cumque.', 28, '1600668895-pro13.png', NULL, 28, 1, 15, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(330, '1913', 'electric pump', 'consequatur', 102644, 147241, 'Repellendus occaecati facilis vel quidem. Rerum libero minus asperiores quasi vel molestiae. Quo nulla sapiente et aut laudantium. Voluptatum possimus blanditiis consequatur illo voluptas similique alias non.', 'Consectetur doloribus non qui eveniet et voluptatem exercitationem. Voluptas quisquam qui maxime et iure. Distinctio consequatur quidem minima aut. Iusto a adipisci enim eligendi fugit eos.', 34, '1600668895-pro13.png', NULL, 26, 1, 18, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(331, '1800', 'normal pump', 'ratione', 117474, 1636, 'Et facilis excepturi vel. Officia ipsa nisi atque neque quam rerum. Commodi perspiciatis ducimus fugiat architecto amet rerum. Sapiente sequi repellendus error eaque.', 'Adipisci pariatur esse ipsam est ducimus sint. Alias corporis ipsum libero id enim eum vel. Sint id consequatur voluptatem quidem veritatis est. Ut eum quo aliquid repudiandae error natus.', 38, '1600668895-pro13.png', NULL, 38, 1, 13, '2021-01-07 05:42:12', '2021-01-07 05:42:12'),
(332, '1539', 'electric pump', 'aperiam', 81926, 23153, 'A sunt odio officiis deserunt corporis. Rem necessitatibus quaerat ipsum reprehenderit blanditiis. Inventore et error ex ea consequatur expedita.', 'Debitis impedit quidem voluptatibus fugit minima mollitia. Consequuntur est minima vitae velit sed rerum. Quibusdam dolores quis perspiciatis quis quis. Officia sapiente molestiae sequi consectetur.', 19, '1600668895-cat2.jpg', NULL, 12, 1, 13, '2021-01-07 05:42:13', '2021-01-22 19:03:37'),
(333, '1713', 'pump', 'illo', 16329, 96253, 'Saepe aut dicta hic labore. Veniam dolor ut nihil et rerum repellendus cumque. Et at labore quas architecto id inventore et. Magni consequatur in nemo veritatis molestias assumenda adipisci. Qui esse quae aliquid dignissimos.', 'Necessitatibus nihil quidem atque. Omnis dolor vitae odio nihil. Suscipit in temporibus nemo consequuntur qui. Et sit expedita ipsam sapiente.', 21, '1600668895-pro13.png', NULL, 59, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(334, '1779', 'electric pump', 'quia', 92725, 139467, 'Qui esse repellendus quia facere aspernatur temporibus accusantium soluta. Vitae rem qui laudantium eveniet officia aliquam voluptatem aut. Qui eligendi qui expedita sed illo aut. Quia qui voluptatem eaque nulla eum consequatur.', 'Qui et ut culpa modi officiis. Voluptatem voluptatem qui temporibus officiis. Occaecati dolor eius odit voluptatem ut. Blanditiis nisi est deleniti quo consectetur repudiandae doloremque.', 50, '1600668895-cat2.jpeg', NULL, 89, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(335, '1991', 'pump', 'animi', 132945, 145657, 'Ab quia architecto sunt eveniet ipsum. Deleniti porro est neque est rerum. Consequatur maxime laborum non omnis et non.', 'Laudantium consequatur accusamus consequatur dolorem nam. Temporibus optio ipsa et dolores. Odit quae quia velit in iste necessitatibus.', 33, '1600668895-cat2.jpg', NULL, 14, 1, 17, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(336, '1177', 'electric pump', 'maiores', 95987, 74122, 'Quia quia facere id soluta. Praesentium est fuga ratione corrupti nemo rem officia. Aspernatur temporibus minima eum quo quae praesentium. Numquam sequi earum voluptatibus aut.', 'Possimus velit porro sunt sed deleniti. Ea laborum explicabo consequatur libero. Cum nam voluptatem quia dolor et fugit ad.', 25, '1600668895-cat2.jpeg', NULL, 28, 1, 14, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(337, '1198', 'pump', 'hic', 57451, 83854, 'Quo explicabo voluptatum expedita tenetur accusantium est minus. Vitae veritatis eum et ea explicabo doloribus quia. Quo eveniet in rerum voluptatem dolor. Eveniet aspernatur voluptatum soluta.', 'Temporibus odit repudiandae quaerat omnis iusto autem in. Eos atque excepturi et quia minima enim qui. Repudiandae reiciendis nisi quisquam architecto ratione velit itaque illum. Aut et dolore accusamus temporibus et explicabo.', 27, '1600668895-pro13.png', NULL, 86, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(338, '1747', 'water pump', 'tempore', 55523, 10983, 'Sed minus quia quibusdam in sed quaerat maiores. Laudantium occaecati non vel qui totam dolor error. Aut voluptas aut accusantium ducimus provident vel et. Aliquid ex consequatur atque eos officia assumenda.', 'Tenetur porro ut vel eaque. Magnam voluptates aliquid deleniti sed aut et a quam. Et et nisi dolorem illum veritatis magnam dolore.', 43, '1600668895-pro13.png', NULL, 22, 1, 18, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(339, '1071', 'normal pump', 'tempora', 141922, 29313, 'Enim eos dolore voluptas debitis deserunt. Quia maxime et ratione fuga vel. Soluta aspernatur non aliquid reiciendis.', 'Debitis quasi perspiciatis quam non ut perferendis odit. Perferendis dolores hic ad. Et beatae laborum fugiat enim. Aut omnis voluptatem sunt voluptatem vitae qui.', 21, '1600668895-cat2.jpg', NULL, 62, 1, 16, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(340, '1389', 'water pump', 'eos', 56762, 70559, 'Aspernatur reiciendis qui minima. Qui velit pariatur ducimus vel. Repellat tenetur nihil voluptatum ad fugit.', 'Quis voluptatibus nemo praesentium. Sequi est in molestias blanditiis et. Iste veniam repellat nesciunt cumque ut error autem. Officiis dolor architecto rem nemo.', 23, '1600668895-pro13.png', NULL, 69, 1, 14, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(341, '1861', 'water pump', 'numquam', 149493, 63704, 'Est nisi sequi veritatis. Tenetur atque sed at. Consequatur accusantium incidunt sint. Dignissimos odit corporis est omnis soluta ducimus.', 'Voluptas atque atque quia et aperiam rerum a. Eaque et atque nisi vitae placeat.', 37, '1600668895-cat2.jpeg', NULL, 99, 1, 13, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(342, '1320', 'electric pump', 'dolor', 76214, 35666, 'Quae libero rerum nisi itaque in. Nobis sunt voluptas in voluptas. Voluptas sed quia voluptatem quo iusto. Ducimus sit quibusdam autem distinctio eveniet unde. Ratione eos esse rerum sed quis.', 'Vero quis neque numquam a officiis. Minus et et aut nostrum modi non omnis. Officia modi atque cupiditate doloremque quos quam ex. Rerum qui voluptatem quas ut similique et.', 36, '1600668895-cat2.jpeg', NULL, 93, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(343, '1004', 'water pump', 'aliquid', 114815, 148022, 'Velit sit nesciunt qui omnis consequuntur. Doloremque itaque nulla adipisci. Est sed ut sint id amet et temporibus officia.', 'Ut doloremque aspernatur ipsam voluptate quos magnam. Deserunt quo voluptate consequatur consequatur qui. Saepe voluptatum ea a quisquam explicabo eum quidem.', 41, '1600668895-pro13.png', NULL, 49, 1, 14, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(344, '1625', 'water pump', 'accusantium', 107076, 53252, 'Accusamus impedit excepturi consequatur quis. Molestias aut rerum ex doloribus excepturi aut et. Ut optio quia odio nisi magni quia soluta aliquam.', 'Qui earum enim est nemo quam. Non id et nam est. Aut eum odit est debitis occaecati ut.', 41, '1600668895-pro13.png', NULL, 100, 1, 14, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(345, '1649', 'water pump', 'maxime', 84368, 134382, 'Est sit quibusdam odio. Quaerat dolores labore iste ipsa. Voluptatibus est tenetur quos quaerat perferendis quas laboriosam. Pariatur aut quidem eum velit autem.', 'Molestiae omnis quas facilis qui excepturi. Temporibus repellat dolore neque ipsam fugit consequatur aut.', 23, '1600668895-cat2.jpeg', NULL, 27, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(346, '1850', 'normal pump', 'molestias', 46167, 65160, 'Nihil aperiam earum ad sed voluptatum. Ea sed repellat porro eligendi est. Consequatur dolores consequatur in odio laborum. Corporis illo sit dolorem rerum eaque.', 'Harum commodi odio dolores quidem officiis. Eos deleniti quia velit molestiae cum quo voluptate. Sunt in velit et neque voluptatibus facere voluptas. Aut sit accusamus veniam fugit qui temporibus.', 40, '1600668895-cat2.jpeg', NULL, 35, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(347, '1394', 'normal pump', 'quo', 70341, 11041, 'Necessitatibus ut eaque velit omnis aspernatur. Sit fugiat voluptates accusamus ipsam qui quae fugiat totam. Molestiae magni et autem occaecati sit nam.', 'Tempora et maiores sint doloribus enim vitae dicta. Dolor placeat sequi et repellat. Qui omnis aut hic. Quisquam et at eius rem incidunt officia ipsum consequatur.', 44, '1600668895-pro13.png', NULL, 26, 1, 13, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(348, '1936', 'water pump', 'autem', 62657, 143858, 'Consequatur quidem ipsum ratione deserunt. Veniam ipsam eum molestiae rerum qui. Suscipit alias ut nihil voluptatem aut minus minus asperiores. Dolores beatae consequatur ut sed.', 'Perferendis provident accusantium velit ipsum maxime totam explicabo. Impedit dolores architecto aut dicta laborum. Tenetur non rerum suscipit iure illum eius quia itaque.', 23, '1600668895-cat2.jpeg', NULL, 35, 1, 16, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(349, '1950', 'pump', 'sint', 91481, 109908, 'Et molestias et nulla doloremque fugit. Ullam quisquam molestias dolore optio necessitatibus. Cum nemo quia qui rerum culpa culpa.', 'Cumque doloribus inventore ut cumque est facilis. Officiis quia odio pariatur cumque quia quaerat quisquam ipsum. Quidem ab voluptates sunt autem. Libero molestias voluptatum vitae est.', 46, '1600668895-pro13.png', NULL, 67, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(350, '1697', 'normal pump', 'ipsam', 148656, 130241, 'Consequatur rerum qui sequi velit est voluptatem ab. Aut sit voluptatem dolor voluptas molestiae voluptatibus assumenda. Nulla velit esse illum impedit qui ex suscipit. Fugiat provident iste vel.', 'Assumenda facere adipisci nulla velit sit dignissimos. Facere numquam maxime saepe laboriosam. Dolore est voluptate nesciunt ut. At non consectetur qui.', 41, '1600668895-cat2.jpg', NULL, 51, 1, 17, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(351, '1453', 'water pump', 'cumque', 126824, 50116, 'Laudantium natus amet in maxime ex rerum. Vero voluptas et deserunt vel eveniet. Beatae voluptatibus maiores culpa rerum voluptatem.', 'Adipisci occaecati sed quo aut facilis aliquam. Repellat nostrum laborum reprehenderit. Eligendi minima soluta quia explicabo.', 43, '1600668895-cat2.jpeg', NULL, 96, 1, 18, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(352, '1402', 'electric pump', 'culpa', 13566, 147155, 'Magni quia velit consequuntur hic doloremque. Odit a assumenda dignissimos et eos. Excepturi quo temporibus quisquam consequuntur rem. Sit vel ducimus dicta tenetur dignissimos cum consequatur eveniet.', 'Ab voluptas dicta animi sapiente voluptatem. Laudantium in officia deserunt. Fuga ab aut voluptatum et. Ad sequi vel aut ut repellat sequi.', 28, '1600668895-pro13.png', NULL, 33, 1, 16, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(353, '1735', 'electric pump', 'ut', 72974, 23484, 'Quidem et qui provident iure. Molestiae facere voluptas quisquam et aut. Et ut perferendis ducimus reiciendis consequatur quia. Sequi aut ab reprehenderit aut dolores amet qui. Inventore nam exercitationem quasi eius suscipit occaecati.', 'Maiores officia est qui aliquam quo veniam nam. Qui commodi nobis numquam eos tempora ducimus voluptatem quaerat. Necessitatibus consequatur vero quae quia ad in.', 45, '1600668895-cat2.jpg', NULL, 88, 1, 17, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(354, '1068', 'pump', 'quia', 122605, 138332, 'Fugit amet iusto odio vitae id voluptate at non. Qui corporis inventore et explicabo deserunt voluptate beatae.', 'Dolorem cumque deserunt voluptatum reiciendis cupiditate unde. Dolores eaque et quo sunt. Quaerat qui praesentium eveniet dolorum qui nisi porro. Doloremque inventore et enim.', 44, '1600668895-pro13.png', NULL, 53, 1, 17, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(355, '1462', 'pump', 'voluptate', 63779, 6605, 'Odio libero sit et. Ullam modi id quo aut. Iste molestias quisquam et omnis dolores officiis molestias et. Qui possimus esse eius blanditiis officiis.', 'Non rem et voluptatum quidem atque qui at. Natus qui perferendis enim eum. Sed quas voluptas laborum dolorem ut odio mollitia. Quis modi illo rerum facilis quisquam.', 42, '1600668895-cat2.jpeg', NULL, 96, 1, 13, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(356, '1678', 'water pump', 'aliquid', 92685, 4450, 'Vel explicabo ut praesentium esse et nemo omnis. Eos error blanditiis commodi perferendis deleniti. Architecto rem ullam ipsam est incidunt optio sed. Explicabo earum aut et voluptas fugiat.', 'Sunt eum autem sunt consequatur eligendi aliquam nesciunt maxime. Labore sequi quasi dignissimos consequatur vel. Et repellendus officia suscipit eveniet.', 30, '1600668895-pro13.png', NULL, 83, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(357, '1958', 'electric pump', 'quas', 115483, 1844, 'Sed aliquam quidem et ipsam exercitationem quisquam non. Et distinctio facilis perferendis at. Neque eum eum distinctio consequuntur nobis quas adipisci. Qui et aut aut accusantium ipsa id. Consequatur velit libero ut dolor sunt repellat quibusdam.', 'Quo deserunt commodi dolores labore. Blanditiis modi dolorum iure quibusdam. Est enim ea iste reprehenderit quis hic. Porro autem qui praesentium excepturi suscipit fugit qui.', 23, '1600668895-pro13.png', NULL, 97, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(358, '1539', 'pump', 'quis', 65657, 135437, 'Autem rerum sint temporibus iusto praesentium aspernatur alias. Necessitatibus sint deserunt ut qui. Facere quasi explicabo enim architecto commodi. Dolores consectetur nemo iusto et assumenda modi.', 'Aut sunt voluptatem impedit molestiae error alias. Recusandae consequatur ad optio vitae ipsa non totam. Quod quo sit molestias vel modi ea.', 49, '1600668895-cat2.jpeg', NULL, 17, 1, 14, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(359, '1456', 'pump', 'exercitationem', 105334, 140007, 'Cumque voluptatem aliquam nemo quia quo. Provident tempora quaerat iusto qui. Ipsum ab nostrum eum consequatur omnis adipisci culpa.', 'Alias neque sint est illum. Deserunt expedita laboriosam fugiat beatae recusandae. Facere esse et quis aut ut hic qui. Quam eaque eveniet aliquid.', 41, '1600668895-pro13.png', NULL, 52, 1, 13, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(360, '1501', 'normal pump', 'est', 45742, 75867, 'Et ipsum velit ex debitis autem. Ea est dolor ipsum consequuntur. Aut provident recusandae distinctio rerum.', 'Qui totam eaque et dolor rerum reiciendis. Non amet vel quo ut autem atque. Qui ut consectetur est. Voluptatum cupiditate commodi nulla eum.', 43, '1600668895-cat2.jpg', NULL, 24, 1, 15, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(361, '1958', 'normal pump', 'sed', 33092, 17210, 'Qui qui id labore qui doloribus eos. Aut accusamus similique aut tenetur aut aut similique quibusdam. Sit nemo officia at odit.', 'Sunt molestiae qui et asperiores dolorem laudantium qui voluptatem. Minus quod consequatur nemo. Unde atque est aut doloremque reprehenderit est qui. Quos et totam facere nihil totam asperiores.', 34, '1600668895-cat2.jpg', NULL, 78, 1, 16, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(362, '1785', 'water pump', 'nulla', 120172, 98118, 'Natus veritatis atque dolorum sed voluptatibus. Rerum soluta aut in nam facilis nihil voluptatem. Deserunt ipsam eveniet asperiores molestiae doloribus voluptate. Impedit ipsa aut ad et est placeat assumenda sit.', 'Impedit rem est ipsum ut laborum rerum. Perferendis magni laudantium excepturi ipsum aperiam perspiciatis repudiandae. Et suscipit iure quia voluptatibus qui magni.', 47, '1600668895-cat2.jpg', NULL, 25, 1, 16, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(363, '1646', 'normal pump', 'laboriosam', 66221, 145543, 'Ut recusandae autem ea praesentium ex rem. Voluptas ea vero asperiores voluptas ut reprehenderit similique. Sint natus fuga provident quibusdam. Dolor ipsum delectus ut repellat alias quisquam.', 'Officiis delectus suscipit culpa quae. Molestiae id consequatur magnam beatae. Distinctio recusandae officia ut nihil omnis ut.', 28, '1600668895-cat2.jpeg', NULL, 89, 1, 18, '2021-01-07 05:42:13', '2021-01-07 05:42:13'),
(364, '1859', 'normal pump', 'aliquam', 79985, 127319, 'Est deleniti qui hic sed. Assumenda laborum quisquam deleniti animi. Recusandae molestias autem doloremque et in.', 'Aliquid dolor eius eius accusantium dolorem. Unde impedit nemo at recusandae natus omnis ut. Nisi iusto libero libero quae.', 43, '1600668895-pro13.png', NULL, 40, 1, 18, '2021-01-07 05:42:14', '2021-01-07 05:42:14'),
(365, '1366', 'pump', 'dolor', 8294, 3899, 'Quis temporibus modi similique expedita nobis. Quisquam ipsam id laudantium vel aspernatur in autem. Ut ipsam quidem quas. Voluptatem aut est impedit et est.', 'Deleniti numquam officia distinctio ut rerum minus blanditiis. Vel saepe qui quia pariatur consequatur sit.', 45, '1600668895-cat2.jpg', NULL, 60, 1, 15, '2021-01-07 05:42:14', '2021-01-07 05:42:14'),
(366, '1473', 'electric pump', 'quam', 63368, 5034, 'Fuga autem ullam est. Et modi quae omnis. Nesciunt est illum in odit quis repudiandae. Nulla dolore iusto fugiat quibusdam velit facilis.', 'A voluptatem modi illo exercitationem occaecati dolorem ullam. Eveniet delectus dignissimos id totam quo nesciunt. Non ut ex harum soluta non repellat reprehenderit. Eos labore ea facilis voluptatem ducimus iure reiciendis.', 37, '1600668895-cat2.jpg', NULL, 30, 1, 15, '2021-01-07 05:42:14', '2021-01-22 19:03:37'),
(367, '1002', 'pump', 'omnis', 8203, 75104, 'Quia nihil quas aut dignissimos harum. Explicabo aut fugit possimus id totam quis. Deserunt veniam cumque sint id praesentium sed possimus libero.', 'Illum iure nulla nesciunt qui quasi veniam. Nesciunt necessitatibus laudantium quos similique consequatur. Ea quod asperiores dignissimos aperiam quia et quasi.', 50, '1600668895-cat2.jpg', NULL, 39, 1, 13, '2021-01-07 05:42:14', '2021-01-07 05:42:14'),
(368, '12000', 'hammer-ramri', 'hammer-ramri', 1000, 760, '<p>yo babbal</p>', '<p>yo nepali saman , amrit sir le banako</p>', 12, '1629009714-12.jpg', '[\"1629009714-3.jpg\",\"1629009714-4.jpg\",\"1629009714-6.jpg\"]', 101, 1, 13, '2021-08-15 12:26:54', '2021-08-15 12:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `attribute_navbar` tinyint(1) NOT NULL DEFAULT 0,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `slug`, `status`, `attribute_navbar`, `seo_title`, `seo_description`, `seo_keyword`, `order`, `created_at`, `updated_at`) VALUES
(13, 'Water Pumps', 'water-pumps', 1, 1, 'water pumps', 'water pumps', 'water pumps', 1, '2020-09-16 05:12:04', '2021-08-12 10:51:26'),
(14, 'Power Tools', 'power-tools', 1, 1, NULL, NULL, NULL, 2, '2020-09-16 05:28:38', '2021-08-12 10:51:36'),
(15, 'Hardware', 'hardware', 1, 1, 'hardware', 'hardware', 'hardware', 14, '2020-09-16 05:29:01', '2021-08-12 11:18:28'),
(16, 'Washer Pressure', 'washer-pressure', 0, 0, 'washer pressure', 'water pressure', 'water pressure', 15, '2020-09-16 05:29:18', '2021-08-06 16:08:01'),
(17, 'Hand Tools', 'hand-tools', 1, 1, 'hand tools', 'hand tools', 'hand tools', 6, '2020-09-16 05:29:31', '2021-08-06 16:02:27'),
(18, 'Cutting Tools', 'cutting-tools', 1, 1, 'cutting tools', 'cutting tools', 'cutting tools', 11, '2020-09-16 05:29:45', '2021-08-06 16:04:34'),
(25, 'Wood Working', 'wood-working', 1, 1, 'wood working', 'wood working tools', 'wood working', 3, '2021-08-06 15:58:52', '2021-08-12 11:05:56'),
(26, 'Welding', 'welding', 1, 1, 'welding', 'welding', 'welding', 4, '2021-08-06 15:59:13', '2021-08-12 11:06:19'),
(27, 'Safety & Work Wear', 'safety-work-wear', 1, 1, 'safety and work wear', 'safety and work wear', 'safety and work wear', 5, '2021-08-06 16:00:06', '2021-08-12 11:11:35'),
(28, 'Agriculture & Gardening Tools', 'agriculture-gardening-tools', 1, 1, 'agriculture and gardening tools', 'agriculture and gardening tools', 'agriculture and gardening tools', 7, '2021-08-06 16:01:25', '2021-08-06 16:02:36'),
(29, 'Machinery', 'machinery', 1, 1, 'machinery', 'machinery', 'machinery', 8, '2021-08-06 16:03:03', '2021-08-06 16:03:03'),
(30, 'Accessories', 'accessories', 1, 1, 'accessories', 'accessories', 'accessories', 9, '2021-08-06 16:03:43', '2021-08-12 11:12:55'),
(31, 'Testing & Measuring Equipments', 'testing-measuring-equipments', 1, 1, 'testing and measuring equipments', 'testing and measuring equipments', 'testing and measuring equipments', 10, '2021-08-06 16:04:14', '2021-08-06 16:04:14'),
(32, 'Adhesives, Finings & Lubricants', 'adhesives-finings-lubricants', 1, 1, 'adhesives finings and lubricants', 'adhesives finings and lubricants', 'adhesives finings lubricants', 12, '2021-08-06 16:05:36', '2021-08-06 16:05:36'),
(33, 'Garage Equipments', 'garage-equipments', 1, 1, 'garage equipments', 'garage equipments', 'garage equipments', 13, '2021-08-06 16:06:10', '2021-08-06 16:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_producttag`
--

CREATE TABLE `product_producttag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_producttag`
--

INSERT INTO `product_producttag` (`id`, `product_id`, `product_tag_id`, `created_at`, `updated_at`) VALUES
(4, 11, 3, NULL, NULL),
(5, 11, 4, NULL, NULL),
(6, 11, 5, NULL, NULL),
(7, 16, 3, NULL, NULL),
(8, 17, 5, NULL, NULL),
(9, 18, 4, NULL, NULL),
(10, 16, 4, NULL, NULL),
(11, 1, 3, NULL, NULL),
(12, 2, 4, NULL, NULL),
(13, 7, 3, NULL, NULL),
(14, 7, 4, NULL, NULL),
(15, 8, 4, NULL, NULL),
(16, 12, 3, NULL, NULL),
(17, 12, 4, NULL, NULL),
(18, 19, 3, NULL, NULL),
(19, 19, 4, NULL, NULL),
(20, 20, 3, NULL, NULL),
(21, 20, 4, NULL, NULL),
(22, 21, 3, NULL, NULL),
(23, 21, 4, NULL, NULL),
(24, 22, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `tag`, `order`, `created_at`, `updated_at`) VALUES
(3, 'power tool', 1, '2020-09-17 04:11:06', '2020-09-17 04:23:50'),
(4, 'new arrival', 2, '2020-09-17 04:11:33', '2020-09-17 04:24:21'),
(5, 'chinese water pump', 3, '2020-09-17 04:24:05', '2020-09-17 04:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` double(8,2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `rating`, `status`, `customer_name`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Fusce vulputate sem faucibus nulla egestas, quis imperdiet libe Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, voluptate', 5.00, 1, 'mukesh rai', 1, 3, '2021-01-05 13:00:32', '2021-01-05 13:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-09-15 05:12:44', '2020-09-15 05:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institution_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_linkedIn_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_google_plus_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_google_map` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonals`
--

CREATE TABLE `testimonals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `address`) VALUES
(1, 'Cutomer First', 'care@ultrabyteit.com', NULL, '$2y$10$VRjHZECp1raFQHnm.VXT2.nZN.xDoRcAbaVkYG3hXyWzrJcetTGBq', NULL, NULL, '2020-09-22 00:50:47', '', NULL),
(3, 'mukesh rai', 'mukeshrai541@gmail.com', NULL, '$2y$10$D3aYf7EgAQ440qMijuNjluAolM9g3dtFngN5GuA3OAtas6KkMmS9G', NULL, '2020-10-18 03:40:36', '2020-11-05 06:13:11', NULL, NULL),
(4, 'Rohan', 'rohan@gmail.com', NULL, '$2y$10$.iGgOABXeuMWYorrwML19e.Kinf33r9kAfzMkDPQd.XNbjhbmwk0W', NULL, '2020-12-20 02:11:33', '2020-12-20 02:11:33', NULL, NULL),
(6, 'ThomasAlils', 'diinordnusworkstat@mail.com', NULL, '$2y$10$V1ZGibznqhBQc9A9J61XxuAE3sqqmt25H3Un4ugpmNNZCpJD0e3oK', NULL, '2021-07-30 19:21:52', '2021-07-30 19:21:52', NULL, NULL),
(7, 'OscarCrync', 'lichanabaras@mail.com', NULL, '$2y$10$CHLIQl9pAkP/QdhNcyJ6KedyLLisn/1ZUHKYlUxZED4TBMrdnJm22', NULL, '2021-08-02 19:09:34', '2021-08-02 19:09:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(154, 1, 16, '2020-10-22 02:02:45', '2020-10-22 02:02:45'),
(155, 1, 12, '2020-10-22 02:24:18', '2020-10-22 02:24:18'),
(172, 1, 1, '2020-11-13 02:54:05', '2020-11-13 02:54:05'),
(173, 3, 17, '2021-01-22 19:03:06', '2021-01-22 19:03:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carosels`
--
ALTER TABLE `carosels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_cruds`
--
ALTER TABLE `contact_cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features_about_us`
--
ALTER TABLE `features_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_images`
--
ALTER TABLE `homepage_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_order_id_foreign` (`order_id`);

--
-- Indexes for table `layouts`
--
ALTER TABLE `layouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `layouts_layout_id_foreign` (`layout_id`);

--
-- Indexes for table `layout_product`
--
ALTER TABLE `layout_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `layout_product_layout_id_foreign` (`layout_id`),
  ADD KEY `layout_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_categories_id_foreign` (`product_categories_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_producttag`
--
ALTER TABLE `product_producttag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_producttag_product_id_foreign` (`product_id`),
  ADD KEY `product_producttag_product_tag_id_foreign` (`product_tag_id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_order_id_foreign` (`order_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`,`instance`);

--
-- Indexes for table `testimonals`
--
ALTER TABLE `testimonals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carosels`
--
ALTER TABLE `carosels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_cruds`
--
ALTER TABLE `contact_cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features_about_us`
--
ALTER TABLE `features_about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepage_images`
--
ALTER TABLE `homepage_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layouts`
--
ALTER TABLE `layouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `layout_product`
--
ALTER TABLE `layout_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101516;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_producttag`
--
ALTER TABLE `product_producttag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonals`
--
ALTER TABLE `testimonals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `layouts`
--
ALTER TABLE `layouts`
  ADD CONSTRAINT `layouts_layout_id_foreign` FOREIGN KEY (`layout_id`) REFERENCES `layouts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `layout_product`
--
ALTER TABLE `layout_product`
  ADD CONSTRAINT `layout_product_layout_id_foreign` FOREIGN KEY (`layout_id`) REFERENCES `layouts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `layout_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_categories_id_foreign` FOREIGN KEY (`product_categories_id`) REFERENCES `product_categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_producttag`
--
ALTER TABLE `product_producttag`
  ADD CONSTRAINT `product_producttag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_producttag_product_tag_id_foreign` FOREIGN KEY (`product_tag_id`) REFERENCES `product_tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
