-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2012 at 10:31 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_me`
--

CREATE TABLE IF NOT EXISTS `chat_me` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `message` mediumtext,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `chat_me`
--

INSERT INTO `chat_me` (`id`, `username`, `message`, `date`) VALUES
(87, 'dedy', '', '2012-05-27'),
(88, 'dedy', 'dedy kurniadi', '2012-05-28'),
(86, 'kurniadi', 'lha opo??', '2012-05-27'),
(85, 'dedy', 'lha yo', '2012-05-27'),
(84, 'dedy', 'enak emg ok', '2012-05-27'),
(89, 'dedy', 'isi chat', '2012-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(4, 'kurniadi', 'f3770595e0cb4d9a988bd5da98d2187d', 'off'),
(3, 'dedy', 'f3770595e0cb4d9a988bd5da98d2187d', 'on');
