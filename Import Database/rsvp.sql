-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 06:12 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guestsconfirmed` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `theme`, `date`, `time`, `venue`, `created_at`, `guestsconfirmed`) VALUES
(20, 'New Year Party', '2018-03-11', '00:00:00', 'Delhi', '2018-03-07 02:41:53', NULL),
(21, 'Dewali celebration', '2106-03-03', '08:08:00', 'Tehri', '2018-03-07 02:45:10', NULL),
(23, 'christmas ', '1999-09-09', '03:03:00', 'sre', '2018-03-07 02:48:37', NULL),
(24, 'party', '0009-09-09', '09:09:00', 'sre', '2018-03-07 04:09:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_guest`
--

CREATE TABLE `event_guest` (
  `id` int(255) NOT NULL,
  `event_id` int(255) NOT NULL,
  `guest_id` int(255) NOT NULL,
  `response` varchar(255) DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_guest`
--

INSERT INTO `event_guest` (`id`, `event_id`, `guest_id`, `response`, `createdat`) VALUES
(1, 20, 1, 'true', '2018-03-07 02:44:31'),
(2, 20, 3, NULL, '2018-03-07 02:44:32'),
(3, 20, 4, NULL, '2018-03-07 02:44:33'),
(4, 21, 4, 'true', '2018-03-07 02:45:11'),
(5, 21, 5, NULL, '2018-03-07 02:45:12'),
(6, 22, 5, NULL, '2018-03-07 02:45:59'),
(7, 22, 4, NULL, '2018-03-07 02:45:59'),
(8, 22, 3, NULL, '2018-03-07 02:46:00'),
(9, 24, 4, NULL, '2018-03-07 04:09:09'),
(10, 24, 5, NULL, '2018-03-07 04:09:11'),
(11, 20, 6, NULL, '2018-03-07 04:24:46'),
(12, 21, 7, NULL, '2018-03-07 04:49:21'),
(13, 21, 8, NULL, '2018-03-07 04:52:27'),
(14, 20, 9, NULL, '2018-03-07 04:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `city`, `age`, `email`, `gender`, `created_at`) VALUES
(1, 'Manu', 'sre', 21, 'manu@gmail.com', 'Male', '2018-03-07 02:43:20'),
(2, 'prince', 'sre', 21, 'prince@gmail.com', 'Male', '2018-03-07 02:43:34'),
(3, 'sunny', 'sre', 21, 'sunny@gmail.com', 'Male', '2018-03-07 02:43:46'),
(4, 'Neha', 'sre', 21, 'neha@gmail.com', 'Female', '2018-03-07 02:44:03'),
(5, 'sunny', 'roorkee', 21, 'sunny@gmail.com', 'Male', '2018-03-07 02:44:22'),
(6, 'Farreha', 'sre', 21, 'farreha@gmail.com', 'Male', '2018-03-07 04:24:46'),
(7, 'manglam', 'sre', 21, 'shubham@gmail.com', 'Male', '2018-03-07 04:49:21'),
(9, 'sajjad', 'sre', 21, 'sajjad@gmail.com', 'Male', '2018-03-07 04:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`id`, `name`, `age`, `Gender`, `city`, `email`, `created_at`, `password`, `admin`) VALUES
(1, 'Manu Singhal', 21, 'Male', 'sre', 'manusinghal1997@gmail.com', '2018-03-07 02:51:23', 'manu', 0),
(2, 'prince', 21, 'Male', 'sre', 'prince@gmail.com', '2018-03-07 04:08:28', 'prince', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `age` int(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `requested_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `event_id` int(255) NOT NULL,
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `city`, `age`, `email`, `gender`, `requested_at`, `event_id`, `status`) VALUES
(1, 'manu', 'sre', 20, 'manu@gmail.com', 'male', '2018-02-18 14:21:23', 8, NULL),
(2, 'Chandan', 'sre', 21, 'chandan@gmail.com', 'Male', '2018-02-21 21:54:57', 8, NULL),
(3, 'krishna', 'sre', 21, 'krishtyagi277@gmail.com', 'Male', '2018-03-07 02:55:05', 20, NULL),
(4, 'krishna', 'sre', 21, 'krishna@gmail.com', 'Male', '2018-03-07 02:55:56', 20, NULL),
(5, 'gaurav', 'sre', 21, 'gaurav@gmail.com', 'Male', '2018-03-07 04:21:09', 20, NULL),
(6, 'shivam', 'sre', 21, 'shivam@gmail.com', 'Male', '2018-03-07 04:23:46', 20, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_guest`
--
ALTER TABLE `event_guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `event_guest`
--
ALTER TABLE `event_guest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
