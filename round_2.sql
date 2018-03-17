-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 12:38 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `round_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `team_1`
--

CREATE TABLE `team_1` (
  `question_id` int(1) NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `marks` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_2`
--

CREATE TABLE `team_2` (
  `question_id` int(1) NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `marks` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_3`
--

CREATE TABLE `team_3` (
  `question_id` int(1) NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `marks` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_4`
--

CREATE TABLE `team_4` (
  `question_id` int(1) NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `marks` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_5`
--

CREATE TABLE `team_5` (
  `question_id` int(1) NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `marks` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team_1`
--
ALTER TABLE `team_1`
  ADD PRIMARY KEY (`question_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
