-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 12:56 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bait`
--

-- --------------------------------------------------------

--
-- Table structure for table `bedroom`
--

CREATE TABLE `bedroom` (
  `id_card` int(13) NOT NULL,
  `group` varchar(10) NOT NULL,
  `bed_room` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id_card` int(13) NOT NULL,
  `class` varchar(10) NOT NULL,
  `room` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `curator`
--

CREATE TABLE `curator` (
  `id_card` int(13) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id_card` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `id_card` varchar(15) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pname` varchar(10) NOT NULL,
  `group_name` int(1) NOT NULL,
  `bed_room` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`id_card`, `fname`, `lname`, `tel`, `email`, `address`, `pname`, `group_name`, `bed_room`) VALUES
('1101500810413', 'ศราวุฒิ', 'นาสงวน', '0870484975', 'arm_cream555@hotmail.com', '132 ปุณณวิถี 20 สุขุมวิท 101 บางจาก พระโขนง กรุงเทพฯ 10260', 'สามเณร', 3, 1),
('1101500810417', 'มนัญพร', 'พิณทอง', '0989764289', 'arm_cream555@hotmail.com', '132 ปุณณวิถี 20 สุขุมวิท 101 บางจาก พระโขนง กรุงเทพฯ 10260', 'สามเณร', 3, 1),
('1101500810418', 'ศราวุฒิ', 'นาสงวน', '0870484975', 'antoniorey_555@hotmail.com', '132 ปุณณวิถี 20 สุขุมวิท 101 บางจาก พระโขนง กรุงเทพฯ 10260', 'สามเณร', 3, 12),
('1101500810419', 'ศราวุฒิ', 'นาสงวน', '0870484975', 'antoniorey_555@hotmail.com', '132 ปุณณวิถี 20 สุขุมวิท 101 บางจาก พระโขนง กรุงเทพฯ 10260', 'สามเณร', 4, 1),
('1101500810422', 'ศราวุฒิ', 'นาสงวน', '0870484975', 'antoniorey_555@hotmail.com', '132 ปุณณวิถี 20 สุขุมวิท 101 บางจาก พระโขนง กรุงเทพฯ 10260', 'สามเณร', 5, 11),
('1101500810444', 'ศราวุฒิ', 'นาสงวน', '0870484975', 'antoniorey_555@hotmail.com', '132 ปุณณวิถี 20 สุขุมวิท 101 บางจาก พระโขนง กรุงเทพฯ 10260', 'สามเณร', 5, 9),
('1101500810455', 'ศราวุฒิ', 'นาสงวน', '0870484975', 'arm_cream555@hotmail.com', '132 ปุณณวิถี 20 สุขุมวิท 101 บางจาก พระโขนง กรุงเทพฯ 10260', 'สามเณร', 6, 10),
('1101500810456', 'มนัญพร', 'พิณทอง ', '0989764289', 'antoniorey_555@hotmail.com', '132 ปุณณวิถี 20 สุขุมวิท 101 บางจาก พระโขนง กรุงเทพฯ 10260', 'สามเณร', 6, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bedroom`
--
ALTER TABLE `bedroom`
  ADD PRIMARY KEY (`id_card`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id_card`);

--
-- Indexes for table `curator`
--
ALTER TABLE `curator`
  ADD PRIMARY KEY (`id_card`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_card`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id_card`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
