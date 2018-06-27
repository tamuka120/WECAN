-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 01:51 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `footballdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorisation`
--

CREATE TABLE IF NOT EXISTS `authorisation` (
  `AuthID` int(11) NOT NULL AUTO_INCREMENT,
  `Card_cardID` int(11) NOT NULL,
  `Match_no` int(2) NOT NULL,
  `Venue_venueID` int(11) NOT NULL,
  `date` date NOT NULL,
  `State_idState` int(11) NOT NULL,
  PRIMARY KEY (`AuthID`),
  KEY `fk_Card_has_Match_Card1_idx` (`Card_cardID`),
  KEY `fk_Authorisation_Venue1_idx` (`Venue_venueID`),
  KEY `fk_Authorisation_Match1_idx` (`Match_no`),
  KEY `fk_Authorisation_State1_idx` (`State_idState`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `authorisation`
--

INSERT INTO `authorisation` (`AuthID`, `Card_cardID`, `Match_no`, `Venue_venueID`, `date`, `State_idState`) VALUES
(2, 1, 7, 5, '2017-03-15', 3),
(3, 2, 7, 2, '2017-03-15', 3),
(4, 1, 7, 2, '2017-03-22', 3),
(5, 1, 7, 5, '2017-03-15', 3),
(6, 3, 7, 5, '2017-07-19', 3),
(7, 1, 8, 1, '2017-07-19', 3),
(8, 2, 8, 1, '2017-07-19', 3),
(9, 6, 8, 1, '2017-07-19', 3),
(10, 7, 8, 1, '2017-07-19', 3),
(13, 3, 15, 2, '2017-07-23', 3),
(14, 5, 15, 2, '2017-07-23', 3),
(15, 1, 16, 3, '2017-07-23', 3),
(16, 2, 16, 3, '2017-07-23', 3),
(17, 6, 16, 3, '2017-07-23', 3),
(18, 7, 16, 3, '2017-07-23', 3),
(19, 4, 16, 3, '2017-07-23', 3),
(20, 3, 23, 4, '2017-07-27', 3),
(21, 5, 23, 4, '2017-07-27', 3),
(22, 1, 23, 4, '2017-07-27', 3),
(23, 2, 23, 4, '2017-07-27', 3),
(24, 6, 23, 4, '2017-07-27', 3),
(25, 7, 23, 4, '2017-07-27', 3),
(26, 12, 8, 5, '2017-07-19', 3),
(27, 12, 15, 5, '2017-07-23', 3),
(28, 13, 8, 5, '2017-07-19', 3),
(29, 13, 15, 5, '2017-07-23', 3),
(30, 14, 8, 5, '2017-07-19', 3),
(31, 14, 15, 5, '2017-07-23', 3),
(32, 15, 8, 5, '2017-07-19', 3),
(33, 15, 15, 5, '2017-07-23', 3),
(34, 16, 7, 5, '2017-07-19', 3),
(35, 16, 16, 5, '2017-07-23', 3),
(36, 17, 7, 5, '2017-07-19', 3),
(37, 17, 16, 5, '2017-07-23', 3),
(38, 18, 7, 5, '2017-07-19', 3),
(39, 18, 16, 5, '2017-07-23', 3),
(40, 21, 7, 5, '2017-07-19', 3),
(41, 21, 15, 5, '2017-07-23', 3),
(42, 21, 23, 5, '2017-07-27', 3),
(43, 22, 7, 5, '2017-07-19', 3),
(44, 22, 15, 5, '2017-07-23', 3),
(45, 22, 23, 5, '2017-07-27', 3),
(46, 11, 24, 7, '2017-07-27', 3),
(47, 12, 24, 7, '2017-07-27', 3),
(48, 13, 24, 7, '2017-07-27', 3),
(49, 14, 24, 7, '2017-07-27', 3),
(50, 15, 24, 7, '2017-07-27', 3),
(51, 4, 24, 7, '2017-07-27', 3),
(52, 10, 24, 7, '2017-07-27', 3),
(53, 16, 24, 7, '2017-07-27', 3),
(54, 17, 24, 7, '2017-07-27', 3),
(55, 18, 24, 7, '2017-07-27', 3),
(56, 19, 3, 2, '2017-07-17', 3),
(57, 20, 3, 2, '2017-07-17', 3),
(58, 19, 12, 4, '2017-07-21', 3),
(59, 20, 12, 4, '2017-07-21', 3);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `cardID` int(11) NOT NULL AUTO_INCREMENT,
  `Competitor_competitorID` int(11) NOT NULL,
  `Team_teamID` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `State_idState` int(11) NOT NULL,
  PRIMARY KEY (`cardID`,`Competitor_competitorID`),
  KEY `fk_Card_Competitor1_idx` (`Competitor_competitorID`),
  KEY `fk_Card_State1_idx` (`State_idState`),
  KEY `fk_Card_Team1_idx` (`Team_teamID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`cardID`, `Competitor_competitorID`, `Team_teamID`, `startDate`, `endDate`, `State_idState`) VALUES
(1, 2, 2, '2017-06-16', '2017-08-06', 0),
(2, 3, 2, '2017-06-16', '2017-08-06', 0),
(3, 4, 4, '2017-06-16', '2017-08-06', 0),
(4, 5, 1, '2017-06-16', '2017-08-06', 0),
(5, 6, 4, '2017-06-16', '2017-08-06', 0),
(6, 10, 2, '2017-06-16', '2017-08-06', 0),
(7, 11, 2, '2017-06-16', '2017-08-06', 0),
(10, 2, 1, '2017-06-16', '2017-08-06', 0),
(11, 5, 3, '2017-06-16', '2017-08-06', 0),
(12, 13, 3, '2017-06-16', '2017-08-06', 0),
(13, 14, 3, '2017-06-16', '2017-08-06', 0),
(14, 15, 3, '2017-06-16', '2017-08-06', 0),
(15, 16, 3, '2017-06-16', '2017-08-06', 0),
(16, 17, 1, '2017-06-16', '2017-08-06', 0),
(17, 18, 1, '2017-06-16', '2017-08-06', 0),
(18, 19, 1, '2017-06-16', '2017-08-06', 0),
(19, 20, 5, '2017-06-16', '2017-08-06', 0),
(20, 21, 5, '2017-06-16', '2017-08-06', 0),
(21, 22, 4, '2017-06-16', '2017-08-06', 0),
(22, 23, 4, '2017-06-16', '2017-08-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `competitor`
--

CREATE TABLE IF NOT EXISTS `competitor` (
  `competitorID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(3) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `Role_roleID` int(11) NOT NULL,
  `Team_teamID` int(11) NOT NULL,
  PRIMARY KEY (`competitorID`),
  KEY `fk_Competitor_Role1_idx` (`Role_roleID`),
  KEY `fk_Competitor_Team1_idx` (`Team_teamID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `competitor`
--

INSERT INTO `competitor` (`competitorID`, `title`, `firstName`, `lastName`, `Role_roleID`, `Team_teamID`) VALUES
(2, 'Mr', 'Toni', 'Duggan', 1, 2),
(3, 'Mr', 'Carly', 'Telford', 2, 2),
(4, 'Mrs', 'Mary', 'Rose', 3, 4),
(5, 'Mr', 'Jorge', 'Vilda', 4, 1),
(6, 'Mr', 'Fara', 'Williams', 5, 2),
(10, 'Dr', 'Anna', 'Glowacka', 6, 2),
(11, 'Mr', 'Mark', 'Sampson', 7, 2),
(12, 'Ms', 'Anna', 'Siguel', 4, 3),
(13, 'Ms', 'Gemma', 'Fay', 8, 3),
(14, 'Ms', 'Ifeoma', 'Dieke', 9, 3),
(15, 'Ms', 'Zoe', 'Ness', 1, 3),
(16, 'Dr', 'Vito', 'Gelato', 3, 3),
(17, 'Ms', 'Olga', 'Garcia', 1, 1),
(18, 'Ms', 'Sara', 'Serrat', 2, 1),
(19, 'Ms', 'Abdrea', 'Falcon', 5, 1),
(20, 'Ms', 'Barbara', 'Bonansea', 8, 5),
(21, 'Mr', 'Fred', 'Bloggs', 6, 5),
(22, 'Mr', 'Francisco', 'Neto', 4, 4),
(23, 'Ms', 'Claudia', 'Neto', 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE IF NOT EXISTS `entry` (
  `entryID` int(11) NOT NULL AUTO_INCREMENT,
  `Card_cardID` int(11) NOT NULL,
  `Match_no` int(2) NOT NULL,
  `Venue_venueID` int(11) NOT NULL,
  `Stadium` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `State_idState` int(11) NOT NULL,
  PRIMARY KEY (`entryID`),
  KEY `fk_Log_Card1_idx` (`Card_cardID`),
  KEY `fk_Log_Match1_idx` (`Match_no`),
  KEY `fk_Entry_Venue1_idx` (`Venue_venueID`),
  KEY `fk_Entry_State1_idx` (`State_idState`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entryID`, `Card_cardID`, `Match_no`, `Venue_venueID`, `Stadium`, `Date`, `State_idState`) VALUES
(1, 1, 7, 5, 'Sparta Stadion', '2017-03-30', 3),
(2, 1, 7, 5, 'Rat Verlegh', '2017-03-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `no` int(2) NOT NULL,
  `date` date NOT NULL,
  `Stadium` varchar(50) DEFAULT NULL,
  `Team_teamID` int(11) NOT NULL,
  `Team_teamID1` int(11) NOT NULL,
  `Venue_venueID` int(11) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `fk_Match_Team1_idx` (`Team_teamID`),
  KEY `fk_Match_Team2_idx` (`Team_teamID1`),
  KEY `fk_Match_Venue1_idx` (`Venue_venueID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`no`, `date`, `Stadium`, `Team_teamID`, `Team_teamID1`, `Venue_venueID`) VALUES
(3, '2017-07-17', 'Sparta Stadion', 5, 6, 2),
(7, '2017-07-19', 'De Vijverberg', 1, 4, 5),
(8, '2017-07-19', 'Galgenwaard', 2, 3, 1),
(12, '2017-07-21', 'Konig Willem II', 7, 5, 4),
(15, '2017-07-23', 'Sparta Stadion', 3, 4, 2),
(16, '2017-07-23', 'Rat Verlegh', 2, 1, 3),
(23, '2017-07-27', 'Konig Willem II', 4, 2, 4),
(24, '2017-07-27', 'De Adelaarshorst', 3, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `roleID` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(20) NOT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `roleName`) VALUES
(1, 'Forward'),
(2, 'Goalkeeper'),
(3, 'Doctor'),
(4, 'Head Coach'),
(5, 'Midfielder'),
(6, 'Physiotherapist'),
(7, 'Manager'),
(8, 'Captain'),
(9, 'Defender');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `idState` int(11) NOT NULL,
  `state` varchar(45) NOT NULL,
  PRIMARY KEY (`idState`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`idState`, `state`) VALUES
(0, 'Active'),
(1, 'Eliminated'),
(2, 'Denied'),
(3, 'Granted');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `teamID` int(11) NOT NULL AUTO_INCREMENT,
  `teamName` varchar(20) NOT NULL,
  `NFA` varchar(60) DEFAULT NULL,
  `acronym` varchar(10) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `State_idState` int(11) NOT NULL,
  PRIMARY KEY (`teamID`),
  KEY `fk_Team_State1_idx` (`State_idState`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamID`, `teamName`, `NFA`, `acronym`, `nickname`, `State_idState`) VALUES
(1, 'Spain', 'Real Federaci?n Española de Fútbol', 'RFEF', 'Las Soñadoras', 0),
(2, 'England', 'Football Association', 'FA', 'Lionesses', 0),
(3, 'Scotland', 'Scottish Football Association', 'SFA', ' ', 0),
(4, 'Portugal', 'Federaçáo Portuguesa de Futebol', 'FIGG', 'Azzurre', 0),
(5, 'Italy', 'Federazione Italiana Giuoco Calcio', 'FIGG', 'Azzurre', 0),
(6, 'Russia', 'We are the best', 'WRTB', 'The Lion', 0),
(7, 'Germany', 'We will play', 'WWP', 'King', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `loginID` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `permission` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`loginID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`loginID`, `username`, `password`, `permission`) VALUES
(0, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `venueID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`venueID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venueID`, `name`) VALUES
(1, 'Utrecht'),
(2, 'Rotterdam'),
(3, 'Breda'),
(4, 'Tilburg'),
(5, 'Doetinghem'),
(7, 'Deventer');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authorisation`
--
ALTER TABLE `authorisation`
  ADD CONSTRAINT `fk_Authorisation_Match1` FOREIGN KEY (`Match_no`) REFERENCES `match` (`no`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Authorisation_State1` FOREIGN KEY (`State_idState`) REFERENCES `state` (`idState`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Authorisation_Venue1` FOREIGN KEY (`Venue_venueID`) REFERENCES `venue` (`venueID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Card_has_Match_Card1` FOREIGN KEY (`Card_cardID`) REFERENCES `card` (`cardID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `fk_Card_Competitor1` FOREIGN KEY (`Competitor_competitorID`) REFERENCES `competitor` (`competitorID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Card_State1` FOREIGN KEY (`State_idState`) REFERENCES `state` (`idState`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Card_Team1` FOREIGN KEY (`Team_teamID`) REFERENCES `team` (`teamID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `competitor`
--
ALTER TABLE `competitor`
  ADD CONSTRAINT `fk_Competitor_Role1` FOREIGN KEY (`Role_roleID`) REFERENCES `role` (`roleID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Competitor_Team1` FOREIGN KEY (`Team_teamID`) REFERENCES `team` (`teamID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `entry`
--
ALTER TABLE `entry`
  ADD CONSTRAINT `fk_Entry_State1` FOREIGN KEY (`State_idState`) REFERENCES `state` (`idState`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Entry_Venue1` FOREIGN KEY (`Venue_venueID`) REFERENCES `venue` (`venueID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Log_Card1` FOREIGN KEY (`Card_cardID`) REFERENCES `card` (`cardID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Log_Match1` FOREIGN KEY (`Match_no`) REFERENCES `match` (`no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `match`
--
ALTER TABLE `match`
  ADD CONSTRAINT `fk_Match_Team1` FOREIGN KEY (`Team_teamID`) REFERENCES `team` (`teamID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Match_Team2` FOREIGN KEY (`Team_teamID1`) REFERENCES `team` (`teamID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Match_Venue1` FOREIGN KEY (`Venue_venueID`) REFERENCES `venue` (`venueID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `fk_Team_State1` FOREIGN KEY (`State_idState`) REFERENCES `state` (`idState`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
