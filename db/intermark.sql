-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2017 at 12:07 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 5.6.31-4+ubuntu16.04.1+deb.sury.org+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intermark`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `career_id` int(11) NOT NULL,
  `career_name` varchar(100) DEFAULT NULL,
  `career_description` text,
  `career_input_date` timestamp NULL DEFAULT NULL,
  `career_last_update` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `g_activity_log`
--

CREATE TABLE `g_activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `activity_log_date` timestamp NULL DEFAULT NULL,
  `activity_log_action` varchar(45) DEFAULT NULL,
  `activity_log_module` varchar(45) DEFAULT NULL,
  `activity_log_info` text,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `g_contact`
--

CREATE TABLE `g_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_value` text,
  `contact_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g_mediamanager`
--

CREATE TABLE `g_mediamanager` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `isfile` tinyint(1) DEFAULT '0',
  `label` text,
  `info` text,
  `upload_at` datetime DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g_mediamanager_album`
--

CREATE TABLE `g_mediamanager_album` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `upload_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g_page`
--

CREATE TABLE `g_page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(100) DEFAULT NULL,
  `page_description` text,
  `page_content` text,
  `page_image` varchar(255) DEFAULT NULL,
  `page_published_date` timestamp NULL DEFAULT NULL,
  `page_input_date` timestamp NULL DEFAULT NULL,
  `page_last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `page_is_published` tinyint(1) DEFAULT '0' COMMENT '1 = published, 0 = draft',
  `page_is_commentable` tinyint(1) DEFAULT '0' COMMENT '1 = commentable, 0 = uncommentable',
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `g_posts`
--

CREATE TABLE `g_posts` (
  `posts_id` int(11) NOT NULL,
  `posts_title` varchar(255) DEFAULT NULL,
  `posts_description` text,
  `posts_content` text,
  `posts_published_date` timestamp NULL DEFAULT NULL,
  `posts_image` varchar(255) DEFAULT NULL,
  `posts_input_date` timestamp NULL DEFAULT NULL,
  `posts_last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `posts_is_published` tinyint(1) DEFAULT '0' COMMENT '1 = published, 0 = draft',
  `posts_is_commentable` tinyint(1) DEFAULT '0' COMMENT '1 = commentable, 0 = uncommentable',
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `g_posts_category`
--

CREATE TABLE `g_posts_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `category_input_date` timestamp NULL DEFAULT NULL,
  `category_last_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `g_setting`
--

CREATE TABLE `g_setting` (
  `setting_id` int(11) NOT NULL,
  `setting_name` varchar(255) DEFAULT NULL,
  `setting_value` varchar(255) DEFAULT NULL,
  `setting_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g_user`
--

CREATE TABLE `g_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_full_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_description` text,
  `user_role` int(11) DEFAULT NULL,
  `user_input_date` timestamp NULL DEFAULT NULL,
  `user_last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `g_user_role`
--

CREATE TABLE `g_user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) DEFAULT NULL,
  `role_input_date` timestamp NULL DEFAULT NULL,
  `role_last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mptt`
--

CREATE TABLE `mptt` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `lft` int(11) NOT NULL DEFAULT '0',
  `rgt` int(11) NOT NULL DEFAULT '0',
  `parent` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(150) DEFAULT NULL,
  `news_description` varchar(255) DEFAULT NULL,
  `news_content` text,
  `news_post_date` timestamp NULL DEFAULT NULL,
  `news_image` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_image`
--

CREATE TABLE `news_image` (
  `news_image_id` int(11) NOT NULL,
  `news_image_path` varchar(255) DEFAULT NULL,
  `news_news_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`),
  ADD KEY `fk_career_g_user1_idx` (`user_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `g_activity_log`
--
ALTER TABLE `g_activity_log`
  ADD PRIMARY KEY (`activity_log_id`),
  ADD KEY `fk_g_activity_log_g_user1_idx` (`user_id`);

--
-- Indexes for table `g_contact`
--
ALTER TABLE `g_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `g_mediamanager`
--
ALTER TABLE `g_mediamanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_mediamanager_album`
--
ALTER TABLE `g_mediamanager_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_page`
--
ALTER TABLE `g_page`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `fk_g_page_g_user1_idx` (`user_id`);

--
-- Indexes for table `g_posts`
--
ALTER TABLE `g_posts`
  ADD PRIMARY KEY (`posts_id`),
  ADD KEY `fk_g_posts_g_user1_idx` (`user_id`),
  ADD KEY `fk_g_posts_g_posts_category1_idx` (`category_id`);

--
-- Indexes for table `g_posts_category`
--
ALTER TABLE `g_posts_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `g_setting`
--
ALTER TABLE `g_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `g_user`
--
ALTER TABLE `g_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_g_user_user_role_idx` (`user_role`);

--
-- Indexes for table `g_user_role`
--
ALTER TABLE `g_user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `mptt`
--
ALTER TABLE `mptt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_image`
--
ALTER TABLE `news_image`
  ADD PRIMARY KEY (`news_image_id`),
  ADD KEY `fk_news_image_g_news1_idx` (`news_news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `g_activity_log`
--
ALTER TABLE `g_activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `g_contact`
--
ALTER TABLE `g_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `g_mediamanager`
--
ALTER TABLE `g_mediamanager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g_mediamanager_album`
--
ALTER TABLE `g_mediamanager_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g_page`
--
ALTER TABLE `g_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `g_posts`
--
ALTER TABLE `g_posts`
  MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `g_posts_category`
--
ALTER TABLE `g_posts_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `g_setting`
--
ALTER TABLE `g_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `g_user`
--
ALTER TABLE `g_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `g_user_role`
--
ALTER TABLE `g_user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mptt`
--
ALTER TABLE `mptt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `news_image`
--
ALTER TABLE `news_image`
  MODIFY `news_image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `career`
--
ALTER TABLE `career`
  ADD CONSTRAINT `fk_career_g_user1` FOREIGN KEY (`user_id`) REFERENCES `g_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `g_activity_log`
--
ALTER TABLE `g_activity_log`
  ADD CONSTRAINT `fk_g_activity_log_g_user1` FOREIGN KEY (`user_id`) REFERENCES `g_user` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `g_page`
--
ALTER TABLE `g_page`
  ADD CONSTRAINT `fk_g_page_g_user1` FOREIGN KEY (`user_id`) REFERENCES `g_user` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `g_posts`
--
ALTER TABLE `g_posts`
  ADD CONSTRAINT `fk_g_posts_g_posts_category1` FOREIGN KEY (`category_id`) REFERENCES `g_posts_category` (`category_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `fk_g_posts_g_user1` FOREIGN KEY (`user_id`) REFERENCES `g_user` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `g_user`
--
ALTER TABLE `g_user`
  ADD CONSTRAINT `fk_g_user_user_role` FOREIGN KEY (`user_role`) REFERENCES `g_user_role` (`role_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `news_image`
--
ALTER TABLE `news_image`
  ADD CONSTRAINT `fk_news_image_g_news1` FOREIGN KEY (`news_news_id`) REFERENCES `news` (`news_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
