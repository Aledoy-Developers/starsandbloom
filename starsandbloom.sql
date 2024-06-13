-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 13, 2024 at 10:03 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

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
  `available_dates` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courses`, `available_dates`, `date_created`) VALUES
(1, 'Self Leadership', '12-04-2024, 13-04-2024', '2024-06-13 09:30:24'),
(2, 'Emotional Intelligence', '12-04-2024, 30-04-2024, 01-09-2024, 16-10-2024', '2024-06-13 09:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `fullname`, `email`, `phone`, `courses`, `date`, `date_created`) VALUES
(12, 'Divine', 'divine@gmail.com', '09025333325', 'Stress Management & resilience', '0000-00-00', '2024-06-09 15:52:23'),
(13, 'Anukam Valentine', 'anukamvalentine09@gmail.com', '9012878357', 'Strategic thinking', '0000-00-00', '2024-06-10 19:20:41'),
(14, 'Divine', 'johndavid@gmail.com', '08012536674', 'Stress Management & resilience', '0000-00-00', '2024-06-11 09:47:07'),
(15, 'Anukam Valentine', 'anukamvalentine09@gmail.com', '9012878357', 'Strategic thinking', '0000-00-00', '2024-06-11 17:01:45'),
(17, 'OLUMIDE ABIKOYE', 'luabikoye@gmail.com', '08161177834', 'Entrepreneur mindset', '30th of May', '2024-06-13 09:18:25'),
(18, 'Francis Badejo', 'phrancisgilbert@yahoo.com', '07042629011', 'Self Leadership', '1st of June', '2024-06-13 09:18:42');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;
