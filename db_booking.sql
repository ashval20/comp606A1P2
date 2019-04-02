-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 01:28 PM
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
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `therapists`
--
ALTER TABLE `therapists`
  MODIFY `therapistid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timeslots`
--
ALTER TABLE `timeslots`
  MODIFY `timeslotid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
