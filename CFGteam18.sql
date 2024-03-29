-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2018 at 09:49 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CFGteam18`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `sno` int(225) NOT NULL,
  `colname` varchar(225) NOT NULL,
  `ccname` varchar(225) NOT NULL,
  `phone` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `sno` int(225) NOT NULL,
  `comname` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `refercom` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disability`
--

CREATE TABLE `disability` (
  `disabilities` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disability`
--

INSERT INTO `disability` (`disabilities`) VALUES
('deaf'),
('dumb'),
('blind'),
('handicapped');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobprofile` varchar(1000) NOT NULL,
  `vacancies` int(225) NOT NULL,
  `skillset` varchar(1000) NOT NULL,
  `disabilities` varchar(1000) NOT NULL,
  `cutoff` int(225) NOT NULL,
  `Sector` varchar(1000) NOT NULL,
  `company` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobprofile`, `vacancies`, `skillset`, `disabilities`, `cutoff`, `Sector`, `company`) VALUES
('IT Fresher', 10, 'c,java,dotnet', 'handikapped , dumb ', 40, '', 'jpmc'),
('IT Manager', 5, 'deaf,dumb,', 'deaf,dumb,', 70, '', 'jpmc'),
('IT Manager', 5, 'deaf,dumb,', 'deaf,dumb,', 70, '', 'jpmc'),
('IT Manager', 5, 'deaf,dumb,', 'deaf,dumb,', 70, '', 'jpmc'),
('', 0, '', '', 0, '', 'jpmc');

-- --------------------------------------------------------

--
-- Table structure for table `qbank`
--

CREATE TABLE `qbank` (
  `qno` int(225) NOT NULL,
  `que` varchar(225) NOT NULL,
  `opt1` varchar(225) NOT NULL,
  `opt2` varchar(225) NOT NULL,
  `opt3` varchar(225) NOT NULL,
  `opt4` varchar(225) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `level` int(225) NOT NULL,
  `sector` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qbank`
--

INSERT INTO `qbank` (`qno`, `que`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `level`, `sector`) VALUES
(22, 'what is your name?', 'nikki', 'sam', 'aditya', 'manisha', '2', 1, 'retail'),
(23, 'what is your name?', 'nikki', 'sam', 'aditya', 'manisha', '2', 1, 'retail');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `sno` int(225) NOT NULL,
  `mockresult` int(225) NOT NULL,
  `finalresult` int(225) NOT NULL,
  `username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `jobsec` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`jobsec`) VALUES
('banking'),
('retail'),
('bpo'),
('it'),
('hospitality');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(225) NOT NULL,
  `age` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `university` varchar(225) NOT NULL,
  `education` varchar(225) NOT NULL,
  `passedout` int(225) NOT NULL,
  `disabilities` varchar(225) NOT NULL,
  `phone` int(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `sno` int(225) NOT NULL,
  `refercol` varchar(225) NOT NULL,
  `result` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `colname` (`colname`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `comname` (`comname`);

--
-- Indexes for table `qbank`
--
ALTER TABLE `qbank`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`,`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `sno` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `sno` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(225) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
