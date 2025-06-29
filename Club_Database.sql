-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 03:04 AM
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

--
-- Dumping data for table `clubinfo`
--

INSERT INTO `clubinfo` (`club_ID`, `club_Name`, `moderator`, `moderator_ID`) VALUES
(1, 'Music Club', 'Moderator One', '111111111111'),
(2, 'Dance Club', 'Moderator Two', '222222222222'),
(3, 'Sports Club', 'Moderator Three', '333333333333'),
(4, 'Literature Club', 'Moderator Four', '444444444444'),
(5, 'Fine Arts Club', 'Moderator Five', '555555555555'),
(6, 'Nature Club', 'Moderator Six', '666666666666'),
(7, 'Theatre Club', 'Moderator Seven', '777777777777'),
(8, 'Photography Club', 'Moderator Eight', '888888888888'),
(9, 'Rotary Club', 'Moderator Nine', '999999999999'),
(10, 'Event Management Club', 'Moderator Ten', '101010101010');

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

--
-- Dumping data for table `club_relation`
--

INSERT INTO `club_relation` (`id`, `club_ID`, `club_Name`, `user_ID`, `status`) VALUES
(171, '1', 'Music Club', '180470116048', 'Y'),
(172, '2', 'Dance Club', '180470116038', 'Y'),
(173, '3', 'Sports Club', '180470116026', 'Y'),
(174, '4', 'Literature Club', '180470116030', 'Y'),
(175, '5', 'Fine Arts Club', '180470116024', 'Y'),
(176, '6', 'Nature Club', '180470116041', 'Y'),
(177, '7', 'Theatre Club', '180470116004', 'N'),
(178, '8', 'Photography Club', '180470116019', 'Y'),
(179, '10', 'Event Management Club', '180470116030', 'Y'),
(180, '9', 'Rotary Club', '180470116030', 'Y'),
(181, '8', 'Photography Club', '180470116030', 'N'),
(182, '7', 'Theatre Club', '180470116030', 'Y'),
(183, '2', 'Dance Club', '180470116030', 'Y'),
(184, '3', 'Sports Club', '180470116030', 'Y'),
(185, '9', 'Rotary Club', '180470116024', 'N'),
(186, '4', 'Literature Club', '180470116024', 'Y'),
(187, '6', 'Nature Club', '180470116024', 'Y'),
(188, '1', 'Music Club', '180470116026', 'Y'),
(189, '7', 'Theatre Club', '180470116026', 'Y'),
(190, '10', 'Event Management Club', '180470116026', 'Y'),
(191, '8', 'Photography Club', '180470116026', 'Y'),
(192, '6', 'Nature Club', '180470116026', 'Y'),
(193, '2', 'Dance Club', '180470116048', 'Y'),
(194, '9', 'Rotary Club', '180470116048', 'N'),
(195, '7', 'Theatre Club', '180470116048', 'Y'),
(196, '10', 'Event Management Club', '180470116048', 'Y'),
(197, '9', 'Rotary Club', '180470116041', 'Y'),
(198, '10', 'Event Management Club', '180470116041', 'Y'),
(199, '7', 'Theatre Club', '180470116041', 'Y'),
(200, '3', 'Sports Club', '180470116041', 'Y'),
(201, '8', 'Photography Club', '180470116041', 'N'),
(202, '6', 'Nature Club', '180470116019', 'Y'),
(203, '9', 'Rotary Club', '180470116019', 'Y'),
(204, '10', 'Event Management Club', '180470116019', 'N'),
(205, '7', 'Theatre Club', '180470116019', 'Y'),
(206, '10', 'Event Management Club', '180470116038', 'Y'),
(207, '5', 'Fine Arts Club', '180470116038', 'N'),
(208, '4', 'Literature Club', '180470116038', 'N'),
(209, '3', 'Sports Club', '180470116038', 'Y'),
(210, '1', 'Music Club', '180470116038', 'Y'),
(211, '2', 'Dance Club', '180470116026', 'Y'),
(212, '9', 'Rotary Club', '180470116026', 'Y'),
(213, '5', 'Fine Arts Club', '180470116026', 'Y'),
(214, '4', 'Literature Club', '180470116026', 'Y');

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

--
-- Dumping data for table `event_join`
--

INSERT INTO `event_join` (`id`, `event_ID`, `club_ID`, `joined_Member_ID`, `show_Event`) VALUES
(10, 109, 4, '180470116030', 'Y'),
(11, 89, 4, '180470116030', 'Y'),
(12, 50, 5, '180470116024', 'Y'),
(13, 90, 5, '180470116024', 'Y'),
(14, 110, 5, '180470116024', 'Y'),
(15, 107, 2, '180470116038', 'Y'),
(16, 49, 1, '180470116038', 'Y'),
(17, 115, 10, '180470116038', 'Y'),
(18, 86, 1, '180470116048', 'Y'),
(19, 49, 1, '180470116048', 'Y'),
(20, 112, 7, '180470116048', 'Y'),
(21, 115, 10, '180470116030', 'Y'),
(22, 94, 9, '180470116030', 'Y'),
(23, 107, 2, '180470116030', 'Y'),
(24, 88, 3, '180470116030', 'Y'),
(25, 112, 7, '180470116030', 'Y'),
(26, 89, 4, '180470116024', 'Y'),
(27, 109, 4, '180470116024', 'Y'),
(28, 91, 6, '180470116024', 'Y'),
(29, 107, 2, '180470116048', 'Y'),
(30, 95, 10, '180470116048', 'Y'),
(31, 113, 8, '180470116019', 'Y'),
(32, 91, 6, '180470116019', 'Y'),
(33, 114, 9, '180470116019', 'Y'),
(34, 92, 7, '180470116019', 'Y'),
(35, 91, 6, '180470116041', 'Y'),
(36, 114, 9, '180470116041', 'Y'),
(37, 115, 10, '180470116041', 'Y'),
(38, 88, 3, '180470116041', 'Y'),
(39, 112, 7, '180470116041', 'Y'),
(40, 112, 7, '180470116026', 'Y'),
(41, 113, 8, '180470116026', 'Y'),
(42, 87, 2, '180470116026', 'Y'),
(43, 50, 5, '180470116026', 'Y'),
(44, 90, 5, '180470116026', 'Y'),
(45, 109, 4, '180470116026', 'Y'),
(46, 94, 9, '180470116026', 'Y'),
(47, 115, 10, '180470116026', 'Y');

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

--
-- Dumping data for table `event_table`
--

INSERT INTO `event_table` (`id`, `event_head`, `event_detail`, `venue`, `capacity`, `date`, `time`, `event_img`, `club_ID`) VALUES
(49, 'Music Masala', 'Blockbuster event for all the members of music club. Take part in Music War and win cash prices !', 'Music Department', '20', '11-09-2023', '10:00', '1651273472Music_Masala.jpg', '1'),
(50, 'Painting Plus', 'It is exclusive face painting event in which, all the participant need to paint their own face with skin colors. Top 10 winners will receive awards.!', 'IT Department', '30', '14-08-2023', '01:00', '1651275483Paint.jpg', '5'),
(86, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '1'),
(87, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '2'),
(88, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '3'),
(89, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '4'),
(90, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '5'),
(91, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '6'),
(92, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '7'),
(93, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '8'),
(94, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '9'),
(95, 'Youth Run', '\'Youth\' is indeed energy personified. They are equipped with a perfect balance of time at their disposal, and exuberance to deal with any task at hand. These strong Willed and Passionate group of people can definitely be the difference between a \'Developed and a \'Developing nation. ClubCare, encourages the youth to use these resources to their best benefit and aims to use this tremendous potential of the Indian youth to help and shape a strong future for the country.', 'Sports Ground', '1000', '22-04-2022', '07:00', '1651278188Youth_Run.jpeg', '10'),
(106, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '1'),
(107, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '2'),
(108, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '3'),
(109, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '4'),
(110, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '5'),
(111, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '6'),
(112, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '7'),
(113, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '8'),
(114, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '9'),
(115, 'DJ Dhamal', 'On the occasion of First Anniversary, Here is a throwback to the \'Disco Dance\' and \'EDM Night\' events conducted by ClubCare where young students got a chance to Enjoy with open mind !', 'Outdoor Stadium', '500', '22-04-2024', '22:00', '1651279078DJ_Dhamal.jpeg', '10');

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

--
-- Dumping data for table `moderatorinfo`
--

INSERT INTO `moderatorinfo` (`id`, `user_ID`, `Name`, `Club_ID`, `Club_Name`, `Gender`, `Email`, `Password`, `Date_Time`, `Avatar`) VALUES
(14, '111111111111', 'Moderator One', '1', 'Music Club', 'male', 'Moderator1@clubcare.com', '123456', '2022-04-29 21:32:02', 'moderator.png'),
(15, '222222222222', 'Moderator Two', '2', 'Dance Club', 'male', 'Moderator2@clubcare.com', '123456', '2022-04-29 21:32:27', 'moderator.png'),
(16, '333333333333', 'Moderator Three', '3', 'Sports Club', 'male', 'Moderator3@clubcare.com', '123456', '2022-04-29 21:32:50', 'moderator.png'),
(17, '444444444444', 'Moderator Four', '4', 'Literature Club', 'male', 'Moderator4@clubcare.com', '123456', '2022-04-29 21:33:11', 'moderator.png'),
(18, '555555555555', 'Moderator Five', '5', 'Fine Arts Club', 'male', 'Moderator5@clubcare.com', '123456', '2022-04-29 21:33:32', 'moderator.png'),
(19, '666666666666', 'Moderator Six', '6', 'Nature Club', 'male', 'Moderator6@clubcare.com', '123456', '2022-04-29 21:33:52', 'moderator.png'),
(20, '777777777777', 'Moderator Seven', '7', 'Theatre Club', 'male', 'Moderator7@clubcare.com', '123456', '2022-04-29 21:34:09', 'moderator.png'),
(24, '888888888888', 'Moderator Eight', '8', 'Photography Club', 'male', 'Moderator8@clubcare.com', '123456', '2022-04-29 21:40:04', 'moderator.png'),
(25, '999999999999', 'Moderator Nine', '9', 'Rotary Club', 'male', 'Moderator9@clubcare.com', '123456', '2022-04-29 21:41:18', 'moderator.png'),
(27, '101010101010', 'Moderator Ten', '10', 'Event Management Club', 'male', 'Moderator10@gmail.com', '123456', '2022-04-29 21:51:54', 'moderator.png');

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

--
-- Dumping data for table `notice_table`
--

INSERT INTO `notice_table` (`id`, `notice`, `time_date`, `posted_by`, `club_ID`) VALUES
(9, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '1'),
(10, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '2'),
(11, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '3'),
(12, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '4'),
(13, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '5'),
(14, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '6'),
(15, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '7'),
(16, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '8'),
(17, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '9'),
(18, 'Hello Everyone ! Wishing You All the Best for Upcoming Events. Participate, Win and Make us Proud.', '2022-04-30 03:42:06', 'Admin', '10'),
(21, 'Good Morning from Music Club !', '2022-04-30 06:11:50', 'Moderator One', '1'),
(22, 'Good Morning from Dance Club !', '2022-04-30 06:12:37', 'Moderator Two', '2'),
(23, 'Good Morning from Sports Club !', '2022-04-30 06:13:08', 'Moderator Three', '3'),
(24, 'Good Morning from Literature Club !', '2022-04-30 06:14:10', 'Moderator Four', '4'),
(25, 'Good Morning from Fine Arts Club !', '2022-04-30 06:15:46', 'Moderator Five', '5'),
(26, 'Good Morning from Nature Club !', '2022-04-30 06:16:11', 'Moderator Six', '6'),
(27, 'Good Morning from Theatre Club !', '2022-04-30 06:16:41', 'Moderator Seven', '7'),
(28, 'Good Morning from Photography Club !', '2022-04-30 06:17:57', 'Moderator Eight', '8'),
(29, 'Good Morning from Rotary Club !', '2022-04-30 06:18:21', 'Moderator Nine', '9'),
(30, 'Good Morning from Event Management Club !', '2022-04-30 06:18:47', 'Moderator Ten', '10');

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
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `clubname`, `name`, `username`, `dept`, `semester`, `gender`, `dob`, `admissionyear`, `phone`, `email`, `password`, `avatar`, `is_active`, `dateTime`, `clubID`, `show_Event`) VALUES
(101, 'Music Club', 'Keval Savaliya', '180470116048', 'CE', '1', 'male', '21/Jun/2003', '2021', '8467810077', 'keval6savaliya@clubcare.com', '123456', '1651247014Keval.jpg', 'Y', '2022-04-29 21:13:35', '1', 'Y'),
(102, 'Dance Club', 'Vaibhav Patel', '180470116038', 'EE', '2', 'male', '13/Mar/2002', '2020', '6351774578', 'kingbhai@clubcare.com', '123456', '1651250227Vaibhav.jpg', 'Y', '2022-04-29 22:07:07', '2', 'Y'),
(103, 'Sports Club', 'Akshat Makwana', '180470116026', 'IT', '8', 'male', '22/Apr/2001', '2018', '6357854198', 'akshat2204@clubcare.com', '123456', '1651250316Akshat.jpg', 'Y', '2022-04-29 22:08:36', '3', 'Y'),
(104, 'Literature Club', 'Darshit Mehta', '180470116030', 'NANOTECH', '3', 'Male', '16-Nov-1998', '2020', '6387846214', 'rockeybhai07@clubcare.com', '123456', '1651250417Darshit.jpg', 'Y', '2022-04-29 22:10:18', '4', 'Y'),
(105, 'Fine Arts Club', 'Vishad Lunagariya', '180470116024', 'EC', '4', 'male', '30/Mar/2001', '2019', '9487451296', 'vishad9@clubcare.com', '123456', '1651250519Vishad.jpg', 'Y', '2022-04-29 22:12:00', '5', 'Y'),
(106, 'Nature Club', 'Shyam Radadiya', '180470116041', 'CH', '5', 'male', '13/sep/2000', '2018', '9824458784', 'shyam123@clubcare.com', '123456', '1651250692Shyam.jpg', 'Y', '2022-04-29 22:14:52', '6', 'Y'),
(107, 'Theatre Club', 'Jay Bhatt', '180470116004', 'CI', '7', 'male', '8/Jun/1999', '2018', '6354127845', 'jaybhatt@clubcare.com', '123456', '1651251068Jay.jpg', 'N', '2022-04-29 22:21:08', '7', 'Y'),
(108, 'Photography Club', 'Rajdeep Khachar', '180470116019', 'BT', '6', 'male', '12/Jul/1999', '2017', '6351747778', 'rajdeep77@clubcare.com', '123456', '1651251376Rajdeep.jpg', 'Y', '2022-04-29 22:26:16', '8', 'Y');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `event_join`
--
ALTER TABLE `event_join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `event_table`
--
ALTER TABLE `event_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `notice_table`
--
ALTER TABLE `notice_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
