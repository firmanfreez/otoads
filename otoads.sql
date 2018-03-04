-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 03:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otoads`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `id_check_in` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `f_samping_kiri` varchar(255) NOT NULL,
  `f_samping_kanan` varchar(255) NOT NULL,
  `f_speedometer` varchar(255) NOT NULL,
  `f_belakang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_mobil`
--

CREATE TABLE `data_mobil` (
  `id_mobil` int(12) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mobil`
--

INSERT INTO `data_mobil` (`id_mobil`, `merk`, `tipe`, `tahun`, `warna`) VALUES
(1, 'dd', 'dd', '2018', 'dd'),
(2, 'sss', 'sss', '2020', 'yy');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_mobil`
--

CREATE TABLE `informasi_mobil` (
  `id_info_mobil` int(11) NOT NULL,
  `id_informasi_pribadi` int(15) NOT NULL,
  `id_data_mobil` int(15) NOT NULL,
  `nama_pemilik_kendaraan` varchar(255) NOT NULL,
  `nomor_polisi_kendaraan` varchar(255) NOT NULL,
  `stnk_gambar` varchar(255) NOT NULL,
  `sim_gambar` varchar(255) NOT NULL,
  `ktp_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_mobil`
--

INSERT INTO `informasi_mobil` (`id_info_mobil`, `id_informasi_pribadi`, `id_data_mobil`, `nama_pemilik_kendaraan`, `nomor_polisi_kendaraan`, `stnk_gambar`, `sim_gambar`, `ktp_gambar`) VALUES
(2, 0, 0, 'Jejeh', '22332', 'toyota_toyota-calya-1-2-g-mobil---black_full02.jpg', 'toyota_toyota-calya-1-2-g-mobil---silver-mica-metallic_full02.jpg', 'toyota_toyota-new-fortuner-4x4-2-4-vrz--dsl-mobil---attitude-black_full02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_pribadi`
--

CREATE TABLE `informasi_pribadi` (
  `id_info_pribadi` int(11) NOT NULL,
  `reflect_code` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_pribadi`
--

INSERT INTO `informasi_pribadi` (`id_info_pribadi`, `reflect_code`, `nama_lengkap`, `jenis_kelamin`, `status`, `email`, `password`, `nomor_telepon`, `pekerjaan`) VALUES
(1, '1212', 'Ibalzz', 'laki laki', 'belum menikah', 'fyf', '712db57187b764b59004bfa8fcac7bb1', 'yffy', 'hfffh');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_wilayah`
--

CREATE TABLE `informasi_wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `informasi_mobil`
--
ALTER TABLE `informasi_mobil`
  ADD PRIMARY KEY (`id_info_mobil`);

--
-- Indexes for table `informasi_pribadi`
--
ALTER TABLE `informasi_pribadi`
  ADD PRIMARY KEY (`id_info_pribadi`);

--
-- Indexes for table `informasi_wilayah`
--
ALTER TABLE `informasi_wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mobil`
--
ALTER TABLE `data_mobil`
  MODIFY `id_mobil` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `informasi_mobil`
--
ALTER TABLE `informasi_mobil`
  MODIFY `id_info_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `informasi_pribadi`
--
ALTER TABLE `informasi_pribadi`
  MODIFY `id_info_pribadi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(12) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
