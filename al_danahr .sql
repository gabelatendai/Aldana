-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 08:56 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `al_danahr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_fname`, `admin_lname`, `username`, `admin_title`, `photo`, `phone`, `residence`, `admin_number`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Alfred', 'Kakuli', 'Alfred Kakuli', NULL, 'alfredpng25-12-20191577274074.png', '214875', 'Ajman', '2154', '$2y$10$cfc5Nw4uAeO3Au0UYQeMteMzur7QATXl1GUO0fr6Oeg/7V4d.Ej4C', 'alfredkakuli@gmail.com', 'N8uCwWQHLP3F3QyQKDyMeffFm4S9OmG9mbQlN88QRXAGUkk0FZKd71qiXZh1', '2019-12-16 04:23:47', '2019-12-25 07:41:14'),
(5, 'admin2', 'admin2', 'admin2', 'mr', 'com-logojpg25-12-20191577270921.jpg', '12541', 'Ajman', '1421', '$2y$10$wg4Lor3pojeZ0nKuVIpAYuwI6GTbdUcMglnZa4cdatR7zakJgJHHu', 'admintwo@aldana.com', '5zquE782Km3cR639IDbiQSBwJpPnskOsDqFNYrg64DnNktGxbLgQVzQnG5cG', '2019-12-25 06:48:41', '2019-12-25 06:48:41'),
(6, 'admin', 'admin', 'admin', NULL, 'logo-rasterjpg25-12-20191577271634.jpg', '2215463', 'Ajman', '2225', '$2y$10$40/T0U0on6sAb2OCKSuBQ.t6Faz7Ez9r6q.8JXY3vwsnS1EY7spmC', 'admin@aldana.com', 'bfHHsMXkIIlhzVQMVtbYxFfwOA6PLULfcbhJQVK8bRtpaedpoh5XPTUKkGU5', '2019-12-25 07:00:34', '2019-12-26 03:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(12, 1, 5, NULL, NULL),
(13, 2, 5, NULL, NULL),
(14, 3, 5, NULL, NULL),
(15, 1, 6, NULL, NULL),
(16, 2, 6, NULL, NULL),
(17, 3, 6, NULL, NULL),
(18, 1, 2, NULL, NULL),
(19, 2, 2, NULL, NULL),
(20, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE `allowances` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Acomodation', '250', NULL, NULL),
(2, 'transport', '350', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `allowance_user`
--

CREATE TABLE `allowance_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `allowance_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `announcement_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attends`
--

CREATE TABLE `attends` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `checkdate` date DEFAULT NULL,
  `checktime` time(6) DEFAULT NULL,
  `checktype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkintime` time(6) DEFAULT NULL,
  `checkouttime` time(6) DEFAULT NULL,
  `sensorid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifycode` int(11) DEFAULT NULL,
  `workcode` int(11) DEFAULT NULL,
  `sn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attends`
--

INSERT INTO `attends` (`id`, `user_id`, `checkdate`, `checktime`, `checktype`, `checkin`, `checkout`, `checkintime`, `checkouttime`, `sensorid`, `verifycode`, `workcode`, `sn`, `created_at`, `updated_at`) VALUES
(870, 8, '2019-12-25', '05:19:21.000000', '0\r', '0\r', NULL, '05:19:21.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(871, 8, '2019-12-25', '05:19:28.000000', '0\r', '0\r', NULL, '05:19:28.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(872, 8, '2019-12-25', '05:19:30.000000', '0\r', '0\r', NULL, '05:19:30.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(873, 8, '2019-12-25', '05:19:33.000000', '0\r', '0\r', NULL, '05:19:33.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(874, 8, '2019-12-25', '05:19:36.000000', '0\r', '0\r', NULL, '05:19:36.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(875, 8, '2019-12-25', '05:19:45.000000', '0\r', '0\r', NULL, '05:19:45.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(876, 8, '2019-12-25', '05:19:49.000000', '0\r', '0\r', NULL, '05:19:49.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(877, 8, '2019-12-25', '05:19:53.000000', '0\r', '0\r', NULL, '05:19:53.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(878, 8, '2019-12-25', '05:19:58.000000', '0\r', '0\r', NULL, '05:19:58.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(879, 8, '2019-12-25', '08:58:57.000000', '0\r', '0\r', NULL, '08:58:57.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(880, 8, '2019-12-25', '08:59:10.000000', '0\r', '0\r', NULL, '08:59:10.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(881, 24, '2019-12-23', '04:50:10.000000', '0\r', '0\r', NULL, '04:50:10.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(882, 2, '2019-12-23', '04:50:13.000000', '0\r', '0\r', NULL, '04:50:13.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(883, 2, '2019-12-23', '04:50:28.000000', '0\r', '0\r', NULL, '04:50:28.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(884, 2, '2019-12-23', '08:26:27.000000', '1\r', '1\r', NULL, '08:26:27.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(885, 2, '2019-12-23', '08:27:14.000000', '1\r', '1\r', NULL, '08:27:14.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(886, 2, '2019-12-23', '08:27:18.000000', '1\r', '1\r', NULL, '08:27:18.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(887, 2, '2019-12-23', '08:27:22.000000', '1\r', '1\r', NULL, '08:27:22.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(888, 2, '2019-12-23', '08:27:26.000000', '1\r', '1\r', NULL, '08:27:26.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(889, 2, '2019-12-23', '08:27:38.000000', '0\r', '0\r', NULL, '08:27:38.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(890, 2, '2019-12-23', '20:15:21.000000', '1\r', '1\r', NULL, '20:15:21.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(891, 2, '2019-12-24', '21:20:38.000000', '0\r', '0\r', NULL, '21:20:38.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(892, 2, '2019-12-25', '00:34:51.000000', '0\r', '0\r', NULL, '00:34:51.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(893, 2, '2019-12-25', '00:34:56.000000', '2\r', '2\r', NULL, '00:34:56.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(894, 2, '2019-12-25', '00:35:12.000000', '0\r', '0\r', NULL, '00:35:12.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(895, 2, '2019-12-25', '00:35:38.000000', '0\r', '0\r', NULL, '00:35:38.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(896, 6, '2019-12-23', '04:41:05.000000', '0\r', '0\r', NULL, '04:41:05.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:23', '2019-12-28 03:15:23'),
(898, 8, '2019-12-25', '05:19:21.000000', '0\r', '0\r', NULL, '05:19:21.000000', NULL, NULL, NULL, NULL, NULL, '2019-12-28 03:15:31', '2019-12-28 03:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `iso` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93, NULL, NULL),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355, NULL, NULL),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213, NULL, NULL),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684, NULL, NULL),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376, NULL, NULL),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244, NULL, NULL),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264, NULL, NULL),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0, NULL, NULL),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268, NULL, NULL),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54, NULL, NULL),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374, NULL, NULL),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297, NULL, NULL),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61, NULL, NULL),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43, NULL, NULL),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994, NULL, NULL),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242, NULL, NULL),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973, NULL, NULL),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880, NULL, NULL),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246, NULL, NULL),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375, NULL, NULL),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32, NULL, NULL),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501, NULL, NULL),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229, NULL, NULL),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441, NULL, NULL),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975, NULL, NULL),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591, NULL, NULL),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387, NULL, NULL),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267, NULL, NULL),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0, NULL, NULL),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55, NULL, NULL),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246, NULL, NULL),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673, NULL, NULL),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359, NULL, NULL),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226, NULL, NULL),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257, NULL, NULL),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855, NULL, NULL),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237, NULL, NULL),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1, NULL, NULL),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238, NULL, NULL),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345, NULL, NULL),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236, NULL, NULL),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235, NULL, NULL),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56, NULL, NULL),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86, NULL, NULL),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61, NULL, NULL),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672, NULL, NULL),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57, NULL, NULL),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269, NULL, NULL),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242, NULL, NULL),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242, NULL, NULL),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682, NULL, NULL),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506, NULL, NULL),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225, NULL, NULL),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385, NULL, NULL),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53, NULL, NULL),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357, NULL, NULL),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420, NULL, NULL),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45, NULL, NULL),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253, NULL, NULL),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767, NULL, NULL),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809, NULL, NULL),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593, NULL, NULL),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20, NULL, NULL),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503, NULL, NULL),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240, NULL, NULL),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291, NULL, NULL),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372, NULL, NULL),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251, NULL, NULL),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500, NULL, NULL),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298, NULL, NULL),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679, NULL, NULL),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358, NULL, NULL),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33, NULL, NULL),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594, NULL, NULL),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689, NULL, NULL),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0, NULL, NULL),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241, NULL, NULL),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220, NULL, NULL),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995, NULL, NULL),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49, NULL, NULL),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233, NULL, NULL),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350, NULL, NULL),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30, NULL, NULL),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299, NULL, NULL),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473, NULL, NULL),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590, NULL, NULL),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671, NULL, NULL),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502, NULL, NULL),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224, NULL, NULL),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245, NULL, NULL),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592, NULL, NULL),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509, NULL, NULL),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0, NULL, NULL),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39, NULL, NULL),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504, NULL, NULL),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852, NULL, NULL),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36, NULL, NULL),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354, NULL, NULL),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91, NULL, NULL),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62, NULL, NULL),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98, NULL, NULL),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964, NULL, NULL),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353, NULL, NULL),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972, NULL, NULL),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39, NULL, NULL),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876, NULL, NULL),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81, NULL, NULL),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962, NULL, NULL),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7, NULL, NULL),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254, NULL, NULL),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686, NULL, NULL),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850, NULL, NULL),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82, NULL, NULL),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965, NULL, NULL),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996, NULL, NULL),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856, NULL, NULL),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371, NULL, NULL),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961, NULL, NULL),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266, NULL, NULL),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231, NULL, NULL),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218, NULL, NULL),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423, NULL, NULL),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370, NULL, NULL),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352, NULL, NULL),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853, NULL, NULL),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389, NULL, NULL),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261, NULL, NULL),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265, NULL, NULL),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60, NULL, NULL),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960, NULL, NULL),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223, NULL, NULL),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356, NULL, NULL),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692, NULL, NULL),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596, NULL, NULL),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222, NULL, NULL),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230, NULL, NULL),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269, NULL, NULL),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52, NULL, NULL),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691, NULL, NULL),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373, NULL, NULL),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377, NULL, NULL),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976, NULL, NULL),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664, NULL, NULL),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212, NULL, NULL),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258, NULL, NULL),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95, NULL, NULL),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264, NULL, NULL),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674, NULL, NULL),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977, NULL, NULL),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31, NULL, NULL),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599, NULL, NULL),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687, NULL, NULL),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64, NULL, NULL),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505, NULL, NULL),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227, NULL, NULL),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234, NULL, NULL),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683, NULL, NULL),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672, NULL, NULL),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670, NULL, NULL),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47, NULL, NULL),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968, NULL, NULL),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92, NULL, NULL),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680, NULL, NULL),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970, NULL, NULL),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507, NULL, NULL),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675, NULL, NULL),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595, NULL, NULL),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51, NULL, NULL),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63, NULL, NULL),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0, NULL, NULL),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48, NULL, NULL),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351, NULL, NULL),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787, NULL, NULL),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974, NULL, NULL),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262, NULL, NULL),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40, NULL, NULL),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70, NULL, NULL),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250, NULL, NULL),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290, NULL, NULL),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869, NULL, NULL),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758, NULL, NULL),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508, NULL, NULL),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784, NULL, NULL),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684, NULL, NULL),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378, NULL, NULL),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239, NULL, NULL),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966, NULL, NULL),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221, NULL, NULL),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381, NULL, NULL),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248, NULL, NULL),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232, NULL, NULL),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65, NULL, NULL),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421, NULL, NULL),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386, NULL, NULL),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677, NULL, NULL),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252, NULL, NULL),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27, NULL, NULL),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0, NULL, NULL),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34, NULL, NULL),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94, NULL, NULL),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249, NULL, NULL),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597, NULL, NULL),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47, NULL, NULL),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268, NULL, NULL),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46, NULL, NULL),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41, NULL, NULL),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963, NULL, NULL),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886, NULL, NULL),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992, NULL, NULL),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255, NULL, NULL),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66, NULL, NULL),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670, NULL, NULL),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228, NULL, NULL),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690, NULL, NULL),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676, NULL, NULL),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868, NULL, NULL),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216, NULL, NULL),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90, NULL, NULL),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370, NULL, NULL),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649, NULL, NULL),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688, NULL, NULL),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256, NULL, NULL),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380, NULL, NULL),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971, NULL, NULL),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44, NULL, NULL),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1, NULL, NULL),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1, NULL, NULL),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598, NULL, NULL),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998, NULL, NULL),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678, NULL, NULL),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58, NULL, NULL),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84, NULL, NULL),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284, NULL, NULL),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340, NULL, NULL),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681, NULL, NULL),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212, NULL, NULL),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967, NULL, NULL),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260, NULL, NULL),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263, NULL, NULL),
(240, 'RS', 'SERBIA', 'Serbia', 'SRB', 688, 381, NULL, NULL),
(241, 'AP', 'ASIA PACIFIC REGION', 'Asia / Pacific Region', '0', 0, 0, NULL, NULL),
(242, 'ME', 'MONTENEGRO', 'Montenegro', 'MNE', 499, 382, NULL, NULL),
(243, 'AX', 'ALAND ISLANDS', 'Aland Islands', 'ALA', 248, 358, NULL, NULL),
(244, 'BQ', 'BONAIRE, SINT EUSTATIUS AND SABA', 'Bonaire, Sint Eustatius and Saba', 'BES', 535, 599, NULL, NULL),
(245, 'CW', 'CURACAO', 'Curacao', 'CUW', 531, 599, NULL, NULL),
(246, 'GG', 'GUERNSEY', 'Guernsey', 'GGY', 831, 44, NULL, NULL),
(247, 'IM', 'ISLE OF MAN', 'Isle of Man', 'IMN', 833, 44, NULL, NULL),
(248, 'JE', 'JERSEY', 'Jersey', 'JEY', 832, 44, NULL, NULL),
(249, 'XK', 'KOSOVO', 'Kosovo', '---', 0, 381, NULL, NULL),
(250, 'BL', 'SAINT BARTHELEMY', 'Saint Barthelemy', 'BLM', 652, 590, NULL, NULL),
(251, 'MF', 'SAINT MARTIN', 'Saint Martin', 'MAF', 663, 590, NULL, NULL),
(252, 'SX', 'SINT MAARTEN', 'Sint Maarten', 'SXM', 534, 1, NULL, NULL),
(253, 'SS', 'SOUTH SUDAN', 'South Sudan', 'SSD', 728, 211, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deduction_user`
--

CREATE TABLE `deduction_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `deduction_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`) VALUES
(1, 'Transport', '2019-12-16 04:31:06', '2019-12-16 04:31:06'),
(2, 'ICT', '2019-12-16 04:32:35', '2019-12-16 04:32:35'),
(3, 'new ICT', '2019-12-17 03:48:57', '2019-12-17 03:48:57'),
(4, 'ict 2', '2019-12-17 04:31:08', '2019-12-17 04:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Engineering', '2019-12-16 04:31:39', '2019-12-16 04:31:39'),
(2, 'Housing', '2019-12-16 04:32:26', '2019-12-16 04:32:26'),
(3, 'Engineering 2', '2019-12-17 04:09:14', '2019-12-17 04:09:14'),
(4, 'engineering 3', '2019-12-17 04:30:21', '2019-12-17 04:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `designation_user`
--

CREATE TABLE `designation_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designation_user`
--

INSERT INTO `designation_user` (`id`, `user_id`, `designation_id`, `created_at`, `updated_at`) VALUES
(31, 20, 1, NULL, NULL),
(32, 20, 1, NULL, NULL),
(33, 20, 1, NULL, NULL),
(34, 20, 1, NULL, NULL),
(35, 20, 1, NULL, NULL),
(36, 20, 1, NULL, NULL),
(37, 21, 3, NULL, NULL),
(38, 21, 3, NULL, NULL),
(39, 21, 3, NULL, NULL),
(40, 21, 3, NULL, NULL),
(41, 21, 3, NULL, NULL),
(42, 21, 3, NULL, NULL),
(43, 20, 1, NULL, NULL),
(44, 20, 1, NULL, NULL),
(45, 21, 3, NULL, NULL),
(46, 20, 1, NULL, NULL),
(47, 21, 3, NULL, NULL),
(48, 22, 1, NULL, NULL),
(49, 23, 2, NULL, NULL),
(50, 21, 3, NULL, NULL),
(51, 21, 3, NULL, NULL),
(52, 21, 3, NULL, NULL),
(53, 21, 3, NULL, NULL),
(54, 21, 3, NULL, NULL),
(55, 23, 2, NULL, NULL),
(56, 23, 2, NULL, NULL),
(57, 20, 1, NULL, NULL),
(58, 20, 1, NULL, NULL),
(59, 20, 1, NULL, NULL),
(60, 24, 2, NULL, NULL),
(61, 20, 1, NULL, NULL),
(62, 22, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `document_type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_number` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_place_of_issue` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_date_of_issue` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_date_of_expiry` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_scan_file` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `document_type`, `document_number`, `document_place_of_issue`, `document_date_of_issue`, `document_date_of_expiry`, `document_scan_file`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 'cv', NULL, NULL, NULL, NULL, 'indonesia112jpg20-12-20191576859874.jpg', 20, '2019-12-20 12:37:54', '2019-12-20 12:37:54'),
(10, 'uyku', NULL, NULL, NULL, NULL, 'employee-salary-sheet-masterjpg20-12-20191576860500.JPG', 20, '2019-12-20 12:48:20', '2019-12-20 12:48:20'),
(11, 'cv', NULL, NULL, NULL, NULL, 'indonesia112jpg21-12-20191576909474.jpg', 21, '2019-12-21 02:24:34', '2019-12-21 02:24:34'),
(12, 'new file', NULL, NULL, NULL, NULL, 'salesinvoicepdf21-12-20191576919037.pdf', 20, '2019-12-21 05:03:57', '2019-12-21 05:03:57'),
(13, 'pic', NULL, NULL, NULL, NULL, '14-12-2019jpg21-12-20191576946095.jpg', 21, '2019-12-21 12:34:55', '2019-12-21 12:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(158, 'asasasa', '2019-12-10', '2019-12-10', '2019-12-25 01:45:34', '2019-12-25 01:45:34'),
(159, 'sasasa', '2019-12-11', '2019-12-11', '2019-12-25 01:45:52', '2019-12-25 01:45:52'),
(160, 'sasdsds', '2019-12-12', '2019-12-12', '2019-12-25 01:46:11', '2019-12-25 01:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(10) UNSIGNED NOT NULL,
  `holiday_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `background_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `border_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `holiday_name`, `start_date`, `end_date`, `created_at`, `updated_at`, `background_color`, `text_color`, `border_color`) VALUES
(23, 'Test', '2019-12-11', '2019-12-12', '2019-12-21 03:21:56', '2019-12-21 03:21:56', '#C0392B', '#ECF0F1', '#F1C40F'),
(24, 'Leave test', '2019-12-25', '2019-12-26', '2019-12-21 06:12:53', '2019-12-21 06:12:53', '#3498DB', '#3498DB', '#3498DB'),
(25, 'name', '2019-12-02', '2019-12-03', '2019-12-21 08:21:19', '2019-12-21 08:21:19', '#3498DB', '#3498DB', '#3498DB'),
(26, 'National Day', '2019-12-02', '2019-12-05', '2019-12-21 08:22:34', '2019-12-21 08:22:34', '#C0392B', '#ECF0F1', '#7F8C8D');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(10) UNSIGNED NOT NULL,
  `leave_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `policy_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number_of_holidays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_fridays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `leave_name`, `leave_start_date`, `leave_end_date`, `leave_status`, `leave_description`, `user_id`, `policy_id`, `created_at`, `updated_at`, `number_of_holidays`, `number_of_fridays`) VALUES
(27, NULL, NULL, NULL, 'Active', 'zazaazzaaz', 20, 2, '2019-12-28 00:33:10', '2019-12-28 00:33:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `event_name`, `message`, `read_status`, `message_from`, `start_date`, `user_id`, `created_at`, `updated_at`) VALUES
(447, 'Leave approval', 'Your Leave has been approved', 'unread', 'Admin', NULL, 20, '2019-12-28 00:33:10', '2019-12-28 00:33:10');

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
(1, '2014_10_11_000000_create_departments_table', 1),
(2, '2014_10_12_000000_create_shifts_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_12_03_072311_create_designations_table', 1),
(6, '2019_12_03_091350_create_documents_table', 1),
(7, '2019_12_03_094543_create_schedules_table', 1),
(8, '2019_12_03_105547_create_announcements_table', 1),
(9, '2019_12_04_131317_create_trix_rich_texts_table', 1),
(10, '2019_12_05_062054_create_events_table', 1),
(11, '2019_12_07_110856_create_polices_table', 1),
(12, '2019_12_07_111111_create_leaves_table', 1),
(13, '2019_12_08_081707_create_roles_table', 1),
(14, '2019_12_08_081821_create_admins_table', 1),
(15, '2019_12_08_091004_create_designation_user_table', 1),
(16, '2019_12_08_091148_create_schedule_user_table', 1),
(17, '2019_12_08_095511_create_admin_role_table', 1),
(18, '2019_12_10_065231_create_requests_table', 1),
(19, '2019_12_12_005935_create_companies_table', 1),
(20, '2019_12_12_130347_create_messages_table', 1),
(21, '2019_12_13_054938_create_countries_table', 1),
(22, '2019_12_15_063332_create_weekdays_table', 1),
(23, '2019_12_16_114941_create_leaves_table', 2),
(24, '2019_12_16_121203_create_vacations_table', 3),
(25, '2019_12_18_043620_create_holidays_table', 4),
(26, '2019_12_18_100114_create_salaries_table', 5),
(27, '2019_12_18_143509_create_deductions_table', 5),
(28, '2019_12_18_143625_create_allowances_table', 5),
(29, '2019_12_19_064048_create_setups_table', 6),
(30, '2014_10_10_000000_create_deductions_table', 7),
(31, '2019_12_19_124718_create_deductions_table', 8),
(32, '2019_12_19_124743_create_allowances_table', 8),
(33, '2019_12_19_124804_create_deduction_user_table', 8),
(34, '2019_12_19_124833_create_allowance_user_table', 8),
(35, '2019_12_21_115812_create_policy_user_table', 9),
(36, '2019_12_21_120232_create_policycounters_table', 9),
(37, '2019_12_21_125906_create_policy_user_table', 10),
(39, '2019_12_24_045307_create_table_attends', 11);

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
-- Table structure for table `polices`
--

CREATE TABLE `polices` (
  `id` int(10) UNSIGNED NOT NULL,
  `policy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polices`
--

INSERT INTO `polices` (`id`, `policy`, `duration`, `created_at`, `updated_at`) VALUES
(2, 'new testing', '5', '2019-12-17 04:12:05', '2019-12-17 04:12:05'),
(3, 'Sick', '3', '2019-12-17 07:10:58', '2019-12-17 07:10:58'),
(4, 'Annual', '30', '2019-12-20 11:14:57', '2019-12-20 11:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `policycounters`
--

CREATE TABLE `policycounters` (
  `id` int(10) UNSIGNED NOT NULL,
  `counter` int(11) NOT NULL,
  `policy_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policycounters`
--

INSERT INTO `policycounters` (`id`, `counter`, `policy_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 5, 2, 20, '2019-12-23 00:39:21', '2019-12-23 00:39:21'),
(6, 1, 3, 20, '2019-12-23 00:45:13', '2019-12-23 00:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `policy_user`
--

CREATE TABLE `policy_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `counter` int(11) NOT NULL,
  `policy_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policy_user`
--

INSERT INTO `policy_user` (`id`, `counter`, `policy_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 30, 4, 20, NULL, NULL),
(2, 3, 3, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `request_start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof_document` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `policy_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `request_start_date`, `request_end_date`, `description`, `read_status`, `proof_document`, `leave_status`, `user_id`, `policy_id`, `created_at`, `updated_at`) VALUES
(34, '23-12-2019', '25-12-2019', 'ttt', 'read', NULL, 'pending', 20, 3, '2019-12-23 00:45:13', '2019-12-23 00:46:26'),
(35, '29-12-2019', '29-12-2019', 'qqqqqqqq', 'Unread', NULL, 'pending', 20, 3, '2019-12-28 00:42:09', '2019-12-28 00:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_description`, `created_at`, `updated_at`) VALUES
(1, 'admin', ' Senior Adminstrator ', '2019-12-16 04:24:13', '2019-12-16 04:24:13'),
(2, 'human resource', 'Senior manager User', '2019-12-16 04:24:13', '2019-12-16 04:24:13'),
(3, 'supervisor', 'General Supervisor User', '2019-12-16 04:24:13', '2019-12-16 04:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `basic_salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `schedule_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_user`
--

CREATE TABLE `schedule_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `schedule_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setups`
--

CREATE TABLE `setups` (
  `id` int(10) UNSIGNED NOT NULL,
  `passport` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residence_visa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_permit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emirates_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_card` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driving_licence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `withdrawing_passport` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicles_ownership` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `miscellaneous_documents` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trade_licence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_insurance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_visa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setups`
--

INSERT INTO `setups` (`id`, `passport`, `residence_visa`, `work_permit`, `emirates_id`, `medical_card`, `driving_licence`, `withdrawing_passport`, `vehicles_ownership`, `miscellaneous_documents`, `trade_licence`, `vehicle_insurance`, `visit_visa`, `created_at`, `updated_at`) VALUES
(1, '10', '20', '0', '20', '12', '10', '1', '10', '5', '20', '10', '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` int(10) UNSIGNED NOT NULL,
  `shift_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_half_start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_half_end_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_half_start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_half_end_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `break_start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `break_end_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_end_time` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_start_time` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`id`, `shift_name`, `first_half_start_time`, `first_half_end_time`, `second_half_start_time`, `second_half_end_time`, `break_start_time`, `shift_type`, `break_end_time`, `shift_end_time`, `shift_color`, `shift_start_time`, `created_at`, `updated_at`) VALUES
(22, 'dont Delete', '00:55', '23:55', '13:10', '23:05', NULL, 'split_shift', NULL, '23:05', '#8E44AD', '00:55', '2019-12-20 10:19:30', '2019-12-26 09:11:38'),
(23, 'green full', '09:00', '00.00', '00.00', '06:30', NULL, 'full_shift', NULL, '06:30', '#2980B9', '09:00', '2019-12-20 10:20:06', '2019-12-26 09:11:28'),
(24, 'green split', '08:00', '12:00', '02:00', '08:00', NULL, 'split_shift', NULL, '08:00', '#E74C3C', '08:00', '2019-12-20 10:20:55', '2019-12-26 09:11:12'),
(25, 'www', '09:00', '12:00', '02:00', '09:00', NULL, 'split_shift', NULL, '09:00', '#E67E22', '09:00', '2019-12-21 08:21:47', '2019-12-26 09:11:02'),
(26, 'wwwww', '10:00', '00.00', '00.00', '10:00', NULL, 'full_shift', NULL, '10:00', '#2C3E50', '10:00', '2019-12-21 08:22:11', '2019-12-26 09:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `time_limits`
--

CREATE TABLE `time_limits` (
  `area` varchar(191) DEFAULT NULL,
  `time` time(6) DEFAULT NULL,
  `allowance` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_limits`
--

INSERT INTO `time_limits` (`area`, `time`, `allowance`) VALUES
('shift', '10:00:00.000000', '00:10:00'),
('department', '08:00:00.000000', '00:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `trix_attachments`
--

CREATE TABLE `trix_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_id` int(10) UNSIGNED DEFAULT NULL,
  `attachable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pending` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trix_rich_texts`
--

CREATE TABLE `trix_rich_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_d_c` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internal_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internal_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `external_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_issue_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_scan_file` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_possession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_issue_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_card_issue_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_card_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_card_expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emirates_id_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emirates_id_issue_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emirates_id_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emirates_id_card_expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_card_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_card_issue_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_card_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_card_expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driving_licence_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driving_licence_issue_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driving_licence_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driving_licence_expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_permit_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_permit_issue_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_permit_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_permit_expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_card_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `shift_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_number`, `username`, `social_status`, `a_d_c`, `employee_status`, `first_name`, `last_name`, `mobile_number`, `date_of_birth`, `education_status`, `bank_account`, `internal_address`, `external_address`, `email`, `designation`, `start_date`, `contract_period`, `internal_experience`, `external_experience`, `nationality`, `password`, `gender`, `profile_photo`, `passport_number`, `passport_issue_place`, `passport_issue_date`, `passport_expiry_date`, `passport_scan_file`, `passport_possession`, `visa_type`, `visa_number`, `visa_issue_place`, `visa_issue_date`, `visa_expiry_date`, `personal_code`, `labour_card_issue_place`, `labour_card_issue_date`, `labour_card_expiry_date`, `emirates_id_number`, `emirates_id_issue_place`, `emirates_id_issue_date`, `emirates_id_card_expiry_date`, `medical_card_number`, `medical_card_issue_place`, `medical_card_issue_date`, `medical_card_expiry_date`, `driving_licence_number`, `driving_licence_issue_place`, `driving_licence_issue_date`, `driving_licence_expiry_date`, `work_permit_number`, `work_permit_issue_place`, `work_permit_issue_date`, `work_permit_expiry_date`, `labour_card_number`, `department_id`, `shift_id`, `remember_token`, `created_at`, `updated_at`, `salary`) VALUES
(20, '987987', 'jimaika', '777', '999', 'active', 'jimaika', 'mohamoha', '05522321564', '10-12-2001', '101010', '888', '2222', '3333', '4444mohamed@ymail.com', '1', '01-12-2019', '555', '666', '1111', 'egypt', '$2y$10$diwkSVQPSyzZLRUle5HB9u2wzQdYr/AoFOz95ZxLb2Ciou5z0BhdO', 'Gender', 'download424565jpg28-12-20191577507701.jpg', '1111', 'a', '01-12-2019', '02-12-2019', 'none', 'Company', 'sponsor', '22222', 'b', '03-12-2019', '04-12-2019', '88888888888', 'c', '05-12-2019', '06-12-2019', '444444444', 'd', '07-12-2019', '08-12-2019', '5555555', 'e', '09-12-2019', '10-12-2019', '66666666666', 'f', '11-12-2019', '12-12-2019', '777777777777777', 'g', '13-12-2019', '14-12-2019', '333333333', 1, 22, 'Nh606KbjrKVExDECxUBNgIKTFmowWl8ZeOCWYB4fUuOcDRM8llYsZrKed7z9', '2019-12-20 12:37:29', '2019-12-28 00:35:01', NULL),
(21, '8', 'employee', '999', '555', 'active', 'employee', 'dodo', '05522987456', '09-12-1985', '444', '777', '222', '333', 'jamika@yahoo.com', '3', NULL, '666', '888', '111', 'Comoros', '$2y$10$Wc5YTgaBi7xQBfxSsGJ0a.cVesuNBX6.3GXoaJt.4ueoRxg6XKrdS', 'Gender', 's-010fathima-rabiya-mohamed-lariff-picturesjpg21-12-20191576909461.jpg', '121212', 'q', '01-12-2020', '02-12-2020', 'none', 'male', 'Visa select', '232323', 'w', '03-12-2020', '04-12-2020', '898989', 'e', '05-12-2020', '06-12-2020', '454545', 'r', '07-12-2020', '08-12-2020', '565656', 't', '09-12-2020', '10-12-2020', '676767', 'y', '11-12-2020', '12-12-2020', '787878', 'u', '13-12-2020', '14-12-2020', '343434', 2, 24, 'RRLPqlMYmVmaNE99kyDvdA3AYDtV3JfHGbkg8cunGiZEqitjEDWnKFQ3n2qr', '2019-12-21 02:24:21', '2019-12-26 03:49:19', NULL),
(22, '2', 'John', 'social', 'adc', 'active', 'John', 'Doe', '24254', '25-12-2019', 'high school', '2555', '1', '2', 'johndoe@john.com', '1', '25-10-2018', '2', '2', '4', 'Aruba', '$2y$10$RGBYMNxqevWH9abiuFiZDOAJ6HfTMdhOtWjiYn.hmZlTtWRI2GR9u', 'Gender', 'fulljpeg25-12-20191577257970.jpeg', NULL, NULL, NULL, NULL, 'none', 'Passport possession', 'Visa select', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 23, NULL, '2019-12-25 03:12:50', '2019-12-28 02:29:12', NULL),
(23, '6', 'Jane', 'lorem', 'ipsum', 'active', 'Jane', 'doe', '2514', '25-12-2019', 'me', '1524', '1', '251', 'janedoe@jane.com', '2', '25-12-2019', '2', '2', '1', 'Cambodia', '$2y$10$sqiZhl2ZWotO/XFxPQna6uo.QsyObpleDI7QDXqf/7jagaoV2/8R6', 'Gender', 'com-logojpg25-12-20191577258109.jpg', NULL, NULL, NULL, NULL, 'none', 'Passport possession', 'Visa select', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 22, NULL, '2019-12-25 03:15:09', '2019-12-27 08:02:12', NULL),
(24, '881', 'mona', 'ajman', 'new ADC', 'active', 'mona', 'wagih', '0097155223654', '14-12-1986', 'high school', 'no bank', 'Dubai 3', 'egypt', 'admin@yahoo.com', '2', '05-11-2018', '2', '3', '6', 'Egypt', '$2y$10$MLUi/uWT.dvUGyP0m6iQQuCiqINpUikguc/7Vs/1jTj/cTXVL1OKe', 'female', 'half23545jpg27-12-20191577462543.jpg', NULL, NULL, NULL, NULL, 'none', 'Passport possession', 'Visa select', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 24, NULL, '2019-12-27 12:02:23', '2019-12-27 12:02:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vacations`
--

CREATE TABLE `vacations` (
  `id` int(10) UNSIGNED NOT NULL,
  `vacation_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacation_start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacation_end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacation_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacation_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `policy_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weekdays`
--

CREATE TABLE `weekdays` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_role_id_foreign` (`role_id`),
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allowance_user`
--
ALTER TABLE `allowance_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `allowance_user_user_id_foreign` (`user_id`),
  ADD KEY `allowance_user_allowance_id_foreign` (`allowance_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deduction_user`
--
ALTER TABLE `deduction_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deduction_user_deduction_id_foreign` (`deduction_id`),
  ADD KEY `deduction_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_user`
--
ALTER TABLE `designation_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designation_user_user_id_foreign` (`user_id`),
  ADD KEY `designation_user_designation_id_foreign` (`designation_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_user_id_foreign` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leaves_user_id_foreign` (`user_id`),
  ADD KEY `leaves_policy_id_foreign` (`policy_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

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
-- Indexes for table `polices`
--
ALTER TABLE `polices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policycounters`
--
ALTER TABLE `policycounters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `policycounters_user_id_foreign` (`user_id`);

--
-- Indexes for table `policy_user`
--
ALTER TABLE `policy_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `policy_user_user_id_foreign` (`user_id`),
  ADD KEY `policy_user_policy_id_foreign` (`policy_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_user_id_foreign` (`user_id`),
  ADD KEY `requests_policy_id_foreign` (`policy_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_user`
--
ALTER TABLE `schedule_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_user_user_id_foreign` (`user_id`),
  ADD KEY `schedule_user_schedule_id_foreign` (`schedule_id`);

--
-- Indexes for table `setups`
--
ALTER TABLE `setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trix_attachments`
--
ALTER TABLE `trix_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trix_rich_texts_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_employee_number_unique` (`employee_number`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_department_id_foreign` (`department_id`),
  ADD KEY `users_shift_id_foreign` (`shift_id`);

--
-- Indexes for table `vacations`
--
ALTER TABLE `vacations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacations_user_id_foreign` (`user_id`),
  ADD KEY `vacations_policy_id_foreign` (`policy_id`);

--
-- Indexes for table `weekdays`
--
ALTER TABLE `weekdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `allowances`
--
ALTER TABLE `allowances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `allowance_user`
--
ALTER TABLE `allowance_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attends`
--
ALTER TABLE `attends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=899;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deduction_user`
--
ALTER TABLE `deduction_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designation_user`
--
ALTER TABLE `designation_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=448;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `polices`
--
ALTER TABLE `polices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `policycounters`
--
ALTER TABLE `policycounters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `policy_user`
--
ALTER TABLE `policy_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_user`
--
ALTER TABLE `schedule_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setups`
--
ALTER TABLE `setups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `trix_attachments`
--
ALTER TABLE `trix_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vacations`
--
ALTER TABLE `vacations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weekdays`
--
ALTER TABLE `weekdays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `allowance_user`
--
ALTER TABLE `allowance_user`
  ADD CONSTRAINT `allowance_user_allowance_id_foreign` FOREIGN KEY (`allowance_id`) REFERENCES `allowances` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `allowance_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deduction_user`
--
ALTER TABLE `deduction_user`
  ADD CONSTRAINT `deduction_user_deduction_id_foreign` FOREIGN KEY (`deduction_id`) REFERENCES `deductions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deduction_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `designation_user`
--
ALTER TABLE `designation_user`
  ADD CONSTRAINT `designation_user_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `designation_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_policy_id_foreign` FOREIGN KEY (`policy_id`) REFERENCES `polices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leaves_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `policycounters`
--
ALTER TABLE `policycounters`
  ADD CONSTRAINT `policycounters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `policy_user`
--
ALTER TABLE `policy_user`
  ADD CONSTRAINT `policy_user_policy_id_foreign` FOREIGN KEY (`policy_id`) REFERENCES `polices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `policy_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_policy_id_foreign` FOREIGN KEY (`policy_id`) REFERENCES `polices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule_user`
--
ALTER TABLE `schedule_user`
  ADD CONSTRAINT `schedule_user_schedule_id_foreign` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vacations`
--
ALTER TABLE `vacations`
  ADD CONSTRAINT `vacations_policy_id_foreign` FOREIGN KEY (`policy_id`) REFERENCES `polices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vacations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
