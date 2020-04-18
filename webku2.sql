-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 04:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webku2`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE IF NOT EXISTS `disposisi` (
  `no_disposisi` varchar(20) NOT NULL,
  `no_agenda` varchar(20) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `kepada` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status_surat` varchar(20) NOT NULL,
  `tanggapan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`no_disposisi`, `no_agenda`, `no_surat`, `kepada`, `keterangan`, `status_surat`, `tanggapan`) VALUES
('03482', '342097', '342', 'fker', 'frne', 'cvkrel', 'nckvre'),
('432111', '532', '890', 'nckvs', 'cdlsjo', 'cjndsj', 'ncvkl'),
('654', '3421', '34213', 'vdsvd', 'dvsc', 'cdscds', 'gfrr');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id` varchar(20) NOT NULL,
  `nama_depan` varchar(11) NOT NULL,
  `nama_belakang` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak` enum('super user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama_depan`, `nama_belakang`, `password`, `hak`) VALUES
('asd', 'de', 'sd', 'asd', 'admin'),
('hent', 'cds', 'scax', 'zxc', 'super user'),
('kheltuzat', 'khe', 'tuzat', 'qwe', 'admin'),
('razone', 'agung', 'prabowo', 'asd', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar`
--

CREATE TABLE IF NOT EXISTS `suratkeluar` (
  `no_agenda` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `jenis_surat` varchar(20) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `perihal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suratkeluar`
--

INSERT INTO `suratkeluar` (`no_agenda`, `id`, `jenis_surat`, `tgl_kirim`, `no_surat`, `pengirim`, `perihal`) VALUES
('123', 'razone', 'kampang', '2018-02-07', '8021', 'wandoyyy', 'sempak'),
('321', 'razone', 'dew', '2018-02-03', '32', 'few', 'das'),
('3214', 'razone', 'cewvf', '2018-04-18', '4312', 'vre', 'cdw');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE IF NOT EXISTS `suratmasuk` (
  `no_agenda` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `jenis_surat` varchar(20) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `perihal` varchar(20) NOT NULL,
  `status_disposisi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suratmasuk`
--

INSERT INTO `suratmasuk` (`no_agenda`, `id`, `jenis_surat`, `tgl_kirim`, `tgl_terima`, `no_surat`, `pengirim`, `perihal`, `status_disposisi`) VALUES
('3421', 'razone', 'dews', '2018-02-02', '2018-02-03', '34213', 'vds', 'fds', '3421'),
('532', 'hent', 'ncds', '2018-04-02', '2018-04-04', '890', 'ncids', 'jicold', '532'),
('543', 'asd', 'profesi', '2018-04-01', '2018-04-10', '790', 'agung', 'kerjaann', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
 ADD PRIMARY KEY (`no_disposisi`), ADD UNIQUE KEY `no_agenda` (`no_agenda`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
 ADD PRIMARY KEY (`no_agenda`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
 ADD PRIMARY KEY (`no_agenda`), ADD UNIQUE KEY `id` (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
ADD CONSTRAINT `suratmasuk_ibfk_1` FOREIGN KEY (`id`) REFERENCES `petugas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
