-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8892
-- Generation Time: May 29, 2019 at 06:21 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc680`
--

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `oneyeargb` decimal(6,0) NOT NULL,
  `minpriceus` decimal(6,0) NOT NULL,
  `minpricegb` decimal(6,0) NOT NULL,
  `u21us` decimal(6,0) NOT NULL,
  `u21gb` decimal(6,0) NOT NULL,
  `militaryus` decimal(6,0) NOT NULL,
  `militarugb` decimal(6,0) NOT NULL,
  `fiveyearus` decimal(6,0) NOT NULL,
  `fiveyeargb` decimal(6,0) NOT NULL,
  `oneyearus` decimal(6,0) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`oneyeargb`, `minpriceus`, `minpricegb`, `u21us`, `u21gb`, `militaryus`, `militarugb`, `fiveyearus`, `fiveyeargb`, `oneyearus`, `id`) VALUES
('30', '20', '15', '3', '2', '8', '5', '140', '125', '40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` datetime DEFAULT NULL,
  `user_level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `class` char(20) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state_country` char(25) NOT NULL,
  `zcode_pcode` char(10) NOT NULL,
  `phone` char(15) DEFAULT NULL,
  `paid` enum('yes','no') NOT NULL,
  `title` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `user_level`, `class`, `address1`, `address2`, `city`, `state_country`, `zcode_pcode`, `phone`, `paid`, `title`) VALUES
(1, 'User 1', 'Example', 'user1@example.com', '$2y$10$MT1/IdEpzPDv5MNVYmFUZOU46hjgM40sMLHMhyLtFLsYWFKxO0ovC', '2019-05-20 15:06:36', 0, '', '', NULL, '', '', '', NULL, 'yes', NULL),
(2, 'Admin', 'Example', 'admin@example.com', '$2y$10$cTsXGzyrU2E2fym2gSKD3uZE5yILTDcxK0vquVD1QqrPJDxYy4xqu', '2019-05-20 15:07:27', 1, '', '', NULL, '', '', '', NULL, 'yes', NULL),
(3, 'User 2', 'Exmaple', 'user2@example.com', '$2y$10$X4a6hJZVSHx.VEz9nFTf3.mkCPArHvdKqvBMCrHOlCUD/fID608iy', '2019-05-20 15:28:34', 0, '', '', NULL, '', '', '', NULL, 'yes', NULL),
(4, 'Percy', 'Veer', 'pveer@myisp.com', 'password', NULL, 0, '', '', NULL, '', '', '', NULL, 'yes', NULL),
(5, 'Percy', 'Veer', 'pveer@myisp.com', 'password', NULL, 0, '', '', NULL, '', '', '', NULL, 'yes', NULL),
(6, 'Stan', 'Dard', 'sdard@myisp.net', 'password', NULL, 0, '', '', NULL, '', '', '', NULL, 'yes', NULL),
(7, 'Nora', 'Bone', 'nbone@myisp.com', 'password', NULL, 0, '', '', NULL, '', '', '', NULL, 'yes', NULL),
(8, 'Barry', 'Cade', 'bcade@myisp.co.uk', 'password', NULL, 0, '', '', NULL, '', '', '', NULL, 'yes', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
