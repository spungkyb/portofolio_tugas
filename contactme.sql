-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 02:21 PM
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
-- Table structure for table `contactme`
--

CREATE TABLE IF NOT EXISTS `contactme` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactme`
--

INSERT INTO `contactme` (`nama`, `email`, `pesan`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('sevianapungkyb', 'sevianapungkyb@gmail.com', 'bagus'),
('sevianapungkyb', 'sevianapungkyb@gmail.com', 'bagus'),
('Aftiani Wahyuastuti', 'aftiani@gmail.com', 'yang buat cantik'),
('Aftiani Wahyuastuti', 'aftiani@gmail.com', 'yang buat cantik'),
('Aftiani Wahyuastutijj', 'aftiani@gmail.com', 'yang buat cantik');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
