-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 01:28 AM
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
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bankname` varchar(300) NOT NULL,
  `accountno` varchar(300) NOT NULL,
  `accounttype` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`ID`, `userID`, `bankname`, `accountno`, `accounttype`) VALUES
(1, 5, 'First Bank', '00234374323', 'Savings'),
(2, 6, 'Access', '0011234', 'Savings');

-- --------------------------------------------------------

--
-- Table structure for table `fpwrd`
--

CREATE TABLE `fpwrd` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payers`
--

CREATE TABLE `payers` (
  `ID` int(11) NOT NULL COMMENT ''' ''',
  `userID` varchar(300) NOT NULL,
  `amount` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payers`
--

INSERT INTO `payers` (`ID`, `userID`, `amount`, `username`, `date`, `time`) VALUES
(1, '9', '', 'Dan', '2018-08-27', '10:40:22pm'),
(2, '9', '', 'Dan', '2018-08-27', '10:40:30pm'),
(3, '5', '', 'Rozzae', '2018-08-28', '12:39:05am'),
(4, '5', '', 'Rozzae', '2018-08-28', '02:19:40am'),
(5, '5', '', 'Rozzae', '2018-08-28', '02:29:29am'),
(6, '6', '', 'Peter', '2018-08-28', '02:33:09am'),
(7, '5', '', 'Rozzae', '2018-08-28', '09:53:30am');

-- --------------------------------------------------------

--
-- Table structure for table `sec_qa`
--

CREATE TABLE `sec_qa` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ques` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_qa`
--

INSERT INTO `sec_qa` (`id`, `email`, `phone`, `ques`, `answer`) VALUES
(1, 'gabrielibenye@gmail.com', '', 'Whats my name', 'its me'),
(3, 'bienmoses@gmail.com', '08124079283', 'What street did u live in', 'Rumuagholu');

-- --------------------------------------------------------

--
-- Table structure for table `transac`
--

CREATE TABLE `transac` (
  `ID` int(11) NOT NULL,
  `transacID` int(11) NOT NULL,
  `payer` varchar(300) NOT NULL,
  `recipient` varchar(300) NOT NULL,
  `amount` int(11) NOT NULL,
  `confirm` varchar(50) NOT NULL,
  `date` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transac`
--

INSERT INTO `transac` (`ID`, `transacID`, `payer`, `recipient`, `amount`, `confirm`, `date`, `time`) VALUES
(1, 6543, 'Dan', 'Rozzae', 2000, 'confirmed', '27/08/18', '9:50pm'),
(2, 5676, 'Vic', 'Rozzae', 2000, 'confirmed', '27/08/18', '11:43pm'),
(3, 7654, 'Rozzae', 'Dan', 4000, 'confirmed', '28/08/18', '1:14am');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `ID` int(11) NOT NULL COMMENT ' ',
  `username` varchar(250) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `refeerer` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ID`, `username`, `password`, `email`, `phone_no`, `refeerer`) VALUES
(4, 'gibenye', '5f4dcc3b5aa765d61d8327deb882cf99', 'gabrielibenye@gmail.com', '09035505734', ''),
(5, 'Rozzae', 'adc5e79a002be7643e5fa0a60f112914', 'uchechukwueze70@gmail.com', '08131117279', ''),
(6, 'Peter', 'e10adc3949ba59abbe56e057f20f883e', 'peter@gmail.com', '09013331234', ''),
(8, 'Victor', '827ccb0eea8a706c4c34a16891f84e7b', 'vic@gmail.com', '08056787654', ''),
(9, 'Dan', '01cfcd4f6b8770febfb40cb906715822', 'Dan@gmail.com', '0911111111', ''),
(10, 'John', '827ccb0eea8a706c4c34a16891f84e7b', 'john@gmail.com', '08012345678', ''),
(11, 'Mark', '827ccb0eea8a706c4c34a16891f84e7b', 'mark@gmail.com', '0701234567', ''),
(12, 'Mike', '827ccb0eea8a706c4c34a16891f84e7b', 'mike@gmail.com', '0706543217', ''),
(14, 'pat', '827ccb0eea8a706c4c34a16891f84e7b', 'pat@gmail.com', '84759483746', ''),
(15, 'fed', '827ccb0eea8a706c4c34a16891f84e7b', 'fed@gmail.com', '45659847576', 'Rozzae'),
(16, 'BienGlitch', '5f4dcc3b5aa765d61d8327deb882cf99', 'biennwinate@gmail.com', '08124079283', ''),
(19, 'Bien', '5f4dcc3b5aa765d61d8327deb882cf99', 'bienmoses@gmail.com', '08124079283', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fpwrd`
--
ALTER TABLE `fpwrd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payers`
--
ALTER TABLE `payers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sec_qa`
--
ALTER TABLE `sec_qa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transac`
--
ALTER TABLE `transac`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fpwrd`
--
ALTER TABLE `fpwrd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payers`
--
ALTER TABLE `payers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT ''' ''', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sec_qa`
--
ALTER TABLE `sec_qa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ', AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
