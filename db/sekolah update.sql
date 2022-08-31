-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 11:06 AM
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
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `mapel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIG`, `nama`, `tgl_lahir`, `jk`, `alamat`, `kelas`, `Tingkatan`, `nama_jurusan`, `mapel`) VALUES
(320987, 'Taufiq', '2022-08-20', 'laki-laki', 'Bandung', 'XI', 'SMA', 'IPS', 'Matematika'),
(321435, 'Fira', '2022-08-06', 'perempuan', 'Bandung', 'IX', 'SMP', 'TIDAK ADA', 'Matematika'),
(321508, 'Opik', '2022-08-15', 'laki-laki', 'Bandung', 'XII', 'SMA', 'IPS', 'Ilmu Pengetahuan Alam'),
(321567, 'Jenny', '2022-08-10', 'perempuan', 'Bandung', 'X', 'SMA', 'IPA', 'Ilmu Pengetahuan Alam'),
(321670, 'Zulkifli', '2022-08-27', 'laki-laki', 'Bandung', 'XII', 'SMA', 'IPS', 'Ilmu Pengetahuan Sosial'),
(321897, 'Morgan', '2022-08-13', 'laki-laki', 'Bandung', 'X', 'SMA', 'IPS', 'Ilmu Pengetahuan Alam'),
(323456, 'Angga', '2022-08-01', 'laki-laki', 'Bandung', 'VII', 'SMP', 'TIDAK ADA', 'Ilmu Pengetahuan Alam'),
(324089, 'Nathan', '2022-08-14', 'laki-laki', 'Bandung', 'XI', 'SMA', 'IPS', 'Ilmu Pengetahuan Alam'),
(324170, 'Wiwin', '2022-08-23', 'perempuan', 'Bandung', 'XI', 'SMA', 'IPA', 'Ilmu Pengetahuan Sosial'),
(324580, 'Yani', '2022-08-25', 'perempuan', 'Bandung', 'X', 'SMA', 'IPS', 'Ilmu Pengetahuan Sosial'),
(325647, 'Eni', '2022-08-05', 'perempuan', 'Bandung', 'VIII', 'SMP', 'TIDAK ADA', 'Matematika'),
(325789, 'Gani', '2022-08-07', 'laki-laki', 'Bandung', 'VII', 'SMP', 'TIDAK ADA', 'Ilmu Pengetahuan Sosial'),
(326540, 'Sasa', '2022-08-19', 'perempuan', 'Bandung', 'X', 'SMA', 'IPS', 'Matematika'),
(326546, 'Cani', '2022-08-03', 'perempuan', 'Bandung', 'IX', 'SMP', 'TIDAK ADA', 'Ilmu Pengetahuan Alam'),
(326547, 'Indah', '2022-08-09', 'perempuan', 'Bandung', 'IX', 'SMP', 'TIDAK ADA', 'Ilmu Pengetahuan Sosial'),
(326578, 'Bani', '2022-08-02', 'laki-laki', 'Bandung', 'VIII', 'SMP', 'TIDAK ADA', 'Ilmu Pengetahuan Alam'),
(326740, 'Ujang', '2022-08-21', 'laki-laki', 'Bandung', 'XII', 'SMA', 'IPS', 'Matematika'),
(326760, 'Virzha', '2022-08-22', 'laki-laki', 'Bandung', 'X', 'SMA', 'IPA', 'Ilmu Pengetahuan Sosial'),
(326780, 'Risqi', '2022-08-18', 'laki-laki', 'Bandung', 'XII', 'SMA', 'IPA', 'Matematika'),
(326789, 'Queen', '2022-08-17', 'perempuan', 'Bandung', 'XI', 'SMA', 'IPA', 'Matematika'),
(327546, 'Hani', '2022-08-08', 'perempuan', 'Bandung', 'VIII', 'SMP', 'TIDAK ADA', 'Ilmu Pengetahuan Sosial'),
(327658, 'Lina', '2022-08-12', 'perempuan', 'Bandung', 'XII', 'SMA', 'IPA', 'Ilmu Pengetahuan Alam'),
(327690, 'Paquito', '2022-08-16', 'laki-laki', 'Bandung', 'X', 'SMA', 'IPA', 'Matematika'),
(327896, 'Darryl', '2022-08-04', 'laki-laki', 'Bandung', 'VII', 'SMP', 'TIDAK ADA', 'Matematika'),
(328960, 'Xavier', '2022-08-24', 'laki-laki', 'Bandung', 'XII', 'SMA', 'IPA', 'Ilmu Pengetahuan Sosial'),
(329086, 'Zaenal', '2022-08-26', 'laki-laki', 'Bandung', 'XI', 'SMA', 'IPS', 'Ilmu Pengetahuan Sosial'),
(329876, 'Karlin', '2022-08-11', 'perempuan', 'Bandung', 'XI', 'SMA', 'IPA', 'Ilmu Pengetahuan Alam');

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
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(321098, 'Sani', 'X', '2022-08-30', 'perempuan', 'Bandung', 'IPS'),
(323490, 'Aji', 'X', '2022-08-31', 'laki-laki', 'Bandung', 'IPA'),
(324578, 'Agus', 'VII', '2022-07-01', 'laki-laki', 'Bali', NULL),
(326123, 'Indah', 'VIII', '2022-07-04', 'perempuan', 'Bandung', NULL),
(326432, 'Anisa', 'VII', '2022-07-02', 'laki-laki', 'Bandung', NULL),
(326543, 'Taufiq', 'VIII', '2022-07-03', 'laki-laki', 'Bandung', NULL),
(326561, 'Ucup', 'XI', '2022-08-23', 'laki-laki', 'Bandung', 'IPA'),
(326759, 'Patsu', 'IX', '2022-07-05', 'laki-laki', 'Osaka', NULL),
(326775, 'Konan', 'XII', '2022-08-26', 'perempuan', 'Bandung', 'IPS'),
(326784, 'Azis', 'XI', '2022-08-29', 'laki-laki', 'Bandung', 'IPS'),
(326789, 'Natsu', 'IX', '2022-07-06', 'laki-laki', 'Akihabara', NULL),
(326908, 'Tobi', 'XII', '2022-08-30', 'laki-laki', 'Bandung', 'IPA'),
(327680, 'Katsu', 'IX', '2022-07-07', 'laki-laki', 'Tokyo', NULL);

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
  ADD KEY `kelas` (`kelas`),
  ADD KEY `mapel` (`mapel`);

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
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`mapel`);

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
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `nama_jurusan` FOREIGN KEY (`nama_jurusan`) REFERENCES `jurusan` (`nama_jurusan`),
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`kode_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
