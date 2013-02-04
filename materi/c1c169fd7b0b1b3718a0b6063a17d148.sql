-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2013 at 06:24 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sijerodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

DROP TABLE IF EXISTS `access`;
CREATE TABLE IF NOT EXISTS `access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access_name` varchar(255) NOT NULL,
  `access_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `access_name`, `access_desc`) VALUES
(1, 'User Management', ''),
(2, 'Blok', ''),
(3, 'NIR', ''),
(4, 'ZNT', '');

-- --------------------------------------------------------

--
-- Table structure for table `blok_detail`
--

DROP TABLE IF EXISTS `blok_detail`;
CREATE TABLE IF NOT EXISTS `blok_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lurah_id` int(11) DEFAULT NULL,
  `kode_blok` char(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0' COMMENT '0 => Tidak Ada, 1 => Ada',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blok_detail`
--

INSERT INTO `blok_detail` (`id`, `lurah_id`, `kode_blok`, `status`) VALUES
(1, 11, '004', 1),
(2, 11, '002', 1),
(3, 11, '001', 0),
(4, 11, '003', 1);

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
CREATE TABLE IF NOT EXISTS `configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) NOT NULL,
  `option_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `option_name`, `option_value`) VALUES
(1, 'AREA', '1'),
(2, 'PAGEITEM', '20'),
(3, 'FORMATDATE', 'Y-m-d H:i:s'),
(4, 'EMAIL_ADDR', 'asutarko@yahoo.com.sg'),
(5, 'COOKIE EXPIRE', '3200'),
(6, 'SMTP', '{"host":"smtp.gmail.com","ssl":"1","port":"aaa","user":"aaa","pwd":"ptskp222"}');

-- --------------------------------------------------------

--
-- Table structure for table `dbkb`
--

DROP TABLE IF EXISTS `dbkb`;
CREATE TABLE IF NOT EXISTS `dbkb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wilayah_id` int(11) NOT NULL,
  `dbkb_type` char(2) NOT NULL,
  `dbkb_jpb` char(2) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `star_id` int(11) NOT NULL,
  `tangki_id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='DBKB Standard & Non Standard' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dbkb`
--

INSERT INTO `dbkb` (`id`, `wilayah_id`, `dbkb_type`, `dbkb_jpb`, `hotel_id`, `star_id`, `tangki_id`, `tahun`, `kelas`) VALUES
(1, 1, '2', '4', 0, 0, 0, 2012, 1),
(2, 1, '2', '2', 0, 0, 0, 0, 0),
(3, 1, '2', '2', 0, 0, 0, 0, 0),
(4, 1, '2', '2', 0, 0, 0, 0, 0),
(5, 1, '2', '2', 0, 0, 0, 0, 0),
(6, 1, '2', '2', 0, 0, 0, 2003, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dbkb_detail`
--

DROP TABLE IF EXISTS `dbkb_detail`;
CREATE TABLE IF NOT EXISTS `dbkb_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbkb_id` int(11) NOT NULL,
  `min_value` int(11) NOT NULL,
  `max_value` int(11) NOT NULL,
  `old_value` int(11) NOT NULL,
  `new_value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dbkb_detail`
--

INSERT INTO `dbkb_detail` (`id`, `dbkb_id`, `min_value`, `max_value`, `old_value`, `new_value`) VALUES
(1, 3, 1, 2, 2, 1),
(2, 4, 1, 2, 3, 4),
(3, 5, 1, 1, 1, 1),
(4, 6, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dbkb_detail2`
--

DROP TABLE IF EXISTS `dbkb_detail2`;
CREATE TABLE IF NOT EXISTS `dbkb_detail2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbkb_id` int(11) NOT NULL,
  `width_min` int(11) NOT NULL,
  `width_max` int(11) NOT NULL,
  `height_min` int(11) NOT NULL,
  `height_max` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dbkb_detail3`
--

DROP TABLE IF EXISTS `dbkb_detail3`;
CREATE TABLE IF NOT EXISTS `dbkb_detail3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbkb_id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `old_value` int(11) NOT NULL,
  `new_value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dbkb_detail4`
--

DROP TABLE IF EXISTS `dbkb_detail4`;
CREATE TABLE IF NOT EXISTS `dbkb_detail4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbkb_id` int(11) NOT NULL,
  `contructor` varchar(255) NOT NULL,
  `min_value` int(11) NOT NULL,
  `max_value` int(11) NOT NULL,
  `old_value` int(11) NOT NULL,
  `new_value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dbkb_detail5`
--

DROP TABLE IF EXISTS `dbkb_detail5`;
CREATE TABLE IF NOT EXISTS `dbkb_detail5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbkb_id` int(11) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `old_value` int(11) NOT NULL,
  `new_value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dbkb_detail6`
--

DROP TABLE IF EXISTS `dbkb_detail6`;
CREATE TABLE IF NOT EXISTS `dbkb_detail6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbkb_id` int(11) NOT NULL,
  `old_value` int(11) NOT NULL,
  `new_value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `group_access`
--

DROP TABLE IF EXISTS `group_access`;
CREATE TABLE IF NOT EXISTS `group_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_group` varchar(100) DEFAULT NULL,
  `group_desc` text,
  `group_createddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `group_access`
--

INSERT INTO `group_access` (`id`, `nama_group`, `group_desc`, `group_createddate`) VALUES
(1, 'Super Administrator', 'This user is full control', '0000-00-00 00:00:00'),
(2, 'Administrator', 'This user is admin', '0000-00-00 00:00:00'),
(3, 'GFGFHFG', 'GFGFH', '2012-12-12 12:13:49'),
(4, 'WWWW', 'WWWW', '2012-12-12 12:14:45'),
(5, 'GFGFHFG', 'HGJHG', '2012-12-12 12:15:15'),
(6, 'jhjh', 'sss', '2012-12-12 13:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_createddate` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `type` enum('warn','info','Pending') NOT NULL DEFAULT 'info',
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `log_createddate`, `user_id`, `ip_address`, `type`, `description`) VALUES
(1, '2012-12-17 12:04:33', 1, '127.0.0.1', 'info', 'Update Configuration'),
(2, '2012-12-17 12:18:42', 1, '127.0.0.1', 'info', 'Update Configuration'),
(3, '2012-12-17 15:47:34', 1, '127.0.0.1', 'info', 'Update Configuration');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mst_atap`
--

DROP TABLE IF EXISTS `mst_atap`;
CREATE TABLE IF NOT EXISTS `mst_atap` (
  `atap_id` int(11) NOT NULL AUTO_INCREMENT,
  `atap` varchar(255) NOT NULL,
  PRIMARY KEY (`atap_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mst_atap`
--

INSERT INTO `mst_atap` (`atap_id`, `atap`) VALUES
(1, 'Decrabon/Beton/GTG Glazur'),
(2, 'GTG Beton Alumunium'),
(3, 'GTG Biasa/Sirap'),
(4, 'Asbes'),
(5, 'Seng');

-- --------------------------------------------------------

--
-- Table structure for table `mst_bahanpagar`
--

DROP TABLE IF EXISTS `mst_bahanpagar`;
CREATE TABLE IF NOT EXISTS `mst_bahanpagar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bahan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mst_bahanpagar`
--

INSERT INTO `mst_bahanpagar` (`id`, `bahan`) VALUES
(1, 'Baja/Besi'),
(2, 'Bata/Batako');

-- --------------------------------------------------------

--
-- Table structure for table `mst_bank`
--

DROP TABLE IF EXISTS `mst_bank`;
CREATE TABLE IF NOT EXISTS `mst_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mst_bintang`
--

DROP TABLE IF EXISTS `mst_bintang`;
CREATE TABLE IF NOT EXISTS `mst_bintang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `star_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mst_bintang`
--

INSERT INTO `mst_bintang` (`id`, `code`, `star_name`) VALUES
(1, 0, 'Non Bintang'),
(2, 1, 'Bintang 5'),
(3, 2, 'Bintang 4'),
(4, 3, 'Bintang 3'),
(5, 4, 'Bintang 1-2'),
(6, 4, 'Bintang 1-2');

-- --------------------------------------------------------

--
-- Table structure for table `mst_camat`
--

DROP TABLE IF EXISTS `mst_camat`;
CREATE TABLE IF NOT EXISTS `mst_camat` (
  `id` int(11) NOT NULL,
  `dati2_id` int(11) NOT NULL,
  `nama_camat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_camat`
--

INSERT INTO `mst_camat` (`id`, `dati2_id`, `nama_camat`) VALUES
(11, 13, 'Bantar Gebang'),
(12, 13, 'Bekasi Barat'),
(13, 13, 'Bekasi Selatan'),
(14, 13, 'Bekasi Timur'),
(15, 13, 'Bekasi Utara'),
(16, 13, 'Jatiasih'),
(17, 13, 'Medan Satria'),
(18, 13, 'Mustika Jaya'),
(19, 13, 'Pondok Gede'),
(20, 13, 'Rawalumbu'),
(21, 11, 'Cengkareng'),
(22, 11, 'Kalideres'),
(23, 12, 'Cakung'),
(24, 12, 'Duren Sawit'),
(25, 13, 'Jati Sampurna'),
(26, 13, 'Pondok Melatti');

-- --------------------------------------------------------

--
-- Table structure for table `mst_constructor`
--

DROP TABLE IF EXISTS `mst_constructor`;
CREATE TABLE IF NOT EXISTS `mst_constructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `constructor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mst_constructor`
--

INSERT INTO `mst_constructor` (`id`, `constructor`) VALUES
(1, 'Baja'),
(2, 'Beton'),
(3, 'Batu Bata'),
(4, 'Kayu');

-- --------------------------------------------------------

--
-- Table structure for table `mst_dati2`
--

DROP TABLE IF EXISTS `mst_dati2`;
CREATE TABLE IF NOT EXISTS `mst_dati2` (
  `id` int(11) NOT NULL,
  `propinsi_id` int(11) NOT NULL,
  `nama_dati2` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_dati2`
--

INSERT INTO `mst_dati2` (`id`, `propinsi_id`, `nama_dati2`) VALUES
(11, 11, 'Jakarta Barat'),
(12, 11, 'Jakarta Timur'),
(13, 12, 'Bekasi'),
(14, 12, 'Cirebon');

-- --------------------------------------------------------

--
-- Table structure for table `mst_dinding`
--

DROP TABLE IF EXISTS `mst_dinding`;
CREATE TABLE IF NOT EXISTS `mst_dinding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dinding` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mst_dinding`
--

INSERT INTO `mst_dinding` (`id`, `dinding`) VALUES
(1, 'Kaca/Window'),
(2, 'Beton'),
(3, 'Batubata/Conblok'),
(4, 'Kayu'),
(5, 'Seng'),
(6, 'Tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `mst_finish_kolamrenang`
--

DROP TABLE IF EXISTS `mst_finish_kolamrenang`;
CREATE TABLE IF NOT EXISTS `mst_finish_kolamrenang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `finish_kolam` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mst_finish_kolamrenang`
--

INSERT INTO `mst_finish_kolamrenang` (`id`, `finish_kolam`) VALUES
(1, 'Diplester'),
(2, 'Dengan Pelapis');

-- --------------------------------------------------------

--
-- Table structure for table `mst_formulir`
--

DROP TABLE IF EXISTS `mst_formulir`;
CREATE TABLE IF NOT EXISTS `mst_formulir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formulir_type` char(1) NOT NULL,
  `formulir_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mst_formulir`
--

INSERT INTO `mst_formulir` (`id`, `formulir_type`, `formulir_name`) VALUES
(1, 'S', 'SPOP'),
(2, 'L', 'LSPOP');

-- --------------------------------------------------------

--
-- Table structure for table `mst_hotel`
--

DROP TABLE IF EXISTS `mst_hotel`;
CREATE TABLE IF NOT EXISTS `mst_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_hotel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mst_hotel`
--

INSERT INTO `mst_hotel` (`id`, `jenis_hotel`) VALUES
(1, 'Non Resort'),
(2, 'Resort');

-- --------------------------------------------------------

--
-- Table structure for table `mst_jalan_standard`
--

DROP TABLE IF EXISTS `mst_jalan_standard`;
CREATE TABLE IF NOT EXISTS `mst_jalan_standard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kanwil_id` int(11) NOT NULL,
  `jln_sementara` varchar(255) NOT NULL,
  `jalan_standard` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mst_jpb`
--

DROP TABLE IF EXISTS `mst_jpb`;
CREATE TABLE IF NOT EXISTS `mst_jpb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(2) NOT NULL,
  `jpb_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `mst_jpb`
--

INSERT INTO `mst_jpb` (`id`, `code`, `jpb_name`) VALUES
(1, '01', 'Perumahaan'),
(2, '02', 'Perkantoran Swasta'),
(3, '03', 'Pabrik'),
(4, '04', 'Toko/Apotik/Pasar/Ruko'),
(5, '05', 'Rumah Sakit/Klinik'),
(6, '06', 'Olahraga/Rekreasi'),
(7, '07', 'Hotel/Wisma'),
(8, '08', 'Bengkel/Gudang/Pertanian'),
(9, '09', 'Gedung Pemerintah'),
(10, '10', 'Lain-lain'),
(11, '11', 'Bangunan tidak kena pajak'),
(12, '12', 'Bangunan Parkr'),
(13, '13', 'Apartemen'),
(14, '14', 'Pompa Bensin'),
(15, '15', 'Tangki Minyak'),
(16, '16', 'Gedung Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kanwil`
--

DROP TABLE IF EXISTS `mst_kanwil`;
CREATE TABLE IF NOT EXISTS `mst_kanwil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kanwil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mst_kanwil`
--

INSERT INTO `mst_kanwil` (`id`, `kanwil`) VALUES
(1, 'VII DJP JAWA BARAT'),
(2, 'VII DJP DKI JAKARTA');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kelas`
--

DROP TABLE IF EXISTS `mst_kelas`;
CREATE TABLE IF NOT EXISTS `mst_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mst_kelas`
--

INSERT INTO `mst_kelas` (`id`, `kelas`) VALUES
(1, 'Kelas 1'),
(2, 'Kelas 2'),
(3, 'Kelas 3'),
(4, 'Kelas 4');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kondisi_bangunan`
--

DROP TABLE IF EXISTS `mst_kondisi_bangunan`;
CREATE TABLE IF NOT EXISTS `mst_kondisi_bangunan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kondisi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mst_kondisi_bangunan`
--

INSERT INTO `mst_kondisi_bangunan` (`id`, `kondisi`) VALUES
(1, 'Sangat Baik'),
(2, 'Baik'),
(3, 'Sedang'),
(4, 'Jelek');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kppbb`
--

DROP TABLE IF EXISTS `mst_kppbb`;
CREATE TABLE IF NOT EXISTS `mst_kppbb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kppbb` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mst_kppbb`
--

INSERT INTO `mst_kppbb` (`id`, `kppbb`) VALUES
(1, 'BEKASI'),
(2, 'Kebon Baru'),
(3, 'TASIKMALAYA'),
(4, 'SUKABUMI'),
(5, 'KRAMAT JATI');

-- --------------------------------------------------------

--
-- Table structure for table `mst_land`
--

DROP TABLE IF EXISTS `mst_land`;
CREATE TABLE IF NOT EXISTS `mst_land` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `land_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mst_land`
--

INSERT INTO `mst_land` (`id`, `code`, `land_type`) VALUES
(1, 1, 'Tanah dan Bangunan'),
(2, 2, 'Kavling Siap Bangun'),
(3, 3, 'Tanah kosong'),
(4, 4, 'Fasilitas Umum ');

-- --------------------------------------------------------

--
-- Table structure for table `mst_langit`
--

DROP TABLE IF EXISTS `mst_langit`;
CREATE TABLE IF NOT EXISTS `mst_langit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `langit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mst_langit`
--

INSERT INTO `mst_langit` (`id`, `langit`) VALUES
(1, 'Akustik/Jati'),
(2, 'Triplek/Asbes Bambu'),
(3, 'Tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `mst_lantai`
--

DROP TABLE IF EXISTS `mst_lantai`;
CREATE TABLE IF NOT EXISTS `mst_lantai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lantai` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mst_lantai`
--

INSERT INTO `mst_lantai` (`id`, `lantai`) VALUES
(1, 'Marmer'),
(2, 'Keramik'),
(3, 'Teraso'),
(4, 'Ubin PC/Papan'),
(5, 'Semen');

-- --------------------------------------------------------

--
-- Table structure for table `mst_lurah`
--

DROP TABLE IF EXISTS `mst_lurah`;
CREATE TABLE IF NOT EXISTS `mst_lurah` (
  `id` int(11) NOT NULL,
  `camat_id` int(11) NOT NULL,
  `nama_lurah` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_lurah`
--

INSERT INTO `mst_lurah` (`id`, `camat_id`, `nama_lurah`) VALUES
(11, 21, 'Kedaung Kali Angke'),
(12, 21, 'Kapuk'),
(13, 22, 'Kalideres'),
(14, 22, 'Pegadungan'),
(15, 23, 'Jatinegara'),
(16, 23, 'Pulo Gebang'),
(17, 24, 'Pondok Kopi'),
(18, 24, 'Klender'),
(19, 11, 'Bantar Gebang'),
(20, 11, 'Cikiwul'),
(21, 11, 'Ciketing Udik'),
(22, 11, 'Sumur Batu'),
(23, 12, 'Kota Baru'),
(24, 12, 'Bintara'),
(25, 12, 'Kranji'),
(26, 12, 'Bintara Jaya'),
(27, 12, 'Jaka Sampurna'),
(28, 13, 'Margajaya'),
(29, 13, 'Kayuringin Jaya'),
(30, 13, 'Jaka Mulya'),
(31, 13, 'Jaka Setia'),
(32, 13, 'Pekayon Jaya'),
(33, 14, 'Aren Jaya'),
(34, 14, 'Duren Jaya'),
(35, 14, 'Bekasi Jaya'),
(36, 14, 'Margahayu'),
(37, 15, 'Teluk Pucung'),
(38, 15, 'Perwira'),
(39, 15, 'Harapan Baru'),
(40, 15, 'Harapan Jaya'),
(41, 15, 'Kali Abang Tengah'),
(42, 15, 'Marga Mulya'),
(43, 16, 'Jatikramat'),
(44, 16, 'Jati Mekar'),
(45, 16, 'Jatiasih'),
(46, 16, 'Jatirasa'),
(47, 16, 'Jatiluhur'),
(48, 16, 'Jatisari'),
(49, 17, 'Pejuang'),
(50, 17, 'Medan Satria'),
(51, 17, 'Kali Baru'),
(52, 17, 'Harapan Mulya'),
(53, 18, 'Cimuning'),
(54, 18, 'Pedurenan'),
(55, 18, 'Mustika Sari'),
(56, 18, 'Mustika Jaya'),
(57, 19, 'Jaticempaka'),
(58, 19, 'Jatiwaringin'),
(59, 19, 'Jatibening'),
(60, 19, 'Jatibening Baru'),
(61, 19, 'Jatimakmur'),
(62, 20, 'Sepanjang Jaya'),
(63, 20, 'Pengasinan'),
(64, 20, 'Bojong Rawalumbu'),
(65, 20, 'Bojong Menteng'),
(66, 25, 'Jatirangon'),
(67, 25, 'Jatiraden'),
(68, 25, 'Jatisampurna'),
(69, 25, 'Jatirangga'),
(70, 25, 'Jatikarya'),
(71, 26, 'Jati Rahayu'),
(72, 26, 'Jatimelati'),
(73, 26, 'Jatiwarna'),
(74, 26, 'Jatimurni');

-- --------------------------------------------------------

--
-- Table structure for table `mst_propinsi`
--

DROP TABLE IF EXISTS `mst_propinsi`;
CREATE TABLE IF NOT EXISTS `mst_propinsi` (
  `id` int(11) NOT NULL,
  `nama_propinsi` varchar(255) DEFAULT NULL COMMENT 'Province Name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_propinsi`
--

INSERT INTO `mst_propinsi` (`id`, `nama_propinsi`) VALUES
(11, 'Jakarta'),
(12, 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

DROP TABLE IF EXISTS `mst_subject`;
CREATE TABLE IF NOT EXISTS `mst_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`id`, `code`, `subject`) VALUES
(1, 1, 'Pemilik'),
(2, 2, 'Penyewa'),
(3, 4, 'Pemakai'),
(4, 5, 'Sengketa');

-- --------------------------------------------------------

--
-- Table structure for table `mst_tangki`
--

DROP TABLE IF EXISTS `mst_tangki`;
CREATE TABLE IF NOT EXISTS `mst_tangki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_tangki` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mst_tipe`
--

DROP TABLE IF EXISTS `mst_tipe`;
CREATE TABLE IF NOT EXISTS `mst_tipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mst_tipe`
--

INSERT INTO `mst_tipe` (`id`, `kelas`) VALUES
(1, 'Tipe 1'),
(2, 'Tipe 2'),
(3, 'Tipe 3'),
(4, 'Tipe 4');

-- --------------------------------------------------------

--
-- Table structure for table `mst_transkasi_spop`
--

DROP TABLE IF EXISTS `mst_transkasi_spop`;
CREATE TABLE IF NOT EXISTS `mst_transkasi_spop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `transcation_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mst_transkasi_spop`
--

INSERT INTO `mst_transkasi_spop` (`id`, `code`, `transcation_type`) VALUES
(1, 11, 'Perekaman Data OP'),
(2, 12, 'Permutakhiran Data OP'),
(3, 13, 'Penghapusan OP'),
(4, 14, 'Penghapusan Status OP Bersama'),
(5, 21, 'Perekaman Data Bangunan'),
(6, 22, 'Permutakhiran Data Bangunan'),
(7, 23, 'Penghapusan Data Bangunan'),
(8, 24, 'Pernilaian Individu ');

-- --------------------------------------------------------

--
-- Table structure for table `mst_work`
--

DROP TABLE IF EXISTS `mst_work`;
CREATE TABLE IF NOT EXISTS `mst_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `work` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mst_work`
--

INSERT INTO `mst_work` (`id`, `code`, `work`) VALUES
(1, 0, 'Lainnya'),
(2, 1, 'PNS'),
(3, 2, 'ABRI'),
(4, 3, 'Pensiunan'),
(5, 4, 'Badan'),
(6, 5, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `mst_znt`
--

DROP TABLE IF EXISTS `mst_znt`;
CREATE TABLE IF NOT EXISTS `mst_znt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `znt` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `mst_znt`
--

INSERT INTO `mst_znt` (`id`, `znt`) VALUES
(1, 'AA'),
(2, 'AB'),
(3, 'AC'),
(4, 'AD'),
(5, 'AE'),
(6, 'AF'),
(7, 'AG'),
(8, 'AH'),
(9, 'AI'),
(10, 'AJ'),
(11, 'AK'),
(12, 'AL'),
(13, 'AM'),
(14, 'AN'),
(15, 'AO'),
(16, 'AP'),
(17, 'AQ'),
(18, 'AR'),
(19, 'AS'),
(20, 'AT'),
(21, 'AU'),
(22, 'AV'),
(23, 'AW'),
(24, 'AX'),
(25, 'AY'),
(26, 'AZ'),
(33, 'BA'),
(34, 'BB'),
(35, 'BC'),
(36, 'BD'),
(37, 'BE'),
(38, 'BF'),
(39, 'BG'),
(40, 'BH'),
(41, 'BI'),
(42, 'BJ'),
(43, 'BK'),
(44, 'BL'),
(45, 'BM'),
(46, 'BN'),
(47, 'BO'),
(48, 'BP'),
(49, 'BQ'),
(50, 'BR'),
(51, 'BS'),
(52, 'BT'),
(53, 'BU'),
(54, 'BV'),
(55, 'BW'),
(56, 'BX'),
(57, 'BY'),
(58, 'BZ'),
(59, 'CA'),
(60, 'CB'),
(61, 'CC'),
(62, 'CD'),
(63, 'CE'),
(64, 'CF'),
(65, 'CG'),
(66, 'CH'),
(67, 'CI'),
(68, 'CJ'),
(69, 'CK'),
(70, 'CL'),
(71, 'CM'),
(72, 'CN'),
(73, 'CO'),
(74, 'CP'),
(75, 'CQ'),
(76, 'CR'),
(77, 'CS'),
(78, 'CT'),
(79, 'CU'),
(80, 'CV'),
(81, 'CW'),
(82, 'CX'),
(83, 'CY'),
(84, 'CZ'),
(85, 'DA'),
(86, 'DB'),
(87, 'DC'),
(88, 'DD'),
(89, 'DE'),
(90, 'DF'),
(91, 'DG'),
(92, 'DH'),
(93, 'DI'),
(94, 'DJ'),
(95, 'DK'),
(96, 'DL'),
(97, 'DM'),
(98, 'DN'),
(99, 'DO'),
(100, 'DP'),
(101, 'DQ'),
(102, 'DR'),
(103, 'DS'),
(104, 'DT'),
(105, 'DU'),
(106, 'DV'),
(107, 'DW'),
(108, 'DX'),
(109, 'DY'),
(110, 'DZ'),
(111, 'EA'),
(112, 'EB'),
(113, 'EC'),
(114, 'ED'),
(115, 'EE'),
(116, 'EF'),
(117, 'EG'),
(118, 'EH'),
(119, 'EI'),
(120, 'EJ'),
(121, 'EK'),
(122, 'EL'),
(123, 'EM'),
(124, 'EN'),
(125, 'EO'),
(126, 'EP'),
(127, 'EQ'),
(128, 'ER'),
(129, 'ES'),
(130, 'ET'),
(131, 'EU'),
(132, 'EV'),
(133, 'EW'),
(134, 'EX'),
(135, 'EY'),
(136, 'EZ'),
(137, 'FA'),
(138, 'FB'),
(139, 'FC'),
(140, 'FD'),
(141, 'FE'),
(142, 'FF'),
(143, 'FG'),
(144, 'FH'),
(145, 'FI'),
(146, 'FJ'),
(147, 'FK'),
(148, 'FL'),
(149, 'FM'),
(150, 'FN'),
(151, 'FO'),
(152, 'FP'),
(153, 'FQ'),
(154, 'FR'),
(155, 'FS'),
(156, 'FT'),
(157, 'FU'),
(158, 'FV'),
(159, 'FW'),
(160, 'FX'),
(161, 'FY'),
(162, 'FZ'),
(163, 'GA'),
(164, 'GB'),
(165, 'GC'),
(166, 'GD'),
(167, 'GE'),
(168, 'GF'),
(169, 'GG'),
(170, 'GH'),
(171, 'GI'),
(172, 'GJ'),
(173, 'GK'),
(174, 'GL'),
(175, 'GM'),
(176, 'GN'),
(177, 'GO'),
(178, 'GP'),
(179, 'GQ'),
(180, 'GR'),
(181, 'GS'),
(182, 'GT'),
(183, 'GU'),
(184, 'GV'),
(185, 'GW'),
(186, 'GX'),
(187, 'GY'),
(188, 'GZ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `user_lastlogindate` datetime NOT NULL,
  `user_createddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `fullname`, `nip`, `user_pass`, `user_lastlogindate`, `user_createddate`) VALUES
(1, 'admin', 'andre', '22801979', 'e158843af981dc589768882974440a59a90c616d', '2013-01-22 17:11:33', '2012-11-17 00:00:00'),
(2, 'Sutarko', 'Sutarko2', '45456465456464', 'e158843af981dc589768882974440a59a90c616d', '2013-01-24 21:00:09', '2012-12-11 15:11:20'),
(3, 'anita123', 'anita', '6565565675675675', 'e158843af981dc589768882974440a59a90c616d', '0000-00-00 00:00:00', '2012-12-19 10:17:43'),
(4, 'user', 'user login', '123456', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2013-01-29 16:17:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

DROP TABLE IF EXISTS `user_access`;
CREATE TABLE IF NOT EXISTS `user_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `nama_akses` varchar(255) DEFAULT NULL,
  `tambah` enum('','Yes','No') DEFAULT NULL,
  `edit` enum('','Yes','No') DEFAULT NULL,
  `hapus` enum('','Yes','No') DEFAULT NULL,
  `view` enum('','Yes','No') NOT NULL DEFAULT 'Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `group_id`, `nama_akses`, `tambah`, `edit`, `hapus`, `view`) VALUES
(1, 1, 'User Management', 'Yes', 'Yes', 'Yes', 'Yes'),
(2, 1, 'Blok', 'Yes', 'Yes', 'Yes', 'Yes'),
(3, 1, 'NIR', 'Yes', 'Yes', 'Yes', 'Yes'),
(4, 1, 'ZNT', 'Yes', 'Yes', 'Yes', 'Yes'),
(5, 3, 'User Management', 'No', 'No', 'No', 'No'),
(6, 3, 'Blok', 'No', 'Yes', 'No', 'No'),
(7, 3, 'NIR', 'No', 'No', 'Yes', 'No'),
(8, 3, 'ZNT', 'No', 'No', 'No', 'No'),
(9, 4, 'User Management', 'No', 'No', 'No', 'No'),
(10, 4, 'Blok', 'No', 'No', 'No', 'No'),
(11, 4, 'NIR', 'No', 'No', 'No', 'No'),
(12, 4, 'ZNT', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `group_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(8, 8, 2),
(14, 14, 1),
(15, 15, 1),
(16, 16, 2),
(17, 17, 3),
(18, 18, 2),
(19, 2, 3),
(20, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

DROP TABLE IF EXISTS `wilayah`;
CREATE TABLE IF NOT EXISTS `wilayah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kanwil_id` int(11) NOT NULL,
  `kppbb_id` int(255) NOT NULL,
  `propinsi_id` int(11) NOT NULL,
  `dati2_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Informasi Kantor per propinsi dan dati2' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `kanwil_id`, `kppbb_id`, `propinsi_id`, `dati2_id`) VALUES
(1, 1, 1, 12, 13),
(2, 1, 2, 12, 14);

-- --------------------------------------------------------

--
-- Table structure for table `znt_detail`
--

DROP TABLE IF EXISTS `znt_detail`;
CREATE TABLE IF NOT EXISTS `znt_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blok_id` varchar(50) NOT NULL,
  `urut` varchar(4) NOT NULL,
  `znt` varchar(100) NOT NULL,
  `nir` float(2,2) NOT NULL,
  `tgl_data` date NOT NULL,
  `nip_data` int(11) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `nip_periksa` int(11) NOT NULL,
  `no_dokumen` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `znt_detail`
--

INSERT INTO `znt_detail` (`id`, `blok_id`, `urut`, `znt`, `nir`, `tgl_data`, `nip_data`, `tgl_periksa`, `nip_periksa`, `no_dokumen`) VALUES
(6, '3', '', 'AA', 0.00, '0000-00-00', 0, '0000-00-00', 0, 0),
(7, '3', '', 'AB', 0.00, '0000-00-00', 0, '0000-00-00', 0, 0),
(8, '3', '', 'AC', 0.00, '0000-00-00', 0, '0000-00-00', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
