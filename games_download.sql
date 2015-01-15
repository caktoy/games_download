-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2014 at 05:08 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `games_download`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `GAMES_ID` int(11) NOT NULL AUTO_INCREMENT,
  `GENRE_ID` int(11) DEFAULT NULL,
  `PUBLISHER_ID` int(11) DEFAULT NULL,
  `MEMBER_ID` int(11) DEFAULT NULL,
  `GAMES_NAME` varchar(50) DEFAULT NULL,
  `GAMES_UPLOADED` date DEFAULT NULL,
  `GAMES_DESCRIPTION` text,
  `GAMES_LINK` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`GAMES_ID`),
  KEY `FK_REFERENCE_4` (`GENRE_ID`),
  KEY `FK_REFERENCE_5` (`PUBLISHER_ID`),
  KEY `FK_REFERENCE_6` (`MEMBER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`GAMES_ID`, `GENRE_ID`, `PUBLISHER_ID`, `MEMBER_ID`, `GAMES_NAME`, `GAMES_UPLOADED`, `GAMES_DESCRIPTION`, `GAMES_LINK`) VALUES
(1, 5, 2, 1, 'Pro Evolution Soccer 2013', '2014-12-15', '<p>Game sepak bola terkeren.</p>\r\n', '#'),
(2, 1, 1, 1, 'Need For Speed Underground', '2014-12-30', '<p>Game balapan paling seru.</p>\r\n', '#'),
(3, 1, 2, 1, 'MotoGP', '2014-12-30', '<p>Game untuk para penggemar MotoGP.</p>\r\n', '#'),
(5, 6, 3, 2, 'Football Manager 2015', '2014-12-30', '<p>Game simulasi untuk Anda yang ingin merasakan sensasi menjadi seorang manager klub sepak bola.</p>\r\n', '#');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `GENRE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `GENRE_NAME` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`GENRE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`GENRE_ID`, `GENRE_NAME`) VALUES
(1, 'Racing'),
(2, 'RPG'),
(3, 'Shooter'),
(4, 'Action'),
(5, 'Sport'),
(6, 'Strategy');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `MEMBER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRIVILEGE_ID` int(11) DEFAULT NULL,
  `MEMBER_NAME` varchar(50) DEFAULT NULL,
  `MEMBER_GENDER` char(1) DEFAULT NULL,
  `MEMBER_ADDRESS` varchar(100) DEFAULT NULL,
  `MEMBER_PHONE` char(15) DEFAULT NULL,
  `MEMBER_EMAIL` varchar(30) DEFAULT NULL,
  `MEMBER_PHOTO` longblob,
  `MEMBER_REGIS_DATE` date DEFAULT NULL,
  `MEMBER_STATUS` varchar(10) DEFAULT NULL,
  `MEMBER_PASSWORD` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`MEMBER_ID`),
  KEY `FK_REFERENCE_1` (`PRIVILEGE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MEMBER_ID`, `PRIVILEGE_ID`, `MEMBER_NAME`, `MEMBER_GENDER`, `MEMBER_ADDRESS`, `MEMBER_PHONE`, `MEMBER_EMAIL`, `MEMBER_PHOTO`, `MEMBER_REGIS_DATE`, `MEMBER_STATUS`, `MEMBER_PASSWORD`) VALUES
(1, 1, 'Administrator', NULL, NULL, NULL, 'admin@gmail.com', NULL, NULL, NULL, '123'),
(2, 2, 'User 01', 'L', 'Jl. Udang No. 25', '085222909122', 'user1@gmail.com', NULL, '2014-12-30', 'registered', '123');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
  `PRIVILEGE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRIVILEGE_NAME` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`PRIVILEGE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`PRIVILEGE_ID`, `PRIVILEGE_NAME`) VALUES
(1, 'Administrator'),
(2, 'Basic Member');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `publisher` (
  `PUBLISHER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PUBLISHER_NAME` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PUBLISHER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PUBLISHER_ID`, `PUBLISHER_NAME`) VALUES
(1, 'Electronic Art (EA)'),
(2, 'Konami'),
(3, 'SEGA');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `FK_REFERENCE_6` FOREIGN KEY (`MEMBER_ID`) REFERENCES `member` (`MEMBER_ID`),
  ADD CONSTRAINT `FK_REFERENCE_4` FOREIGN KEY (`GENRE_ID`) REFERENCES `genre` (`GENRE_ID`),
  ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`PUBLISHER_ID`) REFERENCES `publisher` (`PUBLISHER_ID`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`PRIVILEGE_ID`) REFERENCES `privilege` (`PRIVILEGE_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
