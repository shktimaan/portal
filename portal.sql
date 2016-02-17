-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2016 at 04:20 PM
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
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(4) NOT NULL,
  `name` varchar(35) NOT NULL,
  `photoname` varchar(15) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `photoname`, `dob`, `gender`, `hobby`, `address`, `contact`, `10thmarks`, `12thmarks`, `regno`, `dept`, `semester`, `roll_no`, `cgpa`, `email`, `password`) VALUES
(9, 'Shikhar', '10686720_731411', '2016-02-03', 'male', 'NULL', 'room 111 hall 03 NIT Durgapur Durgapur,West Bengal,PIN:713209 ', 9563206054, '10', '94.6', 20130601, 'IT', '6', '13/IT/47', '8.69', 'shikharsrv3@gmail.com', 'asd'),
(10, 'Vineet Apoorv Herenj', 'IMG-20140820-WA', '2016-02-20', 'male', 'NULL', 'room 104 hall 03 DGP,West Bengal,PIN:713209 ', 9506294835, '10', '95', 20130401, 'IT', '2', '13/IT/38', '10.00', 'vineet@gmail.com', 'asdf'),
(11, 'prassd ss xx', 'img174.jpg', '2016-02-09', 'male', 'NULL', 'room 111 hall 03 NIT Durgapur Durgapur,West Bengal,PIN:713209 ', 9563206054, '10', '94.6', 20150607, 'BT', '3', '15/BT/11', '0.00', 'shik1harsrv3@gmail.com', '11'),
(12, '  ', '', '0000-00-00', 'male', 'NULL', '  ,,PIN: ', 0, '', '', 0, 'IT', 'none', '13/IT/', '0.00', '', ''),
(13, 'Rajni Kant SuperStar', 'Screenshot (2).', '2016-02-06', 'male', 'NULL', 'Earth Solar System Milky Way,Tamil Nadu,PIN:786007 ', 9999999999, '101', '201', 20130007, 'IT', '1', '13/IT/786', '22.00', 'google@rajnikant.com', 'hohahoha');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
