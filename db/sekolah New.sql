-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 01:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIG` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `Tingkatan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIG`, `nama`, `tgl_lahir`, `jk`, `alamat`, `kelas`, `Tingkatan`, `nama_jurusan`) VALUES
(1945, 'TATSUMAKI', '2022-08-10', 'laki-laki', '', 'VII', 'SMP', 'TIDAK ADA'),
(2131, 'JUNED', '2022-07-31', 'laki-laki', 'BANTEN', 'VIII', 'SMP', 'TIDAK ADA'),
(43454, 'fsfesfse', '2022-08-29', 'laki-laki', 'fsefsefsefs', 'XII', 'SMA', 'IPS'),
(55555, 'OPIK', '2022-08-03', 'laki-laki', 'bandung', 'XII', 'SMA', 'IPS'),
(66413, 'NATSU', '2022-08-17', 'laki-laki', 'BDG', 'XI', 'SMA', 'IPS'),
(142526, 'DADANG', '2022-08-31', 'laki-laki', 'GARUT', 'X', 'SMA', 'IPA'),
(321313, 'SITI', '2022-08-02', 'perempuan', 'BANDUNG', 'VII', 'SMP', 'TIDAK ADA'),
(786867, 'EDOH', '2022-08-29', 'perempuan', 'KONOHA', 'IX', 'SMP', 'TIDAK ADA'),
(1312313, 'dadwadwd', '2022-08-29', 'laki-laki', 'wadwdw', 'XII', 'SMA', 'IPA'),
(3213213, 'maman', '2022-08-29', 'laki-laki', 'Bandung', 'XI', 'SMA', 'IPA'),
(5632728, 'cepy', '2022-08-11', 'laki-laki', 'pertamina', 'X', 'SMA', 'IPS'),
(7685788, 'usep', '2022-08-16', 'perempuan', 'vijaya', 'XII', 'SMA', 'IPA'),
(87996686, 'gobi', '2022-08-25', 'laki-laki', 'khkhjh', 'XI', 'SMA', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `nama_jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`nama_jurusan`) VALUES
('IPA'),
('IPS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `tingkatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `tingkatan`) VALUES
('IX', 'SMP'),
('VII', 'SMP'),
('VIII', 'SMP'),
('X', 'SMA'),
('XI', 'SMA'),
('XII', 'SMA');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `nama_jurusan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama`, `kelas`, `tgl_lahir`, `jk`, `alamat`, `nama_jurusan`) VALUES
(342, 'ajis', 'VII', '2022-08-27', 'laki-laki', 'DAWDWADWA', NULL),
(34143, 'DSFWFAWFWAF', 'XII', '2022-08-27', 'laki-laki', 'AFWFWAFWAFWAF', 'IPS'),
(54324, 'DASDSAD', 'XI', '2022-08-03', 'laki-laki', 'ASDSADS', 'IPA'),
(123123, 'DAWDWADAWDADAWDAWD', 'X', '2022-08-08', 'laki-laki', 'DAWDWADWAD', 'IPS'),
(123213, 'wawan', 'VII', '2022-08-12', 'laki-laki', 'bogor', NULL),
(125121, 'iman', 'X', '2022-08-03', 'laki-laki', 'bandung', 'IPA'),
(312313, 'Darryl julyansyah', 'X', '2022-08-15', 'laki-laki', 'adsdasda', 'IPA'),
(323232, 'EZA', 'IX', '2022-08-29', 'laki-laki', 'UJUNG BERUNG', NULL),
(1231231, 'rizal', 'VIII', '2022-08-27', 'laki-laki', 'CIANJUR', NULL),
(1245087, 'ujang', 'XII', '2012-09-04', 'laki-laki', 'Bandung', 'IPA'),
(2315515, 'Risqi Andryana', 'VII', '2022-08-29', 'laki-laki', 'QSASsS', NULL),
(4324324, 'ffgsgsegesg', 'XI', '2022-08-27', 'laki-laki', 'fsefsefsefse', 'IPS'),
(8234232, 'MANGKOK', 'VII', '2022-08-29', 'laki-laki', 'BANDUNG', NULL),
(12313231, 'angga', 'VIII', '2022-08-03', 'perempuan', 'q2e2q', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('angga', 'angga'),
('risqi', 'risqi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIG`),
  ADD KEY `kelas` (`kelas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`nama_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `nama_jurusan` (`nama_jurusan`),
  ADD KEY `kelas` (`kelas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `kelas` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`kode_kelas`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `nama_jurusan` FOREIGN KEY (`nama_jurusan`) REFERENCES `jurusan` (`nama_jurusan`),
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`kode_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
