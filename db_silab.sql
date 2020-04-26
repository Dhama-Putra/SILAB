-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 08:02 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_silab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset`
--

CREATE TABLE `tb_aset` (
  `kode_aset` int(20) NOT NULL,
  `id_lokasi` int(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `spesifikasi` text NOT NULL,
  `jumlah` int(20) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aset`
--

INSERT INTO `tb_aset` (`kode_aset`, `id_lokasi`, `nama_barang`, `spesifikasi`, `jumlah`, `satuan`, `keterangan`, `foto`) VALUES
(6, 1, 'LCD Monitor', 'LCD Monitor 19 inchi, warna hitam', 10, 'buah', 'baik', 'Monitor_PC_BenQ_LCD_19_Inch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(10) NOT NULL,
  `id_prodi` int(10) NOT NULL,
  `nama_lab` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `id_prodi`, `nama_lab`) VALUES
(1, 1, 'Lab 1 FTK C'),
(2, 1, 'Lab 2 FTK B'),
(3, 1, 'Lab Jaringan'),
(4, 2, 'Lab 1 FTK C'),
(5, 2, 'Lab 2 FTK B'),
(6, 2, 'Lab SI/Ilkom'),
(7, 3, 'Lab SI/Ilkom'),
(8, 4, 'Lab LCI'),
(9, 5, 'Lab 1 Elektronika'),
(10, 5, 'Lab 2 Listrik'),
(11, 5, 'Lab Multimedia'),
(12, 6, 'Lab 1 Elektronika'),
(13, 6, 'Lab 2 Listrik'),
(14, 6, 'Lab Multimedia '),
(16, 8, 'Lab Busana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelaporan`
--

CREATE TABLE `tb_pelaporan` (
  `id_laporan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tgl_lapor` date NOT NULL,
  `kode_aset` int(20) NOT NULL,
  `deskripsi_laporan` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggapan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(10) NOT NULL,
  `nama_prodi` varchar(200) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `fakultas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`, `jurusan`, `fakultas`) VALUES
(1, 'Manajemen Informatika', 'Teknik Informatika', 'Fakultas Teknik Kejuruan'),
(2, 'Ilmu Komputer', 'Teknik Informatika', 'Fakultas Teknik Kejuruan'),
(3, 'Sistem Informasi', 'Teknik Informatika', 'Fakultas Teknik Kejuruan'),
(4, 'Pendidikan Teknik Informatika', 'Teknik Informatika', 'Fakultas Teknik Kejuruan'),
(5, 'Pendidikan Teknik Elektro', 'Teknologi Industri', 'Fakultas Teknik Kejuruan'),
(6, 'Teknik Elektro', 'Teknologi Industri', 'Fakultas Teknik Kejuruan'),
(7, 'Pendidikan Teknik Mesin', 'Teknologi Industri', 'Fakultas Teknik Kejuruan'),
(8, 'Pendidikan Kesejahtraan Keluarga', 'Teknologi Industri', 'Fakultas Teknik Kejuruan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `password`, `jabatan`) VALUES
(1, 'dhmptr', 'dhmptr0406', 'Admin 1'),
(2, 'ngurah', 'ngurah123', 'Admin 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aset`
--
ALTER TABLE `tb_aset`
  ADD PRIMARY KEY (`kode_aset`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_pelaporan`
--
ALTER TABLE `tb_pelaporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aset`
--
ALTER TABLE `tb_aset`
  MODIFY `kode_aset` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_pelaporan`
--
ALTER TABLE `tb_pelaporan`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
