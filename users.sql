-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2022 at 12:07 PM
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
(1, 'adam', '454464646464', 'agent@gmail.com', '$2y$10$lQBY9TdMzjGqw3S9e1nmNOUYsXm.TOMVjenbN5zH2lkuOUWWg3lX.', 'MbIBy5QIDwLtoqkoeJiJjTBS5Nj04rkSUehQpuI1OZabLs4j7rOtozhnwdyZ', 'agent', NULL, NULL, '20201204165631_customer-support.png', '122.176.38.177', 'IN', 'UP', 'Uttar Pradesh', '110091', NULL, NULL, '28.58', '77.33', NULL, 'UP', 'Stevebauman\\Location\\Drivers\\IpApi', 'Noida', 'India', '2022-11-10 11:38:15', '2022-11-10 11:38:15', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '982768', NULL, 0, NULL, '1', NULL, 1, 0, 'hello'),
(8, 'admin', '9235082103', 'admin@gmail.com', '$2y$10$rjl0F1NTk9KznlVkNSoaDO3u2n/.EKljOKu/rV2V6BqgcWbgX567W', 'ydoUv3tZL6I9wd6csbrwjIHOLcnYwUwb9hPafnSxOP51McQtmGUzk8jzGc2c', 'admin', NULL, NULL, '202101251343338.jpg', '122.176.38.177', 'IN', 'UP', 'Uttar Pradesh', '110091', NULL, NULL, '28.58', '77.33', NULL, 'UP', 'Stevebauman\\Location\\Drivers\\IpApi', 'Noida', 'India', '2020-11-02 23:12:17', '2022-11-10 11:17:41', '', NULL, 'Vsoft', 'customer suppurt', 'welcome to Vsoft....', 'http//:45.115.62.131/chat_update/vsoft', 'Vsoft', 'VsoftVsoftVsoftVsoft', '876986', NULL, 0, NULL, '1', NULL, 0, 0, NULL),
(81, 'Sunil', '7275342524', 'sunil@vert-age.com', '$2y$10$iI.k5fgrlAlncsK0fe0rEO/maHN13VhsiYFTOCbGT4fBN1Pwidhnm', 'KT5dMmMeWnUw4eAO9ks1MSfxBXtFEn28JEEk2lep', 'customer', 'Enquiry', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-04 10:26:02', '2022-11-04 10:26:02', '#9400D3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '176225', '834440', 0, NULL, '1', NULL, 1, 0, 'grgrdgrfdgdf'),
(84, 'Aakash verma', '6395079456', 'akashverma@vert-age.com', '$2y$10$gh.J3QpWwx9TqwwExbWXCOVF.QRNybupVCqd5ltBh/fsI3FSlBp8q', 'VY5DTSgeLpuPLJKZAm5Uvb2SgPMeT85GmK07De3i', 'customer', 'Enquiry', 'Need enquiry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 09:21:54', '2022-11-05 09:21:54', '#8B0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '249650', '449159', 0, NULL, '1', 'logout', 0, 0, 'logout'),
(85, 'krishna yadav', '9667692103', 'krishna.yadav9599@gmail.com', '$2y$10$5nnEwvYaEYU57tbJafA8jeYFTJtW6st0hagmEIrlEhKnQ7XJnolFm', '6B7XIpsN2K8QbNixtQyJf7MLifkDogW1LsUtnyUl', 'customer', 'Enquiry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-05 10:28:20', '2022-11-05 10:28:21', '#2F4F4F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '573717', '107405', 0, NULL, '1', 'logout', 0, 0, 'logout'),
(89, 'Rahul', '1234567890', 'rahul@gmail.com', '$2y$10$BhBbAoB9s9TLwanO6tPyWuNqnTvSFWtjveuwLDywx.05qPhJbe95y', '3MtVcHt4n7kPtVc6HPbMaTazqlKZO0p8lmyVz60K', 'customer', 'Enquiry', 'In need enquiry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 08:34:02', '2022-11-07 08:34:02', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '456842', '774044', 0, NULL, '1', NULL, 1, 0, 'hi'),
(94, 'Rajeev', '9555476732', 'rajeev@brightoindia.in', '$2y$10$GdrmApl43iSDKI4PRDUu8.TzooXR2rSTcCQMDmDlpcKRdSlY/YPua', 'S5hWs7Zc24BFm16oaCLHDVfIahHxkozC32s1UfkR', 'customer', 'Enquiry', 'need support', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 12:40:45', '2022-11-07 12:40:45', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '361439', '102155', 0, NULL, '1', 'logout', 0, 0, 'logout'),
(95, 'Rajeev', '9555476732', 'rajeev@brightoindia.in', '$2y$10$MLVIEX.Y8Nr4u61uubrl5OZTceNDc9/yD32hnLamuQ2yWBfENdiky', 'yCUgUpeS8JCCRundZf37yOS7Elfg9Q1lo2k7ADLTVruuDHYVuWamdcbsMc0v', 'agent', NULL, NULL, '20221110164657_download (3).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 13:16:59', '2022-11-10 11:16:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '768012', NULL, 0, NULL, '1', NULL, 0, 0, 'hello'),
(97, 'Reema', '9311830320', 'reema@brightoindia.in', '$2y$10$X2qGE07YT8kVhZYOKIS9CerHcZpk5f2pyPyFj2nnbZiXIX2YhUjUW', 'tJVJCTSIk8y1h4iGa12v0LlcKgZPWVfFfsU5Foxz', 'customer', 'Enquiry', 'supprt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 12:55:45', '2022-11-07 12:55:45', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '590457', '577446', 0, NULL, '1', 'logout', 0, 0, 'logout'),
(99, 'Rajeev', '9555476732', 'rajeev@brightoindia.in', '$2y$10$dwPr5NnvnaC5n1cjQXrzhuLQIoSeEZEW36jFdVWn3655k7xpdkTfq', 'tJVJCTSIk8y1h4iGa12v0LlcKgZPWVfFfsU5Foxz', 'customer', 'Enquiry', 'i need support', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 12:58:28', '2022-11-07 12:58:28', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '407370', '105481', 0, NULL, '1', NULL, 1, 0, NULL),
(100, 'Reema', '256458682`', 'reema@brightoindia.in', '$2y$10$eyv.5JsFOyMqAGClVZwFWufgfHSFhBzWvHHm0oe9WKbFt7DEbUJAG', '7T6dbxd8Pjq5gNNv4xHd84LrlirXpiTDubjnqqdl', 'customer', 'Enquiry', '214', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 13:00:13', '2022-11-07 13:00:13', '#ff00ff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '106924', '228700', 0, NULL, '1', NULL, 1, 0, NULL),
(101, 'Abhishek', '954254525', 'abhishek@brightoindia.in', '$2y$10$mORkUsZiTYzjcjDojqadpeQwGp1uy6xJsjb3zEKz/CcLCRcbp.3vG', 'WUdEqlT22mpqAo0BYY1z1gZ0QvwcLjPzv2zEhneU', 'customer', 'Enquiry', 'hfgfgh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 13:16:06', '2022-11-07 13:16:06', '#8B0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429541', '134701', 0, NULL, '1', NULL, 1, 0, 'Ram'),
(102, 'Sunil Rathore', '7275812453', 'sunil@vert-age.com', '$2y$10$f8kCXe.cOr3fpvl.eyOHfO4ypvJcJm/9hHfSdys5Bua4yvqhRhnDK', 'f2EBuRiJ7JBji7N33jNYrAEwgZ4EDN1X8Hnyhpqq', 'agent', NULL, NULL, '20221110164733_download (2).jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-10 11:37:23', '2022-11-10 12:01:59', '#8B0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '597616', NULL, 0, NULL, '1', NULL, 1, 0, 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
