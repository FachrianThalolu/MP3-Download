-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 04:17 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `list_lagu`
--

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `nomor` int(255) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penyanyi` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `link` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`nomor`, `judul`, `penyanyi`, `genre`, `link`) VALUES
(1, 'The Middle', 'Zedd, Maren Morris, Grey', 'Pop', 'http://media.7tunes.net/Single/2018/01-Jan/ZEDD%20-%20The%20Middle%20%5bSingle%5d%20%5b320Kbps%5d%20-%20%5b7tunes%5d.mp3'),
(2, 'Freaky Friday', 'Lil Dicky, Chris Brown', 'Hip hop, rap ', 'http://purplinx.me/m3cmf9ywd9h4/play.mp3'),
(3, 'This Is Me', 'Keala Settle, The Greatest Showman Ensemble', 'Pop', 'http://other.web.nf01.sycdn.kuwo.cn/resource/n2/42/29/3478215075.mp3'),
(4, 'IDGAF', 'Dua Lipa', 'Pop', 'http://dl.nh98.ir/music%20kh/Dua%20Lipa/Dua%20Lipa%20-%20Dua%20Lipa%20(Deluxe)%20-%20MP3%20320/05%20IDGAF.mp3'),
(5, 'Genius', ' Labrinth, Sia, Diplo', 'Pop', 'http://purplinx.info/rldqa3sxwghc/play.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `nomor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
