-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mar 2020 pada 12.23
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `kd_buku` varchar(10) NOT NULL,
  `jdl_buku` varchar(20) DEFAULT NULL,
  `pengarang` varchar(20) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `nm_peminjam` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `bts_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`kd_buku`, `jdl_buku`, `pengarang`, `thn_terbit`, `nm_peminjam`, `alamat`, `tgl_pinjam`, `bts_pinjam`) VALUES
('PK00001', 'Laskar Pelangi', 'Andrea Hirata', '2000', 'farid', 'surabaya', '2020-03-03', '2020-03-10'),
('PK00002', 'Laskar Pelangi Sore ', 'NONE', '2002', 'Saya', 'setro', '2020-03-10', '2020-03-17'),
('PK00003', '5 CM', 'Donny Dhirgantoro', '2001', 'Farid', 'setro', '2020-03-17', '2020-03-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(6) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `email`, `password`) VALUES
('admin', 'farid@gmail.com', 'admin'),
('aku', NULL, 'saya'),
('dosen', NULL, 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
