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
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kd_brg` char(6) NOT NULL DEFAULT '',
  `nm_brg` varchar(30) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `stok_min` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_brg`, `nm_brg`, `satuan`, `harga_beli`, `harga_jual`, `stok`, `stok_min`) VALUES
('B-0001', 'Buku', 'Buah', 10000, 11000, 10, 2),
('B-0002', 'Spidol', 'Buah', 3500, 4000, 20, 2),
('B-0003', 'HP', 'Buah', 210000, 220000, 10, 2),
('B-0004', 'Gethuk', 'Buah', 10000, 11000, 1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bayarcicilan`
--

CREATE TABLE IF NOT EXISTS `bayarcicilan` (
  `NomorByr` varchar(10) NOT NULL,
  `TanggalByr` date NOT NULL,
  `KodeKredit` varchar(10) NOT NULL,
  `Jumlah` double NOT NULL,
  `Sisa` double NOT NULL,
  `Cicilan` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayarcicilan`
--

INSERT INTO `bayarcicilan` (`NomorByr`, `TanggalByr`, `KodeKredit`, `Jumlah`, `Sisa`, `Cicilan`, `Keterangan`) VALUES
('BYR00000', '2017-12-31', 'KRD00000', 5000000, 125000000, 2, 'Pembayaran bulan Dec');

-- --------------------------------------------------------

--
-- Table structure for table `belicash`
--

CREATE TABLE IF NOT EXISTS `belicash` (
  `KodeCash` varchar(10) NOT NULL,
  `TanggalCash` date NOT NULL,
  `KodeCust` varchar(10) NOT NULL,
  `Kodemobil` varchar(10) NOT NULL,
  `Harga` double NOT NULL,
  `Bayar` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belicash`
--

INSERT INTO `belicash` (`KodeCash`, `TanggalCash`, `KodeCust`, `Kodemobil`, `Harga`, `Bayar`, `Keterangan`) VALUES
('CSH00000', '2015-02-27', 'CUS00000', 'MBL00000', 230000000, 230000000, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `belikredit`
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
  `Keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belikredit`
--

INSERT INTO `belikredit` (`KodeKredit`, `TanggalKredit`, `KodeCust`, `Kodemobil`, `Harga`, `UangMuka`, `Bunga`, `LamaCicilan`, `AngsuranKe`, `TelahBayar`, `Sisa`, `Keterangan`) VALUES
('KRD00000', '2015-02-27', 'CUS00001', 'MBL00001', 200000000, 70000000, 10, 5, 2, 75000000, 125000000, 'Kredit'),
('KRD00001', '2017-12-31', 'CUS00001', 'MBL00001', 200000000, 150000000, 5, 12, 1, 150000000, 50000000, 'cicil');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `kode` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `thn_terbit` int(11) NOT NULL,
  `penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode`, `judul`, `penulis`, `thn_terbit`, `penerbit`) VALUES
('2', 'h', 'pungkayyyy', 2018, 'kompas gramed');

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
('hallo2017', 'hallo', '2014-12-31', 'P', 'Islam', 'ti', 'indraprasta', 'solo'),
('a11.2015.09167', 'lalala', '2001-12-01', 'P', 'Islam', 'ti', 'ngaliyan jaya', 'kayangan');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `Kodemobil` varchar(10) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Warna` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `Harga` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`Kodemobil`, `Merk`, `Warna`, `gambar`, `Harga`) VALUES
('MBL00000', 'Honda Mobilio', 'Hitam', 'mobilio.jpg', 230000000),
('MBL00001', 'Toyota Avanza', 'biru', 'Toyota_Avanza_L_1.jpg', 200000000),
('MBL00002', 'Suzuki Karimun', 'hijau', 'Suzuki.jpg', 180000000),
('MBL00003', 'brio', 'merah', 'brio.jpg', 100000000),
('MBL00004', 'daihatsu', 'biru', 'daihatsu.jpg', 120000000),
('MBL00005', 'ayla', 'oren', 'products_02.png', 130000000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
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
  `Keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`KodeCust`, `Nama`, `Alamat`, `Telepon`, `HP`, `NoKTP`, `KK`, `SlipGaji`, `Keterangan`) VALUES
('CUS00000', 'irsan', 'Selaawi, Garut', '022 8789787', '0899999999', '123823283', '98392839', 8787889, 'Cucho'),
('CUS00001', 'Susi', 'Lampung', '4353535', '56464646', 'eew23424', 'erw45555', 0, 'Cute'),
('CUS00002', 'pungky', 'demak', '-', '089618050277', '-', '-', 1000000000, '-');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(54) DEFAULT NULL,
  `nama` varchar(120) DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jenis_kelamin`, `telepon`, `alamat`) VALUES
('A11.2015.09166', 'Adelia', 'Perempuan', '085727579222', 'Jl Abimanyu'),
('A11.2015.09163', 'Seviana Pungky Brilianti', 'P', '089618050277', 'demak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `KodeUser` varchar(10) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`KodeUser`, `UserName`, `Password`, `Status`) VALUES
('USR00003', 'admin', 'admin', 'admin'),
('USR00004', 'ican', 'ican', 'user'),
('USR00005', 'pungky', 'pungky', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indexes for table `bayarcicilan`
--
ALTER TABLE `bayarcicilan`
  ADD PRIMARY KEY (`NomorByr`);

--
-- Indexes for table `belicash`
--
ALTER TABLE `belicash`
  ADD PRIMARY KEY (`KodeCash`);

--
-- Indexes for table `belikredit`
--
ALTER TABLE `belikredit`
  ADD PRIMARY KEY (`KodeKredit`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`Kodemobil`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`KodeCust`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`KodeUser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
