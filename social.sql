-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2022 at 11:28 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpf`
--

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

DROP TABLE IF EXISTS `social`;
CREATE TABLE IF NOT EXISTS `social` (
  `telegram` text COLLATE utf8_persian_ci NOT NULL,
  `twiter` text COLLATE utf8_persian_ci NOT NULL,
  `whatsapp` text COLLATE utf8_persian_ci NOT NULL,
  `instagram` text COLLATE utf8_persian_ci NOT NULL,
  `google` text COLLATE utf8_persian_ci NOT NULL,
  `pinterest` text COLLATE utf8_persian_ci NOT NULL,
  `github` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`telegram`, `twiter`, `whatsapp`, `instagram`, `google`, `pinterest`, `github`) VALUES
('http://www.instagram.com', 'http://www.instagram.com', 'http://www.instagram.com', 'https://github.com/roqaye01/', 'https://github.com/roqaye01/', 'https://github.com/roqaye01/', 'https://github.com/roqaye01/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
