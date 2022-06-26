-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2022 at 02:06 PM
-- Server version: 5.7.35-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Eureka_CyberSpace`
--

-- --------------------------------------------------------

--
-- Table structure for table `Clients`
--

CREATE TABLE `Clients` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_refferal_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Clients`
--

INSERT INTO `Clients` (`id`, `full_name`, `phone_number`, `personal_email`, `site_package`, `site_type`, `page_number`, `business_name`, `business_industry`, `partner_refferal_id`, `business_summary`, `logo`, `date_time`) VALUES
(1, 'Samuel Adejoh', '7086989276', 'aejoh382@gmail.com', 'Basic Standard', 'Personal', 'Multi Paged', 'Eureka', 'Optometrist', '0', 'business_summary', '', '2001-05-22 00:00:00'),
(2, 'john king', '7086989276', 'aejoh382@gmail.com', 'Basic Promo', 'Personal', '---Select---', 'Eureka', 'Dietitian', '0', 'business_summary', '', '2003-05-22 00:00:00'),
(4, 'patric', '901181182', 'admin@email.com', 'Basic Standard', 'Business', 'Multi Paged', 'GWL', 'Operations Manager', '0', 'business_summary', 'logo', '2008-05-22 00:00:00'),
(5, 'Samuel Adejoh', '901181182', 'admin@email.com', 'Basic Promo', 'Personal', 'Standard Price', 'GWL', 'Operations Manager', '0', 'business_summary', 'logo', '2008-05-22 00:00:00'),
(6, 'jacob', '7086989276', 'admin@email.com', 'Basic Standard', 'Personal', 'Standard Price', 'Eureka', 'Dietitian', '0', 'business_summary', 'logo', '2009-05-22 00:00:00'),
(7, 'adejoh', '90118118211', 'aejoh382@gmail.com', 'Basic Standard', 'Business', 'Multi Paged', 'GWL', '', '0', 'business_summary', 'logo', '2009-05-22 00:00:00'),
(8, 'john king', '7086989276', 'aejoh382@gmail.com', 'Basic Standard', 'Personal', 'Multi Paged', 'GWL', '', '0', 'business_summary', 'logo', '2009-05-22 00:00:00'),
(9, 'adejoh', '7086989276', 'admin@email.com', 'Basic Standard', 'Business', 'Decide for me', 'Eureka', 'barber', '0', 'business_summary', 'logo', '2009-05-22 00:00:00'),
(10, 'Micheal', '12345678901', 'micheal1234@gmail.com', 'Basic Promo', 'Personal', 'Standard Price', 'the jones beauty', 'hair making and tailoring', '12333', 'business_summary', 'logo', '2009-05-22 00:00:00'),
(11, 'cccc', 'ccccc', 'cccccc', 'Basic Promo', 'Personal', 'Standard Price', 'ccc', 'ccc', '12333', 'business_summary', 'logo', '2009-05-22 00:00:00'),
(12, 'ammddf', 'gey', 'tyuio', 'Basic Standard', 'Personal', 'Decide for me', 'ooooo', 'oooo', '12333', 'business_summary', 'logo', '2009-05-22 00:00:00'),
(13, 'ffffff', 'ffffff', 'ffffff', 'Basic Standard', 'Business', 'Multi Paged', 'ddffgf', '', '12333', 'business_summary', 'logo', '2009-05-22 00:00:00'),
(14, 'jjjjj', 'jjjjj', 'jjjjjj', 'Basic Promo', 'Business', 'Standard Price', 'jjjjj', '', '12333', 'business_summary', 'logo', '2009-05-22 00:00:00'),
(15, 'John Mary', '08038077649', 'aejoh382@gmail.com', 'Basic Promo', 'Personal', 'Multi Paged', 'Eureka', '', '0', 'PROJECT PROPOSAL(JOSHUA).docx', 'frame.png', '2026-05-22 00:00:00'),
(16, 'John Mary', '08038077649', 'aejoh382@gmail.com', 'Basic Promo', 'Personal', 'Multi Paged', 'Eureka', 'Dietitian', '0', 'PROJECT PROPOSAL(JOSHUA).docx', 'frame.png', '2026-05-22 00:00:00'),
(17, 'John Mary', '08038077649', 'aejoh382@gmail.com', 'Basic Promo', 'Personal', 'Multi Paged', 'Eureka', 'Dietitian', '0', 'PROJECT PROPOSAL(JOSHUA).docx', 'frame.png', '2026-05-22 00:00:00'),
(18, 'John Mary', '08038077649', 'aejoh382@gmail.com', 'Basic Promo', 'Personal', 'Multi Paged', 'Eureka', 'Dietitian', '0', 'PROJECT PROPOSAL(JOSHUA).docx', 'frame.png', '2026-05-22 00:00:00'),
(19, 'John Mary', '08038077649', 'aejoh382@gmail.com', 'Basic Promo', 'Personal', 'Multi Paged', 'Eureka', 'Dietitian', '0', 'PROJECT PROPOSAL(JOSHUA).docx', '', '2026-05-22 00:00:00'),
(20, '', '', '', '', '', '', '', '', '', 'Adejoh  Joshua.docx', '20210109_143533.png', '2022-05-27 16:13:06'),
(21, '', '', '', '', '', '', '', '', '', 'PROJECT PROPOSAL(JOSHUA).docx', '20210109_143533.png', '2022-05-27 16:22:45'),
(22, '', '', '', '', '', '', '', '', '', 'Adejoh  Joshua.docx', '20210110_142043.png', '2022-06-02 18:30:06'),
(23, '', '', '', '', '', '', '', '', '', '', 'frame.png', '2022-06-02 18:58:36'),
(24, 'John Mary', '000000000', 'admin@email.com', 'Standard Promo', 'Business', 'Decide for me', 'Eureka', 'Optometrist', '12121', 'Adejoh  Joshua.docx', '20210109_143533.png', '2022-06-02 19:23:12'),
(25, 'Samuel Adejoh', '07086989276', 'aejoh382@gmail.com', 'Basic Standard', 'Personal', 'Multi Paged', 'joe beauty outlet', 'Optometrist', '12121', 'Adejoh  Joshua.docx', '20210109_143533.png', '2022-06-02 19:24:47'),
(26, 'john king', '0901181182', 'aejoh382@gmail.com', 'Basic Promo', 'Business', 'Decide for me', 'joe beauty outlet', '', '12121', 'Adejoh  Joshua.docx', '20210109_143533.png', '2022-06-02 19:25:12'),
(27, 'john king', '07086989276', 'admin@email.com', '', '', 'Standard Price', 'joe beauty outlet', '', '12121', 'Adejoh  Joshua.docx', '20210110_142043.png', '2022-06-02 19:27:55'),
(28, 'John Mary', '0901181182', 'admin@email.com', '', '', '', 'joe beauty outlet', '', '12121', 'Adejoh  Joshua.docx', '20210109_143533.png', '2022-06-02 19:37:50'),
(29, 'Enemona Adejoh', '7082989276', 'josh@mail.com', 'Basic Standard', 'Business', 'Multi page', 'Eureka', 'Business Operations', '00', 'Adejoh  Joshua.docx', '29bb5aa8720263104fd7f47425f3e2a9.jpg', '2022-06-21 15:10:10'),
(30, 'Enemona Adejoh', '7082989276', 'josh@mail.com', 'Basic Standard', 'Personal', 'one page', 'Eureka', 'Business Operations', '00', 'PROJECT PROPOSAL(JOSHUA).docx', '20210110_142043.png', '2022-06-21 15:30:28'),
(31, 'look', '7082989276', 'look@mail.com', 'Basic Promo', 'Personal', 'one page', 'nails', 'Business Operations', '00', 'PROJECT PROPOSAL(JOSHUA).docx', '', '2022-06-21 15:34:31'),
(32, 'look', '7082989276', 'look@mail.com', 'Basic Promo', 'Business', 'Multi page', 'nails', 'Business Owner', '00', 'PROJECT PROPOSAL(JOSHUA).docx', '', '2022-06-21 15:38:08'),
(33, 'look', '7082989276', 'look@mail.com', 'Basic Promo', 'Business', 'Multi page', 'nails', 'Business Owner', '00', 'PROJECT PROPOSAL(JOSHUA).docx', '20210109_143533.png', '2022-06-21 15:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `Partners`
--

CREATE TABLE `Partners` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `affiliate_code` int(11) DEFAULT NULL,
  `bank_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` int(20) NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `partner_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Partners`
--

INSERT INTO `Partners` (`id`, `full_name`, `gender`, `country`, `state`, `date_time`, `affiliate_code`, `bank_name`, `account_number`, `image`, `partner_email`, `fone_number`) VALUES
(2, 'john king', 'Gender', 'Select Country', 'Select state', '2025-05-22 00:00:00', 99999, 'Select Bank', 121212, 'elevate-vofmJUVScDE-unsplash.jpg', 'king@gmail.com', '12345678'),
(3, 'junior king', 'Gender', 'Select Country', 'Select state', '2025-05-22 00:00:00', 1213, 'Select Bank', 121212, 'IMG_20210107_202450_926.JPG', 'junioe123@email.com', '12345678'),
(4, 'john king', 'Gender', 'Select Country', 'Select state', '2026-05-22 00:00:00', 1213, 'Select Bank', 1212121212, 'plan.jpg', 'john@email.com', '12345678'),
(6, 'john king', 'Gender', 'Select Country', 'Select state', '2026-05-22 00:00:00', 1213, 'Select Bank', 1212121212, 'free-hosting.png', 'john@email.com', '12345678'),
(7, 'john king', 'Male', 'Nigeria', 'ABUJA FCT', '2017-04-22 00:00:00', 1213, 'polaris', 1212121212, 'elevate-vofmJUVScDE-unsplash.jpg', '', '12345678'),
(8, 'jacob', 'Gender', 'Select Country', 'Select state', '2016-05-22 00:00:00', 23, 'Select Bank', 234234, 'IMG_20210107_202450_926.JPG', 'jaocb@email.com', '8183531163'),
(9, 'joah', 'Gender', 'Select Country', 'Select state', '2025-05-22 00:00:00', 333333, 'Select Bank', 3333, 'free-hosting.png', 'adejoh382@gmail.com', '11111'),
(10, 'josh', 'Female', 'Select Country', 'Select state', '2020-04-22 00:00:00', 333333, 'Select Bank', 3333, 'image', '', '11111'),
(11, 'dffffff', 'Male', 'Select Country', 'Select state', '2020-04-22 00:00:00', 0, 'Select Bank', 1330000, 'image', '', '8283531163'),
(12, 'Samuel Adejoh', 'Male', 'Nigeria', 'KOGI', '2023-04-22 00:00:00', 0, 'citibank', 71313965, 'image', '', '8283531163'),
(13, 'Samuel Adejoh', 'Male', 'Nigeria', 'KOGI', '2023-04-22 00:00:00', 0, 'citibank', 71313965, 'image', '', '8283531163'),
(14, 'Samuel Adejoh', 'Male', 'Nigeria', 'KOGI', '2023-04-22 00:00:00', 0, 'citibank', 71313965, 'image', '', '8283531163'),
(15, 'Samuel Adejoh', 'Male', 'Nigeria', 'KOGI', '2023-04-22 00:00:00', 0, 'citibank', 71313965, 'image', '', '8283531163'),
(16, 'Samuel Adejoh', 'Male', 'Benin', 'ENUGU', '2023-04-22 00:00:00', 0, 'diamond', 91313765, 'image', '', '12345678'),
(17, 'Samuel Adejoh', 'Male', 'Benin', 'ENUGU', '2023-04-22 00:00:00', 0, 'diamond', 91313765, 'image', '', '12345678'),
(18, 'jamwes', 'Gender', 'Select Country', 'Select state', '2026-05-22 00:00:00', 0, 'Select Bank', 9098988, 'plan.jpg', 'jaocb@email.com', '234567788989'),
(19, 'joah', 'Gender', 'Select Country', 'Select state', '2026-05-22 00:00:00', 0, 'Select Bank', 2455, 'emilio-garcia-lb9hi0NDjT0-unsplash.jpg', 'john@email.com', '11111'),
(20, 'joah', 'Gender', 'Select Country', 'Select state', '2026-05-22 00:00:00', 0, 'Select Bank', 71313965, 'IMG_20210107_202450_926.JPG', 'adejoh382@gmail.com', '8283531163'),
(21, 'patrick', 'Female', 'Nigeria', 'ADAMAWA', '2028-04-22 00:00:00', 111, 'polaris', 121212, 'elevate-vofmJUVScDE-unsplash.jpg', 'adejoh382@gmail.com', '12345678'),
(22, 'pato', 'Male', 'Ghana', 'ENUGU', '2022-04-28 00:00:00', 333333, 'standard', 121212, 'Screenshot 2021-08-17 at 16-31-00 Document.png', 'adejoh382@gmail.com', '11111'),
(23, 'pato', 'Male', 'Ghana', 'ENUGU', '2022-04-28 00:00:00', 333333, 'standard', 121212, 'elevate-vofmJUVScDE-unsplash.jpg', 'adejoh382@gmail.com', '11111'),
(24, 'pato', 'Male', 'Ghana', 'ENUGU', '2022-04-28 00:00:00', 333333, 'standard', 121212, 'pic-frame.png', 'adejoh382@gmail.com', '11111'),
(25, 'ammddf', 'Male', 'Benin', 'ADAMAWA', '2025-05-22 00:00:00', 0, 'diamond', 1212121212, 'pic-frame.png', 'adejoh382@gmail.com', '12345678'),
(26, 'aaa', 'Male', 'Benin', 'BORNO', '2025-05-22 00:00:00', 0, 'citibank', 234234, 'michael-prewett-CrbI6xF1vtA-unsplash.jpg', '', '12345678'),
(27, 'John Mary', 'Male', 'Nigeria', 'BORNO', '2022-05-27 15:52:53', 0, 'citibank', 1212121212, 'emilio-garcia-lb9hi0NDjT0-unsplash.jpg', 'adejoh382@gmail.com', '08039025092'),
(28, 'Enemona Adejoh', 'female', 'Benin', 'AKWA_IBOM', '2022-06-21 13:54:44', 0, 'stanbic', 91337652, '29bb5aa8720263104fd7f47425f3e2a9.jpg', 'info@eurekacyberspace.com', '08139025092'),
(29, 'Enemona Adejoh', 'Male', 'Ghana', 'ENUGU', '2022-06-21 15:05:08', 98978, 'sterling', 234455, '', 'info@eurekacyberspace.com', '08139025092'),
(30, 'Enemona Adejoh', 'Male', 'Ghana', 'ENUGU', '2022-06-21 15:05:18', 98978, 'sterling', 234455, '', 'info@eurekacyberspace.com', '08139025092');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `password`, `username`) VALUES
(2, 'john king', '1234', 'mona'),
(3, 'james elba', '1234', 'james'),
(4, '', '', 'james'),
(5, '', '', 'james'),
(6, '', '', 'james'),
(7, '', '', 'james'),
(8, '', '', 'james');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Partners`
--
ALTER TABLE `Partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Clients`
--
ALTER TABLE `Clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `Partners`
--
ALTER TABLE `Partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
