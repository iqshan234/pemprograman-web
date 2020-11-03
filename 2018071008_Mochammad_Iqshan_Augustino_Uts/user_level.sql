-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2020 pada 16.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_level`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `suka` varchar(250) NOT NULL,
  `tidak suka` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`nomor`, `nama`, `suka`, `tidak suka`) VALUES
(1, 'Pamali', '✅', '❌'),
(2, 'Amnesia Rebirth', '❌', '✅'),
(3, 'Home Sweet Home', '✅', '❌'),
(4, 'Fall Guys: Ultimate Knockout', '✅', '❌'),
(5, 'WWE 2K BATTLEGROUNDS', '❌', '✅'),
(6, 'Dark Deception', '✅', '❌'),
(7, 'PHASMOBIA', '❌', '✅'),
(8, 'Mortal Kombat 11: Aftermath', '❌', '✅');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list`
--

CREATE TABLE `list` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `genre` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list`
--

INSERT INTO `list` (`nomor`, `nama`, `genre`, `size`) VALUES
(1, 'pamali', 'HOROR', '2GB'),
(2, 'Home Sweet Home', 'HOROR', '11GB'),
(3, 'Fall Guys: Ultimate Knockout', 'ACTION', '3GB'),
(4, 'Dark Deception', 'HOROR', '1GB'),
(5, 'Amnesia Rebirth', 'HOROR', '4GB'),
(6, 'WWE 2K BATTLEGROUNDS', 'Fighting', '9GB'),
(7, 'PHASMOBIA', 'HOROR', '11GB'),
(8, 'Mortal Kombat 11: Aftermath', 'FIGHTING', '103GB'),
(9, 'Pong Game', 'Sport', '20kb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'autogame', 'autogame dx69', 'shan3424', 'admin'),
(2, 'iqshan', 'iqshan334', 'shan3424', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `list`
--
ALTER TABLE `list`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
