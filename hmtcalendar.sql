-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mei 2017 pada 15.59
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmtcalendar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `NRP` varchar(15) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`NRP`, `Nama`, `password`, `role`) VALUES
('5113100076', 'Zikrul Ikhsan', 'admin', 1),
('51131000786', 'Tities Novaninda Ovari', '123456', 2),
('5114100092', 'Kharisma Monika Dian Pertiwi', '5114100092', 2),
('5114100704', 'Nur Maulidiah El Fajr', '5114100704', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `id_kepengurusan` int(11) DEFAULT NULL,
  `nama_departemen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `id_kepengurusan`, `nama_departemen`) VALUES
(1, 1, 'Kaderisasi'),
(2, 1, 'Hubungan Luar'),
(3, 1, 'Dalam Negeri'),
(4, 1, 'Keprofesian'),
(5, 1, 'Media Informasi'),
(6, 1, 'Kewirausahaan'),
(7, 1, 'Kesejahteraan Mahasiswa'),
(8, 1, 'Minat Bakat'),
(9, 2, 'Kaderisasi'),
(10, 2, 'Hubungan Luar'),
(11, 2, 'Dalam negeri'),
(12, 2, 'Keprofesian'),
(13, 2, 'Media Informasi'),
(14, 2, 'Kewirausahaan'),
(15, 2, 'Keseahteraan Mahasiswa'),
(16, 2, 'Minat Bakat'),
(17, 3, 'Kaderisasi'),
(18, 3, 'Hubungan Luar'),
(19, 3, 'Dalam Negeri'),
(20, 3, 'Keprofesian'),
(21, 3, 'Media Informasi'),
(22, 3, 'Kesejahteraan Mahasiswa'),
(23, 3, 'Minat Bakat'),
(24, 4, 'Kaderisasi'),
(25, 4, 'Hubungan Luar'),
(26, 4, 'Dalam Negeri'),
(27, 4, 'Keprofesian'),
(28, 4, 'Media Informasi'),
(29, 4, 'Minat Bakat'),
(30, 4, 'Kesejahteraan Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_event` int(11) DEFAULT NULL,
  `nama_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_event` int(11) NOT NULL,
  `id_departemen` int(11) DEFAULT NULL,
  `nama_event` varchar(100) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `jam_mulai` time NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_selesai` time NOT NULL,
  `tempat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_event`, `id_departemen`, `nama_event`, `tanggal_mulai`, `jam_mulai`, `tanggal_selesai`, `jam_selesai`, `tempat`) VALUES
(1, 1, 'Kuliah tamu PT Trust Media', '2017-05-15', '10:00:00', '2017-05-15', '12:00:00', 'Aula'),
(2, 1, 'Kunjungan SMA Pelita Harapan', '2017-05-15', '13:00:00', '2017-05-15', '15:00:00', 'Aula Teknik Informatika'),
(3, 3, 'Debat panelis CAKAHIMA', '2017-05-15', '16:00:00', '2017-05-16', '18:00:00', NULL),
(4, 3, 'Tcangkruk', '2017-05-15', '19:00:00', '2017-05-15', '22:00:00', 'Sekretariat HMTC'),
(5, 8, 'Hari Tenang', '2017-05-14', '07:00:00', '2017-05-14', '20:00:00', 'TC'),
(6, 9, 'Ngerjain MPPL', '2017-05-14', '10:00:00', '2017-05-14', '17:00:00', 'RPL'),
(7, 4, 'Ngerjain SE', '2017-05-14', '18:00:00', '2017-05-14', '21:00:00', NULL),
(8, 7, 'Debat Warga', '2017-05-16', '16:00:00', '2017-05-16', '17:00:00', 'Plaza Baru !'),
(9, 3, 'Kampanye Terbuka CAKAHIMA', '2017-05-17', '16:00:00', '2017-05-17', '17:00:00', 'Plaza Lama 1'),
(11, 1, 'Hari Tenang', '2017-05-25', '00:00:00', '2017-05-28', '23:00:00', 'Teknik Informatika'),
(12, 1, 'Masa Gugatan', '2017-05-31', '12:00:00', '2017-05-31', '19:00:00', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `id_kepengurusan` int(11) NOT NULL,
  `nama_kepengurusan` varchar(30) DEFAULT NULL,
  `tahun_mulai` varchar(4) DEFAULT NULL,
  `tahun_berakhir` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepengurusan`
--

INSERT INTO `kepengurusan` (`id_kepengurusan`, `nama_kepengurusan`, `tahun_mulai`, `tahun_berakhir`) VALUES
(1, 'INSPIRASI', '2016', '2017'),
(2, 'OPTIMASI', '2015', '2016'),
(3, 'BERKARYA', '2014', '2015'),
(4, 'BERSAHABAT', '2013', '2014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_anggota`
--

CREATE TABLE `log_anggota` (
  `id_anggota` int(11) NOT NULL,
  `NRP_fk` varchar(15) NOT NULL,
  `id_departemen_fk` int(11) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_event` int(11) DEFAULT NULL,
  `indikator` varchar(100) DEFAULT NULL,
  `bobot` float DEFAULT NULL,
  `nilai` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`NRP`),
  ADD KEY `role` (`role`),
  ADD KEY `NRP` (`NRP`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`),
  ADD KEY `id_kepengurusan` (`id_kepengurusan`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id_kepengurusan`);

--
-- Indexes for table `log_anggota`
--
ALTER TABLE `log_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `NRP_fk` (`NRP_fk`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_departemen_fk` (`id_departemen_fk`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `id_kepengurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `log_anggota`
--
ALTER TABLE `log_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `departemen`
--
ALTER TABLE `departemen`
  ADD CONSTRAINT `departemen_ibfk_1` FOREIGN KEY (`id_kepengurusan`) REFERENCES `kepengurusan` (`id_kepengurusan`);

--
-- Ketidakleluasaan untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `kegiatan` (`id_event`);

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`id_departemen`) REFERENCES `departemen` (`id_departemen`);

--
-- Ketidakleluasaan untuk tabel `log_anggota`
--
ALTER TABLE `log_anggota`
  ADD CONSTRAINT `log_anggota_ibfk_1` FOREIGN KEY (`NRP_fk`) REFERENCES `anggota` (`NRP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `log_anggota_ibfk_2` FOREIGN KEY (`id_departemen_fk`) REFERENCES `departemen` (`id_departemen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `kegiatan` (`id_event`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
