-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 04:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_infinite`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` char(10) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `jurusan` varchar(64) DEFAULT NULL,
  `gambar` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nim`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(5, '11-2003014', 'Rafi', 'alfatih@google.com', 'TIF', 'img/CariData.jpg'),
(8, '11-202020', 'rafi', 'alfatih@google.com', 'TIF', 'img/logoapotek.jpg'),
(9, '11-2002020', 'labi', 'labi@mgm.com', 'KAB', 'img/CariData.jpg'),
(10, '11-2003014', 'Rafi', 'alfatih@google.com', 'TIF', 'img/CariData.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'rafi', '$2y$10$onxmzIA6Cm861PvTWFuuO.DocT2NIqnfCbyBpQYsVCeoSrfOnIbQa'),
(2, 'alfatih', '$2y$10$SPYxOOG7PRD41iDTnKj5XOlMn2baAslQLsykUfym4vpMoaoSVaaxa'),
(3, 'rafialfatih', '$2y$10$uhNEs8xKEFTXxhLiAwt2muOZfF4CuKFFMGRdM7iyIjPxwQQzNQXK.'),
(4, 'alfatihrafi', '$2y$10$fMALQjJOY4nqJFt6mqq39.y0mw2hkDxceKgEVOROhYEgxmNFfJS7u'),
(5, 'rafirafi', '$2y$10$Q5FMI4bs6WXVv0fqNyfq8eeuhAba2DXAAt76BxcOkl7rtAXJqgkvK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
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
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
