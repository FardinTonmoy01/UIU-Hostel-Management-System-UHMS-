-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 05:42 PM
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
-- Database: `uhms`
--
CREATE DATABASE IF NOT EXISTS `uhms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `uhms`;

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
CREATE TABLE `buildings` (
  `id` varchar(9) DEFAULT NULL,
  `building_name` varchar(50) NOT NULL,
  `floor_no` varchar(10) NOT NULL,
  `room_no` int(10) NOT NULL,
  `seat_no` int(10) NOT NULL,
  `seat_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `building_name`, `floor_no`, `room_no`, `seat_no`, `seat_status`) VALUES
('', 'A', '1st', 101, 1, 'Available'),
('', 'A', '1st', 101, 2, 'Available'),
('', 'A', '1st', 102, 1, 'Available'),
('', 'A', '1st', 102, 2, 'Available'),
('', 'A', '2nd', 201, 1, 'Available'),
('', 'A', '2nd', 201, 2, 'Available'),
('', 'A', '2nd', 202, 1, 'Available'),
('', 'A', '2nd', 202, 2, 'Available'),
('', 'A', '3rd', 301, 1, 'Available'),
('', 'A', '3rd', 301, 2, 'Available'),
('', 'A', '3rd', 302, 1, 'Available'),
('', 'A', '3rd', 302, 2, 'Available'),
('', 'B', '1st', 101, 1, 'Available'),
('', 'B', '1st', 101, 2, 'Available'),
('', 'B', '1st', 102, 1, 'Available'),
('', 'B', '1st', 102, 2, 'Available'),
('', 'B', '2nd', 201, 1, 'Available'),
('', 'B', '2nd', 201, 2, 'Available'),
('', 'B', '2nd', 202, 1, 'Available'),
('', 'B', '2nd', 202, 2, 'Available'),
('', 'B', '3rd', 301, 1, 'Available'),
('', 'B', '3rd', 301, 2, 'Available'),
('', 'B', '3rd', 302, 1, 'Available'),
('', 'B', '3rd', 302, 2, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_student_info`
--

DROP TABLE IF EXISTS `hostel_student_info`;
CREATE TABLE `hostel_student_info` (
  `id` varchar(9) NOT NULL,
  `room_booking_date` date DEFAULT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_student_info`
--

INSERT INTO `hostel_student_info` (`id`, `room_booking_date`, `pass`) VALUES
('011201460', '0000-00-00', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `notices` varchar(3000) NOT NULL,
  `notice_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notices`, `notice_date`) VALUES
(22, '  hlw', '2022-08-23'),
(23, '  sad lab', '2022-08-23'),
(24, '  hlw', '2022-09-09'),
(25, '  hlwwww', '2022-09-18'),
(26, '  ooooo\r\n', '2022-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

DROP TABLE IF EXISTS `otp`;
CREATE TABLE `otp` (
  `id` varchar(9) NOT NULL,
  `Otp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `Otp`) VALUES
('011201460', 219170);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `id` varchar(12) DEFAULT NULL,
  `pay_amount` float(9,2) DEFAULT NULL,
  `pay_date` datetime DEFAULT current_timestamp(),
  `pay_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uiu_student`
--

DROP TABLE IF EXISTS `uiu_student`;
CREATE TABLE `uiu_student` (
  `id` varchar(9) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Father_name` varchar(250) NOT NULL,
  `Mother_name` varchar(250) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Dept` varchar(20) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uiu_student`
--

INSERT INTO `uiu_student` (`id`, `Name`, `Father_name`, `Mother_name`, `Gender`, `Dept`, `Email`, `Phone`) VALUES
('011201016', 'Dabarjun Mazumder', 'Ananda Mazumder', 'Mousumi Mazumder', 'Male', 'CSE', 'dmazumdar201016@bscse.uiu.ac.bd', '01999999999'),
('011201017', 'Md. Fardin Hossain', 'Zakir Hossen', 'Romana Akter', 'Male', 'CSE', 'mhossain201017@bscse.uiu.ac.bd', '01777777777'),
('011201460', 'Shagufta Sajid', 'Md. Sajid', 'Shahela Jabbar', 'Female', 'CSE', 'ssajid201460@bscse.uiu.ac.bd', '01333333333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`building_name`,`floor_no`,`room_no`,`seat_no`);

--
-- Indexes for table `hostel_student_info`
--
ALTER TABLE `hostel_student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uiu_student`
--
ALTER TABLE `uiu_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
