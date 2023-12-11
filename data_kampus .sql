-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 10:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `nip_dosen` varchar(50) NOT NULL,
  `jurusan_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nama_dosen`, `nip_dosen`, `jurusan_dosen`) VALUES
(1, 'rasudin', '1002934124', 'tata boga'),
(2, 'zia', '123123123', 'tata boga'),
(3, 'mahyus', '909213142', 'seni tari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(50) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `jurusan_matkul` varchar(100) NOT NULL,
  `sks` int(5) NOT NULL,
  `dosen_nip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`id_matkul`, `kode_matkul`, `nama_matkul`, `jurusan_matkul`, `sks`, `dosen_nip`) VALUES
(1, 'dik101', 'Mikrobiologi Pangan', 'tata boga', 3, '1002934124'),
(2, 'dik102', 'Teknologi Pangan', 'tata boga', 3, '123123123'),
(3, 'dik302', 'Manajemen Tari', 'seni tari', 3, '909213142');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `id_mhs` int(11) NOT NULL,
  `mhs_id` varchar(100) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim_mhs` varchar(50) NOT NULL,
  `noHp_mhs` varchar(100) NOT NULL,
  `jurusan_mhs` varchar(100) NOT NULL,
  `jk_mhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`id_mhs`, `mhs_id`, `nama_mhs`, `nim_mhs`, `noHp_mhs`, `jurusan_mhs`, `jk_mhs`) VALUES
(4, 'mhs-17022793372023', 'rijalul akhri', '2108001010009', '082274435451', 'tata boga', 'laki-laki'),
(5, 'mhs-17022833182023', 'najmu', '2208001010008', '0980734675', 'seni tari', 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trx`
--

CREATE TABLE `tb_trx` (
  `id_trx` varchar(255) NOT NULL,
  `matkul_kode` varchar(50) NOT NULL,
  `tugas` varchar(50) NOT NULL,
  `uts` varchar(50) NOT NULL,
  `uas` varchar(50) NOT NULL,
  `mhs_nim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_trx`
--

INSERT INTO `tb_trx` (`id_trx`, `matkul_kode`, `tugas`, `uts`, `uas`, `mhs_nim`) VALUES
('mhs-17022793372023', 'dik101', '', '', '', '2108001010009'),
('mhs-17022833182023', 'dik302', '100', '100', '100', '2208001010008');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jurusan_user` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jk_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nip`, `nama_user`, `username`, `password`, `jurusan_user`, `level`, `jk_user`) VALUES
(2, '2812301321', 'akhri', 'akhri', '$2y$10$RvlN9Q6uS13loNe78a4N1O2dsSnwVEAI/5KsRyEGccfbwyMJykg/S', 'akustik', '1', 'laki-laki'),
(6, '1002934124', 'rasudin', 'rasudin', '$2y$10$PbKkoAhiJOe6ZtgSuNojYuoEvDvBX14PldnjdNVjejfFc/vWvk1pG', 'tata boga', '3', 'laki-laki'),
(7, '123123123', 'zia', 'zia', '$2y$10$QeXMGqJMkilT1OLWTw354uw1Hb6YQc9r9k4.MZfszR/VqnKxKpfJa', 'tata boga', '3', 'laki-laki'),
(9, NULL, 'rijalul akhri', 'rijalul210009', '$2y$10$kVXlIRQaPAYjGCZG33syv.bLvBKvOyXTnb8Wv0LUIBbjHallSVC7C', 'tata boga', '4', 'laki-laki'),
(10, '', 'najmu', 'najmu', '$2y$10$vdN95VICo9BGc8T1OpkkFuOixVVCK07sFr7pU.f8HAalsjIXxzU5a', 'seni tari', '4', 'perempuan'),
(11, '909213142', 'mahyus', 'mahyus', '$2y$10$14/d83BHWS8a4K16eY70QO0KdUodF4cgFBeBTPIFaAgayOIgAIGGa', 'seni tari', '3', 'laki-laki'),
(12, NULL, 'najmu', 'najmu220008', '$2y$10$dBX9IEQI0p3aTN9cfZNE2ejFBop7.qk9b6P9r3ngQ9asW5eg/Xl8u', 'seni tari', '4', 'perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_trx`
--
ALTER TABLE `tb_trx`
  ADD PRIMARY KEY (`id_trx`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
