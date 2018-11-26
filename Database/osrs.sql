-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 06:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `semesters` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `department`, `semesters`, `status`) VALUES
(1, 'BSCS', 'Computer Science', 8, 'unactive'),
(2, 'BSIT', 'Computer Science', 8, 'active'),
(3, 'MSCS', 'Computer Science', 4, 'active'),
(4, 'MSIT', 'Computer Science', 4, 'unactive'),
(5, 'BSPhy', 'Physics', 8, 'active'),
(6, 'BSCS', 'Computer Science', 8, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
`department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `status`) VALUES
(1, 'Computer Science', 'active'),
(2, 'Biology', 'unactive'),
(3, 'Physics', 'active'),
(4, 'Mathematics', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
`marks_id` int(11) NOT NULL,
  `student_id` int(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `total_marks` int(200) NOT NULL,
  `min_marks` int(200) NOT NULL,
  `obtain_marks` int(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marks_id`, `student_id`, `subject`, `semester`, `total_marks`, `min_marks`, `obtain_marks`, `status`) VALUES
(1, 1, 'English', '1', 100, 50, 59, 'active'),
(2, 1, 'Basic Electronics ', '1', 100, 50, 78, 'active'),
(3, 1, 'Programming Fundamentals ', '1', 100, 50, 68, 'active'),
(4, 1, 'Intro- Computer Science', '1', 100, 50, 98, 'active'),
(5, 4, 'English', '1', 100, 50, 10, 'active'),
(6, 4, 'Basic Electronics ', '1', 100, 50, 10, 'active'),
(7, 4, 'Programming Fundamentals ', '1', 100, 50, 10, 'active'),
(8, 4, 'Intro- Computer Science', '1', 100, 50, 10, 'active'),
(9, 4, 'English', '1', 100, 50, 50, 'active'),
(10, 4, 'Basic Electronics ', '1', 100, 50, 50, 'active'),
(11, 4, 'Programming Fundamentals ', '1', 100, 50, 50, 'active'),
(12, 4, 'Intro- Computer Science', '1', 100, 50, 50, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`news_id` int(11) NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `news` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news`, `status`) VALUES
(1, 'News1', 'This is demo news 1', 'active'),
(2, 'News2', 'This is news 2', 'unactive');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fathers_name` varchar(200) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `department` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `roll_no` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fathers_name`, `surname`, `department`, `class`, `semester`, `roll_no`, `status`) VALUES
(1, 'Sooraj', 'Ghulam Asghar', 'Abbasi', 'Computer Science', 'BSCS', '1', 'CS-15-47', 'active'),
(3, 'Sarmad ', 'Ghulam Asghar Abbasi', 'Abbasi', 'Physics', 'BSPhy', '1', 'PHY-15-47', 'active'),
(4, 'Sajid', 'Hussain', 'Gopang', 'Computer Science', 'BSCS', '1', 'CS-15-41', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
`subject_id` int(11) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `total_marks` int(100) NOT NULL,
  `min_marks` int(11) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `semester` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `total_marks`, `min_marks`, `course_name`, `semester`, `status`) VALUES
(1, 'English', 100, 50, 'BSCS', 1, 'active'),
(2, 'Basic Electronics ', 100, 50, 'BSCS', 1, 'active'),
(3, 'Programming Fundamentals ', 100, 50, 'BSCS', 1, 'active'),
(4, 'Intro- Computer Science', 100, 50, 'BSCS', 1, 'active'),
(6, 'Physics', 100, 50, 'BSPhy', 1, 'unactive');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `contact_no`, `status`) VALUES
(1, 'admin', '123', 'admin@gmail.com', '0000000000', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
 ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
 ADD PRIMARY KEY (`marks_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
 ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
