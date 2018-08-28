-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 01:30 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(4, 'gibenye', 'c5fe5ce4da4aa0e025e65273a3bb06ea', 'gabrielibenye@gmail.com', '09035505734', ''),
(5, 'Rozzae', 'adc5e79a002be7643e5fa0a60f112914', 'uchechukwueze70@gmail.com', '08131117279', ''),
(6, 'Peter', 'e10adc3949ba59abbe56e057f20f883e', 'peter@gmail.com', '09013331234', ''),
(8, 'Victor', '827ccb0eea8a706c4c34a16891f84e7b', 'vic@gmail.com', '08056787654', ''),
(9, 'Dan', '01cfcd4f6b8770febfb40cb906715822', 'Dan@gmail.com', '0911111111', ''),
(10, 'John', '827ccb0eea8a706c4c34a16891f84e7b', 'john@gmail.com', '08012345678', ''),
(11, 'Mark', '827ccb0eea8a706c4c34a16891f84e7b', 'mark@gmail.com', '0701234567', ''),
(12, 'Mike', '827ccb0eea8a706c4c34a16891f84e7b', 'mike@gmail.com', '0706543217', ''),
(14, 'pat', '827ccb0eea8a706c4c34a16891f84e7b', 'pat@gmail.com', '84759483746', ''),
(15, 'fed', '827ccb0eea8a706c4c34a16891f84e7b', 'fed@gmail.com', '45659847576', 'Rozzae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ', AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
