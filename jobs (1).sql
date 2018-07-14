-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 07:37 PM
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
-- Database: `cfgteam18`
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
