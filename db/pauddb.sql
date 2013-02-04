-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2013 at 10:38 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pauddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

DROP TABLE IF EXISTS `page_content`;
CREATE TABLE IF NOT EXISTS `page_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_type` enum('news','cms','visi','misi') NOT NULL DEFAULT 'cms',
  `titletags` varchar(255) NOT NULL,
  `metakey` varchar(255) NOT NULL,
  `metadesc` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sum` text NOT NULL,
  `descr` text NOT NULL,
  `createddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`id`, `page_type`, `titletags`, `metakey`, `metadesc`, `url`, `title`, `sum`, `descr`, `createddate`) VALUES
(1, 'visi', 'Bantuan', 'Bantuan', 'Bantuan', 'Bantuan', 'Bantuan', 'Visi6', 'Bantuan', '2013-01-29 00:00:00'),
(2, 'misi', 'misi2', 'misi', 'misi', 'misi', 'misi', 'misi', 'misi', '2013-01-09 00:00:00'),
(3, 'cms', 'Sejarah', 'ajajka', 'alajkaj', 'jbkjjkjh', 'hjhjkhk', 'jhjkhmisi', 'kjhkjkj', '2013-01-09 00:00:00'),
(4, 'cms', 'Bantuan', 'ajajka', 'alajkaj', 'jbkjjkjh', 'hjhjkhk', 'jhjkhmisi', 'kjhkjkj', '2013-01-09 00:00:00'),
(5, 'cms', 'Bantuan', 'ajajka', 'alajkaj', 'jbkjjkjh', 'hjhjkhk', 'jhjkhmisi', 'kjhkjkj', '2013-01-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_lastlogindate` datetime NOT NULL,
  `user_createddate` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_lastlogindate`, `user_createddate`) VALUES
(1, 'admin', 'e158843af981dc589768882974440a59a90c616d', '2012-12-30 19:10:51', '2012-12-09 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
