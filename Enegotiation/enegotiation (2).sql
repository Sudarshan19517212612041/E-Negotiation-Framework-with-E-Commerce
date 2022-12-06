-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 01:50 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enegotiation`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientchatboard`
--

CREATE TABLE `clientchatboard` (
  `id` int(11) NOT NULL,
  `Uid` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `solution` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientchatboard`
--

INSERT INTO `clientchatboard` (`id`, `Uid`, `Name`, `Description`, `solution`) VALUES
(24, 'V_19', 'nandini patil', 'it is in good condition', 'solution'),
(25, 'V_19', 'nandini patil', 'it very difficult to  understand', 'solution23'),
(26, 'V_19', 'nandini patil', 'how to use it', 'sample answer'),
(27, 'C_19', 'Name', 'These is Des', 'these is sample answer'),
(28, 'C_19', 'Name', 'These is Des', ''),
(29, 'C_19', 'nitu', 'it very difficult to  understand', ''),
(30, 'C_19', 'nitu', 'it very difficult to  understand', '');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `User_type` varchar(50) NOT NULL,
  `Id` varchar(110) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`User_type`, `Id`, `Name`, `Email`, `Pass`, `Contact`, `Address`) VALUES
('vendor', 'V_29', 'deep', 'kalp@', '989016', '123', 'Jalgaon'),
('vendor', 'V_19', 'nandu123', 'nandu@123', '1234', '2648469632', 'k '),
('customer', 'C_18', 'nutan01', 'nutal@122', 'zxdrv', '9269453278', 'ganesh colony'),
('customer', 'C_19', 'nitu', 'nitu@123', 'mnbv', '8668523331', 'professor colony,jalgaon'),
('customer', 'C_6', 'Deepika Patil', 'deepu@gmail.com', 'pvn123', '12345678901234567', 'ganesh nagar'),
('vendor', 'V_50', 'sam', 'sam@gmail.com', '123', '8855042200', '123'),
('customer', 'C_23', 'nutan002', 'nutan@gmail.com', 'asdf', '3678976543', 'professor colony,jalgaon');

-- --------------------------------------------------------

--
-- Table structure for table `vendorchatboard`
--

CREATE TABLE `vendorchatboard` (
  `Vname` varchar(50) NOT NULL,
  `Vdesc` varchar(100) NOT NULL,
  `Voutput` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewadd`
--

CREATE TABLE `viewadd` (
  `id` int(11) NOT NULL,
  `UId` varchar(50) NOT NULL,
  `type` varchar(60) NOT NULL,
  `items` varchar(100) NOT NULL,
  `Prices` int(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `bidprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viewadd`
--

INSERT INTO `viewadd` (`id`, `UId`, `type`, `items`, `Prices`, `path`, `status`, `bidprice`) VALUES
(2, 'V_19', 'Car', 'toyota', 23400, 'd8.jpg', '', 0),
(3, 'V_19', 'Furniture', 'chairs', 234, 'images.jpg', '', 0),
(4, 'C_19', 'Car', 'toyota', 2345, 'download.jpg', 'accept', 2300),
(5, 'C_19', 'Furniture', 'dressing table', 2345, 'a1.jpg', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientchatboard`
--
ALTER TABLE `clientchatboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewadd`
--
ALTER TABLE `viewadd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientchatboard`
--
ALTER TABLE `clientchatboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `viewadd`
--
ALTER TABLE `viewadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
