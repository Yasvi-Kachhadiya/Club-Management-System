-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 05:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `username`, `name`, `gender`, `password`, `avatar`) VALUES
(1, '000000000000', 'Admin', 'Male', '123456', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `clubinfo`
--

CREATE TABLE `clubinfo` (
  `club_ID` int(11) NOT NULL,
  `club_Name` varchar(100) NOT NULL,
  `moderator` varchar(100) NOT NULL DEFAULT 'None',
  `moderator_ID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `club_relation`
--

CREATE TABLE `club_relation` (
  `id` int(11) NOT NULL,
  `club_ID` varchar(20) NOT NULL,
  `club_Name` varchar(100) NOT NULL,
  `user_ID` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_join`
--

CREATE TABLE `event_join` (
  `id` int(11) NOT NULL,
  `event_ID` int(11) NOT NULL,
  `club_ID` int(11) NOT NULL,
  `joined_Member_ID` varchar(50) NOT NULL,
  `show_Event` varchar(5) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_table`
--

CREATE TABLE `event_table` (
  `id` int(11) NOT NULL,
  `event_head` varchar(200) NOT NULL,
  `event_detail` varchar(500) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `event_img` varchar(1000) NOT NULL,
  `club_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_chat`
--

CREATE TABLE `group_chat` (
  `id` int(11) NOT NULL,
  `groupName` varchar(20) NOT NULL,
  `receiverID` varchar(20) NOT NULL,
  `senderID` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `senderName` varchar(20) NOT NULL,
  `showMessage` varchar(10) NOT NULL DEFAULT 'Y',
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `recieverID` varchar(20) NOT NULL,
  `senderID` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `senderName` varchar(50) DEFAULT NULL,
  `senderType` varchar(20) NOT NULL,
  `showMessage` varchar(5) NOT NULL DEFAULT 'Y',
  `seen_unseen` varchar(10) NOT NULL DEFAULT 'unseen',
  `deleted_by_member` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `moderatorinfo`
--

CREATE TABLE `moderatorinfo` (
  `id` int(11) NOT NULL,
  `user_ID` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL DEFAULT 'none',
  `Club_ID` varchar(20) NOT NULL,
  `Club_Name` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Date_Time` varchar(50) NOT NULL,
  `Avatar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notice_table`
--

CREATE TABLE `notice_table` (
  `id` int(11) NOT NULL,
  `notice` varchar(10000) DEFAULT NULL,
  `time_date` varchar(100) NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `club_ID` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `eventID` varchar(20) NOT NULL,
  `club_ID` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notif_seen`
--

CREATE TABLE `notif_seen` (
  `id` int(11) NOT NULL,
  `notifID` varchar(20) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `seen_unseen` varchar(10) NOT NULL DEFAULT 'unseen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `clubname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `admissionyear` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(10000) NOT NULL,
  `is_active` varchar(1) DEFAULT 'N',
  `dateTime` varchar(100) DEFAULT NULL,
  `clubID` varchar(20) DEFAULT NULL,
  `show_Event` varchar(10) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clubinfo`
--
ALTER TABLE `clubinfo`
  ADD UNIQUE KEY `UNIQUE` (`club_ID`);

--
-- Indexes for table `club_relation`
--
ALTER TABLE `club_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_join`
--
ALTER TABLE `event_join`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_table`
--
ALTER TABLE `event_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_chat`
--
ALTER TABLE `group_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderatorinfo`
--
ALTER TABLE `moderatorinfo`
  ADD PRIMARY KEY (`id`,`user_ID`);

--
-- Indexes for table `notice_table`
--
ALTER TABLE `notice_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif_seen`
--
ALTER TABLE `notif_seen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `club_relation`
--
ALTER TABLE `club_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `event_join`
--
ALTER TABLE `event_join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event_table`
--
ALTER TABLE `event_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `group_chat`
--
ALTER TABLE `group_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `moderatorinfo`
--
ALTER TABLE `moderatorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notice_table`
--
ALTER TABLE `notice_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notif_seen`
--
ALTER TABLE `notif_seen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
