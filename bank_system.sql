-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 04:05 PM
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
-- Database: `bank system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Sr_no.` int(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Current balance` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Sr_no.`, `Name`, `Email`, `Current balance`) VALUES
(1, 'Aachal Mishra', 'aachal112@gmail.com', 80000),
(2, 'Divya Badjate', 'divyab123@gmail.com', 60000),
(3, 'Neha Bhagdewani', 'neha343@gmail.com', 34000),
(4, 'Yuvi Patil', 'yuvipatil123@gmail.com', 55000),
(5, 'Darsh Gandhi', 'darshg699@gmail.com', 77000),
(6, 'Shals Sharma', 'shals0711@gmail.com', 47000),
(7, 'Rajat Mishra', 'rajat3878m@gmail.com', 65000),
(8, 'Anku Goenka', 'ankugg567@gmail.com', 72000),
(9, 'Hemant Bhutada', 'hemant2854b@gmail.com', 45000),
(10, 'Tanaya Kohli', 'tanu1543@gmail.com', 85000);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
