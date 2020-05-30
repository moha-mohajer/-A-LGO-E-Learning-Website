-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql304.byetcluster.com
-- Generation Time: Apr 02, 2017 at 09:28 AM
-- Server version: 5.6.35-80.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webp3_19910542_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentattempt`
--

CREATE TABLE IF NOT EXISTS `studentattempt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `MaterialID` int(11) NOT NULL DEFAULT '0',
  `Material` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `AttemptDate` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Points` int(11) NOT NULL,
  `Correct` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
