-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 17 Feb 2018 pada 17.20
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4ia01`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_mhs`
--

CREATE TABLE `jadwal_mhs` (
  `kd_matkul` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `matkul` varchar(30) NOT NULL,
  `jm_masuk` time NOT NULL,
  `jm_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_mhs`
--

INSERT INTO `jadwal_mhs` (`kd_matkul`, `hari`, `matkul`, `jm_masuk`, `jm_keluar`) VALUES
('ITSO003', 'Selasa', 'Softskill', '07:00:00', '10:00:00'),
('TIPW01', 'Senin', 'Pemrograman Web', '00:00:09', '10:00:00'),
('TITK002', 'Senin', 'Teknik Kompilasi', '00:00:07', '00:00:09'),
('TEST', 'Senin', 'Public Speaking', '10:00:00', '12:00:00'),
('TEST01', 'Selasa', 'Teknik Komputer', '10:00:00', '11:11:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
