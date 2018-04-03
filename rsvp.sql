-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 01:55 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `guestsconfirmed` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `events` (`id`, `theme`, `date`, `time`, `venue`, `created_at`, `guestsconfirmed`) VALUES
(4, 'Party', '0088-07-09', '08:08', 'Delhi', '2018-02-21 01:31:54', NULL),
(5, 'Birthday Party', '2018-12-22', '08:00', 'Janak Dhaaba', '2018-02-21 02:10:32', NULL),
(6, 'Marriage', '0008-07-08', '07:00', 'sre', '2018-02-21 07:21:35', NULL),
(7, 'Dewali Celebration', '2018-03-03', '14:22', 'Saharanpur', '2018-02-22 08:45:35', NULL),
(8, 'Breakup Party', '2018-09-04', '20:00', 'Chillizone', '2018-02-23 02:03:24', NULL);
CREATE TABLE `event_guest` (
  `id` int(255) NOT NULL,
  `event_id` int(255) NOT NULL,
  `guest_id` int(255) NOT NULL,
  `response` varchar(255) DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `event_guest` (`id`, `event_id`, `guest_id`, `response`, `createdat`) VALUES
(222, 114, 1, NULL, '2018-02-16 12:27:16'),
(223, 114, 3, NULL, '2018-02-16 12:27:17'),
(224, 114, 5, NULL, '2018-02-16 12:27:19'),
(225, 114, 7, NULL, '2018-02-16 12:27:21'),
(226, 114, 10, NULL, '2018-02-16 12:27:23'),
(227, 114, 12, NULL, '2018-02-16 12:27:25'),
(228, 114, 11, NULL, '2018-02-16 12:27:26'),
(229, 114, 2, NULL, '2018-02-17 01:34:22'),
(230, 114, 4, NULL, '2018-02-17 01:34:23'),
(231, 108, 19, NULL, '2018-02-17 02:02:06'),
(232, 108, 17, NULL, '2018-02-17 02:02:11'),
(233, 116, 19, NULL, '2018-02-18 02:20:00'),
(234, 116, 21, NULL, '2018-02-18 02:20:34'),
(235, 114, 19, NULL, '2018-02-18 02:21:39'),
(236, 114, 21, NULL, '2018-02-18 02:21:49'),
(237, 114, 18, NULL, '2018-02-18 02:22:11'),
(238, 1, 1, NULL, '2018-02-19 01:44:25'),
(239, 1, 3, NULL, '2018-02-19 01:46:45'),
(240, 1, 5, NULL, '2018-02-19 01:47:02'),
(241, 3, 1, NULL, '2018-02-20 06:24:29'),
(242, 5, 1, NULL, '2018-02-21 02:10:36'),
(243, 7, 1, NULL, '2018-02-22 08:45:42'),
(244, 6, 1, NULL, '2018-02-22 08:47:09'),
(245, 6, 2, NULL, '2018-02-22 08:47:11'),
(246, 7, 4, NULL, '2018-02-22 08:47:25'),
(247, 7, 5, NULL, '2018-02-22 08:47:35'),
(248, 8, 1, NULL, '2018-02-23 02:18:58'),
(249, 8, 7, NULL, '2018-02-23 02:31:33');


CREATE TABLE `guests` (
  `id` int(255) NOT NULL primary key auto_increment,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `guests` (`id`, `name`, `city`, `age`, `email`, `gender`, `created_at`, `visitor`) VALUES
(1, 'manu', 'sre', 20, 'manu@gmail.com', 'male', '2018-02-19 01:21:23', 0),
(7, 'Chandan', 'sre', 21, 'chandan@gmail.com', 'Male', '2018-02-22 08:54:57', 0);


CREATE TABLE `visitor` (
  `id` int(10) NOT NULL primary key auto_increment,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `age` int(4) NOT NULL,
  `email` varchar(255) NOT NULL unique,
  `gender` varchar(255) NOT NULL,
  `requested_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `event_id` int(255) not null,
  `status` varchar(255) default null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `visitor` ( `name`, `city`, `age`, `email`, `gender`, `requested_at`, `event_id`) VALUES
( 'manu', 'sre', 20, 'manu@gmail.com', 'male', '2018-02-19 01:21:23', '8'),
( 'Chandan', 'sre', 21, 'chandan@gmail.com', 'Male', '2018-02-22 08:54:57','8');


CREATE TABLE `host` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(4) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` int(20) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `host` (`id`, `name`, `age`, `Gender`, `city`, `email`, `created_at`, `password`, `admin`) VALUES
(1, 'Manu Singhal', 20, 'Male', 'Saharanpur', 'manusinghal1997@gmail.com', '2018-01-30 11:29:16', 12345, 1),
(5, 'sunny', 21, 'Male', 'SRE', 'sunny@gmail.com', '2018-02-18 01:45:49', 1234, 0),
(7, 'hkhk', 23, 'Male', 'hh', 'd@gmail.com', '2018-02-23 01:11:22', 0, 0);


ALTER TABLE `events`
ALTER TABLE `event_guest`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
ALTER TABLE `event_guest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
ALTER TABLE `guests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `host`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;
