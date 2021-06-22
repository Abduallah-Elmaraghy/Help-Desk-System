-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 10:12 AM
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

--
-- Dumping data for table `case_recipient`
--

INSERT INTO `case_recipient` (`case_number`, `case_recipient_id`, `opening_date`) VALUES
('1750', 3, '2021-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

CREATE TABLE `case_types` (
  `case_type_id` int(11) NOT NULL,
  `case_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_types`
--

INSERT INTO `case_types` (`case_type_id`, `case_type`) VALUES
(1, 'Desktop Application'),
(2, 'Network'),
(3, 'Database'),
(4, 'Other');

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

--
-- Dumping data for table `company_cases`
--

INSERT INTO `company_cases` (`case_number`, `case_holder_id`, `type_id`, `subject`, `status`, `priority`, `severity`, `description`, `due_date`, `creation_date`) VALUES
('1750', 4, 1, 'Adobe photoshop is not responding', 'Opened', 1, 'High', 'The application is crashing', '2021-06-22', '2021-06-19'),
('3347', 1, 4, 'printer is not connected to the pc', 'Pending', 3, '2', 'dasdsa', '2021-06-24', '0000-00-00'),
('3630', 1, 2, 'SAP application', 'Opened', 2, 'Medium', 'The SAP cannnot connect to the computer network', '2021-06-29', '2021-06-19'),
('4550', 8, 2, 'the computer is not connected to the network', 'Pending', 2, '3', NULL, '2021-06-25', '2021-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `escalations`
--

CREATE TABLE `escalations` (
  `case_number` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `escalations`
--

INSERT INTO `escalations` (`case_number`, `user_id`, `admin_id`, `reason`, `description`, `status`) VALUES
('1750', 4, 3, 'Due data', 'csadscds', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_base`
--

CREATE TABLE `knowledge_base` (
  `admin_id` int(11) NOT NULL,
  `statement_id` int(11) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `Type_id` int(11) NOT NULL,
  `description` varchar(700) NOT NULL,
  `problem_definition` varchar(500) NOT NULL,
  `data` longblob NOT NULL,
  `filename` varchar(50) NOT NULL,
  `filetype` varchar(50) NOT NULL,
  `filesize` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knowledge_base`
--

INSERT INTO `knowledge_base` (`admin_id`, `statement_id`, `subject`, `Type_id`, `description`, `problem_definition`, `data`, `filename`, `filetype`, `filesize`) VALUES
(3, 1, 'printer is not connected to the pc', 1, '				dfasf	', 'qrferg', '', '', '', '');

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

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `mail`, `password`, `mobile`, `department_id`, `type_id`, `position_id`, `profile_picture_path`) VALUES
(1, 'Abduallah ELmaraghy', 'Abduallah@gmail.com', '123456', 1150604349, 1, 2, 1, NULL),
(2, 'Mohammed Khaled', 'Mohammed@gmail.com', '123456', 1060128598, 2, 3, 2, NULL),
(3, 'mohamed khaled', 'mohamed@gmail.com', '123456', 1009278290, 1, 1, 1, 'asd'),
(4, 'Alaa Fadel', 'Alaa@gmail.com', '123456', 1150604349, 2, 2, 1, NULL),
(5, 'Ahmedgamil', 'AhmedG@gmail.com', '123456', 1060128598, 1, 1, 1, NULL),
(8, 'essam', 'essam@gmail.com', '123456', 1150604349, 1, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_departments`
--

CREATE TABLE `user_departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_departments`
--

INSERT INTO `user_departments` (`department_id`, `department_name`) VALUES
(1, 'IT'),
(2, 'Production');

-- --------------------------------------------------------

--
-- Table structure for table `user_position`
--

CREATE TABLE `user_position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_position`
--

INSERT INTO `user_position` (`position_id`, `position_name`) VALUES
(1, 'General Manager'),
(2, 'Chairman Assistant'),
(3, 'Chairman');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`type_id`, `type_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'head');

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
-- Indexes for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  ADD PRIMARY KEY (`statement_id`,`filename`,`filetype`,`Type_id`),
  ADD KEY `Type_id` (`Type_id`),
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
  MODIFY `case_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `statement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_departments`
--
ALTER TABLE `user_departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_position`
--
ALTER TABLE `user_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_warnings`
--
ALTER TABLE `user_warnings`
  MODIFY `warning_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- Constraints for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  ADD CONSTRAINT `knowledge_base_ibfk_1` FOREIGN KEY (`Type_id`) REFERENCES `case_types` (`case_type_id`),
  ADD CONSTRAINT `knowledge_base_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `user` (`user_id`);

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
