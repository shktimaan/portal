-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2016 at 04:34 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_student`
--

CREATE TABLE IF NOT EXISTS `accepted_student` (
  `id` int(4) NOT NULL,
  `name` varchar(35) NOT NULL,
  `photoname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` double NOT NULL,
  `10thmarks` varchar(6) NOT NULL,
  `12thmarks` varchar(6) NOT NULL,
  `regno` int(9) NOT NULL,
  `dept` varchar(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `cgpa` decimal(4,2) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accepted_student`
--

INSERT INTO `accepted_student` (`id`, `name`, `photoname`, `dob`, `gender`, `hobby`, `address`, `contact`, `10thmarks`, `12thmarks`, `regno`, `dept`, `semester`, `roll_no`, `cgpa`, `email`, `password`) VALUES
(1, 'Rajni Kant SuperStar', 'Screenshot (2).png', '2016-02-06', 'male', 'NULL', 'Earth Solar System Milky Way,Tamil Nadu,PIN:786007 ', 9999999999, '101', '201', 20130007, 'IT', '1', '13/IT/786', '22.00', 'google@rajnikant.com', 'hohahoha'),
(2, 'Vineet Apoorv Herenj', 'DSC04559.JPG', '2015-12-28', 'male', 'NULL', 'room 104 hall 03 DGP,West Bengal,PIN:713209 ', 9506294835, '10', '45', 20130609, 'IT', '8', '13/IT/99', '99.99', 'vineet@gmail.com', 'aaaa'),
(4, 'Shikhar ss Srivastava', 'DSC04576.JPG', '1995-05-16', 'male', 'NULL', 'room 111 hall 03 NIT Durgapur Durgapur,West Bengal,PIN:713209 ', 9795266450, '10', '95', 20130701, 'IT', '6', '13/IT/98', '56.00', 'shikharsrv23@gmail.com', 'aaa'),
(5, 'Prassd ss xx', 'IMG_20150809_215522.jpg', '2014-03-07', 'male', 'NULL', 'room 111 hall 03 NIT Durgapur Durgapur,West Bengal,PIN:713209 ', 9506239445, '10', '94.6', 20130602, 'IT', '3', '13/IT/11', '10.00', 'shik1harsrv3@gmail.com', '5'),
(6, 'Akhil  Srivastava', 'WWW.YTS.RE.jpg', '1994-07-14', 'male', 'NULL', 'room 111 hall 03 NIT Durgapur Durgapur,West Bengal,PIN:713209 ', 9999999999, '10', '94.6', 20140601, 'CE', 'none', '14/CE/11', '6.00', 'akhilsrv3@gmail.com', 'oye');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(35) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`) VALUES
('Shikhar Srivastava', 'shktima_n', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`body`) VALUES
(''),
('          STUDENT NOTICE:\r\n\r\nEveryone is requested to submit all the assignments on time.\r\n\r\n-shktima_n'),
('SECOND NOTICE:\r\ncheck check check....');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(4) NOT NULL,
  `name` varchar(35) NOT NULL,
  `photoname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` double NOT NULL,
  `10thmarks` varchar(6) NOT NULL,
  `12thmarks` varchar(6) NOT NULL,
  `regno` int(9) NOT NULL,
  `dept` varchar(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `cgpa` decimal(4,2) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `photoname`, `dob`, `gender`, `hobby`, `address`, `contact`, `10thmarks`, `12thmarks`, `regno`, `dept`, `semester`, `roll_no`, `cgpa`, `email`, `password`) VALUES
(22, 'Shikhar ss Srivastava', 'DSC04533.JPG', '2009-02-04', 'male', ' Dance trekking', 'room 111 hall 03	 NIT Durgapur Durgapur,West Bengal,PIN:713209 ', 9563206054, '10', '94.6', 20130609, 'IT', '8', '13/IT/771', '8.69', 'shikharsrv3@gmail.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_student`
--
ALTER TABLE `accepted_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `regno` (`regno`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `regno` (`regno`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_student`
--
ALTER TABLE `accepted_student`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
