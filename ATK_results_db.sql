-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2022 at 08:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ATK_results_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Account`
--

CREATE TABLE `Account` (
  `Account_ID` int(10) NOT NULL,
  `CitizenID` int(13) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Profile` point NOT NULL,
  `Sex` varchar(100) NOT NULL,
  `PhoneNum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Address`
--

CREATE TABLE `Address` (
  `SID` int(10) NOT NULL,
  `House_no` varchar(50) NOT NULL,
  `Moo` varchar(50) NOT NULL,
  `Road` varchar(50) NOT NULL,
  `Soi` varchar(50) DEFAULT NULL,
  `District` varchar(50) NOT NULL,
  `Sub_district` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Postal_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ATK_result`
--

CREATE TABLE `ATK_result` (
  `SID` varchar(10) NOT NULL,
  `ATK_testing_date_and_time` varchar(100) NOT NULL,
  `ATK_testing_result` varchar(100) NOT NULL,
  `ATK_testing_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ATK_result`
--

INSERT INTO `ATK_result` (`SID`, `ATK_testing_date_and_time`, `ATK_testing_result`, `ATK_testing_photo`) VALUES
('6309600000', '2022-05-04T21:25', 'positive (2 ขีด)', 'positive_result.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `Contact_physician`
--

CREATE TABLE `Contact_physician` (
  `SID` int(10) NOT NULL,
  `DrName` varchar(100) NOT NULL,
  `DrPhoneNum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Hospital`
--

CREATE TABLE `Hospital` (
  `SID` int(10) NOT NULL,
  `Hotel_isolation` tinyint(1) NOT NULL,
  `Home_isolation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Personal_info`
--

CREATE TABLE `Personal_info` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Sex` varchar(100) NOT NULL,
  `Phone_num` varchar(10) NOT NULL,
  `CitizenID` varchar(13) NOT NULL,
  `House_no` varchar(50) NOT NULL,
  `Moo` varchar(50) NOT NULL,
  `Road` varchar(50) NOT NULL,
  `Soi` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Sub_district` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Postal_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Personal_info`
--

INSERT INTO `Personal_info` (`FirstName`, `LastName`, `Sex`, `Phone_num`, `CitizenID`, `House_no`, `Moo`, `Road`, `Soi`, `District`, `Sub_district`, `Province`, `Postal_code`) VALUES
('Samantha', 'Rachel', 'Female', '0926534061', '1969900000000', '99', 'หมู่ 18', 'พหลโยธิน', 'คลองหลวง 35', 'คลองหนึ่ง', 'คลองหลวง', 'Bangkok', 12121);

-- --------------------------------------------------------

--
-- Table structure for table `Test`
--

CREATE TABLE `Test` (
  `SID` int(10) NOT NULL,
  `TestDate` date NOT NULL,
  `TestTime` time NOT NULL,
  `TestResult` tinyint(1) NOT NULL,
  `TestPhoto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Treatment`
--

CREATE TABLE `Treatment` (
  `DrID` int(10) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `DateNoOfTreatment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `User_physician`
--

CREATE TABLE `User_physician` (
  `DrCitizenID` varchar(13) NOT NULL,
  `DrID` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(13) NOT NULL,
  `DrFirstName` varchar(100) NOT NULL,
  `DrLastName` varchar(100) NOT NULL,
  `DrSex` varchar(100) NOT NULL,
  `DrPhoneNum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User_physician`
--

INSERT INTO `User_physician` (`DrCitizenID`, `DrID`, `username`, `password`, `DrFirstName`, `DrLastName`, `DrSex`, `DrPhoneNum`) VALUES
('1369900000000', '1009600000', '1009600000', '1369900000000', 'Richard', 'Bieber', 'Male', '0850000000');

-- --------------------------------------------------------

--
-- Table structure for table `User_student`
--

CREATE TABLE `User_student` (
  `CitizenID` varchar(13) NOT NULL,
  `DRID` varchar(10) NOT NULL,
  `SID` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(13) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Sex` varchar(100) NOT NULL,
  `PhoneNum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User_student`
--

INSERT INTO `User_student` (`CitizenID`, `DRID`, `SID`, `username`, `password`, `FirstName`, `LastName`, `Sex`, `PhoneNum`) VALUES
('1969900000000', '', '6309600000', '6309600000', '1969900000000', 'Samantha', 'Rachel', 'Female', '081000000'),
('1111111111111', '', '6309610000', '6309610000', '1111111111111', 'Somsak', 'Chai', 'Male', '0123456789'),
('1234567890000', '', '6309650734', '6309650734', '1234567890000', 'Nongnaphat', 'Wongpiyachai', 'Female', '0926530000');

-- --------------------------------------------------------

--
-- Table structure for table `Vaccine_info`
--

CREATE TABLE `Vaccine_info` (
  `SID` varchar(10) NOT NULL,
  `FirstDose` varchar(50) NOT NULL,
  `SecondDose` varchar(50) NOT NULL,
  `ThirdDose` varchar(50) NOT NULL,
  `FourthDose` varchar(50) NOT NULL,
  `Vaccine_cer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Vaccine_info`
--

INSERT INTO `Vaccine_info` (`SID`, `FirstDose`, `SecondDose`, `ThirdDose`, `FourthDose`, `Vaccine_cer`) VALUES
('6309600000', 'Pfizer', 'Pfizer', 'Pfizer', 'Pfizer', 'vaccine-certificate.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `Address`
--
ALTER TABLE `Address`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `Contact_physician`
--
ALTER TABLE `Contact_physician`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `Hospital`
--
ALTER TABLE `Hospital`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `Test`
--
ALTER TABLE `Test`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `Treatment`
--
ALTER TABLE `Treatment`
  ADD PRIMARY KEY (`DrID`);

--
-- Indexes for table `User_physician`
--
ALTER TABLE `User_physician`
  ADD PRIMARY KEY (`DrID`);

--
-- Indexes for table `User_student`
--
ALTER TABLE `User_student`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Account`
--
ALTER TABLE `Account`
  MODIFY `Account_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Address`
--
ALTER TABLE `Address`
  MODIFY `SID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Contact_physician`
--
ALTER TABLE `Contact_physician`
  MODIFY `SID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Hospital`
--
ALTER TABLE `Hospital`
  MODIFY `SID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Test`
--
ALTER TABLE `Test`
  MODIFY `SID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Treatment`
--
ALTER TABLE `Treatment`
  MODIFY `DrID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
