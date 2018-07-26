-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2018 at 10:00 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.7-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlns`
--

-- --------------------------------------------------------

--
-- Table structure for table `leader`
--

CREATE TABLE `leader` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `leader`
--

INSERT INTO `leader` (`id`, `name`, `email`, `phone_number`) VALUES
(1, 'leader 1', 'abc@gmail.com', 123456789),
(2, 'leader 2', 'leader1@gmail.com', 987654321),
(3, 'leader 3', 'leader2@gmail.com', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desscription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `leader_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `desscription`, `logo`, `leader_id`) VALUES
(4, 'Phòng ban 2', 'mô tả 2', '573Chrysanthemum.jpg', 1),
(5, 'Phòng ban 3', 'mô tả 3', 'nhanvien3.jpg', 2),
(23, 'cuchuoi', 'mô tả', '310nemo.jpg', 1),
(24, 'cuchuoi2', 'mô tả', 'phongban.942spiderman.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_personal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) NOT NULL,
  `date_of_birth` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identify_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `current_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `graduate_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `bank_account_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hobby` text COLLATE utf8_unicode_ci NOT NULL,
  `family_description` text COLLATE utf8_unicode_ci NOT NULL,
  `language_skills` text COLLATE utf8_unicode_ci NOT NULL,
  `leave_days` float NOT NULL,
  `role_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_personal`, `password`, `remember_token`, `image`, `gender`, `date_of_birth`, `identify_id`, `phone_number`, `current_address`, `permanent_address`, `graduate_from`, `salary`, `bank_account_number`, `hobby`, `family_description`, `language_skills`, `leave_days`, `role_id`, `team_id`, `status`) VALUES
(1, 'tiến', 'cuchuoidd@gmail.com', 'cuchuoidd@gmail.com', '1234', '1234', 'nhanvien4.jpg', 0, '2018-07-13', '12345678', 987654321, 'địa chỉ hiện tại', 'địa chỉ thường trú', 'trường học', 1000, '1234567', 'sở thích', 'giới thiệu gia đình', 'kỹ năng', 1, 1, 1, 1),
(2, 'cuchuoi', 'cuchuoidd@gmail.com', 'cuchuoidd@gmail.com', 'minhtien', '1', 'nhanvien2.jpg', 1, '2018-07-18', '12234', 2341, 'địa chỉ hiện tại', 'địa chỉ thường trú', 'trường học', 3421, '1234567', 'sở thích', 'giới thiệu gia đình', 'kỹ năng', 1, 1, 1, 1),
(3, 'cuchuoi', 'cuchuoidd@gmail.com', 'cuchuoidd@gmail.com', 'minhtien', 'minhtien', 'users.356.nemo.jpg', 0, '2018-07-05', '12431', 41234, 'sfasdf', 'ádf', 'trường học', 143, '1234567', 'sở thích', 'dfsg', 'sfdg', 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leader`
--
ALTER TABLE `leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leader`
--
ALTER TABLE `leader`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `leader` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
