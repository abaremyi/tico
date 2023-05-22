-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2023 at 01:53 PM
-- Server version: 5.7.41-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cawsepvz_tico_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL DEFAULT 'Admin',
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`, `category`, `status`) VALUES
(1, 'admin.ticorw', 'VXTYG173F', 'Super_Admin', 'Activated'),
(2, 'admin2.ticorw', 'HHPOSDT33', 'Admin', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `applid` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `deadline` varchar(200) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `googleForm` varchar(2000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `addedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`applid`, `category`, `title`, `description`, `deadline`, `photo`, `url`, `googleForm`, `status`, `addedDate`) VALUES
(1, 'Training', 'Youth Training Program on Job Seeking', 'TICO is inviting applications for its Youth Training Program on Job Seeking under project \"RE-SHAPE WITH A REFRESH FOR THE VULNERABLE YOUTH COMMUNITIES IN RWANDA\'S INCLUSIVE SOCIAL ECONOMIC\" supported by COC Netherlands and GIZ Rwanda, which aims to help vulnerable youth communities in Rwanda. The training is scheduled for May 30th to 31st 2023, following a thorough preparation phase that includes sessions on resume writing, job interviews, and networking. The program is designed to equip the participants with skills that will enable them to secure employment opportunities', '2023-05-28', '', 'https://img.freepik.com/free-photo/application-form-employment-document-concept_53876-125605.jpg?w=740&t=st=1684249787~exp=1684250387~hmac=97756e847e35c3d96f094af489754a96b3a6adf8193be851a821fc4a25c8e03c', 'https://docs.google.com/forms/d/e/1FAIpQLSfpsrC1sYbTx6vYDLCIly0KFWyV4IkG40Fytm69fQjxTpwRiA/viewform?usp=pp_url', 'In-Progress', '2023-05-18 06:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallerid` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL DEFAULT 'Workshop'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallerid`, `photo`, `category`) VALUES
(1, 'Gallely-2.JPG', 'Workshop'),
(2, 'Gallely-3.JPG', 'Workshop'),
(3, 'Gallely-4.JPG', 'Workshop'),
(4, 'Gallely-5.JPG', 'Workshop'),
(5, 'Gallely-6.JPG', 'Workshop'),
(6, 'Gallely-7.JPG', 'Workshop'),
(7, 'Gallely-8.JPG', 'Workshop'),
(8, 'Gallely-9.JPG', 'Workshop'),
(9, 'Gallely-10.JPG', 'Workshop'),
(10, 'Gallely-11.JPG', 'Workshop'),
(11, 'Gallely-12.jpg', 'Workshop'),
(12, 'Gallely-13.JPG', 'Workshop'),
(13, 'Gallely-14.jpg', 'Workshop'),
(14, 'Gallely-15.JPG', 'Workshop'),
(15, 'Gallely-16.JPG', 'Workshop'),
(16, 'Gallely-17.JPG', 'Workshop'),
(17, 'Gallely-18.JPG', 'Workshop'),
(18, 'Gallely-19.JPG', 'Workshop'),
(19, 'Gallely-20.JPG', 'Workshop'),
(20, 'Gallely-21.jpg', 'Workshop');

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
(2, 'test@info.com', 'Test', 'TICO', '7894037438', 'Other', '2004', 'Kigali', 'Genius', 'Social Media', 'Professional Career Causes', 'MB_262.jpg', 'Pending'),
(3, 'emmy@gmail.com', 'Emmy', 'Shimwe', '+2508329374', 'Mr.', '1996', 'Kimironko', 'Single ', 'News Paper', 'Volunteer', 'MB_443.PNG', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `details` varchar(3000) NOT NULL,
  `newsdate` varchar(200) NOT NULL,
  `photo` varchar(2000) NOT NULL,
  `url` varchar(2000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `addedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partnerid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partnerid`, `name`, `logo`) VALUES
(1, '', 'logo_2.png'),
(2, '', 'logo_3.png'),
(3, '', 'logo_4.png'),
(4, '', 'logo_5.png'),
(5, '', 'logo_6.png'),
(6, '', 'logo_7.png'),
(7, '', 'logo_8.png');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `position` varchar(200) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonialid` int(11) NOT NULL,
  `memberName` varchar(100) NOT NULL,
  `profession` varchar(300) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`applid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallerid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partnerid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamid`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonialid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `applid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partnerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonialid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
