-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 02:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `help_desk_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_attachments`
--

CREATE TABLE `case_attachments` (
  `case_number` varchar(30) NOT NULL,
  `data` longblob DEFAULT NULL,
  `filename` varchar(50) NOT NULL,
  `filesize` varchar(50) DEFAULT NULL,
  `filetype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `case_comments`
--

CREATE TABLE `case_comments` (
  `comment_id` int(20) NOT NULL,
  `case_number` varchar(30) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `case_comment` varchar(11) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `case_recipient`
--

CREATE TABLE `case_recipient` (
  `case_number` varchar(30) NOT NULL,
  `case_recipient_id` int(11) NOT NULL,
  `opening_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

CREATE TABLE `case_types` (
  `case_type_id` int(11) NOT NULL,
  `case_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_cases`
--

CREATE TABLE `company_cases` (
  `case_number` varchar(30) NOT NULL,
  `case_holder_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `priority` int(11) NOT NULL,
  `severity` varchar(15) NOT NULL,
  `description` varchar(700) DEFAULT NULL,
  `due_date` date NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `escalations`
--

CREATE TABLE `escalations` (
  `case_number` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `reason` varchar(150) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `password` varchar(8) NOT NULL,
  `mobile` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `profile_picture_path` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_departments`
--

CREATE TABLE `user_departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_position`
--

CREATE TABLE `user_position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_warnings`
--

CREATE TABLE `user_warnings` (
  `warning_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `warning_message` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_attachments`
--
ALTER TABLE `case_attachments`
  ADD PRIMARY KEY (`filename`,`filetype`),
  ADD KEY `case_number` (`case_number`);

--
-- Indexes for table `case_comments`
--
ALTER TABLE `case_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `case_number` (`case_number`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `case_recipient`
--
ALTER TABLE `case_recipient`
  ADD PRIMARY KEY (`case_number`,`case_recipient_id`),
  ADD KEY `case_recipient_id` (`case_recipient_id`);

--
-- Indexes for table `case_types`
--
ALTER TABLE `case_types`
  ADD PRIMARY KEY (`case_type_id`);

--
-- Indexes for table `company_cases`
--
ALTER TABLE `company_cases`
  ADD PRIMARY KEY (`case_number`),
  ADD KEY `case_holder_id` (`case_holder_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `escalations`
--
ALTER TABLE `escalations`
  ADD PRIMARY KEY (`case_number`,`user_id`,`admin_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `user_departments`
--
ALTER TABLE `user_departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `user_position`
--
ALTER TABLE `user_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user_warnings`
--
ALTER TABLE `user_warnings`
  ADD PRIMARY KEY (`warning_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_comments`
--
ALTER TABLE `case_comments`
  MODIFY `comment_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `case_types`
--
ALTER TABLE `case_types`
  MODIFY `case_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_departments`
--
ALTER TABLE `user_departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_position`
--
ALTER TABLE `user_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_warnings`
--
ALTER TABLE `user_warnings`
  MODIFY `warning_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_attachments`
--
ALTER TABLE `case_attachments`
  ADD CONSTRAINT `case_attachments_ibfk_1` FOREIGN KEY (`case_number`) REFERENCES `company_cases` (`case_number`);

--
-- Constraints for table `case_comments`
--
ALTER TABLE `case_comments`
  ADD CONSTRAINT `case_comments_ibfk_1` FOREIGN KEY (`case_number`) REFERENCES `company_cases` (`case_number`),
  ADD CONSTRAINT `case_comments_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `case_recipient`
--
ALTER TABLE `case_recipient`
  ADD CONSTRAINT `case_recipient_ibfk_1` FOREIGN KEY (`case_number`) REFERENCES `company_cases` (`case_number`),
  ADD CONSTRAINT `case_recipient_ibfk_2` FOREIGN KEY (`case_recipient_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `company_cases`
--
ALTER TABLE `company_cases`
  ADD CONSTRAINT `company_cases_ibfk_1` FOREIGN KEY (`case_holder_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `company_cases_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `case_types` (`case_type_id`);

--
-- Constraints for table `escalations`
--
ALTER TABLE `escalations`
  ADD CONSTRAINT `escalations_ibfk_1` FOREIGN KEY (`case_number`) REFERENCES `company_cases` (`case_number`),
  ADD CONSTRAINT `escalations_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `escalations_ibfk_3` FOREIGN KEY (`admin_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `user_departments` (`department_id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `user_types` (`type_id`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`position_id`) REFERENCES `user_position` (`position_id`);

--
-- Constraints for table `user_warnings`
--
ALTER TABLE `user_warnings`
  ADD CONSTRAINT `user_warnings_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
