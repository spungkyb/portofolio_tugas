-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 03:52 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a111509163`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataku`
--

CREATE TABLE IF NOT EXISTS `dataku` (
  `nim` char(14) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `jns_kel` char(1) DEFAULT NULL,
  `agama` char(10) DEFAULT NULL,
  `jurus` char(20) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `kota` char(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataku`
--

INSERT INTO `dataku` (`nim`, `nama`, `tgl_lhr`, `jns_kel`, `agama`, `jurus`, `alamat`, `kota`) VALUES
('a11.2018.11000', 'irsyad', '2007-02-16', 'L', 'Islam', 'ti', 'demak', 'demak'),
('a11.2015.09163', 'ajdd', '1997-07-02', 'P', 'Islam', 'ti', 'xcjzhc', 'XZNXz'),
('a11.2015.09167', 'yiaani noer sasongk', '2000-12-30', 'P', 'Islam', 'ti', 'kalicilik', 'demak'),
('hallo2017', 'hallo', '2014-12-31', 'P', 'Islam', 'ti', 'indraprasta', 'solo'),
('hallo2017', 'hallo', '2014-12-31', 'P', 'Islam', 'ti', 'indraprasta', 'solo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
