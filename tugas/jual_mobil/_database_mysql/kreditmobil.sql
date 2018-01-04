-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 27. Feb 2015 um 23:46
-- Server Version: 5.5.16
-- PHP-Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `kreditmobil`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bayarcicilan`
--

CREATE TABLE IF NOT EXISTS `bayarcicilan` (
  `NomorByr` varchar(10) NOT NULL,
  `TanggalByr` date NOT NULL,
  `KodeKredit` varchar(10) NOT NULL,
  `Jumlah` double NOT NULL,
  `Sisa` double NOT NULL,
  `Cicilan` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`NomorByr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `belicash`
--

CREATE TABLE IF NOT EXISTS `belicash` (
  `KodeCash` varchar(10) NOT NULL,
  `TanggalCash` date NOT NULL,
  `KodeCust` varchar(10) NOT NULL,
  `Kodemobil` varchar(10) NOT NULL,
  `Harga` double NOT NULL,
  `Bayar` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`KodeCash`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `belicash`
--

INSERT INTO `belicash` (`KodeCash`, `TanggalCash`, `KodeCust`, `Kodemobil`, `Harga`, `Bayar`, `Keterangan`) VALUES
('CSH00000', '2015-02-27', 'CUS00000', 'MBL00000', 230000000, 230000000, 'Lunas');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `belikredit`
--

CREATE TABLE IF NOT EXISTS `belikredit` (
  `KodeKredit` varchar(10) NOT NULL,
  `TanggalKredit` date NOT NULL,
  `KodeCust` varchar(10) NOT NULL,
  `Kodemobil` varchar(10) NOT NULL,
  `Harga` double NOT NULL,
  `UangMuka` double NOT NULL,
  `Bunga` float NOT NULL,
  `LamaCicilan` int(11) NOT NULL,
  `AngsuranKe` int(11) NOT NULL DEFAULT '1',
  `TelahBayar` double NOT NULL,
  `Sisa` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`KodeKredit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `belikredit`
--

INSERT INTO `belikredit` (`KodeKredit`, `TanggalKredit`, `KodeCust`, `Kodemobil`, `Harga`, `UangMuka`, `Bunga`, `LamaCicilan`, `AngsuranKe`, `TelahBayar`, `Sisa`, `Keterangan`) VALUES
('KRD00000', '2015-02-27', 'CUS00001', 'MBL00001', 200000000, 70000000, 10, 5, 1, 70000000, 130000000, 'Kredit');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `Kodemobil` varchar(10) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Warna` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `Harga` double NOT NULL,
  PRIMARY KEY (`Kodemobil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `mobil`
--

INSERT INTO `mobil` (`Kodemobil`, `Merk`, `Warna`, `gambar`, `Harga`) VALUES
('MBL00000', 'Honda Mobilio', 'Silver', '4772968_20140709091953.jpg', 230000000),
('MBL00001', 'Toyota Avanza', 'Putih', '200px-Animhorse.gif', 200000000),
('MBL00002', 'Suzuki Karimun', 'Merah', 'hosting-keyword-density-tutorial.jpg', 180000000);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `KodeCust` varchar(10) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Telepon` varchar(15) NOT NULL,
  `HP` varchar(15) NOT NULL,
  `NoKTP` varchar(20) NOT NULL,
  `KK` varchar(20) NOT NULL,
  `SlipGaji` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`KodeCust`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `pelanggan`
--

INSERT INTO `pelanggan` (`KodeCust`, `Nama`, `Alamat`, `Telepon`, `HP`, `NoKTP`, `KK`, `SlipGaji`, `Keterangan`) VALUES
('CUS00000', 'irsan', 'Selaawi, Garut', '022 8789787', '0899999999', '123823283', '98392839', 8787889, 'Cucho'),
('CUS00001', 'Susi', 'Lampung', '4353535', '56464646', 'eew23424', 'erw45555', 0, 'Cute');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `KodeUser` varchar(10) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(5) NOT NULL,
  PRIMARY KEY (`KodeUser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`KodeUser`, `UserName`, `Password`, `Status`) VALUES
('USR00003', 'admin', 'admin', 'admin'),
('USR00004', 'ican', 'ican', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
