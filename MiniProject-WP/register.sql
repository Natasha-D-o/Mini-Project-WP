-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 09:14 PM
-- Server version: 5.5.62-log
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(11) NOT NULL,
  `Roomno` int(7) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `SapId` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Roomno`, `Name`, `Email`, `SapId`, `Phone`, `Subject`, `Comments`) VALUES
(1, 116, 'Nikita Menon', 'nikki23@gmail.com', '70543239087', '9826043521', 'Other', 'The area outside the room is not clean.'),
(2, 201, 'Rajni Shah', 'rajnis@gmail.com', '70893334098', '9826534421', 'Electricity Related Problem', '  The fans have stopped working properly.'),
(3, 204, 'Rajiv Chaudhary', 'rajiv@gmail.com', '70893334098', '9425065434', 'Other', '  A lot of insects are present in the room. Kindly call in for pesticides.'),
(4, 1471, 'Saransh Shah', 'sashah123@gmail.com', '70411180412', '9826534421', 'Chair Related Problem', '  The chair is not rotating properly.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
