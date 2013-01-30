-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2013 at 11:40 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.1

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
-- Table structure for table `konsultasi_jawab`
--

DROP TABLE IF EXISTS `konsultasi_jawab`;
CREATE TABLE IF NOT EXISTS `konsultasi_jawab` (
  `id_jawab` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_tanya` char(3) NOT NULL,
  `jawaban` text NOT NULL,
  `penjawab` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_jawab`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `konsultasi_jawab`
--

INSERT INTO `konsultasi_jawab` (`id_jawab`, `id_tanya`, `jawaban`, `penjawab`, `tanggal`) VALUES
(0001, '001', 'Bebas. Jadi,Anda boleh pake sembarang program berbasis Visual. Contoh: VB,Delphi,Cpp dll', 'bunafit', '2009-10-10 09:09:22'),
(0002, '012', 'belajar bego.......web sialan..masih aja ada erornya........gimana niiiiiiiiii???????????????????', 'Monster', '2009-12-11 21:33:47'),
(0003, '001', 'belajar begooooooooooooo', 'Monster', '2009-12-12 22:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_tanya`
--

DROP TABLE IF EXISTS `konsultasi_tanya`;
CREATE TABLE IF NOT EXISTS `konsultasi_tanya` (
  `id_tanya` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `kd_matakuliah` char(4) NOT NULL,
  `pertanyaan` text NOT NULL,
  `penanya` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_tanya`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `konsultasi_tanya`
--

INSERT INTO `konsultasi_tanya` (`id_tanya`, `kd_matakuliah`, `pertanyaan`, `penanya`, `tanggal`) VALUES
(001, 'M001', 'Untuk tugas, apakah boleh digarap dengan Delphi?', 'nobon', '2008-01-18 22:38:58'),
(002, 'M001', 'Pak, bagaimana sistem penilaian untuk matakuliah ini?', 'hesti', '2008-01-19 05:54:46'),
(003, 'M001', 'Minta Delphi versi 2007 boleh? dimana kami mengambil?', 'indah', '2008-01-19 05:56:00'),
(005, 'M001', 'fg', 'fgfg', '2009-10-10 09:21:55'),
(006, 'M002', 'fgh', 'fgh', '2009-10-10 09:23:45'),
(007, 'M003', 'fgfdg', 'fdgdfgdfg', '2009-10-10 09:25:27'),
(008, 'M003', 'fdgdfg', 'werewrewrewr', '2009-10-10 09:27:12'),
(009, 'M003', 'fdg', 'bnmnbm', '2009-10-10 09:28:13'),
(010, 'M003', 'fdg', 'bnmnbm', '2009-10-10 09:30:34'),
(011, 'M001', '123123123', '213213213123', '2009-10-10 09:30:45'),
(012, 'M001', 'gimana ini?????????????', 'manusia', '2009-12-11 21:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

DROP TABLE IF EXISTS `kuis`;
CREATE TABLE IF NOT EXISTS `kuis` (
  `id_kuis` int(4) NOT NULL AUTO_INCREMENT,
  `soal` varchar(100) NOT NULL,
  `jawab_a` varchar(60) NOT NULL,
  `jawab_b` varchar(60) NOT NULL,
  `jawab_c` varchar(60) NOT NULL,
  `jawab_d` varchar(60) NOT NULL,
  `kunci` enum('A','B','C','D') NOT NULL,
  PRIMARY KEY (`id_kuis`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `kuis`
--

INSERT INTO `kuis` (`id_kuis`, `soal`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `kunci`) VALUES
(27, 'Komponen J2ME yang digunakan untuk menggambarkan gambar maupun string pada layar adalah ...     ', 'Graphics', 'Screen', 'Item', 'Gauge', 'A'),
(28, 'Yang merupakan subkelas dari displayable yang menggunakan antarmuka grafis level rendah adalah ...  ', 'Screen', 'Alert', 'Form', 'Canvas', 'D'),
(29, 'Elemen grafik untuk menaikkan atau menurunkan sebuah nilai dalam sebuah objek form adalah ...      ', 'Alert', 'List', 'Gauge', 'Command', 'C'),
(30, 'Berikut ini adalah komponen-komponen J2ME yang termasuk dalam High Level API kecuali ...      ', 'Screen', 'Form', 'Canvas', 'Item', 'C'),
(31, 'apakah anda gila ?\r\n      ', 'yah betul', 'tidak betul', 'okee', 'mantab', 'A'),
(26, 'Komponen J2ME yang digunakan untuk menu multiple choice adalah ...      ', 'Gauge', 'Forum', 'List', 'Screen', 'C'),
(24, 'Spesifikasi untuk sebuah profil J2ME adalah ..      ', 'MIDlet', 'MIDP', 'Configuration ', 'CDC', 'B'),
(25, 'Dibawah ini yang merupakan user interface pada MIDlet adalah ...      ', 'KVM', 'Low Level API', 'Display', 'Displayable', 'B'),
(23, 'Fungsi dari folder res pada struktur direktori MIDlet adalah sebagai berikut ...      ', 'Menyimpan source code', 'Menyimpan sumber daya seperti gambar icon', 'Menyimpan file JAR atau ZIP', 'Menyimpan file manifest', 'B'),
(22, 'Dalam J2ME telah didefinisikan dua buah configuration yaitu ...   ', 'MIDlet dan MIDP', 'CDC dan CLDC', 'MIDP 1.0 dan MIDP 2.0', 'KVM dan JVM', 'B'),
(20, 'Bahasa pemrograman J2ME didesain untuk meletakkan perangkat lunak Java pada ...                 ', 'Aplikasi Desktop', 'Aplikasi Mobile', 'Aplikasi Web', 'Server-Side Web', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

DROP TABLE IF EXISTS `materi`;
CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `kd_matakuliah` char(4) NOT NULL,
  `bab_nama` varchar(60) NOT NULL,
  `bab_judul` varchar(100) NOT NULL,
  `definisi` text NOT NULL,
  `file_data` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `kd_matakuliah`, `bab_nama`, `bab_judul`, `definisi`, `file_data`, `tanggal`) VALUES
(0014, 'M001', 'Bab 1', 'Pembahasan J2ME', 'Belajar  ', 'M001.Contoh Program Komponen J2ME.rar', '2009-12-12 22:49:27'),
(0012, 'M003', 'Bab 3', 'Database J2ME', 'ruang lingkup  ', 'M003.Contoh Program Database J2ME.rar', '2009-12-11 22:29:47'),
(0013, 'M001', 'Bab 1', 'Pembahasan J2ME', 'Belajar  ', 'M001.Contoh Program Komponen J2ME.rar', '2009-12-12 22:48:52');

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
  `photo` varchar(255) NOT NULL,
  `user_lastlogindate` datetime NOT NULL,
  `user_createddate` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `photo`, `user_lastlogindate`, `user_createddate`) VALUES
(1, 'admin', 'e158843af981dc589768882974440a59a90c616d', '', '2012-12-30 19:10:51', '2012-12-09 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
