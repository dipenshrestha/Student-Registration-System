-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 08:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `StudentID` int(11) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Class-X percentage/grade` varchar(5) NOT NULL,
  `Class-X passing year` varchar(10) NOT NULL,
  `Class-Xii percentage/grade` varchar(5) NOT NULL,
  `Class-Xii passing year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`StudentID`, `Email`, `Class-X percentage/grade`, `Class-X passing year`, `Class-Xii percentage/grade`, `Class-Xii passing year`) VALUES
(1, 'justindipen@yahoo.com', '80', '2000', '90', '2073'),
(2, 'justindipe2@yahoo.com', '80', '2000', '90', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `MiddleName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PermanentAddress` varchar(40) NOT NULL,
  `TemporaryAddress` varchar(40) NOT NULL,
  `FatherName` varchar(70) NOT NULL,
  `MotherName` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `FirstName`, `MiddleName`, `LastName`, `DateOfBirth`, `Gender`, `PhoneNumber`, `Email`, `PermanentAddress`, `TemporaryAddress`, `FatherName`, `MotherName`) VALUES
(1, 'dipen', '', 'shrestha', '2022-03-05', 'male', '9860744627', 'justindipen@yahoo.com', 'bhaktapur', 'bhaktapur', 'dev narayan shrestha', 'ineshwori shrestha'),
(2, 'anjan', '', 'prajapati', '2022-03-04', 'male', '9860744628', 'justindipe2@yahoo.com', 'bhaktapur', 'bhaktapur', 'rajaram prajapati', 'sita prajapati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`StudentID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`),
  ADD UNIQUE KEY `PhoneNumber` (`PhoneNumber`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
