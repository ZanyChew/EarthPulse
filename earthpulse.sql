-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2015 at 12:31 PM
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
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('James', '1234'),
('Kelvin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE IF NOT EXISTS `trips` (
  `ID` varchar(10) NOT NULL,
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
  `Details` varchar(2000) NOT NULL,
  `Alert` int(1) NOT NULL,
  `Notification` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Excursion ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`ID`, `Excursion`, `Type`, `City`, `Country`, `School`, `Cluster`, `Start Date`, `End Date`, `Level of Students`, `Number of Students`, `Details`, `Alert`, `Notification`) VALUES
('1', 'Wuhan Immersion Trip', 'Cultural Enrichment', 'Beijing', 'China', 'Dunman Secondary School', 'EAST3', '14/10/2015', '19/10/2015', 'S1/S2/S3', 30, '<b>Day 1: Beijing</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n<br /><br />\n\n<b>Day 2: Shanghai</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. unchanged.\n\n<br /><br />\n<b>Group:</b> 30 students and 2 teachers', 1, 0),
('2', 'RSP Immersion Trip', 'School Immersion', 'Shanghai', 'China', 'Jurong Secondary School', 'WEST6', '15/10/2015', '20/10/2015', 'S3', 20, '<b>Day 1: Shanghai</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n<br /><br />\n\n<b>Day 2: Beijing</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. unchanged.\n\n<br /><br />\n<b>Group:</b> 40 students and 3 teachers', 1, 0),
('3', 'SAP - China, Wuxi 2015', 'School Immersion', 'Nanjing', 'China', 'Wellington Primary School', 'NORTH7', '11/10/2015', '17/10/2015', 'P3/P4/P5', 40, '<b>Day 1: Nanjing</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n<br /><br />\n\n<b>Day 2: Beijing</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. unchanged.\n\n<br /><br />\n<b>Group:</b> 60 students and 6 teachers', 1, 1),
('4', 'Beyond Boundaries', 'Cultural Enrichment', 'Yogyakarta', 'Indonesia', 'Temasek Junior', 'NORTH6', '20/10/2015', '24/10/2015', 'JC1', 50, '<b>Day 1: Yogyakarta</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n<br /><br />\n\n<b>Day 2: Bali</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. unchanged.\n\n<br /><br />\n<b>Group:</b> 20 students and 2 teachers', 1, 1),
('5', 'Overseas Education Programme', 'Cultural Enrichment', 'Sapporo', 'Japan', 'Loyang Secondary School', 'EAST1', '22/10/2015', '25/10/2015', 'S3', 20, '<b>Day 1: Sapporo</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n<br /><br />\n\n<b>Day 2: Tokyo</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. unchanged.\n\n<br /><br />\n<b>Group:</b> 35 students and 2 teachers', 1, 0),
('6', 'Leadership Exchange Programme', 'School Immersion', 'Tokyo', 'Japan', 'Raffles Institution', 'SOUTH7', '24/10/2015', '28/10/2015', 'S4', 15, '<b>Day 1: Tokyo</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\n<br /><br />\n\n<b>Day 2: Sapporo</b>\n<br />\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. unchanged.\n\n<br /><br />\n<b>Group:</b> 35 students and 2 teachers', 1, 0),
('7', 'Project Shine', 'Cultural Enrichment', 'Chiang Mai', 'Thailand', 'Nanyang Polytechnic', 'NORTH9', '20/10/2015', '24/10/2015', 'JC1', 50, '<b>13-11-2015: Chang Phueak</b>\n<br />\nChang Phueak is a tambon (subdistrict) of Thailand. In 2010, it had a total population of 9,191 people. The tambon contains 5 villages, and there are happy people and cats in every village. Hooray!\n<br /><br />\n<b>Travel to Chiang Mai by foot</b>\n\n<br /><br />\n<b>14-11-2015: Chiang Mai</b>\n<br />\nChiang Mai is mainly a <b>rural and unsheltered area</b> that contains a large amount of flat land used mostly to grow cantaloupe, tobacco and tomatoes. Bordering Chiang Mai is the Sierra de Meow, which harbors fine hardwood forests, coffee plantations and cats.\n\n<br /><br />\n<b>Group:</b> 30 students and 2 teachers', 3, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
