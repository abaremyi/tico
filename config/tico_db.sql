-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 11:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tico_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `title` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `biography` varchar(500) NOT NULL,
  `ticoWhereBy` varchar(300) NOT NULL,
  `whyTicoMember` varchar(500) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberid`, `email`, `firstname`, `lastname`, `phone`, `title`, `dob`, `address`, `biography`, `ticoWhereBy`, `whyTicoMember`, `photo`, `status`) VALUES
(1, 'aba1remy@gmail.com', 'ABA', 'Remy', '+250727873', 'Mr.', '2000', 'Kigali', 'ueu', 'dus', 'djsk', 'MB_529.jpg', 'Pending'),
(2, 'test@info.com', 'Test', 'TICO', '7894037438', 'Other', '2004', 'Kigali', 'Genius', 'Social Media', 'Professional Career Causes', 'MB_262.jpg', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
