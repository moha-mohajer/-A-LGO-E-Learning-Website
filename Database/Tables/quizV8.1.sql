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
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MaterialID` int(11) NOT NULL,
  `MaterialTitle` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'null',
  `Question` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `QuestionType` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Aa` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Ab` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Ac` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Ad` varchar(100) CHARACTER SET latin1 COLLATE latin1_danish_ci NOT NULL,
  `CorrectAnswer` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `MaterialSrc` int(11) NOT NULL DEFAULT '1',
  `Comment` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Points` int(11) NOT NULL,
  `QN` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `MaterialID`, `MaterialTitle`, `Question`, `QuestionType`, `Aa`, `Ab`, `Ac`, `Ad`, `CorrectAnswer`, `MaterialSrc`, `Comment`, `Points`, `QN`) VALUES
(1, 1, 'Basics of Algorithms', 'An algorithm is a set of ........... for solving a particular problem.', 'SA', '', '', '', '', 'steps', 1, 'Algorithms are predefined and follow a plan (Please check the basics of Algorithms section again).', 5, 1),
(2, 1, 'Basics of Algorithms', 'To be an algorithm you need to have a clear stopping point.', 'TF', 'True', 'False', '', '', 'a', 1, 'That’s why you are using algorithms in first place, to complete a specific task (Check basics of Algorithms section again)', 5, 2),
(3, 1, 'Basics of Algorithms', 'An algorithm is a computer program.', 'TF', 'True', 'False', '', '', 'b', 1, 'A computer program is an implementation of an algorithm (Please check the basics of Algorithms section again).', 5, 3),
(4, 2, 'Searching Algorithms Explanation', 'A search algorithm is the step-by-step procedure used to ……….. a specific element among a collection of data.', 'SA', '', '', '', '', 'locate', 2, 'As the name implies, searching algorithms are trying to detect a specific element among a collection of data (Please check the Searching Algorithms Explanation section again).\r\n\r\n', 5, 1),
(5, 2, 'Searching Algorithms Explanation', 'Search algorithms are not expected to return a success or a failure status.', 'TF', 'True', 'False', '', '', 'b', 2, 'The user should know what is going on, the algorithm must reply with some information (Please check the Searching Algorithms Explanation section again).', 5, 2),
(6, 2, 'Searching Algorithms Explanation', 'The performance and efficiency of Sorting Algorithms are depended on:', 'MCQ', 'The experience of the programmer', 'The element they are searching', 'The size of the searching data', 'Their internet speed', 'c', 2, 'It is clear that, as many elements exist inside a list of data then more time will be taken by the algorithm (Please check the Searching Algorithms Explanation section again).', 5, 3),
(7, 3, 'Linear Search Explanation', 'Linear Search is hard to implement.', 'TF', 'True', 'False', '', '', 'b', 3, 'Linear search checks every element one by one (Please check the Linear Search Explanation section again).', 5, 1),
(8, 3, 'Linear Search Explanation', 'Linear Search must go through the entire list of data at least one time.', 'TF', 'True', 'False', '', '', 'a', 3, 'How is it possible to know every element inside a list of data if we don’t check at least one time?  (Please check the Linear Search Explanation section again).', 5, 2),
(9, 3, 'Linear Search Explanation', 'Linear Search can work with:', 'MCQ', 'Sorted data', 'Unsorted data', 'No data', 'Both a and b', 'd', 3, 'That is one of the advantage of linear search comparing to few other searching algorithms (Please check the Linear Search Explanation section again).', 5, 3),
(10, 4, 'Binary Search Explanation', 'Binary search can be only applied in unsorted data.', 'TF', 'True', 'False', '', '', 'b', 4, 'This is one of the disadvantages of binary search (Please check Binary Search Explanation section again).', 5, 1),
(11, 4, 'Binary Search Explanation', 'In binary search, we first compare the desired element with the element in the ………… position of the list.', 'SA', '', '', '', '', 'middle', 4, 'Imagine having a sorted list of data, and you are searching for a specific element in that list, wouldn’t it be convenient to eliminate half of that list just with one step? (Please check the Binary Search Explanation section again).', 5, 2),
(12, 4, 'Binary Search Explanation', 'If the element we are looking for is bigger than the middle element of the list, then eliminate every element that’s in the ………. side of the middle element.', 'SA', '', '', '', '', 'left', 4, 'Since our list of data is sorted, on the left side of the middle element of that list all the other elements are smaller (Please check the Binary Search Explanation section again).', 5, 3),
(13, 5, 'Sorting Algorithms Explanation', 'A sorting algorithm is an algorithm that only sorts elements of a list in numerical order.', 'TF', 'True', 'False', '', '', 'b', 5, 'This is one of the disadvantages of binary search (Please check Sorting Algorithms Explanation section again).', 5, 1),
(14, 5, 'Sorting Algorithms Explanation', 'Sorting is useful only in computer science.', 'TF', 'True', 'False', '', '', 'b', 5, 'Imagine having a sorted list of data, and you are searching for a specific element in that list, wouldn’t it be convenient to eliminate half of that list just with one step? (Please check the Sorting Algorithms Explanation section again).', 5, 2),
(15, 5, 'Sorting Algorithms Explanation', 'Sorting a list of items can later help us ……... a specific item way faster in/that/from that list.', 'MCQ', 'remove', 'search', 'add', 'all the above', 'd', 5, 'Since the list of data is sorted, on the left side of the middle element of that list all the other elements are smaller (Please check Sorting Algorithms Explanation section again).', 5, 3),
(16, 6, '', 'Bubble Sort compares each pair of adjacent items and ………. them if they are in the wrong order.', 'SA', '', '', '', '', 'swaps', 6, 'This is the whole point of bubble sort, changing position of the elements until the list is sorted ( Please check the Bubble Sort Explanation section again).', 5, 1),
(17, 6, 'Bubble Sort Explanation', 'Bubble sort goes through every element in a list at least one time.', 'TF', 'True', 'False', '', '', 'a', 6, 'Since it compares pairs, bubble sort must know the values of each element before the swapping (Please check the Bubble Sort Explanation section again).', 5, 2),
(18, 6, 'Bubble Sort Explanation', 'If the elements inside a list of data are nearly sorted:', 'MCQ', 'bubble sort is incredibly fast', 'bubble sort won’t work', 'bubble sort slows down', 'bubble sort returns random results', 'a', 6, 'This is one of the advantages of bubble sort, finding a nearly sorted list (Please check the Bubble Sort Explanation section).', 5, 3),
(19, 7, 'Merge Sort Explanation', 'In merge sort the list of data is firstly divided into four halves.', 'TF', 'True', 'False', '', '', 'b', 7, 'The first step of merge sort is to divide the list in two parts and then keep dividing until each element has its own list (Please check the Merge Sort Explanation section again).', 5, 1),
(20, 7, 'Merge Sort Explanation', 'Merge sort is doing three simple things divide, sort and   ………..', 'SA', '', '', '', '', 'merge', 7, 'Three simple procedures that merge sort follows to ensure a sorted list, divide the list in smaller parts, sort them pair by pair and then combine the to create a single list (Please check the Merge Sort Explanation section again).', 5, 2),
(21, 7, 'Merge Sort Explanation', 'Merge sort needs a lot of memory to work because:', 'MCQ', 'it sorts every element one by one', 'it creates and deletes new lists in every step it takes', 'both a and b', 'none of the above', 'b', 7, 'The multiple lists that are created to store each element require a lot of memory (Please check Merge Sort Explanation section again).', 5, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
