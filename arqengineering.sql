-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2022 at 10:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arqengineering`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_response` varchar(500) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `orderid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`admin_id`, `admin_name`, `admin_response`, `customer_id`, `orderid`) VALUES
(3, 'iu', 'gh', 'hjkhkhkh', 1),
(4, 'Mishael', 'okay', 'mishael@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_number` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `date`, `business_name`, `customer_id`, `customer_number`, `time`) VALUES
(1, '2022-11-24', 'us', 1, 'try', '06:00:00'),
(2, '2022-11-24', 'us', 1, 'try', '06:00:00'),
(3, '2022-12-09', 'Goody', 1, 'goody@gmail.com', '23:00:00'),
(4, '2022-12-23', 'Schecks', 7, 'ama@gmail.com', '04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` varchar(50) NOT NULL,
  `customer_city` varchar(50) NOT NULL,
  `customer_contact` varchar(50) NOT NULL,
  `customer_org` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_org`, `user_role`) VALUES
(1, 'elaine', 'elaine@gmail.com', '$2y$10$V.stMnx6T78g25B4NPxFm.v95y8DrK4Tam/1Fu4lpg4dW9E7PKUya', 'Ghanajka', 'hj', '891003', 'jk', 1),
(2, 'Ama', 'ama@gmail.com', '$2y$10$8boQubyo2IHcjr9xzml7gOfthp.D5Fnym8jFeXZ8uY50VBDRMrdcG', 'Ghana', 'Accra', '0299019301', 'Schecks', 1),
(3, 'Elaine', 'kris@gmail.com', '$2y$10$BadjgDAdUupBTVt1qOxLBOt/iRhFKBTPgi3eVHUYAo1IwozJSxsVm', 'HH', 'ELAINE@gmail.com', 'v@gmail.com', 'i@gmail.com', 1),
(4, 'hEELO', 'admin@gmail.com', '$2y$10$NtDBZuVGPoMIPTsBeMMEhO9gUMSdMYKn/uAYBiQe/6A2EvOeKt4/i', 'Ghana', 'Accra', '0206782942', 'Schecks', 2),
(5, 'go', 'go@gmail.com', '$2y$10$1CfjACgjejZ9fvA5/a/WM.m8Qvqm2t2ZbG32V8yLxzp/zoqhLLx6O', 'Ghana', 'Accra', '902', 'Go', 2),
(6, 'Christian', 'Christian.Greg@gmail.com', '$2y$10$w5jCExuj9H7ytC3TAFmqM.JKb5dz0AIa0BObcUfbBnGef/xB3Jwb6', 'Ghana', 'Accra', '029 790 7002', 'KFC', 1),
(7, '', '', '$2y$10$po9m0Ybv/4mpP2TFq4pPWO/H3U2gJrlzX1orcvP6l.BXW159.CTxO', '', '', '', '', 1),
(8, '', '', '$2y$10$tVLVPs6qF7JwL/XiejUq3uax9.PTf25bsWQz3MjS7GqgpYojv3hH6', '', '', '', '', 1),
(9, '', '', '$2y$10$54IiZDOH8LWqsBV6Fw4rjeSWGDHKgLBp2PjOKk4L4JKb6ntWAU8my', '', '', '', '', 1),
(10, '', '', '$2y$10$.6t5ybzoQJgpJlTxXJYuUuUqAILrDGC7PuGgS/fsN0OvySuyjggei', '', '', '', '', 1),
(11, '', '', '$2y$10$wVTfu60ReJDtDHRJMAszCeJHgTc3k1nPraXa3u1IkT8pgBZMb/GHy', '', '', '', '', 1),
(12, '', '', '$2y$10$YrccoiZukmybBV/8zGt3EuGvihx90S8hdEvJaNZCMpHOK9jk1MSN.', '', '', '', '', 1),
(13, '', '', '$2y$10$Aq/MqQYsNQor870SWhWlbeehyBgsWg0s8kJXvrDidtu8ZfpSHKFdG', '', '', '', '', 1),
(14, '', '', '$2y$10$7nzlugDQB4ujhpoNy3geVOAp4O9jGea.w4ur1QN9L5ZC1VWVqDGga', '', '', '', '', 1),
(15, '', '', '$2y$10$iouSSju7gCHc0UGk6i2X..jhZzv4dU6dPX9QQC2.0/p50a9hztkpy', '', '', '', '', 1),
(16, '', '', '$2y$10$sg4eg92dC.eZ2zh7CxPaQOYZMsDdYpTKYRXdp9NQLgVZ89kD98Xha', '', '', '', '', 1),
(17, '', '', '$2y$10$kqf0dF38cZZrjXPxv3SnKeb4/z/D7M63R18x9Pu0O/Ow2bgm3VQ0.', '', '', '', '', 1),
(18, '', '', '$2y$10$7vNMRmxbFtvtSwHb/Ls8A.wW2/pCe0rkFqzppwzBYbiThOCEQ3bcS', '', '', '', '', 1),
(19, '', '', '$2y$10$zdX.6pbP12kCLaYhMIc/9eyanv0vwsCpfYTj.jqPbwb6/HCrPguL.', '', '', '', '', 1),
(20, '', '', '$2y$10$H7I5VLCErr3Ha45i/wIYUeFzH6Dvwjh8hLZHo2AKYD49wkCqwxAqm', '', '', '', '', 1),
(21, '', '', '$2y$10$pvUqlix6lkDN8jikjY4ImutLmz509PK1ng1RKNnYu/wRXGPSJeQpe', '', '', '', '', 1),
(22, '', '', '$2y$10$31gcILOAAeGFGvfltf6GHuMmoI02G8nSOoBOdVKPZ7ZDCcqHVO53i', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderid` int(11) NOT NULL,
  `order_desc` varchar(500) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `order_reply` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderid`, `order_desc`, `customer_email`, `customer_id`, `customer_name`, `business_name`, `order_reply`) VALUES
(1, 'I want a house', 'elaine@gmail.com', '1', 'Elaine', 'Schecks', NULL),
(6, 'no', 'no', '1', 'no', 'jo', NULL),
(7, 'new order', 'lala@gmail.com', '1', 'lala', 'Great', NULL),
(8, 'hmmm', 'kl', '1', 'lal', 'jj', NULL),
(9, 'I want to buy a car', 'makaela@gmail.com', '7', 'Makaela', 'Mickyloo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` double NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `fk` (`orderid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Admin`
--
ALTER TABLE `Admin`
  ADD CONSTRAINT `fk` FOREIGN KEY (`orderid`) REFERENCES `orderdetails` (`orderid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
