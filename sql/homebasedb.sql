-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2022 at 08:31 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homebasedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbdates`
--

CREATE TABLE `dbdates` (
  `id` char(20) NOT NULL,
  `shifts` text,
  `mgr_notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbdates`
--

INSERT INTO `dbdates` (`id`, `shifts`, `mgr_notes`) VALUES
('22-10-24:bangor', '22-10-24:9-12:bangor*22-10-24:12-3:bangor*22-10-24:3-6:bangor*22-10-24:6-9:bangor', ''),
('22-10-24:portland', '22-10-24:9-12:portland*22-10-24:3-6:portland*22-10-24:6-9:portland*22-10-24:12-3:portland', ''),
('22-10-25:bangor', '22-10-25:9-12:bangor*22-10-25:12-3:bangor*22-10-25:3-6:bangor*22-10-25:6-9:bangor', ''),
('22-10-25:portland', '22-10-25:9-12:portland*22-10-25:12-3:portland*22-10-25:3-6:portland*22-10-25:6-9:portland', ''),
('22-10-26:bangor', '22-10-26:9-12:bangor*22-10-26:12-3:bangor*22-10-26:3-6:bangor*22-10-26:6-9:bangor', ''),
('22-10-26:portland', '22-10-26:9-12:portland*22-10-26:12-3:portland*22-10-26:3-6:portland*22-10-26:6-9:portland', ''),
('22-10-27:bangor', '22-10-27:9-12:bangor*22-10-27:12-3:bangor*22-10-27:3-6:bangor*22-10-27:6-9:bangor', ''),
('22-10-27:portland', '22-10-27:9-12:portland*22-10-27:12-3:portland*22-10-27:3-6:portland*22-10-27:6-9:portland', ''),
('22-10-28:bangor', '22-10-28:9-12:bangor*22-10-28:12-3:bangor*22-10-28:3-6:bangor*22-10-28:night:bangor', ''),
('22-10-28:portland', '22-10-28:9-12:portland*22-10-28:3-6:portland*22-10-28:6-9:portland*22-10-28:night:portland*22-10-28:12-3:portland', ''),
('22-10-29:bangor', '22-10-29:night:bangor*22-10-29:9-5:bangor', ''),
('22-10-29:portland', '22-10-29:10-1:portland*22-10-29:1-4:portland*22-10-29:night:portland', ''),
('22-10-30:bangor', '22-10-30:9-5:bangor*22-10-30:5-9:bangor', ''),
('22-10-30:portland', '22-10-30:9-12:portland*22-10-30:2-5:portland*22-10-30:5-9:portland', ''),
('22-10-31:bangor', '22-10-31:9-12:bangor*22-10-31:12-3:bangor*22-10-31:3-6:bangor*22-10-31:6-9:bangor', ''),
('22-10-31:portland', '22-10-31:9-12:portland*22-10-31:3-6:portland*22-10-31:6-9:portland*22-10-31:12-3:portland', ''),
('22-11-01:bangor', '22-11-01:9-12:bangor*22-11-01:12-3:bangor*22-11-01:3-6:bangor*22-11-01:6-9:bangor', ''),
('22-11-01:portland', '22-11-01:9-12:portland*22-11-01:12-3:portland*22-11-01:3-6:portland*22-11-01:6-9:portland', ''),
('22-11-02:bangor', '22-11-02:9-12:bangor*22-11-02:12-3:bangor*22-11-02:3-6:bangor*22-11-02:6-9:bangor', ''),
('22-11-02:portland', '22-11-02:9-12:portland*22-11-02:12-3:portland*22-11-02:3-6:portland*22-11-02:6-9:portland', ''),
('22-11-03:bangor', '22-11-03:9-12:bangor*22-11-03:3-6:bangor*22-11-03:12-3:bangor*22-11-03:6-9:bangor', ''),
('22-11-03:portland', '22-11-03:9-12:portland*22-11-03:12-3:portland*22-11-03:3-6:portland*22-11-03:6-9:portland', ''),
('22-11-04:bangor', '22-11-04:9-12:bangor*22-11-04:12-3:bangor*22-11-04:3-6:bangor*22-11-04:night:bangor', ''),
('22-11-04:portland', '22-11-04:9-12:portland*22-11-04:12-3:portland*22-11-04:3-6:portland*22-11-04:6-9:portland*22-11-04:night:portland', ''),
('22-11-05:bangor', '22-11-05:night:bangor*22-11-05:9-5:bangor', ''),
('22-11-05:portland', '22-11-05:10-1:portland*22-11-05:1-4:portland*22-11-05:night:portland', ''),
('22-11-06:bangor', '22-11-06:5-9:bangor*22-11-06:9-5:bangor', ''),
('22-11-06:portland', '22-11-06:9-12:portland*22-11-06:2-5:portland*22-11-06:5-9:portland', ''),
('22-11-07:bangor', '22-11-07:9-12:bangor*22-11-07:12-3:bangor*22-11-07:3-6:bangor*22-11-07:6-9:bangor', ''),
('22-11-07:portland', '22-11-07:9-12:portland*22-11-07:3-6:portland*22-11-07:6-9:portland*22-11-07:12-3:portland', ''),
('22-11-08:bangor', '22-11-08:9-12:bangor*22-11-08:12-3:bangor*22-11-08:3-6:bangor*22-11-08:6-9:bangor', ''),
('22-11-08:portland', '22-11-08:9-12:portland*22-11-08:12-3:portland*22-11-08:3-6:portland*22-11-08:6-9:portland', ''),
('22-11-09:bangor', '22-11-09:9-12:bangor*22-11-09:12-3:bangor*22-11-09:3-6:bangor*22-11-09:6-9:bangor', ''),
('22-11-09:portland', '22-11-09:9-12:portland*22-11-09:12-3:portland*22-11-09:3-6:portland*22-11-09:6-9:portland', ''),
('22-11-10:bangor', '22-11-10:9-12:bangor*22-11-10:12-3:bangor*22-11-10:3-6:bangor*22-11-10:6-9:bangor', ''),
('22-11-10:portland', '22-11-10:9-12:portland*22-11-10:12-3:portland*22-11-10:3-6:portland*22-11-10:6-9:portland', ''),
('22-11-11:bangor', '22-11-11:9-12:bangor*22-11-11:12-3:bangor*22-11-11:3-6:bangor*22-11-11:night:bangor', ''),
('22-11-11:portland', '22-11-11:9-12:portland*22-11-11:3-6:portland*22-11-11:6-9:portland*22-11-11:night:portland*22-11-11:12-3:portland', ''),
('22-11-12:bangor', '22-11-12:night:bangor*22-11-12:9-5:bangor', ''),
('22-11-12:portland', '22-11-12:10-1:portland*22-11-12:1-4:portland*22-11-12:night:portland', ''),
('22-11-13:bangor', '22-11-13:9-5:bangor*22-11-13:5-9:bangor', ''),
('22-11-13:portland', '22-11-13:9-12:portland*22-11-13:2-5:portland*22-11-13:5-9:portland', ''),
('22-11-14:bangor', '22-11-14:9-12:bangor*22-11-14:12-3:bangor*22-11-14:3-6:bangor*22-11-14:6-9:bangor', ''),
('22-11-14:portland', '22-11-14:9-12:portland*22-11-14:3-6:portland*22-11-14:6-9:portland*22-11-14:12-3:portland', ''),
('22-11-15:bangor', '22-11-15:9-12:bangor*22-11-15:12-3:bangor*22-11-15:3-6:bangor*22-11-15:6-9:bangor', ''),
('22-11-15:portland', '22-11-15:9-12:portland*22-11-15:12-3:portland*22-11-15:3-6:portland*22-11-15:6-9:portland', ''),
('22-11-16:bangor', '22-11-16:9-12:bangor*22-11-16:12-3:bangor*22-11-16:3-6:bangor*22-11-16:6-9:bangor', ''),
('22-11-16:portland', '22-11-16:9-12:portland*22-11-16:12-3:portland*22-11-16:3-6:portland*22-11-16:6-9:portland', ''),
('22-11-17:bangor', '22-11-17:9-12:bangor*22-11-17:3-6:bangor*22-11-17:12-3:bangor*22-11-17:6-9:bangor', ''),
('22-11-17:portland', '22-11-17:9-12:portland*22-11-17:12-3:portland*22-11-17:3-6:portland*22-11-17:6-9:portland', ''),
('22-11-18:bangor', '22-11-18:9-12:bangor*22-11-18:12-3:bangor*22-11-18:3-6:bangor*22-11-18:night:bangor', ''),
('22-11-18:portland', '22-11-18:9-12:portland*22-11-18:12-3:portland*22-11-18:3-6:portland*22-11-18:6-9:portland*22-11-18:night:portland', ''),
('22-11-19:bangor', '22-11-19:night:bangor*22-11-19:9-5:bangor', ''),
('22-11-19:portland', '22-11-19:10-1:portland*22-11-19:1-4:portland*22-11-19:night:portland', ''),
('22-11-20:bangor', '22-11-20:9-5:bangor*22-11-20:5-9:bangor', ''),
('22-11-20:portland', '22-11-20:9-12:portland*22-11-20:2-5:portland*22-11-20:5-9:portland', ''),
('22-11-21:bangor', '22-11-21:9-12:bangor*22-11-21:12-3:bangor*22-11-21:3-6:bangor*22-11-21:6-9:bangor', ''),
('22-11-21:portland', '22-11-21:9-12:portland*22-11-21:3-6:portland*22-11-21:6-9:portland*22-11-21:12-3:portland', ''),
('22-11-22:bangor', '22-11-22:9-12:bangor*22-11-22:12-3:bangor*22-11-22:3-6:bangor*22-11-22:6-9:bangor', ''),
('22-11-22:portland', '22-11-22:9-12:portland*22-11-22:12-3:portland*22-11-22:3-6:portland*22-11-22:6-9:portland', ''),
('22-11-23:bangor', '22-11-23:9-12:bangor*22-11-23:12-3:bangor*22-11-23:3-6:bangor*22-11-23:6-9:bangor', ''),
('22-11-23:portland', '22-11-23:9-12:portland*22-11-23:12-3:portland*22-11-23:3-6:portland*22-11-23:6-9:portland', ''),
('22-11-24:bangor', '22-11-24:9-12:bangor*22-11-24:12-3:bangor*22-11-24:3-6:bangor*22-11-24:6-9:bangor', ''),
('22-11-24:portland', '22-11-24:9-12:portland*22-11-24:12-3:portland*22-11-24:3-6:portland*22-11-24:6-9:portland', ''),
('22-11-25:bangor', '22-11-25:9-12:bangor*22-11-25:12-3:bangor*22-11-25:3-6:bangor*22-11-25:night:bangor', ''),
('22-11-25:portland', '22-11-25:9-12:portland*22-11-25:3-6:portland*22-11-25:6-9:portland*22-11-25:night:portland*22-11-25:12-3:portland', ''),
('22-11-26:bangor', '22-11-26:night:bangor*22-11-26:9-5:bangor', ''),
('22-11-26:portland', '22-11-26:10-1:portland*22-11-26:night:portland*22-11-26:1-4:portland', ''),
('22-11-27:bangor', '22-11-27:9-5:bangor*22-11-27:5-9:bangor', ''),
('22-11-27:portland', '22-11-27:9-12:portland*22-11-27:2-5:portland*22-11-27:5-9:portland', ''),
('22-11-28:portland', '22-11-28:9-12:portland*22-11-28:3-6:portland*22-11-28:6-9:portland*22-11-28:12-3:portland', ''),
('22-11-29:portland', '22-11-29:9-12:portland*22-11-29:12-3:portland*22-11-29:3-6:portland*22-11-29:6-9:portland', ''),
('22-11-30:portland', '22-11-30:9-12:portland*22-11-30:12-3:portland*22-11-30:3-6:portland*22-11-30:6-9:portland', ''),
('22-12-01:portland', '22-12-01:9-12:portland*22-12-01:12-3:portland*22-12-01:3-6:portland*22-12-01:6-9:portland', ''),
('22-12-02:portland', '22-12-02:9-12:portland*22-12-02:12-3:portland*22-12-02:3-6:portland*22-12-02:6-9:portland*22-12-02:night:portland', ''),
('22-12-03:portland', '22-12-03:10-1:portland*22-12-03:1-4:portland*22-12-03:night:portland', ''),
('22-12-04:portland', '22-12-04:9-12:portland*22-12-04:2-5:portland*22-12-04:5-9:portland', ''),
('22-12-05:portland', '22-12-05:9-12:portland*22-12-05:3-6:portland*22-12-05:6-9:portland*22-12-05:12-3:portland', ''),
('22-12-06:portland', '22-12-06:9-12:portland*22-12-06:12-3:portland*22-12-06:3-6:portland*22-12-06:6-9:portland', ''),
('22-12-07:portland', '22-12-07:9-12:portland*22-12-07:12-3:portland*22-12-07:3-6:portland*22-12-07:6-9:portland', ''),
('22-12-08:portland', '22-12-08:9-12:portland*22-12-08:12-3:portland*22-12-08:3-6:portland*22-12-08:6-9:portland', ''),
('22-12-09:portland', '22-12-09:9-12:portland*22-12-09:3-6:portland*22-12-09:6-9:portland*22-12-09:night:portland*22-12-09:12-3:portland', ''),
('22-12-10:portland', '22-12-10:10-1:portland*22-12-10:1-4:portland*22-12-10:night:portland', ''),
('22-12-11:portland', '22-12-11:9-12:portland*22-12-11:2-5:portland*22-12-11:5-9:portland', ''),
('22-12-12:portland', '22-12-12:9-12:portland*22-12-12:3-6:portland*22-12-12:6-9:portland*22-12-12:12-3:portland', ''),
('22-12-13:portland', '22-12-13:9-12:portland*22-12-13:12-3:portland*22-12-13:3-6:portland*22-12-13:6-9:portland', ''),
('22-12-14:portland', '22-12-14:9-12:portland*22-12-14:12-3:portland*22-12-14:3-6:portland*22-12-14:6-9:portland', ''),
('22-12-15:portland', '22-12-15:9-12:portland*22-12-15:12-3:portland*22-12-15:3-6:portland*22-12-15:6-9:portland', ''),
('22-12-16:portland', '22-12-16:9-12:portland*22-12-16:12-3:portland*22-12-16:3-6:portland*22-12-16:6-9:portland*22-12-16:night:portland', ''),
('22-12-17:portland', '22-12-17:10-1:portland*22-12-17:1-4:portland*22-12-17:night:portland', ''),
('22-12-18:portland', '22-12-18:9-12:portland*22-12-18:2-5:portland*22-12-18:5-9:portland', ''),
('22-12-19:portland', '22-12-19:9-12:portland*22-12-19:3-6:portland*22-12-19:6-9:portland*22-12-19:12-3:portland', ''),
('22-12-20:portland', '22-12-20:9-12:portland*22-12-20:12-3:portland*22-12-20:3-6:portland*22-12-20:6-9:portland', ''),
('22-12-21:portland', '22-12-21:9-12:portland*22-12-21:12-3:portland*22-12-21:3-6:portland*22-12-21:6-9:portland', ''),
('22-12-22:portland', '22-12-22:9-12:portland*22-12-22:12-3:portland*22-12-22:3-6:portland*22-12-22:6-9:portland', ''),
('22-12-23:portland', '22-12-23:9-12:portland*22-12-23:3-6:portland*22-12-23:6-9:portland*22-12-23:night:portland*22-12-23:12-3:portland', ''),
('22-12-24:portland', '22-12-24:10-1:portland*22-12-24:night:portland*22-12-24:1-4:portland', ''),
('22-12-25:portland', '22-12-25:9-12:portland*22-12-25:2-5:portland*22-12-25:5-9:portland', '');

-- --------------------------------------------------------

--
-- Table structure for table `dbevents`
--

CREATE TABLE `dbevents` (
  `id` text NOT NULL,
  `event_date` text,
  `venue` text,
  `event_name` text,
  `description` text,
  `event_id` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbevents`
--

INSERT INTO `dbevents` (`id`, `event_date`, `venue`, `event_name`, `description`, `event_id`) VALUES
('638553e3173c4', '22-11-05', 'portland', 'One Event', 'The event table has been completely cleared, here is one event though.', '638553e3173c4');

-- --------------------------------------------------------

--
-- Table structure for table `dblog`
--

CREATE TABLE `dblog` (
  `id` int(3) NOT NULL,
  `time` text,
  `message` text,
  `venue` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dblog`
--

INSERT INTO `dblog` (`id`, `time`, `message`, `venue`) VALUES
(173, '1670011289', '<a href=\"personEdit.php?id=GwynethsGiftAdmin4678931290\">GwynethsGiftAdmin SiteAdmin</a>\'s Personnel Edit Form has been changed.', 'portland');

-- --------------------------------------------------------

--
-- Table structure for table `dbmasterschedule`
--

CREATE TABLE `dbmasterschedule` (
  `venue` text,
  `day` text NOT NULL,
  `week_no` text NOT NULL,
  `hours` text,
  `slots` int(11) DEFAULT NULL,
  `persons` text,
  `notes` text,
  `id` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbmasterschedule`
--

INSERT INTO `dbmasterschedule` (`venue`, `day`, `week_no`, `hours`, `slots`, `persons`, `notes`, `id`) VALUES
('portland', 'Mon', 'odd', '9-12', 3, ',Jane7038293469,Cathy7038295422,Cheryl7032821358', '', 'odd:Mon:9-12:portland'),
('portland', 'Mon', 'odd', '3-6', 2, ',Robin7037510984,Claire7033293465', '', 'odd:Mon:3-6:portland'),
('portland', 'Mon', 'odd', '6-9', 2, ',Nonie7037812392', '', 'odd:Mon:6-9:portland'),
('portland', 'Tue', 'odd', '9-12', 2, ',Jane7038859127,Stacey7032333522', '', 'odd:Tue:9-12:portland'),
('portland', 'Tue', 'odd', '12-3', 2, ',Cindy7035631089', '', 'odd:Tue:12-3:portland'),
('portland', 'Tue', 'odd', '3-6', 2, ',Becky7037725009,Betsy7038464935', '', 'odd:Tue:3-6:portland'),
('portland', 'Tue', 'odd', '6-9', 2, ',Kara7035953232,Daniel7032330196', '', 'odd:Tue:6-9:portland'),
('portland', 'Wed', 'odd', '9-12', 2, ',Aynne7032328782,Charlie7032728637', '', 'odd:Wed:9-12:portland'),
('portland', 'Wed', 'odd', '12-3', 2, ',John7032476256', '', 'odd:Wed:12-3:portland'),
('portland', 'Wed', 'odd', '3-6', 2, ',Amy7037519944,Ann7038470375', '', 'odd:Wed:3-6:portland'),
('portland', 'Wed', 'odd', '6-9', 2, ',Marilee7034159124,Claudia7033181908', '', 'odd:Wed:6-9:portland'),
('portland', 'Thu', 'odd', '9-12', 2, ',Cathy7038784455,Meg7039395058', '', 'odd:Thu:9-12:portland'),
('portland', 'Thu', 'odd', '12-3', 2, ',Marjorie7032328434', '', 'odd:Thu:12-3:portland'),
('portland', 'Thu', 'odd', '3-6', 2, ',Nancy7032210332,Suzanne7037018778', '', 'odd:Thu:3-6:portland'),
('portland', 'Thu', 'odd', '6-9', 2, ',Jody7033294089,Allyson7034410528', '', 'odd:Thu:6-9:portland'),
('portland', 'Fri', 'odd', '9-12', 2, ',Sally7037993827,Becky7038463827', '', 'odd:Fri:9-12:portland'),
('portland', 'Fri', 'odd', '12-3', 2, ',Ellen7034432810', '', 'odd:Fri:12-3:portland'),
('portland', 'Fri', 'odd', '3-6', 3, ',Phyllis7032325963,Elaine7037672928', '', 'odd:Fri:3-6:portland'),
('portland', 'Fri', 'odd', '6-9', 0, '', '', 'odd:Fri:6-9:portland'),
('portland', 'Mon', 'even', '9-12', 3, ',Jane7038293469,Cathy7038295422,Cheryl7032821358', '', 'even:Mon:9-12:portland'),
('portland', 'Mon', 'even', '3-6', 2, ',Maureen7032100761,Claire7033293465', '', 'even:Mon:3-6:portland'),
('portland', 'Mon', 'even', '6-9', 2, ',Vickie7033180302,Estelle7037720647', '', 'even:Mon:6-9:portland'),
('portland', 'Tue', 'even', '9-12', 2, ',Jane7038859127,Stacey7032333522', '', 'even:Tue:9-12:portland'),
('portland', 'Tue', 'even', '12-3', 2, ',Mary Ann7038833212,Gibbs7037474590', '', 'even:Tue:12-3:portland'),
('portland', 'Tue', 'even', '3-6', 2, ',Becky7037725009,Betsy7038464935', '', 'even:Tue:3-6:portland'),
('portland', 'Tue', 'even', '6-9', 2, ',Josh7037124705,April7038075431', '', 'even:Tue:6-9:portland'),
('portland', 'Wed', 'even', '9-12', 2, ',Jeannie7037970345,Kym7037970345', '', 'even:Wed:9-12:portland'),
('portland', 'Wed', 'even', '12-3', 2, ',Ellen7037994830', '', 'even:Wed:12-3:portland'),
('portland', 'Wed', 'even', '3-6', 2, ',Nancy7034158150', '', 'even:Wed:3-6:portland'),
('portland', 'Wed', 'even', '6-9', 2, ',Jody7033294089,Lilly2158349209', '', 'even:Wed:6-9:portland'),
('portland', 'Thu', 'even', '9-12', 2, '', '', 'even:Thu:9-12:portland'),
('portland', 'Thu', 'even', '12-3', 2, ',Thorne7034439654,Meg7037298111', '', 'even:Thu:12-3:portland'),
('portland', 'Thu', 'even', '3-6', 2, ',Linda7037568845,Sue7033171877', '', 'even:Thu:3-6:portland'),
('portland', 'Thu', 'even', '6-9', 2, ',Shay6175012425,Rebecca5185881836', '', 'even:Thu:6-9:portland'),
('portland', 'Fri', 'even', '9-12', 3, ',Bobbi7033447417,Meg7039395058', '', 'even:Fri:9-12:portland'),
('portland', 'Fri', 'even', '3-6', 3, ',Phyllis7032325963,Margi7034152255', '', 'even:Fri:3-6:portland'),
('portland', 'Fri', 'even', '6-9', 0, '', '', 'even:Fri:6-9:portland'),
('portland', 'Sat', '1st', '10-1', 3, ',Nancy7036769033,Beth7033399448,Rita7037998431', '', '1st:Sat:10-1:portland'),
('portland', 'Sat', '1st', '1-4', 1, ',Beverly7038542682', '', '1st:Sat:1-4:portland'),
('portland', 'Sat', '2nd', '10-1', 1, '', '', '2nd:Sat:10-1:portland'),
('portland', 'Sat', '2nd', '1-4', 1, ',Susan7037817946', '', '2nd:Sat:1-4:portland'),
('portland', 'Sat', '3rd', '10-1', 1, '', '', '3rd:Sat:10-1:portland'),
('portland', 'Sat', '3rd', '1-4', 1, '', '', '3rd:Sat:1-4:portland'),
('portland', 'Sat', '4th', '10-1', 1, '', '', '4th:Sat:10-1:portland'),
('portland', 'Sat', '5th', '10-1', 1, '', '', '5th:Sat:10-1:portland'),
('portland', 'Sat', '5th', '1-4', 1, '', '', '5th:Sat:1-4:portland'),
('portland', 'Sun', '1st', '9-12', 1, '', '', '1st:Sun:9-12:portland'),
('portland', 'Sun', '1st', '2-5', 1, ',Mary7038293321', '', '1st:Sun:2-5:portland'),
('portland', 'Sun', '1st', '5-9', 1, ',Paul7032323414', '', '1st:Sun:5-9:portland'),
('portland', 'Sun', '2nd', '9-12', 1, '', '', '2nd:Sun:9-12:portland'),
('portland', 'Sun', '3rd', '9-12', 1, '', '', '3rd:Sun:9-12:portland'),
('portland', 'Sun', '3rd', '2-5', 2, ',Lance7032528780,Melissa7036501479', '', '3rd:Sun:2-5:portland'),
('portland', 'Sun', '4th', '9-12', 1, ',Gaye7032476985', '', '4th:Sun:9-12:portland'),
('portland', 'Sun', '4th', '2-5', 1, '', '', '4th:Sun:2-5:portland'),
('portland', 'Sun', '4th', '5-9', 1, '', '', '4th:Sun:5-9:portland'),
('portland', 'Sun', '5th', '9-12', 1, '', '', '5th:Sun:9-12:portland'),
('portland', 'Sun', '5th', '2-5', 1, '', '', '5th:Sun:2-5:portland'),
('portland', 'Sun', '5th', '5-9', 1, ',Chris7038788512', '', '5th:Sun:5-9:portland'),
('portland', 'Fri', 'odd', 'night', 1, '', '', 'odd:Fri:night:portland'),
('portland', 'Fri', 'even', 'night', 1, '', '', 'even:Fri:night:portland'),
('portland', 'Sat', '1st', 'night', 1, '', '', '1st:Sat:night:portland'),
('portland', 'Sat', '2nd', 'night', 1, '', '', '2nd:Sat:night:portland'),
('portland', 'Sat', '3rd', 'night', 1, '', '', '3rd:Sat:night:portland'),
('portland', 'Sat', '4th', 'night', 1, '', '', '4th:Sat:night:portland'),
('portland', 'Sat', '5th', 'night', 1, '', '', '5th:Sat:night:portland'),
('portland', 'Sat', '4th', '1-4', 1, '', '', '4th:Sat:1-4:portland'),
('portland', 'Mon', 'even', '12-3', 2, ',Peter7037991786,Cheryl7038089589', '', 'even:Mon:12-3:portland'),
('portland', 'Sun', '3rd', '5-9', 1, '', '', '3rd:Sun:5-9:portland'),
('portland', 'Fri', 'even', '12-3', 2, ',Suzanne7037018778', '', 'even:Fri:12-3:portland'),
('portland', 'Sun', '2nd', '2-5', 1, ',Chris7038788512', '', '2nd:Sun:2-5:portland'),
('portland', 'Sun', '2nd', '5-9', 1, '', '', '2nd:Sun:5-9:portland'),
('portland', 'Mon', 'odd', '12-3', 2, ',Cheryl7038089589', '', 'odd:Mon:12-3:portland'),
('bangor', 'Sat', '5th', 'night', 0, '', '', '5th:Sat:night:bangor'),
('bangor', 'Mon', 'odd', '9-12', 1, '', '', 'odd:Mon:9-12:bangor'),
('bangor', 'Tue', 'odd', '9-12', 1, ',Julie7039424211', '', 'odd:Tue:9-12:bangor'),
('bangor', 'Wed', 'odd', '9-12', 1, ',Linda7037358701', '', 'odd:Wed:9-12:bangor'),
('bangor', 'Thu', 'odd', '9-12', 1, ',Lura7039471915', '', 'odd:Thu:9-12:bangor'),
('bangor', 'Fri', 'odd', '9-12', 1, ',Sara7036594431', '', 'odd:Fri:9-12:bangor'),
('bangor', 'Mon', 'even', '9-12', 1, '', '', 'even:Mon:9-12:bangor'),
('bangor', 'Tue', 'even', '9-12', 1, ',Julie7039424211', '', 'even:Tue:9-12:bangor'),
('bangor', 'Wed', 'even', '9-12', 1, ',Linda7037358701', '', 'even:Wed:9-12:bangor'),
('bangor', 'Thu', 'even', '9-12', 1, ',Lura7039471915', '', 'even:Thu:9-12:bangor'),
('bangor', 'Fri', 'even', '9-12', 1, ',Sara7036594431', '', 'even:Fri:9-12:bangor'),
('bangor', 'Thu', 'odd', '3-6', 2, ',Cassandra7039445038,Nicole9176052094', '', 'odd:Thu:3-6:bangor'),
('bangor', 'Mon', 'odd', '12-3', 1, ',Barbara7033227096', '', 'odd:Mon:12-3:bangor'),
('bangor', 'Tue', 'odd', '12-3', 1, ',Sara7036594431', '', 'odd:Tue:12-3:bangor'),
('bangor', 'Wed', 'odd', '12-3', 1, ',Bonnie7039421321', '', 'odd:Wed:12-3:bangor'),
('bangor', 'Thu', 'odd', '12-3', 2, ',Shannon7039912298,Hannah7036109735', '', 'odd:Thu:12-3:bangor'),
('bangor', 'Fri', 'odd', '12-3', 1, ',Jane7038273452', '', 'odd:Fri:12-3:bangor'),
('bangor', 'Mon', 'odd', '3-6', 1, '', '', 'odd:Mon:3-6:bangor'),
('bangor', 'Tue', 'odd', '3-6', 1, ',Jennifer7038527724', '', 'odd:Tue:3-6:bangor'),
('bangor', 'Wed', 'odd', '3-6', 1, '', '', 'odd:Wed:3-6:bangor'),
('bangor', 'Fri', 'odd', '3-6', 1, ',Amanda7032051750', '', 'odd:Fri:3-6:bangor'),
('bangor', 'Mon', 'odd', '6-9', 1, '', '', 'odd:Mon:6-9:bangor'),
('bangor', 'Tue', 'odd', '6-9', 1, ',Natasha7034040029', '', 'odd:Tue:6-9:bangor'),
('bangor', 'Wed', 'odd', '6-9', 1, ',Natasha7034040029', '', 'odd:Wed:6-9:bangor'),
('bangor', 'Thu', 'odd', '6-9', 1, '', '', 'odd:Thu:6-9:bangor'),
('bangor', 'Mon', 'even', '12-3', 1, ',Barbara7033227096', '', 'even:Mon:12-3:bangor'),
('bangor', 'Tue', 'even', '12-3', 1, ',Kimberley9048746622', '', 'even:Tue:12-3:bangor'),
('bangor', 'Wed', 'even', '12-3', 1, ',Bonnie7039421321', '', 'even:Wed:12-3:bangor'),
('bangor', 'Thu', 'even', '12-3', 2, ',Shannon7039912298,Hannah7036109735', '', 'even:Thu:12-3:bangor'),
('bangor', 'Fri', 'even', '12-3', 1, ',Jane7038273452', '', 'even:Fri:12-3:bangor'),
('bangor', 'Mon', 'even', '3-6', 1, '', '', 'even:Mon:3-6:bangor'),
('bangor', 'Tue', 'even', '3-6', 1, ',Jennifer7038527724', '', 'even:Tue:3-6:bangor'),
('bangor', 'Wed', 'even', '3-6', 1, '', '', 'even:Wed:3-6:bangor'),
('bangor', 'Thu', 'even', '3-6', 2, ',Cassandra7039445038,Nicole9176052094', '', 'even:Thu:3-6:bangor'),
('bangor', 'Fri', 'even', '3-6', 1, ',Amanda7032051750', '', 'even:Fri:3-6:bangor'),
('bangor', 'Mon', 'even', '6-9', 1, '', '', 'even:Mon:6-9:bangor'),
('bangor', 'Tue', 'even', '6-9', 1, ',Natasha7034040029', '', 'even:Tue:6-9:bangor'),
('bangor', 'Wed', 'even', '6-9', 1, ',Natasha7034040029', '', 'even:Wed:6-9:bangor'),
('bangor', 'Thu', 'even', '6-9', 1, '', '', 'even:Thu:6-9:bangor'),
('bangor', 'Fri', 'odd', 'night', 0, '', '', 'odd:Fri:night:bangor'),
('bangor', 'Fri', 'even', 'night', 0, '', '', 'even:Fri:night:bangor'),
('bangor', 'Sun', '1st', '5-9', 0, '', '', '1st:Sun:5-9:bangor'),
('bangor', 'Sat', '4th', 'night', 0, '', '', '4th:Sat:night:bangor'),
('bangor', 'Sat', '1st', 'night', 0, '', '', '1st:Sat:night:bangor'),
('bangor', 'Sun', '1st', '9-5', 0, '', '', '1st:Sun:9-5:bangor'),
('bangor', 'Sat', '2nd', 'night', 0, '', '', '2nd:Sat:night:bangor'),
('bangor', 'Sun', '2nd', '9-5', 0, '', '', '2nd:Sun:9-5:bangor'),
('bangor', 'Sun', '2nd', '5-9', 0, '', '', '2nd:Sun:5-9:bangor'),
('bangor', 'Sun', '3rd', '9-5', 0, '', '', '3rd:Sun:9-5:bangor'),
('bangor', 'Sun', '4th', '9-5', 0, '', '', '4th:Sun:9-5:bangor'),
('bangor', 'Sun', '3rd', '5-9', 0, '', '', '3rd:Sun:5-9:bangor'),
('bangor', 'Sat', '3rd', 'night', 0, '', '', '3rd:Sat:night:bangor'),
('bangor', 'Sun', '4th', '5-9', 0, '', '', '4th:Sun:5-9:bangor'),
('bangor', 'Sun', '5th', '9-5', 0, '', '', '5th:Sun:9-5:bangor'),
('bangor', 'Sun', '5th', '5-9', 0, '', '', '5th:Sun:5-9:bangor'),
('bangor', 'Sat', '1st', '9-5', 0, '', '', '1st:Sat:9-5:bangor'),
('bangor', 'Sat', '2nd', '9-5', 0, '', '', '2nd:Sat:9-5:bangor'),
('bangor', 'Sat', '3rd', '9-5', 0, '', '', '3rd:Sat:9-5:bangor'),
('bangor', 'Sat', '4th', '9-5', 0, '', '', '4th:Sat:9-5:bangor'),
('bangor', 'Sat', '5th', '9-5', 0, '', '', '5th:Sat:9-5:bangor');

-- --------------------------------------------------------

--
-- Table structure for table `dbpersons`
--

CREATE TABLE `dbpersons` (
  `id` text NOT NULL,
  `start_date` text,
  `venue` text,
  `first_name` text NOT NULL,
  `last_name` text,
  `address` text,
  `city` text,
  `state` varchar(2) DEFAULT NULL,
  `zip` text,
  `phone1` varchar(12) NOT NULL,
  `phone1type` text,
  `phone2` varchar(12) DEFAULT NULL,
  `phone2type` text,
  `birthday` text,
  `email` text,
  `shirt_size` varchar(3) DEFAULT NULL,
  `computer` varchar(3) DEFAULT NULL,
  `camera` varchar(3) NOT NULL,
  `transportation` varchar(3) NOT NULL,
  `contact_name` text NOT NULL,
  `contact_num` varchar(12) NOT NULL,
  `relation` text NOT NULL,
  `contact_time` text NOT NULL,
  `cMethod` text,
  `position` text,
  `credithours` text,
  `howdidyouhear` text,
  `commitment` text,
  `motivation` text,
  `specialties` text,
  `convictions` text,
  `type` text,
  `status` text,
  `availability` text,
  `schedule` text,
  `hours` text,
  `notes` text,
  `password` text,

  `address2` text,
  `county` text NOT NULL,
  `website` text NOT NULL,
  `alt_services` text,
  `tag` text NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbpersons`
--

INSERT INTO `dbpersons` (`id`, `start_date`, `venue`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `phone1`, `phone1type`, `phone2`, `phone2type`, `birthday`, `email`, `shirt_size`, `computer`, `camera`, `transportation`, `contact_name`, `contact_num`, `relation`, `contact_time`, `cMethod`, `position`, `credithours`, `howdidyouhear`, `commitment`, `motivation`, `specialties`, `convictions`, `type`, `status`, `availability`, `schedule`, `hours`, `notes`, `password`) VALUES
('Admin7037806282', '17-07-26', 'portland', 'Admin', 'Jones', '1 Gum Tree Rd', 'Ashburn', 'VA', '22222', '7037806282', '', '', '', '', 'admin@yahoo.com', 'S', 'No', 'No', 'No', 'Admin', '7777777777', 'Relative', '', '', '', '', '', '', '', '', '', 'manager', 'active', '', '', '', '', 'be6bef2c7a57bead38826deed4077d03'),
('GwynethsGiftAdmin4678931290', '', 'portland', 'GwynethsGiftAdmin', 'SiteAdmin', 'Princess Anne St #101', 'Fredericksburg', 'VA', '22401', '4678931290', 'home', '', '', '', 'info@gwynethsgift.org', 'S', 'Yes', 'Yes', 'Yes', '-', '7777777777', 'Relative', '', 'Email', '', '', '', '', '', '', '', 'manager', 'active', 'Mon:9-12:portland,Mon:12-3:portland,Mon:3-6:portland,Mon:6-9:portland', '', '', '', 'e8f7e210dd29cb6729245a99b1b4d32c'),
('GuestApplying4564563232', '22-12-02', 'portland', 'GuestApplying', 'hi', '56 street', 'Richmond', 'VA', '34567', '4564563232', 'home', '', '', '90-12-14', 'hi@outlook.com', 'S', 'Yes', 'Yes', 'Yes', 'Joe', '3453454545', 'Parent', 'Weekends', 'Email', '', '', 'family', '', '', '', '', 'volunteer', 'applicant', 'Tue:9-12:portland,Wed:9-12:portland,Tue:12-3:portland,Tue:3-6:portland,Tue:6-9:portland', '', '', '', '1a1dc91c907325c69271ddf0c944bc72');

-- --------------------------------------------------------

--
-- Table structure for table `dbscl`
--

CREATE TABLE `dbscl` (
  `id` char(25) NOT NULL,
  `persons` text,
  `status` text,
  `vacancies` text,
  `time` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbscl`
--

INSERT INTO `dbscl` (`id`, `persons`, `status`, `vacancies`, `time`) VALUES
('22-10-24:12-3:portland', 'Annie7032831610+Annie+Jones+7032831610 + +++?,Charlie7032728637+Charlie+Jones+7032728637 + +++?,Jeanette7037615825+Jeanette+Jones+7037615825 + +++?,Jill7037739540+Jill+Jones+7037739540 + +++?,Lucy7037495489+Lucy+Jones+7037495489 + +++?,Marjorie7032328434+Marjorie+Jones+7032328434 cell+ +++?,Mary7036423647+Mary+Jones+7036423647 + +++?,Meg7039395058+Meg+Jones+7039395058 + +++?,Nancy7032210332+Nancy+Jones+7032210332 + +++?,Robin7037510984+Robin+Jones+7037510984 + +++?,Star7036536759+Star+Jones+7036536759 + +++?,Suzanne7037018778+Suzanne+Jones+7037018778 + +++?', 'open', '1', '202422101'),
('22-11-01:9-12:bangor', 'Amanda7032051750+Amanda+Jones+7032051750 cell+ +++?,Sara7036594431+Sara+Jones+7036594431 cell+ +++?', 'open', '1', '200122119');

-- --------------------------------------------------------

--
-- Table structure for table `dbshifts`
--

CREATE TABLE `dbshifts` (
  `id` char(25) NOT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `venue` text,
  `vacancies` int(11) DEFAULT NULL,
  `persons` text,
  `removed_persons` text,
  `sub_call_list` text,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbshifts`
--

INSERT INTO `dbshifts` (`id`, `start_time`, `end_time`, `venue`, `vacancies`, `persons`, `removed_persons`, `sub_call_list`, `notes`) VALUES
('22-10-24:12-3:bangor', 12, 15, 'bangor', 0, 'Barbara7033227096+Barbara+Jones', '', '', ''),
('22-10-24:12-3:portland', 12, 15, 'portland', 1, 'Cheryl7038089589+Cheryl+Jones', 'Peter7037991786+Peter+Jones', '', ''),
('22-10-24:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-10-24:3-6:portland', 15, 18, 'portland', 0, 'Maureen7032100761+Maureen+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-10-24:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-10-24:6-9:portland', 18, 21, 'portland', 0, 'Vickie7033180302+Vickie+Jones*Estelle7037720647+Estelle+Jones', '', '', ''),
('22-10-24:9-12:bangor', 9, 12, 'bangor', 1, '', '', '', ''),
('22-10-24:9-12:portland', 9, 12, 'portland', 1, '', 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', ''),
('22-10-25:12-3:bangor', 12, 15, 'bangor', 0, 'Kimberley9048746622', '', '', ''),
('22-10-25:12-3:portland', 12, 15, 'portland', 0, 'Mary Ann7038833212+Mary Ann+Jones*Gibbs7037474590+Gibbs+Jones', '', '', ''),
('22-10-25:3-6:bangor', 15, 18, 'bangor', 0, 'Jennifer7038527724+Jennifer+Jones', '', '', ''),
('22-10-25:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-10-25:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-10-25:6-9:portland', 18, 21, 'portland', 0, 'Josh7037124705+Josh+Jones*April7038075431+April+Jones', '', '', ''),
('22-10-25:9-12:bangor', 9, 12, 'bangor', 0, 'Julie7039424211+Julie+Jones', '', '', ''),
('22-10-25:9-12:portland', 9, 12, 'portland', 1, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-10-26:12-3:bangor', 12, 15, 'bangor', 0, 'Bonnie7039421321+Bonnie+Jones', '', '', ''),
('22-10-26:12-3:portland', 12, 15, 'portland', 1, 'Ellen7037994830+Ellen+Jones', '', '', ''),
('22-10-26:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-10-26:3-6:portland', 15, 18, 'portland', 1, 'Nancy7034158150+Nancy+Jones', '', '', ''),
('22-10-26:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-10-26:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Lilly2158349209', '', '', ''),
('22-10-26:9-12:bangor', 9, 12, 'bangor', 0, 'Linda7037358701+Linda+Jones', '', '', ''),
('22-10-26:9-12:portland', 9, 12, 'portland', 0, 'Jeannie7037970345+Jeannie+Jones*Kym7037970345+Kym+Jones', '', '', ''),
('22-10-27:12-3:bangor', 12, 15, 'bangor', 0, 'Shannon7039912298+Shannon+Jones*Hannah7036109735+Hannah+Jones', '', '', ''),
('22-10-27:12-3:portland', 12, 15, 'portland', 0, 'Thorne7034439654+Thorne+Jones*Meg7037298111+Meg+Jones', '', '', ''),
('22-10-27:3-6:bangor', 15, 18, 'bangor', 0, 'Cassandra7039445038+Cassandra+Jones*Nicole9176052094', '', '', ''),
('22-10-27:3-6:portland', 15, 18, 'portland', 0, 'Linda7037568845+Linda+Jones*Sue7033171877+Sue+Jones', '', '', ''),
('22-10-27:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-10-27:6-9:portland', 18, 21, 'portland', 0, 'Shay6175012425*Rebecca5185881836', '', '', ''),
('22-10-27:9-12:bangor', 9, 12, 'bangor', 0, 'Lura7039471915+Lura+Jones', '', '', ''),
('22-10-27:9-12:portland', 9, 12, 'portland', 2, '', '', '', ''),
('22-10-28:12-3:bangor', 12, 15, 'bangor', 0, 'Jane7038273452+Jane+Jones', '', '', ''),
('22-10-28:12-3:portland', 12, 15, 'portland', 1, 'Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-10-28:3-6:bangor', 15, 18, 'bangor', 0, 'Amanda7032051750+Amanda+Jones', '', '', ''),
('22-10-28:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Margi7034152255+Margi+Jones', '', '', ''),
('22-10-28:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-10-28:9-12:bangor', 9, 12, 'bangor', 0, 'Sara7036594431+Sara+Jones', '', '', ''),
('22-10-28:9-12:portland', 9, 12, 'portland', 1, 'Bobbi7033447417+Bobbi+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-10-28:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-10-28:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-10-29:1-4:portland', 13, 16, 'portland', 1, '', '', '', ''),
('22-10-29:10-1:portland', 10, 13, 'portland', 1, '', '', '', ''),
('22-10-29:9-5:bangor', 9, 17, 'bangor', 0, '', '', '', ''),
('22-10-29:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-10-29:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-10-30:2-5:portland', 14, 17, 'portland', 1, '', '', '', ''),
('22-10-30:5-9:bangor', 17, 21, 'bangor', 0, '', '', '', ''),
('22-10-30:5-9:portland', 17, 21, 'portland', 0, 'Chris7038788512+Chris+Jones', '', '', ''),
('22-10-30:9-12:portland', 9, 12, 'portland', 0, 'Alice5405657878+Alice+Apple', '', '', ''),
('22-10-30:9-5:bangor', 9, 17, 'bangor', 0, '', '', '', ''),
('22-10-31:12-3:bangor', 12, 15, 'bangor', 0, 'Barbara7033227096+Barbara+Jones', '', '', ''),
('22-10-31:12-3:portland', 12, 15, 'portland', 1, 'Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-10-31:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-10-31:3-6:portland', 15, 18, 'portland', 0, 'Robin7037510984+Robin+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-10-31:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-10-31:6-9:portland', 18, 21, 'portland', 1, 'Nonie7037812392+Nonie+Jones', '', '', ''),
('22-10-31:9-12:bangor', 9, 12, 'bangor', 1, '', '', '', ''),
('22-10-31:9-12:portland', 9, 12, 'portland', 1, 'Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', 'Jane7038293469+Jane+Jones', '', ''),
('22-11-01:12-3:bangor', 12, 15, 'bangor', 0, 'Sara7036594431+Sara+Jones', '', '', ''),
('22-11-01:12-3:portland', 12, 15, 'portland', 0, 'Cindy7035631089+Cindy+Jones*AguestTest5467899090+AguestTest+Aguest*AdminAddedMe5405444545+AdminAddedMe+AdminTest', '', '', ''),
('22-11-01:3-6:bangor', 15, 18, 'bangor', 0, 'Jennifer7038527724+Jennifer+Jones', '', '', ''),
('22-11-01:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-11-01:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-11-01:6-9:portland', 18, 21, 'portland', 0, 'Kara7035953232+Kara+Jones*Daniel7032330196+Daniel+Jones', '', '', ''),
('22-11-01:9-12:bangor', 9, 12, 'bangor', 1, 'AAd4544544545+AAd+AAAAd', 'Julie7039424211+Julie+Jones*AAd4544544545+AAd+AAAAd', '', ''),
('22-11-01:9-12:portland', 9, 12, 'portland', 1, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-11-02:12-3:bangor', 12, 15, 'bangor', 0, 'Bonnie7039421321+Bonnie+Jones', '', '', ''),
('22-11-02:12-3:portland', 12, 15, 'portland', 1, 'John7032476256+John+Jones', '', '', ''),
('22-11-02:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-11-02:3-6:portland', 15, 18, 'portland', 0, 'Amy7037519944+Amy+Jones*Ann7038470375+Ann+Jones', '', '', ''),
('22-11-02:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-11-02:6-9:portland', 18, 21, 'portland', 0, 'Marilee7034159124+Marilee+Jones*Claudia7033181908+Claudia+Jones', '', '', ''),
('22-11-02:9-12:bangor', 9, 12, 'bangor', 0, 'Linda7037358701+Linda+Jones', '', '', ''),
('22-11-02:9-12:portland', 9, 12, 'portland', 0, 'Aynne7032328782+Aynne+Jones*Charlie7032728637+Charlie+Jones', '', '', ''),
('22-11-03:12-3:bangor', 12, 15, 'bangor', 0, 'Shannon7039912298+Shannon+Jones*Hannah7036109735+Hannah+Jones', '', '', ''),
('22-11-03:12-3:portland', 12, 15, 'portland', 0, 'Marjorie7032328434+Marjorie+Jones*AddmeToCalendar1234567676+AddmeToCalendar+Addme', '', '', ''),
('22-11-03:3-6:bangor', 15, 18, 'bangor', 0, 'Cassandra7039445038+Cassandra+Jones*Nicole9176052094', '', '', ''),
('22-11-03:3-6:portland', 15, 18, 'portland', 0, 'Nancy7032210332+Nancy+Jones*Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-11-03:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-11-03:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Allyson7034410528+Allyson+Jones', '', '', ''),
('22-11-03:9-12:bangor', 9, 12, 'bangor', 0, 'Lura7039471915+Lura+Jones', '', '', ''),
('22-11-03:9-12:portland', 9, 12, 'portland', 0, 'Cathy7038784455+Cathy+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-11-04:12-3:bangor', 12, 15, 'bangor', 0, 'Jane7038273452+Jane+Jones', '', '', ''),
('22-11-04:12-3:portland', 12, 15, 'portland', 1, 'Ellen7034432810+Ellen+Jones', '', '', ''),
('22-11-04:3-6:bangor', 15, 18, 'bangor', 0, 'Amanda7032051750+Amanda+Jones', '', '', ''),
('22-11-04:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Elaine7037672928+Elaine+Jones', '', '', ''),
('22-11-04:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-11-04:9-12:bangor', 9, 12, 'bangor', 0, 'Sara7036594431+Sara+Jones', '', '', ''),
('22-11-04:9-12:portland', 9, 12, 'portland', 0, 'Sally7037993827+Sally+Jones*Becky7038463827+Becky+Jones', '', '', ''),
('22-11-04:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-11-04:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-11-05:1-4:portland', 13, 16, 'portland', 0, 'Beverly7038542682+Beverly+Jones', '', '', ''),
('22-11-05:10-1:portland', 10, 13, 'portland', 0, 'Nancy7036769033+Nancy+Jones*Beth7033399448+Beth+Jones*Rita7037998431+Rita+Jones', '', '', ''),
('22-11-05:9-5:bangor', 9, 17, 'bangor', 0, '', '', '', ''),
('22-11-05:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-11-05:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-11-06:2-5:portland', 14, 17, 'portland', 0, 'Mary7038293321+Mary+Jones', '', '', ''),
('22-11-06:5-9:bangor', 17, 21, 'bangor', 0, '', '', '', ''),
('22-11-06:5-9:portland', 17, 21, 'portland', 0, 'Paul7032323414+Paul+Jones', '', '', ''),
('22-11-06:9-12:portland', 9, 12, 'portland', 0, 'AddShirtDrop3454544444+AddShirtDrop+Addshirtdrop', '', '', ''),
('22-11-06:9-5:bangor', 9, 17, 'bangor', 1, '', '', '', ''),
('22-11-07:12-3:bangor', 12, 15, 'bangor', 0, 'Barbara7033227096+Barbara+Jones', '', '', ''),
('22-11-07:12-3:portland', 12, 15, 'portland', 0, 'Peter7037991786+Peter+Jones*Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-11-07:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-11-07:3-6:portland', 15, 18, 'portland', 0, 'Maureen7032100761+Maureen+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-11-07:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-11-07:6-9:portland', 18, 21, 'portland', 0, 'Vickie7033180302+Vickie+Jones*Estelle7037720647+Estelle+Jones', '', '', ''),
('22-11-07:9-12:bangor', 9, 12, 'bangor', 1, '', '', '', ''),
('22-11-07:9-12:portland', 9, 12, 'portland', 0, 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', '', ''),
('22-11-08:12-3:bangor', 12, 15, 'bangor', 0, 'Kimberley9048746622', '', '', ''),
('22-11-08:12-3:portland', 12, 15, 'portland', 0, 'Mary Ann7038833212+Mary Ann+Jones*Gibbs7037474590+Gibbs+Jones', '', '', ''),
('22-11-08:3-6:bangor', 15, 18, 'bangor', 0, 'Jennifer7038527724+Jennifer+Jones', '', '', ''),
('22-11-08:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-11-08:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-11-08:6-9:portland', 18, 21, 'portland', 0, 'Josh7037124705+Josh+Jones*April7038075431+April+Jones', '', '', ''),
('22-11-08:9-12:bangor', 9, 12, 'bangor', 0, 'Julie7039424211+Julie+Jones', '', '', ''),
('22-11-08:9-12:portland', 9, 12, 'portland', 0, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-11-09:12-3:bangor', 12, 15, 'bangor', 0, 'Bonnie7039421321+Bonnie+Jones', '', '', ''),
('22-11-09:12-3:portland', 12, 15, 'portland', 0, 'Ellen7037994830+Ellen+Jones*AfirstTest6786786767+AfirstTest+Afirst', '', '', ''),
('22-11-09:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-11-09:3-6:portland', 15, 18, 'portland', 1, 'Nancy7034158150+Nancy+Jones', '', '', ''),
('22-11-09:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-11-09:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Lilly2158349209', '', '', ''),
('22-11-09:9-12:bangor', 9, 12, 'bangor', 0, 'Linda7037358701+Linda+Jones', '', '', ''),
('22-11-09:9-12:portland', 9, 12, 'portland', 0, 'Jeannie7037970345+Jeannie+Jones*Kym7037970345+Kym+Jones', '', '', ''),
('22-11-10:12-3:bangor', 12, 15, 'bangor', 0, 'Shannon7039912298+Shannon+Jones*Hannah7036109735+Hannah+Jones', '', '', ''),
('22-11-10:12-3:portland', 12, 15, 'portland', 0, 'Thorne7034439654+Thorne+Jones*Meg7037298111+Meg+Jones', '', '', ''),
('22-11-10:3-6:bangor', 15, 18, 'bangor', 0, 'Cassandra7039445038+Cassandra+Jones*Nicole9176052094', '', '', ''),
('22-11-10:3-6:portland', 15, 18, 'portland', 0, 'Linda7037568845+Linda+Jones*Sue7033171877+Sue+Jones', '', '', ''),
('22-11-10:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-11-10:6-9:portland', 18, 21, 'portland', 0, 'Shay6175012425*Rebecca5185881836', '', '', ''),
('22-11-10:9-12:bangor', 9, 12, 'bangor', 0, 'Lura7039471915+Lura+Jones', '', '', ''),
('22-11-10:9-12:portland', 9, 12, 'portland', 2, '', '', '', ''),
('22-11-11:12-3:bangor', 12, 15, 'bangor', 0, 'Jane7038273452+Jane+Jones', '', '', ''),
('22-11-11:12-3:portland', 12, 15, 'portland', 1, 'Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-11-11:3-6:bangor', 15, 18, 'bangor', 0, 'Amanda7032051750+Amanda+Jones', '', '', ''),
('22-11-11:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Margi7034152255+Margi+Jones', '', '', ''),
('22-11-11:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-11-11:9-12:bangor', 9, 12, 'bangor', 0, 'Sara7036594431+Sara+Jones', '', '', ''),
('22-11-11:9-12:portland', 9, 12, 'portland', 1, 'Bobbi7033447417+Bobbi+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-11-11:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-11-11:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-11-12:1-4:portland', 13, 16, 'portland', 0, 'Susan7037817946+Susan+Jones', '', '', ''),
('22-11-12:10-1:portland', 10, 13, 'portland', 1, '', '', '', ''),
('22-11-12:9-5:bangor', 9, 17, 'bangor', 0, '', '', '', ''),
('22-11-12:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-11-12:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-11-13:2-5:portland', 14, 17, 'portland', 0, 'Chris7038788512+Chris+Jones', '', '', ''),
('22-11-13:5-9:bangor', 17, 21, 'bangor', 0, '', '', '', ''),
('22-11-13:5-9:portland', 17, 21, 'portland', 1, '', '', '', ''),
('22-11-13:9-12:portland', 9, 12, 'portland', 1, '', '', '', ''),
('22-11-13:9-5:bangor', 9, 17, 'bangor', 0, '', '', '', ''),
('22-11-14:12-3:bangor', 12, 15, 'bangor', 0, 'Barbara7033227096+Barbara+Jones', '', '', ''),
('22-11-14:12-3:portland', 12, 15, 'portland', 1, 'Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-11-14:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-11-14:3-6:portland', 15, 18, 'portland', 0, 'Robin7037510984+Robin+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-11-14:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-11-14:6-9:portland', 18, 21, 'portland', 1, 'Nonie7037812392+Nonie+Jones', '', '', ''),
('22-11-14:9-12:bangor', 9, 12, 'bangor', 1, '', '', '', ''),
('22-11-14:9-12:portland', 9, 12, 'portland', 0, 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', '', ''),
('22-11-15:12-3:bangor', 12, 15, 'bangor', 0, 'Sara7036594431+Sara+Jones', '', '', ''),
('22-11-15:12-3:portland', 12, 15, 'portland', 1, 'Cindy7035631089+Cindy+Jones', '', '', ''),
('22-11-15:3-6:bangor', 15, 18, 'bangor', 0, 'Jennifer7038527724+Jennifer+Jones', '', '', ''),
('22-11-15:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-11-15:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-11-15:6-9:portland', 18, 21, 'portland', 0, 'Kara7035953232+Kara+Jones*Daniel7032330196+Daniel+Jones', '', '', ''),
('22-11-15:9-12:bangor', 9, 12, 'bangor', 0, 'Julie7039424211+Julie+Jones', '', '', ''),
('22-11-15:9-12:portland', 9, 12, 'portland', 0, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-11-16:12-3:bangor', 12, 15, 'bangor', 0, 'Bonnie7039421321+Bonnie+Jones', '', '', ''),
('22-11-16:12-3:portland', 12, 15, 'portland', 1, 'John7032476256+John+Jones', '', '', ''),
('22-11-16:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-11-16:3-6:portland', 15, 18, 'portland', 0, 'Amy7037519944+Amy+Jones*Ann7038470375+Ann+Jones', '', '', ''),
('22-11-16:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-11-16:6-9:portland', 18, 21, 'portland', 0, 'Marilee7034159124+Marilee+Jones*Claudia7033181908+Claudia+Jones', '', '', ''),
('22-11-16:9-12:bangor', 9, 12, 'bangor', 0, 'Linda7037358701+Linda+Jones', '', '', ''),
('22-11-16:9-12:portland', 9, 12, 'portland', 0, 'Aynne7032328782+Aynne+Jones*Charlie7032728637+Charlie+Jones', '', '', ''),
('22-11-17:12-3:bangor', 12, 15, 'bangor', 0, 'Shannon7039912298+Shannon+Jones*Hannah7036109735+Hannah+Jones', '', '', ''),
('22-11-17:12-3:portland', 12, 15, 'portland', 1, 'Marjorie7032328434+Marjorie+Jones', '', '', ''),
('22-11-17:3-6:bangor', 15, 18, 'bangor', 0, 'Cassandra7039445038+Cassandra+Jones*Nicole9176052094', '', '', ''),
('22-11-17:3-6:portland', 15, 18, 'portland', 0, 'Nancy7032210332+Nancy+Jones*Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-11-17:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-11-17:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Allyson7034410528+Allyson+Jones', '', '', ''),
('22-11-17:9-12:bangor', 9, 12, 'bangor', 0, 'Lura7039471915+Lura+Jones', '', '', ''),
('22-11-17:9-12:portland', 9, 12, 'portland', 0, 'Cathy7038784455+Cathy+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-11-18:12-3:bangor', 12, 15, 'bangor', 0, 'Jane7038273452+Jane+Jones', '', '', ''),
('22-11-18:12-3:portland', 12, 15, 'portland', 1, 'Ellen7034432810+Ellen+Jones', '', '', ''),
('22-11-18:3-6:bangor', 15, 18, 'bangor', 0, 'Amanda7032051750+Amanda+Jones', '', '', ''),
('22-11-18:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Elaine7037672928+Elaine+Jones', '', '', ''),
('22-11-18:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-11-18:9-12:bangor', 9, 12, 'bangor', 0, 'Sara7036594431+Sara+Jones', '', '', ''),
('22-11-18:9-12:portland', 9, 12, 'portland', 0, 'Sally7037993827+Sally+Jones*Becky7038463827+Becky+Jones', '', '', ''),
('22-11-18:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-11-18:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-11-19:1-4:portland', 13, 16, 'portland', 1, '', '', '', ''),
('22-11-19:10-1:portland', 10, 13, 'portland', 1, '', '', '', ''),
('22-11-19:9-5:bangor', 9, 17, 'bangor', 0, '', '', '', ''),
('22-11-19:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-11-19:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-11-20:2-5:portland', 14, 17, 'portland', 0, 'Lance7032528780+Lance+Jones*Melissa7036501479+Melissa+Jones', '', '', ''),
('22-11-20:5-9:bangor', 17, 21, 'bangor', 0, '', '', '', ''),
('22-11-20:5-9:portland', 17, 21, 'portland', 1, '', '', '', ''),
('22-11-20:9-12:portland', 9, 12, 'portland', 1, '', '', '', ''),
('22-11-20:9-5:bangor', 9, 17, 'bangor', 0, '', '', '', ''),
('22-11-21:12-3:bangor', 12, 15, 'bangor', 0, 'Barbara7033227096+Barbara+Jones', '', '', ''),
('22-11-21:12-3:portland', 12, 15, 'portland', 0, 'Peter7037991786+Peter+Jones*Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-11-21:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-11-21:3-6:portland', 15, 18, 'portland', 0, 'Maureen7032100761+Maureen+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-11-21:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-11-21:6-9:portland', 18, 21, 'portland', 0, 'Vickie7033180302+Vickie+Jones*Estelle7037720647+Estelle+Jones', '', '', ''),
('22-11-21:9-12:bangor', 9, 12, 'bangor', 1, '', '', '', ''),
('22-11-21:9-12:portland', 9, 12, 'portland', 0, 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', '', ''),
('22-11-22:12-3:bangor', 12, 15, 'bangor', 0, 'Kimberley9048746622', '', '', ''),
('22-11-22:12-3:portland', 12, 15, 'portland', 0, 'Mary Ann7038833212+Mary Ann+Jones*Gibbs7037474590+Gibbs+Jones', '', '', ''),
('22-11-22:3-6:bangor', 15, 18, 'bangor', 0, 'Jennifer7038527724+Jennifer+Jones', '', '', ''),
('22-11-22:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-11-22:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-11-22:6-9:portland', 18, 21, 'portland', 0, 'Josh7037124705+Josh+Jones*April7038075431+April+Jones', '', '', ''),
('22-11-22:9-12:bangor', 9, 12, 'bangor', 0, 'Julie7039424211+Julie+Jones', '', '', ''),
('22-11-22:9-12:portland', 9, 12, 'portland', 0, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-11-23:12-3:bangor', 12, 15, 'bangor', 0, 'Bonnie7039421321+Bonnie+Jones', '', '', ''),
('22-11-23:12-3:portland', 12, 15, 'portland', 1, 'Ellen7037994830+Ellen+Jones', '', '', ''),
('22-11-23:3-6:bangor', 15, 18, 'bangor', 1, '', '', '', ''),
('22-11-23:3-6:portland', 15, 18, 'portland', 1, 'Nancy7034158150+Nancy+Jones', '', '', ''),
('22-11-23:6-9:bangor', 18, 21, 'bangor', 0, 'Natasha7034040029+Natasha+Jones', '', '', ''),
('22-11-23:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Lilly2158349209', '', '', ''),
('22-11-23:9-12:bangor', 9, 12, 'bangor', 0, 'Linda7037358701+Linda+Jones', '', '', ''),
('22-11-23:9-12:portland', 9, 12, 'portland', 0, 'Jeannie7037970345+Jeannie+Jones*Kym7037970345+Kym+Jones', '', '', ''),
('22-11-24:12-3:bangor', 12, 15, 'bangor', 0, 'Shannon7039912298+Shannon+Jones*Hannah7036109735+Hannah+Jones', '', '', ''),
('22-11-24:12-3:portland', 12, 15, 'portland', 0, 'Thorne7034439654+Thorne+Jones*Meg7037298111+Meg+Jones', '', '', ''),
('22-11-24:3-6:bangor', 15, 18, 'bangor', 0, 'Cassandra7039445038+Cassandra+Jones*Nicole9176052094', '', '', ''),
('22-11-24:3-6:portland', 15, 18, 'portland', 0, 'Linda7037568845+Linda+Jones*Sue7033171877+Sue+Jones', '', '', ''),
('22-11-24:6-9:bangor', 18, 21, 'bangor', 1, '', '', '', ''),
('22-11-24:6-9:portland', 18, 21, 'portland', 0, 'Shay6175012425*Rebecca5185881836', '', '', ''),
('22-11-24:9-12:bangor', 9, 12, 'bangor', 0, 'Lura7039471915+Lura+Jones', '', '', ''),
('22-11-24:9-12:portland', 9, 12, 'portland', 2, '', '', '', ''),
('22-11-25:12-3:bangor', 12, 15, 'bangor', 0, 'Jane7038273452+Jane+Jones', '', '', ''),
('22-11-25:12-3:portland', 12, 15, 'portland', 1, 'Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-11-25:3-6:bangor', 15, 18, 'bangor', 0, 'Amanda7032051750+Amanda+Jones', '', '', ''),
('22-11-25:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Margi7034152255+Margi+Jones', '', '', ''),
('22-11-25:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-11-25:9-12:bangor', 9, 12, 'bangor', 0, 'Sara7036594431+Sara+Jones', '', '', ''),
('22-11-25:9-12:portland', 9, 12, 'portland', 1, 'Bobbi7033447417+Bobbi+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-11-25:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-11-25:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-11-26:1-4:portland', 13, 16, 'portland', 1, '', '', '', ''),
('22-11-26:10-1:portland', 10, 13, 'portland', 1, '', '', '', ''),
('22-11-26:9-5:bangor', 9, 17, 'bangor', 0, '', '', '', ''),
('22-11-26:night:bangor', 0, 1, 'bangor', 0, '', '', '', ''),
('22-11-26:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-11-27:2-5:portland', 14, 17, 'portland', 1, '', '', '', ''),
('22-11-27:5-9:bangor', 17, 21, 'bangor', 0, '', '', '', ''),
('22-11-27:5-9:portland', 17, 21, 'portland', 1, '', '', '', ''),
('22-11-27:9-12:portland', 9, 12, 'portland', 0, 'Gaye7032476985+Gaye+Jones', '', '', ''),
('22-11-27:9-5:bangor', 9, 17, 'bangor', 0, '', '', '', ''),
('22-11-28:12-3:portland', 12, 15, 'portland', 1, 'Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-11-28:3-6:portland', 15, 18, 'portland', 0, 'Robin7037510984+Robin+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-11-28:6-9:portland', 18, 21, 'portland', 1, 'Nonie7037812392+Nonie+Jones', '', '', ''),
('22-11-28:9-12:portland', 9, 12, 'portland', 0, 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', '', ''),
('22-11-29:12-3:portland', 12, 15, 'portland', 1, 'Cindy7035631089+Cindy+Jones', '', '', ''),
('22-11-29:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-11-29:6-9:portland', 18, 21, 'portland', 0, 'Kara7035953232+Kara+Jones*Daniel7032330196+Daniel+Jones', '', '', ''),
('22-11-29:9-12:portland', 9, 12, 'portland', 0, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-11-30:12-3:portland', 12, 15, 'portland', 1, 'John7032476256+John+Jones', '', '', ''),
('22-11-30:3-6:portland', 15, 18, 'portland', 0, 'Amy7037519944+Amy+Jones*Ann7038470375+Ann+Jones', '', '', ''),
('22-11-30:6-9:portland', 18, 21, 'portland', 0, 'Marilee7034159124+Marilee+Jones*Claudia7033181908+Claudia+Jones', '', '', ''),
('22-11-30:9-12:portland', 9, 12, 'portland', 0, 'Aynne7032328782+Aynne+Jones*Charlie7032728637+Charlie+Jones', '', '', ''),
('22-12-01:12-3:portland', 12, 15, 'portland', 1, 'Marjorie7032328434+Marjorie+Jones', '', '', ''),
('22-12-01:3-6:portland', 15, 18, 'portland', 0, 'Nancy7032210332+Nancy+Jones*Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-12-01:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Allyson7034410528+Allyson+Jones', '', '', ''),
('22-12-01:9-12:portland', 9, 12, 'portland', 0, 'Cathy7038784455+Cathy+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-12-02:12-3:portland', 12, 15, 'portland', 1, 'Ellen7034432810+Ellen+Jones', '', '', ''),
('22-12-02:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Elaine7037672928+Elaine+Jones', '', '', ''),
('22-12-02:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-12-02:9-12:portland', 9, 12, 'portland', 0, 'Sally7037993827+Sally+Jones*Becky7038463827+Becky+Jones', '', '', ''),
('22-12-02:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-12-03:1-4:portland', 13, 16, 'portland', 0, 'Beverly7038542682+Beverly+Jones', '', '', ''),
('22-12-03:10-1:portland', 10, 13, 'portland', 0, 'Nancy7036769033+Nancy+Jones*Beth7033399448+Beth+Jones*Rita7037998431+Rita+Jones', '', '', ''),
('22-12-03:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-12-04:2-5:portland', 14, 17, 'portland', 0, 'Mary7038293321+Mary+Jones', '', '', ''),
('22-12-04:5-9:portland', 17, 21, 'portland', 0, 'Paul7032323414+Paul+Jones', '', '', ''),
('22-12-04:9-12:portland', 9, 12, 'portland', 1, '', 'RemovedStuff23454341111+RemovedStuff2+rem2*Volunteer2342342323+Volunteer+Test', '', ''),
('22-12-05:12-3:portland', 12, 15, 'portland', 0, 'Peter7037991786+Peter+Jones*Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-12-05:3-6:portland', 15, 18, 'portland', 0, 'Maureen7032100761+Maureen+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-12-05:6-9:portland', 18, 21, 'portland', 0, 'Vickie7033180302+Vickie+Jones*Estelle7037720647+Estelle+Jones', '', '', ''),
('22-12-05:9-12:portland', 9, 12, 'portland', 0, 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', '', ''),
('22-12-06:12-3:portland', 12, 15, 'portland', 0, 'Mary Ann7038833212+Mary Ann+Jones*Gibbs7037474590+Gibbs+Jones', '', '', ''),
('22-12-06:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-12-06:6-9:portland', 18, 21, 'portland', 0, 'Josh7037124705+Josh+Jones*April7038075431+April+Jones', '', '', ''),
('22-12-06:9-12:portland', 9, 12, 'portland', 0, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-12-07:12-3:portland', 12, 15, 'portland', 1, 'Ellen7037994830+Ellen+Jones', '', '', ''),
('22-12-07:3-6:portland', 15, 18, 'portland', 1, 'Nancy7034158150+Nancy+Jones', '', '', ''),
('22-12-07:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Lilly2158349209', '', '', ''),
('22-12-07:9-12:portland', 9, 12, 'portland', 0, 'Jeannie7037970345+Jeannie+Jones*Kym7037970345+Kym+Jones', '', '', ''),
('22-12-08:12-3:portland', 12, 15, 'portland', 0, 'Thorne7034439654+Thorne+Jones*Meg7037298111+Meg+Jones', '', '', ''),
('22-12-08:3-6:portland', 15, 18, 'portland', 0, 'Linda7037568845+Linda+Jones*Sue7033171877+Sue+Jones', '', '', ''),
('22-12-08:6-9:portland', 18, 21, 'portland', 0, 'Shay6175012425*Rebecca5185881836', '', '', ''),
('22-12-08:9-12:portland', 9, 12, 'portland', 1, 'ScreenDrop3443444444+ScreenDrop+droppppp', '', '', ''),
('22-12-09:12-3:portland', 12, 15, 'portland', 1, 'Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-12-09:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Margi7034152255+Margi+Jones', '', '', ''),
('22-12-09:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-12-09:9-12:portland', 9, 12, 'portland', 1, 'Bobbi7033447417+Bobbi+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-12-09:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-12-10:1-4:portland', 13, 16, 'portland', 0, 'Susan7037817946+Susan+Jones', '', '', ''),
('22-12-10:10-1:portland', 10, 13, 'portland', 0, 'GuestGuy3450000000+GuestGuy+Helloooooo', '', '', ''),
('22-12-10:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-12-11:2-5:portland', 14, 17, 'portland', 0, 'Chris7038788512+Chris+Jones', '', '', ''),
('22-12-11:5-9:portland', 17, 21, 'portland', 1, '', '', '', ''),
('22-12-11:9-12:portland', 9, 12, 'portland', 1, '', '', '', ''),
('22-12-12:12-3:portland', 12, 15, 'portland', 1, 'Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-12-12:3-6:portland', 15, 18, 'portland', 0, 'Robin7037510984+Robin+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-12-12:6-9:portland', 18, 21, 'portland', 1, 'Nonie7037812392+Nonie+Jones', '', '', ''),
('22-12-12:9-12:portland', 9, 12, 'portland', 0, 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', '', ''),
('22-12-13:12-3:portland', 12, 15, 'portland', 1, 'Cindy7035631089+Cindy+Jones', '', '', ''),
('22-12-13:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-12-13:6-9:portland', 18, 21, 'portland', 0, 'Kara7035953232+Kara+Jones*Daniel7032330196+Daniel+Jones', '', '', ''),
('22-12-13:9-12:portland', 9, 12, 'portland', 0, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-12-14:12-3:portland', 12, 15, 'portland', 1, 'John7032476256+John+Jones', '', '', ''),
('22-12-14:3-6:portland', 15, 18, 'portland', 0, 'Amy7037519944+Amy+Jones*Ann7038470375+Ann+Jones', '', '', ''),
('22-12-14:6-9:portland', 18, 21, 'portland', 0, 'Marilee7034159124+Marilee+Jones*Claudia7033181908+Claudia+Jones', '', '', ''),
('22-12-14:9-12:portland', 9, 12, 'portland', 0, 'Aynne7032328782+Aynne+Jones*Charlie7032728637+Charlie+Jones', '', '', ''),
('22-12-15:12-3:portland', 12, 15, 'portland', 1, 'Marjorie7032328434+Marjorie+Jones', '', '', ''),
('22-12-15:3-6:portland', 15, 18, 'portland', 0, 'Nancy7032210332+Nancy+Jones*Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-12-15:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Allyson7034410528+Allyson+Jones', '', '', ''),
('22-12-15:9-12:portland', 9, 12, 'portland', 0, 'Cathy7038784455+Cathy+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-12-16:12-3:portland', 12, 15, 'portland', 1, 'Ellen7034432810+Ellen+Jones', '', '', ''),
('22-12-16:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Elaine7037672928+Elaine+Jones', '', '', ''),
('22-12-16:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-12-16:9-12:portland', 9, 12, 'portland', 0, 'Sally7037993827+Sally+Jones*Becky7038463827+Becky+Jones', '', '', ''),
('22-12-16:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-12-17:1-4:portland', 13, 16, 'portland', 1, '', '', '', ''),
('22-12-17:10-1:portland', 10, 13, 'portland', 1, '', '', '', ''),
('22-12-17:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-12-18:2-5:portland', 14, 17, 'portland', 0, 'Lance7032528780+Lance+Jones*Melissa7036501479+Melissa+Jones', '', '', ''),
('22-12-18:5-9:portland', 17, 21, 'portland', 1, '', '', '', ''),
('22-12-18:9-12:portland', 9, 12, 'portland', 1, '', '', '', ''),
('22-12-19:12-3:portland', 12, 15, 'portland', 0, 'Peter7037991786+Peter+Jones*Cheryl7038089589+Cheryl+Jones', '', '', ''),
('22-12-19:3-6:portland', 15, 18, 'portland', 0, 'Maureen7032100761+Maureen+Jones*Claire7033293465+Claire+Jones', '', '', ''),
('22-12-19:6-9:portland', 18, 21, 'portland', 0, 'Vickie7033180302+Vickie+Jones*Estelle7037720647+Estelle+Jones', '', '', ''),
('22-12-19:9-12:portland', 9, 12, 'portland', 0, 'Jane7038293469+Jane+Jones*Cathy7038295422+Cathy+Jones*Cheryl7032821358+Cheryl+Jones', '', '', ''),
('22-12-20:12-3:portland', 12, 15, 'portland', 0, 'Mary Ann7038833212+Mary Ann+Jones*Gibbs7037474590+Gibbs+Jones', '', '', ''),
('22-12-20:3-6:portland', 15, 18, 'portland', 0, 'Becky7037725009*Betsy7038464935+Betsy+Jones', '', '', ''),
('22-12-20:6-9:portland', 18, 21, 'portland', 0, 'Josh7037124705+Josh+Jones*April7038075431+April+Jones', '', '', ''),
('22-12-20:9-12:portland', 9, 12, 'portland', 0, 'Jane7038859127*Stacey7032333522+Stacey+Jones', '', '', ''),
('22-12-21:12-3:portland', 12, 15, 'portland', 1, 'Ellen7037994830+Ellen+Jones', '', '', ''),
('22-12-21:3-6:portland', 15, 18, 'portland', 1, 'Nancy7034158150+Nancy+Jones', '', '', ''),
('22-12-21:6-9:portland', 18, 21, 'portland', 0, 'Jody7033294089+Jody+Jones*Lilly2158349209', '', '', ''),
('22-12-21:9-12:portland', 9, 12, 'portland', 0, 'Jeannie7037970345+Jeannie+Jones*Kym7037970345+Kym+Jones', '', '', ''),
('22-12-22:12-3:portland', 12, 15, 'portland', 0, 'Thorne7034439654+Thorne+Jones*Meg7037298111+Meg+Jones', '', '', ''),
('22-12-22:3-6:portland', 15, 18, 'portland', 0, 'Linda7037568845+Linda+Jones*Sue7033171877+Sue+Jones', '', '', ''),
('22-12-22:6-9:portland', 18, 21, 'portland', 0, 'Shay6175012425*Rebecca5185881836', '', '', ''),
('22-12-22:9-12:portland', 9, 12, 'portland', 2, '', '', '', ''),
('22-12-23:12-3:portland', 12, 15, 'portland', 1, 'Suzanne7037018778+Suzanne+Jones', '', '', ''),
('22-12-23:3-6:portland', 15, 18, 'portland', 1, 'Phyllis7032325963*Margi7034152255+Margi+Jones', '', '', ''),
('22-12-23:6-9:portland', 18, 21, 'portland', 0, '', '', '', ''),
('22-12-23:9-12:portland', 9, 12, 'portland', 1, 'Bobbi7033447417+Bobbi+Jones*Meg7039395058+Meg+Jones', '', '', ''),
('22-12-23:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-12-24:1-4:portland', 13, 16, 'portland', 1, '', '', '', ''),
('22-12-24:10-1:portland', 10, 13, 'portland', 1, '', '', '', ''),
('22-12-24:night:portland', 0, 1, 'portland', 1, '', '', '', ''),
('22-12-25:2-5:portland', 14, 17, 'portland', 1, '', '', '', ''),
('22-12-25:5-9:portland', 17, 21, 'portland', 1, '', '', '', ''),
('22-12-25:9-12:portland', 9, 12, 'portland', 0, 'Gaye7032476985+Gaye+Jones', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dbweeks`
--

CREATE TABLE `dbweeks` (
  `id` char(20) NOT NULL,
  `dates` text,
  `venue` text,
  `status` text,
  `name` text,
  `end` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbweeks`
--

INSERT INTO `dbweeks` (`id`, `dates`, `venue`, `status`, `name`, `end`) VALUES
('22-10-24:bangor', '22-10-24:bangor*22-10-25:bangor*22-10-26:bangor*22-10-27:bangor*22-10-28:bangor*22-10-29:bangor*22-10-30:bangor', 'bangor', 'published', 'October 24, 2022 to October 30, 2022', 1667174399),
('22-10-24:portland', '22-10-24:portland*22-10-25:portland*22-10-26:portland*22-10-27:portland*22-10-28:portland*22-10-29:portland*22-10-30:portland', 'portland', 'archived', 'October 24, 2022 to October 30, 2022', 1667174399),
('22-10-31:bangor', '22-10-31:bangor*22-11-01:bangor*22-11-02:bangor*22-11-03:bangor*22-11-04:bangor*22-11-05:bangor*22-11-06:bangor', 'bangor', 'published', 'October 31, 2022 to November 6, 2022', 1667779199),
('22-10-31:portland', '22-10-31:portland*22-11-01:portland*22-11-02:portland*22-11-03:portland*22-11-04:portland*22-11-05:portland*22-11-06:portland', 'portland', 'archived', 'October 31, 2022 to November 6, 2022', 1667779199),
('22-11-07:bangor', '22-11-07:bangor*22-11-08:bangor*22-11-09:bangor*22-11-10:bangor*22-11-11:bangor*22-11-12:bangor*22-11-13:bangor', 'bangor', 'published', 'November 7, 2022 to November 13, 2022', 1668383999),
('22-11-07:portland', '22-11-07:portland*22-11-08:portland*22-11-09:portland*22-11-10:portland*22-11-11:portland*22-11-12:portland*22-11-13:portland', 'portland', 'archived', 'November 7, 2022 to November 13, 2022', 1668383999),
('22-11-14:bangor', '22-11-14:bangor*22-11-15:bangor*22-11-16:bangor*22-11-17:bangor*22-11-18:bangor*22-11-19:bangor*22-11-20:bangor', 'bangor', 'published', 'November 14, 2022 to November 20, 2022', 1668988799),
('22-11-14:portland', '22-11-14:portland*22-11-15:portland*22-11-16:portland*22-11-17:portland*22-11-18:portland*22-11-19:portland*22-11-20:portland', 'portland', 'archived', 'November 14, 2022 to November 20, 2022', 1668988799),
('22-11-21:bangor', '22-11-21:bangor*22-11-22:bangor*22-11-23:bangor*22-11-24:bangor*22-11-25:bangor*22-11-26:bangor*22-11-27:bangor', 'bangor', 'published', 'November 21, 2022 to November 27, 2022', 1669593599),
('22-11-21:portland', '22-11-21:portland*22-11-22:portland*22-11-23:portland*22-11-24:portland*22-11-25:portland*22-11-26:portland*22-11-27:portland', 'portland', 'published', 'November 21, 2022 to November 27, 2022', 1669593599),
('22-11-28:portland', '22-11-28:portland*22-11-29:portland*22-11-30:portland*22-12-01:portland*22-12-02:portland*22-12-03:portland*22-12-04:portland', 'portland', 'published', 'November 28, 2022 to December 4, 2022', 1670198399),
('22-12-05:portland', '22-12-05:portland*22-12-06:portland*22-12-07:portland*22-12-08:portland*22-12-09:portland*22-12-10:portland*22-12-11:portland', 'portland', 'published', 'December 5, 2022 to December 11, 2022', 1670803199),
('22-12-12:portland', '22-12-12:portland*22-12-13:portland*22-12-14:portland*22-12-15:portland*22-12-16:portland*22-12-17:portland*22-12-18:portland', 'portland', 'published', 'December 12, 2022 to December 18, 2022', 1671407999),
('22-12-19:portland', '22-12-19:portland*22-12-20:portland*22-12-21:portland*22-12-22:portland*22-12-23:portland*22-12-24:portland*22-12-25:portland', 'portland', 'published', 'December 19, 2022 to December 25, 2022', 1672012799);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbdates`
--
ALTER TABLE `dbdates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dblog`
--
ALTER TABLE `dblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbscl`
--
ALTER TABLE `dbscl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbshifts`
--
ALTER TABLE `dbshifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbweeks`
--
ALTER TABLE `dbweeks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dblog`
--
ALTER TABLE `dblog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
