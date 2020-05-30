-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2017 at 02:11 PM
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
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Question` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `QuestionType` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Aa` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Ab` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Ac` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Ad` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `CorrectAnswer` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Points` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `Question`, `QuestionType`, `Aa`, `Ab`, `Ac`, `Ad`, `CorrectAnswer`, `Points`) VALUES
(1, 'Algorithms can be only coded in Java and C++.', 'TF', 'True', 'False', '', '', 'b', 5),
(2, 'Algorithms are considered computer programs.', 'TF', 'True', 'False', '', '', 'b', 5),
(3, 'Searching algorithms make use of a ……………key in order to complete their goal.', 'SA', '', '', '', '', 'search', 5),
(4, 'Imagine having a list of data that contains 10 elements [1,7,4,5,9,8,2,3,10,6]. How many steps would it take to find the number 3 using linear search?  ', 'SA', '', '', '', '', '8', 5),
(5, 'Justify the above answer: ', 'MCQ', 'Because Linear Search checks the middle element first and then searches accordingly.', 'Because Linear search divides the list in smaller parts.', 'Because Linear search checks each element one by one.', 'Because Linear Search divides the list in two parts and searches from right to left.', 'c', 5),
(6, 'Linear search can work with ………….', 'MCQ', 'sorted lists of data', 'unsorted lists of data', 'both a and b', 'none of the above', 'c', 5),
(7, 'The …………… the elements inside a list, more time and memory will be held by linear search. ', 'SA', '', '', '', '', 'more', 5),
(8, 'The biggest disadvantage of binary search is that:', 'MCQ', 'binary search can be only applied to sorted data', 'binary search can be only applied to unsorted data', 'It slows down when is dealing with large scale data', 'it needs the middle element of the list to be an even number', 'a', 5),
(9, 'Imagine having a list of data that contains 10 elements [1,2,3,4,5,6,7,8,9,10]. How many steps would it take to find the number 5 using binary search?', 'SA', '', '', '', '', '1', 5),
(10, 'Justify the above answer: ', 'MCQ', 'Because binary search checks the middle element first and then searches accordingly.', 'Because binary search divides the list in smaller parts.', 'Because binary search checks each element one by one.', 'Because binary search divides the list in two parts and searches from right to left.', 'a', 5),
(11, 'If you binary search an element in an unsorted list, the results are ………………', 'SA', '', '', '', '', 'unpredictable', 5),
(12, 'Sorting a list of data can increase the performance of an application.', 'TF', 'True', 'False', '', '', 'a', 5),
(13, 'Bubble sort repeatedly steps through the list to be sorted, compares each pair of adjacent items and ………… them if they are in the wrong order. ', 'SA', '', '', '', '', 'swaps', 5),
(14, 'If bubble sort reaches the end of a list, that means that the list is sorted.', 'TF', 'True', 'False', '', '', 'b', 5),
(15, 'Bubble sort is time efficient.', 'TF', 'True', 'False', '', '', 'b', 5),
(16, 'Assuming that we have a list of 6 unsorted elements (3,2,6,5,1,4), using bubble sort, after the first swap how will the list look?', 'MCQ', '(3,2,6,5,1,4)', '(2,3,6,5,1,4)', '(3,2,6,5,4,1)', '(3,2,5,6,1,4)', 'b', 5),
(17, 'Merge sort is memory inefficient.', 'TF', 'True', 'False', '', '', 'a', 5),
(18, 'Merge sort is doing three simple things, ………………, sort, merge. ', 'SA', '', '', '', '', 'sort', 5),
(19, 'Merge sort, at one point of the sorting procedure will divide each element to unique lists.', 'TF', 'True', 'False', '', '', 'a', 5),
(20, 'Assuming that we have a list of 8 unsorted elements (2,8,6,5,1,4,7,3), using merge sort, after two steps how will the list look?', 'MCQ', '(2), (8), (6), (5), (1), (4), (7), (3)', '(2,8), (6,5), (1,4), (7,3)', '(2,8,6,5), (1,4,7,3)', '(2,8), (6,5), (1,4), (7,3)', 'd', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
