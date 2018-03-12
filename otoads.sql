-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 02:34 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `otoads`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE IF NOT EXISTS `check_in` (
  `id_check` int(15) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `f_samping_kiri` varchar(255) NOT NULL,
  `f_samping_kanan` varchar(255) NOT NULL,
  `f_belakang` varchar(255) NOT NULL,
  `f_speedometer` varchar(255) NOT NULL,
  `angka_speedometer` varchar(255) NOT NULL,
  PRIMARY KEY (`id_check`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`id_check`, `id_transaksi`, `tanggal`, `waktu`, `f_samping_kiri`, `f_samping_kanan`, `f_belakang`, `f_speedometer`, `angka_speedometer`) VALUES
(2, 1, '2018-03-04', '07:30:00', 'Chat.png', 'Computer.png', 'Favorites.PNG', 'Home.png', '500'),
(3, 1, '2018-03-21', '08:00:08', 'Libraries1.png', 'Folder.png', 'Videos.png', 'DVD,CD.png', '30'),
(4, 2, '2018-03-20', '08:00:00', 'Folder.png', 'Folder-blue.png', 'User.png', 'Libraries.png', '100'),
(5, 1, '2018-03-29', '00:00:00', 'Drive-System.png', 'Computer.png', 'Penguins.jpg', 'Tulips.jpg', '120');

-- --------------------------------------------------------

--
-- Table structure for table `data_distance`
--

CREATE TABLE IF NOT EXISTS `data_distance` (
  `id_distance` int(15) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(15) NOT NULL,
  `perjalanan_hari_ini` varchar(255) NOT NULL,
  `perjalanan_kemarin` varchar(255) NOT NULL,
  `total_perjalanan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_distance`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `data_distance`
--

INSERT INTO `data_distance` (`id_distance`, `id_transaksi`, `perjalanan_hari_ini`, `perjalanan_kemarin`, `total_perjalanan`) VALUES
(1, 1, '100', '300', '400'),
(2, 2, '20', '30', '50'),
(3, 1, '10', '20', '30');

-- --------------------------------------------------------

--
-- Table structure for table `data_iklan`
--

CREATE TABLE IF NOT EXISTS `data_iklan` (
  `id_iklan` int(15) NOT NULL AUTO_INCREMENT,
  `id_kota` int(15) NOT NULL,
  `id_pengiklan` int(15) NOT NULL,
  `nama_iklan` varchar(255) NOT NULL,
  `harga_iklan` varchar(255) NOT NULL,
  `durasi_iklan` date NOT NULL,
  `area_stiker` varchar(255) NOT NULL,
  `iklan_gambar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_iklan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_iklan`
--

INSERT INTO `data_iklan` (`id_iklan`, `id_kota`, `id_pengiklan`, `nama_iklan`, `harga_iklan`, `durasi_iklan`, `area_stiker`, `iklan_gambar`, `status`) VALUES
(1, 1, 1, 'Tokohpedia', '50000000', '2018-03-06', 'Semua Sisi', 'og_microsite_official_store.jpg', 'Aktif'),
(2, 1, 3, 'Travelogah', '800000', '2018-03-14', 'Semua Sisi', 'Is-Traveloka-Legit.jpg', 'Aktif'),
(3, 1, 4, 'Azamon', '100000000', '2018-03-21', 'Depan Belakang', 'AMAZON-1200x537.png', 'Tidak Aktif'),
(4, 1, 1, 'Linkedin', '80000000', '2018-03-18', 'Semuas Sisi', 'linkedin1.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_iklan_kendaraan`
--

CREATE TABLE IF NOT EXISTS `data_iklan_kendaraan` (
  `id_iklan_kendaraan` int(15) NOT NULL AUTO_INCREMENT,
  `no_iklan` int(15) NOT NULL,
  `id_merk` int(15) NOT NULL,
  PRIMARY KEY (`id_iklan_kendaraan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_iklan_kendaraan`
--

INSERT INTO `data_iklan_kendaraan` (`id_iklan_kendaraan`, `no_iklan`, `id_merk`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_pembayaran`
--

CREATE TABLE IF NOT EXISTS `data_pembayaran` (
  `id_pembayaran` int(15) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(15) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `nomor_rekening` varchar(255) DEFAULT NULL,
  `nama_pemilik_rekening` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_pembayaran`
--

INSERT INTO `data_pembayaran` (`id_pembayaran`, `id_transaksi`, `nama_bank`, `nomor_rekening`, `nama_pemilik_rekening`) VALUES
(3, 1, 'BCA', '44444444444444', 'Longis Luan'),
(4, 2, 'Mandiri', ')902131231', 'James Bond');

-- --------------------------------------------------------

--
-- Table structure for table `data_perusahaan`
--

CREATE TABLE IF NOT EXISTS `data_perusahaan` (
  `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) NOT NULL,
  `telepon_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `email_perusahaan` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `telepon_pic` varchar(255) NOT NULL,
  `alamat_pic` varchar(255) NOT NULL,
  `email_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_perusahaan`
--

INSERT INTO `data_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `telepon_perusahaan`, `alamat_perusahaan`, `email_perusahaan`, `pic`, `telepon_pic`, `alamat_pic`, `email_pic`) VALUES
(1, 'Heldi', '089129312', 'Jl. sebelah', 'heldi@gmail.com', 'Mansour', '08921321', 'Jl. Kejajang', 'mansour@gmail.com'),
(3, 'Go Airplane', '08121212', 'Jl. Awakan', 'air@gmail.com', 'Hyungmin', '08121211', 'Jl Serang', 'hyunmin@gmail.com'),
(4, 'Braztrans', '089231215', 'Jl Del Toro', 'braz@gmail.com', 'Kwangsoo', '089213123', 'Jl dister', 'kwang@gmail,com');

-- --------------------------------------------------------

--
-- Table structure for table `data_speedometer`
--

CREATE TABLE IF NOT EXISTS `data_speedometer` (
  `id_speedometer` int(15) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(15) NOT NULL,
  `angka_speedometer` varchar(255) NOT NULL,
  PRIMARY KEY (`id_speedometer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_speedometer`
--

INSERT INTO `data_speedometer` (`id_speedometer`, `id_transaksi`, `angka_speedometer`) VALUES
(1, 1, '200');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE IF NOT EXISTS `data_transaksi` (
  `id_transaksi` int(15) NOT NULL AUTO_INCREMENT,
  `id_kota` int(15) NOT NULL,
  `id_merk` int(15) NOT NULL,
  `reflect_code` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nama_pemilik_kendaraan` varchar(255) NOT NULL,
  `nomor_polisi_kendaraan` varchar(255) NOT NULL,
  `stnk_gambar` varchar(255) NOT NULL,
  `sim_gambar` varchar(255) NOT NULL,
  `ktp_gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_transaksi`, `id_kota`, `id_merk`, `reflect_code`, `nama_lengkap`, `jenis_kelamin`, `status`, `email`, `password`, `nomor_telepon`, `pekerjaan`, `nama_pemilik_kendaraan`, `nomor_polisi_kendaraan`, `stnk_gambar`, `sim_gambar`, `ktp_gambar`) VALUES
(1, 1, 2, '099031', 'Longis Luan', 'Wanita', 'Belum Menikah', 'long@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0891231231', 'Lol', 'Boom', '878232', '1447646537.jpg', '1384775416.jpg', '3-4a0b9efd004f1e93a4b817ed6d785175.jpg'),
(2, 1, 2, '090123', 'James Bond', 'Pria', 'Belum Menikah', 'jams@gmail.com', 'james', '089213221', 'Agent', 'James Bond', '0923124', '1447646537.jpg', '1384775416.jpg', 'ktp-eza-aldilah-majid_20151125_181451.jpg'),
(3, 1, 2, '93840dd', 'Kwangsoo', 'Pria', 'Belum Menikah', 'kwangsoo@gmail.com', 'kwangsoo', '0989231123', 'Comedian', 'Lee Kwang Soo', '91203902138', '1447646537.jpg', '1384775416.jpg', '4-df014277a389870b19668679e3ff146c.jpg'),
(4, 1, 2, '90829214', 'Jason', 'Pria', 'Menikah', 'json@gmail.com', 'json', '08912121', '', 'Jason', '0893131', '1447646537.jpg', '1384775416.jpg', 'ktp-eza-aldilah-majid_20151125_181451.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan_data_master`
--

CREATE TABLE IF NOT EXISTS `kendaraan_data_master` (
  `id_merk` int(15) NOT NULL AUTO_INCREMENT,
  `id_tipe` int(15) NOT NULL,
  `id_tahun` int(15) NOT NULL,
  `id_warna` int(15) NOT NULL,
  `merk` varchar(255) NOT NULL,
  PRIMARY KEY (`id_merk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kendaraan_data_master`
--

INSERT INTO `kendaraan_data_master` (`id_merk`, `id_tipe`, `id_tahun`, `id_warna`, `merk`) VALUES
(1, 2, 2, 2, 'AUDI'),
(2, 1, 2, 2, 'BMW');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan_data_tahun`
--

CREATE TABLE IF NOT EXISTS `kendaraan_data_tahun` (
  `id_tahun` int(15) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tahun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kendaraan_data_tahun`
--

INSERT INTO `kendaraan_data_tahun` (`id_tahun`, `tahun`) VALUES
(1, '2018'),
(2, '2017'),
(3, '2016'),
(4, '2015'),
(5, '2014'),
(6, '2013'),
(7, '2012'),
(8, '2011'),
(9, '2010');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan_data_tipe`
--

CREATE TABLE IF NOT EXISTS `kendaraan_data_tipe` (
  `id_tipe` int(15) NOT NULL AUTO_INCREMENT,
  `tipe` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tipe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `kendaraan_data_tipe`
--

INSERT INTO `kendaraan_data_tipe` (`id_tipe`, `tipe`) VALUES
(1, 'A3'),
(2, 'A4'),
(3, 'A5'),
(4, 'A6'),
(5, 'A7'),
(6, 'A8'),
(7, 'Q3'),
(8, 'Q5'),
(9, 'Q7'),
(10, 'R8'),
(11, 'RS3'),
(12, 'RS5'),
(13, 'S3'),
(14, 'S5'),
(15, 'TT'),
(16, '1 SERIES'),
(17, '2 SERIES'),
(18, '3 SERIES'),
(19, '4 SERIES'),
(20, '5 SERIES'),
(21, '6 SERIES'),
(22, '7 SERIES'),
(23, 'X1'),
(24, 'X3'),
(25, 'X4'),
(26, 'X5'),
(27, 'X6'),
(28, 'Z4');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan_data_warna`
--

CREATE TABLE IF NOT EXISTS `kendaraan_data_warna` (
  `id_warna` int(15) NOT NULL AUTO_INCREMENT,
  `warna` varchar(255) NOT NULL,
  PRIMARY KEY (`id_warna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `kendaraan_data_warna`
--

INSERT INTO `kendaraan_data_warna` (`id_warna`, `warna`) VALUES
(1, 'Merah'),
(2, 'Pink'),
(3, 'Hitam'),
(4, 'Silver'),
(5, 'biru'),
(6, 'hijau'),
(7, 'Kuning'),
(8, 'Putih'),
(9, 'Cokelat'),
(10, 'Abu - Abu'),
(11, 'Oranye');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(2, 'kwangsoo@gmail.com', 'kwangsoo'),
(3, 'jams@gmail.com', 'james'),
(4, 'json@gmail.com', '466deec76ecdf5fca6d38571f6324d54');

-- --------------------------------------------------------

--
-- Table structure for table `master_iklan`
--

CREATE TABLE IF NOT EXISTS `master_iklan` (
  `id_master_iklan` int(15) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(15) NOT NULL,
  `no_iklan` int(15) NOT NULL,
  PRIMARY KEY (`id_master_iklan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `master_iklan`
--

INSERT INTO `master_iklan` (`id_master_iklan`, `id_transaksi`, `no_iklan`) VALUES
(1, 1, 2),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_data`
--

CREATE TABLE IF NOT EXISTS `wilayah_data` (
  `id_wilayah` int(15) NOT NULL AUTO_INCREMENT,
  `nama_wilayah` varchar(255) NOT NULL,
  PRIMARY KEY (`id_wilayah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wilayah_data`
--

INSERT INTO `wilayah_data` (`id_wilayah`, `nama_wilayah`) VALUES
(1, 'Madiun'),
(2, 'Araba');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_data_master`
--

CREATE TABLE IF NOT EXISTS `wilayah_data_master` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `id_wilayah` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wilayah_data_master`
--

INSERT INTO `wilayah_data_master` (`id_kota`, `id_wilayah`, `nama_kota`) VALUES
(1, 2, 'United Arab Emirated');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
