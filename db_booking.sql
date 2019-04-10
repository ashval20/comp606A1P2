-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 05:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `custid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `credit_card_number` varchar(100) NOT NULL,
  `reason` text,
  `therapistid` int(11) NOT NULL,
  `timeslot` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`custid`, `name`, `email`, `password`, `credit_card_number`, `reason`, `therapistid`, `timeslot`) VALUES
(1, 'ashly', 'test@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '76543865', 'massage', 0, '2019-04-12 14:00:00'),
(2, 'ashly', 'ajsdfjads@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 'massage', 0, '2019-04-13 10:00:00'),
(3, 'ashy', 'ashlyvalsalan1996@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'body pain', 0, '2019-04-12 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `therapists`
--

CREATE TABLE `therapists` (
  `therapistid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `therapistname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapists`
--

INSERT INTO `therapists` (`therapistid`, `username`, `password`, `therapistname`) VALUES
(1, 'therapist1', 'password1', 'John Realman'),
(2, 'therapist2', 'password2', 'Joanne Realwoman'),
(3, 'therapist3', 'password3', 'Seamus O’Therguy');

-- --------------------------------------------------------

--
-- Table structure for table `timeslots`
--

CREATE TABLE `timeslots` (
  `timeslotid` int(11) NOT NULL,
  `therapistid` int(11) NOT NULL,
  `timeslot` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslots`
--

INSERT INTO `timeslots` (`timeslotid`, `therapistid`, `timeslot`) VALUES
(1, 1, '2019-04-12 10:00:00'),
(2, 2, '2019-04-12 11:00:00'),
(3, 3, '2019-04-12 12:00:00'),
(4, 1, '2019-04-12 13:00:00'),
(5, 2, '2019-04-12 14:00:00'),
(6, 3, '2019-04-12 15:00:00'),
(7, 1, '2019-04-13 10:00:00'),
(8, 2, '2019-04-13 11:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `therapists`
--
ALTER TABLE `therapists`
  ADD PRIMARY KEY (`therapistid`);

--
-- Indexes for table `timeslots`
--
ALTER TABLE `timeslots`
  ADD PRIMARY KEY (`timeslotid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `therapists`
--
ALTER TABLE `therapists`
  MODIFY `therapistid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timeslots`
--
ALTER TABLE `timeslots`
  MODIFY `timeslotid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
