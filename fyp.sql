-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 06:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(110) NOT NULL,
  `fullName` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `purchased` text NOT NULL,
  `product` varchar(50) NOT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `needed` varchar(20) NOT NULL,
  `innovative` text NOT NULL,
  `recommendation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fullName`, `email`, `purchased`, `product`, `reason`, `needed`, `innovative`, `recommendation`) VALUES
(1, 'hassan', 'hass@mail.com', 'yes', 'think', 'abc', 'yes', 'yes', 'no'),
(2, 'hassan', 'hass@mail.com', 'no', 'idea', 'xyz', 'no', 'yes', 'yes'),
(15, 'dsa', 'tayyab@mail.com', 'yes', 'thinkpad extreme', 'I liked it from the depth of my heart', 'some of it', 'no', 'null'),
(16, 'usman', 'tayyab@mail.com', '', 'thinkpad extreme', 'null', 'all of it', 'extremely', 'no'),
(19, 'usman', 'tayyab@mail.com', 'yes', 'thinkpad extreme', 'null', 'some of it', 'moderrately', 'yes'),
(23, 'reewrew', 'javed@gmail.com', 'yes', 'ideapad', 'I liked it from the depth of my heart i retrdrd gygfy', 'all of it', 'no', 'yes'),
(24, 'usman', 'usama@mail.com', 'yes', 'thinkpad extreme', 'I liked it from the depth of my heart i retrdrd gygfy', 'all of it', 'not at all', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(110) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `fatherName` varchar(35) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `firstName`, `lastName`, `fatherName`, `contact`, `email`, `password`, `gender`) VALUES
(9, 'Hassan', 'Mustansar', 'Mustansar saeed', '2132132131', 'hassanmustanser@gmail.com', '1234', ' male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
