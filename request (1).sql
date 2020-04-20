-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 02:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `request`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `disetujui` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `tipe` varchar(6) NOT NULL,
  `department` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `tipe`, `department`) VALUES
(47, 'admin', 'Admin', 'admin', 'Admin', 'HCD'),
(48, 'Silvianti', 'silvianti', 'CombiRND', 'User', 'RND'),
(49, 'Intan Widia Permatasari', 'intan.permatasari', 'CombiQC', 'User', 'Quality'),
(50, 'Ernawati', 'ernawati', 'CombiPHC', 'User', 'Produksi PHC'),
(51, 'Syahrian', 'syahrian', 'Combiliquid', 'User', 'Produksi Liquid'),
(52, 'Susi Susilawati', 'susi.susilawati', 'Combisolid', 'User', 'Produksi Solid'),
(53, 'Dediyanka', 'dediyanka', 'CombiEHS', 'User', 'EHS'),
(54, 'Ardy', 'ardy', 'Combivalidasi', 'User', 'Validasi'),
(55, 'Gilar', 'gilar', 'Combiutility', 'User', 'Utility'),
(56, 'Novy Trisniyati', 'novi.trisniyati', 'CombiSCM', 'User', 'SCM'),
(57, 'Yuyun Kusmiati', 'yuyuin.kusmiati', 'CombiSCM', 'User', 'SCM'),
(58, 'Aep Rahmat', 'aep.rahmat', 'Combiengineering', 'User', 'Enginering'),
(61, 'Hilman', 'hilman', 'Abc123', 'Atasan', 'Quality'),
(62, 'Gabby', 'gabby', 'Abc123', 'Atasan', 'Produksi PHC'),
(63, 'Arief Budiman', 'arief.budiman', 'Abc123', 'Atasan', 'EHS'),
(64, 'Ardy', 'ardy', 'Abc123', 'Atasan', 'Validasi'),
(65, 'Heru', 'heru', 'Abc123', 'Atasan', 'Utility'),
(66, 'Muklis', 'muklis', 'Abc123', 'Atasan', 'Enginering'),
(67, 'Rai', 'rai', 'Abc123', 'Atasan', 'Liquid OBH'),
(69, 'Rahmat', 'rahmat', 'Abc123', 'Atasan', 'Liquid Ethical'),
(70, 'Syahrian', 'syahrian', 'CombiOBH', 'User', 'Liquid OBH'),
(71, 'Lia', 'lia', 'Combiethical', 'User', 'Liquid Ethical'),
(72, 'Sofa', 'sofa', 'Combiscotts', 'User', 'Liquid Scotts'),
(73, 'Gabby', 'gabby', 'Abc123', 'Atasan', 'Liquid Scotts'),
(74, 'Wahyudin', 'wahyudin', 'Abc123', 'Atasan', 'Produksi Solid'),
(75, 'Ayi', 'ayi', 'Abc123', 'Atasan', 'SCM'),
(76, 'Dedy Akhfa', 'dedy.akhfa', 'Abc123', 'Atasan', 'SCM'),
(77, 'Maulani Nurmalasari', 'mala', 'Admin123', 'Admin', 'HCD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
