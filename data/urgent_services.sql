-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 03:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urgent_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `surname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `surname`, `email`, `password`, `mdt`) VALUES
(1, 'Shingirai ', 'Chikasha', 'shingiraichikasha@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', '2022-07-13 02:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(256) NOT NULL,
  `sub_category` varchar(256) NOT NULL,
  `mdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `sub_category`, `mdt`) VALUES
(4, 'Service stations', 'Fuel topup', '2022-08-04 06:57:30'),
(7, 'Tyres and Suspension', 'Springs', '2022-08-04 07:39:45'),
(8, 'Tyres and Suspension', 'Pressure', '2022-08-04 07:48:53'),
(9, 'Service stations', 'Fuel & Pressure', '2022-08-04 07:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `service` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `mdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `phoneNumber`, `email`, `service`, `quantity`, `mdt`) VALUES
(87, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:08:48'),
(88, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:09:01'),
(89, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:27:34'),
(90, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:28:10'),
(91, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:30:50'),
(92, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:30:53'),
(93, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:31:04'),
(94, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:46:49'),
(95, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:52:50'),
(96, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:53:10'),
(97, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:53:27'),
(98, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:53:37'),
(99, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:56:10'),
(100, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:57:51'),
(101, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 10:58:46'),
(102, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:00:35'),
(103, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:01:16'),
(104, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:02:05'),
(105, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:06:50'),
(106, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:07:08'),
(107, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:07:50'),
(108, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:33:19'),
(109, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:33:52'),
(110, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:34:36'),
(111, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:35:24'),
(112, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:37:36'),
(113, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:38:28'),
(114, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:38:40'),
(115, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:39:11'),
(116, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:39:49'),
(117, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:40:37'),
(118, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 11:57:24'),
(119, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 12:06:14'),
(120, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 12:07:02'),
(121, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 12:13:52'),
(122, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 12:14:12'),
(123, 'courage', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-27 12:51:02'),
(124, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 13:49:25'),
(125, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 9, 0, '2022-07-27 13:51:35'),
(126, 'Peleka Express Delivery', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-27 13:54:29'),
(127, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 01:27:43'),
(128, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 01:52:31'),
(129, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:02:44'),
(130, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:06:20'),
(131, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:07:10'),
(132, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:08:07'),
(133, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:08:18'),
(134, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:08:37'),
(135, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:15:35'),
(136, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:16:00'),
(137, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:16:36'),
(138, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:17:17'),
(139, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:18:11'),
(140, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:18:35'),
(141, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:18:58'),
(142, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:19:57'),
(143, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:23:05'),
(144, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 02:23:45'),
(145, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:20:40'),
(146, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:24:29'),
(147, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:25:00'),
(148, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:25:27'),
(149, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:25:38'),
(150, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:26:48'),
(151, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:30:14'),
(152, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:31:16'),
(153, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:31:51'),
(154, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:32:12'),
(155, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:32:33'),
(156, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:32:54'),
(157, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:33:16'),
(158, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:33:44'),
(159, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:34:06'),
(160, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:34:19'),
(161, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:34:48'),
(162, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:35:43'),
(163, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:36:41'),
(164, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:36:56'),
(165, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 0, 0, '2022-07-31 22:37:23'),
(166, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 01:30:42'),
(167, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 01:57:10'),
(168, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 01:57:42'),
(169, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 02:02:08'),
(170, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 02:11:30'),
(171, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 02:12:01'),
(172, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 02:12:33'),
(173, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 02:14:41'),
(174, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 10:09:27'),
(175, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 2, 0, '2022-08-01 10:25:14'),
(176, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 11:31:31'),
(177, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 11:31:51'),
(178, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 11:33:59'),
(179, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 11:36:17'),
(180, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 11:36:43'),
(181, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 11:44:51'),
(182, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 11:48:40'),
(183, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 11:56:15'),
(184, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 11:56:31'),
(185, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 11:56:54'),
(186, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 12:33:21'),
(187, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 12:34:45'),
(188, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 12:38:52'),
(189, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 12:39:07'),
(190, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 12:39:19'),
(191, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 12:40:21'),
(192, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 12:41:21'),
(193, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:41:46'),
(194, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:44:06'),
(195, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:46:07'),
(196, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:47:57'),
(197, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:48:20'),
(198, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:51:51'),
(199, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:54:24'),
(200, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:55:36'),
(201, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:57:52'),
(202, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:58:42'),
(203, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 12:59:27'),
(204, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 13:01:36'),
(205, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 13:02:12'),
(206, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 13:03:25'),
(207, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 13:03:46'),
(208, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 14:51:56'),
(209, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 14:53:16'),
(210, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 14:53:34'),
(211, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 21:04:09'),
(212, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 16, 0, '2022-08-01 21:07:13'),
(213, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 21:07:48'),
(214, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 21:30:25'),
(215, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 21:36:17'),
(216, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 21:36:41'),
(217, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 21:40:02'),
(218, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 21:40:49'),
(219, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 21:48:03'),
(220, 'Tamuka Magadzire', 773603478, 'shingi@gmail.com', 15, 0, '2022-08-01 22:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `company` varchar(20) NOT NULL,
  `service` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_ratings` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_review` text NOT NULL,
  `mdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `company`, `service`, `user_name`, `user_ratings`, `user_email`, `user_review`, `mdt`) VALUES
(35, '2', 15, 'Tamuka Magadzire', 8, 'shingi@gmail.com', ',', '2022-08-01 23:35:32'),
(36, '2', 16, 'SihniriAI CHIKASHA', 8, 'shingi@gmail.com', ';,;l', '2022-08-01 23:59:48'),
(37, '2', 15, 'shingirai chikasha', 3, 'shingi@gmail.com', ';l', '2022-08-02 00:03:21'),
(38, '2', 16, 'Tamuka Magadzire', 9, 'shingi@gmail.com', ';l;l', '2022-08-02 00:09:43'),
(39, '2', 16, 'Tamuka Magadzire', 1, 'shingi@gmail.com', 'zdsadZ', '2022-08-04 04:41:30'),
(40, '2', 15, 'Tamuka Magadzire', 4, 'shingi@gmail.com', 's', '2022-08-04 04:47:34'),
(41, '2', 15, 'SihniriAI CHIKASHA', 6, 'shingi@gmail.com', 'sdfds', '2022-08-04 04:48:43'),
(42, '2', 15, 'SihniriAI CHIKASHA', 9, 'shingi@gmail.com', ',;l;l', '2022-08-04 04:50:08'),
(43, '9', 36, 'Shingirai chikasha', 7, 'shingiraichikasha@gmail.com', 'asd', '2022-08-04 08:00:09'),
(44, '9', 37, 'Shingirai chikasha', 4, 'shingiraichikasha@gmail.com', 'w', '2022-08-04 08:00:48'),
(45, '8', 38, 'Shingirai chikasha', 9, 'shingiraichikasha@gmail.com', 'sf', '2022-08-04 08:13:53'),
(46, '8', 38, 'Shingirai chikasha', 8, 'shingiraichikasha@gmail.com', 'S', '2022-08-04 08:29:09'),
(47, '8', 38, 'Shingirai chikasha', 8, 'shingiraichikasha@gmail.com', 'kj', '2022-08-04 08:36:03'),
(48, '8', 38, 'Shingirai chikasha', 7, 'admin@gmail.com', 'nkj', '2022-08-04 08:36:26'),
(49, '8', 38, 'Shingirai chikasha', 7, 'user@gmail.com', 'a', '2022-08-04 08:36:54'),
(50, '8', 38, 'Shingirai chikasha', 8, 'kudakwashemaleka@gmail.com', 'kl', '2022-08-04 08:37:15'),
(51, '8', 38, 'Shingirai chikasha', 4, 'kudakwashemaleka@gmail.com', 'k', '2022-08-04 08:37:36'),
(52, '8', 38, 'Shingirai chikasha', 8, 'kudakwashemaleka@gmail.com', 'as', '2022-08-04 08:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `logo` int(11) NOT NULL,
  `location` varchar(75) NOT NULL,
  `price_per_km` int(11) NOT NULL,
  `towing_amount` int(11) NOT NULL,
  `category` varchar(75) NOT NULL,
  `sub_category` varchar(75) NOT NULL,
  `service_description` varchar(200) NOT NULL,
  `mdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `company`, `logo`, `location`, `price_per_km`, `towing_amount`, `category`, `sub_category`, `service_description`, `mdt`) VALUES
(15, 2, 0, 'Harare', 7, 0, '2', '2', 'll', '2022-08-01 01:26:20'),
(22, 15, 0, 'Bulawayo', 87, 0, '4', '4', 'sds', '2022-08-04 06:58:58'),
(23, 2, 0, 'Marondera', 345, 0, '2', '3', 'wer', '2022-08-04 07:00:52'),
(24, 2, 0, 'Gwanda', 7, 0, '2', '3', 'ad', '2022-08-04 07:08:32'),
(25, 2, 0, 'Gwanda', 7, 0, '2', '2', 'fsdf', '2022-08-04 07:09:51'),
(33, 15, 0, 'Gweru', 7, 0, '7', '7', 'asd', '2022-08-04 07:47:48'),
(34, 15, 0, 'Gweru', 7, 0, '7', '8', 'lk', '2022-08-04 07:49:53'),
(35, 15, 0, 'Gweru', 7, 0, '9', '9', 'zs', '2022-08-04 07:50:12'),
(36, 15, 0, 'Gweru', 7, 0, '4', '9', 'tg', '2022-08-04 07:51:17'),
(37, 14, 0, 'Gweru', 234, 0, '4', '9', '2e', '2022-08-04 07:59:30'),
(38, 14, 0, 'Gweru', 8, 0, '7', '8', 'jh', '2022-08-04 08:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `service_orders`
--

CREATE TABLE `service_orders` (
  `id` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `client_name` varchar(75) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `car_name` varchar(56) NOT NULL,
  `car_model` varchar(77) NOT NULL,
  `reg_number` varchar(15) NOT NULL,
  `color` varchar(25) NOT NULL,
  `location` varchar(60) NOT NULL,
  `mdt` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_orders`
--

INSERT INTO `service_orders` (`id`, `service`, `company`, `quantity`, `client_name`, `phoneNumber`, `car_name`, `car_model`, `reg_number`, `color`, `location`, `mdt`, `status`) VALUES
(1, 9, 0, 0, 'Peleka Express Delivery', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', '', '2022-07-27 12:00:10', 'Pending'),
(2, 9, 0, 0, 'Peleka Express Delivery', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', '', '2022-07-27 12:03:48', ''),
(3, 9, 0, 0, 'Peleka Express Delivery', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', '', '2022-07-27 12:06:34', ''),
(4, 9, 0, 0, 'Peleka Express Delivery', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', '', '2022-07-27 12:07:20', ''),
(5, 9, 0, 0, 'Peleka Express Delivery', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', '', '2022-07-27 12:14:35', ''),
(6, 0, 0, 0, 'Peleka Express Delivery', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', '', '2022-07-27 12:51:57', ''),
(7, 9, 0, 0, 'Peleka Express Delivery', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', 'Gweru,Kwekwe,Kadoma', '2022-07-27 13:50:27', 'Pending'),
(8, 0, 0, 0, 'Peleka Express Delivery', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', 'Gweru', '2022-07-27 13:54:47', 'Pending'),
(9, 2, 0, 0, 'Tamuka Magadzire', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', 'Harare', '2022-08-01 21:30:46', 'Pending'),
(10, 15, 0, 0, 'Tamuka Magadzire', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', 'Harare', '2022-08-01 21:48:22', 'Pending'),
(11, 15, 2, 0, 'Tamuka Magadzire', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', 'Harare', '2022-08-01 22:20:47', 'Pending'),
(12, 15, 2, 0, 'Tamuka Magadzire', 773603478, 'Toyota', 'Wish', 'ADE1102', 'Green', 'Harare', '2022-08-01 22:21:03', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `session_logs`
--

CREATE TABLE `session_logs` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `user` int(11) NOT NULL,
  `role` varchar(15) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `end_type` int(11) NOT NULL COMMENT '0 - logout, 1 - expiry, 3 - tab closed '
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `session_logs`
--

INSERT INTO `session_logs` (`id`, `ip`, `user`, `role`, `start_time`, `end_time`, `end_type`) VALUES
(947, '::1', 2, 'owner', '2022-06-22 14:47:37', '2022-06-22 14:47:49', 0),
(948, '::1', 2, 'owner', '2022-06-22 15:03:10', '2022-06-22 15:03:12', 0),
(949, '::1', 2, 'owner', '2022-06-22 15:18:51', '2022-06-22 15:18:53', 0),
(950, '::1', 2, 'owner', '2022-06-22 15:19:07', '2022-06-22 15:19:10', 0),
(951, '::1', 2, 'owner', '2022-06-22 15:25:40', '2022-06-22 15:25:43', 0),
(952, '::1', 2, 'owner', '2022-06-22 15:27:03', '2022-06-22 15:27:06', 0),
(953, '::1', 2, 'owner', '2022-06-22 15:28:00', '2022-06-22 15:28:03', 0),
(954, '::1', 2, 'owner', '2022-06-22 22:50:32', '2022-06-22 22:50:34', 0),
(955, '::1', 2, 'owner', '2022-06-22 23:04:41', '2022-06-22 23:04:43', 0),
(956, '::1', 2, 'owner', '2022-06-22 23:16:25', '2022-06-22 23:16:28', 0),
(957, '::1', 2, 'owner', '2022-06-22 23:32:35', '2022-06-22 23:32:38', 0),
(958, '::1', 2, 'owner', '2022-06-22 23:34:48', '2022-06-22 23:34:51', 0),
(959, '::1', 2, 'owner', '2022-06-22 23:36:55', '2022-06-22 23:36:58', 0),
(960, '::1', 2, 'owner', '2022-06-23 14:23:53', '2022-06-23 14:31:04', 0),
(961, '::1', 2, 'owner', '2022-06-25 14:14:12', '2022-06-25 17:22:12', 0),
(962, '::1', 2, 'owner', '2022-06-25 17:22:12', '2022-06-25 17:36:29', 0),
(963, '::1', 2, 'owner', '2022-06-25 17:43:50', '2022-06-25 20:36:18', 0),
(964, '::1', 2, 'owner', '2022-06-25 20:36:18', '2022-06-25 20:36:46', 0),
(965, '::1', 2, 'owner', '2022-06-25 21:22:15', '2022-06-25 22:35:32', 0),
(966, '::1', 2, 'owner', '2022-06-25 22:46:01', '2022-07-03 18:20:20', 0),
(967, '::1', 2, 'owner', '2022-07-03 18:20:20', '2022-07-03 18:36:16', 0),
(968, '::1', 2, 'owner', '2022-07-03 22:37:37', '2022-07-03 23:16:25', 0),
(969, '::1', 2, 'owner', '2022-07-04 22:54:00', '2022-07-04 23:36:32', 0),
(970, '::1', 2, 'owner', '2022-07-04 23:36:32', '2022-07-04 23:38:15', 0),
(971, '::1', 2, 'owner', '2022-07-04 23:38:15', '2022-07-05 09:02:07', 0),
(972, '::1', 2, 'owner', '2022-07-05 09:02:07', '2022-07-05 10:55:23', 0),
(973, '::1', 2, 'owner', '2022-07-05 10:55:23', '2022-07-05 16:21:02', 0),
(974, '::1', 2, 'owner', '2022-07-05 16:21:02', '2022-07-12 00:23:11', 0),
(975, '::1', 2, 'owner', '2022-07-12 00:23:11', '2022-07-12 01:30:14', 0),
(976, '::1', 1, 'admin', '2022-07-13 04:58:09', '0000-00-00 00:00:00', 0),
(977, '::1', 1, 'admin', '2022-07-13 04:58:19', '0000-00-00 00:00:00', 0),
(978, '::1', 1, 'admin', '2022-07-13 04:59:21', '0000-00-00 00:00:00', 0),
(979, '::1', 1, 'admin', '2022-07-13 05:21:06', '0000-00-00 00:00:00', 0),
(980, '::1', 1, 'admin', '2022-07-13 22:45:56', '0000-00-00 00:00:00', 0),
(981, '::1', 1, 'admin', '2022-07-14 03:32:45', '0000-00-00 00:00:00', 0),
(982, '::1', 1, 'admin', '2022-07-14 03:32:49', '0000-00-00 00:00:00', 0),
(983, '::1', 1, 'admin', '2022-07-14 03:32:49', '0000-00-00 00:00:00', 0),
(984, '::1', 1, 'admin', '2022-07-14 03:32:50', '0000-00-00 00:00:00', 0),
(985, '::1', 1, 'admin', '2022-07-14 03:32:50', '0000-00-00 00:00:00', 0),
(986, '::1', 1, 'admin', '2022-07-14 03:32:50', '0000-00-00 00:00:00', 0),
(987, '::1', 1, 'admin', '2022-07-14 03:34:32', '0000-00-00 00:00:00', 0),
(988, '::1', 2, 'user', '2022-07-14 03:40:00', '0000-00-00 00:00:00', 0),
(989, '::1', 2, 'user', '2022-07-14 03:40:20', '0000-00-00 00:00:00', 0),
(990, '::1', 2, 'user', '2022-07-14 03:42:07', '0000-00-00 00:00:00', 0),
(991, '::1', 2, 'user', '2022-07-14 03:42:29', '0000-00-00 00:00:00', 0),
(992, '::1', 1, 'admin', '2022-07-14 03:43:05', '0000-00-00 00:00:00', 0),
(993, '::1', 1, 'admin', '2022-07-14 03:43:26', '0000-00-00 00:00:00', 0),
(994, '::1', 1, 'admin', '2022-07-14 03:44:03', '0000-00-00 00:00:00', 0),
(995, '::1', 2, 'user', '2022-07-14 23:57:34', '0000-00-00 00:00:00', 0),
(996, '::1', 2, 'user', '2022-07-16 22:12:00', '0000-00-00 00:00:00', 0),
(997, '::1', 2, 'user', '2022-07-16 23:26:18', '0000-00-00 00:00:00', 0),
(998, '::1', 2, 'user', '2022-07-16 23:30:41', '0000-00-00 00:00:00', 0),
(999, '::1', 2, 'user', '2022-07-16 23:32:20', '0000-00-00 00:00:00', 0),
(1000, '::1', 2, 'user', '2022-07-16 23:39:29', '0000-00-00 00:00:00', 0),
(1001, '::1', 2, 'user', '2022-07-17 01:06:15', '0000-00-00 00:00:00', 0),
(1002, '::1', 2, 'user', '2022-07-18 12:05:26', '0000-00-00 00:00:00', 0),
(1003, '::1', 1, 'admin', '2022-07-18 12:07:55', '0000-00-00 00:00:00', 0),
(1004, '::1', 2, 'user', '2022-07-18 12:12:09', '0000-00-00 00:00:00', 0),
(1005, '::1', 1, 'admin', '2022-07-18 12:36:31', '0000-00-00 00:00:00', 0),
(1006, '::1', 1, 'admin', '2022-07-21 10:30:37', '0000-00-00 00:00:00', 0),
(1007, '::1', 1, 'admin', '2022-07-21 10:30:37', '0000-00-00 00:00:00', 0),
(1008, '::1', 2, 'user', '2022-07-21 10:35:54', '0000-00-00 00:00:00', 0),
(1009, '::1', 2, 'user', '2022-07-25 15:15:27', '0000-00-00 00:00:00', 0),
(1010, '::1', 2, 'user', '2022-07-26 14:50:08', '0000-00-00 00:00:00', 0),
(1011, '::1', 1, 'admin', '2022-07-26 14:55:18', '0000-00-00 00:00:00', 0),
(1012, '::1', 2, 'user', '2022-07-27 12:33:05', '0000-00-00 00:00:00', 0),
(1013, '::1', 2, 'user', '2022-07-27 14:17:48', '0000-00-00 00:00:00', 0),
(1014, '::1', 2, 'user', '2022-07-27 14:52:11', '0000-00-00 00:00:00', 0),
(1015, '::1', 2, 'user', '2022-07-27 15:55:25', '0000-00-00 00:00:00', 0),
(1016, '::1', 2, 'user', '2022-07-28 00:55:09', '0000-00-00 00:00:00', 0),
(1017, '::1', 2, 'user', '2022-07-28 02:06:17', '0000-00-00 00:00:00', 0),
(1018, '::1', 2, 'user', '2022-07-28 02:10:51', '0000-00-00 00:00:00', 0),
(1019, '::1', 2, 'user', '2022-07-28 11:38:33', '0000-00-00 00:00:00', 0),
(1020, '::1', 1, 'admin', '2022-07-28 11:39:24', '0000-00-00 00:00:00', 0),
(1021, '::1', 2, 'user', '2022-07-28 16:10:55', '0000-00-00 00:00:00', 0),
(1022, '::1', 2, 'user', '2022-07-28 16:49:22', '0000-00-00 00:00:00', 0),
(1023, '::1', 2, 'user', '2022-07-28 16:49:22', '0000-00-00 00:00:00', 0),
(1024, '::1', 1, 'admin', '2022-07-29 15:15:03', '0000-00-00 00:00:00', 0),
(1025, '::1', 1, 'admin', '2022-07-29 15:20:44', '0000-00-00 00:00:00', 0),
(1026, '::1', 12, 'user', '2022-07-29 15:26:38', '0000-00-00 00:00:00', 0),
(1027, '::1', 2, 'user', '2022-07-31 04:00:37', '0000-00-00 00:00:00', 0),
(1028, '::1', 2, 'user', '2022-08-01 00:38:26', '0000-00-00 00:00:00', 0),
(1029, '::1', 13, 'user', '2022-08-01 00:52:50', '0000-00-00 00:00:00', 0),
(1030, '::1', 14, 'user', '2022-08-01 01:20:27', '0000-00-00 00:00:00', 0),
(1031, '::1', 1, 'admin', '2022-08-01 01:21:34', '0000-00-00 00:00:00', 0),
(1032, '::1', 14, 'user', '2022-08-01 01:26:59', '0000-00-00 00:00:00', 0),
(1033, '::1', 2, 'user', '2022-08-01 01:31:23', '0000-00-00 00:00:00', 0),
(1034, '::1', 14, 'user', '2022-08-01 01:34:58', '0000-00-00 00:00:00', 0),
(1035, '::1', 1, 'admin', '2022-08-01 01:52:58', '0000-00-00 00:00:00', 0),
(1036, '::1', 2, 'user', '2022-08-01 02:53:57', '0000-00-00 00:00:00', 0),
(1037, '::1', 14, 'user', '2022-08-01 03:04:15', '0000-00-00 00:00:00', 0),
(1038, '::1', 2, 'user', '2022-08-01 03:25:54', '0000-00-00 00:00:00', 0),
(1039, '::1', 14, 'user', '2022-08-01 03:41:35', '0000-00-00 00:00:00', 0),
(1040, '::1', 14, 'user', '2022-08-01 23:17:31', '0000-00-00 00:00:00', 0),
(1041, '::1', 14, 'user', '2022-08-01 23:48:51', '0000-00-00 00:00:00', 0),
(1042, '::1', 2, 'user', '2022-08-02 00:11:24', '0000-00-00 00:00:00', 0),
(1043, '::1', 14, 'user', '2022-08-02 00:14:00', '0000-00-00 00:00:00', 0),
(1044, '::1', 2, 'user', '2022-08-02 00:17:30', '0000-00-00 00:00:00', 0),
(1045, '::1', 14, 'user', '2022-08-02 00:18:11', '0000-00-00 00:00:00', 0),
(1046, '::1', 2, 'user', '2022-08-02 00:21:55', '0000-00-00 00:00:00', 0),
(1047, '::1', 14, 'user', '2022-08-02 00:22:57', '0000-00-00 00:00:00', 0),
(1048, '::1', 2, 'user', '2022-08-02 01:00:28', '0000-00-00 00:00:00', 0),
(1049, '::1', 14, 'user', '2022-08-02 01:01:31', '0000-00-00 00:00:00', 0),
(1050, '::1', 2, 'user', '2022-08-02 01:06:14', '0000-00-00 00:00:00', 0),
(1051, '::1', 2, 'user', '2022-08-02 01:46:52', '0000-00-00 00:00:00', 0),
(1052, '::1', 14, 'user', '2022-08-02 01:47:28', '0000-00-00 00:00:00', 0),
(1053, '::1', 2, 'user', '2022-08-02 01:50:14', '0000-00-00 00:00:00', 0),
(1054, '::1', 14, 'user', '2022-08-02 01:58:52', '0000-00-00 00:00:00', 0),
(1055, '::1', 2, 'user', '2022-08-02 02:01:28', '0000-00-00 00:00:00', 0),
(1056, '::1', 14, 'user', '2022-08-02 02:01:55', '0000-00-00 00:00:00', 0),
(1057, '::1', 15, 'user', '2022-08-04 06:52:25', '0000-00-00 00:00:00', 0),
(1058, '::1', 1, 'admin', '2022-08-04 06:53:53', '0000-00-00 00:00:00', 0),
(1059, '::1', 15, 'user', '2022-08-04 06:57:23', '0000-00-00 00:00:00', 0),
(1060, '::1', 15, 'user', '2022-08-04 07:01:34', '0000-00-00 00:00:00', 0),
(1061, '::1', 1, 'admin', '2022-08-04 08:25:24', '0000-00-00 00:00:00', 0),
(1062, '::1', 1, 'admin', '2022-08-04 08:56:58', '0000-00-00 00:00:00', 0),
(1063, '::1', 2, 'user', '2022-08-04 09:00:19', '0000-00-00 00:00:00', 0),
(1064, '::1', 14, 'user', '2022-08-04 09:11:59', '0000-00-00 00:00:00', 0),
(1065, '::1', 1, 'admin', '2022-08-04 09:18:07', '0000-00-00 00:00:00', 0),
(1066, '::1', 1, 'admin', '2022-08-04 09:19:18', '0000-00-00 00:00:00', 0),
(1067, '::1', 15, 'user', '2022-08-04 09:26:38', '0000-00-00 00:00:00', 0),
(1068, '::1', 1, 'admin', '2022-08-04 09:39:31', '0000-00-00 00:00:00', 0),
(1069, '::1', 1, 'admin', '2022-08-04 09:48:24', '0000-00-00 00:00:00', 0),
(1070, '::1', 14, 'user', '2022-08-04 09:58:39', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `hq` varchar(30) NOT NULL,
  `services` varchar(256) NOT NULL,
  `licence_number` varchar(256) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `whatsapp` int(11) NOT NULL,
  `link` varchar(256) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `company_name`, `hq`, `services`, `licence_number`, `telephone`, `email`, `whatsapp`, `link`, `status`, `password`) VALUES
(2, 'National Tyre Service', 'Gweru ', 'tyre repair', '', 1313131, 'tyres@gmail.com', 32424, '16591008071.png', 'Active', '202cb962ac59075b964b07152d234b70'),
(3, 'Peleka Express Delivery', 'Harare', 'fuel', '', 2147483647, 'pelekazw@gmail.com', 8463548, 'How-to-Use-Wrike-as-a-Ticketin', 'Active', '202cb962ac59075b964b07152d234b70'),
(14, 'Tren-tyres', '66 Second St, Gweru', '', '', 785000999, 'trentyres@gmail.com', 772524692, '1659309615zupcobus.jpg', 'Active', '202cb962ac59075b964b07152d234b70'),
(15, 'Road Angels', '4933,mkoba 15', '', '', 785077777, 'roadangels@gmail.com', 772524692, '1659588733ixeGeln-car-logos-wallpapers.jpg', 'Active', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_orders`
--
ALTER TABLE `service_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_logs`
--
ALTER TABLE `session_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `service_orders`
--
ALTER TABLE `service_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `session_logs`
--
ALTER TABLE `session_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1071;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
