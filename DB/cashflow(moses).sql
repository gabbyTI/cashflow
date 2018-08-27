-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 04:14 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `ID` int(11) NOT NULL COMMENT ' ',
  `UserID` int(11) NOT NULL COMMENT ' ',
  `bank_name` varchar(250) NOT NULL,
  `Acc_no` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transact`
--

CREATE TABLE `transact` (
  `ID` int(11) NOT NULL COMMENT ' ',
  `UserID` int(11) NOT NULL COMMENT ' ',
  `TransactID` int(11) NOT NULL COMMENT ' ',
  `reciever` varchar(500) NOT NULL,
  `amount` varchar(300) NOT NULL,
  `confirm` varchar(50) NOT NULL,
  `datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `ID` int(11) NOT NULL COMMENT ' ',
  `username` varchar(250) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ID`, `username`, `password`, `email`, `phone_no`) VALUES
(1, 'gibenye', '5f4dcc3b5aa765d61d8327deb882cf99', 'gabrielibenye@gmail.com', '09035505734');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transact`
--
ALTER TABLE `transact`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `TransactID` (`TransactID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ';

--
-- AUTO_INCREMENT for table `transact`
--
ALTER TABLE `transact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ';

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
