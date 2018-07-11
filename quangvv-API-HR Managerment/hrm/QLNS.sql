-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2018 at 10:01 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.7-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `QLNS`
--

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `leader_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `description`, `logo`, `leader_id`) VALUES
(6, 'insert', 'insert1', 'Capture.JPG', 22),
(7, 'insert', 'insert', '7.png', 22),
(8, 'vũ', 'vũ', 'min_menu.png', 44),
(9, 'insert', 'insert', 'insert', 22),
(11, 'mk7777', 'cccccccccc', 'icon_email.png', 33),
(12, 'time', 'cccccccccc', 'dssd_14.png', 2),
(13, 'time1', 'cccccccccc', 'dssd_12.png', 131),
(14, 'upload', 'ssssssssssssss', '14welcome.png', 19),
(15, 'MK5', 'het cc roi', '15.png', 191),
(20, 'thu update', 'thu update', 'Team-slider-image-01.png', 112);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_personal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) NOT NULL,
  `date_of_birth` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `identify_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `current_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permanent_addres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `graduate_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `bank_account_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hobby` text COLLATE utf8_unicode_ci NOT NULL,
  `family_description` text COLLATE utf8_unicode_ci NOT NULL,
  `language_skills` text COLLATE utf8_unicode_ci NOT NULL,
  `leave_days` float NOT NULL,
  `role_id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `email_personal`, `password`, `remember_token`, `image`, `gender`, `date_of_birth`, `identify_id`, `phone_number`, `current_address`, `permanent_addres`, `graduate_from`, `salary`, `bank_account_number`, `hobby`, `family_description`, `language_skills`, `leave_days`, `role_id`, `team_id`, `status`) VALUES
(2, 'error', 'error@gmail.com', 'error@gmail.com', '12321', '', 'picture.jpg', 1, '2018-07-06', '163352189', 975091435, 'nghĩa lâm', 'nghia hưng', 'Nam Dinh', 6000000, '12312', 'thpt nghia hung b', 'gia dinh 4 ng', '5 ngon ngu', 7, 1, 14, 1),
(3, 'quang', 'quang@gmail', 'quang@gmail', '11111', '', 'logo.png', 1, '1996-06-22', '1', 1111111, '111', '111', '1111', 11111, '111111', '1111111', '1111111111', '111', 1, 1, 11, 111),
(4, 'laravel', 'quangvv@vinsofts.net', 'quangvv@vinsofts.net', '1', '', 'paypal.png', 1, '2018-07-01', '1', 1, 'nghĩa lâm', 'nghia hưng', 'Nam Dinh', 1, '12312', '12312', '123123', '1', 1, 1, 6, 1),
(5, 'OPP DEMO', 'quangvv@vinsofts.net', 'quangvv@vinsofts.net', '1', '', 'User-TD2.jpg', 1, '2018-07-06', '1', 1, 'nghĩa lâm', 'nghia hưng', 'Nam Dinh', 1, '12312', '12312', '123123', '1', 1, 1, 6, 1),
(6, 'S', 'quangvv@vinsofts.net', 'error@gmail.com', '1', '', 'logo3-2.png', 1, '2018-09-04', '1', 1, '1', '1', 'Nam Dinh', 1, '12312', '1', '123123', '1', 1, 1, 6, 1),
(7, 'bay', 'quangvv@vinsofts.net', 'quangvv@vinsofts.net', '7', '', 'logo3-1.png', 2, '2018-11-08', '1', 1, '1', 'nghia hưng', 'Nam Dinh', 1111, '12312', '12312', '123123', '1', 1, 1, 6, 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
