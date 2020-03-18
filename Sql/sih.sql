-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 06:31 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `cseinfo`
--

CREATE TABLE `cseinfo` (
  `Sr_No` int(11) NOT NULL,
  `Roll_No` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Father_Name` varchar(100) NOT NULL,
  `Mother_Name` varchar(100) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Contact_Number` varchar(20) NOT NULL,
  `Alternate_Number` varchar(20) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Aadhar_No` varchar(20) NOT NULL,
  `Dob` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Rank` varchar(20) NOT NULL,
  `10thPercent` varchar(20) NOT NULL,
  `12thPercent` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `JeeRollNumber` varchar(20) NOT NULL,
  `Gap` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eceinfo`
--

CREATE TABLE `eceinfo` (
  `Sr_No` int(11) NOT NULL,
  `Roll_No` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Father_Name` varchar(100) NOT NULL,
  `Mother_Name` varchar(100) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Contact_Number` varchar(20) NOT NULL,
  `Alternate_Number` varchar(20) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Aadhar_No` varchar(20) NOT NULL,
  `Dob` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Rank` varchar(20) NOT NULL,
  `10thPercent` varchar(20) NOT NULL,
  `12thPercent` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `JeeRollNumber` varchar(20) NOT NULL,
  `Gap` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cseinfo`
--
ALTER TABLE `cseinfo`
  ADD PRIMARY KEY (`Sr_No`);

--
-- Indexes for table `eceinfo`
--
ALTER TABLE `eceinfo`
  ADD PRIMARY KEY (`Sr_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cseinfo`
--
ALTER TABLE `cseinfo`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `eceinfo`
--
ALTER TABLE `eceinfo`
  MODIFY `Sr_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
