-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2024 at 04:25 PM
-- Server version: 10.2.44-MariaDB
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starsandbloom_starsbloom`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courses`, `description`, `price`, `available_dates`, `date_created`) VALUES
(33, 'Emotional Intelligence', 'Description....', '10000', '  12th of June ', '2024-06-19 21:29:18'),
(34, 'Leadership Mindset', 'Description....', '10000', ' 14th of June ', '2024-06-19 21:31:49'),
(35, 'Communication Workshop', '  Description....  ', '20000', '   17th of June, 20th of June, 23rd of June  ', '2024-06-19 21:32:21'),
(36, 'Entrepreneur Mindset', 'Description....', '20000', ' 18th of June ', '2024-06-19 21:32:59'),
(37, 'Strategic Thinking', 'Description....', '20000', ' 18th of June ', '2024-06-19 21:35:33'),
(38, 'Self Leadership', 'Description....', '20000', ' 18th of June ', '2024-06-19 21:35:59'),
(39, 'Time Management', ' Description.....', '20000', ' 20th of June ', '2024-06-19 21:36:28'),
(40, 'Stress Management & Resilliance', 'Description.....', '20000', '21th of June', '2024-06-19 21:37:23'),
(41, 'Self Accountability', 'Description....', '25000', '23rd of June', '2024-06-19 21:38:03'),
(42, 'Team Spirit', 'Description...', '25000', '24th of June', '2024-06-19 21:38:40'),
(43, 'Conflict Resolution', 'Description....', '25000', '25th of June', '2024-06-19 21:39:22'),
(44, 'Financial Awareness', 'Description.....', '25000', '27th of June, 29th of June ', '2024-06-19 21:39:57'),
(47, 'AI', 'Artificial intel', '50', '1st July 2024', '2024-06-28 11:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `fullname`, `email`, `phone`, `courses`, `date`, `date_created`) VALUES
(11, 'David', 'johndavid@gmail.com', '08012536674', 'Stress Management & resilience', '0000-00-00', '2024-06-07 14:54:37'),
(14, 'Divine', 'johndavid@gmail.com', '08012536674', 'Stress Management & resilience', '0000-00-00', '2024-06-11 09:47:07'),
(17, 'John David', 'davidjohn707@gmail.com', '08013467588', 'Communication Workshop', '20th of June', '2024-06-19 22:02:24'),
(18, 'Anukam Valentine', 'anukamvalentine09@gmail.com', '9012878357', 'Stress Management & Resilliance', '21th of June', '2024-06-22 20:18:41'),
(21, 'OLUMIDE ABIKOYE', 'luabikoye@gmail.com', '07042629011', 'Self Leadership', '18th of June', '2024-06-24 12:55:45'),
(22, 'asasdc', 'asdcas@iqueygfiqw.col', 'asdcasd', 'Entrepreneur Mindset', '18th of June', '2024-06-24 12:56:03'),
(23, 'asasdc', 'asdcas@iqueygfiqw.col', 'asdcasd', 'Entrepreneur Mindset', '18th of June', '2024-06-24 12:57:23'),
(24, 'OLUMIDE ABIKOYE', 'luabikoye@gmail.com', '07042629011', 'Self Leadership', '18th of June', '2024-06-24 13:00:01'),
(25, 'OLUMIDE ABIKOYE', 'luabikoye@gmail.com', '07042629011', 'Self Leadership', '18th of June', '2024-06-24 13:00:42'),
(26, 'Anukam Valentine', 'johndavid@gmail.com', '08013467588', 'Emotional Intelligence', '12th of June', '2024-06-24 16:28:24'),
(27, 'Pelumi ', 'pelumiajibola@yahoo.com', '+447776751354', 'Strategic Thinking', '18th of June', '2024-06-24 19:04:41'),
(28, 'Pelumi ', 'pelumiajibola@yahoo.com', '+447776751354', 'Leadership Mindset', '14th of June', '2024-06-24 19:07:04'),
(29, 'Anukam Valentine', 'anukamvalentine09@gmail.com', '9012878357', 'Leadership Mindset', '14th of June', '2024-06-25 12:59:05'),
(30, 'Pelumi', 'pelumiajibola@yahoo.com', '0892736093', 'Time Management', '20th of June', '2024-06-28 11:32:46'),
(31, 'Damipe', 'pelumi@yahoo.com', '38383838', 'AI', '1st July 2024', '2024-06-28 11:35:11'),
(32, 'Francis Badejo', 'phrancisgilbert@yahoo.com', '07042629011', 'Self Accountability', '23rd of June', '2024-06-28 11:37:08'),
(33, 'David', 'johndavid@gmail.com', '08013467588', 'Strategic Thinking', '18th of June', '2024-06-28 11:57:27'),
(34, 'Anukam Valentine', 'johndavid@gmail.com', '09025333325', 'Stress Management & Resilliance', '21th of June', '2024-06-28 12:00:49');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
