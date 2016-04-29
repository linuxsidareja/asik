
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2015 at 01:58 AM
-- Server version: 10.0.12-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u729591108_un`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungi`
--

CREATE TABLE IF NOT EXISTS `tbl_hubungi` (
  `id_hubungi` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=innoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=innoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`) VALUES
(12, 'tcahgaptek10', '8ccd857613554b971fa8bf9eeb265638', 'Rudi AdiTia'),
(13, 'smkn1binangun@yahoo.co.id', 'b0e50457acbb2a859f1d665d689387c1', 'SMK NEGERI 1 BINANGUN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE IF NOT EXISTS `tb_student` (
  `no` varchar(200) NOT NULL,
  `noujian` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tgllhr` varchar(200) NOT NULL,
  `addresse` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `indo` varchar(200) NOT NULL,
  `mat` varchar(200) NOT NULL,
  `inggris` varchar(200) NOT NULL,
  `ipa` varchar(200) NOT NULL,
  `nsindo` varchar(200) NOT NULL,
  `nsinggris` varchar(200) NOT NULL,
  `nsmat` varchar(200) NOT NULL,
  `nsipa` varchar(200) NOT NULL,
  `naindo` varchar(200) NOT NULL,
  `nainggris` varchar(200) NOT NULL,
  `namat` varchar(200) NOT NULL,
  `naipa` varchar(200) NOT NULL,
  `rataun` varchar(200) NOT NULL,
  `ratans` varchar(200) NOT NULL,
  `ratana` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `ketgambar` varchar(200) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=innoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
