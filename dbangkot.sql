-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 04:01 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbangkot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id_comment` int(10) NOT NULL,
  `comment` text NOT NULL,
  `id_post` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_angkot`
--

CREATE TABLE IF NOT EXISTS `daftar_angkot` (
`id_angkot` int(30) NOT NULL,
  `nama_angkot` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `daftar_angkot`
--

INSERT INTO `daftar_angkot` (`id_angkot`, `nama_angkot`, `asal`, `tujuan`, `gambar`, `link`) VALUES
(3, 'Angkot HAHAHA', 'Terminal Hamid Rusdi', 'Terminal Madyopuro', 'angkot6.png', 'https://www.google.com/maps/d/embed?mid=1OYRtg1WlPmI-TnOyNFwDLcOQbxE'),
(4, 'Angkot CKL', 'ComoroKandang', 'Terminal Landungsari', 'angkot3.png', 'https://www.google.com/maps/d/embed?mid=1ubm5ylmeJ1vs0sNWhZikmsF1g9Q'),
(5, 'Angkot AMH', 'Terminal Arjosari', 'Terminal Landungsari', 'angkot4.png', 'https://www.google.com/maps/d/embed?mid=1fkamtibYxK4qyWdTxvtU_KeKw98'),
(6, 'Angkot ABH', 'Terminal Arjosari', 'Terminal Hamid Rusdi', 'angkot1.png', 'https://www.google.com/maps/d/embed?mid=1ZYVuGdHb9HbPcSXrZ2lsw7QSHmg'),
(7, 'Angkot AH', 'Terminal Arjosari', 'Terminal Hamid Rusdi', 'angkot.png', 'https://www.google.com/maps/d/embed?mid=11gkwK4Ef_lTwZfV4Qs70Imj-nnw'),
(8, 'Angkot ABB', 'Terminal Arjosari', 'APK Pasar Bunul', 'angkot7.png', 'https://www.google.com/maps/d/embed?mid=1RcODbyAFGNHw50mowP1KkkFT_mM'),
(9, 'Angkot MKS', 'Terminal Mulyorejo', 'APK Pasar Sukun', 'angkot8.png', 'https://www.google.com/maps/d/embed?mid=1OCI6L6OZ0k7yZVgy1wnPVc_2158'),
(10, 'Angkot TAT', 'Terminal Tlogowaru', 'Tirtosari', 'angkot9.png', 'https://www.google.com/maps/d/embed?mid=1LsjsS-wa9KDoHcUHoX3xLmrVy8M'),
(11, 'Angkot TSH', 'Pasar Tawangmangu', 'APK Gasek', 'angkot10.png', 'https://www.google.com/maps/d/embed?mid=1-NxBnHxGyRSvsVW6o-58aIbaNRE'),
(12, 'ok', 'malang', 'pasuruan', 'IMG_PL1479279324.jpg', 'http://localhost/admin_oke');

-- --------------------------------------------------------

--
-- Table structure for table `jalan`
--

CREATE TABLE IF NOT EXISTS `jalan` (
`id_jalan` int(11) NOT NULL,
  `nama_jalan` varchar(50) NOT NULL,
  `id_angkot` int(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jalan`
--

INSERT INTO `jalan` (`id_jalan`, `nama_jalan`, `id_angkot`) VALUES
(1, 'sukarno hatta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id_post` int(10) NOT NULL,
  `post` text NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE IF NOT EXISTS `terminal` (
`id_terminal` int(10) NOT NULL,
  `nama_terminal` varchar(50) NOT NULL,
  `jumlah_angkot` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`id_terminal`, `nama_terminal`, `jumlah_angkot`) VALUES
(1, 'Madyopuro', 10),
(2, 'hehehe', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`) VALUES
(1, 'lala', 'lala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `daftar_angkot`
--
ALTER TABLE `daftar_angkot`
 ADD PRIMARY KEY (`id_angkot`);

--
-- Indexes for table `jalan`
--
ALTER TABLE `jalan`
 ADD PRIMARY KEY (`id_jalan`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
 ADD PRIMARY KEY (`id_terminal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daftar_angkot`
--
ALTER TABLE `daftar_angkot`
MODIFY `id_angkot` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jalan`
--
ALTER TABLE `jalan`
MODIFY `id_jalan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id_post` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
MODIFY `id_terminal` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
