-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2022 pada 09.04
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harians`
--

CREATE TABLE `harians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `imam_id` bigint(20) UNSIGNED NOT NULL,
  `muadzin_id` bigint(20) UNSIGNED NOT NULL,
  `pengurus_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `harians`
--

INSERT INTO `harians` (`id`, `tanggal`, `imam_id`, `muadzin_id`, `pengurus_id`, `created_at`, `updated_at`) VALUES
(2, '2022-07-22', 1, 1, 1, '2022-07-21 06:10:54', '2022-07-21 06:10:54'),
(3, '2022-07-23', 1, 2, 3, '2022-07-21 18:52:22', '2022-07-21 18:52:22'),
(4, '2022-07-24', 4, 2, 2, '2022-07-21 18:53:20', '2022-07-21 18:53:20'),
(5, '2022-07-25', 6, 1, 3, '2022-07-21 19:03:36', '2022-07-21 19:03:36'),
(6, '2022-07-26', 7, 5, 5, '2022-07-21 19:03:57', '2022-07-21 19:03:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imams`
--

CREATE TABLE `imams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `imams`
--

INSERT INTO `imams` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Tengku Hanan Attaki, Lc.', NULL, NULL),
(2, 'Ustaz H. Abdul Somad Batubara, Lc., D.E.S.A., Ph.D', NULL, NULL),
(4, 'Adi Hidayat, Lc., M.A', '2022-07-21 07:27:56', '2022-07-21 07:27:56'),
(6, 'Muhammad Yahya Waloni', '2022-07-21 07:36:50', '2022-07-21 07:36:50'),
(7, 'Muhammad Rahmat', '2022-07-21 18:17:59', '2022-07-21 18:17:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatans`
--

CREATE TABLE `jabatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatans`
--

INSERT INTO `jabatans` (`id`, `nama_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Ketua', NULL, NULL),
(2, 'Sekretaris', NULL, NULL),
(3, 'Bendahara', NULL, NULL),
(4, 'Anggota', NULL, NULL),
(5, 'Kebersihan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumats`
--

CREATE TABLE `jumats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `imam_id` bigint(20) UNSIGNED NOT NULL,
  `muadzin_id` bigint(20) UNSIGNED NOT NULL,
  `khatib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengurus_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jumats`
--

INSERT INTO `jumats` (`id`, `tanggal`, `imam_id`, `muadzin_id`, `khatib`, `pengurus_id`, `created_at`, `updated_at`) VALUES
(2, '2022-07-17', 2, 2, 'Abu Bakar', 1, '2022-07-21 06:04:25', '2022-07-21 06:04:25'),
(3, '2022-07-29', 6, 5, 'Arman Dahlan', 5, '2022-07-21 18:55:02', '2022-07-21 18:55:02'),
(4, '2022-08-05', 7, 6, 'Sudirman', 4, '2022-07-21 18:55:35', '2022-07-21 18:55:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `tanggal`, `kegiatan`, `jam_mulai`, `jam_selesai`, `created_at`, `updated_at`) VALUES
(1, '2022-08-17', 'Tabligh Akbar Spesial Hari Kemerdekaan', '14:00:00', '15:30:00', '2022-07-21 05:56:02', '2022-07-21 05:56:02'),
(2, '2022-07-21', 'Ceramah Agama oleh Ustadz Syaifullah', '20:10:00', '22:31:00', '2022-07-21 18:32:10', '2022-07-21 18:32:10'),
(3, '2022-07-29', 'Peduli Anak Yatim', '16:20:00', '18:00:00', '2022-07-21 18:34:22', '2022-07-21 18:34:22'),
(4, '2022-07-30', 'Memperingati Tahun Baru Hijriah', '14:36:00', '15:30:00', '2022-07-21 18:36:32', '2022-07-21 18:36:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangans`
--

CREATE TABLE `keuangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masuk` double DEFAULT NULL,
  `keluar` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keuangans`
--

INSERT INTO `keuangans` (`id`, `tanggal`, `keterangan`, `masuk`, `keluar`, `created_at`, `updated_at`) VALUES
(2, '2022-07-21', 'Beli Pengharum Kamar Mandi', NULL, 68000, '2022-07-21 04:28:01', '2022-07-21 04:28:01'),
(3, '2022-07-01', 'Kotak Infaq Bulan Juni', 26360000, NULL, '2022-07-21 05:01:14', '2022-07-21 05:01:14'),
(4, '2022-07-10', 'Infaq Hari Raya Ied Adha', 28600000, NULL, '2022-07-21 18:06:12', '2022-07-21 18:06:12'),
(5, '2022-07-20', 'Pembayaran Listrik dan Air Bulanan', NULL, 12500000, '2022-07-21 18:10:19', '2022-07-21 18:10:19'),
(6, '2022-07-01', 'Gaji Petugas Kebersihan', NULL, 14000000, '2022-07-21 18:11:35', '2022-07-21 18:11:35'),
(7, '2022-07-21', 'Tahlil Jamaah', 4500000, NULL, '2022-07-21 18:13:29', '2022-07-21 18:13:29');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_15_104756_create_penguruses_table', 1),
(6, '2022_07_17_071645_create_keuangans_table', 1),
(7, '2022_07_17_110104_create_harians_table', 1),
(8, '2022_07_17_110358_create_jumats_table', 1),
(9, '2022_07_17_111905_create_imams_table', 1),
(10, '2022_07_17_111944_create_muadzins_table', 1),
(11, '2022_07_17_112012_create_pikets_table', 1),
(12, '2022_07_17_112820_create_jabatans_table', 2),
(13, '2022_07_21_121840_create_kegiatans_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `muadzins`
--

CREATE TABLE `muadzins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `muadzins`
--

INSERT INTO `muadzins` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Suhail Hafidz', NULL, NULL),
(2, 'Ahmad Yunus', NULL, NULL),
(4, 'Naufal Asyraf', '2022-07-21 07:51:06', '2022-07-21 07:53:37'),
(5, 'Satria Ardino', '2022-07-21 18:30:06', '2022-07-21 18:30:06'),
(6, 'Bima Yusuf Saputra', '2022-07-21 18:30:40', '2022-07-21 18:30:40');

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
-- Struktur dari tabel `penguruses`
--

CREATE TABLE `penguruses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penguruses`
--

INSERT INTO `penguruses` (`id`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `jabatan_id`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Naufal Asyraf Idrisa', '2002-08-07', 'L', 1, 'Padang', '2022-07-17 05:25:25', '2022-07-21 04:49:06'),
(2, 'Doni Saputra', '2000-06-22', 'L', 2, 'Padang', '2022-07-21 18:19:20', '2022-07-21 18:19:20'),
(3, 'Budi Setiawan', '1999-06-10', 'L', 4, 'Padang', '2022-07-21 18:23:22', '2022-07-21 18:23:22'),
(4, 'Ryan Wijaya', '1984-02-22', 'L', 3, 'Padang', '2022-07-21 18:27:55', '2022-07-21 18:28:12'),
(5, 'Rivo Gunawan', '1976-06-05', 'L', 5, 'Padang', '2022-07-21 18:29:00', '2022-07-21 18:29:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, NULL),
(3, 'Lois Dibbert', 'arthur.roberts@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-07-21 01:45:07', '2022-07-21 01:45:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `harians`
--
ALTER TABLE `harians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `imams`
--
ALTER TABLE `imams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jumats`
--
ALTER TABLE `jumats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keuangans`
--
ALTER TABLE `keuangans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `muadzins`
--
ALTER TABLE `muadzins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penguruses`
--
ALTER TABLE `penguruses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `harians`
--
ALTER TABLE `harians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `imams`
--
ALTER TABLE `imams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jumats`
--
ALTER TABLE `jumats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `keuangans`
--
ALTER TABLE `keuangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `muadzins`
--
ALTER TABLE `muadzins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penguruses`
--
ALTER TABLE `penguruses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
