-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 01:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE `tblregistration` (
  `id` int(11) NOT NULL,
  `FullName` varchar(150) DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `Password` varchar(150) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`) VALUES
(1, 'hfthfg', 1234567890, 'sdfds@gmail.com', '123456', '2019-12-16 11:48:29'),
(2, 'hfthfg', 1234567890, 'sdfds@gmail.com', '123456', '2019-12-16 11:49:10'),
(3, 'Ankit', 1728873691, 'anki273bisht@gmail.com', '12345678', '2022-06-08 09:23:38'),
(4, 'Ankit', 1287981218, 'anki143bisht@gmail.com', '123456789', '2022-06-08 09:27:37'),
(5, 'Ankit', 7128798121, 'ankit123bisht@gmail.com', '123456', '2022-06-08 09:29:56'),
(6, 'Ankit', 1234547890, 'anki1435453bisht@gmail.com', '1234567890', '2022-06-09 05:50:19'),
(7, 'Ankit', 1234577890, 'anki14d5453bisht@gmail.com', '1234567890', '2022-06-09 05:54:44'),
(8, 'Ankit', 2345652452, 'ankit123asdfbisht@gmail.com', '12345678', '2022-06-09 06:40:50'),
(9, 'praderp', 3627411092, 'prADEEP43bisht@gmail.com', '12345678', '2022-06-09 06:43:21'),
(10, 'Ankit', 2222222222, 'anki14sb3bisht@gmail.com', '12345678', '2022-06-13 11:34:53'),
(11, 'Ankit', 2224222222, 'anki14654ssfvsb3bisht@gmail.com', '12345678', '2022-06-13 11:37:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblregistration`
--
ALTER TABLE `tblregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblregistration`
--
ALTER TABLE `tblregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
