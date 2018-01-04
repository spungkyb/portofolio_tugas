/*
SQLyog Community v12.4.3 (32 bit)
MySQL - 5.0.45-log : Database - a111509163
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`a111509163` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `a111509163`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kd_brg` char(6) NOT NULL default '',
  `nm_brg` varchar(30) default NULL,
  `satuan` varchar(10) default NULL,
  `harga_beli` double default NULL,
  `harga_jual` double default NULL,
  `stok` int(5) default NULL,
  `stok_min` int(5) default NULL,
  PRIMARY KEY  (`kd_brg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`kd_brg`,`nm_brg`,`satuan`,`harga_beli`,`harga_jual`,`stok`,`stok_min`) values 
('B-0001','Buku','Buah',10000,11000,10,2),
('B-0002','Spidol','Buah',3500,4000,20,2),
('B-0003','HP','Buah',210000,220000,10,2),
('B-0004','Gethuk','Buah',10000,11000,1000,0);

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `kode` varchar(20) NOT NULL,
  `judul` varchar(50) default NULL,
  `penulis` varchar(40) default NULL,
  `thn_terbit` year(4) default NULL,
  `penerbit` varchar(40) default NULL,
  PRIMARY KEY  (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

insert  into `buku`(`kode`,`judul`,`penulis`,`thn_terbit`,`penerbit`) values 
('ddd123','Dealovasd','Dyan N',2006,'PT. Gramedia Pustaka Utama'),
('T12345','Twilight','Stephenie Meyer',2005,'PT Gramedia Pustaka Utama'),
('979-3062-79-7','Laskar Pelangi','Andrea Hirata',2005,'Bentang Pustaka'),
('12345','Harry Potter','J.K. Rowling',2000,'PT Gramedia Pustaka Utama');

/*Table structure for table `dataku` */

DROP TABLE IF EXISTS `dataku`;

CREATE TABLE `dataku` (
  `nim` char(14) default NULL,
  `nama` varchar(40) default NULL,
  `tgl_lhr` date default NULL,
  `jns_kel` char(1) default NULL,
  `agama` char(10) default NULL,
  `jurus` char(20) default NULL,
  `alamat` varchar(40) default NULL,
  `kota` char(15) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `dataku` */

insert  into `dataku`(`nim`,`nama`,`tgl_lhr`,`jns_kel`,`agama`,`jurus`,`alamat`,`kota`) values 
('A11.2015.09163','seviana pungky b','2013-12-02','P','H','b','jl sejahtera','denmark'),
('','','0000-00-00','','','','',''),
('A11.2015.09177','Afti cantik','2014-12-31','P','Hindu','bb','wkkw','smg'),
('A11.2015.09166','Adelia Puspita S','2016-11-30','P','Islam','ti','','SEMARANG'),
('A11.2015.09163','SEVIANA PUNGKY B','2013-12-02','P','Islam','','','denmark'),
('A11.2015.09188','Hallo','2017-11-14','P','Kristen','eb','KUDUS','KUDUS'),
('A11.2015.09177','Afti elek','2014-12-31','P','Hindu','bb','ngaliyan makmur','smg'),
('A11.2015.09199','Pingu','2017-06-14','P','Budha','bb','jateng','jepara'),
('A11.2015.09166','Adelia PS','2016-11-30','P','Islam','ti','ABIMANYU','SEMARANG'),
('hallo','hai','2017-08-02','','Islam','ti','rf','ere');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
