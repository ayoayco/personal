-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2016 at 12:50 AM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.31

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ayoaycoc_ayoayco_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `option` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option`, `value`) VALUES
('', ''),
('url', 'http://localhost/ayoayco');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_post`
--

DROP TABLE IF EXISTS `timeline_post`;
CREATE TABLE IF NOT EXISTS `timeline_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month-day` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `timeline_post`
--

INSERT INTO `timeline_post` (`id`, `month-day`, `year`, `icon`, `context`, `title`, `body`) VALUES
(8, '', '2006', 'gamepad', 'warning', 'Monk Dog (in C)', 'A game based on the fighting interface of the popular game called PokÃ©mon. Mostly text-based and equipped with a Life and a Mana bar to measure each of the fighting charactersâ€™ stats. '),
(9, '', '2007', 'gamepad', 'warning', 'Monk Dog (in Java)', 'A game based on the fighting interface of the popular game called PokÃ©mon; stand-alone game application, with a fully presentable Graphical User Interface'),
(10, '', '2009', 'gamepad', 'warning', 'Monk Dog (in PHP, HTML, JavaScript, CSS)', 'A game based on the fighting interface of the popular game called PokÃ©mon; made for the Web with a fully presentable Graphical User Interface.'),
(11, '', '2009', 'gamepad', 'warning', 'Rock Scissors Paper Game (in C)', 'Written in C programming language. Rock, Scissors, and Paper game played against the computer with a special Scoring System.'),
(12, '', '2010', 'puzzle-piece', 'success', 'Knight''s Tour (in Java and C)', 'A program that solves the ancient Knightâ€™s Tour problem using the Backtracking Algorithm.'),
(13, '', '2010', 'globe', 'info', 'iManage', 'A Web-based Management Information System software'),
(14, '', '2011', 'puzzle-piece', 'warning', 'Implementation of Various Loop Scheduling Algorithms on Desktop Grids', 'A study of the performances of various loop scheduling algorithms using a trivial case of an embarrassingly parallel problem as test bed over an increasing size of desktop grids. Programs are written in C Programming using Sockets.'),
(15, 'October', '2011', 'graduation-cap', 'success', 'Graduate: BS in Computer Science', '<p>University Of The Philippines (Los Ba&ntilde;os)</p>\r\n<p>Activities and Societies:\r\n<ol>\r\n<li>Graphic Literature Guild</li>\r\n<li>Harmonya: String Ensemble of UPLB</li>\r\n<li>Victory LB</li>\r\n</ol>\r\n</p>'),
(16, 'November 11', '2011', 'wrench', 'danger', 'Work: System Analyst', '<p>University of the Philippines Los BaÃ±os IT Center</p>\r\n<p>As a System Analyst / Developer, I do the following:</p>\r\n<p>\r\n<ol>\r\n<li>Develop programs to implement system design and produce software products</li>\r\n<li>Participate and assist in system analysis and design processes as well as testing, debugging, and deployment</li>\r\n<li>To perform other duties as instructed by the Vice Chancellor for Planning and Development or his designated representative</li>\r\n</ol>\r\n</p>'),
(17, '', '2012', 'globe', 'info', 'UPLB ICT-Audit', 'This is a web application used by the UP System to audit the different Information and Communication Technologies used by UP Constituents'),
(18, '', '2012', 'globe', 'info', 'UPLB DVSys', 'This is a web-based system used by the Accounting Office at UPLB for tracking Disbursement Vouchers of UPLB constituents '),
(19, '', '2011', 'globe', 'info', 'UPLB DocuTrack (<a href="http://quinine.uplb.edu.ph">http://quinine.uplb.edu.ph</a>)', 'Document tracking system used by UPLB employees to monitor the flow of documents in UPLB'),
(22, 'July 14', '2014', 'wrench', 'danger', 'Work: IT Officer 2', '<p>DOST - Project NOAH</p>\r\n<p>As an IT Officer 2 for Project NOAH, I do the following:</p>\r\n<p>\r\n<ol>\r\n<li>Research and implement web and GIS technologies for the project</li>\r\n<li>Provide technical insight about web-GIS on presentations, reports, conferences, and papers related to the project </li>\r\n<li>Develop and maintain the NOAH web-GIS portal</li>\r\n</ol>\r\n</p>'),
(23, '', '2014', 'globe', 'info', 'PhilGRSS Website (<a href="http://philgrss.org">http://philgrss.org</a>)', 'This is a website for the Philippine Geosciences and Remote Sensing Society (PhilGRSS), a group of experts in the field of Remote Sensing whose objective is to promote and advance the application of Remote Sensing in areas of education, industry, research, and public service for the Filipino people and the country.'),
(24, '', '2014', 'globe', 'info', 'Project NOAH 2.0 (<a href="http://beta.noah.dost.gov.ph">http://beta.noah.dost.gov.ph</a>)', 'Built with various open source technologies such as Python, Open Layers 3, Tornado Web, we used AngularJS as the framework for the web application.'),
(29, '', '2015', 'wrench', 'danger', 'Work: Project Manager for WebSAFE', '<p>DOST - Project NOAH</p>\r\n<p>As project manager to the development of WebSAFE (Web-based Scenario Assessment for Emergencies), it is my task to scout for new ways to improve the risk assessment tool for our country''s disaster managers. </p>'),
(30, '', '2015', 'globe', 'info', 'WebSAFE (<a href="http://beta.noah.dost.gov.ph">http://beta.noah.dost.gov.ph</a>)', 'Built with free and open source software InaSAFE, WebSAFE is an impact assessment tool used in the Philippines to calculate the needs of a community considering the effects of a particular hazard. This feature is accessible in the Project NOAH web app');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full-name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full-name`, `password`, `email`) VALUES
(2, 'f13cb688404d32b8e885b04b83993b5a', 'cabd3f07e2ee653c4cd7a27ec8aef851', 'd4bb8852424dd0b4a433fe54627d8d8f');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
