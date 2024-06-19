-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 11:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starsandbloom`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courses` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `available_dates` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courses`, `description`, `available_dates`, `date_created`) VALUES
(16, 'Project Management', NULL, '12th of May', '2024-06-13 22:43:44'),
(24, 'Civil Management', NULL, '15th of May\r\n', '2024-06-13 22:51:06'),
(30, 'Business Admin', 'fvneftbnbklgmb;mgpb', '15th of May', '2024-06-15 21:33:15'),
(31, 'Resource Allocation', 'dnrwngorngjonetjbnjoet botnbojtenb', '16th of May\r\n', '2024-06-15 21:37:59'),
(32, 'Database Management System', 'wdfvbb .lrmblkrnlbnetlnbktembetnibon', '14th of  May', '2024-06-15 21:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'administrator', 'content');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `courses` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `fullname`, `email`, `phone`, `courses`, `date`, `date_created`) VALUES
(11, 'David', 'johndavid@gmail.com', '08012536674', 'Stress Management & resilience', '0000-00-00', '2024-06-07 14:54:37'),
(13, 'Anukam Valentine', 'anukamvalentine09@gmail.com', '9012878357', 'Strategic thinking', '0000-00-00', '2024-06-10 19:20:41'),
(14, 'Divine', 'johndavid@gmail.com', '08012536674', 'Stress Management & resilience', '0000-00-00', '2024-06-11 09:47:07'),
(15, 'Anukam Valentine', 'anukamvalentine09@gmail.com', '9012878357', 'Strategic thinking', '0000-00-00', '2024-06-11 17:01:45'),
(16, 'Jessica', 'jessica@gmail.com', '08012536674', 'Entrepreneur mindset', '30th of May', '2024-06-12 20:26:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses` (`courses`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
