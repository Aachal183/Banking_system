-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 06:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Sr_no.` int(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Currentbalance` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Sr_no.`, `Name`, `Email`, `Currentbalance`) VALUES
(1, 'Aachal Mishra', 'aachal112@gmail.com', 79109),
(2, 'Divya Badjate', 'divyab123@gmail.com', 60475),
(3, 'Neha Bhagdewani', 'neha343@gmail.com', 34307),
(4, 'Yuvi Patil', 'yuvipatil123@gmail.com', 54747),
(5, 'Darsh Gandhi', 'darshg699@gmail.com', 77150),
(6, 'Shals Sharma', 'shals0711@gmail.com', 47103),
(7, 'Rajat Mishra', 'rajat3878m@gmail.com', 65000),
(8, 'Anku Goenka', 'ankugg567@gmail.com', 72000),
(9, 'Hemant Bhutada', 'hemant2854b@gmail.com', 44800),
(10, 'Tanaya Kohli', 'tanu1543@gmail.com', 85200);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Transfer_id` int(15) NOT NULL,
  `Sender` varchar(50) NOT NULL,
  `Receiver` varchar(50) NOT NULL,
  `Amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Transfer_id`, `Sender`, `Receiver`, `Amount`) VALUES
(1, 'Aachal Mishra', 'Divya Badjate', 103),
(2, 'Yuvi Patil', 'Darsh Gandhi', 150),
(3, 'Hemant Bhutada', 'Tanaya Kohli', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`Transfer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `Transfer_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
