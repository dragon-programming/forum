-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 11:28 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dgn_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `dgn_messages`
--

CREATE TABLE `dgn_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `inbox_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dgn_notifications`
--

CREATE TABLE `dgn_notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(25) NOT NULL,
  `comment` text NOT NULL,
  `open_to_comments` int(1) NOT NULL DEFAULT '1',
  `likes` int(1) DEFAULT '0',
  `commented_by` int(10) UNSIGNED NOT NULL,
  `commented_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dgn_pictures`
--

CREATE TABLE `dgn_pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `uploaded_by` int(10) UNSIGNED NOT NULL,
  `alt_text` char(50) NOT NULL,
  `caption` varchar(150) NOT NULL,
  `added_to` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dgn_posts`
--

CREATE TABLE `dgn_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `open_to_comments` int(1) NOT NULL DEFAULT '1',
  `likes` int(1) DEFAULT '0',
  `posted_by` int(10) UNSIGNED NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dgn_uploads`
--

CREATE TABLE `dgn_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `type` char(10) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `added_to` int(10) DEFAULT NULL,
  `uploaded_by` int(10) UNSIGNED NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dgn_users`
--

CREATE TABLE `dgn_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` char(10) DEFAULT NULL,
  `user_role` varchar(10) NOT NULL DEFAULT 'member',
  `acc_status` int(1) NOT NULL DEFAULT '0',
  `reset_password_q` varchar(255) DEFAULT NULL,
  `reset_password_a` char(35) DEFAULT NULL,
  `token` char(10) NOT NULL,
  `reset_token` varchar(60) DEFAULT NULL,
  `reg_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dgn_messages`
--
ALTER TABLE `dgn_messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `time` (`time`),
  ADD KEY `inbox_id` (`inbox_id`);

--
-- Indexes for table `dgn_notifications`
--
ALTER TABLE `dgn_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `dgn_pictures`
--
ALTER TABLE `dgn_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dgn_posts`
--
ALTER TABLE `dgn_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `open_to_comments` (`open_to_comments`,`posted_by`);

--
-- Indexes for table `dgn_uploads`
--
ALTER TABLE `dgn_uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`,`type`,`added_to`,`uploaded_by`);

--
-- Indexes for table `dgn_users`
--
ALTER TABLE `dgn_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `token` (`token`),
  ADD UNIQUE KEY `resetToken` (`reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dgn_messages`
--
ALTER TABLE `dgn_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dgn_notifications`
--
ALTER TABLE `dgn_notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dgn_pictures`
--
ALTER TABLE `dgn_pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dgn_posts`
--
ALTER TABLE `dgn_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dgn_uploads`
--
ALTER TABLE `dgn_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dgn_users`
--
ALTER TABLE `dgn_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
