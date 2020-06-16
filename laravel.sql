-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Nov 2019 pada 08.15
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `kata_sandi`, `alamat`, `created_at`, `update_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin1', 'adminadminadminadminadminadmiandiamsdinad', '2019-11-08 01:53:36', '0000-00-00 00:00:00'),
(2, 'admin2', 'admin2@gmail.com', 'admin2', 'BLABLABLA', '2019-11-08 10:39:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `balasan`
--

CREATE TABLE `balasan` (
  `id` int(191) NOT NULL,
  `judul_balasan` varchar(191) NOT NULL,
  `deskripsi_balasan` text NOT NULL,
  `penyuluh_id` int(11) NOT NULL,
  `peternak_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(191) NOT NULL,
  `judul_keluhan` varchar(191) NOT NULL,
  `deskripsi_keluhan` text NOT NULL,
  `penyuluh_id` int(11) NOT NULL,
  `peternak_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id`, `judul_keluhan`, `deskripsi_keluhan`, `penyuluh_id`, `peternak_id`, `created_at`, `updated_at`) VALUES
(1, 'a', 's', 2, 1, '2019-11-11 02:49:39', '2019-11-11 02:49:39'),
(2, 'kok gak bisa bisa', 'aslkdnakljsbcoabv oiad\'boiadbv . iadsncpaisnciasncoiaSNCioadhv aspicjaps;cak\'nv\'jcbdnv adiphjcpalmcakl\'ncbuoashbc aoishcjas oicj alic alishcaolncoasihcpais chjaosln\'oalncnsa;skbcas;kcnas;kjnb', 3, 2, '2019-11-17 13:48:28', '2019-11-17 13:48:28'),
(3, 'sd', 'asd', 3, 2, '2019-11-17 13:56:06', '2019-11-17 13:56:06'),
(4, 'vfdgs', 'gfdgfdg', 3, 2, '2019-11-17 13:56:32', '2019-11-17 13:56:32'),
(5, 'ahjbahjb', 'hasbjsbik', 3, 2, '2019-11-17 22:54:03', '2019-11-17 22:54:03'),
(6, 'jadi tuh', 'gini nih pak jadi tuh aku tuh punya masalah mengenai itu tuh pak serius deh pake pada mati smua jadinya', 3, 2, '2019-11-17 23:43:11', '2019-11-17 23:43:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_07_145442_create_penyuluh_table', 1),
(4, '2019_11_07_163921_create_penyuluh_table', 2),
(5, '2019_11_07_164647_create_penyuluh_table', 3),
(6, '2019_11_07_170503_create_penyuluh_table', 4),
(7, '2019_11_07_170739_create_penyuluh_table', 5),
(8, '2019_11_07_171143_create_penyuluh_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyuluh`
--

CREATE TABLE `penyuluh` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyuluh`
--

INSERT INTO `penyuluh` (`id`, `nama`, `email`, `kata_sandi`, `alamat`, `created_at`, `update_at`) VALUES
(2, 'helmi', 'helmi@gmail.com', 'df5ea29924d39c3be8785734f13169c6', 'helmignaidnb', '2019-11-07 18:32:01', '2019-11-07 18:32:01'),
(3, 'haris', 'haris@gmail.com', '12345', 'jalan jalan bae kerjanya', '2019-11-07 17:27:18', '2019-11-07 17:27:18'),
(4, 'bayu', 'bayufasyahadat@gmail.com', '12345', 'komplek komplekannn', '2019-11-07 17:27:41', '2019-11-07 17:27:41'),
(5, 'ferdian', 'ferdi@gmail.com', '6537e99af2c2223642df9f70a0b5afca', 'kiara sari asri', '2019-11-07 17:37:30', '2019-11-07 17:37:30'),
(6, 'abiyyu', 'abiyu@gmail.com', '7acb6b5e4e6a505dc0302abcdbfbef80', 'cimanggu', '2019-11-08 02:34:48', '2019-11-08 02:34:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peternak`
--

CREATE TABLE `peternak` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peternak`
--

INSERT INTO `peternak` (`id`, `nama`, `email`, `kata_sandi`, `alamat`, `created_at`, `update_at`) VALUES
(1, 'augus', 'peternakAugus@gmail.com', 'augusaugus', 'dimanamana hatikusenang', '2019-11-07 18:45:23', '0000-00-00 00:00:00'),
(2, 'asdasd', 'lkasndakjsn@gmail.com', 'c851a9fd59eb3a9185457daa22f95c96', 'wkldnalskndalksn', '2019-11-07 20:10:51', '2019-11-07 20:10:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peternakan`
--

CREATE TABLE `peternakan` (
  `id` int(11) NOT NULL,
  `nama_peternakan` varchar(191) NOT NULL,
  `jumlah_hewan_ternak` int(11) NOT NULL,
  `jenis_hewan_ternak` varchar(191) NOT NULL,
  `peternak_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peternakan`
--

INSERT INTO `peternakan` (`id`, `nama_peternakan`, `jumlah_hewan_ternak`, `jenis_hewan_ternak`, `peternak_id`, `created_at`, `updated_at`) VALUES
(1, 'gembala kehidupan', 100, 'sapi', 2, '2019-11-14 10:49:08', '2019-11-14 10:49:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `judul_tips` varchar(191) NOT NULL,
  `deskripsi_tips` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tips`
--

INSERT INTO `tips` (`id`, `judul_tips`, `deskripsi_tips`, `created_at`, `updated_at`) VALUES
(2, 'Cara merawat Kucing yang baik dan tidak jahat', 'jadi gini nih wkwkwkwpjwnobwobnoanmopwobuuahbhjbddnoiabauvioaniubn', '2019-11-17 16:41:17', '2019-11-17 16:41:17');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `alamat`) VALUES
(2, 'augus', 'augus@gmail.com', NULL, '$2y$10$36CdJDy.HSu.XG.PECy6weWEnWKP0ElT2TmSPpahH.d/YOu2uIvZ.', NULL, '2019-11-14 10:26:53', '2019-11-14 10:26:53', 'adjlabn');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `balasan`
--
ALTER TABLE `balasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penyuluh`
--
ALTER TABLE `penyuluh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peternak`
--
ALTER TABLE `peternak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peternakan`
--
ALTER TABLE `peternakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `balasan`
--
ALTER TABLE `balasan`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penyuluh`
--
ALTER TABLE `penyuluh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `peternak`
--
ALTER TABLE `peternak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peternakan`
--
ALTER TABLE `peternakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
