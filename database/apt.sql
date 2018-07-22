-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 07:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apt`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('aa', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `annoucement`
--

CREATE TABLE `annoucement` (
  `aID` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `description` varchar(100) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annoucement`
--

INSERT INTO `annoucement` (`aID`, `image`, `date`, `title`, `message`, `description`, `datecreated`) VALUES
(120, './uploads/28-12-2017-1514446563.jpg', '2017-12-28', '', '', '', '2017-12-28 07:36:03'),
(121, './uploads/28-12-2017-1514446567.jpg', '2017-12-28', '', '', '', '2017-12-28 07:36:07'),
(122, './uploads/28-12-2017-1514446568.jpg', '2017-12-28', '', '', '', '2017-12-28 07:36:08'),
(123, './uploads/28-12-2017-1514446701.jpg', '2017-12-28', '', '', '', '2017-12-28 07:38:21'),
(124, './uploads/28-12-2017-1514446811.jpg', '2017-12-28', '', '', '', '2017-12-28 07:40:11'),
(125, './uploads/28-12-2017-1514446832.jpg', '2017-12-28', '', '', '', '2017-12-28 07:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `cpID` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`cpID`, `message`, `datecreated`) VALUES
(3, 'asdasddasd', '2017-12-19 12:57:23'),
(4, 'wqeqw', '2017-12-19 12:58:16'),
(5, 'ddd', '2017-12-31 04:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fee` double NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginID`, `username`, `password`, `fee`, `datecreated`) VALUES
(51, 'qq', '1234', -6062, '2017-12-23 03:11:45'),
(52, 'gg', '1234', 145, '2017-12-23 03:11:54'),
(53, 'f33', '13134679', 500, '2017-12-31 04:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `loginID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(20) NOT NULL,
  `ic` int(20) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`loginID`, `username`, `password`, `email`, `tel`, `ic`, `datecreated`) VALUES
(1, 'asdasd', 'asdasd', '', 0, 0, '2017-12-11 04:08:17'),
(2, 'asas', '13134679', '', 0, 0, '2017-12-11 04:29:55'),
(3, 'asas', '13134679', '', 0, 0, '2017-12-11 04:30:01'),
(4, 'asas', '13134679', '', 0, 0, '2017-12-11 04:30:44'),
(5, 'aaa', '13134679', 'shiguang', 0, 0, '2017-12-11 04:30:59'),
(6, 'asda', 'sadasd', 'asdas@asdasd', 0, 0, '2017-12-11 12:17:22'),
(7, 'asda', 'sadasd', 'asdas@asdasd', 0, 0, '2017-12-11 12:17:29'),
(8, 'sas', 'sasas', 'shiguang97@hotmail.com', 0, 0, '2017-12-12 03:23:23'),
(9, 'sas', 'sassas', 'shiguang97@hotmail.com', 0, 0, '2017-12-12 03:23:27'),
(10, 'sas', 'sassas', 'shiguang97@hotmail.com', 0, 0, '2017-12-12 03:24:17'),
(11, 'sas', '12123', 'shiguang97@hotmail.com', 0, 0, '2017-12-12 03:24:22'),
(12, 'aaa', '13134679', 'shiguang97@hotmail.com', 0, 0, '2017-12-12 03:31:00'),
(13, 'www', '13134679', 'shiguang97@hotmail.com', 0, 0, '2017-12-12 03:37:55'),
(14, 'www', '', 'shiguang97@hotmail.com', 0, 0, '2017-12-12 03:38:11'),
(15, 'www', '', 'shiguang97@hotmail.com', 0, 0, '2017-12-12 03:38:28'),
(16, '123', '', '', 0, 0, '2017-12-12 04:21:52'),
(17, 'sasas222', '', '', 0, 0, '2017-12-12 04:32:01'),
(18, '', '', '', 0, 0, '2017-12-12 04:32:01'),
(19, 'ssss', '', '', 0, 0, '2017-12-12 04:32:09'),
(20, '', '', '', 0, 0, '2017-12-12 04:32:09'),
(21, '1213', '', '', 0, 0, '2017-12-12 04:33:34'),
(22, '1213', '', '', 0, 0, '2017-12-12 04:33:35'),
(23, 'ww', '', '', 0, 0, '2017-12-12 04:33:42'),
(24, 'ww', '', '', 0, 0, '2017-12-12 04:33:42'),
(25, '222', '', '', 0, 0, '2017-12-12 04:35:28'),
(26, '222', '', '', 0, 0, '2017-12-12 04:35:29'),
(27, 'sadasd', '', '', 0, 0, '2017-12-12 04:40:33'),
(28, 'sadasd', '', '', 0, 0, '2017-12-12 04:40:33'),
(29, '12134', '', '', 0, 0, '2017-12-12 04:40:50'),
(30, '12134', '', '', 0, 0, '2017-12-12 04:40:50'),
(31, 'ss', '', '', 0, 0, '2017-12-12 04:41:12'),
(32, 'ss', '', '', 0, 0, '2017-12-12 04:41:12'),
(33, 'sassa', '', '', 0, 0, '2017-12-12 04:41:24'),
(34, 'sassa', '', '', 0, 0, '2017-12-12 04:41:24'),
(35, 'sassa', '121212', '', 0, 0, '2017-12-12 04:41:34'),
(36, 'sassa', '', '', 0, 0, '2017-12-12 04:41:34'),
(37, 'asdasd', '13134679', 'shiguang97@hotmail.com', 0, 0, '2017-12-12 04:42:07'),
(38, 'asdasd', '', '', 0, 0, '2017-12-12 04:42:07'),
(39, 'www', '', '', 0, 0, '2017-12-12 04:44:48'),
(40, 'www', '', '', 0, 0, '2017-12-12 04:44:48'),
(41, 'www', '', 'sadasd', 0, 0, '2017-12-12 04:45:01'),
(42, 'www', '', '', 0, 0, '2017-12-12 04:45:01'),
(43, 'www', '', 'sadasd', 0, 0, '2017-12-12 04:51:42'),
(44, 'www', '', '', 0, 0, '2017-12-12 04:51:42'),
(45, '123', '', '', 0, 0, '2017-12-12 04:51:50'),
(46, '123', '', '', 0, 0, '2017-12-12 04:55:31'),
(47, '123', '', '', 0, 0, '2017-12-12 04:56:19'),
(48, '222', '', '', 0, 0, '2017-12-12 04:56:27'),
(49, '222', '', '', 0, 0, '2017-12-12 04:57:15'),
(50, '222', '', '', 0, 0, '2017-12-12 05:02:50'),
(51, '', '', '', 0, 0, '2017-12-12 05:17:36'),
(52, '', '', '', 0, 0, '2017-12-12 05:18:56'),
(53, 'ss', '', '', 0, 0, '2017-12-12 05:18:58'),
(54, 'ss', '', '', 0, 0, '2017-12-12 05:19:32'),
(55, 'ss', '', '', 0, 0, '2017-12-12 05:19:33'),
(56, '', '', '', 0, 0, '2017-12-12 12:28:57'),
(57, 'www', '', '', 0, 0, '2017-12-12 12:29:56'),
(58, 'www', '', '', 0, 0, '2017-12-12 12:30:59'),
(59, 'www', '', '', 0, 0, '2017-12-12 12:31:06'),
(60, 'www', '', '', 0, 0, '2017-12-12 12:31:22'),
(61, 'www', '', '', 0, 0, '2017-12-12 12:33:21'),
(62, 'www', '', '', 0, 0, '2017-12-12 12:34:06'),
(63, 'www', '', '', 0, 0, '2017-12-12 12:35:23'),
(64, 'www', '', '', 0, 0, '2017-12-12 12:36:26'),
(65, 'www', '', '', 0, 0, '2017-12-12 12:37:51'),
(66, 'www', '', '', 0, 0, '2017-12-12 12:38:00'),
(67, 'www', '', '', 0, 0, '2017-12-12 12:39:46'),
(68, 'www', '', '', 0, 0, '2017-12-12 12:42:10'),
(69, '3w', '', '', 0, 0, '2017-12-12 13:24:45'),
(70, '', '', '', 0, 0, '2017-12-12 14:06:47'),
(71, '', '', '', 0, 0, '2017-12-13 02:52:07'),
(72, '', '', '', 0, 0, '2017-12-13 02:52:19'),
(73, '', '', '', 0, 0, '2017-12-13 02:53:30'),
(74, '', '', '', 0, 0, '2017-12-13 02:54:26'),
(75, '', '', '', 0, 0, '2017-12-13 02:59:41'),
(76, '', '', '', 0, 0, '2017-12-13 02:59:43'),
(77, '', '', '', 0, 0, '2017-12-13 03:00:13'),
(78, '', '', '', 0, 0, '2017-12-13 03:00:18'),
(79, '', '', '', 0, 0, '2017-12-13 03:00:21'),
(80, '', '', '', 0, 0, '2017-12-13 03:01:25'),
(81, 's', '', '', 0, 0, '2017-12-13 03:03:04'),
(82, 's', '', '', 0, 0, '2017-12-13 03:07:44'),
(83, 's', '', '', 0, 0, '2017-12-13 03:08:35'),
(84, 's', '', '', 0, 0, '2017-12-13 03:10:55'),
(85, '', '', '', 0, 0, '2017-12-13 03:10:59'),
(86, '', '', '', 0, 0, '2017-12-13 03:13:20'),
(87, '', '', '', 0, 0, '2017-12-13 03:19:42'),
(88, '', '', '', 0, 0, '2017-12-13 03:20:04'),
(89, '', '', '', 0, 0, '2017-12-13 03:20:06'),
(90, '', '', '', 0, 0, '2017-12-13 03:20:09'),
(91, 'dsad', '', '', 0, 0, '2017-12-13 03:28:57'),
(92, 'www', '', '', 0, 0, '2017-12-13 03:29:02'),
(93, 'www', '', '', 0, 0, '2017-12-13 03:29:50'),
(94, 'www', '', '', 0, 0, '2017-12-13 03:30:44'),
(95, '', '', '', 0, 0, '2017-12-13 03:32:43'),
(96, 'www', '', '', 0, 0, '2017-12-13 03:32:54'),
(97, 'www', '', '', 0, 0, '2017-12-13 03:33:04'),
(98, 'sasad', '', '', 0, 0, '2017-12-13 03:33:12'),
(99, 'sasad', '', '', 0, 0, '2017-12-13 03:35:25'),
(100, 'aaaaa', '13134679', 'shiguang97@hotmail.com', 555, 5555, '2017-12-13 03:38:57'),
(101, 'aaaaaaa', '13134679', 'shiguang97@hotmail.com', 555, 5555, '2017-12-13 03:39:35'),
(102, 'fuck', '13134679', 'shiguang97@hotmail.com', 555, 5555, '2017-12-13 03:40:28'),
(103, 'fuckjjj', '13134679', 'shiguang97@hotmail.com', 11, 123, '2017-12-13 03:41:00'),
(104, 'ffffff', '', '', 0, 0, '2017-12-13 03:46:40'),
(105, 'shiguang97', 'ss', 'sas', 0, 0, '2017-12-13 03:59:25'),
(106, 'fff', '22', 'shiguang97@hotmail.com', 1212, 3333, '2017-12-13 04:04:30'),
(107, 'wwwffff', '', 'shiguang97@hotmail.com', 111, 222, '2017-12-14 03:15:25'),
(108, 'wwwwww', '13134679', 'shiguang97@hotmail.com', 222, 2222, '2017-12-14 03:20:36'),
(109, 'fffff', '13134679', 'shiguang97@hotmail.com', 22, 22, '2017-12-14 03:22:16'),
(110, 'ffffffff', '13134679', 'shiguang97@hotmail.com', 11, 11, '2017-12-14 03:22:34'),
(111, 'w', '13134679', 'shiguang97@hotmail.com', 11, 11, '2017-12-14 03:32:09'),
(112, 'fr33dom97', '13134679', 'shiguang97@hotmail.com', 33, 33, '2017-12-14 03:49:50'),
(113, 'fr33dom978', '13134679', 'shiguang97@hotmail.com', 22, 22, '2017-12-14 03:53:03'),
(114, 'shiguang971', '13134679', 'shiguang97@hotmail.com', 22, 22, '2017-12-14 03:53:38'),
(115, 'www22', '13134679', 'shiguang97@hotmail.com', 22, 22, '2017-12-14 03:56:55'),
(116, 'www22', '13134679', '', 0, 0, '2017-12-14 03:56:55'),
(117, 'www222', '13134679', 'shiguang97@hotmail.com', 22, 22, '2017-12-14 03:58:03'),
(119, 'sffff', '1234', 'shiguang97@hotmail.com', 122, 122, '2017-12-21 13:06:48'),
(120, 'ggg', '1234', 'shiguang97@hotmail.com', 22, 22, '2017-12-21 13:09:04'),
(121, 'gggggg', '1234', 'shiguang97@hotmail.com', 22, 22, '2017-12-21 13:09:35'),
(122, 'sddf', '1234', 'shiguang97@hotmail.com', 22, 22, '2017-12-21 13:16:26'),
(123, 'qq', '1234', 'shiguang97@hotmail.com', 22, 22, '2017-12-21 13:27:16'),
(124, 'gg', '1234', 'shiguang97@hotmail.com', 22, 22, '2017-12-22 08:50:56'),
(125, 'f33', '13134679', 'shiguang97@hotmail.com', 17, 17, '2017-12-31 04:20:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annoucement`
--
ALTER TABLE `annoucement`
  ADD PRIMARY KEY (`aID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`cpID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`loginID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annoucement`
--
ALTER TABLE `annoucement`
  MODIFY `aID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `cpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `loginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
