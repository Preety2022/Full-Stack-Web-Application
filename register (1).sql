-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 07, 2021 at 11:23 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_b`
--

DROP TABLE IF EXISTS `admission_b`;
CREATE TABLE IF NOT EXISTS `admission_b` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mother` text NOT NULL,
  `father` text NOT NULL,
  `apply_for` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `identification` text NOT NULL,
  `category` text NOT NULL,
  `ward_of_lnmu_emp` text NOT NULL,
  `centre` text NOT NULL,
  `image` longblob NOT NULL,
  `12equivalent` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `12clg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `12board` text NOT NULL,
  `12passingyr` year(4) NOT NULL,
  `12percentage` double NOT NULL,
  `Dequivalent` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Dclg` text NOT NULL,
  `Duniversity` text NOT NULL,
  `Dpassingyr` year(4) NOT NULL,
  `Dpercentage` double NOT NULL,
  `Domicile_BR` text NOT NULL,
  `Corresponding_add` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Permanent_add` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `alter_contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adhaar` bigint(50) NOT NULL,
  `date` date NOT NULL,
  `file` longblob NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `payment_detail` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admission_b`
--

INSERT INTO `admission_b` (`id`, `name`, `mother`, `father`, `apply_for`, `dob`, `identification`, `category`, `ward_of_lnmu_emp`, `centre`, `image`, `12equivalent`, `12clg`, `12board`, `12passingyr`, `12percentage`, `Dequivalent`, `Dclg`, `Duniversity`, `Dpassingyr`, `Dpercentage`, `Domicile_BR`, `Corresponding_add`, `Permanent_add`, `contact`, `alter_contact`, `email`, `adhaar`, `date`, `file`, `payment_status`, `payment_id`, `payment_detail`) VALUES
(1, 'Preety Akanksha', 'Pooja Shrivastava', 'Mukesh Ranjan', 'B.Tech(IT/', '2021-08-08', 'mole near nose', 'gen', 'yes', 'dbg', 0x5072656574792e6a7067, 'pcm', 'Chandrasheel Vidyapeeth', 'CBSE', 2017, 81, 'NA', '', '', 0000, 0, 'yes', 'mfp', 'mfp', 9999999999, 8888888888, 'akankshapreety4545@gmail.com', 777777777777, '2021-08-08', 0x416476616e636564204a6176612d446f744e65742d507974686f6e20446576656c6f7065722e706466, 'complete', 'pay_HiU7Zzw3HN3owG', '2021-08-08 04:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `admission_mca`
--

DROP TABLE IF EXISTS `admission_mca`;
CREATE TABLE IF NOT EXISTS `admission_mca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mother` text NOT NULL,
  `father` text NOT NULL,
  `dob` date NOT NULL,
  `identification` text NOT NULL,
  `category` text NOT NULL,
  `ward_of_lnmu_emp` text NOT NULL,
  `centre` text NOT NULL,
  `image` longblob NOT NULL,
  `12equivalent` varchar(10) NOT NULL,
  `12clg` text NOT NULL,
  `12board` text NOT NULL,
  `12passingyr` year(4) NOT NULL,
  `12percentage` double NOT NULL,
  `Dclg` text NOT NULL,
  `Duniversity` text NOT NULL,
  `Dpassingyr` year(4) NOT NULL,
  `Dpercentage` double NOT NULL,
  `Domicile_BR` text NOT NULL,
  `Corresponding_add` text NOT NULL,
  `Permanent_add` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `alter_contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adhaar` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `file` longblob NOT NULL,
  `payment_status` varchar(55) NOT NULL,
  `payment_id` varchar(55) NOT NULL,
  `payment_detail` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admission_mca`
--

INSERT INTO `admission_mca` (`id`, `name`, `mother`, `father`, `dob`, `identification`, `category`, `ward_of_lnmu_emp`, `centre`, `image`, `12equivalent`, `12clg`, `12board`, `12passingyr`, `12percentage`, `Dclg`, `Duniversity`, `Dpassingyr`, `Dpercentage`, `Domicile_BR`, `Corresponding_add`, `Permanent_add`, `contact`, `alter_contact`, `email`, `adhaar`, `date`, `file`, `payment_status`, `payment_id`, `payment_detail`) VALUES
(1, 'Rashmi Guriya', 'Rashmi Guriya', 'Rashmi Guriya', '2021-07-30', 'mole', 'ews', 'yes', 'dbg', 0x6c6e6d752e6a7067, 'pcb', 'Ch', 'cbse', 2017, 81, 'WIT', 'LNMU', 2020, 81, 'yes', 'mfp', 'mfp', 6202119227, 8804147112, 'rashmi@yahoo.com', 777777777777, '2021-08-08', 0x50524545545920414b414e4b534841202831292e706466, 'complete', 'pay_HiTzO41nPF9bTw', '2021-08-07 11:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_end` longtext NOT NULL,
  `bot_end` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `user_end`, `bot_end`) VALUES
(1, 'Hi||Hola||Welcome', 'Hello! How may I help you'),
(2, 'Hello', 'Hi! How may I help you?'),
(3, 'bye', 'See you!'),
(4, 'What is your name?', 'My name is Student\'s Bot. Nice to meet you.');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `dob` date NOT NULL,
  `roll` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `postal_code` bigint(100) NOT NULL,
  `state` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cgpa` float NOT NULL,
  `batch` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `email`, `contact`, `dob`, `roll`, `gender`, `password`, `address`, `city`, `postal_code`, `state`, `country`, `cgpa`, `batch`) VALUES
('Preety Akanksha', 'akankshapreety4545@gmail.com', 6202119227, '1999-06-12', '18-cs-01', 'female', '$2y$10$8wqECJ33kMd/kwtfhcWZ0Oz.eWaAky/GrtqZuvCmiujqXqbqZHpQS', 'muzaffarpur', 'mfp', 842001, 'Bihar', 'India', 8.66, '2018-22'),
('Ananya', 'ananya61@yahoo.com', 6202119227, '2007-01-02', '18-cs-02', 'female', '$2y$10$H2t8KeTA7.rgOOe23uHOZ.wheugQErJZGnsHUm9uoHeIEz5FYPmw6', 'boring road', 'patna', 800001, 'Bihar', 'India', 8, '2016-20');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `roll` varchar(30) NOT NULL,
  `cgpa` float NOT NULL,
  `sem1` float NOT NULL,
  `sem2` float NOT NULL,
  `sem3` float NOT NULL,
  `sem4` float NOT NULL,
  `sem5` float NOT NULL,
  `sem6` float NOT NULL,
  `sem7` float NOT NULL,
  `sem8` float NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`roll`, `cgpa`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`) VALUES
('18-CS-01', 8.22, 7, 8.7, 8.9, 7.6, 8.9, 8.7, 9, 7),
('18-CS-02', 7.87, 8, 8.13, 7.9, 9, 9.1, 8, 6, 6.9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
