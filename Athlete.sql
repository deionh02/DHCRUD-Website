-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2018 at 01:13 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Athlete`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE IF NOT EXISTS `athlete` (
  `model_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Athlete_Name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sport` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`model_id`, `Athlete_Name`, `Sport`, `Gender`) VALUES
(1, 'Steffon Diggs', 'Football', 'Male'),
(2, 'Lebron James', 'Basketball', 'Male'),
(3, 'Ninja', 'Fortnite', 'Male'),
(4, 'Lionel Messi', 'Soccer', 'Male'),
(5, 'Maya Moore', 'Basketball', 'Female'),
(6, 'Alex Morgan', 'Soccer', 'Female'),
(7, 'Ronda Rousey', 'UFC Fighter', 'Female');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
