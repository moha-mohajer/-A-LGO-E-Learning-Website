-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2017 at 02:42 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `co1801assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `SurName` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `SchoolName` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `UserType` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `UserName` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `DateandTime` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Test` tinyint(1) NOT NULL DEFAULT '0',
  `TestAttempt` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Mark` int(11) NOT NULL DEFAULT '0',
  `MaterialID` int(11) NOT NULL DEFAULT '0',
  `PermissionLevel` tinyint(1) NOT NULL DEFAULT '0',
  `NO` int(11) NOT NULL DEFAULT '4',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `FirstName`, `SurName`, `SchoolName`, `UserType`, `UserName`, `Password`, `Email`, `DateandTime`, `Test`, `TestAttempt`, `Mark`, `MaterialID`, `PermissionLevel`, `NO`) VALUES
(1, 'Admin', 'Admin', 'uclan', 'Admin', 'admin', 'adminadmin', 'uclanteam3@gmail.com', 'Thursday, March 30 2017 05:42', 0, NULL, 0, 0, 3, 4),
(2, 'Teacher', 'Teacher', 'Uclan', 'Teacher', 'teacher', 'teacherteacher', 'Teacher@Teacher.com', 'Thursday, March 30 2017 07:47', 0, NULL, 0, 0, 2, 4),
(3, 'Parent', 'Parent', 'Uclan', 'Parent', 'parent', 'parentparent', 'parent@parent.com', 'Thursday, March 30 2017 08:12', 0, NULL, 0, 0, 1, 4),
(4, 'Student', 'Student', 'Uclan', 'Student', 'student', 'studentstudent', 'student@student.com', 'Thursday, March 30 2017 07:58', 0, NULL, 0, 0, 0, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
