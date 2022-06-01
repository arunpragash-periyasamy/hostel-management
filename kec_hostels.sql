-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 06:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kec_hostels`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `S.No` int(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`S.No`, `uname`, `Time`) VALUES
(1, 'Valluvar', '2022-05-30 17:55:31'),
(2, 'Valluvar', '2022-05-31 06:08:43'),
(3, 'Valluvar', '2022-05-31 06:59:29'),
(4, 'Valluvar', '2022-05-31 07:51:41'),
(5, 'Valluvar', '2022-05-31 09:12:32'),
(6, 'Valluvar', '2022-05-31 15:28:29'),
(7, 'Valluvar', '2022-05-31 16:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `adminregistration`
--

CREATE TABLE `adminregistration` (
  `id` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `EmailId` varchar(60) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Hostel` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `Cpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminregistration`
--

INSERT INTO `adminregistration` (`id`, `uname`, `EmailId`, `Gender`, `Hostel`, `password`, `Cpassword`) VALUES
(1, 'Valluvar', 'valluvar@kongu.edu', 'Gents', 'Valluvar', 'Valluvar@123', 'Valluvar@123');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `Student_Id` varchar(8) NOT NULL,
  `StudentName` varchar(25) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Blood` varchar(5) NOT NULL,
  `Parent` varchar(10) NOT NULL,
  `ParentName` varchar(25) NOT NULL,
  `ParentContact` varchar(10) NOT NULL,
  `Address` text NOT NULL,
  `GuardianName` varchar(25) NOT NULL,
  `GuardianContact` text NOT NULL,
  `GAddress` text NOT NULL,
  `KVBAcc` int(16) NOT NULL,
  `Computer` varchar(3) NOT NULL,
  `Ironbox` varchar(3) NOT NULL,
  `Phy` varchar(3) NOT NULL,
  `Profile` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `amaravathi`
--

CREATE TABLE `amaravathi` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bharathi`
--

CREATE TABLE `bharathi` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Room_type` varchar(13) NOT NULL DEFAULT 'Not_Attached'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bhavani`
--

CREATE TABLE `bhavani` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(50) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `StudentName` varchar(30) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Hostel` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Complaint_Type` varchar(60) NOT NULL,
  `Complaint_Description` varchar(260) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dheeran`
--

CREATE TABLE `dheeran` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feesdetails`
--

CREATE TABLE `feesdetails` (
  `Department` varchar(50) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Hostel` varchar(25) NOT NULL,
  `BookingFrom` date NOT NULL,
  `Vacate` date NOT NULL,
  `Fees` varchar(5) NOT NULL,
  `Updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feesdetails`
--

INSERT INTO `feesdetails` (`Department`, `Year`, `Hostel`, `BookingFrom`, `Vacate`, `Fees`, `Updated`) VALUES
('AI', 'I', 'Dheeran', '2022-05-17', '2023-04-23', '70000', '0000-00-00 00:00:00'),
('CT-PG', 'III', 'Valluvar', '2022-05-22', '2026-08-24', '70000', '2022-05-24 08:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` int(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_rooms`
--

CREATE TABLE `hostel_rooms` (
  `Hostel` varchar(15) NOT NULL,
  `Floor` int(1) NOT NULL,
  `Room` int(3) NOT NULL,
  `student` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ilango`
--

CREATE TABLE `ilango` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ilango`
--

INSERT INTO `ilango` (`id`, `Floor`, `Room_no`, `Student_Id`, `Student_Name`, `Mobile_no`, `Department`) VALUES
(2, 0, '001', '', '', 0, ''),
(3, 0, '001', '', '', 0, ''),
(4, 0, '001', '', '', 0, ''),
(5, 0, '002', '', '', 0, ''),
(6, 0, '002', '', '', 0, ''),
(7, 0, '002', '', '', 0, ''),
(8, 0, '003', '', '', 0, ''),
(9, 0, '003', '', '', 0, ''),
(10, 0, '003', '', '', 0, ''),
(11, 0, '004', '', '', 0, ''),
(12, 0, '004', '', '', 0, ''),
(13, 0, '004', '', '', 0, ''),
(14, 0, '005', '', '', 0, ''),
(15, 0, '005', '', '', 0, ''),
(16, 0, '005', '', '', 0, ''),
(17, 0, '006', '', '', 0, ''),
(18, 0, '006', '', '', 0, ''),
(19, 0, '006', '', '', 0, ''),
(20, 0, '007', '', '', 0, ''),
(21, 0, '007', '', '', 0, ''),
(22, 0, '007', '', '', 0, ''),
(23, 0, '008', '', '', 0, ''),
(24, 0, '008', '', '', 0, ''),
(25, 0, '008', '', '', 0, ''),
(26, 0, '009', '', '', 0, ''),
(27, 0, '009', '', '', 0, ''),
(28, 0, '009', '', '', 0, ''),
(29, 0, '010', '', '', 0, ''),
(30, 0, '010', '', '', 0, ''),
(31, 0, '010', '', '', 0, ''),
(32, 0, '011', '', '', 0, ''),
(33, 0, '011', '', '', 0, ''),
(34, 0, '011', '', '', 0, ''),
(35, 0, '012', '', '', 0, ''),
(36, 0, '012', '', '', 0, ''),
(37, 0, '012', '', '', 0, ''),
(38, 0, '013', '', '', 0, ''),
(39, 0, '013', '', '', 0, ''),
(40, 0, '013', '', '', 0, ''),
(41, 0, '014', '', '', 0, ''),
(42, 0, '014', '', '', 0, ''),
(43, 0, '014', '', '', 0, ''),
(44, 0, '015', '', '', 0, ''),
(45, 0, '015', '', '', 0, ''),
(46, 0, '015', '', '', 0, ''),
(47, 0, '016', '', '', 0, ''),
(48, 0, '016', '', '', 0, ''),
(49, 0, '016', '', '', 0, ''),
(50, 0, '017', '', '', 0, ''),
(51, 0, '017', '', '', 0, ''),
(52, 0, '017', '', '', 0, ''),
(53, 0, '018', '', '', 0, ''),
(54, 0, '018', '', '', 0, ''),
(55, 0, '018', '', '', 0, ''),
(56, 0, '019', '', '', 0, ''),
(57, 0, '019', '', '', 0, ''),
(58, 0, '019', '', '', 0, ''),
(59, 0, '020', '', '', 0, ''),
(60, 0, '020', '', '', 0, ''),
(61, 0, '020', '', '', 0, ''),
(62, 0, '021', '', '', 0, ''),
(63, 0, '021', '', '', 0, ''),
(64, 0, '021', '', '', 0, ''),
(65, 0, '022', '', '', 0, ''),
(66, 0, '022', '', '', 0, ''),
(67, 0, '022', '', '', 0, ''),
(68, 0, '023', '', '', 0, ''),
(69, 0, '023', '', '', 0, ''),
(70, 0, '023', '', '', 0, ''),
(71, 0, '024', '', '', 0, ''),
(72, 0, '024', '', '', 0, ''),
(73, 0, '024', '', '', 0, ''),
(74, 0, '025', '', '', 0, ''),
(75, 0, '025', '', '', 0, ''),
(76, 0, '025', '', '', 0, ''),
(77, 0, '026', '', '', 0, ''),
(78, 0, '026', '', '', 0, ''),
(79, 0, '026', '', '', 0, ''),
(80, 0, '027', '', '', 0, ''),
(81, 0, '027', '', '', 0, ''),
(82, 0, '027', '', '', 0, ''),
(83, 0, '028', '', '', 0, ''),
(84, 0, '028', '', '', 0, ''),
(85, 0, '028', '', '', 0, ''),
(86, 0, '029', '', '', 0, ''),
(87, 0, '029', '', '', 0, ''),
(88, 0, '029', '', '', 0, ''),
(89, 0, '030', '', '', 0, ''),
(90, 0, '030', '', '', 0, ''),
(91, 0, '030', '', '', 0, ''),
(92, 0, '031', '', '', 0, ''),
(93, 0, '031', '', '', 0, ''),
(94, 0, '031', '', '', 0, ''),
(95, 0, '032', '', '', 0, ''),
(96, 0, '032', '', '', 0, ''),
(97, 0, '032', '', '', 0, ''),
(98, 0, '033', '', '', 0, ''),
(99, 0, '033', '', '', 0, ''),
(100, 0, '033', '', '', 0, ''),
(101, 0, '034', '', '', 0, ''),
(102, 0, '034', '', '', 0, ''),
(103, 0, '034', '', '', 0, ''),
(104, 0, '035', '', '', 0, ''),
(105, 0, '035', '', '', 0, ''),
(106, 0, '035', '', '', 0, ''),
(107, 0, '036', '', '', 0, ''),
(108, 0, '036', '', '', 0, ''),
(109, 0, '036', '', '', 0, ''),
(110, 0, '037', '', '', 0, ''),
(111, 0, '037', '', '', 0, ''),
(112, 0, '037', '', '', 0, ''),
(113, 0, '038', '', '', 0, ''),
(114, 0, '038', '', '', 0, ''),
(115, 0, '038', '', '', 0, ''),
(116, 1, '101', '', '', 0, ''),
(117, 1, '101', '', '', 0, ''),
(118, 1, '101', '', '', 0, ''),
(119, 1, '102', '', '', 0, ''),
(120, 1, '102', '', '', 0, ''),
(121, 1, '102', '', '', 0, ''),
(122, 1, '103', '', '', 0, ''),
(123, 1, '103', '', '', 0, ''),
(124, 1, '103', '', '', 0, ''),
(125, 1, '104', '', '', 0, ''),
(126, 1, '104', '', '', 0, ''),
(127, 1, '104', '', '', 0, ''),
(128, 1, '105', '', '', 0, ''),
(129, 1, '105', '', '', 0, ''),
(130, 1, '105', '', '', 0, ''),
(131, 1, '106', '', '', 0, ''),
(132, 1, '106', '', '', 0, ''),
(133, 1, '106', '', '', 0, ''),
(134, 1, '107', '', '', 0, ''),
(135, 1, '107', '', '', 0, ''),
(136, 1, '107', '', '', 0, ''),
(137, 1, '108', '', '', 0, ''),
(138, 1, '108', '', '', 0, ''),
(139, 1, '108', '', '', 0, ''),
(140, 1, '109', '', '', 0, ''),
(141, 1, '109', '', '', 0, ''),
(142, 1, '109', '', '', 0, ''),
(143, 1, '110', '', '', 0, ''),
(144, 1, '110', '', '', 0, ''),
(145, 1, '110', '', '', 0, ''),
(146, 1, '111', '', '', 0, ''),
(147, 1, '111', '', '', 0, ''),
(148, 1, '111', '', '', 0, ''),
(149, 1, '112', '', '', 0, ''),
(150, 1, '112', '', '', 0, ''),
(151, 1, '112', '', '', 0, ''),
(152, 1, '113', '', '', 0, ''),
(153, 1, '113', '', '', 0, ''),
(154, 1, '113', '', '', 0, ''),
(155, 1, '114', '', '', 0, ''),
(156, 1, '114', '', '', 0, ''),
(157, 1, '114', '', '', 0, ''),
(158, 1, '115', '', '', 0, ''),
(159, 1, '115', '', '', 0, ''),
(160, 1, '115', '', '', 0, ''),
(161, 1, '116', '', '', 0, ''),
(162, 1, '116', '', '', 0, ''),
(163, 1, '116', '', '', 0, ''),
(164, 1, '117', '', '', 0, ''),
(165, 1, '117', '', '', 0, ''),
(166, 1, '117', '', '', 0, ''),
(167, 1, '118', '', '', 0, ''),
(168, 1, '118', '', '', 0, ''),
(169, 1, '118', '', '', 0, ''),
(170, 1, '119', '', '', 0, ''),
(171, 1, '119', '', '', 0, ''),
(172, 1, '119', '', '', 0, ''),
(173, 1, '120', '', '', 0, ''),
(174, 1, '120', '', '', 0, ''),
(175, 1, '120', '', '', 0, ''),
(176, 1, '121', '', '', 0, ''),
(177, 1, '121', '', '', 0, ''),
(178, 1, '121', '', '', 0, ''),
(179, 1, '122', '', '', 0, ''),
(180, 1, '122', '', '', 0, ''),
(181, 1, '122', '', '', 0, ''),
(182, 1, '123', '', '', 0, ''),
(183, 1, '123', '', '', 0, ''),
(184, 1, '123', '', '', 0, ''),
(185, 1, '124', '', '', 0, ''),
(186, 1, '124', '', '', 0, ''),
(187, 1, '124', '', '', 0, ''),
(188, 1, '125', '', '', 0, ''),
(189, 1, '125', '', '', 0, ''),
(190, 1, '125', '', '', 0, ''),
(191, 1, '126', '', '', 0, ''),
(192, 1, '126', '', '', 0, ''),
(193, 1, '126', '', '', 0, ''),
(194, 1, '127', '', '', 0, ''),
(195, 1, '127', '', '', 0, ''),
(196, 1, '127', '', '', 0, ''),
(197, 1, '128', '', '', 0, ''),
(198, 1, '128', '', '', 0, ''),
(199, 1, '128', '', '', 0, ''),
(200, 1, '129', '', '', 0, ''),
(201, 1, '129', '', '', 0, ''),
(202, 1, '129', '', '', 0, ''),
(203, 1, '130', '', '', 0, ''),
(204, 1, '130', '', '', 0, ''),
(205, 1, '130', '', '', 0, ''),
(206, 1, '131', '', '', 0, ''),
(207, 1, '131', '', '', 0, ''),
(208, 1, '131', '', '', 0, ''),
(209, 1, '132', '', '', 0, ''),
(210, 1, '132', '', '', 0, ''),
(211, 1, '132', '', '', 0, ''),
(212, 1, '133', '', '', 0, ''),
(213, 1, '133', '', '', 0, ''),
(214, 1, '133', '', '', 0, ''),
(215, 1, '134', '', '', 0, ''),
(216, 1, '134', '', '', 0, ''),
(217, 1, '134', '', '', 0, ''),
(218, 1, '135', '', '', 0, ''),
(219, 1, '135', '', '', 0, ''),
(220, 1, '135', '', '', 0, ''),
(221, 1, '136', '', '', 0, ''),
(222, 1, '136', '', '', 0, ''),
(223, 1, '136', '', '', 0, ''),
(224, 1, '137', '', '', 0, ''),
(225, 1, '137', '', '', 0, ''),
(226, 1, '137', '', '', 0, ''),
(227, 1, '138', '', '', 0, ''),
(228, 1, '138', '', '', 0, ''),
(229, 1, '138', '', '', 0, ''),
(230, 2, '201', '', '', 0, ''),
(231, 2, '201', '', '', 0, ''),
(232, 2, '201', '', '', 0, ''),
(233, 2, '202', '', '', 0, ''),
(234, 2, '202', '', '', 0, ''),
(235, 2, '202', '', '', 0, ''),
(236, 2, '203', '', '', 0, ''),
(237, 2, '203', '', '', 0, ''),
(238, 2, '203', '', '', 0, ''),
(239, 2, '204', '', '', 0, ''),
(240, 2, '204', '', '', 0, ''),
(241, 2, '204', '', '', 0, ''),
(242, 2, '205', '', '', 0, ''),
(243, 2, '205', '', '', 0, ''),
(244, 2, '205', '', '', 0, ''),
(245, 2, '206', '', '', 0, ''),
(246, 2, '206', '', '', 0, ''),
(247, 2, '206', '', '', 0, ''),
(248, 2, '207', '', '', 0, ''),
(249, 2, '207', '', '', 0, ''),
(250, 2, '207', '', '', 0, ''),
(251, 2, '208', '', '', 0, ''),
(252, 2, '208', '', '', 0, ''),
(253, 2, '208', '', '', 0, ''),
(254, 2, '209', '', '', 0, ''),
(255, 2, '209', '', '', 0, ''),
(256, 2, '209', '', '', 0, ''),
(257, 2, '210', '', '', 0, ''),
(258, 2, '210', '', '', 0, ''),
(259, 2, '210', '', '', 0, ''),
(260, 2, '211', '', '', 0, ''),
(261, 2, '211', '', '', 0, ''),
(262, 2, '211', '', '', 0, ''),
(263, 2, '212', '', '', 0, ''),
(264, 2, '212', '', '', 0, ''),
(265, 2, '212', '', '', 0, ''),
(266, 2, '213', '', '', 0, ''),
(267, 2, '213', '', '', 0, ''),
(268, 2, '213', '', '', 0, ''),
(269, 2, '214', '', '', 0, ''),
(270, 2, '214', '', '', 0, ''),
(271, 2, '214', '', '', 0, ''),
(272, 2, '215', '', '', 0, ''),
(273, 2, '215', '', '', 0, ''),
(274, 2, '215', '', '', 0, ''),
(275, 2, '216', '', '', 0, ''),
(276, 2, '216', '', '', 0, ''),
(277, 2, '216', '', '', 0, ''),
(278, 2, '217', '', '', 0, ''),
(279, 2, '217', '', '', 0, ''),
(280, 2, '217', '', '', 0, ''),
(281, 2, '218', '', '', 0, ''),
(282, 2, '218', '', '', 0, ''),
(283, 2, '218', '', '', 0, ''),
(284, 2, '219', '', '', 0, ''),
(285, 2, '219', '', '', 0, ''),
(286, 2, '219', '', '', 0, ''),
(287, 2, '220', '', '', 0, ''),
(288, 2, '220', '', '', 0, ''),
(289, 2, '220', '', '', 0, ''),
(290, 2, '221', '', '', 0, ''),
(291, 2, '221', '', '', 0, ''),
(292, 2, '221', '', '', 0, ''),
(293, 2, '222', '', '', 0, ''),
(294, 2, '222', '', '', 0, ''),
(295, 2, '222', '', '', 0, ''),
(296, 2, '223', '', '', 0, ''),
(297, 2, '223', '', '', 0, ''),
(298, 2, '223', '', '', 0, ''),
(299, 2, '224', '', '', 0, ''),
(300, 2, '224', '', '', 0, ''),
(301, 2, '224', '', '', 0, ''),
(302, 2, '225', '', '', 0, ''),
(303, 2, '225', '', '', 0, ''),
(304, 2, '225', '', '', 0, ''),
(305, 2, '226', '', '', 0, ''),
(306, 2, '226', '', '', 0, ''),
(307, 2, '226', '', '', 0, ''),
(308, 2, '227', '', '', 0, ''),
(309, 2, '227', '', '', 0, ''),
(310, 2, '227', '', '', 0, ''),
(311, 2, '228', '', '', 0, ''),
(312, 2, '228', '', '', 0, ''),
(313, 2, '228', '', '', 0, ''),
(314, 2, '229', '', '', 0, ''),
(315, 2, '229', '', '', 0, ''),
(316, 2, '229', '', '', 0, ''),
(317, 2, '230', '', '', 0, ''),
(318, 2, '230', '', '', 0, ''),
(319, 2, '230', '', '', 0, ''),
(320, 2, '231', '', '', 0, ''),
(321, 2, '231', '', '', 0, ''),
(322, 2, '231', '', '', 0, ''),
(323, 2, '232', '', '', 0, ''),
(324, 2, '232', '', '', 0, ''),
(325, 2, '232', '', '', 0, ''),
(326, 2, '233', '', '', 0, ''),
(327, 2, '233', '', '', 0, ''),
(328, 2, '233', '', '', 0, ''),
(329, 2, '234', '', '', 0, ''),
(330, 2, '234', '', '', 0, ''),
(331, 2, '234', '', '', 0, ''),
(332, 2, '235', '', '', 0, ''),
(333, 2, '235', '', '', 0, ''),
(334, 2, '235', '', '', 0, ''),
(335, 2, '236', '', '', 0, ''),
(336, 2, '236', '', '', 0, ''),
(337, 2, '236', '', '', 0, ''),
(338, 2, '237', '', '', 0, ''),
(339, 2, '237', '', '', 0, ''),
(340, 2, '237', '', '', 0, ''),
(341, 2, '238', '', '', 0, ''),
(342, 2, '238', '', '', 0, ''),
(343, 2, '238', '', '', 0, ''),
(344, 3, '301', '', '', 0, ''),
(345, 3, '301', '', '', 0, ''),
(346, 3, '301', '', '', 0, ''),
(347, 3, '302', '', '', 0, ''),
(348, 3, '302', '', '', 0, ''),
(349, 3, '302', '', '', 0, ''),
(350, 3, '303', '', '', 0, ''),
(351, 3, '303', '', '', 0, ''),
(352, 3, '303', '', '', 0, ''),
(353, 3, '304', '', '', 0, ''),
(354, 3, '304', '', '', 0, ''),
(355, 3, '304', '', '', 0, ''),
(356, 3, '305', '', '', 0, ''),
(357, 3, '305', '', '', 0, ''),
(358, 3, '305', '', '', 0, ''),
(359, 3, '306', '', '', 0, ''),
(360, 3, '306', '', '', 0, ''),
(361, 3, '306', '', '', 0, ''),
(362, 3, '307', '', '', 0, ''),
(363, 3, '307', '', '', 0, ''),
(364, 3, '307', '', '', 0, ''),
(365, 3, '308', '', '', 0, ''),
(366, 3, '308', '', '', 0, ''),
(367, 3, '308', '', '', 0, ''),
(368, 3, '309', '', '', 0, ''),
(369, 3, '309', '', '', 0, ''),
(370, 3, '309', '', '', 0, ''),
(371, 3, '310', '', '', 0, ''),
(372, 3, '310', '', '', 0, ''),
(373, 3, '310', '', '', 0, ''),
(374, 3, '311', '', '', 0, ''),
(375, 3, '311', '', '', 0, ''),
(376, 3, '311', '', '', 0, ''),
(377, 3, '312', '', '', 0, ''),
(378, 3, '312', '', '', 0, ''),
(379, 3, '312', '', '', 0, ''),
(380, 3, '313', '', '', 0, ''),
(381, 3, '313', '', '', 0, ''),
(382, 3, '313', '', '', 0, ''),
(383, 3, '314', '', '', 0, ''),
(384, 3, '314', '', '', 0, ''),
(385, 3, '314', '', '', 0, ''),
(386, 3, '315', '', '', 0, ''),
(387, 3, '315', '', '', 0, ''),
(388, 3, '315', '', '', 0, ''),
(389, 3, '316', '', '', 0, ''),
(390, 3, '316', '', '', 0, ''),
(391, 3, '316', '', '', 0, ''),
(392, 3, '317', '', '', 0, ''),
(393, 3, '317', '', '', 0, ''),
(394, 3, '317', '', '', 0, ''),
(395, 3, '318', '', '', 0, ''),
(396, 3, '318', '', '', 0, ''),
(397, 3, '318', '', '', 0, ''),
(398, 3, '319', '', '', 0, ''),
(399, 3, '319', '', '', 0, ''),
(400, 3, '319', '', '', 0, ''),
(401, 3, '320', '', '', 0, ''),
(402, 3, '320', '', '', 0, ''),
(403, 3, '320', '', '', 0, ''),
(404, 3, '321', '', '', 0, ''),
(405, 3, '321', '', '', 0, ''),
(406, 3, '321', '', '', 0, ''),
(407, 3, '322', '', '', 0, ''),
(408, 3, '322', '', '', 0, ''),
(409, 3, '322', '', '', 0, ''),
(410, 3, '323', '', '', 0, ''),
(411, 3, '323', '', '', 0, ''),
(412, 3, '323', '', '', 0, ''),
(413, 3, '324', '', '', 0, ''),
(414, 3, '324', '', '', 0, ''),
(415, 3, '324', '', '', 0, ''),
(416, 3, '325', '', '', 0, ''),
(417, 3, '325', '', '', 0, ''),
(418, 3, '325', '', '', 0, ''),
(419, 3, '326', '', '', 0, ''),
(420, 3, '326', '', '', 0, ''),
(421, 3, '326', '', '', 0, ''),
(422, 3, '327', '', '', 0, ''),
(423, 3, '327', '', '', 0, ''),
(424, 3, '327', '', '', 0, ''),
(425, 3, '328', '', '', 0, ''),
(426, 3, '328', '', '', 0, ''),
(427, 3, '328', '', '', 0, ''),
(428, 3, '329', '', '', 0, ''),
(429, 3, '329', '', '', 0, ''),
(430, 3, '329', '', '', 0, ''),
(431, 3, '330', '', '', 0, ''),
(432, 3, '330', '', '', 0, ''),
(433, 3, '330', '', '', 0, ''),
(434, 3, '331', '', '', 0, ''),
(435, 3, '331', '', '', 0, ''),
(436, 3, '331', '', '', 0, ''),
(437, 3, '332', '', '', 0, ''),
(438, 3, '332', '', '', 0, ''),
(439, 3, '332', '', '', 0, ''),
(440, 3, '333', '', '', 0, ''),
(441, 3, '333', '', '', 0, ''),
(442, 3, '333', '', '', 0, ''),
(443, 3, '334', '', '', 0, ''),
(444, 3, '334', '', '', 0, ''),
(445, 3, '334', '', '', 0, ''),
(446, 3, '335', '', '', 0, ''),
(447, 3, '335', '', '', 0, ''),
(448, 3, '335', '', '', 0, ''),
(449, 3, '336', '', '', 0, ''),
(450, 3, '336', '', '', 0, ''),
(451, 3, '336', '', '', 0, ''),
(452, 3, '337', '', '', 0, ''),
(453, 3, '337', '', '', 0, ''),
(454, 3, '337', '', '', 0, ''),
(455, 3, '338', '', '', 0, ''),
(456, 3, '338', '', '', 0, ''),
(457, 3, '338', '', '', 0, ''),
(458, 4, '401', '', '', 0, ''),
(459, 4, '401', '', '', 0, ''),
(460, 4, '401', '', '', 0, ''),
(461, 4, '402', '', '', 0, ''),
(462, 4, '402', '', '', 0, ''),
(463, 4, '402', '', '', 0, ''),
(464, 4, '403', '', '', 0, ''),
(465, 4, '403', '', '', 0, ''),
(466, 4, '403', '', '', 0, ''),
(467, 4, '404', '', '', 0, ''),
(468, 4, '404', '', '', 0, ''),
(469, 4, '404', '', '', 0, ''),
(470, 4, '405', '', '', 0, ''),
(471, 4, '405', '', '', 0, ''),
(472, 4, '405', '', '', 0, ''),
(473, 4, '406', '', '', 0, ''),
(474, 4, '406', '', '', 0, ''),
(475, 4, '406', '', '', 0, ''),
(476, 4, '407', '', '', 0, ''),
(477, 4, '407', '', '', 0, ''),
(478, 4, '407', '', '', 0, ''),
(479, 4, '408', '', '', 0, ''),
(480, 4, '408', '', '', 0, ''),
(481, 4, '408', '', '', 0, ''),
(482, 4, '409', '', '', 0, ''),
(483, 4, '409', '', '', 0, ''),
(484, 4, '409', '', '', 0, ''),
(485, 4, '410', '', '', 0, ''),
(486, 4, '410', '', '', 0, ''),
(487, 4, '410', '', '', 0, ''),
(488, 4, '411', '', '', 0, ''),
(489, 4, '411', '', '', 0, ''),
(490, 4, '411', '', '', 0, ''),
(491, 4, '412', '', '', 0, ''),
(492, 4, '412', '', '', 0, ''),
(493, 4, '412', '', '', 0, ''),
(494, 4, '413', '', '', 0, ''),
(495, 4, '413', '', '', 0, ''),
(496, 4, '413', '', '', 0, ''),
(497, 4, '414', '', '', 0, ''),
(498, 4, '414', '', '', 0, ''),
(499, 4, '414', '', '', 0, ''),
(500, 4, '415', '', '', 0, ''),
(501, 4, '415', '', '', 0, ''),
(502, 4, '415', '', '', 0, ''),
(503, 4, '416', '', '', 0, ''),
(504, 4, '416', '', '', 0, ''),
(505, 4, '416', '', '', 0, ''),
(506, 4, '417', '', '', 0, ''),
(507, 4, '417', '', '', 0, ''),
(508, 4, '417', '', '', 0, ''),
(509, 4, '418', '', '', 0, ''),
(510, 4, '418', '', '', 0, ''),
(511, 4, '418', '', '', 0, ''),
(512, 4, '419', '', '', 0, ''),
(513, 4, '419', '', '', 0, ''),
(514, 4, '419', '', '', 0, ''),
(515, 4, '420', '', '', 0, ''),
(516, 4, '420', '', '', 0, ''),
(517, 4, '420', '', '', 0, ''),
(518, 4, '421', '', '', 0, ''),
(519, 4, '421', '', '', 0, ''),
(520, 4, '421', '', '', 0, ''),
(521, 4, '422', '', '', 0, ''),
(522, 4, '422', '', '', 0, ''),
(523, 4, '422', '', '', 0, ''),
(524, 4, '423', '', '', 0, ''),
(525, 4, '423', '', '', 0, ''),
(526, 4, '423', '', '', 0, ''),
(527, 4, '424', '', '', 0, ''),
(528, 4, '424', '', '', 0, ''),
(529, 4, '424', '', '', 0, ''),
(530, 4, '425', '', '', 0, ''),
(531, 4, '425', '', '', 0, ''),
(532, 4, '425', '', '', 0, ''),
(533, 4, '426', '', '', 0, ''),
(534, 4, '426', '', '', 0, ''),
(535, 4, '426', '', '', 0, ''),
(536, 4, '427', '', '', 0, ''),
(537, 4, '427', '', '', 0, ''),
(538, 4, '427', '', '', 0, ''),
(539, 4, '428', '', '', 0, ''),
(540, 4, '428', '', '', 0, ''),
(541, 4, '428', '', '', 0, ''),
(542, 4, '429', '', '', 0, ''),
(543, 4, '429', '', '', 0, ''),
(544, 4, '429', '', '', 0, ''),
(545, 4, '430', '', '', 0, ''),
(546, 4, '430', '', '', 0, ''),
(547, 4, '430', '', '', 0, ''),
(548, 4, '431', '', '', 0, ''),
(549, 4, '431', '', '', 0, ''),
(550, 4, '431', '', '', 0, ''),
(551, 4, '432', '', '', 0, ''),
(552, 4, '432', '', '', 0, ''),
(553, 4, '432', '', '', 0, ''),
(554, 4, '433', '', '', 0, ''),
(555, 4, '433', '', '', 0, ''),
(556, 4, '433', '', '', 0, ''),
(557, 4, '434', '', '', 0, ''),
(558, 4, '434', '', '', 0, ''),
(559, 4, '434', '', '', 0, ''),
(560, 4, '435', '', '', 0, ''),
(561, 4, '435', '', '', 0, ''),
(562, 4, '435', '', '', 0, ''),
(563, 4, '436', '', '', 0, ''),
(564, 4, '436', '', '', 0, ''),
(565, 4, '436', '', '', 0, ''),
(566, 4, '437', '', '', 0, ''),
(567, 4, '437', '', '', 0, ''),
(568, 4, '437', '', '', 0, ''),
(569, 4, '438', '', '', 0, ''),
(570, 4, '438', '', '', 0, ''),
(571, 4, '438', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `kamban`
--

CREATE TABLE `kamban` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kaveri`
--

CREATE TABLE `kaveri` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ponnar`
--

CREATE TABLE `ponnar` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(50) NOT NULL,
  `Student_Id` varchar(10) DEFAULT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Emailid` varchar(60) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `Course` varchar(25) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sankar`
--

CREATE TABLE `sankar` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` int(11) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `Student_Id`, `time`) VALUES
(1, '19isr007', '2022-05-27 06:51:41'),
(2, '19ISR007', '2022-05-27 14:21:16'),
(3, '19isr007', '2022-05-29 13:49:33'),
(4, '19isr007', '2022-05-29 13:50:37'),
(5, '19isr007', '2022-05-29 15:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `Student_Id` varchar(10) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `EmailId` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Profile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`Student_Id`, `Firstname`, `Lastname`, `EmailId`, `Gender`, `Department`, `password`, `Profile`) VALUES
('19isr007', 'Arun', 'Pragash', 'arunpragashap.19msc@kongu.edu', 'Boy', 'CT-PG', 'Arun@1234', ''),
('19isr060', 'Vignesh', 'A', 'vignesha.19msc@kongu.edu', 'Boy', 'CT-PG', 'Vignesh@123', ''),
('19ISR037', 'Nelson', 'Samuvel', 'nelsonsamuvela.19msc@kongu.edu', 'Boy', 'CT-PG', 'Nelson@123', '');

-- --------------------------------------------------------

--
-- Table structure for table `valluvar`
--

CREATE TABLE `valluvar` (
  `id` int(5) NOT NULL,
  `Floor` int(3) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Student_Name` varchar(25) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Room_type` varchar(13) NOT NULL DEFAULT 'Not_Attached'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`S.No`),
  ADD KEY `uname` (`uname`);

--
-- Indexes for table `adminregistration`
--
ALTER TABLE `adminregistration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user name` (`uname`),
  ADD UNIQUE KEY `email id` (`EmailId`);

--
-- Indexes for table `amaravathi`
--
ALTER TABLE `amaravathi`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `bharathi`
--
ALTER TABLE `bharathi`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `bhavani`
--
ALTER TABLE `bhavani`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `dheeran`
--
ALTER TABLE `dheeran`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `ilango`
--
ALTER TABLE `ilango`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `kamban`
--
ALTER TABLE `kamban`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `kaveri`
--
ALTER TABLE `kaveri`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `ponnar`
--
ALTER TABLE `ponnar`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `sankar`
--
ALTER TABLE `sankar`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD KEY `Firstname` (`Firstname`);

--
-- Indexes for table `valluvar`
--
ALTER TABLE `valluvar`
  ADD UNIQUE KEY `Serial no` (`id`),
  ADD KEY `Student_Id` (`Student_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `S.No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `adminregistration`
--
ALTER TABLE `adminregistration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amaravathi`
--
ALTER TABLE `amaravathi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bharathi`
--
ALTER TABLE `bharathi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bhavani`
--
ALTER TABLE `bhavani`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dheeran`
--
ALTER TABLE `dheeran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ilango`
--
ALTER TABLE `ilango`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=572;

--
-- AUTO_INCREMENT for table `kamban`
--
ALTER TABLE `kamban`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kaveri`
--
ALTER TABLE `kaveri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ponnar`
--
ALTER TABLE `ponnar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sankar`
--
ALTER TABLE `sankar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `valluvar`
--
ALTER TABLE `valluvar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD CONSTRAINT `adminlogin_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `adminregistration` (`uname`);

--
-- Constraints for table `amaravathi`
--
ALTER TABLE `amaravathi`
  ADD CONSTRAINT `amaravathi_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `bharathi`
--
ALTER TABLE `bharathi`
  ADD CONSTRAINT `bharathi_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `bhavani`
--
ALTER TABLE `bhavani`
  ADD CONSTRAINT `bhavani_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `hostel`
--
ALTER TABLE `hostel`
  ADD CONSTRAINT `hostel_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `ilango`
--
ALTER TABLE `ilango`
  ADD CONSTRAINT `ilango_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `kamban`
--
ALTER TABLE `kamban`
  ADD CONSTRAINT `kamban_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `kaveri`
--
ALTER TABLE `kaveri`
  ADD CONSTRAINT `kaveri_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `ponnar`
--
ALTER TABLE `ponnar`
  ADD CONSTRAINT `ponnar_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `sample`
--
ALTER TABLE `sample`
  ADD CONSTRAINT `sample_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `sankar`
--
ALTER TABLE `sankar`
  ADD CONSTRAINT `sankar_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD CONSTRAINT `studentlogin_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);

--
-- Constraints for table `valluvar`
--
ALTER TABLE `valluvar`
  ADD CONSTRAINT `valluvar_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student_registration` (`Student_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
