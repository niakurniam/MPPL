-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 03:49 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcalendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_event` varchar(20) NOT NULL,
  `date_event` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `id_user`, `name_event`, `date_event`, `description`) VALUES
(12, 0, '', '0000-00-00', ''),
(13, 0, '', '0000-00-00', ''),
(14, 0, '', '0000-00-00', ''),
(15, 0, '', '0000-00-00', ''),
(16, 0, '', '0000-00-00', ''),
(17, 0, '', '0000-00-00', ''),
(18, 0, '', '0000-00-00', ''),
(19, 0, '', '0000-00-00', ''),
(20, 0, '', '0000-00-00', ''),
(21, 0, '', '0000-00-00', ''),
(22, 0, '', '0000-00-00', ''),
(23, 0, '', '0000-00-00', ''),
(24, 0, '', '0000-00-00', ''),
(25, 2, 'NATAL PARTY ', '2016-12-25', 'acara natal untuk mahasiswa teknik informatika'),
(26, 1, 'Demo PPL Kelas A dan', '2016-12-27', 'untuk yang belum demo Final Projek, demo di ruangan bu nurul'),
(27, 1, 'EAS Komputasi Numeri', '2016-12-20', 'EAS dilaksanakan di ruang IF 106 pukul 12.30'),
(29, 4, 'Pengumpulan FP APSI', '2016-12-27', 'Pengumpulan video FP dan dokumen, bentuk zip dalam CD satu kelas'),
(30, 5, 'Parade KMI 2016', '2016-12-31', 'Acara terbesar KMI, terdapat tafidz, cerdas cermat, dll'),
(31, 1, 'EAS Komputasi Numeri', '2016-12-20', 'EAS KOMNUM C'),
(34, 0, 'DEMO FP Grafkom Kela', '2016-12-20', 'rft');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id_participant` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `phonenump` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_khusus`
--

CREATE TABLE `user_khusus` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phonenum` varchar(15) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_khusus`
--

INSERT INTO `user_khusus` (`id_user`, `username`, `password`, `phonenum`, `role`) VALUES
(1, 'admin', 'admin', '086954376555', NULL),
(2, 'risma', 'risma', '098765678655', 'admin'),
(3, 'HMTC', 'HMTC', '085675689212', NULL),
(4, 'Adhatus Solicha', '1234', '08123456789', NULL),
(5, 'KMI', 'KMI', '085628902164', NULL),
(6, 'Radityo Anggoro', 'onggo', '08123456788', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id_participant`);

--
-- Indexes for table `user_khusus`
--
ALTER TABLE `user_khusus`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_khusus`
--
ALTER TABLE `user_khusus`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
