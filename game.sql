-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2021 pada 17.19
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_game`
--

CREATE TABLE `tbl_game` (
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `release_date` date NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `foto_game` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_game`
--

INSERT INTO `tbl_game` (`id_game`, `nama_game`, `platform`, `release_date`, `rating`, `foto_game`) VALUES
(1, 'Pokemon Sword And Shield', 'Nintendo Switch', '2019-11-15', '9.3', 'Pokemon8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pokedex`
--

CREATE TABLE `tbl_pokedex` (
  `id_pokedex` int(11) NOT NULL,
  `no_pokedex` int(11) DEFAULT NULL,
  `nama_pokemon` varchar(255) DEFAULT NULL,
  `foto_pokemon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pokedex`
--

INSERT INTO `tbl_pokedex` (`id_pokedex`, `no_pokedex`, `nama_pokemon`, `foto_pokemon`) VALUES
(1, 1, 'Bulbasaur', '1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pokemon`
--

CREATE TABLE `tbl_pokemon` (
  `id_pokemon` int(11) NOT NULL,
  `judul_pokemon` varchar(255) DEFAULT NULL,
  `gen_pokemon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pokemon`
--

INSERT INTO `tbl_pokemon` (`id_pokemon`, `judul_pokemon`, `gen_pokemon`) VALUES
(1, 'Pokemon Yellow', 'gen 1'),
(2, 'Pokemon Crystal', 'gen 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_syarat`
--

CREATE TABLE `tbl_syarat` (
  `id_syarat` int(11) NOT NULL,
  `id_pokedex` int(11) DEFAULT NULL,
  `id_pokemon` int(11) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_syarat`
--

INSERT INTO `tbl_syarat` (`id_syarat`, `id_pokedex`, `id_pokemon`, `id_type`) VALUES
(1, 1, 1, 3),
(2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_type`
--

CREATE TABLE `tbl_type` (
  `id_type` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_type`
--

INSERT INTO `tbl_type` (`id_type`, `type`) VALUES
(1, 'fire'),
(2, 'thunder'),
(3, 'grass'),
(4, 'water');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_game`
--
ALTER TABLE `tbl_game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indeks untuk tabel `tbl_pokedex`
--
ALTER TABLE `tbl_pokedex`
  ADD PRIMARY KEY (`id_pokedex`);

--
-- Indeks untuk tabel `tbl_pokemon`
--
ALTER TABLE `tbl_pokemon`
  ADD PRIMARY KEY (`id_pokemon`);

--
-- Indeks untuk tabel `tbl_syarat`
--
ALTER TABLE `tbl_syarat`
  ADD PRIMARY KEY (`id_syarat`);

--
-- Indeks untuk tabel `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_game`
--
ALTER TABLE `tbl_game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pokedex`
--
ALTER TABLE `tbl_pokedex`
  MODIFY `id_pokedex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pokemon`
--
ALTER TABLE `tbl_pokemon`
  MODIFY `id_pokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_syarat`
--
ALTER TABLE `tbl_syarat`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
