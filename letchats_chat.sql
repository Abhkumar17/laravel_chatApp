-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2022 at 08:58 AM
-- Server version: 10.2.44-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letchats_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_typing` tinyint(1) NOT NULL DEFAULT 0,
  `agent_typing` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `temp_seesion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_tem` enum('T','A') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `customer_id`, `agent_id`, `customer_typing`, `agent_typing`, `created_at`, `updated_at`, `temp_seesion`, `check_tem`) VALUES
(1, '176225', '982768', 0, 0, '2022-11-04 10:24:56', '2022-11-10 06:58:51', '834440', 'A'),
(2, '249650', '145433', 0, 0, '2022-11-05 09:20:17', '2022-11-05 09:21:32', '449159', 'A'),
(3, '573717', '107405', 0, 0, '2022-11-05 10:27:43', '2022-11-05 10:27:43', '107405', 'T'),
(4, '456842', '629356', 0, 0, '2022-11-07 08:31:36', '2022-11-07 08:34:03', '774044', 'A'),
(5, '191011', '453622', 0, 0, '2022-11-07 08:33:44', '2022-11-07 09:05:08', '497522', 'A'),
(6, '643680', '791752', 0, 0, '2022-11-07 08:56:59', '2022-11-07 08:56:59', '791752', 'T'),
(7, '679153', '837897', 0, 0, '2022-11-07 12:11:34', '2022-11-07 12:25:07', '397191', 'A'),
(8, '252140', '837897', 0, 0, '2022-11-07 12:22:27', '2022-11-07 12:26:19', '614140', 'A'),
(9, '361439', '982768', 0, 0, '2022-11-07 12:32:57', '2022-11-07 12:33:12', '102155', 'A'),
(10, '590457', '768012', 0, 0, '2022-11-07 12:50:56', '2022-11-07 12:51:41', '577446', 'A'),
(11, '407370', '352866', 1, 0, '2022-11-07 12:58:28', '2022-11-07 13:49:04', '105481', 'A'),
(12, '106924', '768012', 0, 0, '2022-11-07 13:00:13', '2022-11-07 13:22:04', '228700', 'A'),
(13, '429541', '768012', 0, 0, '2022-11-07 13:15:39', '2022-11-07 13:22:05', '134701', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ext` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `text_type` enum('A','C') COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admn_seen` int(11) NOT NULL DEFAULT 0,
  `status` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `sender_id`, `receive_id`, `sender_username`, `message`, `read`, `file`, `ext`, `notification_admin`, `agent_img`, `created_at`, `updated_at`, `text_type`, `color`, `admn_seen`, `status`) VALUES
(1, '176225', '982768', 'Sunil', 'hi', 1, NULL, NULL, NULL, NULL, '2022-11-04 10:25:01', '2022-11-10 06:58:51', 'C', '#9400D3', 0, 1),
(2, '982768', '176225', 'adam', 'hiiii sir', 1, NULL, NULL, NULL, '20201204165631_customer-support.png', '2022-11-04 10:25:22', '2022-11-10 06:58:51', 'A', '', 0, 1),
(3, '176225', '982768', 'Sunil', 'yuytiytiyti', 1, NULL, NULL, NULL, NULL, '2022-11-04 10:25:27', '2022-11-10 06:58:51', 'C', '#9400D3', 0, 1),
(4, '176225', '982768', 'Sunil', 'grgrdgrfdgdf', 1, NULL, NULL, NULL, NULL, '2022-11-04 10:26:02', '2022-11-10 06:58:51', 'C', '#9400D3', 0, 1),
(5, '176225', '982768', 'Sunil', NULL, 1, '20221104155618.jpg', 'jpg', NULL, NULL, '2022-11-04 10:26:18', '2022-11-10 06:58:51', 'C', '#9400D3', 0, 1),
(6, '982768', '176225', 'adam', NULL, 1, '20221104155634.png', 'png', NULL, '20201204165631_customer-support.png', '2022-11-04 10:26:34', '2022-11-10 06:58:51', 'A', NULL, 0, 1),
(7, '982768', '176225', 'adam', NULL, 1, '20221104155919.jpg', 'jpg', NULL, '20201204165631_customer-support.png', '2022-11-04 10:29:19', '2022-11-10 06:58:51', 'A', NULL, 0, 1),
(8, '176225', '982768', 'Sunil', NULL, 1, '20221104160013.jpg', 'jpg', NULL, NULL, '2022-11-04 10:30:13', '2022-11-10 06:58:51', 'C', '#9400D3', 0, 1),
(9, '176225', '982768', 'Sunil', NULL, 1, '20221104160025.jpg', 'jpg', NULL, NULL, '2022-11-04 10:30:25', '2022-11-10 06:58:51', 'C', '#9400D3', 0, 1),
(10, '249650', '145433', 'Aakash verma', 'hello', 1, NULL, NULL, NULL, NULL, '2022-11-05 09:20:28', '2022-11-05 09:21:57', 'C', '#8B0000', 0, 1),
(11, '249650', '145433', 'Aakash verma', 'logout', 1, NULL, NULL, NULL, NULL, '2022-11-05 09:21:54', '2022-11-05 09:21:57', 'C', '#8B0000', 0, 0),
(12, '573717', '107405', 'krishna yadav', 'logout', 0, NULL, NULL, NULL, NULL, '2022-11-05 10:28:21', '2022-11-05 10:28:21', 'C', '#2F4F4F', 0, 0),
(13, '456842', '629356', 'Rahul', 'hii', 1, NULL, NULL, NULL, NULL, '2022-11-07 08:31:46', '2022-11-07 08:34:07', 'C', '#ff00ff', 0, 1),
(14, '456842', '629356', 'Rahul', 'hi', 1, NULL, NULL, NULL, NULL, '2022-11-07 08:34:02', '2022-11-07 08:34:07', 'C', '#ff00ff', 0, 0),
(15, '453622', '191011', 'Reema', 'hello', 1, NULL, NULL, NULL, '20221107133931_Voda Evi.PNG', '2022-11-07 08:35:16', '2022-11-07 12:28:21', 'A', NULL, 1, 1),
(16, '191011', '453622', 'Rajeev', 'logout', 1, NULL, NULL, NULL, NULL, '2022-11-07 08:55:36', '2022-11-07 12:28:21', 'C', '#ff00ff', 1, 0),
(17, '453622', '191011', 'Reema', 'hi', 1, NULL, NULL, NULL, '20221107133931_Voda Evi.PNG', '2022-11-07 08:57:13', '2022-11-07 12:28:21', 'A', NULL, 1, 1),
(18, '643680', '791752', 'Rajeev', 'logout', 1, NULL, NULL, NULL, NULL, '2022-11-07 09:05:00', '2022-11-07 12:28:18', 'C', '#ff00ff', 1, 0),
(19, '453622', '191011', 'Reema', 'hi', 1, NULL, NULL, NULL, '20221107133931_Voda Evi.PNG', '2022-11-07 09:05:08', '2022-11-07 12:28:21', 'A', NULL, 1, 1),
(20, '643680', '791752', 'Rajeev', 'logout', 1, NULL, NULL, NULL, NULL, '2022-11-07 09:06:13', '2022-11-07 12:28:18', 'C', '#ff00ff', 1, 0),
(21, '679153', '837897', 'Reema', 'hello', 1, NULL, NULL, NULL, NULL, '2022-11-07 12:11:41', '2022-11-07 12:34:53', 'C', '#ff00ff', 1, 1),
(22, '837897', '679153', 'Rajeev', 'hello\\', 1, NULL, NULL, NULL, '20221107134707_Voda Evi.PNG', '2022-11-07 12:16:43', '2022-11-07 12:34:53', 'A', NULL, 1, 1),
(23, '837897', '679153', 'Rajeev', 'hello', 1, NULL, NULL, NULL, '20221107134707_Voda Evi.PNG', '2022-11-07 12:21:11', '2022-11-07 12:34:53', 'A', NULL, 1, 1),
(24, '453622', '252140', 'Reema', 'hello sir', 0, NULL, NULL, NULL, '20221107133931_Voda Evi.PNG', '2022-11-07 12:23:11', '2022-11-07 12:28:21', 'A', NULL, 0, 1),
(25, '453622', '252140', 'Reema', 'meri mail id me mails ki', 0, NULL, NULL, NULL, '20221107133931_Voda Evi.PNG', '2022-11-07 12:23:21', '2022-11-07 12:28:21', 'A', NULL, 0, 1),
(26, '453622', '252140', 'Reema', 'setting kar do\'', 0, NULL, NULL, NULL, '20221107133931_Voda Evi.PNG', '2022-11-07 12:23:24', '2022-11-07 12:28:21', 'A', NULL, 0, 1),
(27, '453622', '252140', 'Reema', 'unity ka folder alaga kar do', 0, NULL, NULL, NULL, '20221107133931_Voda Evi.PNG', '2022-11-07 12:23:35', '2022-11-07 12:28:21', 'A', NULL, 0, 1),
(28, '837897', '679153', 'Rajeev', 'Thanks You', 1, NULL, NULL, NULL, '20221107134707_Voda Evi.PNG', '2022-11-07 12:25:49', '2022-11-07 12:34:53', 'A', NULL, 1, 1),
(29, '252140', '837897', 'Rajeev', 'hello', 1, NULL, NULL, NULL, NULL, '2022-11-07 12:26:20', '2022-11-07 12:28:12', 'C', '#ff00ff', 1, 0),
(30, '453622', '252140', 'Reema', 'SIR KOI MSG NHI AAYA ABHI', 0, NULL, NULL, NULL, '20221107133931_Voda Evi.PNG', '2022-11-07 12:27:19', '2022-11-07 12:28:21', 'A', NULL, 0, 1),
(31, '361439', '982768', 'Rajeev', 'hhi', 1, NULL, NULL, NULL, NULL, '2022-11-07 12:33:04', '2022-11-07 12:36:02', 'C', '#ff00ff', 0, 1),
(32, '361439', '982768', 'Rajeev', 'logout', 0, NULL, NULL, NULL, NULL, '2022-11-07 12:40:45', '2022-11-07 12:40:45', 'C', '#ff00ff', 0, 0),
(33, '590457', '768012', 'Reema', 'hello', 1, NULL, NULL, NULL, NULL, '2022-11-07 12:51:02', '2022-11-07 12:55:48', 'C', '#ff00ff', 0, 1),
(34, '590457', '768012', 'Reema', 'logout', 1, NULL, NULL, NULL, NULL, '2022-11-07 12:55:45', '2022-11-07 12:55:48', 'C', '#ff00ff', 0, 0),
(35, '352866', '407370', 'Reema', 'hello', 1, NULL, NULL, NULL, '20221107182659_Bhandara Rashan.txt', '2022-11-07 12:58:40', '2022-11-07 12:58:43', 'A', NULL, 0, 0),
(36, '352866', '407370', 'Reema', 'sir', 1, NULL, NULL, NULL, '20221107182659_Bhandara Rashan.txt', '2022-11-07 12:58:41', '2022-11-07 12:58:43', 'A', NULL, 0, 0),
(37, '768012', '106924', 'Rajeev', 'hello', 1, NULL, NULL, NULL, '20221107180834_Bhandara Rashan.txt', '2022-11-07 13:00:28', '2022-11-07 13:22:04', 'A', NULL, 0, 1),
(38, '768012', '106924', 'Rajeev', NULL, 1, '20221107183045.xls', 'xls', NULL, '20221107180834_Bhandara Rashan.txt', '2022-11-07 13:00:45', '2022-11-07 13:22:04', 'A', NULL, 0, 1),
(39, '768012', '106924', 'Rajeev', NULL, 1, '20221107183105.txt', 'txt', NULL, '20221107180834_Bhandara Rashan.txt', '2022-11-07 13:01:05', '2022-11-07 13:22:04', 'A', NULL, 0, 1),
(40, '768012', '106924', 'Rajeev', NULL, 1, '20221107183117.xls', 'xls', NULL, '20221107180834_Bhandara Rashan.txt', '2022-11-07 13:01:17', '2022-11-07 13:22:04', 'A', NULL, 0, 1),
(41, '429541', '768012', 'Abhishek', 'hello', 1, NULL, NULL, NULL, NULL, '2022-11-07 13:15:46', '2022-11-07 13:22:05', 'C', '#8B0000', 0, 1),
(42, '429541', '768012', 'Abhishek', 'Ram', 1, NULL, NULL, NULL, NULL, '2022-11-07 13:16:06', '2022-11-07 13:22:05', 'C', '#8B0000', 0, 1),
(43, '768012', '429541', 'Rajeev', 'hello', 1, NULL, NULL, NULL, '20221107180834_Bhandara Rashan.txt', '2022-11-07 13:17:00', '2022-11-07 13:22:05', 'A', NULL, 0, 0),
(44, '768012', '429541', 'Rajeev', NULL, 1, '20221107184741.docx', 'docx', NULL, '20221107180834_Bhandara Rashan.txt', '2022-11-07 13:17:41', '2022-11-07 13:22:05', 'A', NULL, 0, 0),
(45, '429541', '768012', NULL, NULL, 1, '20221107184755.pdf', 'pdf', NULL, NULL, '2022-11-07 13:17:55', '2022-11-07 13:22:05', 'C', '#8B0000', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `color_code`
--

CREATE TABLE `color_code` (
  `id` int(11) NOT NULL,
  `alfa_name` varchar(250) NOT NULL,
  `alfa_color` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_code`
--

INSERT INTO `color_code` (`id`, `alfa_name`, `alfa_color`) VALUES
(2, 'A', '#8B0000'),
(3, 'B', '#FF0000'),
(4, 'C', '#B22222'),
(5, 'D', '#228B22'),
(6, 'E', '#8B4513'),
(7, 'F', '#D2691E'),
(8, 'G', '#006400'),
(9, 'H', '#DAA520'),
(10, 'I', '#008080'),
(11, 'J', '#BC8F8F'),
(12, 'K', '#2F4F4F'),
(13, 'L', '#696969'),
(14, 'M', '#C71585'),
(15, 'N', '#FF1493'),
(16, 'O', '#4B0082'),
(17, 'P', '#800080'),
(18, 'Q', '#8B008B'),
(19, 'R', '#ff00ff'),
(20, 'S', '#9400D3'),
(21, 'T', '#8A2BE2'),
(22, 'U', '#556B2F'),
(23, 'V', '#008B8B'),
(24, 'W', '#4c004c'),
(25, 'X', '#696969'),
(26, 'Y', '#FF00FF'),
(27, 'Z', '#BA55D3');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, '2014_10_18_183830_create_chats_table', 1),
(4, '2014_10_18_183949_create_chat_messages_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notificationadmin`
--

CREATE TABLE `notificationadmin` (
  `id` int(11) NOT NULL,
  `adminid` varchar(255) NOT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `receive_id` varchar(255) DEFAULT NULL,
  `suggestion` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_request` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `query` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countrycode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regioncode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regionname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isocode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metrocode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areacode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wel_msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_page_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_seesion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busy` int(11) NOT NULL DEFAULT 0,
  `ticket_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `cust_agent_logout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Isactive` bigint(20) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 0,
  `last_msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobileno`, `email`, `password`, `remember_token`, `type`, `type_request`, `query`, `image`, `ip_address`, `countrycode`, `regioncode`, `regionname`, `zipcode`, `isocode`, `postalcode`, `latitude`, `longitude`, `metrocode`, `areacode`, `driver`, `city`, `country`, `created_at`, `updated_at`, `color`, `company_logo`, `company_name`, `header`, `wel_msg`, `chat_page_url`, `meta_title`, `meta_desc`, `session_id`, `temp_seesion`, `busy`, `ticket_number`, `login_status`, `cust_agent_logout`, `Isactive`, `status`, `last_msg`) VALUES
(1, 'adam', '454464646464', 'agent@gmail.com', '$2y$10$lQBY9TdMzjGqw3S9e1nmNOUYsXm.TOMVjenbN5zH2lkuOUWWg3lX.', 'MbIBy5QIDwLtoqkoeJiJjTBS5Nj04rkSUehQpuI1OZabLs4j7rOtozhnwdyZ', 'agent', NULL, NULL, '20201204165631_customer-support.png', '122.176.38.177', 'IN', 'UP', 'Uttar Pradesh', '110091', NULL, NULL, '28.58', '77.33', NULL, 'UP', 'Stevebauman\\Location\\Drivers\\IpApi', 'Noida', 'India', '2022-11-04 10:25:22', '2022-11-10 07:03:47', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '982768', NULL, 0, NULL, '0', NULL, 0, 0, 'hiiii sir'),
(8, 'admin', '9235082103', 'admin@gmail.com', '$2y$10$rjl0F1NTk9KznlVkNSoaDO3u2n/.EKljOKu/rV2V6BqgcWbgX567W', 'Hz23dcnNCAHF2Qhk6Taorp2uHZbQKEOaBxlMJL2UqhICUV5DaKd08ARReAO5', 'admin', NULL, NULL, '202101251343338.jpg', '122.176.38.177', 'IN', 'UP', 'Uttar Pradesh', '110091', NULL, NULL, '28.58', '77.33', NULL, 'UP', 'Stevebauman\\Location\\Drivers\\IpApi', 'Noida', 'India', '2020-11-02 23:12:17', '2022-11-09 06:58:50', '', NULL, 'Vsoft', 'customer suppurt', 'welcome to Vsoft....', 'http//:45.115.62.131/chat_update/vsoft', 'Vsoft', 'VsoftVsoftVsoftVsoft', '876986', NULL, 0, NULL, '1', NULL, 0, 0, NULL),
(81, 'Sunil', '7275342524', 'sunil@vert-age.com', '$2y$10$iI.k5fgrlAlncsK0fe0rEO/maHN13VhsiYFTOCbGT4fBN1Pwidhnm', 'KT5dMmMeWnUw4eAO9ks1MSfxBXtFEn28JEEk2lep', 'customer', 'Enquiry', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-04 10:26:02', '2022-11-04 10:26:02', '#9400D3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '176225', '834440', 0, NULL, '1', NULL, 1, 0, 'grgrdgrfdgdf'),
(84, 'Aakash verma', '6395079456', 'akashverma@vert-age.com', '$2y$10$gh.J3QpWwx9TqwwExbWXCOVF.QRNybupVCqd5ltBh/fsI3FSlBp8q', 'VY5DTSgeLpuPLJKZAm5Uvb2SgPMeT85GmK07De3i', 'customer', 'Enquiry', 'Need enquiry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:21:54', '2022-11-05 09:21:54', '#8B0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '249650', '449159', 0, NULL, '1', 'logout', 0, 0, 'logout'),
(85, 'krishna yadav', '9667692103', 'krishna.yadav9599@gmail.com', '$2y$10$5nnEwvYaEYU57tbJafA8jeYFTJtW6st0hagmEIrlEhKnQ7XJnolFm', '6B7XIpsN2K8QbNixtQyJf7MLifkDogW1LsUtnyUl', 'customer', 'Enquiry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 10:28:20', '2022-11-05 10:28:21', '#2F4F4F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '573717', '107405', 0, NULL, '1', 'logout', 0, 0, 'logout'),
(89, 'Rahul', '1234567890', 'rahul@gmail.com', '$2y$10$BhBbAoB9s9TLwanO6tPyWuNqnTvSFWtjveuwLDywx.05qPhJbe95y', '3MtVcHt4n7kPtVc6HPbMaTazqlKZO0p8lmyVz60K', 'customer', 'Enquiry', 'In need enquiry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 08:34:02', '2022-11-07 08:34:02', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '456842', '774044', 0, NULL, '1', NULL, 1, 0, 'hi'),
(92, 'Reema', '9311830320', 'reema@brightoindia.in', '$2y$10$N30yRx/wVZRzQwr2RbQvfOujMbDGuTbvEQBWZjHtbTxst/nGHcMSe', 'JSp0tT6aW8P0WKarr4v7P96dPyxrO3duXO5T3P0g', 'customer', 'Enquiry', 'Need Support', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 12:11:41', '2022-11-07 12:25:49', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '679153', '397191', 0, NULL, '1', NULL, 0, 0, 'hello'),
(94, 'Rajeev', '9555476732', 'rajeev@brightoindia.in', '$2y$10$GdrmApl43iSDKI4PRDUu8.TzooXR2rSTcCQMDmDlpcKRdSlY/YPua', 'S5hWs7Zc24BFm16oaCLHDVfIahHxkozC32s1UfkR', 'customer', 'Enquiry', 'need support', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 12:40:45', '2022-11-07 12:40:45', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '361439', '102155', 0, NULL, '1', 'logout', 0, 0, 'logout'),
(95, 'Rajeev', '9555476732', 'rajeev@brightoindia.in', '$2y$10$MLVIEX.Y8Nr4u61uubrl5OZTceNDc9/yD32hnLamuQ2yWBfENdiky', 'yCUgUpeS8JCCRundZf37yOS7Elfg9Q1lo2k7ADLTVruuDHYVuWamdcbsMc0v', 'agent', NULL, NULL, '20221107180834_Bhandara Rashan.txt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 13:16:59', '2022-11-07 13:22:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '768012', NULL, 0, NULL, '1', NULL, 0, 0, 'hello'),
(97, 'Reema', '9311830320', 'reema@brightoindia.in', '$2y$10$X2qGE07YT8kVhZYOKIS9CerHcZpk5f2pyPyFj2nnbZiXIX2YhUjUW', 'tJVJCTSIk8y1h4iGa12v0LlcKgZPWVfFfsU5Foxz', 'customer', 'Enquiry', 'supprt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 12:55:45', '2022-11-07 12:55:45', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '590457', '577446', 0, NULL, '1', 'logout', 0, 0, 'logout'),
(98, 'Reema', '524654123', 'reema@brightoindia.in', '$2y$10$zXVEHCoLo3yzE/QCA0OuZuN62DlSbAPu7zX0GbW/uSpwq0RAoEnxi', 'mAjWHAk4wAZnTkpLBEvbmR2W4PWwVliKTPupWHWE', 'agent', NULL, NULL, '20221107182659_Bhandara Rashan.txt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 12:58:41', '2022-11-07 12:58:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '352866', NULL, 0, NULL, '1', NULL, 1, 0, 'sir'),
(99, 'Rajeev', '9555476732', 'rajeev@brightoindia.in', '$2y$10$dwPr5NnvnaC5n1cjQXrzhuLQIoSeEZEW36jFdVWn3655k7xpdkTfq', 'tJVJCTSIk8y1h4iGa12v0LlcKgZPWVfFfsU5Foxz', 'customer', 'Enquiry', 'i need support', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 12:58:28', '2022-11-07 12:58:28', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '407370', '105481', 0, NULL, '1', NULL, 1, 0, NULL),
(100, 'Reema', '256458682`', 'reema@brightoindia.in', '$2y$10$eyv.5JsFOyMqAGClVZwFWufgfHSFhBzWvHHm0oe9WKbFt7DEbUJAG', '7T6dbxd8Pjq5gNNv4xHd84LrlirXpiTDubjnqqdl', 'customer', 'Enquiry', '214', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 13:00:13', '2022-11-07 13:00:13', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '106924', '228700', 0, NULL, '1', NULL, 1, 0, NULL),
(101, 'Abhishek', '954254525', 'abhishek@brightoindia.in', '$2y$10$mORkUsZiTYzjcjDojqadpeQwGp1uy6xJsjb3zEKz/CcLCRcbp.3vG', 'WUdEqlT22mpqAo0BYY1z1gZ0QvwcLjPzv2zEhneU', 'customer', 'Enquiry', 'hfgfgh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 13:16:06', '2022-11-07 13:16:06', '#8B0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429541', '134701', 0, NULL, '1', NULL, 1, 0, 'Ram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_code`
--
ALTER TABLE `color_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificationadmin`
--
ALTER TABLE `notificationadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `color_code`
--
ALTER TABLE `color_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notificationadmin`
--
ALTER TABLE `notificationadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
