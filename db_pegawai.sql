-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 11:58 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cuti`
--

CREATE TABLE `tb_cuti` (
  `id` int(10) NOT NULL,
  `jenis_cuti` varchar(45) NOT NULL,
  `keterangan` varchar(45) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `lama_cuti` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cuti`
--

INSERT INTO `tb_cuti` (`id`, `jenis_cuti`, `keterangan`, `tanggal_mulai`, `tanggal_selesai`, `lama_cuti`) VALUES
(8, 'Cuti Sakit', 'Sakit Db', '2016-08-16', '2016-08-27', '11 Hari'),
(17, 'Cuti Tahunan', 'Sakit', '2016-08-05', '2016-08-07', '3 hour'),
(18, 'Cuti Bersalin', 'erf', '2016-08-04', '2016-08-18', 'ref'),
(25, 'Cuti Tahunan', 'fd', '0000-00-00', '0000-00-00', '1'),
(26, 'Cuti Tahunan', 'q', '0000-00-00', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id` int(10) NOT NULL,
  `jabatan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id`, `jabatan`) VALUES
(1, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenjang`
--

CREATE TABLE `tb_jenjang` (
  `sd` int(11) NOT NULL,
  `smp` int(11) NOT NULL,
  `smk` int(11) NOT NULL,
  `sma` int(11) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL,
  `d4` int(11) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL,
  `sp1` int(11) NOT NULL,
  `sp2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterangan_cuti`
--

CREATE TABLE `tb_keterangan_cuti` (
  `cuti_tahunan` int(11) NOT NULL,
  `cuti_sakit` int(11) NOT NULL,
  `cuti_bersalin` int(11) NOT NULL,
  `cuti_besar` int(11) NOT NULL,
  `cuti_dinas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasi`
--

CREATE TABLE `tb_mutasi` (
  `id` int(10) NOT NULL,
  `unit_kerja_lama` varchar(45) NOT NULL,
  `unit_kerja_baru` varchar(45) NOT NULL,
  `jabatan_baru` varchar(45) NOT NULL,
  `keterangan` varchar(45) NOT NULL,
  `tempat_mutasi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mutasi`
--

INSERT INTO `tb_mutasi` (`id`, `unit_kerja_lama`, `unit_kerja_baru`, `jabatan_baru`, `keterangan`, `tempat_mutasi`) VALUES
(1, 'PT.Phapros', 'PT.Java Valley', 'Manager', 'Pindah', 'IT'),
(8, '1', '1', 'Staff', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(10) NOT NULL,
  `nip` int(10) NOT NULL,
  `nama_pegawai` varchar(45) NOT NULL,
  `jk` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `agama` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `telepon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nip`, `nama_pegawai`, `jk`, `status`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telepon`) VALUES
(2, 1, 'tika', 'cewe', 'magang', 'islam', 'smg', '2016-08-10', 'wiroto', '089'),
(3, 222, 'rita', 'perempuan', 'tetap', 'kristen', 'yogja', '2016-08-27', 'sampangan', '089658247178'),
(4, 7515, 'risky', 'laki-laki', 'magang', 'islam', 'smg', '2016-08-24', 'jl.gedung', '089533');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelatihan`
--

CREATE TABLE `tb_pelatihan` (
  `id` int(10) NOT NULL,
  `nama_pelatihan` varchar(45) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `tempat_diklat` varchar(45) NOT NULL,
  `keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`id`, `nama_pelatihan`, `tanggal_mulai`, `tanggal_akhir`, `tempat_diklat`, `keterangan`) VALUES
(1, 'IT', '2016-08-01', '2016-08-02', 'Balaikota', 'Pelatihan '),
(2, '12', '0000-00-00', '0000-00-00', '2', '2'),
(3, '1', '0000-00-00', '0000-00-00', '1', '11'),
(4, 'ert', '2016-08-03', '2016-08-09', 'rty', 'rty');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pensiun`
--

CREATE TABLE `tb_pensiun` (
  `id` int(10) NOT NULL,
  `keterangan` varchar(45) NOT NULL,
  `tahun_pensiun` year(4) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pensiun`
--

INSERT INTO `tb_pensiun` (`id`, `keterangan`, `tahun_pensiun`, `nama`) VALUES
(8, 'Kontrak Habis', 2013, 'Tika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_pendidikan`
--

CREATE TABLE `tb_riwayat_pendidikan` (
  `id` int(10) NOT NULL,
  `tingkat_pendidikan` varchar(45) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `tanggal_ijazah` date NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `tahun_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_riwayat_pendidikan`
--

INSERT INTO `tb_riwayat_pendidikan` (`id`, `tingkat_pendidikan`, `kota`, `jurusan`, `tanggal_ijazah`, `tahun_masuk`, `tahun_lulus`) VALUES
(1, 'SMP', 'Semarang', 'TI', '2016-08-22', 2012, 2011),
(3, 'S1', 'Smg', 'per', '2016-09-23', 2012, 2014),
(4, 'SMA', 'df', 'df', '2016-08-10', 0000, 0000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`) VALUES
(9, '', 'IT', 'admin'),
(10, '', 'HRD-JVT', 'hrdjvt'),
(11, '', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cuti`
--
ALTER TABLE `tb_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_riwayat_pendidikan`
--
ALTER TABLE `tb_riwayat_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cuti`
--
ALTER TABLE `tb_cuti`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_riwayat_pendidikan`
--
ALTER TABLE `tb_riwayat_pendidikan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
