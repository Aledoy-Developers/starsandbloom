-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 02:03 PM
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
  `price` varchar(200) DEFAULT NULL,
  `available_dates` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courses`, `description`, `price`, `available_dates`, `date_created`) VALUES
(33, 'Emotional Intelligence', 'Description....', NULL, '  12th of June ', '2024-06-19 21:29:18'),
(34, 'Leadership Mindset', 'Description....', NULL, ' 14th of June ', '2024-06-19 21:31:49'),
(35, 'Communication Workshop', '  Description....  ', '', '   17th of June, 20th of June, 23rd of June  ', '2024-06-19 21:32:21'),
(36, 'Entrepreneur Mindset', 'Description....', NULL, ' 18th of June ', '2024-06-19 21:32:59'),
(37, 'Strategic Thinking', 'Description....', NULL, ' 18th of June ', '2024-06-19 21:35:33'),
(38, 'Self Leadership', 'Description....', NULL, ' 18th of June ', '2024-06-19 21:35:59'),
(39, 'Time Management', ' Description.....', NULL, ' 20th of June ', '2024-06-19 21:36:28'),
(40, 'Stress Management & Resilliance', 'Description.....', NULL, '21th of June', '2024-06-19 21:37:23'),
(41, 'Self Accountability', 'Description....', NULL, '23rd of June', '2024-06-19 21:38:03'),
(42, 'Team Spirit', 'Description...', NULL, '24th of June', '2024-06-19 21:38:40'),
(43, 'Conflict Resolution', 'Description....', NULL, '25th of June', '2024-06-19 21:39:22'),
(44, 'Financial Awareness', 'Description.....', NULL, '27th of June, 29th of June ', '2024-06-19 21:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'administrator', '$2y$10$QP8P.a0gWbAUn7M9rl5WuOa/QG5hwo3pgyBz.P9wu9HM4WoStOvGe');

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
(14, 'Divine', 'johndavid@gmail.com', '08012536674', 'Stress Management & resilience', '0000-00-00', '2024-06-11 09:47:07'),
(17, 'John David', 'davidjohn707@gmail.com', '08013467588', 'Communication Workshop', '20th of June', '2024-06-19 22:02:24'),
(18, 'Anukam Valentine', 'anukamvalentine09@gmail.com', '9012878357', 'Stress Management & Resilliance', '21th of June', '2024-06-22 20:18:41');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
