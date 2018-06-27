-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 09:32 PM
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
  `date` date NOT NULL,
  `Venue_venueID` int(11) NOT NULL,
  `Match_no` int(2) NOT NULL,
  `State_idState` int(11) NOT NULL,
  PRIMARY KEY (`AuthID`),
  KEY `fk_Card_has_Match_Card1_idx` (`Card_cardID`),
  KEY `fk_Authorisation_Venue1_idx` (`Venue_venueID`),
  KEY `fk_Authorisation_Match1_idx` (`Match_no`),
  KEY `fk_Authorisation_State1_idx` (`State_idState`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bugs`
--

CREATE TABLE IF NOT EXISTS `bugs` (
  `bugID` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bugID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `cardID` int(11) NOT NULL AUTO_INCREMENT,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `Competitor_competitorID` int(11) NOT NULL,
  `State_idState` int(11) NOT NULL,
  `Team_teamID` int(11) NOT NULL,
  PRIMARY KEY (`cardID`,`Competitor_competitorID`),
  KEY `fk_Card_Competitor1_idx` (`Competitor_competitorID`),
  KEY `fk_Card_State1_idx` (`State_idState`),
  KEY `fk_Card_Team1_idx` (`Team_teamID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE IF NOT EXISTS `entry` (
  `entryID` int(11) NOT NULL AUTO_INCREMENT,
  `Card_cardID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Match_no` int(2) NOT NULL,
  `Stadium` varchar(50) NOT NULL,
  `Venue_venueID` int(11) NOT NULL,
  `State_idState` int(11) NOT NULL,
  PRIMARY KEY (`entryID`),
  KEY `fk_Log_Card1_idx` (`Card_cardID`),
  KEY `fk_Log_Match1_idx` (`Match_no`),
  KEY `fk_Entry_Venue1_idx` (`Venue_venueID`),
  KEY `fk_Entry_State1_idx` (`State_idState`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `no` int(2) NOT NULL,
  `date` date NOT NULL,
  `stadium` varchar(45) DEFAULT NULL,
  `Team_teamID` int(11) NOT NULL,
  `Team_teamID1` int(11) NOT NULL,
  `Venue_venueID` int(11) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `fk_Match_Team1_idx` (`Team_teamID`),
  KEY `fk_Match_Team2_idx` (`Team_teamID1`),
  KEY `fk_Match_Venue1_idx` (`Venue_venueID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `roleID` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(20) NOT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `roleName`) VALUES
(1, 'Player');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamID`, `teamName`, `NFA`, `acronym`, `nickname`, `State_idState`) VALUES
(1, 'Spain', 'Real Federaci?n Española de Fútbol', 'RFEF', 'Las Soñadoras', 0),
(2, 'England', 'Football Association', 'FA', 'Lionesses', 0),
(3, 'Scotland', 'Scottish Football Association', 'SFA', ' ', 0),
(4, 'Portugal', 'Federaçáo Portuguesa de Futebol', 'FIGG', 'Azzurre', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venueID`, `name`) VALUES
(1, 'Utrecht'),
(2, 'Rotterdam'),
(3, 'Breda'),
(4, 'Tilburg'),
(5, 'Doetinghem'),
(6, 'Tilburg');

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
