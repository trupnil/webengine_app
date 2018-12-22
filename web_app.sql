-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 01:16 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `messge_text` varchar(255) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `reciver_id` varchar(255) NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL,
  `attachement` text NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `messge_text`, `sender_id`, `reciver_id`, `timedate`, `status`, `attachement`, `subject`) VALUES
(1, 'vbvzxv xz', '1', 'trupnil92@gmail.com', '2018-12-15 12:53:03', '0', '', '0'),
(2, 'xcbvcxfvb', 'himadripandya273@gmail.com', 'trupnil92@gmail.com', '2018-12-15 12:54:29', '0', '', '0'),
(3, 'dsgsdfgdfsg', 'himadripandya273@gmail.com', 'trupnil92@gmail.com', '2018-12-15 12:55:21', '0', '', 'testr'),
(4, '', 'himadripandya273@gmail.com', '', '2018-12-18 10:33:27', '0', 'chaka.html', ''),
(5, 'helloooo!!!!111', 'himadripandya273@gmail.com', 'trupnil92@gmail.com', '2018-12-18 11:07:53', '0', '', 'test'),
(6, 'sdbdfsvbxb', 'barotrahul6578@gmail.com', 'himadripandya273@gmail.com', '2018-12-19 11:04:16', '0', 'ss.html', 'testr'),
(7, 'sdbdfsvbxb', 'barotrahul6578@gmail.com', 'himadripandya273@gmail.com', '2018-12-19 11:04:18', '0', '', 'testr'),
(8, 'avsdvsdc', 'himadripandya273@gmail.com', 'trupnil92@gmail.com', '2018-12-20 05:10:48', '0', 'api_giphy_header.gif', 'testr'),
(9, 'avsdvsdc', 'himadripandya273@gmail.com', 'trupnil92@gmail.com', '2018-12-20 05:10:50', '0', '', 'testr'),
(10, '<h1>Dear sir,</h1><i></i>hello i need project definition.<br>', 'himadripandya273@gmail.com', 'barotrahul6578@gmail.com', '2018-12-21 07:52:58', '0', 'check.php', 'IMPORTANT'),
(11, '<h1>Dear sir,</h1><i></i>hello i need project definition.<br>', 'himadripandya273@gmail.com', 'barotrahul6578@gmail.com', '2018-12-21 07:53:08', '0', '', 'IMPORTANT'),
(12, 'ssfsdafsa', 'barotrahul6578@gmail.com', 'trupnil92@gmail.com', '2018-12-21 08:04:28', '0', 'check.php', 'testr'),
(13, 'ssfsdafsa', 'barotrahul6578@gmail.com', 'trupnil92@gmail.com', '2018-12-21 08:04:29', '0', '', 'testr');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(15) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` enum('0','1') NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`, `user_status`, `timedate`) VALUES
(1, 'trupnil', 'himadripandya273@gmail.com', '8866174302', '123', '0', '2018-12-15 09:11:51'),
(2, 'Rahul', 'barotrahul6578@gmail.com', '8866174302', 'Blacki@123', '0', '2018-12-18 12:55:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `reciver_id` (`reciver_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
