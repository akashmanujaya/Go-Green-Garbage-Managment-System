-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 05:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminCR

CREATE DATABASE demo;
USE demo;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `username`, `gender`, `email`, `password`) VALUES
(1, 'Akash', 'Manujaya', 'akashmanujaya', 'male', 'akashmanujaya@gmail.com', 'akash'),
(2, 'hasindu', 'charith', 'hasinducharith', 'male', 'hasinducharith@gmail.com', 'hasindu'),
(3, 'dinush', 'chathurya', 'dinush', 'male', 'akashmanujaya@gmail.com', 'dinush'),
(4, 'akila', 'herath', 'akila', 'male', 'akashmanujaya@gmail.com', 'akila');

-- --------------------------------------------------------

--
-- Table structure for table `collectingstaff`
--

CREATE TABLE `collectingstaff` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collectingstaff`
--

INSERT INTO `collectingstaff` (`id`, `fname`, `lname`, `username`, `gender`, `email`, `password`) VALUES
(1, 'Akash', 'Manujaya', 'akashmanujaya', 'male', 'akashmanujaya@gmail.com', 'akash'),
(2, 'hasindu', 'charith', 'hasinducharith', 'male', 'hasinducharith@gmail.com', 'hasindu'),
(3, 'dinush', 'chathurya', 'dinushchathurya', 'male', 'dinushchathurya@gmail.com', 'dinush'),
(4, 'dinush', 'chathurya', 'dinush', 'male', 'akashmanujaya@gmail.com', 'dinush');

-- --------------------------------------------------------

--
-- Table structure for table `greencaptain`
--

CREATE TABLE `greencaptain` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `greencaptain`
--

INSERT INTO `greencaptain` (`id`, `fname`, `lname`, `username`, `gender`, `email`, `password`) VALUES
(1, 'Akash', 'Manujaya', 'akashmanujaya', 'male', 'akashmanujaya@gmail.com', 'akash'),
(2, 'hasindu', 'charith', 'hasinducharith', 'male', 'hasinducharith@gmail.com', 'hasindu');

-- --------------------------------------------------------

--
-- Table structure for table `gtfmember`
--

CREATE TABLE `gtfmember` (
  `Member_ID` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `imglink` varchar(100) NOT NULL,
  `accType` varchar(25) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gtfmember`
--

INSERT INTO `gtfmember` (`Member_ID`, `First_Name`, `Last_Name`, `User_Name`, `Gender`, `Email`, `Password`, `imglink`, `accType`) VALUES
(1, 'akash', 'liyanaarachchi', 'akash', 'male', 'akashmanujaya@gmail.com', '202cb962ac59075b964b07152d234b', 'webpro2/uploads/muhammad-nouman-732720-unsplash.jpg', ''),
(2, 'akash', 'liyanaarachchi', 'aml', 'male', 'akashmanujaya@gmail.com', '202cb962ac59075b964b07152d234b', 'uploads/muhammad-nouman-732720-unsplash.jpg', ''),
(3, 'hasindu', 'liyanaarachchi', 'sadsadad', 'male', 'akashmanujaya@gmail.com', '202cb962ac59075b964b07152d234b', 'uploads/tony-webster-97532-unsplash.jpg', ''),
(4, 'akash', 'liyanaarachchi', 'akasha', 'female', 'akashmanujaya@gmail.com', '202cb962ac59075b964b07152d234b', 'uploads/55d2c282c3f17359a3ee772df6405182png', ''),
(5, 'akash', 'liyanaarachchi', 'akash123', 'male', 'akashmanujaya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', 'uploads/85cc3a38a0d3014b1f6dbe2079a40309png', ''),
(6, 'hasindu', 'hasindu', 'hasindu97', 'male', 'akashmanujaya@outlook.com', '81dc9bdb52d04dc20036dbd8313ed0', 'uploads/6f9c442618312341fc81ab266d1b7a0dpng', ''),
(7, 'akash', 'liyanaarachchi', 'ssss', 'female', 'akashmanusjaya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', 'uploads/11c6d78a6101d36c20a5127f5e139659png', ''),
(8, 'akash', 'liyanaarachchi', 'aml123', 'male', 'akashmanujaya@gmail.com', '0b9c28325536842ab453e5b8bc7fd7bd', 'uploads/4e96ca85e5f6124c2c08373b73e6e60epng', ''),
(9, 'Akash', 'Manujaya', 'manu', 'male', 'akashmanujaya@gmail.com', 'f13bb1bed03db9d68a7d9a48aafeec78', 'uploads/ba976dd8c08ddd0d079249f1a27639a1png', ''),
(10, 'Akash', 'Manujaya', 'asd', 'male', 'akashmanujaya@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'uploads/9e572ba7ec4b64310db17270dc93d096png', ''),
(11, 'akash', 'liyanaarachchi', 'liy', 'male', 'akashmanujaya@gmail.com', 'ac6ce509104ab39bbc053e12e435c97f', 'uploads/cbdb5a29fb59da5624c79dfb545cdaa8png', '');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(120) NOT NULL,
  `location_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `description`, `image`, `location_status`) VALUES
(6, 6.806749, 80.280090, 'asfdfs', 'uploads/6b4e6e4a421d954f57ff87c4a9e7fbba.png', 1),
(7, 6.953997, 80.115295, 'test', 'uploads/27177155b0b88db9716fc787797925a8.png', 1),
(9, 6.951270, 79.990326, 'hai', 'uploads/02ff6225bfc9b56117e28f5fe4d71f7e.png', 1),
(11, 6.316676, 81.318413, 'hasdjasfdjasdasdjsahd', 'uploads/bb0a71dac61b844bb971aa62585d5fbc.png', 1),
(19, 7.514709, 80.810890, 'Very bad smell and affecting to the wild life also', 'uploads/7e3703c0de053441878afb53d47d4baf.png', 0),
(20, 8.863091, 80.503273, 'very bad smell', 'uploads/b8d81a46383749d375817bf99b61890c.png', 1),
(21, 6.787360, 79.885162, 'very bad smell and affecting to the wild life', 'uploads/7ec9d67e95a6860fb10eb6077a49f53b.png', 0),
(22, 6.715829, 79.907242, 'panadura', 'uploads/d96f97e4162534de36bcfea1dce6d914.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collectingstaff`
--
ALTER TABLE `collectingstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `greencaptain`
--
ALTER TABLE `greencaptain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gtfmember`
--
ALTER TABLE `gtfmember`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `collectingstaff`
--
ALTER TABLE `collectingstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `greencaptain`
--
ALTER TABLE `greencaptain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gtfmember`
--
ALTER TABLE `gtfmember`
  MODIFY `Member_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
