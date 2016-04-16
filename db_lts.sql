-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2016 at 02:02 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_lts`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE IF NOT EXISTS `pengelola` (
  `kode_pengelola` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(35) CHARACTER SET latin1 NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_pengelola`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`kode_pengelola`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'super_admin'),
(2, 'eva', '14bd76e02198410c078ab65227ea0794', 'admin'),
(5, 'imul', '5ec8e69aa795aa3ba9d576b2101bb378', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
