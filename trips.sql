-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2015 at 06:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `earthpulse`
--

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE IF NOT EXISTS `trips` (
  `Excursion ID` varchar(10) NOT NULL,
  `Excursion` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Cluster` varchar(10) NOT NULL,
  `Start Date` varchar(20) NOT NULL,
  `End Date` varchar(20) NOT NULL,
  `Level of Students` varchar(20) NOT NULL,
  `Number of Students` int(10) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Alert` int(1) NOT NULL,
  PRIMARY KEY (`Excursion ID`),
  UNIQUE KEY `Excursion ID` (`Excursion ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`Excursion ID`, `Excursion`, `Type`, `City`, `Country`, `School`, `Cluster`, `Start Date`, `End Date`, `Level of Students`, `Number of Students`, `Details`, `Alert`) VALUES
('1', 'Wuhan Immersion Trip', 'Cultural Enrichment', 'Beijing', 'China', 'Dunman Secondary School', 'EAST3', '14/10/2015', '19/10/2015', 'S1/S2/S3', 30, 'Test', 3),
('2', 'RSP Immersion Trip', 'School Immersion', 'Shanghai', 'China', 'Jurong Secondary School', 'WEST6', '15/10/2015', '20/10/2015', 'S3', 20, 'Test 2', 1),
('3', 'SAP - China, Wuxi 2015', 'School Immersion', 'Nanjing', 'China', 'Wellington Primary School', 'NORTH7', '11/10/2015', '17/10/2015', 'P3/P4/P5', 40, 'Test 3', 1),
('4', 'Beyond Boundaries', 'Cultural Enrichment', 'Yogyakarta', 'Indonesia', 'Temasek Junior', 'NORTH6', '20/10/2015', '24/10/2015', 'JC1', 50, 'Test 4', 1),
('5', 'Overseas Education Programme', 'Cultural Enrichment', 'Sapporo', 'Japan', 'Loyang Secondary School', 'EAST1', '22/10/2015', '25/10/2015', 'S3', 20, 'Test 5', 1),
('6', 'Leadership Exchange Programme', 'School Immersion', 'Tokyo', 'Japan', 'Raffles Institution', 'SOUTH7', '24/10/2015', '28/10/2015', 'S4', 15, 'Test 6', 1),
('7', 'Project Shine', 'Cultural Enrichment', 'Chiang Mai', 'Thailand', 'Nanyang Polytechnic', 'NORTH7', '20/10/2015', '24/10/2015', 'JC1', 50, 'Test 7', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
