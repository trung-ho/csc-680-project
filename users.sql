-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8892
-- Generation Time: May 27, 2019 at 11:22 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` datetime DEFAULT NULL,
  `user_level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `user_level`) VALUES
(1, 'User 1', 'Example', 'user1@example.com', '$2y$10$MT1/IdEpzPDv5MNVYmFUZOU46hjgM40sMLHMhyLtFLsYWFKxO0ovC', '2019-05-20 15:06:36', 0),
(2, 'Admin', 'Example', 'admin@example.com', '$2y$10$cTsXGzyrU2E2fym2gSKD3uZE5yILTDcxK0vquVD1QqrPJDxYy4xqu', '2019-05-20 15:07:27', 1),
(3, 'User 2', 'Exmaple', 'user2@example.com', '$2y$10$X4a6hJZVSHx.VEz9nFTf3.mkCPArHvdKqvBMCrHOlCUD/fID608iy', '2019-05-20 15:28:34', 0),
(4, 'Percy', 'Veer', 'pveer@myisp.com', 'password', NULL, 0),
(5, 'Percy', 'Veer', 'pveer@myisp.com', 'password', NULL, 0),
(6, 'Stan', 'Dard', 'sdard@myisp.net', 'password', NULL, 0),
(7, 'Nora', 'Bone', 'nbone@myisp.com', 'password', NULL, 0),
(8, 'Barry', 'Cade', 'bcade@myisp.co.uk', 'password', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
