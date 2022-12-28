-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2022 at 10:22 PM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kec_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int NOT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminregistration`
--

CREATE TABLE `adminregistration` (
  `id` int NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Hostel` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int NOT NULL,
  `Student_Id` varchar(10) DEFAULT NULL,
  `StudentName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Mobile_no` varchar(10) DEFAULT NULL,
  `Branch` varchar(30) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Year` varchar(5) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Blood` varchar(10) DEFAULT NULL,
  `Parent` varchar(30) DEFAULT NULL,
  `ParentName` varchar(30) DEFAULT NULL,
  `ParentContact` varchar(10) DEFAULT NULL,
  `Address` text,
  `KVBAcc` varchar(20) DEFAULT NULL,
  `Computer` varchar(10) DEFAULT NULL,
  `Ironbox` varchar(10) DEFAULT NULL,
  `Phy` varchar(10) DEFAULT NULL,
  `Profile` text,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `allotrooms`
--

CREATE TABLE `allotrooms` (
  `id` int NOT NULL,
  `Gender` varchar(5) DEFAULT NULL,
  `Hostel` varchar(50) DEFAULT NULL,
  `Branch` varchar(50) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Year` varchar(5) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int NOT NULL,
  `Student_Id` varchar(10) DEFAULT NULL,
  `StudentName` varchar(30) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Contact` varchar(10) DEFAULT NULL,
  `Hostel` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Complaint_Type` varchar(50) DEFAULT NULL,
  `Complaint_Description` text,
  `Accept` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'NO',
  `Resolve` varchar(5) NOT NULL DEFAULT 'No',
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feesdetails`
--

CREATE TABLE `feesdetails` (
  `id` int NOT NULL,
  `Branch` varchar(50) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Year` varchar(4) DEFAULT NULL,
  `Hostel` varchar(50) DEFAULT NULL,
  `BookingFrom` date DEFAULT NULL,
  `Vacate` date DEFAULT NULL,
  `Fees` varchar(10) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feespaid`
--

CREATE TABLE `feespaid` (
  `id` int NOT NULL,
  `Student_Id` varchar(10) DEFAULT NULL,
  `Transaction_Id` text,
  `Mode_of_payment` text,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `id` int NOT NULL,
  `Student_Id` varchar(10) DEFAULT NULL,
  `GuardianName` varchar(30) DEFAULT NULL,
  `GuardianContact` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `GuardianAddress` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_rooms`
--

CREATE TABLE `hostel_rooms` (
  `id` int NOT NULL,
  `Hostel` varchar(50) DEFAULT NULL,
  `Floor` int DEFAULT NULL,
  `Room` int DEFAULT NULL,
  `student` int DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` int NOT NULL,
  `Student_Id` varchar(10) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int NOT NULL,
  `Student_Id` varchar(10) DEFAULT NULL,
  `Student_Name` varchar(50) DEFAULT NULL,
  `EmailId` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Gender` varchar(30) DEFAULT NULL,
  `Branch` varchar(50) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `Profile` text,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminregistration`
--
ALTER TABLE `adminregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allotrooms`
--
ALTER TABLE `allotrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feesdetails`
--
ALTER TABLE `feesdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feespaid`
--
ALTER TABLE `feespaid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminregistration`
--
ALTER TABLE `adminregistration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allotrooms`
--
ALTER TABLE `allotrooms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feesdetails`
--
ALTER TABLE `feesdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feespaid`
--
ALTER TABLE `feespaid`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
