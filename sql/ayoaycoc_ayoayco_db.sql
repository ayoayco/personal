-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2016 at 09:50 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `options` (
  `option` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option`, `value`) VALUES
('', ''),
('url', 'http://ayoayco.com');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_post`
--

CREATE TABLE IF NOT EXISTS `timeline_post` (
  `id` int(11) NOT NULL,
  `month-day` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline_post`
--

INSERT INTO `timeline_post` (`id`, `month-day`, `year`, `icon`, `context`, `title`, `body`) VALUES
(8, 'Sometime in', '2006', 'gamepad', 'warning', 'Monk Dog (in C)', 'A game based on the fighting interface of the popular game called PokÃ©mon. Mostly text-based and equipped with a Life and a Mana bar to measure each of the fighting charactersâ€™ stats. '),
(9, 'Sometime in', '2007', 'gamepad', 'warning', 'Monk Dog (in Java)', 'A game based on the fighting interface of the popular game called PokÃ©mon; stand-alone game application, with a fully presentable Graphical User Interface'),
(10, 'Sometime in', '2009', 'gamepad', 'warning', 'Monk Dog (in PHP, HTML, JavaScript, CSS)', 'A game based on the fighting interface of the popular game called PokÃ©mon; made for the Web with a fully presentable Graphical User Interface.'),
(11, 'Sometime in', '2009', 'gamepad', 'warning', 'Rock Scissors Paper Game (in C)', 'Written in C programming language. Rock, Scissors, and Paper game played against the computer with a special Scoring System.'),
(12, 'Sometime in', '2010', 'puzzle-piece', 'success', 'Knight''s Tour (in Java and C)', 'A program that solves the ancient Knightâ€™s Tour problem using the Backtracking Algorithm.'),
(13, 'Sometime in', '2010', 'globe', 'info', 'iManage', 'A Web-based Management Information System software'),
(14, 'Sometime in', '2011', 'puzzle-piece', 'warning', 'Implementation of Various Loop Scheduling Algorithms on Desktop Grids', 'A study of the performances of various loop scheduling algorithms using a trivial case of an embarrassingly parallel problem as test bed over an increasing size of desktop grids. Programs are written in C Programming using Sockets.'),
(15, 'October', '2011', 'graduation-cap', 'success', 'Graduate: BS in Computer Science', '<p>University Of The Philippines (Los Ba&ntilde;os)</p>\r\n<p>Activities and Societies:\r\n<ol>\r\n<li>Graphic Literature Guild</li>\r\n<li>Harmonya: String Ensemble of UPLB</li>\r\n<li>Victory LB</li>\r\n</ol>\r\n</p>'),
(16, 'November 11', '2011', 'wrench', 'danger', 'Work: System Analyst', '<p>University of the Philippines Los BaÃ±os IT Center</p>\r\n<p>As a System Analyst / Developer, I do the following:</p>\r\n<p>\r\n<ol>\r\n<li>Develop programs to implement system design and produce software products</li>\r\n<li>Participate and assist in system analysis and design processes as well as testing, debugging, and deployment</li>\r\n<li>To perform other duties as instructed by the Vice Chancellor for Planning and Development or his designated representative</li>\r\n</ol>\r\n</p>'),
(17, 'Sometime in', '2012', 'globe', 'info', 'UPLB ICT-Audit', 'This is a web application used by the UP System to audit the different Information and Communication Technologies used by UP Constituents'),
(18, 'Sometime in', '2012', 'globe', 'info', 'UPLB DVSys', 'This is a web-based system used by the Accounting Office at UPLB for tracking Disbursement Vouchers of UPLB constituents '),
(19, 'Sometime in', '2011', 'globe', 'info', 'UPLB DocuTrack', 'Did maintenance and some additional features for this Web App. This is the Document tracking system used by UPLB employees to monitor the flow of documents in UPLB\r\n<p>\r\nURL: <a href="http://quinine.uplb.edu.ph">http://quinine.uplb.edu.ph</a>\r\n</p>'),
(22, 'July 14', '2014', 'wrench', 'danger', 'Work: IT Officer 2', 'As an IT Officer 2 for Project NOAH, I do research and implement web and GIS technologies, provide technical insight about web-GIS on presentations, reports, conferences, and papers, and develop or maintain the NOAH web-GIS portal\r\n<p>\r\nURL: <a href="http://noah.dost.gov.ph">http://noah.dost.gov.ph</a>\r\n</p>'),
(23, 'Sometime in', '2014', 'globe', 'info', 'PhilGRSS Website', 'This is a website for Remote Sensing experts whose objective is to promote and advance the application of their field in areas such as education, industry, research, and public service for the Philippines.\r\n<p>\r\nURL: <a href="http://philgrss.org">http://philgrss.org</a>\r\n</p>'),
(24, 'Sometime in', '2014', 'globe', 'info', 'Project NOAH 2.0', 'Built with various open source technologies such as Python, Open Layers 3, Tornado Web, we used AngularJS as the framework for the web application.\r\n<p>\r\nURL: <a href="http://noah.dost.gov.ph">http://noah.dost.gov.ph</a>\r\n</p>'),
(29, 'January', '2015', 'wrench', 'danger', 'Work: Project Manager for WebSAFE', 'As project manager to the development of WebSAFE (Web-based Scenario Assessment for Emergencies), it is my task to scout for new ways to improve the risk assessment tool for our country''s disaster managers.\r\n<p>\r\nURL: <a href="http://noah.dost.gov.ph">http://noah.dost.gov.ph</a>\r\n</p>'),
(30, 'Sometime in', '2015', 'globe', 'info', 'WebSAFE', 'An impact assessment tool for calculating needs of a community considering the effects of a particular hazard. Accessible in Project NOAH.\r\n<p>\r\nRead: <a href="http://news.abs-cbn.com/nation/12/11/15/project-noah-launches-websafe">In the news...</a>\r\n</p>'),
(31, 'January 25', '2016', 'wrench', 'danger', 'Work: Software Engineer for Infor', 'Infor builds business software for specific industries in the cloud. With 15,000 employees and over 90,000 customers, Infor software is designed for progress.\r\n<p>\r\nURL: <a href="http://infor.com">http://infor.com</a>\r\n<p>'),
(32, 'November', '2016', 'globe', 'info', 'Anti-Tobacco Industry Toolkit', 'This is a project for <a href="http://seatca.org/">SEATCA</a>, a multi-sectoral alliance established to support ASEAN countries in developing and implementing effective tobacco control policies.\r\n<p>\r\nURL: <a href="http://tobaccointerference.org/">http://tobaccointerference.org/</a>\r\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `full-name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full-name`, `password`, `email`) VALUES
(2, 'f13cb688404d32b8e885b04b83993b5a', 'cabd3f07e2ee653c4cd7a27ec8aef851', 'd4bb8852424dd0b4a433fe54627d8d8f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timeline_post`
--
ALTER TABLE `timeline_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timeline_post`
--
ALTER TABLE `timeline_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
