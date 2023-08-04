-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 09:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `firstname`, `othername`, `username`, `email`, `password_id`) VALUES
(1, 'Bodunde', 'Enoch', 'username', 'bodunde@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Thomas', 'Edison', 'spider', 'edison@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `numbers_of_questions` int(100) NOT NULL,
  `exam_duration_minute` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_category`
--

INSERT INTO `exam_category` (`id`, `category`, `numbers_of_questions`, `exam_duration_minute`) VALUES
(18, 'GST 102', 30, '30'),
(19, 'CSC 201', 0, '60'),
(20, 'BCH 403', 0, '01'),
(21, 'ACE 201', 30, '60');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(20) NOT NULL,
  `question_no` int(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES
(53, 1, '1 + 2', '6', '4', '7', '3', '3', 'GST 102'),
(54, 2, '3 + 4', '4', '5', '7', '2', '7', 'GST 102'),
(55, 3, '4 * 5', '4', '9', '30', '20', '20', 'GST 102'),
(56, 4, '5 + 6', '56', '11', '45', '2', '11', 'GST 102'),
(58, 5, '7 * 7', '56', '34', '5', '49', '49', 'GST 102'),
(59, 6, 'Molecular structure of stomata can be discribe with the following diagram except', 'image_database/Chrysanthemum.jpg616df6a740d0a461d843a1d6bf1bb65d', 'image_database/Desert.jpg616df6a740d0a461d843a1d6bf1bb65d', 'image_database/Hydrangeas.jpg616df6a740d0a461d843a1d6bf1bb65d', 'image_database/Jellyfish.jpg616df6a740d0a461d843a1d6bf1bb65d', 'image_database/Chrysanthemum.jpg616df6a740d0a461d843a1d6bf1bb65d', 'GST 102'),
(60, 7, 'Which of this is correct about data structure diagram', 'image_database/Chrysanthemum.jpg11067713d79ebe0db1bb28ea6bf47068', 'image_database/Desert.jpg11067713d79ebe0db1bb28ea6bf47068', 'image_database/Koala.jpg11067713d79ebe0db1bb28ea6bf47068', 'image_database/Tulips.jpg11067713d79ebe0db1bb28ea6bf47068', 'image_database/Koala.jpg11067713d79ebe0db1bb28ea6bf47068', 'GST 102'),
(61, 1, 'What is accounting', 'biology', 'chemistry', 'math', 'means of calculating balance', 'means of calculating balance', 'ACE 201');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE `student_result` (
  `id` int(50) NOT NULL,
  `exam_category` varchar(50) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `total_question` int(50) NOT NULL,
  `total_question_answered` int(50) NOT NULL,
  `total_mark` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`id`, `exam_category`, `user_id`, `total_question`, `total_question_answered`, `total_mark`) VALUES
(1, 'GST 102', 'username', 30, 7, 17),
(2, 'GST 102', 'username', 30, 5, 17),
(3, 'GST 102', 'username', 30, 0, 0),
(4, 'GST 102', 'username', 30, 0, 0),
(5, 'GST 102', 'webspider', 30, 0, 0),
(6, 'GST 102', 'username', 30, 1, 0),
(7, 'GST 102', 'username', 30, 7, 17),
(8, 'GST 102', 'username', 30, 4, 7),
(9, 'GST 102', 'username', 30, 7, 10),
(10, 'GST 102', 'username', 30, 5, 7),
(11, 'GST 102', 'username', 30, 2, 7),
(12, 'ACE 201', 'username', 30, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(50) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `exam_category` varchar(50) NOT NULL,
  `question_no` int(50) NOT NULL,
  `option_selected` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `right_answer` int(50) NOT NULL,
  `wrong_answer` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_exam_answer_record`
--

CREATE TABLE `user_exam_answer_record` (
  `id` int(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `exam_category` varchar(50) NOT NULL,
  `question_no` int(50) NOT NULL,
  `option_selected` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `right_answer` int(50) NOT NULL,
  `wrong_answer` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_exam_answer_record`
--

INSERT INTO `user_exam_answer_record` (`id`, `user_id`, `exam_category`, `question_no`, `option_selected`, `answer`, `right_answer`, `wrong_answer`) VALUES
(1, 'username', 'GST 102', 1, '3', '3', 2, 0),
(2, 'username', 'GST 102', 2, '7', '7', 2, 0),
(3, 'username', 'GST 102', 3, '20', '20', 2, 0),
(4, 'username', 'GST 102', 4, '11', '11', 2, 0),
(5, 'username', 'GST 102', 5, '49', '49', 2, 0),
(6, 'username', 'GST 102', 6, 'image_database/Desert.jpg616df6a740d0a461d843a1d6bf1bb65d', 'image_database/Chrysanthemum.jpg616df6a740d0a461d843a1d6bf1bb65d', 0, 2),
(7, 'username', 'GST 102', 7, 'image_database/Desert.jpg11067713d79ebe0db1bb28ea6bf47068', 'image_database/Koala.jpg11067713d79ebe0db1bb28ea6bf47068', 0, 2),
(8, 'username', 'GST 102', 1, '3', '3', 2, 0),
(9, 'username', 'GST 102', 2, '7', '7', 2, 0),
(10, 'username', 'GST 102', 3, '20', '20', 2, 0),
(11, 'username', 'GST 102', 4, '11', '11', 2, 0),
(12, 'username', 'GST 102', 5, '49', '49', 2, 0),
(13, 'username', 'GST 102', 1, '4', '3', 0, 2),
(14, 'username', 'GST 102', 1, '3', '3', 2, 0),
(15, 'username', 'GST 102', 2, '7', '7', 2, 0),
(16, 'username', 'GST 102', 3, '20', '20', 2, 0),
(17, 'username', 'GST 102', 4, '11', '11', 2, 0),
(18, 'username', 'GST 102', 5, '49', '49', 2, 0),
(19, 'username', 'GST 102', 6, 'image_database/Hydrangeas.jpg616df6a740d0a461d843a1d6bf1bb65d', 'image_database/Chrysanthemum.jpg616df6a740d0a461d843a1d6bf1bb65d', 0, 2),
(20, 'username', 'GST 102', 7, 'image_database/Desert.jpg11067713d79ebe0db1bb28ea6bf47068', 'image_database/Koala.jpg11067713d79ebe0db1bb28ea6bf47068', 0, 2),
(21, 'username', 'GST 102', 1, '7', '3', 0, 2),
(22, 'username', 'GST 102', 2, '5', '7', 0, 2),
(23, 'username', 'GST 102', 3, '20', '20', 2, 0),
(24, 'username', 'GST 102', 4, '11', '11', 2, 0),
(25, 'username', 'GST 102', 1, '6', '3', 0, 2),
(26, 'username', 'GST 102', 2, '5', '7', 0, 2),
(27, 'username', 'GST 102', 3, '20', '20', 2, 0),
(28, 'username', 'GST 102', 4, '11', '11', 2, 0),
(29, 'username', 'GST 102', 5, '49', '49', 2, 0),
(30, 'username', 'GST 102', 6, 'image_database/Desert.jpg616df6a740d0a461d843a1d6bf1bb65d', 'image_database/Chrysanthemum.jpg616df6a740d0a461d843a1d6bf1bb65d', 0, 2),
(31, 'username', 'GST 102', 7, 'image_database/Desert.jpg11067713d79ebe0db1bb28ea6bf47068', 'image_database/Koala.jpg11067713d79ebe0db1bb28ea6bf47068', 0, 2),
(32, 'username', 'GST 102', 1, '4', '3', 0, 2),
(33, 'username', 'GST 102', 2, '5', '7', 0, 2),
(34, 'username', 'GST 102', 3, '9', '20', 0, 2),
(35, 'username', 'GST 102', 4, '11', '11', 2, 0),
(36, 'username', 'GST 102', 5, '49', '49', 2, 0),
(37, 'username', 'GST 102', 1, '3', '3', 2, 0),
(38, 'username', 'GST 102', 2, '7', '7', 2, 0),
(39, 'username', 'ACE 201', 1, 'means of calculating balance', 'means of calculating balance', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `exam_category` varchar(50) NOT NULL,
  `exam_duration` varchar(50) NOT NULL,
  `exam_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_id`, `exam_category`, `exam_duration`, `exam_status`) VALUES
(5, 'username', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `firstname`, `othername`, `username`, `email`, `password_id`) VALUES
(1, 'Bodunde', 'Enoch', 'username', 'bodunde@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Bodunde', 'Enoch', 'username2', 'bodunde3@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Orojo', 'Temitope', 'webspider', 'webspider@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'Olorunsogo', 'Daniel', 'daniel24', 'daniel@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_result`
--
ALTER TABLE `student_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_exam_answer_record`
--
ALTER TABLE `user_exam_answer_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `student_result`
--
ALTER TABLE `student_result`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_exam_answer_record`
--
ALTER TABLE `user_exam_answer_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
