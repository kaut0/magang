-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 04:12 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp3i_mataram`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_person`
--

CREATE TABLE `contact_person` (
  `id` int(11) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `tanya` varchar(50) NOT NULL,
  `jawab` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `tanya`, `jawab`) VALUES
(6, 'makana', 'kkkkmcsoksak'),
(9, 'makanaskcakc', 'manakakco[sa[c');

-- --------------------------------------------------------

--
-- Table structure for table `no_hp`
--

CREATE TABLE `no_hp` (
  `id` int(11) NOT NULL,
  `nomor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_hp`
--

INSERT INTO `no_hp` (`id`, `nomor`) VALUES
(1, '6285237238081');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `nama` varchar(20) NOT NULL,
  `bukti_tf` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`nama`, `bukti_tf`, `status`) VALUES
('rudi', 'bukti/3.PNG', 'Sudah Bayar'),
('zil', 'bukti/bukti.jpg', 'Sudah Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(15) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `deskripsi`, `tgl`) VALUES
(2, 'makan2', 'bakso goreng adalah bakso yang di goreng', '2020-09-24'),
(3, 'kok aku', 'ganteng banget sih', '2020-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `no_pendaftaran` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(16) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`no_pendaftaran`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `email`, `tgl_daftar`, `jurusan`, `jenis_kelamin`) VALUES
(13, '', '', '0000-00-00', '', '', '', '2020-08-21', 'Pilih Jurusan', 'Laki-Laki'),
(15, 'jsojcoa', 'csajcos', '2020-08-22', 'opcsao', 'csjoaj', 'csoajoc', '2020-08-21', 'S1 ILKOM', 'Perempuan'),
(18, 'zil', 'csaopj', '2020-08-22', 'karang bagu', 'kepo lu bgsat', 'icshaih', '2020-08-21', 'S1 ILKOM', 'Laki-Laki'),
(19, 'rudi', 'odjwaojd', '2020-08-25', 'doajsdo', 'ndopand', 'dopwjaopdj', '2020-08-25', 'D3 MI', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` enum('Admin','Pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'aku', 'admin', 'Pegawai'),
(4, 'aku', 'dia', 'Pegawai'),
(5, 'pass', 'pass', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_person`
--
ALTER TABLE `contact_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `no_hp`
--
ALTER TABLE `no_hp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`no_pendaftaran`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_person`
--
ALTER TABLE `contact_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `no_hp`
--
ALTER TABLE `no_hp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `nama` FOREIGN KEY (`nama`) REFERENCES `registrasi` (`nama`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
