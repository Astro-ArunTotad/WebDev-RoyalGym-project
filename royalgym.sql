-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 04:07 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royalgym`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `membership` text NOT NULL,
  `registrationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `gender`, `dob`, `address`, `membership`, `registrationDate`) VALUES
(1, '', '', '', '', 0, '', '0000-00-00', '', 'One Month membership', '2019-11-12 02:19:07'),
(2, '1', 'to@gmail.com', '123', '877979797', 0, '', '0000-00-00', '2019-11-12 07:32:48', '', '2019-11-12 02:19:07'),
(3, 'arun', 'totad', 'aaaA22aa@gmail.com', '123', 123, 'm', '2004-11-18', 'w2eq2e', '', '2019-11-12 02:19:07'),
(4, 'arun', 'totad', 'aruntotad17@gmail.com', '123', 123, 'm', '2003-08-15', 'awd', '', '2019-11-12 02:19:07'),
(5, 'test', '123', 'test123@gmailc.com', '123', 79797979979, 'm', '2003-07-17', 'awdadwd', '', '2019-11-12 02:19:07'),
(6, 'wad', 'awd', 'awd@o.ovm', '123', 6848, 'm', '2003-11-29', 'awdawd', '', '2019-11-12 02:19:07'),
(7, 'Arun', 'Totad', 'meetaruntotad@gmail.com', '123', 8484984, 'm', '2001-12-16', 'Doddatogur, Electronic city , Bangalore', 'One Year membership', '2019-11-12 02:19:07'),
(8, 'Arun', 'Totad', 'meetaruntotad1@gmail.com', '123', 8864686, 'm', '2003-12-18', 'Doddatogur, Electronic city , Bangalore', 'One Day membership', '2019-11-12 02:21:09'),
(9, 'Arun', 'Totad', 't@gmail.com', '123', 78953555, 'm', '2001-11-19', 'Doddatogur, Electronic city , Bangalore', 'One Month membership', '2019-11-14 14:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `serial_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`serial_no`, `name`, `email`, `subject`, `message`, `time`) VALUES
(32, '', '', '', '', '2019-11-01 07:52:35'),
(33, '', '', '', '', '2019-11-03 05:49:40'),
(34, '', '', '', '', '2019-11-10 05:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `card_no` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `exp_date` varchar(20) NOT NULL,
  `cvc` int(3) NOT NULL,
  `member` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`card_no`, `email`, `exp_date`, `cvc`, `member`) VALUES
(1234, 'arun', '12/22', 123, '123'),
(2147483647, 'arun', '11/22', 123, '100'),
(123456789, 'arun', '12/66', 123, '100'),
(1285, 'xyz', '22/22', 12, '1000'),
(122345677, 'totad', '12/22', 123, '1000'),
(122345677, 'totad', '12/22', 123, '1000'),
(11981, 'totad', '2222', 123, '100'),
(123123, 'me1111', '515', 21351, '1000'),
(2147483647, 'meetaruntotad@gmail.', '12/12', 123, 'One Day me'),
(12345678, 'meetaruntotad@gmail.', '12/152', 232, 'One Month membership'),
(2147483647, 'meetaruntotad@gmail.', '12/22', 123, 'One Year membership'),
(2147483647, 'meetaruntotad1@gmail', '121/22', 123, 'One Day membership'),
(123456, 't@gmail.com', '12/88', 123, 'One Month membership');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
